<?php get_header(); ?>

      <section class="marquee"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home/top-main.jpg" alt="top main photo">
        <div class="centre-text">
          <div class="main">普通に働ける社会へ</div>
          <div class="tagline">
             POSSEは若者の「働くこと」に関する <br class="d-xs-block d-md-none">様々な問題に取り組むNPO法人です</div>
        </div>
      </section>
      <div class="lead-bar"></div>
      <section class="contact-us centre-text">
        <div class="title">お気軽にご相談ください</div>
        <div class="options">相談無料  /  秘密厳守  /  電話・メールOK</div>
      </section>
      <div class="dovetail-container">
        <div class="dovetail"></div>
      </div>
      <div class="row core-function">
        <section class="counselling col-md">
          <div class="centre-text"> 
            <div class="main">労働相談</div>
          </div>
          <div class="details"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home/counselling.png" alt="counselling icon">
            <ul>
              <li> <span>残業代が払われない </span></li>
              <li> <span>パワハラ、嫌がらせ </span></li>
              <li> <span>雇用を打ち切られた</span></li>
            </ul><a class="btn btn-primary" href="/労働相談">労働について相談したい</a>
          </div>
        </section>
        <section class="consultation col-md">
          <div class="centre-text"> 
            <div class="main">生活相談</div>
          </div>
          <div class="details"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home/consultation.png" alt="counselling icon">
            <ul>
              <li> <span>金銭的に生活が苦しい</span></li>
              <li> <span>奨学金が返せない</span></li>
              <li> <span>生活保護を受けたい</span></li>
            </ul><a class="btn btn-primary" href="/生活相談">生活について相談したい</a>
          </div>
        </section>
      </div>
      <section class="about">
        <div class="container">
          <div class="row">
            <div class="col-md">
              <div class="main">POSSE について</div>
              <div class="body">すべての人生はかけがえのないもの。<br>そして、すべての人生はもっと輝くことが できると思う。 <br>だから私たちは⽣み出したい。<br>探し求めている情報との<strong>出会い</strong>を。<br>感動を共にできる仲間との<strong>つながり</strong>を。<br>毎日を豊かにする<strong>アイデア</strong>を。</div>
            </div>
          </div>
        </div>
      </section>
      <section class="links container">
        <?php get_template_part( 'links', get_post_format() ); ?>

      </section>
      <div class="container latest">
        <div class="centre-text"> 
          <div class="title">最新情報</div>
        </div>
        <div class="separator"></div>
        <div class="row">
          <div class="col-md">
            <?php
              $args = array( 'numberposts' => '3', 'post_status' => 'publish' );
              $recent_posts = wp_get_recent_posts( $args );
              foreach( $recent_posts as $recent ){
                echo '<div class="news"><span class="date">' . the_time( get_option( 'date_format' ) ) . '</span><span class="headline">' . $recent["post_title"] . '</span> <div class="content">' . $recent["post_excerpt"] . '</div> </div>';
              }
              wp_reset_query();
            ?>
          </div>
        </div>
        <div class="btn-container"><a class="btn btn-primary" href="/ニュース">詳しく見る</a></div>
      </div>


<?php get_footer(); ?>
