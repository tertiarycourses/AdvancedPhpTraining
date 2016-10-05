<?php

class Books {
	public $title;	
	function setTitle($title){
         $this->title = $title;
      }
}

class Address {

	public $street_address_1;
	public $street_address_2;
	public $city_name;
	public $postal_code;
	public $country_name;
  	protected $_address_id;

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

