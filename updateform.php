<?php
include "connection.php";

$id=$_GET["id"];

$statement = $connection->prepare("SELECT * FROM emp WHERE id=?");

$statement->execute(["$id"]);

$data = $statement->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ```css
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Trebuchet MS", Arial, sans-serif;
}

body {
    min-height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;

    background: linear-gradient(
        135deg,
        #11998e,
        #38ef7d,
        #d4fc79
    );

    position: relative;
    overflow: hidden;
}

/* Update heading */

h1 {
    position: absolute;

    top: 60px;

    background: #fff;

    color: #12372a;

    padding: 15px 35px;

    border: 5px solid #12372a;
    border-radius: 20px;

    font-size: 32px;

    box-shadow: 8px 8px 0 #12372a;

    transform: rotate(-2deg);

    z-index: 2;
}

/* Form card */

form {
    width: 420px;

    background: #fffdf2;

    padding: 45px 35px;

    border: 5px solid #12372a;
    border-radius: 30px;

    box-shadow: 12px 12px 0 #12372a;

    text-align: center;

    position: relative;
    z-index: 1;
}

/* Text fields */

input[type="text"] {
    width: 100%;

    padding: 16px;

    margin-bottom: 18px;

    border: 4px solid #12372a;
    border-radius: 16px;

    background: #f1ffe9;

    color: #12372a;

    font-size: 16px;

    outline: none;

    transition: 0.2s;
}

/* Focus */

input[type="text"]:focus {
    background: white;

    border-color: #11998e;

    transform: scale(1.03);

    box-shadow: 5px 5px 0 #11998e;
}

/* Submit */

input[type="submit"] {
    width: 100%;

    padding: 16px;

    margin-top: 5px;

    background: #ffd166;

    color: #12372a;

    border: 4px solid #12372a;
    border-radius: 18px;

    font-size: 18px;
    font-weight: bold;

    cursor: pointer;

    box-shadow: 6px 6px 0 #12372a;

    transition: 0.15s;
}

/* Hover */

input[type="submit"]:hover {
    background: #ffbd2e;

    transform: translate(4px, 4px);

    box-shadow: 2px 2px 0 #12372a;
}

/* Click */

input[type="submit"]:active {
    transform: translate(7px, 7px);

    box-shadow: none;
}

/* Cartoon decoration */

body::before {
    content: "✏️";

    position: absolute;

    top: 15%;
    left: 10%;

    font-size: 65px;

    animation: float 3s infinite ease-in-out;
}

body::after {
    content: "🔄";

    position: absolute;

    bottom: 15%;
    right: 10%;

    font-size: 65px;

    animation: rotate 4s infinite linear;
}

/* Pencil animation */

@keyframes float {

    0%, 100% {
        transform: translateY(0) rotate(-8deg);
    }

    50% {
        transform: translateY(-18px) rotate(8deg);
    }
}

/* Update icon animation */

@keyframes rotate {

    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(360deg);
    }
}

/* Mobile */

@media (max-width: 600px) {

    body {
        padding: 20px;

        overflow: auto;
    }

    h1 {
        position: relative;

        top: auto;

        margin-bottom: 25px;

        font-size: 27px;
    }

    form {
        width: 100%;
        max-width: 420px;
    }
}
```

    </style>
</head>
<body>
    <h1> Update form  </h1>
<form action="updatebackend.php" method="post">
    <input type="hidden" name="id"value="<?php echo $id ?>">
    <input type="text"name="empname" placeholder="Enter your name"value="<?php echo $data["empname"] ?>">
    <br><br>
    <input type="text"name="empage" placeholder="Enter your age"value="<?php echo $data["empage"] ?>">
    <br><br>
    <input type="text"name="fname" placeholder="Father name"value="<?php echo $data["fname"] ?>">
    <br><br>
    <!-- <select name="department">
    <option value="IT">IT</option>
    <option value="HR">HR</option>
    <option value="OPERATION">OPERATION</option>
    <option value="FINACE">FINACE</option>
    </select> -->
    <br><br>
    <input type="submit">
 </form>
</body>
</html>