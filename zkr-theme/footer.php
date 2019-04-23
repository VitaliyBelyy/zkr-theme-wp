        <footer>
            <div class="cont-info full-width">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <div class="wrapper-main full-width">
                                <h1><i class="fa fa-cogs fa-2x" aria-hidden="true"></i>Mechatronic Guys</h1>
                                <p>У вересні 2016 року в коледжі ЗКР ЗНТУ розпочав свою роботу проект  MECHATRONIC GUYS, що координує зусилля студентів, спрямовані на дослідження актуальних питань за допомогою професійно-практичних консультацій, дискусій, конференцій, екскурсій на підприємства, семінарів та майстер-класів.</p>
                                <a href="<?php echo get_category_link(''.get_cat_ID("Дискусійний клуб").''); ?>">Дізнатися більше</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="wrapper-recentposts">
                                <h1>Останні події</h1>
                                <ul>
                                    <?php 
                                        query_posts('cat=3,4,5,6&showposts=3');
                                        while ( have_posts() ) : the_post(); 
                                        ?>
                                            <li class="content">
                                                <a href="<?php the_permalink();?>">
                                                    <span class="date"><?php echo get_the_date('F, d, Y'); ?></span>
                                                    <?php the_excerpt(); ?>
                                                </a>
                                            </li>
                                        <?php 
                                         endwhile;
                                        wp_reset_query(); 
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cont-devinf full-width">
                <a href="#" class="scrollup"></a>
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="wrapper-otherinf1 full-width">
                                <ul>
                                    <li>© 2017 Запорізький коледж радіоелектроніки ЗНТУ<span>69095, м. Запорiжжя, пр. Соборний, 117.</span></li>
                                    <li><a href="mailto:belyyy1998@gmail.com">Support</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="wrapper-otherinf2 full-width">
                                <ul>
                                    <li><a href="mailto:belyyy1998@gmail.com">Developed by <span>Vitalik Belyy</span></a></li>
                                    <li>
                                        <!--LiveInternet counter--><script type="text/javascript">
                                        document.write("<a href='//www.liveinternet.ru/click' "+
                                        "target=_blank><img src='//counter.yadro.ru/hit?t14.3;r"+
                                        escape(document.referrer)+((typeof(screen)=="undefined")?"":
                                        ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                                        screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                                        ";"+Math.random()+
                                        "' alt='' title='LiveInternet: показано число просмотров за 24"+
                                        " часа, посетителей за 24 часа и за сегодня' "+
                                        "border='0' width='88' height='31'><\/a>")
                                        </script><!--/LiveInternet-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php wp_footer(); ?>
        </footer>
    </body>
</html>