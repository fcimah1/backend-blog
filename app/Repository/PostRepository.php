<?php
    namespace App\Repository;

use App\DTO\PostDTO;
use App\Models\Category;
use App\Models\Posts;
use App\Models\User;
use App\Repository\Interface\IPostRepository;

class PostRepository implements IPostRepository
{
    public function getAllCategories()
    {
        return Category::all();
    }
    public function getAllPosts()
    {
        return Posts::join('category','posts.category_id','=','category.id')->select('posts.*','category.name')->get();
    }
    public function getAllUsers()
    {
        return User::all();
    }
    public function getById(int $id):object
    {
        return Posts::findOrFail($id);
    }
    public function create(PostDTO $postDTO):bool
    {
        if(Posts::create($postDTO->toArray()))
        {
            return true;
        }
        return false;
    }
    public function update(PostDTO $postDTO, $id)
    {
        $post = Posts::findOrFail($id);
        $updatedPost = $post->where('id', $id)->update($postDTO->toArray());
        if($updatedPost)
        {
            return true;
        }
        return false;
    }
    public function getByCategoryId(int $id)
    {
        return Posts::where('category_id', $id)->get();
    }
    public function getByUserId(int $id)
    {
        return Posts::where('user_id', $id)->get();
    }

    public function save(PostDTO $postDTO):bool
    {
        if(Posts::create($postDTO->toArray()))
        {
            return true;
        }
        return false;
    }
    public function delete($id):bool
    {
        $post = Posts::findOrFail($id);
        if($post->delete())
        {
            return true;
        }
        return false;
    }
}