@extends('layout.template')

@section('title', 'Detail Transaksi')

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container bg-primary-subtle p-4 rounded">
    <div class="d-flex justify-content-between">
        <div></div> <!-- Spasi kosong agar tombol Print ada di sisi kanan -->
        <div class="text-center mt-3">

            <a href="{{ route('transaksi.print', $transaksi->id) }}" class="btn btn-primary" target="_blank">
                <i class="bi bi-printer-fill"></i></a>
        </div>
    </div>
    <h3 class="mb-2 text-center">Detail Transaksi</h3>
    <div class="card">

        <div class="card-body">
            <p><strong>No. Transaksi:</strong> {{ $transaksi->id }}</p>
            <p><strong>Waktu Ditimbang:</strong>{{ $transaksi->tgl_ditimbang }}</p>
           @if($transaksi->tgl_diambil)
                <p><strong>Waktu Di Terima Oleh Pelanggan:</strong> {{ $transaksi->tgl_diambil }}</p>
            @endif

            <p><strong>Alamat:</strong> {{ $transaksi->pemesanan->alamat }}</p>
            <p><strong>No. Telp:</strong> {{ $transaksi->pemesanan->no_telp }}</p>
            <p><strong>Total Berat:</strong> {{ $transaksi->total_berat }} kg</p>
            <p><strong>Diskon:</strong> {{ $transaksi->diskon }}%</p>
            <p><strong>Total Bayar:</strong> Rp {{ number_format($transaksi->total_bayar, 0, ',', '.') }}</p>
            <p><strong>Status Pembayaran:</strong> {{ $transaksi->status_pembayaran }}</p>

            @if($transaksi->status_pembayaran == 'belum lunas')
                <form action="{{ route('transaksi.bayar', $transaksi->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="bukti_pembayaran" class="form-label">Unggah bukti Pembayaran</label>
                        <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Bayar</button>
                </form>
            @else
                <button class="btn btn-success" disabled>Sudah Lunas</button>
            @endif
            @if($transaksi->bukti_pembayaran)
                <div class="mt-3">
                    <p><strong>Bukti Pembayaran:</strong></p>
                    <img src="{{ asset('storage/' . $transaksi->bukti_pembayaran) }}" alt="Bukti Pembayaran" class="img-fluid" style="width: 25%; height: 25%;">
                </div>
            @endif
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>No. Pemesanan:</th>
                        <td>{{ $transaksi->pemesanan->id }}</td>
                    </tr>
                    <tr>
                        <th>Nama Pelanggan:</th>
                        <td>{{ $transaksi->user->name }}</td>
                    </tr>
                    <tr>
                        <th>Waktu Pemesanan:</th>
                        <td>{{ $transaksi->pemesanan->tgl_pemesanan }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
