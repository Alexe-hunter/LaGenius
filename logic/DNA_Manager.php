<?php
/**
 * Logique métier pour LabGenius
 * Gère la validation, la mutation, la transcription et la synthèse.
 */

// Définition des constantes globales [cite: 69]
const VALID_BASES = ['A', 'T', 'G', 'C'];
const SUCCESS_RATE_THRESHOLD = 80; // Pourcentage de chance de réussite de synthèse

/**
 * Valide une séquence d'ADN avant tout traitement. [cite: 71, 72]
 * @param string $sequence
 * @return bool|string Retourne true ou lance une exception/erreur.
 */
function validateDna($sequence) {
    if (empty(trim($sequence))) {
        return "Erreur : La séquence est vide."; [cite: 74]
    }

    $sequence = strtoupper(trim($sequence));
    $len = strlen($sequence);
    
    for ($i = 0; $i < $len; $i++) {
        if (!in_array($sequence[$i], VALID_BASES)) {
            return "Erreur : Base invalide '" . $sequence[$i] . "' détectée."; [cite: 73, 147]
        }
    }
    return true;
}

/**
 * PROCESSUS N°1 : La Transcription [cite: 130]
 * Remplace la Thymine (T) par l'Uracile (U). [cite: 133, 152]
 */
function transcribeToRna($sequence) {
    $validation = validateDna($sequence);
    if ($validation !== true) return $validation;

    return str_replace('T', 'U', strtoupper($sequence)); [cite: 134]
}

/**
 * PROCESSUS N°2 : La Synthèse (Brin complémentaire) [cite: 150]
 * A <-> T et G <-> C. [cite: 137, 141]
 */
function getComplementaryStrand($sequence) {
    $validation = validateDna($sequence);
    if ($validation !== true) return $validation;

    $sequence = strtoupper($sequence);
    $complement = "";
    $map = ['A' => 'T', 'T' => 'A', 'G' => 'C', 'C' => 'G'];

    for ($i = 0; $i < strlen($sequence); $i++) {
        $complement .= $map[$sequence[$i]];
    }
    return $complement; [cite: 169]
}

/**
 * PROCESSUS N°3 : La Mutation Aléatoire [cite: 48, 151]
 * Modifie une seule base au hasard.
 */
function mutateDna($sequence) {
    $validation = validateDna($sequence);
    if ($validation !== true) return $validation;

    $sequence = strtoupper($sequence);
    $len = strlen($sequence);
    $randomIndex = rand(0, $len - 1);
    
    $currentBase = $sequence[$randomIndex];
    // Choisir une base différente de l'actuelle
    $possibleBases = array_diff(VALID_BASES, [$currentBase]);
    $newBase = $possibleBases[array_rand($possibleBases)];

    $sequence[$randomIndex] = $newBase;
    return $sequence;
}

/**
 * Calcule le taux de réussite de la synthèse [cite: 37]
 * Logique déterministe simple basée sur la longueur.
 */
function checkSynthesisSuccess($sequence) {
    // Plus c'est long, plus c'est complexe (exemple de logique)
    $complexity = strlen($sequence) * 2;
    $chance = rand(0, 100);
    
    return ($chance > $complexity); 
}
?>