<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Daily UI | #001 - Sign In</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">

  <style>
    body {
      background-color: #8ceabb; /* Warna latar belakang halaman */
    }
    
    .align {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .register {
      background-color: #378f7b; /* Warna latar belakang form */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .register h2 {
      color: #fff; /* Warna teks judul */
    }

    .register input[type="text"],
    .register input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 5px;
      background-color: #fff; /* Warna latar belakang input */
    }

    .register input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 5px;
      background-color: #8ceabb; /* Warna tombol Sign In */
      color: #fff; /* Warna teks pada tombol */
      cursor: pointer;
    }

    p {
      color: #fff; /* Warna teks pada paragraf */
    }
  </style>

</head>
<body class="align">

  <div class="grid align__item">

    <div class="register">

      <svg xmlns="http://www.w3.org/2000/svg" class="site__logo" width="56" height="84" viewBox=><defs><linearGradient id="a" x1="0%" y1="0%" y2="0%"><stop offset="0%" stop-color="#8ceabb"/><stop offset="100%" stop-color="#378f7b"/></linearGradient></defs><path fill="url(#a)" d="M215 214.9c-83.6 123.5-137.3 200.8-137.3 275.9 0 75.2 61.4 136.1 137.3 136.1s137.3-60.9 137.3-136.1c0-75.1-53.7-152.4-137.3-275.9z"/></svg>

      <h2>Sign In</h2>

      <form action="cek_login.php" method="post" class="form">

        <div class="form__field">
          <input type="text" placeholder="Username" name="username">
        </div>

        <div class="form__field">
          <input type="password" placeholder="Password" name="password">
        </div>

        <div class="form__field">
          <input type="submit" value="Sign In">
        </div>

      </form>

      <p>Silahkan Sign In </p>

    </div>

  </div>

</body>
</html>
