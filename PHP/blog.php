<!Doctype html>
<?phpsession_start();?>
<html>
    <head>
    <title>blog</title>
	<link rel="stylesheet" href="../style1.css">
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
	
	<?php
	if($_POST){
		if($_POST['logout']=="yes"){
			session_destroy();
		} 
	}
    ?>

    <div>
        <div><h6>Welcome $uname</h6></div>
	</div>
	
    <div class="container">
		<div class="abc">
        <div class="a">
		         <a href="aboutjava.php">JAVA</a>
                 <a href="aboutjava.php">Discussion</a>
		</div>
		
		<div class="b">
		         <a href="abouthtml.php">HTML</a>
                 <a href="abouthtml.php">Discussion</a>
		</div>
		
		<div class="c">
		         <a href="aboutcss.php">CSS</a></td>
                 <a href="aboutcss.php">Discussion</a></td>
		</div>
		
		<div class="d">
		         <a href="aboutphp.php">PHP</a></td>
                 <a href="aboutphp.php">Discussion</a></td>
		</div>
		
		<div class="e">
		         <a href="aboutC.php">C</a></td>
                 <a href="aboutC.php">Discussion</a></td>
		</div>
		
		<div class="f">
		         <a href="aboutpython.php">PYTHON</a></td>
                 <a href="aboutpython.php">Discussion</a></td>
		</div>
		</div>
	</div>
	<div class="btn1">
		<input type="submit" value="logOut">
	</div>
    
	
	
        
</body>
</html>

