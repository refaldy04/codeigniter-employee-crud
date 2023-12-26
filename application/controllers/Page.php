<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
    public function index() {
        echo "from index method";
    }

    public function aboutus() {
        echo "from abouts method";
    }

    public function blog($blog_url = '') {
        echo "$blog_url";

        $this->load->view('blogview');
    }

    public function demo(){
        $this->load->model('Student');
        $subtitle = $this->Student->demo();
        $data['title'] = 'Hello';
        $data['subtitle'] = $subtitle;
        $data['body'] = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi quasi tenetur quae asperiores excepturi ex voluptates beatae praesentium deleniti incidunt!';
        
        $this->load->view('demo', $data);
    }
}