<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/6/18
 * Time: 8:58 AM
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class DashboardController extends Controller{

    public function index(){
        return view('admin.pages.dashboard');
    }
}