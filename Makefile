install: #установка зависимостей
	composer install

make brain-games: # Запуск файла bin/brain-games.php
	./bin/brain-games

comand: #выполняет команды
	composer validate
