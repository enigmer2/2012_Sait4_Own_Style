<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>привет</title>
        <meta charset="windows-1251" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
         <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/styleA.css" />
        <link rel="stylesheet" type="text/css" href="css/style1.css" />

        <noscript>
            <style>
                .cn-images img{
	position: relative;
	display: block;
	/* [disabled]border-bottom: 5px solid #d0ab47; */
} 
                .cn-slideshow{height: auto;}
		    </style>
        </noscript>
        
		<script id="barTmpl" type="text/x-jquery-tmpl">
            <div class="cn-bar">
                <div class="cn-nav">
					<a href="#" class="cn-nav-prev">
                        <span>Вернуться</span>
						<div style="background-image:url(${prevSource});"></div> 
					</a>
					<a href="#" class="cn-nav-next">
                        <span>Далее</span>
						<div style="background-image:url(${nextSource});"></div>
					</a>
                </div><!-- cn-nav -->
                <div class="cn-nav-content">
<!-- сюда вставить прейвью фото с базы данных -->  
                </div><!-- cn-nav-content -->
            </div><!-- cn-bar -->

			
		</script>
    </head>
    <body>

    <?php
	echo "
        <div class=\"container\">
            <div class=\"wrapper\">          
                <div id=\"cn-slideshow\" class=\"cn-slideshow\">
                    <div class=\"cn-images\">

                      <img src=\"images/1.png\" style=\"display:block;\" title=\"Красотка 1\" data-thumb=\"images/1.png\" />
                      <img align=\"center\"  src=\"images/2.png\" alt=\"image02\" title=\"Красотка 2\" data-thumb=\"images/2.png\" />
                      <img src=\"images/3.png\" alt=\"image03\" title=\"Красотка 3\" data-thumb=\"images/3.png\" />
                      <img src=\"images/4.png\"  alt=\"image04\" title=\"Красотка 4\" data-thumb=\"images/4.png\" />

                  </div><!-- cn-images -->
                </div><!-- cn-slideshow -->
            
            
            
            </div>
        </div>";
		?>
        
        <script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="js/jquery.slideshow.js"></script>
        <script type="text/javascript">
            $(function() {
				$('#cn-slideshow').slideshow();
            });           
        </script>
    </body>
</html>	
