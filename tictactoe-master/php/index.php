
<!--<div class="rouge"><? echo wp_get_current_user()->display_name; ?></div>
<div class="bleu" style="display: none"><? echo get_option( 'tic_tac_toe_option_name' )['premier_joueur_0']; ?></div>-->

<link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/4592bcc5fd.js"
      crossorigin="anonymous"
    ></script>

    <!--conteneur principal-->
    <div class="main-content shadow">
            <div class="row">
                <!--col gauche-->
                <div class="col-50">
                    <div class="title">Tic Tac Toe!</div>
                    <div id="btn-invite" class="invite shadow pointer">Inviter un joueur</div>
                    <div id="invite-invisible" class="hidden">&nbsp</div>
                   <span class="txt-premier-joueur">Option premier joueur:</span>
                   
                    <div class="jouer">
                        
                        <div class="first-player shadow h2-title" id="premier_joueur_0">
                           &nbsp
                            </div>
                        <div class="hidden" id="setting-joueur">
                                <? echo get_option( 'tic_tac_toe_option_name' )['premier_joueur_0']; ?>
                        </div>
                    </div>

                    <div class="joueurs">
                        <div class="joueur joueur-vert">
                            <div class="cercle-icone"> 
                             <i class="fas fa-leaf icon-leaf"></i>
                            
                            </div>
                                <p class="p-header"> Hôte </p>
                                <div id="hote">
                                

                                    <p><? 
                                    $current_user_name="";
                                    if ( is_user_logged_in() ) {
                                        $current_user = wp_get_current_user();
                                        $current_user_name=$current_user->display_name;
                                        echo $current_user->display_name;
                                    } else {
                                    
                                        $current_user_name="Hôte";
                                        echo $current_user_name;
                                        
                                    }
                                     ?> </p><span id="metadata-current-user" title="<?php echo $current_user_name ?>"></span>
                                    </div>  
                                <div id="score-hote">                              
                                    <p> </p>
                                    </div>
                            </div>
                        <div class="joueur joueur-rose">
                           <div class="cercle-icone"> 
                           <i class="fas fa-paw icon-paw"></i>
                           </div>
                                <p class="p-header"> Invité(e) </p>
                                <div id="invite">
                                    <p>  </p>
                                    </div>  
                                <div id="score-invite">                              
                                    <p> </p>
                                    </div>
                            </div>
                        </div>
                        
                        <div class="shadow" id="status-box">
                                <span id="nom-gagnant">&nbsp</span><br />
                                <i id="i-debut" class="fas fa-exclamation"></i><p id="p-debut" class="debut">Cliquez sur le bouton orange: <br>"Invitez un joueur"<br>pour débuter la partie!</p>
                                
                                <i id="i-gagnant" class="fas fa-grin-stars fa-3x emoji hidden"></i><p id="p-gagnant" class="hidden">Bravo! <br>Tu gagnes </p>
                                <i id="i-nulle" class="fas fa-meh fa-3x emoji hidden"></i><p id="p-nulle" class="hidden"> &nbsp&nbsp&nbspPartie nulle&nbsp&nbsp&nbsp  </p>   </span> 
                                 
                                </div>
                   
                </div>

                <!--col droite-->
                <div class="col-50">
                    <div class="row">
                        <div class="col-parent">
                            <div class="btn-dark btn-xl shadow opaque" 
                                    id="joueur-actuel">
                            </div>
                                <div class="circle-time shadow opaque hidden">15</div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Plateau de jeu -->
                        <div class="plateau" id="plateau">
                            <div class="row">
                                <div id="plateau-invisible" class="">
                                <span>&nbsp test</span><br /> 
                                </div>
                            </div>
                            <div class="plateau-inner">
                            <div class="row">
                                <div class="col-33 cell" id="tab1-1">
                                </div>
                                <div
                                    class="col-33 cell cell-v-middle"
                                    id="tab2-1">
                                </div>
                                <div class="col-33 cell" id="tab3-1"></div>
                            </div>

                            <div class="row">
                                <div
                                    class="col-33 cell cell-h-middle"
                                    id="tab1-2">
                                </div>
                                <div
                                    class="col-33 cell cell-v-middle cell-h-middle"
                                    id="tab2-2">
                                </div>
                                <div
                                    class="col-33 cell cell-h-middle"
                                    id="tab3-2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-33 cell" id="tab1-3"></div>
                                <div
                                    class="col-33 cell cell-v-middle"
                                    id="tab2-3">
                                </div>
                                <div class="col-33 cell" id="tab3-3"></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- Boutons -->
                    <div class="row d-flex btn-list">
                        <div
                            class="btn-dark btn-md shadow mt-40 pointer"
                            id="reglements">
                            Règlements
                        </div>
                        <div
                            class="btn-dark btn-md shadow mt-40 opaque pointer"
                            id="nouvellepartie">
                            Nouvelle partie
                        </div>
                        <div class="btn-dark circle-quit mt-40 shadow pointer" id="reinitialisation">
                            <i class="fas fa-redo-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
    <!-- Modal reglements -->
    <div id="fenetretempo" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-header"> 
             <h4>Réglements du jeu</h4>
             <h4>TIC-TAC-TOE</h4>
        </div>
        <div class="modal-body">
           <p>Le but du jeu est de réussir a placer 3 jetons consécutifs en ligne verticale, horizontale ou diagonale avant son adversaire.</p>
         
           <p>Chaque joueur place a tour de rôle son jeton tout en essayant de contrer le jeu de l'adversaire.</p>

           <p>Exemple de plateau avec un gagnant</p> 
           <img src="/wp-content/plugins/tic-tac-toe/images/regle-gagnant.PNG" alt="Exemple de partie avec un gagnant" class="regle-image">
           <p>Si aucun joueur ne parvient a avoir 3 jetons consécutifs, la partie sera nulle.</p>
        
           <p>Exemple d'une partie nulle</p>
           <img src="/wp-content/plugins/tic-tac-toe/images/regle-nulle.PNG" alt="Exemple de partie nulle" class="regle-image">
           <p>Bonne partie!</p>
        </div>
      </div>
    </div>   

    