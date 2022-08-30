<?php
get_header();

$tab = $_REQUEST['t'];
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
            <p>サンスポーツクラブ美合</p>
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

            <div class="tab-content-wrapper">
                <div id="tab-content-1" class="tab-content">
                    <div class="about">
                        <div>
                            <div class="about-photo">
                                <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/miai-master.png" alt="">
                                <div class="about-name">
                                    <p>主任</p>
                                    <p style="margin-left:10%;">太田　晃嘉</p>
                                </div>
                            </div>
                            <div class="title">将来の日本代表選手を目指して!</div>
                            <div>
                                <p>
                                    私達サンスポーツクラブ美合（体操）は、輝かしい実績を有し、日本代表、愛知県代表、クラブ代表など国内外で活躍している選手を数多く輩出しております。 国内有数の「最新式の体操器具」や国内外の「最新の練習方法」をいち早く採用しており、 「お子様の成長のために、より良いものを導入していく」ことがサンスポーツクラブ美合の大きな特徴と言えます。<br>
                                    <br>コーチ陣も充実しており、日本体育協会公認コーチ・上級コーチ、日本体育協会公認一種審判員なども当クラブに在籍し指導にあたっています。<br>
                                    <br>これらは通常コース、競技コースから成り立っており、通常コース（幼児、初級、中級、上級）では５種目（マット、跳び箱、鉄棒、平均台、トランポリン）の練習により、 柔軟性、筋力、平衡感覚、敏捷性、瞬発力、調整力、持久力などを養成し「体 からだ」を上手に「操あやつ」れるように「バランスの取れた身体づくり」 を目標に充実したスクーリングを実施指導しています。競技コース（育成、専門、選手）では基本練習を大切に、各自の能力にあった競技会に出場するなど、
                                    将来の日本代表選手を目指しています。
                                    <br>
                                    <br>通常のスクーリングの他「お試し体験教室」も実施しています。見学など自由に出来ますので、伝統と実績のサンスポーツクラブ美合をぜひご体験ください。
                                </p>
                            </div>
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/miai-about-1.png" alt="">
                            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/miai-about-2.png" alt="">
                            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/miai-about-3.png" alt="">
                            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/miai-about-4.png" alt="">
                            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/miai-about-5.png" alt="">
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
                        <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/miai-common.png" alt="">
                    </div>
                    <div class="title">時間割</div>
                    <div class="time-table">
                        <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/feather-timetable.png" alt="">
                    </div>
                    <div class="title">一般</div>
                    <div class="time-grid">
                        <div class="time-grid-row">
                            <p><b>幼児</b><br> 3歳〜年中
                            </p>
                            <p>遊びの要素を取り入れた内容で、運動能力を高め、集団行動が取れるように指導いたします。<br> ●週１回 <strong>7,700円</strong>（税込み／本体価格7,000円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>初級</b><br> 年長〜
                            </p>
                            <p>学校の体育の授業で行われる内容を中心とし、さらにあまり触れることのないトランポリンなどの器具を使って楽しく指導いたします。<br>
                                <br> ●週１回 <strong>7,700円</strong>（税込み／本体価格7,000円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>中級</b><br> 初級合格者
                            </p>
                            <p>初級のレベルをより確実にまた、少し高度な技術も指導いたします。<br>
                                <br> ●週１回 <strong>7,700円</strong>（税込み／本体価格7,000円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>上級</b><br> 中級合格者
                            </p>
                            <p>中級のレベルをより確実にまた、専門コースを目標に少しずつ高度な技術も指導いたします。<br> ●週１回 <strong>7,700円</strong>（税込み／本体価格7,000円）</p>
                        </div>
                    </div>
                    <div class="title">競技</div>
                    <div class="time-grid">
                        <div class="time-grid-row">
                            <p><b>専門</b>
                            </p>
                            <p>高度な技の習得を目標に指導いたします。（2時間の練習になります）
                                <br>●週１回 <strong>10,450円</strong>（税込み／本体価格9,500円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>選手</b><br>指導者推薦
                            </p>
                            <p>日本代表選手を目標に指導し、各競技大会に出場していきます。
                                <br>●週4回 <strong>17,600円</strong>（税込み／本体価格16,000円）
                                <br>●週5回 <strong>19,800円</strong>（税込み／本体価格18,000円）
                                <br>●週6回 <strong>22,000円</strong>（税込み／本体価格20,000円）</p>
                        </div>
                    </div>
                    <div class="title">その他</div>
                    <div class="time-grid">
                        <div class="time-grid-row">
                            <p><b>平日施設利用</b><br>予約制
                            </p>
                            <p>教室の行なわれていない時間帯に施設を自由に使って頂くことができます。
                                <br>●１時間 <strong>2,750円</strong>（税込み／本体価格2,500円）</p>
                        </div>
                        <div class="time-grid-row">
                            <p><b>大学受験</b><br>実技／予約制
                            </p>
                            <p>実技テストのアドバイスや練習方法を指導いたします。
                                <br>●１時間 <strong>3,300円</strong>（税込み／本体価格3,000円）</p>
                        </div>
                    </div>
                </div>
                <div id="tab-content-3" class="tab-content">
                    <div class="traffic-map" id="map">
                        <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/miai-map.png" alt="">
                    </div>
                    <div>
                        <b>サンスポーツクラブ美合　：　<br class="sp"></b>〒444-0802　岡崎市美合町字つむぎ南1番1 フリーダイヤル 0120-54-3926
                    </div>
                    <div class="traffic-map margin-top">
                        <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/miai-building.jpg" alt="">
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
                            <img src="<?php echo get_template_directory_uri();?>/assets/sunsportsclub/img/miai-about-2.png" alt="">
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
                                        <p></p>
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
                                        <p></p>
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
                                        <p></p>
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
                                        <p>●短期教室</p>
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
                                            $rest = array(22,23,24,25,26,27,28,29,30);
                                            $holiday = array(31);
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
                                            $holiday = array(13,14,15,16,17);
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
                                        <p>●評価月<br>(幼児・初級・中級)</p>
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
                                        <p></p>
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
                                        <p></p>
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
                                        <p></p>
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
                                        <p></p>
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
                                        <p>●評価月<br>（幼児・初級・中級）</p>
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

                    if(!in_array('miai',$child))
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
            </div>
        </div>
    </section>
</body>

<?php
get_footer();
?>
