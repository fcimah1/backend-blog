<?php
namespace App\DTO;

use App\Http\Requests\CreatePostRequest;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelData\Data;

class PostDTO extends Data
{
    public function __construct(public string $title, public string $description, public string $image, public string $category_id, public string $user_id)
    {
        // $createPostRequest = new CreatePostRequest();
        // $image = $createPostRequest->image;
        // $imageNewName = time().$image->getClientOriginalName();
        // $image->move('assets/images/posts/', $imageNewName);
        // $this->title = $createPostRequest->title;
        // $this->description = $createPostRequest->description;
        // $this->image = '/assets/images/posts/'.$imageNewName;
        // $this->category_id = $createPostRequest->category_id;
        // $this->user_id = $createPostRequest->auther_id;
    }

}