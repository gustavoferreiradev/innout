FROM webdevops/php-apache:7.4-alpine
RUN chown www-data -R /app
RUN chmod 777 -R /app