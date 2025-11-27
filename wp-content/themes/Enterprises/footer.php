<?php

/**
 * File Name: footer.php
 * Description: Contains the footer section with social links and wp_footer hook.
 * Author: Manu Patial
 * Theme: Enterprise Theme
 * Version: 1.0.0
 * Created on: 2025-09-26
 * Last Updated: 2025-09-26
 *
 * @package WordPress
 */
?>

<footer id="site-footer" style="background:#1a1a1a; color:#fff; padding:60px 0; font-family:Arial, sans-serif;">
    <div class="container" style="max-width:1200px; margin:0 auto; display:flex; flex-wrap:wrap; justify-content:space-between; gap:30px;">

        <!-- Company Info -->
        <div class="footer-company" style="flex:1; min-width:220px;">
            <h3 style="font-size:22px; margin-bottom:20px; color:#ffffff; text-transform:uppercase; letter-spacing:1px;">
                Enterprises company
            </h3>
            <p style="line-height:1.8; font-size:14px; color:#ccc; margin-bottom:15px;">
                Leading enterprise solutions provider with <strong>innovative services</strong> and products worldwide.
                <br>Delivering excellence since <strong>2000</strong>.
            </p>
            <p style="margin-top:10px; font-size:14px; color:#ccc;">
                <span style="display:flex; align-items:center; gap:6px;"><i class="fas fa-envelope" style="color:#ff6600;"></i> info@enterprisescompany.com</span>
                <br>
                <span style="display:flex; align-items:center; gap:6px;"><i class="fas fa-phone-alt" style="color:#ff6600;"></i> +1 234 567 890</span>
            </p>
        </div>

        <!-- Quick Links -->
        <div class="footer-links" style="flex:1; min-width:180px;">
            <h4 style="font-size:18px; margin-bottom:20px; color:#fff; text-transform:uppercase;">Quick Links</h4>
            <ul style="list-style:none; padding:0; font-size:14px; line-height:2;">
                <li style="margin-bottom:10px;">
                    <a href="<?php echo home_url(); ?>" style="color:#ccc; text-decoration:none; display:flex; align-items:center; gap:8px;">
                        <span style="color:#ff6600;"><i class="fas fa-angle-right"></i></span> Home
                    </a>
                </li>
                <li style="margin-bottom:10px;">
                    <a href="<?php echo home_url('/about'); ?>" style="color:#ccc; text-decoration:none; display:flex; align-items:center; gap:8px;">
                        <span style="color:#ff6600;"><i class="fas fa-angle-right"></i></span> About Us
                    </a>
                </li>
                <li style="margin-bottom:10px;">
                    <a href="<?php echo home_url('/services'); ?>" style="color:#ccc; text-decoration:none; display:flex; align-items:center; gap:8px;">
                        <span style="color:#ff6600;"><i class="fas fa-angle-right"></i></span> Services
                    </a>
                </li>
                <li style="margin-bottom:10px;">
                    <a href="<?php echo home_url('/contact'); ?>" style="color:#ccc; text-decoration:none; display:flex; align-items:center; gap:8px;">
                        <span style="color:#ff6600;"><i class="fas fa-angle-right"></i></span> Contact
                    </a>
                </li>
            </ul>
        </div>


        <!-- Social Media -->
        <div class="footer-social" style="flex:1; min-width:150px;">
            <h4 style="font-size:16px; margin-bottom:15px;">Follow Us</h4>
            <div style="display:flex; gap:15px; font-size:22px;">
                <a href="https://facebook.com" target="_blank" style="color:#3b5998;">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com" target="_blank" style="color:#1da1f2;">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://linkedin.com" target="_blank" style="color:#0077b5;">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://instagram.com" target="_blank" style="color:#e1306c;">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://youtube.com" target="_blank" style="color:#ff0000;">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>


    </div>

    <!-- Bottom Copyright -->
    <div style="text-align:center; padding-top:30px; font-size:13px; color:#aaa;">
        &copy; <?php echo date('Y'); ?> Enterprises Company. All Rights Reserved.
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>