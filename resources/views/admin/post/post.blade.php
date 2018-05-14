@extends('admin.layouts.app')

@section('main-content')


<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">My Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Posts List</li>
    </ol>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Created_at</th>
      <th scope="col">Update_at</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
@if(!empty(@posts))
@forelse($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->updated_at}}</td>
      {!! Form::open(['method'=>'DELETE', 'route'=>['post.destroy',$post->id]]) !!}

      <td><button  class="btn-danger" type="submit" name="button">Delete</button></td>
      {!! Form::close() !!}

      <td><button  class="btn-default" type="button" name="button">Edit</button></td>
      @empty
      <td>No any data</td>
    </tr>
@endforelse
@endif
  </tbody>
</table>
    <!-- Example DataTables Card-->

    </div>
      <a class="btn btn-primary" href="{{ route('post.create') }}">Add Post</a>
  </div>
@endsection
