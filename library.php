<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<main class="main-content">
    <header class="page-header">
        <div class="header-title">
            <h1>Bibliothèque <span class="highlight">Génomique</span></h1>
        </div>
        <p>Explorez les séquences pré-enregistrées et gérez vos favoris.</p>
    </header>

    <div class="search-container">
        <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
        <input type="text" id="library-search" placeholder="Rechercher par nom ou description (ex: GFP, Fluorescence...)">
    </div>

    <div class="library-list" id="library-list">
        
        <article class="genome-card" data-id="gfp">
            <div class="card-info">
                <h3>GFP - Protéine Fluorescente Verte</h3>
                <p>Gène codant pour la protéine fluorescente verte, extraite de la méduse Aequorea victoria.</p>
                <div class="card-meta">
                    <span>54 bases</span> • <span>GC: 65%</span> • <span>PoC 2026</span>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn btn-secondary btn-sm favorite-btn" title="Ajouter aux favoris">
                    <i class="fa-solid fa-bookmark"></i>
                </button>
                <button class="btn btn-primary btn-sm load-btn" data-seq="ATGCGTAAATGCGGTAAATTT" title="Envoyer au séquenceur">
                    <i class="fa-solid fa-play"></i>charger
                </button>
            </div>
        </article>

        <article class="genome-card" data-id="ampicilline">
            <div class="card-info">
                <h3>Résistance à l'Ampicilline</h3>
                <p>Séquence permettant aux bactéries de survivre en présence d'ampicilline (Beta-lactamase).</p>
                <div class="card-meta">
                    <span>67 bases</span> • <span>GC: 42%</span> • <span>PoC 2026</span>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn btn-secondary btn-sm favorite-btn">
                    <i class="fa-solid fa-bookmark"></i>
                </button>
                <button class="btn btn-primary btn-sm load-btn" data-seq="GCTAGCTAGCTAGCTAGCTAGCTAGCTAGCTAGCTAGC">
                    <i class="fa-solid fa-play"></i>charger
                </button>
            </div>
        </article>

        <article class="genome-card" data-id="insuline">
            <div class="card-info">
                <h3>Pré-proinsuline Humaine</h3>
                <p>Segment initial de la séquence codante pour l'insuline chez l'humain.</p>
                <div class="card-meta">
                    <span>45 bases</span> • <span>GC: 58%</span> • <span>PoC 2026</span>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn btn-secondary btn-sm favorite-btn">
                    <i class="fa-solid fa-bookmark"></i>
                </button>
                <button class="btn btn-primary btn-sm load-btn" data-seq="ATGGCCCTGTGGATGCGCCTCCTGCCCCTGCTGGCCCTGCTGGCCCTC">
                    <i class="fa-solid fa-play"></i>charger
                </button>
            </div>
        </article>

    </div>
</main>

<?php include 'includes/block.php'; ?>
<?php include 'includes/footer.php'; ?>