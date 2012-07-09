<?php
/**
 * Access from index.php:
 */


class Blog_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("blog");
		
		$this->helpers();

		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		$this->Blog_Model = $this->model("Blog_Model");
	}
	
	public function index($slug = "") {	
		if ($slug==="" OR $slug === "slug" OR $slug === "all") {
			$this->all();
		} else {
			$this->slug($slug);
		}
	}

	public function add() {
		$var["alert"] = $this->Blog_Model->save();	
		$var["view"] = $this->view("add", TRUE);
		$this->render("content", $var);
	}

	public function all() {
		$data = $this->Blog_Model->all();
		
		if ($data) {
			$this->helpers("time");

			$var["posts"] = $data;
			$var["view"] = $this->view("posts", TRUE);

			$this->render("content", $var);
		} else {
			$this->render("error404");
		}
	}

	public function tag($tag) {
		$data = $this->Blog_Model->getPostsByTag($tag);

		if ($data) {
			$this->helpers("time");

			$var["posts"] = $data;
			$var["view"] = $this->view("posts", TRUE);

			$this->render("content", $var);
		} else {
			$this->render("error404");
		}
	}

	public function slug($slug) {
		$data = $this->Blog_Model->getPostBySlug($slug);

		if ($data) {
			$this->helpers("time");

			$var["post"] = $data[0];
			$var["view"] = $this->view("post", TRUE);

			$this->render("content", $var);
		} else {
			$this->render("error404");
		}
	}

}
