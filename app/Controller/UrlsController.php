<?php  
/**
 * URL controller
 * 
 * @package		CakeUrl.it
 * @subpackage	
 */

class UrlsController extends AppController {

	/**
	 * Index 
	 * 
	 * @return void
	 */
	public function index() {
	
		if ($this->request->is('post')) {
			if (!empty($this->request->data)) {
				$md5url = $this->Url->md5url($this->request->data['Url']['link']);
				
				// If the URL doesn't exist
				if ($md5url['exists'] == false) {
					$this->request->data['Url']['short'] = $this->Url->shorten(6);
					$this->request->data['Url']['unique'] = $md5url['url'];
					// Save to DB
					if ($this->Url->save($this->request->data)) {
						// pr($this->request->data);
						$this->set('shorturl', $this->request->data['Url']['short']);
						$this->render('short');
					}

				} else {
					// If it exists
					$this->set('shorturl', $this->Url->getUrl($md5url['url']));
					$this->render('short');
				}
			}
		}
	}

	/**
	 * Redirect shorturl to a full url
	 *
	 * @return void
	 */
	public function redirectMe($shorturl) {
		$fullurl = $this->Url->getFullUrl($shorturl);

		if (!empty($fullurl)) {
			$this->redirect($fullurl);
		} else {
			$this->redirect(array('action' => 'index'));
		}
	}



}

?>