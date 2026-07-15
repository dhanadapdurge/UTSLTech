<?php 
$page_title = 'Case Studies | UTSL Technology';
$page_description = 'In-depth analyses of our most impactful EdTech and enterprise software projects.';
include 'db.php'; 
include 'header.php'; 
?>

<!-- 1. HERO SECTION (Editorial Light) -->
<section class="relative pt-12 pb-12 lg:pt-16 lg:pb-16 bg-slate-50 z-0 border-b border-gray-100">
    <!-- Checkered Grid Background -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:40px_40px] -z-10 [mask-image:radial-gradient(ellipse_80%_80%_at_50%_0%,#000_70%,transparent_100%)]"></div>
    
    <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10 text-center flex flex-col items-center">
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white border border-gray-200 mb-6 shadow-sm">
            <span class="flex h-2 w-2 rounded-full bg-utsl-primary"></span>
            <span class="text-xs font-bold tracking-widest uppercase text-slate-500">In-Depth Analysis</span>
        </div>
        
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-black tracking-tight text-slate-900 mb-6">
            Case Studies
        </h1>
        
        <p class="text-base md:text-lg text-slate-500 max-w-2xl mx-auto leading-relaxed">
            We don't just write code; we solve complex business problems. Dive deep into the architecture, challenges, and measurable outcomes of our flagship projects.
        </p>
    </div>
</section>

<!-- 2. FEATURED CASE STUDY 1 -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left: Content -->
            <div class="order-2 lg:order-1">
                <div class="flex items-center gap-3 mb-6">
                    <span class="px-3 py-1 bg-indigo-50 text-utsl-primary text-xs font-bold uppercase tracking-wider rounded-md">EdTech Platform</span>
                    <span class="text-sm font-semibold text-slate-400">01</span>
                </div>
                
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-6 leading-tight">
                    Global Corporate Training Platform Re-architecture
                </h2>
                
                <p class="text-base text-slate-600 mb-8 leading-relaxed">
                    TechCorp Industries was struggling with a monolithic legacy LMS that crashed during peak usage. We executed a complete tear-down and rebuilt the platform using a highly scalable microservices architecture.
                </p>
                
                <!-- Impact Metrics -->
                <div class="grid grid-cols-2 gap-6 mb-10">
                    <div class="p-6 bg-slate-50 rounded-2xl border border-gray-100">
                        <div class="text-3xl font-black text-utsl-primary mb-2">400%</div>
                        <div class="text-sm font-bold text-slate-500 uppercase tracking-wide">Capacity Increase</div>
                    </div>
                    <div class="p-6 bg-slate-50 rounded-2xl border border-gray-100">
                        <div class="text-3xl font-black text-utsl-accent mb-2">Zero</div>
                        <div class="text-sm font-bold text-slate-500 uppercase tracking-wide">Downtime Incidents</div>
                    </div>
                </div>
                
                <a href="case-study-detail.php?id=lms" class="inline-flex items-center gap-3 font-bold text-slate-900 hover:text-utsl-primary transition-colors group text-lg">
                    Read the full case study 
                    <span class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center group-hover:bg-utsl-primary group-hover:text-white transition-all duration-300">
                        <i class="ph ph-arrow-right"></i>
                    </span>
                </a>
            </div>
            
            <!-- Right: Image -->
            <div class="order-1 lg:order-2">
                <div class="relative rounded-[2rem] overflow-hidden shadow-2xl aspect-[4/3] group">
                    <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&q=80" alt="LMS Architecture" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- 3. FEATURED CASE STUDY 2 (Dark Mode Alternate) -->
<section class="py-24 bg-slate-900 text-white relative overflow-hidden">
    <!-- Decor -->
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
    <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-purple-500/20 rounded-full blur-[100px]"></div>

    <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left: Image -->
            <div>
                <div class="relative rounded-[2rem] overflow-hidden shadow-2xl aspect-[4/3] group border border-white/10">
                    <img src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?auto=format&fit=crop&q=80" alt="AI Language Tutor" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-utsl-primary/20 mix-blend-overlay"></div>
                </div>
            </div>

            <!-- Right: Content -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <span class="px-3 py-1 bg-white/10 text-white text-xs font-bold uppercase tracking-wider rounded-md border border-white/10">AI Integration</span>
                    <span class="text-sm font-semibold text-slate-500">02</span>
                </div>
                
                <h2 class="text-3xl md:text-4xl font-black mb-6 leading-tight">
                    LLM-Powered Adaptive Language Tutor
                </h2>
                
                <p class="text-base text-slate-400 mb-8 leading-relaxed">
                    We partnered with a fast-growing startup to build a mobile-first language learning application featuring real-time speech recognition and AI-driven conversational practice using custom-trained LLMs.
                </p>
                
                <!-- Impact Metrics -->
                <div class="grid grid-cols-2 gap-6 mb-10">
                    <div class="p-6 bg-white/5 rounded-2xl border border-white/10">
                        <div class="text-3xl font-black text-white mb-2">50k+</div>
                        <div class="text-sm font-bold text-slate-400 uppercase tracking-wide">Active Users</div>
                    </div>
                    <div class="p-6 bg-white/5 rounded-2xl border border-white/10">
                        <div class="text-3xl font-black text-purple-400 mb-2">&lt;200ms</div>
                        <div class="text-sm font-bold text-slate-400 uppercase tracking-wide">AI Response Latency</div>
                    </div>
                </div>
                
                <a href="case-study-detail.php?id=ai-tutor" class="inline-flex items-center gap-3 font-bold text-white hover:text-utsl-primary transition-colors group text-lg">
                    Read the full case study 
                    <span class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center group-hover:bg-utsl-primary transition-all duration-300">
                        <i class="ph ph-arrow-right"></i>
                    </span>
                </a>
            </div>
            
        </div>
    </div>
</section>

<!-- 4. FEATURED CASE STUDY 3 -->
<section class="py-24 bg-[#faf9f6]">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left: Content -->
            <div class="order-2 lg:order-1">
                <div class="flex items-center gap-3 mb-6">
                    <span class="px-3 py-1 bg-indigo-50 text-utsl-primary text-xs font-bold uppercase tracking-wider rounded-md">Higher Ed</span>
                    <span class="text-sm font-semibold text-slate-400">03</span>
                </div>
                
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-6 leading-tight">
                    Seamless University SIS & Payment Integration
                </h2>
                
                <p class="text-base text-slate-600 mb-8 leading-relaxed">
                    A major university's fragmented digital ecosystem was causing severe enrollment delays. We unified their custom tools into a single, cohesive portal using a robust GraphQL federation layer.
                </p>
                
                <!-- Impact Metrics -->
                <div class="grid grid-cols-2 gap-6 mb-10">
                    <div class="p-6 bg-white rounded-2xl border border-gray-200 shadow-sm">
                        <div class="text-3xl font-black text-utsl-primary mb-2">60%</div>
                        <div class="text-sm font-bold text-slate-500 uppercase tracking-wide">Faster Enrollment</div>
                    </div>
                    <div class="p-6 bg-white rounded-2xl border border-gray-200 shadow-sm">
                        <div class="text-3xl font-black text-utsl-accent mb-2">Zero</div>
                        <div class="text-sm font-bold text-slate-500 uppercase tracking-wide">Data Desyncs</div>
                    </div>
                </div>
                
                <a href="case-study-detail.php?id=sis" class="inline-flex items-center gap-3 font-bold text-slate-900 hover:text-utsl-primary transition-colors group text-lg">
                    Read the full case study 
                    <span class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center group-hover:bg-utsl-primary group-hover:text-white transition-all duration-300">
                        <i class="ph ph-arrow-right"></i>
                    </span>
                </a>
            </div>
            
            <!-- Right: Image -->
            <div class="order-1 lg:order-2">
                <div class="relative rounded-[2rem] overflow-hidden shadow-2xl aspect-[4/3] group">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80" alt="University Campus" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- 5. CTA / MORE WORK -->
<section class="py-24 bg-white border-t border-slate-100">
    <div class="max-w-4xl mx-auto px-4 md:px-6 text-center">
        <h2 class="text-2xl md:text-4xl font-extrabold text-slate-900 mb-6">Looking for more?</h2>
        <p class="text-base text-slate-600 mb-10">We have completed dozens of complex software projects across multiple industries. Browse our full portfolio gallery to see the breadth of our work.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="portfolio.php" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-slate-900 hover:bg-slate-800 text-white font-bold rounded-xl shadow-lg transition-all duration-300">
                View Full Portfolio
            </a>
            <a href="contact-us.php" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-utsl-primary hover:bg-utsl-primaryHover text-white font-bold rounded-xl shadow-glow hover:-translate-y-1 transition-all duration-300">
                Start Your Project <i class="ph ph-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
