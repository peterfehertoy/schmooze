<?php
 //require 'database.php'; //posts->cikkek //post->cikk
include 'admin/db/admindb.php';
 
    $sql = "SELECT * FROM cikkek ORDER BY date DESC"; 
	$cikkek=select($conn, $sql);

function loadCikksDesktop($cikkek){
		foreach ($cikkek as $cikk){  
			
			echo '	<a  class="poszthivas" page_name="'.$cikk['id'].'">'.$cikk['title'].'</a>
					<img src="img/hr.png">
					<p id="date">'.$cikk['date'].'<p><br>
									';
	}
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