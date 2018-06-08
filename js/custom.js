$(document).ready(function() {

    // Request form
    var request_submit_button = $('#request_submit_button');
    request_submit_button.on('click', function(event) {
        // event.preventDefault(); // 
        var request_alerts = $('#request_alerts');

 
        // AR email ne ".ru" ? 
        var ivestasPastas = $("#request_form  input[type='email']").val();
        var salyga  = "(.ru$)";        
        var salyga2  = "[a-z0-9._%+-]+@[a-z0-9.-]";        
        var manoRuReg = new RegExp( salyga, 'i' );   // i - upperC and lowerC
        var manoEmailReg = new RegExp( salyga2, 'i' );   // i - upperC and lowerC
        var isEmail   = manoEmailReg.test(ivestasPastas);
        var isEmailRu = manoRuReg.test(ivestasPastas);
            // console.log(   ivestasPastas  ); 
            // console.log(   manoEmailReg.test(ivestasPastas) , salyga2 );    
            // console.log(   manoRuReg.test(ivestasPastas) , salyga );    
            // OR
            // var salyga4 = "^[a-zA-Z].*(.ru$)";                       
            // var myReg41 = new RegExp( salyga4, );   
            // console.log(   manoReg.exec(ivestasPastas) , salyga );      
            // console.log(   myReg41.exec(ivestasPastas) , salyga4 );   
            // console.log(   myReg41.test(ivestasPastas) , salyga4 );  

        // AR email ne ".ru" ? 
        if (!isEmailRu && isEmail) { //test- leidzia reg salygas
             
            var request_form = $('#request_form');


            request_submit_button.prop('disabled', true);
            request_alerts.html('<div class="alert alert-info"><i class="fa fa-spinner fa-spin"></i> Sending...</div>').fadeIn();


            $.post(request_form.attr('action'), request_form.serialize(), null, 'json')
                .done(function(response) {
                    //console.log(response);
                    if (response.status == 'success') {
                        request_alerts.html('<div class="alert alert-success"><i class="fa fa-check-circle" aria-hidden="true"></i> ' + response.message + '</div>').fadeIn();
                    } else {
                        request_alerts.html('<div class="alert alert-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> ' + response.message + '</div>').fadeIn();
                        request_submit_button.prop('disabled', false);
                    }
                })
                .fail(function() {
                    //console.log('fail');
                    request_alerts.html('<div class="alert alert-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>Unable to send your question. Please fill all fields and try again.</div>').fadeIn();
                    request_submit_button.prop('disabled', false);
                })
                .always(function() {
                    //console.log('always');
                    // request_alerts.delay(8000).fadeOut();
                });

        } else {
                request_alerts.html('<div class="alert alert-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>Unable to send your question for Russian email. Please fill all fields and try again.</div>').fadeIn();
                request_submit_button.prop('disabled', false);
        }





    });

    //===========jqfloat.js script==============
    var clicked = false;
    //define balloon attribute
    $('.balloon-action').jqFloat('stop',{
        width:300,
        height:30,
        speed:4000
    });
    $('.balloon-action').on('click', function() {
        clicked = !clicked;
        if(clicked)
            $(this).jqFloat('play');
        else
            $(this).jqFloat('stop');
    });
});