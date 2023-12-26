<?php

class Student extends CI_Model {
    public function student_data(){
        $studclass = $this->student_class();
        return $student_name = "Refaldy, His class is ". $studclass;
    }

    private function student_class(){
        return $student_class = 'Science';
    }

    public function student_show($id){
        if($id == '1'){
            return $result = 'User 1';
        } elseif ($id == '2') {
            return $result = 'User 2';
        }
    }

    public function demo(){
        return $subtitle = 'Lorem ipsum, dolor sit amet consectetur adipisicing';
    }
}

?>