<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <x-guest-layout>

        <x-jet-authentication-card>
            <x-slot name="logo">
                {{-- <x-jet-authentication-card-logo /> --}}
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                            I don't have any accout.
                        </a>
                    @endif

                    <x-jet-button class="ml-4">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>

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

    </x-guest-layout>


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
