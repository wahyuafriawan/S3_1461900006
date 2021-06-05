  
<form action="{{ url('buku0006/' . $buku0006->id ) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    ID : <input type="text" name="id" value="{{ $buku0006->id }}">
    Judul: <input type="text" name="judul" value="{{ $buku0006->judul }}">
    Tahun Terbit : <input type="text" name="tahun_terbit" value="{{ $buku0006->tahun_terbit }}">
    <button type="submit">Simpan</button>
</form>