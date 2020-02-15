@extends('layouts.main')

<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <form action="/success" method="POST">
            @csrf
            <label>Nama Lengkap</label>
            <input type="text" name="namalengkap" class="form-control  @error('namalengkap') is-invalid @enderror" id="namalengkap" placeholder="Masukan Nama Lengkap...">
            @error('namalengkap')
            <div class="text-danger">{{$message}}</div>
            @enderror

            <label>keluhan</label>
            <select name="keluh" id="keluh" class="form-control">
              <option value="Kebersihan">kebersihan</option>
              <option value="Fasilitas">Fasilitas</option>
              <option value="Administrasi">Administrasi</option>
            </select>

            <label>kelas</label>
            <select class="form-control" name="kelas" id="kelas">
              <option value="X">X</option>
              <option value="XI">XI</option>
              <option value="XII">XII</option>
            </select>

            <label>Nomor Handphone</label>
            <input type="text" name="nomorhp" class="form-control  @error('nomorhp') is-invalid @enderror" id="nomorhp" placeholder="Nomor Handphone">
            @error('nomorhp')
            <div class="text-danger">{{$message}}</div>
            @enderror

            <label>Jenis Kelamin</label>
            <select class="form-control" id="Jeniskelamin" name="jenisKelamin">
              <option value="LakiLaki">Laki Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>

            <label>Komentar</label>
            <textarea name="kategori" rows="3" cols="10" class="form-control  @error('kategori') is-invalid @enderror"></textarea>
            @error('kategori')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <button type="submit" class="btn btn-outline-primary float-right mt-3">Kirim Laporan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
