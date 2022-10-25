<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\OrderRepositoryInterface;

class OrderController extends Controller
{
    private OrderRepositoryInterface $orderRepository;
    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
    public function all()
    {
        $data = $this->orderRepository->getAll();
        return view('order')->with('datas',$data);
    }
    public function store($id)
    {
        $data = $this->orderRepository->getStore($id);
        return view('order')->with('datas',$data);

    }
    public function hundred()
    {
        $data = $this->orderRepository->getOoverHundred();
        return view('order')->with('datas',$data);
    }
    public function ooo(){
        echo config('website.site_name');
        // return Items::where('store_id','=','1000');
    }
}
