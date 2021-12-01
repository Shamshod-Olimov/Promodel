@extends('admin.layouts.app')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong> Whoops! </strong> There were some problems with your input. <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2> Show Model</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" style="width: 100px" href="{{ route('madels.index') }}"> Back</a>
        </div>
    </div>
</div>

<div>
    @foreach ($madels as $madel)
    <div class="row mt-3">
        <div class="col-xl-4 col-sm-12 my-4 px-0">
            <div class="ml-5">
                <img src="{{ asset('uploads/madels/'.$madel->image)}}" style="width: 350px; height: 500px; object-fit: cover;" alt="">
            </div>
        </div>
        <div class="col-xl-1 col-sm-12 my-4"></div>
        <div class="col-xl-7 col-sm-12 my-4">
            <h3 class="font-weight-light">Имя: <span class="font-weight-light">{{ $madel->name_ru }}</span></h3>
            <h3 class="font-weight-light">Рост: <span class="font-weight-light">{{ $madel->height }}</span></h3>
            <h3 class="font-weight-light">Бюст: <span class="font-weight-light">{{ $madel->bust }}</span></h3>
            <h3 class="font-weight-light">Талия:<span class="font-weight-light">{{ $madel->waist }}</span></h3>
            <h3 class="font-weight-light">Бедра: <span class="font-weight-light">{{ $madel->hips }}</span></h3>
            <h3 class="font-weight-light">Размер Обуви: <span class="font-weight-light">{{ $madel->shoe }}</span></h3>
            <h3 class="font-weight-light">Цвет Глаз: <span class="font-weight-light">{{ $madel->eyes_color }}</span></h3>
            <h3 class="font-weight-light">Цвет Волос: <span class="font-weight-light">{{ $madel->hair_color }}</span></h3>
            <a href="{{ asset('/uploads/madels/'.$madel->img_compcard) }}" target="blank" style="margin-top: 25px" class="btn btn-outline-primary py-3 px-5">COMPCARD</a>
        </div>
    </div>
    <div class="row">
        <div class="col-1" style="border: none"></div>
        <div class="col-8">
            <form action="/images/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row my-3">
                    <label class="form-label col-0 mx-3" for="customFile"></label>
                    <input type="file" class="form-control col-8" id="customFile" name="image" />
                    <input type="hidden" name="madel_id" class="col-0" value="{{ $madel->id }}" />
                    <button type="submit" class="btn btn-success col-2 ml-5"> ADD IMAGE </button>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
    @endforeach
    <div class="row my-4">
        @foreach ($images as $image)
        <div class="col-xl-3 col-sm-6 my-4">
            <a href="" data-lightbox="mygallery">
                <div class="card m-4" style="height: 300px">
                    <img src="{{ asset('uploads/madels/'.$image->name)}}" style="width: 255px; height: 350px; object-fit: cover;" alt="">
                </div>
                <form action="{{ route('images.destroy', $image->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                    style="position: absolute; bottom: -10px; right: 45px;"
                    class="btn btn-danger">
                        Delete
                    </button>
                </form>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
