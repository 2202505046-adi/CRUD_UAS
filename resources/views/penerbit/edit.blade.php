@include('layout.header')
    <h3>Edit Penerbit</h3>
    <form action="{{ route('penerbit.update', $penerbit->id) }}"method="post">
        @csrf
        @method('PUT')
        <div class="class-group">
            <label for="">Nama Penerbit:</label>
            <input type="text" name="nama_penerbit" id="" value="{{ $Penerbit->nama_penerbit }}">
        </div>
        <button type="submit" class="tombol">Update</button>
    </form>
@include('layout.footer')