@extends('admin.layouts.app')

@section('content')
    <div class="row my-4">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Create New Blog</a>
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
        @foreach ($blogs as $blog)
        <tr>
            {{-- {{ dd($blog->image) }} --}}
            <td style="text-align: center">{{ ++$i }}</td>
            <td><img style="width: 100px; height: 60px; object-fit: cover;" src="{{asset('uploads/blogs/'.$blog->image)}}" alt=""></td>
            <td>{{ $blog->title_ru }}</td>
            <td>{{substr($blog->description_ru, 0, 130)."..."}}</td>
            <td>
                <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
                    <a class="btn text-white" style="background-color: #FEDB00" href="{{ route('blogs.show',$blog->id) }}"><i class="fas fa-eye"></i></a>
                    <a class="btn text-white" style="background-color: #009EE0" href="{{ route('blogs.edit',$blog->id) }}"><i class="fas fa-edit"></i></a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn text-white" style="background-color: #ED018C"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $blogs->links() }}
@endsection

@section('script')
<script>
    const message = document.querySelector('#alert')
    setTimeout(() => {
        message.style.display = 'none'
    }, 2000);
</script>
@endsection

