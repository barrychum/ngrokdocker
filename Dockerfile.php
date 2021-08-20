FROM    alpine as ngrok

# https://dl.equinox.io/ngrok/ngrok/stable
RUN     apk add --no-cache --virtual .bootstrap-deps ca-certificates && \
        wget -O /tmp/ngrok.zip https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-amd64.zip && \
        unzip -o /tmp/ngrok.zip -d / && \
        apk del .bootstrap-deps && \
        rm -rf /tmp/* && \
        rm -rf /var/cache/apk/*
##########################################3

FROM    php:apache

RUN apt-get update && apt-get install -y \
    vim nano

COPY    --from=ngrok /ngrok /bin/ngrok
COPY index.php /var/www/html
COPY phpinfo.php /var/www/html

EXPOSE  80


