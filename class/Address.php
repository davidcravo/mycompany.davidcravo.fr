<?php

class Address{

    private string $street_address;
    private string $postal_code;
    private string $city;
    private string $country;

    public function __construct(string $street_address, string $postal_code, string $city, string $country)
    {
        $this->street_address = $street_address;
        $this->postal_code = $postal_code;
        $this->city = $city;
        $this->country = $country;
    }

    function address_html(){
        return <<<HTML
            <p>
                $this->street_address<br>
                $this->postal_code $this->city<br>
                $this->country
            </p>
        HTML;
    }
}