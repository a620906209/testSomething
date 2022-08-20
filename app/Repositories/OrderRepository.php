<?php
namespace App\Repositories;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Items;

class OrderRepository implements OrderRepositoryInterface
{
    public function getAll()
    {
        // Items::all();
        return Items::simplePaginate(5);
    }
    public function getStore($id)
    {
        $result = Items::where('store_id','=',$id)->simplePaginate(2);
        return $result;
    }
    public function getOoverHundred()
    {
        $result = Items::where('item_price','>=',100)
        ->orderBy('item_id')
        ->simplePaginate(2);
        return $result;
    }

}
