<?php

function pagination_configuration($base_url, $total_rows, $per_page='50', $uri_segment='3', $num_links='4', $use_page_numbers=TRUE) {
		$config = array();
        $config["base_url"] = $base_url;
        $config["total_rows"] = $total_rows;
	    $config["per_page"] = $per_page;
        $config["uri_segment"] = $uri_segment;
		$config['num_links'] = $num_links;
		$config['use_page_numbers'] = $use_page_numbers;
		
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
        
		//First Link
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		
		//Last Link
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		//Next Link
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		
		//Previous Link
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		
		//Current link
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</li></a>';
		
		//Digits Link
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		return $config;
	}
?>