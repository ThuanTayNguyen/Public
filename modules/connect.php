<?php
	class mySql {
		private $servername;
		private $username;
		private $password;
		private $database;
		private $conn;
		
		function __construct() {
			$this->servername = "localhost";
			$this->username = "root";
			$this->password = "";
			$this->database = "adweb";
		}
		
		function test_conn() {
			if($this->conn) {
				echo "ok";
			}
			else {
				echo "failed";
			}
		}
		
		function connect() {
			$this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
			mysqli_query($this->conn, "SET NAMES utf8");
		}
		
		function set_connect($servername, $username, $password, $database) {
			$this->servername = $servername;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}
		
		function close() {
			mysqli_close($this->conn);
		}
		
		function query($sql) {
			$res = mysqli_query($this->conn, $sql);
			if(count($res) > 0 && $res) {
				return $res;
			}
			else {
				return 0;
			}
		}
	}
?>