setup:
	@make build
	@make up 
	@make composer-update
build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
up:
	docker-compose up -d
composer-update:
	docker exec pet-mate-container bash -c "composer update"
data:
	docker exec pet-mate-container bash -c "php artisan migrate --force"
	docker exec pet-mate-container bash -c "php artisan db:seed --force"