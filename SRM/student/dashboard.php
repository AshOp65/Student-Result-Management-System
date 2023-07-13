<?php
session_start();
if(isset($_SESSION['uid'])){
  echo "";
}
else{
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  </head>
  <body>
    <div class="container">
      <nav>
        <div class="navbar">
          <div class="logo">
            <img src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/external-dashboard-100-most-used-icons-flaticons-flat-flat-icons-2.png" alt="external-dashboard-100-most-used-icons-flaticons-flat-flat-icons-2" />
            <h1>SRMS|ADMIN</h1>
          </div>
          <ul>
            <li><a href="#">
              <i class="fas fa-dashboard"></i>
              <span class="nav-item">Dashboard</span>
            </a>
            </li>
            <li><a href="../index.php">
              <i class="fas fa-home"></i>
              <span class="nav-item">Home</span>
            </a>
            </li>
            <li><a href="../student/about.php">
              <i class="fas fa-info"></i>
              <span class="nav-item">About us</span>
            </a>
            </li>            
            <li><a href="setting.html">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Setting</span>
            </a>
            </li>
            <li><a href="./contact.php">
              <i class="fas fa-question-circle"></i>
              <span class="nav-item">Help</span>
            </a>
            </li>
            <li><a href="../logout.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Logout</span>
            </a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="dashboard">
        <div class="main">
          <div class="section">
            <button class="button" onclick="return add()">Add Marks</button>
          </div>
          <div class="section">
            <button class="button" onclick="update()">Update Marks</button>
          </div>
          <div class="section">
            <button class="button" onclick="deletedata()">Delete Marks</button>
          </div>
          <div class="section">
            <button class="button" onclick="viewdata()">View Marks</button>
          </div>
          <div class="section">
            <button class="button" onclick="view()">View Messages</button>
          </div>
        </div>
        <div class="image"></div>
      </div>
    </div>
    <script src="dash.js"></script>
  </body>
</html>
