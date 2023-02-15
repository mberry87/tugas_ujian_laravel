<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/my-style.css">
</head>

<body>

    @include('layout.header')

    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Data Dosen</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    @forelse ($dosen as $val)
                        <li class="list-group-item">{{ $val }}</li>
                    @empty
                        <li class="alert alert-dark d-inline-blok">Tidak ada data ...</li>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>

    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/my-script.js"></script>

</body>

</html>
