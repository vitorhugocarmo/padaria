<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Padaria Aconchego</title>
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
            font-weight: bold;
        }

        nav {
            background-color: #f4de9b;
            border-bottom: 1px solid #e0c28c;
        }

        nav a {
            color: var(--cor-secundaria);
            text-decoration: none;
            font-weight: bold;
            margin: 0 15px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: var(--cor-destaque);
        }

        main {
            padding: 40px 20px 100px;
            max-width: 700px;
            margin: auto;
        }

        h2 {
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            background-color: var(--cor-branco);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1em;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        button {
            background-color: var(--cor-primaria);
            color: var(--cor-secundaria);
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: var(--cor-destaque);
            color: var(--cor-branco);
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
    </style>
</head>
<body>
<header>
    <div style="display: flex; align-items: center; justify-content: center; gap:40px;">
        <img src="{{ asset('imagens/logo.jpg') }}" alt="Logo Padaria Aconchego" style="height: 120px;">
        <div style="text-align: left;">
            <h1>Padaria Aconchego</h1>
            <p>Seu cantinho de pão quentinho e café fresco!</p>
        </div>
    </div>
</header>

<nav style="text-align:center;">
    <a href="{{ url('/bakery') }}">Produtos</a>
    <a href="{{ url('/sobre') }}">Sobre Nós</a>
    <a href="{{ url('/contato') }}">Contato</a>
    <a href="{{ url('/contato') }}">Carrinho</a>
</nav>

<main>
    <h2>Fale Conosco</h2>
    <form method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome">

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail">

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone">

        <button type="submit">Enviar</button>
    </form>
</main>


<footer>
    <p>© 2025 Padaria Aconchego. Todos os direitos reservados.</p>
</footer>
</body>
</html>
