@extends('front.layouts.app')


@section('main')
    <div style="margin-top:100px; margin-bottom: 100px">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" style="width: 40%; height: 50px" id="alert">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-sm-12">
                <div>
                    <h2>{{__('contact')}}</h2>
                <h6>{{__('email')}}: <a href="#">promodelagency@mail.ru</a></h6>
                <h6>{{__('phone')}}: +998 95 177 33 34</h6>
                </div>
                <h3>{{__('address')}}</h3>
                <h6 class="mt-4">{{__('street')}} <br>
                    {{__('country')}}
                </h6>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12">
                <h2>{{__('send')}}</h2>
                <form action="mails/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" maxlength="100" class="form-control" placeholder="{{__('plname')}}" aria-describedby="text">
                      </div>
                      <div class="form-group">
                        <input type="mail" name="email" maxlength="100" class="form-control" placeholder="{{__('plmail')}}" aria-describedby="text">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" name="text" maxlength="250" placeholder="{{__('pltext')}}" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block">{{__('sendM')}}</button>
                  </form>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12">

            </div>
        </div>
        <div style="margin-top: 100px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.4596015882944!2d69.25545851527447!3d41.32061830809484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8bb853c21c69%3A0xd9a94ae356a64ad5!2s%22Promodel%20Agency%22!5e0!3m2!1sru!2s!4v1627756106269!5m2!1sru!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
@endsection

@section('script')
<script>
    const message = document.querySelector('#alert')
    setTimeout(() => {
        message.style.display = 'none'
    }, 2000);
</script>
@endsection
