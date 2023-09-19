@extends('adminlte')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Peserta Didik Page</h1>
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
        <h3 class="card-title">Peserta Didik</h3>

</div>
      <div class="card-body">
      <form action="{{ route('pesertadidik.index') }}" method="get">
<div class="input-group mb-3">
    <input type="search" name="search" 
    class="form-control" placeholder="Masukkan nama lengkap" value="{{ $vcari }}">
  
    <button type="submit" 
    class="btn btn-primary">Search</button>
    <a href="{{ url('pesertadidik') }}">
      <button class="btn btn-danger"> Reset </button>
       </a>
</div>
</form>
        @if($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
        @endif
  
        <div>
          <a href="{{ route('pesertadidik.create') }}" class="btn btn-success">Tambah Data</a>
          <a href="{{ url('pesertadidik/pdf') }}" class="btn btn-warning">Unduh PDF</a>
            <br><br>
                <table class="table table-striped table-bordered">
                        <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama Lengkap</th>
                                <th>JK</th>
                                <th>Nilai</th>
                                <th>Aksi</th>
                              
                        </tr>
                        @if (count($pesertaM) > 0)
                        @foreach ($pesertaM as $pesertadidik)
                        <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pesertadidik->nis }}</td>
                                <td>{{ $pesertadidik->namalengkap }}</td> 
                                <td>{{ $pesertadidik->jk }}</td> 
                                <td>{{ $pesertadidik->nilai }}</td>
                                <td>
                                  <a href="{{ route ('pesertadidik.edit', $pesertadidik->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                  <form action=" {{ route ('pesertadidik.destroy', $pesertadidik->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                  </form>
                                </td>   
                        </tr>
                      
                @endforeach
                @else
                <tr>
                  <td colspan="5">Data tidak ditemukan</td>
                </tr>
                @endif
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
