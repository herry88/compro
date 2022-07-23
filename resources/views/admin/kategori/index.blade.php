@extends('admin.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Halaman Kategori</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                            </tr>
                            <tbody>
                                @foreach ($kategori as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_kategori }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
