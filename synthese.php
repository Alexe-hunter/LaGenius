    <?php include 'includes/header.php'; ?>
    <?php include 'includes/sidebar.php'; ?>


    <main class="main-content fade-in">
        
   <section>
   <header class="sequence-banner"> 

<div class="titre ">

<h1> Synthèse </h1>
<p>Simulez la synthèse chimique d'une séquence d'ADN.</p>

</div>
</header>
<div class="sequence-saisie">

    <label for="sequence-input">Séquence à synthétiser</label>
    <input type="text" id="sequence-input" placeholder="Ex: ATGCGTAAATGG" value="ATGCGTAAATGG">
    <div class="button-group">
        <button id="analyze-btn" class="btn btn-primary">Lancer la Synthèse</button>
        <button id="reset-btn" class="btn btn-secondary">Réinitialiser</button>
    </div>
</div>
</section>


 

<!-- Section Progression de la synthèse -->
<section class="synthesis-progress" id="synthesis-progress" style="display: none;">
    <h3>Progression de la synthèse</h3>
    <div class="progress-bar-container">
        <div class="progress-bar" id="progress-bar">
            <div class="progress-fill" id="progress-fill"></div>
        </div>
        <div class="progress-percentage" id="progress-percentage">0%</div>
    </div>
    <div class="progress-steps">
        <div class="step" id="step-denaturation">
            <div class="step-icon">🧬</div>
            <div class="step-label">Dénaturation</div>
        </div>
        <div class="step" id="step-elongation">
            <div class="step-icon">⚗️</div>
            <div class="step-label">Élongation</div>
        </div>
        <div class="step" id="step-verification">
            <div class="step-icon">🔍</div>
            <div class="step-label">Vérification</div>
        </div>
        <div class="step" id="step-finalization">
            <div class="step-icon">✅</div>
            <div class="step-label">Finalisation</div>
        </div>
    </div>
</section>

<!-- Section Synthèse Réussie -->
<section class="synthesis-success" id="synthesis-success" style="display: none;">
    <div class="success-box">
        <div class="success-icon">✅</div>
        <h3>Synthèse Réussie !</h3>
        <p>Séquence de <span id="success-bases">12</span> bases synthétisée avec un taux de confiance de <span id="success-confidence">82</span>%.</p>
        
        <div class="success-stats">
            <div class="stat-card">
                <div class="stat-icon">📊</div>
                <div class="stat-info">
                    <div class="stat-label">Taux de réussite</div>
                    <div class="stat-value" id="success-rate">82%</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">⏱️</div>
                <div class="stat-info">
                    <div class="stat-label">Durée</div>
                    <div class="stat-value" id="success-duration">3.8s</div>
                </div>
            </div>
        </div>
    </div>
</section>

    </main>
    <script src="assets/script/synthese.js"></script>

    <!-- c4est une layout pour le blocage du format mobile -->
    <?php include 'includes/block.php'; ?>

     <?php include 'includes/footer.php'; ?>
