<div class="container">
    <br>
    <h2>Masukkan Data Peminjaman Ruangan</h2>
    <form action="/admin/data-penduduk/{{$data_penduduk->id}}" method="POST">
    @method('put')    
    @csrf
        <div class="mb-3">
            <label>Nama Warga</label>
            <input name="Nama_Warga" type="text" class="form-control" value="{{$data_penduduk->Nama_Warga}}">
        </div>
        <div class="mb-3">
            <label>NIK</label>
            <input name="NIK" type="text" class="form-control" value="{{$data_penduduk->NIK}}">
        </div>
        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input name="Tanggal_Lahir" type="date" class="form-control" value="{{$data_penduduk->Tanggal_Lahir}}">
        </div>
        <select class="form-select" name="Jenis_Kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Pria" @if($data_penduduk->Jenis_Kelamin=='Pria') selected @endif>Pria</option>
            <option value="Wanita" @if($data_penduduk->Jenis_Kelamin=='Wanita') selected @endif>Wanita</option>
        </select>
        <div class="mb-3">
            <label>Alamat</label>
            <input name="Alamat" type="text" class="form-control" value="{{$data_penduduk->Alamat}}">
        </div>
        <select class="form-select" name="RT">
            <option value="">Pilih RT</option>
            <option value="1" @if($data_penduduk->RT=='1') selected @endif>1</option>
            <option value="2" @if($data_penduduk->RT=='2') selected @endif>2</option>
            <option value="3" @if($data_penduduk->RT=='3') selected @endif>3</option>
            <option value="4" @if($data_penduduk->RT=='4') selected @endif>4</option>
        </select>
        <div>
            <select class="form-select" name="Status_Perkawinan">
                <option value="">Pilih Status Perkawinan</option>
                <option value="Belum Kawin" @if($data_penduduk->Status_Perkawinan=='Belum Kawin') selected @endif>Belum Kawin</option>
                <option value="Kawin" @if($data_penduduk->Status_Perkawinan=='Kawin') selected @endif>Kawin</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pekerjaan</label>
            <input name="Pekerjaan" type="text" class="form-control" value="{{$data_penduduk->Pekerjaan}}">
        </div>
        <input type="submit" name="submit" value='Edit'>
    </form>
</div>