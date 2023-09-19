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
        <h3 class="card-title">Guru</h3>

      </div>
      <div class="card-body">
        @if($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
        @endif
  
        <div>
          <a href="{{ route('guru.create') }}" class="btn btn-success">Tambah Data</a>
            <br><br>
                <table class="table table-striped table-bordered">
                        <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Guru</th>
                                <th>Mapel</th>
                              
                        </tr>
                        @foreach ($guruM as $guru)
                        <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $guru->nip }}</td>
                                <td>{{ $guru->namaguru }}</td> 
                                <td>{{ $guru->mapel }}</td> 
                                <td>
                                  <a href="{{ route ('guru.edit', $guru->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                  <form action=" {{ route ('guru.destroy', $guru->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                  </form>
                                </td>   
                        </tr>
                @endforeach
                </table>
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
