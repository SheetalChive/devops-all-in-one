<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "devops_hub"
);


// $conn = mysqli_connect(
//     "mysql",
//     "root",
//     "root",
//     "devops_hub"
// );

if(!$conn){

    die("Database Connection Failed");

}

?>