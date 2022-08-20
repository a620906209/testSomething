<?php
namespace App\Interfaces;

interface OrderRepositoryInterface
{

    public function getAll();
    public function getStore($id);
    public function getOoverHundred();

}
