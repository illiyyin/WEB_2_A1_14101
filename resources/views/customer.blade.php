@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tabel Customer</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">id_customer</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                    <th scope="col">creditCardNumber</th>
                    
                </tr>
                </thead>
                <tbody>
                @php $no=1
                @foreach($data as $d=>$value)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->password }}</td>
                        <td>{{ $value->creditCardNumber }}</td>
                        <td>
                            <form action="{{ route('customer.destroy', $value->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('customer.edit',$value->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection