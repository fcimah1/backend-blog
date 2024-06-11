@extends('../../../home')
@section('createcontent')
    <h3>create new post</h3>
    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="hidden" class="form-control" name="auther_id" value="{{auth()->user()->id}}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Post Title:</label>
            <input type="text" class="form-control" id="name" name="title" placeholder="Enter Post Title">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Post Description:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Post Image:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Post Category:</label>
            <select name="category_id" id="status" class="form-select">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="pb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection