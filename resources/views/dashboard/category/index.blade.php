@extends('../../../home')
@section('createcontent')
    <h3>All Categories </h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Operations</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category) 
            <tr>
                <th scope="row"> {{$category->id}} </th>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>
                    <i class="">
                        <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
                    </i>
                    <i class=""> 
                        <a href="{{route('category.delete',$category->id)}}" class="btn btn-danger">Delete</a>
                    </i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection