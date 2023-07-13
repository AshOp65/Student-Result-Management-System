<?php
session_start();

if (!isset($_SESSION['uid'])) {
    header('location: ../login.php');
    exit;
}

?>

<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="./css/second.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
<header>
    <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
    </nav>
    <div class="main-content-header">
        <form method="post" action="third.php">
            <h2>Step 2/2 : Add Exam mark</h2>

            <input type="hidden" name="class" value="<?php  echo $_POST['class']; ?>" required/>
            <input type="hidden" name="rollno" value="<?php  echo $_POST['rollno']; ?>" required/>
            
            <table class="table1">
                <span><h4 class="h_3 ">Mid Semester Exam (A)</h4></span>
                <tr>
                    <th>Hindi</th>
                    <th>English</th>
                    <th>Math</th>
                </tr>
                <tr>
                    <td><input type='text' name='hindi1' placeholder='Hindi' class="box" required/></td>
                    <td><input type='text' name='english1' placeholder='English' class="box" required/></td>
                    <td><input type='text' name='math1' placeholder='Math' class="box" required/></td>
                </tr>
            </table>
            <table class="table2">
                <tr>
                    <th>Physics</th>
                    <th>Chemistry</th>
                </tr>
                <tr>
                    <td><input type='text' name='physics1' placeholder='Physics' class="box" required/></td>
                    <td><input type='text' name='chemistry1' placeholder='Chemistry' class="box" required/></td>
                </tr>
            </table>
            <span><h4 class="h3">End Semester Exam(B)</h4></span>
            <table class="table4">
                <tr>
                    <th>Hindi</th>
                    <th>English</th>
                    <th>Math</th>
                </tr>
                <tr>
                    <td><input type='text' name='hindi2' placeholder='Hindi' class="box" required/></td>
                    <td><input type='text' name='english2' placeholder='English' class="box" required/></td>
                    <td><input type='text' name='math2' placeholder='Math' class="box" required/></td>
                </tr>
            </table>
            <table class="table2">
                <tr>
                    <th>Physics</th>
                    <th>Chemistry</th>
                </tr>
                <tr>
                    <td><input type='text' name='physics2' placeholder='Physics' class="box" required/></td>
                    <td><input type='text' name='chemistry2' placeholder='Chemistry' class="box" required/></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" name="submit" value="Submit"
                                                           class="submit"/></td>
                </tr>
            </table>
        </form>
    </div>
</header>
</body>
</html>

<?php
if(isset($_POST['submit1']))
{ 
    include('../db_conn.php');
    $username=$_POST['name'];
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $father=$_POST['father'];
    $mother=$_POST['mother'];
    $mobile=$_POST['mobile'];
    $village=$_POST['village'];
    
    $imagename=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    move_uploaded_file($tempname, "./uploaded/$imagename");
    
    $sql="INSERT INTO `Student_data`(`u_name`, `u_class`, `u_rollno`, `u_father`, `u_mother`, `u_mobile`, `u_village`, `u_image`) VALUES ('$username','$class','$rollno','$father','$mother','$mobile','$village','$imagename')";
    $run=mysqli_query($conn,$sql);
    if($run)
    {
        ?>
        <script>
        alert('1step Complete and this is second  Step');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('Failed');
        </script>
        <?php 
    }
}

?>
