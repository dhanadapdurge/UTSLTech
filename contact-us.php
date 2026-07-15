<?php 
include 'db.php'; 

$status_message = '';
$status_type = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($pdo)) {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $name = trim($first_name . ' ' . $last_name);
    $job_title = $_POST['job_title'] ?? '';
    $company = $_POST['company'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $interest = $_POST['interest'] ?? '';
    $message = $_POST['message'] ?? '';

    try {
        $stmt = $pdo->prepare("
            INSERT INTO contact_submissions (name, email, phone, job_title, company, message, interest)
            VALUES (:name, :email, :phone, :job_title, :company, :message, :interest)
        ");
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':job_title' => $job_title,
            ':company' => $company,
            ':message' => $message,
            ':interest' => $interest
        ]);
        $status_message = "Thank you! Your message has been received successfully.";
        $status_type = "success";
    } catch (PDOException $e) {
        $status_message = "An error occurred while submitting your message. Please try again later.";
        $status_type = "error";
    }
}

include 'header.php'; 
?>

<section class="relative pt-24 lg:pt-32 pb-32 bg-utsl-bg overflow-hidden min-h-[80vh] flex items-start">
    <!-- Background Elements -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-utsl-primary/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-utsl-secondary/10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 md:px-8 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            
            <!-- Left: Text content -->
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-indigo-50 border border-indigo-100 text-utsl-primary text-sm font-bold mb-6">
                    <i class="ph-fill ph-chat-circle-dots"></i> Let's Talk
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
                    Let's Build Something <span class="text-transparent bg-clip-text bg-gradient-to-r from-utsl-primary to-utsl-secondary">Great Together</span>
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    We'd love to hear from you
                </p>
                
                <div class="flex flex-col gap-8">
                    <!-- Email and Phone -->
                    <div class="flex flex-col gap-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white shadow-sm border border-gray-100 flex items-center justify-center text-utsl-primary text-xl flex-shrink-0">
                                <i class="ph ph-envelope-simple"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Email Us</h4>
                                <p class="text-gray-600 font-medium">support@utsltech.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white shadow-sm border border-gray-100 flex items-center justify-center text-utsl-primary text-xl flex-shrink-0">
                                <i class="ph ph-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Call Us</h4>
                                <p class="text-gray-600 font-medium">+91 7410 554 056</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Locations Card -->
                    <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 mt-2">
                        <div class="text-gray-500 mb-4">
                            <i class="ph ph-map-pin text-2xl"></i>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Our Locations:</h4>
                        <p class="text-gray-600 font-medium">Pune, India</p>
                    </div>

                    <!-- Social Media Section -->
                    <div class="flex items-center gap-6 mt-4 border-t border-gray-200 pt-6">
                        <h4 class="text-lg font-bold text-gray-900">Social media</h4>
                        <div class="flex items-center gap-3">
                            <a href="https://www.linkedin.com/company/utsltech/" target="_blank" class="w-10 h-10 rounded-xl bg-gray-50 hover:bg-gray-100 border border-transparent hover:border-gray-200 text-gray-500 hover:text-utsl-primary flex items-center justify-center transition-all">
                                <i class="ph-fill ph-linkedin-logo text-xl"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-xl bg-gray-50 hover:bg-gray-100 border border-transparent hover:border-gray-200 text-gray-500 hover:text-red-500 flex items-center justify-center transition-all">
                                <i class="ph-fill ph-youtube-logo text-xl"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-xl bg-gray-50 hover:bg-gray-100 border border-transparent hover:border-gray-200 text-gray-500 hover:text-green-500 flex items-center justify-center transition-all">
                                <i class="ph-fill ph-spotify-logo text-xl"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-xl bg-gray-50 hover:bg-gray-100 border border-transparent hover:border-gray-200 text-gray-500 hover:text-gray-900 flex items-center justify-center transition-all">
                                <i class="ph ph-x text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right: The Form -->
            <div class="bg-white rounded-3xl p-8 md:p-10 shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 relative">
                <!-- Decorative accent line -->
                <div class="absolute top-0 left-10 right-10 h-1 bg-gradient-to-r from-utsl-primary to-utsl-secondary rounded-b-md"></div>
                
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Project Details</h3>
                
                <?php if ($status_message): ?>
                    <div class="mb-6 p-4 rounded-xl <?php echo $status_type === 'success' ? 'bg-green-50 text-green-700 border border-green-200' : 'bg-red-50 text-red-700 border border-red-200'; ?>">
                        <?php echo htmlspecialchars($status_message); ?>
                    </div>
                <?php endif; ?>
                
                <form action="contact-us.php" method="POST" class="flex flex-col gap-5">
                    
                    <!-- First & Last Name -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-gray-700">First Name: <span class="text-red-500">*</span></label>
                            <input type="text" name="first_name" placeholder="Enter your first name" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:border-utsl-primary focus:ring-2 focus:ring-utsl-primary/20 outline-none transition-all" required>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-gray-700">Last Name: <span class="text-red-500">*</span></label>
                            <input type="text" name="last_name" placeholder="Enter your last name" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:border-utsl-primary focus:ring-2 focus:ring-utsl-primary/20 outline-none transition-all" required>
                        </div>
                    </div>
                    
                    <!-- Job Title -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold text-gray-700">Job Title: <span class="text-red-500">*</span></label>
                        <input type="text" name="job_title" placeholder="Enter your job title" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:border-utsl-primary focus:ring-2 focus:ring-utsl-primary/20 outline-none transition-all" required>
                    </div>

                    <!-- Company -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold text-gray-700">Company: <span class="text-red-500">*</span></label>
                        <input type="text" name="company" placeholder="Enter your company name" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:border-utsl-primary focus:ring-2 focus:ring-utsl-primary/20 outline-none transition-all" required>
                    </div>

                    <!-- Business Email Address -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold text-gray-700">Business Email Address: <span class="text-red-500">*</span></label>
                        <input type="email" name="email" placeholder="Business email" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:border-utsl-primary focus:ring-2 focus:ring-utsl-primary/20 outline-none transition-all" required>
                    </div>

                    <!-- Phone Number -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold text-gray-700">Phone Number:</label>
                        <input type="tel" name="phone" placeholder="Enter your phone number" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:border-utsl-primary focus:ring-2 focus:ring-utsl-primary/20 outline-none transition-all">
                    </div>

                    <!-- Type of Inquiry -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold text-gray-700">Type of Inquiry <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <select name="interest" class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:border-utsl-primary focus:ring-2 focus:ring-utsl-primary/20 outline-none transition-all appearance-none text-gray-600" required>
                                <option value="" disabled selected>Select one...</option>
                                <option value="lms-development">LMS Development</option>
                                <option value="ai-tools">AI Learning Tools</option>
                                <option value="mobile-apps">Mobile Apps</option>
                                <option value="system-integration">System Integrations</option>
                                <option value="lms-analytics">LMS Analytics</option>
                                <option value="cto-as-a-service">CTO-as-a-Service</option>
                                <option value="growth-engineering">Growth Engineering</option>
                                <option value="other">Other Inquiry</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-gray-400">
                                <i class="ph ph-caret-down"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- How can we help -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold text-gray-700">How can we help you ?</label>
                        <textarea name="message" rows="4" placeholder="Message...." class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:border-utsl-primary focus:ring-2 focus:ring-utsl-primary/20 outline-none transition-all resize-none"></textarea>
                    </div>
                    
                    <!-- CAPTCHA Mock -->
                    <div class="mt-2 flex items-center justify-between p-4 bg-gray-50 border border-gray-200 rounded-xl cursor-pointer w-full md:w-2/3" id="captcha-container">
                        <div class="flex items-center gap-3 group">
                            <div id="captcha-checkbox" class="w-7 h-7 rounded border-2 border-gray-300 bg-white flex items-center justify-center transition-colors">
                                <!-- Checkmark icon hidden by default -->
                            </div>
                            <span class="font-medium text-gray-700">I'm not a robot</span>
                        </div>
                        <div class="flex flex-col items-center justify-center opacity-70">
                            <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="reCAPTCHA" class="w-8 h-8 opacity-80">
                            <span class="text-[9px] text-gray-500 mt-1 font-medium">reCAPTCHA</span>
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full mt-2 bg-gray-800 hover:bg-gray-900 text-white font-bold py-4 rounded-xl shadow-md transition-all active:scale-[0.98] flex items-center justify-center gap-2">
                        Submit
                    </button>
                    
                    <!-- Disclaimer -->
                    <p class="text-xs text-gray-500 leading-relaxed mt-2">
                        This site is protected by reCAPTCHA and the Google <a href="#" class="text-utsl-secondary hover:underline">Privacy Policy</a> and <a href="#" class="text-utsl-secondary hover:underline">Terms of Service</a> apply.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    // Interactive script to toggle mock captcha checkbox
    document.getElementById('captcha-container').addEventListener('click', function() {
        const checkbox = document.getElementById('captcha-checkbox');
        if(checkbox.innerHTML.trim() === '') {
            checkbox.innerHTML = '<i class="ph-bold ph-check text-green-500 text-lg"></i>';
            checkbox.classList.remove('border-gray-300');
            checkbox.classList.add('border-green-500');
        } else {
            checkbox.innerHTML = '';
            checkbox.classList.add('border-gray-300');
            checkbox.classList.remove('border-green-500');
        }
    });
</script>

<?php include 'footer.php'; ?>
