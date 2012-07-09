<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Blog_Model extends ZP_Model {
	
	public function __construct() {
		$this->Db = $this->db();
		
		$this->helpers();
	
		$this->table = "blog";
		$this->fields = "ID_Post, Title, Slug, Content, Author, Start_Date, Tags";

		$this->Data = $this->core("Data");
	}

	public function save() {
		if(POST("save")) {
			$this->helper("time");

			$validations = array(
				"title"   => "required",
				"content" => "required",
				"tags" => "required"
			);

			$data = array(
				"Slug" 		 => slug(POST("title")),
				"Start_Date" => now(4)
			);

			$this->data = $this->Data->proccess($data, $validations);

			if (isset($this->data["error"])) {
				return $this->data["error"];
			}

			$this->Db->insert($this->table, $this->data);

			POST("unset");

			return getAlert("El Post ha sido guardado exitosamente");
		} else {
			return FALSE;
		}
	}

	public function all($limit = 10) {
		return $this->Db->findAll($this->table, $this->fields, NULL, "ID_Post DESC", $limit);
	}

	public function getPostsByTag($tag) {
		return $this->Db->findBySQL("Title LIKE '%$tag%' OR Content LIKE '%$tag%' OR Tags LIKE '%$tag%'", $this->table, $this->fields);
	}

	public function getPostBySlug($slug) {
		return $this->Db->findBy("Slug", $slug, $this->table, $this->fields);
	}
	
}