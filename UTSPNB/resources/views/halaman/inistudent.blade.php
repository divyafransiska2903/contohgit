@extends('tampilan.student')
@section('contentstudent')

    <div class="container">

        <h3 align="center" class="mt-5">Student Data</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('student.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>NIM</label>
                            <input type="text" class="form-control" name="nim">
                        </div>
                        <div class="col-md-6">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="col-md-6">
                            <label>EMAIL</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="col-md-6">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="col-md-6">
                            <label>Dokumen</label>
                            <input type="file" class="form-control" name="dokumen">
                        </div>
                        <div class="col-md-6">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
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
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Dokumen</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student as $key => $stud)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $stud->nim }}</td>
                            <td>{{ $stud->nama }}</td>
                            <td>{{ $stud->email }}</td>
                            <td><img src="{{ asset('uploads/foto/'.$stud->foto) }}" alt="Foto" width="100px"></td>
                            <td><a href="{{ asset('uploads/dokumen/'.$stud->dokumen) }}" download>{{ $stud->dokumen }}</a></td>
                            <td>
                                <a href="{{ route('student.edit', $stud->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                <form action="{{ route('student.destroy', $stud->id) }}" method="POST" style="display:inline">
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
