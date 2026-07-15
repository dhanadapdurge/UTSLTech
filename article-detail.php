<?php 
include 'db.php'; 

$id = $_GET['id'] ?? 'microservices';
$article = null;

if (isset($pdo)) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM articles WHERE id = :id LIMIT 1");
        $stmt->execute([':id' => $id]);
        $article = $stmt->fetch();
    } catch (PDOException $e) {}
}

if (!$article) {
    header("Location: articles.php");
    exit;
}

$page_title = $article['title'] . ' | UTSL Technology';
$page_description = $article['summary'];

include 'header.php'; 
?>

<!-- ARTICLE HEADER -->
<section class="bg-slate-50 pt-24 pb-16 border-b border-gray-200">
    <div class="max-w-4xl mx-auto px-4 md:px-6">
        
        <a href="articles.php" class="inline-flex items-center gap-2 text-sm font-bold text-slate-500 hover:text-utsl-primary transition-colors mb-8">
            <i class="ph ph-arrow-left"></i> Back to Insights
        </a>

        <!-- Category & Date -->
        <div class="flex flex-wrap items-center gap-4 mb-6">
            <span class="text-xs font-bold px-3 py-1.5 <?php echo $article['category_bg']; ?> <?php echo $article['category_text']; ?> rounded-full uppercase tracking-wider shadow-sm">
                <?php echo $article['category']; ?>
            </span>
            <span class="text-sm font-semibold text-slate-500 flex items-center gap-1.5">
                <i class="ph ph-calendar-blank"></i> <?php echo $article['date']; ?>
            </span>
        </div>
        
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-black text-slate-900 mb-8 tracking-tight leading-tight">
            <?php echo $article['title']; ?>
        </h1>
        
        <div class="flex items-center gap-4 border-t border-gray-200 pt-8 mt-8">
            <div class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 font-bold text-xl">
                <?php echo substr($article['author'], 0, 1); ?>
            </div>
            <div>
                <div class="font-bold text-slate-900"><?php echo $article['author']; ?></div>
                <div class="text-sm text-slate-500">UTSL Engineering Team</div>
            </div>
        </div>

    </div>
</section>

<!-- ARTICLE CONTENT -->
<section class="py-20 bg-white">
    <div class="max-w-3xl mx-auto px-4 md:px-6">
        <!-- Newspaper/Blog Style Content -->
        <article class="prose prose-slate prose-lg max-w-none">
            <?php echo $article['content']; ?>
        </article>
        
        <!-- Share / Bottom Actions -->
        <div class="mt-16 pt-8 border-t border-gray-100 flex items-center justify-between">
            <div class="font-bold text-slate-900">Share this article</div>
            <div class="flex gap-3">
                <button class="w-10 h-10 rounded-full bg-slate-50 border border-gray-200 flex items-center justify-center text-slate-600 hover:bg-blue-50 hover:text-blue-600 hover:border-blue-200 transition-all">
                    <i class="ph ph-twitter-logo text-lg"></i>
                </button>
                <button class="w-10 h-10 rounded-full bg-slate-50 border border-gray-200 flex items-center justify-center text-slate-600 hover:bg-blue-50 hover:text-blue-800 hover:border-blue-200 transition-all">
                    <i class="ph ph-linkedin-logo text-lg"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
