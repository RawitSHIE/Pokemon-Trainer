#!/bin/bash
docker build -t itf-app -f app.dockerfile .
docker-compose down -v
docker-compose up -d
docker-compose exec app php artisan k:g
echo finished!
