<?php

include('database.php');

if(isset($_POST['create'])){
   
      //$msg=insert_data($connection);   
      insert_data($connection);  
      
}

// insert query
function insert_data($connection){
   
      $Client_Name= legal_input($_POST['Client_Name']);
      $Project_Name= legal_input($_POST['Project_Name']);
      $Project_ID = legal_input($_POST['Project_ID']);
      $Start_Date1 = legal_input($_POST['Start_Date1']);
      $End_Date = legal_input($_POST['End_Date']);
      $Domain = legal_input($_POST['Domain']);

      // $full_name= mysqli_real_escape_string($connection,
      // $_POST['full_name']);
      // $email_address= mysqli_real_escape_string($connection,
      // $_POST['email_address']);
      // $city = mysqli_real_escape_string($connection,
      // $_POST['city']);
      // $country = mysqli_real_escape_string($connection,
      // $_POST['country']);

      $query="INSERT INTO user_details (Client_Name,Project_Name,Project_ID,Start_Date1,End_Date,Domain) VALUES ('$Client_Name','$Project_Name','$Project_ID','$Start_Date1','$End_Date','$Domain')";
      $exec= mysqli_query($connection,$query);
      if($exec){
        header("location:Internals.php");  
        // $msg = "Data was created sucessfully";
        // return $msg;       
      
      }else{
        $msg = "Error: " . $query . "<br>" . mysqli_error($connection);
      }
      
}

// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
// header("refresh:10;url=crud.php");      
?>