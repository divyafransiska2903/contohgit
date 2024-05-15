@extends('tampilan.perbaikan')
@section('contentperbaikan')

    <div class="container">

        <h3 align="center" class="mt-5">Perbaikan</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('perbaikan.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Id Perbaikan</label>
                            <input type="text" class="form-control" name="id_perbaikan">
                        </div>
                        <div class="col-md-6">
                            <label>Tgl Pengajuan</label>
                            <input type="date" class="form-control" name="tgl_pengajuan">
                        </div>
                        <div class="col-md-6">
                            <label>Judul Perbaikan</label>
                            <input type="text" class="form-control" name="judul_perbaikan">
                        </div>
                        <div class="col-md-6">
                            <label>User Pemohon</label>
                            <input type="text" class="form-control" name="User_pemohon">
                        </div>
                        <div class="col-md-6">
                            <label>User Assign</label>
                            <input type="text" class="form-control" name="User_assign">
                        </div>
                        <div class="col-md-6">
                            <label>Id Ruangan</label>
                            <input type="text" class="form-control" name="id_ruangan">
                        </div>
                        <div class="col-md-6">
                            <label>Status(O,P,C)</label>
                            <input type="text" class="form-control" name="status">
                        </div>
                        <div class="col-md-6">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan">
                        </div>
                        <div class="col-md-6">
                            <label>Tgl Selesai</label>
                            <input type="date" class="form-control" name="tgl_selesai">
                        </div>
                        <div class="col-md-6">
                            <label>Tgl Estimasi</label>
                            <input type="date" class="form-control" name="tgl_estimasi">
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
                        <th scope="col">Id Perbaikan</th>
                        <th scope="col">Tgl Pengajuan</th>
                        <th scope="col">Judul Perbaikan</th>
                        <th scope="col">User Pemohon</th>
                        <th scope="col">User Assign</th>
                        <th scope="col">Id Ruangan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Tgl Selesai</th>
                        <th scope="col">Tgl Estimasi</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($perbaikan as $key => $perbaikanKing)


                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $perbaikanKing->id_perbaikan }}</td>
                            <td scope="col">{{ $perbaikanKing->tgl_pengajuan }}</td>
                            <td scope="col">{{ $perbaikanKing->judul_perbaikan }}</td>
                            <td scope="col">{{ $perbaikanKing->User_pemohon }}</td>
                            <td scope="col">{{ $perbaikanKing->User_assign }}</td>
                            <td scope="col">{{ $perbaikanKing->id_ruangan }}</td>
                            <td scope="col">{{ $perbaikanKing->status }}</td>
                            <td scope="col">{{ $perbaikanKing->keterangan }}</td>
                            <td scope="col">{{ $perbaikanKing->tgl_selesai }}</td>
                            <td scope="col">{{ $perbaikanKing->tgl_estimasi }}</td>

                            
                            <td scope="col">

                            <a href="{{ route('perbaikan.edit', $perbaikanKing->id_perbaikan) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('perbaikan.destroy', $perbaikanKing->id_perbaikan) }}" method="POST" style="display:inline">

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



    