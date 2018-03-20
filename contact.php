<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>contact</title>
        <!--COMPARTIMENT INCLUDE-->
        <?php include("inc/head.php"); ?>
        <!--------------------------------->
    </head>
    <body>
        <main>
            <!--COMPARTIMENT INCLUDE-->
            <?php include("inc/header.php"); ?> 
            <!--------------------------------->
            
            <section class="section-contact">
               <h3>FIL D'ARIANE</h3>
                <h1>CONTACT</h1>
                <div class="form-contact">
                   <form action="" method="post">
                      
                       <label for="prenom">
                       Votre prénom (<abbr title="obligatoire">*</abbr>)
                       </label>
                       <input required type="text" name="prenom" id="prenom"> 
                       
                        <label for="email">
                       Votre <span lang="en">email</span> (<abbr title="obligatoire">*</abbr>) 
                       </label>
                       <input required type="text" name="email" id="email">
                       
                       <label for="msg">Votre message (<abbr title="obligatoire">*</abbr>) 
                       </label>
                       <input required type="text" name="msg" id="msg">
                   </form>
                    
                </div>
            </section>

            <!--COMPARTIMENT INCLUDE-->
            <?php include("inc/footer.php"); ?>
            <!--------------------------------->
        </main>   
    </body>
</html>