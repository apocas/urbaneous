var Events = {

    init:function(){
    
        $(".header_banner_box_button").click(function(){
            var str = $('#city').val();
            var strl = str.toLowerCase();
            if(strl=="lisbon"){
                $('.header_bg').fadeOut( 'slow', function(){    
                    Engine.smartBackgroundImage('images/lisbon.jpg','center');
                });
            }
            if(strl=="tomar"){
                $('.header_bg').fadeOut( 'slow', function(){    
                    Engine.smartBackgroundImage('images/tomar.jpg','center');
                });
            }
            if(strl=="london"){
                $('.header_bg').fadeOut( 'slow', function(){    
                    Engine.smartBackgroundImage('images/london.jpg','center');
                });
            }
            if(strl=="sydney"){
                $('.header_bg').fadeOut( 'slow', function(){    
                    Engine.smartBackgroundImage('images/sydney.jpg','bottom');
                });
            }
            if(strl=="new york"){
                $('.header_bg').fadeOut( 'slow', function(){    
                    Engine.smartBackgroundImage('images/newyork.jpg','top');
                });
            }
            if(strl=="venezia"){
                $('.header_bg').fadeOut( 'slow', function(){    
                    Engine.smartBackgroundImage('images/venezia.jpg','bottom');
                });
            }
            if(strl=="shanghai"){
                $('.header_bg').fadeOut( 'slow', function(){    
                    Engine.smartBackgroundImage('images/shanghai.jpg','center');
                });
            }
            if(strl=="kuala lumpur"){
                $('.header_bg').fadeOut( 'slow', function(){    
                    Engine.smartBackgroundImage('images/kualalumpur.jpg','center');
                });
            }
            if(strl=="san diego"){
                $('.header_bg').fadeOut( 'slow', function(){    
                    Engine.smartBackgroundImage('images/sandiego.jpg','0 -320px');
                });
            }
        });
    }

}