@extends('admin.layouts.app')
@section('content')

<div class="row my-4">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <a class="btn btn-primary" style="width: 100px" href="{{ route('categories.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row mb-5">
    <div class="col-xl-2"></div>
    <div class="col-xl-8">
        <section class="content">
            <h3 style="text-align: center" class="my-3"> Edit Blog </h3>
            @foreach ($categories as $category)
            <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="customFile">Image</label>
                        <input type="file" class="form-control" id="customFile" name="image" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="name_ru">Name(ru)</label>
                        <input class="form-control" type="text" name="name_ru" value="{{ $category->name_ru }}" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="name_en">Name(en)</label>
                        <input class="form-control" type="text" name="name_en" value="{{ $category->name_en }}" />
                    </div>
                </div>
                <br>
                <div class="row">
                    <button type="submit" style="width: 100px" class="btn btn-primary ml-2"> Save </button>
                </div>
            </form>
            @endforeach
        </section>
    </div>
    <div class="col-xl-2"></div>
</div>

@endsection
