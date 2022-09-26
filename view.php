<?php
    require "config.php";

    echo "<br>";
    echo "<a href=\"index.php\">To Home</a>";
    //To Get the Data to be Shown
    $sql = "SELECT id, name, liabilities, date FROM personal_ledger";
    $res = $con->query($sql);

    //Get the Output by rows
    echo "<table><tr><th>Name:</th>
    <th>Liabilities:</th>
    <th>Date:</th>
    <th>Operation:</th></tr>";
    if($res->num_rows >0) {
        while($row=$res->fetch_assoc()){
            echo "<tr><td>".$row["name"]."</td>"."<td>".$row["liabilities"]."</td>"."<td>".$row["date"]."</td><td>"."</td>";
            ?>





            <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
            <td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
            <?php
        }

        echo "</tr></table>";
    }else{
        echo "0 result";
    }

     //To Calculate the value of column of liabilities through the table of personal ledger
     $res = mysqli_query($con, 'SELECT SUM(liabilities) AS sum FROM personal_ledger');
     $row = $res->fetch_array();
     $sum = $row['sum'];


     
     echo "<h2>Total<br>Liabilities=".$sum."</h2>";
        echo " <form><input type=\"submit\" value=\"Print\" onclick=\"window.print()\">
        </form>";
        
     mysqli_close($con);
?>