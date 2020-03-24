<?php
header('Content-Type: text/html; charset=utf8'); 
session_start();
$username = !empty($_POST['username'])?$_POST['username']:'Tom';
$passwd = !empty($_POST['password'])?$_POST['password']:'123456';
$link = new mysqli('localhost','text','','test');
if($link){
       if(empty($username)&&empty($pwd)){
             return false;
       }
       $sql = "select * from user where name= ?";
       $link->set_charset('utf8');
       $stmt = $link->prepare($sql);
       $stmt->bind_param('s',$username);
       $stmt->bind_result($id,$user,$pwd,$count,$logintime,$vipbool,$sex);
       $stmt->execute();
       while($stmt->fetch()){
            if($username==$user){
                $_SESSION['username']=$username; 
                echo 'true';
            }else{
                echo 'false';    
            }
              
       }
}




?>