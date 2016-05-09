#!/usr/bin/env bash

RCol='\e[0m'
Red='\e[0;31m'
Gre='\e[0;32m'
BGre='\e[42m'

printf "Please enter host (localhost):" && read host
printf "Please enter port (3306):" && read port
printf "Please enter database name (homestead):" && read dbname
printf "Please enter database username (root):" && read username
printf "Please enter database password (empty):" && read password

if [ "$host" == "" ]; then host="localhost"
fi

if [ "$port" == "" ]; then port="3306"
fi

if [ "$dbname" == "" ]; then dbname="homestead"
fi

if [ "$username" == "" ]; then username="root"
fi

echo -e "${Red}Starting installation"

cd ..

cp .env.example .env

sed -i "s/DB_PORT=3306/DB_PORT=$port/g" .env

echo "Git switching to develop"
(git checkout -b develop || git checkout develop) && echo -e "${Gre}Checkout success${RCol}" || (echo -e "${Red}Failed checkout${RCol}" && exit)
echo "Finished switching branch"

echo "Git pull"
git pull && echo "Git pull finished" || echo "Git pull failed"

echo "Installing composer"
composer install && echo "Finished installing composer" || echo "Failed installing composer"

echo "Creating database"
echo "CREATE DATABASE $dbname" | mysql -h localhost --username $username --password $password
echo "Finished creating database"

echo "Generating application key"
php artisan key:generate
echo "Finished generating application key"

echo "Migrating with seeds"
php artisan migrate:refresh --seed
echo "Finished migrating with seeds"

echo "Npm install"
npm install
echo "Finished npm install"

echo "Bower install"
bower install
echo "Finished bower install"

echo "Gulp"
gulp
echo "Finished gulp"