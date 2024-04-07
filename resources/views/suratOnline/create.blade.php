<h1> PERMOHONAN SURAT </h1><br>
<h4> Lihatlah Panduan Pembuatan Permohonan Surat Pada </h4>
<h4><i> link panduan permohonan </h4></i>

<form action="/suratonline/store" method="POST">
    @csrf

    <input type="text" name="Nama Lengkap" placeholder="Nama Lengkap"><br>
    <input type="date" name="Tanggal Lahir" placeholder="Tanggal Lahir"><br>
    <input type="text" name="NIK" placeholder="NIK"><br>
    <select name="Jenis Kelamin">
        <option value="">Jenis Kelamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <select name="Status Perkawinan"><br>
        <option value="">Status Perkawinan</option>
        <option value="Belum Menikah">Belum Menikah</option>
        <option value="Sudah Menikah">Sudah Menikah</option>
    </select><br>
    <select name="Agama"><br>
    <option value="">Agama</option>
        <option value="Kristen">Kristen</option>
        <option value="Islam">Islam</option>
        <option value="Buddha">Buddha</option>
        <option value="Hindu">Hindu</option>
        <option value="Konghucu">Konghucu</option>
    </select><br>
    <textarea name="Alamat"  rows="10" placeholder="Alamat Lengkap"></textarea><br>
    <input type="text" name="Pekerjaan" placeholder="Pekerjaan"><br>
    <input type="integer" name="Nomor Handphone (Whatsapp)" placeholder="No HP ( whatsapp )"><br>
    <input type="text" name="Berkas Pendukung (Link Drive)" placeholder="Berkas Pendukung ( Link drive )"><br>
    <input type="text" name="Keperluan" placeholder="Keperluan"><br>
    <input type="Submit" name="Submit" value="Save">

</form>
    