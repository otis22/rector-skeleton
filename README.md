# rector-skeleton

Проект для подготовки доклада "PhpRector побеждает легаси код" [для ЭФКО ЦР](https://www.youtube.com/channel/UC9oEZbCfEPfzdRKYUrfcueA). 
Можно использовать как каркас для проектов, которые хотят внедрить ректор. 

![GitHub CI](https://github.com/otis22/rector-skeleton/workflows/CI/badge.svg)
![Autofix](https://github.com/otis22/php-skeleton/workflows/AUTOFIX/badge.svg)

## Local work

For run all tests
```shell
make all
```
or connect to terminal
```shell
make exec
```

or use built in php server [http://localhost:8080](http://localhost:8080)
```shell
# start server on 8080 port
make serve 
# custom port 8081
make serve PORT=8081
```

*Dafault php version is 7.4*. Use PHP_VERSION= for using custom version. 
```shell
make all PHP_VERSION=8.0
# run both 
make all PHP_VERSION=7.4 && make all PHP_VERSION=8.0
```

all commands
```shell
# composer install
make install
# composer install with --no-dev
make install-no-dev
# check code style
make style
# fix code style
make style-fix
# run static analyze tools
make static-analyze
# run unit tests
make unit
#  check coverage
make coverage
```

## Autofix Action

Github Action `.github/workflows/AUTOFIX.yml` commit fixes to your repo. 

Generate [Access Token](https://github.com/settings/tokens) and add token 
to repo Settings/Secrets/Actions secrets with name `ACCESS_TOKEN`. 
