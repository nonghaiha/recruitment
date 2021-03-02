<?php
namespace Core\Modules\Admin\Controllers\Admin;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('Admin::blog.index');
    }
}
