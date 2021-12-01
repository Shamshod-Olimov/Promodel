@extends('admin.layouts.app')

@section('content')
    <div class="row my-4">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('madels.create') }}"> Create New Model</a>
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
            <th style="width: 20%">Compcard</th>
            <th style="width: 20%">Name</th>
            <th style="width: 20%">Category</th>
            <th style="width: 25%">Action</th>
        </tr>
        @foreach ($madels as $madel)
        <tr>
            <td style="text-align: center">{{ ++$i }}</td>
            <td><img style="width: 80px; height: 100px; object-fit: cover;" src="{{asset('uploads/madels/'.$madel->image)}}" alt=""></td>
            <td><img style="width: 180px; height: 100px; object-fit: cover;" src="{{asset('uploads/madels/'.$madel->img_compcard)}}" alt=""></td>
            <td>{{ $madel->name_ru }}</td>
            <td>{{ $madel->category_id }}</td>
            <td>
                <form action="{{ route('madels.destroy',$madel->id) }}" method="POST">
                    <a class="btn text-white" style="background-color: #FEDB00" href="{{ route('madels.show',$madel->id) }}"><i class="fas fa-eye"></i></a>
                    <a class="btn text-white" style="background-color: #009EE0" href="{{ route('madels.edit',$madel->id) }}"><i class="fas fa-edit"></i></a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn text-white" style="background-color: #ED018C"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $madels->links() }}
@endsection

@section('script')
<script>
    const message = document.querySelector('#alert')
    setTimeout(() => {
        message.style.display = 'none'
    }, 2000);
</script>
@endsection

