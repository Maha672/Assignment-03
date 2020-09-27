<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Registration Form</title>
</head>
<?php
    require_once "database/connection.php";
?>
<body>
    <div class="container-fluid">
    <h1 class="text-center pt-3">Registration Form</h1>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="process.php" method="post">
                <div class="form-group">
                    <label for="fname">Full Name:</label>
                    <input type="text" class="form-control" name="fname">
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="name">User Name:</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="tel">Phone Number:</label>
                    <input type="tel" class="form-control" name="tel">
                </div>
                <div class="form-group">
                    <label for="presentaddress">Present Address:</label>
                    <input type="text" class="form-control" name="presentaddress">
                </div>
                <div class="form-group">
                    <label for="permenantaddress">Permenant Address:</label>
                    <input type="text" class="form-control" name="permenantaddress">
                </div>
                <div class="form-group">
                    <label for="cnic">CNIC:</label>
                    <input type="characters" class="form-control" name="cnic">
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control" name="dob">
                </div>
                <input type="submit" class="btn btn-success mb-5" name="submit" value="Register">
                </form>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>