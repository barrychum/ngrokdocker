#!/bin/sh -e

CMD="ngrok"

PARAMS=${PARAMS:-$(echo $@)}

if [[ -n "$PARAMS" ]]; then
    CMD="$CMD $PARAMS"
else
    PROTOCOL=${PROTOCOL:-http}
    PORT=${PORT:-80}

    CMD="$CMD $PROTOCOL"

    if [[ -n "$REGION" ]]; then
        CMD="$CMD -region=$REGION"
    fi

    if [[ -n "$HOST_HEADER" ]]; then
        CMD="$CMD -host-header=$HOST_HEADER"
    fi

    if [[ -n "$SUBDOMAIN" ]]; then
        CMD="$CMD -subdomain=$SUBDOMAIN"
    fi

    if [[ -n "$BIND_TLS" ]]; then
        CMD="$CMD -bind-tls=$BIND_TLS"
    fi

    if [[ -n "$LOG" ]]; then
        CMD="$CMD -log stdout"
    fi

    if [[ -n "$TARGET_HOST" ]]; then
        CMD="$CMD $TARGET_HOST:$PORT"
    else
        CMD="$CMD $PORT"
    fi
fi

# Set the authorization token.
echo "web_addr: 0.0.0.0:4040" > /home/ngrok/.ngrok2/ngrok.yml
if [ -n "$AUTHTOKEN" ]; then
  echo "authtoken: $AUTHTOKEN" >> /home/ngrok/.ngrok2/ngrok.yml
fi

set -x
exec $CMD
