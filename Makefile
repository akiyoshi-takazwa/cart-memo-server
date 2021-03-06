up:
	docker-compose up -d
build:
	docker-compose build --no-cache --force-rm
install:
	cp .env.example .env
	@make build
	@make up
	@make composer install
	@make yarn install
	@make yarn run dev
	docker-compose exec app php artisan key:generate
	docker-compose exec app php artisan storage:link
	docker-compose exec app php artisan adminlte:install --only=assets
	@make migrate
update:
	@make composer install
	@make yarn install
	@make yarn run dev
reinstall:
	@make destroy
	@make install
work:
	docker-compose exec app bash
stop:
	docker-compose stop
down:
	docker-compose down
restart:
	@make down
	@make up
destroy:
	docker-compose down --rmi all --volumes --remove-orphans
ps:
	docker-compose ps
migrate:
	docker-compose exec app php artisan migrate
fresh:
	docker-compose exec app php artisan migrate:fresh --seed
tinker:
	docker-compose exec app php artisan tinker
format:
	docker-compose exec app ./vendor/bin/php-cs-fixer fix -v --diff --diff-format udiff
	docker-compose exec app yarn run lint:scss:fix
	docker-compose exec app yarn run lint:js:fix
	docker-compose exec app yarn run format:js:fix
	docker-compose exec app yarn run format:scss:fix
test:
	docker-compose exec app php artisan test
optimize:
	docker-compose exec app php artisan optimize:clear
	docker-compose exec app composer dump-autoload
.PHONY: composer
ifeq (composer,$(firstword $(MAKECMDGOALS)))
  RUN_ARGS := $(wordlist 2,$(words $(MAKECMDGOALS)), $(MAKECMDGOALS))
  $(eval $(RUN_ARGS):;@:)
endif
composer:
	docker-compose exec app composer $(RUN_ARGS)

.PHONY: yarn
ifeq (yarn,$(firstword $(MAKECMDGOALS)))
  RUN_ARGS := $(wordlist 2,$(words $(MAKECMDGOALS)), $(MAKECMDGOALS))
  $(eval $(RUN_ARGS):;@:)
endif
yarn:
	docker-compose exec app yarn $(RUN_ARGS)
