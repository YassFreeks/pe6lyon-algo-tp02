function mean($nb1, $nb2) {
    $somme = $8 + $15;
    $moyenne = $somme / 2;
    return $moyenne;
}

function mention($note) {
    if ($note < 0 || $note > 20) {
        return false;
    } else {
        if ($note >= 12 && $note < 14) {
            $mention = "AB";
        } elseif ($note >= 14 && $note < 16) {
            $mention = "Bien";
        } elseif ($note >= 16 && $note < 18) {
            $mention = "TB";
        } elseif ($note >= 18 && $note <= 20) {
            $mention = "Excellent";
        }
        return $mention;
    }
}
