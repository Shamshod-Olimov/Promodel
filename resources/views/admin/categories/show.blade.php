@extends('admin.layouts.app')
@section('content')

<div class="row my-3">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Category</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" style="width: 100px" href="{{ route('categories.index') }}"> Back</a>
        </div>
    </div>
</div>


@foreach ($category as $id )

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <img src="{{asset('uploads/categories/'.$id->image) }}" width="100%" alt="">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-3 row">
                <h5 class="mr-3">Name(RU):</h5>
            <h5 class="font-weight-bold">{{ $id->name_ru }}</h5>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mx-3 row">
                <h5 class="mr-3">Name(EN):</h5>
                <h5 class="font-weight-bold">{{ $id->name_en }}</h5>
            </div>
        </div>
    </div>
    <div class="col-3"></div>
</div>
@endforeach

@endsection
