<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ecommerce</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <div class="container-fluid">
        <div class="row text-white bg-dark">
            <div class="col-md-4">
                <h1>ABOUT THIS WEBSITE</h1>
                <p>
                    Hello everyone!This is my first ecommerce website.
                    You can register,login and create product and other function.
                    There have a some little error while creating a product in profile.
                    In this issue,you need to reload this website.That solution is better.
                    Thank you for checking my website.Please comment.
                </p>
            </div>
            <div class="col-md-4">
                <h1>CONTENT INFO</h1>
                <div>
                    <i class="fas fa-phone-square-alt"></i>
                    09960187283
                </div>
                <div>
                    <i class="fas fa-envelope"></i>
                    alpha.dev.myanmar@gmail.com
                </div>
            </div>
            <div class="col-md-4">
                <h1>FOLLOW ME ON</h1>
                <div>
                    <table>
                        <tr>
                            <td>
                                <a href="https://www.facebook.com/aung.p.soe.5437/" target="_blank">
                                <i id="fb" class="fab fa-facebook"> </i></a>
                            </td>
                            <td>
                                <i id="in" class="fab fa-instagram-square"></i>
                            </td>
                            <td>
                                <i id="tw" class="fab fa-twitter-square"></i>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- @stack('modals') --}}

    @livewireScripts


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>

<style>
    h1 {
        font-size: 20px;
    }

    .col-md-4 {
        padding: 20px;
    }

    #fb,
    #in,
    #tw {
        font-size: 30px;
        margin: 10px
    }
</style>
