#!/usr/bin/php
<?php
  foreach(file('/usr/share/dict/words') as $line){ //wordの前のlinax.を削除した
    // strpos() 関数を使って、文字列 "abc" が含まれる単語を echo "$line"; で表示しなさい。
    if( strpos($line, "xy") !== false ){ //strpos($line, "xy")によってxyを含む単語を検索した
        echo "$line";
    }
  }
?>
