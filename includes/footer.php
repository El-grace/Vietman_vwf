<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Footer</title>
    <style>
        :root {
            --rouge: #DC2626;
            --bleu: #1D9BF0;
            --color_titre: #3D5A98;
            --gradient: linear-gradient(135deg, #DC2A22, #FB6463);
            --font: 'Roboto', sans-serif;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font);
            line-height: 1.6;
        }

        footer {
            background: black;
            color: #FFFFFF;
            padding: 20px;
            font-size: 14px;
        }

        .title1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .title1 p {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .title2 {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 20px 0;
        }

        .contact_info {
            display: flex;
            flex-direction: column;
            row-gap: 15px;
        }

        .contact_info .contact_item {
            display: flex;
            align-items: center;
            padding: 2px 10px;
            transition: all 0.3s ease;
            gap: 10px;
            text-decoration: none;
            color: white;
        }

        .contact_info .contact_item i {
            color: var(--rouge);
            font-size: 1rem;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .contact_info .contact_item:hover {
            color: white;
            transform: translateX(5px);
        }

        .contact_info .contact_item:hover i {
            transform: scale(1.3) rotate(10deg);
        }

        .slogan {
            color: #AAAAAA;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            padding: 0 20px;
            text-align: center;
        }

        .slogan .line1 {
            width: 80px;
            height: 2px;
            background-color: var(--rouge);
            margin: 5px auto;
            transition: width 0.3s ease;
        }

        .slogan:hover .line1 {
            width: 200px;
        }

        .social_media {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            text-align: center;
        }

        .icone {
            display: flex;
            gap: 15px;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .icone a.social {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 35px;
            height: 35px;
            background-color: #333;
            color: white;
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .icone a.social:hover {
            transform: translateY(-5px) scale(1.2);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
        }

        .icone a.facebook {
            background-color: #3b5998;
        }

        .icone a.twitter {
            background-color: #1da1f2;
        }

        .icone a.linkedin {
            background-color: #0077b5;
        }

        hr {
            border: none;
            height: 1px;
            background-color: #da261d68;
            margin: 20px 0;
            border-radius: 5px;
        }

        .copyright {
            text-align: center;
            padding-top: 10px;
            font-size: 12px;
            color: #aaaaaa80;
        }

        /* Responsive Footer */
        @media (max-width: 900px) {
            .title2 {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .contact_info {
                align-items: center;
            }

            .slogan {
                padding: 20px 0;
            }

            .social_media {
                gap: 5px;
            }
        }

        @media (max-width: 500px) {
            .icone a.social {
                width: 28px;
                height: 28px;
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <footer>
        <div class="title1">
            <p>Agence des Affaires Étrangères du Vietnam et du Monde</p>
        </div>

        <div class="title2">
            <div class="contact_info">
                <a class="contact_item" href="https://www.google.com/maps/search/?api=1&query=Cocody,Abidjan,Côte+d'Ivoire" target="_blank" aria-label="Localisation">
                    <i class="fas fa-home"></i> Cocody, Abidjan, Côte d'Ivoire
                </a>
                <a class="contact_item" href="tel:+2250554542424" aria-label="Téléphone">
                    <i class="fas fa-phone-alt"></i> +225 05 54 54 24 24
                </a>
                <a class="contact_item" href="mailto:favnam.world.cotedivoire@gmail.com" aria-label="Email">
                    <i class="fas fa-envelope"></i> favnam.world.cotedivoire@gmail.com
                </a>
            </div>
            <div class="slogan">
                <div class="line">Vietnam and World Foreign Affairs Agency</div>
                <div class="line1"></div>
                <div class="line">Une nouvelle ère de diplomatie inclusive et participative</div>
            </div>
            <div class="social_media">
                <p>Suivez-nous</p>
                <div class="icone">
                    <a href="#" class="social facebook" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social twitter" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social linkedin" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p>Urgences 24h/24</p>
                <p>+225 05 54 54 24 24</p>
            </div>
        </div>

        <div class="title3">
            <hr>
            <div class="copyright">© 2025 représentation permanente VWF en Côte d'Ivoire. Tous droits réservés.</div>
        </div>

    </footer>
</body>

</html>