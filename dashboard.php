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
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

/* Cartoon Heading */

h1 {
    background: #fff;
    color: #333;
    padding: 20px 40px;
    border: 5px solid #222;
    border-radius: 25px;
    font-size: 42px;
    text-align: center;

    box-shadow: 8px 8px 0 #222;

    transform: rotate(-2deg);
    margin-bottom: 55px;

    animation: bounce 2s infinite;
}

/* Buttons */

a {
    text-decoration: none;
    margin: 15px;
}

button {
    width: 240px;
    padding: 18px 20px;

    border: 4px solid #222;
    border-radius: 20px;

    background: #ffcf33;
    color: #222;

    font-size: 18px;
    font-weight: bold;

    cursor: pointer;

    box-shadow: 7px 7px 0 #222;

    transition: 0.2s;
}

/* Different button colors */

a:nth-of-type(1) button {
    background: #ff6b6b;
}

a:nth-of-type(2) button {
    background: #a66cff;
}

a:nth-of-type(3) button {
    background: #39d98a;
}

/* Hover */

button:hover {
    transform: translate(5px, 5px) rotate(2deg);
    box-shadow: 2px 2px 0 #222;
}

/* Click */

button:active {
    transform: translate(7px, 7px);
    box-shadow: none;
}

/* Heading animation */

@keyframes bounce {
    0%, 100% {
        transform: rotate(-2deg) translateY(0);
    }

    50% {
        transform: rotate(-2deg) translateY(-8px);
    }
}

/* Cartoon background decoration */

body::before {
    content: "⭐";
    p
              }

    </style>
</head>
<body>
    <h1>Empolyee Dashboard</h1>
    <a href="empform.php">
        <button>Enter in empolyee form</button>
    </a>

     <a href="department.php">
           <button>Department</button>
    </a>
    <a href="empread.php">
    <button>Empolyee Details</button>

    </a>
</body>
</html>