loadPageNumber();
loadCarousel();
var pagesCount = 0;
var itemsPerPage = 20;
var currentPage = 1;
function loadPageNumber(){
		$.ajax({ 
             type: "GET",
             dataType: "json",
             url: SERVER_URL + "/movies/count",
             success: function(data){
				var count = parseInt(data.count);
				pagesCount = Math.ceil(count / itemsPerPage);
				selectedPage = 0;
				var indexVariableText = getUrlVars()["index"];
				if(Number.isInteger(parseInt(indexVariableText))){
					selectedPage = parseInt(indexVariableText);
				}
				if(selectedPage > 0 && selectedPage <= pagesCount){
					currentPage = selectedPage;
				}
				loadPage(currentPage);
             }
         });
}
function loadPage(page){
	if(currentPage != page){
		window.location.search = jQuery.query.set("index", page);
	}
	currentPage = page;
	$("#pagination-container").empty();
	var x = 0;
	if(currentPage > 4){
		$("#pagination-container").append("<button type=\"button\" class=\"btn\" onclick=\"loadPage(1)\">" + "<<" + "</button>");
	}
	for(x = currentPage - 5; x < currentPage + 5; x++){
		if(x >= 0 && x < pagesCount){
			$("#pagination-container").append("<button type=\"button\" class=\"btn\" onclick=\"loadPage(" + (x + 1) + ")\">" + (x + 1) + "</button>");
		}
	}
	if(currentPage < pagesCount - 5){
		$("#pagination-container").append("<button type=\"button\" class=\"btn\" onclick=\"loadPage(" + pagesCount + ")\">" + ">>" + "</button>");
	}
	loadMovies();	
}
function loadMovies(){
	$("#pagination-container").hide();
	$.ajax({ 
             type: "GET",
             dataType: "json",
             url: SERVER_URL + "/movies/listPage/" + currentPage,
             success: function(data){
				showMovieList(data);
             }
         });
}
function loadCarousel(){
	$.ajax({ 
             type: "GET",
             dataType: "json",
             url: SERVER_URL + "/movies/listCarousel",
             success: function(data){
				for(var x in data.movieList) {
					var movie = data.movieList[x];
					var active = '';
					if(x == 0){
						active = ' active';
					}
					$("#carousel-movies-list").append("<div data-toggle=\"tooltip\" title=\"" + movie.title + "\" class=\"carousel-item" + active + "\"> <img src=\"" + movie.image + "\"\> </div>");
				}
             }
         });
}
function showMovieList(data){
	$("#movies").empty();
	for(var x in data.movieList) {
		var movie = data.movieList[x];
		$("#movies").append("<a href=\"?page=movie&movieId=" + movie.movieId + "\"> <div class=\"card\" data-toggle=\"tooltip\" title=\"" + movie.title + "\" style=\"width: 18rem;\"> <img class=\"card-img-top\" src=\"" + movie.image + "\" alt=\"" + movie.title + "\"> <div class=\"card-body\"> <h5 class=\"card-title\">" + movie.title + "</h5> <p class=\"card-text\"> <h6><b>A&ntilde;o:</b> " + movie.year + "</h6> <h6><b>Puntuaci&oacute;n:</b> " + movie.rating.toFixed(2) + "</h6> </div> </div> </a>");
	}
	$("#pagination-container").show();
}
function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}