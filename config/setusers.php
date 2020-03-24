<?php
header('Content-type:text/html;charset=utf-8');
session_start();
$link = mysqli_connect('localhost','text','','test');
if($_SERVER['REQUEST_METHOD']=='POST'){
$newname = !empty($_POST['name'])?$_POST['name']:'';
$newpsd = !empty($_POST['psd'])?$_POST['psd']:'';
$sex = !empty($_POST['sex'])?$_POST['sex']:'';
$time = time();
$count=0;
$vip = false;
if(!empty($newname)){
    if($link){
        $sql = "insert into user(`name`,`psd`,`sex`,`s_count`,`s_login`,`vipbool`) values (?,?,?,?,?,?)";
        $intoInfo = $link->prepare($sql);
        $intoInfo->bind_param('ssssss',$newname,$newpsd,$sex,$count,$time,$vip);

        if($intoInfo->execute()){
            
             echo 'true';
        }else{
             echo 'false';
        }
        
    }
}else{
     echo 'falses';
}
}


?>