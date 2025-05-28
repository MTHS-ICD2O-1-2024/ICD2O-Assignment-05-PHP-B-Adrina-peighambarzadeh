<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Factorial Calculator, with PHP" />
  <meta name="keywords" content="math, factorial, php, icd2o" />
  <meta name="author" content="Adrina peighambarzadeh" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Factorial Calculator, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Factorial Calculator, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/image.png" alt="Factorial image" width="500" />
      </div>
      <div class="page-content-answer">
        <div id="answer">
          <?php
            // input
            $factorial = 1;

            if (isset($_GET["number"])) {
              $number = $_GET["number"];

              // validation: check if it's a non-negative whole number
              if ($number >= 0 && floor($number) == $number) {
                // process using counter
                $counter = 1;
                while ($counter <= $number) {
                  $factorial = $factorial * $counter;
                  $counter = $counter + 1;
                }

                // output
                echo "The factorial of " . $number . " is: " . $factorial . ".";
              } else {
                echo "Please enter a valid non-negative whole number.";
            }
          }
          ?>
        </div>
      </div>
      <div class="page-content-return">
        <a href="./index.php">Return ...</a>
      </div>
    </main>
  </div>
</body>

</html>
