<?php

include "connection.php";

$data = $connection->query("SELECT * FROM department");

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

    display: flex;
    justify-content: center;
    align-items: center;

    background: linear-gradient(
        135deg,
        #ff9a44,
        #ff5f6d,
        #c44cff
    );

    padding: 30px;
}

/* Main heading */

h1 {
    position: absolute;
    top: 50px;

    background: #fff;
    color: #39234d;

    padding: 15px 30px;

    border: 5px solid #39234d;
    border-radius: 20px;

    font-size: 32px;

    box-shadow: 8px 8px 0 #39234d;

    transform: rotate(-2deg);
}

/* Form */

form {
    width: 400px;

    background: #fff8e7;

    padding: 40px 35px;

    border: 5px solid #39234d;
    border-radius: 30px;

    box-shadow: 12px 12px 0 #39234d;

    text-align: center;
}

/* Text inputs */

input[type="text"] {
    width: 100%;

    padding: 15px;

    border: 4px solid #39234d;
    border-radius: 15px;

    background: #fff;

    color: #39234d;

    font-size: 16px;

    outline: none;

    transition: 0.2s;
}

/* Input focus */

input[type="text"]:focus {
    transform: scale(1.03);

    border-color: #ff5f6d;

    box-shadow: 4px 4px 0 #ff5f6d;
}

/* Select */

select {
    width: 100%;

    padding: 15px;

    border: 4px solid #39234d;
    border-radius: 15px;

    background: #ffd166;

    color: #39234d;

    font-size: 16px;
    font-weight: bold;

    cursor: pointer;

    outline: none;
}

/* Submit button */

input[type="submit"] {
    width: 100%;

    padding: 15px;

    margin-top: 10px;

    border: 4px solid #39234d;
    border-radius: 18px;

    background: #06d6a0;

    color: #39234d;

    font-size: 18px;
    font-weight: bold;

    cursor: pointer;

    box-shadow: 6px 6px 0 #39234d;

    transition: 0.2s;
}

/* Button hover */

input[type="submit"]:hover {
    background: #00c98d;

    transform: translate(4px, 4px);

    box-shadow: 2px 2px 0 #39234d;
}

/* Button click */

input[type="submit"]:active {
    transform: translate(6px, 6px);

    box-shadow: none;
}

/* Cartoon decorations */

body::before {
    content: "🚀";

    position: absolute;

    top: 15%;
    left: 10%;

    font-size: 55px;

    animation: float 3s infinite ease-in-out;
}

body::after {
    content: "🎨";

    position: absolute;

    bottom: 12%;
    right: 10%;

    font-size: 55px;

    animation: float 3s infinite ease-in-out reverse;
}

/* Floating animation */

@keyframes float {

    0%, 100% {
        transform: translateY(0) rotate(-5deg);
    }

    50% {
        transform: translateY(-15px) rotate(5deg);
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

        font-size: 25px;

        margin-bottom: 25px;
    }

    form {
        width: 100%;
        max-width: 400px;
    }

    body {
        flex-direction: column;
    }
}


    </style>
</head>
<body>
    <h1>Fill form jobs </h1>
<form action="empbackend.php" method="post">
    <input type="text"name="empname" placeholder="Enter your name">
    <br><br>
    <input type="text"name="empage" placeholder="Enter your age">
    <br><br>
    <input type="text"name="fname" placeholder="Father name">
    <br><br>
    <select name="department_name">
    <?php
    foreach ($data as $row){
    ?>
    <option value="<?php echo $row["department_name"] ?>">
        <?php echo $row["department_name"] ?>
    </option>
    
    <?php
    }
    ?>
    </select>
    <br><br>
    <input type="submit">
`   </form>
</body>
</html>