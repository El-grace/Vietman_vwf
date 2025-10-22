<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top_bar</title>

    <style>
        :root {
            --rouge: #DC2626;
            --bleu: #1D9BF0;
            --font: 'Roboto', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font);
        }

        header {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
        }

        .logo-icon {
            width: 50px;
        }

        .logo-icon img {
            width: 100%;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
            align-items: center;
        }

        /* Liens */
        .nav-links a {
            color: var(--bleu);
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            position: relative;
            transition: color 0.4s ease, opacity 0.4s ease, transform 0.4s ease;
        }

        .nav-links a:hover {
            opacity: 0.3;
            transform: translateY(-1px);
        }

        .nav-links a.active-link {
            color: var(--rouge);
        }

        .nav-links a.active-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 100%;
            height: 3px;
            background-color: var(--rouge);
            border-radius: 3px;
            opacity: 1;
            transition: width 0.4s ease, opacity 0.4s ease;
        }

        /* Effet d’apparition fluide de la barre rouge */
        .nav-links a:not(.active-link)::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 0;
            height: 3px;
            background-color: var(--rouge);
            border-radius: 3px;
            opacity: 0;
            transition: width 0.4s ease, opacity 0.4s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
            opacity: 1;
        }


        .lang-switch {
            display: flex;
            gap: 0.5rem;
        }

        .lang-button {
            background: white;
            color: var(--rouge);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: bold;
            cursor: pointer;
            border: none;
            transition: transform 0.3s, background-color 0.3s;
        }

        .lang-button:hover {
            transform: scale(1.05);
            background-color: var(--rouge);
            color: white;
        }

        .lang-button.active {
            background-color: var(--bleu);
            color: white;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: var(--bleu);
            transition: all 0.3s ease;
        }

        @media (max-width: 900px) {
            .nav-links {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: white;
                flex-direction: column;
                overflow: hidden;
                max-height: 0;
            }

            .nav-links.show {
                max-height: 500px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            }

            .hamburger {
                display: flex;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <div class="logo-icon">
                    <img src="images/logo_vwf.png" alt="logo_vwf">
                </div>
            </div>
            <ul class="nav-links">
                <li><a href="index.php" data-key="home">Accueil</a></li>
                <li><a href="apropos.php" data-key="about">À Propos</a></li>
                <li><a href="actualites.php" data-key="news">Actualités</a></li>
                <li><a href="contact.php" data-key="contact">Contact</a></li>
                <li>
                    <div class="lang-switch">
                        <button class="lang-button active" data-lang="fr">FR</button>
                        <button class="lang-button" data-lang="en">EN</button>
                    </div>
                </li>
            </ul>
            <div class="hamburger" id="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </nav>
    </header>

    <script>
        // Traduction
        const translations = {
            fr: {
                home: "Accueil",
                about: "À Propos",
                news: "Actualités",
                contact: "Contact"
            },
            en: {
                home: "Home",
                about: "About",
                news: "News",
                contact: "Contact"
            }
        };

        function updateLanguage(lang) {
            document.querySelectorAll('.nav-links a[data-key]').forEach(link => {
                const key = link.getAttribute('data-key');
                link.textContent = translations[lang][key];
            });
            document.querySelectorAll('.lang-button').forEach(button => {
                button.classList.toggle('active', button.getAttribute('data-lang') === lang);
            });
            document.documentElement.lang = lang;
        }

        document.querySelectorAll('.lang-button').forEach(button => {
            button.addEventListener('click', () => {
                const lang = button.getAttribute('data-lang');
                updateLanguage(lang);
            });
        });

        updateLanguage('fr');

        // Détecte la page active
        const navLinks = document.querySelectorAll(".nav-links a");
        const currentPage = window.location.pathname.split("/").pop(); // récupère le nom du fichier

        navLinks.forEach(link => {
            if (link.getAttribute("href") === currentPage) {
                link.classList.add("active-link");
            }
        });

        // Hamburger toggle
        const hamburger = document.getElementById("hamburger");
        const nav = document.querySelector(".nav-links");

        hamburger.addEventListener("click", () => {
            nav.classList.toggle("show");
        });
    </script>
</body>

</html>