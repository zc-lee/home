<?php
	
	// $db_url='127.0.0.1';
	// $db_user='root';
	// $db_pwd='';
	// $db_name='lee_home';
	// $db_prot=3306; 

	$db_url='112.74.166.156';
	$db_user='root';
	$db_pwd='root123456';
	$db_name='lee_home';
	$db_prot=3306; 

	$conn=mysqli_connect($db_url,$db_user,$db_pwd,$db_name,$db_prot);
	
	//设置编码方式
	$sql="set names utf8";
	mysqli_query($conn,$sql);

	$data=[
        'code'=>200,
        'result'=>null
	];
	
	

