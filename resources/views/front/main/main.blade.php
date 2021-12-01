@extends('front.layouts.app')


@section('main')
<div style="margin-top: 40px; margin-bottom:">
    <div class="row">

        @foreach ($categories as $category)
        <div class="col-xl-4 col-sm-12 my-3" style="height: 200px !IMPORTANT; overflow: hidden;">
            <a href="/show_category/{{ $category->id }}?language={{ Request::get('language') }}">
                <div class="card_model">
                    <img src="{{ asset('uploads/categories/'.$category->image) }}" class="img-fluid img_model" alt="">
                    <div class="middle">
                        <h2 style="color: black" class="font-weight-normal">{{ $category->{'name_' . app()->getLocale()} }}</h2>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>

    <div class="row">
        <div class="col-xl-6 col-sm-12 my-3">
            <a href="/becomemodel?language={{ Request::get('language') }}" style="text-decoration: none">
                <div class="card card_blog">
                   <h2 class="text-center font-weight-normal" style="margin-top: 12%; color: black">{{__('anketa')}} </h2>
                </div>
            </a>
        </div>
        <div class="col-xl-6 col-sm-12 my-3">
            <a href="/school?language={{ Request::get('language') }}" style="text-decoration: none">
                <div class="card card_blog">
                    <h2 class="text-center font-weight-normal" style="margin-top: 12%; color: black">{{__('school')}} </h2>
                </div>
            </a>
        </div>
    </div>
    <style>
        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }
        .img_model {
            /* border-radius: 5px; */
            opacity: 1;
            display: block;
            width: auto;
            height: 100%;
            object-fit: cover;
            transition: .5s ease;
            backface-visibility: hidden;
        }
        .card_model:hover .img_model{
            opacity: 0.3;
        }
        .card_model:hover .middle{
            opacity: 1;
        }
        .card_blog {
            height: 200px;
            background: rgba(236, 230, 230, 0.452);
            border: none;
        }
        .card_blog:hover {
            background-color: rgba(236, 230, 230, 0.712);
            color: rgba(39, 39, 37, 0.644);

        }

    </style>
</div>
@endsection
