# README

### これは何？

これはphpをDocker上で動作させ、xdebugでCLIでPHPを実行するまでを確認した資産です。このリポジトリを利用することでVSCode上でのPHP資産のステップ実行が可能となります。



### How to use

```shell
docker-compose up
```

起動した状態でVSCodeのリモートデバッグ機能を利用します。以下のVSCode拡張が必要です。

* [PHP Debug](https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug)

* [Remote Development](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.vscode-remote-extensionpack)



### 注意点

CLI上でステップ実行を行うRemote Session上で以下の環境変数の指定が必要です。

``` shell
export XDEBUG_MODE=debug
export XDEBUG_SESSION=1
```

上記環境変数が設定されている状態でVSCode上でブレイクポイントを設定して、phpをCLIから実行するとVSCode上でステップ実行が可能となります。

``` shellshell
php sample.php
```

