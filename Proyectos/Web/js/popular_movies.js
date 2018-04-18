loadMovies();
function loadMovies(){
	$.ajax({ 
             type: "GET",
             dataType: "json",
             url: SERVER_URL + "/movies/listAll",
             success: function(data){
				showMovieList(data);
             }
         });
}
function showMovieList(data){
	for(var x in data.movieList) {
		var movie = data.movieList[x];
		$("#movies").append("<a href=\"?page=movie\"> <div class=\"card\" style=\"width: 18rem;\"> <img class=\"card-img-top\" src=\"" + movie.image + "\" alt=\"" + movie.title + "\"> <div class=\"card-body\"> <h5 class=\"card-title\">" + movie.title + "</h5> <p class=\"card-text\"> <h6><b>A&ntilde;o:</b> " + movie.year + "</h6> <h6><b>Puntuaci&oacute;n:</b> " + movie.rating.toFixed(2) + "</h6> </div> </div> </a>");
	}
}