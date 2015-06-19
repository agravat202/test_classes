<?php
//
//abstract class animal
//{
//        abstract function getowned();
//        private $age;
//
//        protected function __construct($age) {
//                $this->age = $age;
//                }
//
//        public function getage()
//                {
//                return $this->age;
//                }
//}
interface insurable {
        public function getvalue();
        }

class house  implements insurable {
    private $name;
    private $age;
        public function __construct($name,$age) {
                
                $this->name = $name;
                 $this->age=$age;
                }
                
    public function getvalue() {
                return $this->name;
               
        }

        public function getname() {
                return 'as';
                
                }
        public function getage()
                {
                return $this->age;
                }
}