<?php include 'db.php'; include 'header.php'; ?>

<!-- 1. HERO SECTION -->
<section class="relative pt-24 pb-20 lg:pt-32 lg:pb-28 overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 bg-slate-950 -z-10"></div>
    <!-- Dark boxes with white grid pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff_2px,transparent_2px),linear-gradient(to_bottom,#ffffff_2px,transparent_2px)] bg-[size:40px_40px] opacity-10 -z-10 [mask-image:radial-gradient(ellipse_80%_80%_at_50%_0%,#000_70%,transparent_100%)]"></div>
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-utsl-primary/20 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/3 -z-10"></div>
    <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-utsl-secondary/20 rounded-full blur-[100px] translate-y-1/3 -translate-x-1/4 -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="flex flex-col items-center text-center max-w-4xl mx-auto">
            
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight text-white mb-6 leading-[1.1]">
                We Build the Technology Behind <span class="text-transparent bg-clip-text bg-gradient-to-r from-utsl-primary to-utsl-secondary">Better Learning</span>
            </h1>
            
            <p class="text-lg md:text-xl text-slate-300 mb-10 max-w-2xl leading-relaxed">
                UTSL architects enterprise-grade learning management systems, AI-native tutors, and mobile apps that scale. We turn educational vision into robust software reality.
            </p>
            
            <div class="flex flex-col sm:flex-row items-center gap-4 w-full sm:w-auto">
                <a href="contact-us.php" class="w-full sm:w-auto px-8 py-4 bg-utsl-primary hover:bg-utsl-primaryHover text-white font-bold rounded-xl shadow-glow transition-all duration-300 flex items-center justify-center gap-2">
                    Talk to an Expert <i class="ph ph-arrow-right"></i>
                </a>
                <a href="case-studies.php" class="w-full sm:w-auto px-8 py-4 bg-slate-800 hover:bg-slate-700 text-white font-bold rounded-xl border border-slate-700 shadow-sm transition-all duration-300 flex items-center justify-center">
                    View Our Work
                </a>
            </div>

            <!-- Social Proof Strip -->
            <div class="mt-16 pt-8 border-t border-slate-800 w-full">
                <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-6">Trusted by innovative education leaders</p>
                <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 grayscale">
                    <span class="text-xl font-black tracking-tighter text-white">EduScale</span>
                    <span class="text-xl font-bold font-serif italic text-white">Learnify</span>
                    <span class="text-xl font-black uppercase text-white">Academix</span>
                    <span class="text-xl font-extrabold tracking-widest text-white">OASIS</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. POSITIONING SECTION -->
<section class="py-24 bg-white border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-utsl-dark mb-6 leading-tight">
                    Great educational concepts fail due to poor technical execution.
                </h2>
                <div class="space-y-6 text-lg text-slate-600">
                    <p>
                        Most development agencies don't understand the nuances of EdTech. They build generic platforms that struggle with complex learning paths, fail to integrate with standard SIS/LTI protocols, and break under high concurrent user loads.
                    </p>
                    <p class="font-semibold text-utsl-primary">
                        We are exclusively focused on educational technology.
                    </p>
                    <p>
                        Our engineering team brings deep domain expertise in SCORM/xAPI, learning analytics, and adaptive AI algorithms. We don't just write code; we partner with you to build scalable, secure, and engaging learning experiences.
                    </p>
                </div>
            </div>
            <div class="relative">
                <div class="aspect-square md:aspect-[4/3] rounded-3xl overflow-hidden shadow-premium border border-gray-100 relative z-10">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80" alt="UTSL Team collaborating" class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-8 -left-8 w-64 h-64 bg-utsl-secondary/10 rounded-full blur-3xl -z-10"></div>
            </div>
        </div>
    </div>
</section>

<!-- 3. SERVICES SECTION -->
<section class="py-24 bg-utsl-bg">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-5xl font-extrabold text-utsl-dark mb-6">Core Platform Capabilities</h2>
            <p class="text-lg text-slate-600">End-to-end engineering excellence across the entire educational technology spectrum.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <!-- Service 1 -->
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full relative overflow-hidden">
                <div class="w-12 h-12 bg-indigo-50 text-utsl-primary rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="ph ph-books text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-utsl-dark mb-2">Custom LMS Systems</h3>
                <p class="text-sm text-slate-600 mb-5 flex-grow leading-relaxed">Scalable architectures built from the ground up for massive concurrent user bases and complex reporting.</p>
                <div class="flex flex-wrap gap-2 mt-auto">
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md">REACT</span>
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md">NODE.JS</span>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
                <div class="w-12 h-12 bg-sky-50 text-utsl-secondary rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="ph ph-brain text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-utsl-dark mb-2">AI Learning Tools</h3>
                <p class="text-sm text-slate-600 mb-5 flex-grow leading-relaxed">Intelligent tutoring systems and automated grading pipelines using LLMs and advanced NLP.</p>
                <div class="flex flex-wrap gap-2 mt-auto">
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md">PYTHON</span>
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md">OPENAI</span>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
                <div class="w-12 h-12 bg-emerald-50 text-utsl-accent rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="ph ph-device-mobile text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-utsl-dark mb-2">Mobile Learning Apps</h3>
                <p class="text-sm text-slate-600 mb-5 flex-grow leading-relaxed">Native iOS and Android applications designed for offline microlearning and push engagement.</p>
                <div class="flex flex-wrap gap-2 mt-auto">
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md">REACT NATIVE</span>
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md">SWIFT</span>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
                <div class="w-12 h-12 bg-slate-100 text-slate-800 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="ph ph-plugs-connected text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-utsl-dark mb-2">System Integrations</h3>
                <p class="text-sm text-slate-600 mb-5 flex-grow leading-relaxed">Connecting SIS, HRIS, and payment gateways into unified, seamless data ecosystems using standard protocols.</p>
                <div class="flex flex-wrap gap-2 mt-auto">
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md">LTI / SCORM</span>
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md">REST API</span>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
                <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="ph ph-chart-line-up text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-utsl-dark mb-2">Learning Analytics</h3>
                <p class="text-sm text-slate-600 mb-5 flex-grow leading-relaxed">Real-time dashboards and predictive modeling for student retention, tracking progress, and course optimization.</p>
                <div class="flex flex-wrap gap-2 mt-auto">
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md">POSTGRESQL</span>
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md">SNOWFLAKE</span>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
                <div class="w-12 h-12 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="ph ph-user-gear text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-utsl-dark mb-2">CTO-as-a-Service</h3>
                <p class="text-sm text-slate-600 mb-5 flex-grow leading-relaxed">Strategic technical leadership for scaling EdTech startups and restructuring enterprise engineering teams.</p>
                <div class="flex flex-wrap gap-2 mt-auto">
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md">STRATEGY</span>
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md">ARCHITECTURE</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. NUMBERS SECTION -->
<section class="py-16 bg-white border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-4 divide-y md:divide-y-0 md:divide-x divide-gray-100">
            <div class="flex flex-col items-center justify-center pt-4 md:pt-0">
                <span class="text-3xl sm:text-4xl md:text-5xl font-black text-utsl-dark mb-2">12+</span>
                <span class="text-xs font-bold text-slate-500 tracking-widest uppercase text-center">Products Shipped</span>
            </div>
            <div class="flex flex-col items-center justify-center pt-8 md:pt-0">
                <span class="text-3xl sm:text-4xl md:text-5xl font-black text-utsl-dark mb-2">5</span>
                <span class="text-xs font-bold text-slate-500 tracking-widest uppercase text-center">Countries</span>
            </div>
            <div class="flex flex-col items-center justify-center pt-8 md:pt-0">
                <span class="text-3xl sm:text-4xl md:text-5xl font-black text-utsl-dark mb-2">500K+</span>
                <span class="text-xs font-bold text-slate-500 tracking-widest uppercase text-center">Learners Impacted</span>
            </div>
            <div class="flex flex-col items-center justify-center pt-8 md:pt-0">
                <span class="text-3xl sm:text-4xl md:text-5xl font-black text-utsl-dark mb-2">100%</span>
                <span class="text-xs font-bold text-slate-500 tracking-widest uppercase text-center">Delivery Rate</span>
            </div>
        </div>
    </div>
</section>

<!-- 5. CASE STUDIES SECTION -->
<section class="py-24 bg-utsl-bg">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div class="max-w-2xl">
                <h2 class="text-3xl md:text-5xl font-extrabold text-utsl-dark mb-4">Proven Results</h2>
                <p class="text-lg text-slate-600">See how we've transformed educational visions into highly performant realities.</p>
            </div>
            <a href="case-studies.php" class="inline-flex items-center gap-2 font-bold text-utsl-primary hover:text-utsl-primaryHover transition-colors">
                View all case studies <i class="ph ph-arrow-right"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Case Study 1 -->
            <a href="case-study-detail.php" class="group flex flex-col bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300">
                <div class="h-48 bg-slate-100 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&q=80" alt="LMS Re-architecture" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold text-slate-800 uppercase tracking-wider">Enterprise LMS</div>
                </div>
                <div class="p-8 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-utsl-dark mb-3 group-hover:text-utsl-primary transition-colors">Global Corporate Training Platform Re-architecture</h3>
                    <p class="text-slate-600 text-sm mb-6 flex-grow">Redesigned a monolithic legacy system into a scalable microservices architecture, improving concurrent user capacity by 400% and reducing server costs.</p>
                    <div class="flex items-center justify-between border-t border-gray-100 pt-4 mt-auto">
                        <div>
                            <span class="block text-xl font-black text-utsl-primary">400%</span>
                            <span class="text-[10px] font-bold text-slate-500 uppercase">Capacity Increase</span>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center group-hover:bg-utsl-primary group-hover:text-white text-utsl-primary transition-colors">
                            <i class="ph ph-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </a>
            
            <!-- Case Study 2 -->
            <a href="case-study-detail.php" class="group flex flex-col bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300">
                <div class="h-48 bg-slate-100 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?auto=format&fit=crop&q=80" alt="AI Tutor" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold text-slate-800 uppercase tracking-wider">AI Integration</div>
                </div>
                <div class="p-8 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-utsl-dark mb-3 group-hover:text-utsl-primary transition-colors">LLM-Powered Adaptive Language Tutor App</h3>
                    <p class="text-slate-600 text-sm mb-6 flex-grow">Built a mobile-first language learning application with real-time speech recognition and AI-driven conversational practice for a fast-growing startup.</p>
                    <div class="flex items-center justify-between border-t border-gray-100 pt-4 mt-auto">
                        <div>
                            <span class="block text-xl font-black text-utsl-primary">50k+</span>
                            <span class="text-[10px] font-bold text-slate-500 uppercase">Active Users</span>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center group-hover:bg-utsl-primary group-hover:text-white text-utsl-primary transition-colors">
                            <i class="ph ph-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Case Study 3 -->
            <a href="case-study-detail.php" class="group flex flex-col bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-premium hover:-translate-y-1 transition-all duration-300">
                <div class="h-48 bg-slate-100 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80" alt="University SIS Integration" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold text-slate-800 uppercase tracking-wider">Higher Ed</div>
                </div>
                <div class="p-8 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-utsl-dark mb-3 group-hover:text-utsl-primary transition-colors">Seamless University SIS & Payment Integration</h3>
                    <p class="text-slate-600 text-sm mb-6 flex-grow">Unified a fragmented ecosystem of custom tools into a single portal using GraphQL, heavily improving the student enrollment and payment experience.</p>
                    <div class="flex items-center justify-between border-t border-gray-100 pt-4 mt-auto">
                        <div>
                            <span class="block text-xl font-black text-utsl-primary">Zero</span>
                            <span class="text-[10px] font-bold text-slate-500 uppercase">Data Desyncs</span>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center group-hover:bg-utsl-primary group-hover:text-white text-utsl-primary transition-colors">
                            <i class="ph ph-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- 6. TECH STACK SECTION -->
<section class="py-24 bg-white border-t border-gray-100 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-utsl-dark mb-4">Our Technology Arsenal</h2>
            <p class="text-lg text-slate-600">We utilize modern, scalable technologies alongside specialized EdTech standards.</p>
        </div>
        
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-5 gap-8">
            <!-- Frontend -->
            <div class="flex flex-col items-center text-center p-6 bg-slate-50 rounded-2xl border border-gray-100 hover:border-utsl-secondary transition-colors">
                <i class="ph ph-layout text-4xl text-utsl-secondary mb-4"></i>
                <h4 class="font-bold text-utsl-dark mb-2">Frontend</h4>
                <p class="text-sm text-slate-500">React, Next.js, Vue, TailwindCSS, WebGL</p>
            </div>
            <!-- Backend -->
            <div class="flex flex-col items-center text-center p-6 bg-slate-50 rounded-2xl border border-gray-100 hover:border-utsl-primary transition-colors">
                <i class="ph ph-hard-drives text-4xl text-utsl-primary mb-4"></i>
                <h4 class="font-bold text-utsl-dark mb-2">Backend</h4>
                <p class="text-sm text-slate-500">Node.js, Python/Django, Go, GraphQL, Postgres</p>
            </div>
            <!-- AI -->
            <div class="flex flex-col items-center text-center p-6 bg-slate-50 rounded-2xl border border-gray-100 hover:border-purple-500 transition-colors">
                <i class="ph ph-magic-wand text-4xl text-purple-500 mb-4"></i>
                <h4 class="font-bold text-utsl-dark mb-2">AI / ML</h4>
                <p class="text-sm text-slate-500">OpenAI API, LangChain, PyTorch, HuggingFace</p>
            </div>
            <!-- EdTech Standards -->
            <div class="flex flex-col items-center text-center p-6 bg-slate-50 rounded-2xl border border-gray-100 hover:border-utsl-accent transition-colors">
                <i class="ph ph-certificate text-4xl text-utsl-accent mb-4"></i>
                <h4 class="font-bold text-utsl-dark mb-2">Standards</h4>
                <p class="text-sm text-slate-500">SCORM, xAPI, LTI 1.3, OneRoster</p>
            </div>
            <!-- Integrations -->
            <div class="flex flex-col items-center text-center p-6 bg-slate-50 rounded-2xl border border-gray-100 hover:border-orange-500 transition-colors col-span-2 lg:col-span-1">
                <i class="ph ph-arrows-merge text-4xl text-orange-500 mb-4"></i>
                <h4 class="font-bold text-utsl-dark mb-2">Integrations</h4>
                <p class="text-sm text-slate-500">Canvas, Blackboard, Stripe, Salesforce</p>
            </div>
        </div>
    </div>
</section>

<!-- 7. IDEAL CLIENTS SECTION -->
<section class="py-16 bg-utsl-dark text-white relative overflow-hidden">
    <!-- Abstract background -->
    <div class="absolute inset-0 opacity-10">
        <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0,100 C30,40 70,60 100,0 L100,100 Z" fill="url(#grad1)" />
            <defs>
                <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#4338CA" />
                    <stop offset="100%" stop-color="#0284C7" />
                </linearGradient>
            </defs>
        </svg>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-4xl font-extrabold mb-3">Who We Partner With</h2>
            <p class="text-base text-slate-400 max-w-2xl mx-auto">We bring dedicated expertise to organizations where learning is mission-critical.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div class="bg-white/5 border border-white/10 backdrop-blur-md rounded-2xl p-6 hover:bg-white/10 transition-colors">
                <div class="w-10 h-10 bg-utsl-primary rounded-full flex items-center justify-center mb-4 shadow-glow">
                    <i class="ph ph-rocket-launch text-xl text-white"></i>
                </div>
                <h3 class="text-lg font-bold mb-2">EdTech Startups</h3>
                <p class="text-sm text-slate-400 leading-relaxed">From seed-stage MVPs to Series-C scaling challenges. We help founders iterate quickly without accumulating technical debt.</p>
            </div>
            
            <div class="bg-white/5 border border-white/10 backdrop-blur-md rounded-2xl p-6 hover:bg-white/10 transition-colors">
                <div class="w-10 h-10 bg-utsl-secondary rounded-full flex items-center justify-center mb-4">
                    <i class="ph ph-buildings text-xl text-white"></i>
                </div>
                <h3 class="text-lg font-bold mb-2">Corporate L&D</h3>
                <p class="text-sm text-slate-400 leading-relaxed">Enterprise organizations seeking custom training platforms that integrate flawlessly with existing HR and management systems.</p>
            </div>
            
            <div class="bg-white/5 border border-white/10 backdrop-blur-md rounded-2xl p-6 hover:bg-white/10 transition-colors">
                <div class="w-10 h-10 bg-utsl-accent rounded-full flex items-center justify-center mb-4">
                    <i class="ph ph-bank text-xl text-white"></i>
                </div>
                <h3 class="text-lg font-bold mb-2">Universities</h3>
                <p class="text-sm text-slate-400 leading-relaxed">Institutions needing to modernize legacy systems, build custom portals, or bridge gaps between monolithic SIS vendors.</p>
            </div>
        </div>
    </div>
</section>

<!-- 8. TESTIMONIALS SECTION -->
<section class="py-24 bg-utsl-bg">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <h2 class="text-3xl md:text-4xl font-extrabold text-utsl-dark text-center mb-16">What Our Clients Say</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Quote 1 -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 flex flex-col">
                <div class="flex gap-1 text-yellow-400 mb-6 text-lg">
                    <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                </div>
                <p class="text-slate-700 italic mb-8 flex-grow">"UTSL completely transformed our approach to product development. Their deep knowledge of xAPI saved us months of misguided effort. They are true technical partners."</p>
                <div class="flex items-center gap-4 mt-auto pt-6 border-t border-gray-100">
                    <div class="w-12 h-12 bg-slate-200 rounded-full overflow-hidden">
                        <img src="https://i.pravatar.cc/150?img=68" alt="Client" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h5 class="font-bold text-utsl-dark">Sneha J.</h5>
                        <p class="text-[10px] text-slate-500 uppercase tracking-wider font-bold">CTO, EdScale</p>
                    </div>
                </div>
            </div>
            
            <!-- Quote 2 -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 flex flex-col">
                <div class="flex gap-1 text-yellow-400 mb-6 text-lg">
                    <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                </div>
                <p class="text-slate-700 italic mb-8 flex-grow">"The team at UTSL architected an AI tutoring system that exceeded our expectations. Their ability to translate educational pedagogy into scalable code is unmatched."</p>
                <div class="flex items-center gap-4 mt-auto pt-6 border-t border-gray-100">
                    <div class="w-12 h-12 bg-slate-200 rounded-full overflow-hidden">
                        <img src="https://i.pravatar.cc/150?img=33" alt="Client" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h5 class="font-bold text-utsl-dark">Mohit T.</h5>
                        <p class="text-[10px] text-slate-500 uppercase tracking-wider font-bold">VP Product, LearnCore</p>
                    </div>
                </div>
            </div>

            <!-- Quote 3 -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 flex flex-col">
                <div class="flex gap-1 text-yellow-400 mb-6 text-lg">
                    <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                </div>
                <p class="text-slate-700 italic mb-8 flex-grow">"We struggled with a legacy LMS for years before bringing UTSL on board. They modernized our entire stack while ensuring zero downtime for our thousands of learners."</p>
                <div class="flex items-center gap-4 mt-auto pt-6 border-t border-gray-100">
                    <div class="w-12 h-12 bg-slate-200 rounded-full overflow-hidden">
                        <img src="https://i.pravatar.cc/150?img=47" alt="Client" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h5 class="font-bold text-utsl-dark">Ekta R.</h5>
                        <p class="text-[10px] text-slate-500 uppercase tracking-wider font-bold">Director of L&D, GlobalTech</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 9. MID-PAGE CTA SECTION -->
<section class="py-12 bg-utsl-primary relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMjAiIGN5PSIyMCIgcj0iMSIgZmlsbD0icmdiYSgyNTUsIDI1NSwgMjU1LCAwLjIpIi8+PC9zdmc+')] opacity-50"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
    
    <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
        <h2 class="text-2xl md:text-3xl font-extrabold text-white mb-3">Ready to scale your EdTech vision?</h2>
        <p class="text-indigo-100 text-base mb-6 max-w-2xl mx-auto">Let's discuss your architecture, integration challenges, or product roadmap.</p>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-3">
            <a href="contact-us.php" class="w-full sm:w-auto px-6 py-3 text-sm bg-white text-utsl-primary font-bold rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                Book a Technical Consultation
            </a>
            <a href="services.php" class="w-full sm:w-auto px-6 py-3 text-sm bg-transparent border-2 border-white/30 text-white font-bold rounded-xl hover:bg-white/10 transition-all duration-300">
                Explore Our Services
            </a>
        </div>
    </div>
</section>

<!-- 10. BLOG/CONTENT STRATEGY SECTION -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-utsl-dark mb-4">Latest Insights</h2>
                <p class="text-slate-600">Engineering perspectives on the future of learning.</p>
            </div>
            <a href="articles.php" class="hidden md:inline-flex items-center gap-2 font-bold text-utsl-primary hover:text-utsl-primaryHover transition-colors">
                View all articles <i class="ph ph-arrow-right"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <a href="article-detail.php?id=microservices" class="group flex flex-col h-full border border-gray-100 rounded-3xl p-6 hover:shadow-premium hover:-translate-y-1 transition-all duration-300">
                <div class="flex gap-2 mb-4">
                    <span class="text-[10px] font-bold px-2 py-1 bg-indigo-50 text-utsl-primary rounded uppercase tracking-wider">Architecture</span>
                </div>
                <h3 class="text-xl font-bold text-utsl-dark mb-3 group-hover:text-utsl-primary transition-colors">The Microservices Approach to Scalable LMS Architecture</h3>
                <p class="text-slate-500 text-sm mb-6 flex-grow">Why monolithic learning platforms fail at scale and how to transition gracefully.</p>
                <div class="flex items-center justify-between border-t border-gray-100 pt-4 mt-auto">
                    <span class="text-sm font-bold text-utsl-primary">Read Article</span>
                    <div class="w-8 h-8 rounded-full bg-indigo-50 flex items-center justify-center group-hover:bg-utsl-primary group-hover:text-white text-utsl-primary transition-colors">
                        <i class="ph ph-arrow-right"></i>
                    </div>
                </div>
            </a>

            <!-- Article 2 -->
            <a href="article-detail.php?id=rag-ai" class="group flex flex-col h-full border border-gray-100 rounded-3xl p-6 hover:shadow-premium hover:-translate-y-1 transition-all duration-300">
                <div class="flex gap-2 mb-4">
                    <span class="text-[10px] font-bold px-2 py-1 bg-purple-50 text-purple-600 rounded uppercase tracking-wider">AI Integration</span>
                </div>
                <h3 class="text-xl font-bold text-utsl-dark mb-3 group-hover:text-utsl-primary transition-colors">Implementing RAG for Hallucination-Free AI Tutors</h3>
                <p class="text-slate-500 text-sm mb-6 flex-grow">A technical dive into building reliable generative AI features using your own curriculum data.</p>
                <div class="flex items-center justify-between border-t border-gray-100 pt-4 mt-auto">
                    <span class="text-sm font-bold text-utsl-primary">Read Article</span>
                    <div class="w-8 h-8 rounded-full bg-purple-50 flex items-center justify-center group-hover:bg-utsl-primary group-hover:text-white text-purple-600 transition-colors">
                        <i class="ph ph-arrow-right"></i>
                    </div>
                </div>
            </a>

            <!-- Article 3 -->
            <a href="article-detail.php?id=scorm-xapi" class="group flex flex-col h-full border border-gray-100 rounded-3xl p-6 hover:shadow-premium hover:-translate-y-1 transition-all duration-300">
                <div class="flex gap-2 mb-4">
                    <span class="text-[10px] font-bold px-2 py-1 bg-emerald-50 text-emerald-600 rounded uppercase tracking-wider">Standards</span>
                </div>
                <h3 class="text-xl font-bold text-utsl-dark mb-3 group-hover:text-utsl-primary transition-colors">SCORM vs xAPI: Which Should You Support in 2024?</h3>
                <p class="text-slate-500 text-sm mb-6 flex-grow">A developer's guide to modern EdTech interoperability standards and implementation strategies.</p>
                <div class="flex items-center justify-between border-t border-gray-100 pt-4 mt-auto">
                    <span class="text-sm font-bold text-utsl-primary">Read Article</span>
                    <div class="w-8 h-8 rounded-full bg-emerald-50 flex items-center justify-center group-hover:bg-utsl-primary group-hover:text-white text-emerald-600 transition-colors">
                        <i class="ph ph-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>


        
        <div class="mt-8 md:hidden">
            <a href="articles.php" class="inline-flex w-full justify-center items-center gap-2 font-bold text-utsl-primary bg-indigo-50 hover:bg-indigo-100 py-4 rounded-xl transition-colors">
                View all articles <i class="ph ph-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
