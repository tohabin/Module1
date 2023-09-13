<!DOCTYPE html>
<html>
<style>
  .title {
    text-align: center;
  }

  input[type=text],
  input[type=number],
  select {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  label {
    display: inline-block;
    width: 25%;
  }

  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bolder;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

  .container {
    width: 500px;
    margin: auto;
  }

  #Output {

    padding: 5px 15px !important;

    background-color: #ccc;
    color: red;

    font-size: 25px;
    font-weight: bold;

    text-align: right;

  }
</style>

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