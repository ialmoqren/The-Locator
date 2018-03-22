<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Where Can I Find</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <link href="style.css" rel="stylesheet">

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcMNfKWwJ4255VOXhzwPXMRbLJULgqoHM&libraries=places"></script>
    </head>

    <body>




        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">The locator</a>
            </nav>
        </header>

        <main role="main" class="container">
            <div class="starter-template">
                <h4>Where Can I Find:</h4>
                <div class="form-inline mt-2 mt-md-0 justify-content-center">
                    <input class="form-control mr-sm-2" id="myText" type="text" placeholder="Search" aria-label="Search">
                    <button id="botn" onclick="getPlaceName()" class="btn btn-outline-success my-2 my-sm-0" type="button">Search</button>
                </div>
                <p></p>

                <div id="cards" class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Detailed</h4>
                        </div>
                        <div class="card-body">
                            <p id="printedResult" class="lead"></p>
                        </div>
                    </div>

                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Formatted</h4>
                        </div>
                        <div class="card-body">
                            <p id="printedResult2" class="lead"></p>
                        </div>
                    </div>

                </div>
                <p class="lead">Use this site as a way to quickly find any place.<br> Try to provide more details about the desired place to have more accurate results..</p>
                <p><a href="logout.php" class="btn btn-danger">Sign Out</a></p>

            </div>

        </main>

        <footer class="footer">
            <div class="container">
                <span class="text-muted">© 2018 Ibrahim Almuqrin. No Rights Reserved :) </span>
            </div>
        </footer>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


        <script src="myScript.js"></script>

    </body>

    </html>
