<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Biografía</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ffffff 0%, #e0f7fa 50%, #ffffff 100%);
            color: #333;
            line-height: 1.6;
            scroll-behavior: smooth;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #00acc1 0%, #26c6da 100%);
            padding: 60px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="%23ffffff" opacity="0.1"><polygon points="0,0 0,100 1000,80 1000,0"/></svg>');
            background-size: cover;
        }

        .header-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .profile-section {
            margin-bottom: 30px;
        }

        .profile-image-container {
            width: 200px;
            height: 200px;
            margin: 0 auto 30px;
            position: relative;
            border-radius: 50%;
            padding: 8px;
            background: linear-gradient(45deg, #ffd700, #ffb300);
            box-shadow: 0 15px 30px rgba(0, 172, 193, 0.3);
        }

        .profile-image {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4em;
            color: #999;
            overflow: hidden;
            position: relative;
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .name-display {
            font-size: 2.5em;
            font-weight: bold;
            text-align: center;
            color: white;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .location-display {
            font-size: 1.2em;
            text-align: center;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 300;
            letter-spacing: 1px;
        }

        /* Main Content */
        .main-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 80px 20px;
        }

        .section {
            margin-bottom: 60px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 172, 193, 0.1);
            position: relative;
            overflow: hidden;
            animation: fadeInUp 0.8s ease-out;
        }

        .section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(45deg, #ffd700, #ffb300);
        }

        .section-title {
            font-size: 2em;
            color: #00acc1;
            margin-bottom: 25px;
            position: relative;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .section-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, #00acc1, #26c6da);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5em;
            color: white;
            box-shadow: 0 5px 15px rgba(0, 172, 193, 0.3);
        }

        .section-content {
            padding: 25px;
            font-size: 16px;
            line-height: 1.8;
            color: #444;
            background: rgba(240, 252, 255, 0.5);
            border-radius: 15px;
            border: 2px solid rgba(0, 172, 193, 0.1);
            text-align: justify;
        }

        /* Timeline styling for life sections */
        .timeline-sections {
            position: relative;
        }

        .timeline-sections::before {
            content: '';
            position: absolute;
            left: 30px;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, #00acc1, #26c6da);
            border-radius: 2px;
        }

        .timeline-sections .section {
            margin-left: 80px;
            position: relative;
        }

        .timeline-sections .section::after {
            content: '';
            position: absolute;
            left: -60px;
            top: 60px;
            width: 15px;
            height: 15px;
            background: #ffd700;
            border-radius: 50%;
            border: 3px solid #00acc1;
            box-shadow: 0 3px 10px rgba(0, 172, 193, 0.3);
        }

        /* Save Button */
        .save-section {
            text-align: center;
            margin-top: 60px;
            padding: 40px 20px;
        }

        .save-button {
            padding: 18px 40px;
            font-size: 1.2em;
            font-weight: bold;
            background: linear-gradient(45deg, #00acc1, #26c6da);
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(0, 172, 193, 0.3);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .save-button:hover {
            background: linear-gradient(45deg, #0097a7, #00acc1);
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(0, 172, 193, 0.4);
        }

        /* Navigation Buttons Section */
        .navigation-section {
            text-align: center;
            margin: 60px 0;
            padding: 40px 20px;
        }

        .nav-buttons-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            max-width: 900px;
            margin: 0 auto;
        }

        .nav-button {
            padding: 18px 35px;
            font-size: 1.1em;
            font-weight: bold;
            background: linear-gradient(45deg, #00acc1, #26c6da);
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(0, 172, 193, 0.3);
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .nav-button:hover {
            background: linear-gradient(45deg, #0097a7, #00acc1);
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(0, 172, 193, 0.4);
        }

        .nav-button::before {
            content: '';
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section:nth-child(1) { animation-delay: 0.1s; }
        .section:nth-child(2) { animation-delay: 0.2s; }
        .section:nth-child(3) { animation-delay: 0.3s; }
        .section:nth-child(4) { animation-delay: 0.4s; }
        .section:nth-child(5) { animation-delay: 0.5s; }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                padding: 0 20px;
            }

            .name-display {
                font-size: 2.2em;
            }

            .location-display {
                font-size: 1em;
            }

            .profile-image-container {
                width: 150px;
                height: 150px;
            }

            .section {
                padding: 25px 20px;
                margin-bottom: 40px;
            }

            .section-title {
                font-size: 1.5em;
            }

            .section-icon {
                width: 40px;
                height: 40px;
                font-size: 1.2em;
            }

            .timeline-sections .section {
                margin-left: 60px;
            }

            .timeline-sections::before {
                left: 20px;
            }

            .timeline-sections .section::after {
                left: -45px;
            }

            .main-content {
                padding: 40px 15px;
            }

            .nav-buttons-container {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }

            .nav-button {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
        }

        /* Decorative elements */
        .floating-element {
            position: absolute;
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, rgba(255, 215, 0, 0.3), rgba(255, 179, 0, 0.3));
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            bottom: 20%;
            left: 15%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
    </style>
</head>
<body>
    <!-- Floating decorative elements -->
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>

    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="profile-section">
                <div class="profile-image-container">
                    <div class="profile-image" id="profileImage">
                        <img src="https://media.licdn.com/dms/image/v2/D5603AQEQCTvg7KsFFA/profile-displayphoto-crop_800_800/B56ZefcpQOGQAM-/0/1750726777441?e=1760572800&v=beta&t=GkJtFEPY_bvELugeq0C8TW76WTJjmZ09Aqw3p8vmFVI" alt="">
                    </div>
                </div>
            </div>
            
            <h1 class="name-display">Sergio Alejandro Amaya Corzo</h1>
            <p class="location-display">Nacido y criado en Bucaramanga, Colombia. Con padres y un hermano bumangueses, he vivido toda mi vida en Bucaramanga, excepto por seis meses que vivi en la maravillosa isla de Malta.</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="timeline-sections">
            <!-- Niñez -->
            <section class="section">
                <h2 class="section-title">
                    <span class="section-icon">👶</span>
                    Mi Niñez
                </h2>
                <div class="section-content">
                    Viví toda mi niñez en Bucaramanga, rodeado de mis padres, mi hermanito, mis abuelos, tios y familiares. De niño me encantaban los deportes y jugar con los demás. Fui de las últimas generaciones que tuvimos una niñez sin dispositivos móviles.
                </div>
            </section>

            <!-- Adolescencia -->
            <section class="section">
                <h2 class="section-title">
                    <span class="section-icon">🎓</span>
                    Mi Adolescencia
                </h2>
                <div class="section-content">
                    En mi adolescencia nos mudamos para Floridablanca, otro sector del área metropolitana de Bucaramanga. Muy tranquila, seguí con los deportes, terminé mi bachillerato y empecé a perfeccionar mi inglés y vincularme en todo el mundo de la programación y los sistemas.
                </div>
            </section>

            <!-- Actualidad -->
            <section class="section">
                <h2 class="section-title">
                    <span class="section-icon">💼</span>
                    Mi Presente
                </h2>
                <div class="section-content">
                    A mis 19 años tuve la oportunidad de irme a vivir seis meses en la Isla de Malta, en donde perfecioné mi inglés y abrí mis ojos al mundo. Después regresé a Bucaramanga con hambre y una visión de vida. Desde esa entonces empecé a estudiar ingeniería de sistemas en la Universidad Autónoma de Bucaramanga y conseguí trabajo en Amazon, en el departamento de logistica. A la fecha de hoy (Septiembre 2025) ya voy en séptimo semestre de la carrera y llevo más de tres años en la empresa, practicando mi inglés todos los días y aprendiendo mucho sobre los sistemas, software y todo lo relacionado a mi carrera.
                </div>
            </section>

            <!-- Futuro -->
            <section class="section">
                <h2 class="section-title">
                    <span class="section-icon">🚀</span>
                    Mis Metas y Aspiraciones
                </h2>
                <div class="section-content">
                    Mis metas a corto plazo son: terminar mis estudios, terminar de pagar la carrera a la par que termino materias y aprender un tercer idioma. Y mis metas a largo plazo son: Conseguir una práctica internacional, empezar a destacar en el ámbito laboral de mi carrera, ser políglota, seguir estudiando y aprendiendo mucho haciendo mínimo una máster y una especialización, conventirme en un excelente gestor de proyectos de software y todo un líder tecnológico. Todo eso y mucho más sin dejar de un lado mi salud, el ejercicio, la familia y mi vida personal. El cielo es el límite!
                </div>
            </section>
        </div>

        <!-- Navigation Buttons Section -->
        <div class="navigation-section">
            <div class="nav-buttons-container">
                <a href="work" class="nav-button">
                    Experiencia Laboral
                </a>
                <a href="skills" class="nav-button">
                    Habilidades
                </a>
                <a href="studies" class="nav-button">
                    Experiencia Académica
                </a>
            </div>
        </div>
    </main>
</body>
</html>