<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\AddRequest;
use App\Http\Requests\UpdateRequest;

class PostController extends Controller
{
    private $controller_name    = 'post';
    private $path_to_view       = "home.post_detail.";
    private $title              = "LaraBlug | ";
    private $path_to_bower      = "bower_components/Tempo/";

    public function __construct()
    {
        // Var want to share
        view()->share('controller_name', $this->controller_name);
        view()->share('title', $this->title);
        view()->share('path_to_bower', $this->path_to_bower);
    }

    public function index(Request $request)
    {
        $post_id = $request->id;
        $post = Post::find($post_id);
        $cate_list = Category::all();
        $author_list = User::all();

        return view($this->path_to_view . 'index',[
            "post" => $post,
            "post_id" => $post_id,
            "cate_list" => $cate_list,
            "author_list" => $author_list,
        ]);
    }

    public function add(AddRequest $request)
    {
        $post= new Post;
        $post->post_title= $request->get('post_title');
        $post->post_content= $request->get('post_content');
        $post->post_cate= $request->get('post_cate');
        $post->post_author= $request->get('post_author');
        $post->save();

        return redirect("/");
    }

    public function update_form(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        return view($this->path_to_view . "update_form", compact(['post']));
    }

    public function update(UpdateRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->post_title= $request->get('post_title');
        $post->post_content= $request->get('post_content');
        $post->post_cate= $request->get('post_cate');
        $post->post_author= $request->get('post_author');
        $post->save();        

        return redirect("/");
    }

    public function create (Request $request) {
        return view($this->path_to_view . "add_form");
    }

    public function delete(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect("/");
    }
}
