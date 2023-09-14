<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <div class="container">
    <h3 class="title">Odd / Even Checker</h3>

    <div>
      <form action="" method="POST">

        <!-- number 1 -->
        <label for="Number">Number:</label>
        <input type="number" id="Number" name="Number" placeholder="Input Number..">


        <input type="submit" value="Check">
      </form>
    </div>
    <div id="Output">
      <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $number = $_POST["Number"];
          $outputText = "";

          //validation check
          if ($number != "" && $number != null) {

            // operation
            if ($number % 2 == 0) {
                echo "$number is Even";

            } else {
              echo "$number is Odd";
            }

          } else {
            echo "please Enter a number!";
          }
        }

        ?>
      </p>
    </div>
  </div>

</body>

</html>