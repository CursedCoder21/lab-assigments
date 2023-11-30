<?php

$data = array(
  array('Roll no.','Name','Email','Contact'),
  array('1','John','john@company.com',"9876543210"),
  array('2','Michael','michale@company.com',"9876543211"),
  array('3','Minati','minati@company.com',"9876543222"),
  array('4','Joshi','joshi@company.com',"9876543333"),
);


echo'<table border="1">';


foreach ($data as $row) {
  echo '<tr>';


  foreach ($row as $cell) {
    echo '<td>' . $cell . '</td>';
  }

  echo '</tr>';
}


echo '</table>';
?>

