<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <div class="container">
    <h3 class="title">Comparison App</h3>

    <div>
      <form action="" method="POST">

        <!-- number 1 -->
        <label for="Number1">Number 1:</label>
        <input type="number" id="Number1" name="Number1" placeholder="Input 1st Number..">

        <!-- number 1 -->
        <label for="Number2">Number 2:</label>
        <input type="number" id="Number2" name="Number2" placeholder="Input 2st Number..">

        <input type="submit" value="Submit">
      </form>
    </div>
    <div id="Output">
      <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $number1 = $_POST["Number1"];
          $number2 = $_POST["Number2"];

          $outputText = "";

          //validation check
          if ($number1 != "" && $number1 != null && $number2 != "" && $number2 != null) {

            // calculation
            $number1 > $number2 ? $outputText .= "$number1 is larger" : $outputText .= "$number2 is larger";

            //output
            echo $outputText;
          } else {
            echo "please Enter All number!";
          }
        }

        ?>
      </p>
    </div>
  </div>

</body>

</html>