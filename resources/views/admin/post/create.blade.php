@extends('admin.layouts.app')

@section('main-content')

 <div class="content-wrapper">

<section class="content">
  <div class="row">
    <div class="col-md-12">
    <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Titles</h3>
                </div><!-- /.box-header -->
                <div class="row">
                	<div class="col-md-6 col-md-offset-3">
                	{!! Form::open(['route' => 'post.create', 'method' => 'post',
                	'files' => true]) !!}
                <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, array('class' => 'form-control'))}}
                </div>
                <div class="form-group">
                {{ Form::label('body', 'Body') }}
                {{ Form::text('body', null, array('class' => 'form-control'))}}
                </div>

                <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image', null, array('class' => 'form-control'))}}
                </div>

                {{ Form::submit('create', array('class' => 'btn btn-success')) }}
                	{!! Form::close() !!}
                	</div>
                	</div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
