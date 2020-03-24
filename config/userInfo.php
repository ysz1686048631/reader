<?php
session_start();
header('Content-Type: text/html; charset=utf8'); 
$username=$_SESSION['username'];

$link = new mysqli('localhost','text','','test');
$link2 = new mysqli('localhost','text','','test');
if($link){
    
    $sql = "select * from user where name= ?";
    $link->set_charset('utf8');
    $stmt = $link->prepare($sql);
    $stmt->bind_param('s',$username);
    $stmt->bind_result($id,$user,$pwd,$count,$logintime,$svip,$sex);
    $stmt->execute();
    $sArr = array();
    while($stmt->fetch()){
            $users = $user;
            $scount = $count+1;
            $slogin=time();
            $sArr['sname'] = $users;
            $sArr['scount'] = $scount;
            $sArr['slogin'] = $slogin;  
            $sArr['svip'] = $svip;
            $sArr['sex'] = $sex;
             $sqlup = "update user set `s_count`= ?,`s_login` = ? where `name`= ?";
             $stmt2 = $link2->prepare($sqlup);
             $stmt2->bind_param('sss',$scount,$slogin,$users);
             $stmt2->execute();
    }
}
echo json_encode($sArr);



?>