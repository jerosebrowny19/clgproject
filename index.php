<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>

body{
    height:100vh;
    width:100%;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(to right,#3f5efb,#fc466b)

}
            

     body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow:2px 2px 5px 1px black;
            padding: 50px;
            width: 300px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.0);
            backdrop-filter: blur(10px);
 
            
        }

        .login-container h2 {
            margin-bottom: 20px;
        }

        .login-container button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 5px;
        }

        .login-container button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="login-container">

    <h2>Login</h2>
    <button onclick="redirectToAdmin()">Admin</button>
    <button onclick="redirectToUser()">User</button>
    <button onclick="redirectToLibrary()">Library</button>

</div>
    

<script>
    function redirectToAdmin() {
        window.location.href = 'alogin.php'; // Replace with the actual admin page URL
    }

    function redirectToUser() {
        window.location.href = 'login.html'; // Replace with the actual user page URL
    }

    function redirectToLibrary() {
        window.location.href = 'login1.html'; // Replace with the actual library page URL
    }
</script>

</body>
</html>
