@extends('tampilan.ruangan')
@section('contentruangan')

    <div class="container">

        <h3 align="center" class="mt-5">Ruangan</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('ruangan.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nama Ruangan</label>
                            <input type="text" class="form-control" name="nama_ruangan">
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
                        <th scope="col">Nama Ruangan</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($ruangan as $key => $ruanganKing)


                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $ruanganKing->nama_ruangan }}</td>
                            <td scope="col">

                            <a href="{{ route('ruangan.edit', $ruanganKing->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('ruangan.destroy', $ruanganKing->id) }}" method="POST" style="display:inline">

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



    