<?php
    // 设置 PHP 的报错级别并返回当前级别。
    error_reporting(E_ALL^E_NOTICE);

    // header('Content-Type:application/json');
    header("Content-type:application/json;charset=utf-8");   

    // $miniType=$_REQUEST['miniType'];
    // $prefee=$_REQUEST['prefee'];
    // $example=$_REQUEST['example']; 
    // $remark=$_REQUEST['remark']; 
    // $name=$_REQUEST['name']; 
    // $tel=$_REQUEST['tel']; 
    // date_default_timezone_set('PRC'); 
    // $time=date("Y-m-d H:i:s");

    include('config.php');

    // $sql="insert into orders values (null,'$time','$miniType','$prefee','$example','$remark','$name','$tel',false)";

    $sql="select * from banner";
    $result=mysqli_query($conn,$sql);
    // var_dump($result);
	$list=mysqli_fetch_all($result,MYSQLI_ASSOC);
	// var_dump($list);
    // $num=mysqli_num_rows($result);
    // echo $num;
    // for($i=0;$i<$num;$i++){
    //     $row=mysqli_fetch_assoc($result);
    //     $list[$i]=$row;
    //     echo $row;
    // }

    if($result){
        $data['result']=$list;
        // $data['result']='succ';
        // $data['code']=$output;                
    }else{
        $data['code']=400;        
        $data['result']='fail';
    }

    echo json_encode($data);