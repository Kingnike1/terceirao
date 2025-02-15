<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário de Eventos dos Terceiros 2K25</title>
    <?php
    require_once '../Templates/link.html';
    ?>
    <style>
        /* Configuração geral */
        body {
            background-color: #000;
            /* Branco */
            color: #FFF;
            /* Cinza escuro */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        /* Cabeçalho */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background-color: #991B1B;
            /* Vermelho escuro */
            border-bottom: 4px solid #F1D04D;
            /* Amarelo claro */
        }

        /* Logo */
        .logo {
            height: 100px;
            width: 100px;
            border-radius: 50%;
        }

        /* Menu de navegação */
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: flex;
            align-items: center;
        }


        /* Mensagem de boas-vindas */
        .event-message {
            background-color: #991B1B;
            /* Vermelho escuro */
            color: #FFFFFF;
            /* Branco */
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            padding: 15px;
            border-radius: 10px;
            border: 2px solid #F1D04D;
            /* Amarelo claro */
            box-shadow: 0 0 10px rgba(241, 208, 77, 0.5);
            max-width: 600px;
            margin: 20px auto;
            line-height: 1.5;
        }

        /* Estilização do calendário */
        table {
            width: 100%;
            max-width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #991B1B;
            /* Vermelho escuro */
            color: #FFFFFF;
            /* Branco */
        }

        th,
        td {
            border: 1px solid #F1D04D;
            /* Amarelo claro */
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #7A1313;
            /* Vermelho vinho */
        }

        .event {
            background-color: #D87C4B;
            /* Laranja queimado */
            color: #2C2C2C;
            /* Cinza escuro */
            font-weight: bold;
        }

        /* Seção de Contato */
        .contact-section {
            text-align: center;
            background-color: #991B1B;
            /* Vermelho escuro */
            color: #FFFFFF;
            /* Branco */
            padding: 20px;
            border-radius: 10px;
            max-width: 100%;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(241, 208, 77, 0.3);
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .contact-form label {
            font-weight: bold;
            text-align: left;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #F1D04D;
            /* Amarelo claro */
            border-radius: 5px;
            background-color: #7A1313;
            /* Vermelho vinho */
            color: white;
        }

        .contact-form button {
            background-color: #D87C4B;
            /* Laranja queimado */
            color: #2C2C2C;
            /* Cinza escuro */
            font-weight: bold;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #F1D04D;
            /* Amarelo claro */
            color: #991B1B;
            /* Vermelho escuro */
        }


        .frame {
            width: 90%;
            margin: 40px auto;
            text-align: center;
        }

        button {
            margin: 20px;
        }

        .custom-btn {
            width: 130px;
            height: 40px;
            color: #fff;
            border-radius: 5px;
            padding: 10px 25px;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            box-shadow: inset 2px 2px 2px 0px #00fffc,
                7px 7px 20px 0px rgba(0, 0, 0, .1),
                4px 4px 5px 0px rgba(0, 0, 0, .1);
            outline: none;
            text-align: center;
        }

        /* 12 */
        .btn-12 {
            position: relative;
            right: 20px;
            bottom: 20px;
            border: none;
            box-shadow: none;
            width: 130px;
            height: 40px;
            line-height: 42px;
            -webkit-perspective: 230px;
            perspective: 230px;
        }

        .btn-12 span {
            background: #000;
            display: block;
            font-weight: 800;
            position: absolute;
            width: 130px;
            height: 40px;
            box-shadow: inset 2px 2px 2px 0px #F1D04D,
                7px 7px 20px 0px rgba(0, 0, 0, .1),
                4px 4px 5px 0px rgba(0, 0, 0, .1);
            border-radius: 5px;
            margin: 0;
            text-align: center;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all .3s;
            transition: all .3s;
        }

        .btn-12 span:nth-child(1) {
            -webkit-transform: rotateX(90deg);
            -moz-transform: rotateX(90deg);
            transform: rotateX(90deg);
            -webkit-transform-origin: 50% 50% -20px;
            -moz-transform-origin: 50% 50% -20px;
            transform-origin: 50% 50% -20px;
        }

        .btn-12 span:nth-child(2) {
            -webkit-transform: rotateX(0deg);
            -moz-transform: rotateX(0deg);
            transform: rotateX(0deg);
            -webkit-transform-origin: 50% 50% -20px;
            -moz-transform-origin: 50% 50% -20px;
            transform-origin: 50% 50% -20px;
        }

        .btn-12:hover span:nth-child(1) {
            background-color: #00fffc;
            color: #000;
            font-weight: 800;
            box-shadow: inset 2px 2px 2px 0px #00fffc,
                7px 7px 20px 0px rgba(0, 0, 0, .1),
                4px 4px 5px 0px rgba(0, 0, 0, .1);
            -webkit-transform: rotateX(0deg);
            -moz-transform: rotateX(0deg);
            transform: rotateX(0deg);
        }

        .btn-12:hover span:nth-child(2) {
            background-color: #00fffc;
            color: #000;
            font-weight: 800;
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
                7px 7px 20px 0px rgba(0, 0, 0, .1),
                4px 4px 5px 0px rgba(0, 0, 0, .1);
            color: transparent;
            -webkit-transform: rotateX(-90deg);
            -moz-transform: rotateX(-90deg);
            transform: rotateX(-90deg);
        }
    </style>
</head>

<body>
    <header>
        <img src="../tas.jpg" alt="Logo dos Terceiros de Meio Ambiente 2K25"
            class="logo">
        <nav>
            <ul>
                <li>
                    <div height="100px" widht="100px">
                        <?php include '../Templates/claro_escuro.html'; ?>
                    </div>
                </li>
                <li><a href="#eventos" class="custom-btn btn-12"><span>Eventos</span><span>Confira!</span></a></li>
                <li><a href="#sobre" class="custom-btn btn-12"><span>Sobre Nós</span><span>Saiba Mais</span></a></li>
                <li><a href="#contato" class="custom-btn btn-12"><span>Contato</span><span>Fale Conosco</span></a></li>

            </ul>
        </nav>
    </header>

    <main>

        <section id="sobre">
            <h2>Sobre Nós</h2>
            <p class="event-message">
                Olá, calouros! Aqui quem fala são os Terceiro de
                Agropecuria. Sejam bem-vindos ao nosso calendário oficial de
                eventos! 🎉
                <br><br>
                Fiquem atentos, porque este será o nosso canal para divulgar
                todas as atividades, desafios e momentos épicos que
                preparamos para vocês ao longo do ano. Desde trotes
                inesquecíveis até eventos temáticos, tudo estará registrado
                aqui com datas e detalhes.
                <br><br>
                Preparem-se para muita diversão, integração e, claro,
                surpresas! Não deixem de acompanhar para não perder nada.
                🚀🔥
            </p>

        </section>
        <h2>Calendário de Eventos dos Terceiros 2K25</h2>
        <!-- Calendário -->
        <table id="eventos">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Evento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>24/02/2025</td>
                    <td class="event">Trote da Fantasia</td>
                </tr>
                <tr>
                    <td>25/02/2025</td>
                    <td class="event">Dia do Pijama</td>
                </tr>
                <tr>
                    <td>26/02/2025</td>
                    <td class="event">Gincana dos Terceiros</td>
                </tr>
                <tr>
                    <td>27/02/2025</td>
                    <td class="event">Festa Junina</td>
                </tr>
                <tr>
                    <td>28/02/2025</td>
                    <td class="event">Calourada</td>
                </tr>
            </tbody>
        </table>

        <section class="contact-section">
            <h2>Contato</h2>
            <p>Entre em contato conosco:</p>

            <form class="contact-form">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name"
                    placeholder="Seu nome" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email"
                    placeholder="Seu e-mail" required>

                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" rows="4"
                    placeholder="Digite sua mensagem" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </section>

    </main>
</body>

</html>
