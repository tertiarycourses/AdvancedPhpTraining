<?php

require 'constructordemo.inc';

$address = new Address(array(
  'street_address_1' => '170 Upper Bukit Timah Road',
  'street_address_2' => '#05-23 Bukit Timah Shopping Centre',
  'city_name' => 'Singapore',
  'postal_code' => '588179',
  'country_name' => 'Singapore'
  ));

echo $address->displayAddress();
?>