<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data['title'] = 'Eramovers | Home';
    $this->session->__set('home', $data['title']);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/carousel', $data);
    $this->load->view('templates/navbar');
    $this->load->view('auth/index');
    $this->load->view('templates/footer');
  }


  public function about()
  {
    $data['title'] = "Eramovers | About";
    $this->session->__set('about', $data['title']);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/carousel', $data);
    $this->load->view('templates/navbar');
    $this->load->view('auth/about');
    $this->load->view('templates/footer');
  }

  public function contact()
  {
    $data['title'] = "Eramovers | Contact Us";
    $this->session->__set('contact', $data['title']);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/carousel', $data);
    $this->load->view('templates/navbar');
    $this->load->view('auth/contact');
    $this->load->view('templates/footer');
  }
}
