<h1>Tambah Data Buku (1461900006)</h1>

<a href="{{url('buku0006/')}}">Kembali ke Data Buku</a>
<br></br>


<form action="{{route('buku0006.store')}}" method="post">
    @csrf
    ID Buku : <input type="text" name="id">
    Judul Buku : <input type="text" name="judul">
    Tahun terbit : <input type="text" name="tahun_terbit">
    <button type="submit">Simpan</button>
</form>