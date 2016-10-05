<?php

class Books {
	public $title;
	public $price;

	function __construct($title,$price ) {
		$this->title = $title;
		$this->price = $price;
	}

	function displayBook(){
         echo 'The price for {$this->title} is {$this->price}';
      }
}

class Novel extends Books {
	public $publisher;

	function Novel($title,$price,$publisher) {
		parent::__construct($title,$price);
		$this->publisher = $publisher;
	}

	function displayBook(){
         echo 'The price for '.$this->title. 'is $'. $this->price . ' and publisher is '. $this->publisher;
         echo '<br>';
      }


}

class Address {

	public $street_address_1;
	public $street_address_2;
	public $city_name;
	public $postal_code;
	public $country_name;
	protected $address_id;

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

class ResidentialAddress extends Address {}


