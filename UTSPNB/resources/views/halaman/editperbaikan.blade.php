@extends('tampilan.perbaikan')

@section('contentperbaikan')

    <div class="container">

        <h3 align="center" class="mt-5">Kelola Perbaikan</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('perbaikan.update', $perbaikan->id_perbaikan) }}">
                {!! csrf_field() !!}
                  @method("PATCH")
                    <div class="row">
                       
                        <div class="col-md-6">
                            <label>Id Perbaikan</label>
                            <input type="text" class="form-control" name="id_perbaikan" value="{{ $perbaikan->id_perbaikan }}">
                        </div>
                        <div class="col-md-6">
                            <label>Tgl Pengajuan</label>
                            <input type="date" class="form-control" name="tgl_pengajuan" value="{{ $perbaikan->tgl_pengajuan }}">>
                        </div>
                        <div class="col-md-6">
                            <label>Judul Perbaikan</label>
                            <input type="text" class="form-control" name="judul_perbaikan" value="{{ $perbaikan->judul_perbaikan }}">>
                        </div>
                        <div class="col-md-6">
                            <label>User Pemohon</label>
                            <input type="text" class="form-control" name="User_pemohon" value="{{ $perbaikan->User_pemohon }}">>
                        </div>
                        <div class="col-md-6">
                            <label>User Assign</label>
                            <input type="text" class="form-control" name="User_assign" value="{{ $perbaikan->User_assign }}">>
                        </div>
                        <div class="col-md-6">
                            <label>Id Ruangan</label>
                            <input type="text" class="form-control" name="id_ruangan" value="{{ $perbaikan->id_perbaikan }}">>
                        </div>
                        <div class="col-md-6">
                            <label>Status(O,P,C)</label>
                            <input type="text" class="form-control" name="status" value="{{ $perbaikan->status }}">>
                        </div>
                        <div class="col-md-6">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="{{ $perbaikan->keterangan }}">>
                        </div>
                        <div class="col-md-6">
                            <label>Tgl Selesai</label>
                            <input type="date" class="form-control" name="tgl_selesai" value="{{ $perbaikan->tgl_selesai }}">>
                        </div>
                        <div class="col-md-6">
                            <label>Tgl Estimasi</label>
                            <input type="date" class="form-control" name="tgl_estimasi" value="{{ $perbaikan->tgl_estimasi }}">>
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

