<?php
include('db_conn.php');//DB Connection
if($_SERVER['REQUEST_METHOD'] == "POST")
{
 // Username and Password sent from Form
 $fullname = mysqli_real_escape_string($conn, $_POST['full']);
 $username = mysqli_real_escape_string($conn, $_POST['user']);
 $password = mysqli_real_escape_string($conn, $_POST['pass']);

 $password = md5($password); //Password Encrypted
 $sql = "INSERT INTO users(role,username,password,name) values('admin','$username', '$password','$fullname')";
 $result = mysqli_query($conn, $sql);
 echo "Created Successfully!";
}
?>

<!doctype html>
<html>
    <head>
        <title>Faculty Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            body{
                padding:15px;
            }
        </style>
    </head>
    <body>
        <h1>Faculty Registration</h1>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
             <label>Fullname</label>
            <input type="text" name="full"><br/><br/>
            <label>Username</label>
            <input type="text" name="user"><br/><br/>
            <label>Password</label>
            <input type="password" name="pass"><br/><br/>
            <input type="submit" name="submit" value="Create" class="btn btn-primary"><br>
            <h4>already have a account Login<a href="http://localhost/isaa%20lab%20da/"> Here</a></h4>
       </form>
    </body>
</html>
