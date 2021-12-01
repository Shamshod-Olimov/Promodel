@extends('front.layouts.app')


@section('main')

<div class="row" style="margin-top: 80px; margin-bottom: 100px">
    <div class="col-xl-12 col-sm-12">
        <div style="border-left: 6px solid #2196F3; background-color:  #e7f3fe69;">
            <h4 class="font-weight-light py-2 ml-2">
                {{__('blue_text')}}
            </h4>
        </div>
        <br>
        <div style="border-left: 6px solid #f71f4e; background-color:  #ff4d2e1a; margin-bottom: 80px">
            <h4 class="font-weight-light py-2 ml-2">
              {{__('red_text')}}
            </h4>
        </div>

    </div>
    <div class="col-xl-12 col-sm-12">
        <div class="row">
            <div class="col-xl-3 col-sm-12"></div>
            <div class="col-xl-6 col-sm-12 my-4">
                <form action="/become/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row my-3">
                        <label for="name_ru" class="col-2"><div class="row"> First Name </div></label>
                        <input class="form-control col-10" name="fname" type="text" maxlength="100" />
                    </div>
                    <div class="row my-3">
                        <label for="name_en" class="col-2"><div class="row"> Last Name </div></label>
                        <input class="form-control col-10" name="lname" type="text" maxlength="100" />
                    </div>
                    <div class="row my-3">
                        <label for="gender" class="col-2"><div class="row"> Gender </div></label>
                        <select class="form-control col-10" id="gender" name="gender">
                            <option value="NULL"> Choose gender </option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="row my-3">
                        <label for="phone_number" class="col-2"><div class="row"> Phone </div></label>
                        <input  type="text"
                                name="phone"
                                class="form-control col-10 phone" />
                    </div>

                    <div class="row my-3">
                        <label for="age" class="col-2"><div class="row"> Age </div></label>
                        <input  class="form-control col-10"
                                name="age"
                                oninput="javascript: if (this.value.length > this.maxLength)
                                this.value = this.value.slice(0, this.maxLength);"
                                type = "number"
                                maxlength = "2"
                                placeholder="Only number(age)">
                    </div>

                    <div class="row my-3">
                        <label for="height" class="col-2"><div class="row"> Height </div></label>
                        <input  class="form-control col-10"
                                name="height"
                                oninput="javascript: if (this.value.length > this.maxLength)
                                this.value = this.value.slice(0, this.maxLength);"
                                type = "number"
                                maxlength = "3"
                                placeholder="Only number(sm)" />
                    </div>

                    <div class="row my-3">
                        <label for="weight" class="col-2"><div class="row"> Weight </div></label>
                        <input  class="form-control col-10"
                                name="weight"
                                oninput="javascript: if (this.value.length > this.maxLength)
                                this.value = this.value.slice(0, this.maxLength);"
                                type = "number"
                                maxlength = "3"
                                placeholder="Only number(kg)" />
                    </div>

                    <div class="row my-3">
                        <label for="bust" class="col-2"><div class="row"> Bust </div></label>
                        <input  class="form-control col-10"
                                name="bust"
                                oninput="javascript: if (this.value.length > this.maxLength)
                                this.value = this.value.slice(0, this.maxLength);"
                                type = "number"
                                maxlength = "3"
                                placeholder="Only number(sm)" />
                    </div>

                    <div class="row my-3">
                        <label for="waist" class="col-2"><div class="row"> Waist </div></label>
                        <input  class="form-control col-10"
                                name="waist"
                                oninput="javascript: if (this.value.length > this.maxLength)
                                this.value = this.value.slice(0, this.maxLength);"
                                type = "number"
                                maxlength = "3"
                                placeholder="Only number(sm)" />
                    </div>

                    <div class="row my-3">
                        <label for="hips" class="col-2"><div class="row"> Hips </div></label>
                        <input  class="form-control col-10"
                                name="hips"
                                oninput="javascript: if (this.value.length > this.maxLength)
                                this.value = this.value.slice(0, this.maxLength);"
                                type = "number"
                                maxlength = "3"
                                placeholder="Only number(sm)" />
                    </div>

                    <div class="row my-3">
                        <label for="shoe" class="col-2"><div class="row"> Shoe </div></label>
                        <input  class="form-control col-10"
                                name="shoe"
                                oninput="javascript: if (this.value.length > this.maxLength)
                                this.value = this.value.slice(0, this.maxLength);"
                                type = "number"
                                maxlength = "3"
                                placeholder="Only number(size)" />
                    </div>

                    <div class="row my-5">
                        <label for="eyes_color" class="col-2"> Eyes color </label>
                        <div class="col-10 row">
                            <div class="col-4">
                                <div class="form-check row">
                                    <input class="form-check-input" value="Black" type="radio" name="eyes_color">
                                    <label class="form-check-label row" for="eyes_color">
                                        <i class="fa fa-square col-2" style="color: #383838; font-size: 30px; margin-top: -3px;"></i>
                                        <p class="col-6">Black</p>
                                    </label>
                                </div>
                                <div class="form-check row">
                                    <input class="form-check-input" value="Gray" type="radio" name="eyes_color">
                                    <label class="form-check-label row" for="eyes_color">
                                        <i class="fa fa-square col-2" style="color: #6A7F84; font-size: 30px; margin-top: -3px;"></i>
                                        <p class="col-6">Gray</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check row">
                                    <input class="form-check-input" value="Brown" type="radio" name="eyes_color">
                                    <label class="form-check-label row" for="eyes_color">
                                        <i class="fa fa-square col-2" style="color: #5e2b2b; font-size: 30px; margin-top: -3px;"></i>
                                        <p class="col-6">Brown</p>
                                    </label>
                                </div>
                                <div class="form-check row">
                                    <input class="form-check-input" value="Hazel" type="radio" name="eyes_color">
                                    <label class="form-check-label row" for="eyes_color">
                                        <i class="fa fa-square col-2" style="color: #B4A250; font-size: 30px; margin-top: -3px;"></i>
                                        <p class="col-6">Hazel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check row">
                                    <input class="form-check-input" value="Green" type="radio" name="eyes_color">
                                    <label class="form-check-label row" for="eyes_color">
                                        <i class="fa fa-square col-2" style="color: #46845B; font-size: 30px; margin-top: -3px;"></i>
                                        <p class="col-6">Green</p>
                                    </label>
                                </div>
                                <div class="form-check row">
                                    <input class="form-check-input" value="Blue" type="radio" name="eyes_color">
                                    <label class="form-check-label row" for="eyes_color">
                                        <i class="fa fa-square col-2" style="color: #4768B5; font-size: 30px; margin-top: -3px;"></i>
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
                                    <input class="form-check-input" value="Black" type="radio" name="hair_color">
                                    <label class="form-check-label row" for="hair_color">
                                        <i class="fa fa-square col-2" style="color: #383838; font-size: 30px; margin-top: -3px;"></i>
                                        <p class="col-6">Black</p>
                                    </label>
                                </div>
                                <div class="form-check row">
                                    <input class="form-check-input" value="Gray" type="radio" name="hair_color">
                                    <label class="form-check-label row" for="hair_color">
                                        <i class="fa fa-square col-2" style="color: #6A7F84; font-size: 30px; margin-top: -3px;"></i>
                                        <p class="col-6">Gray</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check row">
                                    <input class="form-check-input" value="Brown" type="radio" name="hair_color">
                                    <label class="form-check-label row" for="hair_color">
                                        <i class="fa fa-square col-2" style="color: #5e2b2b; font-size: 30px; margin-top: -3px;"></i>
                                        <p class="col-6">Brown</p>
                                    </label>
                                </div>
                                <div class="form-check row">
                                    <input class="form-check-input" value="Red" type="radio" name="hair_color">
                                    <label class="form-check-label row" for="hair_color">
                                        <i class="fa fa-square col-2" style="color: #B65242; font-size: 30px; margin-top: -3px;"></i>
                                        <p class="col-6">Red</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check row">
                                    <input class="form-check-input" value="Golden" type="radio" name="hair_color">
                                    <label class="form-check-label row" for="hair_color">
                                        <i class="fa fa-square col-2" style="color: #cab34d; font-size: 30px; margin-top: -3px;"></i>
                                        <p class="col-6">Golden</p>
                                    </label>
                                </div>
                                <div class="form-check row">
                                    <input class="form-check-input" value="Blonde" type="radio" name="hair_color">
                                    <label class="form-check-label row" for="hair_color">
                                        <i class="fa fa-square col-2" style="color: #f0e4d0; font-size: 30px; margin-top: -3px;"></i>
                                        <p class="col-6">Blonde</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row my-3">
                        <label class="form-label col-2" for="image"><div class="row"> Image </div></label>
                        <input type="file" class="form-control col-10" id="image" name="image" />
                    </div>

                    <div class="row my-5">
                        <button type="submit" style="width: 100px" class="btn btn-primary ml-1"> Sent </button>
                    </div>
                </form>
            </div>
            <div class="col-xl-3 col-sm-1"></div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        $('.phone').inputmask('+(999) 99 999-99-99');
    });
</script>

@endsection
