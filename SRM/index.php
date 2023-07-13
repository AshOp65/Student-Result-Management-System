<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <header>
        <nav>
            <div class="row clearfix">
                <ul class="main-nav" animate slideInDown>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="student/about.php">About Us</a></li>
                    <li><a href="./student/contact.php">CONTACT</a></li>
                    <li><a href="login.php">Admin login</a></li>
                </ul>
            </div>  
        </nav>
        <div class="container">
        
        <div class="main-content-header">
        <div class="box">
            <h2>Get Your Result</h2>
            <form action="result.php"method="post">
            <p>Roll No.:</p>
            <input type="text" name="rollno" placeholder="Enter Your University Roll No.">
            <p>Class:</p>
            <select class="custom-select" name="class">
                <option elect="selected">Choose your class</option>
                <option>I sem</option>
                <option>II sem</option>
                <option>III sem</option>
                <option>IV sem</option>
                <option>Vsem</option>
                <option>VI sem</option>
                <option>VII sem</option>
                <option>VIII sem</option>
            </Select>
            <input type="submit" value="Check Result" class="btn" name="submit">
            </form>
        </div>
        </div>
    </header>
</body>
</html>
