<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KIB-E | Jasa Sarana</title>
    <link rel="icon" href="http://www.jasa-sarana.co.id/images/agency-logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
        body {
            margin: 0;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #06603B;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: #F7F7F7;
            padding: 16px;
            text-decoration: none;
        }
    
        .sidebar a.active {
            background-color: #064F32;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #2A7857;
            color: white;
        }

        div.content {
            margin-left: 200px;
            padding: 1px 16px;
        }

        @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
        .sidebar a {float: left;}
            div.content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="profile">
            <div class="container-profile" style="padding: 16px">
                <div class="profile-name">
                    <p style="color: white">Welcome back, <br> <span style="font-weight: bold; font-size:20px">{{ Auth::user()->name }}</span></p>
                </div>
            </div>
        </div>
        <a class="" href="/dashboard"><i class="bi bi-speedometer2"> </i> &nbsp Dashboard</a>
        <a class="" href="/tracking"><i class="bi bi-door-open"> </i> &nbsp Tracking Asset</a>
        <br>
        <a class="" href="/kib-a"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIB A</a>
        <a class="" href="/kib-b"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIB B</a>
        <a class="" href="/kib-c"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIB C</a>
        <a class="active" href="/kib-e"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIB E</a>
        <a class="" href="/kir"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIR</a>
        <a class="" href="/bukuinventaris"><i class="bi bi-grid-1x2-fill"> </i> &nbsp Buku Inventaris</a>
        <a href="/logout" style="position: absolute; bottom:0; width:200px; margin-bottom:30px;"> <i class="bi bi-arrow-bar-left"></i> &nbsp Logout</a>
    </div>

    <div class="content">
        <div class="main-content" style="margin-top:16px; margin-left:24px; margin-right:24px">
            <div class="section-satu">
                <h3>KARTU INVENTARIS BARANG (KIB) C</h3>
            </div>
            @foreach ($kib_e as $b)
            <div class="section-kedua">
                <div class="d-flex flex-row justify-content-end container-section gap-3" style="margin-top:32px; border-radius:4px;">
                    <div class="d-flex flex-row justify-content-end container-section gap-3" style="margin-top:32px; border-radius:4px;">
                        <div class="edit mt-3">
                            <a href="/kib-e/edit/{{ $b->id }}">
                                <button type="button" class="btn btn-warning">Edit Data</button>
                            </a>
                        </div>
    
                        <div class="delete mt-3">
                            <a href="/kib-e/delete/{{ $b->id }}">
                                <button type="button" class="btn btn-danger">Delete Data</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="d-flex flex-row gap-5">
                <div class="show-data" style="width:35%; ">
                    <div class="mb-3">
                        <label for="nama-aset" class="form-label">Nama Aset</label>
                        <input type="text" readonly name="nama_aset" value="{{ $b->nama_aset }}" class="form-control" id="nama-aset">
                    </div>
    
                    <div class="mb-3">
                        <label for="kode-aset" class="form-label">Kode Aset</label>
                        <input type="text" readonly name="kode_aset" value="{{ $b->kode_aset }}" class="form-control" id="kode-aset" >
                    </div>
    
                    <div class="mb-3">
                        <label for="luas-aset" class="form-label">Pengarang Buku</label>
                        <input type="text" readonly name="pengarang_buku" value="{{ $b->pengarang_buku }}" class="form-control" id="luas-aset" >
                    </div>
    
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Penerbit Buku</label>
                        <input type="text" readonly name="penerbit_buku" value="{{ $b->penerbit_buku }}" class="form-control" id="lokasi" >
                    </div>
    
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Jumlah</label>
                        <input type="number" readonly name="jumlah" value="{{ $b->jumlah }}" class="form-control" id="tahun_pengadaan">
                    </div>
    
                    <div class="mb-3">
                        <label for="hak" class="form-label">Tahun Terbit</label>
                        <input type="number" readonly name="tahun_terbit" value="{{ $b->tahun_terbit }}" class="form-control" id="hak" >
                    </div>

                </div>
    
                <div class="show-data2" style="width:35%">
                    <div class="mb-3">
                        <label for="tanggal_sertifikat" class="form-label">Asal-usul</label>
                        <input type="text" readonly name="asal_usul" value="{{ $b->asal_usul }}" class="form-control" id="hak" >
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_sertifikat" class="form-label">Harga</label>
                        <input type="number" readonly name="harga" value="{{ $b->harga }}" class="form-control" id="hak" >
                    </div>

                    <div class="mb-3">
                        <label for="penggunaan" class="form-label">Keterangan</label>
                        <textarea type="text" readonly name="keterangan"  class="form-control" id="hak" >{{ $b->keterangan }}</textarea>
                    </div>

                    <div class="gambar" style="margin-top:25px">
                        <p>Gambar</p>
                        <img style="width:300px; max-height:200px" class="img-thumbnail img-fluid" src="{{ asset('storage/' . $b->gambar) }}" alt="" readonly>
                    </div>
                    

                </div>
                
            </div>
            
            @endforeach 
        </div>
    </div>


</body>

    
</html>