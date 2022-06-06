# Pakin-Entelijan
 Parking qui compte le temps et émet une facture.

# Participants / Rôles
 - Angelo Dimitrov CHARLEMAGNE (Développeur service Web)
 - Roberton C. PHILISTIN (Développeur arduino)
 - Jean Paul GENISMA (Montage arduino)
 - Kesner SILIEN (Montage arduino)
 
# Scénario 
 * Un parking entièrement automatisé, calcule le temps de garage de différents véhicules et émet une facture qui après règlement ouvre la barrière de sortie (La gestion du paiement ne sera pas pris en compte dans ce projet). A l'entrée du parking, le conducteur reçoit une carte avec une puce RFID d'un distributeur et déclenche un compteur. Quand il se gare, un capteur de proximité placé à chaque place de parking indique que cette place n'est plus disponible. Le système associe le véhicule au compteur déclenché par le capteur de proximité. A la récupération du véhicule. L'éloignement du véhicule du capteur de proximité arrête le compteur. A la sortie, le conducteur dépose la carte avec la puce RFID dans une machine qui affiche les détails pour le véhicule en question (temps de garrage, prix, ...) et ouvre la barrière.


# Matériel 
 - Capteurs: capteur RFID , capteur de proximité 
 - Actionneurs : LEDs rouge et vert, Servo moteur (pour ouvrir la barrière de sortie)
 - Puces RFID,
 - 

# Service Web
 - Fournir la durée du garage 
 - Fournir le montant du parking 

# Interface Web
 ## Interface Web pour le conducteur 
   - Consulter la facture 
   - Payer la facture 
   - Affichage de places de parking disponibles (libres)

## Architecture logicielle
* Client/Serveur 2 tiers
