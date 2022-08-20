<?php
// namespace App\Http\Controllers;
namespace App\Repositories;

use App\Models\Items;


/**
 * Class UserRepository
 * @package App\Repositories
 */
class UserRepostitory
{
    /**
     * @var User
     */
    private $user;

    /**
     * UserRepository constructor.
     * @param $user
     */
    public function __construct(Items $Items)
    {
        $this->Items = $Items;
    }

    /**
     * @param $age
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAgeLargerThan($id)
    {
        return $this->Items
            ->where('item_id', '=', $id)
            ->orderBy('item_id')
            ->get();
    }
    public function getsomething($id)
    {
        return $this->Items
            ->where('item_id', '>', $id)
            ->orderBy('item_id')
            ->get();
    }

}
