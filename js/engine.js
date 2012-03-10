var Engine = {

    init:function(){
    
        $(document).ready(function()
        {
            Motions.init();
            Events.init();
            
        });
    },
    
    
    
    smartBackgroundImage:function (url,type){
        $('<img />')
        .attr('src', url)
        .load(function(){ 
            $('.header_bg').css('backgroundImage', 'url('+url+')' );
            $('.header_bg').css('backgroundPosition', type );
            $('.header_bg').fadeIn('slow');           
        });          
    }

}