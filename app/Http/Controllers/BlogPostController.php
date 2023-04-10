<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    

    private const BB_VALIDATOR = [
        'title' => 'required|max:50',
        'body' => 'required'
        ];


    private const BB_ERROR_MESSAGES = [
        'required' => 'Заполните это поле',
        'max' => 'Значение не должно быть длиннее :max символов',
        ];
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    
    
    
    public function index()
    {
        
        //$posts = BlogPost::all(); //fetch all blog posts from DB
	    //     return view('blog.index', [
        //     'posts' => $posts,
        // ]);     //returns the view with posts

        return view('blog.index',['posts' => Auth::user()->post()->latest()->get()]);


    }

    public function about()
    {
        
        //$posts = BlogPost::all(); //fetch all blog posts from DB
	    //     return view('blog.index', [
        //     'posts' => $posts,
        // ]);     //returns the view with posts

        return view('blog.about',['posts' => Auth::user()->post()->latest()->get()]);


    }


    public function create()
    {
        return view('blog.create');
    }

   
    public function store(Request $request)
    {
        $validated = $request->validate(self::BB_VALIDATOR,
                self::BB_ERROR_MESSAGES);
        Auth::user()->post()->create([
            'title' =>  $validated['title'],
            'body' => $validated['body']
        ]);

        return redirect()->route('welcome');
        //return redirect('blog/' . $newPost->id);
    }

    public function show(BlogPost $blogPost)
    {
        return view('blog.show', [
            'post' => $blogPost,
        ]); //returns the view with the post
    }

    
    public function edit(BlogPost $blogPost)
    {
        
        return view('blog.edit', [
            'post' => $blogPost,
            ]); //returns the edit view with the post
    }

    
    public function update(Request $request, BlogPost $blogPost)
    {
        $validated = $request->validate(self::BB_VALIDATOR,
                self::BB_ERROR_MESSAGES);

        $blogPost->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect('blog/' . $blogPost->id);
    }

    
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();

        return redirect('/blog');
    }
}