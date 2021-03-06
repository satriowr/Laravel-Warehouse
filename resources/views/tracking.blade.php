<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracking | Jasa Sarana</title>
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
        <a class="active" href="/tracking"><i class="bi bi-door-open"> </i> &nbsp Tracking Asset</a>
        <br>
        <a class="" href="/kib-a"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIB A</a>
        <a class="" href="/kib-b"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIB B</a>
        <a class="" href="/kib-c"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIB C</a>
        <a class="" href="/kib-e"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIB E</a>
        <a class="" href="/kir"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIR</a>
        <a class="" href="/bukuinventaris"><i class="bi bi-grid-1x2-fill"> </i> &nbsp Buku Inventaris</a>
        <a href="/logout" style="position: absolute; bottom:0; width:200px; margin-bottom:30px;"> <i class="bi bi-arrow-bar-left"></i> &nbsp Logout</a>
    </div>

    <div class="content" style="height: 800px">
        <div class="main-content" style="margin-top:16px; margin-left:24px; margin-right:24px">
            <div class="section-satu">
                <h3>Lacak Aset</h3>
                <br>
            </div>

           
            <div class="select-kir d-flex flex-row justify-content-between">
                <div class="select-kir">
                    <select class="form-select" aria-label="Default select example" onchange="window.location.href=this.value;">
                        <option selected>Pilih Ruangan</option>
                        <option value="kir/hightower">High Tower</option>
                        <option value="kir/paseh">Paseh</option>
                        <option value="kir/bizpark">Bizpark</option>
                        <option value="kir/kantor2">Kantor 2</option>
                        <option value="kir/kantortengah1">Kantor Tengah 1</option>
                        <option value="kir/kantorpantry">Kantor Pantry</option>
                        <option value="kir/lounge">Lounge</option>
                        <option value="kir/direkturutama">Direktur Utama</option>
                        <option value="kir/direkturoperasional">Direktur Operasional</option>
                    </select>
                </div>

                <div class="tambah">
                    <a href="javascript:void(0)">
                        <button disabled type="button" class="btn btn-success">Menampilkan 2 data</button>
                    </a>
                </div>
            </div>

            <div class="section-dua mt-5">
                <div class="table-responsive">
                    <table class="table table table-striped table-bordered table-sm" cellspacing="0" style="table-layout: fixed;">
                        <thead>
                          <tr>
                            <th class="text-center" scope="col" style="width:150px">Nama Ruangan</th>
                            <th class="text-center" scope="col" style="width:150px">Kode Aset</th>
                            <th class="text-center" scope="col" style="width:150px">Nomor Aset</th>
                            <th class="text-center" scope="col" style="width:150px">Nama Aset</th>
                            <th class="text-center" scope="col" style="width:150px">Kondisi Aset</th>
                            <th class="text-center" scope="col" style="width:200px">Tanggal Masuk</th>
                            <th class="text-center" scope="col" style="width:200px">Tanggal Keluar</th>
                            <th class="text-center" scope="col" style="width:200px">Tanggal Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>Kantor Pantry</th>
                            <td>002.01</td>
                            <td>1</td>
                            <td>Figura1</td>
                            <td>Baik</td>
                            <td>2022-06-09 15:40:22</td>
                            <td></td>
                            <td style="color:#064F32">Dalam Ruangan</td>
                          </tr>
                          <tr>
                            <th>Direktur Utama</th>
                            <td>002.03</td>
                            <td>1</td>
                            <td>kursi</td>
                            <td>Baik</td>
                            <td>2022-06-09 17:40:22</td>
                            <td></td>
                            <td style="color:#064F32">Dalam Ruangan</td>
                          </tr>

                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>


</body>

    
</html>