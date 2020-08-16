<?php 
    $connection = mysqli_connect("localhost","root","","learning management system");
    session_start();
    if(!$connection){
        die("Connection failed: ". mysqli_connect_error());
    }
    else{

    $action = $_POST["action"];
    if($action=="updateAttend"){
        $status = $_POST["status"];
        $id_for_attend = $_POST["id_for_attendence"];
        $id_for_attend = intval($id_for_attend);
        $status = filter_var($status,FILTER_SANITIZE_STRING);
        $query = "update attendence set status='$status' where attend_id = $id_for_attend";
        if(mysqli_query($connection,$query)){
            echo '<script type="text/javascript"> window.onload=function(){
                alert("Updation is successfull");}
                </script>';
                $connection->close();
                header('Refresh:2; url=admin_panel.php');
        }           
        else{
            echo "Error ".$query."br".mysqli_error($connection);
            echo '<script type="text/javascript"> window.onload=function(){
                alert("Updation is not successfull");}
                </script>';
            $connection->close();
            header('Refresh:2; url=admin_panel.php');
        }
    }
    else if($action=="search"){
        $date = $_POST["date"];
        $id_for_students = $_POST["id_for_students"];
        $id_for_students = intval($id_for_students);
        $date  = filter_var($date,FILTER_SANITIZE_STRING);
        $query = "SELECT * from attendence INNER join student_attendence on attendence.attend_id=student_attendence.Attend_id and attendence.date='$date' and student_attendence.std_id=$id_for_students";
        $result = mysqli_query($connection,$query);
        $count = mysqli_num_rows($result);
        if($count==1){
            foreach($result as $row){
                $status = $row["status"];
            }
            echo "Student with id ".$id_for_students." is ".$status." on date ".$date;
            echo "<br><br><br><br>";
            echo "<a href='admin_panel.php'>Click here to go back admin panel</a>";  
                $connection->close();
        }           
        else{
            echo "Error ".mysqli_error($connection);
            echo '<script type="text/javascript"> window.onload=function(){
                alert("No record is found");}
                </script>';
            $connection->close();
             header('Refresh:2; url=admin_panel.php');
        }
    }

      else if($action=="deleteAttend"){
        $id_for_attendence = $_POST["id_for_attendence"];
        $id_for_attendence = intval($id_for_attendence);
        $query = "delete from attendence where attend_id=$id_for_attendence";
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
       
        
    }
  ?>