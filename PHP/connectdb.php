
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
            echo '<br>You are Succesfully Log In.';
        }
        
        

}
}

else{
    echo "<span>Something is Missing!</span>";
    header('Refresh:3, url= ../registration.html');
}
?>
  