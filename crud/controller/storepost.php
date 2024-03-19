<?php

session_start();


$title=$_REQUEST['title'];
$detail=$_REQUEST['detail'];
$_SESSION['title']=$title;
$_SESSION['detail']=$detail;





//*validation
//*title validation
$errors=[];

if(empty($title)){
    $errors['title']="enter title";

}else if(strlen( $title ) >5) {
    $errors['title']="too long";

}
if(empty($detail)){
    $errors['detail']="enter detail";

}

if(count($errors)>0){
    $_SESSION['errors']=$errors;

    header("location:../index.php");




}
else{
    echo"everything is ok";
}

























?>

