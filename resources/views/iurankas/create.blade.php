<h1>Tambah Data Iuran Kas</h1>

<form action="/iurankas/store" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="Nama Lengkap" placeholder="Nama Lengkap">
    <br>
    <textarea name="Alamat" rows="10" placeholder="Alamat"></textarea>
    <br>
    <input type="number" name="RT" placeholder="RT">
    <br>
    Tanggal Bayar <br>
    <input type="date" name="Tanggal Bayar">
    <br>
    <input type="text" name="Nomor Rekening" placeholder="Nomor Rekening"><br>
    <input type="text" name="Nama Pengirim" placeholder="Nama Pengirim"><br>
    <div class="mb-3">
            <label>Upload File/Image</label>
            <input type="file" name="Bukti Pembayaran" class="form-control" />
    </div>
    Status Pembayaran <br>
    <select name="Status Pembayaran">
        <option value="Lunas">Lunas</option>
        <option value="Belum Lunas">Belum Lunas</option>
    </select>

    <button type="submit">Submit</button>
</form>