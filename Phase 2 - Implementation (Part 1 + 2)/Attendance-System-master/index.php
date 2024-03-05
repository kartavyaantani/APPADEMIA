<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
 
 <!-- Fixed navbar -->
 <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#2a6496;height:20px">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/APPEDEMIA/Site1/Main.html">Online Attendance</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="teacher.php">Dashboard</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="class.php">Class</a></li>
           
			<li><a href="statistics.php">Statistics</a></li>
			<li><a href="logout.php">Logout</a></li>
      <li><a href="signup.php">ADMIN LOGIN</a></li>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav></br></br></br></br>

    
  <div class="container">
    <h2>For Students</h2>
    <h4>Click here for <a href="student.php">Student Dashboard</a></h4>
    <hr>
    <h2>For Faculty</h2>
    <div class="alert alert-warning hidden">
      <span></span>
      <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
    </div>
    <table class="table table-bordered table-striped">
      <thead>
        <tr style="background-color: #2a6496;">
          <th>Login</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <form id="login">
              <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" placeholder="Email" type="email" name="email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password">
              </div>
              <button class="btn btn-primary pull-right">Login</button>
          
            </form>
          </td>
        </tr>
      </tbody>
    </table>
    <br><br><br><br><br><br>
    <footer class="u-align-center u-clearfix u-footer u-palette-1-dark-2 u-footer" id="sec-fa50">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="\APPEDEMIA\Site1\Main.html" class="u-image u-logo u-image-1" data-image-width="308" data-image-height="96">
          <img src="img/Fot-logo.png" class="u-logo-image u-logo-image-1">
        </a>
      </div>
    </footer>
 </body>
</html>
