<?php
 //require 'database.php';
require 'admin/db/admindb.php';
 
 //postid -> cikkid
 $cikkid = (int)$_GET['cikkid'];

    $sql = "SELECT * FROM cikkek WHERE id=".$cikkid;
	$result=select($conn, $sql);
	
foreach ($result as $cikk){
	echo "<div class='cikkTitle'>".$cikk['title']."</div>";
	echo"<br>";
	echo "<div class='cikkContent'>".$cikk['content']."</div>";	
}
function select($conn,$sql){
              
		try{
			$result = $conn->query($sql);
                   
			$error = mysqli_error($conn);
			
			$array = array();
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$array[] = $row;
				}
			} else {
			}
                     
			return $array;
		}catch(Exception $e){
            
			$conn->close();   
          
		}
	}
?>