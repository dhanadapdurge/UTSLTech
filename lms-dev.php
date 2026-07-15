<?php include 'db.php'; include 'header.php'; ?>

<!-- 1. Hero H1 + Lead (Enhanced Aesthetics) -->
<section class="relative max-w-7xl mx-auto px-4 md:px-6 py-16 md:py-20 text-center overflow-hidden">
    <!-- Decorative Background Elements -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-utsl-primary/10 rounded-full blur-[80px] -z-10"></div>
    <div class="absolute top-0 right-0 w-[300px] h-[300px] bg-utsl-secondary/10 rounded-full blur-[60px] -z-10"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0wIDBoNDB2NDBIMHoiIGZpbGw9Im5vbmUiLz4KPHBhdGggZD0iTTAgMGgxdjQwSDB6TTM5IDBoMXY0MEgzOXoiIGZpbGw9InJnYmEoMCwwLDAsMC4wMikiLz4KPHBhdGggZD0iTTAgMGg0MHYxSDB6TTAgMzloNDB2MUgweiIgZmlsbD0icmdiYSgwLDAsMCwwLjAyKSIvPgo8L3N2Zz4=')] opacity-50 -z-10"></div>

    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-indigo-50 border border-indigo-100 text-indigo-700 font-bold text-xs tracking-wide mb-6 shadow-sm">
        <span class="relative flex h-2 w-2">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
        </span>
        Platform Engineering
    </div>
    
    <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight tracking-tight text-gray-900 mb-6">
        Custom <span class="text-transparent bg-clip-text bg-gradient-to-r from-utsl-primary to-utsl-secondary">Learning Management System (LMS)</span> Development Services
    </h1>
    
    <p class="text-base md:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed font-medium">
        We build bespoke, scalable, and secure eLearning platforms. Escape the limitations of off-the-shelf software with a proprietary LMS tailored exactly to your business model, courses, and learners.
    </p>
</section>

<!-- 2. What Is This Service (Glassmorphism) -->
<section class="max-w-4xl mx-auto px-4 md:px-6 mb-20 relative">
    <!-- Blob behind -->
    <div class="absolute -top-6 -left-6 w-48 h-48 bg-purple-300 rounded-full mix-blend-multiply filter blur-[60px] opacity-40 animate-blob"></div>
    <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-indigo-300 rounded-full mix-blend-multiply filter blur-[60px] opacity-40 animate-blob animation-delay-2000"></div>

    <div class="relative bg-white/60 backdrop-blur-xl border border-white/40 shadow-[0_4px_20px_rgb(0,0,0,0.04)] rounded-3xl p-8 md:p-10 text-center">
        <h2 class="text-xl md:text-2xl font-extrabold mb-6 text-gray-900">What is Custom LMS Development?</h2>
        <p class="text-sm md:text-base text-gray-700 leading-relaxed font-medium">
            When you outgrow standard platforms like Moodle or Teachable, you need a custom LMS. It means we code your education platform from scratch. You own 100% of the software. There are no per-user monthly fees. You get the exact features your students need—whether that's complex gamification, custom corporate dashboards, or unique video streaming—without paying for tools you don't use.
        </p>
    </div>
</section>

<!-- 3. Full Feature List (Premium Cards) -->
<section class="max-w-7xl mx-auto px-4 md:px-6 mb-20">
    <div class="text-center mb-12">
        <h2 class="text-2xl md:text-3xl font-extrabold mb-4 text-gray-900">Comprehensive LMS Capabilities</h2>
        <p class="text-base text-gray-600 max-w-2xl mx-auto">Everything required to run a modern, high-performing digital academy.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Learner Experience -->
        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 hover:shadow-lg transition-shadow duration-300 group">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 text-white flex items-center justify-center shadow-md group-hover:scale-105 transition-transform">
                    <i class="ph ph-student text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Learner Experience</h3>
            </div>
            <ul class="space-y-5">
                <li class="flex items-start gap-3">
                    <div class="mt-0.5 bg-indigo-100 rounded p-1 text-indigo-600"><i class="ph ph-video-camera text-base"></i></div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">Native Video Streaming</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Buffer-free, DRM-protected video hosting to prevent piracy.</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <div class="mt-0.5 bg-indigo-100 rounded p-1 text-indigo-600"><i class="ph ph-git-branch text-base"></i></div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">Dynamic Learning Paths</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Curriculum adapts based on quiz performance and user choices.</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <div class="mt-0.5 bg-indigo-100 rounded p-1 text-indigo-600"><i class="ph ph-trophy text-base"></i></div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">Gamification Engine</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Points, badges, and leaderboards to drive student engagement.</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <div class="mt-0.5 bg-indigo-100 rounded p-1 text-indigo-600"><i class="ph ph-chat-circle-dots text-base"></i></div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">Community Forums</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Integrated discussion boards for cohort-based social learning.</p>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Admin & Management -->
        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 hover:shadow-lg transition-shadow duration-300 group">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500 to-cyan-600 text-white flex items-center justify-center shadow-md group-hover:scale-105 transition-transform">
                    <i class="ph ph-sliders text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Admin Controls</h3>
            </div>
            <ul class="space-y-5">
                <li class="flex items-start gap-3">
                    <div class="mt-0.5 bg-blue-100 rounded p-1 text-blue-600"><i class="ph ph-users text-base"></i></div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">Granular RBAC</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Custom permissions for students, instructors, and B2B managers.</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <div class="mt-0.5 bg-blue-100 rounded p-1 text-blue-600"><i class="ph ph-file-zip text-base"></i></div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">SCORM & xAPI</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Import Articulate files and track deep learning metrics.</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <div class="mt-0.5 bg-blue-100 rounded p-1 text-blue-600"><i class="ph ph-chart-bar text-base"></i></div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">Custom Analytics</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Real-time reports on course completion, drop-offs, and revenue.</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <div class="mt-0.5 bg-blue-100 rounded p-1 text-blue-600"><i class="ph ph-certificate text-base"></i></div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">Automated Certification</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Auto-generate PDF certificates and verifiable LinkedIn badges.</p>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Infrastructure & Monetization -->
        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 hover:shadow-lg transition-shadow duration-300 group">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-emerald-500 to-teal-600 text-white flex items-center justify-center shadow-md group-hover:scale-105 transition-transform">
                    <i class="ph ph-hard-drives text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900">Infrastructure</h3>
            </div>
            <ul class="space-y-5">
                <li class="flex items-start gap-3">
                    <div class="mt-0.5 bg-emerald-100 rounded p-1 text-emerald-600"><i class="ph ph-buildings text-base"></i></div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">B2B Multi-Tenancy</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Spin up isolated, branded portals for different corporate clients.</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <div class="mt-0.5 bg-emerald-100 rounded p-1 text-emerald-600"><i class="ph ph-credit-card text-base"></i></div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">Subscription Billing</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Stripe integrations for monthly subscriptions or one-time sales.</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <div class="mt-0.5 bg-emerald-100 rounded p-1 text-emerald-600"><i class="ph ph-cloud-arrow-up text-base"></i></div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">Auto-Scaling Cloud</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">AWS infrastructure that scales seamlessly during high-traffic launches.</p>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <div class="mt-0.5 bg-emerald-100 rounded p-1 text-emerald-600"><i class="ph ph-plugs text-base"></i></div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm mb-0.5">Enterprise SSO</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Allow users to log in securely using Google, Okta, or Active Directory.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- 4. How We Deliver (Visual Process) -->
<section class="max-w-7xl mx-auto px-4 md:px-6 mb-20">
    <div class="bg-utsl-dark text-white rounded-3xl p-8 md:p-12 relative overflow-hidden shadow-xl">
        <!-- Decoration -->
        <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-utsl-primary/20 rounded-full blur-[100px] -z-10"></div>
        
        <div class="text-center mb-12 relative z-10">
            <h2 class="text-2xl md:text-3xl font-extrabold mb-3">How We Deliver Your LMS</h2>
            <p class="text-gray-400 text-base">Our proven 5-step engineering process ensures a flawless launch.</p>
        </div>
        
        <div class="relative z-10">
            <!-- Desktop Connection Line -->
            <div class="hidden md:block absolute top-6 left-[10%] right-[10%] h-[2px] bg-gradient-to-r from-utsl-primary/20 via-utsl-primary to-utsl-primary/20"></div>
            
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                <!-- Step 1 -->
                <div class="relative group">
                    <div class="w-12 h-12 mx-auto bg-gray-900 border-[3px] border-utsl-dark text-utsl-primary rounded-full flex items-center justify-center font-bold text-xl mb-4 relative z-10 group-hover:bg-utsl-primary group-hover:text-white transition-colors shadow-[0_0_15px_rgba(67,56,202,0.3)]">
                        1
                    </div>
                    <div class="text-center">
                        <h4 class="font-bold text-base mb-1.5 text-white">Discovery</h4>
                        <p class="text-xs text-gray-400">Audit platform, map journeys, and define database schema.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="relative group">
                    <div class="w-12 h-12 mx-auto bg-gray-900 border-[3px] border-utsl-dark text-utsl-primary rounded-full flex items-center justify-center font-bold text-xl mb-4 relative z-10 group-hover:bg-utsl-primary group-hover:text-white transition-colors shadow-[0_0_15px_rgba(67,56,202,0.3)]">
                        2
                    </div>
                    <div class="text-center">
                        <h4 class="font-bold text-base mb-1.5 text-white">Prototyping</h4>
                        <p class="text-xs text-gray-400">High-fidelity Figma wireframes of every interface.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="relative group">
                    <div class="w-12 h-12 mx-auto bg-gray-900 border-[3px] border-utsl-dark text-utsl-primary rounded-full flex items-center justify-center font-bold text-xl mb-4 relative z-10 group-hover:bg-utsl-primary group-hover:text-white transition-colors shadow-[0_0_15px_rgba(67,56,202,0.3)]">
                        3
                    </div>
                    <div class="text-center">
                        <h4 class="font-bold text-base mb-1.5 text-white">Engineering</h4>
                        <p class="text-xs text-gray-400">Agile sprints building APIs, frontend, and payment gateways.</p>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="relative group">
                    <div class="w-12 h-12 mx-auto bg-gray-900 border-[3px] border-utsl-dark text-utsl-primary rounded-full flex items-center justify-center font-bold text-xl mb-4 relative z-10 group-hover:bg-utsl-primary group-hover:text-white transition-colors shadow-[0_0_15px_rgba(67,56,202,0.3)]">
                        4
                    </div>
                    <div class="text-center">
                        <h4 class="font-bold text-base mb-1.5 text-white">QA & Migration</h4>
                        <p class="text-xs text-gray-400">Migrate legacy data and rigorously test for bugs.</p>
                    </div>
                </div>
                <!-- Step 5 -->
                <div class="relative group">
                    <div class="w-12 h-12 mx-auto bg-gray-900 border-[3px] border-utsl-dark text-utsl-primary rounded-full flex items-center justify-center font-bold text-xl mb-4 relative z-10 group-hover:bg-utsl-primary group-hover:text-white transition-colors shadow-[0_0_15px_rgba(67,56,202,0.3)]">
                        5
                    </div>
                    <div class="text-center">
                        <h4 class="font-bold text-base mb-1.5 text-white">Launch</h4>
                        <p class="text-xs text-gray-400">Deploy to AWS, train your team, and handover IP.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Comparison (Modern Table) -->
<section class="max-w-7xl mx-auto px-4 md:px-6 mb-20">
    <div class="text-center mb-12">
        <h2 class="text-2xl md:text-3xl font-extrabold mb-3 text-gray-900">Custom LMS vs Off-The-Shelf SaaS</h2>
        <p class="text-base text-gray-600 max-w-2xl mx-auto">Why growing education companies abandon generic platforms.</p>
    </div>
    
    <div class="bg-white rounded-2xl border border-gray-100 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse min-w-[700px]">
                <thead>
                    <tr>
                        <th class="p-5 font-bold text-gray-400 uppercase tracking-wider text-xs bg-gray-50/50 w-1/3 border-b border-gray-100">Feature Area</th>
                        <th class="p-5 font-bold text-gray-400 uppercase tracking-wider text-xs bg-gray-50/50 w-1/3 border-b border-gray-100">SaaS (Moodle, Teachable)</th>
                        <th class="p-5 font-bold text-utsl-primary uppercase tracking-wider text-xs bg-indigo-50/30 w-1/3 border-b border-indigo-100 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-utsl-primary/5 to-transparent"></div>
                            <span class="relative">UTSL Custom Build</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    <tr class="group hover:bg-gray-50/50 transition-colors">
                        <td class="p-5 font-bold text-gray-900">Software Ownership</td>
                        <td class="p-5 text-gray-600"><div class="flex items-center gap-2"><i class="ph ph-x-circle text-red-400 text-lg"></i> Rented (Vendor Lock-in)</div></td>
                        <td class="p-5 text-indigo-700 font-bold bg-indigo-50/10"><div class="flex items-center gap-2"><i class="ph ph-check-circle text-indigo-500 text-lg"></i> 100% Owned IP</div></td>
                    </tr>
                    <tr class="group hover:bg-gray-50/50 transition-colors">
                        <td class="p-5 font-bold text-gray-900">Licensing Fees</td>
                        <td class="p-5 text-gray-600"><div class="flex items-center gap-2"><i class="ph ph-x-circle text-red-400 text-lg"></i> Monthly fees per user</div></td>
                        <td class="p-5 text-indigo-700 font-bold bg-indigo-50/10"><div class="flex items-center gap-2"><i class="ph ph-check-circle text-indigo-500 text-lg"></i> $0 per-user fees</div></td>
                    </tr>
                    <tr class="group hover:bg-gray-50/50 transition-colors">
                        <td class="p-5 font-bold text-gray-900">Branding & UX</td>
                        <td class="p-5 text-gray-600"><div class="flex items-center gap-2"><i class="ph ph-x-circle text-red-400 text-lg"></i> Basic colors & logos</div></td>
                        <td class="p-5 text-indigo-700 font-bold bg-indigo-50/10"><div class="flex items-center gap-2"><i class="ph ph-check-circle text-indigo-500 text-lg"></i> Limitless bespoke design</div></td>
                    </tr>
                    <tr class="group hover:bg-gray-50/50 transition-colors">
                        <td class="p-5 font-bold text-gray-900">Data Architecture</td>
                        <td class="p-5 text-gray-600"><div class="flex items-center gap-2"><i class="ph ph-x-circle text-red-400 text-lg"></i> Standardized & rigid</div></td>
                        <td class="p-5 text-indigo-700 font-bold bg-indigo-50/10"><div class="flex items-center gap-2"><i class="ph ph-check-circle text-indigo-500 text-lg"></i> Built around your needs</div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- 6. Who This Is For (Aesthetic Cards) -->
<section class="max-w-7xl mx-auto px-4 md:px-6 mb-20">
    <div class="text-center mb-12">
        <h2 class="text-2xl md:text-3xl font-extrabold mb-4 text-gray-900">Who We Build For</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 group">
            <div class="w-12 h-12 bg-pink-50 rounded-xl flex items-center justify-center mb-5 group-hover:scale-105 transition-transform duration-300">
                <i class="ph ph-rocket text-2xl text-pink-500"></i>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-900">EdTech Startups</h3>
            <p class="text-sm text-gray-600 leading-relaxed">Founders needing a proprietary minimum viable product (MVP) to attract investors and prove their unique pedagogical model.</p>
        </div>
        <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 group">
            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mb-5 group-hover:scale-105 transition-transform duration-300">
                <i class="ph ph-briefcase text-2xl text-blue-500"></i>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-900">Corporate Training</h3>
            <p class="text-sm text-gray-600 leading-relaxed">Enterprises requiring secure, internal compliance training platforms that integrate directly with their HRIS and SSO providers.</p>
        </div>
        <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 group">
            <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center mb-5 group-hover:scale-105 transition-transform duration-300">
                <i class="ph ph-graduation-cap text-2xl text-purple-500"></i>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-900">Universities</h3>
            <p class="text-sm text-gray-600 leading-relaxed">Institutions migrating away from clunky legacy systems to provide students with a modern, Netflix-style learning experience.</p>
        </div>
    </div>
</section>


<!-- 8. FAQs (Interactive Accordion Style appearance) -->
<section class="max-w-4xl mx-auto px-4 md:px-6 mb-20">
    <div class="text-center mb-12">
        <h2 class="text-2xl md:text-3xl font-extrabold mb-3 text-gray-900">Frequently Asked Questions</h2>
    </div>
    <div class="space-y-4">
        <!-- FAQ 1 -->
        <div class="faq-item bg-white border border-gray-100 rounded-xl hover:shadow-md hover:border-utsl-primary/30 transition-all duration-300 group relative overflow-hidden cursor-pointer" onclick="toggleFaq(this)">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-utsl-primary transform -translate-x-full group-hover:translate-x-0 transition-transform"></div>
            <div class="p-6 flex justify-between items-center gap-4">
                <h4 class="font-bold text-lg text-gray-900">How much does custom LMS development cost?</h4>
                <i class="ph ph-caret-down text-gray-400 text-xl transition-transform duration-300 faq-icon"></i>
            </div>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
                <p class="text-sm text-gray-600 leading-relaxed pb-6">Costs range from $25,000 for a Minimum Viable Product (MVP) to $65,000+ for enterprise-grade platforms with multi-tenancy and advanced analytics. Unlike SaaS, this is a one-time capital expenditure with no ongoing per-user licensing fees.</p>
            </div>
        </div>
        <!-- FAQ 2 -->
        <div class="faq-item bg-white border border-gray-100 rounded-xl hover:shadow-md hover:border-utsl-primary/30 transition-all duration-300 group relative overflow-hidden cursor-pointer" onclick="toggleFaq(this)">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-utsl-primary transform -translate-x-full group-hover:translate-x-0 transition-transform"></div>
            <div class="p-6 flex justify-between items-center gap-4">
                <h4 class="font-bold text-lg text-gray-900">How long does it take to build a custom LMS?</h4>
                <i class="ph ph-caret-down text-gray-400 text-xl transition-transform duration-300 faq-icon"></i>
            </div>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
                <p class="text-sm text-gray-600 leading-relaxed pb-6">An MVP typically takes 8 to 12 weeks to design, develop, and launch. More complex enterprise platforms involving legacy data migration and deep third-party integrations usually take 4 to 6 months.</p>
            </div>
        </div>
        <!-- FAQ 3 -->
        <div class="faq-item bg-white border border-gray-100 rounded-xl hover:shadow-md hover:border-utsl-primary/30 transition-all duration-300 group relative overflow-hidden cursor-pointer" onclick="toggleFaq(this)">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-utsl-primary transform -translate-x-full group-hover:translate-x-0 transition-transform"></div>
            <div class="p-6 flex justify-between items-center gap-4">
                <h4 class="font-bold text-lg text-gray-900">Will we own the source code?</h4>
                <i class="ph ph-caret-down text-gray-400 text-xl transition-transform duration-300 faq-icon"></i>
            </div>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
                <p class="text-sm text-gray-600 leading-relaxed pb-6">Yes. Upon project completion and final payment, 100% of the Intellectual Property (IP) and source code is transferred to your organization. You are never locked into a vendor contract with UTSL.</p>
            </div>
        </div>
        <!-- FAQ 4 -->
        <div class="faq-item bg-white border border-gray-100 rounded-xl hover:shadow-md hover:border-utsl-primary/30 transition-all duration-300 group relative overflow-hidden cursor-pointer" onclick="toggleFaq(this)">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-utsl-primary transform -translate-x-full group-hover:translate-x-0 transition-transform"></div>
            <div class="p-6 flex justify-between items-center gap-4">
                <h4 class="font-bold text-lg text-gray-900">Can you migrate data from Moodle or Canvas?</h4>
                <i class="ph ph-caret-down text-gray-400 text-xl transition-transform duration-300 faq-icon"></i>
            </div>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
                <p class="text-sm text-gray-600 leading-relaxed pb-6">Absolutely. Our data engineers specialize in secure ETL (Extract, Transform, Load) migrations. We ensure your historical user accounts, course progress, and completion certificates are seamlessly ported to the new platform.</p>
            </div>
        </div>
        <!-- FAQ 5 -->
        <div class="faq-item bg-white border border-gray-100 rounded-xl hover:shadow-md hover:border-utsl-primary/30 transition-all duration-300 group relative overflow-hidden cursor-pointer" onclick="toggleFaq(this)">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-utsl-primary transform -translate-x-full group-hover:translate-x-0 transition-transform"></div>
            <div class="p-6 flex justify-between items-center gap-4">
                <h4 class="font-bold text-lg text-gray-900">Is the LMS mobile-friendly?</h4>
                <i class="ph ph-caret-down text-gray-400 text-xl transition-transform duration-300 faq-icon"></i>
            </div>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
                <p class="text-sm text-gray-600 leading-relaxed pb-6">Yes, every web-based LMS we build is fully responsive (Progressive Web App standards), ensuring a flawless learning experience on desktop, tablet, and mobile. We can also build native iOS/Android companion apps if required.</p>
            </div>
        </div>
    </div>
    
    <script>
        function toggleFaq(element) {
            const answer = element.querySelector('.faq-answer');
            const icon = element.querySelector('.faq-icon');
            
            if (answer.classList.contains('max-h-0')) {
                // Close all others first
                document.querySelectorAll('.faq-answer').forEach(el => {
                    el.classList.add('max-h-0');
                    el.classList.remove('max-h-96');
                });
                document.querySelectorAll('.faq-icon').forEach(el => el.classList.remove('rotate-180'));
                
                // Open this one
                answer.classList.remove('max-h-0');
                answer.classList.add('max-h-96'); 
                icon.classList.add('rotate-180');
            } else {
                // Close this one
                answer.classList.add('max-h-0');
                answer.classList.remove('max-h-96');
                icon.classList.remove('rotate-180');
            }
        }
    </script>
</section>

<!-- 9. Testimonials (Premium Cards) -->
<section class="max-w-7xl mx-auto px-4 md:px-6 mb-20">
    <div class="text-center mb-12">
        <h2 class="text-2xl md:text-3xl font-extrabold mb-3 text-gray-900">What Our Clients Say</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm relative overflow-hidden group hover:shadow-md transition-all duration-300">
            <div class="absolute top-2 right-4 text-7xl font-serif text-indigo-50/60 -z-0 select-none group-hover:text-indigo-50 transition-colors">"</div>
            <div class="relative z-10">
                <div class="flex gap-1 text-amber-400 mb-4 text-base">
                    <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                </div>
                <p class="text-gray-800 text-base leading-relaxed italic mb-6 font-medium">"Moving away from our expensive SaaS LMS saved us over $120,000 a year in licensing fees. UTSL built a custom platform that perfectly matched our unique pedagogical model and integrated seamlessly with our CRM."</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-700 flex items-center justify-center font-bold text-base">NS</div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-base">Neha Sharma</h4>
                        <p class="text-xs text-utsl-primary font-medium">Founder, EduCorp Global</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm relative overflow-hidden group hover:shadow-md transition-all duration-300">
            <div class="absolute top-2 right-4 text-7xl font-serif text-indigo-50/60 -z-0 select-none group-hover:text-indigo-50 transition-colors">"</div>
            <div class="relative z-10">
                <div class="flex gap-1 text-amber-400 mb-4 text-base">
                    <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                </div>
                <p class="text-gray-800 text-base leading-relaxed italic mb-6 font-medium">"UTSL's team understood exactly what we needed. The multi-tenant architecture they built allows us to spin up entirely white-labeled portals for our B2B enterprise clients in under 5 minutes. Truly game changing."</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-base">RD</div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-base">Rahul Desai</h4>
                        <p class="text-xs text-utsl-primary font-medium">CTO, SkillForge Academy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 11. CTA (Vibrant Gradient) -->
<section class="max-w-7xl mx-auto px-4 md:px-6 mb-20">
    <div class="bg-gradient-to-br from-utsl-dark via-[#1e1b4b] to-utsl-primary rounded-3xl p-8 md:p-12 text-center shadow-2xl relative overflow-hidden">
        <!-- Decor -->
        <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCI+CiAgPGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjEiIGZpbGw9IiNmZmYiLz4KPC9zdmc+')] opacity-10"></div>
        <div class="absolute -top-16 -left-16 w-48 h-48 bg-utsl-secondary rounded-full mix-blend-screen filter blur-[60px] opacity-40"></div>
        
        <div class="relative z-10">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Ready to Build Your Platform?</h2>
            <p class="text-lg text-indigo-100 mb-8 max-w-2xl mx-auto font-medium">Stop paying software rent. Let's discuss your custom LMS requirements and map out a technical architecture.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://calendly.com/" target="_blank" class="px-6 py-3 bg-white text-utsl-dark hover:bg-gray-50 font-bold rounded-xl transition-all shadow-lg hover:-translate-y-0.5 flex items-center justify-center gap-2 text-base">
                    <i class="ph-fill ph-calendar-plus text-xl text-utsl-primary"></i> Schedule via Calendly
                </a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=support@utsltech.com" target="_blank" class="px-6 py-3 bg-white/10 hover:bg-white/20 border border-white/20 backdrop-blur-md text-white font-bold rounded-xl transition-all hover:-translate-y-0.5 flex items-center justify-center gap-2 text-base">
                    <i class="ph-fill ph-envelope-simple text-xl"></i> Email support@utsltech.com
                </a>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>
