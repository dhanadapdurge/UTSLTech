<?php 
$page_title = 'Latest Insights | UTSL Technology';
$page_description = 'Engineering perspectives on the future of learning.';
include 'db.php'; 
include 'header.php'; 

$articles = [];
if (isset($pdo)) {
    try {
        $stmt = $pdo->query("SELECT * FROM articles ORDER BY created_at ASC");
        $articles = $stmt->fetchAll();
    } catch (PDOException $e) {
        // Fallback or log error
    }
}
?>

<!-- HERO SECTION -->
<section class="bg-slate-50 pt-24 pb-16 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 md:px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-black text-utsl-dark mb-6 tracking-tight">Latest Insights</h1>
        <p class="text-xl text-slate-500 max-w-2xl mx-auto leading-relaxed">
            Engineering perspectives, technical deep dives, and architectural strategies for the future of EdTech.
        </p>
    </div>
</section>

<!-- ARTICLES GRID -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <?php foreach ($articles as $article): ?>
            <a href="article-detail.php?id=<?php echo $article['id']; ?>" class="group flex flex-col h-full border border-gray-100 rounded-3xl p-6 hover:shadow-premium hover:-translate-y-1 transition-all duration-300">
                <div class="flex items-center justify-between gap-2 mb-4">
                    <span class="text-[10px] font-bold px-2 py-1 <?php echo $article['category_bg']; ?> <?php echo $article['category_text']; ?> rounded uppercase tracking-wider">
                        <?php echo $article['category']; ?>
                    </span>
                    <span class="text-xs font-semibold text-slate-400"><?php echo $article['date']; ?></span>
                </div>
                
                <h3 class="text-xl font-bold text-utsl-dark mb-3 group-hover:text-utsl-primary transition-colors">
                    <?php echo $article['title']; ?>
                </h3>
                
                <p class="text-slate-500 text-sm mb-6 flex-grow">
                    <?php echo $article['summary']; ?>
                </p>
                
                <div class="flex items-center justify-between border-t border-gray-100 pt-4 mt-auto">
                    <span class="text-sm font-bold text-utsl-primary">Read Article</span>
                    <div class="w-8 h-8 rounded-full <?php echo $article['category_bg']; ?> flex items-center justify-center group-hover:bg-utsl-primary group-hover:text-white <?php echo $article['category_text']; ?> transition-colors">
                        <i class="ph ph-arrow-right"></i>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
