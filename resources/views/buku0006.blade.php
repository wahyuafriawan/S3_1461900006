<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data Buku</title>
<style>
table{
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}
thead {
    background-color : #f2f2f2;
}
th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
    padding: 8px 16px;
    text-decoration: none;
}
</style>
<head>

<body>
    <div style="overflow-x: auto">
    <a class="tambah" href="{{ route('buku0006.create') }}">Tambah Data </a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Rak</th>
                <th>Judul Buku</th>
                <th>Tahun Terbit</th>
                <th>Jenis Buku</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($buku as $bk)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $bk -> id}}</td>
                <td>{{ $bk->judul }}</td>
                <td>{{ $bk->tahun_terbit }}</td>
                <td>{{ $bk->jenis }}</td>
                <td>
                    <a href="{{ url('buku0006/' . $bk->id)}}">Edit</a>
                
                   <form action="{{ url('buku0006/' . $bk->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit">Delete</button>
                   </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</body>