<?php 
  class car{
    public $name;
    public function __construct($name){
        $this->name=$name;
        self::status($name);
        
    }
    public static function status($name){
        echo "this is a static function";
    }
    // public function retweet(){
        
    // }


 }
 

 class volvo extends car{
    public function intro(){
        echo "this is a ".$this->name;
    }
 }

 $volvo=new volvo("volvo");
 echo $volvo->name;
  car::status("volvo"); 


  class A{
     public static function welcome(){
        echo "welcome";
     }
  }
class B{
    public static $date=13.5;
    function __construct(){
        A::welcome();
    }

}
class D{
    
}
$c=new B;
 echo B::$date;

 



?> 