<?php

/*
* Author: Muhammed Salman Shamsi
* Created On: 30 Aug, 2016 4:41:15 PM
*/
function fix_name($name){
    $name=trim($name);
    $name=  ucfirst($name);
    $name=  addslashes($name);
    return $name;
}

function fix_email($email){
    $email=trim($email);
    $email=  strtolower($email);
    $email=  addslashes($email);
    return $email;
}

function fix_address($address){
    $address=trim($address);
    $address=  strtoupper($address);
    $address=  addslashes($address);
    return $address;
}

function fix_rollno($rollno){
    $rollno=trim($rollno);
    $rollno=  strtoupper($rollno);
    return $rollno;
}
?>