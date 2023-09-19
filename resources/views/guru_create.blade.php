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
        <h3 class="card-title">Tambah Data Guru</h3>

      </div>
      <div class="card-body">

  
        <div>
          <a href="{{ route('guru.index') }}" 
          class="btn btn-default">Kembali</a>
            <br><br>

          <form action="{{ route('guru.store') }}"method="POST">
          @csrf
          <div class="form-group">
              <label>NIP</label>
              <input name="nip" type="text" class="form-control" placeholder="12100707">
              @error('nip')
              <p>{{ message }}</p>
              @enderror
          </div>

          <div class="form-group">
              <label>Nama Guru</label>
              <input name="namaguru" type="text" class="form-control" placeholder="satrio">
              @error('namaguru')
              <p>{{ message }}</p>
              @enderror
          </div>

          <div class="form-group">
             <label>MAPEL</label>
              <input name="mapel" type="text" class="form-control" placeholder="indo">
              @error('mapel')
              <p>{{ message }}</p>
              @enderror
          </div>

          <input type="submit" name="submit" class="btn btn-success" value="Tambah">
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
