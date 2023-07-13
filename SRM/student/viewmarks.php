<html>
<head>
    <title>All Student Detail</title>
<link rel="stylesheet" href="../csss/allstudentdata.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="./css/viewmarks.css"

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php"><b>HOME</b></a></li>
                <li><a href="./about.php"><b>ABOUT</b></a></li>
                <li><a href="./contact.php"><b>CONTACT</b></a></li>
                <li class="logout"><a href="dashboard.php"><b>ADMIN DASHBOARD</b></a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <h2>Student Record</h2>
        <form>
         <table>
          <tr class="heading">
           <th class="id_h1">Id </th>
           <th class="name_h1">Name </th> 
           <th class="contact_h1">Class </th> 
           <th class="contact_h1">Roll No</th>
           <th class="contact_h1">Father Name</th>
           <th class="massage_h1">Mother Name </th>
           <th class="contact_h1">City</th>
           <th class="name_h1">Mobile No</th>
         </tr>
         <?php
         include("../db_conn.php");
         $sql="SELECT * FROM `student_data`";
         $result = mysqli_query($conn, $sql);
         if(mysqli_num_rows($result)){
         while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
             <th class="id_h"> <?php  echo $row['id'].'<br>'; ?></th>
            <th class="name_h"> <?php  echo $row['u_name'].'<br>'; ?></th> 
            <th class="email_h"> <?php  echo $row['u_class'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_rollno'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_father'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_mother'].'<br>'; ?></th>
            <th class="contact_h"> <?php  echo $row['u_village'].'<br>'; ?></th> 
            <th class="massage_h"><?php  echo $row['u_mobile'].'<br>'; ?></th> 
            </tr>
         
            <?php    
        }
   
}
else{
    echo "No Record Found";
}

?>
              </table>
        </form>
      </div>
    </header>
</body>
</html>