<?php
    // header('Content-Type:application/json');
    header("Content-type:application/json;charset=utf-8");   

    include('config.php');
    
    //sql2 获取总记录数，并计算中页数
    /* $sql="select COUNT(*) from t_users";
    // var_dump($sql);
    // echo $sql ."\n";
    $result=mysqli_query($conn,$sql);    
    if(!$result){
        echo "===============\n";
        var_dump($result);
        echo "===============\n";  
    }else{
        $row=mysqli_fetch_assoc($result);
        echo "===============\n";        
        var_dump($row);
        echo "===============\n";        
    }; */
    

    
    
    $sql="select * from t_users";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "===============\n";
        var_dump($result);
        echo "===============\n";  
    }else{
        // $row=mysqli_fetch_assoc($result);
        // 获取数据 
        $row=mysqli_fetch_all($result,MYSQLI_ASSOC); 


        echo "\n===============\n";        
        // var_dump($row);
        echo json_encode($row);
        echo "\n===============\n";    
        
        
        // $row=mysql_fetch_all($result,MYSQLI_ASSOC);
         
    };
    