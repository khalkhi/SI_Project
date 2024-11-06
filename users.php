<?php require 'connect.php';
// start login session
session_start();


// define a variables
$error = "";
$fnameValue ="";
$lnameValue ="";
$emailValue = "";
$passwordValue = "";


// handle user login here

if (isset($_POST['login'])){

    $email = $_POST ['email'];
    $password = $_POST['password'];


    // Check if email/password is empty
    if(empty($email) || empty($password)){
        $error = "Email or Password connot be empty";
        $emailValue = $_POST['email'];
        $passwordValue = $_POST[ 'password'];
     }else{

    // select a user from database using email submited
        $sql = "SELECT * FROM user WHERE email = '$email' ";
        $result = mysqli_query ($conn, $sql);
        $row = mysqli_fetch_assoc($result);
            
        if ($row){
            $pws = $row['password'];
            $admin = $row['admin'];


        if ($pws === $password) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['fullname'] = $row['fname']." ". $row['lname'];
            $_SESSION['admin'] = $row['admin'];
       
            header ('location:manage.php');
        exit();
        
    }else{

        $error = "password incorrect";
    }
    
    }else{

        $error = "User not found";

    }
        // add the info to the form so user dont have to re type it
        $emailValue = $_POST[' email'];
        $passwordValue = $_POST['password'];
    }
}



// handle user signup here
if( isset($_POST['signup'])) {
    $fname = $_POST ['fname' ];
    $lname = $_POST ['lname' ];
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Check if name is empty
    if(empty($fname) || empty($lname)){
        $error = "Name connot be empty";
        $fnameValue = $_POST[' fname '];
        $lnameValue = $_POST[ 'lname '];
        $emailValue = $_POST[' email'];
        $passwordValue = $_POST[ 'password' ];
    }
    elseif (empty ($email)){                       //check if email is empty
        $error = "Please enter an Email";
        $fnameValue = $_POST['fname'];
        $lnameValue = $_POST[ 'lname'];
        $emailValue = $_POST[ 'email'];
        $passwordValue = $_POST[ 'password'];
    }
    elseif(empty ($password) ){                               //check if password is empty
            $error = "Password connot be empty";
            $nameValue = $_POST[' fname '];
            $lnameValue = $_POST[ 'lname '];
            $emailValue = $_POST[ 'email'];
            $passwordValue = $_POST[ 'password'];
    }
    else{
        //check if email already exists in database
        $sq1 = "SELECT * FROM user WHERE email = '$email' ";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);


        if ($row) {
            $error = "Email already exist";
        }else{
            
                // create the new user
                $sq1 = "INSERT INTO 'user' ('fname', 'lname', 'email', 'password') VALUES ('$fname', '$lname', '$email', '$password')";
                $result = mysqli_query($conn, $sql);
        
        if($result){
            // login the new user
            $sql = "SELECT * FROM user WHERE email = '$email' ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $row['id'];
            $_SESSION[ 'fullname'] = $row['fname'] ." ". $row[ 'lname'];
            $_SESSION[ 'admin'] = $row['admin'];

        // direct the user to manage package page
        header ( 'location:manage.php');
        exit(); 
        }
    }   
}

$fnameValue = $_POST[ 'fname'];
$lnameValue = $_POST[ 'lname'];
$emailValue = $_POST['email'];
$passwordValue = $_POST[ 'password'];

}
?>
