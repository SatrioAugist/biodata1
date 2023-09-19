<h1>Daftar Peserta Didik</h1>
<table width="100%" border="1" cellpadding="5" cellspacing="0">
                        <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama Lengkap</th>
                                <th>JK</th>
                                <th>Nilai</th>
                              
                        </tr>

                        @foreach ($pesertaM as $pesertadidik)
                        <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pesertadidik->nis }}</td>
                                <td>{{ $pesertadidik->namalengkap }}</td> 
                                <td>{{ $pesertadidik->jk }}</td> 
                                <td>{{ $pesertadidik->nilai }}</td>
                              
                        </tr>
                      
                @endforeach
               
                
                </table>