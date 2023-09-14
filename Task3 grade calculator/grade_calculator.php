<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="main.css">
  
</head>

<body>
  <div class="container">
    <h3 class="title">Grade Calculator App</h3>

    <div>
      <form action="" method="POST">

        <!-- Bangla -->
        <label for="Bangla">Bangla:</label>
        <input type="number" id="Bangla" name="Bangla" placeholder="Input Bangla subject marks.." required>

        <!-- English -->
        <label for="English">English:</label>
        <input type="number" id="English" name="English" placeholder="Input English subject marks.." required>


        <!-- Math -->
        <label for="Math">Math:</label>
        <input type="number" id="Math" name="Math" placeholder="Input Math subject marks.." required>



        <input type="submit" value="Calculate">
      </form>
    </div>
    <div id="Output">
      <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

          $banglaMarks = $_POST["Bangla"];
          $englishMarks = $_POST["English"];
          $mathMarks = $_POST["Math"];
          $outputText = "";

          $totalMarks = $banglaMarks + $englishMarks + $mathMarks;
          $avgMarks = $totalMarks / 3;
          
          $outputText .= "<p><b>Total marks:</b> $totalMarks</p>";
          $outputText .= "<p><b>Average marks:</b> $avgMarks</p>";
          $outputText .= "<p><b>Grade:</b> ";

          switch (true) {
            case ($avgMarks >= 70):
              $outputText .= "A";
              break;
            case ($avgMarks >= 60):
              $outputText .= "B";
              break;
            case ($avgMarks >= 50):
              $outputText .= "C";
              break;
            case ($avgMarks >= 40):
              $outputText .= "D";
              break;
            default:
            $outputText .= "F";
              break;
          }
          $outputText .= "</p>";


          // show output
          echo $outputText;
        }

        ?>
      </p>
    </div>
  </div>

</body>

</html>