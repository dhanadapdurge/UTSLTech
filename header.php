<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$page_title = isset($page_title) ? $page_title : 'UTSL | EdTech Solutions';
$page_description = isset($page_description) ? $page_description : 'UTSL Technology provides cutting edge EdTech solutions.';
$page_keywords = isset($page_keywords) ? $page_keywords : 'edtech, lms, ai tutors, technology';

$current_page = basename($_SERVER['PHP_SELF']);
$services_pages = ['services.php', 'lms-dev.php', 'ai-tools.php', 'mobile-apps.php', 'integrations.php', 'analytics.php', 'cto-services.php', 'growth.php'];
$is_services_active = in_array($current_page, $services_pages);
$is_portfolio_active = in_array($current_page, ['portfolio.php']);
$is_case_studies_active = in_array($current_page, ['case-studies.php', 'case-study-detail.php']);
$is_careers_active = in_array($current_page, ['careers.php', 'apply.php']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <!-- Google Fonts: Plus Jakarta Sans for a premium modern look -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <!-- Tailwind CSS (Play CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        utsl: {
                            bg: '#F8FAFC',
                            primary: '#4338CA', /* Indigo 700 */
                            primaryHover: '#3730A3', /* Indigo 800 */
                            secondary: '#0284C7', /* Sky 600 */
                            dark: '#0B1120', /* Premium deep dark */
                            text: '#334155',
                            border: '#E2E8F0',
                            accent: '#10B981'
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        mono: ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', "Liberation Mono", "Courier New", 'monospace'],
                    },
                    boxShadow: {
                        'premium': '0 20px 40px -15px rgba(0,0,0,0.05)',
                        'glow': '0 0 20px rgba(67, 56, 202, 0.4)',
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-utsl-bg text-utsl-text font-sans antialiased min-h-screen flex flex-col selection:bg-utsl-primary selection:text-white">

<!-- Global Navigation Header -->
<header class="w-full sticky top-0 z-50 bg-white/80 backdrop-blur-xl border-b border-gray-100 shadow-sm transition-all duration-300">
    <div class="w-full px-4 lg:px-8 xl:px-12 h-24 flex items-center justify-between">
        
        <!-- Left: Logo & Tagline -->
        <div class="flex items-center gap-6">
            <a href="index.php" class="flex items-center gap-3 group cursor-pointer">
                <img src="assets/img/logo.png" alt="UTSL Logo" class="h-12 w-auto group-hover:scale-105 transition-transform duration-300">
                <div class="flex flex-col">
                    <span class="text-xl sm:text-2xl font-black tracking-tight text-utsl-dark leading-none">
                        UTSL
                    </span>
                    <span class="text-[10px] sm:text-xs font-bold text-slate-400 uppercase tracking-widest mt-0.5">Technology</span>
                    <span class="hidden sm:block text-[9px] font-semibold text-slate-400 tracking-wider mt-1">The Technology Behind Better Learning</span>
                </div>
            </a>
        </div>

        <!-- Center: Desktop Navigation -->
        <nav class="hidden md:flex items-center gap-1 relative">
            <a href="index.php" class="relative px-4 py-2 text-sm font-semibold <?php echo ($current_page == 'index.php') ? 'text-utsl-primary' : 'text-slate-600 hover:text-utsl-primary'; ?> transition-colors duration-300">Home</a>
            <div class="group relative">
                <a href="services.php" class="flex items-center gap-1 px-4 py-2 text-sm font-semibold <?php echo $is_services_active ? 'text-utsl-primary' : 'text-slate-600 hover:text-utsl-primary'; ?> transition-colors duration-300">
                    Services <i class="ph ph-caret-down text-xs transition-transform group-hover:rotate-180"></i>
                </a>
                
                <!-- Dropdown Menu -->
                <div class="absolute top-full left-0 mt-2 w-64 bg-white rounded-2xl shadow-premium border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left -translate-y-2 group-hover:translate-y-0 z-50 overflow-hidden p-2">
                    <a href="lms-dev.php" class="block px-4 py-3 text-sm font-semibold <?php echo ($current_page == 'lms-dev.php') ? 'text-utsl-primary bg-slate-50' : 'text-slate-700 hover:bg-slate-50 hover:text-utsl-primary'; ?> rounded-xl transition-colors">LMS Development</a>
                    <a href="ai-tools.php" class="block px-4 py-3 text-sm font-semibold <?php echo ($current_page == 'ai-tools.php') ? 'text-utsl-primary bg-slate-50' : 'text-slate-700 hover:bg-slate-50 hover:text-utsl-primary'; ?> rounded-xl transition-colors">AI Learning Tools</a>
                    <a href="mobile-apps.php" class="block px-4 py-3 text-sm font-semibold <?php echo ($current_page == 'mobile-apps.php') ? 'text-utsl-primary bg-slate-50' : 'text-slate-700 hover:bg-slate-50 hover:text-utsl-primary'; ?> rounded-xl transition-colors">Mobile Apps</a>
                    <a href="integrations.php" class="block px-4 py-3 text-sm font-semibold <?php echo ($current_page == 'integrations.php') ? 'text-utsl-primary bg-slate-50' : 'text-slate-700 hover:bg-slate-50 hover:text-utsl-primary'; ?> rounded-xl transition-colors">System Integrations</a>
                    <a href="analytics.php" class="block px-4 py-3 text-sm font-semibold <?php echo ($current_page == 'analytics.php') ? 'text-utsl-primary bg-slate-50' : 'text-slate-700 hover:bg-slate-50 hover:text-utsl-primary'; ?> rounded-xl transition-colors">LMS Analytics</a>
                    <a href="cto-services.php" class="block px-4 py-3 text-sm font-semibold <?php echo ($current_page == 'cto-services.php') ? 'text-utsl-primary bg-slate-50' : 'text-slate-700 hover:bg-slate-50 hover:text-utsl-primary'; ?> rounded-xl transition-colors">CTO-as-a-Service</a>
                    <a href="growth.php" class="block px-4 py-3 text-sm font-semibold <?php echo ($current_page == 'growth.php') ? 'text-utsl-primary bg-slate-50' : 'text-slate-700 hover:bg-slate-50 hover:text-utsl-primary'; ?> rounded-xl transition-colors">Growth Engineering</a>
                </div>
            </div>
            <a href="portfolio.php" class="relative px-4 py-2 text-sm font-semibold <?php echo $is_portfolio_active ? 'text-utsl-primary' : 'text-slate-600 hover:text-utsl-primary'; ?> transition-colors duration-300">Portfolio</a>
            <a href="case-studies.php" class="relative px-4 py-2 text-sm font-semibold <?php echo $is_case_studies_active ? 'text-utsl-primary' : 'text-slate-600 hover:text-utsl-primary'; ?> transition-colors duration-300">Case Studies</a>
            <a href="careers.php" class="relative px-4 py-2 text-sm font-semibold <?php echo $is_careers_active ? 'text-utsl-primary' : 'text-slate-600 hover:text-utsl-primary'; ?> transition-colors duration-300 flex items-center">Careers <span class="ml-1.5 text-[9px] px-1.5 py-0.5 bg-utsl-primary/20 text-utsl-secondary rounded uppercase font-bold">Hiring</span></a>
            <a href="about.php" class="relative px-4 py-2 text-sm font-semibold <?php echo ($current_page == 'about.php') ? 'text-utsl-primary' : 'text-slate-600 hover:text-utsl-primary'; ?> transition-colors duration-300">About</a>
        </nav>

        <!-- Right: Sticky CTA Button & Login -->
        <div class="hidden md:flex items-center gap-5">

            <a href="contact-us.php" class="group relative px-6 py-2.5 text-sm font-bold text-white rounded-xl bg-utsl-dark shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300 overflow-hidden flex items-center gap-2">
                <span class="relative z-10 flex items-center gap-2">
                    Talk to an Expert <i class="ph ph-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </span>
            </a>
        </div>

        <!-- Mobile Menu Trigger -->
        <button id="mobile-menu-btn" class="md:hidden flex items-center justify-center w-10 h-10 rounded-xl bg-white text-slate-600 shadow-sm border border-gray-200">
            <i class="ph ph-list text-xl"></i>
        </button>

    </div>
</header>

<!-- Mobile Drawer -->
<div id="mobile-menu-drawer" class="fixed inset-0 z-[60] bg-white transform translate-x-full transition-transform duration-300 ease-in-out md:hidden flex flex-col shadow-2xl">
    <div class="flex items-center justify-between px-6 h-20 border-b border-gray-100">
        <div class="flex items-center gap-3">
            <img src="assets/img/logo.png" alt="UTSL Logo" class="h-10 w-auto">
            <span class="text-xl font-black tracking-tight text-utsl-dark">UTSL</span>
        </div>
        <button id="close-menu-btn" class="flex items-center justify-center w-10 h-10 rounded-xl bg-gray-50 text-slate-600">
            <i class="ph ph-x text-xl"></i>
        </button>
    </div>
    
    <div class="flex flex-col p-6 gap-2">
        <a href="index.php" class="text-lg font-bold <?php echo ($current_page == 'index.php') ? 'text-utsl-primary' : 'text-slate-800'; ?> py-3 border-b border-gray-100 flex items-center justify-between">Home <i class="ph ph-caret-right text-slate-400"></i></a>
        
        <!-- Mobile Services Accordion -->
        <details class="group" <?php echo $is_services_active ? 'open' : ''; ?>>
            <summary class="text-lg font-bold <?php echo $is_services_active ? 'text-utsl-primary' : 'text-slate-800'; ?> py-3 border-b border-gray-100 flex items-center justify-between cursor-pointer list-none [&::-webkit-details-marker]:hidden">
                Services <i class="ph ph-caret-down text-slate-400 group-open:rotate-180 transition-transform"></i>
            </summary>
            <div class="pl-4 py-3 flex flex-col gap-3 bg-slate-50 rounded-b-xl border-x border-b border-gray-100 mb-2 mt-[-1px]">
                <a href="lms-dev.php" class="py-1 text-sm font-semibold <?php echo ($current_page == 'lms-dev.php') ? 'text-utsl-primary' : 'text-slate-600'; ?> block">LMS Development</a>
                <a href="ai-tools.php" class="py-1 text-sm font-semibold <?php echo ($current_page == 'ai-tools.php') ? 'text-utsl-primary' : 'text-slate-600'; ?> block">AI Learning Tools</a>
                <a href="mobile-apps.php" class="py-1 text-sm font-semibold <?php echo ($current_page == 'mobile-apps.php') ? 'text-utsl-primary' : 'text-slate-600'; ?> block">Mobile Apps</a>
                <a href="integrations.php" class="py-1 text-sm font-semibold <?php echo ($current_page == 'integrations.php') ? 'text-utsl-primary' : 'text-slate-600'; ?> block">System Integrations</a>
                <a href="analytics.php" class="py-1 text-sm font-semibold <?php echo ($current_page == 'analytics.php') ? 'text-utsl-primary' : 'text-slate-600'; ?> block">LMS Analytics</a>
                <a href="cto-services.php" class="py-1 text-sm font-semibold <?php echo ($current_page == 'cto-services.php') ? 'text-utsl-primary' : 'text-slate-600'; ?> block">CTO-as-a-Service</a>
                <a href="growth.php" class="py-1 text-sm font-semibold <?php echo ($current_page == 'growth.php') ? 'text-utsl-primary' : 'text-slate-600'; ?> block">Growth Engineering</a>
            </div>
        </details>
        
        <a href="portfolio.php" class="text-lg font-bold <?php echo $is_portfolio_active ? 'text-utsl-primary' : 'text-slate-800'; ?> py-3 border-b border-gray-100 flex items-center justify-between">Portfolio <i class="ph ph-caret-right text-slate-400"></i></a>
        <a href="case-studies.php" class="text-lg font-bold <?php echo $is_case_studies_active ? 'text-utsl-primary' : 'text-slate-800'; ?> py-3 border-b border-gray-100 flex items-center justify-between">Case Studies <i class="ph ph-caret-right text-slate-400"></i></a>
        <a href="careers.php" class="text-lg font-bold <?php echo $is_careers_active ? 'text-utsl-primary' : 'text-slate-800'; ?> py-3 border-b border-gray-100 flex items-center justify-between">Careers <i class="ph ph-caret-right text-slate-400"></i></a>
        <a href="about.php" class="text-lg font-bold <?php echo ($current_page == 'about.php') ? 'text-utsl-primary' : 'text-slate-800'; ?> py-3 border-b border-gray-100 flex items-center justify-between">About <i class="ph ph-caret-right text-slate-400"></i></a>

    </div>
    
    <div class="mt-auto p-6 bg-gray-50 border-t border-gray-100">
        <a href="contact-us.php" class="flex items-center justify-center gap-2 w-full bg-utsl-dark text-white font-bold py-4 rounded-xl shadow-lg">
            Talk to an Expert
        </a>
    </div>
</div>

<!-- Main Content Wrapper -->
<main class="flex-grow">
