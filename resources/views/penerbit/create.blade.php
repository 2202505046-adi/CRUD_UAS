@include('layout.header')
    <h3>Tambah Penerbit</h3>
    <form action="{{ route('penerbit.store') }}"method="post">
        @csrf
        <div class="class-group">
            <label for="">Nama Penerbit:</label>
            <input type="text" name="nama_penerbit" id="" placeholder="Masukan nama penerbit">
        </div>
        <button type="submit" class="tombol">Tambahkan</button>
    </form>
@include('layout.footer')