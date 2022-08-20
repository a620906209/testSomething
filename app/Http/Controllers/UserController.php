<?php

namespace App\Http\Controllers;
use App\Repositories\UserRepostitory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Items;



class UserController extends Controller
{
    //
    protected $UserRepostitory;

    public function __construct(UserRepostitory $UserRepostitory)
    {
        $this->UserRepostitory = $UserRepostitory;
    }

    public function index($id){

         return $this->UserRepostitory->getsomething($id);
    }

    public function showProfile(){

        //  $user = Items::all()->get(0);
        //  $data = Items::where('item_id','>=','2')->simplePaginate(10);
        //  dd($data);
        //  $data=Items::all();
        //  return view('main',['item' => $data]);
        // dd($this->UserRepostitory->getAgeLargerThan(2));
        return $this->UserRepostitory->getAgeLargerThan(2);

    }
}
