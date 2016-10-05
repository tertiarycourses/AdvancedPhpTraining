<?php

class Books {
	public $title;	
	public $price;
	
	// function __construct($title,$price ) {
	// 	$this->title = $title;
	// 	$this->price = $price;
	// }

	function Books($title,$price ) {
		$this->title = $title;
		$this->price = $price;
	}

	function displayBook(){
         echo 'The price for '. $this->title .'is $'. $this->price;
         echo '<br><br><br>';
      }

}

class Address {

 	static public $address_types = array(
    	1 => 'Residential',
    	2 => 'Commercial',
    	3 => 'Park',
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




}

