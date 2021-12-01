
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Overpass+Mono" rel="stylesheet">
    <link rel="icon" href="{{ asset('front/img/promodel_icon.svg')}}" type="image/x-icon">
    <title> Login </title>
</head>
<body>
    <div class="row">
        <div class="col-4"></div>
        <div class="login-div col-4 my-5">
            @if (session()->has('error'))
                <div class="alert alert-danger" style="width:40%">
                    {{ session()->get('error') }}
                </div>
            @endif
            <form action="{{ route('login-post') }}" method="post" class="form-all">
                {{ csrf_field() }}
                <div>
                    <div class="">
                        <div class="col-12">
                            <a href="/">
                                <img class="mx-5" src="{{asset('front/img/promodel_logo.svg')}}" alt="Promodel.uz" width="60%">
                            </a>
                        </div>
                        <div class="form my-5">
                            <div class="flex1 mb-3">
                                <label>Username</label>
                                <input type="text" name="name" class="form-control">
                                @if ($errors->has('name'))
                                    {{ $errors->first('name') }}
                                @endif
                            </div>
                            <div class="flex2">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" style="margin-bottom: 20px">
                                @if ($errors->has('password'))
                                    {{ $errors->first('password') }}
                                @endif
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</body>
</html>
