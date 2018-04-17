<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script type="text/javascript" src="js/popular_movies.js"></script>
<link rel="stylesheet" href="css/popular_movies.css">
<script type="text/javascript">
	function initCarousel(){
		var elem = document.querySelector('.main-carousel');
		var flkty = new Flickity( elem, {
		  // options
		  cellAlign: 'left',
		  contain: true
		});
		var flkty = new Flickity( '.main-carousel', {
		  // options
		});
	}
</script>
<div class="page-container" onload="initCarousel()">
	<div id="currentPage"><h6><u><a href="?page=home">Inicio</a></u> > <u><a href="#">Peliculas</a></u> > Peliculas mejor valoradas</h6></div>
	<h2>Peliculas mejor valoradas</h2>
	<!--<div id="movies-carousel">
		<div class="main-carousel">
			<div class="carousel-cell"><img src="https://ia.media-imdb.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="Movie image 1"></div>
			<div class="carousel-cell"><img src="https://ia.media-imdb.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="Movie image 2"></div>
			<div class="carousel-cell"><img src="https://ia.media-imdb.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="Movie image 3"></div>
		</div>
	</div>-->
	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	<div class="input-group" style="width: 20em">
		<input type="text" class="form-control" placeholder="Buscar películas" aria-describedby="basic-addon1">
	</div>
	<div id="order-by-movie" style="margin-top: 1em">
		Ordenar por:
		<input type="radio" class="radio" value="1" style="margin-left: 1em" name="order_radio"/>Titulo</label>
		<input type="radio" class="radio" value="2"  style="margin-left: 1em" name="order_radio"/>Fecha de estreno</label>
		<input type="radio" class="radio" value="3"  style="margin-left: 1em" name="order_radio" />Puntuación</label>
	</div>
	<div id="movies">
		<a href="?page=movie">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="https://ia.media-imdb.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="Movie image 1">
			  <div class="card-body">
				<h5 class="card-title">Cadena perpetua</h5>
				<p class="card-text">
					<h6><b>Año:</b> 1994</h6>
					<h6><b>Puntuación:</b> 9,2</h6>
				</div>
			</div>
		</a>
		<a href="?page=movie">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="https://ia.media-imdb.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="Movie image 1">
			  <div class="card-body">
				<h5 class="card-title">Cadena perpetua</h5>
				<p class="card-text">
					<h6><b>Año:</b> 1994</h6>
					<h6><b>Puntuación:</b> 9,2</h6>
				</div>
			</div>
		</a>
		<a href="?page=movie">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="https://ia.media-imdb.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="Movie image 1">
			  <div class="card-body">
				<h5 class="card-title">Cadena perpetua</h5>
				<p class="card-text">
					<h6><b>Año:</b> 1994</h6>
					<h6><b>Puntuación:</b> 9,2</h6>
				</div>
			</div>
		</a>
		<a href="?page=movie">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="https://ia.media-imdb.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="Movie image 1">
			  <div class="card-body">
				<h5 class="card-title">Cadena perpetua</h5>
				<p class="card-text">
					<h6><b>Año:</b> 1994</h6>
					<h6><b>Puntuación:</b> 9,2</h6>
				</div>
			</div>
		</a>
		<a href="?page=movie">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="https://ia.media-imdb.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="Movie image 1">
			  <div class="card-body">
				<h5 class="card-title">Cadena perpetua</h5>
				<p class="card-text">
					<h6><b>Año:</b> 1994</h6>
					<h6><b>Puntuación:</b> 9,2</h6>
				</div>
			</div>
		</a>
		<a href="?page=movie">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="https://ia.media-imdb.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="Movie image 1">
			  <div class="card-body">
				<h5 class="card-title">Cadena perpetua</h5>
				<p class="card-text">
					<h6><b>Año:</b> 1994</h6>
					<h6><b>Puntuación:</b> 9,2</h6>
				</div>
			</div>
		</a>
		<a href="?page=movie">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="https://ia.media-imdb.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="Movie image 1">
			  <div class="card-body">
				<h5 class="card-title">Cadena perpetua</h5>
				<p class="card-text">
					<h6><b>Año:</b> 1994</h6>
					<h6><b>Puntuación:</b> 9,2</h6>
				</div>
			</div>
		</a>
	</div>
</div>