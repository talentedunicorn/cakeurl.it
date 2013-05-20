<?php  
/**
 * 
 * 
 * @package		CakeUrl.it
 * @subpackage	
 */
class Url extends AppModel {

	// Validation
	public $validate = array(
		'link' => array(
			'required' 	=> true,
			'rule' => 'url',
			'message' => 'Please enter a valid URL!'
		)
	);

	// Check if the Url is in out DB
	public function findUrl($url) {

	}


}


?>