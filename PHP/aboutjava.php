<?php ?>

<?php 

if($_POST){
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    
    if(!empty($uname)&&!empty($pass)){
        $link=mysqli_connect('localhost','root','root','DF');
          if(!$link){
               echo '<br>Unable to connect to Database.'
                .mysqli_connect_error();
                 die('I am exiting');
          }
          $sql="select * from user where uname='$uname' and pass='$pass'"	;  
          $result=mysqli_query($link,$query); 
          mysqli_close($link);
          if(!$result){
              echo "<br>".mysqli_error($link);
          }
          else{
                  echo "Succesfully Log In";
               header("Refresh: 3, url=blog.php");          
          }
        }
    else{
        echo '<span>Something is Missing!</span>'; 
        }
}

?>