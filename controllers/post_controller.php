<?php
		class PostController{


			public function getPost(){
				//include lớp classModel vào.
				require_once('models/post_model.php');
				// tạo 1 đối tượng mới 
				$conn= new classModel();
				// cho đối tượng nạy trỏ vào phuong thức kết nối đến database.
				$conn->connectDatabase();
				// thử tạo 1 câu truy vấn
				$result=$conn->getAllPost_Model();
				require_once('views/post_view.php');
				$postView=new classView();
				$resultPostView=$postView->getAllPost($result);
				
			}
		}
?>