<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>

    <script src="jquery.js" ></script>

</head>
<body>

<div class="center">

<form class="myfrom" >
  <label for="country"><h2>Choose a Country</h2></label>
  <select name="country" id="country">
  <option disabled selected value> -- select your country-- </option>
  <?php
    $con = mysqli_connect('localhost','root','','selectorDB') or die("Connection is Faield".mysqli_connect_error());
    $queryInstance = mysqli_query($con,"SELECT * FROM country");

    while($row = mysqli_fetch_array($queryInstance)){
        echo "  <option value="  .$row['c_id'].  ">"  .$row['c_name'].  "</option>";
    }
    ?>
  </select>
</form>

<form class="myfrom">
  <label for="state"><h2>Choose a State</h2></label>
  <select name="state" id="state">
  <option disabled selected value> -- select your state-- </option>
  <?php
    $queryInstance = mysqli_query($con,"SELECT * FROM state");

    while($row = mysqli_fetch_array($queryInstance)){
        echo "  <option value="  .$row['s_id'].  ">"  .$row['s_name'].  "</option>";
    }
    ?>

  </select>
</form>

<form class="myfrom" >
  <label for="city"><h2>Choose a City</h2></label>
  <select name="city" id="city">
  <option disabled selected value> -- select your city -- </option>
  <?php
    $queryInstance = mysqli_query($con,"SELECT * FROM city");

    while($row = mysqli_fetch_array($queryInstance)){
        echo "  <option value="  .$row['id'].  ">"  .$row['city_name'].  "</option>";
    }
    ?>

  </select>
</form>

</div>


</body>
</html>