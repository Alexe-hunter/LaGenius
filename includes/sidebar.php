<nav class="sidebar">
    <div class="sidebar-logo">
        <div class="logo-image">
            <img src="assets/images/LabGenius_logo.jpeg" alt="logo LabGenius" class="logo-img">
        </div>
        <div class="logo-text">
            <h2>LabGenius</h2>
            <span>Simulateur Génétique</span>
        </div>
    </div>
    
    <hr></hr>

    <ul class="sidebar-nav">
        <li>
            <a href="index.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
                <span class="nav-icon"><i class="fa-solid fa-layer-group"></i></span> Dashboard
            </a>
        </li>
        <li>
            <a href="sequenceur.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'sequenceur.php') ? 'active' : ''; ?>">
                <span class="nav-icon"><i class="fa-brands fa-stack-overflow"></i></span> Séquenceur
            </a>
        </li>
        <li>
            <a href="synthese.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'synthese.php') ? 'active' : ''; ?>">
                <span class="nav-icon"><i class="fa-solid fa-bolt"></i></span> Synthèse
            </a>
        </li>
        <li>
            <a href="library.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'library.php') ? 'active' : ''; ?>">
                <span class="nav-icon"><i class="fa-solid fa-book"></i></span> Bibliothèque
            </a>
        </li>
    </ul>

    <div class="sidebar-footer">
        <p>GenoSoft © 2026</p>
        <p style="font-size: 0.65rem; opacity: 0.6;">Preuve de Concept (PoC)</p>
    </div>
</nav>
