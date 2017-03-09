In WP child theme /includes/ThemeShorcodeService.php

/!\ attribut must be in lowercase

<?php
add_shortcode( 'nameShortcode', function($atts){ 
    $nameShortcode = new HomeLiveComponent(); // Call component
    if(!empty($atts['attribut'])){ // Check if every value is not empty
        $nameShortcode->setAttribut(($atts['attribut']); // Display content
    }
                                    
    return $nameShortcode->getMarkup();
});
?>

In WP tinyMCE

[nameShortcode attribut="plop"]
