<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Rapporter"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Rapporter till KMOM uppgifterna"),
                "mark-if-parent" => true,
            ],

            "analysis" => [
                "text"  => t("Analyser"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analyser"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om denna webbplats")
            ],

            "test" => [
                "text"  => t("Testsida"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("En testsida")
            ],

            "grid" => [
                "text"  => t("Gridsida"),
                "url"   => $this->di->get("url")->create("grid?vgrid"),
                "title" => t("En testsida för vertikalt raster (Grid)")
            ],

            "typografi" => [
                "text"  => t("Typografisida"),
                "url"   => $this->di->get("url")->create("typography?hgrid"),
                "title" => t("En testsida för horisontellt raster (Grid)")
            ],

            "theme" => [
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Beskrivning av mina temaval")
            ],

            "theme-selector" => [
                "text"  => t("Temaväljaren"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Temaväljaren")
            ],

            "images" => [
                "text"  => t("Bildtester"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Bildtester")
            ],

            "blogg" => [
                "text"  => t("Bildblogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("En bildblogg")
            ],

            "design-element" => [
                "text"  => t("Designelement"),
                "url"   => $this->di->get("url")->create("design-element"),
                "title" => t("Designelement")
            ],

            "design-principle" => [
                "text"  => t("Designprinciper"),
                "url"   => $this->di->get("url")->create("design-principle"),
                "title" => t("Designprinciper")
            ],
        ],
    ],



// Used as menu together with responsive menu
// Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Rapport"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Rapporter till KMOM uppgifterna"),
                "mark-if-parent" => true,
            ],
            "analysis" => [
                "text"  => t("Analyser"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analyser"),
                "mark-if-parent" => true,
            ],
            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om denna webbplats")
            ],
            "test" => [
                "text"  => t("Testsida"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("En testsida")
            ],
            "grid" => [
                "text"  => t("Gridsida"),
                "url"   => $this->di->get("url")->create("grid?vgrid"),
                "title" => t("En testsida för vertikalt raster (Grid)")
            ],
            "typografi" => [
                "text"  => t("Typografisida"),
                "url"   => $this->di->get("url")->create("typography?hgrid"),
                "title" => t("En testsida för horisontellt raster (Grid)")
            ],
            "theme" => [
                "text"  => t("Mina teman"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Beskrivning av mina temaval")
            ],
            "theme-selector" => [
                "text"  => t("Temaväljaren"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Temaväljaren")
            ],
            "images" => [
                "text"  => t("Bildtester"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Bildtester")
            ],
            "blogg" => [
                "text"  => t("Bildblogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("En bildblogg")
            ],
            "design-element" => [
                "text"  => t("Designelement"),
                "url"   => $this->di->get("url")->create("design-element"),
                "title" => t("Designelement")
            ],
                "design-principle" => [
                "text"  => t("Designprinciper"),
                "url"   => $this->di->get("url")->create("design-principle"),
                "title" => t("Designprinciper")
                ],
        ],
    ],

    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
