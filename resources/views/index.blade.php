<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkademy</title>
<link rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap.min.css') }}">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Abgvin</a>
        </div>
    </nav>
    <!-- END OF NAVBAR -->

    <!-- Main -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mt-5 mx-auto">
                <a href="{{ url('create') }}" class="btn btn-outline-info mb-4">Tambah Data</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Product</th>
                                    <th>Keterangan</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($products as $product)
                                <tr>
                                <th>{{ $no++ }}</th>
                                    <td>{{ $product->nama_produk }}</td>
                                    <td>{{ $product->keterangan }}</td>
                                    <td>{{ $product->jumlah }}</td>
                                    <td>{{ $product->harga }}</td>
                                    <td>
                                    <a href="{{ url('edit/'.$product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ url('destroy/'.$product->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus data ini ?')">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main -->

  <script src="{{ url('frontend/assets/jquery.js') }}"></script>
  <script src="{{ url('frontend/assets/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
