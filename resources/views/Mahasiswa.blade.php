<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Index">Halaman Utama</a>
    <a class="navbar-brand" href="/Profile">Profile</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Mahasiswa">Mahasiswa</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<body>
<div class="mahasiswa">
    <h1>Halaman Mahasiswa</h1>
</div>

<table class="table-sm table-white table-hover tabel-bordered-white text-center">
    <thead>
    <tr>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Jenis Kelamin</th>
        <th colspan="2">TTL</th>
    </tr>
    </thead>
    <tbody>
        <?php $nilai_awal = 0;?>
         @while ($nilai_awal < $jumlah)
         <tr>
             <td>{{$nim[$nilai_awal]}}</td>
             <td> {{$nama [$nilai_awal]}}  </td>
             <td>Laki Laki</td>
             <td>22-12-2004</td>
             <td>Pangkalan Berandan</td>
         </tr>
        <?php $nilai_awal++ ?>
         @endwhile
    <tr>
        <td>0702222136</td>
        <td>raya</td>
        <td>Perempuan</td>
        <td>22-6-2004</td>
        <td>Medan</td>
    </tr>
    <tr>
        <td>0702222136</td>
        <td>Tyriix</td>
        <td>Laki Laki</td>
        <td>22-3-2004</td>
        <td>Land of Down</td>
    </tr>
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
