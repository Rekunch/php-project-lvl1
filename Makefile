install: #установка зависимостей
	composer install

make brain-games: # Запуск файла bin/brain-games.php
	./bin/brain-games

comand: #выполняет команды
	composer validate

lint: #запускает phpcs
	composer exec --verbose phpcs -- --standard=PSR12 src bin

brain-even: #запускает игру на чётность brain-even
	./bin/brain-even

brain-calc: #запускает игру калькулятор
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression: #запуск игры-прогрессии
	./bin/brain-progression
