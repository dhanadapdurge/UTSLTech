<?php 
$page_title = "Custom EdTech Mobile App Development Company | UTSL";
$page_description = "We build native and cross-platform mobile learning apps for EdTech startups, universities, and corporate training. Offline sync, micro-learning, and deep LMS integrations.";
$page_keywords = "edtech mobile app development, custom elearning apps, native learning apps, react native education app, lms mobile app developer";

include 'db.php'; 
include 'header.php'; 
?>

<!-- 1. HERO SECTION -->
<section class="relative pt-12 pb-20 lg:pt-16 lg:pb-28 overflow-hidden bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">
            <!-- Left: Content -->
            <div class="flex flex-col gap-6 relative z-10">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-indigo-50 border border-indigo-100 text-utsl-primary text-sm font-bold w-max">
                    <div class="w-2 h-2 rounded-full bg-utsl-primary animate-pulse"></div>
                    Mobile Architectures
                </div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight tracking-tight">
                    Custom EdTech Mobile App Development Company
                </h1>
                <p class="text-base md:text-lg text-slate-600 leading-relaxed max-w-2xl">
                    We build native and cross-platform mobile learning apps designed for how students actually study today. From offline syncing to push-notification-driven micro-learning, we put your entire curriculum right in their pockets.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mt-4">
                    <a href="https://calendly.com/" target="_blank" class="px-8 py-4 text-base font-bold text-white bg-utsl-primary hover:bg-utsl-primaryHover rounded-xl shadow-[0_10px_40px_-10px_rgba(67,56,202,0.6)] transition-all hover:-translate-y-1 text-center">
                        Schedule Consultation
                    </a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=support@utsltech.com" target="_blank" class="px-8 py-4 text-base font-bold text-slate-700 bg-white border border-gray-200 hover:border-gray-300 rounded-xl transition-all hover:-translate-y-1 text-center">
                        Email support@utsltech.com
                    </a>
                </div>
            </div>
            
            <!-- Right: Responsive Mobile Prototype -->
            <div class="relative flex justify-center items-center h-[450px] sm:h-[500px] lg:h-[650px] w-full">
                <!-- Decorative background blob -->
                <div class="absolute inset-0 bg-gradient-to-tr from-indigo-100 to-sky-50 rounded-full blur-3xl opacity-50 transform scale-75"></div>
                
                <!-- Phone Chassis -->
                <div class="relative transform scale-[0.65] sm:scale-80 md:scale-90 lg:scale-100 origin-center transition-transform duration-300">
                    <div class="relative mx-auto border-gray-900 bg-gray-900 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-2xl overflow-hidden">
                        <div class="w-[148px] h-[18px] bg-gray-900 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute z-20"></div>
                        <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white relative flex flex-col">
                            <!-- Mobile App Interface -->
                            <div class="bg-utsl-primary text-white pt-12 pb-6 px-6 shadow-sm z-10 relative">
                                <div class="flex justify-between items-center mb-6">
                                    <i class="ph-fill ph-list text-2xl cursor-pointer"></i>
                                    <div class="font-bold tracking-wide text-sm uppercase">My Courses</div>
                                    <div class="w-8 h-8 bg-white/20 rounded-full border border-white/30 flex items-center justify-center font-bold text-xs">U</div>
                                </div>
                                <div class="text-sm opacity-80 mb-1 font-medium">Daily Streak</div>
                                <div class="text-3xl font-black flex items-center gap-2 tracking-tight">
                                    <i class="ph-fill ph-fire text-orange-400"></i> 14 Days
                                </div>
                            </div>
                            <!-- App Content -->
                            <div class="flex-grow bg-slate-50 p-4 space-y-4 overflow-y-auto">
                                <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-100 hover:border-indigo-100 transition-colors cursor-pointer">
                                    <div class="w-10 h-10 bg-indigo-100 rounded-xl mb-3 flex items-center justify-center text-indigo-600"><i class="ph-fill ph-atom text-xl"></i></div>
                                    <h4 class="font-bold text-sm text-slate-800">Advanced React Native</h4>
                                    <div class="w-full bg-slate-100 h-2 rounded-full mt-4 overflow-hidden">
                                        <div class="bg-utsl-primary h-2 rounded-full w-[65%]"></div>
                                    </div>
                                    <p class="text-xs text-slate-400 mt-2 font-medium">65% Completed</p>
                                </div>
                                <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-100 hover:border-sky-100 transition-colors cursor-pointer">
                                    <div class="w-10 h-10 bg-sky-100 rounded-xl mb-3 flex items-center justify-center text-sky-600"><i class="ph-fill ph-code text-xl"></i></div>
                                    <h4 class="font-bold text-sm text-slate-800">Mobile System Architecture</h4>
                                    <div class="w-full bg-slate-100 h-2 rounded-full mt-4 overflow-hidden">
                                        <div class="bg-utsl-secondary h-2 rounded-full w-[30%]"></div>
                                    </div>
                                    <p class="text-xs text-slate-400 mt-2 font-medium">30% Completed</p>
                                </div>
                            </div>
                            <!-- App Nav -->
                            <div class="h-16 bg-white border-t border-slate-100 flex items-center justify-around px-4">
                                <i class="ph-fill ph-house text-2xl text-utsl-primary cursor-pointer hover:scale-110 transition-transform"></i>
                                <i class="ph ph-compass text-2xl text-slate-300 cursor-pointer hover:text-slate-500 transition-colors"></i>
                                <i class="ph ph-bell text-2xl text-slate-300 relative cursor-pointer hover:text-slate-500 transition-colors"><span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full border border-white"></span></i>
                                <i class="ph ph-user text-2xl text-slate-300 cursor-pointer hover:text-slate-500 transition-colors"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. WHAT IS THIS SERVICE -->
<section class="py-24 bg-slate-50 relative">
    <div class="max-w-4xl mx-auto px-4 md:px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">What Is Custom Mobile App Development?</h2>
        <p class="text-lg md:text-xl text-slate-600 leading-relaxed">
            Most educational platforms force students to log in via a clunky mobile web browser. A custom mobile app changes everything. It means giving your students a native, lightning-fast application installed directly on their iPhone or Android device. It means your curriculum is always just one tap away, accessible offline, and able to proactively re-engage students via push notifications to dramatically improve completion rates.
        </p>
    </div>
</section>

<!-- 3. FULL FEATURE LIST -->
<section class="py-24 bg-white relative border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Core Mobile Capabilities</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">Everything you need to turn your curriculum into a pocket-sized powerhouse.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-all">
                <div class="w-14 h-14 bg-indigo-50 text-utsl-primary rounded-2xl flex items-center justify-center text-2xl mb-6"><i class="ph-fill ph-wifi-slash"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Offline Synchronization</h3>
                <ul class="space-y-3 text-slate-600">
                    <li class="flex gap-2"><i class="ph-bold ph-check text-green-500 mt-1"></i> Downloadable video content</li>
                    <li class="flex gap-2"><i class="ph-bold ph-check text-green-500 mt-1"></i> Local storage encryption</li>
                    <li class="flex gap-2"><i class="ph-bold ph-check text-green-500 mt-1"></i> Background progress syncing</li>
                    <li class="flex gap-2"><i class="ph-bold ph-check text-green-500 mt-1"></i> Low-bandwidth optimization</li>
                </ul>
            </div>
            
            <!-- Feature 2 -->
            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-all">
                <div class="w-14 h-14 bg-sky-50 text-utsl-secondary rounded-2xl flex items-center justify-center text-2xl mb-6"><i class="ph-fill ph-bell-ringing"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Push Notifications</h3>
                <ul class="space-y-3 text-slate-600">
                    <li class="flex gap-2"><i class="ph-bold ph-check text-green-500 mt-1"></i> Personalized daily reminders</li>
                    <li class="flex gap-2"><i class="ph-bold ph-check text-green-500 mt-1"></i> Streak retention alerts</li>
                    <li class="flex gap-2"><i class="ph-bold ph-check text-green-500 mt-1"></i> New curriculum updates</li>
                    <li class="flex gap-2"><i class="ph-bold ph-check text-green-500 mt-1"></i> Instructor direct messaging</li>
                </ul>
            </div>
            
            <!-- Feature 3 -->
            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] hover:-translate-y-2 transition-all">
                <div class="w-14 h-14 bg-emerald-50 text-utsl-accent rounded-2xl flex items-center justify-center text-2xl mb-6"><i class="ph-fill ph-trophy"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Gamification Engine</h3>
                <ul class="space-y-3 text-slate-600">
                    <li class="flex gap-2"><i class="ph-bold ph-check text-green-500 mt-1"></i> Leaderboards & achievements</li>
                    <li class="flex gap-2"><i class="ph-bold ph-check text-green-500 mt-1"></i> Animated progress bars</li>
                    <li class="flex gap-2"><i class="ph-bold ph-check text-green-500 mt-1"></i> Micro-learning quizzes</li>
                    <li class="flex gap-2"><i class="ph-bold ph-check text-green-500 mt-1"></i> Digital badging systems</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 4. HOW WE DELIVER -->
<section class="py-24 bg-slate-900 text-white relative">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4">How We Deliver</h2>
            <p class="text-lg text-slate-400 max-w-2xl mx-auto">From concept to App Store approval, our rigorous engineering process guarantees a flawless launch.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="relative flex flex-col gap-4">
                <div class="text-7xl font-black text-slate-700 absolute -top-8 -left-6 z-0 opacity-50">1</div>
                <h3 class="text-xl font-bold text-white relative z-10 pt-4">Discovery & Architecture</h3>
                <p class="text-slate-400 relative z-10 text-sm">We map your user journeys, select the optimal tech stack (React Native vs Swift/Kotlin), and design the API connections to your existing LMS.</p>
            </div>
            <div class="relative flex flex-col gap-4">
                <div class="text-7xl font-black text-slate-700 absolute -top-8 -left-6 z-0 opacity-50">2</div>
                <h3 class="text-xl font-bold text-white relative z-10 pt-4">UI/UX & Prototyping</h3>
                <p class="text-slate-400 relative z-10 text-sm">We create high-fidelity Figma prototypes designed specifically for thumb-reachability and modern mobile accessibility standards.</p>
            </div>
            <div class="relative flex flex-col gap-4">
                <div class="text-7xl font-black text-slate-700 absolute -top-8 -left-6 z-0 opacity-50">3</div>
                <h3 class="text-xl font-bold text-white relative z-10 pt-4">Engineering & QA</h3>
                <p class="text-slate-400 relative z-10 text-sm">Our engineers write clean, scalable code while rigorously testing across dozens of real iOS and Android devices for performance and battery drain.</p>
            </div>
            <div class="relative flex flex-col gap-4">
                <div class="text-7xl font-black text-slate-700 absolute -top-8 -left-6 z-0 opacity-50">4</div>
                <h3 class="text-xl font-bold text-white relative z-10 pt-4">App Store Launch</h3>
                <p class="text-slate-400 relative z-10 text-sm">We handle all Apple and Google compliance reviews, optimize your store listings, and manage the deployment of the live production build.</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. COMPARISON TABLE -->
<section class="py-24 bg-slate-50 text-slate-900 relative overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 md:px-6 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-4">UTSL Custom Apps vs. Generic App Builders</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">Why drag-and-drop mobile solutions fail at scale, and why custom code wins.</p>
        </div>
        
        <div class="overflow-x-auto bg-white rounded-2xl shadow-sm border border-gray-100">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr>
                        <th class="p-6 border-b border-gray-200 text-lg font-semibold text-slate-700 w-1/3">Capabilities</th>
                        <th class="p-6 border-b border-indigo-200 text-lg font-bold text-utsl-primary bg-indigo-50/50 w-1/3">UTSL Custom App</th>
                        <th class="p-6 border-b border-gray-200 text-lg font-semibold text-slate-500 w-1/3">Generic App Builders</th>
                    </tr>
                </thead>
                <tbody class="text-slate-700">
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="p-6 border-b border-gray-200 font-medium text-slate-900">Performance</td>
                        <td class="p-6 border-b border-indigo-100 bg-indigo-50/50"><div class="flex items-center gap-2"><i class="ph-fill ph-check-circle text-green-500 text-xl"></i> Native 60fps animations</div></td>
                        <td class="p-6 border-b border-gray-200 text-slate-500"><div class="flex items-center gap-2"><i class="ph-fill ph-warning text-yellow-500 text-xl"></i> Sluggish web-view wrappers</div></td>
                    </tr>
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="p-6 border-b border-gray-200 font-medium text-slate-900">Offline Capabilities</td>
                        <td class="p-6 border-b border-indigo-100 bg-indigo-50/50"><div class="flex items-center gap-2"><i class="ph-fill ph-check-circle text-green-500 text-xl"></i> Full encrypted local storage</div></td>
                        <td class="p-6 border-b border-gray-200 text-slate-500"><div class="flex items-center gap-2"><i class="ph-fill ph-x-circle text-red-500 text-xl"></i> Requires constant internet</div></td>
                    </tr>
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="p-6 border-b border-gray-200 font-medium text-slate-900 border-none">API Integration</td>
                        <td class="p-6 border-b border-indigo-100 bg-indigo-50/50 border-none"><div class="flex items-center gap-2"><i class="ph-fill ph-check-circle text-green-500 text-xl"></i> Connects to any custom LMS</div></td>
                        <td class="p-6 border-b border-gray-200 text-slate-500 border-none"><div class="flex items-center gap-2"><i class="ph-fill ph-x-circle text-red-500 text-xl"></i> Locked into closed ecosystems</div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- 6. WHO THIS IS FOR -->
<section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Who This Is For</h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">We architect apps tailored to your specific organizational scale.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:border-utsl-primary transition-colors">
                <i class="ph-fill ph-rocket text-4xl text-utsl-primary mb-6"></i>
                <h3 class="text-xl font-bold text-slate-900 mb-4">EdTech Startups</h3>
                <p class="text-slate-600 text-sm leading-relaxed">You need to hit the App Store fast. We use React Native to deploy your MVP across both iOS and Android simultaneously, saving your runway without sacrificing quality.</p>
            </div>
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:border-utsl-primary transition-colors">
                <i class="ph-fill ph-buildings text-4xl text-utsl-primary mb-6"></i>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Corporate Training</h3>
                <p class="text-slate-600 text-sm leading-relaxed">You need secure, compliant training apps for your workforce. We build highly secure mobile environments that integrate perfectly with your internal HR systems.</p>
            </div>
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:border-utsl-primary transition-colors">
                <i class="ph-fill ph-graduation-cap text-4xl text-utsl-primary mb-6"></i>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Universities</h3>
                <p class="text-slate-600 text-sm leading-relaxed">You need to modernize the campus experience. We build robust apps that handle thousands of concurrent students, tying into legacy SIS and Canvas/Blackboard instances.</p>
            </div>
        </div>
    </div>
</section>


<!-- 8. FAQS -->
<section class="py-24 bg-white relative border-b border-gray-100">
    <div class="max-w-4xl mx-auto px-4 md:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-slate-600">Common questions about our mobile app development process.</p>
        </div>
        
        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="border border-gray-200 rounded-2xl overflow-hidden bg-white">
                <button class="w-full px-6 py-4 text-left font-bold text-slate-900 flex justify-between items-center bg-slate-50 hover:bg-slate-100 transition-colors" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('.ph-caret-down').classList.toggle('rotate-180')">
                    Should I choose React Native or fully native development?
                    <i class="ph-bold ph-caret-down text-slate-400 transition-transform"></i>
                </button>
                <div class="hidden px-6 py-4 text-slate-600 text-sm leading-relaxed border-t border-gray-100">
                    For 90% of EdTech platforms, React Native is the best choice. It allows you to maintain one codebase for both iOS and Android, drastically reducing costs and time to market. We only recommend fully native (Swift/Kotlin) if your app requires heavy 3D rendering, complex AR/VR, or extremely deep hardware integrations.
                </div>
            </div>
            
            <!-- FAQ 2 -->
            <div class="border border-gray-200 rounded-2xl overflow-hidden bg-white">
                <button class="w-full px-6 py-4 text-left font-bold text-slate-900 flex justify-between items-center bg-slate-50 hover:bg-slate-100 transition-colors" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('.ph-caret-down').classList.toggle('rotate-180')">
                    Do you handle Apple App Store and Google Play approvals?
                    <i class="ph-bold ph-caret-down text-slate-400 transition-transform"></i>
                </button>
                <div class="hidden px-6 py-4 text-slate-600 text-sm leading-relaxed border-t border-gray-100">
                    Yes, absolutely. The App Store approval process can be notoriously difficult, especially for educational apps regarding in-app purchases and content licensing. We manage the entire submission, review, and deployment process for you to ensure a smooth launch.
                </div>
            </div>
            
            <!-- FAQ 3 -->
            <div class="border border-gray-200 rounded-2xl overflow-hidden bg-white">
                <button class="w-full px-6 py-4 text-left font-bold text-slate-900 flex justify-between items-center bg-slate-50 hover:bg-slate-100 transition-colors" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('.ph-caret-down').classList.toggle('rotate-180')">
                    Can the mobile app sync with our existing web LMS?
                    <i class="ph-bold ph-caret-down text-slate-400 transition-transform"></i>
                </button>
                <div class="hidden px-6 py-4 text-slate-600 text-sm leading-relaxed border-t border-gray-100">
                    Yes. We build robust API bridges that allow your new mobile app to talk directly to your existing LMS (whether it's custom, Canvas, Moodle, or Blackboard). Progress made on the phone instantly reflects on the web portal, and vice versa.
                </div>
            </div>
            
            <!-- FAQ 4 -->
            <div class="border border-gray-200 rounded-2xl overflow-hidden bg-white">
                <button class="w-full px-6 py-4 text-left font-bold text-slate-900 flex justify-between items-center bg-slate-50 hover:bg-slate-100 transition-colors" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('.ph-caret-down').classList.toggle('rotate-180')">
                    How does offline content synchronization work?
                    <i class="ph-bold ph-caret-down text-slate-400 transition-transform"></i>
                </button>
                <div class="hidden px-6 py-4 text-slate-600 text-sm leading-relaxed border-t border-gray-100">
                    We utilize encrypted local databases (like SQLite or WatermelonDB) to cache course content and videos to the device. When the user completes a quiz offline, the data is queued locally and silently pushed back to your main servers the moment the device regains an internet connection.
                </div>
            </div>
            
            <!-- FAQ 5 -->
            <div class="border border-gray-200 rounded-2xl overflow-hidden bg-white">
                <button class="w-full px-6 py-4 text-left font-bold text-slate-900 flex justify-between items-center bg-slate-50 hover:bg-slate-100 transition-colors" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('.ph-caret-down').classList.toggle('rotate-180')">
                    How long does it take to build a custom educational app?
                    <i class="ph-bold ph-caret-down text-slate-400 transition-transform"></i>
                </button>
                <div class="hidden px-6 py-4 text-slate-600 text-sm leading-relaxed border-t border-gray-100">
                    A standard MVP using React Native typically takes 10-14 weeks from initial architecture to App Store submission. Larger enterprise applications with complex legacy integrations can take 4-6 months. We will provide a strict timeline during discovery.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 9. TESTIMONIALS -->
<section class="py-24 bg-slate-50 text-slate-900 relative">
    <div class="max-w-5xl mx-auto px-4 md:px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold mb-4">Trusted by EdTech Leaders</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-6 rounded-3xl bg-white border border-slate-200 shadow-xl relative">
                <i class="ph-fill ph-quotes text-3xl text-indigo-400 mb-4 opacity-50"></i>
                <p class="text-base md:text-lg font-serif text-slate-700 italic leading-relaxed mb-6">"UTSL built our cross-platform app in record time. Our course completion rates spiked by 40% simply because students could finally download lectures and watch them on their commute."</p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-utsl-primary flex items-center justify-center text-base font-black text-white shadow-md">VK</div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900">Vikram K.</h4>
                        <p class="text-slate-500 text-xs font-medium">CEO, Global Language Academy</p>
                    </div>
                </div>
            </div>
            
            <div class="p-6 rounded-3xl bg-white border border-slate-200 shadow-xl relative">
                <i class="ph-fill ph-quotes text-3xl text-indigo-400 mb-4 opacity-50"></i>
                <p class="text-base md:text-lg font-serif text-slate-700 italic leading-relaxed mb-6">"The architecture is flawless. The native iOS app they delivered integrates perfectly with our highly complex legacy backend. It's fast, beautiful, and completely secure."</p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-utsl-primary flex items-center justify-center text-base font-black text-white shadow-md">SM</div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900">Dr. Shweta M.</h4>
                        <p class="text-slate-500 text-xs font-medium">Director of Digital Learning</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 11. CTA -->
<section class="py-32 bg-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e3a8a_1px,transparent_1px),linear-gradient(to_bottom,#1e3a8a_1px,transparent_1px)] bg-[size:40px_40px] opacity-20 -z-10 [mask-image:radial-gradient(ellipse_80%_80%_at_50%_0%,#000_70%,transparent_100%)]"></div>
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-8">Ready to Put Learning in Their Pockets?</h2>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="https://calendly.com/" target="_blank" class="px-8 py-4 text-base font-bold text-white bg-utsl-primary hover:bg-utsl-dark rounded-xl shadow-[0_10px_40px_-10px_rgba(79,70,229,0.6)] transition-all hover:-translate-y-1">
                Schedule a Strategy Call
            </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=support@utsltech.com" target="_blank" class="px-8 py-4 text-base font-bold text-slate-700 bg-white border border-gray-200 hover:border-gray-300 rounded-xl transition-all hover:-translate-y-1">
                Email support@utsltech.com
            </a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
