<?php

include('database.php');


if(isset($_GET['edit'])){

    $id= $_GET['edit'];
  $editData= edit_data($connection, $id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
    update_data($connection,$id);
    
    
} 
function edit_data($connection, $id)
{
 $query= "SELECT * FROM user_details WHERE id= $id";
 $exec = mysqli_query($connection, $query);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}

// update data query
function update_data($connection, $id){

      $Client_Name = legal_input($_POST['Client_Name']);
      $Project_Name= legal_input($_POST['Project_Name']);
      $Project_ID = legal_input($_POST['Project_ID']);
      $Start_Date1 = legal_input($_POST['Start_Date1']);
      $End_Date = legal_input($_POST['End_Date']);
      $Domain = legal_input($_POST['Domain']);

      $query=" UPDATE user_details 
            SET Client_Name ='$Client_Name',
                Project_Name='$Project_Name',
                Project_ID='$Project_ID' ,
                Start_Date1='$Start_Date1', 
                End_Date='$End_Date', 
                Domain='$Domain' WHERE id=$id";
                // WHERE id=$id";
      $exec= mysqli_query($connection,$query);
  
      if($exec){
         header('location:user-table.php');
      
      }else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
         echo $msg;  
      }
}

// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>