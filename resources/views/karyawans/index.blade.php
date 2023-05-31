<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Project Data Karyawan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstarp/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class"col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Data Karyawan</h2>
                </div>
                <div class="pull-right mb-2">
                    {{-- ini urldi route yang buat nampilkan form create data--}}
                    <a class="btn btn-success" href="{{ url('/karyawan/data/create') }}"> Create Data Karyawan </a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>S.No</th>
                <th>Nama Karyawan</th>
                <th>Email</th>
                <th>Alamat</th>
                <th width="280px">Action</th>
            </tr>
            {{-- variabel $data ini diambil dari method index di KaryawanController --}}
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->address }}</td>
                <td>
                    {{-- route aksi untuk hapus --}}
                    <form action="{{ url("/karyawan/$item->id") }}" method="Post">
                        {{-- route aksi untuk edit --}}
                        <a class="btn btn-primary" href="{{  url("/karyawan/$item->id/edit") }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </tb>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
