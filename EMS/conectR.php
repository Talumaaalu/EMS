<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $user_type=$_POST['user_type'];
    $active=$_POST['active'];

$con=new mysqli('localhost', 'root', '', 'register');

if($con){
    //echo "connenction successful";
    $sql="insert into `user`(username,name,email,password,user_type,active)values('$username','$name','$email','$password','$user_type','$active')";
    $result=mysqli_query($con, $sql);
    if($result){

       // echo"Registration Completed";
       session_start();

       //if user exist
       $login_sql = "SELECT * FROM `user` WHERE username = '$username' AND password = '$password' AND active = 1";
       $login_result = mysqli_query($con, $login_sql);

       if (mysqli_num_rows($login_result) > 0) {
        $user = mysqli_fetch_assoc($login_result);
        $_SESSION['user_id'] = $user['id']; // Store user ID in session
        $_SESSION['username'] = $user['username']; // Store username in session
        $_SESSION['user_type'] = $user['user_type']; // Store user type in session
        $_SESSION['logged_in'] = true; // Set logged in flag
        
        // Redirect to dashboard or home page after login
        header('Location: index.php'); // Replace with your desired page
        exit;
    }else{
         // If login fails, show an error message
         echo "Login failed after registration. Please try again.";
    }
    }
    
        
    else{
        die(mysqli_error($con));
    }

}
}
?>