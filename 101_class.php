<?php

class calculation{
   public $a , $b, $c;
   
   function sum(){
    $this->c= $this->a  + $this->b;
    return $this->c;
   }

   function sub(){
    $this->c = $this->a -$this->b;
    return$this->c;
   }
}


$c1 = new calculation();

$c1->a = 10;
$c1->b = 15;


$c1 = new calculation();

$c1->a = 40;
$c1->b = 2;

echo 'sum value of c1: '.$c1->sum() . "\n";
echo 'subtraction value of c2 :'. $c1->sub(). "\n" ;


class person{
    public $name;

    //construct
    function __construct($n){
        $this->name = $n;

    }
    

    function show(){
        echo "Your name: ".$this->name ."\n";
    }
}

$p1 = new person("peter");
$p2 = new person("tom");
// $p1->name = "tom";
$p1->show();
$p2->show();

//inheritance
class employee{
    public $name;
    public $age;
    public $salary;


    function __construct($n , $a, $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info(){
        echo "<h1>Employee profile:</h1>";
        echo "Employee Name:".$this->name."<br>";
        echo "Employee Age:".$this->age."<br>";
        echo "Employee Salary:".$this->salary."<br>";
    }

}

class manager extends employee{

    public $ts = 1000;
    public $phone = 500;
    public $totalSalary;

    function info(){
        $this->totalSalary= $this->salary  + $this->ts + $this->phone;

        echo "<h1>Manager profile:</h1>";
        echo "Employee Name:".$this->name."<br>";
        echo "Employee Age:".$this->age."<br>";
        echo "Employee Salary:".$this->salary."<br>";
        echo "Total Salary:".$this->totalSalary."<br>";
    }
    
}



$e1 = new employee("tom", 25, 10000);
$m1 = new manager("tom", 25, 20000);
$e1->info();
$m1->info();




// Access public
class base {
    public $name;
    public function __construct($n){
        $this->name=$n;
    }
    public function show(){
        echo "your name : ".$this->name."<br>";
    }
}

$b = new base("Tommy");

//overwrite
$b->name="joy";
$b->show();


//Access protected
class base1 {
    protected $name;
    protected function __construct($n){
        $this->name=$n;
    }
    protected function show(){
        echo "your name : ".$this->name."<br>";
    }
}

$b = new base("Rohan");

//overwrite
// $b->name="Rohan";
$b->show();


echo "<br>overriding properties--------<br>";

//overriding properties
class A {
    public $name ='parent class';
    public function cal($a ,$b){
       return $a * $b;
    }
}

class B extends A{
    public $name='child class';
    public function cal($a,$b){
        return $a+$b;
    }
}

$test = new B();

echo $test->name;
echo $test->cal(5,3);
echo "<br>abstract--------<br>";

//abstract 
// in abstract we need to defined a method with  abstract, but not implement ,we can not mat a object of abstract class, 
abstract class p{
    public $name;
    abstract protected function calc($a,$b);

}

class c extends p{
    public function calc($a,$b){
        echo $a+$b;
        echo "Hello";
    }

}


$test = new c();

echo $test->calc(3,6);


echo "<br>interface--------<br>";
// in interface we can access the multi class properties, we can not defined variables,

interface A1{
    function add($a,$b);
}
interface A2{
    function mul($x,$y);

}

class child1 implements A1,A2{
    public function add($a,$b){
        echo $a+$b;
    }
    public function mul($a,$b){
        echo $a*$b;
    }
}

$test1 = new child1();
echo 'sum from A1: '. $test1->add(2,2)."<br>";
echo 'mul from A2 :'. $test1->mul(2,3);


echo "<br>static member--------<br>";
// every class contain properties and methods ,in static class all properties and methods should be static 
class personal{
    public static $name ='Delhi';
    public static function show(){
        echo self::$name;
    }

    public function __construct(){
        self::show();
    }
    

}
 

// personal::$name; 
personal::show();echo "<br>";
echo "<br>";
$t1=new personal(); echo "<br>";
$t1->show();


echo "<br>Trait--------<br>";
// traits
trait test{
    public function hello(){
        echo "say hello\n";
    }
} 
trait bye{
    public function bye(){
        echo "say bye\n";
    }
} 

class X{
    use test, bye;
    
}
class Y{
    use test;
}

$obj1= new X();
$obj1->hello();
$obj1->bye();



echo "<br>Method Overriding--------<br>";
// insteadof -> without this 
trait hello{
    public function hello(){
        echo "hello from trait \n";
    }
}

class S1{
    public function hello(){
        echo "hello from S1 \n";
    }
}

class S2 extends S1{
    use hello;
    public function hello(){
        echo "hello from S2 \n";
    }
}

$test = new S2;
$test->hello();


echo "<br>Type Hinting--------<br>";

function sum(int $v){
    echo $v+1;
}
sum(10);

echo "<br>";
function fruits(array $names){
    echo "<ul>";
    foreach($names as $name ){
        echo "<li>". $name."</li>";
    }
    echo "</ul>";
}

$test = ["apple","Mango","Banana"];

fruits($test);

echo "<br>NameSpace--------<br>";
// They allow the same name to be used for more than one class, For example, you may have a set of classes which describe an HTML table, such as Table, Row and Cell while also having another set of classes to describe furniture, such as Table, Chair and Bed. Namespaces can be used to organize the classes into two different groups while also preventing the two classes Table and Table from being mixed up.


echo "<br>method chaining--------<br>";
// return this
class abc{
    public function first(){
        echo "this is first function<br>";
        return $this;
    }
    public function second(){
        echo "this is second function<br>";
        return $this;
    }
    public function third(){
        echo "this is third function<br>";
        return $this;
    }

}

$test = new abc();
$test->first()->second()->third();

echo "<br>magic method--------<br>";
//automatically run based on condition  like __construct(), staring  with __ == magic methods
echo "<br>__destruct() method--------<br>";

//The __destruct Function A destructor is called when the object is destructed or the script is stopped or exited. If you create a __destruct () function, PHP will automatically call this function at the end of the script. Notice that the destruct function starts with two underscores (__)!

class abc1{
    public function __construct(){
        echo "this is construct <br>";
    }
    public function hello(){
        echo "this is hello <br>";
    }
    public function __destruct()
    {
        echo "this is destruct <br>";   
    }
}

$test= new abc1();
$test->hello();

echo "<br>__autoload() method--------<br>";
//__autoload () is a magic method, means it gets called automatically when you try create an object of the class and if the PHP engine doesn't find the class in the script it'll try to call __autoload () magic method. You can implement it as given below example:

//    function __autoload($class) {
//     require "classes/".$class.".php";
//    }

//    $test = new first();
//    $test = new second();

echo "<br>__get() method--------<br>";
//__get () method When you attempt to access a property that doesn’t exist or a property that is in-accessible e.g., private or protected property, PHP automatically calls the __get () method. The __get () method accepts one argument which is the name of the property that you want to access:
// Fatal error
class abc2{
 private $name ='Delhi';
 private $data=["name"=>"Delhi","country"=>"India"];

//  public function __get($property){
//     echo "you are trying to access Non exiting or private property($property)";
//  }
 public function __get($key){
    if(array_key_exists($key,$this->data)){
        return $this->data[$key];
    }else{
        return "this key($key) is not defined.";
    }
 }
}

$test = new abc2();
// $test->name;
echo $test->country;



?>