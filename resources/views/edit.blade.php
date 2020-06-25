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
        <div class="container mb-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-5 mx-auto">
                <a href="{{ url('') }}" class="btn btn-outline-success mb-4">Kembali</a>
                    @foreach ($products as $product)
                    <form action="{{ url('update/'.$product->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ $product->nama_produk }}">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" cols="30" class="form-control">{{ $product->keterangan }}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="harga">Harga</label>
                                <input type="number" name="harga" id="harga" class="form-control" value="{{ $product->harga }}">
                            </div>
                            <div class="col-6">
                                <label for="jumlah">Jumlah</label>
                                <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ $product->jumlah }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-block mt-4">Submit</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    <!-- Main -->

<script src="{{ url('frontend/assets/jquery.js') }}"></script>
<script src="{{ url('frontend/assets/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
