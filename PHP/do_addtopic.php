<?php
   
  if($_POST){
    $topic_owner= $_POST['topic_owner'];
    $topic_title= $_POST['topic_title'];
    $post_text=$_POST['post_text'];
    //if(!empty($topic_owner)&&!empty($topic_title)&&!empty($post_text){
            //connect to server and select database
            $conn = mysqli_connect('localhost','root','root','DF');
          
            if(!$conn){
                echo '<br>Unable to connect to Database.'
                .mysqli_connect_error();
                die('I am exiting');
                }
               
            //create and issue the first query
            $add_topic = "insert into forum_topics (topic_title,topic_create_time,topic_owner) values ( '$topic_title',
                now(), '$topic_owner')";
            $result1=mysqli_query($conn,$add_topic);
            
            if(!$result1){
                echo "<br>".mysqli_error($conn);
               
            }
            else{
                echo '<br>your topic is succesfully added.';
            }
        
            
            //get the id of the last query 
            $topic_id = mysqli_insert_id($conn);
            
            //create and issue the second query
            $add_post = "insert into forum_posts (topic_id,post_text,post_create_time,post_owner) values ('$topic_id','$post_text', 
            now(), '$topic_owner')";
            $result2=mysqli_query($conn,$add_post); 
            if(!$result2){
                echo "<br>".mysqli_error($conn);
            }
            else{
                echo '<br>your post is succesfully Posted.';
            }
            
            //create nice message for user
            $msg = "<P>The <strong>$topic_title</strong> topic has been created.</p>";
   
       // }
       // else{
         //   echo 'error occured';
        //}
    }
    
    else{
        echo "<span>Something is Missing!</span>";
        header('Refresh:3, url= ../registration.html');
    }
    ?>
      
         <html>
            <head>
            <title>New Topic Added</title>
            </head>
            <body>
            <h1>New Topic Added</h1>
            <?php print $msg; ?>
            </body>
            </html>          
            