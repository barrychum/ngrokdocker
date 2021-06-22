FROM    alpine as ngrok

# https://dl.equinox.io/ngrok/ngrok/stable
RUN     apk add --no-cache --virtual .bootstrap-deps ca-certificates && \
        wget -O /tmp/ngrok.zip https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-amd64.zip && \
        unzip -o /tmp/ngrok.zip -d / && \
        apk del .bootstrap-deps && \
        rm -rf /tmp/* && \
        rm -rf /var/cache/apk/*

# FROM    busybox:glibc
FROM    busybox:latest

# start.sh reference
# https://github.com/wernight/docker-ngrok/blob/master/entrypoint.sh
# https://github.com/shkoliar/docker-ngrok/blob/master/start.sh

COPY    --from=ngrok /ngrok /bin/ngrok
COPY    start.sh /

#       create /home/ngrok/.ngrok2/ngrok.yml for default config location 
#       generate ngrok.yml in start.sh
#	printf 'web_addr: 0.0.0.0:4040\n' > /home/ngrok/.ngrok2/ngrok.yml && \
#	addgroup -g 4040 -S ngrok && \
#       adduser -u 4040 -S ngrok -G ngrok -h /home/ngrok -s /bin/ash && \

RUN     mkdir -p /home/ngrok /home/ngrok/.ngrok2 && \
	addgroup -S ngrok && \
        adduser -S ngrok -G ngrok -h /home/ngrok -s /bin/ash && \
    	chown -R ngrok:ngrok /home/ngrok && \
        chmod +x /start.sh

USER    ngrok:ngrok

EXPOSE  4040

CMD     /start.sh
