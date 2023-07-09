# Use a imagem base do PHP-FPM
FROM php:7.4-fpm

# Instale as dependências necessárias
RUN apt-get update && apt-get install -y \
    nginx \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Limpe o cache de pacotes
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instale as extensões do PHP necessárias
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instale o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copie o arquivo de configuração do Nginx para o contêiner
COPY .docker/nginx/default.conf /etc/nginx/sites-available/default

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Copie o código do aplicativo para o contêiner
COPY . .

# Instale as dependências do Composer
RUN composer install --no-interaction --optimize-autoloader

# Defina as permissões corretas para a pasta de trabalho
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Exponha a porta 80 para o Nginx
EXPOSE 80

# Inicie o servidor Nginx e o PHP-FPM
CMD service nginx start && php-fpm
