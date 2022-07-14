#include <SPI.h>
#include <MFRC522.h>

// ecrire ici le code UID du bon badge
const byte bonUID[4] = {99, 113, 209, 11};  //Le code a été converti en décimal
const int pinRST = 9;  // pin RST du module RC522
const int pinSDA = 10; // pin SDA du module RC522
MFRC522 rfid(pinSDA, pinRST);


void setup() {
  // put your setup code here, to run once:
SPI.begin();
  rfid.PCD_Init();
  pinMode(7, OUTPUT);// led vert 
  pinMode(6, OUTPUT); // led rouge 
  pinMode(7, OUTPUT);
  Serial.begin(9600);
}

void loop() {
  // put your main code here, to run repeatedly:
  int refus = 0; // quand cette variable n'est pas nulle, c'est que le code est refusé
  if (rfid.PICC_IsNewCardPresent())  // on a dédecté un tag
  {
    if (rfid.PICC_ReadCardSerial())  // on a lu avec succès son contenu
    {
      for (byte i = 0; i < rfid.uid.size; i++) // comparaison avec le bon UID
      {
        if (rfid.uid.uidByte[i] != bonUID[i]) {
          refus++;
        }
      }
      if (refus == 0) // UID accepté
      {
        delay(2000);
        // allume LED verte et active relais pendant 3 secondes
        digitalWrite(7, HIGH);
       // digitalWrite(7, LOW);
        //delay(1000);
        digitalWrite(6, LOW);
        Serial.println("carte accepter" );
      }
            else   {  // UID refusé
              delay(2000);
              Serial.println("carte non valide");
        // allume LED rouge et active buzzer pendant 3 secondes
        digitalWrite(6, HIGH);
        //digitalWrite(7, HIGH);
        digitalWrite(7, LOW);
       
        
      }
    }
  }


}
