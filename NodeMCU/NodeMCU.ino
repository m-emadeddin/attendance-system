#include <ESP8266WiFi.h>
#include <WiFiClient.h>
#include <SPI.h>
#include <MFRC522.h>

 #include <Wire.h>           
 #include <LiquidCrystal_I2C.h>    
 LiquidCrystal_I2C lcd(0x27,16,2);   


const char *ssid = "realme 3 Pro";
const char *password = "00000000";

const char *serverAddress = "192.168.1.3";
const int serverPort = 80;

#define SS_PIN D4
#define RST_PIN D3

//#define Y_LED D0
//#define R_LED D8
//#define G_LED 17

MFRC522 rfid(SS_PIN, RST_PIN); // Instance of the class
MFRC522::MIFARE_Key key;
byte nuidPICC[4];

void setup()
{   
   lcd.begin();      
   lcd.backlight();  

  // Turn on the backlight.
    Serial.begin(115200);
    //pinMode(Y_LED, OUTPUT);
    //pinMode(G_LED, OUTPUT);
    //pinMode(R_LED, OUTPUT);
      lcd.setCursor(0, 0);
      lcd.print("Welcome Student");
      lcd.setCursor(0,1);
      lcd.print("Scan Your ID...");



    WiFi.begin(ssid, password);
    while (WiFi.status() != WL_CONNECTED)
    {
        delay(500);
        Serial.println("Connecting to WiFi...");
    }

    SPI.begin();     // Init SPI bus
    rfid.PCD_Init(); // Init MFRC522
    Serial.println();
    Serial.print(F("Reader: "));
    rfid.PCD_DumpVersionToSerial();

    for (byte i = 0; i < 6; i++)
    {
        key.keyByte[i] = 0xFF;
    }

    Serial.println();
    Serial.println(F("This code scans the MIFARE Classic NUID."));
    Serial.print(F("Using the following key:"));
    printHex(key.keyByte, MFRC522::MF_KEY_SIZE);
}

void loop()
{

    //digitalWrite(Y_LED, HIGH);
    //digitalWrite(G_LED, LOW);
    //digitalWrite(R_LED, LOW);

    if (rfid.PICC_IsNewCardPresent() && rfid.PICC_ReadCardSerial())
    {

        //digitalWrite(R_LED, HIGH);
        //digitalWrite(Y_LED, LOW);
        MFRC522::PICC_Type piccType = rfid.PICC_GetType(rfid.uid.sak);

        if (piccType != MFRC522::PICC_TYPE_MIFARE_MINI &&
            piccType != MFRC522::PICC_TYPE_MIFARE_1K &&
            piccType != MFRC522::PICC_TYPE_MIFARE_4K)
        {

            Serial.println(F("Your tag is not of type MIFARE Classic."));
        }
        else
        {

            if (rfid.uid.uidByte[0] != nuidPICC[0] ||
                rfid.uid.uidByte[1] != nuidPICC[1] ||
                rfid.uid.uidByte[2] != nuidPICC[2] ||
                rfid.uid.uidByte[3] != nuidPICC[3] )
            {
                Serial.println(F("A new card has been detected."));
                    lcd.clear();
                    lcd.setCursor(1, 0);
                    lcd.print("Access Granted");
                //digitalWrite(Y_LED, LOW);
                //digitalWrite(G_LED, LOW);
                //digitalWrite(R_LED, HIGH);
                delay(1000);                
                lcd.clear();
                lcd.setCursor(0, 0);
                lcd.print("Welcome Student");
                lcd.setCursor(0,1);
                lcd.print("Scan Your ID...");
                for (byte i = 0; i < 4; i++)
                {
                    nuidPICC[i] = rfid.uid.uidByte[i];
                }

                Serial.println(F("The NUID tag is:"));
                Serial.print(F("In hex: "));
                String hexUID = "";
                for (byte i = 0; i < rfid.uid.size; i++)
                {
                    hexUID += String(rfid.uid.uidByte[i] < 0x10 ? "0" : "");
                    hexUID += String(rfid.uid.uidByte[i], HEX);
                }
                if(hexUID[0] == '5') hexUID = "std_1"; 
                else if(hexUID[0] == '9') hexUID = "std_2"; 
                else if(hexUID[0] == 'a') hexUID = "std_3"; 
                else if(hexUID[0] == '3') hexUID = "std_4";
                Serial.println(hexUID);

                // Send the data to the server using HTTP GET request
                WiFiClient client;
                if (client.connect(serverAddress, serverPort))
                {   
                    String url = "/attendance-system/rfid.php?cardID=" + hexUID;
                    client.print(String("GET ") + url + " HTTP/1.1\r\n" +
                                 "Host: " + serverAddress + "\r\n" +
                                 "Connection: close\r\n\r\n");
                    Serial.println(F("HTTP GET request sent successfully."));

                    delay(1300);
                    //digitalWrite(Y_LED, LOW);
                    //digitalWrite(R_LED, LOW);
                    //digitalWrite(G_LED, HIGH);
                    delay(500);
                }
                else
                {
                    Serial.println(F("Failed to connect to the server."));
                }

                client.stop();
            }
            else
            {
                Serial.println(F("Card read previously."));
                lcd.clear();
                lcd.setCursor(3, 0);
                lcd.print("Card read");
                lcd.setCursor(3, 1);
                lcd.print("Previously");
                delay(1000);
                lcd.clear();
                lcd.setCursor(0, 0);
                lcd.print("Welcome Student");
                lcd.setCursor(0,1);
                lcd.print("Scan Your ID...");

            }
        }
        //digitalWrite(Y_LED, HIGH);
        //digitalWrite(R_LED, LOW);
        //digitalWrite(G_LED, LOW);

        rfid.PICC_HaltA();
        rfid.PCD_StopCrypto1();
    }
}

void printHex(byte *buffer, byte bufferSize)
{
    for (byte i = 0; i < bufferSize; i++)
    {
        Serial.print(buffer[i] < 0x10 ? " 0" : " ");
        Serial.print(buffer[i], HEX);
    }
}