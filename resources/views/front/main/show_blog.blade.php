@extends('front.layouts.app')

@section('main')
    <div class="row">
        @foreach ($blogs as $blog)
        <div class="col-xl-2"></div>
        <div class="col-xl-8">
            <div style="margin-top:100px; margin-bottom: 100px">
                <div>
                    <img src="{{ asset('uploads/blogs/'.$blog->image) }}" class="img-fluid" alt="Responsive image">
                    <h3 class="my-4">{{ $blog->{'title_' . app()->getLocale()} }}</h3>
                    <p>{{ $blog->{'text_' . app()->getLocale()} }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-2"></div>
        @endforeach
    </div>
@endsection
