@extends('layouts.app')

@section('content')
<div class="px-4 pb-2">
    <h4 class="fw-bold">Dashboard Akomodasi & Peminjaman</h4>
</div>
{{-- Kartu Ringkasan --}}
<div class="row mb-4">
    <div class="col-md-3">
        <div class="bg-white p-3 rounded shadow-sm">
            <div>Total Pegawai Dinas Luar</div>
            <h4>1,240</h4>
            <small class="text-success">+4.1% dari minggu lalu</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="bg-white p-3 rounded shadow-sm">
            <div>Total Permintaan Ruang Rapat</div>
            <h4>310</h4>
            <small class="text-success">+2.1% dari bulan lalu</small>
        </div>
    </div>

    //contoh
    <div class="col-md-3">
        <div class="bg-white p-3 rounded shadow-sm">
            <div>Total Kegiatan Dinas Luar</div>
            <h4>98</h4>
            <small class="text-danger">-1.5% dari bulan lalu</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="bg-white p-3 rounded shadow-sm">
            <div>Total Permintaan Konsumsi</div>
            <h4>287</h4>
            <small class="text-success">+3.7% dari minggu lalu</small>
        </div>
    </div>
</div>

{{-- Grafik Pengajuan --}}
<div class="bg-white p-4 rounded shadow-sm mb-4">
    <h5>Tren Pengajuan Ruang dan Akomodasi</h5>
    <div style="position: relative; height: 300px;">
        <canvas id="pengajuanChart"></canvas>
    </div>
</div>

{{-- Tabel Pengajuan --}}
<div class="bg-white p-4 rounded shadow-sm">
    <h5>Detail Pengajuan Terkini</h5>
    <table class="table table-bordered mt-3">
        <thead class="table-light">
            <tr>
                <th>Nama Kegiatan</th>
                <th>Lokasi</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Pemohon</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Rapat Koordinasi Proyek</td>
                <td>Ruang Rapat A</td>
                <td>22/07/2025</td>
                <td>10:00 - 13:00</td>
                <td>Dedi Kurniawan</td>
                <td><span class="badge bg-success">Disetujui</span></td>
            </tr>
            <tr>
                <td>Workshop Internal</td>
                <td>Ruang Rapat B</td>
                <td>23/07/2025</td>
                <td>09:00 - 12:00</td>
                <td>Andi Firmansyah</td>
                <td><span class="badge bg-warning text-dark">Menunggu</span></td>
            </tr>
        </tbody>
    </table>
</div>

{{-- Chart.js --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('pengajuanChart');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['1 Jul', '5 Jul', '10 Jul', '15 Jul', '20 Jul', '22 Jul'],
            datasets: [{
                label: 'Jumlah Pengajuan',
                data: [5, 8, 12, 9, 15, 11],
                borderColor: '#4285f4',
                backgroundColor: 'rgba(66, 133, 244, 0.1)',
                fill: true,
                tension: 0.3,
                pointRadius: 5,
                pointBackgroundColor: '#4285f4'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            aspectRatio: 2.5,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 5
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
</script>
@endsection