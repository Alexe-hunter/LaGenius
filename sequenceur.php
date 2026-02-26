    <?php include 'includes/header.php'; ?>
    <?php include 'includes/sidebar.php'; ?>

    <main class="main-content fade-in"> 

    <header class="sequence-banner"> 

<div class="titre ">

<h1> Séquenceur ADN</h1>
<p>Visualisez et analysez les séquences d'ADN</p>

</div>
</header>


<section>
<div class="sequence-saisie">

    <label for="sequence-input">Entrez une séquence d'ADN :</label>
    <input type="text" id="sequence-input" placeholder="Ex: ATCGGCTA">
    <button id="analyze-btn" class="btn btn-primary2">Analyser</button>
</div>
</section>


 

<section class="active-seq">
        <div class="sequence-header">
            <h3>Séquence Active</h3>
            <div class="sequence-meta" id="sequence-meta">
                <span id="base-count">12 bases</span>
                <span class="dot">•</span>
                <span id="gc-percent">GC: 42%</span>
                <span class="dot">•</span>
                <span id="codon-display">ATG-CGT-AAA-TGC</span>
                <span id="aa-display" class="aa-output">Met-Arg-Lys-Cys</span>
            </div>
        </div>

        <div class="bases-container" id="bases-container">
            <!-- Les bases seront générées par JS -->
        </div>

        <div class="aa-container" id="aa-container">
            <!-- Les acides aminés seront générés par JS -->
        </div>

        <div class="sequence-actions">
            <button class="btn btn-action" onclick="brinComplementaire()">⇄ Brin Complémentaire</button>
            <button class="btn btn-action" onclick="transcrire()">⧉ Transcription (ADN → ARNm)</button>
            <button class="btn btn-action btn-mutation" onclick="mutationPonctuelle()">⚡ Mutation Ponctuelle</button>
            <button class="btn btn-action" onclick="reinitialiser()">↺ Réinitialiser</button>
            <button class="btn btn-action btn-save" onclick="sauvegarderSequenceActuelle()">💾 Sauvegarder</button>
        </div>

        <!-- Section pour l'affichage de l'ARNm -->
        <div class="result-box" id="arnm-display" style="display: none;">
            <h3>ARN Messager (ARNm)</h3>
            <div class="bases-container" id="arnm-bases-container">
                <!-- Les bases ARNm seront générées par JS -->
            </div>
            <div class="sequence-meta">
                <span id="arnm-codons-display">AUG-CGA-AAA-UGC</span>
            </div>
        </div>

        <!-- Section pour l'affichage du brin complémentaire -->
        <div class="result-box" id="complement-display" style="display: none;">
            <h3>Brin Complémentaire</h3>
            <div class="bases-container" id="complement-bases-container">
                <!-- Les bases complémentaires seront générées par JS -->
            </div>
            <div class="sequence-meta">
                <span id="complement-codons-display">TAC-GCT-TTT-ACG</span>
            </div>
        </div>

        <!-- Section pour l'historique des mutations -->
        <div class="result-box" id="mutation-history" style="display: none;">
            <h3>Historique des Mutations</h3>
            <div class="history-list" id="history-list">
                <!-- Les entrées d'historique seront générées par JS -->
            </div>
        </div>
    </section>




    </main>
        
    <!-- c4est une layout pour le blocage du format mobile -->
    <?php include 'includes/block.php'; ?>

     <?php include 'includes/footer.php'; ?>