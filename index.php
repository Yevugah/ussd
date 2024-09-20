<?php



$sessionId = $_POST['sessionId'];
$serviceCode = $_POST['serviceCode'];
$phoneNumber =$_POST['phoneNumber'];
$text =$_POST["text"];


if($text==""){
    $response = "CON What would you want to chec \n";
    $response = "1. My account  \n";
    $response = "2. My Phone number";

}else if($text=="1"){
    //business logic
    $response = "CON Chec account information \n";
    $response = "1. Account number \n";
    $response = "2. Account Balance";

}else if ($text=="2"){
    $response ="END Your phone number is ".$phoneNumber;
}else if($text=="1*1"){
    $acc_num = "1245df55";
    $response = "END Account Number is ".$acc_num;
}else if($text=="1*2"){
    $acc_bal = "GHS 2003400";
    $response = "END Your account balance is ". $acc_bal;
}

//echo response to the API. 
header('Content-type; text/plain');
echo $response;


?>