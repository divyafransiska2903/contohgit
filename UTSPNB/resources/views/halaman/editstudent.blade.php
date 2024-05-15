@extends('tampilan.student')

@section('contentstudent')

<div class="container">

    <h3 align="center" class="mt-5">Data Update</h3>

    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('student.update', $student->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")
                    <div class="row">

                        <div class="col-md-6">
                            <label>NIM</label>
                            <input type="text" class="form-control" name="nim" value="{{ $student->nim }}">
                        </div>
                        <div class="col-md-6">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $student->nama }}">
                        </div>
                        <div class="col-md-6">
                            <label>EMAIL</label>
                            <input type="email" class="form-control" name="email" value="{{ $student->email }}">
                        </div>
                        <div class="col-md-6">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto">
                            <img src="{{ asset('uploads/foto/'.$student->foto) }}" alt="Foto" width="100px">
                        </div>
                        <div class="col-md-6">
                            <label>Dokumen</label>
                            <input type="file" class="form-control" name="dokumen">
                            <a href="{{ asset('uploads/dokumen/'.$student->dokumen) }}" download>{{ $student->dokumen }}</a>
                        </div>
                        <div class="col-md-6">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" value="{{ $student->password }}">
                        </div>


                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-primary" value="Update">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
