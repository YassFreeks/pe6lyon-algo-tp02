<?php

function mention($note) {
    if ($note < 0 || $note > 20) {
      return false;
    } else if ($note >= 12 && $note < 14) {
      return "AB";
    } else if ($note >= 14 && $note < 16) {
      return "Bien";
    } else if ($note >= 16 && $note < 18) {
      return "TB";
    } else if ($note >= 18) {
      return "Excellent";
    }
  }
  
  $note = 16.5;
  
  $mention = mention($note);
  
  if ($mention === false) {
    echo "La note doit être comprise entre 0 et 20";
  } else {
    echo "La mention correspondant à la note $note est : $mention";
  }
  