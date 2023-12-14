# Propósito

El propósito de este código es la recogida de datos de índice ultravioleta a través de una placa de desarrollo **ESP32** y el sensor **ML8511**, para posteriormente subir esos datos recogidos a una base de datos.

Después de eso, el objetivo era mostrar los datos recogidos en una pagina web, que creamos gratuitamente con **[000webhost](https://000webhost.com/)**, y que tras un gran trabajo de HTML, hecho por mi compañero, conseguimos mostrar dichos datos de forma correcta y visualmente agradable.

Dicha pagina creada por mi compañero con mi ayuda se puede visitar [aquí](https://ultravioletasuperestacion.000webhostapp.com/).  También yo personalmente cree una pagina para mostrar esos datos que se puede visitar [aquí](https://ultravioletasuperestacion.000webhostapp.com/alberto.php).

El posterior objetivo de este proyecto es juntar varios sensores en una misma placa para crear una estación meteorológica que proporcione distintas mediciones de interés.


# Material usado

- [Kit ESP32](https://www.amazon.es/Freenove-ESP32-WROVER-Included-Compatible-Wireless/dp/B0CJJH2C2C/ref=sr_1_7?adgrpid=55208455845&hvadid=279364096447&hvdev=c&hvlocphy=1005449&hvnetw=g&hvqmt=e&hvrand=4908225397421771884&hvtargid=kwd-403647908158&hydadcr=2892_1744813&keywords=esp32%20kit&qid=1702592440&sr=8-7).
- Sensor [ML8511](https://www.amazon.es/RAKSTORE-GY-8511-ML8511-ruptura-anal%C3%B3gica/dp/B0C39YZT7X/ref=sr_1_2?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=3QMW400MGB4SM&keywords=ml8511&qid=1702592480&sprefix=ml8511,aps,96&sr=8-2).
- Cables tanto macho/macho como macho/hembra.

## Fotos de dicho material



# Créditos

- **[Gabriel Abellán](https://github.com/nullmistake)**. Siendo el principal recopilador de información sobre la radiación ultravioleta, ayuda durante la programación del sensor, y un gran trabajo de HTML al crear la pagina para mostrar los datos recogidos por el sensor.
- **[Medium](https://chintyaw.medium.com/esp32-project-10-insert-data-into-mysql-database-using-php-and-arduino-ide-84601ed91dc)**. Por todo el código que proporcionan tanto para la placa ESP32 como para la base de datos.