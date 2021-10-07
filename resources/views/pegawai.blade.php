@extends('dashboard.dashboard')

@section('content')
    <br>
    <h2 class="text-center">Data Pegawai</h2>
    <br><br>

    <table class="table table-bordered">
        <tr>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Departemen ID</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Gender</th>
            <th>Status</th>
        </tr>

        @if(count($data_pegawai))
        @foreach($data_pegawai as $pgw)

        <tr>
            <td>{{$pgw->nip}</td>
            <td>{{$pgw->nama_pegawai}}</td>
            <td>{{$dpt->departemen_id}}</td>
            <td>{{$pgw->email}}</td>
            <td>{{$pgw->telepon}}</td>
            <td>{{$pgw->gender}}</td>
            <td>{{$pgw->status}}</td>
        </tr>
        @endforeach
        @else
        <tr>
            <td align="center" clospan="3">Empty Data!! Have a Nice Day & 170709406</td>
        </tr>
        @endif
    </table>
    @endsection