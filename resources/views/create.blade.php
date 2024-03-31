@extends('welcome')

@section('container')
<div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('information.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">NOP SPTT</label>
                                <input type="text" class="form-control @error('NOP_SPPT') is-invalid @enderror" name="NOP_SPPT" value="{{ old('NOP_SPPT') }}" placeholder="Masukkan Judul Post">
                            
                                <!-- error message untuk NOP_SPPT -->
                                @error('NOP_SPPT')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">NM WP SPTT</label>
                                <input type="text" class="form-control @error('NM_WP_SPPT') is-invalid @enderror" name="NM_WP_SPPT" value="{{ old('NM_WP_SPPT') }}" placeholder="Masukkan Judul Post">
                            
                                <!-- error message untuk NOP_SPPT -->
                                @error('NM_WP_SPPT')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">JALAN OP</label>
                                <input type="text" class="form-control @error('JALAN_OP') is-invalid @enderror" name="JALAN_OP" value="{{ old('JALAN_OP') }}" placeholder="Masukkan Judul Post">
                            
                                <!-- error message untuk JALAN_OP -->
                                @error('JALAN_OP')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">JALAN WP SPT</label>
                                <input type="text" class="form-control @error('NOP_SPPT') is-invalid @enderror" name="JLN_WP_SPPT" value="{{ old('JLN_WP_SPPT') }}" placeholder="Masukkan Judul Post">
                            
                                <!-- error message untuk JLN_WP_SPTT -->
                                @error('JLN_WP_SPTT')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <!-- <label class="font-weight-bold">NM KELURAHAN</label> -->
                                <input type="hidden" class="form-control @error('NM_KELURAHAN') is-invalid @enderror" name="NM_KELURAHAN" value="LABUAN" >
                            
                                <!-- error message untuk NOP_SPPT -->
                                @error('NM_KELURAHAN')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <!-- <label class="font-weight-bold">NM KECAMATAN</label> -->
                                <input type="hidden" class="form-control @error('NM_KECAMATAN') is-invalid @enderror" name="NM_KECAMATAN" value="SRESEH" >
                            
                                <!-- error message untuk NOP_SPPT -->
                                @error('NM_KECAMATAN')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">TAHUN</label>
                                <input type="number" class="form-control @error('THN_PAJAK_SPPT') is-invalid @enderror" name="THN_PAJAK_SPPT" value="{{ old('THN_PAJAK_SPPT') }}" min="2000" max="2099">
                            
                                <!-- error message untuk NOP_SPPT -->
                                @error('THN_PAJAK_SPPT')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">NILAI SPPT</label>
                                <input type="text" class="form-control @error('NILAI_SPPT') is-invalid @enderror" name="NILAI_SPPT" value="{{ old('NILAI_SPPT') }}" placeholder="Masukkan Judul Post">
                            
                                <!-- error message untuk NOP_SPPT -->
                                @error('NILAI_SPPT')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>