<?php
	require_once('modules/connect.php');
	$myside = new mySql;
	
	//$myside->set_connect('localhost', 'id1588624_yuikeia', 'Whpl2412', 'id1588624_linesrc');
	$myside->connect();
	$myside->test_conn();
	
	//below is not MVC one
	$cate = $myside->query('select * from category');
	if($cate) {
		while($res1 = mysqli_fetch_assoc($cate)) {
			$sql = "select * from topic where category_id = $res1[category_id]";
			$topic = $myside->query($sql);
			echo $res1['category'] . '<br>';
			if($topic) {
				while($res2 = mysqli_fetch_assoc($topic)) {
					echo "- $res2[topic] <br>";
				}
			}
		}
	}
?>