@extends('tampilan.student')

@section('contentstudent')

<div class="container">

    <h3 align="center" class="mt-5">Data Update</h3>

    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('customer.update', $customer->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $customer->nama }}">
                        </div>
                        <div class="col-md-6">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto">
                            <img src="{{ asset('uploads/foto/'.$customer->foto) }}" alt="Foto" width="100px">
                        </div>
                        <div class="col-md-6">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{ $customer->jenis_kelamin }}">
                        </div>
                        <div class="col-md-6">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" value="{{ $customer->tgl_lahir }}">
                        </div>
                        <div class="col-md-6">
                            <label>EMAIL</label>
                            <input type="email" class="form-control" name="email" value="{{ $customer->email }}">
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
