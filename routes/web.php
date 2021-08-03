<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
    using key value pairs
    Route::get('/post', function () {
    return view('post', [
        'title' => 'Innocent Ndhlovu',
        'post' => 'About post',
    ]
);
});

Route::get('/post', function () {
    $post = file_get_contents(__DIR__ .'/../resources/posts/my-first-post.html');
    return view('post', [
      'post' => $post,
      'title' => 'First post'
    ]
);
});

Route::get('/posts/{post}', function ($slug) {
    return $slug;
});

// {post} - wildcard
Route::get('/posts/{post}', function ($slug) {
    $path = __DIR__ ."/../resources/posts/{$slug}.html";
    
    if(!file_exists($path)){
        // dd('file does not exist'); // Dump, die, 
        // ddd('file does not exists'); // Dump, Die, Debug
        // abort(404);
        return redirect('/');
    }
    $post = file_get_contents($path);
    return view('post', [
      'post' => $post,
      'title' => $slug
    ]
);
})->where('post','[A-z_\-]+');

Route::get('/posts/{post}', function ($slug) {
    $path = __DIR__ ."/../resources/posts/{$slug}.html";

    if(!file_exists($path)){
        return redirect('/');
    }
    $post = cache()->remember("posts.($slug)", 5 , function() use($path) {
        var_dump('file_get_contents');
        return file_get_contents($path);
    });
    $post = file_get_contents($path);
    return view('post', [
      'post' => $post,
      'title' => $slug
    ]
);
})->where('post','[A-z_\-]+');


*/
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     $posts  = Post::all();

//     return view('posts',[
//         'posts'=>Post::all()
//     ]);
// });
Route::get('/',function(){
    $files = File::files(resource_path('posts'));
    $posts =[];

    foreach ($files as $file) {
        $document=  YamlFrontMatter::parseFile($file);

        $posts[] = new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body()
        );
    
    }    
    ddd($posts);
});

// {post} - wildcard
Route::get('/posts/{post}', function ($slug) {
// Find a post by its slug and pass it to a view called post
     return view('post', [
      'post' => Post::find($slug),
      'title' => $slug
    ]
);
})->where('post','[A-z_\-]+');


