<div style="display: flex; align-items: center;">
<img src="https://github.com/abraao69/abraao69/blob/main/Navy%20Blue%20Geometric%20Technology%20LinkedIn%20Banner%20(2).png" alt="Logo">
  <br><br>
</div>
  <img src="https://i.ytimg.com/vi/kQAhj-vuHrE/maxresdefault.jpg" alt="Logo" width="1000" height="400">

<br>

#Setup Docker website portfólio com Laravel-10 utilizando Blade:
### Passo a passo:
Clone Repositório:
```sh
git clone https://github.com/abraao69/Setup-Docker-Laravel-10-Portf-lio-Skeleton
```
Suba os containers do projeto:
```sh
docker-compose up --build
```


Crie o Arquivo .env:
```sh
cp .env.example .env
```

Acesse o container app:
```sh
docker-compose exec app bash
```


Instale as dependências do projeto:
```sh
composer install
```

Acessar  o projeto no navegador:
```sh
localhost:8980
```

Gere a key do projeto Laravel:
```sh
php artisan key:generate
```

OPCIONAL: Gere o banco SQLite (caso não use o banco MySQL):
```sh
touch database/database.sqlite
```

Rodar as migrations
```sh
php artisan serve
```
