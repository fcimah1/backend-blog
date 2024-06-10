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
        // $image_name = $createPostRequest->image->getClientOriginalName();
        // $new_name = time() . $image_name;
        // $createPostRequest->image->move('assets/images/posts', $new_name);
        // $this->image = '/assets/images/posts' . $new_name;
        // $this->category = $createPostRequest->category;
        // $this->author_id = Auth::id();
    }

    // public function fromRequest(CreatePostRequest $createPostRequest)
    // {
        
    //     
    // }
}