<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$errors = array();

if (isset($_POST['firstname']) && !empty($_POST['firstname'])){
    htmlentities($_POST['firstname']);
    $firstname = $_POST['firstname'];
}else{
    $errors[] = 'Need the first name.';
}


if (isset($_POST['lastname']) && !empty($_POST['lastname'])){
    htmlentities($_POST['lastname']);
    $lastname = $_POST['lastname'];
}else{
    $errors[] = 'Need the last name';
}

if (isset($_POST['phone']) && !empty($_POST['phone'])){
    htmlentities($_POST['phone']);
    $phone = $_POST['phone'];
}else{
    $errors[] = 'Ask for the digits!';
}

if (isset($_POST['make']) && !empty($_POST['make'])){
    htmlentities($_POST['make']);
    $make = $_POST['make'];
}else{
    $errors[] = 'Enter the make for the laptop.';
}

if (isset($_POST['model']) && !empty($_POST['model'])){
    htmlentities($_POST['model']);
    $model = $_POST['model'];
}else{
    $errors[] = 'You forgot the model number.';
}

if (isset($_POST['parts']) && !empty($_POST['parts'])){

    $parts = $_POST['parts'];
    $parts_list = implode(", ", $parts);
}

if (isset($_POST['problem']) && !empty($_POST['problem'])){
    htmlentities($_POST['problem']);
    $problem = $_POST['problem'];
}else{
    $errors[] = 'Ask the customer to describe the problem.';
}

if(empty($errors)){
    include('sqlconnect.php');
    $q = "INSERT INTO jobs (firstname, lastname, phone, make, model, parts_list, problem, date) VALUES ('$firstname','$lastname','$phone','$make','$model','$parts_list','$problem', NOW() )";
    $r = @mysqli_query ($dbc, $q);
    if ($r){
        echo'<h1> It works</h1>
            <p>Good Job</p>';
    }
}






    
?>