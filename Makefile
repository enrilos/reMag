dev:
	cd code/wp-content/themes/remag && npm start
serve:
	cd code/api && php artisan serve
composer:
	rm -rf code/api/vendor || true
	rm -rf code/api/composer.lock || true
	docker exec remag-wp-1 bash -c "cd /var/www/html/api && composer install"