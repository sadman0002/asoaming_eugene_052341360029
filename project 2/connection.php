<?php

$servername= "localhost";
$username= "root";
$password= "";
$dbname="blaq";
#create new connection

$con=new mysqli($servername,$username,$password,$dbname);

if (mysqli_connect_error()){
    die("connetion Failed".mysqli_connect_error());
}

echo "connection successfully";

#creating database

$sqlteye ="CREATE DATABASE blaq";
if($con->query($sqlteye) ===TRUE){
    echo "Dbs  blaq is created";
}
else{
    echo "Dbs lesleydb is not created<br/>";
}


//create table 
$sqlnimo ="CREATE TABLE  (fname varchar(20) AUTO_INCREMENT PRIMARY KEY,
passwords varchar(20) NOT NULL, email varchar(20) NOT NULL)";

if($con->query($sqlnimo) === TRUE){

    echo "table johnoko is created";
}

else{
     echo "table johnoko is not created:".$con->error."<br/>"; 
}