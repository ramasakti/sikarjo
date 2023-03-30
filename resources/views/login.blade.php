<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/css/uikit.min.css" />
</head>
<body>
    <form method="post" action="/login">
        <div class="uk-container uk-margin-large-top">        
            <legend class="uk-legend uk-text-center">Login</legend>
            @if (session()->has('gagal'))
                <div class="uk-alert-danger" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>{{ session('gagal') }}</p>
                </div>
            @endif
            @csrf
            <div class="uk-margin">
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input class="uk-input" type="text" placeholder="Username" name="username" aria-label="Username">
                </div>
            </div>
            
            <div class="uk-margin">
                <div class="uk-inline uk-width-1-1">
                    <input class="uk-input" id="password" type="password" name="password" placeholder="Password" aria-label="Password">
                    <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: eye-slash" onclick="showHide()"></a>
                </div>
            </div>

            <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">Login</button>
        </div>
    </form>
    <script>
        const password = document.getElementById('password')
        function showHide() {
            if (password.getAttribute('type') == 'password') {
                password.setAttribute('type', 'text')
            }else{
                password.setAttribute('type', 'password')
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit-icons.min.js"></script>
</body>
</html>