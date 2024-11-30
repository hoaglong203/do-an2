<?php 
    session_start();
    if (isset($_SESSION['lever'])){
        header('Location: ./index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f3f4f6;
        margin: 0;
        padding: 0;
    }
    h1 {
        text-align: center;
        color: #333;
        margin-top: 20px;
    }
    form {
        width: 400px;
        margin: auto;
        margin-top: 50px;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    form h2 {
        text-align: center;
        color: #555;
    }
    form input {
        width: 100%;
        padding: 10px;
        margin-top: 8px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    form button {
        width: 100%;
        padding: 10px;
        background-color: #4caf50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    form button:hover {
        background-color: #45a049;
    }
    form p {
        font-size: 14px;
        text-align: center;
        color: #666;
    }
    form p a {
        color: #007bff;
        text-decoration: none;
    }
    form p a:hover {
        text-decoration: underline;
    }
    .credentials {
        width: 400px;
        margin: 20px auto;
        background-color: #f8f9fa;
        padding: 10px;
        border-radius: 4px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        font-size: 14px;
    }
    .credentials ul {
        padding-left: 20px;
        color: #555;
    }
    .credentials li {
        margin-bottom: 5px;
    }
</style>
<body>
    <h1 style="text-align: center;">Administrator</h1>
    <form method="post" action="./processing/login.php">
        <h2 style="text-align: center;">Đăng Nhập</h2>
        <?php
            if (isset($_SESSION['alert'])){
                echo "<br>";
                echo $_SESSION['alert'];
                unset($_SESSION['alert']);
                echo "<br>";
                echo "<br>";
            }
        ?>
        Email
        <input type="email" name="email">
        <br><br>
        Mật khẩu
        <input type="password" name="password">
        <br>
        <p>
            Trở thành người bán hàng. 
            <a href="./register.php">Đăng kí ngay</a>
        </p>
        <button>Đăng nhập</button>
    </form>
    <div>
        <ul>
            <li>admin: congphamtienthanh@gmail.com</li>
            <li>adminPro: hoangschool@gmail.com</li>
            <li>mk: cong</li>
        </ul>
    </div>
</body>
</html>