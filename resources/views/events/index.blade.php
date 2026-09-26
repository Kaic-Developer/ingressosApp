<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>IngressosApp | Encontre seu próximo evento</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #6d28d9;
            --primary-dark: #5b21b6;
            --primary-light: #ede9fe;

            --dark: #111827;
            --text: #1f2937;
            --muted: #6b7280;

            --background: #f7f7fa;
            --surface: #ffffff;
            --border: #e5e7eb;

            --radius: 16px;
        }

        body {
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont,
                         "Segoe UI", sans-serif;

            background: var(--background);
            color: var(--text);
        }

        a {
            text-decoration: none;
            color: inherit;
        }


        /* ==================================================
           HEADER
        ================================================== */

        .header {
            background: white;
            border-bottom: 1px solid var(--border);

            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-container {
            max-width: 1200px;
            margin: auto;
            padding: 17px 24px;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .brand {
            font-size: 23px;
            font-weight: 900;
            color: var(--dark);
            white-space: nowrap;
        }

        .brand span {
            color: var(--primary);
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav a {
            font-size: 14px;
            font-weight: 600;
            color: #4b5563;
            transition: .2s;
        }

        .nav a:hover {
            color: var(--primary);
        }

        .login-button {
            padding: 9px 15px;
            border-radius: 8px;
            background: var(--primary-light);
            color: var(--primary) !important;
        }


        /* ==================================================
           HERO
        ================================================== */

        .hero {
            background:
                radial-gradient(circle at 15% 20%, rgba(124, 58, 237, .22), transparent 25%),
                radial-gradient(circle at 85% 30%, rgba(79, 70, 229, .20), transparent 28%),
                linear-gradient(135deg, #111827, #1e1b4b);

            color: white;
        }

        .hero-container {
            max-width: 1200px;
            margin: auto;

            padding: 75px 24px 85px;

            text-align: center;
        }

        .hero-badge {
            display: inline-block;

            padding: 7px 13px;

            border-radius: 30px;

            background: rgba(255, 255, 255, .1);
            border: 1px solid rgba(255, 255, 255, .15);

            font-size: 13px;
            font-weight: 600;

            margin-bottom: 20px;
        }

        .hero h1 {
            max-width: 750px;
            margin: auto;

            font-size: clamp(36px, 6vw, 60px);
            line-height: 1.05;

            letter-spacing: -2px;
        }

        .hero h1 span {
            color: #c4b5fd;
        }

        .hero-description {
            max-width: 600px;
            margin: 20px auto 0;

            color: #d1d5db;

            font-size: 17px;
            line-height: 1.6;
        }


        /* ==================================================
           PESQUISA
        ================================================== */

        .search-box {
            max-width: 780px;
            margin: 35px auto 0;

            background: white;

            padding: 8px;

            border-radius: 13px;

            display: flex;
            gap: 8px;

            box-shadow: 0 20px 40px rgba(0,0,0,.25);
        }

        .search-field {
            flex: 1;

            display: flex;
            align-items: center;
            gap: 10px;

            padding: 0 14px;
        }

        .search-field input {
            width: 100%;

            border: 0;
            outline: 0;

            font-size: 14px;
            color: var(--text);
        }

        .location {
            border-left: 1px solid var(--border);
        }

        .location select {
            border: 0;
            outline: 0;
            background: transparent;

            padding: 12px;

            color: #4b5563;
        }

        .search-button {
            border: 0;
            cursor: pointer;

            background: var(--primary);
            color: white;

            padding: 13px 23px;

            border-radius: 9px;

            font-weight: 700;

            transition: .2s;
        }

        .search-button:hover {
            background: var(--primary-dark);
        }


        /* ==================================================
           CONTEÚDO
        ================================================== */

        .container {
            max-width: 1200px;
            margin: auto;

            padding: 55px 24px 80px;
        }

        .section-header {
            display: flex;
            align-items: end;
            justify-content: space-between;

            margin-bottom: 27px;
        }

        .section-title h2 {
            font-size: 28px;
            color: var(--dark);

            margin-bottom: 6px;
        }

        .section-title p {
            color: var(--muted);
            font-size: 14px;
        }

        .see-all {
            color: var(--primary);
            font-size: 14px;
            font-weight: 700;
        }


        /* ==================================================
           FILTROS
        ================================================== */

        .filters {
            display: flex;
            gap: 10px;

            margin-bottom: 30px;

            overflow-x: auto;
            padding-bottom: 5px;
        }

        .filter {
            border: 1px solid var(--border);
            background: white;

            padding: 9px 16px;

            border-radius: 30px;

            font-size: 13px;
            font-weight: 600;

            white-space: nowrap;

            cursor: pointer;

            transition: .2s;
        }

        .filter:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        .filter.active {
            background: var(--primary);
            border-color: var(--primary);
            color: white;
        }


        /* ==================================================
           EVENTOS
        ================================================== */

        .events-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }

        .event-card {
            background: white;

            border: 1px solid var(--border);
            border-radius: var(--radius);

            overflow: hidden;

            transition: .25s;

            box-shadow: 0 3px 12px rgba(0, 0, 0, .035);
        }

        .event-card:hover {
            transform: translateY(-5px);

            box-shadow: 0 15px 35px rgba(17, 24, 39, .10);
        }


        /* IMAGEM FICTÍCIA */

        .event-image {
            height: 210px;

            position: relative;

            display: flex;
            align-items: center;
            justify-content: center;

            overflow: hidden;
        }

        .event-image-1 {
            background:
                linear-gradient(rgba(17,24,39,.15), rgba(17,24,39,.5)),
                linear-gradient(135deg, #7c3aed, #ec4899);
        }

        .event-image-2 {
            background:
                linear-gradient(rgba(17,24,39,.15), rgba(17,24,39,.5)),
                linear-gradient(135deg, #2563eb, #06b6d4);
        }

        .event-image-3 {
            background:
                linear-gradient(rgba(17,24,39,.15), rgba(17,24,39,.5)),
                linear-gradient(135deg, #f97316, #ef4444);
        }

        .image-placeholder {
            color: rgba(255,255,255,.8);

            font-size: 13px;
            font-weight: 600;

            border: 1px solid rgba(255,255,255,.25);

            padding: 8px 12px;

            border-radius: 8px;
        }

        .event-category {
            position: absolute;

            top: 15px;
            left: 15px;

            background: rgba(255,255,255,.92);

            color: var(--dark);

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 11px;
            font-weight: 700;
        }


        /* CONTEÚDO CARD */

        .event-content {
            padding: 21px;
        }

        .event-date {
            color: var(--primary);

            font-size: 12px;
            font-weight: 800;

            text-transform: uppercase;

            margin-bottom: 9px;
        }

        .event-title {
            font-size: 19px;
            font-weight: 800;

            color: var(--dark);

            margin-bottom: 10px;
        }

        .event-location {
            color: var(--muted);

            font-size: 13px;

            margin-bottom: 20px;
        }

        .event-footer {
            border-top: 1px solid var(--border);

            padding-top: 17px;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }

        .price-label {
            color: var(--muted);
            font-size: 11px;
        }

        .price {
            font-size: 17px;
            font-weight: 800;
            color: var(--dark);
        }

        .event-button {
            background: var(--primary);

            color: white;

            padding: 10px 15px;

            border-radius: 8px;

            font-size: 12px;
            font-weight: 700;

            transition: .2s;
        }

        .event-button:hover {
            background: var(--primary-dark);
        }


        /* ==================================================
           CHAMADA
        ================================================== */

        .organizer {
            margin-top: 70px;

            background: var(--dark);
            color: white;

            padding: 45px;

            border-radius: 20px;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .organizer h2 {
            font-size: 25px;
            margin-bottom: 8px;
        }

        .organizer p {
            color: #9ca3af;
            line-height: 1.6;
        }

        .organizer-button {
            flex-shrink: 0;

            background: white;
            color: var(--dark);

            padding: 12px 20px;

            border-radius: 9px;

            font-size: 13px;
            font-weight: 700;
        }


        /* ==================================================
           FOOTER
        ================================================== */

        footer {
            background: white;
            border-top: 1px solid var(--border);
        }

        .footer-container {
            max-width: 1200px;
            margin: auto;

            padding: 30px 24px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            color: var(--muted);
            font-size: 12px;
        }


        /* ==================================================
           RESPONSIVO
        ================================================== */

        @media (max-width: 900px) {

            .events-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .organizer {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 650px) {

            .nav {
                display: none;
            }

            .hero-container {
                padding-top: 55px;
            }

            .hero h1 {
                letter-spacing: -1px;
            }

            .search-box {
                flex-direction: column;
            }

            .search-field {
                min-height: 45px;
            }

            .location {
                border-left: 0;
                border-top: 1px solid var(--border);
            }

            .location select {
                width: 100%;
            }

            .events-grid {
                grid-template-columns: 1fr;
            }

            .section-header {
                align-items: flex-start;
            }

            .see-all {
                display: none;
            }

            .organizer {
                padding: 30px;
            }

            .footer-container {
                flex-direction: column;
                gap: 10px;
            }
        }

    </style>
</head>

<body>


<!-- ==================================================
     HEADER
================================================== -->

<header class="header">

    <div class="header-container">

        <a href="#" class="brand">
            Ingressos<span>App</span>
        </a>

        <nav class="nav">

            <a href="#">
                Eventos
            </a>

            <a href="#">
                Meus ingressos
            </a>

            <a href="#" class="login-button">
                Entrar
            </a>

        </nav>

    </div>

</header>



<!-- ==================================================
     HERO
================================================== -->

<section class="hero">

    <div class="hero-container">

        <div class="hero-badge">
            🎟 Eventos, festas e experiências
        </div>

        <h1>
            Seu próximo momento
            <span>inesquecível</span>
            começa aqui.
        </h1>

        <p class="hero-description">
            Descubra os melhores eventos da sua região
            e garanta seu ingresso de forma simples e rápida.
        </p>


        <!-- BUSCA VISUAL - AINDA NÃO FUNCIONA -->

        <div class="search-box">

            <div class="search-field">

                <span>🔎</span>

                <input
                    type="text"
                    placeholder="Busque por evento, festa ou artista"
                >

            </div>


            <div class="location">

                <select>

                    <option>
                        Todas as cidades
                    </option>

                    <option>
                        Rio Verde - GO
                    </option>

                    <option>
                        Goiânia - GO
                    </option>

                </select>

            </div>


            <button class="search-button">
                Buscar
            </button>

        </div>

    </div>

</section>



<!-- ==================================================
     EVENTOS
================================================== -->

<main class="container">


    <div class="section-header">

        <div class="section-title">

            <h2>
                Próximos eventos
            </h2>

            <p>
                Escolha uma experiência e garanta seu ingresso.
            </p>

        </div>

        <a href="#" class="see-all">
            Ver todos →
        </a>

    </div>



    <!-- FILTROS VISUAIS -->

    <div class="filters">

        <button class="filter active">
            Todos
        </button>

        <button class="filter">
            Festas
        </button>

        <button class="filter">
            Shows
        </button>

        <button class="filter">
            Sertanejo
        </button>

        <button class="filter">
            Eletrônica
        </button>

        <button class="filter">
            Outros
        </button>

    </div>



    <!-- ==================================================
         CARDS FICTÍCIOS

         Esses dados são SOMENTE frontend.
         Depois você vai substituir pelo Laravel.
    ================================================== -->

    <div class="events-grid">


        <!-- EVENTO 1 -->

        <article class="event-card">

            <div class="event-image event-image-1">

                <span class="event-category">
                    FESTA
                </span>

                <span class="image-placeholder">
                    Imagem do evento
                </span>

            </div>


            <div class="event-content">

                <div class="event-date">
                    15 NOV • 20:00
                </div>

                <h3 class="event-title">
                    Sunset Festival
                </h3>

                <div class="event-location">
                    📍 Parque de Exposições • Rio Verde - GO
                </div>


                <div class="event-footer">

                    <div>

                        <div class="price-label">
                            A partir de
                        </div>

                        <div class="price">
                            R$ 50,00
                        </div>

                    </div>


                    <a href="#" class="event-button">
                        Ver evento
                    </a>

                </div>

            </div>

        </article>



        <!-- EVENTO 2 -->

        <article class="event-card">

            <div class="event-image event-image-2">

                <span class="event-category">
                    SHOW
                </span>

                <span class="image-placeholder">
                    Imagem do evento
                </span>

            </div>


            <div class="event-content">

                <div class="event-date">
                    05 DEZ • 22:00
                </div>

                <h3 class="event-title">
                    Open Bar Experience
                </h3>

                <div class="event-location">
                    📍 Arena Music • Goiânia - GO
                </div>


                <div class="event-footer">

                    <div>

                        <div class="price-label">
                            A partir de
                        </div>

                        <div class="price">
                            R$ 80,00
                        </div>

                    </div>


                    <a href="#" class="event-button">
                        Ver evento
                    </a>

                </div>

            </div>

        </article>



        <!-- EVENTO 3 -->

        <article class="event-card">

            <div class="event-image event-image-3">

                <span class="event-category">
                    RÉVEILLON
                </span>

                <span class="image-placeholder">
                    Imagem do evento
                </span>

            </div>


            <div class="event-content">

                <div class="event-date">
                    31 DEZ • 21:00
                </div>

                <h3 class="event-title">
                    Réveillon 2027
                </h3>

                <div class="event-location">
                    📍 Espaço Prime • Rio Verde - GO
                </div>


                <div class="event-footer">

                    <div>

                        <div class="price-label">
                            A partir de
                        </div>

                        <div class="price">
                            R$ 120,00
                        </div>

                    </div>


                    <a href="#" class="event-button">
                        Ver evento
                    </a>

                </div>

            </div>

        </article>


    </div>



    <!-- ==================================================
         ORGANIZADOR
    ================================================== -->

    <section class="organizer">

        <div>

            <h2>
                Você organiza eventos?
            </h2>

            <p>
                Publique seus eventos, gerencie seus ingressos
                e acompanhe suas vendas em um só lugar.
            </p>

        </div>


        <a href="#" class="organizer-button">
            Quero vender ingressos
        </a>

    </section>


</main>



<!-- ==================================================
     FOOTER
================================================== -->

<footer>

    <div class="footer-container">

        <div>
            © 2026 IngressosApp
        </div>

        <div>
            Compra segura • Ingressos digitais
        </div>

    </div>

</footer>


</body>
</html>