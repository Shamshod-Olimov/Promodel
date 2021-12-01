@extends('admin.layouts.app')
@section('content')

<div class="row my-4">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <a class="btn btn-primary" style="width: 100px" href="{{ route('blogs.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
            <h3 style="text-align: center" class="my-3"> Edit Blog </h3>
            @foreach($blogs as $blog)
            <form action="{{route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="customFile">Image</label>
                        <input type="file" class="form-control" id="customFile" name="image"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="title_ru">Title(ru)</label>
                        <input class="form-control" type="text" name="title_ru" value="{{ $blog->title_ru }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="description_ru">Description(ru)</label>
                        <input class="form-control" type="text" name="description_ru" value="{{ $blog->description_ru }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="text_ru">Text(ru)</label>
                        <textarea class="sum" id="summernote" name="text_ru" style="height:150px">
                            {{ $blog->text_ru }}
                        </textarea>
                    </div>
                </div>
                <br>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="title_en">Title(en)</label>
                        <input class="form-control" type="text" name="title_en" value="{{ $blog->title_en }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="description_en">Description(en)</label>
                        <input class="form-control" type="text" placeholder="Всего 250 символов" maxlength="250" placeholder="Only 250 characters" maxlength="250" name="description_en" value="{{ $blog->description_en }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="text_en">Text(en)</label>
                        <textarea class="sum" id="summernote" name="text_en" style="height:150px">
                            {{ $blog->text_en }}
                        </textarea>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" style="width: 100px" class="btn btn-primary"> Save </button>
                </div>
            </form>
            @endforeach
        </section>
    </div>
    <div class="col-xl-2"></div>
</div>

@endsection

@section('script')
<script>
     $('#summernote').summernote({
        height: 300
    });
    $(document).ready(function() {
        $('.sum').summernote({
            height: 300
        });
    });
</script>
 @endsection
