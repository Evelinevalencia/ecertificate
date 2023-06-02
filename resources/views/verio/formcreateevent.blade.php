<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Event</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container">
            <h1 class="pb-4 pt-4">Tambah Event</h1>
            <form method="POST" action="{{ URL::to('event') }}" enctype="multipart/form-data">
                @csrf
                <!-- 1 -->
                <div class="mb-3 row">
                    <label for="namaEvent" class="col-sm-2 col-form-label">Nama Event</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_event" id="namaEvent" required placeholder="Nama Event">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="jenisEvent" class="col-sm-2 col-form-label">Jenis Event</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="jenisEvent" name="jenis_event" required aria-label="Default select example">
                            <option value="Workshop">Workshop</option>
                            <option value="Seminar">Seminar</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="deskripsiEvent" class="col-sm-2 col-form-label">Deskripsi Event</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="deskripsi_event" id="deskripsiEvent" required placeholder="Deskripsi Event">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="tanggalEvent" class="col-sm-2 col-form-label">Tanggal Event</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal_event" id="tanggalEvent" required placeholder="Tanggal Event">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="gambarEvent" class="col-sm-2 col-form-label">File Gambar Event</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" name="image_event" id="gambarEvent" required placeholder="File Gambar Event">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="penyelenggaraEvent" class="col-sm-2 col-form-label">Penyelenggara Event</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="penyelenggara_event" id="penyelenggaraEvent" required placeholder="Penyelenggara Event">
                    </div>
                </div>
                <input type="text" style="opacity:0%" name="kapasitas_peserta" value="100">
                <div class="d-flex justify-content-center">
                    <div class="pb-4 pt-4 d-grid col-8">
                        <button type="submit" class="btn btn-primary btn-lg">SIMPAN</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>