<footer id="footer">
    <div class="container">
        <div class="row top">
        <div class="col-xs-12 col-sm-6 col-md-4">
                <h4><?php echo 'Kort om oss'; ?></h4>
                <div>
                    <p>
                        <?php echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.'; ?>
                    </p>
                    <p>
                        <?php echo 'Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis.'; ?>
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <h4><?php echo 'Kontaktuppgifter'; ?></h4>
                <div>
                    <p><strong><?php echo 'The Company'; ?></strong></p>
                    <p><?php echo 'Gatgatan 1'; ?></p>
                    <p><?php echo '123 45 Någonstans'; ?></p>
                    <p><?php echo 'Tel: 0123456789'; ?></p>
                    <p><?php echo 'E-post: '; ?><a href="mailto:info@thecompany.com"><?php echo 'info@thecompany.com'; ?></a></p>
                    </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <h4>Social Media</h4>
                <div>
                    <ul class="social">
                        <?php
                        $social_links = array(
                            'facebook'  => 'https://www.facebook.com',    
                            'twitter'   => 'https://twitter.com/',          
                            'instagram' => 'https://www.instagram.com/',  
                            'linkedin'  => 'https://www.linkedin.com/',  
                        );

                        foreach ($social_links as $key => $url) :
                            if ($url) : 
                        ?>
                                <li><i class="fa fa-<?php echo $key; ?>"></i> <a href="<?php echo esc_url($url); ?>" target="_blank"><?php echo ucfirst($key); ?></a></li>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row bottom">
            <div class="col-xs-12">
                <p>Copyright &copy; <?php echo date('Y'); ?> <?php echo esc_html__('Grupp X', 'your-theme'); ?></p>
            </div>
        </div>
    </div>
</footer>
