@extends('admin.layouts.app')
@section('content')

<div class="row my-4">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <a class="btn btn-primary" style="width: 100px" href="{{ route('madels.index') }}"> Back </a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong> Whoops! </strong> There were some problems with your input. <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row mb-5">
    <div class="col-xl-2"></div>
    <div class="col-xl-8">
    <section class="content">
        <h3 style="text-align: center" class="my-3"> Edit Model </h3>
        @foreach ($madels as $madel)
        <form action="{{route('madels.update', $madel->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row my-3">
                <label for="name_ru" class="col-2">Name(ru)</label>
                <input class="form-control col-10" name="name_ru" type="text" value="{{ $madel->name_ru }}">
            </div>
            <div class="row my-3">
                <label for="name_en" class="col-2">Name(en)</label>
                <input class="form-control col-10" name="name_en" type="text" value="{{ $madel->name_en }}">
            </div>
            <div class="row my-3">
                <label for="gender" class="col-2"> Gender </label>
                <select class="form-control col-10" id="gender" name="gender">
                    <option value="male" @if('male' == $madel->eyes_color) selected @endif> Male </option>
                    <option value="female" @if('female' == $madel->eyes_color) selected @endif> Female </option>
                    <option value="other" @if('other' == $madel->eyes_color) selected @endif> Other </option>
                </select>
            </div>

            <div class="row my-3">
                <label for="phone_number" class="col-2"> Phone </label>
                <input  type="text"
                        value="{{ $madel->phone_number }}"
                        name="phone_number"
                        class="form-control col-10 phone" />
            </div>

            <div class="row my-3">
                <label for="age" class="col-2"> Age </label>
                <input  class="form-control col-10"
                        value="{{ $madel->age }}"
                        name="age"
                        oninput="javascript: if (this.value.length > this.maxLength)
                        this.value = this.value.slice(0, this.maxLength);"
                        type = "number"
                        maxlength = "2"
                        placeholder="Only number(age)">
            </div>

            <div class="row my-3">
                <label class="form-label col-2" for="image"> Image </label>
                <input type="file" class="form-control col-10" id="image" name="image" />
            </div>

            <div class="row my-3">
                <label class="form-label col-2" for="img_compcard"> Compcard </label>
                <input type="file" class="form-control col-10" id="img_compcard" name="img_compcard" />
            </div>

            <div class="row my-3">
                <label for="height" class="col-2"> Height </label>
                <input  class="form-control col-10"
                        value="{{ $madel->height }}"
                        name="height"
                        oninput="javascript: if (this.value.length > this.maxLength)
                        this.value = this.value.slice(0, this.maxLength);"
                        type = "number"
                        maxlength = "3"
                        placeholder="Only number(sm)">
            </div>

            <div class="row my-3">
                <label for="weight" class="col-2"> Weight </label>
                <input  class="form-control col-10"
                        value="{{ $madel->weight }}"
                        name="weight"
                        oninput="javascript: if (this.value.length > this.maxLength)
                        this.value = this.value.slice(0, this.maxLength);"
                        type = "number"
                        maxlength = "3"
                        placeholder="Only number(kg)">
            </div>

            <div class="row my-3">
                <label for="bust" class="col-2"> Bust </label>
                <input  class="form-control col-10"
                        value="{{ $madel->bust }}"
                        name="bust"
                        oninput="javascript: if (this.value.length > this.maxLength)
                        this.value = this.value.slice(0, this.maxLength);"
                        type = "number"
                        maxlength = "3"
                        placeholder="Only number(sm)">
            </div>

            <div class="row my-3">
                <label for="waist" class="col-2"> Waist </label>
                <input  class="form-control col-10"
                        value="{{ $madel->waist }}"
                        name="waist"
                        oninput="javascript: if (this.value.length > this.maxLength)
                        this.value = this.value.slice(0, this.maxLength);"
                        type = "number"
                        maxlength = "3"
                        placeholder="Only number(sm)">
            </div>

            <div class="row my-3">
                <label for="hips" class="col-2"> Hips </label>
                <input  class="form-control col-10"
                        value="{{ $madel->hips }}"
                        name="hips"
                        oninput="javascript: if (this.value.length > this.maxLength)
                        this.value = this.value.slice(0, this.maxLength);"
                        type = "number"
                        maxlength = "3"
                        placeholder="Only number(sm)">
            </div>

            <div class="row my-3">
                <label for="shoe" class="col-2"> Shoe </label>
                <input  class="form-control col-10"
                        value="{{ $madel->shoe }}"
                        name="shoe"
                        oninput="javascript: if (this.value.length > this.maxLength)
                        this.value = this.value.slice(0, this.maxLength);"
                        type = "number"
                        maxlength = "3"
                        placeholder="Only number(size)">
            </div>

            {{-- <div class="row my-3">
                <label for="eyes_color" class="col-2"> Eyes color </label>
                <select class="form-control col-10" name="eyes_color">
                    <option value="blue" @if('blue' == $madel->eyes_color) selected @endif> <i class="fas fa-circle" style="background-color: rgb(0, 0, 0)"></i> Blue </option>
                    <option value="black" @if('black' == $madel->eyes_color) selected @endif> Black </option>
                    <option value="gray" @if('gray' == $madel->eyes_color) selected @endif> Gray </option>
                </select>
            </div>

            <div class="row my-3">
                <label for="hair_color" class="col-2"> Hair color </label>
                <select class="form-control col-10" name="hair_color">
                    <option value="black" @if('black' == $madel->hair_color) selected @endif data-content='<i class="fas fa-circle" style="background-color: rgb(0, 0, 0)"></i>'> Black </option>
                    <option value="blonde" @if('blonde' == $madel->hair_color) selected @endif> Blonde </option>
                    <option value="red" @if('blonde' == $madel->hair_color) selected @endif> Red </option>
                </select>
            </div> --}}

            <div class="row my-3">
                <label for="category_id" class="col-2"> Category </label>
                <select class="form-control col-10" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id == $madel->madel_id) selected @endif> {{ $category->name_en }} </option>
                    @endforeach
                </select>
            </div>

            <div class="row my-5">
                <label for="eyes_color" class="col-2"> Eyes color </label>
                <div class="col-10 row">
                    <div class="col-4">
                        <div class="form-check row">
                            <input class="form-check-input" value="Black" @if('Black' == $madel->eyes_color) checked @endif type="radio" name="eyes_color">
                            <label class="form-check-label row" for="eyes_color">
                                <i class="fas fa-square col-2" style="color: #383838; font-size: 30px; margin-top: -3px;"></i>
                                <p class="col-6">Black</p>
                            </label>
                        </div>
                        <div class="form-check row">
                            <input class="form-check-input" value="Gray" @if('Gray' == $madel->eyes_color) checked @endif type="radio" name="eyes_color">
                            <label class="form-check-label row" for="eyes_color">
                                <i class="fas fa-square col-2" style="color: #6A7F84; font-size: 30px; margin-top: -3px;"></i>
                                <p class="col-6">Gray</p>
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check row">
                            <input class="form-check-input" value="Brown" @if('Brown' == $madel->eyes_color) checked @endif type="radio" name="eyes_color">
                            <label class="form-check-label row" for="eyes_color">
                                <i class="fas fa-square col-2" style="color: #5e2b2b; font-size: 30px; margin-top: -3px;"></i>
                                <p class="col-6">Brown</p>
                            </label>
                        </div>
                        <div class="form-check row">
                            <input class="form-check-input" value="Hazel" @if('Hazel' == $madel->eyes_color) checked @endif type="radio" name="eyes_color">
                            <label class="form-check-label row" for="eyes_color">
                                <i class="fas fa-square col-2" style="color: #B4A250; font-size: 30px; margin-top: -3px;"></i>
                                <p class="col-6">Hazel</p>
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check row">
                            <input class="form-check-input" value="Green" @if('Green' == $madel->eyes_color) checked @endif type="radio" name="eyes_color">
                            <label class="form-check-label row" for="eyes_color">
                                <i class="fas fa-square col-2" style="color: #46845B; font-size: 30px; margin-top: -3px;"></i>
                                <p class="col-6">Green</p>
                            </label>
                        </div>
                        <div class="form-check row">
                            <input class="form-check-input" value="Blue" @if('Blue' == $madel->eyes_color) checked @endif type="radio" name="eyes_color">
                            <label class="form-check-label row" for="eyes_color">
                                <i class="fas fa-square col-2" style="color: #4768B5; font-size: 30px; margin-top: -3px;"></i>
                                <p class="col-6">Blue</p>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <label for="hair_color" class="col-2"> Hair color </label>
                <div class="col-10 row">
                    <div class="col-4">
                        <div class="form-check row">
                            <input class="form-check-input" value="Black" @if('Black' == $madel->eyes_color) checked @endif type="radio" name="hair_color">
                            <label class="form-check-label row" for="hair_color">
                                <i class="fas fa-square col-2" style="color: #383838; font-size: 30px; margin-top: -3px;"></i>
                                <p class="col-6">Black</p>
                            </label>
                        </div>
                        <div class="form-check row">
                            <input class="form-check-input" value="Gray" @if('Gray' == $madel->eyes_color) checked @endif type="radio" name="hair_color">
                            <label class="form-check-label row" for="hair_color">
                                <i class="fas fa-square col-2" style="color: #6A7F84; font-size: 30px; margin-top: -3px;"></i>
                                <p class="col-6">Gray</p>
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check row">
                            <input class="form-check-input" value="Brown" @if('Brown' == $madel->eyes_color) checked @endif type="radio" name="hair_color">
                            <label class="form-check-label row" for="hair_color">
                                <i class="fas fa-square col-2" style="color: #5e2b2b; font-size: 30px; margin-top: -3px;"></i>
                                <p class="col-6">Brown</p>
                            </label>
                        </div>
                        <div class="form-check row">
                            <input class="form-check-input" value="Red" @if('Red' == $madel->eyes_color) checked @endif type="radio" name="hair_color">
                            <label class="form-check-label row" for="hair_color">
                                <i class="fas fa-square col-2" style="color: #B65242; font-size: 30px; margin-top: -3px;"></i>
                                <p class="col-6">Red</p>
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check row">
                            <input class="form-check-input" value="Golden" @if('Golden' == $madel->eyes_color) checked @endif type="radio" name="hair_color">
                            <label class="form-check-label row" for="hair_color">
                                <i class="fas fa-square col-2" style="color: #cab34d; font-size: 30px; margin-top: -3px;"></i>
                                <p class="col-6">Golden</p>
                            </label>
                        </div>
                        <div class="form-check row">
                            <input class="form-check-input" value="Blonde" @if('Blonde' == $madel->eyes_color) checked @endif type="radio" name="hair_color">
                            <label class="form-check-label row" for="hair_color">
                                <i class="fas fa-square col-2" style="color: #f0e4d0; font-size: 30px; margin-top: -3px;"></i>
                                <p class="col-6">Blonde</p>
                            </label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row my-5">
                <button type="submit" style="width: 100px" class="btn btn-primary ml-1"> Save </button>
            </div>
        </form>
        @endforeach
    </section>
    </div>
    <div class="col-xl-2"></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        $('.phone').inputmask('+(999) 99 999-99-99');
    });
</script>

 @endsection
