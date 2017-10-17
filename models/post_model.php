<?php

		class classModel{
			private $conn;
			public function connectDatabase(){
				$this->conn=mysqli_connect('localhost','root','','mvc_blog');
				mysqli_query($this->conn,"SET NAMES 'UTF8'");
			}
			public function getAllPost_Model(){
				$sql='Select * from mvc_post';
				$result=mysqli_query($this->conn,$sql);
				$result_post =array();
				if($result->num_rows>0){
				while ($row=mysqli_fetch_assoc($result)) {
				 $result_post[]=$row;
					
						}
					}
					return $result_post;
				
			}

		}
?>