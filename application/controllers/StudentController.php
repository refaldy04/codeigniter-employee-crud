<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {
    public function index() {
        $this->load->model('Student', 'stud');
        // $student = $this->Student->student_data();

        // $student = new Student;
        // $student = $student->student_data();

        $student = $this->stud->student_data();
        // $student_class = $this->stud->student_class(); // will be error

        echo "Student Name : ". $student;
    }

    public function show($id){
        // echo $id;
        $this->load->model('Student', 'stud');
        $selected_student = $this->stud->student_show($id);

        echo $selected_student;
    }

    
}

?>