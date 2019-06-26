<?php

/**
 * Class HomeController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

    namespace Mini\Controller;
    use Mini\Model\Home;

    class HomesController
    {
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/homes/index (which is the default page btw)
     */
        public function index()
        {
        // load views


            require APP. 'views/_templates/sidebar.php';

            require APP. 'views/_templates/navbar.php';

            require APP. 'views/_templates/information.php';

            require APP. 'views/_templates/footer.php';
    

        }

    }
