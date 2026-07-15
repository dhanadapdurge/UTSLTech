<?php
$iniPath = php_ini_loaded_file();

if (!$iniPath) {
    die("<h1>Error: Could not find loaded php.ini file!</h1>");
}

echo "<h1>Attempting to fix: $iniPath</h1>";

$content = file_get_contents($iniPath);
if ($content === false) {
    die("<p style='color:red;'>Failed to read php.ini. Check permissions.</p>");
}

$changesMade = false;

// Fix pdo_pgsql
if (strpos($content, ';extension=pdo_pgsql') !== false) {
    $content = str_replace(';extension=pdo_pgsql', 'extension=pdo_pgsql', $content);
    $changesMade = true;
    echo "<p>✅ Uncommented extension=pdo_pgsql</p>";
} else if (strpos($content, 'extension=pdo_pgsql') !== false) {
    echo "<p>✔️ extension=pdo_pgsql is already uncommented.</p>";
} else {
    echo "<p style='color:orange;'>⚠️ Could not find pdo_pgsql in your php.ini</p>";
}

// Fix pgsql
if (strpos($content, ';extension=pgsql') !== false) {
    $content = str_replace(';extension=pgsql', 'extension=pgsql', $content);
    $changesMade = true;
    echo "<p>✅ Uncommented extension=pgsql</p>";
} else if (strpos($content, 'extension=pgsql') !== false) {
    echo "<p>✔️ extension=pgsql is already uncommented.</p>";
} else {
    echo "<p style='color:orange;'>⚠️ Could not find pgsql in your php.ini</p>";
}

// Enable extension_dir if commented out
if (strpos($content, ';extension_dir = "ext"') !== false) {
    $content = str_replace(';extension_dir = "ext"', 'extension_dir = "ext"', $content);
    $changesMade = true;
    echo "<p>✅ Uncommented extension_dir = \"ext\"</p>";
}

if ($changesMade) {
    $result = file_put_contents($iniPath, $content);
    if ($result) {
        echo "<h2 style='color:green;'>🎉 Successfully updated php.ini!</h2>";
        echo "<h3>CRITICAL NEXT STEP:</h3>";
        echo "<p>You MUST go to your terminal, press <b>Ctrl + C</b> to stop the server, and then run <code>php -S localhost:8000</code> again to apply the changes!</p>";
    } else {
        echo "<h2 style='color:red;'>❌ Failed to write to php.ini (Permission Denied).</h2>";
        echo "<p>You need to open Notepad as Administrator, then open <b>$iniPath</b> and manually remove the semicolons in front of <code>extension=pdo_pgsql</code> and <code>extension=pgsql</code>.</p>";
    }
} else {
    echo "<h2 style='color:blue;'>No changes were needed. (Are you sure you restarted the server?)</h2>";
}
?>
