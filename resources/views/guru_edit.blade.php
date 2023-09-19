@extends('adminlte')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Guru Page</h1>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit Data Guru</h3>

      </div>
      <div class="card-body">

        <div>
          <a href="{{ route('guru.index') }}" 
          class="btn btn-default">Kembali</a>
            <br><br>
          <form action="{{ route('guru.update', $guru->id) }}" method="POST">
          @csrf
          @method('put')

          <div class="form-group">
              <label>NIP</label>
              <input name="nip" type="text" class="form-control" placeholder="12100707" value="{{ $guru->nip }}">
              @error('nip')
              <p>{{ message }}</p>
              @enderror
          </div>

          <div class="form-group">
              <label>Nama Guru</label>
              <input name="namaguru" type="text" class="form-control" placeholder="satrio" value="{{ $guru->namaguru }}">
              @error('namaguru')
              <p>{{ message }}</p>
              @enderror
          </div>

   
          <div class="form-group">
             <label>Mapel</label>
              <input name="mapel" type="text" class="form-control" placeholder="indo" value="{{ $guru->mapel}}">
              @error('mapel')
              <p>{{ message }}</p>
              @enderror
          </div>

          <input type="submit" name="submit" class="btn btn-success" value="Simpan">
        </form>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  @endsection
