<?php 
session_start();
include 'db.php'; 

$status_message = '';
$status_type = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($pdo)) {
    $firstName = trim($_POST['firstName'] ?? '');
    $lastName = trim($_POST['lastName'] ?? '');
    $name = $firstName . ' ' . $lastName;
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

    if ($password !== $confirmPassword) {
        $status_message = "Passwords do not match.";
        $status_type = "error";
    } else {
        try {
            $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email");
            $stmt->execute([':email' => $email]);
            if ($stmt->fetch()) {
                $status_message = "An account with this email already exists.";
                $status_type = "error";
            } else {
                $password_hash = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("INSERT INTO users (name, email, password_hash) VALUES (:name, :email, :password_hash)");
                $stmt->execute([
                    ':name' => $name,
                    ':email' => $email,
                    ':password_hash' => $password_hash
                ]);
                
                // Log them in immediately
                $_SESSION['user_id'] = $pdo->lastInsertId();
                $_SESSION['user_name'] = $name;
                header("Location: index.php");
                exit;
            }
        } catch (PDOException $e) {
            $status_message = "An error occurred during registration. Please try again.";
            $status_type = "error";
        }
    }
}

include 'header.php'; 
?>

<!-- Override global body settings for full-screen effect -->
<style>
    footer { display: none !important; }
    body { overflow: hidden; }
</style>

<!-- Full-Screen Split Layout Wrapper -->
<div class="w-full h-[calc(100vh-72px)] flex flex-row overflow-hidden">
    
    <!-- Left Panel (40%) - Branding -->
    <!-- Hidden on screens smaller than 1024px (lg) -->
    <div class="hidden lg:flex lg:w-2/5 bg-utsl-primary relative flex-col items-center justify-center p-12 overflow-hidden">
        
        <!-- Low-opacity geometric line vector pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid-signup" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid-signup)" />
            </svg>
            <div class="absolute inset-0 bg-gradient-to-t from-transparent to-utsl-primary"></div>
        </div>
        
        <div class="relative z-10 text-center flex flex-col items-center">
            <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mb-8 border border-white/20">
                <i class="ph ph-rocket-launch text-3xl"></i>
            </div>
            <h1 class="text-4xl font-extrabold text-white mb-4 tracking-tight">
                Join the Platform
            </h1>
            <p class="text-blue-100 max-w-sm text-center leading-relaxed">
                Create your developer account to access API keys, sandbox environments, and architectural blueprints.
            </p>
        </div>
    </div>

    <!-- Right Panel (60%) - Signup Form -->
    <!-- Full width on mobile -->
    <div class="w-full lg:w-3/5 bg-white flex items-start md:items-center justify-center p-6 md:p-12 overflow-y-auto">
        <div class="w-full max-w-lg flex flex-col my-auto">
            
            <div class="mb-8 text-center lg:text-left mt-8 md:mt-0">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Create your UTSL Developer Account</h2>
                <p class="text-gray-500">Build the future of education with our enterprise tools.</p>
            </div>

            <?php if ($status_message): ?>
                <div class="mb-6 p-4 rounded-xl <?php echo $status_type === 'error' ? 'bg-red-50 text-red-700 border border-red-200' : 'bg-green-50 text-green-700 border border-green-200'; ?>">
                    <?php echo htmlspecialchars($status_message); ?>
                </div>
            <?php endif; ?>

            <form action="signup.php" method="POST" class="flex flex-col gap-5 w-full">
                
                <!-- 2-column Name Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="flex flex-col gap-2">
                        <label for="firstName" class="text-sm font-bold text-gray-700">First Name</label>
                        <input type="text" id="firstName" name="firstName" placeholder="Jane" required
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-utsl-primary focus:ring-1 focus:ring-utsl-primary transition-all text-sm h-[48px]">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="lastName" class="text-sm font-bold text-gray-700">Last Name</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Doe" required
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-utsl-primary focus:ring-1 focus:ring-utsl-primary transition-all text-sm h-[48px]">
                    </div>
                </div>

                <!-- Email Input -->
                <div class="flex flex-col gap-2">
                    <label for="email" class="text-sm font-bold text-gray-700">Company Email Address</label>
                    <input type="email" id="email" name="email" placeholder="jane@edtech-startup.com" required
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-utsl-primary focus:ring-1 focus:ring-utsl-primary transition-all text-sm h-[48px]">
                </div>

                <!-- Custom Dropdown Selector -->
                <div class="flex flex-col gap-2">
                    <label for="profile" class="text-sm font-bold text-gray-700">Select Your EdTech Profile</label>
                    <div class="relative">
                        <select id="profile" name="profile" required
                            class="appearance-none w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-utsl-primary focus:ring-1 focus:ring-utsl-primary transition-all text-sm h-[48px] text-gray-700">
                            <option value="" disabled selected>Choose your role...</option>
                            <option value="startup">EdTech Startup Founder</option>
                            <option value="enterprise">Enterprise IT Leader</option>
                            <option value="developer">Software Engineer</option>
                            <option value="educator">Instructional Designer</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                            <i class="ph ph-caret-down"></i>
                        </div>
                    </div>
                </div>

                <!-- 2-column Password Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="flex flex-col gap-2">
                        <label for="password" class="text-sm font-bold text-gray-700">Password</label>
                        <input type="password" id="password" name="password" placeholder="••••••••" required
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-utsl-primary focus:ring-1 focus:ring-utsl-primary transition-all text-sm h-[48px] tracking-widest">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="confirmPassword" class="text-sm font-bold text-gray-700">Confirm Password</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="••••••••" required
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-utsl-primary focus:ring-1 focus:ring-utsl-primary transition-all text-sm h-[48px] tracking-widest">
                    </div>
                </div>

                <!-- Compliance Validation Checkbox -->
                <div class="flex items-start gap-3 mt-2">
                    <div class="flex items-center h-[48px] md:h-auto">
                        <input id="terms" name="terms" type="checkbox" required
                            class="h-5 w-5 text-utsl-primary focus:ring-utsl-primary border-gray-300 rounded cursor-pointer mt-0 md:mt-1">
                    </div>
                    <label for="terms" class="text-sm text-gray-600 leading-relaxed cursor-pointer py-3 md:py-0">
                        I agree to the UTSL <a href="#" class="font-bold text-utsl-primary hover:underline">Terms of Service</a>, <a href="#" class="font-bold text-utsl-primary hover:underline">Privacy Policy</a>, and Data Processing Agreement.
                    </label>
                </div>

                <!-- Action Button -->
                <button type="submit" class="w-full bg-black hover:bg-gray-800 text-white font-bold py-3 rounded-xl transition-colors mt-2 h-[48px]">
                    Create Free Account
                </button>
            </form>

            <div class="mt-8 text-center pb-8 lg:pb-0">
                <p class="text-gray-600 text-sm">
                    Already have an account? 
                    <a href="login.php" class="font-bold text-utsl-primary hover:underline min-h-[48px] inline-flex items-center">Sign in</a>
                </p>
            </div>

        </div>
    </div>

</div>

<?php include 'footer.php'; ?>
