<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class HomeController extends Controller
{
    private $controller_name    = 'home';
    private $path_to_view       = "home.post_list.";
    private $title              = "LaraBlug | Home";
    private $path_to_bower      = "bower_components/Tempo/";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // Var want to share
        view()->share('controller_name', $this->controller_name);
        view()->share('title', $this->title);
        view()->share('path_to_bower', $this->path_to_bower);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post_list = Post::all();
        $cate_list = Category::all();
        $author_list = User::all();

        return view($this->path_to_view . 'index', [
            "post_list" => $post_list,
            "cate_list" => $cate_list,
            "author_list" => $author_list,
        ]);
    }
}
