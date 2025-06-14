<?php
 include 'server.php';
 if (isset($_SESSION['login']) && $_SESSION['login']) {
  header('Location: houses.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forms</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div class="heading text-center">
      <h1><b>Rental Management Platform</b></h1>
      <a href="./signin.php"><button class="btn btn-success" type="submit">Sign in</button></a>
      <a href="./houses.php"><button class="btn btn-success" type="submit" style="width: 150px;">Select Houses</button></a>
    </div>
    <div class="form" style="margin-top: 50px">
      <form action="./added.php" method="post">
        <div class="gap-5">
          <div
            class="d-flex flex-row justify-content-start align-items-center gap-2"
          >
            <div class="d-flex flex-column gap-3">
              <label for="fname">First Name</label>
              <input
                type="text"
                id="fname"
                class="form-control-lg"
                placeholder="Enter your first name"
                name="fname"
                required
              />
            </div>
            <div class="d-flex flex-column gap-3">
              <label for="lname">Last Name</label>
              <input
                type="text"
                id="lname"
                class="form-control-lg"
                placeholder="Enter your last name"
                name="lname"
                required
              />
            </div>
          </div>
          <div
            class="d-flex flex-row justify-content-start align-items-center gap-2"
          >
            <div class="d-flex flex-column gap-3">
              <label for="email">Email</label>
              <input
                type="email"
                id="email"
                class="form-control-lg"
                placeholder="Enter your email"
                name="email"
                required
              />
            </div>
            <div class="d-flex flex-column gap-3">
              <label for="phone">Phone Number</label>
              <input
                type="tel"
                id="phone"
                class="form-control-lg"
                placeholder="Enter your phone number"
                name="phone"
                required
              />
            </div>
          </div>
          <div
            class="d-flex flex-row justify-content-start align-items-center gap-2"
          >
            <div class="d-flex flex-column gap-3">
              <label for="year">Date of Birth</label>
              <div class="input-group">
                <input
                  type="date"
                  class="form-control-lg"
                  id="date"
                  placeholder="Select date"
                  name="date"
                  required
                />
              </div>
            </div>
          </div>
          <div
          class="d-flex flex-row justify-content-start align-items-center gap-2"
          >
          <div class="d-flex flex-column gap-3">
              <label for="password">Password</label>
              <input
              type="password"
              id="password"
              class="form-control-lg"
              placeholder="Enter your password"
              name="password"
              required
              />
            </div>
        </div>
        <div
          class="d-flex flex-row justify-content-start align-items-center gap-2"
        >
          <div class="d-flex flex-row gap-3 mt-4 mb-4">
            <input type="checkbox" id="terms" required />
            <label for="terms">I agree to the terms of service and privacy policy</label>
          </div>
        </div>
          <div class="d-flex flex-row">
            <button class="btn btn-secondary mt-2" type="submit" name="add_tenants">Submit</button>
          </div>
        </div>
      </form>

      <div>
        <img src="./assets/images/house.png" alt="" />
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
      integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
