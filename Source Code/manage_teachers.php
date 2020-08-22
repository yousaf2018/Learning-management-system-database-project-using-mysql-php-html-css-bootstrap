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
        $Aid = $_SESSION["admin_id"];
        $age = $_POST["age"];
        $age = intval($age);
        $birth = $_POST["birth"];
        $gender = $_POST["gender"];
        $personal = $_POST["personal"];
        $personal = intval($personal);
        $id_for_student = $_POST["id_for_student"];
        $id_for_student = intval($id_for_student);
        $name = filter_var($name,FILTER_SANITIZE_STRING);
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
        $query = "insert into teachers values($id_for_student,'$name','$email')";
        $query_2 = "insert into manage_teachers values($Aid,$id_for_student,$personal)";
        $query_3 = "insert into personal_info values($personal,$age,'$birth','$gender')";
        if(mysqli_query($connection,$query) && mysqli_query($connection,$query_3)){
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
      $query = "select * from teachers inner join manage_teachers on teachers.Tid=manage_teachers.teacher_id";
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
                            echo '<th>Teacher Id</th>';
                            echo '<th>Teacher Name</th>';
                            echo '<th>Email</th>';
                            echo '<th>Personal Id</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            while($row = mysqli_fetch_assoc($result)){
                              echo '<tr>';
                              echo '<td>'.$row["Tid"].'</td>';
                              echo '<td>'.$row["Name"].'</td>';
                              echo '<td>'.$row["Email"].'</td>';
                              echo '<td>'.$row["pid"];
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
        $query = "delete from teachers where Tid=$id_for_class";
        if(mysqli_query($connection,$query)){
            echo '<script type="text/javascript"> window.onload=function(){
                alert("Deletion is successfull");}
                </script>';
                $connection->close();
                header('Refresh:2; url=admin_panel.php');
        }           
        else{
            echo "Error ".mysqli_error($connection);
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
        $query = "select * from teachers inner join manage_teachers on teachers.Tid=manage_teachers.Teacher_id  and teachers.Tid=$id_for_class";
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
                          echo '<th>Teacher Id</th>';
                          echo '<th>Teacher Name</th>';
                          echo '<th>Email</th>';
                          echo '</tr>';
                          echo '</thead>';
                          echo '<tbody>';
                          while($row = mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<td>'.$row["Tid"].'</td>';
                            echo '<td>'.$row["Name"].'</td>';
                            echo '<td>'.$row["Email"].'</td>';
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