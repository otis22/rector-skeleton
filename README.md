# rector-skeleton

Проект для подготовки доклада "PhpRector побеждает легаси код" [для ЭФКО ЦР](https://www.youtube.com/channel/UC9oEZbCfEPfzdRKYUrfcueA). 
Можно использовать как каркас для проектов, которые хотят внедрить ректор. 

![GitHub CI](https://github.com/otis22/rector-skeleton/workflows/CI/badge.svg)
![Autofix](https://github.com/otis22/php-skeleton/workflows/AUTOFIX/badge.svg)

## Как запустить ректор? 

Собрать образ и запустить ректор последней проверкой. 
```shell
make all
```

Запустить только ректор. 
```shell
make build && make rector
```

Зайти в контейнер

```shell
make exec
```

Внутри контейнера `composer rector` или `composer fix-rector`

## Как настроить автофикс

Github Action `.github/workflows/AUTOFIX.yml` commit fixes to your repo. 

Generate [Access Token](https://github.com/settings/tokens) and add token 
to repo Settings/Secrets/Actions secrets with name `ACCESS_TOKEN`. 
