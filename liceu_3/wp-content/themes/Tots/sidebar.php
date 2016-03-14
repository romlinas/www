		<div class="navigation">

        <h2>Искать на сайте</h2>



            <ul>



                <li>



                <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">



                    <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="17" /> <input type="submit" id="sidebarsubmit" value="Искать" style="font-size: 10px;" />



                </form>



                </li> 



            </ul>    

<?php if ( !function_exists('dynamic_sidebar')

        || !dynamic_sidebar() ) : ?>

            <h2>Рубрики</h2>



            <ul>

            

                <?php wp_list_cats('sort_column=name&hierarchical=0'); ?>



            </ul>



            <h2>Архивы</h2>



            <ul>

                <?php wp_get_archives('type=monthly'); ?>

            </ul>


                        <h2>Ссылки</h2>



            <ul>

                <?php get_links(-1, '<li>', '</li>', '', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?>

                  

            </ul>



            <?php endif; ?>            


            <h2>Управление</h2>
            
            <ul>
        
            <?php wp_register(); ?>
        
            <li>    <?php wp_loginout(); ?></li>
        
            <?php wp_meta(); ?>
            
            </ul>            

             

            
       
<br> 




        </div>

