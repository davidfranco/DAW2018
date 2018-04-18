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
				<h5><b>Posición Ranking: </b> <input type="number" id="rankingField" min="1"></input></h5>
				<h5><b>Puntuación: </b> <input type="number" id="scoreField" step="0.01" max="10" min="0"></input></h5>
				<h5><b>Año: </b> <input type="number" id="yearField" step="1" min="0"></input></h5></h5>
				<h5><b>Reparto: </b><input type="text" id="starsField" maxlength="400"></input></h5>
				</h5>
			</div>
		</div>
	</div>
	<div id="button-container">
				<button type="button" class="btn btn-success" data-toggle="tooltip" title="Ver ficha en IMDB">Ver ficha en IMDB</button>
				<button type="button" class="btn btn-info" data-toggle="tooltip" title="Actualizar" onclick="updateMovie()">Actualizar</button>
				<button type="button" class="btn btn-danger" title="Borrar" data-toggle="modal" data-target="#deleteModal">Borrar</button>
	</div>
	<div class="modal" tabindex="-1" role="dialog" id="deleteModal">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Borrar pelicula</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<p>¿Seguro que deseas borrar la pelicula?</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-danger" onclick="deleteMovie()">Borrar</button>
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		  </div>
		</div>
	  </div>
	</div>
</div>