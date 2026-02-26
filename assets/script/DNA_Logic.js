// dna_logic.js

// Constantes pour les bases valides
const VALID_BASES = ['A', 'T', 'G', 'C'];

/**
 * Valide si une séquence d'ADN est correcte.
 * @param {string} sequence - La chaîne d'ADN à tester.
 * @returns {boolean} - True si valide, lance une erreur sinon.
 */
function validateSequence(sequence) {
    if (!sequence || sequence.trim() === "") {
        throw new Error("Veuillez entrer une séquence."); // Gestion du cas limite [cite: 74, 163]
    }
    
    const upperSeq = sequence.toUpperCase();
    for (let char of upperSeq) {
        if (!VALID_BASES.includes(char)) {
            throw new Error(`Caractère invalide détecté : ${char}. Seuls A, T, G, C sont autorisés.`); // Message d'erreur clair [cite: 72, 73]
        }
    }
    return true;
}

/**
 * Génère le brin complémentaire (A <-> T, C <-> G) [cite: 137-140]
 */
function getComplementaryStrand(sequence) {
    validateSequence(sequence);
    const complements = { 'A': 'T', 'T': 'A', 'G': 'C', 'C': 'G' };
    return sequence.toUpperCase().split('').map(base => complements[base]).join('');
}

/**
 * Transcrit l'ADN en ARNm (Remplace T par U) [cite: 131, 133]
 */
function transcribeToRNA(sequence) {
    validateSequence(sequence);
    // Règle logique : Le processus remplace le T par un U [cite: 133]
    return sequence.toUpperCase().replace(/T/g, 'U'); 
}

/**
 * Simule une mutation : modifie aléatoirement une lettre de la séquence [cite: 48, 151]
 */
function mutateSequence(sequence) {
    validateSequence(sequence);
    let seqArray = sequence.toUpperCase().split('');
    
    // Choisir un index aléatoire à muter
    const randomIndex = Math.floor(Math.random() * seqArray.length);
    const currentBase = seqArray[randomIndex];
    
    // Trouver une nouvelle base différente de l'actuelle
    let possibleBases = VALID_BASES.filter(base => base !== currentBase);
    const newBase = possibleBases[Math.floor(Math.random() * possibleBases.length)];
    
    seqArray[randomIndex] = newBase;
    return seqArray.join('');
}

// Exemple d'utilisation dans app.js (à placer dans un bloc try...catch [cite: 76])
/*
try {
    let adn = "ATGC";
    console.log("Complémentaire :", getComplementaryStrand(adn)); // TACG [cite: 169]
    console.log("ARN :", transcribeToRNA(adn)); // AUGC [cite: 134]
    console.log("Mutation :", mutateSequence(adn)); // ex: AAGC
} catch (error) {
    alert(error.message); // Affichage de l'erreur
}
*/