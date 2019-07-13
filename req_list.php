<?php
session_start();
include 'dp.php';
$query1 = mysqli_query($connection,"select uid,contents from requests ");

while ($row1 = mysqli_fetch_array($query1)) {
	$uid=$row1['uid'];
	$query2=mysqli_query($connection,"select uname from users where uid='$uid'");
	while($row2 = mysqli_fetch_array($query1)) {
?>
<html>
<head></head>
<body>
<div class="form">
<h2>---Details---</h2>

<span>Content:</span> <?php echo $row2['uname'].":".$row1['content1']; ?>

</div>
</body>
</html>
<?php
}
}
?>