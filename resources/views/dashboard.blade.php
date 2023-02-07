<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gas.Id') }}
        </h2>
    </x-slot>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>


    <body>
        <header class="bg-warning p-3">
            <div class="container mt-5">
                <div class="d-flex justify-content-center align-items-center h-200">
                    <div class="card w-50" style="width: 18rem">
                        <div class="card-body">
                            <h5 class="card-title">Bergabung dengan GAS</h5>
                            <p class="card-text">Aplikasi untuk memudahkan pelaku usaha menjangkau calon pembeli lebih
                                luas.
                                Daftarkan tokomu dan nikmati keuntungan bersama GAS!</p>
                            <a href="#" class="btn btn-primary">Unduh Sekarang</a>
                        </div>
                    </div>
                    <img src="https://gas.id/files/images/ilustration_top_1616732601.png" alt="profile Pic" height="300"
                        width="300">
                </div>
            </div>
        </header>

        <header>

            <!-- Background image -->
            <div class="p-5 text-center bg-primary" style="
            height: 400px;
          ">
                <div class="mask">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white">
                            <div class="con_lenght info_title_content aos-init aos-animate" data-aos="fade-right"
                                data-aos-duration="1500">
                                <h4 class="font-l cl_white left_contenttext">GAS adalah aplikasi untuk memudahkan pelaku
                                    usaha menjangkau calon pembeli lebih luas. Melalui gerakan #AyoBelanjaTokoTetangga
                                    GAS mengajak untuk menjelajah dan mendukung usaha-usaha di sekitarmu.</h4>


                            </div>
                        </div>
                        
                    </div>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="..." class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            
                <!-- Background image -->
        </header>









        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>

    </html>
</x-app-layout>
