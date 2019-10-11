<?php get_header(); ?>

      <div class="counselling-top">
        <div class="row counselling">
          <div class="col-md">
            <div class="centre-text">
              <div class="main">生活相談</div>
            </div>
          </div>
          <div class="marquee">
            <picture>
              <source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/counselling/counselling-marquee-sm.jpg" media="(max-width: 768px)">
              <source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/counselling/counselling-marquee.jpg" media="(min: 769px)"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/counselling/counselling-marquee.jpg" alt="marquee image">
            </picture>
          </div>
        </div>
        <section class="opener">
          <div class="container">
            <div class="row">
              <div class="col-md">
                <div class="centre-text">
                  <div class="lead">生活保護の利用や奨学金に関するお困りごとについて、<br/>NPO法人POSSEでは</br>相談を無料で受け付けています。</div>
                  <div class="lead-text">
                    <ul>
                      <li>生活に困窮し、役所に生活保護の申請に行ったが、申請させてくれない</li>
                      <li>住居がない状態で申請に行ったら、施設に入れと言われた</li>
                      <li>ケースワーカーからひどい言葉を投げつけられた</li>
                      <li>ケースワーカーから誓約書や生活保護の辞退届を書くよう迫られている</li>
                    </ul>

                    <p>これらのような、生活保護の利用に関するトラブルの相談を受け付けています。</p>
                  </div>
                </div><a class="green btn btn-primary" href="/seikatsusoudanotoiawase">相談フォームに進む</a>
              </div>
            </div>
          </div>
        </section>
        <section class="solutions">
          <div class="container">
            <div class="row head">
              <div class="col-md">
                <div class="centre-text">
                  <div class="lead">解決のためにPOSSEができること</div>
                </div>
                <div class="separator"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md">
                <div class="centre-text">
                  <div class="icon circle-icon"><img class="img" src="<?php bloginfo('stylesheet_directory'); ?>/images/counselling/advice.png" alt="book icon"></div>
                  <div class="lead">法律の知識、<br>解決法のアドバイス</div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-md">
                      <div class="content">
                         ご連絡いただいた内容を元に、相談内容に応じた法律の知識や、解決の仕方をアドバイスいたします。</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div class="centre-text">
                  <div class="icon circle-icon"><img class="img" src="<?php bloginfo('stylesheet_directory'); ?>/images/counselling/support.png" alt="raised hands icon"></div>
                  <div class="lead">解決のための<br>具体的なサポート</div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-md">
                      <div class="content">
                         職場がなかなか適切な対応をとらないケースや、あまりに悪質なケースは、NPO法人POSSEのスタッフが解決のための具体的なサポートをいたします。</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div class="centre-text">
                  <div class="icon circle-icon"><img class="img" src="<?php bloginfo('stylesheet_directory'); ?>/images/counselling/help.png" alt="smart lady icon"></div>
                  <div class="lead">専門家の紹介</div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-md">
                      <div class="content">
                         問題に応じて、ユニオン（労働組合）や弁護士などの専門家を紹介することもあります。</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="experts">
          <div class="container">
            <div class="row">
              <div class="col-md">
                <div class="centre-text">
                  <div class="lead">相談の流れ</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md">
                <div class="centre-text">
                  <picture>
                    <source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/counselling/flow-vertical.png" media="(max-width: 768px)">
                    <source srcset="<?php bloginfo('stylesheet_directory'); ?>/images/counselling/flow-horizontal.png" media="(min-width: 769px)"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/counselling/flow-horizontal.png" alt="flowchart">
                  </picture>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md">
                <div class="centre-text">
                  <div class="bottom-link"><a class="link link-caret" href="#" alt="">相談の流れについてもっと詳しく</a></div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <?php get_template_part('characteristics', get_post_format()); ?>

        <section class="contact-cta">
          <div class="container">
            <div class="row">
              <div class="col-md">
                <div class="centre-text">
                  <div class="title">お気軽にご相談ください</div>
                  <div class="content">相談無料  /  秘密厳守  /  メール・電話OK</div>
                </div>
              </div>
            </div>

            <?php get_template_part( 'contact-cta', get_post_format() ); ?>

          </div>
        </section>
        <section class="about">
          <div class="container links">
            <div class="row">
              <div class="col-md">
                <div class="centre-text">
                  <div class="title">NPO法人<br>POSSEについて</div>
                </div>
                <div class="separator"></div>
              </div>
            </div>

            <?php get_template_part( 'links', get_post_format() ); ?>


          </div>
        </section>
      </div>


<?php get_footer(); ?>
