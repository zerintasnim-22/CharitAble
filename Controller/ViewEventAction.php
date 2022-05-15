<?php 
    session_start(); 
    require '../model/db_connection.php';
?>
<!DOCTYPE html>
<html>
<?php include('../views/templates/header.php')?>

<h1>Manage Event Action</h1>	
	
	<?php

		function test($data)	
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}		
	?>
	<fieldset>
		<legend>Event</legend>	
		<?php

		$query = "SELECT sn, ename, etype, doe, efee FROM event";
$result = mysqli_query($conn, $query);
?>
<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>S.N</th>
    <th>ename</th>
    <th>etype</th>
    <th>doe</th>
    <th>efee</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  /*$sn=1;
*/  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $data['sn']; ?> </td>
   <td><?php echo $data['ename']; ?> </td>
   <td><?php echo $data['etype']; ?> </td>
   <td><?php echo $data['doe']; ?> </td>
   <td><?php echo $data['efee']; ?> </td>
 <tr>
 <?php
  /*$sn++;*/}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>

 <?php } ?>
 </table>
</fieldset>
</html>