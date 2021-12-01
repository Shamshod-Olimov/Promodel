@extends('front.layouts.app')

@section('main')
    @foreach ( $madels as $madel )
    <div class="row" style="margin-top: 100px">
        <div class="col-xl-5 col-sm-12 my-4">
            <div class="mx-5">
                <img src="{{ asset('/uploads/madels/'.$madel->image) }}" style="width: 350px; height: 500px; object-fit: cover;"  alt="">
            </div>
        </div>
        <div class="col-xl-6 col-sm-12 my-4">
            <h2 class="font-weight-light">{{__('model_name')}}: <span class="font-weight-light" style="font-size: 25px">{{ $madel->{'name_' . app()->getLocale()} }}</span></h2>
            <h2 class="font-weight-light">{{__('height')}}: <span class="font-weight-light" style="font-size: 25px">{{ $madel->height }}</span></h2>
            <h2 class="font-weight-light">{{__('weight')}}: <span class="font-weight-light" style="font-size: 25px">{{ $madel->weight }}</span></h2>
            <h2 class="font-weight-light">{{__('bust')}}: <span class="font-weight-light" style="font-size: 25px">{{ $madel->bust }}</span></h2>
            <h2 class="font-weight-light">{{__('bedra')}}:<span class="font-weight-light" style="font-size: 25px">{{ $madel->waist }}</span></h2>
            <h2 class="font-weight-light">{{__('taliya')}}: <span class="font-weight-light" style="font-size: 25px">{{ $madel->hips }}</span></h2>
            <h2 class="font-weight-light">{{__('shoe')}}: <span class="font-weight-light" style="font-size: 25px">{{ $madel->shoe }}</span></h2>
            <h2 class="font-weight-light">{{__('eyes')}}: <span class="font-weight-light" style="font-size: 25px">{{ $madel->eyes_color }}</span></h2>
            <h2 class="font-weight-light">{{__('hair')}}: <span class="font-weight-light" style="font-size: 25px">{{ $madel->hair_color }}</span></h2>
            <a href="{{ asset('/uploads/madels/'.$madel->img_compcard) }}" target="blank" style="margin-top: 25px" class="btn btn-outline-primary py-3 px-5">COMPARD</a>
        </div>
    </div>
    @endforeach
    <div class="row my-4">
        @foreach ($images as $image)
            <div class="col-xl-3 col-sm-6 my-4">
                <a href="{{ asset('uploads/madels/'.$image->name) }}" data-lightbox="mygallery">
                    <div class="card mx-4" style="height: 300">
                        <img src="{{ asset('uploads/madels/'.$image->name) }}" height="100%" alt="">
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
