<?php

$name = $_POST["form_name"];
$email = $_POST["form_email"];
$message = $_POST["form_message"];

$EmailTo = "info@kalegno.com";
$Subject = "Nova Poruka";

$Body .= "Ime: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Poruka: ";
$Body .= $message;
$Body .= "\n";

//send mail

$success = mail($EmailTo, $Subject, $Body, "From:".$email);

if($success){
    echo "success";
} else{
    echo "invalid";
}

?>