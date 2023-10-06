<div id="top"></div>

## 使用技術一覧

<!-- シールド一覧 -->
<!-- 該当するプロジェクトの中から任意のものを選ぶ-->
<p style="display: inline">
  <!-- フロントエンドのフレームワーク一覧 -->
  <img src="https://img.shields.io/badge/-Alpine.js-8BC0D0.svg?logo=alpine.js&style=for-the-badge&logoColor=white">
  <img src="https://img.shields.io/badge/-Tailwindcss-06B6D4.svg?logo=tailwindcss&style=for-the-badge&logoColor=white">
  <!-- バックエンドのフレームワーク一覧 -->
  <img src="https://img.shields.io/badge/-Laravel-FF2D20.svg?logo=laravel&style=for-the-badge&logoColor=white">
  <!-- バックエンドの言語一覧 -->
  <img src="https://img.shields.io/badge/-PHP-777BB4.svg?logo=php&style=for-the-badge&logoColor=white">
  <!-- ミドルウェア一覧 -->
  <img src="https://img.shields.io/badge/-Nginx-269539.svg?logo=nginx&style=for-the-badge&logoColor=white">
  <img src="https://img.shields.io/badge/-MySQL-4479A1.svg?logo=mysql&style=for-the-badge&logoColor=white">
  <img src="https://img.shields.io/badge/-Node.js-4479A1.svg?logo=nodedotjs&style=for-the-badge&logoColor=white">
  <!-- インフラ一覧 -->
  <img src="https://img.shields.io/badge/-Docker-1488C6.svg?logo=docker&style=for-the-badge&logoColor=white">
</p>

## 目次

1. [プロジェクトについて](#プロジェクトについて)
2. [環境](#環境)
3. [ディレクトリ構成](#ディレクトリ構成)
4. [開発環境構築](#開発環境構築)

<!-- プロジェクト名を記載 -->

## プロジェクト名

learning-management-app

<!-- プロジェクトについて -->

## プロジェクトについて

プログラミング学習コミュニティPOSSEにて自主制作する学習管理アプリです

## 環境

<!-- 言語、フレームワーク、ミドルウェア、インフラの一覧とバージョンを記載 -->

| 言語・フレームワーク  | バージョン |
| --------------------- | ---------- |
| alpine                | 3.16       |
| Laravel               | 9.52.4     |
| PHP                   | 8.1        |
| Nginx                 | 1.18       |
| MySQL                 | 8.0        |
| node                  | 18.12.0    |

その他のパッケージのバージョンは package.json を参照してください

<p align="right">(<a href="#top">トップへ</a>)</p>

## ディレクトリ構成

<!-- Treeコマンドを使ってディレクトリ構成を記載 -->
各フォルダ内のディレクトリ構成

srcフォルダ内はLaravelの標準的なディレクトリ構造と同一のため、多少省いております。
```
.
├── README.md
├── docker
│   ├── .gitignore
│   ├── docker-compose.yml
│   ├── app
│   │   ├── usr
│   │   │   └── local
│   │   │       └── etc
│   │   │           └── php
│   │   │               └── php.ini
│   │   └── Dockerfile
│   ├── db
│   │   └── etc
│   │   │   └── my.cnf
│   │   └── Dockerfile
│   └── web
│       ├── etc
│       │   └── nginx
│       │       └── conf.d
│       │           └── default.conf
│       └── Dockerfile
└── src
    ├── app
    │   └── ...
    ├── bootstrap
    │   └── ...
    ├── config
    │   └── ...
    ├── database
    │   └── ...
    ├── public
    │   └── ...
    ├── resources
    │   └── ...
    ├── routes
    │   └── ...
    ├── storage
    │   └── ...
    ├── tests
    │   └── ...
    ├── .editconfig
    ├── .env.sample
    ├── .gitattributes
    ├── .gitignore
    ├── artisan
    ├── composer.json
    ├── composer.lock
    ├── package-lock.json
    ├── package.json
    ├── phpunit.yml
    ├── README.md
    ├── postcss.config.js
    └── tailwind.config.js
```

<p align="right">(<a href="#top">トップへ</a>)</p>

## 開発環境構築

<!-- コンテナの作成方法、パッケージのインストール方法など、開発環境構築に必要な情報を記載 -->

### envファイルの作成

以下のコマンドで.env.sampleをコピー
```
cd src/
copy .env.sample .env
```

作成した.envファイルのDB接続情報を一部書き換える
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=password
```

### コンテナの作成と起動

以下のコマンドで開発環境を構築

```
docker compose build --no-cache
docker compose up -d
```

コンテナ立ち上げ後、以下のコマンドでマイグレーションとシーディングを実行
```
docker compose exec ph3-posseapp-app bash
composer install
php artisan migrate:refresh --seed
php artisan optimze:clear
```

### 動作確認

http://localhost にアクセスできるか確認
アクセスできたら成功

### コンテナの停止

以下のコマンドでコンテナを停止することができます

```
docker compose down
```

<p align="right">(<a href="#top">トップへ</a>)</p>
