<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>High Tower | Jasa Sarana</title>
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
        <a class="" href="/kib-e"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIB E</a>
        <a class="active" href="/kir"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIR</a>
        <a class="" href="/bukuinventaris"><i class="bi bi-grid-1x2-fill"> </i> &nbsp Buku Inventaris</a>
        <a href="/logout" style="position: absolute; bottom:0; width:200px; margin-bottom:30px;"> <i class="bi bi-arrow-bar-left"></i> &nbsp Logout</a>
    </div>

    <form action="/kir/paseh/insert" method="post">
        @csrf
        <div class="content" style="height: 800px">
            <div class="main-content" style="margin-top:16px; margin-left:24px; margin-right:24px">
                <div class="section-satu">
                    <h3>TAMBAH KARTU INVENTARIS RUANGAN</h3>
                    <br>
                    
                    <div class="select-kir d-flex flex-row justify-content-end">
                        
    
                        <div class="tambah">
                            <button type="submit" class="btn btn-success">Tambah Data</button>
                        </div>
                    </div>
                </div>
                <div class="form-insert mt-5">
                    <div class="d-flex flex-row gap-3">
                        <div class="show-data1" style="width:35%">
                            <div class="mb-3">
                                <label for="tanggal_sertifikat" class="form-label">Jenis Aset/Nama Aset</label>
                                <input type="text" name="nama_aset"  class="form-control" id="hak" >
                            </div>
        
                            <div class="mb-3">
                                <label for="nomor_sertifikat" class="form-label">Kode Aset</label>
                                <input type="text" name="kode_aset"  class="form-control" id="hak" >
                            </div>
        
                            <div class="mb-3">
                                <label for="penggunaan" class="form-label">Merk/Model</label>
                                <input type="text" name="merk"  class="form-control" id="hak" >
                            </div>
        
                            <div class="mb-3">
                                <label for="asal_usul" class="form-label">Ukuran</label>
                                <input type="text" name="ukuran"  class="form-control" id="hak" >
                            </div>

                            <div class="mb-3">
                                <label for="asal_usul" class="form-label">Bahan</label>
                                <input type="text" name="bahan"  class="form-control" id="hak" >
                            </div>

                            <div class="mb-3">
                                <label for="asal_usul" class="form-label">Tahun Pembelian</label>
                                <input type="number" name="tahun_pembelian"  class="form-control" id="hak" >
                            </div>

                        </div>

                        <div class="show-data2">
                            <label for="harga" class="form-label">Harga</label><br>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                                <input type="number" name="harga"  class="form-control" id="hak" >
                            </div>

                            <div class="mb-3">
                                <label for="kondisi" class="form-label">Kondisi</label>
                                <select name="kondisi" class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Kondisi</option>
                                    <option value="Baik (B)">Baik (B)</option>
                                    <option value="Kurang Baik (KB) ">Kurang Baik (KB)</option>
                                    <option value="Rusak Berat (RB)">Rusak Berat (RB)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

    </form>
    


</body>

    
</html>