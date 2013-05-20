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
			'rule' => array('url', true),
			'message' => 'Enter a valid URL' 
		)
	);

	/**
	 * shorten
	 * 
	 * @return string
	 */
	public function shorten($length=8, $prefix='') {
		$string = "";
		$possible = "abcdefghijklmnopqrstuvwxyz0123456789";
		$i = 0;

		do {
			while ($i < $length) {
				$char = substr($possible, mt_rand(0, strlen($possible) -1), 1);
				if (rand(0, 1)) {
					$char = strtoupper($char);
				}

				$string .= $char;
				$i++;
			} 
		} while (file_exists(sprintf($prefix, $string)) == true);

		return $string;
	} 


	/**
	 * Generate an MD5 code of the url (Check for URL in DB)
	 * 
	 * @return MD5 string
	 */
	public function md5Url($url) {
		$md5edurl['url'] = md5($url);

		$md5search = $this->find('count', 
			array('conditions' => array('unique' => $md5edurl['url'])),
			array('recursive' => -1)
		);

		if ($md5search > 0) {
			$md5edurl['exists'] = true;
		} else {
			$md5edurl['exists'] = false;
		}

		return $md5edurl;
	}


	/**
	 * Get Url
	 * 
	 * @return MD5 
	 */
	function getUrl($md5) {
		$shortUrl = $this->field('short', array('unique' => $md5));
		return $shortUrl;
	}

}
?>