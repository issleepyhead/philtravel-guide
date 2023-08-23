<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends  CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->library(array('pagination', 'session'));
        $this->load->model('pages_model');
    }

    public function view($page = 'index') {

        // does the page exists?
        if(!file_exists(APPPATH."views/$page.php")) {   // Oops doesn't exists
            show_404();
        }
        
        $data['title'] = ucfirst(($page == 'index')? "Philippines Travel Guide" : $page);    // page's title
        $data['info'] = $this->pages_model->get_info();

        if($page == 'destinations') {
            // if you ever wonder what these are, they are bootstrap pagination tags.
            $config = array(
                'base_url' => base_url() . "destinations", 'total_rows' => $this->pages_model->get_row_count(),
                'per_page' => 5, 'uri_segment' => 2,
                'full_tag_open' => '<ul class="pagination justify-content-center">', 'full_tag_close' => '</ul>',
                'first_link' => '&laquo;', 'last_link' => '&raquo;',
                'first_tag_open' => '<li class="page-item"><span class="page-link">',
                'first_tag_close' => '</span></li>', 'prev_link' => 'Previous',
                'prev_tag_open' => '<li class="page-item"><span class="page-link">',
                'prev_tag_close' => '</span></li>', 'next_link' => 'Next',
                'next_tag_open' => '<li class="page-item"><span class="page-link">',
                'next_tag_close' => '</span></li>', 'last_tag_open' => '<li class="page-item"><span class="page-link">',
                'last_tag_close' => '</span></li>', 'cur_tag_open' => '<li class="page-item active"><a class="page-link" href="#">',
                'cur_tag_close' => '</a></li>', 'num_tag_open' => '<li class="page-item"><span class="page-link">',
                'num_tag_close' => '</span></li>'
            );
            $this->pagination->initialize($config);
            $page_start = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
            $data['links'] = $this->pagination->create_links();
            $data['data'] = $this->pages_model->fetch_information($page_start, $config['per_page']);
            $this->load->view($page, $data);
        } else if ($page == 'index') {
            $data['images'] = $this->pages_model->get_random_img();
            $this->load->view($page, $data);
        } else if ($page == 'regions') {
            $data['regions'] = $this->pages_model->get_regions();
            $data['infos'] = [];
            for($i = 0; $i < count($data['regions']); $i++) {
                $data['infos'][$i] = $this->pages_model->get_by_region($i+1);
            }
            //print_r($data['infos']);
            $this->load->view($page, $data);
        } else if ($page == 'read') {
            $place_name = $this->input->post('place_name');
            $data['info'] = $this->pages_model->get_by_name($place_name);
            $this->load->view($page, $data);
        } else if ($page == 'faq' || $page == 'team') {
            $this->load->view($page);
        }
    }

    public function view_page() {
        $this->load->model('pages_model');
        $place_name = $this->input->post('place_name');
        $info = $this->pages_model->get_by_name($place_name);
        if ($info != null) {
            $this->session->keep_flashdata('info', $info);
            redirect('read');
        }
    }
}

?>