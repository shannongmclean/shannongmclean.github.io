<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Virtual moving sale in Jamaica Plain, Massachusetts">
    <meta name="keywords" content="boston, moving, garage, yard, free, for, sale, massachusetts, pickup, furniture, apartment, office, technology">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <title>Moving Sale - <?= $page->title()->html()?></title>

    <!-- CSS -->
    <?= css([
      'assets/css/main.css'
    ]) ?>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=League+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css"/>

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
    <script>
    	 $(document).ready(function() {
    			$(".itemSlider").lightSlider({
            gallery:true,
            item:1,
            slideMargin: 0,
            speed:900,
            auto:true,
            loop:true
          });
    		});
    </script>

  </head>
