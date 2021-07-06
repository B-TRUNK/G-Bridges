<?php

//below class is to instantiate db from Dtabase class
	class Job{

		private $db;

		public function __construct(){
			$this->db = new Database;
		}
		// fetch all jobs function
		public function getAllJobs(){
			$this->db->query("SELECT * FROM jobs ORDER BY job_posting_time DESC");

			//assign resultSet
			$results = $this->db->resultSet();
			return $results;
		}

		public function getCountry(){
			$this->db->query("SELECT * FROM countries");

			//assign resultSet
			$results = $this->db->resultSet();
			return $results;
		}

		public function getJobsByCountry($country,$category){
			$this->db->query("SELECT * FROM jobs WHERE country='$country' AND ((job_category='$category')OR(company_name='$category') )");

			//assign resultSet
			$results = $this->db->resultSet();
			return $results;
		}
		public function getJobsDetailsByID($id){
			$this->db->query("SELECT * FROM jobs WHERE job_id='$id'");

			//assign resultSet
			$results = $this->db->resultSet();
			return $results;
		}
	}