<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Habilidades</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ffffff 0%, #fef3e2 50%, #ffffff 100%);
            color: #333;
            line-height: 1.6;
            scroll-behavior: smooth;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #7f1d1d 0%, #991b1b 100%);
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="%23ffd700" opacity="0.1"><polygon points="0,0 0,100 1000,80 1000,0"/></svg>');
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
            color: rgba(255, 215, 0, 0.9);
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

        .skills-container {
            position: relative;
        }

        .skills-container::before {
            content: '';
            position: absolute;
            left: 30px;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, #7f1d1d, #991b1b);
            border-radius: 2px;
        }

        .skill-item {
            margin-bottom: 60px;
            margin-left: 80px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(127, 29, 29, 0.1);
            position: relative;
            overflow: hidden;
            animation: fadeInUp 0.8s ease-out;
            border: 2px solid rgba(127, 29, 29, 0.1);
        }

        .skill-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(45deg, #ffd700, #f59e0b);
        }

        .skill-item::after {
            content: '';
            position: absolute;
            left: -60px;
            top: 60px;
            width: 15px;
            height: 15px;
            background: #ffd700;
            border-radius: 50%;
            border: 3px solid #7f1d1d;
            box-shadow: 0 3px 10px rgba(127, 29, 29, 0.3);
        }

        .skill-header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .skill-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #7f1d1d, #991b1b);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8em;
            color: #ffd700;
            box-shadow: 0 5px 15px rgba(127, 29, 29, 0.3);
            flex-shrink: 0;
        }

        .skill-info {
            flex-grow: 1;
        }

        .skill-name {
            font-size: 1.8em;
            color: #7f1d1d;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .skill-category {
            font-size: 1.3em;
            color: #1f2937;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .skill-level {
            background: linear-gradient(45deg, #ffd700, #f59e0b);
            color: #1f2937;
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 0.9em;
            font-weight: 600;
            display: inline-block;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 8px rgba(255, 215, 0, 0.3);
        }

        .skill-description {
            padding: 25px;
            font-size: 16px;
            line-height: 1.8;
            color: #444;
            background: rgba(254, 243, 226, 0.3);
            border-radius: 15px;
            border: 2px solid rgba(127, 29, 29, 0.1);
            text-align: justify;
        }

        .skill-details {
            margin-top: 20px;
        }

        .skill-details h4 {
            color: #7f1d1d;
            margin-bottom: 15px;
            font-size: 1.1em;
            font-weight: 600;
        }

        .skill-details-list {
            color: #555;
            line-height: 1.7;
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
            background: linear-gradient(45deg, #7f1d1d, #991b1b);
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(127, 29, 29, 0.3);
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            display: inline-block;
        }

        .back-button:hover {
            background: linear-gradient(45deg, #6f1616, #7f1d1d);
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(127, 29, 29, 0.4);
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

        .skill-item:nth-child(1) { animation-delay: 0.1s; }
        .skill-item:nth-child(2) { animation-delay: 0.3s; }
        .skill-item:nth-child(3) { animation-delay: 0.5s; }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-title {
                font-size: 2.2em;
            }

            .header-subtitle {
                font-size: 1em;
            }

            .skill-item {
                margin-left: 60px;
                padding: 25px 20px;
            }

            .skills-container::before {
                left: 20px;
            }

            .skill-item::after {
                left: -45px;
            }

            .skill-header {
                gap: 15px;
            }

            .skill-icon {
                width: 50px;
                height: 50px;
                font-size: 1.5em;
            }

            .skill-name {
                font-size: 1.5em;
            }

            .skill-category {
                font-size: 1.1em;
            }

            .skill-level {
                font-size: 0.8em;
                padding: 6px 12px;
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
            background: linear-gradient(45deg, rgba(255, 215, 0, 0.3), rgba(245, 158, 11, 0.3));
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
            <h1 class="header-title">Mis Habilidades</h1>
            <p class="header-subtitle">Competencias técnicas y profesionales desarrolladas</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="skills-container">
            <!-- Habilidad 1 -->
            <div class="skill-item">
                <div class="skill-header">
                    <div class="skill-icon">⚡</div>
                    <div class="skill-info">
                        <h2 class="skill-name">Liderazgo y mentoría</h2>
                        <h3 class="skill-category">Habilidad blanda</h3>
                        <span class="skill-level">Nivel: Avanzado</span>
                    </div>
                </div>
                <div class="skill-description">
                    <p>Capacidad de guiar, inspirar y acompañar a equipos en el logro de metas, con un enfoque en la motivación, la empatía y la mejora continua. Has sido mentor en el trabajo y en la universidad, destacándote como un referente entre tus compañeros.</p>
                    
                    <div class="skill-details">
                        <h4>Aspectos destacados:</h4>
                        <div class="skill-details-list">
                            • Experiencia liderando workshops y guiando a colegas bottom performers para mejorar sus métricas.<br>
                            • Habilidad para comunicar ideas complejas de manera clara y práctica.<br>
                            • Ejemplo y referente natural en tu equipo, transmitiendo confianza y motivación.<br>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Habilidad 2 -->
            <div class="skill-item">
                <div class="skill-header">
                    <div class="skill-icon">🎯</div>
                    <div class="skill-info">
                        <h2 class="skill-name">Nombre de la Habilidad 2</h2>
                        <h3 class="skill-category">Categoría (Técnica/Blanda/Específica)</h3>
                        <span class="skill-level">Nivel de dominio</span>
                    </div>
                </div>
                <div class="skill-description">
                    <p>Detalla tu segunda habilidad más relevante. Menciona cómo esta competencia te diferencia de otros profesionales y qué valor aporta a tu trabajo.</p>
                    
                    <div class="skill-details">
                        <h4>Aspectos destacados:</h4>
                        <div class="skill-details-list">
                            • Aspecto específico 1<br>
                            • Herramientas o tecnologías relacionadas<br>
                            • Proyectos donde la aplicaste<br>
                            • Resultados o logros obtenidos
                        </div>
                    </div>
                </div>
            </div>

            <!-- Habilidad 3 -->
            <div class="skill-item">
                <div class="skill-header">
                    <div class="skill-icon">🚀</div>
                    <div class="skill-info">
                        <h2 class="skill-name">Nombre de la Habilidad 3</h2>
                        <h3 class="skill-category">Categoría (Técnica/Blanda/Específica)</h3>
                        <span class="skill-level">Nivel de dominio</span>
                    </div>
                </div>
                <div class="skill-description">
                    <p>Explica tu tercera habilidad clave. Enfócate en cómo esta competencia complementa las anteriores y contribuye a tu perfil profesional integral.</p>
                    
                    <div class="skill-details">
                        <h4>Aspectos destacados:</h4>
                        <div class="skill-details-list">
                            • Aspecto específico 1<br>
                            • Herramientas o tecnologías relacionadas<br>
                            • Proyectos donde la aplicaste<br>
                            • Resultados o logros obtenidos
                        </div>
                    </div>
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