<?php 
	class Connection
	{
		var $conn;
		function __construct()
		{
			$servername = "localhost";
			$username = "root";
			$password = "pw";
			$dbname = "db_name";

			// Create connection
			$this->conn = new mysqli($servername, $username, $password, $dbname);
			$this->conn->set_charset("utf8");
			// Check connection
			if ($this->conn->connect_error) {
			    die("Connection failed: " . $this->conn->connect_error);
			} 

		}
	}
 ?>