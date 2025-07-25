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
8. chmod -R 777 ./storage

[実行環境]
MySQL 8.0.26
PHP 7.4.9-fpm
Laravel 8
nginx 1.21.1

[mailtrapの設定]
mailtrapのメールボックスを作成し、
.env内の下記※と※の間の部分を、自分のmailtrapの設定に書き換える


※
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=bc0792fcbad78f
MAIL_PASSWORD=20bbe0136d3bc6
MAIL_ENCRYPTION=tls
※
MAIL_FROM_ADDRESS=from@example.com
MAIL_FROM_NAME="${APP_NAME}"

[stripeの決済画面でのデモ入力]
下記を入力して試してください。
カード番号：4242 4242 4242 4242
期限：　12/34
セキュリティ番号：567
名前：Zhang San
国籍：United States
パスワード：12345

