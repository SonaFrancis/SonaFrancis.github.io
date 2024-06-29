<?php 
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // data base connection 
    $conn = new mysqli('locahost', 'root', '', 'contact_data');
    if($conn->connect_error){
      die('Connection Fail : ' $conn->connect_error);
    }else{
      $stmt = $conn->prepare("insert into registration(name, number, email, subject, message)
      values(?, ?, ?, ?, ?)");
      $stmt->bind_param("sisss", $name, $number, $email, $subject, $message);
      $stmt->execute();
      echo "Successful send message..";
      $stmt->close();
      $conn->close();
    }
 >






 