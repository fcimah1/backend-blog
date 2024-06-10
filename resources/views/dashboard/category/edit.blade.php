@extends('../../../home')
@section('createcontent')
    <h3>update category</h3>
    <form action="{{route('category.update',$category->id)}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Category Title:</label>
            <input type="text" class="form-control" id="name" name="name"
             placeholder="Enter Category Title" value="{{$category->name}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Post Description:</label>
            <textarea name="description" class="form-control">{{$category->description}}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection