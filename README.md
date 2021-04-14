# simple table
## これはなに？
- html 上で動く簡単なテーブル
## 機能
- 変更時の自動保存
- エクスポート
## 依存関係
- [jspreadsheet](https://bossanova.uk/jspreadsheet/v4/)
- [jquery](https://jquery.com/)
- [php](https://www.php.net/manual/ja/intro-whatis.php)
## 使い方
1. リポジトリをダウンロードし，ディレクトリに展開
2. name.txt を適当に変更（区切りは改行で列挙）
3. data.csv の IPアドレス を使用範囲に変更する
4. csv を json 形式に適当な方法で変更
5. main.html 内の `function updateTable` の if の y の条件を書き換える
   - 色が変わる
6. デプロイ

## 設定解説
- function csvToArray
  - cav ファイルを json 形式に変更するのに利用
  - name.txt の展開に使用
- function save
  - ファイルに保存する関数
  - 保存時のみ php を読み出し

