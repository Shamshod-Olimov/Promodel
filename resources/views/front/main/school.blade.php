@extends('front.layouts.app')


@section('school')

    <div class="row">
        <div class="col-xl-12 col-sm-12 text-center" >
            <img src="/front/images/promodel.jpg" class="img-fluid" style="width: 100%; height: 400px; object-fit: cover;">
        </div>
        <div class="col-xl-12 col-sm-12 my-4 text-center">
            <a href="/becomemodel?language={{ Request::get('language') }}">
                <button type="button" class="btn btn-success">{{__('zapis')}} </button>
            </a>
        </div>
        <div class="col-xl-12 col-sm-12 my-4">
            <div class="container">
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-xl-4 col-sm-12 my-4">
                        <div class="card">
                            <img src="{{asset('uploads/posts/'.$post->image)}}" class="img-fluid" width="100%" alt="">
                        </div>
                        <div>
                            <h2 class="text-center font-weight-light">{{ $post->{'title_' . app()->getLocale()} }}</h2>
                            <p>{{ $post->{'description_' . app()->getLocale()} }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

@endsection
