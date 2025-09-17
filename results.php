<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual - Biblioteca de Jogos PS2</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1a1a1a;
            background-image: 
                linear-gradient(rgba(50, 50, 50, 0.3) 1px, transparent 1px),
                linear-gradient(90deg, rgba(50, 50, 50, 0.3) 1px, transparent 1px);
            background-size: 20px 20px;
            color: #e0e0e0;
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: rgba(40, 35, 45, 0.8);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        }

        header {
            text-align: center;
            margin-bottom: 40px;
        }

        h1 {
            font-size: 2.8rem;
            margin-bottom: 15px;
            color: #ffffff;
            background: linear-gradient(135deg, #8e6b9e 0%, #594461 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .back-btn {
            display: inline-block;
            margin-bottom: 30px;
            padding: 10px 20px;
            background: linear-gradient(135deg, #6b8e9e 0%, #455964 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        h2 {
            color: #8e6b9e;
            margin: 30px 0 15px;
            border-bottom: 2px solid #594461;
            padding-bottom: 10px;
        }

        h3 {
            color: #c9b1d3;
            margin: 20px 0 10px;
        }

        p, ul, ol {
            margin-bottom: 20px;
            color: #e0e0e0;
        }

        ul, ol {
            padding-left: 30px;
        }

        li {
            margin-bottom: 10px;
        }

        .highlight {
            background: rgba(142, 107, 158, 0.2);
            padding: 15px;
            border-radius: 10px;
            border-left: 4px solid #8e6b9e;
        }

        footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            color: #8e6b9e;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            
            h1 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="index.html" class="back-btn">Voltar para a Página Inicial</a>
        
        <header>
            <h1>Manual do Usuário</h1>
            <p>Guia completo para utilizar a Biblioteca de Jogos PS2</p>
        </header>

        <section>
            <h2>Como Navegar na Biblioteca</h2>
            <p>Nossa biblioteca oferece uma maneira fácil e intuitiva de explorar o catálogo de jogos do PlayStation 2.</p>
            
            <h3>Pesquisa de Jogos</h3>
            <p>Na página de pesquisa, você pode:</p>
            <ul>
                <li>Digitar o nome de um jogo na barra de pesquisa</li>
                <li>Filtrar por gênero (Ação, Aventura, RPG, etc.)</li>
                <li>Filtrar por ano de lançamento</li>
            </ul>
            
            <div class="highlight">
                <p><strong>Dica:</strong> Use vários filtros simultaneamente para encontrar jogos mais específicos!</p>
            </div>
        </section>

        <section>
            <h2>Informações dos Jogos</h2>
            <p>Cada jogo em nossa biblioteca contém as seguintes informações:</p>
            <ol>
                <li>Título completo do jogo</li>
                <li>Ano de lançamento</li>
                <li>Gênero principal</li>
                <li>Classificação por estrelas</li>
                <li>Descrição resumida</li>
            </ol>
        </section>

        <section>
            <h2>Recursos Adicionais</h2>
            <h3>Favoritos</h3>
            <p>Em breve, implementaremos um sistema de favoritos para que você possa marcar seus jogos preferidos e acessá-los rapidamente.</p>
            
            <h3>Listas Personalizadas</h3>
            <p>Também estamos desenvolvendo a funcionalidade de criar listas personalizadas de jogos, como "Melhores jogos de corrida" ou "Clássicos para revisitar".</p>
        </section>

        <section>
            <h2>Dúvidas Frequentes</h2>
            <h3>Os jogos estão disponíveis para download?</h3>
            <p>Não, nossa biblioteca é apenas um catálogo informativo sobre os jogos do PS2. Não fornecemos downloads de jogos.</p>
            
            <h3>Como posso sugerir a adição de um jogo?</h3>
            <p>Entre em contato conosco pela página de contato (em desenvolvimento) para sugerir a adição de jogos que não estão em nosso catálogo.</p>
        </section>
    </div>

    <footer>
        <p>Biblioteca de Jogos PS2 &copy; 2023 - Manual do Usuário</p>
    </footer>
</body>
</html>
