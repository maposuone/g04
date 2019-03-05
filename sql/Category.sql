CREATE DATABASE g04;

use g04;

CREATE TABLE Category (
c_id INT AUTO_INCREMENT PRIMARY KEY,
c_jp varchar(20)  NOT NULL,
description_m varchar(500)  NOT NULL,
description_r varchar(500)  NOT NULL,
img varchar(200)  NOT NULL,
b_id INT NOT NULL
);


INSERT INTO category ( c_id, c_jp, img, description_m, description_r, b_id)VALUES(1,"テント","img/tent02.png","キャンプといえば、やはりテントを張って自然を間近に感じながら行うキャンプがしたいという人も多いはず。2人きりの空間を作り出す為に、どのようなテントを選んだら良いかのヒントは、2～3人用ぐらいの広さを選ぶこと。季節に対応したもので、初心者でも設営しやすいタイプ。価格帯は2～3万円程度のベーシックな物から始めてみるのがオススメ。","2人きりの空間をゆっくり楽しむ為に、こちらの人気テントランキングを参考にしてみてはいかがでしょうか。", 1);


INSERT INTO category ( c_id, c_jp, img, description_m, description_r, b_id)VALUES(2,"寝袋","img/sleepingbag02.png","キャンプの快適さを決める要因として、もっとも大きいのが寝心地です。シュラフ（寝袋）は、リーズナブルな物も多いので、買ってしまっていいでしょう。
選ぶポイントは、シュラフの快適温度。真夏のみの使用であれば、薄手のものでかまいません。2人用の寝袋もあるので、カップルにはこちらもオススメ。
","2人きりの甘い時間を過ごす為に、こちらの人気寝袋ランキングを参考にしてみてはいかがでしょうか。", 2);


INSERT INTO category ( c_id, c_jp, img, description_m, description_r, b_id)VALUES(3,"テーブル&チェアー","img/table01.png","アウトドアでのくつろぎにはぜひチェア＆テーブルを。座面の高さや座り心地を考えて商品を購入するとよいでしょう。超軽量なものであれば利便性も高く、サイドテーブルとしても活躍します。キャンプだけでなく、車に常備しておいたりピクニックや公園に持ち出したりと用途が広がりますね。","2人で食事やくつろぎの時間を過ごす為に、こちらの人気寝袋ランキングを参考にしてみてはいかがでしょうか。", 3);


INSERT INTO category ( c_id, c_jp, img, description_m, description_r, b_id)VALUES(4,"ランプ","img/lamp01.png","外灯が整っているキャンプ場でも、夜間は暗くなるケースがほとんど。特にテント内では、手元の灯りは必須となります。小型の懐中電灯や、ヘッドライトを用意するのが王道ですが、おすすめしたいのが、使い勝手のいいLEDランタン。リビングスペースの灯りとしても充分な明るさがあり、明るさを調整できるタイプもあって便利です。
","2人きりの夜を照らし出す時間に、こちらのランプランキングを参考にしてみてはいかがでしょうか。", 4);


INSERT INTO category ( c_id, c_jp, img, description_m, description_r, b_id)VALUES(5,"キッチングッズセット","img/tool01.png","カップルで一緒にキャンプ場で手料理を楽しむのであれば、キッチングッズは必須ですね。
調理器具はセットアイテムが狙い目。可能であればスタッキング（重ねて収納）できる調理セットを1つ手に入れると便利です。他には、洗い物を干せるネットや、お皿やお箸などの便利なセットアイテムなども用意できると快適ですね。
","2人で一緒に手料理時間を楽しむ為に、こちらのキッチングッズランキングを参考にしてみてはいかがでしょうか。", 5);
