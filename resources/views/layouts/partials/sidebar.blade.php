<div class="sidebar p-3 bg-white border-end" style="height: 100vh;">
    <h4 class="text-center fw-bold">BERLIMA</h4>
    <hr>

    <p class="text-muted fw-semibold ms-2">Menu</p>

    <a href="{{ route('dashboard') }}" 
       class="d-block px-3 py-2 {{ request()->is('dashboard') ? 'bg-primary text-white rounded' : 'text-dark' }}">
        Dashboard
    </a>

    <a href="{{ url('/pengajuan-akomodasi') }}" 
       class="d-block px-3 py-2 {{ request()->is('pengajuan-akomodasi') ? 'bg-primary text-white rounded' : 'text-dark' }}">
        Pengajuan Akomodasi
    </a>

    {{-- Ganti route() jadi url() karena route belum didefinisikan --}}
    <a href="{{ url('/pengajuan-ruang-rapat') }}" 
       class="d-block px-3 py-2 {{ request()->is('pengajuan-ruang-rapat') ? 'bg-primary text-white rounded' : 'text-dark' }}">
        Pengajuan Ruang Rapat
    </a>

    <a href="{{ url('/riwayat') }}" 
       class="d-block px-3 py-2 {{ request()->is('riwayat') ? 'bg-primary text-white rounded' : 'text-dark' }}">
        Riwayat Permintaan
    </a>

    <a href="{{ url('/laporan') }}" 
       class="d-block px-3 py-2 {{ request()->is('laporan') ? 'bg-primary text-white rounded' : 'text-dark' }}">
        Laporan & Rekap
    </a>

    <hr class="mt-4">
    <p class="text-muted fw-semibold ms-2">Other</p>

    <a href="{{ url('/settings') }}" 
       class="d-block px-3 py-2 {{ request()->is('settings') ? 'bg-primary text-white rounded' : 'text-dark' }}">
        Settings
    </a>

    <form method="POST" action="{{ route('logout') }}" class="px-3 mt-3">
        @csrf
        <button type="submit" class="btn btn-outline-danger btn-sm w-100">Logout</button>
    </form>
</div>
