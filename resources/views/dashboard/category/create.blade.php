@extends('../../../home')
@section('createcontent')
    <h3>create new category</h3>
    <form action="{{route('category.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Category Title:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Category Description:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="pb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection