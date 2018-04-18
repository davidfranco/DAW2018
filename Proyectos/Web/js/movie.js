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
var actionInCourse = false;
function deleteMovie(){
	if(actionInCourse){
		return;
	}
	actionInCourse = true;
	var movieId = parseInt(getUrlVars()["movieId"]);
	var url = SERVER_URL + "/movies/" + movieId;
	$.ajax({
		url: url,
		method: "DELETE",
        dataType: "json",
		success: function(data){
			window.location.search = jQuery.query.set("page", "popular_movies");
        }
     });
}
function updateMovie(){
	var place = $("#rankingField").val();
	var score = $("#scoreField").val();
	var year = $("#yearField").val();
	var stars = $("#starsField").val();
	if(place == null || score == null || year == null || stars == null || place < 0 || score > 10 || score < 0 || year < 0 || stars == ''){
		window.alert("Rellene todos los campos correctamente.");
		return;
	}
	if(actionInCourse){
		return;
	}
	actionInCourse = true;
	var movieId = parseInt(getUrlVars()["movieId"]);
	var url = SERVER_URL + "/movies/" + movieId;
	var data = {
		"ranking": parseInt(place),
		"score": parseFloat(score),
		"year": parseInt(year),
		"starCast": stars
	};
	$.ajax({
		url: url,
		method: "PUT",
        data: JSON.stringify(data),
        dataType: 'json',
        contentType: "application/json",
		success: function(data){
			location.reload();
        },
		 error: function(XMLHttpRequest, textStatus, errorThrown) {
			 actionInCourse = false;
			alert("No se pudo actualizar la pelicula.");
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