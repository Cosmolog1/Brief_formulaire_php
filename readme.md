Il faudra installer composer sur le pc pour pouvoir avoir le gestionnaire de paquets qui donnera accés au librairie pour gérer les versions et qui permettra l'envoi
des mails vers phpmailer.
Pour cela respeter les consigne indiquer :

      ⦁	https://www.ionos.fr/digitalguide/email/aspects-techniques/phpmailer/#content-installation-de-phpmailer--tape-par-tape
      ⦁	https://www.devenir-webmaster.com/tuto/outils/composer/

Une fois "composer" installer sur pc, il faut lancer dans le terminal la commande "composer init" (reponse optionnel) afin de creer le dossier "composer.json" qui
affichera les versions des librairies utilisées dans le projet.

Aprés avoi choisi les librairies necessaire à votre projet, ajouter les a composer via la commande du terminal : "composer require ...
suivi du nom de la librairies et sa version.

Elle seront disponible dans le dossier vendor qui permettera de gerer les dépendeances des librairies installées.

Dans le dossier "composer.json" nous avons la version de la librairie que nous somme pret à accepter alors que dans "composer.lock" nous avons la verison fournit
par le serveur.

Une fois installer, modifer les variables dans le test.php en fonction des données perso :

      "Inbox" dans mailtrap :

            MAIL_HOST = ""  -> adresse smtp utilisée par PHPmailer
            MAIL_USERNAME = "" -> id perso du compte mailtrap à creer
            MAIL_PASSWORD = "" - > mot de passe du compt mailtrap à creer
            MAIL_PORT = "" - > N° de port à renseignée
            MAIL_ADMIN='' -> adresse mail du destinataire
