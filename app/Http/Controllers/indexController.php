<?php

namespace App\Http\Controllers;

use App\Models\DB5;
use Illuminate\Http\Request;
use App\Models\Items;
use Illuminate\Support\Facades\Facade;


class indexController extends Controller
{
    public function index(){
        // return 'yes';
        $newCollection = collect(1);
        $ary = [1,2,3,4];
        //  $item = Items::all()->take(2);
        $test = $newCollection->merge($ary)->random();
        $count = count($ary);
        $sql = DB5::all()->first();
        dd($newCollection->random());
        return ($newCollection);
    }

    public static function showitem()
    {
        return Items::where('item_id','=','1')->get();
    }



}

///////////  trait/////////
/*
trait Tag {
	abstract function prefix();
	abstract function postfix();
	function tag($name) {
		echo $this->prefix().$name.$this->postfix()."\n";
	}
    function aaa(){
        echo "aaa";
    }
}
class HtmlOpenTag {
	use Tag;
	function prefix() {
		return '<'.$this->aaa();
	}
	function postfix() {
		return '>';
	}
}
class HtmlCloseTag {
	use Tag;
	function prefix() {
		return '</';
	}
	function postfix() {
		return '>';
	}
}
class BbcodeOpenTag {
	use Tag;
	function prefix() {
		return '[ ';
	}
	function postfix() {
		return ']';
	}
}
class BbcodeCloseTag {
	use Tag;
	function prefix() {
		return '[ /';
	}
	function postfix() {
		return ']';
	}
}
$c = new HtmlOpenTag;
$c->tag('321');
$d = new HtmlCloseTag;
$d->tag('br');
$e = new BbcodeOpenTag;
$e->tag('777');
$f = new BbcodeCloseTag;
$f->tag('888');
*/
///////////單例///////////////////


trait oops{
    public $well = 'good';
    public function well(){
        echo $this->well;
    }
}
class Man
{
    use oops;
    public $age = 0;
    private static $instance;
    private function __construct()
    {

    }
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function saysomething(){
        echo 'hello' . "\n";
    }
    public function setsomehting($age){
        $this->age = $age;
    }
    public function getsomething(){
        echo $this->age . "\n";
    }

}
// $one = Man::getInstance();
// $two = Man::getInstance();
// $one->saysomething();
// $two->saysomething();
// $one->setsomehting(30);
// $two->setsomehting(40);
// $one->getsomething();
// $two->getsomething();



// dd($result);



/////////////////////////////////////////////////////////




//////////介面//////////////////////////////////////////
/*
interface action{
    public function run();
    public function fast();
};
interface color{
    public function red();
};

class main{
    protected $number= '10';
};


abstract class main_child extends main implements color,action{
    protected $blood = 'A';
    function run(){
        $this->fast();
    }
    // function red(){
    // 	echo "red";
    // }
};

class someone extends main_child{
    function fast(){
        echo '</br>'.$this->number;
        // $this->red();

    }
    // function run(){

    // }
    function red(){
        echo 'red';

    }

}
abstract class animal implements action{
    protected $blood = 'A';
    function run(){
        $this->fast();
    }
};

class dog extends animal{
public $type = 'type';
function red(){
    echo 'red'.'  '.$this->blood;
}
    function fast(){
        echo 'very fast'.'</br>';
    }
};

// $dog = new dog;
// $dog->run();
// $dog->red();
// echo $dog->type;
// $someone = new someone;
// $someone->red();
// echo $someone->fast();

*/
/////////////介面/////////////////////////////////////
/*
interface style
{
    //顏色
    public static function orange();
};
interface playwith
{
    //用什麼方式打
    public function hand();
};
abstract class ball implements style,playwith
{
    //基本球的物件
    protected $shape = 'circle';
};
 class basketball extends ball
{
    //繼承球的籃球物件
    public $basketballshape;
    public $color;
    public $playwith;
    function __construct()
    {
        $basketballshape = $this->shape;
        echo $basketballshape.'</br>';
    }
    static function orange()
    {
        // $basketballshape = $this->shape;
        $color = 'orange'.'</br>';
        echo $color;
    }
    public function hand()
    {
        $this->playwith = 'hand'.'</br>';
        echo $this->playwith;
    }

}
//實作籃球
$basketball = new basketball;
basketball::orange();
echo $basketball->basketballshape;


class a
{
    var $name='fillano';
    function  show($c) {
      $f = function(){echo $this->name."\n";};
      $f();
      $g = $f->bindTo($c);
      $g();
    }
}
  class b
  {
    var $name='hildegadrd';
  }
  class c{
    var $name = 'ddddd';
  }

  $a = new a;
  $a->show(new c);
*/

