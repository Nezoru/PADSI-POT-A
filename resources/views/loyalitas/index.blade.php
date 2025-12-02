@extends('layout.sidebar')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Loyalitas Pelanggan</h1>
</div>

<h2 class="h4">🏆 Leaderboard Pelanggan Terloyal</h2>
<div class="row g-3 mb-4">

    @foreach($leaderboard as $item)
    <div class="col-md-4">
        <div class="card shadow-sm">
            {{-- DIUBAH: Class 'text-center' dihapus dari div di bawah --}}
            <div class="card-body">
                <h5 class="card-title">
                    @if($loop->iteration == 1) 🥇
                    @elseif($loop->iteration == 2) 🥈
                    @elseif($loop->iteration == 3) 🥉
                    @endif
                    {{ $item->Nama_Pelanggan }}
                </h5>
                <p class="card-text mb-0">
                    <span class="fs-3 fw-bold">{{ $item->Jumlah_Transaksi }}</span>
                    <span class="text-muted">Total Transaksi</span>
                </p>
            </div>
        </div>
    </div>
    @endforeach

</div>
<h2 class="h4">Data Semua Pelanggan</h2>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">No. Telepon</th>
                <th scope="col">Jumlah Transaksi</th>
                <th scope="col">Jumlah Diskon (Rp)</th>
            </tr>
        </thead>
        <tbody>
            @forelse($semuaLoyalitas as $data)
            <tr>
                <td>{{ $data->ID_Loyalitas }}</td>
                <td>{{ $data->Nama_Pelanggan }}</td>
                <td>{{ $data->NoTelp_Pelanggan }}</td>
                <td>{{ $data->Jumlah_Transaksi }}</td>
                <td>{{ number_format($data->Jumlah_Diskon, 0, ',', '.') }}</td>
            </tr>
            @empty
            <tr>
                {{-- DIUBAH: Class 'text-center' dihapus dari td di bawah --}}
                <td colspan="5">Belum ada data loyalitas.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- Tampilkan link pagination --}}
{{-- DIUBAH: Class 'd-flex justify-content-center' dihapus dari div di bawah --}}
<div>
    {{ $semuaLoyalitas->links() }}
</div>
@endsection