# ExercicePHPMiniChat

Réalisation d'un exercice de mini chat simple en PHP dans le cadre d'un topic d'OpenClassrooms

3 fichiers : 

- minichat.php : Page globale avec formulaire pseudo/messages ainsi que requêtes pour récupérer les données SQL
- minichat_bdd.php : Page de connexion à la BDD
- minichat_post.php : Page de gestion d'ajout pseudo/messages à la BDD




Améliorations possibles : 

1) Retenir le pseudo de la personne pour qu'il soit affiché à l'avance après avoir envoyé un premier message
2) Modifier la gestion des dates, pour qu'il soit affiché sur un format français : j/m/a-hh/mm/ss
3) Pouvoir gérer une connexion utilisateur, pour ne plus avoir a remplir le champ 'pseudo' pour que le champ pseudo soit récupéré par l'utilisateur connecté, et envoi des messages automatiquement en son nom