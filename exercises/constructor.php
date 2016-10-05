<?php

require 'constructorclass.php';

// $physics = new Books;
// $physics->setTitle('Modern Physics');
// echo $physics->title;

// $address = new Address;
// $address->street_address_1 = '170 Upper Bukit Timah Road';
// $address->street_address_2 = '#05-23 Bukit Timah Shopping Centre';
// $address->city_name = 'Singapore';
// $address->postal_code = '588179';
// $address->country_name = 'Singapore';

$physics = new Books('Modern Physics',120);
$physics->displayBook();


$address = new Address(array(
  'street_address_1' => '170 Upper Bukit Timah Road',
  'street_address_2' => '#05-23 Bukit Timah Shopping Centre',
  'city_name' => 'Singapore',
  'postal_code' => '588179',
  'country_name' => 'Singapore'
  ));

echo $address->displayAddress();

?>