# YouCanBookMe — HTML / CSS

## Objectif
Cette version reproduit la maquette fournie en HTML et CSS uniquement.
Le JavaScript pourra être ajouté plus tard pour rendre les actions réellement interactives.

## Organisation des fichiers

- `index.html` → connexion
- `dashboard.html` → accueil / tableau de bord
- `appointments.html` → liste des rendez-vous
- `providers-empty.html` → état vide des soignants
- `add-provider.html` → formulaire d'ajout d'un soignant
- `providers.html` → liste des soignants
- `provider-detail.html` → détail d'un soignant
- `profile.html` → profil utilisateur
- `rdv-tableau.html` → tableau de suivi desktop
- `style.css` → tous les styles communs

## Commentaires dans le code

Des commentaires HTML et CSS ont été ajoutés pour expliquer :
- le rôle de chaque écran ;
- les grandes zones de chaque page ;
- les composants réutilisables ;
- la navigation desktop et mobile ;
- la partie responsive ;
- les formulaires et les listes.

## Responsive

La règle `@media(max-width:760px)` adapte l'interface aux petits écrans :
- colonnes transformées en blocs ;
- boutons adaptés à la largeur ;
- tableau rendu défilable horizontalement ;
- navigation transformée en `tab bar` fixe en bas du téléphone.

## Lancer le projet

Ouvrir simplement `index.html` dans le navigateur.

Navigation de démonstration :
Connexion → Accueil → Rendez-vous / Soignants / Profil.
