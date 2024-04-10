<?php

include('update-script.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Project Tracking System</title>
<style>
    
body{
    overflow-x: hidden;
}

* {
  box-sizing: border-box;}
.user-detail form {
    height: 100vh;
    border: 2px solid #f1f1f1;
    padding: 16px;
    background-color: white;
    }
    .user-detail{
      width: 30%;
    float: left;
    }

input{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;}
button[type=submit] {
    background-color: #434140;
    color: #ffffff;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    font-size: 20px;}
label{
  font-size: 18px;;}
button[type=submit]:hover {
  background-color:#3d3c3c;}
  .form-title a, .form-title h2{
   display: inline-block;
   
  }
  .form-title a{
      text-decoration: none;
      font-size: 20px;
      background-color: green;
      color: honeydew;
      padding: 2px 10px;
  }
 
</style>
</head>
<body>
<!--====form section start====-->

<div class="user-detail">

    <div class="form-title">
    <h2>Update Form</h2>
    
    
    </div>
 
    <p style="color:red">
    
<?php if(!empty($msg)){echo $msg; }?>
</p>
    <form method="post" action="">
          <label>Client Name</label>
        
<input type="text" placeholder="Enter Client Name" name="Client_Name" required value="<?php echo isset($editData) ? $editData['Client_Name'] : '' ?>">

          <label>Project_Name</label>
        
<input type="text" placeholder="Enter Project name" name="Project_Name" required value="<?php echo isset($editData) ? $editData['Project_Name'] : '' ?>">

          <label>Project ID</label>
<input type="int" placeholder="Enter Project ID" name="Project_ID" required value="<?php echo isset($editData) ? $editData['Project_ID'] : '' ?>">

          <label>Start Date</label>
        
<input type="date" placeholder="Enter Start date" name="Start_Date1" required value="<?php echo isset($editData) ? $editData['Start_Date1'] : '' ?>">

          <label>End Date</label>
        
<input type="date" placeholder="Enter End date" name="End_Date" required value="<?php echo isset($editData) ? $editData['End_Date'] : '' ?>">
          
          <label>Domain</label>
        
<input type="text" placeholder="Enter Domain" name="Domain" required value="<?php echo isset($editData) ? $editData['Domain'] : '' ?>">
                         
<button type="submit" name="update">Submit</button>
          
    </form>
        </div>
</div>
<!--====form section start====-->


</body>
</html>