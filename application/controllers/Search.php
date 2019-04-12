<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Search extends CI_Controller 
 {
     public function index() 
     {
        if (isset($_POST['q'])) {
            $data['searched'] = $this->input->post('search');
            // se session userdata untuk pencarian, untuk paging pencarian
            $this->session->set_userdata('sess_searched', $data['searched']);
        }
        else {
            $data['searched'] = $this->session->userdata('sess_searched');
        }


        // load model
        $this->load->model('M_pagination');

        $this->db->like('title', $data['searched']);
        $this->db->from('song');

        // pagination limit
        $pagination['base_url'] = site_url().'search/index/page/';
        $pagination['total_rows'] = $this->db->count_all_results();
        $pagination['full_tag_open'] = "<p><div class=\"pagination\" style='letter-spacing:2px;'>";
        $pagination['full_tag_close'] = "</div></p>";
        $pagination['cur_tag_open'] = "<span class=\"current\">";
        $pagination['cur_tag_close'] = "</span>";
        $pagination['num_tag_open'] = "<span class=\"disabled\">";
        $pagination['num_tag_close'] = "</span>";
        $pagination['per_page'] = "3";
        $pagination['uri_segment'] = 4;
        $pagination['num_links'] = 5;

        $this->pagination->initialize($pagination);

        $data['ListSearch'] = $this->M_pagination->ambildata($pagination['per_page'],$this->uri->segment(4,0),$data['searched']);

        $this->load->vars($data);
        $this->load->view('pagination/pagination');
     }
 }