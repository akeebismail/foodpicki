<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/16/18
 * Time: 7:46 PM
 */
namespace App\Food\MenuFood\Repository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MenufoodNotFoundExcption extends NotFoundHttpException{

    public function __construct($mes)
    {
        parent::__construct($mes);
    }
}