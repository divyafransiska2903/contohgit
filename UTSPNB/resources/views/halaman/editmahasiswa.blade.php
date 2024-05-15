@extends('tampilan.mahasiswa')

@section('contentmahasiswa')

    <div class="container">

        <h3 align="center" class="mt-5">Edit Mahasiswa</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('mahasiswa.update', $mahasiswa->id) }}">
                {!! csrf_field() !!}
                  @method("PATCH")
                    <div class="row">
                        
                        <div class="col-md-6">
                            <label>NIM</label>
                            <input type="text" class="form-control" name="nim"  value="{{ $mahasiswa->nim }}">
                        </div>
                        <div class="col-md-6">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $mahasiswa->nama }}">
                        </div>
                        <div class="col-md-6">
                            <label>EMAIL</label>
                            <input type="email" class="form-control" name="email" value="{{ $mahasiswa->email }}">
                        </div>
                        <div class="col-md-6">
                            <label>PASSWORD</label>
                            <input type="text" class="form-control" name="password" value="{{ $mahasiswa->password }}">
                        </div>

                     
                        <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>

                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>

@endsection

