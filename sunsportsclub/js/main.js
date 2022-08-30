$(document).ready(function() {

    function fadeAnime() {

        //下からふわっ

        $('.fadeUpMaskTrigger').each(function() { //fadeUpTriggerというクラス名が
            var elemPos = $(this).offset().top - 10; //要素より、50px上の
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight) {
                $(this).addClass('fadeUpMask'); // 画面内に入ったらfadeUpというクラス名を追記
            } else {
                $(this).removeClass('fadeUpMask'); // 画面外に出たらfadeUpというクラス名を外す
            }
        });

        //下からふわっ

        $('.fadeUpTrigger').each(function() { //fadeUpTriggerというクラス名が
            var elemPos = $(this).offset().top - 10; //要素より、50px上の
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight) {
                $(this).addClass('fadeUp'); // 画面内に入ったらfadeUpというクラス名を追記
            } else {
                $(this).removeClass('fadeUp'); // 画面外に出たらfadeUpというクラス名を外す
            }
        });

        //右からすっ
        $('.fadeRightTrigger').each(function() {
            var elemPos = $(this).offset().top - 10;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight) {
                $(this).addClass('fadeRight'); // 画面内に入ったらfadeRightというクラス名を追記
            } else {
                $(this).removeClass('fadeRight'); // 画面外に出たらfadeRightというクラス名を外す
            }
        });

        //左からすっ
        $('.fadeLeftTrigger').each(function() {
            var elemPos = $(this).offset().top - 10;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight) {
                $(this).addClass('fadeLeft'); // 画面内に入ったらfadeLeftというクラス名を追記
            } else {
                $(this).removeClass('fadeLeft'); // 画面外に出たらfadeLeftというクラス名を外す
            }
        });

        //開く
        $('.rotateYTrigger').each(function() {
            var elemPos = $(this).offset().top - 10;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight) {
                $(this).addClass('rotateY'); // 画面内に入ったらrotateというクラス名を追記
            } else {
                $(this).removeClass('rotateY'); // 画面外に出たらrotateというクラス名を外す
            }
        });

    }


    // 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function() {
        fadeAnime(); /* アニメーション用の関数を呼ぶ*/
    }); // ここまで画面をスクロールをしたら動かしたい場合の記述

    // 画面が読み込まれたらすぐに動かしたい場合の記述
    $(window).on('load', function() {
        fadeAnime(); /* アニメーション用の関数を呼ぶ*/
    }); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述

    $('.hamburger').click(function() {
        $("#menu_sp").fadeIn(500);
    });

    $('.menu-close').click(function() {
        $("#menu_sp").fadeOut(500);
    });

});