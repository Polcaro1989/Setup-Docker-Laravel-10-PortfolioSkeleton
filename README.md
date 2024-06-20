<div style="display: flex; align-items: center;">
  <img src="https://github.com/abraao69/Setup-Docker-PHP-7.4/blob/master/logo.png" alt="Logo" width="200" height="100">
  <br><br>
</div>
  <img src="https://i.ytimg.com/vi/kQAhj-vuHrE/maxresdefault.jpg" alt="Logo" width="1000" height="400">

<br>
<img src="https://github.com/abraao69/Setup-Docker-Laravel-10-Portf-lio-Skeleton/blob/main/screen02%20(9).jpg" alt="Logo" width="1000" height="400">


#Setup Docker website portfólio com Laravel-10 utilizando Blade
### Passo a passo
Clone Repositório
```sh
git clone https://github.com/abraao69/Setup-Docker-Laravel-10-Portf-lio-Skeleton
```
Suba os containers do projeto
```sh
docker-compose up --build
```


Crie o Arquivo .env
```sh
cp .env.example .env
```

Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```

Instale as dependências do projeto
```sh
Acesse no navegador:localhost:8980
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```

OPCIONAL: Gere o banco SQLite (caso não use o banco MySQL)
```sh
touch database/database.sqlite
```

Rodar as migrations
```sh
php artisan serve
```
