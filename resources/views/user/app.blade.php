<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="/user/css/bootstrap.min.css">
    <link rel="stylesheet" href="/user/css/icons/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/user/css/aos.css">
    <link rel="stylesheet" href="/user/css/splide.min.css">
    <link rel="stylesheet" href="/user/css/fancybox.css">
    <link rel="stylesheet" href="/user/css/main.css">
    @yield('css')
</head>

<body>
<nav class="navbar navbar-expand-lg bg-primary fixed-top">
    <div class="container-xl">
        <a class="navbar-brand h2 mb-0" href="#">BOOKSTORE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active pe-4" aria-current="page" href="#">Kitaplar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4" aria-current="page" href="#">Zurnallar</a>
                </li>
            </ul>
            <input type="text" placeholder="Gozleg">
        </div>
    </div>
</nav>
@yield('main')
<div class="bg-primary">
    <div class="container-lg py-5">
        <div class="text-center text-white h2 fw-bold">
            Contact Us
        </div>
        <div class="row">
            <div class="col-6">
                <div>
                    <div class="text-white fw-bolder">
                        Your name
                    </div>
                    <div>
                        <input type="text" placeholder="Your name" class="w-100">
                    </div>
                </div>
                <div>
                    <div class="text-white fw-bolder pt-3">
                        Your email
                    </div>
                    <div>
                        <input type="text" placeholder="Your email" class="w-100">
                    </div>
                </div>
            </div>
            <div class="col-6 text-white text-center py-3">
                <div class="fw-bold h5">
                    Contact Information
                </div>
                <div class="py-3">
                    Phone <a href="" class="text-white">+99365000000</a>
                </div>
                <div class="">
                    Email <a href="" class="text-white">bookstore@website.com</a>
                </div>
            </div>
        </div>
    </div>
</div>


@yield('js')
</body>

</html>
