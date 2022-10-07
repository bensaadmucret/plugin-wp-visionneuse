            <?php $Small = get_post_meta(get_the_ID(), 'dc_small', true); ?>
               <?php if (!empty($Small)) : ?>
                   <div class="one__column">
                       <button href="#tx-<?php echo get_the_ID(); ?>" class="modal-btn">
                           <div class="preview">
                               <img src="<?php echo $Small; ?>" alt="<?php the_title(); ?>">
                           </div>

                       </button>
                   </div>
               <?php else : ?>
                   <div class="one__column">
                       <button href="#tx-<?php echo get_the_ID(); ?>" class="modal-btn">
                           <div class="preview">
                               <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                           </div>

                       </button>
                   </div>
               <?php endif; ?>

               <!-- The Modal -->
               <div id="tx-<?php echo get_the_ID(); ?>" class="modal">
                   <!-- Modal content -->
                   <div class="modal-content">
                       <h6 class="title__vision"> N'oubliez pas de partager avec vos réseaux</h6>
                       <div class="share-buttons-container">
                           <div class="close">&times;</div>
                           <div class="share-list">
                               <?php
                                $facebook = get_post_meta(get_the_ID(), 'advence_visionneuse_facebook', true);
                                $Whatsapp = get_post_meta(get_the_ID(), 'advence_visionneuse_whatsapp', true);
                                $Linkedin = get_post_meta(get_the_ID(), 'advence_visionneuse_linkedin', true);
                                $Email = get_post_meta(get_the_ID(), 'advence_visionneuse_email', true);
                                $SMS = get_post_meta(get_the_ID(), 'advence_visionneuse_sms', true);
                                $copyLink = get_post_meta(get_the_ID(), 'advence_visionneuse_copylink', true);
                                ?>

                               <!-- FACEBOOK -->
                               <a href="<?php echo $facebook; ?>" target="_blank">
                                   <img width="50px" height="50px" src="<?php echo plugin_dir_url(__FILE__) . '../public/images/FACEBOOK.png'; ?>" alt="facebook">
                               </a>

                               <!-- Whatsapp -->
                               <a href="<?php echo  $Whatsapp; ?>" target="_blank">
                                   <img width="50px" height="50px" src="<?php echo plugin_dir_url(__FILE__) . '../public/images/WHATSAPP.png'; ?>" alt="whatsapp">
                               </a>

                               <!-- Linkedin-->
                               <a href="<?php echo $Linkedin; ?>" target="_blank">
                                   <img width="50px" height="50px" src="<?php echo plugin_dir_url(__FILE__) . '../public/images/LINKEDIN.png'; ?>" alt="linkedin">
                               </a>

                               <!-- Email -->
                               <a href="<?php echo $Email; ?>" target="_blank">
                                   <img width="50px" height="50px" src="<?php echo plugin_dir_url(__FILE__) . '../public/images/MAIL.png'; ?>" alt="email">
                               </a>

                               <!-- sms -->
                               <a href="<?php echo $SMS; ?>" target="_blank">
                                   <img width="50px" height="50px" src="<?php echo plugin_dir_url(__FILE__) . '../public/images/SMS.png'; ?>" alt="sms">
                               </a>

                               <!-- copyLink 
                                 <a href="<?php // echo $copyLink 
                                            ?>" target="_blank">
                                     <img width="50px" height="50px" src="<?php //echo plugin_dir_url(__FILE__) . '../public/images/LIEN.png'; 
                                                                            ?>" alt="copyLink">
                                 </a>
                                 -->

                           </div>
                       </div>

                       <div class="modal__content">
                           <div class="modal__content__text">
                               <h2><?php the_title(); ?></h2>
                               <p><?php the_content(); ?></p>
                               <div class="modal__body__footer">
                                   <a class="lien__social" href="<?php echo  $facebook; ?>" target="_blank" class="btn btn--primary">Télécharger</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>