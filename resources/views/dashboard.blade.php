<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Jasa Sarana</title>
    <link rel="icon" href="http://www.jasa-sarana.co.id/images/agency-logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css">

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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
    });
    </script>
</head>

<body onload="renderDate()">
    <div class="sidebar">
        <div class="profile">
            <div class="container-profile" style="padding: 16px">
                <div class="profile-name">
                    <p style="color: white">Welcome back, <br> <span style="font-weight: bold; font-size:20px">{{ Auth::user()->name }}</span></p>
                </div>
            </div>
        </div>
        <a class="active" href="/dashboard"><i class="bi bi-speedometer2"> </i> &nbsp Dashboard</a>
        <a class="" href="/tracking"><i class="bi bi-door-open"> </i> &nbsp Tracking Asset</a>
        <br>
        <a class="" href="/kib-a"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIB A</a>
        <a class="" href="/kib-b"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIB B</a>
        <a class="" href="/kib-c"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIB C</a>
        <a class="" href="/kib-e"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIB E</a>
        <a class="" href="/kir"><i class="bi bi-grid-1x2-fill"> </i> &nbsp KIR</a>
        <a class="" href="/bukuinventaris"><i class="bi bi-grid-1x2-fill"> </i> &nbsp Buku Inventaris</a>
        <a href="/logout" style="position: absolute; bottom:0; width:200px; margin-bottom:30px;"> <i class="bi bi-arrow-bar-left"></i> &nbsp Logout</a>
    </div>

    <div class="content" style="height:100%">
        <div class="main-content" style="margin-top:16px; margin-left:24px; margin-right:24px">
            <div class="section-satu">
                <h3>Dashboard</h3>
                <br> <br>
            </div>
            
            <div class="d-flex flex-row gap-5">
                <div class="left">
                    <div class="content-chart" style="width: 332px; height:550px; padding-left:16px; border-radius: 16px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                        <div class="chart d-flex justify-content-center" style=" margin-right:16px">
                            <div class="canvas">
                                <?php
                                    if ($totala == 0 and $totalb == 0 and $totalc == 0 and $totale == 0){
                                        ?><br> <br><p class="text-muted">tidak ada data ditemukan</p>
                                        <?php
                                    }
                                    else{
                                        ?><div class="chartnya">
                                            <canvas id="myChart"></canvas>
                                        </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
        
                        <div class="color" style="margin-top:50px; margin-left:24px">
                            <div class="color-1 d-flex flex-row gap-3">
                                <div class="color-box" style="background-color: rgb(255, 99, 132); width:16px; height:16px; margin-top:4px"></div>
                                <p>KIB A = {{ $totala }} Data</p>
                            </div>
                            <div class="color-2 d-flex flex-row gap-3">
                                <div class="color-box" style="background-color: rgb(54, 162, 235); width:16px; height:16px; margin-top:4px"></div>
                                <p>KIB B = {{ $totalb }} Data</p>
                            </div>
                            <div class="color-3 d-flex flex-row gap-3">
                                <div class="color-box" style="background-color: rgb(255, 205, 86); width:16px; height:16px; margin-top:4px"></div>
                                <p>KIB C = {{ $totalc }} Data</p>
                            </div>
                            <div class="color-4 d-flex flex-row gap-3">
                                <div class="color-box" style="background-color: rgb(75, 192, 192, 2); width:16px; height:16px; margin-top:4px"></div>
                                <p>KIB E = {{ $totale }} Data</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right" style="width:100%; border-radius: 16px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                    <div class="todo" style="padding-left:24px; padding-right:24px; padding-top:24px">
                        <div class="todo-header d-flex flex-row justify-content-end">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#myModal" style="background-color:white; border:none ">
                                <i class="bi bi-calendar-plus-fill" style="font-size:24px"></i>
                            </button>
                        </div>

                        
                        <br>
                        <div class="d-flex flex-row gap-3">
                            <div class="content-cal">
                                <div id='calendar' style="width: 400px;"></div>
                            </div>

                            <div class="todo-fix" >
                                <?php
                                    if ($totaltodo == 0){
                                        ?>
                                        <p style="margin-top: 170px; margin-left: 100px" class="text-muted">Tidak ada agenda ditemukan</p>
                                        <?php
                                    }
                                    else {
                                        ?>
                                        @foreach ($todo as $a)
                                        <div class="content-todo mb-2" style=" box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; padding-left: 12px; padding-top: 6px; padding-right:12px; padding-bottom:6px; border-radius:10px; width:350px">
                                            <div class="d-flex flex-row justify-content-between">
                                                <div class="fill">
                                                    <p class="">{{ $a->title }} | {{ $a->deadline }}</p>
                                                    <span>{{ $a->description }}</span>
                                                </div>
                
                                                <div class="delete" style="margin-top:20px;">
                                                    <a href="/dashboard/todo/delete/{{ $a->id }}"><i class="bi bi-trash-fill" style="font-size:20px; color: red"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="myModal">
        <div class="modal-dialog  modal-dialog-centered">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Tambahkan Jadwal</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
      
            <!-- Modal body -->
            <form action="/dashboard/todo/insert" method="POST">
            @csrf
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input required type="date" class="form-control" id="todo" name="deadline" placeholder="">
                    </div>
                    <div class="form-group mb-3">
                        <input required type="text" class="form-control" id="todo" name="title" placeholder="Nama Agenda">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Keterangan Agenda" class="form-control" id="description" rows="3" name="description"></textarea>
                    </div>
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Tambahkan</button>
                </div>
            </form>
      
          </div>
        </div>
    </div>

</body>

<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                label: '# of Votes',
                data: [{{ $totala }}, {{ $totalb }}, {{ $totalc }}, {{ $totale }}],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192, 2)',
                ],
            }]
        },
    });

    var myModal = new bootstrap.Modal(document.getElementById('exampleModalCenter'), options)
    document.onreadystatechange = function () {
        myModal.show();
    };


</script>
    
</html>