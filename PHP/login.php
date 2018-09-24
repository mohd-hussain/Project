<?php session_start(); ?>

	
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
                      $sql="select * from User where uname='$uname' ";  
                    //   $result=mysqli_query($link,$query);
                    $result=$link->query($sql); 
                    //   mysqli_close($link);
                    $res=$result->fetch_assoc();
                    if($res['pass']!=$pass){
                        echo "<span>Incorrect Password</span>";
                        header('Refresh:3 , url=../index.html');
                    }
                    else{
                        header("Refresh:2, url=blog.php");
                    }
                }
                    //   if(!$result){
                        //   echo "<br>".mysqli_error($link);
                    //   }
                    //   else{
                          	// echo "Succesfully Log In";
					    //    header("Refresh: 3, url=blog.php");          
                    //   }
                    // }
      
            
            }
            else{
                echo '<span>Something is missing!</span>'; 
                }
session_destroy();
?>
