<?php

	$name = $_POST['name'];
	$servername = "localhost";
	$username = "root";
	$password = "cloudera";
	$databaseName = "cloudwick";
	$conn = new mysqli($servername, $username, $password, $databaseName);
	
	$sql_insert = "INSERT INTO users (name) VALUES('$name')";
        $sql_select = "select * from users";
        $query = mysqli_query($conn, $sql_select);

        if(mysqli_num_rows($query) > 0)
        {
?>
        <table>
                <?php
                while($row = mysqli_fetch_assoc($query))
                {
                        ?>
                                <tr>
                                <td><?php echo $row['name']; ?></td>
                        </tr>

                <?php
        	}
        	?>
        </table>
        <?php
        }

        mysqli_close($conn);
	?>
