#!/bin/bash
set -e

# Variáveis de ambiente (definidas no docker-compose.yml)
: "${DB_HOST:=db}"
: "${DB_PORT:=3306}"
: "${DB_DATABASE:=codeigniter_db}"
: "${DB_USERNAME:=user}"
: "${DB_PASSWORD:=password}"

echo "Aguardando o MySQL em $DB_HOST:$DB_PORT..."

# Loop de espera até o MySQL responder
until mysqladmin ping -h"$DB_HOST" -P"$DB_PORT" --silent; do
  printf "."
  sleep 2
done

echo
echo "MySQL está online — criando database (se não existir)..."

mysql -h"$DB_HOST" -P"$DB_PORT" -u"$DB_USERNAME" -p"$DB_PASSWORD" <<-EOSQL
  CREATE DATABASE IF NOT EXISTS \`$DB_DATABASE\`
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;
EOSQL

echo "Database '$DB_DATABASE' pronta."

# Executa o comando original do container (inicia o Apache)
exec apache2-foreground
