<script type="text/javascript" src="js/movie.js"></script>
<link rel="stylesheet" href="css/movie.css">
<div class="page-container">
	<h2 id="movie-title"></h2>
	<div id="movie-info">
		<div id="movie-image" style="padding-bottom: 1em;">
			<img style="margin-left: 1em; margin-top: 1em;" id="movie-image-container"></img>
		</div>
		<div id="movie-content">
			<div id="movie-data">
				<h5><b>Posición Ranking: </b> <input type="text" id="rankingField"></input></h5>
				<h5><b>Puntuación: </b> <input type="text" id="scoreField"></input></h5>
				<h5><b>Año: </b> <input type="text" id="yearField"></input></h5></h5>
				<h5><b>Reparto: </b><input type="text" id="starsField"></input></h5>
				</h5>
			</div>
		</div>
	</div>
	<div id="button-container">
				<button type="button" class="btn btn-success" data-toggle="tooltip" title="Ver ficha en IMDB">Ver ficha en IMDB</button>
				<button type="button" class="btn btn-info" data-toggle="tooltip" title="Actualizar">Actualizar</button>
				<button type="button" class="btn btn-danger" data-toggle="tooltip" title="Borrar">Borrar</button>
	</div>
</div>