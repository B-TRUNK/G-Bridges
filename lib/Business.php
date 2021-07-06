<?php

//below class is to instantiate db from Dtabase class
	class Business{

		private $db;

		public function __construct(){
			$this->db = new Database;
		}
		// fetch all jobs function
		public function getAllBusinesses(){
			$this->db->query("SELECT * FROM business");

			//assign resultSet
			$results = $this->db->resultSet();
			return $results;
		}

		public function getSingleResult($businessName,$category,$discount){
			$this->db->query("SELECT * FROM business WHERE business_name='$businessName' OR business_category='$category' OR business_discount='$discount'");

			//assign resultSet
			$results = $this->db->resultSet();
			return $results;
		}

	}