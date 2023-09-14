<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <div class="container">
    <h3 class="title">Temperature Convertor</h3>

    <div>
      <form action="" method="POST">

        <!-- number 1 -->
        <label for="Number">Number:</label>
        <input type="number" id="Number" name="Number" placeholder="Input Number.." required>

        <!-- Oparation -->
        <label for="Operation">Operation</label>
        <select id="Operation" name="Operation" required>
          <option value="">Choose Covertor</option>
          <option value="CtoF">Celsius(C<sup>o</sup>) to Fahrenheit(F<sup>o</sup>)</option>
          <option value="FtoC">Fahrenheit(F<sup>o</sup>) to celsius(C<sup>o</sup>) </option>
          
        </select>

        <input type="submit" value="Check">
      </form>
    </div>
    <div id="Output">
      <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $number = $_POST["Number"];
          $operation = $_POST["Operation"];
          $outputText = "";

          
          if ($operation == "CtoF") {
            
            //°F = °C × (9/5) + 32
            $result = $number * (9/5) + 32;
            
            //output
            $outputText .= "$number Celsius =  $result Fahrenheit";
            echo $outputText;
          }
          else if ($operation == "FtoC") {
            
            //C = 5/9(F-32)
            $result = 5/9 * ($number-32);
            
            //output
            $outputText .= "$number Fahrenheit(F<sup>o</sup>) =  $result Celsius(C<sup>o</sup>) ";
            echo $outputText;
          }
          else  {
            echo "Select a convertor";
          }
            
        }

        ?>
      </p>
    </div>
  </div>

</body>

</html>