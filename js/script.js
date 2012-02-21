$(document).ready(function() {
    
    var submittedScene;
    var scrollLogo = false;
    
    // create the sticky nav
    $.waypoints.settings.scrollThrottle = 0;
    $('nav').waypoint(function(event, direction) {
    	$(this).toggleClass('sticky', direction === "down");    	
    	scrollLogo = true;
    	
    	$("div.hero").css("margin-top", "132px");
    		   	  	
    	event.stopPropagation();  
    	
    	if(direction == "up") {
    	  $("a.home").css("top", "0");
    	  scrollLogo = false;
    	  $("div.hero").css("margin-top", "0");
    	}
    		 	
    });
    
    
    //keep element fixed based on scroll position
    $(window).scroll(function(){
            
      if(scrollLogo) {
        var scrollPosition = ($(window).scrollTop() - 92).toString();
        $("a.home").css("top", -scrollPosition);
      
      }
            
    });
      
  
    // hide the fake summary add div
    $("#saved").css("display", "none");
    
     // manage form submission
    $("#sub").click(function(){        
        submitScene();
    });
    
    // manage comment submission
    $("#post-comment").click(function(){
        
        submitComment();
        
        // don't jump to the top
        return false;
    });
    
    // load the saved information if it exists
    // insert these values if they exist in local storage
    if(localStorage["sum"]){
        
        var savedSummary = localStorage["sum"];
        var savedPitch = localStorage["pitch"];
                
        $("#saved").find("h3").html(savedSummary);
        $("#saved").find("p").html(savedPitch);
                
        $("#saved").css("display", "block");
    }
    
    // clear out the local storage
    localStorage.removeItem("sum");
    localStorage.removeItem("pitch");
 
    // use vote manager plugin
    $(".vote-controls").vote();
    $(".standard-listing").listmanager({openText : 'Collapse Scene', closedText : 'Read entire scene'});
    
    // hide submission after click instead of initially
    $(".comment-suggestion").listmanager({openText : '[-] Hide Scene Suggestion', closedText : '[+] Show Scene Suggestion', startOpen : true});
    
    // set up tabs
    tabSetup();
        
    $("ul.sf-menu").superfish({
            autoArrows : false,
            hoverClass : 'hover-active',
            delay : 0
        });
    
    $("ul.sf-sub-menu").superfish({
            autoArrows : false,
            hoverClass : 'sub-hover-active',
            delay : 0
        });
    
});

// manages tabs temporarily
function tabSetup() {
    
    var tabContainers = $('div.comment-tabs > div');
    
    $('div.comment-tabs ul a').click(function () {
        tabContainers.hide().filter(this.hash).show();
        
        $('div.comment-tabs ul a').removeClass('selected');
        $(this).addClass('selected');
        
        return false;
    }).filter(':first').click();
}

// submits a scene comment based on category
function submitComment() {
    
    // collect information about what is in the form
    var comment = $("#pitch-comment").val();
    
    // booleans for checkboxes
    //var dialogue = $("#dialogue-check").is(':checked');
    //var details = $("#details-check").is(':checked');
    
    // create new HTML element
    var newCommentHTML = '<li class="single comment-listing"><div class="vote-controls"><button class="vote-up"></button><span>0</span><button class="vote-down"></button></div><span class="comment-info"><a href="#">jerryfilmguy12</a>Just now</span><p>' + comment + '</p><ul class="comment-replies"><li><a class="reply-action" href="#">Reply</a></li></ul></li>';
    
    // holds value of what div to insert    
    var commentDivName = $("input[@name='type']:checked").val();
    
    // determine what kind of comment this is
    
    if(commentDivName == "comments"){
        
        // comment
        $("div#comments").find(".single").first().before(newCommentHTML);
        $("div#all").find(".single").first().before(newCommentHTML);
              
    } else if (commentDivName == "dialogue") {
        
        // dialogue
        $("div#dialogue").find(".single").first().before(newCommentHTML);
        $("div#all").find(".single").first().before(newCommentHTML);
        
        // give it a class
        $("div#dialogue").find(".single").first().addClass("type-dialogue");
        $("div#all").find(".single").first().addClass("type-dialogue");
        
    } else {
        
        // details
        $("div#details").find(".single").first().before(newCommentHTML);
        $("div#all").find(".single").first().before(newCommentHTML);
        
        // give it a class
        $("div#details").find(".single").first().addClass("type-details");
        $("div#all").find(".single").first().addClass("type-details");
    }
         
    // restart vote plugin
    $(".vote-controls").vote(); 
}

// submits scene, saves a session variable
function submitScene() {
    
    var summary = $("#summary").val();
    var pitch = $("#pitch").val();
    
    // detect if local storage is available
    if(Modernizr.localstorage) {
        
        localStorage["sum"] = summary;
        localStorage["pitch"] = pitch;
        
    } else {
        alert('no luck on local storage');
        // do something else here...
    }    
}

// Comma separator method
function addCommas(str) {
    
    str += '';
	x = str.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	
	return x1 + x2;
}