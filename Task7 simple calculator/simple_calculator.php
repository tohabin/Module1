<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <div class="container">
    <h3 class="title">Calculator App</h3>

    <div>
      <form action="" method="POST">

        <!-- number 1 -->
        <label for="Number1">Number 1:</label>
        <input type="number" id="Number1" name="Number1" placeholder="Input 1st Number..">

        <!-- number 1 -->
        <label for="Number2">Number 2:</label>
        <input type="number" id="Number2" name="Number2" placeholder="Input 2st Number..">

        <!-- Oparation -->
        <label for="Operation">Operation</label>
        <select id="Operation" name="Operation">
          <option value="Add">Add(+)</option>
          <option value="Substract">Substract(-)</option>
          <option value="Multiply">Multiply(*)</option>
          <option value="Dvide">Dvide(/)</option>
        </select>



        <input type="submit" value="Submit">
      </form>
    </div>
    <div id="Output">
      <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $number1 = $_POST["Number1"];
          $number2 = $_POST["Number2"];
          $opration = $_POST["Operation"];
          $outputText = "";

          //validation check
          if ($number1 != "" && $number1 != null && $number2 != "" && $number2 != null) {
           
              if ($opration == "Add") {

                //operation
                $result = $number1  + $number2;

                //output
                $outputText .= "$number1 + $number2 = ";
                $outputText .= $result;
                echo $outputText;
              } else if ($opration == "Substract") {

                //operation
                $result = $number1  - $number2;

                //output
                $outputText .= "$number1 - $number2 = ";
                $outputText .= $result;
                echo $outputText;
              } else if ($opration == "Multiply") {

                //operation
                $result = $number1  * $number2;

                //output
                $outputText .= "$number1 * $number2 = ";
                $outputText .= $result;
                echo $outputText;
              } else if ($opration == "Dvide") {

                if ($number2 != 0) {
                  //operation
                  $result = $number1  / $number2;

                  //output
                  $outputText .= "$number1 / $number2 = ";
                  $outputText .= $result;
                  echo $outputText;
                } else {
                  // no operation. undefine

                  //output
                  $outputText .= "$number1 / $number2 = ";
                  $outputText .= "undefine!";
                  echo $outputText;
                }
              }
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