<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Experiencia Laboral</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ffffff 0%, #f3e8ff 50%, #ffffff 100%);
            color: #333;
            line-height: 1.6;
            scroll-behavior: smooth;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #a855f7 0%, #c084fc 100%);
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

        .header-title {
            font-size: 2.8em;
            font-weight: bold;
            color: white;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .header-subtitle {
            font-size: 1.2em;
            color: rgba(255, 255, 255, 0.9);
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

        .experience-container {
            position: relative;
        }

        .experience-container::before {
            content: '';
            position: absolute;
            left: 30px;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, #a855f7, #c084fc);
            border-radius: 2px;
        }

        .experience-item {
            margin-bottom: 60px;
            margin-left: 80px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(168, 85, 247, 0.1);
            position: relative;
            overflow: hidden;
            animation: fadeInUp 0.8s ease-out;
            border: 2px solid rgba(168, 85, 247, 0.1);
        }

        .experience-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(45deg, #c0c0c0, #e5e7eb);
        }

        .experience-item::after {
            content: '';
            position: absolute;
            left: -60px;
            top: 60px;
            width: 15px;
            height: 15px;
            background: #c0c0c0;
            border-radius: 50%;
            border: 3px solid #a855f7;
            box-shadow: 0 3px 10px rgba(168, 85, 247, 0.3);
        }

        .company-header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .company-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #a855f7, #c084fc);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8em;
            color: white;
            box-shadow: 0 5px 15px rgba(168, 85, 247, 0.3);
            flex-shrink: 0;
        }

        .company-info {
            flex-grow: 1;
        }

        .company-name {
            font-size: 1.8em;
            color: #a855f7;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .job-title {
            font-size: 1.3em;
            color: #6b7280;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .employment-period {
            background: linear-gradient(45deg, #c0c0c0, #e5e7eb);
            color: #374151;
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 0.9em;
            font-weight: 600;
            display: inline-block;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 8px rgba(192, 192, 192, 0.3);
        }

        .job-description {
            padding: 25px;
            font-size: 16px;
            line-height: 1.8;
            color: #444;
            background: rgba(243, 232, 255, 0.3);
            border-radius: 15px;
            border: 2px solid rgba(168, 85, 247, 0.1);
            text-align: justify;
        }

        .responsibilities {
            margin-top: 20px;
        }

        .responsibilities h4 {
            color: #a855f7;
            margin-bottom: 15px;
            font-size: 1.1em;
            font-weight: 600;
        }

        .responsibilities-list {
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
            background: linear-gradient(45deg, #a855f7, #c084fc);
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(168, 85, 247, 0.3);
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            display: inline-block;
        }

        .back-button:hover {
            background: linear-gradient(45deg, #9333ea, #a855f7);
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(168, 85, 247, 0.4);
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

        .experience-item:nth-child(1) { animation-delay: 0.1s; }
        .experience-item:nth-child(2) { animation-delay: 0.3s; }
        .experience-item:nth-child(3) { animation-delay: 0.5s; }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-title {
                font-size: 2.2em;
            }

            .header-subtitle {
                font-size: 1em;
            }

            .experience-item {
                margin-left: 60px;
                padding: 25px 20px;
            }

            .experience-container::before {
                left: 20px;
            }

            .experience-item::after {
                left: -45px;
            }

            .company-header {
                gap: 15px;
            }

            .company-icon {
                width: 50px;
                height: 50px;
                font-size: 1.5em;
            }

            .company-name {
                font-size: 1.5em;
            }

            .job-title {
                font-size: 1.1em;
            }

            .employment-period {
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
            background: linear-gradient(45deg, rgba(192, 192, 192, 0.3), rgba(229, 231, 235, 0.3));
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
            <h1 class="header-title">Mi Experiencia Laboral</h1>
            <p class="header-subtitle">Trayectoria profesional y desarrollo de competencias</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="experience-container">
            <!-- Experiencia Laboral 1 -->
            <div class="experience-item">
                <div class="company-header">
                    <div class="company-icon">🏢</div>
                    <div class="company-info">
                        <h2 class="company-name">Amazon</h2>
                        <h3 class="job-title">Customer Service Associate</h3>
                        <span class="employment-period">sept. 2022 - ago. 2023</span>
                    </div>
                </div>
                <div class="job-description">
                    <p>Responsible for taking calls, chats and emails from Amazon customers and drivers related to logistics issues. Solving the contacts with effective communication, empathy and people management skills. </p>
                    
                    <div class="responsibilities">
                        <h4>Responsabilidades principales:</h4>
                        <div class="responsibilities-list">
                            • Responsible for monitoring the shipping and delivery process through customers and drivers.<br>
                            • Make escalations for clients in order to find the appropriate solution for their problems.<br>
                            • Maintain direct communication with the drivers and station personnel to optimize the deliveries.<br>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experiencia Laboral 2 -->
            <div class="experience-item">
                <div class="company-header">
                    <div class="company-icon">💼</div>
                    <div class="company-info">
                        <h2 class="company-name">Amazon</h2>
                        <h3 class="job-title">Cargo/Posición</h3>
                        <span class="employment-period">Fecha inicio - Fecha fin</span>
                    </div>
                </div>
                <div class="job-description">
                    <p>Describe tu segunda experiencia laboral más relevante. Menciona cómo esta posición contribuyó a tu crecimiento profesional y qué nuevas competencias adquiriste.</p>
                    
                    <div class="responsibilities">
                        <h4>Responsabilidades principales:</h4>
                        <div class="responsibilities-list">
                            • Responsabilidad 1<br>
                            • Responsabilidad 2<br>
                            • Responsabilidad 3<br>
                            • Logros destacados
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experiencia Laboral 3 -->
            <div class="experience-item">
                <div class="company-header">
                    <div class="company-icon">🚀</div>
                    <div class="company-info">
                        <h2 class="company-name">Amazon</h2>
                        <h3 class="job-title">Cargo/Posición</h3>
                        <span class="employment-period">Fecha inicio - Fecha fin</span>
                    </div>
                </div>
                <div class="job-description">
                    <p>Detalla tu tercera experiencia laboral. Enfócate en cómo cada experiencia te ha preparado para los desafíos actuales y futuros en tu carrera profesional.</p>
                    
                    <div class="responsibilities">
                        <h4>Responsabilidades principales:</h4>
                        <div class="responsibilities-list">
                            • Responsabilidad 1<br>
                            • Responsabilidad 2<br>
                            • Responsabilidad 3<br>
                            • Logros destacados
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