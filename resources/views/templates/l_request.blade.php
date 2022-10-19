<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>MAJAPAHIT.ID</title>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        {{-- fav icon --}}
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">
        {{-- summernote --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" />
        {{-- toastr --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .note-editor .dropdown-toggle::after {
                all:unset;
            }
            .note-editor .note-dropdown-menu {
                box-sizing:content-box;
            }
            .note-editor .note-modal-footer {
                box-sizing:content-box;
            }
        </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand font-weight-bold" href="/">MAJAPAHIT</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/register">Registrasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="" id="request">
            <div class="container">
                <div class="row  align-items-center justify-content-center text-center">
                    <div class="col-md-8">
                        <div class="card-body">
                                <main>
                                    <section class="py-5 mt-4">
                                <div class="container">
                                    <div class="row">
                                        <h1 class="text-center text-dark fw-bold"><span class="color-mtn"></span>Request</h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 offset-lg-2">
                                            <div class="card"  >
                                                <div class="card-body p-4">
                                                    <p>Isi formulir berikut ini!</p>
                                                    <div class="row">
                                                        <form method="POST" action="store">
                                                            @csrf
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                                                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                                                                        value="">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="no_wa" class="form-label">Nomor Telephone</label>
                                                                    <input type="number" class="form-control" id="no_whatsapp" name="no_whatsapp"
                                                                        value="08">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="deskripsi_proyek" class="form-label">Deskripsi proyek anda</label>
                                                                <textarea name="deskripsi" id="deskripsi" class="form-control summernote"
                                                                    placeholder="Deskripsikan proyek Anda secara rinci"></textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="permasalahan" class="form-label">Permasalahan yang dihadapi</label>
                                                                <textarea name="permasalahan" id="permasalahan" class="form-control summernote"
                                                                    placeholder="Jelaskan masalah yang dihadapi terkait proyek"></textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="harapan" class="form-label">Harapan dan Ekspektasi</label>
                                                                <textarea name="harapan" id="harapan" class="form-control summernote"
                                                                    placeholder="Sebutkan harapan dan ekspektasi dari proyek"></textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="estimasi_budget" class="form-label">Estimasi Budget</label>
                                                                <input type="text" class="form-control" name="estimasi_budget"
                                                                    id="estimasi_budget" placeholder="Contoh: Rp.10,000,000 - 50,000,000"
                                                                    value="">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="status" class="form-label">Status Pesanan</label>
                                                                <select class="form-select" type="text" name="status" aria-label="Default select example">
                                                                    <option selected>
                                                                    <option value="0">FIX</option>
                                                                    <option value="1">BELUM FIX</option>
                                                                    <option value="2">DIPIKIRKAN</option>
                                                                </select>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <button type="submit" class="btn bg-primary rounded-pill  text-light">Kirim</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        {{-- toastr --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- <script>
            toastr().success('Have fun storming the castle!', 'Miracle Max Says')
          </script> --}}
        <script>
            $('.summernote').summernote({
                placeholder: 'SILAHKAN ISI',
                tabsize: 2,
                height: 400
            });
        </script>
    </body>
</html>