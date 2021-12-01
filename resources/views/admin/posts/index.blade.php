@extends('admin.layouts.app')

@section('content')
    <div class="row my-4">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Course</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" style="width: 40%; height: 50px" id="alert">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th style="width: 5%; text-align: center;">No</th>
            <th style="width: 10%">Image</th>
            <th style="width: 30%">Title</th>
            <th style="width: 35%">Description</th>
            <th style="width: 20%">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td style="text-align: center">{{ ++$i }}</td>
            <td><img style="width: 100px; height: 60px; object-fit: cover;" src="{{asset('uploads/posts/'.$post->image)}}" alt=""></td>
            <td>{{ $post->title_ru }}</td>
            <td>{{substr($post->description_ru, 0, 130)."..."}}</td>
            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                    <a class="btn text-white" style="background-color: #FEDB00" href="{{ route('posts.show',$post->id) }}"><i class="fas fa-eye"></i></a>
                    <a class="btn text-white" style="background-color: #009EE0" href="{{ route('posts.edit',$post->id) }}"><i class="fas fa-edit"></i></a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn text-white" style="background-color: #ED018C"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $posts->links() }}
@endsection

@section('script')
<script>
    const message = document.querySelector('#alert')
    setTimeout(() => {
        message.style.display = 'none'
    }, 2000);
</script>
@endsection

