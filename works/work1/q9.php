<?php
//変数 num が1桁の数であれば「1桁の数です」、
//そうでなければ「2桁以上の数です」と表示するコードを書いてください。
$num = 10;

// TODO: ここにコードを追記

if ($num < 10 && $num > -10) {
    echo "１桁の数です\n";
} else {
    echo "２桁の数です\n";
}
