@extends('../../../home')
@section('createcontent')
    <h3>edit post</h3>
    <form action="{{route('post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="hidden" class="form-control" name="auther_id" value="{{auth()->user()->id}}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Post Title:</label>
            <input type="text" class="form-control" id="name" name="title"value="{{$post->title}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Post Description:</label>
            <textarea name="description" class="form-control">{{$post->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Post Image:</label>
            <input type="file" class="form-control" id="image" name="image">
            <input type="hidden" class="form-control"  name="old_image" value="{{$post->image}}" id="">
            <img src="{{$post->image}}" height="100" width="100" alt="">

        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Post Category:</label>
            <select name="category_id" id="status" class="form-select">
                @foreach($categories as $category)
                    @if($post->category_id == $category->id)
                        <option selected value="{{$category->id}}">{{$category->name}}</option>
                    @else
                        <option  value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="pb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection