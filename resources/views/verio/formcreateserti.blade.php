<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Sertifikat</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <section>
    <div class="container">
      <h1 class="pb-4 pt-4">Tambah Sertifikat</h1>
      <form method="POST" action="{{ URL::to('template') }}" enctype="multipart/form-data">
                @csrf

        <!-- 1 -->
        <div class="mb-3 row">
          <label for="xNama" class="col-sm-2 col-form-label">Nama Sertifikat</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="namaSertifikat" name="nama_template" required placeholder="Nama Sertifikat">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="gambarEvent" class="col-sm-2 col-form-label">File Gambar Event</label>
          <div class="col-sm-10">
            <input class="form-control" type="file" id="gambarEvent" name="image_template" required placeholder="File Gambar Event">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="xNama" class="col-sm-2 col-form-label">Koordinat X - Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="x_nama" id="xNama" required placeholder="Koordinat X - Nama">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="yNama" class="col-sm-2 col-form-label">Koordinat Y - Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="y_nama" id="yNama" required placeholder="Koordinat Y - Nama">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="xNoserti" class="col-sm-2 col-form-label">Koordinat X - No Sertifikat</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="x_nosertifikat" id="xNoserti" required placeholder="Koordinat X - No Sertifikat">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="yNoserti" class="col-sm-2 col-form-label">Koordinat Y - No Sertifikat</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="y_nosertifikat" id="yNoserti" required placeholder="Koordinat Y - No Sertifikat">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="jenisFont" class="col-sm-2 col-form-label">Jenis Font</label>
          <div class="col-sm-10">
            <select class="form-select" id="jenisFont" name="font_style" required aria-label="Default select example">
              <option value="ChocolateRaindrops">ChocolateRaindrops</option>
              <option value="OpenSans-Bold">OpenSans-Bold</option>
              <option value="OpenSans-BoldItalic">OpenSans-BoldItalic</option>
              <option value="OpenSans-Light">OpenSans-Light</option>
              <option value="QuinchoScript_PersonalUse">QuinchoScript_PersonalUse</option>
            </select>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="warnaFont" class="col-sm-2 col-form-label">Warna Font</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="font_color" id="warnaFont" required placeholder="Warna Font">
          </div>
        </div>

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