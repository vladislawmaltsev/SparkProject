<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Policy extends CI_Controller {

	public function index()
	{
		$content = $this->contact_model->getPageContent(3);
		$data['content'] = $content;
		$data['title']= SITE_NAME.': Policy';
		$this->load->view('policy_view',$data);
	}
}
