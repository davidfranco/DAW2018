package es.skills2018.api.request;

public interface MovieRequest {
	public class Search implements MovieRequest{
		public String text;
		public int order;
		public int page;
		public Search(){}
		public Search(String text, int order, int page) {
			this.text = text;
			this.order = order;
			this.page = page;
		}
		public int getOrder() {
			return order;
		}
		public void setOrder(int order) {
			this.order = order;
		}
		public int getPage() {
			return page;
		}
		public void setPage(int page) {
			this.page = page;
		}
		public String getText() {
			return text;
		}
		public void setText(String text) {
			this.text = text;
		}
	}
}
