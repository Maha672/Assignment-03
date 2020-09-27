<?php
    require_once "database/connection.php";
    require_once  "index.php";
    if(isset($_POST["submit"])){
        $errors=[];
        if(empty($_POST["fname"])){
            $errors[]="Name must not empty";
        }
        else{
            $fname=trim($_POST["fname"]);
        }
        if(empty($_POST["email"])){
            $errors[]="Email must not empty.";
        }
        else{
            $email=trim($_POST["email"]);
        }
        if(empty($_POST["name"])){
            $errors[]="User name must not be empty.";
        }
        else{
            $name=trim($_POST["name"]);
        }
        if(empty($_POST["tel"])){
            $errors[]="Telephone number must not be empty.";
        }
        else{
            $tel=trim($_POST["tel"]);
        }
        if(empty($_POST["presentaddress"])){
            $errors[]="Present address must not be empty.";
        }
        else{
            $presentaddress=trim($_POST["presentaddress"]);
        }
        if(empty($_POST["permenantaddress"])){
            $errors[]="Permenant address must not be empty.";
        }
        else{
            $permenantaddress=trim($_POST["permenantaddress"]);
        }
        if(empty($_POST["cnic"])){
            $errors[]="CNIC must not be empty.";
        }
        else if(!(strlen($_POST["cnic"])==15)){
        $errors[]="CNIC must be of 15 characters.";
        }
        else{
            $cnic =trim($_POST["cnic"]);
        }
        if(empty($_POST["dob"])){
            $errors[]="Date of Birth must not be empty.";
        }
        else{
            $dob=trim($_POST["dob"]);
        }
        if(empty($errors)){
           //insert record in the database
           $dbc= db_connect();
           $sql= "INSERT INTO users VALUES(NULL,'$fname', '$email', '$name', '$tel',
            '$presentaddress', '$permenantaddress', '$cnic','$dob')";
            $result= mysqli_query($dbc,$sql);
            if($result){
                echo "<div class='alert alert-success'> Data Entered Successfully </div>";
            }
            else{
                echo "<div class='alert alert-danger'> Data can not be entered</div>"; 
            }
            db_close($dbc);
        }
    else{
        foreach($errors as $error){
        echo "<div class='alert alert-danger'> {$error} </div>";
        }
    }
}
?>