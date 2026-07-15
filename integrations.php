<?php 
// Ensure assets directory exists and copy generated images
$img_dir = __DIR__ . '/assets/images';
if (!is_dir($img_dir)) {
    @mkdir($img_dir, 0777, true);
}
$src_hero = 'C:/Users/Lenovo/.gemini/antigravity-ide/brain/6c213149-7d46-478a-9961-1abef8cf7c72/hero_integrations_1782571173311.png';
$dest_hero = $img_dir . '/hero_integrations.png';
if (file_exists($src_hero) && !file_exists($dest_hero)) {
    @copy($src_hero, $dest_hero);
}
$src_api = 'C:/Users/Lenovo/.gemini/antigravity-ide/brain/6c213149-7d46-478a-9961-1abef8cf7c72/api_dashboard_1782571185492.png';
$dest_api = $img_dir . '/api_dashboard.png';
if (file_exists($src_api) && !file_exists($dest_api)) {
    @copy($src_api, $dest_api);
}

$page_title = "Custom EdTech System Integrations | UTSL";
$page_description = "We connect fragmented EdTech tools into a single, seamless data ecosystem. Expert LMS, SIS, CRM, and payment gateway integration services.";
include 'header.php'; 
?>

<!-- 1. HERO SECTION -->
<section class="relative pt-12 pb-20 lg:pt-16 lg:pb-28 overflow-hidden bg-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">
            <!-- Left: Content -->
            <div class="flex flex-col gap-6 relative z-10">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-utsl-primary/20 border border-utsl-primary/30 text-utsl-primary font-bold w-max text-sm">
                    <div class="w-2 h-2 rounded-full bg-utsl-primary animate-pulse"></div>
                    Enterprise Middleware Architecture
                </div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight tracking-tight">
                    Custom EdTech System Integrations
                </h1>
                <p class="text-base md:text-lg text-slate-300 leading-relaxed max-w-2xl">
                    We connect fragmented EdTech tools into a single, seamless data ecosystem. From syncing your LMS with your SIS to automating CRM pipelines, we eliminate manual data entry so you can focus on education.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mt-4">
                    <a href="https://calendly.com/" target="_blank" class="px-8 py-4 text-base font-bold text-white bg-utsl-primary hover:bg-utsl-primaryHover rounded-xl shadow-[0_10px_40px_-10px_rgba(67,56,202,0.6)] transition-all hover:-translate-y-1 text-center">
                        Schedule Integration Audit
                    </a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=support@utsltech.com" target="_blank" class="px-8 py-4 text-base font-bold text-white bg-white/10 border border-white/20 hover:bg-white/20 rounded-xl transition-all hover:-translate-y-1 text-center">
                        Email support@utsltech.com
                    </a>
                </div>
            </div>
            
            <!-- Right: Creative AI Image -->
            <div class="relative flex justify-center items-center w-full">
                <!-- Decorative background blob -->
                <div class="absolute inset-0 bg-gradient-to-tr from-utsl-primary/40 to-indigo-500/20 rounded-full blur-3xl opacity-50 transform scale-75"></div>
                
                <img src="assets/images/hero_integrations.png" alt="Futuristic 3D data streams connecting servers and databases" class="relative z-10 w-full max-w-lg rounded-2xl shadow-2xl border border-white/10 hover:scale-105 transition-transform duration-500 object-cover" onerror="this.src='https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&q=80&w=800'">
            </div>
        </div>
    </div>
</section>

<!-- 2. WHAT IS THIS SERVICE -->
<section class="py-24 bg-white relative">
    <div class="max-w-4xl mx-auto px-4 md:px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">What Is Custom System Integration?</h2>
        <p class="text-lg text-slate-600 leading-relaxed mb-6">
            Think of an ecosystem where your Learning Management System (like Canvas or Moodle), your Student Information System (SIS), and your payment gateways don't talk to each other. When a student registers, your team has to manually enter their data across three different platforms. 
        </p>
        <p class="text-lg text-slate-600 leading-relaxed font-semibold">
            Our custom integration services write the secure "bridge" code that makes these platforms communicate instantly and automatically. When an event happens in one system, it reflects everywhere immediately. No more CSV uploads, no more missing data, and no more scaling bottlenecks.
        </p>
    </div>
</section>

<!-- 3. FULL FEATURE LIST -->
<section class="py-24 bg-slate-50 border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Seamless Connections</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">Everything you need to automate workflows and unify your data.</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">
            <!-- Left: Features -->
            <div class="space-y-12 flex flex-col justify-center">
                <div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-3"><i class="ph-fill ph-arrows-left-right text-utsl-primary"></i> Real-time Data Syncing</h3>
                    <ul class="space-y-3 text-sm text-slate-600">
                        <li class="flex items-start gap-2"><i class="ph-fill ph-check-circle text-green-500 mt-1"></i> Data stays perfectly updated across all your apps automatically</li>
                        <li class="flex items-start gap-2"><i class="ph-fill ph-check-circle text-green-500 mt-1"></i> Automatically create or remove user accounts when they enroll or leave</li>
                        <li class="flex items-start gap-2"><i class="ph-fill ph-check-circle text-green-500 mt-1"></i> Smart systems prevent duplicate records and messy data</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-3"><i class="ph-fill ph-code text-utsl-primary"></i> Custom Connections</h3>
                    <ul class="space-y-3 text-sm text-slate-600">
                        <li class="flex items-start gap-2"><i class="ph-fill ph-check-circle text-green-500 mt-1"></i> We build custom bridges for tools that don't normally talk to each other</li>
                        <li class="flex items-start gap-2"><i class="ph-fill ph-check-circle text-green-500 mt-1"></i> Traffic management ensures your systems never crash from overload</li>
                        <li class="flex items-start gap-2"><i class="ph-fill ph-check-circle text-green-500 mt-1"></i> We can even connect older, legacy software to modern platforms</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-3"><i class="ph-fill ph-shield-check text-utsl-primary"></i> Enterprise Security</h3>
                    <ul class="space-y-3 text-sm text-slate-600">
                        <li class="flex items-start gap-2"><i class="ph-fill ph-check-circle text-green-500 mt-1"></i> One-click secure login for your staff and students (Single Sign-On)</li>
                        <li class="flex items-start gap-2"><i class="ph-fill ph-check-circle text-green-500 mt-1"></i> Bank-level encryption protects all student and financial data</li>
                        <li class="flex items-start gap-2"><i class="ph-fill ph-check-circle text-green-500 mt-1"></i> Seamless connection with your existing Google Workspace or Microsoft accounts</li>
                    </ul>
                </div>
            </div>
            
            <!-- Right: Image -->
            <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-700 group h-full min-h-[400px]">
                <img src="assets/images/api_dashboard.png" alt="API Dashboard Concept" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            </div>
        </div>
    </div>
</section>

<!-- 4. HOW WE DELIVER -->
<section class="py-24 bg-slate-900 text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4">How We Deliver</h2>
            <p class="text-lg text-slate-400 max-w-2xl mx-auto">A rigorous, fail-safe engineering process to protect your data integrity.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="relative flex flex-col gap-4">
                <div class="text-7xl font-black text-slate-700 absolute -top-8 -left-6 z-0 opacity-50">1</div>
                <h3 class="text-xl font-bold text-white relative z-10 pt-4">Technical Audit</h3>
                <p class="text-slate-400 relative z-10 text-sm">We review your existing software stack, API documentation, and data structures to identify the exact touchpoints.</p>
            </div>
            <div class="relative flex flex-col gap-4">
                <div class="text-7xl font-black text-slate-700 absolute -top-8 -left-6 z-0 opacity-50">2</div>
                <h3 class="text-xl font-bold text-white relative z-10 pt-4">Architecture Mapping</h3>
                <p class="text-slate-400 relative z-10 text-sm">We design the middleware architecture, defining data schemas, webhook triggers, and conflict resolution rules.</p>
            </div>
            <div class="relative flex flex-col gap-4">
                <div class="text-7xl font-black text-slate-700 absolute -top-8 -left-6 z-0 opacity-50">3</div>
                <h3 class="text-xl font-bold text-white relative z-10 pt-4">Secure Engineering</h3>
                <p class="text-slate-400 relative z-10 text-sm">Our engineers write custom, scalable code to facilitate the integration, complete with retry-logic for downtime.</p>
            </div>
            <div class="relative flex flex-col gap-4">
                <div class="text-7xl font-black text-slate-700 absolute -top-8 -left-6 z-0 opacity-50">4</div>
                <h3 class="text-xl font-bold text-white relative z-10 pt-4">Stress Testing</h3>
                <p class="text-slate-400 relative z-10 text-sm">We simulate heavy traffic loads and edge cases on a staging environment before safely deploying to your live network.</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. COMPARISON TABLE -->
<section class="py-24 bg-white relative">
    <div class="max-w-5xl mx-auto px-4 md:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-4">UTSL Custom Middleware vs. Generic iPaaS</h2>
            <p class="text-slate-600">Why off-the-shelf tools like Zapier eventually break at an enterprise level.</p>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr>
                        <th class="p-4 border-b-2 border-slate-200 text-slate-500 font-bold w-1/3">Feature</th>
                        <th class="p-4 border-b-2 border-slate-200 text-slate-900 font-black text-lg bg-indigo-50/50 rounded-t-xl">UTSL Custom Middleware</th>
                        <th class="p-4 border-b-2 border-slate-200 text-slate-500 font-bold">Zapier / Generic iPaaS</th>
                    </tr>
                </thead>
                <tbody class="text-slate-700">
                    <tr>
                        <td class="p-4 border-b border-slate-100 font-semibold">Cost at Scale</td>
                        <td class="p-4 border-b border-slate-100 bg-indigo-50/50"><i class="ph-fill ph-check-circle text-utsl-primary mr-2"></i>Fixed one-time cost</td>
                        <td class="p-4 border-b border-slate-100"><i class="ph ph-x-circle text-red-400 mr-2"></i>Expensive monthly task limits</td>
                    </tr>
                    <tr>
                        <td class="p-4 border-b border-slate-100 font-semibold">Data Control & Security</td>
                        <td class="p-4 border-b border-slate-100 bg-indigo-50/50"><i class="ph-fill ph-check-circle text-utsl-primary mr-2"></i>Hosted on your own secure servers</td>
                        <td class="p-4 border-b border-slate-100"><i class="ph ph-x-circle text-red-400 mr-2"></i>Data passes through 3rd party</td>
                    </tr>
                    <tr>
                        <td class="p-4 border-b border-slate-100 font-semibold">Complex Logic</td>
                        <td class="p-4 border-b border-slate-100 bg-indigo-50/50"><i class="ph-fill ph-check-circle text-utsl-primary mr-2"></i>Unlimited custom logic & rules</td>
                        <td class="p-4 border-b border-slate-100"><i class="ph ph-x-circle text-red-400 mr-2"></i>Limited to basic "If This Then That"</td>
                    </tr>
                    <tr>
                        <td class="p-4 border-b border-slate-100 font-semibold">Supported Systems</td>
                        <td class="p-4 border-b border-slate-100 bg-indigo-50/50 rounded-b-xl"><i class="ph-fill ph-check-circle text-utsl-primary mr-2"></i>Any system with an API or Database</td>
                        <td class="p-4 border-b border-slate-100"><i class="ph ph-x-circle text-red-400 mr-2"></i>Only supported "App Directory" tools</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- 6. WHO THIS IS FOR -->
<section class="py-24 bg-slate-50 border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Built for Your EdTech Ecosystem</h2>
            <p class="text-slate-600">Tailored integration solutions for different scales of operation.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm hover:shadow-lg transition-shadow">
                <i class="ph-fill ph-rocket-launch text-4xl text-utsl-primary mb-6"></i>
                <h3 class="text-xl font-bold text-slate-900 mb-4">EdTech Startups</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Connect your new app directly to popular CRMs like HubSpot or Salesforce so your sales team gets real-time product usage data instantly.</p>
            </div>
            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm hover:shadow-lg transition-shadow">
                <i class="ph-fill ph-buildings text-4xl text-utsl-primary mb-6"></i>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Corporate Training</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Sync your custom training portal with HR platforms like Workday, automating employee onboarding and compliance tracking.</p>
            </div>
            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm hover:shadow-lg transition-shadow">
                <i class="ph-fill ph-graduation-cap text-4xl text-utsl-primary mb-6"></i>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Universities</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Bridge the gap between legacy Student Information Systems (SIS) and modern learning tools, ensuring grades and enrollment data are always accurate.</p>
            </div>
        </div>
    </div>
</section>



<!-- 8. FAQS -->
<section class="py-24 bg-white relative border-b border-gray-100">
    <div class="max-w-4xl mx-auto px-4 md:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-slate-600">Common questions about our system integration services.</p>
        </div>
        
        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden">
                <button class="w-full p-6 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
                    <h4 class="text-lg font-bold text-slate-900">Do you support legacy systems without modern APIs?</h4>
                    <i class="ph-bold ph-caret-down text-slate-400 transition-transform duration-300"></i>
                </button>
                <div class="faq-content hidden px-6 pb-6">
                    <p class="text-slate-600 text-sm leading-relaxed">Yes. If a system doesn't have a RESTful API, we can build custom scraping scripts, connect directly to underlying databases, or work with SOAP/XML protocols to extract and sync the data.</p>
                </div>
            </div>
            <!-- FAQ 2 -->
            <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden">
                <button class="w-full p-6 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
                    <h4 class="text-lg font-bold text-slate-900">How secure is the data transfer?</h4>
                    <i class="ph-bold ph-caret-down text-slate-400 transition-transform duration-300"></i>
                </button>
                <div class="faq-content hidden px-6 pb-6">
                    <p class="text-slate-600 text-sm leading-relaxed">Extremely secure. All data in transit is encrypted via TLS 1.3, and data at rest (if temporarily stored in our queue) is AES-256 encrypted. We do not store your students' PII beyond the instantaneous transfer period.</p>
                </div>
            </div>
            <!-- FAQ 3 -->
            <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden">
                <button class="w-full p-6 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
                    <h4 class="text-lg font-bold text-slate-900">Can you handle high-volume event syncing?</h4>
                    <i class="ph-bold ph-caret-down text-slate-400 transition-transform duration-300"></i>
                </button>
                <div class="faq-content hidden px-6 pb-6">
                    <p class="text-slate-600 text-sm leading-relaxed">Absolutely. Our enterprise integrations are built on highly scalable cloud infrastructure using asynchronous queues, ensuring your systems don't crash under heavy load during enrollment periods.</p>
                </div>
            </div>
            <!-- FAQ 4 -->
            <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden">
                <button class="w-full p-6 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
                    <h4 class="text-lg font-bold text-slate-900">What happens if a connected API goes down?</h4>
                    <i class="ph-bold ph-caret-down text-slate-400 transition-transform duration-300"></i>
                </button>
                <div class="faq-content hidden px-6 pb-6">
                    <p class="text-slate-600 text-sm leading-relaxed">We implement intelligent retry-logic and dead-letter queues. If an endpoint fails, the payload is safely stored and retried on an exponential backoff schedule until the API is restored, guaranteeing zero data loss.</p>
                </div>
            </div>
            <!-- FAQ 5 -->
            <div class="bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden">
                <button class="w-full p-6 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
                    <h4 class="text-lg font-bold text-slate-900">How long does an integration project take?</h4>
                    <i class="ph-bold ph-caret-down text-slate-400 transition-transform duration-300"></i>
                </button>
                <div class="faq-content hidden px-6 pb-6">
                    <p class="text-slate-600 text-sm leading-relaxed">Simple point-to-point syncing can take 2-4 weeks. Complex enterprise architectures with multiple bi-directional data flows typically span 2-3 months.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleFaq(btn) {
        const content = btn.nextElementSibling;
        const icon = btn.querySelector('i');
        
        // Toggle this FAQ
        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            icon.classList.add('rotate-180');
        } else {
            content.classList.add('hidden');
            icon.classList.remove('rotate-180');
        }
    }
</script>

<!-- 9. TESTIMONIALS -->
<section class="py-24 bg-slate-50 relative">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Trusted by Technical Leaders</h2>
            <p class="text-slate-600">See what our clients say about our robust engineering.</p>
        </div>
        
        <style>
            @keyframes marquee {
                0% { transform: translateX(0); }
                100% { transform: translateX(-50%); }
            }
            .animate-marquee {
                display: flex;
                width: 200%;
                animation: marquee 30s linear infinite;
            }
            .animate-marquee:hover {
                animation-play-state: paused;
            }
            .testimonial-card {
                width: 400px; /* Fixed width for each card */
                flex-shrink: 0;
            }
        </style>
        
        <div class="overflow-hidden relative w-full pb-8 pt-4">
            <!-- Fade edges -->
            <div class="absolute top-0 left-0 w-24 h-full bg-gradient-to-r from-slate-50 to-transparent z-10"></div>
            <div class="absolute top-0 right-0 w-24 h-full bg-gradient-to-l from-slate-50 to-transparent z-10"></div>
            
            <div class="animate-marquee gap-6">
                <!-- Group 1 -->
                <div class="testimonial-card bg-white p-8 rounded-3xl shadow-sm border border-slate-200 relative">
                    <i class="ph-fill ph-quotes text-5xl text-indigo-100 absolute top-6 right-6"></i>
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                    </div>
                    <p class="text-slate-700 italic mb-6">"UTSL built a bulletproof middleware layer that finally connected our proprietary LMS to Salesforce. It eliminated hours of manual work every week."</p>
                    <div class="flex items-center gap-4 mt-auto">
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center text-utsl-primary font-bold">AM</div>
                        <div>
                            <div class="font-bold text-slate-900">Amit M.</div>
                            <div class="text-xs text-slate-500 uppercase tracking-wider">CTO, EdTech Scale-up</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card bg-white p-8 rounded-3xl shadow-sm border border-slate-200 relative">
                    <i class="ph-fill ph-quotes text-5xl text-indigo-100 absolute top-6 right-6"></i>
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                    </div>
                    <p class="text-slate-700 italic mb-6">"We were struggling with Zapier limits and failed zaps. UTSL migrated us to a custom API integration that is infinitely more reliable."</p>
                    <div class="flex items-center gap-4 mt-auto">
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center text-utsl-primary font-bold">SJ</div>
                        <div>
                            <div class="font-bold text-slate-900">Sneha J.</div>
                            <div class="text-xs text-slate-500 uppercase tracking-wider">VP Engineering</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card bg-white p-8 rounded-3xl shadow-sm border border-slate-200 relative">
                    <i class="ph-fill ph-quotes text-5xl text-indigo-100 absolute top-6 right-6"></i>
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                    </div>
                    <p class="text-slate-700 italic mb-6">"Their team perfectly synced our Moodle database with Hubspot. Now our sales team can instantly see when a student completes a course."</p>
                    <div class="flex items-center gap-4 mt-auto">
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center text-utsl-primary font-bold">RM</div>
                        <div>
                            <div class="font-bold text-slate-900">Rohan M.</div>
                            <div class="text-xs text-slate-500 uppercase tracking-wider">Director of IT</div>
                        </div>
                    </div>
                </div>
                
                <!-- Group 2 (Duplicate for infinite scroll) -->
                <div class="testimonial-card bg-white p-8 rounded-3xl shadow-sm border border-slate-200 relative">
                    <i class="ph-fill ph-quotes text-5xl text-indigo-100 absolute top-6 right-6"></i>
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                    </div>
                    <p class="text-slate-700 italic mb-6">"UTSL built a bulletproof middleware layer that finally connected our proprietary LMS to Salesforce. It eliminated hours of manual work every week."</p>
                    <div class="flex items-center gap-4 mt-auto">
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center text-utsl-primary font-bold">AM</div>
                        <div>
                            <div class="font-bold text-slate-900">Amit M.</div>
                            <div class="text-xs text-slate-500 uppercase tracking-wider">CTO, EdTech Scale-up</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card bg-white p-8 rounded-3xl shadow-sm border border-slate-200 relative">
                    <i class="ph-fill ph-quotes text-5xl text-indigo-100 absolute top-6 right-6"></i>
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                    </div>
                    <p class="text-slate-700 italic mb-6">"We were struggling with Zapier limits and failed zaps. UTSL migrated us to a custom API integration that is infinitely more reliable."</p>
                    <div class="flex items-center gap-4 mt-auto">
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center text-utsl-primary font-bold">SJ</div>
                        <div>
                            <div class="font-bold text-slate-900">Sneha J.</div>
                            <div class="text-xs text-slate-500 uppercase tracking-wider">VP Engineering</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card bg-white p-8 rounded-3xl shadow-sm border border-slate-200 relative">
                    <i class="ph-fill ph-quotes text-5xl text-indigo-100 absolute top-6 right-6"></i>
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                    </div>
                    <p class="text-slate-700 italic mb-6">"Their team perfectly synced our Moodle database with Hubspot. Now our sales team can instantly see when a student completes a course."</p>
                    <div class="flex items-center gap-4 mt-auto">
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center text-utsl-primary font-bold">RM</div>
                        <div>
                            <div class="font-bold text-slate-900">Rohan M.</div>
                            <div class="text-xs text-slate-500 uppercase tracking-wider">Director of IT</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 11. CTA PAGE -->
<section class="py-16 bg-slate-50 relative overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 md:px-6 relative z-10">
        <div class="bg-white rounded-2xl p-8 md:p-10 shadow-xl border border-slate-100 text-center">
            <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-4">Ready to Unify Your Data?</h2>
            <p class="text-base text-slate-600 mb-8 max-w-xl mx-auto">Stop wasting time on manual data entry. Let our engineers build the automated bridges your platform needs to scale.</p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="https://calendly.com/" target="_blank" class="px-6 py-3 bg-utsl-primary hover:bg-utsl-primaryHover text-white font-bold rounded-xl transition-all shadow-md hover:-translate-y-1 flex items-center justify-center gap-2">
                    <i class="ph-fill ph-calendar-plus text-lg"></i> Schedule Call
                </a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=support@utsltech.com" target="_blank" class="px-6 py-3 bg-slate-900 hover:bg-black text-white font-bold rounded-xl transition-all shadow-md hover:-translate-y-1 flex items-center justify-center gap-2">
                    <i class="ph-fill ph-envelope-simple text-lg"></i> Email Support
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
