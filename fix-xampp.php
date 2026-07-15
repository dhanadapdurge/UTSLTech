<?php
$iniPath = 'C:\\xampp\\php\\php.ini';

if (!file_exists($iniPath)) {
    die("<h1 style='color:red;'>Could not find $iniPath!</h1>");
}

$content = file_get_contents($iniPath);
if ($content === false) {
    die("<h1 style='color:red;'>Could not read $iniPath. You might need Administrator permissions.</h1>");
}

$changes = 0;

// Uncomment extension=pdo_pgsql
if (strpos($content, ';extension=pdo_pgsql') !== false) {
    $content = str_replace(';extension=pdo_pgsql', 'extension=pdo_pgsql', $content);
    $changes++;
    echo "<p>✅ Enabled pdo_pgsql</p>";
} else if (strpos($content, 'extension=pdo_pgsql') !== false) {
    echo "<p>✔️ pdo_pgsql is already enabled</p>";
}

// Uncomment extension=pgsql
if (strpos($content, ';extension=pgsql') !== false) {
    $content = str_replace(';extension=pgsql', 'extension=pgsql', $content);
    $changes++;
    echo "<p>✅ Enabled pgsql</p>";
} else if (strpos($content, 'extension=pgsql') !== false) {
    echo "<p>✔️ pgsql is already enabled</p>";
}

if ($changes > 0) {
    $result = file_put_contents($iniPath, $content);
    if ($result) {
        echo "<h2 style='color:green;'>🎉 Successfully fixed XAMPP php.ini!</h2>";
        echo "<h3>LAST STEP: You MUST restart your terminal server.</h3>";
        echo "<p>Go to your terminal, press <b>Ctrl + C</b>, and run <code>C:\\xampp\\php\\php.exe -S localhost:8000</code> again.</p>";
    } else {
        echo "<h2 style='color:red;'>❌ Permission Denied when saving.</h2>";
        echo "<p>Please open Notepad as Administrator, open <code>C:\\xampp\\php\\php.ini</code>, and manually remove the semicolons before <code>extension=pdo_pgsql</code> and <code>extension=pgsql</code>.</p>";
    }
} else {
    echo "<h2 style='color:blue;'>No changes needed. Extensions are already enabled in XAMPP!</h2>";
    echo "<h3>If you are still getting an error, make sure you restarted the terminal server.</h3>";
}
?>
