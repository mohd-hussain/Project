<style>
body{
  background:lightyellow;
}
table{
  /* background:red; */
  /* border:1px solid black; */
  border-collapse:collapse;
  position:relative;
  left:50%;
  top:100px;
  width:700px;
  box-shadow: 0 0 5px 1px gray;
  background:white;
  /* border-radius:20px; */
  /* bottom:50%; */
  transform:translateX(-50%);
}
table td,th{
  border: 1px solid black;
  padding:10px;
}
td:nth-child(1),td:nth-child(2){
  animation:HS 2s ease-in-out 0s;
}
td:nth-child(4){
  animation:RS 2s ease-in-out 0s;

}

@keyframes HS{
  0%{
    opacity:0;
    transform:translateX(-300px);
  }
  100%{
    opacity:1;
    transform:translateX(0px);
  }
}
@keyframes RS{
  0%{
    opacity:0;
    transform:translateX(300px);
  }
  100%{
    opacity:1;
    transform:translateX(0px);
  }
}

  </style>

<?php
ini_set('display_errors',1); error_reporting(E_ALL);
   //connect to server and select database
   $conn = mysqli_connect('localhost','root','root','DF');
          
   if(!$conn){
       echo '<br>Unable to connect to Database.'
       .mysqli_connect_error();
       die('mysqli_error()');
       }

    else{
      // echo "connection successfull";
    }

    $sql = "Select * from forum_topics";
    $result = $conn->query($sql);
?>
<table>
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Create time</th>
            <th>Owner</th>

        </thead>
        
<?php
    if($result){
      while($i= $result->fetch_assoc()){
        // echo $i['topic_title'];
        ?>
            <tbody>
            <td><?php echo $i['topic_id']?></td>
            <td><?php echo $i['topic_title']?></td>
            <td><?php echo $i['topic_create_time']?></td>
            <td><?php echo $i['topic_owner']?></td>
            </tbody>


        
     <?php }
    ?>
    

</table>
<?php    

}
    else{
      echo "No topic Exist";
    }
?>

   
  