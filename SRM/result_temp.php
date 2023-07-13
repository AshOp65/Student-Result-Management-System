<!DOCTYPE html>
<html>
<head>
    <title>College Template</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <style>
        /* Custom styles for the college template */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .banner {
           
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 36px;
        }

        section {
            padding: 50px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Admissions</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="banner">
        <h1>Welcome to ABC College</h1>
    </div>

    <section>
        <div class="container">
            <h2>Student Result</h2>
            <?php
            // Place your result.php code here to display the result data
            // For example, you can use the $data and $data2 variables to display the student's details and result
            ?>
            <table class="table">
                <tr>
                    <th>Name:</th>
                    <td><?php echo $data['u_name'] ?></td>
                </tr>
                <tr>
                    <th>Class:</th>
                    <td><?php echo $data2['u_class']; ?></td>
                </tr>
                <tr>
                    <th>Roll No:</th>
                    <td><?php echo $data['u_rollno']; ?></td>
                </tr>
                <tr>
                    <th>Father Name:</th>
                    <td><?php echo $data['u_father']; ?></td>
                </tr>
                <tr>
                    <th>City Name:</th>
                    <td><?php echo $data['u_village']; ?></td>
                </tr>
            </table>

            <table class="table">
                <tr>
                    <th>Subject</th>
                    <th>Half Yearly Exam (Score)</th>
                    <th>Annual Exam (Score)</th>
                    <th>Total</th>
                    <th>Max. Marks</th>
                </tr>
                <!-- Add rows for each subject and display the marks -->
                <tr>
                    <td>Hindi</td>
                    <td><?php echo $data2['u_hindi1']; ?></td>
                    <td><?php echo $data2['u_hindi2']; ?></td>
                    <td><?php echo $total1 = $data2['u_hindi1'] + $data2['u_hindi2']; ?></td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>English</td>
                    <td><?php echo $data2['u_english1']; ?></td>
                    <td><?php echo $data2['u_english2']; ?></td>
                    <td><?php echo $total2 = $data2['u_english1'] + $data2['u_english2']; ?></td>
                    <td>200</td>
                </tr>
                <!-- Add rows for other subjects -->
                <!-- Calculate the total marks and display it -->
                <tr>
                    <th>Total</th>
                    <td><?php echo $data2['u_hindi1'] + $data2['u_english1']; ?></td>
                    <td><?php echo $data2['u_hindi2'] + $data2['u_english2']; ?></td>
                    <td><?php echo $all = $total1 + $total2; ?></td>
                    <td>400</td>
                </tr>
            </table>

            <h3>You Are <?php echo ($all <= 200) ? 'Fail' : 'Pass'; ?></h3>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 GEU Dehradun. All rights reserved.</p>
    </footer>
</body>
</html>
