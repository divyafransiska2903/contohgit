@extends('tampilan.ruangan')

@section('contentruangan')

    <div class="container">

        <h3 align="center" class="mt-5">Kelola Ruangan</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('ruangan.update', $ruangan->id) }}">
                {!! csrf_field() !!}
                  @method("PATCH")
                    <div class="row">
                        <div class="col-md-6">
                            <label>Naman Ruangan</label>
                            <input type="text" class="form-control" name="nama_ruangan" value="{{ $ruangan->nama_ruangan }}">
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

