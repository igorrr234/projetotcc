<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/padrao.css">
    <title>Cursos de Design Gráfico - Aprenda Fácil</title>
    <link rel="icon" href="../public/img/a.png">
    <style>
        /* Reset de estilos padrão do navegador */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilo do corpo da página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Estilo do cabeçalho */
        header {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
        }

        .logo img {
            width: 80px;
        }

        .logo h1 {
            font-size: 40px;
            margin-left: 10px;
        }

        /* Estilo do conteúdo */
        #conteudo-cursos {
            padding: 40px;
        }

        #conteudo-cursos h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .cursos-disponiveis {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
        }

        .curso {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
        }

        .curso:hover{
            cursor: pointer;
        }
        
        .curso img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }

        .curso h3 {
            font-size: 1.5rem;
            margin: 10px 0;
        }

        .curso p {
            font-size: 1rem;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header>
        <table>
            <tr>
                <td>
                    <div class="logo">
                        <img src="../public/img/a.png" alt="Logo da Plataforma">
                    </div>
                </td>
                <td>
                    <h1>Aprenda Fácil</h1>
                </td>
            </tr>
        </table>
    </header>

    <section id="conteudo-cursos">
        <h1>Design Gráfico</h1>

        <div class="cursos-disponiveis">
            <!-- Curso de Design Gráfico para Iniciantes -->
            <div class="curso">
                <img src="img/design_basico.jpg" alt="Curso de Design Gráfico para Iniciantes">
                <h3>Curso de Design Gráfico para Iniciantes</h3>
                <p>Este curso é ideal para pessoas que estão começando no mundo do design gráfico. Ele cobre os conceitos básicos, como núcleos, tipografia e uso de software de design.</p>
            </div>

            <!-- Curso de Adobe Illustrator -->
            <div class="curso">
                <img src="img/illustrator.jpg" alt="Curso de Adobe Illustrator">
                <h3>Curso de Adobe Illustrator</h3>
                <p>O Adobe Illustrator é uma ferramenta amplamente utilizada para design gráfico vetorial. Existem muitos cursos disponíveis que ensinam desde o básico até técnicas avançadas de ilustração.</p>
            </div>

            <!-- Curso de Adobe Photoshop -->
            <div class="curso">
                <img src="img/photoshop.jpg" alt="Curso de Adobe Photoshop">
                <h3>Curso de Adobe Photoshop</h3>
                <p>O Photoshop é amplamente utilizado para edição de fotos e design gráfico. Os cursos variam desde a edição de fotos até a criação de composições complexas.</p>
            </div>

            <!-- Curso de Design de Logotipos -->
            <div class="curso">
                <img src="img/logotipos.jpg" alt="Curso de Design de Logotipos">
                <h3>Curso de Design de Logotipos</h3>
                <p>Se você estiver interessado em criar logotipos, há cursos específicos que abordam os princípios de design de logotipos e as melhores práticas.</p>
            </div>

            <!-- Curso de Design de Mídias Sociais -->
            <div class="curso">
                <img src="img/midias_sociais.jpg" alt="Curso de Design de Mídias Sociais">
                <h3>Curso de Design de Mídias Sociais</h3>
                <p>Este curso é direcionado a designers que desejam criar conteúdo para plataformas de mídia social. Ele aborda o dimensionamento de imagens, o uso de tipografia eficaz e o design de mensagens disponíveis.</p>
            </div>

            <!-- Curso de Design de Embalagens -->
            <div class="curso">
                <img src="img/embalagens.jpg" alt="Curso de Design de Embalagens">
                <h3>Curso de Design de Embalagens</h3>
                <p>Se você deseja criar designs de embalagens propostas para produtos, existem cursos que ensinam a criar rótulos, caixas e embalagens de produtos.</p>
            </div>

            <!-- Curso de Design de Sites -->
            <div class="curso">
                <img src="img/sites.jpg" alt="Curso de Design de Sites">
                <h3>Curso de Design de Sites</h3>
                <p>Embora o design de sites tenha aspectos de design de interface do usuário, também é um subcampo de design gráfico. Os cursos nessa categoria cobrem o design de layouts de sites e interfaces de usuário interessantes.</p>
            </div>

            <!-- Curso de Animação Gráfica -->
            <div class="curso">
                <img src="img/animacao.jpg" alt="Curso de Animação Gráfica">
                <h3>Curso de Animação Gráfica</h3>
                <p>Se você estiver interessado em animação, há cursos de design gráfico que ensinam a criar animações 2D e 3D.</p>
            </div>
        </div>
    </section>
</body>

</html>