<?php
// company.php - Company-Focused CV Version
// This is the professional, corporate-tailored version optimized for job applications (e.g., Google).
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Gokul Subedi — Professional CV & Portfolio</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="Gokul Subedi's professional CV - Backend Engineer with expertise in scalable systems for enterprise environments."/>
  
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              50: '#f8fafc', 100: '#f1f5f9', 200: '#e2e8f0', 300: '#cbd5e1',
              400: '#94a3b8', 500: '#64748b', 600: '#475569', 700: '#334155',
              800: '#1e293b', 900: '#0f172a'
            },
            primary: { 500: '#6366f1', 600: '#4f46e5', 700: '#4338ca' },
            accent: { 500: '#06b6d4', 600: '#0891b2' }
          },
          fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] },
          animation: { 'fade-in': 'fadeIn 0.6s ease-out forwards' }
        }
      }
    }
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

  <style>
    :root { color-scheme: dark; }
    body {
      font-family: 'Inter', system-ui, sans-serif;
      background: #0a0a0f;
      color: #f8fafc;
      line-height: 1.6;
      -webkit-font-smoothing: antialiased;
    }
    .glass { 
      background: rgba(15, 23, 42, 0.6);
      border: 1px solid rgba(71, 85, 105, 0.3);
      backdrop-filter: blur(20px);
    }
    .gradient-text {
      background: linear-gradient(135deg, #6366f1 0%, #06b6d4 100%);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .blob { 
      filter: blur(80px); 
      opacity: 0.3; 
      mix-blend-mode: screen; 
      position: absolute; 
      pointer-events: none; 
    }
    .metric-card {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .metric-card:hover { transform: translateY(-4px); }
    .skill-level { 
      background: linear-gradient(to right, #6366f1, #06b6d4);
      height: 4px; 
      border-radius: 2px; 
    }
    .project-tech { 
      background: rgba(99, 102, 241, 0.2);
      color: #a5b4fc;
      padding: 0.25rem 0.75rem;
      border-radius: 9999px;
      font-size: 0.75rem;
      font-weight: 500;
    }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
    .no-select { user-select: none; }
    .focus-ring { outline: 2px solid #6366f1; outline-offset: 2px; }
  </style>
</head>
<body class="min-h-screen">

  <!-- Decorative gradients (toned down for professional look) -->
  <div class="blob fixed top-20 left-10 w-72 h-72" style="background: radial-gradient(circle, rgba(99,102,241,0.2) 0%, transparent 70%);"></div>
  <div class="blob fixed bottom-40 right-20 w-96 h-96" style="background: radial-gradient(circle, rgba(6,182,212,0.2) 0%, transparent 70%);"></div>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 relative z-10">
    
    <!-- Header with Personal Link -->
    <header class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 mb-12">
      <div class="flex items-center gap-4">
        <div class="w-16 h-16 rounded-xl flex items-center justify-center bg-gradient-to-br from-primary-500 to-accent-500 text-white font-bold shadow-xl">GS</div>
        <div>
          <h1 class="text-2xl lg:text-3xl font-bold">Gokul Subedi</h1>
          <p class="text-primary-400 text-sm font-medium">Backend Engineer | Full-Stack Specialist</p>
        </div>
      </div>
      <nav class="flex flex-wrap gap-2 lg:gap-4 text-sm">
        <a class="nav-link px-3 py-2 rounded-lg hover:bg-primary-500/10 transition" href="#hero">Overview</a>
        <a class="nav-link px-3 py-2 rounded-lg hover:bg-primary-500/10 transition" href="#about">Profile</a>
        <a class="nav-link px-3 py-2 rounded-lg hover:bg-primary-500/10 transition" href="#experience">Professional Experience</a>
        <a class="nav-link px-3 py-2 rounded-lg hover:bg-primary-500/10 transition" href="#projects">Key Projects</a>
        <a class="nav-link px-3 py-2 rounded-lg hover:bg-primary-500/10 transition" href="#contact">Contact</a>
        <a class="nav-link px-3 py-2 rounded-lg bg-accent-500/20 hover:bg-accent-500/30 transition" href="index.php">Personal View</a>
      </nav>
    </header>

    <!-- Hero Section (Company - Results-focused) -->
    <section id="hero" class="grid lg:grid-cols-12 gap-8 items-start mb-16">
      <div class="lg:col-span-8 space-y-6">
        <div class="animate-fade-in">
          <h2 class="text-5xl lg:text-6xl font-bold leading-tight">
            Delivering <span class="gradient-text">enterprise-grade</span><br>
            backend solutions that<br>
            <span class="text-accent-400">drive business value</span>
          </h2>
        </div>
        <p class="text-lg text-gray-300 max-w-2xl leading-relaxed">
          Experienced engineer with 4+ years in building scalable, reliable systems for high-stakes environments.
          Proven track record in optimization and delivery.
        </p>
        
        <!-- Key Metrics -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
          <div class="metric-card glass p-4 rounded-xl text-center">
            <div class="text-2xl font-bold text-primary-400">47+</div>
            <div class="text-xs text-gray-400 uppercase tracking-wide">Projects Delivered</div>
          </div>
          <div class="metric-card glass p-4 rounded-xl text-center">
            <div class="text-2xl font-bold text-accent-400">2.3M+</div>
            <div class="text-xs text-gray-400 uppercase tracking-wide">Monthly Users Served</div>
          </div>
          <div class="metric-card glass p-4 rounded-xl text-center">
            <div class="text-2xl font-bold text-primary-400">99.9%</div>
            <div class="text-xs text-gray-400 uppercase tracking-wide">System Uptime</div>
          </div>
          <div class="metric-card glass p-4 rounded-xl text-center">
            <div class="text-2xl font-bold text-accent-400">14</div>
            <div class="text-xs text-gray-400 uppercase tracking-wide">Core Technologies</div>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4">
          <a href="#projects" class="btn-primary px-6 py-3 rounded-xl font-medium">Review Portfolio</a>
          <a href="#contact" class="btn-secondary px-6 py-3 rounded-xl font-medium border border-gray-600">Schedule Discussion</a>
        </div>

        <!-- Quick Contact -->
        <div class="flex flex-wrap gap-6 text-sm text-gray-400 pt-4">
          <a href="mailto:subedigokul119@gmail.com" class="flex items-center gap-2 hover:text-primary-400">📧 subedigokul119@gmail.com</a>
          <a href="tel:+9779812345678" class="flex items-center gap-2 hover:text-accent-400">📱 +977 9812345678</a>
          <span>🇳🇵 Kathmandu, Nepal (Open to Remote/Relocation)</span>
        </div>
      </div>

      <div class="lg:col-span-4">
        <div class="glass rounded-2xl p-6">
          <img src="https://picsum.photos/id/1011/400/500" alt="Gokul Subedi Professional" class="w-full h-64 object-cover rounded-xl mb-4">
          <div class="space-y-3">
            <h3 class="font-semibold text-lg">Professional Expertise</h3>
            <ul class="text-sm text-gray-300 space-y-1">
              <li>• Scalable API Development</li>
              <li>• Cloud Architecture (AWS/GCP)</li>
              <li>• Performance Optimization</li>
              <li>• Enterprise Integration</li>
            </ul>
            <div class="pt-4">
              <a href="#contact" class="text-xs px-4 py-2 bg-primary-500/20 rounded-full">Hire Expertise →</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section (Company - Concise professional summary) -->
    <section id="about" class="mb-16">
      <h2 class="text-3xl font-bold mb-8 flex items-center gap-3">
        <span class="w-8 h-8 bg-primary-500/20 rounded-lg flex items-center justify-center text-sm">👨‍💻</span>
        Professional Profile
      </h2>
      <div class="grid lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 space-y-6">
          <p class="text-lg text-gray-300 leading-relaxed">
            Results-oriented backend engineer with expertise in designing and implementing high-performance systems.
            Delivered 47+ projects with measurable business impact.
          </p>
          <div class="grid md:grid-cols-2 gap-6">
            <div class="glass p-6 rounded-xl">
              <h4 class="font-semibold mb-3 flex items-center gap-2">🛠 Core Competencies</h4>
              <ul class="text-sm text-gray-300 space-y-2">
                <li>• API Design & Security</li>
                <li>• Microservices & DevOps</li>
                <li>• Database Engineering</li>
                <li>• CI/CD Pipelines</li>
              </ul>
            </div>
            <div class="glass p-6 rounded-xl">
              <h4 class="font-semibold mb-3 flex items-center gap-2">📈 Career Drivers</h4>
              <p class="text-sm text-gray-300">Focus on scalable solutions, code quality, and team collaboration in fast-paced environments.</p>
            </div>
          </div>
        </div>
        <div class="space-y-6">
          <div class="glass p-6 rounded-xl">
            <h4 class="font-semibold mb-4">📊 Proficiency Levels</h4>
            <div class="space-y-4">
              <div><span class="text-xs text-gray-400 block mb-1">Laravel/PHP</span><div class="skill-level w-full"></div></div>
              <div><span class="text-xs text-gray-400 block mb-1">Node.js</span><div class="skill-level w-5/6"></div></div>
              <div><span class="text-xs text-gray-400 block mb-1">AWS</span><div class="skill-level w-4/5"></div></div>
              <div><span class="text-xs text-gray-400 block mb-1">Docker</span><div class="skill-level w-3/4"></div></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Experience Section (Company - Quantified achievements) -->
    <section id="experience" class="mb-16">
      <h2 class="text-3xl font-bold mb-8 flex items-center gap-3">
        <span class="w-8 h-8 bg-accent-500/20 rounded-lg flex items-center justify-center text-sm">💼</span>
        Professional Experience
      </h2>
      <div class="grid md:grid-cols-2 gap-8">
        <div class="space-y-6">
          <div class="glass p-6 rounded-xl">
            <div class="flex justify-between items-start mb-3">
              <h3 class="font-semibold text-lg">Senior Backend Engineer</h3>
              <span class="text-xs text-primary-400">Jan 2023 - Present</span>
            </div>
            <p class="text-sm text-gray-300 mb-4">TechCorp Inc.</p>
            <ul class="text-sm space-y-2">
              <li>• Led monolith-to-microservices migration (45% performance improvement)</li>
              <li>• Designed API gateway handling 500k requests/min</li>
              <li>• Implemented caching strategy reducing latency by 80%</li>
            </ul>
          </div>
        </div>
        <div class="space-y-6">
          <div class="glass p-6 rounded-xl">
            <div class="flex justify-between items-start mb-3">
              <h3 class="font-semibold text-lg">Full-Stack Engineer</h3>
              <span class="text-xs text-accent-400">Jun 2021 - Dec 2022</span>
            </div>
            <p class="text-sm text-gray-300 mb-4">StartupX</p>
            <ul class="text-sm space-y-2">
              <li>• Developed e-commerce backend processing 2M+ transactions</li>
              <li>• Optimized queries achieving 60% faster response times</li>
              <li>• Automated deployments enabling 3x faster release cycles</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Projects Section (Company - Business impact focus) -->
    <section id="projects" class="mb-16">
      <h2 class="text-3xl font-bold mb-8 flex items-center gap-3">
        <span class="w-8 h-8 bg-primary-500/20 rounded-lg flex items-center justify-center text-sm">🚀</span>
        Selected Projects
      </h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <article class="glass rounded-xl overflow-hidden group">
          <img src="https://picsum.photos/id/1005/600/400" alt="Inventory System" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="font-semibold text-lg mb-2">Inventory Management System</h3>
            <p class="text-sm text-gray-300 mb-4">Enterprise API for 50k+ SKUs with real-time synchronization</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="project-tech">Laravel</span>
              <span class="project-tech">Redis</span>
              <span class="project-tech">AWS</span>
            </div>
            <div class="flex justify-between items-center text-xs text-gray-400">
              <span>500k req/mo</span>
              <a href="#" class="text-primary-400 hover:underline">Case Study →</a>
            </div>
          </div>
        </article>
        <article class="glass rounded-xl overflow-hidden group">
          <img src="https://picsum.photos/id/1020/600/400" alt="Dashboard" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="font-semibold text-lg mb-2">Analytics Dashboard</h3>
            <p class="text-sm text-gray-300 mb-4">Real-time monitoring for business metrics</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="project-tech">Node.js</span>
              <span class="project-tech">Socket.IO</span>
              <span class="project-tech">Vue</span>
            </div>
            <div class="flex justify-between items-center text-xs text-gray-400">
              <span>2.3M users</span>
              <a href="#" class="text-primary-400 hover:underline">Technical Details →</a>
            </div>
          </div>
        </article>
        <article class="glass rounded-xl overflow-hidden group">
          <img src="https://picsum.photos/id/1035/600/400" alt="ETL Pipeline" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="font-semibold text-lg mb-2">ETL Reporting Pipeline</h3>
            <p class="text-sm text-gray-300 mb-4">Automated data processing for 10TB/month</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="project-tech">Python</span>
              <span class="project-tech">Airflow</span>
              <span class="project-tech">Postgres</span>
            </div>
            <div class="flex justify-between items-center text-xs text-gray-400">
              <span>99.9% uptime</span>
              <a href="#" class="text-primary-400 hover:underline">Implementation →</a>
            </div>
          </div>
        </article>
      </div>
    </section>

    <!-- Contact Section (Company - Professional tone) -->
    <section id="contact" class="mb-16">
      <h2 class="text-3xl font-bold mb-8 flex items-center gap-3">
        <span class="w-8 h-8 bg-accent-500/20 rounded-lg flex items-center justify-center text-sm">✉️</span>
        Professional Contact
      </h2>
      <div class="grid lg:grid-cols-2 gap-8">
        <form class="glass p-8 rounded-xl space-y-6" onsubmit="event.preventDefault(); contactDemo();">
          <div>
            <label class="block text-sm font-medium mb-2">Name</label>
            <input required id="cname" class="w-full p-3 rounded-lg bg-gray-800/50 border border-gray-600 text-white placeholder-gray-400" placeholder="Your name">
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">Email</label>
            <input required id="cemail" type="email" class="w-full p-3 rounded-lg bg-gray-800/50 border border-gray-600 text-white placeholder-gray-400" placeholder="you@company.com">
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">Message</label>
            <textarea required id="cmessage" rows="4" class="w-full p-3 rounded-lg bg-gray-800/50 border border-gray-600 text-white placeholder-gray-400" placeholder="Project requirements, timeline, budget..."></textarea>
          </div>
          <button type="submit" class="w-full bg-gradient-to-r from-primary-500 to-accent-500 text-white py-3 rounded-lg font-medium">Submit Inquiry</button>
        </form>

        <div class="space-y-6">
          <div class="glass p-6 rounded-xl">
            <h3 class="font-semibold mb-4">Direct Contact</h3>
            <div class="space-y-3 text-sm">
              <a href="mailto:subedigokul119@gmail.com" class="flex items-center gap-2 text-primary-400 hover:underline">📧 subedigokul119@gmail.com</a>
              <a href="tel:+9779812345678" class="flex items-center gap-2 text-accent-400 hover:underline">📱 +977 9812345678</a>
            </div>
          </div>
          <div class="glass p-6 rounded-xl">
            <h3 class="font-semibold mb-4">Availability</h3>
            <p class="text-sm text-gray-300 mb-4">Open for contract/employment opportunities</p>
            <div class="grid grid-cols-2 gap-4 text-xs">
              <div class="text-center p-2 bg-primary-500/10 rounded-lg"><strong>2 weeks</strong><br>Notice Period</div>
              <div class="text-center p-2 bg-accent-500/10 rounded-lg"><strong>$80-120</strong><br>Hourly Rate</div>
            </div>
          </div>
          <a href="#" onclick="alert('Download Professional CV PDF')" class="block w-full text-center bg-gradient-to-r from-primary-500 to-accent-500 text-white py-3 rounded-lg font-medium">📄 Download CV</a>
        </div>
      </div>
    </section>

    <footer class="text-center text-gray-500 text-sm py-8 border-t border-gray-800">
      © <?php echo date('Y'); ?> Gokul Subedi. Professional Portfolio.
    </footer>
  </main>

  <script>
    // GSAP Animations
    gsap.registerPlugin(ScrollTrigger);
    
    // Hero fade-in
    gsap.from(".animate-fade-in", { 
      opacity: 0, y: 30, duration: 1, ease: "power3.out" 
    });

    // Staggered reveals
    gsap.utils.toArray('.glass, .metric-card').forEach((el, i) => {
      gsap.fromTo(el, 
        { y: 30, opacity: 0 }, 
        { y: 0, opacity: 1, duration: 0.8, ease: "power3.out",
          scrollTrigger: { trigger: el, start: "top 85%" },
          delay: i * 0.1
        }
      );
    });

    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });

    // Contact form demo
    function contactDemo() {
      const btn = event.submitter;
      const original = btn.textContent;
      btn.textContent = 'Submitting...';
      btn.disabled = true;
      
      setTimeout(() => {
        btn.textContent = original;
        btn.disabled = false;
        alert('✅ Inquiry submitted. Response within 24 business hours.');
        document.querySelector('form').reset();
      }, 1500);
    }

    // Reduced motion
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      gsap.globalTimeline.timeScale(0);
    }
  </script>

</body>
</html>