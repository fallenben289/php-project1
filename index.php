
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Simple CMS</title>
</head>

<?php
  echo "<h2>SIMPLE CMS</h2>";
    require "config.php";
?>


<body>
    <nav>
        <ul>
            <li><a href="#">Insert</a></li>
            <li><a href="#">View</a></li>
        </ul>
    </nav>

    <div class="container">
            <form method="POST" action="index.php">
            <label>Name:</label>
            <input type="text" name="name" required>
            <br/>
            <label>Liabilities:</label>
            <input type="number" required name="liabilities" min="0" value="0" step="0.01" required>
            <br/>
            <label>Date</label>
            <input type="date" name="date" required>
            <br/>
            <input type="submit" style="margin-top:0.4%" name="submit" value="Add Data">
            </form>
    </div>    

</body>
</html>