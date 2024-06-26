<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Bootstrap Icons -->
    <link rel="shortcut icon" href="assets/imgs/favicon.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('assets/js/menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dropdown.js') }}"></script>
    <title> | Re.nome Store</title>
</head>

<body>
    <header>
        <div class="container_header">
            <div>
                <div id="menu" class="menu">
                    <i class="bi-list bi "></i>
                </div>
                <div id="sidebar" class="sidebar">
                    <ul>
                        <li><i class="bi bi-person"></i> Minha conta</li>
                        <li><i class="bi bi-person-check"></i> Meus dados</li>
                        <li><i class="bi bi-bag-check"></i> Meus pedidos</li>
                        <li><i class="bi bi-star"></i> Avaliações</li>
                        <li class><i class="bi bi-heart"></i> Favoritos</li>
                    </ul>
                </div>
                <div class="container">
                    <img class="logo" src="assets/imgs/logo.png" alt="logo">
                    <div class="input">
                        <div class="input-container">
                            <input type="text" name="input-search" id="input-search" class="input-search"
                                placeholder="Busque aqui seu produto">
                            <img class="newlogo" src="assets/imgs/favicon.png" alt="Logo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="login">
                <div>
                    <i class="bi bi-person-circle"></i>
                </div>
                <p>Faça <a href="{{ route('login') }}"><strong>LOGIN</strong></a> ou<br> crie seu <a href="{{ route('login') }}"><strong>CADASTRO</strong></a></p>
            </div>
            <div class="icons">
                <nav>
                    <ul>
                        <i class="bi bi-headset"></i>
                        <i class="bi bi-heart-fill"></i>
                        <i class="bi bi-cart-fill"></i>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section class="downHeader">
        <nav class="nav">
            <ul class="ul">
                <li>
                    <div class="dropdown-toggle">Departamento <span class="arrow">&#9660;</span></div>
                    <ul class="dropdown">
                        <li class="has-submenu">
                            <a href="#">Hardware<span class="submenu-arrow">&#9654;</span></a>
                            <ul class="submenu">
                                <li><a href="#">Coolers</a></li>
                                <li><a href="#">Dísco Rígido (hd)</a></li>
                                <li><a href="#">Drivers</a></li>
                                <li><a href="#">Fontes</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Periféricos</a></li>
                        <li><a href="#">Computadores</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Celular & Smartphone</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Áudio</a></li>
                        <li><a href="#">Projetores</a></li>
                        <li><a href="#">Espaço Gamer</a></li>
                        <li><a href="#">Escritório</a></li>
                        <li><a href="#">Casa Inteligente</a></li>
                        <li><a href="#">Tablets, Ipads e E-readers</a></li>
                        <li><a href="#">Câmeras e Drones</a></li>
                        <li><a href="#">Energia</a></li>
                        <li><a href="#">Conectividade</a></li>
                    </ul>
                </li>
                <li>
                    Oferta do dia
                </li>
                <li>Cupons
                </li>
            </ul>
        </nav>
    </section>
    <main>

    </main>
    <footer>

    </footer>
</body>

</html>