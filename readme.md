
# Учебный, демонстрационный проект курса highload.

## Сборка проекта 

### apache2
Сборка
```
docker-compose -f apache2.docker-compose.yml build
```
Запуск
```

docker-compose -f apache2.docker-compose.yml up
```

### Зайти в терминал контейнера
``` 
docker exec -it {container_name} bash
```
{container_name} - можно подсмотреть в соотвествующем docker-compose.yml файле. Например, чтобы зайти в терминал apache2, 
 нужно зайти в файл apache2.docker-compose.yml, найти поле container_name, скопировать его значение и вставить в команду.
Таким образом, готовая команда будет вглядит так:
``` 
docker exec -it apache2 bash
