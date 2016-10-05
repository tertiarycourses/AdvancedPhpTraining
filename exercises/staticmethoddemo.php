<?php


class Address {

 	const RESIDENTIAL = 1;
  	const COMMERCIAL = 2;
  	const PARK = 3;

 	static public $address_types = array(
    	Address::RESIDENTIAL => 'Residential',
    	Address::COMMERCIAL => 'Commercial',
    	Address::PARK => 'Park',
    );
	
	public $street_address_1;
	public $street_address_2;
	public $city_name;
	public $postal_code;
	public $country_name;

	function __construct($data=array()) {
		foreach ($data as $name =>$value) {
			$this->$name = $value; 
		}
	}

	function displayAddress() {
		$output = '';
		$output .= $this->street_address_1;
		if ($this->street_address_2) {
			$output .= '<br>'.$this->street_address_2;
		}
		$output .= '<br>';
		$output .= $this->city_name . ' ' . $this->postal_code;
		$output .= '<br>';
		$output .= $this->country_name;

		return $output;
		
	}


	static public function isValidAddressTypeId($address_type_id) {
		return array_key_exists($address_type_id, self::$address_types);
    }


}

