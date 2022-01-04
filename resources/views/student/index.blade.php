@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-6">
    <h1>Data Mahasiswa</h1>
  </div>
  <div class="col-md-6">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
      Tambah Mahasiswa
    </button>
  </div>
  
  <?php $no=1?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">NRP</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Agama</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Alamat</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $student)
      <tr>
        <td>{{$no++}}</td>
        <td>{{$student->kode}}</td>
        <td>{{$student->nama}}</td>
        <td>{{$student->jenis_kelamin}}</td>
        <td>{{$student->agama}}</td>
        <td>{{$student->tmpt_lahir}}</td>
        <td>{{$student->tgl_lahir}}</td>
        <td>{{$student->alamat}}</td>
        <td>
          <a href="{{route('student.edit', $student->id)}}" class="btn btn-warning btn-sm">Edit</a>
          <form action="{{route ('student.destroy', $student->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('student.store')}}">
          @csrf
          <div class="form-group">
              <label for="code">NRP</label>
              <input type="text" class="form-control" name="kode">
          </div>
          
          <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" class="form-control" name="nama">
          </div>
      
          <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
              <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
              <option value="L">Laki-laki</option>
              <option value="P">Perempuan</option>
              </select>
          </div>
      
          <div class="form-group">
              <label for="birth_date">Agama</label>
              <input type="text" class="form-control" name="agama">
          </div>
          
          <div class="form-group">
              <label for="birth_place">Tempat Lahir</label>
              <input type="text" class="form-control" name="tmpt_lahir">
          </div>
      
          <div class="form-group">
              <label for="birth_date">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tgl_lahir">
          </div>
      
      
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
      </div>
    </form>
    </div>
  </div>
</div>
@stop