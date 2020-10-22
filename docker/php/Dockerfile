FROM php:7-fpm-alpine
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN apk add shadow && usermod -u 1000 www-data && groupmod -g 1000 www-data

#RUN echo http://dl-2.alpinelinux.org/alpine/edge/community/ >> /etc/apk/repositories
#RUN apk --no-cache add shadow && usermod -u 1000 www-data

#RUN deluser www-data && adduser -DH -h /home/www-data -s /sbin/nologin -u 1000 www-data

#RUN apk add --no-cache --upgrade bash
#COPY permissions.sh /
#RUN chmod +x /permissions.sh
#ENTRYPOINT [ "/permissions.sh" ] 

#CMD ["/permissions.sh", "sleep infinity"]
#RUN chown -R www-data:www-data /var/www/html/web
#RUN chmod -R 755 /var/www/html/web
