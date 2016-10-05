<?php

require 'inheritanceclass.php';

$novel1 = new Novel('Batman',15,'ABC');
echo $novel1->displayBook();



// $address = new ResidentialAddress;

// $address->street_address_1 = '170 Upper Bukit Timah Road';
// $address->street_address_2 = '#05-23 Bukit Timah Shopping Centre';
// $address->city_name = 'Singapore';
// $address->postal_code = '588179';
// $address->country_name = 'Singapore';
//$address->address_id = 1;

//echo '<pre>'.var_export($address,TRUE).'</pre>';
// echo $address->displayAddress();
?>