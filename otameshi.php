

<?php
function showMsgBox($message) {
  $len = strlen($message);   // strlen() gets string length.
  
  print($message);
  
}

showMsgBox('This is a sample.');
?>