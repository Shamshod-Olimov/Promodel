@extends('admin.layouts.app')

@section('content')
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success" style="width: 40%; height: 50px" id="alert">
            <p>{{ $message }}</p>
        </div>
    @endif

    @foreach ($mails as $mail)
    @if ($mails !== null)
    <table class="table table-bordered">
        <tr>
            <th style="width: 5%; text-align: center;">No</th>
            <th style="width: 15%">Name</th>
            <th style="width: 15%">Email</th>
            <th style="width: 45%">Text</th>
            <th style="width: 20%">Action</th>
        </tr>
        <tr>
            <td style="text-align: center">{{ ++$i }}</td>
            <td>{{ $mail->name }}</td>
            <td>{{ $mail->email }}</td>
            <td>{{ $mail->text }}</td>
            <td>
                <a href="/mails/delete/{{ $mail->id }}" class="btn text-white" style="background-color: #ED018C"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
    </table>
    @elseif ($mails == null)
        <div class="alert alert-success" style="width: 40%; height: 50px" id="alert">
            <p>Hozircha xabar yoq</p>
        </div>
    @endif
    @endforeach

    {{ $mails->links() }}
@endsection

@section('script')
<script>
    const message = document.querySelector('#alert')
    setTimeout(() => {
        message.style.display = 'none'
    }, 2000);
</script>
@endsection

