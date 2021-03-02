<?php
namespace Core\Modules\Admin\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('Admin::index');
    }
}