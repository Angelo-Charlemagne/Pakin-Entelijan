#include <Wire.h>
#include "RTClib.h" 

// RTC : Real Time Clock. 
// Le module RTC (Real Time Clock)permet d'avoir la date et l'heure du système
// Le module RTC est comme une horloge, qui conserve l’heure grâce à une pile. 
// Elle communique avec la carte Arduino grâce au protocole I2C. 
// Nous n’avons donc pas besoin de connexion à internet.

RTC_DS3231 rtc;

char jour_semaine[7][12] = {"Dimanche","Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi" };

int trig = 12; // Brancher triger du hc-sr04  a la broche 12 de l'arduino 
int echo = 11; // Brancher echo du hc-sr04  a la broche 11 de l'arduino 
long lecture_echo;  // declaration d'une variable appellee lecture_echo
long distance;  // declaration d'une variable appellee distance 

int compteur=0;
int tempslibre=0;
int dureeparking;
double montantapayer=0;

void setup() 
{ 
  pinMode(7, OUTPUT); //definit la LED rouge a la broche  7 comme sortie.
  digitalWrite(7, LOW); // désactive la broche numérique 7
  pinMode(8, OUTPUT); //definit la LED vert a la broche 8 comme sortie.
  digitalWrite(7, LOW); // désactive la broche numérique 8 
  pinMode(trig, OUTPUT); // definit trig comme sortie.
  digitalWrite(trig, LOW); // désactive trig 
  pinMode(echo, INPUT); // definit echo comme entre.
  Serial.begin(9600); 
  
  // Pour le module RTC
  Serial.begin(9600);
  delay(1000);
  if (! rtc.begin()) {
    Serial.println("RTC introuvable !");
    while (1);
  }
  if (rtc.lostPower()) {
    Serial.println("Veuillez regler l'heure sur le module RTC!");
  
    // Decommenter les lignes ci-dessous pour régler la date et l'heure.
    // La ligne ci-dessous regle la date et l'heure du momment de la compilation
    rtc.adjust(DateTime(F(__DATE__), F(__TIME__)));
  
    // La ligne ci-dessous regle la date et l'heure avec des valeurs explicites
    // Par exemplepour le 27 janvier 2017 à 12:56 :
    // rtc.adjust(DateTime(2017, 1, 27, 12, 56, 0));
  }
}

void loop() 
{ 
  // Affichage des donnée provenant du module RTC
  DateTime now = rtc.now();
    
    Serial.println("Date & Heure: ");
    Serial.print(now.day(), DEC);
    Serial.print('/');
    Serial.print(now.month(), DEC);
    Serial.print('/');
    Serial.print(now.year(), DEC);
    Serial.print(" (");
    Serial.print(jour_semaine[now.dayOfTheWeek()]);
    Serial.print(") ");
    Serial.print(now.hour(), DEC);
    Serial.print(':');
    Serial.print(now.minute(), DEC);
    Serial.print(':');
    Serial.print(now.second(), DEC);
    Serial.println();
 
    delay(1000);
  

  //Pour le capteur a ultrason
  digitalWrite(trig, HIGH); // active trig
  delayMicroseconds(10);  // dure 10 micro secondes
  digitalWrite(trig, LOW); // désactive trig 
  lecture_echo = pulseIn(echo, HIGH); // Lit l'impulsion trig sur la broche 12
  distance = lecture_echo / 58; //  calcul distance
  Serial.print(" la distance par rapport au capteur est : ");  // afficher la distance
  Serial.print(distance);
  Serial.println('cm'); // afficher la distance en cm
 
  if(distance <= 4){ // condidion si distance inferieur ou egal a 4 cm. Il y a une voiture garée à la place 
    digitalWrite (7,HIGH);  // LED rouge allumé 
    digitalWrite (8,LOW); // LED vert éteint 
    Serial.println("Compteur en marche");
    compteur++;
    Serial.print("La durée du parking est : ");
    Serial.print(compteur);
    Serial.println(" secondes");
  }
  else { // Dans le cas contraire la place est libre
    digitalWrite (8,HIGH);  // LED vert allumé
    digitalWrite (7,LOW); // LED rouge éteint
    Serial.println("Compteur à l'arret");
    tempslibre++;
    Serial.print("Temps libre : ");
    Serial.print(tempslibre);
    Serial.println(" secondes");
  }
  
  montantapayer=15*compteur;
  Serial.print("Il fau payer : ");
  Serial.print(montantapayer);
  Serial.println(" gourdes");
}
