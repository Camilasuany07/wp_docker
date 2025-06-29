FROM wordpress:php8.2-apache

# Instala atualizações de segurança e remove arquivos temporários
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get autoremove -y && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

COPY ./wp-config.php /var/www/html/wp-config.php
COPY ./wp-content /var/www/html/wp-content
