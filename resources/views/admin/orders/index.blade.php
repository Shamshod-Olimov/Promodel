@extends('admin.layouts.app')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success" style="width: 40%; height: 50px" id="alert">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th style="width: 5%; text-align: center;">No</th>
            <th style="width: 10%">Image</th>
            <th style="width: 20%">Name</th>
            <th style="width: 20%">Age</th>
            <th style="width: 20%">Phone</th>
            <th style="width: 25%">Action</th>
        </tr>
        @foreach ($orders as $order)
        <tr>
            <td style="text-align: center">{{ ++$i }}</td>
            <td><img style="width: 80px; height: 100px; object-fit: cover;" src="{{asset('uploads/orders/'.$order->image)}}" alt=""></td>
            <td>{{ $order->lname }}</td>
            <td>{{ $order->age }}</td>
            <td>{{ $order->phone }}</td>
            <td>
                <form action="{{ route('orders.destroy',$order->id) }}" method="POST">
                    <a class="btn text-white" style="background-color: #FEDB00" href="{{ route('orders.show',$order->id) }}"><i class="fas fa-eye"></i></a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn text-white" style="background-color: #ED018C"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $orders->links() }}
@endsection

@section('script')
<script>
    const message = document.querySelector('#alert')
    setTimeout(() => {
        message.style.display = 'none'
    }, 2000);
</script>
@endsection

