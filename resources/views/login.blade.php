<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/imgs/favicon.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="{{ asset('assets/js/login.js') }}"></script>
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
    <title> | Realize seu login!</title>
</head>
<div class="body" id="body">
    <div class="logo">
        <a href="../index.html"><img class="logoTop" src="../assets/imgs/logo.png" alt="Logo"></a>
    </div>
    <div class="veen">
        <div class="login-btn splits">
            <p>Já é um usuário?</p>
            <button class="active">Login</button>
        </div>
        <div class="rgstr-btn splits">
            <p>Ainda não tem conta?</p>
            <button>Registre-se</button>
        </div>
        <div class="wrapper">
            <form id="login" tabindex="500">
                <h3>Login</h3>
                <div class="mail">
                    <input type="mail" name="">
                    <label>E-mail</label>
                </div>
                <div class="passwd">
                    <input type="password" name="">
                    <label>Senha</label>
                </div>
                <div class="submit">
                    <button class="dark">Entre</button>
                </div>
            </form>
            <form id="register" method="POST" action="{{ route('register') }}" tabindex="502">
                @csrf
                <h3>Registre-se</h3>
                <div class="name">
                    <input type="text" name="name">
                    <label>Nome Completo</label>
                </div>
                <div class="mail">
                    <input type="mail" name="email">
                    <label>E-mail</label>
                </div>
                <div class="passwd">
                    <input type="password" name="password">
                    <label>Senha</label>
                </div>
                <div class="passwd">
                    <input type="password" name="password_confirmation">
                    <label>Senha</label>
                </div>
                <div class="submit">
                    <button class="dark">Registre-se</button>
                </div>
            </form>
        </div>
    </div>
</div>


<style type="text/css">
    .site-link {
        padding: 5px 15px;
        position: fixed;
        z-index: 99999;
        background: #fff;
        box-shadow: 0 0 4px rgba(0, 0, 0, .14), 0 4px 8px rgba(0, 0, 0, .28);
        right: 30px;
        bottom: 30px;
        border-radius: 10px;
    }

    .site-link img {
        width: 30px;
        height: 30px;
    }
</style>

</html>