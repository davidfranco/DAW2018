package es.skills2018.api.resources;

import java.sql.Connection;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.Response;

import es.skills2018.api.beans.Movie;
import es.skills2018.api.dao.MovieDAO;
import es.skills2018.api.database.DatabaseObject;
import es.skills2018.api.enums.CustomMediaType;
import es.skills2018.api.enums.SearchFilter;
import es.skills2018.api.filters.MovieFilter;
import es.skills2018.api.response.MovieResponse;
import es.skills2018.api.utils.ServerConstants;

@Path("/movies")
public class MovieResource {

	/**
	 * This EndPoint gets called to get a list of all the available movies.
	 */
	@GET
	@Path("/listAll")
	@Produces(CustomMediaType.APPLICATION_JSON)
	public Response listAll() {
		Connection connection;
		try {
			// We return the connection from the connection pool
			connection = new DatabaseObject().getConnection();
		} catch (SQLException e) {
			return Response.status(Response.Status.INTERNAL_SERVER_ERROR).entity("Database Error").build();
		}
		// Movie DAO Construct
		MovieDAO movieDAO = new MovieDAO(connection);
		// We return all the movies using an empty filter
		List<Movie> returnedMovies = movieDAO.findAll(new MovieFilter(new Movie()), -1, -1, -1);
		if (returnedMovies == null) {
			releaseConnection(connection);
			return Response.status(Response.Status.INTERNAL_SERVER_ERROR).entity("Database Error").build();
		}
		releaseConnection(connection);
		MovieResponse.List response = new MovieResponse.List((ArrayList<Movie>) returnedMovies);
		return Response.status(Response.Status.OK).entity(response).header("Access-Control-Allow-Origin", "*").build();
	}

	/**
	 * This EndPoint gets called to list movies by page
	 */
	@GET
	@Path("/listPage/{pageId : \\d+}")
	@Produces(CustomMediaType.APPLICATION_JSON)
	public Response listPage(@PathParam("pageId") int pageId) {
		return listOrderedPage(pageId, -1);
	}
	/**
	 * This EndPoint gets called to list movies by page order
	 */
	@GET
	@Path("/listPage/{pageId : \\d+}/{order : \\d+}")
	@Produces(CustomMediaType.APPLICATION_JSON)
	public Response listOrderedPage(@PathParam("pageId") int pageId, @PathParam("order") int order) {
		Connection connection;
		try {
			// We return the connection from the connection pool
			connection = new DatabaseObject().getConnection();
		} catch (SQLException e) {
			return Response.status(Response.Status.INTERNAL_SERVER_ERROR).entity("Database Error").build();
		}
		// Movie DAO Construct
		MovieDAO movieDAO = new MovieDAO(connection);
		// We return all the movies using an empty filter
		List<Movie> returnedMovies = movieDAO.findAll(new MovieFilter(new Movie()), ((pageId - 1) * ServerConstants.ITEMS_PER_PAGE), ServerConstants.ITEMS_PER_PAGE, order);
		if (returnedMovies == null) {
			releaseConnection(connection);
			return Response.status(Response.Status.INTERNAL_SERVER_ERROR).entity("Database Error").build();
		}
		releaseConnection(connection);
		MovieResponse.List response = new MovieResponse.List((ArrayList<Movie>) returnedMovies);
		return Response.status(Response.Status.OK).entity(response).header("Access-Control-Allow-Origin", "*").build();
	}
	/**
	 * This EndPoint gets called to get a list the carousel movies.
	 */
	@GET
	@Path("/listCarousel")
	@Produces(CustomMediaType.APPLICATION_JSON)
	public Response listCarousel() {
		Connection connection;
		try {
			// We return the connection from the connection pool
			connection = new DatabaseObject().getConnection();
		} catch (SQLException e) {
			return Response.status(Response.Status.INTERNAL_SERVER_ERROR).entity("Database Error").build();
		}
		// Movie DAO Construct
		MovieDAO movieDAO = new MovieDAO(connection);
		// We return all the movies using an empty filter
		List<Movie> returnedMovies = movieDAO.findAll(new MovieFilter(new Movie()), -1, 5, -1);
		if (returnedMovies == null) {
			releaseConnection(connection);
			return Response.status(Response.Status.INTERNAL_SERVER_ERROR).entity("Database Error").build();
		}
		releaseConnection(connection);
		MovieResponse.List response = new MovieResponse.List((ArrayList<Movie>) returnedMovies);
		return Response.status(Response.Status.OK).entity(response).header("Access-Control-Allow-Origin", "*").build();
	}

	/**
	 * This EndPoint gets called to get a list of all the available movies.
	 */
	@GET
	@Path("/{movieId : \\d+}")
	@Produces(CustomMediaType.APPLICATION_JSON)
	public Response get(@PathParam("movieId") int movieId) {
		Connection connection;
		try {
			// We return the connection from the connection pool
			connection = new DatabaseObject().getConnection();
		} catch (SQLException e) {
			return Response.status(Response.Status.INTERNAL_SERVER_ERROR).entity("Database Error").build();
		}
		// Movie DAO Construct
		MovieDAO movieDAO = new MovieDAO(connection);
		// We create the filter bean
		Movie filterMovie = new Movie();
		filterMovie.setMovieId(movieId);
		// Movie filter
		MovieFilter movieFilter = new MovieFilter(filterMovie);
		movieFilter.setMovieIdFilter(SearchFilter.EQUAL);
		// We get the list of movies returned by the DB
		List<Movie> returnedMovies = movieDAO.findAll(movieFilter, -1, -1, -1);
		if (returnedMovies == null) {
			releaseConnection(connection);
			return Response.status(Response.Status.INTERNAL_SERVER_ERROR).entity("Database Error").build();
		}
		if (returnedMovies.isEmpty()) {
			releaseConnection(connection);
			return Response.status(Response.Status.NOT_FOUND).entity("Movie not found").build();
		}
		releaseConnection(connection);
		MovieResponse.Get response = new MovieResponse.Get(returnedMovies.get(0));
		return Response.status(Response.Status.OK).entity(response).header("Access-Control-Allow-Origin", "*").build();
	}

	/**
	 * This EndPoint gets called to count the number of movies
	 */
	@GET
	@Path("/count")
	@Produces(CustomMediaType.APPLICATION_JSON)
	public Response count() {
		Connection connection;
		try {
			// We return the connection from the connection pool
			connection = new DatabaseObject().getConnection();
		} catch (SQLException e) {
			return Response.status(Response.Status.INTERNAL_SERVER_ERROR).entity("Database Error").build();
		}
		// Movie DAO Construct
		MovieDAO movieDAO = new MovieDAO(connection);
		// We return all the movies using an empty filter
		int count= movieDAO.count(new MovieFilter(new Movie()));
		releaseConnection(connection);
		MovieResponse.Count response = new MovieResponse.Count(count);
		return Response.status(Response.Status.OK).entity(response).header("Access-Control-Allow-Origin", "*").build();
	}
	private void releaseConnection(Connection c) {
		try {
			c.close();
		} catch (Exception ex) {
		}
	}
}
