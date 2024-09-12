@extends('layouts.app')

@section('content')
    <h1>Daftar Pegawai</h1>
    @if ($employees->isEmpty())
        <p>Belum ada data pegawai.</p>
    @else
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Posisi</th>
                    <th>Tanggal Bergabung</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>{{ $employee->hire_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
