//Implement custom validation rules such as uniqueness checks for email/username,
// password strength requirements, etc.
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $c_password=$_POST['c_password'];
    if(empty($name||$email||$phone||$password||$c_password)){
        echo"fill all input fields";

    }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="names">
        <input type="email" name="email">
        <input type="phone" name="phone">
        <input type="password" name="password">
        <input type="password" name="c_password">
        <input type="submit" value="submit">

    </form>
</body>
</html>