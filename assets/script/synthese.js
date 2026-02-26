/**
 * LabGenius - Script pour la page de synthèse
 * Gère la barre de progression et l'animation de synthèse
 */

document.addEventListener('DOMContentLoaded', () => {
    console.log("LabGenius : Page de synthèse prête.");

    // Gestion du bouton "Lancer la Synthèse"
    const analyzeBtn = document.getElementById('analyze-btn');
    if (analyzeBtn) {
        analyzeBtn.addEventListener('click', (e) => {
            e.preventDefault();
            lancerSynthese();
        });
    }

    // Gestion du bouton "Réinitialiser"
    const resetBtn = document.getElementById('reset-btn');
    if (resetBtn) {
        resetBtn.addEventListener('click', (e) => {
            e.preventDefault();
            reinitialiserSynthese();
        });
    }
});

let syntheseEnCours = false;
let startTime = 0;

function lancerSynthese() {
    if (syntheseEnCours) return;
    
    const sequenceInput = document.getElementById('sequence-input');
    const sequence = sequenceInput.value.trim().toUpperCase().replace(/[^ATGC]/g, '');
    
    if (sequence === '') {
        alert('Veuillez entrer une séquence valide');
        return;
    }
    
    syntheseEnCours = true;
    startTime = Date.now();
    
    // Cacher la section de succès si elle est visible
    document.getElementById('synthesis-success').style.display = 'none';
    
    // Afficher la barre de progression
    const progressSection = document.getElementById('synthesis-progress');
    progressSection.style.display = 'block';
    
    // Désactiver le bouton de synthèse
    document.getElementById('analyze-btn').disabled = true;
    
    // Lancer l'animation de progression
    demarrerProgression(sequence);
}

function demarrerProgression(sequence) {
    const progressFill = document.getElementById('progress-fill');
    const progressPercentage = document.getElementById('progress-percentage');
    const steps = ['step-denaturation', 'step-elongation', 'step-verification', 'step-finalization'];
    const stepDurations = [1000, 1500, 1200, 800]; // Durées en ms
    const totalDuration = stepDurations.reduce((a, b) => a + b, 0);
    
    let currentProgress = 0;
    let currentStep = 0;
    let elapsed = 0;
    
    // Réinitialiser les étapes
    steps.forEach(stepId => {
        document.getElementById(stepId).classList.remove('active');
    });
    
    const progressInterval = setInterval(() => {
        elapsed += 50;
        
        // Calculer le progrès total
        let stepProgress = 0;
        let totalStepTime = 0;
        
        for (let i = 0; i < steps.length; i++) {
            if (i < currentStep) {
                stepProgress += 100;
            } else if (i === currentStep) {
                const stepElapsed = elapsed - totalStepTime;
                stepProgress += (stepElapsed / stepDurations[i]) * 100;
                break;
            }
            totalStepTime += stepDurations[i];
        }
        
        currentProgress = Math.min((elapsed / totalDuration) * 100, 100);
        
        // Mettre à jour la barre de progression
        progressFill.style.width = currentProgress + '%';
        progressPercentage.textContent = Math.round(currentProgress) + '%';
        
        // Activer les étapes au bon moment
        let stepStartTime = 0;
        for (let i = 0; i < steps.length; i++) {
            if (elapsed >= stepStartTime && !document.getElementById(steps[i]).classList.contains('active')) {
                document.getElementById(steps[i]).classList.add('active');
                currentStep = i;
            }
            stepStartTime += stepDurations[i];
        }
        
        // Terminer la progression
        if (elapsed >= totalDuration) {
            clearInterval(progressInterval);
            terminerSynthese(sequence);
        }
    }, 50);
}

function terminerSynthese(sequence) {
    const duration = ((Date.now() - startTime) / 1000).toFixed(1);
    const confidence = Math.floor(Math.random() * 15) + 75; // 75-89%
    
    // Mettre à jour les informations de succès
    document.getElementById('success-bases').textContent = sequence.length;
    document.getElementById('success-confidence').textContent = confidence;
    document.getElementById('success-rate').textContent = confidence + '%';
    document.getElementById('success-duration').textContent = duration + 's';
    
    // Cacher la progression et afficher le succès
    setTimeout(() => {
        document.getElementById('synthesis-progress').style.display = 'none';
        document.getElementById('synthesis-success').style.display = 'block';
        
        // Réactiver le bouton
        document.getElementById('analyze-btn').disabled = false;
        syntheseEnCours = false;
    }, 500);
}

function reinitialiserSynthese() {
    // Cacher toutes les sections
    document.getElementById('synthesis-progress').style.display = 'none';
    document.getElementById('synthesis-success').style.display = 'none';
    
    // Réinitialiser la barre de progression
    document.getElementById('progress-fill').style.width = '0%';
    document.getElementById('progress-percentage').textContent = '0%';
    
    // Désactiver toutes les étapes
    const steps = ['step-denaturation', 'step-elongation', 'step-verification', 'step-finalization'];
    steps.forEach(stepId => {
        document.getElementById(stepId).classList.remove('active');
    });
    
    // Réactiver le bouton
    document.getElementById('analyze-btn').disabled = false;
    syntheseEnCours = false;
}
