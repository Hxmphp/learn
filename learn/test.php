<?php
	
	function nowtime(){
		$time = time();
		$date = date("Y-m-d H:i:s",$time);
		
		echo $time;
		echo $date;
	}
	
	nowtime();
	
	
	function add(){
		echo "说";
	}
	
	add();
