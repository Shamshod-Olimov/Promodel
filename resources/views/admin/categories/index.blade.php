@extends('admin.layouts.app')

@section('content')
    <div class="row my-4">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Category </a>
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
            <th style="width: 30%">Name(ru)</th>
            <th style="width: 30%">Name(en)</th>
            <th style="width: 20%">Action</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td style="text-align: center">{{ ++$i }}</td>
            <td><img style="width: 100px; height: 60px; object-fit: cover;" src="{{asset('uploads/categories/'.$category->image)}}" alt=""></td>
            <td>{{ $category->name_ru }}</td>
            <td>{{ $category->name_en }}</td>
            <td>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                    <a class="btn text-white" style="background-color: #FEDB00" href="{{ route('categories.show', $category->id) }}"><i class="fas fa-eye"></i></a>
                    <a class="btn text-white" style="background-color: #009EE0" href="{{ route('categories.edit', $category->id) }}"><i class="fas fa-edit"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn text-white" style="background-color: #ED018C"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $categories->links() }}
@endsection

@section('script')

<script>
    const message = document.querySelector('#alert')
    setTimeout(() => {
        message.style.display = 'none'
    }, 2000);
</script>

@endsection

