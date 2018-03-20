<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>HOME</title>
        <!--COMPARTIMENT INCLUDE-->
        <?php include("inc/head.php"); ?>
        <!--------------------------------->
    </head>
    <body>
        <main>
            <!--COMPARTIMENT INCLUDE-->
            <?php include("inc/header.php"); ?>
            <!--------------------------------->

            <section class="section-home">
                section home
                <div class="logo-home"></div>
                <p class="txt-home">Constituendi autem sunt qui sint in amicitia fines et quasi termini diligendi. De quibus tres video sententias ferri, quarum nullam probo, unam, ut eodem modo erga amicum adfecti simus, quo erga nosmet ipsos, alteram, ut nostra in amicos benevolentia illorum erga nos benevolentiae pariter aequaliterque respondeat, tertiam, ut, quanti quisque se ipse facit, tanti fiat ab amicis.</p>

                <a class="scroll-down" href="#scroll_section" alt="" title="">
                    <div class="span-scroll">
                        <span class="icon-scroll"></span>
                        <span class="icon-scroll"></span>
                        <span class="icon-scroll"></span>
                        <span class="icon-scroll"></span>
                        <span class="icon-scroll"></span>
                    </div>Scroll down
                </a>
            </section>         

            <section id="scroll_section" class="section-article-home">
                ARTICLES
                <!--PHP ARTICLE-->
            </section>
            <section class="section-crea-home">
                CREA
                <!--PHP CREA-->
            </section>
            <section class="section-nl-home">
                <!--PHP NEWSLETTER-->
                NEWSLETTER
            </section>


            <!--COMPARTIMENT INCLUDE-->
            <?php include("inc/footer.php"); ?>
            <!--------------------------------->
            
            <!--------------------------------->
            <!--------------SCRIPT-------------->
            <!--------------------------------->
            
            <script>
                //BTN SCROLL EFFECT
                
                $(document).ready(function() {
                    $('.scroll-down').on('click', function() {
                        var page = $(this).attr('href'); 
                        var speed = 780;

                        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); 
                        return false;
                    });
                });


                //HEADER SCROLL EFFECT

                $(function(){
                    var scrollDown = 400;
                    $(window).scroll(function() {
                        var scroll = getScroll();
                        if ( scroll >= scrollDown ) {
                            $('.header').addClass('down');
                        }
                        else {
                            $('.header').removeClass('down');
                        }
                    });
                    function getScroll() {
                        return window.pageYOffset || document.documentElement.scrollTop;
                    }
                });
            </script>
        </main>   
    </body>
</html>