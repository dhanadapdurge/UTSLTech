<?php
// AUTO-COPY AI IMAGES SCRIPT
$artifact_dir = 'C:/Users/Lenovo/.gemini/antigravity-ide/brain/6c213149-7d46-478a-9961-1abef8cf7c72/';
$images_dir = __DIR__ . '/assets/images/';

if (!is_dir($images_dir)) {
    mkdir($images_dir, 0777, true);
}

$images = [
    'hero_cto_1782576757816.png' => 'hero_cto.png',
    'cto_architecture_1782576784026.png' => 'cto_architecture.png'
];

foreach ($images as $src => $dest) {
    if (file_exists($artifact_dir . $src) && !file_exists($images_dir . $dest)) {
        copy($artifact_dir . $src, $images_dir . $dest);
    }
}
include 'header.php'; 
?>

<!-- 1. HERO SECTION -->
<section class="relative pt-12 pb-16 lg:pt-16 lg:pb-20 overflow-hidden border-b border-slate-100">
    <div class="absolute inset-0 bg-slate-50 -z-20"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#cbd5e1_1px,transparent_1px),linear-gradient(to_bottom,#cbd5e1_1px,transparent_1px)] bg-[size:60px_60px] opacity-60 -z-10"></div>
    
    <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white border border-slate-200 shadow-sm mb-6">
                    <span class="flex h-2 w-2 rounded-full bg-indigo-600 animate-pulse"></span>
                    <span class="text-xs font-bold tracking-widest uppercase text-slate-600">Executive Leadership</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight tracking-tight text-slate-900 mb-6">
                    Fractional CTO & Tech Advisory
                </h1>
                
                <p class="text-base md:text-lg text-slate-600 leading-relaxed mb-8">
                    Stop guessing on architecture. Get battle-tested technical leadership to guide your EdTech platform from MVP to enterprise scale. We handle the technical roadmap so you can focus on the business.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="https://calendly.com/" target="_blank" class="px-8 py-4 bg-slate-900 hover:bg-black text-white font-bold rounded-xl shadow-lg transition-all duration-300 hover:-translate-y-1 text-center">
                        Talk to an Expert
                    </a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=support@utsltech.com" target="_blank" class="px-8 py-4 bg-white hover:bg-slate-50 text-slate-700 font-bold rounded-xl border border-slate-200 shadow-sm transition-all duration-300 hover:-translate-y-1 text-center">
                        Email Advisory Team
                    </a>
                </div>
            </div>
            
            <!-- Hero Graphic -->
            <div class="relative w-full h-[500px] rounded-3xl overflow-hidden shadow-2xl border border-slate-200 group">
                <img src="assets/images/hero_cto.png" alt="Strategic Tech Leadership" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            </div>
        </div>
    </div>
</section>

<!-- 2. WHAT IS THIS SERVICE -->
<section class="py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 md:px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">Bridging the Gap Between Vision and Execution</h2>
        <p class="text-lg md:text-xl text-slate-600 leading-relaxed mb-12">
            Most EdTech startups fail because the founders understand the market, but the developers don't understand the business. A Fractional CTO sits exactly in the middle. We translate your high-level business goals into rigorous technical architecture, manage your vendor teams, and ensure every line of code is an asset, not a liability.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left border-t border-slate-100 pt-12">
            <div class="flex flex-col gap-3">
                <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center mb-2"><i class="ph-fill ph-strategy text-2xl"></i></div>
                <h3 class="font-bold text-slate-900">Strategic Alignment</h3>
                <p class="text-slate-600 text-sm">We ensure your tech stack and database schema can actually support your 3-year revenue projections.</p>
            </div>
            <div class="flex flex-col gap-3">
                <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center mb-2"><i class="ph-fill ph-users-three text-2xl"></i></div>
                <h3 class="font-bold text-slate-900">Vendor Accountability</h3>
                <p class="text-slate-600 text-sm">We review every pull request and manage offshore agencies so you don't pay for spaghetti code.</p>
            </div>
            <div class="flex flex-col gap-3">
                <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center mb-2"><i class="ph-fill ph-shield-check text-2xl"></i></div>
                <h3 class="font-bold text-slate-900">Due Diligence</h3>
                <p class="text-slate-600 text-sm">We ensure your platform passes rigorous technical audits for Series A raises or M&A events.</p>
            </div>
        </div>
    </div>
</section>

<!-- 3. FULL FEATURE LIST -->
<section class="py-24 bg-slate-50 border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Advisory Capabilities</h2>
            <p class="text-lg text-slate-600">Everything a full-time executive provides, at a fraction of the cost.</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">
            <!-- Left: Features -->
            <div class="space-y-12 flex flex-col justify-center">
                <!-- Feature 1 -->
                <div class="flex gap-6 group">
                    <div class="flex-shrink-0 w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-sm border border-slate-200 group-hover:border-utsl-primary transition-colors">
                        <i class="ph-fill ph-blueprint text-3xl text-utsl-primary"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Technology Strategy & Architecture</h3>
                        <p class="text-slate-600 mb-4">We decide whether to build vs. buy, architect the database schema, and design the cloud infrastructure for massive scale.</p>
                        <ul class="space-y-2 text-sm text-slate-700">
                            <li class="flex gap-2 items-start"><i class="ph-bold ph-check text-utsl-primary mt-1"></i> Scalable AWS/GCP architecture design</li>
                            <li class="flex gap-2 items-start"><i class="ph-bold ph-check text-utsl-primary mt-1"></i> Database schema optimization</li>
                            <li class="flex gap-2 items-start"><i class="ph-bold ph-check text-utsl-primary mt-1"></i> Data security and privacy frameworks</li>
                        </ul>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="flex gap-6 group">
                    <div class="flex-shrink-0 w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-sm border border-slate-200 group-hover:border-utsl-primary transition-colors">
                        <i class="ph-fill ph-users-three text-3xl text-utsl-primary"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Team & Vendor Management</h3>
                        <p class="text-slate-600 mb-4">Acting as your advocate to manage offshore dev shops, interview technical hires, and run agile sprints. We hold developers accountable.</p>
                        <ul class="space-y-2 text-sm text-slate-700">
                            <li class="flex gap-2 items-start"><i class="ph-bold ph-check text-utsl-primary mt-1"></i> Code reviews and pull request approvals</li>
                            <li class="flex gap-2 items-start"><i class="ph-bold ph-check text-utsl-primary mt-1"></i> Offshore agency management and QA</li>
                            <li class="flex gap-2 items-start"><i class="ph-bold ph-check text-utsl-primary mt-1"></i> Technical interviewing for in-house hires</li>
                        </ul>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="flex gap-6 group">
                    <div class="flex-shrink-0 w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-sm border border-slate-200 group-hover:border-utsl-primary transition-colors">
                        <i class="ph-fill ph-magnifying-glass text-3xl text-utsl-primary"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">M&A Technical Due Diligence</h3>
                        <p class="text-slate-600 mb-4">Are you buying an EdTech company or being acquired? We audit the target's codebase to uncover technical debt before the deal closes.</p>
                        <ul class="space-y-2 text-sm text-slate-700">
                            <li class="flex gap-2 items-start"><i class="ph-bold ph-check text-utsl-primary mt-1"></i> Exhaustive codebase audits</li>
                            <li class="flex gap-2 items-start"><i class="ph-bold ph-check text-utsl-primary mt-1"></i> Open-source license and security checking</li>
                            <li class="flex gap-2 items-start"><i class="ph-bold ph-check text-utsl-primary mt-1"></i> Scalability stress testing</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right: Image -->
            <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-200 group h-full min-h-[400px]">
                <img src="assets/images/cto_architecture.png" alt="Cloud Infrastructure Architecture" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            </div>
        </div>
    </div>
</section>

<!-- 4. HOW WE DELIVER -->
<section class="py-24 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">The Engagement Process</h2>
            <p class="text-lg text-slate-600">How we seamlessly integrate into your executive team.</p>
        </div>
        
        <div class="relative max-w-6xl mx-auto pt-12 lg:pt-16 pb-8">
            <!-- Connecting Line (Desktop) -->
            <div class="hidden lg:block absolute top-1/2 left-0 w-full h-1 bg-gradient-to-r from-indigo-100 via-cyan-100 to-indigo-100 -translate-y-1/2 rounded-full z-0"></div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative z-10">
                <!-- Step 1 -->
                <div class="group bg-white rounded-3xl p-8 border border-slate-200 shadow-xl shadow-slate-200/50 relative overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-indigo-500/10 hover:border-indigo-200 lg:-mt-12">
                    <div class="absolute -top-6 -right-4 text-9xl font-black text-slate-50 transition-transform duration-500 group-hover:scale-110 group-hover:text-indigo-50/50">1</div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-indigo-50 text-utsl-primary rounded-2xl flex items-center justify-center mb-6 shadow-sm border border-indigo-100 group-hover:bg-utsl-primary group-hover:text-white transition-colors duration-300">
                            <i class="ph-bold ph-stethoscope text-2xl"></i>
                        </div>
                        <h4 class="font-extrabold text-xl mb-3 text-slate-900">Deep Audit</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">We begin with a grueling review of your codebase, infrastructure, and current development processes.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="group bg-slate-900 rounded-3xl p-8 border border-slate-800 shadow-2xl relative overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-cyan-500/20 hover:border-cyan-500/50 lg:mt-12">
                    <div class="absolute -top-6 -right-4 text-9xl font-black text-slate-800 transition-transform duration-500 group-hover:scale-110 group-hover:text-slate-700">2</div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-cyan-500/20 text-cyan-400 rounded-2xl flex items-center justify-center mb-6 border border-cyan-500/30 group-hover:bg-cyan-500 group-hover:text-white transition-colors duration-300">
                            <i class="ph-bold ph-compass text-2xl"></i>
                        </div>
                        <h4 class="font-extrabold text-xl mb-3 text-white">Roadmapping</h4>
                        <p class="text-slate-400 text-sm leading-relaxed">We deliver a 12-month technical roadmap aligning engineering deliverables directly with revenue targets.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="group bg-white rounded-3xl p-8 border border-slate-200 shadow-xl shadow-slate-200/50 relative overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-indigo-500/10 hover:border-indigo-200 lg:-mt-12">
                    <div class="absolute -top-6 -right-4 text-9xl font-black text-slate-50 transition-transform duration-500 group-hover:scale-110 group-hover:text-indigo-50/50">3</div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-indigo-50 text-utsl-primary rounded-2xl flex items-center justify-center mb-6 shadow-sm border border-indigo-100 group-hover:bg-utsl-primary group-hover:text-white transition-colors duration-300">
                            <i class="ph-bold ph-kanban text-2xl"></i>
                        </div>
                        <h4 class="font-extrabold text-xl mb-3 text-slate-900">Execution</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">We take over sprint planning, enforce code quality standards, and hold vendor dev teams strictly accountable.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="group bg-slate-900 rounded-3xl p-8 border border-slate-800 shadow-2xl relative overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-cyan-500/20 hover:border-cyan-500/50 lg:mt-12">
                    <div class="absolute -top-6 -right-4 text-9xl font-black text-slate-800 transition-transform duration-500 group-hover:scale-110 group-hover:text-slate-700">4</div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-cyan-500/20 text-cyan-400 rounded-2xl flex items-center justify-center mb-6 border border-cyan-500/30 group-hover:bg-cyan-500 group-hover:text-white transition-colors duration-300">
                            <i class="ph-bold ph-handshake text-2xl"></i>
                        </div>
                        <h4 class="font-extrabold text-xl mb-3 text-white">Succession</h4>
                        <p class="text-slate-400 text-sm leading-relaxed">When you're ready, we help interview, hire, and smoothly transition operations to your full-time in-house CTO.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. COMPARISON TABLE -->
<section class="py-24 bg-white relative overflow-hidden border-b border-slate-100">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(99,102,241,0.05),transparent_40%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(6,182,212,0.05),transparent_40%)]"></div>

    <div class="max-w-5xl mx-auto px-4 md:px-6 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Solo Founder vs. Fractional CTO</h2>
            <p class="text-lg text-slate-600">Why non-technical founders need an advocate.</p>
        </div>
        
        <div class="overflow-x-auto pb-4">
            <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xl ring-1 ring-slate-900/5 min-w-[600px]">
                <div class="grid grid-cols-3 border-b border-slate-200 bg-indigo-50/50 font-bold p-6 items-center">
                    <div class="text-slate-700">Responsibility</div>
                    <div class="text-slate-500">Managing Developers Alone</div>
                    <div class="text-utsl-primary">With a UTSL Fractional CTO</div>
                </div>
                
                <div class="grid grid-cols-3 p-6 border-b border-slate-100 hover:bg-slate-50/80 transition-colors items-center">
                    <div class="font-bold text-slate-900">Code Quality</div>
                    <div class="text-slate-500 text-sm">Difficult to verify</div>
                    <div class="text-slate-900 font-semibold text-sm flex items-center gap-2"><i class="ph-fill ph-check-circle text-utsl-primary text-lg"></i> Rigorous PR reviews</div>
                </div>
                <div class="grid grid-cols-3 p-6 border-b border-slate-100 hover:bg-slate-50/80 transition-colors items-center">
                    <div class="font-bold text-slate-900">Architecture</div>
                    <div class="text-slate-500 text-sm">Basic short-term setup</div>
                    <div class="text-slate-900 font-semibold text-sm flex items-center gap-2"><i class="ph-fill ph-check-circle text-utsl-primary text-lg"></i> Enterprise-scale AWS/GCP design</div>
                </div>
                <div class="grid grid-cols-3 p-6 border-b border-slate-100 hover:bg-slate-50/80 transition-colors items-center">
                    <div class="font-bold text-slate-900">Sprint Deadlines</div>
                    <div class="text-slate-500 text-sm">Unpredictable delivery</div>
                    <div class="text-slate-900 font-semibold text-sm flex items-center gap-2"><i class="ph-fill ph-check-circle text-utsl-primary text-lg"></i> Agile accountability & planning</div>
                </div>
                <div class="grid grid-cols-3 p-6 hover:bg-slate-50/80 transition-colors items-center">
                    <div class="font-bold text-slate-900">Due Diligence</div>
                    <div class="text-slate-500 text-sm">Unprepared for review</div>
                    <div class="text-slate-900 font-semibold text-sm flex items-center gap-2"><i class="ph-fill ph-check-circle text-utsl-primary text-lg"></i> Investor-ready tech stacks</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. WHO THIS IS FOR -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">You need a Fractional CTO if...</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 rounded-3xl bg-white border border-slate-200 hover:shadow-lg transition-shadow group">
                <div class="w-14 h-14 bg-orange-100 text-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="ph-fill ph-warning-circle text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Agency Nightmares</h3>
                <p class="text-slate-600">Your current dev agency keeps missing deadlines, producing spaghetti code, and you lack the technical expertise to hold them accountable.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white border border-slate-200 hover:shadow-lg transition-shadow group">
                <div class="w-14 h-14 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="ph-fill ph-chart-line-up text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Raising Capital</h3>
                <p class="text-slate-600">You are preparing to raise a Series A and need to pass rigorous technical due diligence from institutional investors.</p>
            </div>
            <div class="p-8 rounded-3xl bg-white border border-slate-200 hover:shadow-lg transition-shadow group">
                <div class="w-14 h-14 bg-cyan-100 text-cyan-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="ph-fill ph-bank text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">M&A Firms</h3>
                <p class="text-slate-600">You are a Private Equity firm evaluating an EdTech acquisition and need an unbiased, expert audit of the target's proprietary codebase.</p>
            </div>
        </div>
    </div>
</section>


<!-- 8. FAQS -->
<section class="py-24 bg-slate-50 border-t border-slate-100">
    <div class="max-w-4xl mx-auto px-4 md:px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Advisory FAQs</h2>
        </div>
        
        <div class="space-y-4">
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <button class="w-full p-6 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
                    <span class="font-bold text-slate-900 text-base">Do you actually write code as a Fractional CTO?</span>
                    <i class="ph-bold ph-caret-down text-slate-400 transition-transform duration-300"></i>
                </button>
                <div class="hidden px-6 pb-6 text-slate-600 text-sm">
                    Typically, no. The role of a Fractional CTO is strategic leadership, architecture, and management. If you need hands-on coding, you would hire our dedicated engineering squads instead. We guide the ship, we don't necessarily row the oars.
                </div>
            </div>
            
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <button class="w-full p-6 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
                    <span class="font-bold text-slate-900 text-base">How many hours a week does the Fractional CTO work?</span>
                    <i class="ph-bold ph-caret-down text-slate-400 transition-transform duration-300"></i>
                </button>
                <div class="hidden px-6 pb-6 text-slate-600 text-sm">
                    It depends on your tier, but generally 5-15 hours per week. This is enough to run sprint planning, review critical PRs, unblock developers, and meet with the executive team.
                </div>
            </div>
            
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <button class="w-full p-6 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
                    <span class="font-bold text-slate-900 text-base">Can you help us hire a full-time in-house CTO eventually?</span>
                    <i class="ph-bold ph-caret-down text-slate-400 transition-transform duration-300"></i>
                </button>
                <div class="hidden px-6 pb-6 text-slate-600 text-sm">
                    Absolutely. A key goal for a Fractional CTO in a growing startup is to build the tech infrastructure, establish engineering culture, and eventually help you hire and transition to a full-time in-house CTO when you secure Series B funding.
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <button class="w-full p-6 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
                    <span class="font-bold text-slate-900 text-base">What happens if we need to scale up our engineering team quickly?</span>
                    <i class="ph-bold ph-caret-down text-slate-400 transition-transform duration-300"></i>
                </button>
                <div class="hidden px-6 pb-6 text-slate-600 text-sm">
                    Our Fractional CTOs can tap into our network of vetted engineers to help you scale up your team rapidly. We handle the technical screening and onboarding, ensuring new hires align with your architecture and standards.
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <button class="w-full p-6 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
                    <span class="font-bold text-slate-900 text-base">Do you help with technical due diligence for our investors?</span>
                    <i class="ph-bold ph-caret-down text-slate-400 transition-transform duration-300"></i>
                </button>
                <div class="hidden px-6 pb-6 text-slate-600 text-sm">
                    Yes, we prepare your tech stack for scrutiny. We ensure your architecture is scalable, secure, and well-documented, making technical audits smooth and helping you close your funding rounds faster.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 9. TESTIMONIALS -->
<section class="py-24 bg-white border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Trusted by EdTech Executives</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200 relative">
                <i class="ph-fill ph-quotes text-5xl text-indigo-200 absolute top-6 right-8"></i>
                <div class="flex items-center gap-1 text-amber-400 mb-6">
                    <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                </div>
                <p class="text-slate-700 text-lg mb-8 leading-relaxed relative z-10">
                    "Before UTSL, we were burning $30k a month on a dev agency that produced spaghetti code. UTSL stepped in as our Fractional CTO, audited the mess, fired the agency, and rebuilt our engineering culture from scratch."
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-700 font-bold">PM</div>
                    <div>
                        <h4 class="font-bold text-slate-900">Pramod Mehta</h4>
                        <p class="text-sm text-slate-500">CEO, LearnRight</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200 relative">
                <i class="ph-fill ph-quotes text-5xl text-indigo-200 absolute top-6 right-8"></i>
                <div class="flex items-center gap-1 text-amber-400 mb-6">
                    <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                </div>
                <p class="text-slate-700 text-lg mb-8 leading-relaxed relative z-10">
                    "Their M&A due diligence report saved us from making a $12M acquisition mistake. They uncovered that the target's 'proprietary AI' was just a series of manual scripts. Worth every penny."
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-cyan-100 rounded-full flex items-center justify-center text-cyan-700 font-bold">SK</div>
                    <div>
                        <h4 class="font-bold text-slate-900">Sunita Khanna</h4>
                        <p class="text-sm text-slate-500">Partner, Apex EdTech Ventures</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- 11. CREATIVE CTA -->
<section class="py-24 bg-white relative overflow-hidden border-t border-slate-100">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:60px_60px] opacity-50 -z-10 [mask-image:radial-gradient(ellipse_60%_60%_at_50%_50%,#000_70%,transparent_100%)]"></div>
    
    <div class="max-w-4xl mx-auto px-4 md:px-6 relative z-10">
        <div class="bg-indigo-50/50 backdrop-blur-xl rounded-3xl p-8 md:p-12 shadow-xl border border-indigo-100 text-center relative overflow-hidden">
            
            <div class="absolute -top-10 -right-10 w-40 h-40 bg-cyan-200/50 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-indigo-200/50 rounded-full blur-3xl"></div>

            <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-4 tracking-tight relative z-10">Stop Guessing. Build with <span class="text-utsl-primary">Confidence</span>.</h2>
            <p class="text-base text-slate-600 mb-8 max-w-xl mx-auto relative z-10">Your codebase should be an asset, not a liability. Talk to an expert today about bringing technical leadership to your executive team.</p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4 relative z-10">
                <a href="https://calendly.com/" target="_blank" class="px-6 py-3 bg-utsl-primary hover:bg-indigo-700 text-white font-bold rounded-xl transition-all duration-300 shadow-md hover:-translate-y-0.5 flex items-center justify-center gap-2">
                    <i class="ph-bold ph-calendar-plus text-lg"></i> Talk to an Expert
                </a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=support@utsltech.com" target="_blank" class="px-6 py-3 bg-white hover:bg-slate-50 text-slate-700 font-bold rounded-xl border border-slate-200 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2">
                    <i class="ph-bold ph-envelope-simple text-lg"></i> Email Advisory Team
                </a>
            </div>
            
            <p class="text-xs text-slate-500 mt-6 relative z-10"><i class="ph-fill ph-lock-key text-utsl-primary mr-1"></i> Executive Confidentiality Guaranteed</p>
        </div>
    </div>
</section>

<script>
function toggleFaq(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('i');
    
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.classList.add('rotate-180');
        icon.classList.replace('text-slate-400', 'text-utsl-primary');
    } else {
        content.classList.add('hidden');
        icon.classList.remove('rotate-180');
        icon.classList.replace('text-utsl-primary', 'text-slate-400');
    }
}
</script>

<?php include 'footer.php'; ?>
