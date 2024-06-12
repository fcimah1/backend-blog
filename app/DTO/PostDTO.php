<?php
namespace App\DTO;

use App\Http\Requests\CreatePostRequest;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelData\Data;

class PostDTO extends Data
{
    public function __construct(public string $title, public string $description, public string $image, public string $category_id, public string $user_id)
    {
        
    }

    public static function assignData(CreatePostRequest $createPostRequest): array
    {
        if ($createPostRequest->image) 
        {
            $image = $createPostRequest->image;
            $imageNewName = time() . $image->getClientOriginalName();
            $image->move('assets/images/posts/', $imageNewName);
            return [
                'title' => $createPostRequest->title,
                'description' => $createPostRequest->description,
                'image' => '/assets/images/posts/' . $imageNewName,
                'category_id' => $createPostRequest->category_id,
                'user_id' => $createPostRequest->auther_id
            ];
        }else{
            return [
                'title' => $createPostRequest->title,
                'description' => $createPostRequest->description,
                'category_id' => $createPostRequest->category_id,
                'image' => $createPostRequest->old_image,
                'user_id' => $createPostRequest->auther_id
            ];
        }
    }

    // public function toArray(): array
    // {
    //     return [
    //         'title' => $this->title,
    //         'description' => $this->description,
    //         'image' => $this->image,

}