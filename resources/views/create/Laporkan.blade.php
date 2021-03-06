@extends('layouts.main')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama Lengkap" name="nama Lengkap" placeholder="Masukan Nama Lengkap...">
                      <label>Keluhan</label>
                      <select name="keluh" id="keluh" class="form-control">
                        <option hidden>Keluhan</option>
                        <option value="Kebersihan">Kebersihan</option>
                        <option value="Fasilitas">Fasilitas</option>
                        <option value="Administrasi">Administrasi</option>
                      </select>
                      <label>Kelas</label>
                      <select name="kelas" id="kelas" class="form-control">
                        <option hidden>Kelas</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                      </select>
                      <label>Nomor Handphone</label>
                      <input type="text" class="form-control" name="nomorhp" id="nomorhp" placeholder="Masukan Nomor Handphone...">
                      <label>Jenis Kelamin</label>
                      <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                        <option hidden>Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                        <option value="Tidakdisebutkan">Tidakdisebutkan</option>
                      </select>
                      <label>Komentar</label>
                      <textarea name="kategori" id="kategori" cols="10" rows="3" class="form-control"></textarea>
                      <button type="submit" class="btn btn-outline-primary float-right mt-3">Kirim Laporan!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>