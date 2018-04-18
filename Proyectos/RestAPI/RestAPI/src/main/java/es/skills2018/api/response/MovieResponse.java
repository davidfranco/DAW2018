package es.skills2018.api.response;

import java.util.ArrayList;

import es.skills2018.api.beans.Movie;

public interface MovieResponse {
	public class List implements MovieResponse{
		public ArrayList<Movie> movieList;
		public List(){}
		public List(ArrayList<Movie> movieList) {
			this.movieList = movieList;
		}

		public ArrayList<Movie> getMovieList() {
			return movieList;
		}

		public void setMovieList(ArrayList<Movie> movieList) {
			this.movieList = movieList;
		}
		
	}
}
