FROM nginx:1.22-alpine

# Reference link for the code used in the command
# https://stackoverflow.com/questions/56960355/docker-compose-throws-adduser-group-www-data-in-use
RUN mkdir mkdir -p /var/www/html && \
    adduser -D -H -u 1000 -s /bin/bash www-data -G www-data && \
    chown -R www-data:www-data /var/www/html