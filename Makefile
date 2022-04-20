install: #установка зависимостей
	composer install

make brain-games: # Запуск файла bin/brain-games.php
	./bin/brain-games

comand: #выполняет команды
	composer validate

lint: #запускает phpcs
	composer exec --verbose phpcs -- --standard=PSR12 src bin
