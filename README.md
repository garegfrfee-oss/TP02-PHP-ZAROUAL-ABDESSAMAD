# TP 02 — PHP (Programmation Web 2)

- **Nom :** ZAROUAL
- **Prénom :** ABDESSAMAD
- **Groupe :** Groupe 4
- **Matière :** Programmation Web 2
- **Année Universitaire :** 2026/2027

## Description
Ce dépôt contient les solutions pour les 10 exercices du TP 02 PHP dans le cadre du module Programmation Web 2.

## Structure du projet
- `index.php` : Page d'accueil contenant la liste et les liens vers tous les exercices.
- `ex01.php` à `ex09.php` : Exercices du TP.
- `ex10_get.html` / `ex10_get.php` : Exercice 10 avec méthode GET.
- `ex10_post.html` / `ex10_post.php` : Exercice 10 avec méthode POST.

# TP02 - PHP Basics

## Exercice 2 : Réponses explicatives

### 1. Pourquoi `$note` et `$Note` sont différentes ?
En PHP, les noms de variables sont **sensibles à la casse** (case-sensitive). Par conséquent, `$note` (avec un 'n' minuscule) et `$Note` (avec un 'N' majuscule) désignent deux emplacements mémoires distincts et contiennent des valeurs différentes (12 et 16).

### 2. Identification des noms de variables valides
Selon les règles de syntaxe PHP :
- **Valides :** `$a`, `$_a`, `$a_a`, `$AAA`, `$a1` (commencent par une lettre ou un tiré bas `_` et ne contiennent que des caractères alphanumériques et `_`).
- **Invalides :** 
  - `$a!` : contient un caractère spécial interdit (`!`).
  - `$1a` : commence par un chiffre juste après le symbole `$`, ce qui est interdit par la syntaxe PHP.

  ## Exercice 4 : Réponses explicatives

### Différence d'affichage de `false` entre `echo` et `var_dump()`
- **`echo`** convertit la valeur booléenne en chaîne de caractères avant de l'afficher. Ainsi, `true` est converti en la chaîne `"1"`, tandis que `false` est converti en une chaîne vide `""` (ce qui explique pourquoi rien n'apparaît à l'écran).
- **`var_dump()`** est une fonction de débogage qui affiche la structure complète de la variable, y compris son type exact et sa valeur brute sans conversion automatique. Il affiche donc explicitement `bool(false)`.