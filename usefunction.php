<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: blue;
            padding: 50px;
        }

        .login-container {
            background: blue;
            padding: 30px;
            width: 300px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="button"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: blue;
            border: none;
            border-radius: 4px;
        }

        .message {
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <input type="text" id="student" placeholder="Enter Username" />
    <input type="ankit12" id="ankit12" placeholder="Enter Password" />
    <input type="button" value="Login" onclick="handleLogin()" />
    <div class="message" id="message"></div>
</div>

<script>
    const storedUsername = "student";
    const storedPassword = "ankit12";

    
    function validateCredentials(user, pass) {
        if (user === storedUsername && pass === storedPassword) {
            return true;
        } else {
            return false;
        }
    }

    
    function handleLogin() {
        const usernameInput = document.getElementById("username").value;
        const passwordInput = document.getElementById("password").value;
        const messageBox = document.getElementById("message");

        if (validateCredentials(usernameInput, passwordInput)) {
            messageBox.style.color = "green";
            messageBox.textContent = "welcome to ankit!";
        } else {
            messageBox.style.color = "red";
            messageBox.textContent = "Invalid username or password.";
        }
    }
</script>

</body>
</html>
