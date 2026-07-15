<?php include 'db.php'; include 'header.php'; ?>

<!-- 1. COVER: BRAND HEADER & PURPOSE -->
<section class="relative pt-32 pb-24 lg:pt-40 lg:pb-32 overflow-hidden bg-utsl-dark text-white">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80')] opacity-10 bg-cover bg-center"></div>
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-utsl-primary/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
    
    <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">
        <div class="max-w-4xl">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 backdrop-blur-md mb-8">
                <span class="flex h-2 w-2 rounded-full bg-utsl-secondary animate-pulse"></span>
                <span class="text-xs font-bold tracking-widest uppercase text-slate-300">Services & Capabilities</span>
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight mb-8 leading-[1.1]">
                Engineering the <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-utsl-secondary to-utsl-accent">Future of Learning</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 mb-10 max-w-2xl leading-relaxed">
                A comprehensive overview of our technical capabilities, delivery models, and pricing for enterprise-grade educational technology.
            </p>
        </div>
    </div>
</section>

<!-- 2. WHO WE ARE -->
<section class="py-24 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div>
                <h2 class="text-3xl font-extrabold text-utsl-dark mb-6">Mission & Global Delivery</h2>
                <p class="text-lg text-slate-600 leading-relaxed mb-6">
                    Our mission is to eliminate the technical friction in education. We operate a global delivery model, combining strategic oversight from our US-based architecture team with the rapid execution capabilities of our elite engineering pods in India.
                </p>
                <p class="text-lg text-slate-600 leading-relaxed">
                    This allows us to deliver high-quality, scalable EdTech solutions at a sustainable cost without compromising on security, compliance, or code quality.
                </p>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-slate-50 p-6 rounded-2xl border border-gray-100">
                    <div class="text-4xl font-black text-utsl-primary mb-2">12+</div>
                    <div class="text-sm font-bold text-slate-500 uppercase tracking-wider">Enterprise Platforms</div>
                </div>
                <div class="bg-slate-50 p-6 rounded-2xl border border-gray-100">
                    <div class="text-4xl font-black text-utsl-secondary mb-2">5</div>
                    <div class="text-sm font-bold text-slate-500 uppercase tracking-wider">Countries Served</div>
                </div>
                <div class="bg-slate-50 p-6 rounded-2xl border border-gray-100">
                    <div class="text-4xl font-black text-utsl-accent mb-2">500K+</div>
                    <div class="text-sm font-bold text-slate-500 uppercase tracking-wider">Active Learners</div>
                </div>
                <div class="bg-slate-50 p-6 rounded-2xl border border-gray-100">
                    <div class="text-4xl font-black text-purple-600 mb-2">100%</div>
                    <div class="text-sm font-bold text-slate-500 uppercase tracking-wider">Delivery Success</div>
                </div>
                <div class="col-span-2 bg-utsl-dark p-6 rounded-2xl border border-utsl-dark">
                    <div class="text-4xl font-black text-white mb-2">SOC2 / FERPA</div>
                    <div class="text-sm font-bold text-slate-400 uppercase tracking-wider">Compliance Standards Met</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. SERVICE 01: CUSTOM LMS DEVELOPMENT -->
<section class="py-24 bg-utsl-bg border-b border-gray-100" id="service-lms">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="flex items-center gap-4 mb-12">
            <div class="w-16 h-16 bg-indigo-100 text-utsl-primary rounded-2xl flex items-center justify-center">
                <i class="ph ph-books text-3xl"></i>
            </div>
            <div>
                <span class="text-sm font-bold text-utsl-primary tracking-widest uppercase">Service 01</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-utsl-dark">Custom LMS & Platform Development</h2>
            </div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div class="space-y-12">
                <div>
                    <h3 class="text-xl font-bold text-utsl-dark mb-6">16 Core Platform Features</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <?php
                        $core_features = ['User Role Management (RBAC)', 'Course Catalog & Taxonomy', 'Video Streaming & Hosting', 'Interactive Quizzes', 'SCORM 1.2/2004 Support', 'Gradebook & Assessments', 'Certificate Generation', 'Discussion Forums', 'Announcement System', 'Basic Reporting', 'Mobile Responsive UI', 'Email Notifications', 'Multi-tenant Architecture', 'SSO (SAML/OAuth2)', 'White-labeling', 'Payment Gateway Integration'];
                        foreach($core_features as $feature) {
                            echo '<div class="flex items-center gap-3 text-slate-700 bg-white p-3 rounded-lg border border-gray-100 shadow-sm text-sm"><i class="ph-fill ph-check-circle text-utsl-primary"></i> ' . $feature . '</div>';
                        }
                        ?>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold text-utsl-dark mb-6">8 Advanced Capabilities</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <?php
                        $advanced_features = ['xAPI Learning Record Store', 'Adaptive Learning Paths', 'Proctoring Integration', 'Offline Sync Capabilities', 'Complex B2B Licensing', 'Gamification Engine', 'Real-time Chat/Video', 'Cohort-based Workflows'];
                        foreach($advanced_features as $feature) {
                            echo '<div class="flex items-center gap-3 text-slate-700 bg-indigo-50 p-3 rounded-lg border border-indigo-100 text-sm"><i class="ph-fill ph-star text-utsl-secondary"></i> ' . $feature . '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            
            <div class="space-y-8 sticky top-24">
                <!-- Prototype Photo -->
                <div class="w-full aspect-video rounded-3xl overflow-hidden shadow-premium border border-gray-200">
                    <img src="assets/img/lms-prototype.png" alt="LMS Prototype" class="w-full h-full object-cover">
                </div>


            </div>
        </div>
    </div>
</section>

<!-- 4. SERVICE 02: AI TOOLS -->
<section class="py-24 bg-white border-b border-gray-100" id="service-ai">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="flex items-center gap-4 mb-12">
            <div class="w-16 h-16 bg-sky-100 text-utsl-secondary rounded-2xl flex items-center justify-center">
                <i class="ph ph-brain text-3xl"></i>
            </div>
            <div>
                <span class="text-sm font-bold text-utsl-secondary tracking-widest uppercase">Service 02</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-utsl-dark">AI EdTech Integration</h2>
            </div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Prototype Photo -->
            <div class="order-2 lg:order-1 w-full aspect-square md:aspect-video lg:aspect-square rounded-3xl overflow-hidden shadow-premium border border-gray-200">
                <img src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?auto=format&fit=crop&q=80" alt="AI Tools Prototype" class="w-full h-full object-cover">
            </div>

            <div class="order-1 lg:order-2 space-y-4">
                <div class="p-6 rounded-3xl border border-gray-100 shadow-sm hover:shadow-premium transition-shadow bg-slate-50">
                    <h3 class="text-lg font-bold text-utsl-dark mb-3"><i class="ph-fill ph-robot text-utsl-primary mr-2"></i> Custom AI Tutors</h3>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex gap-2"><i class="ph-fill ph-check-circle text-utsl-secondary mt-0.5"></i> RAG implementation using your own curriculum</li>
                        <li class="flex gap-2"><i class="ph-fill ph-check-circle text-utsl-secondary mt-0.5"></i> Socratic questioning mode (doesn't just give answers)</li>
                        <li class="flex gap-2"><i class="ph-fill ph-check-circle text-utsl-secondary mt-0.5"></i> Multimodal inputs (Voice, Image upload)</li>
                        <li class="flex gap-2"><i class="ph-fill ph-check-circle text-utsl-secondary mt-0.5"></i> Hallucination-mitigation protocols</li>
                    </ul>
                </div>
                
                <div class="p-6 rounded-3xl border border-gray-100 shadow-sm hover:shadow-premium transition-shadow bg-slate-50">
                    <h3 class="text-lg font-bold text-utsl-dark mb-3"><i class="ph-fill ph-exam text-utsl-primary mr-2"></i> Auto-Grading & Analytics</h3>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex gap-2"><i class="ph-fill ph-check-circle text-utsl-secondary mt-0.5"></i> Free-text essay evaluation against rubrics</li>
                        <li class="flex gap-2"><i class="ph-fill ph-check-circle text-utsl-secondary mt-0.5"></i> Code execution and semantic analysis</li>
                        <li class="flex gap-2"><i class="ph-fill ph-check-circle text-utsl-secondary mt-0.5"></i> Plagiarism & AI-generation detection</li>
                        <li class="flex gap-2"><i class="ph-fill ph-check-circle text-utsl-secondary mt-0.5"></i> Personalized learning path generation</li>
                    </ul>
                </div>
                
                <div class="p-6 rounded-3xl border border-gray-100 shadow-sm hover:shadow-premium transition-shadow bg-slate-50">
                    <h3 class="text-lg font-bold text-utsl-dark mb-3"><i class="ph-fill ph-headset text-utsl-primary mr-2"></i> AI Sales & Enrollment Agents</h3>
                    <p class="text-sm text-slate-600">Automate course enrollment and lead qualification with conversational agents that understand your catalog, handle objections, and connect to payment gateways.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. SERVICE 03: MOBILE APPS -->
<section class="py-24 bg-utsl-bg border-b border-gray-100" id="service-mobile">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="flex items-center gap-4 mb-12">
            <div class="w-16 h-16 bg-emerald-100 text-utsl-accent rounded-2xl flex items-center justify-center">
                <i class="ph ph-device-mobile text-3xl"></i>
            </div>
            <div>
                <span class="text-sm font-bold text-utsl-accent tracking-widest uppercase">Service 03</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-utsl-dark">Native & Cross-Platform Mobile Apps</h2>
            </div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div class="space-y-5">
                <p class="text-base text-slate-600 mb-6">We build learning applications that students actually want to use, optimized for microlearning, poor network conditions, and high engagement.</p>
                
                <h3 class="font-bold text-lg mb-3 text-utsl-dark">Core App Features (16 points)</h3>
                <div class="grid grid-cols-2 gap-x-4 gap-y-2 mb-6">
                    <?php
                    $mobile_features = ['Offline Mode (Video/PDF)', 'Push Notifications', 'In-App Purchases', 'Biometric Login', 'Background Audio', 'Gamified Streaks', 'AR Learning Modes', 'Dark Mode', 'Local Database Sync', 'Deep Linking', 'Cast to TV', 'Widget Support', 'Progress Tracking', 'Social Sharing', 'Multi-language', 'Accessibility VoiceOver'];
                    foreach($mobile_features as $feature) {
                        echo '<div class="text-xs text-slate-600 flex items-start gap-2 bg-white p-2 rounded border border-gray-100"><i class="ph-fill ph-check-circle text-utsl-accent mt-0.5"></i> ' . $feature . '</div>';
                    }
                    ?>
                </div>
                
                <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
                    <h4 class="font-bold text-sm text-slate-500 uppercase tracking-widest mb-3">5-Step Delivery</h4>
                    <ol class="list-decimal list-inside text-xs text-slate-700 space-y-2 font-medium">
                        <li>UX/UI Mobile Prototype (Figma)</li>
                        <li>API Optimization for Mobile Payloads</li>
                        <li>Cross-Platform Development</li>
                        <li>TestFlight / Internal Testing</li>
                        <li>App Store & Google Play Submission</li>
                    </ol>
                </div>
            </div>
            
            <div class="space-y-6 sticky top-24">
                <!-- Prototype Photo -->
                <div class="w-full aspect-video rounded-3xl overflow-hidden shadow-premium border border-gray-200">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&q=80" alt="Mobile App Prototype" class="w-full h-full object-cover">
                </div>


            </div>
        </div>
    </div>
</section>

<!-- 6. SERVICE 04: INTEGRATIONS & AUTOMATION -->
<section class="py-24 bg-white border-b border-gray-100" id="service-integrations">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="flex items-center gap-4 mb-12">
            <div class="w-16 h-16 bg-orange-100 text-orange-600 rounded-2xl flex items-center justify-center">
                <i class="ph ph-arrows-merge text-3xl"></i>
            </div>
            <div>
                <span class="text-sm font-bold text-orange-600 tracking-widest uppercase">Service 04</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-utsl-dark">System Integrations & n8n Automation</h2>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch mb-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 h-full">
                <div class="p-5 bg-slate-50 rounded-2xl border border-gray-100 hover:border-orange-200 transition-colors flex flex-col justify-center">
                    <i class="ph ph-credit-card text-2xl text-orange-500 mb-3"></i>
                    <h4 class="font-bold text-base mb-1 text-utsl-dark">Payments & Billing</h4>
                    <p class="text-xs text-slate-600">Stripe, PayPal, Razorpay, B2B invoicing, recurring subscriptions.</p>
                </div>
                <div class="p-5 bg-slate-50 rounded-2xl border border-gray-100 hover:border-orange-200 transition-colors flex flex-col justify-center">
                    <i class="ph ph-video-camera text-2xl text-orange-500 mb-3"></i>
                    <h4 class="font-bold text-base mb-1 text-utsl-dark">Video Conferencing</h4>
                    <p class="text-xs text-slate-600">Zoom API, Google Meet, Mux, custom WebRTC integrations.</p>
                </div>
                <div class="p-5 bg-slate-50 rounded-2xl border border-gray-100 hover:border-orange-200 transition-colors flex flex-col justify-center">
                    <i class="ph ph-identification-card text-2xl text-orange-500 mb-3"></i>
                    <h4 class="font-bold text-base mb-1 text-utsl-dark">HRIS & SSO</h4>
                    <p class="text-xs text-slate-600">Active Directory, Workday, BambooHR, Okta, Auth0 integrations.</p>
                </div>
                <div class="p-5 bg-slate-50 rounded-2xl border border-gray-100 hover:border-orange-200 transition-colors flex flex-col justify-center">
                    <i class="ph ph-users-three text-2xl text-orange-500 mb-3"></i>
                    <h4 class="font-bold text-base mb-1 text-utsl-dark">CRM & Marketing</h4>
                    <p class="text-xs text-slate-600">Salesforce, HubSpot, ActiveCampaign, Mailchimp data sync.</p>
                </div>
            </div>

            <!-- Prototype Photo -->
            <div class="w-full h-full min-h-[300px] rounded-3xl overflow-hidden shadow-premium border border-gray-200">
                <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?auto=format&fit=crop&q=80" alt="Integrations Dashboard Prototype" class="w-full h-full object-cover">
            </div>
        </div>

        <div class="bg-utsl-dark rounded-3xl p-6 md:p-8 text-white flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <h3 class="text-xl font-bold mb-3 flex items-center gap-3"><img src="https://n8n.io/favicon.ico" class="w-6 h-6 rounded bg-white p-1" alt="n8n"> Workflow Automation</h3>
                <p class="text-sm text-slate-300 mb-5">Stop doing manual admin work. We build custom n8n pipelines that connect your LMS to your entire business ecosystem.</p>
                <div class="space-y-3">
                    <div class="bg-white/10 p-4 rounded-xl border border-white/10">
                        <h5 class="font-bold text-sm text-utsl-secondary mb-1">Use Case 1: Student Onboarding</h5>
                        <p class="text-xs text-slate-400">Stripe Payment &rarr; Create User in LMS &rarr; Add to Slack Group &rarr; Send Welcome Email</p>
                    </div>
                    <div class="bg-white/10 p-4 rounded-xl border border-white/10">
                        <h5 class="font-bold text-sm text-utsl-accent mb-1">Use Case 2: Dropout Prevention</h5>
                        <p class="text-xs text-slate-400">LMS detects 7-day inactivity &rarr; Send WhatsApp nudge &rarr; Create Zendesk ticket for tutor</p>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 w-full">
                <div class="aspect-video bg-white/5 rounded-2xl border border-white/10 flex items-center justify-center overflow-hidden relative">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.1)_0,transparent_100%)]"></div>
                    <div class="flex gap-4 items-center">
                        <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg"><i class="ph ph-stripe-logo text-2xl"></i></div>
                        <div class="w-16 h-1 border-t-2 border-dashed border-slate-500 relative"><div class="absolute right-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-slate-500 rounded-full"></div></div>
                        <div class="w-16 h-16 bg-black rounded-xl flex items-center justify-center shadow-lg border border-slate-700 text-xs font-bold font-mono">n8n</div>
                        <div class="w-16 h-1 border-t-2 border-dashed border-slate-500 relative"><div class="absolute right-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-slate-500 rounded-full"></div></div>
                        <div class="w-12 h-12 bg-utsl-primary rounded-xl flex items-center justify-center shadow-lg"><i class="ph ph-graduation-cap text-2xl"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. SERVICE 05: ANALYTICS -->
<section class="py-24 bg-utsl-bg border-b border-gray-100" id="service-analytics">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="flex items-center gap-4 mb-12">
            <div class="w-16 h-16 bg-purple-100 text-purple-600 rounded-2xl flex items-center justify-center">
                <i class="ph ph-chart-line-up text-3xl"></i>
            </div>
            <div>
                <span class="text-sm font-bold text-purple-600 tracking-widest uppercase">Service 05</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-utsl-dark">xAPI Analytics & Dashboards</h2>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch">
            <!-- Prototype Photo -->
            <div class="w-full h-full min-h-[300px] rounded-3xl overflow-hidden shadow-premium border border-gray-200">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80" alt="Analytics Dashboard Prototype" class="w-full h-full object-cover">
            </div>

            <div class="flex flex-col justify-between h-full space-y-4">
                <p class="text-base text-slate-600">Move beyond SCORM's basic pass/fail tracking. We implement full xAPI (Experience API) architecture to track nuanced learning behaviors across your platform, mobile apps, and external tools.</p>
                
                <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex-shrink-0">
                    <h3 class="font-bold text-base mb-2 text-utsl-dark">LRS Setup & Architecture</h3>
                    <p class="text-xs text-slate-600">We deploy and configure enterprise Learning Record Stores (LRS) like Learning Locker or Watershed, ensuring secure, high-throughput event streaming via standard "Actor-Verb-Object" JSON statements.</p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 flex-grow">
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex flex-col justify-center h-full">
                        <h4 class="font-bold text-sm text-utsl-dark mb-2"><i class="ph ph-student text-utsl-primary"></i> Learner Dashboards</h4>
                        <ul class="text-xs text-slate-600 space-y-1">
                            <li>&bull; Skill mastery visualizations</li>
                            <li>&bull; Peer benchmarking</li>
                            <li>&bull; Time-on-task breakdowns</li>
                            <li>&bull; Automated certificate claims</li>
                        </ul>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex flex-col justify-center h-full">
                        <h4 class="font-bold text-sm text-utsl-dark mb-2"><i class="ph ph-chalkboard-teacher text-utsl-primary"></i> Admin Metrics</h4>
                        <ul class="text-xs text-slate-600 space-y-1">
                            <li>&bull; Question difficulty analysis</li>
                            <li>&bull; Churn & dropout prediction</li>
                            <li>&bull; Revenue by cohort/course</li>
                            <li>&bull; Content engagement heatmaps</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 8. SERVICE 06: CTO-AS-A-SERVICE -->
<section class="py-24 bg-white border-b border-gray-100" id="service-cto">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 gap-6">
            <div class="flex items-center gap-4">
                <div class="w-16 h-16 bg-slate-100 text-slate-800 rounded-2xl flex items-center justify-center">
                    <i class="ph ph-strategy text-3xl"></i>
                </div>
                <div>
                    <span class="text-sm font-bold text-slate-500 tracking-widest uppercase">Service 06</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-utsl-dark">CTO-as-a-Service</h2>
                </div>
            </div>
            <p class="text-lg text-slate-600 max-w-xl">Strategic technical leadership without the overhead of a full-time executive hire.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 h-full">
                <div class="p-6 bg-slate-50 border border-gray-200 rounded-3xl col-span-1 sm:col-span-2 flex flex-col justify-center h-full">
                    <div class="text-utsl-primary text-2xl mb-3"><i class="ph ph-compass"></i></div>
                    <h3 class="text-lg font-bold mb-2 text-utsl-dark">Strategy</h3>
                    <p class="text-xs text-slate-600 mb-4">We help you pick the right tools, build a clear plan for the future, and make sure your platform won't break as you gain more users.</p>
                    <div class="pt-3 border-t border-gray-200 mt-auto flex justify-between items-end">
                        <div>
                            <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider block mb-1">Engagement Model</span>
                            <p class="font-bold text-utsl-dark text-xs">Fractional CTO</p>
                        </div>
                    </div>
                </div>
                
                <div class="p-5 bg-slate-50 border border-gray-200 rounded-3xl flex flex-col justify-center h-full">
                    <div class="text-utsl-primary text-xl mb-3"><i class="ph ph-users-three"></i></div>
                    <h3 class="text-base font-bold mb-2 text-utsl-dark">Vendor Management</h3>
                    <p class="text-xs text-slate-600 mb-4">We review your existing code and oversee your dev team to make sure they're doing high-quality work.</p>
                    <div class="pt-3 border-t border-gray-200 mt-auto">
                        <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider block mb-1">Engagement Model</span>
                        <div class="flex justify-between items-end">
                            <p class="font-bold text-utsl-dark text-xs">Tech Rescue</p>
                        </div>
                    </div>
                </div>
                
                <div class="p-5 bg-slate-50 border border-gray-200 rounded-3xl flex flex-col justify-center h-full">
                    <div class="text-utsl-primary text-xl mb-3"><i class="ph ph-magnifying-glass"></i></div>
                    <h3 class="text-base font-bold mb-2 text-utsl-dark">Due Diligence</h3>
                    <p class="text-xs text-slate-600 mb-4">Getting ready for funding? We provide deep technical reviews to show investors your tech is solid.</p>
                    <div class="pt-3 border-t border-gray-200 mt-auto">
                        <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider block mb-1">Engagement Model</span>
                        <div class="flex justify-between items-end">
                            <p class="font-bold text-utsl-dark text-xs">Ad-Hoc Consult</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Prototype Photo -->
            <div class="w-full h-full min-h-[300px] rounded-3xl overflow-hidden shadow-premium border border-gray-200">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80" alt="Consulting/CTO Meeting Prototype" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</section>

<!-- 9. SERVICE 07: GROWTH ENGINEERING -->
<section class="py-24 bg-utsl-bg border-b border-gray-100" id="service-growth">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="flex items-center gap-4 mb-12">
            <div class="w-16 h-16 bg-green-100 text-green-600 rounded-2xl flex items-center justify-center">
                <i class="ph ph-trend-up text-3xl"></i>
            </div>
            <div>
                <span class="text-sm font-bold text-green-600 tracking-widest uppercase">Service 07</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-utsl-dark">Growth Engineering</h2>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch">
            <!-- Prototype Photo -->
            <div class="w-full h-full min-h-[300px] rounded-3xl overflow-hidden shadow-premium border border-gray-200 order-2 lg:order-1">
                <img src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?auto=format&fit=crop&q=80" alt="Growth Engineering Prototype" class="w-full h-full object-cover">
            </div>

            <div class="space-y-5 order-1 lg:order-2">
                <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
                    <h3 class="text-xl font-bold text-utsl-dark mb-3">Inbound Systems</h3>
                    <p class="text-sm text-slate-600 mb-5">Technical implementation of organic growth engines.</p>
                    <ul class="space-y-3">
                        <li class="flex gap-3">
                            <div class="w-8 h-8 bg-slate-50 rounded-lg flex items-center justify-center shrink-0"><i class="ph ph-magnifying-glass text-utsl-primary"></i></div>
                            <div>
                                <h5 class="font-bold text-sm text-utsl-dark">Programmatic SEO</h5>
                                <p class="text-xs text-slate-500">Generating thousands of targeted course landing pages automatically.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <div class="w-8 h-8 bg-slate-50 rounded-lg flex items-center justify-center shrink-0"><i class="ph ph-magnet text-utsl-primary"></i></div>
                            <div>
                                <h5 class="font-bold text-sm text-utsl-dark">Interactive Lead Magnets</h5>
                                <p class="text-xs text-slate-500">Building calculators, mini-assessments, and free tools to capture emails.</p>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <div class="w-8 h-8 bg-slate-50 rounded-lg flex items-center justify-center shrink-0"><i class="ph ph-chat-circle text-utsl-primary"></i></div>
                            <div>
                                <h5 class="font-bold text-sm text-utsl-dark">AI Chat Conversions</h5>
                                <p class="text-xs text-slate-500">Deploying LLM agents on marketing sites to answer pricing and syllabus questions 24/7.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
                    <h3 class="text-lg font-bold text-utsl-dark mb-3">Outbound AI Pipeline (5-Step)</h3>
                    <p class="text-slate-600 mb-5 text-xs">Automated B2B lead generation for enterprise EdTech sales.</p>
                    <div class="relative border-l-2 border-utsl-secondary ml-3 pl-5 space-y-3">
                        <div class="relative">
                            <div class="absolute w-3 h-3 bg-utsl-secondary rounded-full -left-[27px] top-1 border-[3px] border-white"></div>
                            <h5 class="font-bold text-xs text-utsl-dark">1. Data Scraping</h5>
                        </div>
                        <div class="relative">
                            <div class="absolute w-3 h-3 bg-utsl-secondary rounded-full -left-[27px] top-1 border-[3px] border-white"></div>
                            <h5 class="font-bold text-xs text-utsl-dark">2. Enrichment</h5>
                        </div>
                        <div class="relative">
                            <div class="absolute w-3 h-3 bg-utsl-secondary rounded-full -left-[27px] top-1 border-[3px] border-white"></div>
                            <h5 class="font-bold text-xs text-utsl-dark">3. Personalization Engine</h5>
                        </div>
                        <div class="relative">
                            <div class="absolute w-3 h-3 bg-utsl-secondary rounded-full -left-[27px] top-1 border-[3px] border-white"></div>
                            <h5 class="font-bold text-xs text-utsl-dark">4. Multichannel Outreach</h5>
                        </div>
                        <div class="relative">
                            <div class="absolute w-3 h-3 bg-utsl-secondary rounded-full -left-[27px] top-1 border-[3px] border-white"></div>
                            <h5 class="font-bold text-xs text-utsl-dark">5. CRM Sync</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 10. HOW WE WORK (DELIVERY PROCESS) -->
<section class="py-24 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-5xl font-extrabold text-utsl-dark mb-4">How We Work</h2>
            <p class="text-lg text-slate-600">A battle-tested methodology for shipping reliable educational software on time.</p>
        </div>

        <!-- The 6-Step Process -->
        <div class="relative w-full max-w-5xl mx-auto mt-12 px-4 md:px-0">
            <!-- Connecting Line -->
            <div class="hidden md:block absolute top-1/2 left-0 right-0 h-1 bg-gray-100 -translate-y-1/2 z-0"></div>
            
            <div class="grid grid-cols-1 md:grid-cols-6 gap-8 md:gap-4 relative z-10">
                <?php
                $steps = [
                    ['01', 'Discovery', 'Aligning business goals and technical feasibility.'],
                    ['02', 'Scoping', 'Creating detailed SRS documents and UI wireframes.'],
                    ['03', 'Kickoff', 'Setting up environments and CI/CD pipelines.'],
                    ['04', 'Sprints', '2-week agile sprints with demonstrable builds.'],
                    ['05', 'QA/UAT', 'Rigorous testing against edge cases and load.'],
                    ['06', 'Launch', 'Smooth deployment and handover protocol.']
                ];
                foreach($steps as $index => $step) {
                    echo '
                    <div class="flex md:flex-col items-center gap-6 md:gap-4 relative group bg-white md:bg-transparent p-4 md:p-0 rounded-xl md:rounded-none shadow-sm md:shadow-none border border-gray-100 md:border-none">
                        <div class="w-14 h-14 rounded-full bg-white border-4 border-slate-100 flex items-center justify-center text-utsl-primary font-bold font-mono text-sm shadow-md group-hover:border-utsl-primary transition-colors shrink-0 z-10">
                            '.$step[0].'
                        </div>
                        <div class="text-left md:text-center mt-0 md:mt-2 bg-white px-2">
                            <h4 class="font-bold text-sm text-utsl-dark mb-1">'.$step[1].'</h4>
                            <p class="text-[10px] text-slate-500 leading-tight hidden md:block">'.$step[2].'</p>
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-20 max-w-4xl mx-auto">
            <div class="bg-slate-50 p-6 rounded-2xl">
                <h4 class="font-bold text-utsl-dark mb-3"><i class="ph ph-chat-centered-text text-utsl-primary"></i> Communication Standards</h4>
                <ul class="text-sm text-slate-600 space-y-2">
                    <li>&bull; Dedicated Slack/Teams channel</li>
                    <li>&bull; Weekly demo calls (recorded)</li>
                    <li>&bull; Real-time Jira/Linear board access</li>
                    <li>&bull; US-based Account Management</li>
                </ul>
            </div>
            <div class="bg-slate-50 p-6 rounded-2xl">
                <h4 class="font-bold text-utsl-dark mb-3"><i class="ph ph-handshake text-utsl-primary"></i> Our Commitments</h4>
                <ul class="text-sm text-slate-600 space-y-2">
                    <li>&bull; Strict NDAs signed before discovery</li>
                    <li>&bull; Code passes standard security audits</li>
                    <li>&bull; You own 100% of the IP upon payment</li>
                    <li>&bull; No vendor lock-in</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 11. FAQS -->
<section class="py-24 bg-utsl-bg border-b border-gray-100">
    <div class="max-w-3xl mx-auto px-4 md:px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-utsl-dark mb-4">Frequently Asked Questions</h2>
        </div>

        <div class="space-y-4">
            <?php
            $faqs = [
                "Who owns the Intellectual Property (IP)?" => "You do. Once invoices are cleared, you own 100% of the source code, designs, and related intellectual property. We do not hold your project hostage.",
                "Do you sign NDAs?" => "Yes. We are happy to sign strict Non-Disclosure Agreements before we even start discussing your proprietary ideas or looking at your code.",
                "What is your minimum engagement size?" => "Our minimum engagement for new projects is typically $10,000 USD (or equivalent INR). This ensures we can dedicate the proper resources, architecture planning, and QA to deliver a successful outcome.",
                "Where is your team located?" => "Our leadership and architecture team is based in the US, providing strategic oversight. Our core engineering pods operate out of India, allowing us to provide high-tier talent at competitive rates with 24/5 development cycles.",
                "How do you handle security and compliance?" => "We build systems with FERPA, GDPR, and COPPA compliance in mind. We implement standard encryption (at rest and in transit), RBAC, and can arrange for 3rd party penetration testing.",
                "Do you provide post-launch support?" => "Absolutely. We offer tailored SLA-based maintenance contracts to handle bug fixes, server updates, and infrastructure scaling post-launch.",
                "Can you take over an existing messy codebase?" => "Yes. Our CTO-as-a-Service model often starts with a Tech Audit to evaluate legacy systems. If feasible, we will refactor and modernize; if not, we will recommend a secure migration path.",
                "What is the typical timeline for an LMS?" => "A standard custom LMS MVP takes between 10 to 14 weeks from kickoff to launch. More complex platforms with heavy AI integration or bespoke mobile apps take 4-6 months."
            ];
            
            foreach($faqs as $q => $a) {
                echo '
                <div class="border border-gray-200 rounded-2xl overflow-hidden bg-white shadow-sm">
                    <button class="accordion-btn w-full px-6 py-5 flex items-center justify-between text-left focus:outline-none">
                        <span class="font-bold text-utsl-dark">'.$q.'</span>
                        <i class="ph ph-caret-down text-gray-400 text-xl transition-transform duration-300"></i>
                    </button>
                    <div class="px-6 pb-5 text-sm text-slate-600 hidden border-t border-gray-100 pt-4">
                        '.$a.'
                    </div>
                </div>
                ';
            }
            ?>
        </div>
        
        <script>
            document.querySelectorAll('.accordion-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    const content = btn.nextElementSibling;
                    const icon = btn.querySelector('i');
                    content.classList.toggle('hidden');
                    icon.classList.toggle('rotate-180');
                });
            });
        </script>
    </div>
</section>

<!-- 12. CTA PAGE -->
<section class="py-24 bg-slate-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-2xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-5xl font-extrabold text-utsl-dark mb-4">Let's Build Something Great</h2>
                <p class="text-lg text-slate-600">Choose how you'd like to engage with our team.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <!-- Option 1 -->
                <div class="border border-gray-200 rounded-2xl p-6 text-center hover:border-utsl-primary hover:shadow-lg transition-all flex flex-col">
                    <div class="w-12 h-12 bg-indigo-50 text-utsl-primary rounded-full flex items-center justify-center mx-auto mb-4"><i class="ph ph-calendar-plus text-xl"></i></div>
                    <h4 class="font-bold text-lg mb-2">Book a Discovery Call</h4>
                    <p class="text-sm text-slate-500 mb-6 flex-grow">Free 30-minute consultation to discuss your vision and our capabilities.</p>
                    <a href="https://calendly.com/" target="_blank" class="block w-full py-3 bg-utsl-primary text-white font-bold rounded-xl hover:bg-utsl-primaryHover transition-colors">Schedule Now</a>
                </div>
                
                <!-- Option 2 -->
                <div class="border border-gray-200 rounded-2xl p-6 text-center hover:border-utsl-primary hover:shadow-lg transition-all flex flex-col relative overflow-hidden">
                    <div class="absolute top-0 right-0 bg-utsl-accent text-white text-[10px] font-bold px-3 py-1 rounded-bl-lg">RECOMMENDED</div>
                    <div class="w-12 h-12 bg-indigo-50 text-utsl-primary rounded-full flex items-center justify-center mx-auto mb-4"><i class="ph ph-file-text text-xl"></i></div>
                    <h4 class="font-bold text-lg mb-2">Request an Estimate</h4>
                    <p class="text-sm text-slate-500 mb-6 flex-grow">Send us your RFP or requirements doc for a high-level technical proposal.</p>
                    <a href="contact-us.php" class="block w-full py-3 bg-utsl-dark text-white font-bold rounded-xl hover:bg-black transition-colors">Submit RFP</a>
                </div>
                
                <!-- Option 3 -->
                <div class="border border-gray-200 rounded-2xl p-6 text-center hover:border-utsl-primary hover:shadow-lg transition-all flex flex-col">
                    <div class="w-12 h-12 bg-indigo-50 text-utsl-primary rounded-full flex items-center justify-center mx-auto mb-4"><i class="ph ph-envelope-simple text-xl"></i></div>
                    <h4 class="font-bold text-lg mb-2">Email Us Direct</h4>
                    <p class="text-sm text-slate-500 mb-6 flex-grow">Have a quick question? Drop us an email and we'll reply within 24 hours.</p>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=support@utsl.com" target="_blank" class="block w-full py-3 bg-slate-100 text-slate-700 font-bold rounded-xl hover:bg-slate-200 transition-colors">support@utsl.com</a>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 text-sm text-slate-500 pt-8 border-t border-gray-100">
                <div class="flex items-center gap-2"><i class="ph-fill ph-map-pin text-utsl-primary"></i> US Architecture & Strategy</div>
                <div class="flex items-center gap-2"><i class="ph-fill ph-map-pin text-utsl-secondary"></i> India Engineering Hub</div>
                <div class="flex items-center gap-2"><i class="ph-fill ph-clock text-utsl-accent"></i> Available across EST & IST Timezones</div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
