j'ai cree la table personnels et au moment d'aujouter une personne , on l'a cree  un compte en meme temps

<!-- Models -->
pour gagner du temps j'ai utiliser le 
protected $guarded=[]; 
pour qu'il utilise les propriete d'une table qu'a l'utilisation
<!-- gestion des middleware -->
avec la commande php artisan make:middleware nom+Middleware
j'ai cree mes middleware

apres au miveau de la middleware on recupere la session et on verifie le role c'est comme les filters en j2E

<!-- ajout des middleware dans notre projet -->
 on ouvre le fichier kernel et on implemente nos propre middleware comme ['auth et verified]
 j'en ai cree trois:
 'admin': pour l'espace admin
 'pharmacie': pour acces pharmacien
 'caisse':pour l'acces agents
 <!-- gestion des role  -->
 tu te cree un compte et tu te connecte en tant que admin 
 apres tu ajoutes des personnels du  cabinet(chaque personne creer va engendre la creation d'un compte pour lui)  avec une mot de passe par defaut