<script type="text/javascript" src="js/popular_movies.js"></script>
<link rel="stylesheet" href="css/popular_movies.css">
<div class="page-container" onload="initCarousel()">
	<div id="currentPage"><h6><u><a href="?page=home">Inicio</a></u> > <u><a href="#">Peliculas</a></u> > Peliculas mejor valoradas</h6></div>
	<h2>Peliculas mejor valoradas</h2>
	<div id="movies-carousel">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner" style="text-align: center" id="carousel-movies-list">
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	<div class="input-group" style="width: 20em">
		<input type="text" id="searchField" class="form-control" placeholder="Buscar películas" aria-describedby="basic-addon1" onchange="loadPageNumber();">
	</div>
	<div id="order-by-movie" style="margin-top: 1em">
		Ordenar por:
		<input type="radio" class="radio" value="3" style="margin-left: 1em" name="order_radio" id="order-button-3" onclick="setOrder()"/>Titulo</label>
		<input type="radio" class="radio" value="2"  style="margin-left: 1em" name="order_radio" id="order-button-2" onclick="setOrder()"/>Fecha de estreno</label>
		<input type="radio" class="radio" value="1"  style="margin-left: 1em" name="order_radio" id="order-button-1"  onclick="setOrder()"/>Puntuación</label>
	</div>
	<div id="movies">
	</div>
	<div id="pagination-container" style="text-align: center;">
		
	</div>
</div>