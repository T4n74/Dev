$(function(){

    $(".navbar a, footer a").on("click", function(event){
    
        event.preventDefault();
        var hash = this.hash;
        
        $('body,html').animate({scrollTop: $(hash).offset().top} , 900 , function(){window.location.hash = hash;})
        
    });
      $('#quest-form').submit(function(e) {
        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#quest-form').serialize();
		
		 $.ajax({
            type: 'POST',
            url: 'contact.php',
            data: postdata,
            dataType: 'json',
            success: function(result) {
                 
                if(result.isSuccess) 
                {
                    $('#quest-form').append("<p class='thank-you'>Je t'aime mon totoro Câlinoux <br> Merci pour tout ! :)</p>");
                    $('#quest-form')[0].reset();
                }
                else
                {
                    $('#log + .comments').html(result.logError);
                    $('#enfant + .comments').html(result.enfantError);
                    $('#dest + .comments').html(result.destError);
                    $('#pro + .comments').html(result.proError);
                   $('#email + .comments').html(result.emailError);
                }                
            }
       		

       		
            });
         

   		});


})