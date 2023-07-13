<?php
session_start();
if(isset($_SESSION['uid']))
{
    header('location: ./student/dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body>
<header>
    <nav>
        <div class="row clearfix">
            <ul class="main-nav animate slideInDown">
                <li><a href="index.php">HOME</a></li>
                <li><a href="./student/about.php">About Us</a></li>
                <li><a href="student/contact.php">CONTACT</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="image">
            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_xlmz9xwm.json" mode="bounce" background="transparent" speed="2" style="width: 350px; height: 600;" loop autoplay></lottie-player>
        </div>
        <div class="box">
            <h2>Admin Login</h2>
            <form action="login.php" method="post">
                <p>Username:</p>
                <input type="text" name="uname" placeholder="Enter Username" required>
                <p>Password:</p>
                <input type="password" name="password" placeholder="Enter Password" required>
                <input type="submit" value="Login" class="btn" name="submit">
            </form>
        </div>
    </div>
</header>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    include('db_conn.php');
    // if($conn){
    //     echo "Connected Success";
    // }
    $username=$_POST['uname'];
    $password=$_POST['password'];
    $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run=mysqli_query($conn,$qry);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
        ?>
        <script>
        alert('Username or Password Not Match');
        window.open('login.php','_self');
        </script>
       <?php
    }
    else
    {
        $data=mysqli_fetch_assoc($run);
        $id=$data['id'];
        $_SESSION['uid']=$id;
        header('location:student/dashboard.php');
    }
}
?>