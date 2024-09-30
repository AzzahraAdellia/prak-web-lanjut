<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini Halaman User</h1>

    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <label for="nama">First name:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="npm">Last name:</label><br>
        <input type="text" id="npm" name="npm"><br><br>
        <label for="id_kelas">Kelas;</label><br>
        <select name="kelas_id" id="kelas_id" required>
            @foreach($kelas as $kelasItem)
            <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
            @endforeach
        </select>
        <input type="submit" value="Submit">
    </form> 
</body>
</html>