<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/bootstrap/css/main.css" />
    <link
      rel="stylesheet"
      href="/node_modules/bootstrap/dist/css/boostrap.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <title>Sign in</title>
    <style>
      .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
      }
    </style>
  </head>
  <body>
    <form method="get" action="signinProcess.php">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">
                  Sign In
                </h5>

                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="text"
                    name="name"
                    value="<?= @$name ?>"
                  />
                  <label for="text">Name</label>
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="text"
                    name="email"
                    value="<?= @$email ?>"
                  />
                  <label for="text">Email address</label>
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="password"
                    class="form-control"
                    id="text"
                    name="password"
                    value="<?= @$pass ?>"
                  />
                  <label for="text">Password</label>
                </div>

                <div class="d-grid">
                  <input
                    class="btn btn-primary btn-login text-uppercase fw-bold"
                    type="submit"
                    name="submit"
                    value="Sign in"
                  />
                </div>
                <?php
                  if(isset($_SESSION["registerErrors"])){
                    for($i = 0; $i < count($_SESSION["registerErrors"]); $i++){
                      $currentError = $_SESSION["registerErrors"][$i];
                      echo "<p>" . $currentError . "</p>";
                    }
                  }
                  unset($_SESSION["registerErrors"]);  
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

    <script src="node_modules/bootstrap/dist/js/boostrap.bundle.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>