<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
body {
    font-family: Arial, sans-serif;
    background-image: url("https://www.theluxeguide.com/wp-content/uploads/2022/09/Villas-Luxury-hours-for-sale-Philippines.jpg");
    background-repeat: no-repeat;
    background-size: 1900px;
    background-position: top;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    position: relative; 
}


body::before {
    content: '';
    background: rgba(255, 255, 255, 0.2); 
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: -1;
}

.login-container {
    margin-top: center;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    width: 300px;
}

.login-container h2 {
    text-align: center;
}

.login-container form {
    display: flex;
    flex-direction: column;
}

.login-container label {
    margin-top: 10px;
}

.login-container input {
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.login-container .forgot-password {
    text-align: right;
    margin-top: 10px;
}

.login-container button {
    background: #007BFF;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.login-container button:hover {
    background: #0056b3;
}

.links {
    text-align: center;
}

.register-link, .forgot-password-link {
    display: inline-block;
    margin: 0 10px;
    text-decoration: none;
}

/* Styling for the links */
.register-link {
    color: #007BFF;
}

.forgot-password-link {
    color: #FF0000;
}
    </style>
    <title>Login Form</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Username/Email">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">

            <button type="submit">Login</button>
            
            <p class="links">
                <a class="register-link" href="userregister.php">Register</a>
                <a class="forgot-password-link" href="forgot.php">Forgot Password?</a>
            </p>

        </form>
    </div>
</body>
</html>
