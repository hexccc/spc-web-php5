<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'clients';
		public $primary_key = 'id';
		public $f_name = 'fname';
		public $l_name = 'lname';
		public $email = 'email';
		public $addr = 'address';
		public $city = 'city';
		public $prov = 'province';
		public $zip = 'zip_code';
		public $business = 'business_type';
		public $timestamps= true;

}
