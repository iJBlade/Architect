<!DOCTYPE html>
<?php // page contact  ?>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
        <link href="css/style.css" rel="stylesheet" type="text/css"/> 
        <link href="css/header.css" rel="stylesheet" type="text/css"/>  
        <link href="css/contact.css" rel="stylesheet" type="text/css"/>  
        <link href="css/footer_blog.css" rel="stylesheet" type="text/css"/> 
        <title>Contact</title>       
    </head>
        <body>
        <?php include "templates/fragments/header.php"?>
            <main style="    margin-bottom: 145px;">
                <div class="flex justify" style="background-color: black;color:white;font-size: 17px;padding: 25px 162px;margin: 40px auto;">
                    <div>
                        <svg class="svg-icon" viewBox="0 0 20 20" fill="white" style="width:25px;">
                            <path d="M18.303,4.742l-1.454-1.455c-0.171-0.171-0.475-0.171-0.646,0l-3.061,3.064H2.019c-0.251,0-0.457,0.205-0.457,0.456v9.578c0,0.251,0.206,0.456,0.457,0.456h13.683c0.252,0,0.457-0.205,0.457-0.456V7.533l2.144-2.146C18.481,5.208,18.483,4.917,18.303,4.742 M15.258,15.929H2.476V7.263h9.754L9.695,9.792c-0.057,0.057-0.101,0.13-0.119,0.212L9.18,11.36h-3.98c-0.251,0-0.457,0.205-0.457,0.456c0,0.253,0.205,0.456,0.457,0.456h4.336c0.023,0,0.899,0.02,1.498-0.127c0.312-0.077,0.55-0.137,0.55-0.137c0.08-0.018,0.155-0.059,0.212-0.118l3.463-3.443V15.929z M11.241,11.156l-1.078,0.267l0.267-1.076l6.097-6.091l0.808,0.808L11.241,11.156z"></path>
                        </svg>
                        <p>contact@marie-manzano.com</p>
                    </div>
                    <div>
                        <svg class="svg-icon" viewBox="0 0 20 20" fill="white" style="width:25px;">
                            <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
                        </svg>
                        <p>Disponible dans toute la France</p>    
                    </div>
                </div>
                
                <form action="">
                    <div class="flex"> 
                        <div >
                            <label for="Nom" class="gfield_label">Nom*</label><br>
                            <input type="text" >  
                        </div>
                        <div>
                            <label for="Prénom" class="gfield_label">Prénom*</label><br>
                            <input type="text">  
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <label for="Téléphone" class="gfield_label">Téléphone*</label><br>
                            <input type="text">  
                        </div>
                        <div>
                            <label for="Email" class="gfield_label">Email*</label><br>
                            <input type="text">  
                        </div>
                    </div>

                        <div>
                            <label for="Nom" class="gfield_label">Particulier ou profesionnel *</label><br>
                            <select id="cardMonth" data-ref="cardDate" class="card-input__input -select">
                                <option value="" disabled="disabled" selected="selected"></option> 
                                <option value="professionnel">Professionnel</option>
                                <option value="particulier">Particulier</option>
                            </select>
                      </div>
    
                    <div class="flex" style="display: -webkit-inline-box;"> 
                        <li id="field_1_16" >
                            <label class="gfield_label">Type de local</label>
                            <div class="ginput_container ginput_container_checkbox" style="margin:2px 45px;">
                                <ul class="gfield_checkbox" id="input_1_16">
                                    <li class="gchoice_1_16_1">
                                        <input name="input_16.1" type="checkbox" value="Maison" id="choice_1_16_1">
                                        <label for="choice_1_16_1" id="choix">Maison</label>
                                    </li>
                                    <li class="gchoice_1_16_2">
                                        <input name="input_16.2" type="checkbox" value="Appartement" id="choice_1_16_2">
                                        <label for="choice_1_16_2" id="choix">Appartement</label>
                                    </li>
                                    <li class="gchoice_1_16_3">
                                        <input name="input_16.3" type="checkbox" value="Bureaux" id="choice_1_16_3">
                                        <label for="choice_1_16_3" id="choix">Bureaux</label>
                                    </li>
                                    <li class="gchoice_1_16_4">
                                        <input name="input_16.4" type="checkbox" value="Cabinet médical" id="choice_1_16_4">
                                        <label for="choice_1_16_4" id="choix">Cabinet médical</label>
                                    </li>
                                    <li class="gchoice_1_16_5">
                                        <input name="input_16.5" type="checkbox" value="Restaurant, bar" id="choice_1_16_5">
                                        <label for="choice_1_16_5" id="choix">Restaurant, bar</label>
                                    </li>
                                    <li class="gchoice_1_16_6">
                                        <input name="input_16.6" type="checkbox" value="Boutique" id="choice_1_16_6">
                                        <label for="choice_1_16_6" id="choix">Boutique</label>
                                    </li>
                                    <li class="gchoice_1_16_7">
                                        <input name="input_16.7" type="checkbox" value="Autre" id="choice_1_16_7">
                                        <label for="choice_1_16_7" id="choix">Autre</label>
                                    </li>
                                </ul>
                            </div>
                        </li>    
                        <li id="field_1_17" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
                            <label class="gfield_label">Pièces à traiter</label><div class="ginput_container ginput_container_checkbox">
                                <ul class="gfield_checkbox" id="input_1_17">
                                    <li class="gchoice_1_17_1">
                                        <input name="input_17.1" type="checkbox" value="Toutes les pièces" id="choice_1_17_1">
                                        <label for="choice_1_17_1" id="choix">Toutes les pièces</label>
                                    </li>
                                    <li class="gchoice_1_17_2">
                                        <input name="input_17.2" type="checkbox" value="Cuisine" id="choice_1_17_2">
                                        <label for="choice_1_17_2" id="choix">Cuisine</label>
                                    </li>
                                    <li class="gchoice_1_17_3">
                                        <input name="input_17.3" type="checkbox" value="Salon" id="choice_1_17_3">
                                        <label for="choice_1_17_3" id="choix">Salon</label>
                                    </li>
                                    <li class="gchoice_1_17_4">
                                        <input name="input_17.4" type="checkbox" value="Salle de bains/WC" id="choice_1_17_4">
                                        <label for="choice_1_17_4" id="choix">Salle de bains/WC</label>
                                    </li>
                                    <li class="gchoice_1_17_5">
                                        <input name="input_17.5" type="checkbox" value="Chambres" id="choice_1_17_5">
                                        <label for="choice_1_17_5" id="choix">Chambres</label>
                                    </li>
                                    <li class="gchoice_1_17_6">
                                        <input name="input_17.6" type="checkbox" value="Autres" id="choice_1_17_6">
                                        <label for="choice_1_17_6" id="choix">Autres</label>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </div>
                    <div>
                        <label for="Surface" class="gfield_label">Surface totale approximatives en m²</label><br>
                        <input type="text" name="surface" id="surface">
                    </div>
                    <div  style="display: -webkit-inline-box;">
                        <li id="field_1_20" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
                            <label class="gfield_label">Nature des travaux</label>
                            <div class="ginput_container ginput_container_checkbox">
                                <ul class="gfield_checkbox" id="input_1_20">
                                    <li class="gchoice_1_20_1">
                                        <input name="input_20.1" type="checkbox" value="Construction neuve" id="choice_1_20_1">
                                        <label for="choice_1_20_1" id="choix">Construction neuve</label>
                                    </li>
                                    <li class="gchoice_1_20_2">
                                        <input name="input_20.2" type="checkbox" value="Rénovation" id="choice_1_20_2">
                                        <label for="choice_1_20_2" id="choix">Rénovation</label>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li id="field_1_21" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
                            <label class="gfield_label">Nature du projet</label>
                            <div class="ginput_container ginput_container_checkbox">
                                <ul class="gfield_checkbox" id="input_1_21">
                                    <li class="gchoice_1_21_1">
                                        <input name="input_21.1" type="checkbox" value="Architecture d’Intérieur" id="choice_1_21_1">
                                        <label for="choice_1_21_1" id="choix">Architecture d’Intérieur</label>
                                    </li>
                                    <li class="gchoice_1_21_2">
                                        <input name="input_21.2" type="checkbox" value="Décoration d’Intérieur" id="choice_1_21_2">
                                        <label for="choice_1_21_2" id="choix">Décoration d’Intérieur</label>
                                    </li>
                                </ul>
                            </div>
                        </li>        
                    </div>           
                    <div>
                        <label for="message" class="gfield_label">Message</label><br>
                        <textarea name="input_22" id="input_1_22" class="textarea medium" aria-required="true" aria-invalid="false" rows="10" cols="50"></textarea>
                    </div>




                </form>



              <button data-hover="⟶" id="open_form"><div>Contactez-moi</div></button> 
                    
            </main>
            <?php  include "templates/fragments/footer.php"?>                    
        </body>
</html>

<script src="js/header.js" type="text/javascript"></script>
