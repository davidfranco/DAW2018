loadMovieData();
function loadMovieData(){
	var movieId = parseInt(getUrlVars()["movieId"]);
	$.ajax({ 
             type: "GET",
             dataType: "json",
             url: SERVER_URL + "/movies/" + movieId,
             success: function(data){
				$("#movie-title").text(data.title);
				$("#movie-image-container").attr("src",data.image);
				$("#rankingField").val(data.place);
				$("#scoreField").val(data.rating);
				$("#yearField").val(data.year);
				$("#starsField").val(data.starsCast);
				$("#movie-image-container").attr("data-toggle","tooltip");
				$("#movie-image-container").attr("title",data.title);
             }
         });
}
function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}