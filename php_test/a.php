<?php
class Student {

    public $name;

    private $email;

    protected $address;

        function setData($n, $e, $a){
            $this->name = $n;
            if($e > 0){
                $this->email = $e;
            }
            else{
                $this->email = 0; 
            }
            if($a =="A-Z"){
                $this->address = $a;
            }else{
                $this->address = "HUY";
            }
            

        }

        function getEmail(){
            return $this->email;
        }

        function getAddress(){
            return $this->address;
        }  
    }
    
    $student = new Student();

    $student->setData("Đào Vỉnh Huy","55","A-Z");

    echo $student->name; 

    echo '<hr>';

    echo $student->getEmail(); 

    echo '<hr>';

    echo $student->getAddress(); 
?>