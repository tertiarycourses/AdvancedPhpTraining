<?php

require 'staticmethoddemo.php';

for ($id = 0; $id <= 4; $id++) {
  echo "<div>$id: ";
  echo Address::isValidAddressTypeId($id) ? 'Valid' : 'Invalid';
  echo "</div>";
}

?>