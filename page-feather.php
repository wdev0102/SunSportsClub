<?php
get_header();

$tab = $_REQUEST['t'];
$flag = false;

if($tab == 6){
    $pwd = get_field('password');
    $pass= $_REQUEST['pass'];

    if ($pwd == $pass) {
        $flag = true;
    }
}

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
    <section class="main_visual">
        <div class="crumb">
            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/home.png" alt="">
            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/home-arrow.png" alt="">
            <p>サンスポーツクラブ羽根</p>
        </div>
        <div class="tabs">
            <input type="radio" name="tab" id="tab1" <?php if($tab == 1) echo "checked='checked'";?>>
            <label for="tab1">About</label>
            <input type="radio" name="tab" id="tab2">
            <label for="tab2">時間割</label>
            <input type="radio" name="tab" id="tab3" <?php if($tab == 3) echo "checked='checked'";?>>
            <label for="tab3">交通アクセス</label>
            <input type="radio" name="tab" id="tab4">
            <label for="tab4">日程表</label>
            <input type="radio" name="tab" id="tab5">
            <label for="tab5">お知らせ</label>
            <input type="radio" name="tab" id="tab6" <?php if($tab == 6) echo "checked='checked'";?>>
            <label for="tab6">選手コースお知らせ</label>

            <div class="tab-content-wrapper">
                <div id="tab-content-1" class="tab-content">
                    <div class="about">
                        <div>
                            <div class="about-photo">
                                <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/feather-master.png" alt="">
                                <div class="about-name">
                                    <p>主任</p>
                                    <p style="margin-left:10%;">光部　隆之</p>
                                </div>
                            </div>
                            <div class="title">心の通う指導を心掛けています!</div>
                            <div>
                                <p>
                                    サンスポーツクラブ羽根は、サンスポーツクラブグループの最初の施設として、約30年前に創設以来、（財）日本水泳連盟、 （社）日本スイミングクラブ協会に加盟しております。四半世紀という長い歴史をささえていただいたのは、地域の皆様のご理解と信頼によるものと感謝しております。<br>
                                    <br> 当クラブの特徴としましては、幼稚園児・小学生を対象にした初心者指導を得意とし、どのようなお子様にも対応できるよう特に力を注いでいます。 コーチの年齢層も20代前半からベテランに至るまで常時待機し、お子様に応じた心の通う指導を心掛けています。 すべてのコーチは最新の指導技術を学び、伝統に培われたノウハウとともに指導しております。<br>
                                    <br> 成人の方々を対象に妊婦さん、赤ちゃんとお母さん、各種障害をお持ちの方、そして水泳を愛する全ての年齢層の方々にいたるまで幅広くご満足いただけるよう、 バラエティにとんだ各種コースも充実させております。<br>
                                    <br> まだ一度もスイミングスクールの経験のない方、今現在、他のスクールに通わせていられるお子様の成長に不安をお持ちの方、見学やご相談も自由です。 ぜひ一度、お気軽にお尋ねください。スタッフ一同お待ち申し上げます。
                                </p>
                            </div>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/feather-about-1.png" alt="">
                            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/feather-about-2.png" alt="">
                            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/feather-about-3.png" alt="">
                            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/feather-about-4.png" alt="">
                            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/feather-about-5.png" alt="">
                        </div>
                    </div>
                </div>
                <div id="tab-content-2" class="tab-content">
                    <div class="time-common">
                        <div class="time-common-content">
                            <div class="title">各コース共通</div>
                            <p>●年間登録料　5,500円　●入会金はいただいておりません。<br>
                                <br> ※マタニティ、選手（体操）は年間登録料無料。
                                <br> ※２コース受講（水泳＋体操）の場合、割引制度があります。
                                <br> ※水泳、体操の選手コースには「特待生制度」があります。
                            </p>
                        </div>
                        <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/feather-common.png" alt="">
                    </div>
                    <div class="title">時間割</div>
                    <div class="time-table">
                        <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/feather-timetable.png" alt="">
                    </div>
                    <div class="title">子供</div>
                    <div class="time-grid">
                        <div class="time-grid-row">
                            <p><b>ベビー</b><br> 0歳～2歳のお子様と父母の方
                            </p>
                            <p>お父さんやお母さんと一緒に浮いたり、もぐったりしながら、コミュニケーションを深めます。 ＜赤ちゃんは、とっても喜びますよ。＞
                                <br> ●週１回 <strong>4,400円</strong>（税込み／本体価格4,000円）<br> ●週２回 <strong>7,150円</strong>（税込み／本体価格6,500円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>幼児・ステップ1</b><br> 3歳児・4歳～
                            </p>
                            <p>水遊びの中で水に慣れ、水に親しみ、健康な身体づくりをしていきます。<br> ●週１回 <strong>6,050円</strong>（税込み／本体価格5,500円）<br> ●週２回 <strong>7,700円</strong>（税込み／本体価格7,000円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>初級</b><br> 4歳～12歳
                            </p>
                            <p>水慣れから、基本泳法（クロール25m）までを、独自のカリキュラムで段階的に指導いたします。<br> ＜当社オリジナルの６段階指導＞
                                <br> ●週１回 <strong>7,700円</strong>（税込み／本体価格7,000円）<br> ●週２回 <strong>8,800円</strong>（税込み／本体価格8,000円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>中級</b><br> 初級合格者
                            </p>
                            <p>クロール・背泳ぎ・平泳ぎ・バタフライの４泳法を美しいフォームで、ターン付き50m以上泳げるように指導いたします。（心肺能力を高めます。）<br> ＜50m以上の泳力に＞
                                <br> ●週１回 <strong>7,700円</strong>（税込み／本体価格7,000円）<br> ●週２回 <strong>10,450円</strong>（税込み／本体価格9,500円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>上級</b><br> 中級合格者
                            </p>
                            <p>100m個人メドレー（バタフライ・背泳ぎ・平泳ぎ・クロール）の４泳法を指導いたします。100m個人メドレーで標準記録を切ると育成へ上がります。<br> ●週１回 <strong>7,700円</strong>（税込み／本体価格7,000円）<br> ●週２回 <strong>10,450円</strong>（税込み／本体価格9,500円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>育成</b><br> 上級合格者
                            </p>
                            <p>200m個人メドレー（バタフライ・背泳ぎ・平泳ぎ・クロール）で標準記録を切ると選手へ上がります。<br> ●週１回 <strong>7,700円</strong>（税込み／本体価格7,000円）<br> ●週２回 <strong>10,450円</strong>（税込み／本体価格9,500円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>選手</b><br> 育成合格者<br> 200m個人メドレーで標準記録を切った方
                            </p>
                            <p>明日のトップスイマーを目指して競泳指導いたします。<br> ＜特待生制度があります＞
                                <br> ●週６回 <strong>11,550円</strong>（税込み／本体価格10,500円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>リハビリ</b><br>4歳～18歳
                            </p>
                            <p>盲・肢体不自由・自閉症等の各種障害を持たれた方を対象に指導いたします。<br> ●週１回 <strong>7,700円</strong>（税込み／本体価格7,000円）</p>
                        </div>
                    </div>
                    <div class="title">大人</div>
                    <div class="time-grid">
                        <div class="time-grid-row">
                            <p><b>ウォーク＆スイム</b><br> 16歳以上の男女
                            </p>
                            <p>歩くコースと泳ぐコースに分かれているので、安全で自由に歩いたり泳いだりできます。<br> ＜指導はありません。＞
                                <br> ●回数自由 <strong>6,600円</strong>（税込み／本体価格6,000円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>マスターズ</b><br> 16歳以上の男女
                            </p>
                            <p>泳力に合わせてご希望に応じた指導をいたします。<br> ＜自由に泳ぐフリーコースもあります。＞
                                <br> ●回数自由 <strong>7,700円</strong>（税込み／本体価格7,000円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>レディース</b><br> 16歳以上の女
                            </p>
                            <p>全く泳げない方から上級者まで身体の状況に合わせて無理なく指導いたします。フリーコースの時間もあります。<br> ●週３回 <strong>7,700円</strong>（税込み／本体価格7,000円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>マタニティ</b><br> 妊娠16週以降で<br> 医師の許可を得た方
                            </p>
                            <p>お母さんの健康と丈夫な赤ちゃんを出産するための実績を積んだカリキュラムです。<br> ＜メディカルチェック付き＞
                                <br>

                                <color style="color:#e61724;font-weight:bold">現在休講中</color>
                            </p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>シニア</b><br> 中高年の男女
                            </p>
                            <p>年齢や体力に応じて無理のない指導をいたします。<br> ●週１回 <strong>7,700円</strong>（税込み／本体価格7,000円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>メディカル</b><br>16歳以上の男女
                            </p>
                            <p>水の浮力や水圧を利用して水中を歩いたりストレッチをすることにより腰痛や膝痛、高血圧、糖尿病などの改善に効果があります。<br> ●週１回 <strong>3,300円</strong>（税込み／本体価格3,000円）<br> ●週２回 <strong>4,950円</strong>（税込み／本体価格4,500円）</p>
                        </div>
                    </div>
                </div>
                <div id="tab-content-3" class="tab-content">
                    <div class="traffic-map" id="map">
                        <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/feather-map.png" alt="">
                    </div>
                    <div>
                        <b>サンスポーツクラブ羽根　：　<br class="sp"></b>〒444-0834　岡崎市柱町字下弁当1-3 フリーダイヤル 0120-53-2105
                    </div>
                    <div class="traffic-map margin-top">
                        <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/feather-building.jpg" alt="">
                    </div>
                </div>
                <div id="tab-content-4" class="tab-content">
                    <dv class="title">お願い</dv>
                    <div class="plan-ask">
                        <div class="plan-ask-content">
                            <div class="plan-ask-item">
                                <p>1.</p>
                                <p>各月ごとに色分けしてあります。月末から次月度が始まることがありますので注意して下さい。（例：6月度の開始は5月27日（金）となります。）</p>
                            </div>
                            <div class="plan-ask-item">
                                <p>2.</p>
                                <p>スクールバスご利用の方で、乗らない場合または欠席する場合は、必ずご連絡をください。</p>
                            </div>
                            <div class="plan-ask-item">
                                <p>3.</p>
                                <p>休会・退会は、希望される月の前の月の最終日程までにお手続きください。（例：6月休会を希望の場合は、5月26日（木）までにお手続きください。）</p>
                            </div>
                            <div class="plan-ask-item">
                                <p>4.</p>
                                <p>仮テスト・テスト・月例記録会は水泳のみのイベントとなりますので、ご注意ください。</p>
                            </div>
                        </div>
                        <div class="plan-ask-photo">
                            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/feather-about-4.png" alt="">
                        </div>
                    </div>
                    <div class="plan-month margin-top">
                        <div class="plan-month-item">
                            
                            <?php 
                                    // Get the current date
                                    $date = getdate();

                                    // Get the value of day, month, year
                                    $year = $date['year'];
                                    $date = $year."-4-1";
                                    $wday = date('w', strtotime($date));
                                    $mday = 1;
                                    $mon = 4;
                            ?>
                            <button class="collapsible"><?php echo $year."年 ".$mon."月度";?></button>
                            <div class="content">
                                <div class="plan-month-sign">
                                    <p></p>
                                    <p>＝通常教室のお休み</p>
                                    <p></p>
                                    <p>＝休館日</p>
                                </div>
                                <div class="calendar">
                                    <div class="days">
                                        <p>イベント</p>
                                        <p>●月例記録会……24日</p>
                                    </div>
                                    <div class="table">
                                        <table>
                                            <?php 

                                            $dayCount = $wday;
                                            $day = $mday;

                                            while($day > 0) {
                                                $days[$day--] = $dayCount--;
                                                if($dayCount < 0)
                                                    $dayCount = 6;
                                            }

                                            $dayCount = $wday;
                                            $day = $mday;

                                            if(checkdate($mon,31,$year))
                                                $lastDay = 31;
                                            elseif(checkdate($mon,30,$year))
                                                $lastDay = 30;
                                            elseif(checkdate($mon,29,$year))
                                                $lastDay = 29;
                                            elseif(checkdate($mon,28,$year))
                                                $lastDay = 28;

                                            while($day <= $lastDay) {
                                                $days[$day++] = $dayCount++;
                                                if($dayCount > 6)
                                                    $dayCount = 0;
                                            }	

                                            // Days to highlight
                                            $rest = array(1,30);
                                            $holiday = array();
                                            $subtest = array();
                                            
                                            echo("<tr>");
                                        //    echo("<th colspan='7' align='center'>".$year."年 ".$mon."月度</th>");
                                            echo("</tr>");
                                            echo("<tr>");
                                                echo("<td class='red bg-gray'>日</td>");
                                                echo("<td class='bg-gray'>月</td>");
                                                echo("<td class='bg-gray'>火</td>");
                                                echo("<td class='bg-gray'>水</td>");
                                                echo("<td class='bg-gray'>木</td>");
                                                echo("<td class='bg-gray'>金</td>");
                                                echo("<td class='bg-gray'>土</td>");
                                            echo("</tr>");

                                            $startDay = 0;
                                            $d = $days[1];

                                            echo("<tr>");
                                            while($startDay < $d) {
                                                echo("<td></td>");
                                                $startDay++;
                                            }

                                            for ($d=1;$d<=$lastDay;$d++) {
                                                if (in_array( $d, $rest))
                                                    $bg = "bg-blue";
                                                else if (in_array( $d, $holiday))
                                                    $bg = "bg-pink";
                                                else if (in_array( $d, $subtest))
                                                    $bg = "bg-orange";
                                                else
                                                    $bg = "bg-white";

                                                echo("<td class='$bg'>$d</td>");

                                                $startDay++;
                                                if($startDay > 6 && $d < $lastDay){
                                                    $startDay = 0;
                                                    echo("</tr>");
                                                    echo("<tr>");
                                                }
                                            }
                                            echo("</tr>");
                                            ?>
                                        </table>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="plan-month-item">
                            
                            <?php 
                                    // Get the current date
                                    $date = getdate();

                                    // Get the value of day, month, year
                                    $year = $date['year'];
                                    $date = $year."-5-1";
                                    $wday = date('w', strtotime($date));
                                    $mday = 1;
                                    $mon = 5;
                            ?>
                            <button class="collapsible"><?php echo $year."年 ".$mon."月度";?></button>
                            <div class="content">
                                <div class="plan-month-sign">
                                    <p></p>
                                    <p>＝通常教室のお休み</p>
                                    <p></p>
                                    <p>＝休館日</p>
                                </div>
                                <div class="calendar">
                                    <div class="days">
                                        <p>イベント</p>
                                        <p>●仮テスト……13日～19日</p>
                                        <p>●テスト……20日～26日</p>
                                        <p>●テスト……20日～26日</p>
                                    </div>
                                    <div class="table">
                                        <table>
                                            <?php 

                                            $dayCount = $wday;
                                            $day = $mday;

                                            while($day > 0) {
                                                $days[$day--] = $dayCount--;
                                                if($dayCount < 0)
                                                    $dayCount = 6;
                                            }

                                            $dayCount = $wday;
                                            $day = $mday;

                                            if(checkdate($mon,31,$year))
                                                $lastDay = 31;
                                            elseif(checkdate($mon,30,$year))
                                                $lastDay = 30;
                                            elseif(checkdate($mon,29,$year))
                                                $lastDay = 29;
                                            elseif(checkdate($mon,28,$year))
                                                $lastDay = 28;

                                            while($day <= $lastDay) {
                                                $days[$day++] = $dayCount++;
                                                if($dayCount > 6)
                                                    $dayCount = 0;
                                            }	

                                            // Days to highlight
                                            $rest = array(1,2,3,4,5);
                                            $holiday = array();
                                            $subtest = array(6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26);
                                            
                                            echo("<tr>");
                                        //    echo("<th colspan='7' align='center'>".$year."年 ".$mon."月度</th>");
                                            echo("</tr>");
                                            echo("<tr>");
                                                echo("<td class='red bg-gray'>日</td>");
                                                echo("<td class='bg-gray'>月</td>");
                                                echo("<td class='bg-gray'>火</td>");
                                                echo("<td class='bg-gray'>水</td>");
                                                echo("<td class='bg-gray'>木</td>");
                                                echo("<td class='bg-gray'>金</td>");
                                                echo("<td class='bg-gray'>土</td>");
                                            echo("</tr>");

                                            $startDay = 0;
                                            $d = $days[1];

                                            echo("<tr>");
                                            while($startDay < $d) {
                                                echo("<td></td>");
                                                $startDay++;
                                            }

                                            for ($d=1;$d<=$lastDay;$d++) {
                                                if (in_array( $d, $rest))
                                                    $bg = "bg-blue";
                                                else if (in_array( $d, $holiday))
                                                    $bg = "bg-pink";
                                                else if (in_array( $d, $subtest))
                                                    $bg = "bg-orange";
                                                else
                                                    $bg = "bg-white";

                                                echo("<td class='$bg'>$d</td>");

                                                $startDay++;
                                                if($startDay > 6 && $d < $lastDay){
                                                    $startDay = 0;
                                                    echo("</tr>");
                                                    echo("<tr>");
                                                }
                                            }
                                            echo("</tr>");
                                            ?>
                                        </table>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="plan-month-item">
                            
                            <?php 
                                    // Get the current date
                                    $date = getdate();

                                    // Get the value of day, month, year
                                    $year = $date['year'];
                                    $date = $year."-6-1";
                                    $wday = date('w', strtotime($date));
                                    $mday = 1;
                                    $mon = 6;

                            ?>
                            <button class="collapsible"><?php echo $year."年 ".$mon."月度";?></button>
                            <div class="content">
                                <div class="plan-month-sign">
                                    <p></p>
                                    <p>＝通常教室のお休み</p>
                                    <p></p>
                                    <p>＝休館日</p>
                                </div>
                                <div class="calendar">
                                    <div class="days">
                                        <p>イベント</p>
                                        <p>●月例記録会……19日</p>
                                    </div>
                                    <div class="table">
                                        <table>
                                            <?php 

                                            $dayCount = $wday;
                                            $day = $mday;

                                            while($day > 0) {
                                                $days[$day--] = $dayCount--;
                                                if($dayCount < 0)
                                                    $dayCount = 6;
                                            }

                                            $dayCount = $wday;
                                            $day = $mday;

                                            if(checkdate($mon,31,$year))
                                                $lastDay = 31;
                                            elseif(checkdate($mon,30,$year))
                                                $lastDay = 30;
                                            elseif(checkdate($mon,29,$year))
                                                $lastDay = 29;
                                            elseif(checkdate($mon,28,$year))
                                                $lastDay = 28;

                                            while($day <= $lastDay) {
                                                $days[$day++] = $dayCount++;
                                                if($dayCount > 6)
                                                    $dayCount = 0;
                                            }	

                                            // Days to highlight
                                            $rest = array();
                                            $holiday = array();
                                            $subtest = array(24,25,26,27,28,29,30);
                                            
                                            echo("<tr>");
                                        //    echo("<th colspan='7' align='center'>".$year."年 ".$mon."月度</th>");
                                            echo("</tr>");
                                            echo("<tr>");
                                                echo("<td class='red bg-gray'>日</td>");
                                                echo("<td class='bg-gray'>月</td>");
                                                echo("<td class='bg-gray'>火</td>");
                                                echo("<td class='bg-gray'>水</td>");
                                                echo("<td class='bg-gray'>木</td>");
                                                echo("<td class='bg-gray'>金</td>");
                                                echo("<td class='bg-gray'>土</td>");
                                            echo("</tr>");

                                            $startDay = 0;
                                            $d = $days[1];

                                            echo("<tr>");
                                            while($startDay < $d) {
                                                echo("<td></td>");
                                                $startDay++;
                                            }

                                            for ($d=1;$d<=$lastDay;$d++) {
                                                if (in_array( $d, $rest))
                                                    $bg = "bg-blue";
                                                else if (in_array( $d, $holiday))
                                                    $bg = "bg-pink";
                                                else if (in_array( $d, $subtest))
                                                    $bg = "bg-orange";
                                                else
                                                    $bg = "bg-white";

                                                echo("<td class='$bg'>$d</td>");

                                                $startDay++;
                                                if($startDay > 6 && $d < $lastDay){
                                                    $startDay = 0;
                                                    echo("</tr>");
                                                    echo("<tr>");
                                                }
                                            }
                                            echo("</tr>");
                                            ?>
                                        </table>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="plan-month-item">
                            
                            <?php 
                                    // Get the current date
                                    $date = getdate();

                                    // Get the value of day, month, year
                                    $year = $date['year'];
                                    $date = $year."-7-1";
                                    $wday = date('w', strtotime($date));
                                    $mday = 1;
                                    $mon = 7;

                            ?>
                            <button class="collapsible"><?php echo $year."年 ".$mon."月度";?></button>
                            <div class="content">
                                <div class="plan-month-sign">
                                    <p></p>
                                    <p>＝通常教室のお休み</p>
                                    <p></p>
                                    <p>＝休館日</p>
                                </div>
                                <div class="calendar">
                                    <div class="days">
                                        <p>イベント</p>
                                        <p>●仮テスト……8日～14日</p>
                                        <p>●テスト……15日～21日</p>
                                        <p>●月例記録会……17日</p>
                                    </div>
                                    <div class="table">
                                        <table>
                                            <?php 

                                            $dayCount = $wday;
                                            $day = $mday;

                                            while($day > 0) {
                                                $days[$day--] = $dayCount--;
                                                if($dayCount < 0)
                                                    $dayCount = 6;
                                            }

                                            $dayCount = $wday;
                                            $day = $mday;

                                            if(checkdate($mon,31,$year))
                                                $lastDay = 31;
                                            elseif(checkdate($mon,30,$year))
                                                $lastDay = 30;
                                            elseif(checkdate($mon,29,$year))
                                                $lastDay = 29;
                                            elseif(checkdate($mon,28,$year))
                                                $lastDay = 28;

                                            while($day <= $lastDay) {
                                                $days[$day++] = $dayCount++;
                                                if($dayCount > 6)
                                                    $dayCount = 0;
                                            }	

                                            // Days to highlight
                                            $rest = array(23,24,25,26,27,28,29,30,31);
                                            $holiday = array(22);
                                            $subtest = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21);
                                            
                                            echo("<tr>");
                                        //    echo("<th colspan='7' align='center'>".$year."年 ".$mon."月度</th>");
                                            echo("</tr>");
                                            echo("<tr>");
                                                echo("<td class='red bg-gray'>日</td>");
                                                echo("<td class='bg-gray'>月</td>");
                                                echo("<td class='bg-gray'>火</td>");
                                                echo("<td class='bg-gray'>水</td>");
                                                echo("<td class='bg-gray'>木</td>");
                                                echo("<td class='bg-gray'>金</td>");
                                                echo("<td class='bg-gray'>土</td>");
                                            echo("</tr>");

                                            $startDay = 0;
                                            $d = $days[1];

                                            echo("<tr>");
                                            while($startDay < $d) {
                                                echo("<td></td>");
                                                $startDay++;
                                            }

                                            for ($d=1;$d<=$lastDay;$d++) {
                                                if (in_array( $d, $rest))
                                                    $bg = "bg-blue";
                                                else if (in_array( $d, $holiday))
                                                    $bg = "bg-pink";
                                                else if (in_array( $d, $subtest))
                                                    $bg = "bg-orange";
                                                else
                                                    $bg = "bg-white";

                                                echo("<td class='$bg'>$d</td>");

                                                $startDay++;
                                                if($startDay > 6 && $d < $lastDay){
                                                    $startDay = 0;
                                                    echo("</tr>");
                                                    echo("<tr>");
                                                }
                                            }
                                            echo("</tr>");
                                            ?>
                                        </table>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="plan-month-item">
                            
                            <?php 
                                    // Get the current date
                                    $date = getdate();

                                    // Get the value of day, month, year
                                    $year = $date['year'];
                                    $date = $year."-8-1";
                                    $wday = date('w', strtotime($date));
                                    $mday = 1;
                                    $mon = 8;

                            ?>
                            <button class="collapsible"><?php echo $year."年 ".$mon."月度";?></button>
                            <div class="content">
                                <div class="plan-month-sign">
                                    <p></p>
                                    <p>＝通常教室のお休み</p>
                                    <p></p>
                                    <p>＝休館日</p>
                                </div>
                                <div class="calendar">
                                    <div class="days">
                                        <p>イベント</p>
                                        <p>●短期教室</p>
                                        <p>●月例記録会……28日</p>
                                    </div>
                                    <div class="table">
                                        <table>
                                            <?php 

                                            $dayCount = $wday;
                                            $day = $mday;

                                            while($day > 0) {
                                                $days[$day--] = $dayCount--;
                                                if($dayCount < 0)
                                                    $dayCount = 6;
                                            }

                                            $dayCount = $wday;
                                            $day = $mday;

                                            if(checkdate($mon,31,$year))
                                                $lastDay = 31;
                                            elseif(checkdate($mon,30,$year))
                                                $lastDay = 30;
                                            elseif(checkdate($mon,29,$year))
                                                $lastDay = 29;
                                            elseif(checkdate($mon,28,$year))
                                                $lastDay = 28;

                                            while($day <= $lastDay) {
                                                $days[$day++] = $dayCount++;
                                                if($dayCount > 6)
                                                    $dayCount = 0;
                                            }	

                                            // Days to highlight
                                            $rest = array(1,2,3);
                                            $holiday = array(4,12,13,14,15,16,17);
                                            $subtest = array();
                                            
                                            echo("<tr>");
                                        //    echo("<th colspan='7' align='center'>".$year."年 ".$mon."月度</th>");
                                            echo("</tr>");
                                            echo("<tr>");
                                                echo("<td class='red bg-gray'>日</td>");
                                                echo("<td class='bg-gray'>月</td>");
                                                echo("<td class='bg-gray'>火</td>");
                                                echo("<td class='bg-gray'>水</td>");
                                                echo("<td class='bg-gray'>木</td>");
                                                echo("<td class='bg-gray'>金</td>");
                                                echo("<td class='bg-gray'>土</td>");
                                            echo("</tr>");

                                            $startDay = 0;
                                            $d = $days[1];

                                            echo("<tr>");
                                            while($startDay < $d) {
                                                echo("<td></td>");
                                                $startDay++;
                                            }

                                            for ($d=1;$d<=$lastDay;$d++) {
                                                if (in_array( $d, $rest))
                                                    $bg = "bg-blue";
                                                else if (in_array( $d, $holiday))
                                                    $bg = "bg-pink";
                                                else if (in_array( $d, $subtest))
                                                    $bg = "bg-orange";
                                                else
                                                    $bg = "bg-white";

                                                echo("<td class='$bg'>$d</td>");

                                                $startDay++;
                                                if($startDay > 6 && $d < $lastDay){
                                                    $startDay = 0;
                                                    echo("</tr>");
                                                    echo("<tr>");
                                                }
                                            }
                                            echo("</tr>");
                                            ?>
                                        </table>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="plan-month-item">
                            
                            <?php 
                                    // Get the current date
                                    $date = getdate();

                                    // Get the value of day, month, year
                                    $year = $date['year'];
                                    $date = $year."-9-1";
                                    $wday = date('w', strtotime($date));
                                    $mday = 1;
                                    $mon = 9;

                            ?>
                            <button class="collapsible"><?php echo $year."年 ".$mon."月度";?></button>
                            <div class="content">
                                <div class="plan-month-sign">
                                    <p></p>
                                    <p>＝通常教室のお休み</p>
                                    <p></p>
                                    <p>＝休館日</p>
                                </div>
                                <div class="calendar">
                                    <div class="days">
                                        <p>イベント</p>
                                        <p>●仮テスト……15日～21日</p>
                                        <p>●テスト……22日～28日</p>
                                        <p>●月例記録会……25日</p>
                                    </div>
                                    <div class="table">
                                        <table>
                                            <?php 

                                            $dayCount = $wday;
                                            $day = $mday;

                                            while($day > 0) {
                                                $days[$day--] = $dayCount--;
                                                if($dayCount < 0)
                                                    $dayCount = 6;
                                            }

                                            $dayCount = $wday;
                                            $day = $mday;

                                            if(checkdate($mon,31,$year))
                                                $lastDay = 31;
                                            elseif(checkdate($mon,30,$year))
                                                $lastDay = 30;
                                            elseif(checkdate($mon,29,$year))
                                                $lastDay = 29;
                                            elseif(checkdate($mon,28,$year))
                                                $lastDay = 28;

                                            while($day <= $lastDay) {
                                                $days[$day++] = $dayCount++;
                                                if($dayCount > 6)
                                                    $dayCount = 0;
                                            }	

                                            // Days to highlight
                                            $rest = array();
                                            $holiday = array(29);
                                            $subtest = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28);
                                            
                                            echo("<tr>");
                                        //    echo("<th colspan='7' align='center'>".$year."年 ".$mon."月度</th>");
                                            echo("</tr>");
                                            echo("<tr>");
                                                echo("<td class='red bg-gray'>日</td>");
                                                echo("<td class='bg-gray'>月</td>");
                                                echo("<td class='bg-gray'>火</td>");
                                                echo("<td class='bg-gray'>水</td>");
                                                echo("<td class='bg-gray'>木</td>");
                                                echo("<td class='bg-gray'>金</td>");
                                                echo("<td class='bg-gray'>土</td>");
                                            echo("</tr>");

                                            $startDay = 0;
                                            $d = $days[1];

                                            echo("<tr>");
                                            while($startDay < $d) {
                                                echo("<td></td>");
                                                $startDay++;
                                            }

                                            for ($d=1;$d<=$lastDay;$d++) {
                                                if (in_array( $d, $rest))
                                                    $bg = "bg-blue";
                                                else if (in_array( $d, $holiday))
                                                    $bg = "bg-pink";
                                                else if (in_array( $d, $subtest))
                                                    $bg = "bg-orange";
                                                else
                                                    $bg = "bg-white";

                                                echo("<td class='$bg'>$d</td>");

                                                $startDay++;
                                                if($startDay > 6 && $d < $lastDay){
                                                    $startDay = 0;
                                                    echo("</tr>");
                                                    echo("<tr>");
                                                }
                                            }
                                            echo("</tr>");
                                            ?>
                                        </table>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="plan-month-item">
                            
                            <?php 
                                    // Get the current date
                                    $date = getdate();

                                    // Get the value of day, month, year
                                    $year = $date['year'];                                    
                                    $mon = 10;
                                    $date = $year."-".$mon."-1";
                                    $wday = date('w', strtotime($date));
                                    $mday = 1;

                            ?>
                            <button class="collapsible"><?php echo $year."年 ".$mon."月度";?></button>
                            <div class="content">
                                <div class="plan-month-sign">
                                    <p></p>
                                    <p>＝通常教室のお休み</p>
                                    <p></p>
                                    <p>＝休館日</p>
                                </div>
                                <div class="calendar">
                                    <div class="days">
                                        <p>イベント</p>
                                        <p>●月例記録会……23日</p>
                                    </div>
                                    <div class="table">
                                        <table>
                                            <?php 

                                            $dayCount = $wday;
                                            $day = $mday;

                                            while($day > 0) {
                                                $days[$day--] = $dayCount--;
                                                if($dayCount < 0)
                                                    $dayCount = 6;
                                            }

                                            $dayCount = $wday;
                                            $day = $mday;

                                            if(checkdate($mon,31,$year))
                                                $lastDay = 31;
                                            elseif(checkdate($mon,30,$year))
                                                $lastDay = 30;
                                            elseif(checkdate($mon,29,$year))
                                                $lastDay = 29;
                                            elseif(checkdate($mon,28,$year))
                                                $lastDay = 28;

                                            while($day <= $lastDay) {
                                                $days[$day++] = $dayCount++;
                                                if($dayCount > 6)
                                                    $dayCount = 0;
                                            }	

                                            // Days to highlight
                                            $rest = array();
                                            $holiday = array();
                                            $subtest = array(28,29,30,31);
                                            
                                            echo("<tr>");
                                        //    echo("<th colspan='7' align='center'>".$year."年 ".$mon."月度</th>");
                                            echo("</tr>");
                                            echo("<tr>");
                                                echo("<td class='red bg-gray'>日</td>");
                                                echo("<td class='bg-gray'>月</td>");
                                                echo("<td class='bg-gray'>火</td>");
                                                echo("<td class='bg-gray'>水</td>");
                                                echo("<td class='bg-gray'>木</td>");
                                                echo("<td class='bg-gray'>金</td>");
                                                echo("<td class='bg-gray'>土</td>");
                                            echo("</tr>");

                                            $startDay = 0;
                                            $d = $days[1];

                                            echo("<tr>");
                                            while($startDay < $d) {
                                                echo("<td></td>");
                                                $startDay++;
                                            }

                                            for ($d=1;$d<=$lastDay;$d++) {
                                                if (in_array( $d, $rest))
                                                    $bg = "bg-blue";
                                                else if (in_array( $d, $holiday))
                                                    $bg = "bg-pink";
                                                else if (in_array( $d, $subtest))
                                                    $bg = "bg-orange";
                                                else
                                                    $bg = "bg-white";

                                                echo("<td class='$bg'>$d</td>");

                                                $startDay++;
                                                if($startDay > 6 && $d < $lastDay){
                                                    $startDay = 0;
                                                    echo("</tr>");
                                                    echo("<tr>");
                                                }
                                            }
                                            echo("</tr>");
                                            ?>
                                        </table>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="plan-month-item">
                            
                            <?php 
                                    // Get the current date
                                    $date = getdate();

                                    // Get the value of day, month, year
                                    $year = $date['year'];                                    
                                    $mon = 11;
                                    $date = $year."-".$mon."-1";
                                    $wday = date('w', strtotime($date));
                                    $mday = 1;

                            ?>
                            <button class="collapsible"><?php echo $year."年 ".$mon."月度";?></button>
                            <div class="content">
                                <div class="plan-month-sign">
                                    <p></p>
                                    <p>＝通常教室のお休み</p>
                                    <p></p>
                                    <p>＝休館日</p>
                                </div>
                                <div class="calendar">
                                    <div class="days">
                                        <p>イベント</p>
                                        <p>●仮テスト……11日～17日</p>
                                        <p>●テスト……18日～24日</p>
                                        <p>●月例記録会……20日</p>
                                    </div>
                                    <div class="table">
                                        <table>
                                            <?php 

                                            $dayCount = $wday;
                                            $day = $mday;

                                            while($day > 0) {
                                                $days[$day--] = $dayCount--;
                                                if($dayCount < 0)
                                                    $dayCount = 6;
                                            }

                                            $dayCount = $wday;
                                            $day = $mday;

                                            if(checkdate($mon,31,$year))
                                                $lastDay = 31;
                                            elseif(checkdate($mon,30,$year))
                                                $lastDay = 30;
                                            elseif(checkdate($mon,29,$year))
                                                $lastDay = 29;
                                            elseif(checkdate($mon,28,$year))
                                                $lastDay = 28;

                                            while($day <= $lastDay) {
                                                $days[$day++] = $dayCount++;
                                                if($dayCount > 6)
                                                    $dayCount = 0;
                                            }	

                                            // Days to highlight
                                            $rest = array();
                                            $holiday = array();
                                            $subtest = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24);
                                            
                                            echo("<tr>");
                                        //    echo("<th colspan='7' align='center'>".$year."年 ".$mon."月度</th>");
                                            echo("</tr>");
                                            echo("<tr>");
                                                echo("<td class='red bg-gray'>日</td>");
                                                echo("<td class='bg-gray'>月</td>");
                                                echo("<td class='bg-gray'>火</td>");
                                                echo("<td class='bg-gray'>水</td>");
                                                echo("<td class='bg-gray'>木</td>");
                                                echo("<td class='bg-gray'>金</td>");
                                                echo("<td class='bg-gray'>土</td>");
                                            echo("</tr>");

                                            $startDay = 0;
                                            $d = $days[1];

                                            echo("<tr>");
                                            while($startDay < $d) {
                                                echo("<td></td>");
                                                $startDay++;
                                            }

                                            for ($d=1;$d<=$lastDay;$d++) {
                                                if (in_array( $d, $rest))
                                                    $bg = "bg-blue";
                                                else if (in_array( $d, $holiday))
                                                    $bg = "bg-pink";
                                                else if (in_array( $d, $subtest))
                                                    $bg = "bg-orange";
                                                else
                                                    $bg = "bg-white";

                                                echo("<td class='$bg'>$d</td>");

                                                $startDay++;
                                                if($startDay > 6 && $d < $lastDay){
                                                    $startDay = 0;
                                                    echo("</tr>");
                                                    echo("<tr>");
                                                }
                                            }
                                            echo("</tr>");
                                            ?>
                                        </table>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="plan-month-item">
                            
                            <?php 
                                    // Get the current date
                                    $date = getdate();

                                    // Get the value of day, month, year
                                    $year = $date['year'];                                    
                                    $mon = 12;
                                    $date = $year."-".$mon."-1";
                                    $wday = date('w', strtotime($date));
                                    $mday = 1;

                            ?>
                            <button class="collapsible"><?php echo $year."年 ".$mon."月度";?></button>
                            <div class="content">
                                <div class="plan-month-sign">
                                    <p></p>
                                    <p>＝通常教室のお休み</p>
                                    <p></p>
                                    <p>＝休館日</p>
                                </div>
                                <div class="calendar">
                                    <div class="days">
                                        <p>イベント</p>
                                        <p>●短期教室</p>
                                        <p>●月例記録会……18日</p>
                                    </div>
                                    <div class="table">
                                        <table>
                                            <?php 

                                            $dayCount = $wday;
                                            $day = $mday;

                                            while($day > 0) {
                                                $days[$day--] = $dayCount--;
                                                if($dayCount < 0)
                                                    $dayCount = 6;
                                            }

                                            $dayCount = $wday;
                                            $day = $mday;

                                            if(checkdate($mon,31,$year))
                                                $lastDay = 31;
                                            elseif(checkdate($mon,30,$year))
                                                $lastDay = 30;
                                            elseif(checkdate($mon,29,$year))
                                                $lastDay = 29;
                                            elseif(checkdate($mon,28,$year))
                                                $lastDay = 28;

                                            while($day <= $lastDay) {
                                                $days[$day++] = $dayCount++;
                                                if($dayCount > 6)
                                                    $dayCount = 0;
                                            }	

                                            // Days to highlight
                                            $rest = array(24,25,26,27,28,29);
                                            $holiday = array(23,30,31);
                                            $subtest = array();
                                            
                                            echo("<tr>");
                                        //    echo("<th colspan='7' align='center'>".$year."年 ".$mon."月度</th>");
                                            echo("</tr>");
                                            echo("<tr>");
                                                echo("<td class='red bg-gray'>日</td>");
                                                echo("<td class='bg-gray'>月</td>");
                                                echo("<td class='bg-gray'>火</td>");
                                                echo("<td class='bg-gray'>水</td>");
                                                echo("<td class='bg-gray'>木</td>");
                                                echo("<td class='bg-gray'>金</td>");
                                                echo("<td class='bg-gray'>土</td>");
                                            echo("</tr>");

                                            $startDay = 0;
                                            $d = $days[1];

                                            echo("<tr>");
                                            while($startDay < $d) {
                                                echo("<td></td>");
                                                $startDay++;
                                            }

                                            for ($d=1;$d<=$lastDay;$d++) {
                                                if (in_array( $d, $rest))
                                                    $bg = "bg-blue";
                                                else if (in_array( $d, $holiday))
                                                    $bg = "bg-pink";
                                                else if (in_array( $d, $subtest))
                                                    $bg = "bg-orange";
                                                else
                                                    $bg = "bg-white";

                                                echo("<td class='$bg'>$d</td>");

                                                $startDay++;
                                                if($startDay > 6 && $d < $lastDay){
                                                    $startDay = 0;
                                                    echo("</tr>");
                                                    echo("<tr>");
                                                }
                                            }
                                            echo("</tr>");
                                            ?>
                                        </table>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="plan-month-item">
                            
                            <?php 
                                    // Get the current date
                                    $date = getdate();

                                    // Get the value of day, month, year
                                    $year = $date['year'] + 1;                                    
                                    $mon = 1;
                                    $date = $year."-".$mon."-1";
                                    $wday = date('w', strtotime($date));
                                    $mday = 1;

                            ?>
                            <button class="collapsible"><?php echo $year."年 ".$mon."月度";?></button>
                            <div class="content">
                                <div class="plan-month-sign">
                                    <p></p>
                                    <p>＝通常教室のお休み</p>
                                    <p></p>
                                    <p>＝休館日</p>
                                </div>
                                <div class="calendar">
                                    <div class="days">
                                        <p>イベント</p>
                                        <p>●仮テスト……13日～19日</p>
                                        <p>●テスト……20日～26日</p>
                                        <p>●月例記録会……22日</p>
                                    </div>
                                    <div class="table">
                                        <table>
                                            <?php 

                                            $dayCount = $wday;
                                            $day = $mday;

                                            while($day > 0) {
                                                $days[$day--] = $dayCount--;
                                                if($dayCount < 0)
                                                    $dayCount = 6;
                                            }

                                            $dayCount = $wday;
                                            $day = $mday;

                                            if(checkdate($mon,31,$year))
                                                $lastDay = 31;
                                            elseif(checkdate($mon,30,$year))
                                                $lastDay = 30;
                                            elseif(checkdate($mon,29,$year))
                                                $lastDay = 29;
                                            elseif(checkdate($mon,28,$year))
                                                $lastDay = 28;

                                            while($day <= $lastDay) {
                                                $days[$day++] = $dayCount++;
                                                if($dayCount > 6)
                                                    $dayCount = 0;
                                            }	

                                            // Days to highlight
                                            $rest = array();
                                            $holiday = array(1,2,3,4,5);
                                            $subtest = array(6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26);
                                            
                                            echo("<tr>");
                                        //    echo("<th colspan='7' align='center'>".$year."年 ".$mon."月度</th>");
                                            echo("</tr>");
                                            echo("<tr>");
                                                echo("<td class='red bg-gray'>日</td>");
                                                echo("<td class='bg-gray'>月</td>");
                                                echo("<td class='bg-gray'>火</td>");
                                                echo("<td class='bg-gray'>水</td>");
                                                echo("<td class='bg-gray'>木</td>");
                                                echo("<td class='bg-gray'>金</td>");
                                                echo("<td class='bg-gray'>土</td>");
                                            echo("</tr>");

                                            $startDay = 0;
                                            $d = $days[1];

                                            echo("<tr>");
                                            while($startDay < $d) {
                                                echo("<td></td>");
                                                $startDay++;
                                            }

                                            for ($d=1;$d<=$lastDay;$d++) {
                                                if (in_array( $d, $rest))
                                                    $bg = "bg-blue";
                                                else if (in_array( $d, $holiday))
                                                    $bg = "bg-pink";
                                                else if (in_array( $d, $subtest))
                                                    $bg = "bg-orange";
                                                else
                                                    $bg = "bg-white";

                                                echo("<td class='$bg'>$d</td>");

                                                $startDay++;
                                                if($startDay > 6 && $d < $lastDay){
                                                    $startDay = 0;
                                                    echo("</tr>");
                                                    echo("<tr>");
                                                }
                                            }
                                            echo("</tr>");
                                            ?>
                                        </table>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="plan-month-item">
                            
                            <?php 
                                    // Get the current date
                                    $date = getdate();

                                    // Get the value of day, month, year
                                    $year = $date['year'] + 1;                                    
                                    $mon = 2;
                                    $date = $year."-".$mon."-1";
                                    $wday = date('w', strtotime($date));
                                    $mday = 1;

                            ?>
                            <button class="collapsible"><?php echo $year."年 ".$mon."月度";?></button>
                            <div class="content">
                                <div class="plan-month-sign">
                                    <p></p>
                                    <p>＝通常教室のお休み</p>
                                    <p></p>
                                    <p>＝休館日</p>
                                </div>
                                <div class="calendar">
                                    <div class="days">
                                        <p>イベント</p>
                                        <p>●月例記録会……19日</p>
                                    </div>
                                    <div class="table">
                                        <table>
                                            <?php 

                                            $dayCount = $wday;
                                            $day = $mday;

                                            while($day > 0) {
                                                $days[$day--] = $dayCount--;
                                                if($dayCount < 0)
                                                    $dayCount = 6;
                                            }

                                            $dayCount = $wday;
                                            $day = $mday;

                                            if(checkdate($mon,31,$year))
                                                $lastDay = 31;
                                            elseif(checkdate($mon,30,$year))
                                                $lastDay = 30;
                                            elseif(checkdate($mon,29,$year))
                                                $lastDay = 29;
                                            elseif(checkdate($mon,28,$year))
                                                $lastDay = 28;

                                            while($day <= $lastDay) {
                                                $days[$day++] = $dayCount++;
                                                if($dayCount > 6)
                                                    $dayCount = 0;
                                            }	

                                            // Days to highlight
                                            $rest = array();
                                            $holiday = array();
                                            $subtest = array(24,25,26,27,28);
                                            
                                            echo("<tr>");
                                        //    echo("<th colspan='7' align='center'>".$year."年 ".$mon."月度</th>");
                                            echo("</tr>");
                                            echo("<tr>");
                                                echo("<td class='red bg-gray'>日</td>");
                                                echo("<td class='bg-gray'>月</td>");
                                                echo("<td class='bg-gray'>火</td>");
                                                echo("<td class='bg-gray'>水</td>");
                                                echo("<td class='bg-gray'>木</td>");
                                                echo("<td class='bg-gray'>金</td>");
                                                echo("<td class='bg-gray'>土</td>");
                                            echo("</tr>");

                                            $startDay = 0;
                                            $d = $days[1];

                                            echo("<tr>");
                                            while($startDay < $d) {
                                                echo("<td></td>");
                                                $startDay++;
                                            }

                                            for ($d=1;$d<=$lastDay;$d++) {
                                                if (in_array( $d, $rest))
                                                    $bg = "bg-blue";
                                                else if (in_array( $d, $holiday))
                                                    $bg = "bg-pink";
                                                else if (in_array( $d, $subtest))
                                                    $bg = "bg-orange";
                                                else
                                                    $bg = "bg-white";

                                                echo("<td class='$bg'>$d</td>");

                                                $startDay++;
                                                if($startDay > 6 && $d < $lastDay){
                                                    $startDay = 0;
                                                    echo("</tr>");
                                                    echo("<tr>");
                                                }
                                            }
                                            echo("</tr>");
                                            ?>
                                        </table>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="plan-month-item">
                            
                            <?php 
                                    // Get the current date
                                    $date = getdate();

                                    // Get the value of day, month, year
                                    $year = $date['year'] + 1;                                    
                                    $mon = 3;
                                    $date = $year."-".$mon."-1";
                                    $wday = date('w', strtotime($date));
                                    $mday = 1;

                            ?>
                            <button class="collapsible"><?php echo $year."年 ".$mon."月度";?></button>
                            <div class="content">
                                <div class="plan-month-sign">
                                    <p></p>
                                    <p>＝通常教室のお休み</p>
                                    <p></p>
                                    <p>＝休館日</p>
                                </div>
                                <div class="calendar">
                                    <div class="days">
                                        <p>イベント</p>
                                        <p>●短期教室</p>
                                        <p>●仮テスト……10日～16日</p>
                                        <p>●テスト……17日～23日</p>
                                        <p>●月例記録会……19日</p>
                                    </div>
                                    <div class="table">
                                        <table>
                                            <?php 

                                            $dayCount = $wday;
                                            $day = $mday;

                                            while($day > 0) {
                                                $days[$day--] = $dayCount--;
                                                if($dayCount < 0)
                                                    $dayCount = 6;
                                            }

                                            $dayCount = $wday;
                                            $day = $mday;

                                            if(checkdate($mon,31,$year))
                                                $lastDay = 31;
                                            elseif(checkdate($mon,30,$year))
                                                $lastDay = 30;
                                            elseif(checkdate($mon,29,$year))
                                                $lastDay = 29;
                                            elseif(checkdate($mon,28,$year))
                                                $lastDay = 28;

                                            while($day <= $lastDay) {
                                                $days[$day++] = $dayCount++;
                                                if($dayCount > 6)
                                                    $dayCount = 0;
                                            }	

                                            // Days to highlight
                                            $rest = array(25,26,27,28,29,30);
                                            $holiday = array(24,31);
                                            $subtest = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23);
                                            
                                            echo("<tr>");
                                        //    echo("<th colspan='7' align='center'>".$year."年 ".$mon."月度</th>");
                                            echo("</tr>");
                                            echo("<tr>");
                                                echo("<td class='red bg-gray'>日</td>");
                                                echo("<td class='bg-gray'>月</td>");
                                                echo("<td class='bg-gray'>火</td>");
                                                echo("<td class='bg-gray'>水</td>");
                                                echo("<td class='bg-gray'>木</td>");
                                                echo("<td class='bg-gray'>金</td>");
                                                echo("<td class='bg-gray'>土</td>");
                                            echo("</tr>");

                                            $startDay = 0;
                                            $d = $days[1];

                                            echo("<tr>");
                                            while($startDay < $d) {
                                                echo("<td></td>");
                                                $startDay++;
                                            }

                                            for ($d=1;$d<=$lastDay;$d++) {
                                                if (in_array( $d, $rest))
                                                    $bg = "bg-blue";
                                                else if (in_array( $d, $holiday))
                                                    $bg = "bg-pink";
                                                else if (in_array( $d, $subtest))
                                                    $bg = "bg-orange";
                                                else
                                                    $bg = "bg-white";

                                                echo("<td class='$bg'>$d</td>");

                                                $startDay++;
                                                if($startDay > 6 && $d < $lastDay){
                                                    $startDay = 0;
                                                    echo("</tr>");
                                                    echo("<tr>");
                                                }
                                            }
                                            echo("</tr>");
                                            ?>
                                        </table>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-content-5" class="tab-content">
                    
                    <?php 
                    $args = array(
                        'post_type'=> 'post',
                        'orderby'    => 'ID',
                        'post_status' => 'publish',
                        'order'    => 'DESC',
                        'posts_per_page' => -1 // this will retrive all the post that is published 
                        );
                        
                    $result = new WP_Query( $args );
                    if ( $result-> have_posts() ) : ?>

                    <?php
                    while ( $result->have_posts() ) : $result->the_post(); 

                    $child_cat_list = get_the_category();
                    

                    $child = [];
                    for($i=0; $i< count($child_cat_list); $i++)
                        $child[$i] = get_the_category()[$i]->slug;

                    $category = get_the_category();
                    
                    //$parent = get_cat_name($category[0]->category_parent);//get parent category name
                    $parent = $category[0]->category_parent;//get parent slug
                    $category_parent = get_term($parent, 'category');
                    $parent_slug = $category_parent->slug;
                    
                    if($parent_slug != 'news' || $parent_slug == 'information')
                    continue;

                    if(!in_array('feather',$child))
                    continue;
                    ?>

                    <div class="notification">
                        <div class="title"><?php echo get_the_title();?></div>
                        <div class="notification-date">
                            <p><?php echo get_field('school');//echo get_the_tags()[0]->name;?></p>
                            <p><?php echo get_the_date('Y年m月d日'); ?></p>
                        </div>
                        <div class="notification-content"><?php echo get_the_content();?></div>
                    </div>
                    <div class="break-line"></div>

                    <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>

                </div>
                <div id="tab-content-6" class="tab-content">
                    <?php if (!$flag) :?>

                    <div class="course" style="display:<??>">
                        <div class="course-protect">保護中: </div>
                        <div>このコンテンツはパスワードで保護されています。閲覧するには以下にパスワードを入力してください。</div>
                        <div class="course-confirm" id = "confirm">
                            <p>パスワード: </p>
                            <input type="text" id ="pass">
                            <button onclick="confirm()">確定</button>
                        </div>
                    </div>
                    <?php endif;?>

                    <?php if ($flag) :?>

                        <?php 
                    $args = array(
                        'post_type'=> 'post',
                        'orderby'    => 'ID',
                        'post_status' => 'publish',
                        'order'    => 'DESC',
                        'posts_per_page' => -1 // this will retrive all the post that is published 
                        );
                        
                    $result = new WP_Query( $args );
                    if ( $result-> have_posts() ) : ?>

                    <?php
                    while ( $result->have_posts() ) : $result->the_post(); 

                    $child_cat_list = get_the_category();
                    

                    $child = [];
                    for($i=0; $i< count($child_cat_list); $i++)
                        $child[$i] = get_the_category()[$i]->slug;

                    $category = get_the_category();
                    
                    //$parent = get_cat_name($category[0]->category_parent);//get parent category name
                    $parent = $category[0]->category_parent;//get parent slug
                    $category_parent = get_term($parent, 'category');
                    $parent_slug = $category_parent->slug;
                    
                    if($parent_slug == 'news' || $parent_slug != 'information')
                    continue;

                    if(!in_array('feather-information',$child))
                    continue;
                    ?>

                    <div class="notification">
                        <div class="title"><?php echo get_the_title();?></div>
                        <div class="notification-date">
                            <p><?php echo get_field('school');//echo get_the_tags()[0]->name;?></p>
                            <p><?php echo get_the_date('Y年m月d日'); ?></p>
                        </div>
                        <div class="notification-content"><?php echo get_the_content();?></div>
                    </div>
                    <div class="break-line"></div>

                    <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>

                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>
</body>

<?php
get_footer();
?>
