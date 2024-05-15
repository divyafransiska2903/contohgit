@extends('tampilan.mahasiswa')
@section('contentmahasiswa')

    <div class="container">

        <h3 align="center" class="mt-5">Data Mahasiswa</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('mahasiswa.store') }}">
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
                            <label>PASSWORD</label>
                            <input type="text" class="form-control" name="password">
                        </div>

                        <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-info" value="Register">
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
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($mahasiswa as $key => $mahasiswaKing)


                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $mahasiswaKing->nim }}</td>
                            <td scope="col">{{ $mahasiswaKing->nama }}</td>
                            <td scope="col">{{ $mahasiswaKing->email }}</td>
                            <td scope="col">{{ $mahasiswaKing->password }}</td>
                            <td scope="col">

                            <a href="{{ route('mahasiswa.edit', $mahasiswaKing->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('mahasiswa.destroy', $mahasiswaKing->id) }}" method="POST" style="display:inline">

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



    