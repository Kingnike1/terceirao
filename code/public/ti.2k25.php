<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário de Eventos dos Terceiros 2K25</title>
    <?php
    include '../Templates/link.html';
    ?>
    <style>
        body {
            background-color: black;
            color: aliceblue;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #222;
        }

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


        main {
            padding: 20px;
            text-align: center;
        }

        .logo {
            height: 100px;
            width: 100px;
        }

        /* Estilos do calendário */
        table {
            width: 100%;
            max-width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #333;
            color: white;
        }

        th,
        td {
            border: 1px solid #555;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #444;
        }

        .event {
            background-color: #ff5733;
            color: white;
            font-weight: bold;
        }

        .event-message {
            background-color: #222;
            /* Fundo escuro para destacar */
            color: #ffcc00;
            /* Cor do texto em amarelo para chamar atenção */
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            padding: 15px;
            border-radius: 10px;
            border: 2px solid #ff5733;
            /* Borda laranja para destaque */
            box-shadow: 0 0 10px rgba(255, 87, 51, 0.8);
            max-width: 600px;
            margin: 20px auto;
            line-height: 1.5;
        }

        .contact-section {
            text-align: center;
            background-color: #222;
            color: aliceblue;
            padding: 20px;
            border-radius: 10px;
            max-width: 100%;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
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
            border: 1px solid #ffcc00;
            border-radius: 5px;
            background-color: #333;
            color: white;
        }

        .contact-form button {
            background-color: #ff5733;
            color: white;
            font-weight: bold;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #ff2e00;
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



        /* 3 */
        .btn-3 {
            color: #fff;
            font-weight: 800;
            background: transparent;
            width: 130px;
            height: 40px;
            line-height: 42px;
            padding: 0;
            border: none;
            text-align: center;
        }

        .btn-3 span {
            position: relative;
            display: block;
            width: 100%;
            height: 100%;
        }

        .btn-3:before,
        .btn-3:after {
            position: absolute;
            content: "";
            right: 0;
            top: 0;
            background: #00fffc;
            transition: all 0.3s ease;
        }

        .btn-3:before {
            height: 0%;
            width: 2px;
        }

        .btn-3:after {
            width: 0%;
            height: 2px;
        }

        .btn-3:hover {
            background: transparent;
            box-shadow: none;
        }

        .btn-3:hover:before {
            height: 100%;
        }

        .btn-3:hover:after {
            width: 100%;
        }

        .btn-3 span:hover {
            color: #00fffc;
        }

        .btn-3 span:before,
        .btn-3 span:after {
            position: absolute;
            content: "";
            left: 0;
            bottom: 0;
            background: #00fffc;
            transition: all 0.3s ease;
        }

        .btn-3 span:before {
            width: 2px;
            height: 0%;
        }

        .btn-3 span:after {
            width: 0%;
            height: 2px;
        }

        .btn-3 span:hover:before {
            height: 100%;
        }

        .btn-3 span:hover:after {
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <img src="../ti.jpg" alt="Logo dos Terceiros de Informática 2K25"
            class="logo">
        <nav>
            <ul>
                <li>
                    <div height="100px" widht="100px">
                        <?php include '../Templates/claro_escuro.html'; ?>
                    </div>
                </li>
                <li><a href="#eventos" class="custom-btn btn-3">Eventos</a></li>
                <li><a href="#sobre" class="custom-btn btn-3">Sobre Nós</a></li>
                <li><a href="#contato" class="custom-btn btn-3">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <section id="sobre">
            <h2>Sobre Nós</h2>
            <p class="event-message">
                Olá, calouros! Aqui quem fala são os terceiros de
                Informática. Sejam bem-vindos ao nosso calendário oficial de
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
        <h2 id="eventos">Calendário de Eventos dos Terceiros 2K25</h2>
        <!-- Calendário -->
        <table>
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
            <h2 id="contato">Contato</h2>
            <p>Entre em contato conosco:</p>

            <form class="contact-form">
                <label for="name">Nome:</label>
                <weird-input name="test"
                    v-model="message"></weird-input>

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
