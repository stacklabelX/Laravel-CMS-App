<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class members extends Model {

	//
	  protected $table = 'Members';
	  protected $fillable = array(
	  	'username', 
	  	'email', 
	  	'firstName', 
	  	'lastName', 
	  	'street', 
	  	'suburb', 
	  	'postcode', 
	  	'businessLocation', 'businessName', 'businessPhone', 'Department', 'Phone'


	  	);


}
