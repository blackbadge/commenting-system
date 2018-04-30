

<?php

function givecomments($conn){
	if(isset($_POST['commsubmit'])){
		$uid=$_POST['uid'];
		$uidmessage=$_POST['message'];

		$sql = "INSERT INTO comments (uid,message) VALUES ('$uid','$uidmessage')";
		$result=mysqli_query($conn,$sql);
 
	}
}



function getcomments($conn) {
	
	$sql="SELECT * FROM comments";
	$result=mysqli_query($conn,$sql);
	while($row = $result->fetch_assoc()) {
		echo "<div class='commentboxes'>";
		echo "<h4>".$row['uid']."</h4>";
	    echo $row['message']."<br>";
	   ?><div style="margin-left:550px"><?php 
	  ?> <i class="glyphicon glyphicon-thumbs-up" style="color: #008000"></i><?php
	   
       echo "\n".$row['upvote']."\n"."upvote"."<br>";
       ?> <i class="glyphicon glyphicon-thumbs-down" style="color: #ff0000"></i><?php
       echo "\n".$row['downvote']."\n"."downvote"."<br>";
     ?> </div><?php
        echo"</div>";
}
}


