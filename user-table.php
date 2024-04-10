<?php

include('read-script.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Project Tracking System</title>
<style>
     table, td, th {  
      border: 1px solid #ddd;
      text-align: left;
    }
    
    table {
      border-collapse: collapse;
      max-width: 100%;
     width:90%;

    }
    .table-data{
      
      width:65%;
      float: right;
    }
    th, td {
      padding: 15px;
    }
body{
    overflow-x: hidden;
}

* {
  box-sizing: border-box;}
</style>
</head>
<body>


<div class="table-data">
        <div class="list-title">
 <h2>Project Tracking System</h2>
          
            </div>

    <table border="1">

        <tr>

            <th>Client ID</th>
            <th>Client Name</th>
            <th>Project Name</th>
            <th>Project ID</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Domain</th>
            <th>Edit</th>
            <th>Delete</th>


        </tr>
        
<?php

        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){
            
?> <tr>
<td><?php echo $sn; ?></td>
<td><?php echo $data['Client_Name']; ?></td>
<td><?php echo $data['>Project_Name']; ?></td>
<td><?php echo $data['Project_ID']; ?></td>
<td><?php echo $data['Start_Date']; ?></td>
<td><?php echo $data['End_Date']; ?></td>
<td><?php echo $data['Domain']; ?></td>
<td><a href="update-form.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
<td><a href="delete-script.php?delete=<?php echo $data['id']; ?>">Delete</a></td>
</tr> <?php

      $sn++; }

      }else{
            
?>

      <tr>
        <td colspan="7">No Data Found</td>
      </tr>
                
<?php

    }
?>
 
    </table>
    </div>

</body>
</html>