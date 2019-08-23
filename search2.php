<?php

if(isset($_POST['category'])){
  $category = $_POST['category'];
  echo '<input type="hidden" name="category" value="$category">';
  header('Location:search3.php');
}else{
  header('Location:warning.php');
}

?>