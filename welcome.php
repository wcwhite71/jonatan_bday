<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
  	<script src="views/assets/main.js"></script>
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" align="center">
                <div class="page-header">
                    <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to ...</h1>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <svg viewBox="0 0 425 200">
          <path id="curve" d="M6,150C49.63,93,105.79,36.65,156.2,47.55,207.89,58.74,213,131.91,264,150c40.67,14.43,108.57-6.91,229-145" />
          <text x="25">
            <textPath xlink:href="#curve">
              Jonatan's Birthday Memories
            </textPath>
          </text>
        </svg>

        <div class="row" align="center">
            <a href="views/birth.html">Beginning</a>
            <a href="views/year1.html">1st Year</a>
            <a href="views/year2.html">2nd Year</a>
            <a href="views/year3.html">3rd Year</a>
            <a href="views/year4.html">4th Year</a>
            <a href="views/year5.html">5th Year</a>
        </div>

        <!-- <div class="row" align="center">
            <div class="col-4"><a href="views/birth.html">Beginning</a></div>
            <div class="col-4"><a href="views/year1.html">1st Year</a></div>
            <div class="col-4"><a href="views/year2.html">2nd Year</a></div>
        </div>
        <div class="row" align="center">
            <div class="col-4"><a href="views/year3.html">3rd Year</a></div>
            <div class="col-4"><a href="views/year4.html">4th Year</a></div>
            <div class="col-4"><a href="views/year5.html">5th Year</a></div>
        </div> -->

        <br><br><br>

        <div class="row" align="center">
            <div class="col-6"><a href="reset-password.php" class="btn btn-warning">Reset Your Password</a></div>
            <div class="col-6"><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></div>
        </div>
    </div>

</body>
</html>
