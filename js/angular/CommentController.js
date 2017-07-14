angular.module("peliculas", ['ngResource'])

.factory("Post",function($resource){
  return $resource("http://api.themoviedb.org/3/discover/movie?api_key=0d043e6f7bc2101edbeabfe13b4204a2",{},{
    query:{method: "GET",isArray:false}
  });
})



.controller("CommentController",function($scope,Post){
  $scope.arreglo=[];
  $scope.fecha=[];
  $scope.cont=150;
  $scope.ver = function(){

    console.log($scope.nombre);
    let hoy = new Date();
    let dd = hoy.getDate();
    let mm = hoy.getMonth()+1; //hoy es 0!
    let yyyy = hoy.getFullYear();

    if(dd<10) {
        dd='0'+dd
    }

    if(mm<10) {
        mm='0'+mm
    }

    hoy = mm+'/'+dd+'/'+yyyy;
    $scope.fecha=hoy;
    console.log($scope.fecha);
    $scope.arreglo.push({post:$scope.nombre});
    let val= document.querySelector("#comment");
    val.value="";
    $scope.cont=150;
  }

  $scope.tam = function(){
    let valor= document.querySelector("#comment");
    if($scope.cont>0){
  		$scope.cont=$scope.cont-1;
  	}
    if(valor.value==""){
    	$scope.cont=150;
    }
    console.log($scope.cont);
  }
  Post.query(function(data){
    $scope.movies = data.results;
    console.log($scope.movies);
  });

});
