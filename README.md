PHP-LAN-IP-range-script
=======================

Ping range di IP di una LAN in PHP con fsockopen

Volendo realizzare al volo un codice per controllare se gli Host di una rete LAN fossero online, in previsione di scriverlo poi per un programma client, ho buttato giù questo piccolo script in PHP. Questo sistema di controllo, col quale ho perso pochissimo tempo per implementarlo, permette di effettuare un Ping senza il classico utilizzo del comando Ping richiamato da exec o senza usare comandi shell tipo:

FOR /L %i IN (1,1,254) DO ping -n 1 192.168.0.%i

Che produce output caotico e non immediatamente comprensibile poiché riporta anche tutte le risposte del comando Ping.

