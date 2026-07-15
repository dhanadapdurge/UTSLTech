<?php include 'db.php'; include 'header.php'; ?>

<!-- 1. Hero Section -->
<section class="relative pt-16 pb-12 lg:pt-24 lg:pb-16 overflow-hidden border-b border-amber-100 bg-[#faf9f6]">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(245,158,11,0.1),transparent_60%)]"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:40px_40px] opacity-50"></div>
    
    <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-left">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white border border-slate-200 shadow-sm mb-5 backdrop-blur-md">
                    <span class="flex h-2 w-2 rounded-full bg-indigo-500 animate-pulse"></span>
                    <span class="text-xs font-bold tracking-widest uppercase text-slate-600">The EdTech Architects</span>
                </div>
                
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight tracking-tight text-slate-900 mb-5">
                    Engineering the Future of <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-cyan-500">Global Education</span>
                </h1>
                
                <p class="text-base md:text-lg text-slate-600 leading-relaxed mb-8">
                    We are a specialized collective of software architects, engineers, and educational strategists dedicated to building systems that dramatically improve learning outcomes and scale education globally.
                </p>
                
                <div class="flex items-center gap-4">
                    <a href="#story" class="bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-3 px-6 rounded-xl transition-all shadow-md flex items-center gap-2 text-sm">
                        Read Our Story <i class="ph-bold ph-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="relative hidden lg:block p-6">
                <!-- Decorative Background Blobs/Shapes -->
                <div class="absolute inset-0 bg-indigo-200 rounded-full blur-[80px] opacity-40 transform translate-x-8 translate-y-8"></div>
                <div class="absolute inset-0 bg-cyan-200 rounded-full blur-[80px] opacity-40 transform -translate-x-8 -translate-y-8"></div>
                
                <!-- Image Container with Bg Color -->
                <div class="relative rounded-[2rem] p-2 bg-white/50 backdrop-blur-sm shadow-xl border border-white transform hover:-translate-y-2 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-tr from-indigo-200 to-cyan-100 rounded-[2rem] transform rotate-2 scale-[1.03] -z-10 opacity-50 shadow-lg"></div>
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80" alt="Clean Tech Workspace" class="w-full h-auto object-cover aspect-[4/3] rounded-[1.5rem] shadow-sm hover:opacity-90 transition-opacity">
                </div>
            </div>
        </div>

        <!-- 5 Key Stats -->
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4 lg:gap-6 max-w-6xl mx-auto mt-16">
            <div class="bg-white/80 backdrop-blur-xl p-6 rounded-2xl border border-white shadow-sm hover:-translate-y-1 hover:bg-white transition-all group">
                <div class="text-3xl font-black text-indigo-600 mb-1 drop-shadow-sm group-hover:scale-105 transition-transform origin-left">100+</div>
                <div class="text-xs font-bold text-slate-500 uppercase tracking-wider">Platforms Built</div>
            </div>
            <div class="bg-white/80 backdrop-blur-xl p-6 rounded-2xl border border-white shadow-sm hover:-translate-y-1 hover:bg-white transition-all group">
                <div class="text-3xl font-black text-cyan-600 mb-1 drop-shadow-sm group-hover:scale-105 transition-transform origin-left">15M+</div>
                <div class="text-xs font-bold text-slate-500 uppercase tracking-wider">Active Learners</div>
            </div>
            <div class="bg-white/80 backdrop-blur-xl p-6 rounded-2xl border border-white shadow-sm hover:-translate-y-1 hover:bg-white transition-all col-span-2 md:col-span-1 group">
                <div class="text-3xl font-black text-emerald-600 mb-1 drop-shadow-sm group-hover:scale-105 transition-transform origin-left">100%</div>
                <div class="text-xs font-bold text-slate-500 uppercase tracking-wider">Client Retention</div>
            </div>
            <div class="bg-white/80 backdrop-blur-xl p-6 rounded-2xl border border-white shadow-sm hover:-translate-y-1 hover:bg-white transition-all group">
                <div class="text-3xl font-black text-amber-500 mb-1 drop-shadow-sm group-hover:scale-105 transition-transform origin-left">99.99%</div>
                <div class="text-xs font-bold text-slate-500 uppercase tracking-wider">Uptime SLAs</div>
            </div>
            <div class="bg-white/80 backdrop-blur-xl p-6 rounded-2xl border border-white shadow-sm hover:-translate-y-1 hover:bg-white transition-all group">
                <div class="text-3xl font-black text-rose-500 mb-1 drop-shadow-sm group-hover:scale-105 transition-transform origin-left">8</div>
                <div class="text-xs font-bold text-slate-500 uppercase tracking-wider">EdTech Sectors</div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Our Story & Timeline -->
<section class="py-24 bg-white border-b border-slate-100 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24">
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">The Founding Insight</h2>
                <div class="space-y-6 text-slate-600 leading-relaxed text-lg">
                    <p>In 2017, we noticed a critical flaw in how educational technology was being built. Ambitious education startups were hiring generic web agencies to build their platforms. These agencies knew how to build e-commerce sites, but they didn't understand pedagogy, SCORM compliance, or the massive database loads required for simultaneous student testing.</p>
                    <p>The result? Beautiful platforms that crashed during midterms, failed accessibility audits, and couldn't integrate with standard university tools.</p>
                    <p class="font-bold text-slate-900 border-l-4 border-indigo-500 pl-4">We realized that EdTech required a fundamentally different engineering approach—one where deep domain knowledge intersects with enterprise-grade software architecture.</p>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 bg-indigo-100 rounded-3xl rotate-3 scale-105 -z-10"></div>
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80" alt="Team Collaboration" class="rounded-3xl shadow-xl w-full object-cover aspect-square md:aspect-[4/3]">
            </div>
        </div>

        <div class="text-center mb-16">
            <h3 class="text-2xl font-bold text-slate-900">A Decade of Dedicated Evolution</h3>
        </div>

        <!-- 9-Point Horizontal Scroll Timeline -->
        <div class="relative max-w-full overflow-x-auto pb-8 hide-scrollbar">
            <div class="flex items-start min-w-[1200px] lg:min-w-full relative pt-10">
                <!-- Connecting Line -->
                <div class="absolute top-[52px] left-8 right-8 h-1 bg-slate-200 -z-10"></div>
                
                <?php
                $timeline = [
                    ['2017', 'Inception', 'Launched as a boutique LMS auditing consultancy.', 'indigo'],
                    ['2018', 'SCORM Engine', 'Built proprietary middleware for SCORM/xAPI syncing.', 'cyan'],
                    ['2019', 'Bootcamp Boom', 'Architected core platforms for 3 major bootcamps.', 'emerald'],
                    ['2020', 'Pandemic Pivot', 'Scaled virtual classrooms for massive traffic spikes.', 'rose'],
                    ['2021', 'Global Expansion', 'Opened India hub for 24/7 localized delivery.', 'amber'],
                    ['2022', 'Data Focus', 'Launched advanced learning analytics pipelines.', 'indigo'],
                    ['2023', 'AI-Native Leap', 'Integrated LLMs to create autonomous AI tutors.', 'cyan'],
                    ['2024', 'Enterprise Growth', 'Official vendor status for global university networks.', 'emerald'],
                    ['2025+', 'The Future', 'Setting standards for generative education platforms.', 'indigo'],
                ];
                
                foreach ($timeline as $index => $item):
                    $bg = $item[3];
                ?>
                <div class="flex-1 px-3 text-center relative group">
                    <div class="w-5 h-5 bg-white border-4 border-<?php echo $bg; ?>-500 rounded-full mx-auto mb-3 group-hover:scale-125 group-hover:bg-<?php echo $bg; ?>-500 transition-all shadow-sm"></div>
                    <div class="text-lg font-black text-slate-900 mb-1"><?php echo $item[0]; ?></div>
                    <div class="text-[10px] sm:text-xs font-bold text-<?php echo $bg; ?>-600 uppercase tracking-widest mb-2"><?php echo $item[1]; ?></div>
                    <p class="text-xs text-slate-500 leading-relaxed"><?php echo $item[2]; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- 3. Mission, Vision, Values -->
<section class="py-24 bg-[#faf9f6] text-slate-900 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">
        
        <!-- Mission Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-24">
            <div class="rounded-[2rem] overflow-hidden shadow-2xl relative h-80 border border-slate-200">
                <div class="absolute inset-0 bg-indigo-500/10 mix-blend-multiply z-10"></div>
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" alt="Our Mission">
            </div>
            <div class="p-4">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-indigo-100 border border-indigo-200 text-indigo-600 text-xs font-bold tracking-widest uppercase mb-6">
                    <i class="ph-bold ph-target"></i> Our Mission
                </div>
                <h3 class="text-2xl md:text-3xl lg:text-4xl font-extrabold mb-6 leading-tight text-slate-900">Empowering global education through high-performance software.</h3>
                <p class="text-slate-600 leading-relaxed text-lg">We believe technology should eliminate barriers to education, not create them. By building scalable, secure, and intuitive platforms, we enable educators and innovators to reach learners anywhere in the world seamlessly.</p>
            </div>
        </div>

        <!-- Vision Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-32">
            <div class="p-4 order-2 md:order-1">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-cyan-100 border border-cyan-200 text-cyan-600 text-xs font-bold tracking-widest uppercase mb-6">
                    <i class="ph-bold ph-eye"></i> Our Vision
                </div>
                <h3 class="text-2xl md:text-3xl lg:text-4xl font-extrabold mb-6 leading-tight text-slate-900">To be the premier engineering backbone for EdTech innovators.</h3>
                <p class="text-slate-600 leading-relaxed text-lg">We envision a future where educational visionaries never have to compromise on their ideas due to technical limitations. We strive to be the invisible, flawless technical force powering the next generation of learning.</p>
            </div>
            <div class="rounded-[2rem] overflow-hidden shadow-2xl relative h-80 order-1 md:order-2 border border-slate-200">
                <div class="absolute inset-0 bg-cyan-500/10 mix-blend-multiply z-10"></div>
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" alt="Our Vision">
            </div>
        </div>

        <div class="text-center mb-16">
            <h2 class="text-2xl md:text-3xl font-extrabold mb-4 text-slate-900">6 Core Values We Live By</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $values = [
                ['Pedagogy First', 'Technology should serve learning, not the other way around. Every feature is evaluated by its impact on student outcomes.', 'graduation-cap', 'indigo'],
                ['Technical Excellence', 'We don\'t cut corners. Clean architecture, exhaustive testing, and bulletproof security are non-negotiable standards.', 'code', 'cyan'],
                ['Radical Transparency', 'No black box development. Clients get direct access to Jira, GitHub, and our daily standups. Honest communication builds trust.', 'magnifying-glass', 'emerald'],
                ['Build for Scale', 'An EdTech platform isn\'t successful until it can handle thousands of concurrent learners during an exam. We build for peak load from day one.', 'trend-up', 'rose'],
                ['Constant Iteration', 'The best learning platforms evolve. We embrace agile methodologies, continuous deployment, and A/B testing based on user data.', 'arrows-clockwise', 'amber'],
                ['Global Mindset', 'Education knows no borders. We engineer for accessibility (WCAG 2.1), multi-language support, and diverse cultural learning contexts.', 'globe', 'indigo']
            ];
            
            foreach ($values as $val):
            ?>
            <div class="bg-white p-8 rounded-2xl border border-slate-200 hover:border-<?php echo $val[3]; ?>-500 transition-colors shadow-sm hover:shadow-md group">
                <div class="w-12 h-12 bg-<?php echo $val[3]; ?>-50 rounded-full flex items-center justify-center mb-6 text-<?php echo $val[3]; ?>-600 group-hover:scale-110 transition-transform">
                    <i class="ph-fill ph-<?php echo $val[2]; ?> text-xl"></i>
                </div>
                <h4 class="text-lg font-bold mb-3 text-slate-900"><?php echo $val[0]; ?></h4>
                <p class="text-sm text-slate-600 leading-relaxed"><?php echo $val[1]; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- 5. UTSL vs Generic Agency -->
<section class="py-24 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Why Specialization Matters</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">Building an educational platform is fundamentally different from building an e-commerce store.</p>
        </div>

        <div class="overflow-x-auto pb-6">
            <table class="w-full min-w-[900px] border-collapse bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-200">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200">
                        <th class="p-6 text-left font-bold text-slate-500 uppercase tracking-wider text-sm w-1/4">Capability Area</th>
                        <th class="p-6 text-center font-bold text-slate-600 text-sm border-l border-slate-200 w-1/4">Generic Dev Agency</th>
                        <th class="p-6 text-center font-bold text-white bg-indigo-600 text-sm w-1/4 shadow-inner">UTSL EdTech Studio</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <?php
                    $matrix = [
                        ['Domain Knowledge', 'E-commerce, Real Estate, Blogs', '100% Focused on Education'],
                        ['Compliance & Security', 'Standard web SSL security', 'FERPA, COPPA, GDPR, WCAG 2.1 AA'],
                        ['Learning Standards', 'Custom JSON APIs only', 'SCORM, xAPI, LTI 1.3 Integrations'],
                        ['Scalability & Load', 'Standard VPS hosting', 'Serverless infra built for concurrent exam spikes'],
                        ['AI Capabilities', 'Basic ChatGPT UI wrappers', 'Pedagogically-aligned RAG & AI Tutors'],
                        ['QA & Testing', 'Manual clicking around', 'Automated Selenium learner-flow testing'],
                        ['Pricing Model', 'Hidden hours & scope creep', 'Transparent, milestone-based equity/cash models'],
                        ['Delivery Speed', 'Requires months of EdTech learning', 'Pre-built EdTech architecture modules ready to deploy']
                    ];
                    foreach ($matrix as $row):
                    ?>
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="p-5 font-bold text-slate-800 text-sm"><?php echo $row[0]; ?></td>
                        <td class="p-5 text-center text-slate-500 text-sm border-l border-slate-200 bg-slate-50/50"><?php echo $row[1]; ?></td>
                        <td class="p-5 text-center font-bold text-indigo-700 bg-indigo-50/30 text-sm border-l border-indigo-100"><?php echo $row[2]; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- 6. Culture & Operating Principles -->
<section class="py-24 bg-[#faf9f6] text-slate-900 relative">
    <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4 text-slate-900">How We Operate</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">The culture and principles that define our daily engineering habits.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $culture = [
                ['Time is Precious', 'We hate useless meetings. We default to async communication, detailed documentation, and weekly highly-focused sprint reviews.', 'clock'],
                ['Over-Communication', 'You will never wonder what we are doing. Daily Slack updates, transparent Jira boards, and immediate alerts on blockers.', 'chat-centered-text'],
                ['Ironclad IP Protection', 'Your code is yours. We enforce strict NDAs, siloed development environments, and secure repository handoffs.', 'lock-key'],
                ['Long-Term Thinking', 'We don\'t write throwaway code. We document extensively so your future internal team can easily take over the codebase.', 'binoculars'],
                ['Global Delivery', 'With talent spanning the US and India, we provide cost-effective engineering without sacrificing a single ounce of quality or timezone overlap.', 'globe-hemisphere-west'],
                ['Client Growth First', 'We succeed when your MRR grows. We actively suggest product improvements and cost-saving architectural tweaks.', 'trend-up']
            ];
            foreach ($culture as $c):
            ?>
            <div class="bg-white rounded-2xl p-6 border border-slate-200 hover:border-cyan-400 hover:shadow-md transition-all">
                <i class="ph-bold ph-<?php echo $c[2]; ?> text-3xl text-cyan-600 mb-4"></i>
                <h4 class="text-lg font-bold mb-2 text-slate-900"><?php echo $c[0]; ?></h4>
                <p class="text-sm text-slate-600 leading-relaxed"><?php echo $c[1]; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 7. Domain Expertise Deep Dive -->
<section class="py-24 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-2">Deep Domain Expertise</h2>
            <p class="text-slate-600 max-w-2xl mx-auto text-sm">We speak the language of modern education.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-16">
            <!-- Technical Breakdown -->
            <div class="bg-indigo-50 rounded-2xl p-6 border border-indigo-100">
                <h3 class="text-lg font-bold text-indigo-900 mb-4 flex items-center gap-2"><i class="ph-fill ph-code text-indigo-600"></i> Technical Standards Mastery</h3>
                <div class="space-y-4">
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm mb-1">SCORM 1.2 / 2004</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">We build parsers and wrappers that allow legacy educational content to run flawlessly in modern React/Vue applications.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm mb-1">xAPI (Tin Can API)</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Implementing granular event tracking (LRS) to capture exact user behaviors, video watch time, and quiz interactions.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm mb-1">LTI 1.3 Advantage</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Securely embedding external tools into Canvas, Blackboard, and Moodle using modern OAuth2 and OIDC flows.</p>
                    </div>
                </div>
            </div>

            <!-- Business Models -->
            <div class="bg-cyan-50 rounded-2xl p-6 border border-cyan-100">
                <h3 class="text-lg font-bold text-cyan-900 mb-4 flex items-center gap-2"><i class="ph-fill ph-money text-cyan-600"></i> EdTech Business Models</h3>
                <div class="space-y-4">
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm mb-1">B2B District/Enterprise Sales</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Complex multi-tenant architectures supporting district admins, school principals, teachers, and students in one database.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm mb-1">B2C Subscription & Freemium</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Integrating Stripe Billing with automated content dripping, paywalls, and free-trial lifecycle management.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm mb-1">Cohort-Based Courses (CBCs)</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Building live-sync features, peer grading systems, and synchronous community feeds for time-bound cohorts.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 8 Sectors -->
        <h3 class="text-xl font-bold text-center text-slate-900 mb-8">Sectors We Serve</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <?php
            $sectors = [
                ['name' => 'K-12 & Primary', 'classes' => 'bg-indigo-50 text-indigo-700 border-indigo-200 hover:bg-indigo-100 hover:border-indigo-300'],
                ['name' => 'Higher Education', 'classes' => 'bg-blue-50 text-blue-700 border-blue-200 hover:bg-blue-100 hover:border-blue-300'],
                ['name' => 'Corporate Compliance', 'classes' => 'bg-emerald-50 text-emerald-700 border-emerald-200 hover:bg-emerald-100 hover:border-emerald-300'],
                ['name' => 'Tech Bootcamps', 'classes' => 'bg-rose-50 text-rose-700 border-rose-200 hover:bg-rose-100 hover:border-rose-300'],
                ['name' => 'Language Learning', 'classes' => 'bg-amber-50 text-amber-700 border-amber-200 hover:bg-amber-100 hover:border-amber-300'],
                ['name' => 'Professional Certs', 'classes' => 'bg-purple-50 text-purple-700 border-purple-200 hover:bg-purple-100 hover:border-purple-300'],
                ['name' => 'Tutoring Marketplaces', 'classes' => 'bg-pink-50 text-pink-700 border-pink-200 hover:bg-pink-100 hover:border-pink-300'],
                ['name' => 'Creator Platforms', 'classes' => 'bg-teal-50 text-teal-700 border-teal-200 hover:bg-teal-100 hover:border-teal-300']
            ];
            foreach ($sectors as $sec):
            ?>
            <div class="<?php echo $sec['classes']; ?> border rounded-xl p-4 text-center shadow-sm hover:shadow-md transition-all hover:-translate-y-1 font-bold text-sm cursor-pointer">
                <?php echo $sec['name']; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 8. Global Reach -->
<section class="py-24 bg-slate-50 border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">Global Scale, Local Touch</h2>
                <p class="text-lg text-slate-600 mb-8">We leverage the "India Advantage" to provide elite, enterprise-grade engineering at startup-friendly economics. But we do it without the typical offshore headaches.</p>
                
                <ul class="space-y-4 text-slate-700 font-medium mb-8">
                    <li class="flex items-center gap-3"><i class="ph-bold ph-check-circle text-indigo-600 text-xl"></i> Guaranteed 4-hour timezone overlap with US (EST/PST).</li>
                    <li class="flex items-center gap-3"><i class="ph-bold ph-check-circle text-indigo-600 text-xl"></i> Native English fluency for flawless communication.</li>
                    <li class="flex items-center gap-3"><i class="ph-bold ph-check-circle text-indigo-600 text-xl"></i> Cultural localization for regional learning nuances.</li>
                </ul>
                
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-white border border-slate-200 rounded-full text-xs font-bold text-slate-500">USA</span>
                    <span class="px-3 py-1 bg-white border border-slate-200 rounded-full text-xs font-bold text-slate-500">UK</span>
                    <span class="px-3 py-1 bg-white border border-slate-200 rounded-full text-xs font-bold text-slate-500">Canada</span>
                    <span class="px-3 py-1 bg-white border border-slate-200 rounded-full text-xs font-bold text-slate-500">Australia</span>
                    <span class="px-3 py-1 bg-white border border-slate-200 rounded-full text-xs font-bold text-slate-500">Singapore</span>
                    <span class="px-3 py-1 bg-white border border-slate-200 rounded-full text-xs font-bold text-slate-500">UAE</span>
                    <span class="px-3 py-1 bg-white border border-slate-200 rounded-full text-xs font-bold text-slate-500">India</span>
                </div>
            </div>
            <div class="bg-white p-8 rounded-3xl shadow-xl border border-slate-100 relative">
                <div class="aspect-[4/3] rounded-2xl bg-slate-100 flex items-center justify-center overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?auto=format&fit=crop&q=80" alt="Global Operations" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 9. Community & CSR -->
<section class="py-24 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Giving Back to Education</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200">
                <i class="ph-bold ph-git-branch text-2xl text-indigo-600 mb-4"></i>
                <h4 class="font-bold text-sm mb-2">Open-Source n8n Templates</h4>
                <p class="text-xs text-slate-600 leading-relaxed">We publish free workflow automation templates to help educators automate administrative tasks without coding.</p>
            </div>
            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200">
                <i class="ph-bold ph-code text-2xl text-indigo-600 mb-4"></i>
                <h4 class="font-bold text-sm mb-2">Open-Source Commitment</h4>
                <p class="text-xs text-slate-600 leading-relaxed">We actively contribute to major open-source educational frameworks and sponsor community developers.</p>
            </div>
            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200">
                <i class="ph-bold ph-scales text-2xl text-indigo-600 mb-4"></i>
                <h4 class="font-bold text-sm mb-2">Equity Pricing</h4>
                <p class="text-xs text-slate-600 leading-relaxed">We offer significantly discounted engineering rates for verified non-profit educational institutions.</p>
            </div>
            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200">
                <i class="ph-bold ph-wifi-slash text-2xl text-indigo-600 mb-4"></i>
                <h4 class="font-bold text-sm mb-2">Offline-First PWA Dev</h4>
                <p class="text-xs text-slate-600 leading-relaxed">We prioritize building Progressive Web Apps that function offline for learners in low-bandwidth global regions.</p>
            </div>
        </div>
    </div>
</section>

<!-- 10. Testimonials -->
<style>
@keyframes marquee {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
.animate-marquee {
  animation: marquee 40s linear infinite;
}
.animate-marquee:hover {
  animation-play-state: paused;
}
</style>
<section class="py-24 bg-[#faf9f6] text-slate-900 relative overflow-hidden">
    <div class="max-w-[100vw] relative z-10">
        <div class="text-center mb-16 px-4">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4 text-slate-900">What Our Partners Say</h2>
        </div>
        
        <div class="relative overflow-hidden group">
            <!-- Fade overlays for the edges -->
            <div class="absolute top-0 left-0 h-full w-24 bg-gradient-to-r from-[#faf9f6] to-transparent z-10 pointer-events-none"></div>
            <div class="absolute top-0 right-0 h-full w-24 bg-gradient-to-l from-[#faf9f6] to-transparent z-10 pointer-events-none"></div>
            
            <div class="flex gap-6 w-max animate-marquee">
                <?php
                $testimonials = [
                    [
                        'text' => 'UTSL didn\'t just build the platform we asked for, they built the platform we actually needed. Their understanding of SCORM saved us months of headaches.',
                        'initials' => 'MR', 'color' => 'indigo', 'name' => 'Manish Rao', 'role' => 'Founder, CorporateTrain'
                    ],
                    [
                        'text' => 'Our legacy LMS was crashing under the weight of 10,000 students. UTSL re-architected the database in weeks. We haven\'t had a minute of downtime since.',
                        'initials' => 'SL', 'color' => 'cyan', 'name' => 'Sneha L.', 'role' => 'VP Tech, Global University'
                    ],
                    [
                        'text' => 'The AI tutoring agent they built into our curriculum increased student completion rates by 40%. Absolutely game-changing engineering.',
                        'initials' => 'DK', 'color' => 'emerald', 'name' => 'Deepak K.', 'role' => 'CEO, CodeCamp Online'
                    ],
                    [
                        'text' => 'Working with their team in India has been flawless. The communication is better than local agencies we\'ve hired in the past.',
                        'initials' => 'AJ', 'color' => 'rose', 'name' => 'Aditi J.', 'role' => 'Director, LearnFast'
                    ],
                    [
                        'text' => 'We tried three generic dev shops before finding UTSL. They instantly understood the complexities of cohort-based learning and LTI integrations. They are now our permanent technical partner.',
                        'initials' => 'TW', 'color' => 'amber', 'name' => 'Tarun Wadhwa', 'role' => 'COO, CreatorEd'
                    ]
                ];
                // Duplicate for smooth infinite scrolling
                $marquee_items = array_merge($testimonials, $testimonials);
                
                foreach($marquee_items as $t):
                ?>
                <div class="bg-white p-8 rounded-3xl border border-slate-200 flex flex-col w-[350px] md:w-[450px] whitespace-normal flex-shrink-0 shadow-sm cursor-pointer transition-shadow hover:shadow-md">
                    <div class="flex gap-1 text-amber-400 mb-6"><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i></div>
                    <p class="text-slate-700 mb-8 italic flex-grow">"<?php echo $t['text']; ?>"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-<?php echo $t['color']; ?>-100 text-<?php echo $t['color']; ?>-700 rounded-full flex items-center justify-center font-bold border border-<?php echo $t['color']; ?>-200"><?php echo $t['initials']; ?></div>
                        <div>
                            <h4 class="font-bold text-sm text-slate-900"><?php echo $t['name']; ?></h4>
                            <p class="text-xs text-slate-500"><?php echo $t['role']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- 11. CTA & Newsletter -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:60px_60px] opacity-50 -z-10 [mask-image:radial-gradient(ellipse_60%_60%_at_50%_50%,#000_70%,transparent_100%)]"></div>
    
    <div class="max-w-4xl mx-auto px-4 md:px-6 relative z-10">
        <div class="bg-indigo-50/80 backdrop-blur-xl rounded-3xl p-6 md:p-8 shadow-xl border border-indigo-100 text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-3">Let's Build Something Great</h2>
            <p class="text-base text-slate-600 mb-6 max-w-xl mx-auto">Ready to scale your EdTech platform? Choose how you'd like to engage with our team of architects.</p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-3">
                <a href="https://calendly.com/" target="_blank" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl transition-all shadow-md hover:-translate-y-1 text-sm">
                    Book Strategy Call
                </a>
                <a href="contact-us.php" class="px-6 py-3 bg-slate-900 hover:bg-black text-white font-bold rounded-xl transition-all shadow-md hover:-translate-y-1 text-sm">
                    Submit RFP
                </a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=support@utsl.com" target="_blank" class="px-6 py-3 bg-white hover:bg-slate-50 text-slate-700 font-bold rounded-xl border border-slate-200 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all text-sm">
                    Email Team
                </a>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-200 text-center max-w-3xl mx-auto">
            <i class="ph-fill ph-envelope-open text-3xl text-indigo-500 mb-4"></i>
            <h3 class="text-xl font-bold text-slate-900 mb-2">Join Our EdTech Engineering Newsletter</h3>
            <p class="text-sm text-slate-500 mb-6">Monthly insights on AI integration, LMS scaling, and educational software architecture.</p>
            <form class="flex flex-col sm:flex-row gap-2 max-w-lg mx-auto">
                <input type="email" placeholder="Your work email" required class="flex-grow px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                <button type="submit" class="px-6 py-3 bg-slate-900 text-white font-bold rounded-xl hover:bg-black transition-colors whitespace-nowrap">Subscribe</button>
            </form>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
