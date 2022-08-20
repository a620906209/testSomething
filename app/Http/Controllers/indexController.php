<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        // return 'yes';
    }

}


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


