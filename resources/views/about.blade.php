<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravronex - About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #10b981;
            --primary-dark: #059669;
            --secondary: #34d399;
            --light: #d1fae5;
            --dark: #064e3b;
            --accent: #6ee7b7;
            --teal: #14b8a6;
            --emerald: #047857;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #064e3b, #022c22);
            color: #e2e8f0;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
            line-height: 1.6;
        }
        
        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
        }
        
        .shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.3;
        }
        
        .shape-1 {
            width: 500px;
            height: 500px;
            background: var(--primary);
            top: -100px;
            left: -100px;
            animation: float1 25s infinite linear;
        }
        
        .shape-2 {
            width: 400px;
            height: 400px;
            background: var(--secondary);
            bottom: -150px;
            right: -100px;
            animation: float2 30s infinite linear;
        }
        
        .shape-3 {
            width: 300px;
            height: 300px;
            background: var(--teal);
            top: 40%;
            left: 30%;
            animation: float3 20s infinite linear;
        }
        
        .shape-4 {
            width: 250px;
            height: 250px;
            background: var(--emerald);
            bottom: 20%;
            left: 20%;
            animation: float4 25s infinite linear;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
            position: relative;
            z-index: 1;
        }
        
        .glass-card {
            background: rgba(20, 83, 45, 0.3);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 2rem;
            border: 1px solid rgba(52, 211, 153, 0.3);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 4rem;
            margin-top: 2rem;
            position: relative;
            overflow: hidden;
        }
        
        .glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary), var(--teal));
            animation: borderFlow 3s infinite linear;
        }
        
        .header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 4.5rem;
            font-weight: 900;
            background: linear-gradient(45deg, var(--secondary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
            letter-spacing: -1px;
        }
        
        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--teal));
            border-radius: 2px;
            animation: linePulse 2s infinite ease-in-out;
        }
        
        .tagline {
            font-size: 1.7rem;
            color: var(--accent);
            margin-bottom: 2rem;
            animation: fadeIn 1s ease-out;
            font-weight: 300;
        }
        
        .section {
            margin-bottom: 3rem;
            padding: 2.5rem;
            border-radius: 1.5rem;
            background: rgba(20, 83, 45, 0.25);
            transition: all 0.4s ease;
            transform: translateY(20px);
            opacity: 0;
            animation: fadeUp 0.8s forwards;
            position: relative;
            overflow: hidden;
        }
        
        .section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top right, rgba(52, 211, 153, 0.1), transparent 70%);
            z-index: -1;
        }
        
        .section:hover {
            background: rgba(20, 83, 45, 0.35);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }
        
        .section:nth-child(1) {
            animation-delay: 0.2s;
        }
        
        .section:nth-child(2) {
            animation-delay: 0.4s;
        }
        
        .section:nth-child(3) {
            animation-delay: 0.6s;
        }
        
        .section:nth-child(4) {
            animation-delay: 0.8s;
        }
        
        .section:nth-child(5) {
            animation-delay: 1s;
        }
        
        h2 {
            font-size: 2.4rem;
            margin-bottom: 1.8rem;
            color: var(--accent);
            position: relative;
            display: inline-block;
            font-weight: 700;
        }
        
        h2::before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 70px;
            height: 4px;
            background: var(--primary);
            border-radius: 2px;
        }
        
        p {
            font-size: 1.15rem;
            line-height: 1.9;
            color: #d1fae5;
            margin-bottom: 1.5rem;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.8rem;
            margin-top: 1.8rem;
        }
        
        .service-card {
            background: rgba(16, 185, 129, 0.15);
            border: 1px solid rgba(52, 211, 153, 0.3);
            border-radius: 1.2rem;
            padding: 2rem 1.8rem;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
            backdrop-filter: blur(10px);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(16, 185, 129, 0.25);
            border-color: var(--accent);
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.2), transparent);
            z-index: -1;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .service-card:hover::before {
            opacity: 1;
        }
        
        .service-icon {
            font-size: 2.8rem;
            color: var(--accent);
            margin-bottom: 1.5rem;
            display: inline-block;
        }
        
        .service-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--light);
        }
        
        .service-desc {
            font-size: 1.05rem;
            color: #a7f3d0;
        }
        
        .stats {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 1.8rem;
            margin-top: 2.5rem;
        }
        
        .stat-item {
            text-align: center;
            flex: 1;
            min-width: 180px;
        }
        
        .stat-value {
            font-size: 3.2rem;
            font-weight: 800;
            background: linear-gradient(45deg, var(--secondary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .stat-label {
            font-size: 1.2rem;
            color: var(--accent);
            font-weight: 500;
        }
        
        .cta-button {
            display: inline-block;
            background: linear-gradient(45deg, var(--primary), var(--teal));
            color: white;
            font-size: 1.3rem;
            font-weight: 600;
            padding: 1.4rem 3rem;
            border-radius: 50px;
            text-decoration: none;
            margin-top: 2rem;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
            border: none;
            cursor: pointer;
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.4);
        }
        
        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: 0.6s;
            z-index: -1;
        }
        
        .cta-button:hover::before {
            left: 100%;
        }
        
        .cta-button:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 30px rgba(16, 185, 129, 0.6);
        }
        
        .cta-container {
            text-align: center;
            margin-top: 4rem;
            animation: pulse 2s infinite;
        }
        
        .leaf-decoration {
            position: absolute;
            z-index: -1;
            opacity: 0.15;
        }
        
        .leaf-1 {
            top: 10%;
            right: 10%;
            font-size: 12rem;
            color: var(--accent);
            transform: rotate(25deg);
            animation: floatLeaf 15s infinite ease-in-out;
        }
        
        .leaf-2 {
            bottom: 15%;
            left: 8%;
            font-size: 8rem;
            color: var(--secondary);
            transform: rotate(-15deg);
            animation: floatLeaf 18s infinite ease-in-out;
        }
        
        .leaf-3 {
            top: 40%;
            left: 15%;
            font-size: 6rem;
            color: var(--teal);
            transform: rotate(40deg);
            animation: floatLeaf 12s infinite ease-in-out;
        }
        
        /* Animations */
        @keyframes float1 {
            0% { transform: translate(0, 0) rotate(0deg); }
            50% { transform: translate(50px, 50px) rotate(180deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }
        
        @keyframes float2 {
            0% { transform: translate(0, 0) rotate(0deg); }
            50% { transform: translate(-40px, -60px) rotate(-180deg); }
            100% { transform: translate(0, 0) rotate(-360deg); }
        }
        
        @keyframes float3 {
            0% { transform: translate(0, 0); }
            50% { transform: translate(30px, -30px); }
            100% { transform: translate(0, 0); }
        }
        
        @keyframes float4 {
            0% { transform: translate(0, 0); }
            50% { transform: translate(-40px, 30px); }
            100% { transform: translate(0, 0); }
        }
        
        @keyframes borderFlow {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes linePulse {
            0% { width: 150px; }
            50% { width: 200px; }
            100% { width: 150px; }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        @keyframes floatLeaf {
            0% { transform: rotate(0deg) translateY(0); }
            50% { transform: rotate(10deg) translateY(-20px); }
            100% { transform: rotate(0deg) translateY(0); }
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .glass-card {
                padding: 3rem;
            }
            
            h1 {
                font-size: 3.8rem;
            }
        }
        
        @media (max-width: 768px) {
            .glass-card {
                padding: 2.5rem;
            }
            
            h1 {
                font-size: 3.2rem;
            }
            
            .tagline {
                font-size: 1.4rem;
            }
            
            h2 {
                font-size: 2rem;
            }
            
            .service-card {
                padding: 1.8rem;
            }
            
            .stat-value {
                font-size: 2.8rem;
            }
            
            .leaf-decoration {
                display: none;
            }
        }
        
        @media (max-width: 576px) {
            .container {
                padding: 2rem 1rem;
            }
            
            .glass-card {
                padding: 2rem 1.5rem;
            }
            
            h1 {
                font-size: 2.8rem;
            }
            
            .section {
                padding: 1.8rem;
            }
            
            .stats {
                flex-direction: column;
                align-items: center;
            }
            
            .cta-button {
                padding: 1.2rem 2.5rem;
                font-size: 1.2rem;
            }
        }
        .site-header {
    position: sticky;
    top: 0;
    z-index: 10;
    background: rgba(4, 120, 87, 0.3); /* glass effect */
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-bottom: 1px solid rgba(52, 211, 153, 0.2);
    padding: 1rem 0;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 2rem;
}

.logo {
    max-height: 60px;
    width: auto;
    border-radius: 0.5rem;
}

.nav-links a {
    margin-left: 2rem;
    text-decoration: none;
    font-weight: 500;
    font-size: 1.1rem;
    color: var(--accent);
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: var(--primary);
}

/* Responsive Header */
@media (max-width: 768px) {
    .header-container {
        flex-direction: column;
        gap: 1rem;
    }

    .nav-links a {
        margin: 0 1rem;
        font-size: 1rem;
    }
}

    </style>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GYFM891DDV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GYFM891DDV');
</script>
</head>
<body>
    <header class="site-header">
    <div class="container header-container">
        <a href="/" class="logo-link">
            <img src="{{ asset('images/gravronex new logo.jpeg') }}" alt="Gravronex Logo" class="logo">
        </a>
        <nav class="nav-links">
            <a href="/">Home</a>
            <a href="/about">About Us</a>
            <a href="/contact">Contact</a>
        </nav>
    </div>
</header>

    <!-- Floating background shapes -->
    <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
    </div>
    
    <!-- Leaf decorations -->
    <div class="leaf-decoration leaf-1">
        <i class="fas fa-leaf"></i>
    </div>
    <div class="leaf-decoration leaf-2">
        <i class="fas fa-seedling"></i>
    </div>
    <div class="leaf-decoration leaf-3">
        <i class="fas fa-spa"></i>
    </div>
    
    <div class="container">
        <div class="glass-card">
            <div class="header">
                <h1>About Gravronex Technology Private  Limited</h1>
                <p class="tagline">Gravgronex – Smart Solutions.</p>
            </div>
            
            <div class="section">
                <h2>Who We Are</h2>
                <p>We're a forward-thinking tech company delivering high-performance digital solutions for a modern world. Founded in 2025, our team of passionate engineers, designers, and strategists work together to create transformative digital experiences.</p>
                <p>With offices in three countries and remote teams across the globe, we bring diverse perspectives to every challenge we tackle.</p>
            </div>
            
            <div class="section">
                <h2>Our Mission</h2>
                <p>To empower brands and businesses with smart, scalable, and sustainable technology. We believe that technology should solve real problems and create meaningful connections between businesses and their customers.</p>
                <p>Our mission drives every project we undertake, ensuring we deliver solutions that not only meet but exceed our clients' expectations.</p>
            </div>
            
            <div class="section">
                <h2>What We Do</h2>
                <p>We provide comprehensive digital solutions tailored to your unique business needs. Our expertise spans across multiple domains:</p>
                
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="service-title">Network Monitoring System</h3>
                        <p class="service-desc">'A Network Monitoring System (NMS) keeps track of your network’s performance, security, and health in
real-time.</p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3 class="service-title">Email Security and archival solution</h3>
                        <p class="service-desc">Email Security & Archival Solutions protect against cyber threats while ensuring compliance
and seamless data management.</p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3 class="service-title">Endpoint security solution</h3>
                        <p class="service-desc">Protect devices, data, and networks from cyber threats with ease.</p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="service-title">SSO & MFA solution</h3>
                        <p class="service-desc">'SSO and MFA solutions to streamline user access, enhance security, boost productivity, ensure
compliance, and provide expert support for optimal protection and efficiency.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="service-title">IT infrastructure</h3>
                        <p class="service-desc">IT infrastructure comprises the hardware, software, networks, and data centers that support an organization's technology services and operations
</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="service-title">Digital Marketting</h3>
                        <p class="service-desc">Services Full range of Digital Services like Website Designing, eCommerce, SEO services.
</p>
                    </div>
                     <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="service-title">Hardware </h3>
                        <p class="service-desc">Hardware, Laptops, Computers, Firewalls ,Servers,Printers, Network, Cyber Security .
</p>
                    </div>
                </div>
            </div>
            
            <div class="section">
                <h2>Why Choose Us?</h2>
                <p>Gravronex is built on trust, creativity, and deep technical expertise. We don't just deliver products—we build solutions that scale and succeed with your vision.</p>
                
                <div class="stats">
                    <div class="stat-item">
                        <div class="stat-value">98%</div>
                        <div class="stat-label">Client Retention</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">250+</div>
                        <div class="stat-label">Projects Delivered</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">50+</div>
                        <div class="stat-label">Team Members</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">12+</div>
                        <div class="stat-label">Industries Served</div>
                    </div>
                </div>
            </div>
            
            <div class="cta-container">
                <a href="#" class="cta-button">
                    <i class="fas fa-paper-plane"></i> Let's Work Together
                </a>
            </div>
        </div>
    </div>

    <script>
        // Add scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            // Add observer for sections
            const sections = document.querySelectorAll('.section');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            sections.forEach(section => {
                observer.observe(section);
            });
            
            // Add hover effect to service cards
            const serviceCards = document.querySelectorAll('.service-card');
            serviceCards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'translateY(-10px)';
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'translateY(0)';
                });
            });
            
            // Animate leaves on scroll
            const leaves = document.querySelectorAll('.leaf-decoration');
            
            const leafObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 0.15;
                    }
                });
            }, { threshold: 0.1 });
            
            leaves.forEach(leaf => {
                leafObserver.observe(leaf);
            });
        });
    </script>
</body>
</html>