

<!Doctype html>
<?php

session_start();
?>
<html>
    <head>
    <title>blog</title>
    <link rel="stylesheet" href="../style1.css">
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
<header>
		<nav>
			<ul>
				<li><a href="../index.html" title="Home">Home</a></li>

				<li><a href="../about.html" title=" About Me">About Us</a></li>

				<li><a href="../forum.html" title="Forum">Forum</a></li>

				<li><a href="../message.html" title="Message">Message</a></li>

				<li><a href="../contact.html" title="Reach Me">Contact</a></li>
			</ul>
		</nav>
    </header>

    <div>
        <div><h6>Welcome $uname</h6></div>
    </div>

    <div>
        <div >
           <table>
               <tr>
                   <td><a href="aboutjava.php">JAVA</a></td>
                   <td><a href="discussion.php">Discussion</a></td>
               </tr>
               <tr>
                   <td><a href="aboutphp.php">PHP</a></td>
				   <td><a href="discussion.php">Discussion</a></td>
               </tr>
               <tr>
                   <td><a href="aboutC.php">C</a></td>
				   <td><a href="discussion.php">Discussion</a></td>
               </tr>
               <tr>
                   <td><a href="abouthtml.php">HTML</a></td>
				   <td><a href="discussion.php">Discussion</a></td>
               </tr>
           </table>
        </div>
    </div>
    <?php
	if($_POST){
		if($_POST['logout']=="yes"){
			session_destroy();
		} 
	}
	if(isset($_SESSION['uname']))
	{
		

		echo "<br>"
			."<form method='post' action='blog.php'>"
			."<input type='hidden' name='logout' value='yes'/>"
			."<input type='submit' value='Logout'/>"
			."</form>";
	}
		else{
            echo "error";
			//header("Refresh:5 , url=login.php");

		}?>
        
</body>
</html>

