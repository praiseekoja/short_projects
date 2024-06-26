<?php 
class fruit{
    public $color;
    private $shape;
    public $name;
    const FEEDING="    MY STOMACH IS FILLED    ";

    public function __construct($name,$color){

        $this->name=$name;
        $this->color=$color;
    }
      function set_name(){
            $this->name=$name;

        }
        function get_name(){
            return $this->name;
        }
      protected function set_color(){
            $this->color=$color;

        }
        function get_color(){
            return $this->color;
        }
        // function __destruct(){
        //     unset($name);
        //    unset($color);
        //    echo "the properties are unset";
        // }

}
class food extends fruit{
    public $size;

    function __construct(){
        echo "this is a food not a fruit";
    }
    function set_size($size){
        $this->size=$size;
    }
    function get_size(){
       return $this->size;
    }

}

$carrot = new fruit("carrot","yellow");
// $carrot->set_name('carrots');
echo $carrot->get_name();
echo $carrot->get_color();

$rice= new food("rice","white","big");
echo $rice->size;


//


// Define the parent class
class BankAccount {
    public $accountNumber;
    public $balance;

    public function __construct($accountNumber, $balance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function displayBalance() {
        echo "Account Number: {$this->accountNumber}, Balance: {$this->balance}\n";
    }
}

// Define the child class that extends the parent class
class CreditCardAccount extends BankAccount {
    public $creditLimit;
    public $interestRate;

    public function __construct($accountNumber, $balance, $creditLimit, $interestRate) {
        // Call the parent class constructor
        parent::__construct($accountNumber, $balance);
        // Initialize additional properties
        $this->creditLimit = $creditLimit;
        $this->interestRate = $interestRate;
    }

    public function displayCreditCardInfo() {
        echo "Account Number: {$this->accountNumber}, Balance: {$this->balance}, ";
        echo "Credit Limit: {$this->creditLimit}, Interest Rate: {$this->interestRate}%\n";
    }
}

// Create an instance of the child class
$creditCard = new CreditCardAccount("123456789", 1000, 5000, 1.5);

// Display balance using parent class method
$creditCard->displayBalance();

// Display credit card information using child class method
$creditCard->displayCreditCardInfo();


echo fruit::FEEDING;
?>


