<?php 
include 'db.php'; 

$status_message = '';
$status_type = '';

// Auto-create the table if it doesn't exist
try {
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS job_applications (
            id SERIAL PRIMARY KEY,
            role VARCHAR(255) NOT NULL,
            full_name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            phone VARCHAR(50) NOT NULL,
            location VARCHAR(255) NOT NULL,
            linkedin VARCHAR(255) NOT NULL,
            portfolio VARCHAR(255),
            resume_path VARCHAR(255) NOT NULL,
            cover_letter TEXT,
            applied_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ");
} catch (PDOException $e) {
    // Ignore if already exists or other minor errors during auto-create
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($pdo)) {
    $role = $_POST['role'] ?? '';
    $fullName = $_POST['fullName'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $location = $_POST['location'] ?? '';
    $linkedin = $_POST['linkedin'] ?? '';
    $portfolio = $_POST['portfolio'] ?? '';
    $coverLetter = $_POST['coverLetter'] ?? '';
    
    // Handle File Upload
    $uploadDir = 'uploads/resumes/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    
    $resumePath = '';
    $upload_error_msg = '';
    
    if (isset($_FILES['resume'])) {
        if ($_FILES['resume']['error'] === UPLOAD_ERR_OK) {
            $fileName = time() . '_' . basename($_FILES['resume']['name']);
            $targetPath = $uploadDir . $fileName;
            
            if (move_uploaded_file($_FILES['resume']['tmp_name'], $targetPath)) {
                $resumePath = $targetPath;
            } else {
                $upload_error_msg = "Failed to move the uploaded file. Check folder permissions.";
            }
        } else {
            // Detailed error messages based on PHP's upload error codes
            switch ($_FILES['resume']['error']) {
                case UPLOAD_ERR_INI_SIZE:
                    $upload_error_msg = "The uploaded file exceeds the upload_max_filesize directive in php.ini.";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $upload_error_msg = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $upload_error_msg = "The uploaded file was only partially uploaded.";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $upload_error_msg = "No file was uploaded.";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    $upload_error_msg = "Missing a temporary folder.";
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    $upload_error_msg = "Failed to write file to disk.";
                    break;
                case UPLOAD_ERR_EXTENSION:
                    $upload_error_msg = "A PHP extension stopped the file upload.";
                    break;
                default:
                    $upload_error_msg = "Unknown upload error.";
                    break;
            }
        }
    } else {
        $upload_error_msg = "The 'resume' file input was not found in the submitted form data.";
    }

    if ($resumePath !== '') {
        try {
            $stmt = $pdo->prepare("
                INSERT INTO job_applications (role, full_name, email, phone, location, linkedin, portfolio, resume_path, cover_letter)
                VALUES (:role, :full_name, :email, :phone, :location, :linkedin, :portfolio, :resume_path, :cover_letter)
            ");
            $stmt->execute([
                ':role' => $role,
                ':full_name' => $fullName,
                ':email' => $email,
                ':phone' => $phone,
                ':location' => $location,
                ':linkedin' => $linkedin,
                ':portfolio' => $portfolio,
                ':resume_path' => $resumePath,
                ':cover_letter' => $coverLetter
            ]);
            $status_message = "Application submitted successfully! We will review your resume and get back to you.";
            $status_type = "success";
        } catch (PDOException $e) {
            $status_message = "Database error. Could not save application.";
            $status_type = "error";
        }
    } else {
        $status_message = "Error uploading resume: " . $upload_error_msg;
        $status_type = "error";
    }
}

include 'header.php'; 
?>

<!-- MAIN SPLIT SCREEN LAYOUT -->
<div class="min-h-screen flex flex-col lg:flex-row bg-[#faf9f6]">
    
    <!-- LEFT SIDE: PERKS & CULTURE (Sticky on Desktop) -->
    <div class="lg:w-5/12 bg-gradient-to-b from-utsl-dark to-slate-900 text-white relative overflow-hidden flex flex-col justify-between">
        <!-- Background Orbs -->
        <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-utsl-primary/20 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-indigo-500/20 rounded-full blur-[80px] translate-y-1/3 -translate-x-1/3 pointer-events-none"></div>

        <div class="relative z-10 p-10 md:p-16 lg:p-24 lg:pt-32 flex-grow flex flex-col justify-start">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-6">
                Join the mission to transform EdTech.
            </h1>
            <p class="text-lg text-slate-300 mb-12 leading-relaxed">
                We're looking for passionate builders, designers, and thinkers who want to make a tangible impact on how the world learns.
            </p>

            <!-- Perks List -->
            <div class="space-y-6">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                        <i class="ph ph-globe-hemisphere-west text-xl text-utsl-primary"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-white mb-1">Work from Anywhere</h4>
                        <p class="text-sm text-slate-400">100% remote team with flexible hours.</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                        <i class="ph ph-heartbeat text-xl text-utsl-primary"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-white mb-1">Comprehensive Healthcare</h4>
                        <p class="text-sm text-slate-400">Medical, dental, and vision for you and your family.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                        <i class="ph ph-books text-xl text-utsl-primary"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-white mb-1">Continuous Growth</h4>
                        <p class="text-sm text-slate-400">Annual stipends for courses and conferences.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT SIDE: APPLICATION FORM -->
    <div class="lg:w-7/12 py-16 lg:pt-20 px-6 md:px-16 lg:px-24 flex items-start justify-center">
        <div class="w-full max-w-2xl bg-white rounded-3xl shadow-xl border border-gray-100 p-8 md:p-12 relative overflow-hidden">
            
            <h2 class="text-2xl font-bold text-slate-900 mb-2">Submit your application</h2>
            <p class="text-slate-500 mb-8">Please fill out the form below. We'll get back to you within 48 hours.</p>

            <?php if ($status_message): ?>
                <div class="mb-6 p-4 rounded-xl <?php echo $status_type === 'success' ? 'bg-green-50 text-green-700 border border-green-200' : 'bg-red-50 text-red-700 border border-red-200'; ?>">
                    <?php echo htmlspecialchars($status_message); ?>
                </div>
            <?php endif; ?>

            <form action="apply.php" method="POST" enctype="multipart/form-data" class="space-y-6">
                
                <!-- Role Selection -->
                <div>
                    <label for="role" class="block text-sm font-bold text-slate-700 mb-2">Select Role *</label>
                    <div class="relative">
                        <select id="role" name="role" required class="appearance-none w-full bg-slate-50 border border-gray-200 text-slate-900 rounded-xl px-4 py-3.5 focus:outline-none focus:ring-2 focus:ring-utsl-primary/50 focus:border-utsl-primary transition-all cursor-pointer">
                            <option value="" disabled selected>Choose a position...</option>
                            <option value="Senior PHP Engineer">Senior Full-Stack PHP Engineer</option>
                            <option value="AI Specialist">AI Integration Specialist</option>
                            <option value="Product Designer">Senior Product Designer (UI/UX)</option>
                            <option value="General Application">General Application</option>
                        </select>
                        <i class="ph ph-caret-down absolute right-4 top-1/2 -translate-y-1/2 text-slate-500 pointer-events-none"></i>
                    </div>
                </div>

                <!-- Personal Info Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="fullName" class="block text-sm font-bold text-slate-700 mb-2">Full Name *</label>
                        <input type="text" id="fullName" name="fullName" required placeholder="Jane Doe" class="w-full bg-slate-50 border border-gray-200 text-slate-900 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-utsl-primary/50 focus:border-utsl-primary transition-all">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-bold text-slate-700 mb-2">Email Address *</label>
                        <input type="email" id="email" name="email" required placeholder="jane@example.com" class="w-full bg-slate-50 border border-gray-200 text-slate-900 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-utsl-primary/50 focus:border-utsl-primary transition-all">
                    </div>
                </div>

                <!-- Phone & Location -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="phone" class="block text-sm font-bold text-slate-700 mb-2">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required placeholder="+1 (555) 000-0000" class="w-full bg-slate-50 border border-gray-200 text-slate-900 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-utsl-primary/50 focus:border-utsl-primary transition-all">
                    </div>
                    <div>
                        <label for="location" class="block text-sm font-bold text-slate-700 mb-2">City / Location *</label>
                        <input type="text" id="location" name="location" required placeholder="Pune, India" class="w-full bg-slate-50 border border-gray-200 text-slate-900 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-utsl-primary/50 focus:border-utsl-primary transition-all">
                    </div>
                </div>

                <!-- Links Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="linkedin" class="block text-sm font-bold text-slate-700 mb-2">LinkedIn Profile *</label>
                        <input type="url" id="linkedin" name="linkedin" required placeholder="https://linkedin.com/in/..." class="w-full bg-slate-50 border border-gray-200 text-slate-900 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-utsl-primary/50 focus:border-utsl-primary transition-all">
                    </div>
                    <div>
                        <label for="portfolio" class="block text-sm font-bold text-slate-700 mb-2">Portfolio / GitHub</label>
                        <input type="url" id="portfolio" name="portfolio" placeholder="https://github.com/..." class="w-full bg-slate-50 border border-gray-200 text-slate-900 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-utsl-primary/50 focus:border-utsl-primary transition-all">
                    </div>
                </div>

                <!-- Resume Upload Area -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Resume / CV *</label>
                    <div class="relative border-2 border-dashed border-gray-300 rounded-2xl p-8 text-center hover:bg-slate-50 hover:border-utsl-primary transition-all group cursor-pointer" id="drop-zone">
                        <input type="file" id="resume" name="resume" required accept=".pdf,.doc,.docx" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" onchange="updateFileName(this)">
                        <div class="pointer-events-none">
                            <div id="upload-icon-container" class="w-12 h-12 mx-auto bg-gray-100 group-hover:bg-utsl-primary/10 rounded-full flex items-center justify-center mb-3 transition-colors">
                                <i id="upload-icon" class="ph ph-upload-simple text-2xl text-slate-400 group-hover:text-utsl-primary transition-colors"></i>
                            </div>
                            <p id="file-name-text" class="text-sm font-bold text-slate-700 mb-1">Click to upload or drag and drop</p>
                            <p id="file-sub-text" class="text-xs text-slate-500">PDF, DOC, or DOCX (MAX. 5MB)</p>
                        </div>
                    </div>
                </div>

                <!-- Cover Letter -->
                <div>
                    <label for="coverLetter" class="block text-sm font-bold text-slate-700 mb-2">Cover Letter / Notes</label>
                    <textarea id="coverLetter" name="coverLetter" rows="4" placeholder="Tell us why you're a great fit for this role..." class="w-full bg-slate-50 border border-gray-200 text-slate-900 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-utsl-primary/50 focus:border-utsl-primary transition-all resize-y"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit" class="w-full flex items-center justify-center gap-2 px-8 py-4 bg-utsl-primary hover:bg-utsl-primaryHover text-white font-bold rounded-xl shadow-glow hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        Submit Application <i class="ph ph-paper-plane-tilt text-xl"></i>
                    </button>
                    <p class="text-xs text-center text-slate-400 mt-4">
                        By submitting this form, you acknowledge that you have read and agree to our <a href="#" class="underline hover:text-utsl-primary">Privacy Policy</a>.
                    </p>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
    function updateFileName(input) {
        const fileNameText = document.getElementById('file-name-text');
        const fileSubText = document.getElementById('file-sub-text');
        const iconContainer = document.getElementById('upload-icon-container');
        const icon = document.getElementById('upload-icon');
        const dropZone = document.getElementById('drop-zone');

        if (input.files && input.files.length > 0) {
            const fileName = input.files[0].name;
            fileNameText.textContent = fileName;
            fileNameText.classList.add('text-utsl-primary');
            fileSubText.textContent = "File selected successfully!";
            
            icon.className = "ph-fill ph-file-pdf text-2xl text-utsl-primary";
            iconContainer.className = "w-12 h-12 mx-auto bg-utsl-primary/10 rounded-full flex items-center justify-center mb-3 transition-colors";
            dropZone.classList.add('border-utsl-primary', 'bg-slate-50');
        }
    }
</script>

<?php include 'footer.php'; ?>
