<style type="text/css">#loading1{opacity: 1;}</style>
<div class="section section-boxes section-noflow shading-full margin-normal section-auto shading-layers shading-highlight shading-opacity-50 colors-highlight shading-background-img shading-position-cover bg-1001" >
   <div class="section-padding" id="footer" style="visibility: hidden;">
      <div class="section-content">
         <div class="margins shading-holder shading-holder-box boxes-with-background">
            <div class="boxes boxes-inline-equal boxes-inline boxes-no-margins boxes-widths-equal boxes-layouts-text-text boxes-second-auto boxes-shading-none-none boxes-z-left boxes-shifted-no boxes-no-shadow boxes-same">
               <div class="boxes-item boxes-left margin-normal boxes-has-limit shading-none colors-white shading-other-none shading-other-flat boxes-text"   >
                  <div class="boxes-content">
                     <div class="boxes-buffer">
                        <div class="boxes-holder shading-holder shading-holder-box">
                           <div class="header-group n bc">
                              <h2 class="g b"> <span>Follow Us</span></h2>
                              <!-- <h3 class="g b"> Contact Online!</h3> -->
                           </div>
                           <div class="contentblock contentformat contentlinks n bc">
                              <p>At Masti Dance Academy, we love connecting with our students and community both inside the studio and online. You can contact with us on Facebook,  and Instagram!</p>
                           </div>
                           <div class="social-icons n">
                              <ul class="menu-social">
                                 <li>
                                    <a href="https://www.facebook.com/mastidanceacademy/" rel="publisher" target="_blank">
                                       <i class="fa fa-facebook-f" style="position: absolute; font-size: 25px;left: 35%; top: 25%;"></i>
                                       <span class="sr-only">FaceBook</span>
                                    </a>
                                 </li>
                                 <li  >
                                    <a href="https://twitter.com/MastiDanceAca" rel="publisher" target="_blank" >
                                       <i class="fa fa-twitter" style="left: 30%; top: 25%;position: absolute; font-size: 25px;" aria-hidden="true"></i>
                                       <span class="sr-only">Twitter</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="https://www.instagram.com/mastidanceacademy" rel="publisher" target="_blank">
                                       <i class="fa fa-instagram" style="left: 30%; top: 25%;position: absolute; font-size: 25px;" aria-hidden="true"></i>  
                                       <span class="sr-only">Instagram</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="https://www.youtube.com/mastidanceacademy" rel="publisher" target="_blank">
                                       <i class="fa fa-youtube" style="left: 30%; top: 25%;position: absolute; font-size: 25px;" aria-hidden="true"></i>
                                       <span class="sr-only">YouTube</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="boxes-item boxes-right margin-normal boxes-has-limit shading-none colors-white shading-other-none shading-other-flat boxes-text">
                  <div class="boxes-content">
                     <div class="boxes-buffer">
                        <div class="boxes-holder shading-holder shading-holder-box">
                           <div class="header-group n bc">
                              <h2 class="g b"> <span>Contact Us</span></h2>
                              <!-- <h3 class="g b"> Reach Us by Your Qurey</h3> -->
                           </div>
                           <div class="contentblock contentformat contentlinks n bc">
                              <!-- <p>You can send your query and we will connect you as soon as possible!</p> -->
                           </div>
                           <div class="form-box n">
                              <div class="gf_browser_gecko gform_wrapper" id="gform_wrapper_2">
                                 <div id="gf_2" class="gform_anchor" tabindex="-1"></div>
                               <form method="post" id="gform_2" action="contact_us">
                                 @csrf
                                    <div class="gform_body">
                                       <ul id="gform_fields_2" class="gform_fields top_label form_sublabel_below description_below">
                                          <li id="field_2_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                             <label class="gfield_label" for="input_2_1">First Name<span class="gfield_required">*</span></label>
                                             <div class="ginput_container ginput_container_text"><input name="first_name" id="input_2_1" type="text" value="" class="large" aria-required="true" aria-invalid="false" required=""></div>
                                          </li>
                                          <li id="field_2_5" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                             <label class="gfield_label" for="input_2_5">Last Name<span class="gfield_required">*</span></label>
                                             <div class="ginput_container ginput_container_text"><input name="last_name" id="input_2_5" type="text" value="" class="large" aria-required="true" aria-invalid="false" required=""></div>
                                          </li>
                                          <li id="field_2_4" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                             <label class="gfield_label" for="input_2_4">Email<span class="gfield_required">*</span></label>
                                             <div class="ginput_container ginput_container_email"> <input name="email" id="input_2_4" type="email" value="" class="large" aria-required="true" aria-invalid="false" required=""></div>
                                          </li>
                                          <li id="field_2_4" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                             <label class="gfield_label" for="input_2_4">Phone No.</label>
                                             <div class="ginput_container ginput_container_email"> <input name="phone" id="input_2_4" type="text" value="" class="large" aria-required="true" aria-invalid="false"></div>
                                             @if ($errors->any())
                                                <div class="alert alert-danger">
                                                   <ul>
                                                         @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                         @endforeach
                                                   </ul>
                                                </div>
                                             @endif
                                          </li>
                                          <li id="field_2_6" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                             <label class="gfield_label" for="input_2_6">Message<span class="gfield_required">*</span></label>
                                             <div class="ginput_container ginput_container_date"><textarea name="message" id="input_2_6" type="text" value="" style="height: 90px;" required=""></textarea></div>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="gform_footer top_label"> 
<input type="submit" id="gform_submit_button_2" class="gform_button button" value="Send" />
</div>
                                 </form>
                              </div>
                              <iframe style="display:none;width:0px;height:0px;" src="about:blank" name="gform_ajax_frame_2" id="gform_ajax_frame_2" title="This iframe contains the logic required to handle Ajax powered Gravity Forms."></iframe> <script type="text/javascript">jQuery(document).ready(function($){gformInitSpinner( 2, '../../wp-content/themes/mywp/assets/images/spinner.gif' );jQuery('#gform_ajax_frame_2').on('load',function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_2');var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_2').length > 0;var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = form_content.length > 0 && ! is_redirect && ! is_confirmation;var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;if(is_form){jQuery('#gform_wrapper_2').html(form_content.html());if(form_content.hasClass('gform_validation_error')){jQuery('#gform_wrapper_2').addClass('gform_validation_error');} else {jQuery('#gform_wrapper_2').removeClass('gform_validation_error');}setTimeout( function() { /* delay the scroll by 50 milliseconds to fix a bug in chrome */ jQuery(document).scrollTop(jQuery('#gform_wrapper_2').offset().top - mt); }, 50 );if(window['gformInitDatepicker']) {gformInitDatepicker();}if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_2').val();gformInitSpinner( 2, '../../wp-content/themes/mywp/assets/images/spinner.gif' );jQuery(document).trigger('gform_page_loaded', [2, current_page]);window['gf_submitting_2'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_2').replaceWith(confirmation_content);jQuery(document).scrollTop(jQuery('#gf_2').offset().top - mt);jQuery(document).trigger('gform_confirmation_loaded', [2]);window['gf_submitting_2'] = false;}, 50);}else{jQuery('#gform_2').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger('gform_post_render', [2, current_page]);} );} );</script>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<style>
    .grecaptcha-badge{
        display:none;
    }
</style>
<script src="https://www.google.com/recaptcha/api.js?render=6LfBPAgdAAAAAPLWrZWsqavWfFVCr66kDdkk5P6Q"></script>
