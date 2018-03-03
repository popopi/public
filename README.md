# このリポジトリについて

WordPressのテーマをgulpで作成するためのものです。

# 出来ること
- SCSSのコンパイル
- ブラウザシンク
- CSSの圧縮
- JSの圧縮

# 使い方

## インストール
```
git clone https://github.com/popopi/blog.git
```
clone後WordPressの本体をインストールしてください。


下記コマンドはnode.jsとgulpをインストールした上で行う
```
npm install
```
## 各タスク

###デフォルトのタスクの起動
これで、ローカルホスト起動とscss、jsの圧縮ができるけど、あんまり使わないで。
```
gulp
```

###ブラウザシンク
ブラウザシンクのタスクが起動します。
```
gulp server
```

###scssのコンパイル
scssがコンパイルされる、あとフロントノートも更新される
```
gulp sass
```

###jsのコンパイル
jsがコンパイル、圧縮される
```
gulp js
```