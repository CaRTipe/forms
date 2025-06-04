<?php
include "server.php"; 
?>
<!DOCTYPE html > 
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Houses</title>
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
      <a href="./index.html"
        ><h1><b>Rental Management Platform</b></h1></a
      >
      <button
        type="button"
        class="btn btn-success"
        data-bs-toggle="modal"
        data-bs-target="#exampleModal"
        style="width: 120px;"
      >
        Add house
      </button>
    </div>
    <div>
      <div>
        <form>
          <div class="my-5">
            <div
              class="d-flex flex-row justify-content-start align-items-center my-4"
              style="margin-top: 50px"
            >
              <label for="house">House No</label>
              <select class="form-select" name="" id="houses">
                <option value="" selected disabled>Select House</option>
                <?php
                if (!empty($houses)) {
                    foreach ($houses as $house) {
                        echo "<option value='" . htmlspecialchars($house['id']) . "'>" . htmlspecialchars($house['house_number']) . "</option>";
                    }
                }
                ?>
              </select>
            </div>
            <div
              class="d-flex flex-row justify-content-start align-items-center gap-3"
            >
              <label for="tenant">Tenant</label>
              <select class="form-select" id="tenants">
                <option value="" selected disabled>Select Tenant</option>
                <?php
                if (!empty($tenants)) {
                    foreach ($tenants as $tenant) {
                        echo "<option value='" . htmlspecialchars($tenant['id']) . "'>" . htmlspecialchars($tenant['first_name'])  . " " .  htmlspecialchars($tenant['last_name']) . "</option>";
                    }
                } 
                ?>
              </select>
            </div>
          </div>
          <div>
            <button class="btn btn-secondary" type="submit">Check</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form action="./added.php" method="post">
              <div class="mb-3">
                <label for="houseNo" class="form-label">House No</label>
                <input
                  type="text"
                  class="form-control"
                  id="houseNo"
                  placeholder="Enter house number"
                  name="houseno"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="tenantName" class="form-label">Tenant Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="tenantName"
                  placeholder="Enter tenant name"
                  name="tenantname"
                  required
                />
              </div>
              <button
                type="submit"
                class="btn btn-secondary"
                style="width: 150px"
              >
                Add House
              </button>
            </form>
          </div>
          <!-- <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>

    <script src="script.js"></script>
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
