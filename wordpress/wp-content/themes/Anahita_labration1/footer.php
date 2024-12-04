<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <h4><?php echo esc_html__('Kort om oss', 'your-theme'); ?></h4>
                <div>
                    <?php if (is_active_sidebar('footer-about')) : ?>
                        <?php dynamic_sidebar('footer-about'); ?>
                    <?php else: ?>
                        <p><?php echo esc_html__('Lägg till något om ditt företag här.', 'your-theme'); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <h4><?php echo esc_html__('Kontaktuppgifter', 'your-theme'); ?></h4>
                <div>
                    <?php if (is_active_sidebar('footer-contact')) : ?>
                        <?php dynamic_sidebar('footer-contact'); ?>
                    <?php else: ?>
                        <p><?php echo esc_html__('Lägg till dina kontaktuppgifter här.', 'your-theme'); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <h4><?php echo esc_html__('Social media', 'your-theme'); ?></h4>
                <div>
                    <?php if (is_active_sidebar('footer-social')) : ?>
                        <?php dynamic_sidebar('footer-social'); ?>
                    <?php else: ?>
                        <ul class="social">
                            <li><i class="fa fa-facebook"></i> <a href="#">Facebook</a></li>
                            <li><i class="fa fa-twitter"></i> <a href="#">Twitter</a></li>
                            <li><i class="fa fa-instagram"></i> <a href="#">Instagram</a></li>
                            <li><i class="fa fa-linkedin"></i> <a href="#">LinkedIn</a></li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Footer Copyright -->
        <div class="row bottom">
            <div class="col-xs-12">
                <p>Copyright &copy; <?php echo date('Y'); ?> <?php echo esc_html__('Grupp X', 'your-theme'); ?></p>
            </div>
        </div>
    </div>
</footer>
