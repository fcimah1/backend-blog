<?php

namespace App\Http\Controllers;

use App\DTO\PostDTO;
use App\Http\Requests\CreatePostRequest;
use App\Repository\Interface\IPostRepository;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    protected $post;
    public function __construct(IPostRepository $PostRepository)
    {   
        $this->post = $PostRepository;
    }

    // Display a listing of the resource.
    public function index()
    {
        $posts = $this->post->getAllPosts();
        return view('dashboard.post.index', [ 'posts' => $posts]);
    }

    // Show the form for creating a new resource.
    public function create()
    {
        $categories = $this->post->getAllCategories();
        $users = $this->post->getAllUsers();
        return view('dashboard.post.create', ['categories' => $categories, 'users' => $users]);
    }

    // Store a newly created resource in storage.
    public function store(CreatePostRequest $createPostRequest)
    {
        $post = PostDTO::assignData($createPostRequest);
        $this->post->create($post);
        return redirect()->route('post.index');
    }

    // Display the specified resource.
    public function show(string $id)
    {
        return redirect()->route('post.index');
    }

    // Show the form for editing the specified resource.
    public function edit(string $id)
    {
        $postToEdit = $this->post->getById($id);
        $categories = $this->post->getAllCategories();
        return view('dashboard.post.edit', ['post' => $postToEdit, 'categories'=>$categories]);
    }

    
    // Update the specified resource in storage.
    public function update(CreatePostRequest $createPostRequest, string $id)
    {
        $post = PostDTO::assignData($createPostRequest);
        $this->post->update($post,$id);
        return redirect()->route('post.index');

    }

    // Remove the specified resource from storage.
    public function destroy(string $id)
    {
        if($this->post->delete($id)){
            return redirect()->back();
        }
    }
}
