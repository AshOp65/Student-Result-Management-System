<html>
<head>
    <title>Contact</title>
<link rel="stylesheet" href="./css/contact.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="./about.php">ABOUT</a></li>
                <li><a href="./contact.php">CONTACT</a></li>
                <li><a href="../login.php">ADMIN LOGIN</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
      <div class="contact-container">
                <div class="form-container">
        <form method='post'>
          <table class="table">
              <h2 class="search"> Contact Section <br>Send Us a Message</h2>
             
              <tr>
                <th class='tblheading'>Enter Your Name</th>
              </tr>
              <tr>
              <td><input type='text' class='tbldata' name='name' placeholder='Full Name' Required/></td>
              </tr>
              <tr>
                <th class='tblheading'>Enter your Email Id</th>
              </tr>
              <tr>
                <td class='tbldata'><input type='text' class='tbldata' name='email' placeholder='Email Id' Required/></td>
              </tr>
              <tr>
                <th class='tblheading'>Enter your Contact No.</th>
              </tr>
              <tr>
                <td class='tbldata'><input type='text' class='tbldata' name='cont' placeholder='Contact No' Required/></td>
              </tr>
              <tr>
                <th class='tblheading'>Type your Message</th>
              </tr>
              <tr>
                <td ><textarea class='tbldata1' name="massage" placeholder='Type here...'></textarea></td>
              </tr>
              <tr>
              <td colspan='2' align='center'><input type="submit" name='submit' value='SEND' class='submit'/></td>
              </tr>
          </table>
       </form>
      </div>
      <div class="image-container">
                    <div class="image">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets10.lottiefiles.com/packages/lf20_in4cufsz.json" mode="bounce" background="transparent"  speed="2"  style="width: 350px; height: 400px;"  loop  autoplay></lottie-player>
                    </div>
      </div>
      </div>
      </div>
      
    </header>
    
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    include('../db_conn.php');
    $username=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['cont'];
    $massage=$_POST['massage'];
    $sql="INSERT INTO `user_massage`(`u_name`, `u_email`, `u_contact`, `u_massage`) VALUES ('$username','$email','$contact','$massage')";
    $run=mysqli_query($conn,$sql);
    if($run)
    {
        ?>
      <script>
      alert('Your Message is sent to Admin');

     </script>
   <?php
    }
}

?>