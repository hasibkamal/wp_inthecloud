<div id="rightcol_container">
                <div class="rightcol">
                    <h2>Primay Menu</h2>
                    <?php 
                        wp_nav_menu([
                            'theme_location'=>'primary'
                        ]); 
                    ?>
                </div>
                <div class="rightcol_bottom"></div>
            </div>
            <div class="clear"></div>

            <div id="footer">
                <h3><a href="#"><?php bloginfo('name'); ?></a></h3></div>
  </div>

</div>
<?php wp_footer(); ?>
</body>
</html>