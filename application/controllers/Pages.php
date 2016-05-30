<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('email');
    }
	public function index()
	{
		$site_url['url'] = base_url();
                $site_url['title'] = "Welcome to Bambini Bee";
                $data_array['head'] = $this->load->view('includes/head', $site_url, TRUE);
                $data_array['nav'] = $this->load->view('includes/nav', $data_array, TRUE);
                $data_array['footer'] = $this->load->view('includes/footer', $data_array, TRUE);
                
                $this->load->view("index", $data_array);
	}
	public function contact_us()
	{
		$site_url['url'] = base_url();
                $site_url['title'] = "Contact us | Bambini Bee";
                $data_array['head'] = $this->load->view('includes/head', $site_url, TRUE);
                $data_array['nav'] = $this->load->view('includes/nav', $data_array, TRUE);
                $data_array['footer'] = $this->load->view('includes/footer', $data_array, TRUE);
                
                $this->load->view("contact_us", $data_array);
	}
	public function about_us()
	{
		$site_url['url'] = base_url();
                $site_url['title'] = "About us | Bambini Bee";
                $data_array['head'] = $this->load->view('includes/head', $site_url, TRUE);
                $data_array['nav'] = $this->load->view('includes/nav', $data_array, TRUE);
                $data_array['footer'] = $this->load->view('includes/footer', $data_array, TRUE);
                
                $this->load->view("about_us", $data_array);
	}
        
        public function contactForm() {
            
            $this->form_validation->set_rules('name', "Name", 'required');
            $this->form_validation->set_rules('email', "Email", 'required|valid_email');
            $this->form_validation->set_rules('subject', "Subject", 'required');
            $this->form_validation->set_rules('message', "Message", 'required');
            
            if($this->form_validation->run() != true){
                echo "<div class='alert alert-danger'>".  validation_errors()."</div>";
            }
            else{
                $this->email->from($this->input->post('email'), $this->input->post('name'));
                $this->email->to('info@bambinibee.co.uk');
                $this->email->subject($this->input->post('subject'));
                $this->email->message($this->input->post('message'));
                
                if($this->email->send()){
                    echo "<div class='alert alert-success'><strong>Thank you for contact, see you soon.</strong></div>";
                    echo "<script>document.getElementById('contactForm').reset();</script>";
                }else{
                    echo $this->email->print_debugger();
                }
            }
            
        }
}
