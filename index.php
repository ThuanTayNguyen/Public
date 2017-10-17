<?php

/*
Hello world 
*/
        require_once('controllers/post_controller.php');
		$getPost= new PostController();
		$getPost->getPost();
?>