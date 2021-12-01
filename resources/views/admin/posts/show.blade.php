@extends('admin.layouts.app')
@section('content')

<div class="row my-3">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Post</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" style="width: 100px" href="{{ route('posts.index') }}"> Back</a>
        </div>
    </div>
</div>


@foreach ($posts as $post )
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <img src="{{asset('uploads/posts/'.$post->image) }}" width="100%" alt="">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-3" style="text-align: center">
            <h4>{{ $post->title_ru }}(RU)</h4>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{ $post->description_ru }}
            </div>
        </div>
        <br>
        <hr>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-3"  style="text-align: center">
            <h4>{{ $post->title_en }}(EN)</h4>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{ $post->description_en }}
            </div>
        </div>
    </div>
    <div class="col-3"></div>
</div>
@endforeach

@endsection
