#!/bin/bash

DESTINO_WOWZA="/var/www/videobox/content/web"
DESTINO_POSTER="/var/www/videobox/assets/img/video_poster"

#Recibe como parametro el nombre del fichero
FICHERO=$1
echo "[$FICHERO] Procesando fichero"

FILENAME=${FICHERO%.*}
FICHERO_TMP=$FILENAME$".tmp"
mv $FICHERO $FICHERO_TMP

#Conversion a formato mas reproducible
EXT_VIDEO="mp4"
VIDEO=$FILENAME.$EXT_VIDEO
echo "  [$FILENAME] Codificando video ..."
ffmpeg -v error -i $FICHERO_TMP -c:v libx264 -c:a libmp3lame $VIDEO

#Obtencion de thumbnail
INSTANTE="00:00:01.000"
#DURACION=`ffprobe -v error -select_streams v:0 -show_entries stream=duration -of  default=noprint_wrappers=1:nokey=1 $VIDEO`
EXT_POSTER="jpg"
POSTER_SIZE="320x240"
POSTER=$FILENAME.$EXT_POSTER
echo "  [$FILENAME] Generando poster ..."
ffmpeg -v error -i $VIDEO -ss $INSTANTE -frames 1 -s $POSTER_SIZE $POSTER

#Entrega en directorio WOWZA
echo "  [$FILENAME] Moviendo a directorio de WOWZA ..."
mv $VIDEO $DESTINO_WOWZA
mv $POSTER $DESTINO_POSTER
#rm $FICHERO_TMP

echo $DESTINO_WOWZA
