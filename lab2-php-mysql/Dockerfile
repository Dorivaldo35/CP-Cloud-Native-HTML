# Usar imagem oficial do PHP com Apache
FROM php:8.2-apache

# Instalar extensão MySQLi
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar mod_rewrite do Apache
RUN a2enmod rewrite

# Definir diretório de trabalho
WORKDIR /var/www/html

# Copiar arquivos da aplicação
COPY . /var/www/html/

# Expor porta 80
EXPOSE 80

# Comando para iniciar o Apache
CMD ["apache2-foreground"]
