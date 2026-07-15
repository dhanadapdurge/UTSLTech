<?php 
$case_studies = [
    'lms' => [
        'badge' => 'EdTech Platform',
        'badge_bg' => 'bg-indigo-100',
        'badge_text' => 'text-utsl-primary',
        'title' => 'Global Corporate Training Platform Re-architecture',
        'subtitle' => 'Executed a complete tear-down and rebuilt the platform using a highly scalable microservices architecture.',
        'challenge' => 'TechCorp Industries was struggling with a monolithic legacy LMS that crashed during peak usage, creating bottlenecks for thousands of employees worldwide.',
        'solution' => 'We designed and deployed a microservices-based architecture, decoupling the frontend from the backend to ensure high availability and seamless scaling during peak traffic.',
        'stack' => ['React', 'Node.js', 'GraphQL', 'Docker'],
        'stats' => [
            ['value' => '400%', 'label' => 'Capacity Increase', 'sub' => 'Concurrent users handled'],
            ['value' => 'Zero', 'label' => 'Downtime Incidents', 'sub' => 'Since deployment'],
            ['value' => '3x', 'label' => 'Faster Load Times', 'sub' => 'Average page load speed']
        ]
    ],
    'ai-tutor' => [
        'badge' => 'AI Integration',
        'badge_bg' => 'bg-purple-100',
        'badge_text' => 'text-purple-700',
        'title' => 'LLM-Powered Adaptive Language Tutor',
        'subtitle' => 'Built a mobile-first language learning application featuring real-time speech recognition and AI-driven conversational practice.',
        'challenge' => 'A fast-growing EduTech startup needed a way to scale personalized language tutoring without hiring thousands of human teachers, while keeping interactions natural.',
        'solution' => 'Integrated custom-trained LLMs with real-time speech-to-text engines to provide instant, contextual, and adaptive language practice with sub-200ms latency.',
        'stack' => ['Python', 'OpenAI', 'React Native', 'WebRTC'],
        'stats' => [
            ['value' => '50k+', 'label' => 'Active Users', 'sub' => 'Gained in first 3 months'],
            ['value' => '<200ms', 'label' => 'Response Latency', 'sub' => 'Real-time conversation'],
            ['value' => '92%', 'label' => 'User Retention', 'sub' => 'Month-over-month engagement']
        ]
    ],
    'sis' => [
        'badge' => 'Higher Ed',
        'badge_bg' => 'bg-emerald-100',
        'badge_text' => 'text-emerald-700',
        'title' => 'Seamless University SIS & Payment Integration',
        'subtitle' => 'Unified fragmented digital tools into a single, cohesive portal using a robust GraphQL federation layer.',
        'challenge' => 'A major university\'s fragmented digital ecosystem was causing severe enrollment delays, lost payments, and constant data synchronization issues.',
        'solution' => 'Designed a federated GraphQL architecture to unify the Student Information System (SIS) and Payment Gateway, creating a single source of truth.',
        'stack' => ['GraphQL', 'Next.js', 'Stripe', 'AWS'],
        'stats' => [
            ['value' => '60%', 'label' => 'Faster Enrollment', 'sub' => 'Reduction in student friction'],
            ['value' => 'Zero', 'label' => 'Data Desyncs', 'sub' => 'Perfect system harmony'],
            ['value' => '$2M+', 'label' => 'Processed Monthly', 'sub' => 'Secure tuition payments']
        ]
    ]
];

$id = $_GET['id'] ?? 'lms';
if (!array_key_exists($id, $case_studies)) {
    header("Location: case-studies.php");
    exit;
}

$cs = $case_studies[$id];

$page_title = $cs['title'] . ' | UTSL Technology';
include 'db.php'; 
include 'header.php'; 
?>

<!-- 1. HEADER SECTION -->
<section class="bg-slate-50 pt-24 pb-20 border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-6 md:px-8">
        <!-- Badges -->
        <div class="flex flex-wrap items-center gap-3 mb-6">
            <span class="px-3 py-1 <?php echo $cs['badge_bg']; ?> <?php echo $cs['badge_text']; ?> text-xs font-bold rounded-full"><?php echo $cs['badge']; ?></span>
            <span class="px-3 py-1 bg-white border border-gray-200 text-slate-800 text-xs font-bold rounded-full shadow-sm">Case Study</span>
        </div>
        
        <!-- Title & Subtitle -->
        <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-6 tracking-tight">
            <?php echo $cs['title']; ?>
        </h1>
        <p class="text-xl text-slate-500 max-w-4xl leading-relaxed">
            <?php echo $cs['subtitle']; ?>
        </p>
    </div>
</section>

<!-- 2. MAIN CONTENT GRID -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 md:px-8">
        <div class="flex flex-col lg:flex-row gap-16 lg:gap-24">
            
            <!-- Left Column: Challenge & Solution -->
            <div class="lg:w-2/3">
                <!-- The Challenge -->
                <div class="mb-14">
                    <div class="flex items-center gap-3 mb-6">
                        <i class="ph ph-warning-circle text-2xl text-rose-500"></i>
                        <h2 class="text-2xl font-bold text-slate-900">The Challenge</h2>
                    </div>
                    <p class="text-lg text-slate-500 leading-relaxed">
                        <?php echo $cs['challenge']; ?>
                    </p>
                </div>
                
                <!-- Our Solution -->
                <div class="mb-12">
                    <div class="flex items-center gap-3 mb-6">
                        <i class="ph ph-lightbulb text-2xl text-utsl-primary"></i>
                        <h2 class="text-2xl font-bold text-slate-900">Our Solution</h2>
                    </div>
                    <p class="text-lg text-slate-500 leading-relaxed mb-8">
                        <?php echo $cs['solution']; ?>
                    </p>
                    
                    <!-- Tech Stack Badges -->
                    <div class="flex flex-wrap gap-3">
                        <?php foreach($cs['stack'] as $tech): ?>
                        <span class="px-4 py-1.5 bg-white border border-gray-200 text-slate-800 text-sm font-semibold rounded-full shadow-sm"><?php echo $tech; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <!-- Right Column: Results -->
            <div class="lg:w-1/3">
                <div class="flex items-center gap-3 mb-8">
                    <i class="ph ph-chart-line-up text-2xl text-slate-800"></i>
                    <h2 class="text-2xl font-bold text-slate-900">Results Achieved</h2>
                </div>
                
                <div class="space-y-4">
                    <?php foreach($cs['stats'] as $stat): ?>
                    <div class="bg-slate-50 border border-gray-100 rounded-xl p-6 shadow-sm">
                        <div class="text-4xl font-extrabold text-utsl-primary mb-2"><?php echo $stat['value']; ?></div>
                        <h3 class="text-lg font-bold text-slate-900 mb-1"><?php echo $stat['label']; ?></h3>
                        <p class="text-sm text-slate-500"><?php echo $stat['sub']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
