//メイン画像スライダー

$(function(){
  // 画像の枚数
  var count = $("#slide li").length;

  // 現在表示されている画像（最初は１番目の画像）
  var current = 1;

  // 次に表示する画像
  var next = 2;

  // フェードイン/アウトのインターバル（何秒ごとに画像を切り替えるか。3000ミリ秒に設定）
  var interval = 4000;

  // フェードイン/アウトのスピード（500ミリ秒に設定）
  var duration = 3000;

  // タイマー用の設定
  var timer;

  // １番目の写真以外は非表示
  $("#slide li:not(:first-child)").hide();

  // 3000ミリ秒（変数intervalの値）ごとにslideTimer()関数を実行
  timer = setInterval(slideTimer, interval);

  // slideTimer()関数
  function slideTimer(){
    // 現在の画像をフェードアウト
    $("#slide li:nth-child(" + current + ")").fadeOut(duration);

    // 次の画像をフェードイン
    $("#slide li:nth-child(" + next + ")").fadeIn(duration);

    // 変数currentの新しい値：変数nextの元の値
    current = next;

    // 変数nextの新しい値：変数currentの新しい値+1
    next = ++next;

    // 変数nextの値が3（画像の総数）を超える場合、1に戻す
    // if(next > count){
    //   next = 1;
    // }

    //⇒ループを止めるに変更。
    if(next > count){
      clearInterval(timer);
      // next = 1;
    }

    // targetクラスを削除
    $("#button li a").removeClass("target");

    // 現在のボタンにtargetクラスを追加
    $("#button li:nth-child(" + current + ") a").addClass("target");
  }

  // ボタンをクリック
  $("#button li a").click(function(){
    // テキスト内容を変数nextに代入
    next = $(this).html();

    // タイマーを停止して再スタート
    clearInterval(timer);
    timer = setInterval(slideTimer, interval);

    // 初回の関数実行
    slideTimer();

    return false;
  });
});






//■page topボタン

$(function(){
var topBtn=$('#pageTop');
topBtn.hide();



//◇ボタンの表示設定
$(window).scroll(function(){
  if($(this).scrollTop()>80){

    //---- 画面を80pxスクロールしたら、ボタンを表示する
    topBtn.fadeIn();

  }else{

    //---- 画面が80pxより上なら、ボタンを表示しない
    topBtn.fadeOut();

  }
});



// ◇ボタンをクリックしたら、スクロールして上に戻る
topBtn.click(function(){
  $('body,html').animate({
  scrollTop: 0},500);
  return false;

});


});



