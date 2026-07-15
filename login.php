<?php 
session_start();
include 'db.php'; 

$status_message = '';
$status_type = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($pdo)) {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password_hash'])) {
            // Login successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header("Location: index.php");
            exit;
        } else {
            $status_message = "Invalid email address or password.";
            $status_type = "error";
        }
    } catch (PDOException $e) {
        $status_message = "An error occurred. Please try again later.";
        $status_type = "error";
    }
}

include 'header.php'; 
?>

<!-- Override global body settings for this specific page to achieve full-screen effect without breaking includes -->
<style>
    /* Hide the footer on login page to maintain the strict h-screen requirement */
    footer { display: none !important; }
    /* Prevent body scrolling */
    body { overflow: hidden; }
</style>

<!-- Full-Screen Split Layout Wrapper -->
<div class="w-full h-[calc(100vh-72px)] flex flex-row overflow-hidden">
    
    <!-- Left Panel (40%) - Branding -->
    <!-- Hidden on screens smaller than 1024px (lg) -->
    <div class="hidden lg:flex lg:w-2/5 bg-utsl-primary relative flex-col items-center justify-center p-12 overflow-hidden">
        
        <!-- Low-opacity geometric line vector pattern (CSS driven) -->
        <div class="absolute inset-0 opacity-10">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-utsl-primary"></div>
        </div>
        
        <div class="relative z-10 text-center flex flex-col items-center">
            <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mb-8 border border-white/20">
                <i class="ph ph-lock-key text-3xl"></i>
            </div>
            <h1 class="text-4xl font-extrabold text-white mb-4 tracking-tight">
                Welcome to the UTSL Console
            </h1>
            <p class="text-blue-100 max-w-sm text-center leading-relaxed">
                Access your secure EdTech dashboard, manage learning nodes, and review analytics.
            </p>
        </div>
    </div>

    <!-- Right Panel (60%) - Login Form -->
    <!-- Full width on mobile -->
    <div class="w-full lg:w-3/5 bg-white flex items-center justify-center p-6 md:p-12 overflow-y-auto">
        <div class="w-full max-w-md flex flex-col">
            
            <div class="mb-10 text-center lg:text-left">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Sign In</h2>
                <p class="text-gray-500">Enter your credentials to access your account.</p>
            </div>

            <?php if ($status_message): ?>
                <div class="mb-6 p-4 rounded-xl <?php echo $status_type === 'error' ? 'bg-red-50 text-red-700 border border-red-200' : 'bg-green-50 text-green-700 border border-green-200'; ?>">
                    <?php echo htmlspecialchars($status_message); ?>
                </div>
            <?php endif; ?>

            <form action="login.php" method="POST" class="flex flex-col gap-6 w-full">
                
                <!-- Email Input -->
                <div class="flex flex-col gap-2">
                    <label for="email" class="text-sm font-bold text-gray-700">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
                            <i class="ph ph-envelope-simple text-lg"></i>
                        </div>
                        <input type="email" id="email" name="email" placeholder="name@company.com" required
                            class="w-full pl-12 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-utsl-primary focus:ring-1 focus:ring-utsl-primary transition-all text-sm h-[48px]">
                    </div>
                </div>

                <!-- Password Input -->
                <div class="flex flex-col gap-2">
                    <div class="flex items-center justify-between">
                        <label for="password" class="text-sm font-bold text-gray-700">Password</label>
                        <a href="#" class="text-sm font-bold text-utsl-primary hover:underline h-[48px] flex items-center">Forgot Password?</a>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
                            <i class="ph ph-lock-key text-lg"></i>
                        </div>
                        <input type="password" id="password" name="password" placeholder="••••••••" required
                            class="w-full pl-12 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-utsl-primary focus:ring-1 focus:ring-utsl-primary transition-all text-sm h-[48px] tracking-widest">
                    </div>
                </div>

                <!-- Action Button -->
                <button type="submit" class="w-full bg-utsl-primary hover:bg-blue-700 text-white font-bold py-3 rounded-xl transition-colors shadow-lg shadow-blue-500/30 mt-4 flex items-center justify-center gap-2 h-[48px]">
                    <span>Sign In to Dashboard</span>
                    <i class="ph ph-arrow-right font-bold"></i>
                </button>
            </form>

            <div class="mt-10 text-center">
                <p class="text-gray-600 text-sm">
                    Don't have an account? 
                    <a href="signup.php" class="font-bold text-utsl-primary hover:underline min-h-[48px] inline-flex items-center">Register here</a>
                </p>
            </div>

        </div>
    </div>

</div>

<?php include 'footer.php'; ?>
