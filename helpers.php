<?php

function display_error($errors){
$display="<ul class='bg-danger'>";
foreach ($errors as $error) {
  $display.="<li class='text-danger'>$error</li>";
  # code...
}
echo "</ul>";
  return $display;


}


  # code...


?>
