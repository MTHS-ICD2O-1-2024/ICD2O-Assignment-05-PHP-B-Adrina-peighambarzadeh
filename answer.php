<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Factorial Calculation in PHP" />
  <meta name="keywords" content="math, factorial, icd2o" />
  <meta name="author" content="Adrina Peighambarzadeh" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_green.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="css/style.css">
  <title>Factorial Result</title>
</head>

<body>
  <div class="container-2">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Factorial Result</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="right-image">
        </div>
        <br><br>
        <?php
        // Get the input number
        $inputNumber = $_GET["input-number"];
        $factorial = 1;
        $counter = 1;
        $calculationSteps = "";

        echo "<b>Input Number: " . $inputNumber . "</b><br><br>";

        // Validate input
        if (!is_numeric($inputNumber) || $inputNumber < 0 || floor($inputNumber) != $inputNumber) {
          echo "<b>Please enter a valid non-negative whole number.</b>";
        } else {
          // Calculate factorial with loop
          while ($counter <= $inputNumber) {
            $factorial *= $counter;
            $calculationSteps .= $counter;
            if ($counter < $inputNumber) {
              $calculationSteps .= " × ";
            }
            $counter++;
          }

          echo "<b>Calculation: " . $calculationSteps . " = " . $factorial . "</b>";
        }
        ?>
        <br><br>
        <div class="page-content-answer">
          <a href="./index.php">Return to Factorial Calculator</a>
        </div>
        <br>
      </main>
    </div>
  </div>
</body>

</html>
