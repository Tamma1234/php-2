<?php
/** Tính đóng gói là tính chất không cho phép người dùng hay đối tượng khác
 * thay đổi dữ liệu thành viên của đối tượng nội tại. 
 */
    class A{
        public $name = "neymar";
        protected $age = 20 ;
        private $salary =1000;
        function getName(){
            return $this->name;
        }
        function getAge(){
            return $this->age;
        }
        function getSalary(){
            return $this->salary;
        }
    }
    class B extends A{
        function getName(){
            return $this->name;
        }
        function getAge(){
            return $this->age;
        }
        function getSalary(){
            return $this->salary;
        }
    }

    $nam = new A;
    echo $nam->getName();
    echo $nam->getAge();
    echo $nam->getSalary();
?>
