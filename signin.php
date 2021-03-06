<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/signin.css" />

    <title>nadacrease</title>
  </head>
  <body>
    <div class="navbar">
      <ul class="navbar-list">
        <li class="navbar-item">
          <div class="navbar-item-container">
            <a href="./index.php">
              <svg class="navbar-item--icon">
                <use xlink:href="./images/icons/sprite.svg#icon-home"></use>
              </svg>
            </a>
            <a href="./index.php"> nadacrease </a>
          </div>
        </li>

        <div class="navbar-categories">
          <div class="navbar-categories">
            <li class="navbar-item">
              <a href="./all.php">all</a>
            </li>
            <li class="navbar-item">
              <a href="./casual.php">casual</a>
            </li>
            <li class="navbar-item">
              <a href="./running.php">running</a>
            </li>
            <li class="navbar-item">
              <a href="./boots.php">boots</a>
            </li>
          </div>
        </div>

        <div class="navbar-options">
          <li class="navbar-item">
            <div class="navbar-item-container">
              <a href="#">
                <svg class="navbar-item--icon">
                  <use xlink:href="./images/icons/sprite.svg#icon-user"></use>
                </svg>
              </a>
              <p>sign in</p>
            </div>
          </li>
          <li class="navbar-item">
            <a class="navbar-item-container" href="./cart.php">
              <svg class="navbar-item--icon">
                <use xlink:href="./images/icons/sprite.svg#icon-cart"></use>
              </svg>
              <p>cart</p>
            </a>
          </li>
        </div>
      </ul>
    </div>

    <div class="account-container">
      <div class="signin-container">
        <h2 class="signin-title">Already have an account?</h2>
        <form action="includes/login.inc.php" method="post">

            <label class="signin-labels" for="uname"><b>Username</b></label>
            <input class="signin-input" type="text" placeholder="Enter Username" name="uname" required>

            <label class="signin-labels" for="psw"><b>Password</b></label>
            <input class="signin-input" type="password" placeholder="Enter Password" name="psw" required>

            <button class="process-btn" type="submit" name="submit">Login</button>
        </form>
      </div>

      <div class="signup-container">
         <h2 class="signin-title">Create an account</h2>
          <form action="includes/signup.inc.php" method="post">
              <label class="signin-labels" for="email"><b>Email Address</b></label>
              <input class="signin-input" type="email" placeholder="Enter Email Address" name="email" required>

              <label class="signin-labels" for="uname"><b>Username</b></label>
              <input class="signin-input" type="text" placeholder="Enter Username" name="uname" required>

              <label class="signin-labels" for="psw"><b>Password</b></label>
              <input class="signin-input" type="password" placeholder="Enter Password" name="psw" required>
          
              <button class="process-btn" type="submit" name="submit">Sign up</button>
          </form>
      </div>    
    </div>
    <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
            echo "<h1 class=\"display-msg\">Fill in all fields!</h1>";
          } 
          else if ($_GET["error"] == "invaliduname") {
            echo "<h1 class=\"display-msg\">Choose a proper username!</h1>";
          }
          else if ($_GET["error"] == "invalidemail") {
            echo "<h1 class=\"display-msg\">Choose a proper email!!</h1>";
          }
          else if ($_GET["error"] == "stmtfailed") {
            echo "<h1 class=\"display-msg\">Something went wrong :/</h1>";
          }
          else if ($_GET["error"] == "unametaken") {
            echo "<h1 class=\"display-msg\">Username or email is already taken!</h1>";
          }
          else if ($_GET["error"] == "wronglogin") {
            echo "<h1 class=\"display-msg\">Incorrect username/password!</h1>";
          }
          else if ($_GET["error"] == "none") {
            echo "<h1 class=\"display-msg\">Signup successful!</h1>";
          }
        }
      ?>
  </body>
</html>
