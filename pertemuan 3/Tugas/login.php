<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulir Login</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #FFE6E6;
        margin: 0;
        padding: 120px;
    }
    .container {
        max-width: 400px;
        margin: 0 auto;
        background-color: #FFE6E6;
        padding: 20px;
        border: 1px solid #C6DCBA; 
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        color: #333;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }
    .form-group input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .btn {
        padding: 6px 12px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        border: 1px solid transparent;
        border-radius: 4px;
        display: block;
        width: 100%;
        background-color: #000;
        color: white;
    }

    .btn-black:hover {
        background-color: #333; /* Warna hitam lebih gelap saat dihover */
    }
</style>
</head>
<body>

<div class="container">
    <h2>Login Student Activity</h2>
    <form action="home.php" method="POST">
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" required>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn">Login</button>
    </form>
</div>

</body>
</html>
