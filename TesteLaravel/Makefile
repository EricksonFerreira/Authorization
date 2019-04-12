apresentacao:
	@composer install
	@cp .env.example .env
	@php artisan key:generate
	@sed -i 's/DB_DATABASE=homestead/DB_DATABASE=authorization/' .env
	@sed -i 's/DB_USERNAME=homestead/DB_USERNAME=root/' .env
	@sed -i 's/DB_PASSWORD=secret/DB_PASSWORD=ifpe/' .env
	@$(MAKE) db
db:
	@mysql -u root -p --execute="CREATE DATABASE IF NOT EXISTS authorization;"
	@php artisan migrate:refresh
	@clear
	@echo "\033[01;31mCONFIGURAÇÃO REALIZADA, ATENÇÃO NO SLIDE !!\033[00;37m"
	@php artisan serve	