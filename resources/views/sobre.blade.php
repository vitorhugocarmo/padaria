<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Padaria Aconchego</title>
    <style>
        :root {
            --cor-primaria: #f8b652;
            --cor-secundaria: #4a2b1c;
            --cor-fundo: #fdf6e3;
            --cor-destaque: #d19500;
            --cor-branco: #ffffff;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--cor-fundo);
            color: var(--cor-secundaria);
            line-height: 1.6;
        }

        header {
            background-color: var(--cor-primaria);
            color: var(--cor-secundaria);
            text-align: center;
            padding: 3em 1em 2em;
        }

        header h1 {
            font-size: 2.5em;
            color: var(--cor-secundaria);
            font-weight: bold;
        }

        nav {
            background-color: #f4de9b;
            border-bottom: 1px solid #e0c28c;
        }

        nav ul {
            list-style: none;
            text-align: center;
            padding: 1em 0;
        }

        nav li {
            display: inline-block;
            margin: 0 20px;
        }

        nav a {
            color: var(--cor-secundaria);
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav a:hover {
            color: var(--cor-destaque);
        }

        main {
            padding: 40px 20px 100px;
            text-align: center;
            max-width: 900px;
            margin: auto;
        }

        h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: var(--cor-secundaria);
        }

        .sobre-texto {
            background-color: var(--cor-branco);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .sobre-texto p {
            margin-bottom: 15px;
            font-size: 1.1em;
        }

        .imagem-sobre {
            width: 100%;
            max-width: 600px;
            border-radius: 10px;
            margin-top: 20px;
        }

        footer {
            background-color: var(--cor-secundaria);
            color: white;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        @media (max-width: 768px) {
            nav li {
                display: block;
                margin: 10px 0;
            }

            .sobre-texto {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
<header>
    <div style="display: flex; align-items: center; justify-content: center; gap:40px;">
        <img src="img/logo.jpg" alt="Logo Padaria Aconchego" style="height: 120px;">
        <div style="text-align: left;">
            <h1 style="margin: 0;">Padaria Aconchego</h1>
            <p style="margin: 5px 0 0 0;">Seu cantinho de pão quentinho e café fresco!</p>
        </div>
    </div>
</header>

<nav style="text-align: center;">
    <a href="{{ url('/bakery') }}" style="margin: 0 15px;">Produtos</a>
    <a href="{{ url('/sobre') }}" style="margin: 0 15px;">Sobre Nós</a>
    <a href="#" style="margin: 0 15px;">Carrinho</a>
    <a href="#" style="margin: 0 15px;">Contato</a>
</nav>

<main>
    <h2>Sobre Nós</h2>
    <div class="sobre-texto">
        <p>A Padaria Aconchego nasceu com o propósito de trazer mais sabor e carinho ao dia a dia das pessoas.</p>
        <p>Desde 1995, preparamos pães, bolos e cafés sempre fresquinhos, feitos com ingredientes de qualidade e muito amor.</p>
        <p>Nosso compromisso é oferecer produtos artesanais que resgatam memórias afetivas e criam momentos especiais para nossos clientes.</p>
        <p>Seja para o café da manhã, lanche da tarde ou encontros em família, queremos ser parte da sua rotina com o cheirinho de pão quentinho.</p>
       <img src="img/padaria.jpg" alt="padaria_local" style="height: 250px;">
    </div>
</main>

<footer>
    <p>© 2025 Padaria Aconchego. Todos os direitos reservados.</p>
</footer>
</body>
</html>