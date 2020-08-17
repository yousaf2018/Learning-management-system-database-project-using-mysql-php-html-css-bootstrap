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
                <a class="navbar-brand" href="#" data-toggle="Tooltip" title="Admin panel">Admin Panel</a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="target1">
                    <ul class="nav navbar-nav">
                        <li><a href="#Smanage" data-toggle="Tooltip" title="Manage students">Manage Students</a></li>
                        <li><a href="#Tmanage" data-toggle="Tooltip" title="Manage teachers">Manage Teachers</a></li>
                        <li><a href="#Cmanage" data-toggle="Tooltip" title="Manage courses">Manage Courses</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" data-toggle="Tooltip" title="Attendence">Review Attendence</a>
                            <ul class="dropdown-menu">
                                <li><a href="#Attend_students" data-toggle="Tooltip" title="Attendence students">Students</a></li>
                                <li><a href="#Attend_teachers" data-toggle="Tooltip" title="Attendence teachers">Teachers</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" data-toggle="Tooltip" title="Manage classes and sections">Manage Classes and sections</a>
                            <ul class="dropdown-menu">
                                <li><a href="#Classes_manage" data-toggle="Tooltip" title="Manage Classes">Classes</a></li>
                                <li><a href="#sections_manage" data-toggle="Tooltip" title="Manage Sections">Sections</a></li>
                            </ul>
                        </li>
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









    <div id="Smanage" class="container-fluid body">
    <br><br><br>
    <div class="container">
        <h1 class="text-center" style="font-size:50px;font-family: italic;color: purple;border: 6px dotted purple;">Manage Students</h1>
        <br><br>
        <form class="form-group" action="manage_students.php" method="POST">
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Add Student</h1>
            <br><b>
            <label for="class">Student Name:</label>
            <br><br>
            <input type="name" class="form-control" placeholder="Enter Student name" name="name">
            <br>
            <label for="email">Email Address:</label>
                <br><br>
                <input type="email" class="form-control" placeholder="Enter email address" name = "email">
                <br>
            <label for="id_for_class">Student Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter id for class" name="id_for_student">


            <label for="id_for_class">Class Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter id for class" name="id_for_class">


            <label for="id_for_class">Section Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter id for section" name="id_for_section">

            <input type="hidden" name="action" value="addStudent">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Click here to add Student</button>
        </form>

        <form class="form-group" action="manage_students.php" method="POST">
            <br><br><br>
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Display All Students</h1>
            <br><b>
            <input type="hidden" name="action" value="displayStudents">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Click here to display students</button>
        </form>


        <form class="form-group" action="manage_students.php" method="POST">
            <br><br><br>
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Delete Student record</h1>
            <br><b>
            <label for="id_for_class">Student Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter id for Student to delete" name="id_for_class">
            <input type="hidden" name="action" value="deleteClass">
            <br><br><br>
            <button type="submit" class="btn btn-primary btn-block">Click here to delete class</button>
        </form>


        <form class="form-group" action="manage_students.php" method="POST">
            <br><br><br>
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Search Student</h1>
            <br><b>
            <label for="id_for_class">Student Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter id for student for search" name="id_for_class">
            <input type="hidden" name="action" value="searchClass">
            <br><br><br>
            <button type="submit" class="btn btn-primary btn-block">Click here to search students</button>
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




  <div id="Attend_students" class="container-fluid body">
    <br><br><br>
    <div class="container">
        <h1 class="text-center" style="font-size:50px;font-family: italic;color: purple;border: 6px dotted purple;">Student Attendence Review</h1>
        <br><br>
        <form class="form-group" action="student_attend_review.php" method="POST">
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Update Attendence</h1>
            <br><b>
            <label for="class">Attendence Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter attendence id" name="id_for_attendence">
            <br>
            <label for="id_for_class">Status:</label>
            <br><br>
            <input type="name" class="form-control" placeholder="Enter status Absent or present" name="status">
            <input type="hidden" name="action" value="updateAttend">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Click here to update attendence</button>
        </form>

        <form class="form-group" action="student_attend_review.php" method="POST">
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Search for Student Attendence</h1>
        <br><b>
            <label for="class">Student Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter Student id" name="id_for_students">
            <br>
            <label for="date">Attendence Date:</label>
            <br><br>
            <input type="DATE" class="form-control" placeholder="Enter Attendence date like 2018-22-12" name="date">
            <input type="hidden" name="action" value="search">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Click here to search student attendence</button>
        </form>


        <form class="form-group" action="student_attend_review.php" method="POST">
            <br><br><br>
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Delete Attendence</h1>
            <br><b>
            <label for="id_for_class">Attendence Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter id for Attendence to delete" name="id_for_attendence">
            <input type="hidden" name="action" value="deleteAttend">
            <br><br><br>
            <button type="submit" class="btn btn-primary btn-block">Click here to delete Attendence</button>
        </form>

    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>







<div id="Attend_teachers" class="container-fluid body">
    <br><br><br>
    <div class="container">
        <h1 class="text-center" style="font-size:50px;font-family: italic;color: purple;border: 6px dotted purple;">Teacher Attendence Review</h1>
        <br><br>
        <form class="form-group" action="teacher_attendence_review.php" method="POST">
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Update Attendence</h1>
            <br><b>
            <label for="class">Attendence Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter attendence id" name="id_for_attendence">
            <br>
            <label for="id_for_class">Status:</label>
            <br><br>
            <input type="name" class="form-control" placeholder="Enter status Absent or present" name="status">
            <input type="hidden" name="action" value="updateAttend">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Click here to update attendence</button>
        </form>

        <form class="form-group" action="teacher_attendence_review.php" method="POST">
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Search for Teacher Attendence</h1>
        <br><b>
            <label for="class">Teacher Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter teacher id" name="id_for_students">
            <br>
            <label for="date">Attendence Date:</label>
            <br><br>
            <input type="DATE" class="form-control" placeholder="Enter Attendence date like 2018-22-12" name="date">
            <input type="hidden" name="action" value="search">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Click here to search teacher attendence</button>
        </form>


        <form class="form-group" action="teacher_attendence_review.php" method="POST">
            <br><br><br>
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Delete Attendence</h1>
            <br><b>
            <label for="id_for_class">Attendence Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter id for Attendence to delete" name="id_for_attendence">
            <input type="hidden" name="action" value="deleteAttend">
            <br><br><br>
            <button type="submit" class="btn btn-primary btn-block">Click here to delete Attendence</button>
        </form>
        
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>











  <div id="Classes_manage" class="container-fluid body">
    <br><br><br>
    <div class="container">
        <h1 class="text-center" style="font-size:50px;font-family: italic;color: purple;border: 6px dotted purple;">Manage Classes</h1>
        <br><br>
        <form class="form-group" action="manage_classes.php" method="POST">
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Add Class</h1>
            <br><b>
            <label for="class">Class Name:</label>
            <br><br>
            <input type="name" class="form-control" placeholder="Enter Class name" name="class">
            <br>
            <label for="id_for_class">Class Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter id for class" name="id_for_class">
            <input type="hidden" name="action" value="addClass">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Click here to add class</button>
        </form>

        <form class="form-group" action="manage_classes.php" method="POST">
            <br><br><br>
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Display Classes</h1>
            <br><b>
            <input type="hidden" name="action" value="displayClasses">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Click here to display classes</button>
        </form>


        <form class="form-group" action="manage_classes.php" method="POST">
            <br><br><br>
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Delete Class</h1>
            <br><b>
            <label for="id_for_class">Class Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter id for class to delete" name="id_for_class">
            <input type="hidden" name="action" value="deleteClass">
            <br><br><br>
            <button type="submit" class="btn btn-primary btn-block">Click here to delete class</button>
        </form>


        <form class="form-group" action="manage_classes.php" method="POST">
            <br><br><br>
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Search Class</h1>
            <br><b>
            <label for="id_for_class">Class Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter id for class for search" name="id_for_class">
            <input type="hidden" name="action" value="searchClass">
            <br><br><br>
            <button type="submit" class="btn btn-primary btn-block">Click here to search class</button>
        </form>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>




<div id="sections_manage" class="container-fluid body">
    <br><br><br>
    <div class="container">
        <h1 class="text-center" style="font-size:50px;font-family: italic;color: purple;border: 6px dotted purple;">Manage Sections</h1>
        <br><br>
        <form class="form-group" action="manage_sections.php" method="POST">
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Add Section</h1>
            <br><b>
            <label for="class">Section Name:</label>
            <br><br>
            <input type="name" class="form-control" placeholder="Enter section name" name="class">
            <br>
            <label for="id_for_class">Section Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter id for section" name="id_for_class">
            <input type="hidden" name="action" value="addClass">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Click here to add sections</button>
        </form>

        <form class="form-group" action="manage_sections.php" method="POST">
            <br><br><br>
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Display Sections</h1>
            <br><b>
            <input type="hidden" name="action" value="displayClasses">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Click here to display Sections</button>
        </form>


        <form class="form-group" action="manage_sections.php" method="POST">
            <br><br><br>
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Delete Section</h1>
            <br><b>
            <label for="id_for_class">Section Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter id for section to delete" name="id_for_class">
            <input type="hidden" name="action" value="deleteClass">
            <br><br><br>
            <button type="submit" class="btn btn-primary btn-block">Click here to delete section</button>
        </form>


        <form class="form-group" action="manage_sections.php" method="POST">
            <br><br><br>
        <h1 class="text-center" style="font-size:40px;font-family: italic;color: purple;">Search Section</h1>
            <br><b>
            <label for="id_for_class">Section Id:</label>
            <br><br>
            <input type="number" class="form-control" placeholder="Enter id for section for search" name="id_for_class">
            <input type="hidden" name="action" value="searchClass">
            <br><br><br>
            <button type="submit" class="btn btn-primary btn-block">Click here to search section</button>
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
