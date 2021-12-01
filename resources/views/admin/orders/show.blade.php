@extends('admin.layouts.app')
@section('content')

<div>
    @foreach ($orders as $order)
    <div class="row mt-3">
        <div class="col-xl-4 col-sm-12 my-4 px-0">
            <div class="ml-5">
                <img src="{{ asset('uploads/orders/'.$order->image)}}" style="width: 350px; height: 500px; object-fit: cover;" alt="">
            </div>
        </div>
        <div class="col-xl-1 col-sm-12 my-4"></div>
        <div class="col-xl-7 col-sm-12 my-4">
            <h3 class="font-weight-light">Имя: <span class="font-weight-light">{{ $order->fname }}</span></h3>
            <h3 class="font-weight-light">Фамиля: <span class="font-weight-light">{{ $order->lname }}</span></h3>
            <h3 class="font-weight-light">Пол: <span class="font-weight-light">{{ $order->gender }}</span></h3>
            <h3 class="font-weight-light">Рост: <span class="font-weight-light">{{ $order->height }}</span></h3>
            <h3 class="font-weight-light">Вес: <span class="font-weight-light">{{ $order->weight }}</span></h3>
            <h3 class="font-weight-light">Бюст: <span class="font-weight-light">{{ $order->bust }}</span></h3>
            <h3 class="font-weight-light">Талия:<span class="font-weight-light">{{ $order->waist }}</span></h3>
            <h3 class="font-weight-light">Бедра: <span class="font-weight-light">{{ $order->hips }}</span></h3>
            <h3 class="font-weight-light">Размер Обуви: <span class="font-weight-light">{{ $order->shoe }}</span></h3>
            <h3 class="font-weight-light">Цвет Глаз: <span class="font-weight-light">{{ $order->eyes_color }}</span></h3>
            <h3 class="font-weight-light">Цвет Волос: <span class="font-weight-light">{{ $order->hair_color }}</span></h3>
            <h3 class="font-weight-light">Номер Телефона: <span class="font-weight-light">{{ $order->phone }}</span></h3>
        </div>
    </div>
    @endforeach
@endsection
