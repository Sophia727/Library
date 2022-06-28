
<!-- exercice 1 
1. Write a simple PHP class which displays the following string. 
'MyClass class has initialized !'-->
<!-- <?php
class MyClass {
  public function __construct(){
   echo 'MyClass class has initialized !';
  }
 }
$userclass = new MyClass;
?> -->

<!-- exercice 2
Write a simple PHP class which displays an introductory message 
like "Hello All, I am Scott", 
where "Scott" is an argument value of the method within the class. 
-->
<!-- <?php
class Intro {
    public $_name;
    public $_greetings;
    public function __construct(string $name, string $greetings){
        $this->_name = $name;
        $this->_greetings = $greetings;
    }
    public function message(){
        echo "{$this->_greetings} All, I am {$this->_name}!";  
    } 
}
$p1 = new Intro("Scott", "Hello");
$p1->message();
?>  -->

<!-- exercice 3
Write a PHP class that calculates the factorial of an integer. 
-->
 <!-- <?php
class FactrNum{
    public int $_n;
    public int $_result = 1;
    public function __construct(int $n, int $result)
    {
        $this->_n = $n;
        $this->_result = $result;
    }
    public function calculateFactr(){
        for ($i=1; $i <= $this->_n; $i++){
        $this->_result *= $i ; 
        } return $this->_result;
    } 
}

$test = new FactrNum(5, 1);
echo $test->calculateFactr();
?>  -->

<!-- exercice 4
Write a PHP class that sorts an ordered integer array with the help of sort() function.
Sample array : array(11, -2, 4, 35, 0, 8, -9)
Output : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )
-->
<!-- <?php
class Tableau{
    protected array $arr;
    public function __construct( array $arr1){
        $this->arr = $arr1;
    }
    public function sortArr(){
        $sortedarr = $this->arr;
        sort($sortedarr);
        return $sortedarr;
    }
}
$testArr = new Tableau(array(11, -2, 4, 35, 0, 8, -9));
print_r($testArr->sortArr())."\n";
?> -->
  
<!-- exercice 5
Calculate the difference between two dates using PHP OOP approach. 
Sample Dates : 1981-11-03, 2013-09-04
Expected Result : Difference : 31 years, 10 months, 1 days 
-->
<!-- <?php
$firstdate = new DateTime("1981-11-03");
$enddate = new DateTime("2013-09-04");
$interval= $firstdate->diff($enddate);
echo "Difference : ".$interval->y."years, ".$interval->m. "months,".$interval->d."days.\n "

?> -->

<!-- exercice 6
Write a PHP Calculator class which will accept two values as arguments, 
then add them, subtract them, multiply them together, 
or divide them on request.
For example :
$mycalc = new MyCalculator( 12, 6);
echo $mycalc- > add(); // Displays 18
echo $mycalc- > multiply(); // Displays 72 
-->
<!-- <?php
class Calculator{
    protected int $x;
    protected int $y;
    public function __construct($_x, $_y){
        $this->x = $_x;
        $this->y = $_y;
    }
    public function add(){
        return ($this->x + $this->y);
    }
    public function substrct(){
        return ($this->x - $this->y);
    }
    public function multip(){
        return ($this->x * $this->y);
    }
    public function divide(){
        return ($this->x / $this->y);
    }
}
$mycalc = new Calculator(12, 6);
echo $mycalc->add()."\n";
echo $mycalc->substrct()."\n";
echo $mycalc->multip()."\n";
echo $mycalc->divide()."\n";
?> -->
<!-- exercice 7
Write a PHP script to convert a string to Date and DateTime.
Sample Date : '12-08-2004'
Expected Output : 2004-12-08
Note : PHP considers '/' to mean m/d/Y format and '-' to mean d-m-Y format.
-->
<!-- <?php

$dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
echo $dt;

?> -->