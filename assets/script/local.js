// Debug: Vérifier les séquences sauvegardées au chargement
console.log('Library page loaded - checking saved sequences...');
const savedSequences = JSON.parse(localStorage.getItem('labgenius-sauvegardes')) || [];
console.log('Found saved sequences:', savedSequences.length, savedSequences);

// Forcer l'affichage des séquences sauvegardées si elles existent
if (savedSequences.length > 0) {
    console.log('Displaying saved sequences...');
    // Appeler la fonction d'affichage si elle existe
    if (typeof afficherSequencesSauvegardees === 'function') {
        afficherSequencesSauvegardees();
    } else {
        console.error('Function afficherSequencesSauvegardees not found');
    }
}

// Fonction de test pour créer une séquence sauvegardée
function creerSequenceTest() {
    console.log('Creating test sequence...');
    
    // Créer une séquence de test
    const testSequence = {
        id: Date.now().toString(),
        nom: 'Séquence Test - ADN Luciferase',
        sequence: 'ATGGCTAGCTAGCTAGCTAGCTAGCTAGCTAGCTAGCTAG',
        type: 'sequenceur',
        date: new Date().toLocaleDateString('fr-FR'),
        bases: 42,
        gc: 52,
        acidesAmines: 'Met-Ala-Arg-Stop-Arg-Stop-Arg-Stop-Arg-Stop-Arg',
        timestamp: Date.now()
    };
    
    // Récupérer les sauvegardes existantes
    let sauvegardes = JSON.parse(localStorage.getItem('labgenius-sauvegardes')) || [];
    sauvegardes.unshift(testSequence);
    
    // Limiter à 20 sauvegardes
    if (sauvegardes.length > 20) {
        sauvegardes.splice(20);
    }
    
    // Sauvegarder
    localStorage.setItem('labgenius-sauvegardes', JSON.stringify(sauvegardes));
    
    console.log('Test sequence created and saved');
    
    // Afficher un feedback
    const fb = document.createElement('div');
    fb.style.position = 'fixed';
    fb.style.bottom = '20px';
    fb.style.right = '20px';
    fb.style.padding = '12px 20px';
    fb.style.borderRadius = '8px';
    fb.style.background = '#00f2c3';
    fb.style.color = '#0a0e14';
    fb.style.zIndex = '1000';
    fb.style.fontWeight = 'bold';
    fb.innerText = 'Séquence de test créée avec succès !';
    document.body.appendChild(fb);
    setTimeout(() => fb.remove(), 2500);
    
    // Recharger la page pour voir les séquences
    setTimeout(() => {
        window.location.reload();
    }, 1000);
}