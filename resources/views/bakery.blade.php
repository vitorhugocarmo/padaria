<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padaria Aconchego</title>
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
            color: var(--cor-secundaria); /* Alterado para a cor mais escura */
            font-weight: bold; /* Adicionado para deixar em negrito */
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
        }

        h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: var(--cor-secundaria);
        }

        .product-section {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .product-card {
            background-color: var(--cor-branco);
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 300px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .image {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
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
            .product-card {
                width: 90%;
            }

            nav li {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
<header>
    <div style="display: flex; align-items: center; justify-content: center; gap:40px;">
        <!-- Logo maior no canto esquerdo -->
        <img src="img/logo.jpg" alt="Logo Padaria Aconchego" style="height: 120px;">

        <!-- Título e slogan alinhados ao lado da logo -->
        <div style="text-align: left;- margin-top: -40px;">
            <h1 style="margin: 0;">Padaria Aconchego</h1>
            <p style="margin: 5px 0 0 0;">Seu cantinho de pão quentinho e café fresco!</p>
        </div>
    </div>
</header>

<nav style="text-align: center;">
    <a href="#" style="margin: 0 15px;">Produtos</a>
    <a href="#" style="margin: 0 15px;">Sobre Nós</a>
    <a href="#" style="margin: 0 15px;">Carrinho</a>
    <a href="#" style="margin: 0 15px;">Contato</a>
</nav>


   
    <main id="produtos">
        <h2>Nossos Produtos</h2>
        <div class="product-section">
            <div class="product-card">
                <h3>Pão Francês</h3>
                <img src="img/pao_frances.jpg" alt="Pão Francês" class="image">
                <p>O clássico de todo dia, crocante por fora e macio por dentro.</p>
            </div>
            <div class="product-card">
                <h3>Croissant de Chocolate</h3>
                <img src="img/croissant.jpg" alt="Croissant de Chocolate" class="image">
                <p>Massa folhada com recheio de chocolate belga. Irresistível!</p>
            </div>
            <div class="product-card">
                <h3>Torta de Frango</h3>
                <img src="img/torta.jpg" alt="Torta de Frango" class="image">
                <p>Torta artesanal com frango desfiado e recheio cremoso.</p>
            </div>
            <div class="product-card">
                <h3>Café fresco</h3>
                <img src="img/Cafe.jpg" alt="Cafe" class="image">
                <p>Feito com grãos frescos e torra especial. O aroma e sabor perfeitos para o seu dia.</p>
            </div>
            
        </div>
    </main>

    <footer>
        <p>© 2025 Padaria Aconchego. Todos os direitos reservados.</p>
    </footer>
</body>
</html>