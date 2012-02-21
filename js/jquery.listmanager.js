(function( $ ){
    
    $.fn.listmanager = function( options ) {
    
        var defaults = {
            'closedText' : 'Read More',
            'openText' : 'Read Less',
            'startOpen' : false
        };
        
        var fullContentMode = false;
        
        return this.each( function() {
            
            var settings = $.extend( defaults, options );
            
            // handle the excerpt part
            var maxStringLength = 200;
            var originalPitchString = $(this).find("p").html();
            var shortPitchString = originalPitchString;
            if(shortPitchString.length > maxStringLength){
                shortPitchString = shortPitchString.substring(0,maxStringLength-1)+"...";
            }
            
            $(this).find("p").html(shortPitchString);
            
            var $bodyCopy = $(this);
            
            // start open
            if(settings.startOpen){
                
                $bodyCopy.find("p").html(originalPitchString);
                fullContentMode = true;
                $("#show-hide").html(settings.openText);               
                
            }
            
            // expand the <p> after link clicked... but make it a toggle
            // change "Read Entire Scene" into "Read Less" or something...
            
            $(this).find("#show-hide").click(function(){
            
                if(!fullContentMode){
                    $bodyCopy.find("p").html(originalPitchString);
                    fullContentMode = true;
                    $(this).html(settings.openText);
                } else {
                    $bodyCopy.find("p").html(shortPitchString);
                    fullContentMode = false;
                    $(this).html(settings.closedText);
                }
                
                // make sure link doesn't jump
                return false;            
            });           
        });    
    };
    
})( jQuery );