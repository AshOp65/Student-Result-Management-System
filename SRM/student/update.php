<?php
session_start();

if (!isset($_SESSION['uid'])) {
    header('location: ../login.php');
    exit();
}
?>

<html>
<head>
    <title>Update Record</title>
    <link rel="stylesheet" href="./css/update.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="row clearfix">
                <ul class="main-nav" animate slideInDown>
                    <li><a href="../index.php"><b>HOME</b></a></li>
                    <li><a href="./about.php"><b>ABOUT</b></a></li>
                    <li><a href="./contact.php"><b>CONTACT</b></a></li>
                    <li class="logout"><a href="./dashboard.php"><b>DASHBOARD</b></a></li>
                </ul>
            </div>
        </nav>
        <div class="main-content-header">
            <form method="post" action="update.php">
                <table class="table1">
                    <h1 align="center">Search Student and Update Marks</h1>
                    <tr align="left">
                        <th>Enter Class :</th>
                        <td><input type="text" name="class" class="box" /></td>

                        <th>Student Rollno :</th>
                        <td><input type="text" name="rollno" class="box" /></td>
                    </tr>
                    <tr align="left">
                        <th><input type="submit" value="Search" name="submit" class="submit" /></th>
                    </tr>
                </table>
                <table class="table2">
                    <tr>
                        <th class="student_id">Id</th>
                        <th class="student_class">Name</th>
                        <th class="student_class">Father's Name</th>
                        <th class="student_class">Address</th>
                        <th class="student_class">Class</th>
                        <th class="student_class">Roll No</th>
                        <th class="student_edit">Edit</th>
                    </tr>
                    <?php
                    if (isset($_POST['submit'])) {
                        include('../db_conn.php');
                        $class = $_POST['class'];
                        $rollno = $_POST['rollno'];

                        $sql = "SELECT * FROM `student_data` WHERE `u_class`='$class' AND `u_rollno`='$rollno'";
                        $run = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($run) == 0) {
                            echo '<tr><td colspan="7" align="center">No Record Found</td></tr>';
                        } else {
                            while ($data = mysqli_fetch_assoc($run)) {
                                ?>
                                <tr>
                                    <td class="student_class2"> <?php echo $data['id'] . '<br>'; ?></td>
                                    <td class="student_class2"> <?php echo $data['u_name'] . '<br>'; ?></td>
                                    <td class="student_class2"> <?php echo $data['u_father'] . '<br>'; ?></td>
                                    <td class="student_class2"> <?php echo $data['u_village'] . '<br>'; ?></td>
                                    <td class="student_class2"> <?php echo $data['u_class'] . '<br>'; ?></td>
                                    <td class="student_class2"> <?php echo $data['u_rollno'] . '<br>'; ?></td>
                                    <td class="student_class2"><a href="updatemark_form.php?sid=<?php echo $data['u_rollno']; ?>">Edit</a></td>
                                </tr>
                                <?php
                            }
                        }
                    }
                    ?>
                </table>
            </form>
        </div>
    </header>
</body>
</html>
