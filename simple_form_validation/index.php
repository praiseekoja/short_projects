
<?php
$errors=array();
function clean($data){
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    $data=trim($data);
    return $data;

}
if(isset($_POST['submit'])){
    
    $name=$_POST['names'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $c_password=$_POST['c_password'];

    if(empty($name||$email||$phone||$password||$c_password)){
        
        $errors['empty']="fill all input fields";
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['email']="the email adress is nott correct";
        }
        if(count($password)<8){
            $errors['passlength']="the email must be 8charasters and above";
        }
        if($password !==$c_password){
            $errors['confirm']="these password does not match";
        }
        var_dump($errors);
        
    }else{
        
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
    <form action="index.php" method="post">
        <label for="names">name</label>
        <input type="text" name="names"><br><br>
        <label for="email">email</label>
        <input type="email" name="email"><br><br>
        <label for="phone">phone</label>
        <input type="phone" name="phone"><br><br>
        <label for="password">password</label>
        <input type="password" name="password"><br><br>
        <label for="c_password">confirm password</label>
        <input type="password" name="c_password"><br><br>
        <button name="submit">submit</button>

    </form>
</body>
</html>