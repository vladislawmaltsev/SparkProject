<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$content = $this->contact_model->getPageContent(2);
		$data['content'] = $content;
		$data['title']= SITE_NAME.': About Us';
		$this->load->view('about_view',$data);
	}
}
