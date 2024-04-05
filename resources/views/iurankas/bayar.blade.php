<h1>Bayar Iuran</h1>

<form action="/bayar/store" method="POST" enctype="multipart/form-data">
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
    <button type="submit">Submit</button>
</form>