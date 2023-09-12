<?php
/*
*
*This is is footer
*
*/
?>
<footer>
       
         <div class="container mt-5 pb-5">
            <div class="row  opacity-100">
                                    <hr class="border-divider flex-grow-1 border-2 opacity-100 mt-4" style="color: #7BA0A5;" />

                <div class="col-lg-7 mt-3">
                    <div class="row fs-5 text-md-start text-center" style="color:black;">
                        <div class="col-md-4 mt-2">
                            <?php
							dynamic_sidebar('footer-1');
														
							?>
							<?php
							dynamic_sidebar('glink-1');
														
							?>
                        </div>
                        
                                    <div class="col-md-4 mt-2">
                                        
                        <?php dynamic_sidebar('footer-2');?>
                        <?php dynamic_sidebar('glink-2'); ?>
                                </div>
                   
                        <div class="col-md-4 mt-2">
                            <?php dynamic_sidebar('footer-3'); 
							
							?>
							 <?php dynamic_sidebar('glink-3'); 
							
							?>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-5 mt-3">
                    <div class="row fs-5 text-md-start text-center" style="color:black;">
                        <div class="col-lg-6 col-md-4 mt-2">
                             <?php dynamic_sidebar('footer-4'); 
							
							?>
							  <?php
							dynamic_sidebar('glink-4');
														
							?>
                        </div>
                        
                        <div class="col-lg-6 col-md-4 mt-2">
							
                             <?php dynamic_sidebar('footer-5'); 
							
							?>
							 <?php
							dynamic_sidebar('glink-5');
														
							?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
 
    
    <!-- bottom bar -->
   <section id="bottom-bar">
    <div class="container mt-5">
        <div class="row border-top border-2 border-black">
            <div class="col-md-6 col-12 mt-3">
                <div class="copyright fs-5 fw-bold text-uppercase text-md-start text-center">
                    <?php
                    // Retrieve and display the Copyright widget content
                    if (is_active_sidebar('copyright')) {
                        dynamic_sidebar('copyright');
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6 col-12 mt-3">
                <div class="social">
                    <?php
                    // Retrieve and display the Social Icons widget content
                    if (is_active_sidebar('social-icon')) {
                        dynamic_sidebar('social-icon');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


   
</body>
<?php wp_footer()?>
</html>