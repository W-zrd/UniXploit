<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <title>TP 1302210127</title>
</head>

<body>
    <div class="container p-5 pt-3">
        <h2 class="fs-2 fw-bold text-center m-3 mt-0 mb-5">Daftar Pegawai</h2>

            {{-- List Pegawai --}}
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Gaji</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($employees as $e)
                <tr>
                    <td>{{$e->name}}</td>
                    <td>{{$e->posisi}}</td>
                    <td>{{$e->gaji}}</td>
                    <td>
                        <a href="/pegawai/{{ $e->id }}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">
                                Update
                            </button>
                        </a>
                        <a href="/delete/pegawai/{{ $e->id }}">
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 ms-2 rounded">
                                Delete
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <a href="{{ route('showCreateForm') }}">
                <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700
                hover:border-green-500 rounded"> Create!</button>
            </a>
    </div>
</body>
</html>