setup:
	@make build
	@make up
	@make compose-update

build:
	docker-compose build --no-cache --force-rm

stop:
	docker-compose stop

up:
	docker-compose up -d

down:
		docker-compose down

docker-exec-bash:
	docker exec -it url-shortener_app bash

serve:
	php artisan serve

migrate:
	php artisan migrate

migrate-fresh:
	php artisan migrate:fresh

data:
	docker exec url-shortener_app bash -c "php artisan migrate"
	docker exec url-shortener_app bash -c "php artisan db:seed"

mysql-bash:
	docker exec -it url-shortener-db mysql -u root -p