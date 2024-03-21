
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body>
<?php
if(isset($_POST['register'])){
$dbconn=mysqli_connect("23rp00391-php","root","","23rp00391_shareride_db")or die(mysqli_connect_error()); // connect to database

// inserting in Database
$user_id=$_POST['user_id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$user_password=$_POST['password'];
$sql="INSERT INTO registration SET fnames='$firstname', lnames='$lastname', gender='$gender',email='$email',password='$user_password',,";
$quer =mysqli_query($dbconn,$sql);
header("location:index.php");
} ?>



    //registration form
<main>
    <form action="register.php" method="post">
        <h1>Sign Up</h1>
        <div>
            <label for="firstname">firstname:</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div>
            <label for="lastname">lastname:</label>
            <input type="lastname" name="lastname" id="email">
        </div>
        <div>
            <label for="gender">gender:</label>
            male:<input type="radio" name="radio" id="email">
            female:<input type="radio" name="radio" id="email">
        </div>
        <div>
            <label for="email">email:</label>
            <input type="email" name="email" id="email">
        </div>
    
        </div>
        <button type="submit">Register</button>
        <a  href="userlogged.php" id="p"></a></td>
        <footer><a href="login.php">click here to login</a></footer>
    </form>
</main>
</body>
</html>