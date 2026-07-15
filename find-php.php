<?php
$phpExecutable = PHP_BINARY;
$phpDir = dirname($phpExecutable);

echo "<h1>PHP is missing its configuration file!</h1>";
echo "<p>Your PHP server is running from: <b>$phpDir</b></p>";
echo "<p>Because there is no <code>php.ini</code> file there, PHP doesn't know how to load the PostgreSQL drivers.</p>";
echo "<h3>Here is exactly how to fix it in 60 seconds:</h3>";
echo "<ol>";
echo "<li>Open your File Explorer and go to this folder: <br><b style='background:#eee; padding:4px;'>$phpDir</b></li>";
echo "<li>Inside that folder, you will see a file named <b>php.ini-development</b>.</li>";
echo "<li>Right-click on <b>php.ini-development</b> and click <b>Rename</b>.</li>";
echo "<li>Rename it to just: <b>php.ini</b></li>";
echo "<li>Open your newly renamed <b>php.ini</b> in Notepad.</li>";
echo "<li>Press <b>Ctrl + F</b> and find <code>;extension_dir = \"ext\"</code> and remove the semicolon so it says <code>extension_dir = \"ext\"</code></li>";
echo "<li>Find <code>;extension=pdo_pgsql</code> and remove the semicolon.</li>";
echo "<li>Find <code>;extension=pgsql</code> and remove the semicolon.</li>";
echo "<li>Save the file.</li>";
echo "<li>Go to your terminal, press <b>Ctrl + C</b> to stop the server, and run <code>php -S localhost:8000</code> again.</li>";
echo "</ol>";
?>
