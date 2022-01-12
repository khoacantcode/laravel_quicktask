<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $controller_name    = 'dashboard';
    private $path_to_view       = "admin.dashboard.";
    private $title              = "LaraBlug | Dashboard";
    private $path_to_bower      = "bower_components/startbootstrap-sb-admin-2/";
    private $name               = "Khoacantcode";

    public function __construct()
    {
        // Var want to share
        view()->share('controller_name', $this->controller_name);
        view()->share('title', $this->title);
        view()->share('path_to_bower', $this->path_to_bower);
        view()->share('name', $this->name);
    }

    public function index()
    {
        return view($this->path_to_view . 'index');
    }
}
