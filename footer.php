<footer class="bg-gray-800 text-white py-8">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <!-- Branding -->
      <div>
        <h3 class="text-lg font-bold mb-4"><?php bloginfo('name'); ?></h3>
        <p class="text-sm"><?php bloginfo('description'); ?></p>
      </div>
      <!-- Organization Links -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Organization</h4>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'organization',
            'menu_class' => 'space-y-2',
            'container' => false,
            'fallback_cb' => false,
        ));
        ?>
      </div>
      <!-- Our Animals Links -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Our Animals</h4>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'animals',
            'menu_class' => 'space-y-2',
            'container' => false,
            'fallback_cb' => false,
        ));
        ?>
      </div>
      <!-- Social Links -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
        <div class="flex space-x-4">
          <a href="https://www.facebook.com/tail_wag_rescue" class="hover:text-gray-300" aria-label="Facebook">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
          </a>
          <a href="https://www.instagram.com/tail_wag_rescue" class="hover:text-gray-300" aria-label="Instagram">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12.017 0C8.396 0 7.996.014 6.79.067 5.59.12 4.726.282 4.02.54c-.76.28-1.406.636-2.052 1.282C1.322 2.468 1.04 3.114.76 3.874c-.258.706-.42 1.57-.474 2.77C.214 7.756.2 8.156.2 11.777s.014 3.99.067 5.196c.054 1.2.216 2.064.474 2.77.28.76.636 1.406 1.282 2.052.646.646 1.292 1.01 2.052 1.282.706.258 1.57.42 2.77.474 1.206.053 1.606.067 5.227.067s4.02-.014 5.227-.067c1.2-.054 2.064-.216 2.77-.474.76-.28 1.406-.636 2.052-1.282.646-.646 1.01-1.292 1.282-2.052.258-.706.42-1.57.474-2.77.053-1.206.067-1.606.067-5.227s-.014-4.02-.067-5.227c-.054-1.2-.216-2.064-.474-2.77-.28-.76-.636-1.406-1.282-2.052C21.532 1.322 20.886 1.04 20.126.76 19.42.5 18.556.34 17.356.286 16.15.23 15.75.2 12.129.2c-3.621 0-4.021.03-5.227.086-.706.04-1.57.202-2.27.474-.76.28-1.406.636-2.052 1.282C1.322 2.468 1.04 3.114.76 3.874c-.258.706-.42 1.57-.474 2.77C.214 7.756.2 8.156.2 11.777s.014 3.99.067 5.196c.054 1.2.216 2.064.474 2.77.28.76.636 1.406 1.282 2.052.646.646 1.292 1.01 2.052 1.282.706.258 1.57.42 2.77.474 1.206.053 1.606.067 5.227.067s4.02-.014 5.227-.067c1.2-.054 2.064-.216 2.77-.474.76-.28 1.406-.636 2.052-1.282.646-.646 1.01-1.292 1.282-2.052.258-.706.42-1.57.474-2.77.053-1.206.067-1.606.067-5.227zM12.017 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <!-- Footer Navigation -->
    <div class="border-t border-gray-700 mt-8 pt-8">
      <nav class="flex flex-wrap justify-center space-x-6">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer',
          'menu_class' => 'flex flex-wrap space-x-6',
          'container' => false,
          'fallback_cb' => false,
        ));
        ?>
      </nav>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
