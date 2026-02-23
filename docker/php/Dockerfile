FROM php:8.2-apache

# Ativa mod_rewrite (muito usado em projetos PHP)
RUN a2enmod rewrite

# Define o diretório raiz do Apache
WORKDIR /var/www

# Aponta o Apache para a pasta public
ENV APACHE_DOCUMENT_ROOT /var/www/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf