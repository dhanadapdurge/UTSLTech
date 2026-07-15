<?php include 'db.php'; include 'header.php'; ?>

<!-- 1. HERO SECTION -->
<section class="relative pt-16 pb-12 lg:pt-24 lg:pb-16 overflow-hidden bg-[#faf9f6] z-0 border-b border-gray-100">
    <!-- Clean Light Background Elements -->
    <div class="absolute top-0 inset-x-0 h-[600px] bg-gradient-to-b from-indigo-50/80 via-indigo-50/20 to-transparent -z-10"></div>
    
    <!-- Checkered Grid Background -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#e5e7eb_1px,transparent_1px),linear-gradient(to_bottom,#e5e7eb_1px,transparent_1px)] bg-[size:4rem_4rem] -z-10"></div>
    
    <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10 text-center">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-gray-200 shadow-sm mb-6 transform hover:-translate-y-0.5 transition-transform cursor-default">
            <i class="ph ph-eye text-blue-500 font-bold"></i>
            <span class="text-xs font-semibold text-slate-700 tracking-wide">Portfolio Showcase</span>
        </div>
        
        <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-slate-900 mb-6">
            Success <span class="text-slate-500">Stories</span> in Action
        </h1>
        
        <p class="text-lg text-slate-500 max-w-3xl mx-auto mb-16 leading-relaxed">
            Discover how our AI-powered solutions have transformed businesses across industries, delivering measurable results and competitive advantages.
        </p>

        <!-- Filters -->
        <div class="flex flex-wrap justify-center gap-3" id="portfolio-filters">
            <button data-filter="all" class="filter-btn active bg-slate-700 text-white font-semibold py-2 px-5 rounded-md text-sm shadow-md transition-all">All</button>
            <button data-filter="ai-auto" class="filter-btn bg-gray-100 text-slate-700 font-semibold py-2 px-5 rounded-md text-sm transition-all hover:bg-gray-200">AI Automation</button>
            <button data-filter="healthcare" class="filter-btn bg-gray-100 text-slate-700 font-semibold py-2 px-5 rounded-md text-sm transition-all hover:bg-gray-200">Healthcare AI</button>
            <button data-filter="edtech" class="filter-btn bg-gray-100 text-slate-700 font-semibold py-2 px-5 rounded-md text-sm transition-all hover:bg-gray-200">EdTech Platform</button>
            <button data-filter="retail" class="filter-btn bg-gray-100 text-slate-700 font-semibold py-2 px-5 rounded-md text-sm transition-all hover:bg-gray-200">Retail Analytics</button>
            <button data-filter="fintech" class="filter-btn bg-gray-100 text-slate-700 font-semibold py-2 px-5 rounded-md text-sm transition-all hover:bg-gray-200">FinTech</button>
            <button data-filter="supply" class="filter-btn bg-gray-100 text-slate-700 font-semibold py-2 px-5 rounded-md text-sm transition-all hover:bg-gray-200">Supply Chain</button>
            <button data-filter="digital" class="filter-btn bg-gray-100 text-slate-700 font-semibold py-2 px-5 rounded-md text-sm transition-all hover:bg-gray-200">Digital Transformation</button>
            <button data-filter="mobile" class="filter-btn bg-gray-100 text-slate-700 font-semibold py-2 px-5 rounded-md text-sm transition-all hover:bg-gray-200">Mobile App Development</button>
        </div>
    </div>
</section>

<!-- 2. CASE STUDIES GRID -->
<section class="py-16 bg-[#faf9f6]">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
            
            <!-- Card 1 -->
            <div onclick="window.location.href='case-study-detail.php'" class="case-item bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 flex flex-col group cursor-pointer transition-all duration-300" data-category="ai-auto">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-6 text-center">
                        <p class="text-white text-sm font-medium mb-4">Reduced HR onboarding time by 62% using AI automation and intelligent workflow orchestration.</p>
                        <span class="text-white/80 text-xs font-semibold flex items-center gap-1">View Full Case Study <i class="ph ph-arrow-right"></i></span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-full">AI Automation</span>
                        <span class="px-3 py-1 border border-gray-200 text-gray-700 text-[10px] font-semibold rounded-full">Enterprise Software</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-6">TechCorp Industries</h3>
                    <div class="mt-auto flex items-center justify-between text-sm text-gray-500">
                        <span>Click to explore</span>
                        <i class="ph ph-arrow-square-out text-lg"></i>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div onclick="window.location.href='case-study-detail.php'" class="case-item bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 flex flex-col group cursor-pointer transition-all duration-300" data-category="healthcare">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-6 text-center">
                        <p class="text-white text-sm font-medium mb-4">Deployed a predictive AI model to reduce patient readmissions by 24%.</p>
                        <span class="text-white/80 text-xs font-semibold flex items-center gap-1">View Full Case Study <i class="ph ph-arrow-right"></i></span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-full">Healthcare AI</span>
                        <span class="px-3 py-1 border border-gray-200 text-gray-700 text-[10px] font-semibold rounded-full">Healthcare</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-6">MediHealth Network</h3>
                    <div class="mt-auto flex items-center justify-between text-sm text-gray-500">
                        <span>Click to explore</span>
                        <i class="ph ph-arrow-square-out text-lg"></i>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div onclick="window.location.href='case-study-detail.php'" class="case-item bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 flex flex-col group cursor-pointer transition-all duration-300" data-category="edtech">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-6 text-center">
                        <p class="text-white text-sm font-medium mb-4">Rebuilt core LMS architecture to support 100k+ concurrent users with zero downtime.</p>
                        <span class="text-white/80 text-xs font-semibold flex items-center gap-1">View Full Case Study <i class="ph ph-arrow-right"></i></span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-full">EdTech Platform</span>
                        <span class="px-3 py-1 border border-gray-200 text-gray-700 text-[10px] font-semibold rounded-full">Education</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-6">EduTech Global</h3>
                    <div class="mt-auto flex items-center justify-between text-sm text-gray-500">
                        <span>Click to explore</span>
                        <i class="ph ph-arrow-square-out text-lg"></i>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div onclick="window.location.href='case-study-detail.php'" class="case-item bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 flex flex-col group cursor-pointer transition-all duration-300" data-category="retail">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-6 text-center">
                        <p class="text-white text-sm font-medium mb-4">Leveraged data analytics to optimize inventory distribution across 500+ locations.</p>
                        <span class="text-white/80 text-xs font-semibold flex items-center gap-1">View Full Case Study <i class="ph ph-arrow-right"></i></span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-full">Retail Analytics</span>
                        <span class="px-3 py-1 border border-gray-200 text-gray-700 text-[10px] font-semibold rounded-full">Retail</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-6">RetailMax Chain</h3>
                    <div class="mt-auto flex items-center justify-between text-sm text-gray-500">
                        <span>Click to explore</span>
                        <i class="ph ph-arrow-square-out text-lg"></i>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div onclick="window.location.href='case-study-detail.php'" class="case-item bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 flex flex-col group cursor-pointer transition-all duration-300" data-category="fintech">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1518186285589-2f7649de83e0?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-6 text-center">
                        <p class="text-white text-sm font-medium mb-4">Developed a real-time fraud detection engine blocking 99.9% of suspicious transactions.</p>
                        <span class="text-white/80 text-xs font-semibold flex items-center gap-1">View Full Case Study <i class="ph ph-arrow-right"></i></span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-full">FinTech</span>
                        <span class="px-3 py-1 border border-gray-200 text-gray-700 text-[10px] font-semibold rounded-full">Financial Services</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-6">FinanceFlow Solutions</h3>
                    <div class="mt-auto flex items-center justify-between text-sm text-gray-500">
                        <span>Click to explore</span>
                        <i class="ph ph-arrow-square-out text-lg"></i>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div onclick="window.location.href='case-study-detail.php'" class="case-item bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 flex flex-col group cursor-pointer transition-all duration-300" data-category="supply">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-6 text-center">
                        <p class="text-white text-sm font-medium mb-4">End-to-end supply chain visibility dashboard connecting 30+ global logistics partners.</p>
                        <span class="text-white/80 text-xs font-semibold flex items-center gap-1">View Full Case Study <i class="ph ph-arrow-right"></i></span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-full">Supply Chain</span>
                        <span class="px-3 py-1 border border-gray-200 text-gray-700 text-[10px] font-semibold rounded-full">Logistics</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-6">LogiTech Transport</h3>
                    <div class="mt-auto flex items-center justify-between text-sm text-gray-500">
                        <span>Click to explore</span>
                        <i class="ph ph-arrow-square-out text-lg"></i>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div onclick="window.location.href='case-study-detail.php'" class="case-item bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 flex flex-col group cursor-pointer transition-all duration-300" data-category="digital">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-6 text-center">
                        <p class="text-white text-sm font-medium mb-4">Digitized 20 years of legacy data into a highly searchable cloud infrastructure.</p>
                        <span class="text-white/80 text-xs font-semibold flex items-center gap-1">View Full Case Study <i class="ph ph-arrow-right"></i></span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-full">Digital Transformation</span>
                        <span class="px-3 py-1 border border-gray-200 text-gray-700 text-[10px] font-semibold rounded-full">Commodity Research</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-6">Global Commodity Research Company</h3>
                    <div class="mt-auto flex items-center justify-between text-sm text-gray-500">
                        <span>Click to explore</span>
                        <i class="ph ph-arrow-square-out text-lg"></i>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div onclick="window.location.href='case-study-detail.php'" class="case-item bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 flex flex-col group cursor-pointer transition-all duration-300" data-category="mobile">
                <div class="relative h-56 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-slate-900/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-6 text-center">
                        <p class="text-white text-sm font-medium mb-4">Built a cross-platform mobile app that topped the health category charts within weeks.</p>
                        <span class="text-white/80 text-xs font-semibold flex items-center gap-1">View Full Case Study <i class="ph ph-arrow-right"></i></span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-full">Mobile App Development</span>
                        <span class="px-3 py-1 border border-gray-200 text-gray-700 text-[10px] font-semibold rounded-full">Mental Health & Wellness</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-6">Renowned Life Coach - Mental Wellness Platform</h3>
                    <div class="mt-auto flex items-center justify-between text-sm text-gray-500">
                        <span>Click to explore</span>
                        <i class="ph ph-arrow-square-out text-lg"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 3. CTA -->
<section class="py-24 bg-white border-t border-slate-100">
    <div class="max-w-4xl mx-auto px-4 md:px-6 text-center">
        <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-6">Have a similar project in mind?</h2>
        <p class="text-lg text-slate-600 mb-10">We're always looking for ambitious technical challenges to solve.</p>
        <a href="contact-us.php" class="inline-flex items-center gap-2 px-8 py-4 bg-utsl-primary hover:bg-utsl-primaryHover text-white font-bold rounded-xl shadow-glow hover:-translate-y-1 transition-all duration-300">
            Let's Talk About Your Project <i class="ph ph-arrow-right"></i>
        </a>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const caseItems = document.querySelectorAll('.case-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filterValue = btn.getAttribute('data-filter');

            // Update button styles
            filterBtns.forEach(b => {
                b.classList.remove('active', 'bg-slate-700', 'text-white', 'shadow-md');
                b.classList.add('bg-gray-100', 'text-slate-700');
            });

            // Activate clicked button
            btn.classList.add('active', 'bg-slate-700', 'text-white', 'shadow-md');
            btn.classList.remove('bg-gray-100', 'text-slate-700');

            // Filter items
            caseItems.forEach(item => {
                const category = item.getAttribute('data-category');
                
                if (filterValue === 'all' || filterValue === category) {
                    item.style.display = 'flex';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
});
</script>

<?php include 'footer.php'; ?>
