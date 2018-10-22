<?php
ini_set('display_errors',1); error_reporting(E_ALL);
   //connect to server and select database
   $conn = mysqli_connect('localhost','root','root','DF');
          
   if(!$conn){
       echo '<br>Unable to connect to Database.'
       .mysqli_connect_error();
       die('mysqli_error()');
       }
   
     
   //gather the topics
   $get_topics = "select topic_id, topic_title,
   date_format(topic_create_time, '%b %e %Y at %r') as fmt_topic_create_time,
  topic_owner from forum_topics order by topic_create_time desc";
 
  $get_topics_res = mysqli_query($conn,$get_topics);
  echo 'Hello';
  if (mysqli_num_rows($get_topics_res < 1)) {
     //there are no topics, so say so
     $display_block = "<P><em>No topics exist.</em></p>";
  } else {
     //create the display string
     $display_block = "
     <table  border=1>
     <tr>
     <th>TOPIC TITLE</th>
     <th># of POSTS</th>
     </tr>";
  
      while ($topic_info = mysqli_fetch_array($get_topics_res)) {
         $topic_id = $topic_info['topic_id'];
         $topic_title = stripslashes($topic_info['topic_title']);
         $topic_create_time = $topic_info['fmt_topic_create_time'];
         $topic_owner = stripslashes($topic_info['topic_owner']);
  
         //get number of posts
         $get_num_posts = "select count(post_id) from forum_posts
              where topic_id = $topic_id";
         $get_num_posts_res = mysqli_query($conn,$get_num_posts)
              or die(mysqli_error());
         $num_posts = mysqli_result($get_num_posts_res,0,'count(post_id)');
  
         //add to display
       $display_block .= "
         <tr> 
         <td><a href=\"showtopic.php?topic_id=$topic_id\">
         <strong>$topic_title</strong></a><br>
         Created on $topic_create_time by $topic_owner</td>
         <td align=center>$num_posts</td>
         </tr>";
     
      }
     //close up the table
     $display_block .= "</table>";    
     /*  while ($row = mysql_fetch_array($num_posts)) {
      echo '<tr>';
      foreach($row as $field) {
          echo '<td>' . htmlspecialchars($field) . '</td>';
      }
      echo '</tr>';
  }
  }*/
}
?>
<html>
  <head>
  <title>Topics in My Forum</title>
  </head> 
   <body>
  <h1>Topics in My Forum</h1>
  <?php print $display_block; ?>
  <P>Would you like to <a href="../addtopic.html">add a topic</a>?</p>
</body>
</html>
