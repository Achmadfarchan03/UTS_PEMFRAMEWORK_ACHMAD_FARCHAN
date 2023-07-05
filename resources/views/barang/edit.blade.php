<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/sass/app.scss')
</head>
<body>
<form action="{{ route('barangs.update', ['barang' => $barang->id])}}" method="POST">
    @csrf
    @method('put')
    <div class="row justify-content-center">
        <div class="p-5 bg-light rounded-3 col-xl-6">
            <div class="mb-3 text-center">
                <i class="bi-person-circle fs-1"></i>
                <h4>Edit Barang</h4>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="KodeBarang" class="form-label">Kode Barang</label>
                    <input class="form-control @error('KodeBarang') is-invalid @enderror" type="text" name="KodeBarang" id="KodeBarang" value="{{ $errors->any() ? old('KodeBarang') : $barang->kode_barang }}" placeholder="Enter Kode Barang">
                    @error('KodeBarang')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="NamaBarang" class="form-label">Nama Barang</label>
                    <input class="form-control @error('NamaBarang') is-invalid @enderror" type="text" name="NamaBarang" id="NamaBarang" value="{{ $errors->any() ? old('NamaBarang') : $barang->nama_barang }}" placeholder="Enter Nama Barang">
                    @error('NamaBarang')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="HargaBarang" class="form-label">HargaBarang</label>
                    <input class="form-control @error('HargaBarang') is-invalid @enderror" type="text" name="HargaBarang" id="HargaBarang" value="{{ $errors->any() ? old('HargaBarang') : $barang->harga_barang }}" placeholder="Enter HargaBarang">
                    @error('HargaBarang')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="DeskripsiBarang" class="form-label">DeskripsiBarang</label>
                    <input class="form-control @error('DeskripsiBarang') is-invalid @enderror" type="text" name="DeskripsiBarang" id="DeskripsiBarang" value="{{ $errors->any() ? old('DeskripsiBarang') : $barang->deskripsi_barang }}" placeholder="Enter DeskripsiBarang">
                    @error('DeskripsiBarang')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="col-md-12 mb-3">
                    <label for="satuan" class="form-label">Satuan</label>
                    <select name="satuan" id="satuan" class="form-select">
                        @php
                            $selected = "";
                            if ($errors->any())
                                $selected = old('satuan');
                            else
                                $selected = $barang->satuan_id;
                        @endphp
                        @foreach ($satuans as $satuan)
                            <option value="{{ $satuan->id }}" {{ $selected == $satuan->id ? 'selected' : '' }}>{{ $satuan->kode_satuan.' - '.$satuan->nama_satuan }}</option>
                        @endforeach
                    </select>
                    @error('position')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 d-grid">
                    <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                </div>
                <div class="col-md-6 d-grid">
                    <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Edit</button>
                </div>
            </div>
        </div>
    </div>
</form>
@vite('resources/js/app.js')
</body>
</html>