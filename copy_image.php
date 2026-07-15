<?php
$source = 'C:\\Users\\Lenovo\\.gemini\\antigravity-ide\\brain\\806d637e-3809-45ff-8f34-5a203f9607f2\\bright_growth_dashboard_1782619825977.png';
$destDir = __DIR__ . '/assets/images';
if (!is_dir($destDir)) {
    mkdir($destDir, 0777, true);
}
$dest = $destDir . '/bright_growth_dashboard.png';
if (copy($source, $dest)) {
    echo "Copied successfully to $dest";
} else {
    echo "Failed to copy";
}
?>
