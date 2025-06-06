<?php
 include "server.php" ;
 if (isset($_SESSION['login']) && $_SESSION['login']) {
  header("Location: houses.php");
 } else {
  // $_SESSION['login'] = false;
  // header("Location: signin.php");
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign in</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <div class="heading text-center">
    <h1><b>Rental Management Platform</b></h1>
    <a href="./index.php"><button class="btn btn-success" type="submit">Sign up</button></a>
    <a href="./houses.php"><button class="btn btn-success" type="submit" style="width: 150px;">Select House</button></a>
  </div>
  <div class="form" style="margin-top: 50px">
    <form action="./added.php" method="post">
      <div class="d-flex flex-row justify-content-start align-items-center gap-2">
        <div class="col-xs-4 mb-4">
          <label for="email">Email</label>
          <input
            type="email"
            id="email"
            class="form-control"
            placeholder="Enter your email"
            name="email"
            required />
        </div>
      </div>
      <div class="d-flex flex-row justify-content-start align-items-center gap-2">
        <div class="col-xs-4">
          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            class="form-control"
            placeholder="Enter your password"
            name="password"
            required />
        </div>
      </div>
      <div class="d-flex flex-row align-items-center justify-content-start mt-4 mb-2">
        <input type="checkbox" id="remember-me">
        <label for="remember-me" class="ms-2">Remember me</label>
      </div>
      <div class="mb-4">
        <a href="#">Forgot Password?</a>
      </div>
      <button class="btn btn-secondary" type="submit" name="check_tenants">Sign in</button>
    </form>
    <div>
      <img src="./assets/images/house.png" alt="" />
    </div>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
    integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D"
    crossorigin="anonymous"></script>
</body>

</html>