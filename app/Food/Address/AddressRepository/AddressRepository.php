<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/4/18
 * Time: 6:40 PM
 */
namespace App\Food\Address\AddressRepository;

use App\Food\Address\Address;
use App\Food\FoodBase\Repository\FoodRepository;
use Illuminate\Database\Eloquent\Model;

class AddressRepository extends FoodRepository implements AddressInterface{

    public function __construct(Address $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

}