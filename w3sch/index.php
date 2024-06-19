<?php 
class fruit{
    public $name;
    public $colour;
    function setname($name){
        $this->name=$name;

    }
    function getname(){
       return $this->name;

    }

}
$banana= new fruit();
$cherry= new fruit();
$banana->setname('sweetbanana');
$banana->getname();



?> 