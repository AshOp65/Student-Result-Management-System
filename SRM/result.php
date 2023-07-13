<?php
if (isset($_POST['submit'])) {

    include('./db_conn.php');

    $standerd = $_POST['class'];
    $rollno = $_POST['rollno'];
    $sql = "SELECT * FROM `student_data` WHERE `u_class`='$standerd' AND `u_rollno`='$rollno'";
    $sql2 = "SELECT * FROM `user_mark` WHERE `u_class`='$standerd' AND `u_rollno`='$rollno'";
    $run = mysqli_query($conn, $sql);
    $run2 = mysqli_query($conn, $sql2);
    $row = mysqli_num_rows($run2);
    $data2 = mysqli_fetch_assoc($run2);

    if (mysqli_num_rows($run) > 0) {
        $data = mysqli_fetch_assoc($run);

        // Check if $data2 is not null
        if ($data2) {
?>

            <html>
            <head>
                <title>Result</title>
                <link rel="stylesheet" href="./student/css/result.css" type="text/css">
                <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
                
            </head>
            <body>
                <header>
                    <nav>
                        <div class="row clearfix">
                            <ul class="main-nav" animate slideInDown>
                                <li><a href="index.php"><b>HOME</b></a></li>
                                <li><a href="./student/about.php"><b>ABOUT</b></a></li>
                                <li><a href="./student/contact.php"><b>CONTACT</b></a></li>
                                <li><a href="login.php"><b>ADMIN LOGIN</b></a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="main-content-header">
                        <form method="post" action="result.php">
                            <table class="table">
                           
                                <img src="./student/uploaded/<?php echo $data['u_image']; ?>" class="image2" />
                                <tr>
                                    <th>Name :</th>
                                    <td><?php echo $data['u_name'] ?></td>
                                </tr>
                                <tr>
                                    <th>Class :</th>
                                    <td><?php echo $data2['u_class']; ?></td>
                                </tr>
                                <tr>
                                    <th>Roll No :</th>
                                    <td><?php echo $data['u_rollno']; ?></td>
                                </tr>
                                <tr>
                                    <th>Father Name :</th>
                                    <td><?php echo $data['u_father']; ?></td>
                                </tr>
                                <tr>
                                    <th>City Name :</th>
                                    <td><?php echo $data['u_village']; ?></td>
                                </tr>
                            </table>
                            <table class="table2">
                                <tr>
                                    <th>Subject</th>
                                    <th>Half Yearly Exam (Score)</th>
                                    <th>Annual Exam (Score)</th>
                                    <th>Total</th>
                                    <th>Max. Marks</th>
                                </tr>
                                <tr>
                                    <th>Hindi</th>
                                    <th><?php echo $data2['u_hindi1']; ?></th>
                                    <th><?php echo $data2['u_hindi2']; ?></th>
                                    <th><?php echo $total1 = $data2['u_hindi1'] + $data2['u_hindi2']; ?> </th>
                                    <th>200</th>
                                </tr>
                                <tr>
                                    <th>English</th>
                                    <th><?php echo $data2['u_english1']; ?></th>
                                    <th><?php echo $data2['u_english2']; ?></th>
                                    <th><?php echo $total2 = $data2['u_english1'] + $data2['u_english2']; ?> </th>
                                    <th>200</th>
                                </tr>
                                <tr>
                                    <th>Math</th>
                                    <th><?php echo $data2['u_math1']; ?></th>
                                    <th><?php echo $data2['u_math2']; ?></th>
                                    <th><?php echo $total3 = $data2['u_math1'] + $data2['u_math2']; ?> </th>
                                    <th>200</th>
                                </tr>
                                <tr>
                                    <th>Physics</th>
                                    <th><?php echo $data2['u_physics1']; ?></th>
                                    <th><?php echo $data2['u_physics2']; ?></th>
                                    <th><?php echo $total4 = $data2['u_physics1'] + $data2['u_physics2']; ?></th>
                                    <th>200</th>
                                </tr>
                                <tr>
                                    <th>Chemistry</th>
                                    <th><?php echo $data2['u_chemestry1']; ?></th>
                                    <th><?php echo $data2['u_chemestry']; ?></th>
                                    <th><?php echo $total5 = $data2['u_chemestry1'] + $data2['u_chemestry']; ?></th>
                                    <th>200</th>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <th>
                                        <?php echo $data2['u_hindi1'] + $data2['u_english1'] + $data2['u_math1'] + $data2['u_physics1'] + $data2['u_chemestry1']; ?>
                                    </th>
                                    <th>
                                        <?php echo $data2['u_hindi2'] + $data2['u_english2'] + $data2['u_math2'] + $data2['u_physics2'] + $data2['u_chemestry']; ?>
                                    </th>
                                    <th><span class="colorchange1"><?php echo $all = $total1 + $total2 + $total3 + $total4 + $total5; ?></span></th>
                                    <th>1000</th>
                                </tr>
                                
                                
                            </table>
                            <?php
                           
                            ?>
                            <h2>You Are <span class="colorchange"><?php
                                                                        if ($all <= 500) {
                                                                            echo "Fail";
                                                                        } else {
                                                                            echo "Pass";
                                                                        }
                                                                        ?></span></h2>
                           
                            <marquee scrollamount="5">
                                <p class="colorchange2">Your Result is Declared. Kindly check your marks and in case of any discrepancy, contact the admin.</p>
                            </marquee>
                            <button class="print-button" onclick="window.print();">Print Result</button>
                            <a href="index.php" class="res colorchange2">Check Another Result </a>
                        </form>
                    </div>
                </header>
                <script src="dash.js"></script>
            </body>
            </html>
<?php
        } else {
            
            echo "No data found for the given student.";
        }
    } else {
?>
        <script>
            alert('Record Not found');
            window.open('index.php', '_self');
        </script>
<?php
    }
}
?>
