<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Experiencia Académica</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ffffff 0%, #f1f5f9 50%, #ffffff 100%);
            color: #333;
            line-height: 1.6;
            scroll-behavior: smooth;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="%23a1a1aa" opacity="0.1"><polygon points="0,0 0,100 1000,80 1000,0"/></svg>');
            background-size: cover;
        }

        .header-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header-title {
            font-size: 2.8em;
            font-weight: bold;
            color: white;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .header-subtitle {
            font-size: 1.2em;
            color: rgba(161, 161, 170, 0.9);
            font-weight: 300;
            letter-spacing: 1px;
            margin-bottom: 30px;
        }

        /* Main Content */
        .main-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 80px 20px;
        }

        .studies-container {
            position: relative;
        }

        .studies-container::before {
            content: '';
            position: absolute;
            left: 30px;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, #1e3a8a, #1e40af);
            border-radius: 2px;
        }

        .study-item {
            margin-bottom: 60px;
            margin-left: 80px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(30, 58, 138, 0.1);
            position: relative;
            overflow: hidden;
            animation: fadeInUp 0.8s ease-out;
            border: 2px solid rgba(30, 58, 138, 0.1);
        }

        .study-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(45deg, #a1a1aa, #d1d5db);
        }

        .study-item::after {
            content: '';
            position: absolute;
            left: -60px;
            top: 60px;
            width: 15px;
            height: 15px;
            background: #a1a1aa;
            border-radius: 50%;
            border: 3px solid #1e3a8a;
            box-shadow: 0 3px 10px rgba(30, 58, 138, 0.3);
        }

        .study-header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .study-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #1e3a8a, #1e40af);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8em;
            color: #a1a1aa;
            box-shadow: 0 5px 15px rgba(30, 58, 138, 0.3);
            flex-shrink: 0;
        }

        .study-info {
            flex-grow: 1;
        }

        .institution-name {
            font-size: 1.8em;
            color: #1e3a8a;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .study-description {
            padding: 25px;
            font-size: 16px;
            line-height: 1.8;
            color: #444;
            background: rgba(241, 245, 249, 0.5);
            border-radius: 15px;
            border: 2px solid rgba(30, 58, 138, 0.1);
            text-align: justify;
        }

        /* Back Button */
        .back-button-container {
            text-align: center;
            margin: 60px 0 40px 0;
            padding: 20px;
        }

        .back-button {
            padding: 18px 40px;
            font-size: 1.2em;
            font-weight: bold;
            background: linear-gradient(45deg, #1e3a8a, #1e40af);
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(30, 58, 138, 0.3);
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            display: inline-block;
        }

        .back-button:hover {
            background: linear-gradient(45deg, #1d4ed8, #2563eb);
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(30, 58, 138, 0.4);
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

        .study-item:nth-child(1) { animation-delay: 0.1s; }
        .study-item:nth-child(2) { animation-delay: 0.3s; }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-title {
                font-size: 2.2em;
            }

            .header-subtitle {
                font-size: 1em;
            }

            .study-item {
                margin-left: 60px;
                padding: 25px 20px;
            }

            .studies-container::before {
                left: 20px;
            }

            .study-item::after {
                left: -45px;
            }

            .study-header {
                gap: 15px;
            }

            .study-icon {
                width: 50px;
                height: 50px;
                font-size: 1.5em;
            }

            .institution-name {
                font-size: 1.5em;
            }

            .main-content {
                padding: 40px 15px;
            }
        }

        /* Decorative elements */
        .floating-element {
            position: absolute;
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, rgba(161, 161, 170, 0.3), rgba(209, 213, 219, 0.3));
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
            <h1 class="header-title">Mi Experiencia Académica</h1>
            <p class="header-subtitle">Formación educativa y desarrollo académico</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="studies-container">
            <!-- Educación Secundaria -->
            <div class="study-item">
                <div class="study-header">
                    <div class="study-icon">🎓</div>
                    <div class="study-info">
                        <h2 class="institution-name">Fundación Colegio UIS</h2>
                    </div>
                </div>
                <div class="study-description">
                    <p>Básica primaria y básica secundaria, un buen colegio, conocimientos impartidos en la mayoria de colegios de Bucaramanga, destacan buen inglés y matemáticas.</p>
                </div>
            </div>

            <!-- Educación Superior -->
            <div class="study-item">
                <div class="study-header">
                    <div class="study-icon">🏛️</div>
                    <div class="study-info">
                        <h2 class="institution-name">Universidad Autónoma de Bucaramanga</h2>
                    </div>
                </div>
                <div class="study-description">
                    <p>Estudiante de ingeniería de sistemas desde el segundo semestre de 2022, he adquirido conocimientos en programación, arquitectura de software, ingeniería de software, gestión de proyectos, sistemas y bases de datos. Sin dejar de lado toda la lógica del ciclo básico de ingenierías, matemáticas, calculos, física, entre otros.</p>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="back-button-container">
            <a href="/" class="back-button">
                ← Volver a la Biografía
            </a>
        </div>
    </main>
</body>
</html>