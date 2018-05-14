@extends('user.layouts.app')

@section('bg-img', asset('user/img/post-bg.jpg'))

@section('title', 'Post')
@section('sub-heading', 'Post')

@section('main-content')


 <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">

            <h2 class="section-heading">{{$post->title}}</h2>

            <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>


          </div>
        </div>
      </div>
    </article>

    <hr>
@endsection
