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
        <label for="Temperature">Temperature:</label>
        <input type="number" id="Temperature" name="Temperature" placeholder="Input Temperature.." required>


        <input type="submit" value="Check Weather">



      </form>
    </div>
    <div id="Output">
      <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $Temperature = $_POST["Temperature"];
          $outputText = "";

          //calculation
          if ($Temperature < 0) {
            $outputText .=  "<span style='color:#299cc1'>It's Frezing</span>";
          } else if ($Temperature <= 20) {
            $outputText .= "<span style='color:blue'>It's Cool</span>";
          } else {
            $outputText .= "<span style='color:#ff7800'>It's warm</span>";
          }

          // output
          echo $outputText;
        }

        ?>
      </p>
    </div>
  </div>

</body>

</html>