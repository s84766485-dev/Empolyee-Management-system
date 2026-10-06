<?php
include  "connection.php";

$data = $connection->query("SELECT * FROM emp");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Trebuchet MS", Arial, sans-serif;
}

body {
    min-height: 100vh;
    padding: 50px 20px;

    background: linear-gradient(
        135deg,
        #8e2de2,
        #ff416c,
        #ff9966
    );

    position: relative;
    overflow-x: auto;
}

/* Table */

table {
    width: 95%;
    max-width: 1100px;

    margin: 80px auto 0;

    border-collapse: separate;
    border-spacing: 0;

    background: white;

    border: 5px solid #24123a;
    border-radius: 25px;

    overflow: hidden;

    box-shadow: 12px 12px 0 #24123a;
}

/* Table heading */

th {
    background: #ffd166;

    color: #24123a;

    padding: 18px 15px;

    font-size: 17px;

    border-bottom: 4px solid #24123a;
}

/* Table data */

td {
    padding: 16px 12px;

    text-align: center;

    color: #24123a;

    font-size: 16px;

    border-bottom: 2px solid #ddd;
}

/* Alternate rows */

tr:nth-child(even) {
    background: #fff0f5;
}

tr:nth-child(odd) {
    background: #ffffff;
}

/* Hover row */

tr:hover td {
    background: #ffe0ec;

    transform: scale(1.01);
}

/* Buttons */

button {
    padding: 10px 18px;

    border: 3px solid #24123a;
    border-radius: 14px;

    font-size: 15px;
    font-weight: bold;

    cursor: pointer;

    color: #24123a;

    box-shadow: 4px 4px 0 #24123a;

    transition: 0.15s;
}

/* Update button */

a[href*="update"] button {
    background: #00d4ff;
}

/* Delete button */

a[href*="delete"] button {
    background: #ff5c8a;
}

/* Button hover */

button:hover {
    transform: translate(3px, 3px);

    box-shadow: 1px 1px 0 #24123a;
}

/* Button click */

button:active {
    transform: translate(5px, 5px);

    box-shadow: none;
}

/* Cartoon decorations */

body::before {
    content: "👨‍💼";

    position: fixed;

    top: 20px
}

    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Empolyee Name</th>
            <th>Empolyee Age</th>
            <th>Empolyee Father Name</th>
            <th>Department</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>


         <?php
        foreach ($data as $row){
        
        ?>
        <tr>
            <td><?php echo $row ["id"]?></td>
            <td><?php echo $row ["empname"]?></td>
            <td><?php echo $row ["empage"]?></td>
            <td><?php echo $row ["fname"]?></td>
            <td><?php echo $row ["department_name"]?></td>

            <td>
                <a href="updateform.php?id=<?php echo $row["id"] ?>">
                    <button>Update</button>
                </a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $row["id"]?>">
                    <button>Delete</button>
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>