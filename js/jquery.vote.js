/*

Author: Andy Rossi
Plugin: Vote. Manages the voting system for this prototype.

*/
(function($){
    
    $.fn.vote = function() {
             
      // updates the vote count
      function updateVote(num, elem) {
        var newValue = num.toString();
        newValue = addCommas(newValue);    
        elem.find("span").html(newValue);
      }
    
      return this.each(function() {
          
        // manages how many times an arrow can be clicked before disabled (for changing vote)  
        var clickCount = 0;
        
        // get the value of this  
        var $voteDisplay = $(this);
        
        var voteCount;
        
        // get the vote value
        voteCount = $(this).find("span").html();
        voteCount = voteCount.replace(/,/g,'');
        voteCount = parseInt(voteCount);
        
        //perform a global mouseup just in case       
        $voteDisplay.bind('mouseleave', function(){
          
          if(clickCount === 0){
            $voteDisplay.find("button").last().removeClass("voted-down");
            $voteDisplay.find("button").first().removeClass("voted-up");

            $voteDisplay.find("button").last().addClass("vote-down");
            $voteDisplay.find("button").first().addClass("vote-up");
          }          
        })
        
        //just keep all changes local to the control set
        $voteDisplay.find(".vote-up").click(function(){
            
            var $this = $(this);
    
            if(clickCount < 1){
                
                // increase the value
                voteCount ++;
                updateVote(voteCount, $voteDisplay);
            
                clickCount++;
                
                $(this).addClass("voted-up");
                $(this).removeClass("vote-up");
                
                // clear out the other button class as well
                $voteDisplay.find("button").last().removeClass("voted-down");
                $voteDisplay.find("button").last().addClass("vote-down");
            } 
            
            if(clickCount === 0){
                // clear out the other button class as well
                $voteDisplay.find("button").last().removeClass("voted-down");
                $voteDisplay.find("button").first().removeClass("voted-up");
                
                $voteDisplay.find("button").last().addClass("vote-down");
                $voteDisplay.find("button").first().addClass("vote-up");

            }                                  
        });

        $voteDisplay.find(".vote-down").click(function(){
            
            if(clickCount > -1){
                clickCount --;
                
                // decrease the value (can there be negative votes?)
                voteCount --;                
                updateVote(voteCount, $voteDisplay);
                
                $(this).addClass("voted-down");
                $(this).removeClass("vote-down");
                
                // clear out the other button class as well
                $voteDisplay.find("button").first().removeClass("voted-up");
                $voteDisplay.find("button").first().addClass("vote-up");
            }
            
            if(clickCount === 0){
                // clear out the other button class as well
                $voteDisplay.find("button").last().removeClass("voted-down");
                $voteDisplay.find("button").first().removeClass("voted-up");
                
                $voteDisplay.find("button").last().addClass("vote-down");
                $voteDisplay.find("button").first().addClass("vote-up");
            }          
        });          
      });        
    };
    
})(jQuery);