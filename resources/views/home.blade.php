@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="/category/index">Show Categories</a>
                </li>
                <li class="list-group-item">
                    <a href="/category/create">Create Category</a>
                </li>
                <li class="list-group-item">
                    <a href="/post/index">Show Posts</a>
                </li>
                <li class="list-group-item">
                    <a href="/post/create">Create Post</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @yield('createcontent')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
