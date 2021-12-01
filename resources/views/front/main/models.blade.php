@extends('front.layouts.app')

@section('main')
<div class="row my-4">
    @foreach ($madels as $madel)
    <div class="col-xl-3 col-lg-3 col-sm-6 my-4">
        <a href="/show_madel/{{ $madel->id }}?language={{ Request::get('language') }}">
            <div class="mx-4" style="height: 300px">
                <img src="{{ asset('uploads/madels/'.$madel->image) }}" height="100%" alt="">
            </div>
        </a>
        <h2 class="text-center font-weight-light">{{ $madel->{'name_' . app()->getLocale()} }}</h2>
    </div>
    @endforeach
</div>
@endsection
