@extends('home')
@section('createcontent')
    <h3>All Posts </h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Category</th>
            <th scope="col">Operations</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post) 
            <tr class="table-center">
                <th scope="row"> {{$post->id}} </th>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td><img src="{{asset($post->image)}}" width="100px" height="100px" alt=""></td>
                <td>{{$post->name}}</td>
                <td>
                    <i class="">
                        <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                    </i>
                    <i class=""> 
                        <a href="{{route('post.delete',$post->id)}}" class="btn btn-danger">Delete</a>
                    </i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection