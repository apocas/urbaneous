var Engine = {

    init:function(){
    
        $(document).ready(function()
        {
    
                    
            function smartBackgroundImage(url,type){
                //create an img so the browser will download the image:
                $('<img />')
                .attr('src', url)
                .load(function(){ //attach onload to set background-image
                    $('.header_bg').css('backgroundImage', 'url('+url+')' );
                    $('.header_bg').css('backgroundPosition', type );
                    $('.header_bg').fadeIn('slow');           
                });          
            }
                    
    
            Motions.init();
            Events.init();
    
        });
    }

}