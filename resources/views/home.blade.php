@extends('welcome')

@section('container')
    <h2>Pembayaran PBB</h2>
    <div class="container mt-3">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nomor Induk Kependudukan</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan NIK">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nomor Objek Pajak</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan NOP">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Surat Pemberitahuan Pajak Terutang</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan SPPT">
        </div>
        <div class="mb-3">
        <label for="nominal-tagihan" class="form-label">Nominal Tagihan</label>
            <div class="input-group">
                <input type="text" class="form-control" id="nominal-tagihan" placeholder="Masukkan Nominal" aria-label="Masukkan Nominal Tagihan dalam Rupiah">
                <span class="input-group-text" id="rupiah-nominal"></span>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-danger">Bayar</button>
        </div>
    </div>
    
    <script>

        const nominalTagihanInput = document.getElementById("nominal-tagihan");
        const rupiahNominalSpan = document.getElementById("rupiah-nominal");

        nominalTagihanInput.addEventListener("keyup", function() {
        const angka = parseFloat(nominalTagihanInput.value.replace(/[^0-9]/g, ""));
        if (isNaN(angka)) {
            rupiahNominalSpan.textContent = "";
            return;
        }

        const rupiahFormat = angka.toLocaleString("id-ID", {
            style: "currency",
            currency: "IDR",
        });
        rupiahNominalSpan.textContent = rupiahFormat;
        });


    </script>
@endsection
