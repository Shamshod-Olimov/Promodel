<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/front/css/lightbox.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="{{ asset('front/img/promodel_icon.svg')}}" type="image/x-icon">
<title>Promodel.uz</title>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<header style="background-color: rgba(233, 233, 220, 0.603)">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/?language={{ Request::get('language') }}">
                <img src="/front/img/promodel_logo.svg" width="190px" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <form class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto" style="margin-left: 80px; font-size: 14px;">
                    <li class="nav-item">
                      <a class="nav-link" href="/?language={{ Request::get('language') }}">{{__('home')}}</a>
                    </li>
                    @foreach ($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="/show_category/{{ $category->id }}?language={{ Request::get('language') }}">{{ $category->{'name_' . app()->getLocale()} }}</a>
                    </li>
                    @endforeach

                    <li class="nav-item">
                      <a class="nav-link" href="/becomemodel?language={{ Request::get('language') }}"> {{__('anketa')}} </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/school?language={{ Request::get('language') }}">{{__('school')}}</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/blog?language={{ Request::get('language') }}">{{__('blog')}}</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/about?language={{ Request::get('language') }}">{{__('about')}}</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/contact?language={{ Request::get('language') }}">{{__('contact')}}</a>
                    </li>
                  </ul>
              </form>
            </div>
          </nav>
    </div>
</header>

<div class="container">
  @yield('main')
</div>

@yield('school')

<div class="icon-bar">
    <a href="https://ok.ru/promodels" target="blank" class="my-1 icon"><i class="fa fa-odnoklassniki"></i></a>
    <a href="https://www.facebook.com/promodelworld/" class="my-1 icon" target="blank"><i class="fa fa-facebook"></i></a>
    <a href="https://twitter.com/ProartModel" class="my-1 icon" target="blank"><i class="fa fa-twitter"></i></i></a>
    <a href="https://www.instagram.com/promodelagency/" class="my-1 icon" target="blank"><i class="fa fa-instagram"></i></a>
    <a href="https://vk.com/promodelagency" class="my-1 icon" target="blank"><i class="fa fa-vk"></i></i></a>
    <a href="https://telegram.me/promodel" class="my-1 icon" target="blank"><i class="fa fa-telegram"></i></a>
    @foreach (config('app.available_locales') as $locale)
        <a href="{{ request()->url() }}?language={{ $locale }}" class="icon" style="font-size: 20px;">{{ strtoupper($locale) }}</a>
    @endforeach
</div>

<style>
  body {margin:0}

.icon-bar {
  display: inline-block;
  /* background-color: #555; */
  position: fixed;
  right: 20px;
  top: 150px;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 4px;
  transition: all 0.3s ease;
  font-size: 25px;
}

.icon-bar a:hover {
  /* background-color: #000; */
  text-decoration: none
}

.active {
  background-color: #04AA6D;
}
.icon {
  /* border: 1px solid black; */

  text-decoration: none;
  padding: 0 auto;
  margin: 0 auto;
}

.fa {

}

/* .icon-bar */
</style>

@yield('script')
