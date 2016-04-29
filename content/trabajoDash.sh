#!/bin/bash

DESTINO_DASH="/var/www/videobox/content/web"

#Recibe como parametro el nombre del fichero
FICHERO=$1
FILENAME=${FICHERO%.*}
echo "[$FILENAME] Procesando fichero para MPEG-DASH"

#Obtencion de bitrates (en bps)
BITRATE_ORIGINAL=`ffprobe -v error -select_streams v:0 -show_entries stream=bit_rate -of  default=noprint_wrappers=1:nokey=1 $FICHERO`
BITRATE_MEDIO=$((BITRATE_ORIGINAL*2/3))
BITRATE_BAJO=$((BITRATE_ORIGINAL/3))

#Separacion de audio y video
AUDIO=$FILENAME$"_a.mp4"
echo "  [$FILENAME] Extrayendo audio ..."
ffmpeg -v error -i $FICHERO -vn -c:a libfdk_aac $AUDIO

VIDEO=$FILENAME$"_v.mp4"
echo "  [$FILENAME] Extrayendo video ..."
ffmpeg -v error -i $FICHERO -an $VIDEO

#Generacion de calidades
BUFSIZE=$((BITRATE_ORIGINAL*2))
FICH_ALTA=$FILENAME$"-"$BITRATE_ORIGINAL$".mp4"
echo "  [$FILENAME] Generando video $FICH_ALTA con calidad $BITRATE_ORIGINAL bps ..."
ffmpeg -v error -i $VIDEO -c:v libx264 -r 24 -g 24 -b:v $BITRATE_ORIGINAL -maxrate $BITRATE_ORIGINAL -bufsize $BUFSIZE $FICH_ALTA

BUFSIZE=$((BITRATE_MEDIO*2))
FICH_MEDIA=$FILENAME$"-"$BITRATE_MEDIO$".mp4"
echo "  [$FILENAME] Generando video $FICH_MEDIA con calidad $BITRATE_MEDIO bps ..."
ffmpeg -v error -i $VIDEO -c:v libx264 -r 24 -g 24 -b:v $BITRATE_MEDIO -maxrate $BITRATE_MEDIO -bufsize $BUFSIZE $FICH_MEDIA

BUFSIZE=$((BITRATE_BAJO*2))
FICH_BAJA=$FILENAME$"-"$BITRATE_BAJO$".mp4"
echo "  [$FILENAME] Generando video $FICH_BAJA con calidad $BITRATE_BAJO bps ..."
ffmpeg -v error -i $VIDEO -c:v libx264 -r 24 -g 24 -b:v $BITRATE_BAJO -maxrate $BITRATE_BAJO -bufsize $BUFSIZE $FICH_BAJA

#Segmentacion y manifiesto
MANIFIESTO=$FILENAME$".mpd"
echo "  [$FILENAME] Generando manifiesto $MANIFIESTO"
MP4Box -quiet -dash 2000 -profile onDemand -out $MANIFIESTO $AUDIO $FICH_ALTA $FICH_MEDIA $FICH_BAJA

#Entrega en directorio DASH
#echo "  Moviendo a directorio de DASH ..."
#mv $MANIFIESTO $DESTINO_DASH
#mv $FICH_ALTA $DESTINO_DASH
#mv ${FICH_ALTA%.*}$"_dashinit.mp4" $DESTINO_DASH
#mv $FICH_MEDIA $DESTINO_DASH
#mv ${FICH_MEDIA%.*}$"_dashinit.mp4" $DESTINO_DASH
#mv $FICH_BAJA $DESTINO_DASH
#mv ${FICH_BAJA%.*}$"_dashinit.mp4" $DESTINO_DASH
#mv $AUDIO $DESTINO_DASH
#mv ${AUDIO%.*}$"_dashinit.mp4" $DESTINO_DASH
#rm $VIDEO
