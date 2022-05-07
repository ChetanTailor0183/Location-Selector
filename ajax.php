<?php

$con = mysqli_connect('localhost','root','','selectorDB');

if(isset($_POST['temp_country_id'])){

    $selected_country_id  = $_POST['temp_country_id'] ;
    $queryInstance = mysqli_query($con,"SELECT * FROM state where c_id= '$selected_country_id' ");

    while($row = mysqli_fetch_array($queryInstance)){
        echo "  <option value="  .$row['s_id'].  ">"  .$row['s_name'].  "</option>";
    }
}


if(isset($_POST['temp_state_id'])){

    $selected_state_id  = $_POST['temp_state_id'] ;
    $queryInstance = mysqli_query($con,"SELECT * FROM city where s_id= '$selected_state_id' ");

    while($row = mysqli_fetch_array($queryInstance)){
        echo "  <option value="  .$row['id'].  ">"  .$row['city_name'].  "</option>";
    }
}

?>


