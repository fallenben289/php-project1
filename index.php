
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

  //Config File is required to be included
    require "config.php";
?>


<body>
    <nav>
        <ul>
            <li><a href="#Insert">Insert</a></li>
            <li><a href="#View">View</a></li>
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
    
    <?php


//To Avoid warning array key undefined
if (isset($_POST['liabilities'])) {
    $name= $_POST["name"];
    $liabilities= $_POST["liabilities"];
    $date= $_POST["date"];

    //To Insert Data to MYSQL
    $sql = "INSERT INTO personal_ledger (name, liabilities, date) VALUES ('$name','$liabilities','$date')";
}

    //Check if the Form is not empty
    if (!isset($_POST['name']) and !isset($_POST['liabilities']) and !isset($_POST['date'])) {
        echo "Not Inserted.";
    } else {
        //If Form is filled
        if (mysqli_query($con, $sql)) {
            //After checking the filled form insert the needed value
            echo "New Record Inserted.";
        }
    }


    //To Calculate the value of column of liabilities through the table of personal ledger
            $res = mysqli_query($con, 'SELECT SUM(liabilities) AS sum FROM personal_ledger');
            $row = $res->fetch_array();
            $sum = $row['sum'];


            
            echo "<h2>Total<br>Liabilities=".$sum."</h2>";
           
        mysqli_close($con);

    ?>

</body>
</html>