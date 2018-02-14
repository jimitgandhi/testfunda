<?php
    include "db-connect.php";
    global $connection;
    $query="SELECT * FROM information";
    $result=mysqli_query($connection,$query);
    if (!$result) {
        die("Query failed");
    }
    
?>

<!DOCTYPE html>
    <title>
        Form Data
    </title>
    <style>
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid black;
            width: 280px;
        }
        thead {
            font-size: 22px;
            font-weight: bold;
        }
        table {
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <body>
        <table>
            <thead>
                <td>
                    Name
                </td>
                <td>
                    Contact Number
                </td>
                <td>
                    E-Mail Address
                </td>
                <td>
                    Date of Birth
                </td>
            </thead>
            <tbody>
                <?php
                    while($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                    <?php
                        print($row["Name"]);
                    ?>
                    </td>
                    <td>
                    <?php
                        print($row["Contact"]);
                    ?>
                    </td>
                    <td>
                    <?php
                        print($row["Email"]);
                    ?>
                    </td>
                    <td>
                    <?php
                        print($row["DOB"]);
                    ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>