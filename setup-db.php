<?php
require_once 'db.php';
require_once 'articles-data.php';

echo "<h1>Database Setup</h1>";

try {
    // 1. Run schema.sql
    $schema = file_get_contents('schema.sql');
    if ($schema === false) {
        throw new Exception("Could not read schema.sql");
    }
    
    $pdo->exec($schema);
    echo "<p>✅ Schema executed successfully. Tables created.</p>";

    // 2. Insert initial articles
    $stmt = $pdo->prepare("
        INSERT INTO articles (id, title, summary, content, author, date, category, category_bg, category_text)
        VALUES (:id, :title, :summary, :content, :author, :date, :category, :category_bg, :category_text)
    ");

    $count = 0;
    foreach ($articles as $id => $article) {
        $stmt->execute([
            ':id' => $article['id'],
            ':title' => $article['title'],
            ':summary' => $article['summary'],
            ':content' => $article['content'],
            ':author' => $article['author'],
            ':date' => $article['date'],
            ':category' => $article['category'],
            ':category_bg' => $article['category_bg'],
            ':category_text' => $article['category_text']
        ]);
        $count++;
    }

    echo "<p>✅ Successfully inserted $count articles into the database.</p>";
    
    // 3. Create a default admin user
    $adminPassword = password_hash('admin123', PASSWORD_DEFAULT);
    $stmtUser = $pdo->prepare("
        INSERT INTO users (name, email, password_hash)
        VALUES (:name, :email, :password_hash)
    ");
    $stmtUser->execute([
        ':name' => 'Admin User',
        ':email' => 'admin@utsltech.com',
        ':password_hash' => $adminPassword
    ]);
    
    echo "<p>✅ Successfully created default admin user (admin@utsltech.com / admin123).</p>";

} catch (Exception $e) {
    echo "<p style='color:red;'>❌ Setup failed: " . $e->getMessage() . "</p>";
}

echo "<p><a href='index.php'>Return to Homepage</a></p>";
?>
