@extends('layouts.master')

@section('head.title')
Thêm một bài viết mới vào blog
@stop

@section('body.content')

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h1>Them bai viet</h1>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- <form action="{{ route('article.store') }}" method="POST" class="form-horizontal">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="title" class="control-label">Tieu de bai viet</label>
                    <input class="form-control" type="text" name="title" id="title" required placeholder="Dien tieu de bai viet">
                </div>

                <div class="form-group">
                    <label for="content" class="control-label">Noi dung bai viet</label>
                    <input class="form-control" type="text" name="content" id="content" required placeholder="Noi dung cua bai viet la gi???">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Them bai viet</button>
                </div>
            </form> --}}

            {!! Form::open([
                    'route' => ['article.store'],
                    'method' => 'POST',
                    'class' => 'form-horizontal'
                ])
            !!}

            @include('articles._form', [ 'button_name' => 'Create' ])

            {!! Form::close() !!}

        </div>
    </div>
</div> 
@stop
