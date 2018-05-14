@extends('user.layouts.app')

@section('bg-img', asset('user/img/fitnes.jpg'))
@section('title', 'Posts')
@section('sub-heading', 'Posts')


@section('main-content')
<div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            @if(!empty(@posts))
                  @forelse($posts as $post)

<a href="{{route('post',$post->id)}}">
              <h2 class="post-title">
{{$post->title}}
              </h2>
              <h3 class="post-subtitle">
{{$post->body}}
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Author Name</p>

                <p class="post-meta">Posted at
                  <a href="#">{{$post->created_at}}</p>

                @empty
                <p>No data</p>
          </div>
          @endforelse
          @endif
          <hr>
        </div>
      </div>
    </div>
    <hr>

@endsection
