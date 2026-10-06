<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
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
        #141e30,
        #243b55,
        #00c6ff
    );

    position: relative;
    overflow: hidden;
}

/* Main form */

form {
    width: 420px;

    background: #fefefe;

    padding: 45px 35px;

    border: 5px solid #111827;
    border-radius: 30px;

    box-shadow: 12px 12px 0 #111827;

    text-align: center;

    position: relative;
    z-index: 2;
}

/* Heading */

h1 {
    position: absolute;

    top: 70px;

    background: #ffd43b;

    color: #111827;

    padding: 15px 30px;

    border: 5px solid #111827;
    border-radius: 20px;

    font-size: 32px;

    box-shadow: 7px 7px 0 #111827;

    transform: rotate(2deg);

    z-index: 3;
}

/* Department input */

input[type="text"] {
    width: 100%;

    padding: 17px;

    border: 4px solid #111827;
    border-radius: 18px;

    background: #e8faff;

    color: #111827;

    font-size: 17px;

    outline: none;

    transition: 0.2s;
}

/* Input focus */

input[type="text"]:focus {
    background: #ffffff;

    border-color: #00c6ff;

    transform: scale(1.03);

    box-shadow: 5px 5px 0 #00c6ff;
}

/* Submit button */

input[type="submit"] {
    width: 100%;

    padding: 16px;

    margin-top: 10px;

    background: #00e5a8;

    color: #111827;

    border: 4px solid #111827;
    border-radius: 18px;

    font-size: 18px;
    font-weight: bold;

    cursor: pointer;

    box-shadow: 6px 6px 0 #111827;

    transition: 0.15s;
}

/* Hover */

input[type="submit"]:hover {
    background: #00c98d;

    transform: translate(4px, 4px);

    box-shadow: 2px 2px 0 #111827;
}

/* Click */

input[type="submit"]:active {
    transform: translate(7px, 7px);

    box-shadow: none;
}

/* Cartoon background decorations */

body::before {
    content: "🏢";

    position: absolute;

    top: 18%;
    left: 12%;

    font-size: 65px;

    animation: float 3s infinite ease-in-out;
}

body::after {
    content: "⚡";

    position: absolute;

    bottom: 15%;
    right: 12%;

    font-size: 65px;

    animation: float 3s infinite ease-in-out reverse;
}

/* Floating animation */

@keyframes float {

    0%, 100% {
        transform: translateY(0) rotate(-5deg);
    }

    50% {
        transform: translateY(-18px) rotate(5deg);
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


    </style>
</head>
<body>
    <h1>Add Department</h1>
    <form action="departmentbackend.php"method="post">
    <input type="text" name="department_name"placeholder="Enter your department">
    <br><br>
    <input type="submit">
    </form>
</body>
</html>