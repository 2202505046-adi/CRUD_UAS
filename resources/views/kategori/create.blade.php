@include('layout.header')
    <h3>Buat Kategori</h3>
    <form action="{{ route('kategori.store') }}"method="post">
        @csrf
        <div class="class-group">
            <label for="">Nama Kategori:</label>
            <input type="text" name="nama_kategori" id="" placeholder="Masukan nama kategori">
        </div>
        <button type="submit" class="tombol">Tambahkan</button>
    </form>
@include('layout.footer')