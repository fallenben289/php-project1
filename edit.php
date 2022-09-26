<?php
include_once 'config.php';
?>
<br>
<a href="index.php">To Home</a>
<?php
if(count($_POST)>0) {
mysqli_query($con,"UPDATE personal_ledger set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', liabilities='" . $_POST['liabilities'] . "', date='" . $_POST['date']."' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM personal_ledger WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Personal Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
ID: <br>
<input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
Name: <br>
<input type="text" name="name"  value="<?php echo $row['name']; ?>">
<br>
Liabilities :<br>
<input type="number" name="liabilities"  value="<?php echo $row['liabilities']; ?>">
<br>
Date:<br>
<input type="date" name="date" class="txtField" value="<?php echo $row['date']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>