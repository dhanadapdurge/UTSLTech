<?php include 'db.php'; include 'header.php'; ?>

<!-- 1. HERO SECTION -->
<section class="relative pt-32 pb-28 lg:pt-48 lg:pb-40 overflow-hidden bg-utsl-dark z-0 border-b border-white/10">
    <!-- Premium Dark Background Elements -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=2000')] bg-cover bg-center -z-10"></div>
    <div class="absolute inset-0 bg-slate-900/80 -z-10"></div>
    
    <!-- Glowing Orbs -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-utsl-primary/20 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/3 pointer-events-none -z-10"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-indigo-500/20 rounded-full blur-[100px] translate-y-1/3 -translate-x-1/3 pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10 text-center">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 shadow-sm mb-6 transform hover:-translate-y-0.5 transition-transform backdrop-blur-md cursor-default">
            <i class="ph ph-rocket-launch text-utsl-primary font-bold"></i>
            <span class="text-xs font-semibold text-white tracking-wide uppercase">Join The Team</span>
        </div>
        
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-white mb-6">
            Build the Future of <br class="hidden md:block">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-utsl-primary to-indigo-400">Education Technology</span>
        </h1>
        
        <p class="text-base md:text-lg text-slate-300 max-w-3xl mx-auto mb-10 leading-relaxed">
            Join a passionate, remote-first team of engineers, designers, and innovators dedicated to transforming how the world learns through AI and scalable platforms.
        </p>

        <a href="#open-roles" class="inline-flex items-center gap-2 px-8 py-4 bg-utsl-primary hover:bg-utsl-primaryHover text-white font-bold rounded-xl shadow-glow hover:-translate-y-1 transition-all duration-300">
            View Open Roles <i class="ph ph-arrow-down"></i>
        </a>
    </div>
</section>

<!-- 2. WHY UTSL TECH (BENEFITS) -->
<section class="py-24 bg-[#faf9f6]">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-utsl-primary font-bold tracking-widest text-xs uppercase mb-3 block">Perks & Benefits</span>
            <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-6">Why work with us?</h2>
            <p class="text-base text-slate-600">We take care of our team so they can focus on doing their best work. Here is what you get when you join UTSL Technology.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Benefit 1 -->
            <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all group">
                <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <i class="ph ph-globe-hemisphere-west text-3xl"></i>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Remote-First</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Work from anywhere. We value output and communication over sitting in a specific office chair.</p>
            </div>
            <!-- Benefit 2 -->
            <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all group">
                <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                    <i class="ph ph-heartbeat text-3xl"></i>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Full Healthcare</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Comprehensive medical, dental, and vision coverage for you and your dependents.</p>
            </div>
            <!-- Benefit 3 -->
            <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all group">
                <div class="w-14 h-14 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-purple-600 group-hover:text-white transition-all">
                    <i class="ph ph-books text-3xl"></i>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Learning Budget</h3>
                <p class="text-slate-600 text-sm leading-relaxed">An annual stipend for courses, conferences, and books to fuel your continuous growth.</p>
            </div>
            <!-- Benefit 4 -->
            <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all group">
                <div class="w-14 h-14 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-amber-600 group-hover:text-white transition-all">
                    <i class="ph ph-chart-line-up text-3xl"></i>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">Stock Options</h3>
                <p class="text-slate-600 text-sm leading-relaxed">We want you to own a piece of what you build. Generous equity packages for all employees.</p>
            </div>
        </div>
    </div>
</section>

<!-- 3. OPEN POSITIONS -->
<section id="open-roles" class="py-24 bg-white border-t border-gray-100">
    <div class="max-w-5xl mx-auto px-4 md:px-6">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16">
            <div>
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-4">Open Positions</h2>
                <p class="text-base text-slate-600">Find your perfect fit and help us build the future of education.</p>
            </div>
            <!-- Optional Filter (Static for now) -->
            <div class="flex gap-2" id="job-filters">
                <button data-filter="all" class="filter-btn px-4 py-2 text-sm font-semibold text-white bg-slate-900 border border-transparent rounded-lg transition-colors">All Roles</button>
                <button data-filter="engineering" class="filter-btn px-4 py-2 text-sm font-semibold text-slate-600 bg-gray-50 hover:bg-gray-100 border border-gray-200 rounded-lg transition-colors">Engineering</button>
                <button data-filter="design" class="filter-btn px-4 py-2 text-sm font-semibold text-slate-600 bg-gray-50 hover:bg-gray-100 border border-gray-200 rounded-lg transition-colors">Design</button>
            </div>
        </div>

        <div class="space-y-4">
            
            <!-- Job 1 -->
            <a href="apply.php" class="job-card block bg-white border border-gray-100 hover:border-utsl-primary/50 shadow-sm hover:shadow-md rounded-2xl p-6 md:p-8 transition-all group" data-category="engineering">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div>
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 text-xs font-bold rounded-full">Engineering</span>
                            <span class="px-3 py-1 bg-gray-100 text-slate-600 text-xs font-bold rounded-full">Remote</span>
                            <span class="px-3 py-1 bg-emerald-50 text-emerald-600 text-xs font-bold rounded-full">Full-Time</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-utsl-primary transition-colors">Senior Full-Stack PHP Engineer</h3>
                        <p class="text-slate-500 text-sm">Lead the development of scalable LMS architectures and custom educational platforms.</p>
                    </div>
                    <div class="shrink-0 flex items-center justify-between md:justify-end gap-4 w-full md:w-auto mt-4 md:mt-0">
                        <span class="text-sm font-bold text-slate-400 group-hover:text-utsl-primary transition-colors">Apply Now</span>
                        <div class="w-10 h-10 rounded-full bg-gray-50 group-hover:bg-utsl-primary/10 flex items-center justify-center transition-colors">
                            <i class="ph ph-arrow-right text-slate-400 group-hover:text-utsl-primary transition-colors"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Job 2 -->
            <a href="apply.php" class="job-card block bg-white border border-gray-100 hover:border-utsl-primary/50 shadow-sm hover:shadow-md rounded-2xl p-6 md:p-8 transition-all group" data-category="engineering ai">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div>
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            <span class="px-3 py-1 bg-purple-50 text-purple-600 text-xs font-bold rounded-full">AI / ML</span>
                            <span class="px-3 py-1 bg-gray-100 text-slate-600 text-xs font-bold rounded-full">Pune, India / Remote</span>
                            <span class="px-3 py-1 bg-emerald-50 text-emerald-600 text-xs font-bold rounded-full">Full-Time</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-utsl-primary transition-colors">AI Integration Specialist</h3>
                        <p class="text-slate-500 text-sm">Build intelligent, safe AI tools (like grading assistants and tutors) specifically for educational environments.</p>
                    </div>
                    <div class="shrink-0 flex items-center justify-between md:justify-end gap-4 w-full md:w-auto mt-4 md:mt-0">
                        <span class="text-sm font-bold text-slate-400 group-hover:text-utsl-primary transition-colors">Apply Now</span>
                        <div class="w-10 h-10 rounded-full bg-gray-50 group-hover:bg-utsl-primary/10 flex items-center justify-center transition-colors">
                            <i class="ph ph-arrow-right text-slate-400 group-hover:text-utsl-primary transition-colors"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Job 3 -->
            <a href="apply.php" class="job-card block bg-white border border-gray-100 hover:border-utsl-primary/50 shadow-sm hover:shadow-md rounded-2xl p-6 md:p-8 transition-all group" data-category="design">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div>
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            <span class="px-3 py-1 bg-rose-50 text-rose-600 text-xs font-bold rounded-full">Design</span>
                            <span class="px-3 py-1 bg-gray-100 text-slate-600 text-xs font-bold rounded-full">Remote</span>
                            <span class="px-3 py-1 bg-emerald-50 text-emerald-600 text-xs font-bold rounded-full">Full-Time</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-utsl-primary transition-colors">Senior Product Designer (UI/UX)</h3>
                        <p class="text-slate-500 text-sm">Design intuitive, accessible, and beautiful interfaces for our mobile EdTech apps and dashboards.</p>
                    </div>
                    <div class="shrink-0 flex items-center justify-between md:justify-end gap-4 w-full md:w-auto mt-4 md:mt-0">
                        <span class="text-sm font-bold text-slate-400 group-hover:text-utsl-primary transition-colors">Apply Now</span>
                        <div class="w-10 h-10 rounded-full bg-gray-50 group-hover:bg-utsl-primary/10 flex items-center justify-center transition-colors">
                            <i class="ph ph-arrow-right text-slate-400 group-hover:text-utsl-primary transition-colors"></i>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const jobCards = document.querySelectorAll('.job-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active button styling
                filterBtns.forEach(b => {
                    b.classList.remove('text-white', 'bg-slate-900', 'border-transparent');
                    b.classList.add('text-slate-600', 'bg-gray-50', 'border-gray-200');
                });
                btn.classList.add('text-white', 'bg-slate-900', 'border-transparent');
                btn.classList.remove('text-slate-600', 'bg-gray-50', 'border-gray-200');

                // Filter cards
                const filter = btn.getAttribute('data-filter');
                jobCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category').includes(filter)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
<!-- 4. CTA -->
<section class="py-20 bg-utsl-dark text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5 mix-blend-overlay"></div>
    <div class="max-w-3xl mx-auto px-4 relative z-10">
        <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Don't see a perfect fit?</h2>
        <p class="text-lg text-slate-300 mb-10">We are always looking for talented individuals who are passionate about EdTech. Send us your resume anyway.</p>
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=support@utsltech.com" target="_blank" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-utsl-dark font-bold rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
            Email your Resume <i class="ph ph-paper-plane-tilt"></i>
        </a>
    </div>
</section>

<?php include 'footer.php'; ?>
