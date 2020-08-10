<!DOCTYPE html>
<html lang="en">
<head>
  <title>Learning Management System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<style>
    .nav {
    background: linear-gradient(to bottom, #0000cc 0%, #cc3300 100%);
}
    .header {
    background: linear-gradient(to bottom, #0000cc 0%, #00ffff 100%);
}
    .body {
    background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}
</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" class="body">
    <nav class="navbar navbar-inverse navbar-fixed-top nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#target1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" data-toggle="Tooltip" title="AdvanceComputerWorldPlatform">Admin Panel</a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="target1">
                    <ul class="nav navbar-nav">
                        <li><a href="#ALogin" data-toggle="Tooltip" title="Admin Login">Admin Login</a></li>
                        <li><a href="#TLogin" data-toggle="Tooltip" title="Teacher Login">Teacher Login</a></li>
                        <li><a href="#SLogin" data-toggle="Tooltip" title="Sinup">Student Login</a></li>
                        <li><a href="login.html" data-toggle="Tooltip" title="Logout">Log Out</a></li>
                        <li><a href="#About" data-toggle="Tooltip" title="About">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav><br><br><br>
    <div class="container-fluid">
        <div class="container-fluid header">
            <br>
            <h1 class="text-center"><?php session_start(); echo $_SESSION['admin']; ?> Well Come To Admin Panel</h1>
            <p class="text-center">Learning Management System is maintained by Mahmood Yousaf</p>
            <br>
        </div>
        <figure class=="figure">
            <img src="Mahmood_Yousaf.jpg" class="img-responsive center-block" alt="image is not found" data-toggle="Tooltip" title="Random click of LMS users">
            <figcaption class="figure-caption text-center">University students using LMS</figcaption>
        </figure>
    </div>
    <div id="ALogin" class="container-fluid body">
        <br><br><br>
        <div class="container">
            <h1 class="text-center" style="font-size:50px;font-family: italic;color: purple;border: 6px dotted purple;">Admin Login</h1>
            <br><br>
            <form class="form-group" action="Validation.php" method="POST">
                <label for="email">Email Address:</label>
                <br><br>
                <input type="email" class="form-control" placeholder="Enter your email" name = "email">
                <br>
                <label for="pwd">Passowrd:</label>
                <br><br>
                <input type="password" class="form-control" placeholder="Enter your passsord" name = "pwd">
                <br>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">Remember me
                    </label>
                    <br><br>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>





    <div id="TLogin" class="container-fluid body">
      <br><br><br>
      <div class="container">
          <h1 class="text-center" style="font-size:50px;font-family: italic;color: purple;border: 6px dotted purple;">Teacher Login</h1>
          <br><br>
          <form class="form-group" action="/page.php">
              <label for="email">Email Address:</label>
              <br><br>
              <input type="email" class="form-control" placeholder="Enter your email address" id="email">
              <br>
              <label for="pwd">Passowrd:</label>
              <br><br>
              <input type="password" class="form-control" placeholder="Enter your passsord" id="pwd">
              <br>
              <div class="form-check">
                  <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">Remember me
                  </label>
                  <br><br>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>



  <div id="SLogin" class="container-fluid body">
    <br><br><br>
    <div class="container">
        <h1 class="text-center" style="font-size:50px;font-family: italic;color: purple;border: 6px dotted purple;">Student Login</h1>
        <br><br>
        <form class="form-group" action="/page.php">
            <label for="email">Email Address:</label>
            <br><br>
            <input type="email" class="form-control" placeholder="Enter your email address" id="email">
            <br>
            <label for="pwd">Passowrd:</label>
            <br><br>
            <input type="password" class="form-control" placeholder="Enter your passsord" id="pwd">
            <br>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">Remember me
                </label>
                <br><br>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>


    <div id="About" class="container-fluid body">
      <div class="container">
      <br><br><br>
      <h1 class="text-center" style="font-size:50px;font-family: italic;color: purple;border: 6px dotted purple;">About us</h1>
      </div>
      <div class="container">
        <p>Learning Management System is maintained by Advance Computer World Platform</p>
        <figure class="figure">
          <img src="about_us.jpg"
            class="img-responsive center-block" data-toggle="Tooltip" title="Some random clicks of our students	" alt="Image is not founds">
          <figcaption class="figure-caption text-right">About us</figcaption>
        </figure>
        <h1 class="text-center">Services</h1>
        <ul>
          <h1 >Admin</h1>
              <li>Admin shall be able to login.</li> 
              <li>Admin shall be able to manage classes and sections</li>
              <li>Admin shall be able to manage teachers</li>
              <li>Admin shall be able to manage students</li>
              <li>Admin shall be able to manage students</li>
              <li>Admin shall be able to review attendance of teachers and students</li>
              <li>Admin shall be able to manage courses</li>
        </ul>
        <ul>
           <h1>Teacher</h1>
           <li>Teacher shall be able to loin</li>
           <li>Teacher shall be able to mark attendance</li>
           <li>Teacher shall be able to manage student results</li>
           <li>Teacher shall be able to upload and manage assignments</li>
           <li>Teacher shall be able to view personal information</li>
           <li>Teacher shall be able to submit a request</li>
        </ul>
        <ul>
            <h1>Student</h1>
            <li>Student shall be able to login</li>
            <li>Student shall be able to view academic details</li>
            <li>Teacher shall be able to view and submit assignments</li>
            <li>Student shall be able to view personal information</li>
            <li>Student shall be able to submit a request</li>
        </ul>
      </div>
    </div>
   <div class="container-fluid">
    <br>
    <div class="container header">
      <h1 class="text-center">Thanks for visiting Learning Management System</h1>
      <p class="text-center">Learning Management System is maintained by Mahmood Yousaf</p>
      <br>
    </div>

</div>
</body>
</html>
