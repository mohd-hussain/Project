<!DOCTYPE html>
<html>
    <head>
        <title>Your data</title>
        <style>
      		table{
      			border: 2px solid black;
      			margin-top: 50px;
                margin-left:50px;  
      		}
      		table td{
      			padding:10px;
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
    $uname= $_POST['uname'];
    $name= fix_name($_POST['sname']);
    $pass=$_POST['pass'];
    $semail= fix_email($_POST['semail']);
    $gender=$_POST['gender'];
    $address= fix_address($_POST['address']);
    $dob=$_POST['dob'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    if(!empty($uname)&&!empty($name)&&!empty($pass)&&
            !empty($semail)&&!empty($gender)&&!empty($address)&&
            !empty($dob)&&!empty($state)&&!empty($country)){

     
                //For Database Connection

$link=mysqli_connect('localhost','root','root','DF');
        if(!$link){
            echo '<br>Unable to connect to Database.'
            .mysqli_connect_error();
            die('I am exiting');
        }
        $query="Insert into User values ('$uname','$name','$pass',"
                . "'$semail','$gender',"
                . "'$address','$dob','$state','$country')";
        $result=mysqli_query($link,$query);
        if(!$result){
            echo "<br>".mysqli_error($link);
        }
        else{
            echo '<br><h4>You are Succesfully Log In.</h4>';
        }
        
        

}
}

else{
    echo "<span>Something is Missing!</span>";
    header('Refresh:3, url= ../registration.html');
}
?>
    </body>
</html>