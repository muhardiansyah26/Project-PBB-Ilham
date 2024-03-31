@extends('welcome')

@section('container')
    <h1>Informasi</h1>
    <div class="form-group mt-5">
    <input type="text" class="form-control" id="search-input" placeholder="Cari Data">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">NO SPTT</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tahun Pajak</th>
                                <th scope="col">Nilai SPTT</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($posts as $post)
                                <tr>
                                    <td>{{$post->NOP_SPPT}}</td>
                                    <td>{{$post->NM_WP_SPPT }}</td>
                                    <td>{{$post->NM_KECAMATAN }}</td>
                                    <td>{{$post->NM_KELURAHAN }}</td>
                                    <td>{{$post->THN_PAJAK_SPPT}}</td>
                                    <td>{{$post->NILAI_SPPT}}</td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          <div class="pagination">
                             {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
@endsection