  /*jslint browser: true*/
  /*global $, jQuery, alert*/
  (function($) {
    'use strict';

    $(function() {

        $(document).ready(function() {
            function triggerClick(elem) {
                $(elem).click();
            }
            var $progressWizard = $('.stepper'),
                $tab_active,
                $tab_prev,
                $tab_next,
                $btn_prev = $progressWizard.find('.prev-step'),
                $btn_next = $progressWizard.find('.next-step'),
                $tab_toggle = $progressWizard.find('[data-toggle="tab"]'),
                $tooltips = $progressWizard.find('[data-toggle="tab"][title]');

            // To do:
            // Disable User select drop-down after first step.
            // Add support for payment type switching.

            //Initialize tooltips
            $tooltips.tooltip();

            //Wizard
            $tab_toggle.on('show.bs.tab', function(e) {
                var $target = $(e.target);

                // if (!$target.parent().hasClass('active, disabled')) {
                //     $target.parent().prev().addClass('completed');
                // }
                // if ($target.parent().hasClass('disabled')) {
                //     return false;
                // }
                // $target.parent().prev().addClass('completed');
                // $target.parent().removeClass('disabled');
                // if (!$('#exampleCheck1').is(':checked')) {

                //     $('#devtab').addClass('invalid');

                // }
                // else{
                //     $('#devtab').removeClass('invalid');
                // }
            });

            // $tab_toggle.on('click', function(event) {
            //     event.preventDefault();
            //     event.stopPropagation();
            //     return false;
            // });

            // $btn_next.on('click', function() {
            //     $tab_active = $progressWizard.find('.active');

            //     $tab_active.next().removeClass('disabled');

            //     $tab_next = $tab_active.next().find('a[data-toggle="tab"]');
            //     triggerClick($tab_next);

            // });
            // $btn_prev.click(function() {
            //     $tab_active = $progressWizard.find('.active');
            //     $tab_prev = $tab_active.prev().find('a[data-toggle="tab"]');
            //     triggerClick($tab_prev);
            // });

            $('#do_next').click(function(){
                var tab_next = $('#nav_noi');
                triggerClick(tab_next);
                $('#devtab1').addClass('invalid');
            });
            $('#noi_prev').click(function(){
                var tab_next = $('#nav_do');
                triggerClick(tab_next);
            });

            $('#noi_next').click(function(){
                var tab_next = $('#nav_ea');
                triggerClick(tab_next);
                $('#devtab2').addClass('invalid');
            });
            $('#ea_prev').click(function(){
                var tab_next = $('#nav_noi');
                triggerClick(tab_next);
            });
            $('#ea_next').click(function(){
                var tab_next = $('#nav_sap');
                triggerClick(tab_next);
                $('#devtab6').addClass('invalid');
            });
            $('#sap_prev').click(function(){
                var tab_next = $('#nav_noi');
                triggerClick(tab_next);
            });
            $('#sap_next').click(function(){
                var tab_next = $('#nav_nepa');
                triggerClick(tab_next);
                $('#devtab3').addClass('invalid');
            });
            $('#nepa_prev').click(function(){
                var tab_next = $('#nav_sap');
                triggerClick(tab_next);
            });
            $('#nepa_next').click(function(){
                var tab_next = $('#nav_cop');
                triggerClick(tab_next);
                $('#devtab7').addClass('invalid');
            });
            $('#cop_prev').click(function(){
                var tab_next = $('#nav_sap');
                triggerClick(tab_next);
            });
            $('#cop_next').click(function(){
                var tab_next = $('#nav_boem');
                triggerClick(tab_next);
                $('#devtab4').addClass('invalid');
            });
            $('#boem_prev').click(function(){
                var tab_next = $('#nav_cop');
                triggerClick(tab_next);
            });
            $('#boem_next').click(function(){
                var tab_next = $('#nav_fir');
                triggerClick(tab_next);
                $('#devtab8').addClass('invalid');
                
            });
            $('#fir_prev').click(function(){
                var tab_next = $('#nav_cop');
                triggerClick(tab_next);
            });
            $('#fir_next').click(function(){
                // var tab_next = $('#nav_cop');
                // triggerClick(tab_next);
                $('#devtab5').addClass('invalid');
            });
            
            

            $('#exampleCheck1').click(function(){
                if($(this).prop("checked") == true){
                    $('#devtab1').addClass('invalid');
                }
                else if($(this).prop("checked") == false){
                    $('#devtab1').removeClass('invalid');
                }
            });
            $('#exampleCheck2').click(function(){
                if($(this).prop("checked") == true){
                    $('#devtab2').addClass('invalid');
                }
                else if($(this).prop("checked") == false){
                    $('#devtab2').removeClass('invalid');
                }
            });
            $('#exampleCheck3').click(function(){
                if($(this).prop("checked") == true){
                    $('#devtab3').addClass('invalid');
                }
                else if($(this).prop("checked") == false){
                    $('#devtab3').removeClass('invalid');
                }
            });
            $('#exampleCheck4').click(function(){
                if($(this).prop("checked") == true){
                    $('#devtab4').addClass('invalid');
                }
                else if($(this).prop("checked") == false){
                    $('#devtab4').removeClass('invalid');
                }
            });
            $('#exampleCheck5').click(function(){
                if($(this).prop("checked") == true){
                    $('#devtab5').addClass('invalid');
                }
                else if($(this).prop("checked") == false){
                    $('#devtab5').removeClass('invalid');
                }
            });
            $('#exampleCheck6').click(function(){
                if($(this).prop("checked") == true){
                    $('#devtab6').addClass('invalid');
                }
                else if($(this).prop("checked") == false){
                    $('#devtab6').removeClass('invalid');
                }
            });
            $('#exampleCheck7').click(function(){
                if($(this).prop("checked") == true){
                    $('#devtab7').addClass('invalid');
                }
                else if($(this).prop("checked") == false){
                    $('#devtab7').removeClass('invalid');
                }
            });
            $('#exampleCheck8').click(function(){
                if($(this).prop("checked") == true){
                    $('#devtab8').addClass('invalid');
                }
                else if($(this).prop("checked") == false){
                    $('#devtab8').removeClass('invalid');
                }
            });
            $('#exampleCheck1').click(function(){
                if($(this).prop("checked") == true){
                    $('#devtab').addClass('invalid');
                }
                else if($(this).prop("checked") == false){
                    $('#devtab').removeClass('invalid');
                }
            });

        });
    });

}(jQuery, this));