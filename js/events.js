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
                    Engine.smartBackgroundImage('images/tomar.jpg','0 -390px');
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
            
            
            var oArgs = {
                app_key: "PhSPfXsNh4bxtscN",
                q: strl,
                page_size: 25
            };
            
            $(".section_white_container").html("");
            
            EVDB.API.call("/events/search", oArgs, function(oData)
            {
                $.each(oData.events.event, function() {
                    if(this.description != null){
                        var cont = "<div class='event'>" +
                        this.title + "<br/><div class='inner_event'>" + this.description.substr(0,150) + "</div>";
                    
                        if(this.image != null){
                            cont += "<img src='" + this.image.url +"'>";
                        }
                        cont += "</div>";
                        $(".section_white_container").append(cont);
                    }
                });
            });
        });
    }

}