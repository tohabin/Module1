<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <?php
  $name = "Mohammad Toha";
  $age = 20;
  $country = "Bangladesh";
  $info = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur quisquam explicabo distinctio porro! Veritatis, neque, non assumenda tenetur eum dignissimos qui alias exercitationem enim doloribus harum odit quibusdam aliquam voluptate!
  Veniam exercitationem dicta sapiente deserunt aperiam praesentium omnis provident placeat eveniet ullam non reiciendis at, illum ab assumenda delectus minima numquam hic facere animi nesciunt qui commodi soluta! Nostrum, aspernatur?
  Eaque voluptatum assumenda, dolore quis minus a tempora saepe corrupti deleniti dignissimos autem velit cum? Assumenda excepturi odio natus unde ducimus, quas, aperiam iusto placeat aliquam perspiciatis repellat fugiat animi?
  Eaque dolore suscipit accusantium esse aliquid quo deleniti quia vitae alias, animi explicabo veniam adipisci voluptates at dolorum expedita saepe dicta? Et, doloremque. Et rem provident sint ut possimus dignissimos!
  Voluptate libero ipsum, saepe commodi veritatis a minima harum in suscipit asperiores ullam eius numquam, iste facilis dolor aut impedit vero obcaecati expedita at placeat autem, odio nulla necessitatibus? Tenetur?";
  ?>
  <div class="container">
    <h3 class="title">Personal Information</h3>

    <div class="info">
      <p><b>Name: </b> <?php echo $name; ?> </p>
    </div>
    <div class="info">
      <p><b>Age: </b> <?php echo $age; ?>  </p>
    </div>
    <div class="info">
      <p><b>Country: </b> <?php echo $country; ?>  </p>
    </div>
    <div>
      <p><b>Intro: </b> <?php echo $info; ?>  </p>
    </div>

  </div>

</body>

</html>