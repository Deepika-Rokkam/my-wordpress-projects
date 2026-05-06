<?php

class WordPressWebsite {

    public $site_name;
    public $theme;
    public $pages;

    public function __construct($site_name, $theme) {
        $this->site_name = $site_name;
        $this->theme     = $theme;
        $this->pages     = 0;
    }

    public function add_page($page_name) {
        $this->pages++;
        echo "Page added: " . $page_name . "\n";
    }

    public function remove_page($page_name) {
        $this->pages--;
        echo "Page removed: " . $page_name . "\n";
    }

    public function change_theme($new_theme) {
        $this->theme = $new_theme;
        echo "Theme changed to: " . $new_theme . "\n";
    }

    public function show_info() {
        echo "Site Name : " . $this->site_name . "\n";
        echo "Theme     : " . $this->theme . "\n";
        echo "Pages     : " . $this->pages . "\n";
    }
}

$site1 = new WordPressWebsite("Deepika Portfolio", "Astra");
$site1->add_page("Home");
$site1->add_page("About");
$site1->add_page("Contact");
$site1->remove_page("About");
$site1->change_theme("Hello Elementor");
$site1->show_info();

echo "---\n";

$site2 = new WordPressWebsite("Client Business", "GeneratePress");
$site2->add_page("Home");
$site2->add_page("Services");
$site2->show_info();