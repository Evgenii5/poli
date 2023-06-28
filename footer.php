
        </main>
        <footer class="footer">
            <!-- <div class="footer"> -->
                <div class="footer_container">
                    <div class="footer_general">
                    <div class="logo_img"><?php the_custom_logo() ?></div>
                       <div class="logo_text"><a href="#" class="logo_text-link"><?php echo carbon_get_theme_option('org_name'); ?></a></div>
                    </div>
                    <!-- <nav class="footer_menu"> -->
                    <?php
                        $args = array(
                            'container'       => 'nav',          
                            'container_class' => 'footer_menu menu',           
                            'menu_class'      => 'menu_list',          
                            'fallback_cb'     => 'wp_page_menu',            
                            'link_class'      => 'menu_link',           
                            'theme_location'  => 'footer_menu',
                            'add_li_class'    => 'menu_item',
                            'echo'            =>  false,               
                        );
                        $temp_menu = wp_nav_menu($args);
                        preg_match_all("~<a (.*?)>(.*)</a>~", $temp_menu, $matches);
                        foreach($matches[0] as $value)
                        {
                            if(strpos($value, "<span") === false)
                            {
                                $temp_value = preg_replace("~<a (.*?)>(.*)</a>~", "<a $1><span itemprop='name'>$2</span></a>", $value);
                                $temp_menu = str_replace($value, $temp_value, $temp_menu);
                            }else{
                                $temp_value = str_replace("<span", "<span itemprop='name'", $value);
                                $temp_menu = str_replace($value, $temp_value, $temp_menu);
                            }
                        }
                        echo $temp_menu;
                    ?>
                    <!-- </nav> -->
                </div>

            <!-- </div> -->
        
        </footer>    






        

    </body>
</html>

<?php wp_footer(); ?>