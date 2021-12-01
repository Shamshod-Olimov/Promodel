@extends('front.layouts.app')


@section('main')
    @foreach ($blogs as $blog)
    <div style="margin-top:100px; margin-bottom: 100px">
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <div>
                    <img src="{{ asset('uploads/blogs/'.$blog->image) }}" class="img-fluid" alt="Responsive image">
                    <h3 class="my-4">{{ $blog->{'title_' . app()->getLocale()} }}</h3>
                    <p class="my-3">{{ $blog->{'description_' . app()->getLocale()} }}</p>
                    <a href="/show_blog/{{ $blog->id }}?language={{ Request::get('language') }}" style="font-size: 20px; text-decoration: none;">
                        <button type="button" class="btn btn-outline-primary">
                            {{__('more')}}
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-xl-2"></div>
        </div>
    </div>
    @endforeach
@endsection
