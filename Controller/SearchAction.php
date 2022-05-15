<?php

		function test($data)	
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		if ($_SERVER['REQUEST_METHOD'] === "GET")
         {
         	$search = test($_GET['q']);

         	if (empty($search))
         	{
                echo "Fill up the form properly";
					echo "<br>";
         	}
         }

require '../model/db_connection.php';

$sql = "SELECT * FROM event";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
if($row["ename"]==$search)
{
echo "<br>Event type=".$row["etype"]. "<br>" ."Date".$row['doe']."<br>"."Fee".$row['efee'];
//echo "string";
}
}}
 else {
echo "0 results";
}
?>		