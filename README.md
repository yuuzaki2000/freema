# freema
[Dockerビルド]
1. git clone git@github.com:yuuzaki2000/freema.git
2. docker-compose up -d --build

[Laravel環境構築]
1. docker-compose exec php bash
2. composer install
3. 新たに、srcディレクトリ下に、.envファイルを作成し、.env.exampleファイルの内容をコピーする
4. .envファイルに以下の環境変数を追加
  DB_CONNECTION=mysql
  DB_HOST=mysql
   DB_PORT=3306
  DB_DATABASE=laravel_db
  DB_USERNAME=laravel_user
  DB_PASSWORD=laravel_pass
5. アプリケーションキーを作成する
  php aritsan key:generate
6. マイグレーションを実行する
  php artisan migrate:
7. シーディングを実行する
  php artisan db:seed
8. 

