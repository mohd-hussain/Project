<!DOCTYPE html>
<html>
    <head>
        <title>Your Registration Info</title>
        <style>
      		table{
      			border: 2px solid black;
      			margin-top: 50px;
                margin-left:50px;  
      		}
      		table td{
      			padding:2px;
      		}
      		table tr:nth-child(odd){
      			background-color:#e1a45f;
          }
      		table tr:nth-child(even){
      			background-color:#8f94a0;
      		}
      	</style>
    </head>
    <body>
   
<?php
require_once 'edit.php';
if($_POST){
    $uname=$_POST['uname'];
    $name=$_POST['sname'];
    $pass=$_POST['pass'];
    $semail=$_POST['semail'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    if(!empty($uname)&&!empty($name)&&!empty($pass)&&
            !empty($semail)&&!empty($gender)&&!empty($address)&&
            !empty($dob)&&!empty($state)&&!empty($country)){

     ?>
        <table>
            <tr>
                <td>UserName</td>
                <td><?php echo ($uname);?></td> 
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo fix_name($name);?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><?php echo ($pass);?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo fix_email($semail);?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php echo $gender;?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo fix_address($address);?></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><?php echo $dob;?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo $state;?></td>
            </tr>
            
            <tr>
                <td>Country</td>
                <td><?php echo $country;?></td>
            </tr>
            
        </table>
<?php
   }
   else{
       echo "<span>Something is Missing!</span>";
       header('Refresh:2, url= ../registration.html');
   }
}
else{
    header('Refresh:0, url= ../registration.html');
}
?>
    </body>
</html>
