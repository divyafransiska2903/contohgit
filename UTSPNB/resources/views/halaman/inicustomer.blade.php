@extends('tampilan.customer')
@section('contentcustomer')

    <div class="container">

        <h3 align="center" class="mt-5">Customer Data</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('customer.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="col-md-6">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="col-md-6">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon">
                        </div>
                        <div class="col-md-6">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin">
                        </div>
                        <div class="col-md-6">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir">
                        </div>
                        <div class="col-md-6">
                            <label>EMAIL</label>
                            <input type="email" class="form-control" name="email">
                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-info" value="Register">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">ID Customer</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer as $key => $stud)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $stud->nama }}</td>
                            <td>{{ $stud->telepon }}</td>
                            <td>{{ $stud->jenis_kelamin }}</td>
                            <td>{{ $stud->tgl_lahir }}</td>
                            <td>{{ $stud->email }}</td>
                            <td><img src="{{ asset('uploads/foto/'.$stud->foto) }}" alt="Foto" width="100px"></td>
                    
                            <td>
                                <a href="{{ route('customer.edit', $stud->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                <form action="{{ route('customer.destroy', $stud->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
