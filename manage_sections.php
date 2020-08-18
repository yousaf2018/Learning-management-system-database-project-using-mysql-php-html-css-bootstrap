<?php 
    $connection = mysqli_connect("localhost","root","","learning management system");
    session_start();
    if(!$connection){
        die("Connection failed: ". mysqli_connect_error());
    }
    else{

    $action = $_POST["action"];
    if($action=="addClass"){
        $class = $_POST["class"];
        $id_for_class = $_POST["id_for_class"];
        $id_for_class = intval($id_for_class);
        $class = filter_var($class,FILTER_SANITIZE_STRING);
        $query = "insert into level values($id_for_class,'$class')";
        if(mysqli_query($connection,$query)){
            echo '<script type="text/javascript"> window.onload=function(){
                alert("Insertion is successfull");}
                </script>';
                $connection->close();
                header('Refresh:2; url=admin_panel.php');
        }           
        else{
            echo "Error "."br".mysqli_error($connection);
            echo '<script type="text/javascript"> window.onload=function(){
                alert("Insertion is not successfull");}
                </script>';
            $connection->close();
            header('Refresh:2; url=admin_panel.php');
        }
    }
    else if($action=="displayClasses"){
      $query = "select * from level";
      $result = mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0){
              echo  "<!DOCTYPE html>";
              echo "<head>";
               echo  "<title>Showing sections</title>";
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
                            echo '<th>Section Id</th>';
                            echo '<th>Section Name</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            while($row = mysqli_fetch_assoc($result)){
                              echo '<tr>';
                              echo '<td>'.$row["level_id"].'</td>';
                              echo '<td>'.$row["name"].'</td>';
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
        $query = "delete from level where level_id=$id_for_class";
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
        $query = "select Name from level where level_id=$id_for_class";
        $result = mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0){
          foreach($result as $row){
              $name = $row["Name"];
          }
            echo "Section name ".$name." with id ".$id_for_class;
                $connection->close();
                echo "<br><br><br><br>";
                echo "<a href='admin_panel.php'>Click here to go back admin panel</a>";          }           
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