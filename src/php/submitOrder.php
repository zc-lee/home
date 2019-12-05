<?php
    // 设置 PHP 的报错级别并返回当前级别。
    error_reporting(E_ALL^E_NOTICE);

    // header('Content-Type:application/json');
    header("Content-type:application/json;charset=utf-8");   

    $miniType=$_REQUEST['miniType'];
    $prefee=$_REQUEST['prefee'];
    $example=$_REQUEST['example']; 
    $remark=$_REQUEST['remark']; 
    $name=$_REQUEST['name']; 
    $tel=$_REQUEST['tel']; 
    date_default_timezone_set('PRC'); 
    $time=date("Y-m-d H:i:s");

    include('config.php');

    $sql="insert into orders values (null,'$time','$miniType','$prefee','$example','$remark','$name','$tel',false)";
    $result=mysqli_query($conn,$sql);

    /* $output=[
        ['label'=>'1月','value'=>'8000'],
        ['label'=>'2月','value'=>'2000'],
        ['label'=>'3月','value'=>'0'],
        ['label'=>'4月','value'=>'6500'],
        ['label'=>'5月','value'=>'6000'],
        ['label'=>'6月','value'=>'8500'],
        ['label'=>'7月','value'=>'4000'],
        ['label'=>'8月','value'=>'6000'],
        ['label'=>'9月','value'=>'5300'],
        ['label'=>'10月','value'=>'5500'],
        ['label'=>'11月','value'=>'7500'],
        ['label'=>'12月','value'=>'5000']
    ]; */
    if($result){
        $data['result']='succ';
        // $data['code']=$output;                
    }else{
        $data['code']=400;        
        $data['result']='fail';
    }

    echo json_encode($data);