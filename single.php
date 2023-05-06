<?php get_header();?>
  <!-- ニュース -->
         <div class="news_col">
            <div class="home_title">News</div>
            <div class="home_title_sub">ニュース</div>

           <?php
               //取得したい投稿記事などの条件を引数として渡す
               $args = array(
                   // 投稿タイプ
                   'post_type'      => 'post',
                   // カテゴリー名
                   'category_name' => 'news',
                   // 1ページに表示する投稿数
                   'posts_per_page' => 3,
               );
               // データの取得
               $posts = get_posts($args);
             ?>
 
             <!-- ループ処理 -->
             <?php foreach($posts as $post): ?>
             <?php setup_postdata($post); ?>
             <div class="container" >
              <div class="row mb-4 gx-5">
                <div class="news_post_small col-md-4">
                  <div class="news_post_meta">
                    <ul>
                      <li>
                        <!-- aタグで投稿記事へのリンクを作成 -->
                        <a href="<?php echo get_permalink(); ?>">
                          <!-- 日付を出力する -->
                          <?php echo get_the_date(); ?>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="news_post_small_title">
                    <!--  aタグで投稿記事へのリンクを作成する -->
                    <a href="<?php the_permalink(); ?>">
                      <!--  投稿記事のタイトルを表示する -->
                      <?php the_title(); ?>
                    </a>
                  </div>
                  <div class="news_thumbnail">
                  <?php if(has_post_thumbnail()):
                          the_post_thumbnail();
                          endif; ?>
                  </div>
                </div>
    
                <?php endforeach; ?>
                <!-- 使用した投稿データをリセット -->
                <?php wp_reset_postdata(); ?>
              </div>
            </div>
          </div>
 


          <!-- ニュースここまで -->
<?php get_footer();?>