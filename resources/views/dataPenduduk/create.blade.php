<div class="container">
    <br>
    <h2>Masukkan Data Peminjaman Ruangan</h2>
    <form action="/admin/data-penduduk/store" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Warga</label>
            <input name="Nama_Warga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label>NIK</label>
            <input name="NIK" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input name="Tanggal_Lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <select class="form-select" name="Jenis_Kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
        <div class="mb-3">
            <label>Alamat</label>
            <input name="Alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <select class="form-select" name="RT">
            <option value="">Pilih RT</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <div>
            <select class="form-select" name="Status_Perkawinan">
                <option value="">Pilih Status Perkawinan</option>
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pekerjaan</label>
            <input name="Pekerjaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <input type="submit" name="submit" value='Tambahkan'>
    </form>
</div>