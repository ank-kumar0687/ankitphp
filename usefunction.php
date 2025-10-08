<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            padding: 50px;
        }

        .login-container {
            background: white;
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
    <input type="text" id="username" placeholder="Enter Username" />
    <input type="password" id="password" placeholder="Enter Password" />
    <input type="button" value="Login" onclick="handleLogin()" />
    <div class="message" id="message"></div>
</div>

<script>
    const storedUsername = "ankit";
    const storedPassword = "ankit123";

   
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
            messageBox.textContent = "Login successful, Ankit Chaudhary";
        } else {
            messageBox.style.color = "red";
            messageBox.textContent = "Invalid username or password.";
        }
    }
</script>

</body>
</html>
