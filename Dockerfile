FROM php:7.4-apache

# 1) Instalar dependências do sistema + cliente MySQL
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    libicu-dev \
    default-mysql-client && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# 2) Instalar extensões PHP necessárias
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl mysqli

# 3) Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4) Habilitar mod_rewrite do Apache
RUN a2enmod rewrite

# 5) Definir o diretório de trabalho
WORKDIR /var/www/html

# 6) Copiar arquivos do projeto
COPY . /var/www/html

# 7) Criar pasta de sessões e ajustar permissões
RUN mkdir -p application/cache/sessions \
    && chown -R www-data:www-data application/cache \
    && chmod -R 0755 application/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 0755 /var/www/html

# 8) Copiar o entrypoint e tornar executável
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# 9) Definir entrypoint e comando padrão
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
