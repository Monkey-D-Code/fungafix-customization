<!DOCTYPE html>
<?php 
    $flags_array = array(
        array(
            "url" => "http://cz.vitaldermax-promo.com/467335" , 
            "flag_image" => "img/flags/cz.svg" , 
            "country_name" => "Česká republika"
        ),
        array(
            "url" => "http://es.vitaldermax-promo.com/231350" , 
            "flag_image" => "img/flags/es.svg" , 
            "country_name" => "España"
        ),
        array(
            "url" => "http://hu.vitaldermax-promo.com/950645" , 
            "flag_image" => "img/flags/hu.svg" , 
            "country_name" => "Magyarország"
        ),
        array(
            "url" => "http://ro.vitaldermax-promo.com/737617" , 
            "flag_image" => "img/flags/ro.svg" , 
            "country_name" => "România"
        ),
        array(
            "url" => "http://it.vitaldermax-promo.com/885651" , 
            "flag_image" => "img/flags/it.svg" , 
            "country_name" => "Italia"
        ),
        array(
            "url" => "http://pl.vitaldermax-promo.com/804024" , 
            "flag_image" => "img/flags/pl.svg" , 
            "country_name" => "Polska"
        ),
        array(
            "url" => "http://gr.vitaldermax-promo.com/459607" , 
            "flag_image" => "img/flags/pl.svg" , 
            "country_name" => "Ελλάδα"
        ),
        array(
            "url" => "http://bg.vitaldermax-promo.com/173963" , 
            "flag_image" => "img/flags/bg.svg" , 
            "country_name" => "България"
        ),
        array(
            "url" => "http://pt.vitaldermax-promo.com/827724" , 
            "flag_image" => "img/flags/pt.svg" , 
            "country_name" => "Portugal"
        ),
    );

    $site_variables = array(
        "title" => "FungaFix.com",
        "heading" => "<strong>FungaFix</strong> - The Original Formula",
        "hero_image" => "img/multislim-bg.jpg",
        "logo_image" => "img/official_store.png",
        "description" => "FungaFix is a cosmetic cream, not a substitute for a medical treatment. 
                          The product is not intended to diagnose, treat, cure, or prevent any disease. 
                          The product does not require a prescription or doctor approval as they are herbal
                          and do not contain any prescription ingredients. Not all people will obtain the same 
                          results. These products are intended to be used in conjunction with a healthy diet or 
                          lifestyle - consult your physician before starting any treatments or
                          diets to avoid any health issues."
    );


?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <title><?=$site_variables['title']?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&amp;subset=cyrillic,cyrillic-ext,greek,latin-ext" rel="stylesheet">
    <link href='/css/style.css' type='text/css' rel='stylesheet' />
</head>

<body>
    <div class="container">
       
        <div class='flags'>
            <?php 
                foreach($flags_array as $flag){
                    
            ?>
                <div class='single-flag'>
                    <a href=<?=$flag['url']?> >
                        <img src=<?=$flag['flag_image']?> alt=<?=$flag['country_name']?> class='single-flag-image' />
                    </a>
                    <p class='flag-country'><?=$flag['country_name']?></p>
                </div>

            <?php 
                    
                }
            
            ?>
            
        </div>
        <img src=<?=$site_variables['hero_image']?> class='hero-image' />
            
        
        <div class="title">
            <?=$site_variables['heading']?>
        </div>
        <div class="flags-bottom">
            <?php 
                foreach($flags_array as $flag){
                    
            ?>
                <div class='single-flag-big'>
                    <a href=<?=$flag['url']?> >
                        <img src=<?=$flag['flag_image']?> alt=<?=$flag['country_name']?> class='single-flag-image-big' />
                    </a>
                    <p class='flag-country-big'><?=$flag['country_name']?></p>
                </div>

            <?php 
                    
                }
            
            ?>
        </div>
        <div class='footer'>
            <img src=<?=$site_variables['logo_image']?> alt=<?=$site_variables['title']?> class='logo-image' />
            <p class='description'><?=$site_variables['description']?>
        </div>
    </div>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-72539868-27"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-72539868-27');
    </script>
</body>

</html>