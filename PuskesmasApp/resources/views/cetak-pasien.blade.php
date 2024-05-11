<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Data Pasien</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <header class="clearfix">
    <h1>Puskesmas Sehat</h1>
    <div id="company" class="clearfix">
      <div>Rekam Medis</div>
      <div>Jl. Serayu</div>
      <div>+629801245097</div>
      <div><a>puskesmas_sehat@gmail.com</a></div>
    </div>
    <br>
  </header>
  <main>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nama Pasien</th>
          <th scope="col">Alamat Pasien</th>
          <th scope="col">Tanggal Berobat</th>
          <th scope="col">Keluhan</th>
          <th scope="col">Nama Dokter</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pasiens as $pasien)
        <tr>
          <td>{{ $pasien->nama_pasien }}</td>
          <td>{{ $pasien->alamat_pasien }}</td>
          <td>{{ $pasien->tgl_datang }}</td>
          <td>{{ $pasien->keluhan_pasien }}</td>
          <td>{{ $pasien->dokter->nama_dokter }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div id="notices">
      <div>PERHATIAN:</div>
      <div class="notice">
        <strong>Segera tebus obat ke apoteker sesuai resep dokter</strong>
      </div>
    </div>
  </main>
  <footer>
    <h2>Semoga Lekas Sembuh</h2>
  </footer>
</body>

</html>