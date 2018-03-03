# このリポジトリについて

WordPressのテーマをgulpで作成するためのものです。

## まずすること
Local by Flywheelをインストール
↓やり方
https://www.pc-weblog.com/local-by-flywheel/
・Site Nameはpopoipoiposuで設定
・他は推奨設定でよい。

### インストール後
・windowsなら
C:\Users\○○（ゆーざー名）\Local Sites\popoipoiposu\app\public
の中を全て削除する
・MACならどこにあるか分からないので頑張って探す

# gitのクローン
gitのリポジトリを
先ほどフォルダ内を全て削除したディレクトリ
ーーーーーーーーーーーーーーーーーーーーーーーー
・windowsなら
C:\Users\○○（ゆーざー名）\Local Sites\popoipoiposu\app\public
・MACならどこにあるか分からないので頑張って探す
ーーーーーーーーーーーーーーーーーーーーーーーー
にクローンする

```
git clone https://github.com/popopi/public.git
```
## clone後、
Local by Flywheel
のview siteを押す。

# 本gulpで出来ること
- SCSSのコンパイル
- CSSの圧縮
- JSの圧縮

# 使い方

下記コマンドはnode.jsとgulpをインストールした上で行う
```
npm install
```
## 各タスク

### デフォルトのタスクの起動
これで、ローカルホスト起動とscss、jsの圧縮ができるけど、あんまり使わないで。
```
gulp
```

### scssのコンパイル
scssがコンパイルされる、あとフロントノートも更新される
```
gulp sass
```

### jsのコンパイル
jsがコンパイル、圧縮される
```
gulp js
```