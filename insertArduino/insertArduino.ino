#include <Ethernet.h>
#include <SPI.h>
#include <EEPROM.h>

byte mac[] = {0x90, 0xA2, 0xDA, 0x0E, 0x94, 0xB1};
char server[] = "192.168.10.100";
IPAddress ip(192, 168, 10, 201);

EthernetClient client;

const int cantDatos = 20;
int posEEprom = 0;

int t, tEstado, h, hEstado, s, sEstado, enviado;


void setup() {
  Serial.begin(9600);
  
  grabaDatos();

  pinMode(4,OUTPUT); 
  digitalWrite(4,HIGH);
  
  delay(1000);
  Serial.println("Conectando...");
  Ethernet.begin(mac, ip);


}

void loop() {

  enviado = EEPROM.read(posEEprom+6); 
  if (enviado == 0) {  //esto es para que cuando recupero todos los datos de la EEprom no traiga basura y esta hecho así porque es una similación
     t       = EEPROM.read(posEEprom);
     tEstado = EEPROM.read(posEEprom+1);     
     h       = EEPROM.read(posEEprom+2);
     hEstado = EEPROM.read(posEEprom+3);     
     s       = EEPROM.read(posEEprom+4);
     sEstado = EEPROM.read(posEEprom+5); 

     if (client.connect(server, 80)) {
       Serial.println("Conectado");
       client.println();
       client.print("GET /Controllers/Arduino/ip.php?ip=");
       client.print(ip);
       client.print("&temp=");
       client.print(t);
       client.print("&hum=");
       client.print(h);
       client.print("&som=");
       client.print(s);
       client.print("&tempEstado=");
       client.print(tEstado);
       client.print("&humEstado=");
       client.print(hEstado);
       client.print("&somEstado=");
       client.println(sEstado);       
       client.println(" HTTP/1.1");
       client.print("Host: ");
       client.println(server);
       client.println("User-Agent: Arduino-Ethernet");
       client.println("Connection: close");
       client.println();
       EEPROM.write(posEEprom+6, 1); 
    
       } else {
          Serial.println("Error");
       }

       if (client.connected()) {
          client.stop();
       }

       posEEprom+=7;
  }
  delay(2000); //Simulo 5(cinco) segundos
}

void grabaDatos() { // parámetros: 1ª valor sensor, 2ª activo(1) / inactivo(2) / falla(3)
  int temperatura[cantDatos][2] =  {23,1, 23, 2, 22, 1, 21, 1, 23, 1, 25, 1, 21, 1, 23, 1, 21, 1, 20, 1, 19, 1, 20, 1, 21, 1, 23, 1, 22, 1, 20, 1, 24, 1, 22, 1, 21, 1, 27, 1};  // Datos recolectados por los Sensores de temperatura (Expresados en Celsius)
  int humedad[cantDatos][2]     =  {53,1, 54, 1, 52, 1, 51, 1, 53, 2, 55, 1, 51, 1, 56, 1, 51, 1, 50, 1, 56, 1, 50, 1, 51, 1, 53, 2, 52, 1, 50, 1, 53, 1, 52, 1, 51, 1, 47, 1}; // Datos recolectados por los Sensores de humedad (Expresados en porcentaje) 
  int gradoSombra[cantDatos][2] =  {53,1, 24, 1, 12, 1, 21 ,1, 53, 1, 65, 1, 33, 1, 46, 3, 11, 3, 30, 1, 55, 1, 33, 1, 55, 1, 51, 1, 58, 1, 51, 1, 52, 1, 52, 3, 71, 1, 37, 2}; // Datos de sombra seteados
  int enviado[cantDatos]        =  {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0};
  
  for(int i = 0, a = 0; i < cantDatos*7; i+=7, a++)  // Graba los datos de los sensores en la EEPROM, cada 3 posiciones de memoria sigue el otro registro de datos recolectados.
  {
     EEPROM.write(i,temperatura[a][0]);   
     EEPROM.write(i+1,temperatura[a][1]);       
     EEPROM.write(i+2,humedad[a][0]);
     EEPROM.write(i+3,humedad[a][1]);     
     EEPROM.write(i+4,gradoSombra[a][0]);
     EEPROM.write(i+5,gradoSombra[a][1]);
     EEPROM.write(i+6,enviado[a]);   
  }
  return;
}
