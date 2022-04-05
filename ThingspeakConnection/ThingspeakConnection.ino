
#include <SPI.h>
#include <MFRC522.h>
 
#define SS_PIN 10
#define RST_PIN 9


#include <Ethernet.h>
#include "CloudConnection.h"
#include <Adafruit_Sensor.h>
#include <DHT.h>
#include <DHT_U.h>


#include "ThingSpeak.h" // always include thingspeak header file after other header files and custom macros


#define DHTPIN 5
#define DHTTYPE DHT11
DHT dht(DHTPIN, DHTTYPE);
byte mac[] = SECRET_MAC;

/* soil humidity  code */
int sensorPin = A0;  
int sensorValue = 0;  
int percent = 0;
/* end of code */

/* Pir motion detection*/
int d = 20;
int pir ;                 
int pinpir = 3;                 // PIR Out pin 
int pirMax;                   // PIR status
/* end or pir*/

// Set the static IP address to use if the DHCP fails to assign
IPAddress ip(192, 168, 0, 177);
IPAddress myDns(192, 168, 0, 1);

EthernetClient client;

unsigned long myChannelNumber = SECRET_CH_ID;
const char * myWriteAPIKey = SECRET_WRITE_APIKEY;


void setup() {
  Ethernet.init(10);  // Most Arduino Ethernet hardware



  Serial.begin(115200);  //Initialize serial

  while (!Serial) {
    ; // wait for serial port to connect. Needed for Leonardo native USB port only
  }

  
  
  // start the Ethernet connection:
  Serial.println("Initialize Ethernet with DHCP:");
  if (Ethernet.begin(mac) == 0) {
    Serial.println("Failed to configure Ethernet using DHCP");
    // Check for Ethernet hardware present
    if (Ethernet.hardwareStatus() == EthernetNoHardware) {
      Serial.println("Ethernet shield was not found.  Sorry, can't run without hardware. 🙁");
      while (true) {
        delay(1); // do nothing, no point running without Ethernet hardware
      }
    }
    if (Ethernet.linkStatus() == LinkOFF) {
      Serial.println("Ethernet cable is not connected.");
    }
    // try to congifure using IP address instead of DHCP:
    Ethernet.begin(mac, ip, myDns);
  } else {
    Serial.print("  DHCP assigned IP ");
    Serial.println(Ethernet.localIP());
  }
  // give the Ethernet shield a second to initialize:
  delay(1000);
  
  ThingSpeak.begin(client);  // Initialize ThingSpeak
  dht.begin();
}

void loop() {
  delay(2000);
  // Initialize our values
float h = dht.readHumidity();
float f = dht.readTemperature();

/* soil humidity */
sensorValue = analogRead(sensorPin);
int percentValue = 0;
percentValue = map(sensorValue, 1023, 465, 0, 100);
/* soil humidity */

/* Pir motion detection*/
pirMax=0;
for (int i=0; i < d; i++){
      
      pir= digitalRead(pinpir);
     
      if(pir>pirMax)pirMax=pir;
      delay(1000);
   } 

pir=pirMax;
/* end or pir*/
  
  // set the fields with the values
  ThingSpeak.setField(1, f);
  ThingSpeak.setField(2, h);
  ThingSpeak.setField(3, percentValue);
  ThingSpeak.setField(4, pir);
  delay(500);
  
  
  
  // write to the ThingSpeak channel 
  int x = ThingSpeak.writeFields(myChannelNumber, myWriteAPIKey);
  if(x == 200){
    Serial.println("Channel update successful.");
  }
  else{
    Serial.println("Problem updating channel. HTTP error code " + String(x));
  }
  
 
  
  delay(20000); // Wait 20 seconds to update the channel again
}
