@extends("layouts.master")

@section("content")
<div class="row">
    <div class="col-md-12">
        <h1>
            Edit data mahasiswa
        </h1>
        <form method="POST" action="{{route('student.update', $student->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="code">NRP</label>
                <input type="text" class="form-control" name="kode" value="{{$student->kode}}">
            </div>
            
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{$student->nama}}">
            </div>
        
            <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                <option value="L" {{$student->jenis_kelamin === 'L' ? 'selected' : ''}}>
                    Laki-laki
                </option>
                <option value="P" {{$student->jenis_kelamin === 'L' ? 'selected' : ''}}>
                    Perempuan
                </option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="birth_date">Agama</label>
                <input type="text" class="form-control" name="agama" value="{{$student->agama}}">
            </div>
            
            <div class="form-group">
                <label for="birth_place">Tempat Lahir</label>
                <input type="text" class="form-control" name="tmpt_lahir"
                    value="{{ $student->tmpt_lahir }}">
            </div>
        
            <div class="form-group">
                <label for="birth_date">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir"
                    value="{{  date ('Y-m-d', strtotime ($student->tgl_lahir)) }}">
            </div>
        
        
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat">{{$student->alamat}}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
    </div>
</div>
    
@stop