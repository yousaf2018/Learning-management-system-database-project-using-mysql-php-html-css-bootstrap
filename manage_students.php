<?php 
    $connection = mysqli_connect("localhost","root","","learning management system");
    session_start();
    if(!$connection){
        die("Connection failed: ". mysqli_connect_error());
    }
    else{

    $action = $_POST["action"];
    if($action=="addStudent"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $id_for_class = $_POST["id_for_class"];
        $Aid = $_SESSION["admin_id"];
        $id_for_student = $_POST["id_for_student"];
        $id_for_section = $_POST["id_for_section"];
        $age = $_POST["age"];
        $age = intval($age);
        $birth = $_POST["birth"];
        $gender = $_POST["gender"];
        $id_for_class = intval($id_for_class);
        $id_for_student = intval($id_for_student);
        $id_for_section = intval($id_for_section);
        $cgpa = $_POST["cgpa"];
        $cgpa = floatval($cgpa);
        $inter = $_POST["inter"];
        $inter = intval($inter);
        $personal = $_POST["personal"];
        $personal = intval($personal);
        $academic = $_POST["academic"];
        $action = intval($academic);
        $matric = $_POST["matric"];
        $matric = intval($matric);
        $name = filter_var($name,FILTER_SANITIZE_STRING);
        $birth = filter_var($birth,FILTER_SANITIZE_STRING);
        $gender = filter_var($gender,FILTER_SANITIZE_STRING);
        $query = "insert into students values($id_for_student,'$name','$email')";
        $query_4 = "insert into academic_details values($academic,$cgpa,$inter,$matric)";
        if(mysqli_query($connection,$query) && mysqli_query($connection,$query_3)
            && mysqli_query($connection,$query_4)){
              $query_2 = "insert into manage_students values($Aid,$id_for_student,$id_for_section,$id_for_class,$personal,$academic)";
              $result = mysqli_query($connection,$query_2);
            echo '<script type="text/javascript"> window.onload=function(){
                alert("Insertion is successfull");}
                </script>';
                $connection->close();
               header('Refresh:2; url=admin_panel.php');
        }           
        else{
            echo "Error ".mysqli_error($connection);
            echo '<script type="text/javascript"> window.onload=function(){
                alert("Insertion is not successfull");}
                </script>';
            $connection->close();
           header('Refresh:2; url=admin_panel.php');
        }
    }
    else if($action=="displayStudents"){
      $query = "select * from students inner join manage_students on students.std_id=manage_students.std_id";
      $result = mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0){
              echo  "<!DOCTYPE html>";
              echo "<head>";
               echo  "<title>Showing classes</title>";
               echo  '<meta charset="utf-8">';
               echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
               echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
               echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
               echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
               echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
              echo '</head>';
              echo '<body>';
                  
              echo '<div class="container-fluid">';
                            echo "<br>";
                            echo '<table class="table table-dark table-striped">';
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>Student Id</th>';
                            echo '<th>Student Name</th>';
                            echo '<th>Email</th>';
                            echo '<th>Aid</th>';
                            echo '<th>Section Id</th>';
                            echo '<th>Class Id</th>';
                            echo '<th>Personal Id</th>';
                            echo '<th>Academic Id</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            while($row = mysqli_fetch_assoc($result)){
                              echo '<tr>';
                              echo '<td>'.$row["std_id"].'</td>';
                              echo '<td>'.$row["Name"].'</td>';
                              echo '<td>'.$row["Email"].'</td>';
                              echo '<td>'.$row["Aid"].'</td>';
                              echo '<td>'.$row["level_id"].'</td>';
                              echo '<td>'.$row["department_id"].'</td>';
                              echo '<td>'.$row["pid"];
                              echo '<td>'.$row["acad_id1"];
                              echo '</tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                       echo '</div>';
                      echo '<div class="container-fluid">';
                       echo '<a href="admin_panel.php"><button type="submit" class="btn btn-primary btn-block">Click here to Back admin panel</button></a>';
                       echo '</div>';
                    echo '</body>';
                    echo '</html>';
            
        }
        else{
          echo "No records is found";
          echo "<br><br><br><br>";
          echo "<a href='admin_panel.php'>Click here to go back admin panel</a>";  
        }
        }

      else if($action=="deleteClass"){
        $id_for_class = $_POST["id_for_class"];
        $id_for_class = intval($id_for_class);
        $query = "delete from students where std_id=$id_for_class";
        if(mysqli_query($connection,$query)){
            echo '<script type="text/javascript"> window.onload=function(){
                alert("Deletion is successfull");}
                </script>';
                $connection->close();
                header('Refresh:2; url=admin_panel.php');
        }           
        else{
            echo "Error ".$query."br".mysqli_error($connection);
            echo '<script type="text/javascript"> window.onload=function(){
                alert("Deletion is not successfull");}
                </script>';
            $connection->close();
            header('Refresh:2; url=admin_panel.php');
        }
      }


      else if($action=="searchClass"){
        $id_for_class = $_POST["id_for_class"];
        $id_for_class = intval($id_for_class);
        $query = "select * from students inner join manage_students on students.std_id=manage_students.std_id and students.std_id=$id_for_class";
        $result = mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0){
            echo  "<!DOCTYPE html>";
            echo "<head>";
             echo  "<title>Showing classes</title>";
             echo  '<meta charset="utf-8">';
             echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
             echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
             echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
             echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
             echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
            echo '</head>';
            echo '<body>';
                
            echo '<div class="container">';
                          echo "<br>";
                          echo '<table class="table table-dark table-striped">';
                          echo '<thead>';
                          echo '<tr>';
                          echo '<th>Student Id</th>';
                          echo '<th>Student Name</th>';
                          echo '<th>Email</th>';
                          echo '<th>Aid</th>';
                          echo '<th>Section Id</th>';
                          echo '<th>Class Id</th>';
                          echo '</tr>';
                          echo '</thead>';
                          echo '<tbody>';
                          while($row = mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<td>'.$row["std_id"].'</td>';
                            echo '<td>'.$row["Name"].'</td>';
                            echo '<td>'.$row["Email"].'</td>';
                            echo '<td>'.$row["Aid"].'</td>';
                            echo '<td>'.$row["level_id"].'</td>';
                            echo '<td>'.$row["department_id"].'</td>';
                            echo '</tr>';
                          }
                          echo '</tbody>';
                          echo '</table>';
                     echo '</div>';
                    echo '<div class="container-fluid">';
                     echo '<a href="admin_panel.php"><button type="submit" class="btn btn-primary btn-block">Click here to Back admin panel</button></a>';
                     echo '</div>';
                  echo '</body>';
                  echo '</html>';
          
      }      
        else{
            echo "Error br".mysqli_error($connection);
            echo '<script type="text/javascript"> window.onload=function(){
                alert("No result is found");}
                </script>';
            $connection->close();
            header('Refresh:2; url=admin_panel.php');
        }
      }
       
        
    }
  ?>