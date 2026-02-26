    <?php include 'includes/header.php'; ?>
    <?php include 'includes/sidebar.php'; ?>

    <main class="main-content fade-in">
        
        <header class="welcome-banner">
    <video autoplay muted loop id="hero-video">
        <source src="assets/videos/218955.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la vidéo.
    </video>

    <div class="video-overlay"></div>

    <div class="banner-content">
        <div class="status-indicator">
            <span class="dot"></span> Laboratoire Actif
        </div>
        <h1>Bienvenue dans <span class="highlight">LabGenius</span></h1>
        <p>Votre laboratoire virtuel de synthèse génétique — explorez, manipulez et synthétisez l'ADN en temps réel.</p>
        <div class="banner-actions">
            <a href="sequenceur.php" class="btn btn-primary">Ouvrir le Séquenceur</a>
            <a href="library.php" class="btn btn-secondary">Bibliothèque</a>
        </div>
    </div>
</header>

        <section class="stats-grid">
            <div class="stat-card">
                <span class="icon"><i class="fa-brands fa-stack-overflow"></i></span>
                <h3>Séquences en bibliothèque</h3> 
                <p class="value">5</p>
            </div>
            <div class="stat-card">
                <span class="icon"><i class="fa-solid fa-pen"></i></span>
                <h3>Bases dans l'exemple</h3>
                <p class="value">12</p>
            </div>
            <div class="stat-card">
                <span class="icon"><i class="fa-solid fa-battery-three-quarters"></i></span>
                <h3>Contenu GC</h3>
                <p class="value">42%</p>
                <small>Séquence active</small>
            </div>
            <div class="stat-card">
                <span class="icon"><i class="fa-solid fa-flask"></i></span>
                <h3>Statut du labo</h3>
                <p class="value status-active">Actif</p>
            </div>
        </section>

        <section class="quick-access">
            <div class="tool-card">
                <h4>Séquenceur ADN</h4>
                <p>Visualisez, éditez et manipulez des séquences génétiques avec des outils de mutation.</p>
            </div>
            <div class="tool-card">
                <h4>Machine de Synthèse</h4>
                <p>Lancez la synthèse d'une séquence d'ADN et observez le processus en temps réel.</p>
            </div>
            <div class="tool-card">
                <h4>Bibliothèque Génomique</h4>
                <p>Parcourez les séquences pré-enregistrées et gérez vos favoris.</p>
            </div>
        </section>
    
    </main>

    <?php include 'includes/block.php'; ?>

    <div id="transition-overlay"></div>

    <?php include 'includes/footer.php'; ?>
