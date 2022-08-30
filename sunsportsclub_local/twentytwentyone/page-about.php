<?php
get_header();

$tab= $_REQUEST['t'];
?>

<body>
    <div class="sp" style="margin-top:15%;"></div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/index/kv01.png" />
                <div class="banner-text">
                    <p>伝統に培われたノウハウと指導技術</p>
                    <p>個々に合わせた親切な指導で <br> 心と身体作りをサポートします!
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/index/kv02.png" />
                <div class="banner-text">
                    <p>伝統に培われたノウハウと指導技術</p>
                    <p>個々に合わせた親切な指導で <br> 心と身体作りをサポートします!
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/index/kv03.png" />
                <div class="banner-text">
                    <p>伝統に培われたノウハウと指導技術</p>
                    <p>個々に合わせた親切な指導で <br> 心と身体作りをサポートします!
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/index/kv04.png" />
                <div class="banner-text">
                    <p>伝統に培われたノウハウと指導技術</p>
                    <p>個々に合わせた親切な指導で <br> 心と身体作りをサポートします!
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/index/kv05.png" />
                <div class="banner-text">
                    <p>伝統に培われたノウハウと指導技術</p>
                    <p>個々に合わせた親切な指導で <br> 心と身体作りをサポートします!
                    </p>
                </div>
            </div>
        </div>
        <!--div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div-->
        <div class="swiper-pagination"></div>
    </div>
    <section class="main_visual" id="main">
        <div class="crumb">
            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/home.png" alt="">
            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/home-arrow.png" alt="">
            <p>サンスポーツクラブとは</p>
        </div>
        <div class="tabs">
            <input type="radio" name="tab" id="tab1" <?php if($tab == 1) echo "checked='checked'";?>>
            <label for="tab1">About</label>
            
            <input type="radio" name="tab" id="tab2" <?php if ($tab == 2) echo "checked='checked'";?>>
            <label for="tab2">問合せ</label>
            
            <input type="radio" name="tab" id="tab3" <?php if ($tab == 3) echo "checked='checked'";?>>
            <label for="tab3">求人情報</label>

            <div class="tab-content-wrapper">
                <div id="tab-content-1" class="tab-content">
                    <div class="title">技術と心の8ヶ条</div>
                    <div class="condition">
                        <div class="condition-num">1</div>
                        <div class="condition-title">わが子と思って指導いたします。</div>
                        <div class="condition-content">個々の年齢や能力に合わせ、レベル別に段階的に指導いたします。</div>
                    </div>
                    <div class="condition">
                        <div class="condition-num">2</div>
                        <div class="condition-title">経験豊富なコーチが直接指導いたします。</div>
                        <div class="condition-content">日本体育協会・日本水泳連盟等の資格を有するコーチ及び日本体操協会の登録コーチ多数が指導いたします。</div>
                    </div>
                    <div class="condition">
                        <div class="condition-num">3</div>
                        <div class="condition-title">長年にわたり蓄積したノウハウに基づき指導いたします。</div>
                        <div class="condition-content">30年以上の伝統と実績。</div>
                    </div>
                    <div class="condition">
                        <div class="condition-num">4</div>
                        <div class="condition-title">お子様に礼儀正しさを身につけていただきます。</div>
                        <div class="condition-content">指導カリキュラムの中に練習マナーを盛り込んでいます。</div>
                    </div>
                    <div class="condition">
                        <div class="condition-num">5</div>
                        <div class="condition-title">多彩なコースを用意しております。</div>
                        <div class="condition-content">妊婦から高齢者まで、幅広い年齢層の方にご利用いただけます。</div>
                    </div>
                    <div class="condition">
                        <div class="condition-num">6</div>
                        <div class="condition-title">各種障害にお悩みの方に、 リハビリテーションを行っております。
                        </div>
                        <div class="condition-content">リハビリ・メディカル・超音波流水塾等のコースを設けています。</div>
                    </div>
                    <div class="condition">
                        <div class="condition-num">7</div>
                        <div class="condition-title">安心・快適な環境で練習していただきます。</div>
                        <div class="condition-content">肌にやさしい衛生的な水を使用したプール及び、国際体操連盟公認の体操器具を採用した安全で本格的な全国でも最大級の体操専用体育館です。</div>
                    </div>
                    <div class="condition">
                        <div class="condition-num">8</div>
                        <div class="condition-title">無駄のない美しいフォームを身につけていただきます。</div>
                        <div class="condition-content">国際競技会、国民体育大会等の競技会に多数出場しています。</div>
                    </div>
                    <div class="break-line"></div>
                    <div class="title" style="text-align:center;">赤ちゃんからお年寄りまで元気に明るく､楽しく､美しく</div>
                    <div class="top-intro">
                        <div class="top-master">
                            <p><img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/top-master.png" alt=""></p>
                            <div class="top-master-name">
                                <p>オーナー</p>
                                <p>細井佳奈</p>
                            </div>
                        </div>
                        <div class="top-intro-content">
                            <p>1979年、竜城スイミングスクールを開設、以来幾多の変遷のあと、現在はサンスポーツクラブ羽根（水泳）、サンスポーツクラブ美合（体操）、 サンスポーツクラブ矢作（水泳）の三施設を有し、皆様の絶大なるご愛顧をいただき、いささかなりとも地域社会発展のお役に立てさせていただいていることに感謝申し上げます。</p>
                            <p>当クラブは、一貫して地域の皆様の健康管理、特に子供達の健康、躾、協調性、そしてスポーツ精神と基礎体力を養うことを重点課題と考えております。</p>
                            <p>又、生活習慣病の予防やリハビリテーションにも留意し、とりわけ母子の健康と安産を目的とした妊婦水泳教室は、中部地方で最初に取り組んだ高い実績もあり、 超人気のコースに取り上げていただいています。</p>
                            <p>その他水泳、体操を通じ、ジュニア選手の育成とコーチ陣の養成強化を計っており、全日本選手権等にも多くの選手達を輩出し、活躍しています。</p>
                            <p>伝統に培われたノウハウと指導技術を、ぜひ最寄りの当クラブにてご体験ください。</p>
                        </div>
                    </div>
                    <div class="top-intro-clubs">
                        <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/top-intro-feather.png" alt="">
                        <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/top-intro-yahagi.png" alt="">
                        <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/top-intro-miai.png" alt="">
                    </div>
                    <div class="break-line"></div>
                    <div class="title">沿革</div>
                    <div class="history">
                        <div class="history-row">
                            <p>1979年４月</p>
                            <p>竜城スイミングスクールを産婦人科医 長坂 定が「子供達の健康と妊婦水泳」を目的に開設。</p>
                        </div>
                        <div class="history-row">
                            <p>1980年11月</p>
                            <p>岡崎スイミングスクール開設。</p>
                        </div>
                        <div class="history-row">
                            <p>1985年8月</p>
                            <p>竜城体操スクール開設。<br> 三河地区に三つの施設を有するスポーツクラブとして「サンスポーツクラブ」と改名。<br> 生活習慣病の予防とリハビリテーションを伴った「メディカルコース」を導入。
                            </p>
                        </div>
                        <div class="history-row">
                            <p>1999年11月</p>
                            <p>サンスポーツクラブ岡崎　新設移転。<br> 岡崎市矢作町にて開設。
                            </p>
                        </div>
                        <div class="history-row">
                            <p>1999年11月</p>
                            <p>サンスポーツクラブ竜城　新設移転。 <br> 岡崎市柱町にて開設。
                            </p>
                        </div>
                        <div class="history-row">
                            <p>2021年 7月</p>
                            <p>サンスポーツクラブ竜城体操　新設移転。 <br> 岡崎市美合町にて開設。
                            </p>
                        </div>
                        <div class="history-row">
                            <p>2021年 9月</p>
                            <p>サンスポーツクラブ羽根（水泳）、<br> サンスポーツクラブ美合（体操）、<br> サンスポーツクラブ矢作（水泳）<br> に各校の名称を変更。
                            </p>
                        </div>
                    </div>
                </div>
                <div id="tab-content-2" class="tab-content">
                    <div class="title top-contact-title">電話でのお問い合わせ</div>
                    <div class="top-contact-text">体験申し込みの方はお電話でご連絡ください。<br> またご不明な点がある場合はお気軽にお問い合わせください。
                    </div>
                    <div class="top-contact-club margin-top">
                        <div class="top-contact-club-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/top-intro-feather.png" alt="">
                        </div>
                        <div class="top-contact-club-content">
                            <p class="top-contact-name">サンスポーツクラブ羽根[水泳]</p>
                            <p class="top-contact-address">所在地: 〒444-0834 岡崎市柱町字下弁当1-3</p>
                            <div class="top-contact-tel">
                                <p>TEL: 0120-53-2105</p>
                                <p><a href="<?php echo get_home_url()?>/feather?t=3#map">地図のご案内</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="break-line"></div>
                    <div class="top-contact-club margin-top">
                        <div class="top-contact-club-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/top-intro-yahagi.png" alt="">
                        </div>
                        <div class="top-contact-club-content">
                            <p class="top-contact-name">サンスポーツクラブ矢作[水泳]</p>
                            <p class="top-contact-address">所在地: 〒444-0943 岡崎市矢作町猫田6-1</p>
                            <div class="top-contact-tel">
                                <p>TEL: 0120-37-2002</p>
                                <p><a href="<?php echo get_home_url()?>/yahagi?t=3#map">地図のご案内</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="break-line"></div>
                    <div class="top-contact-club margin-top">
                        <div class="top-contact-club-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/top-intro-miai.png" alt="">
                        </div>
                        <div class="top-contact-club-content">
                            <p class="top-contact-name">サンスポーツクラブ美合[体操]</p>
                            <p class="top-contact-address">所在地: 〒444-0802 岡崎市美合字つむぎ南１番１号</p>
                            <div class="top-contact-tel">
                                <p>TEL: 0120-54-3926</p>
                                <p><a href="<?php echo get_home_url()?>/miai?t=3#map">地図のご案内</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-content-3" class="tab-content">
                    <div class="title">水泳インストラクター</div>
                    <div>
                        <p>◆主婦大歓迎<br> ◆有給休暇あり
                            <br> ◆社員登用制度あり
                            <br> ◆未経験でもインストラクターになりたい方大歓迎！
                            <br>
                            <br> 雇用形態：パート・アルバイト
                            <br> ○：時給：１，０００円以上＋交通費支給
                            <br> ○：資格：高卒以上、１年以上勤務できる方
                            <br> ○：時間：１５：００～１９：００
                            <br>
                            <br> ◆週１日でもＯＫ
                            <br> ◆曜日・時間は相談に応じます
                            <br>
                            <br> 問い合わせ先：
                            <br> 　サンスポーツクラブ羽根
                            <br> 　岡崎市柱町下弁当１－３
                            <br> 　ＴＥＬ：０５６４－５３－２１０５ 　　　　　　　担当：　佐々木<br>
                            <br> 　サンスポーツクラブ矢作
                            <br> 　岡崎市矢作町猫田６－１
                            <br> 　ＴＥＬ：０５６４－３１－１７１８ 　　　　　　　担当：　瀧村
                        </p>
                    </div>
                    <div class="title">清掃員</div>
                    <p>◆主婦大歓迎<br> ◆有給休暇あり
                        <br>
                        <br> 雇用形態：パート・アルバイト
                        <br> ○：時給：９５５円以上＋交通費支給
                        <br> ○：資格：高卒以上、１年以上勤務できる方
                        <br> ○：時間：月～土で週3回程度の勤務
                        <br> 　　　　　　７：３０～１２：００
                        <br> 　　　　　　勤務開始は１２月からとなります。
                        <br>
                        <br> 問い合わせ先：
                        <br> 　サンスポーツクラブ羽根
                        <br> 　岡崎市柱町下弁当１－３
                        <br> 　ＴＥＬ：０５６４－５３－２１０５ 　　　　　　　担当：　光部
                    </p>
                    <div class="title">体操インストラクタ</div>
                    <p>
                        ◆主婦大歓迎<br> ◆有給休暇あり
                        <br> ◆社員登用制度あり
                        <br> ◆未経験でもインストラクターになりたい方大歓迎！
                        <br>
                        <br> 雇用形態：パート・アルバイト
                        <br> ○：時給：１，０００円以上＋交通費支給
                        <br> ○：資格：高卒以上、１年以上勤務できる方
                        <br> ○：時間：１５：００～１９：００
                        <br>
                        <br> ◆週１日でもＯＫ
                        <br> ◆曜日・時間は相談に応じます
                        <br>
                        <br> 問い合わせ先：
                        <br> 　サンスポーツクラブ美合
                        <br> 　岡崎市美合町字つむぎ南１番１　イオンタウン岡崎ショッピングモール内
                        <br> 　ＴＥＬ：０５６４－５４－３９２６ 　　　　　　　担当：　村越<br>
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>

<?php
get_footer();
?>
