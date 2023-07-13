<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/message.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</head>
<body>
    <header>
        <nav>
            <div class="row clearfix">
                <ul class="main-nav" animate slideInDown>
                    <li><a href="../index.php">HOME</a></li>
                    <li><a href="./about.php">About Us</a></li>
                    <li><a href="./contact.php">CONTACT</a></li>
                </ul>
            </div>  
        </nav>
        <div class="main-header">
            <table>
                <tr>
                 <th class="id_h1">Id </th>
                 <th class="name_h1">Name </th> 
                 <th class="email_h1">Email </th> 
                 <th class="contact_h1">Contact No</th>
                 <th class="massage_h1">Message </th>
                </tr>
                <?php
                
                include('../db_conn.php');
                  $sql="SELECT * FROM `user_massage`";
                  $run=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($run)>0)
                {
                     while($row=mysqli_fetch_assoc($run))
                     {
                        ?>
                        <tr>
                            <th class="id_h"> <?php  echo $row['id'].'<br>'; ?></th>
                            <th class="name_h"> <?php  echo $row['u_name'].'<br>'; ?></th> 
                            <th class="email_h"> <?php  echo $row['u_email'].'<br>'; ?></th> 
                            <th class="contact_h"> <?php  echo $row['u_contact'].'<br>'; ?></th> 
                            <th class="massage_h"> <?php  echo $row['u_massage'].'<br>'; ?></th> 
                        </tr>     
                        <?php    
                        }
                   
                }
                else{
                    echo "Connection failed";
                }
                ?>
        </div>      
    </header>
</body>
</html>