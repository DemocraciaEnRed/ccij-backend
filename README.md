# CCIJ - Backend

>Este repositorio arrancó como una copia de DemocraciaEnRed/somosmuchas-activa-back [b191974](https://github.com/DemocraciaEnRed/somosmuchas-activa-back/commit/b191974a06051a2dccfdbdfc9512e2781a4d5bd3
para iniciar rápidamente:

`docker-compose up`

o si docker está apagado:

`systemctl start docker.service && docker-compose up`

## Backend

Definir las siguientes como variables de entorno:

```
- SECURITY_SALT=rin0w26yoy575pxebsdx6qzrevch
- MYSQL_URL=mysql
- MYSQL_PORT=3306
- MYSQL_USERNAME=root
- MYSQL_PASSWORD=root
- MYSQL_DATABASE=ccij
```

Carpetas que hay que persistir/volumizar:

- `webroot/img` (ahi es donde se suben las imagenes)

## Bugs detectados

- En la carga de imágenes a veces tira error con los jpg/jpeg. La solución es convertilas a png y subirla. En linux esto se realiza fácilmente con la utilidad `convert` que viene al instalar `imagemagick` (en Debians `sudo apt install imagemagick`)
