$("a[rel*=leanModal]").leanModal({ top : 50, overlay : 0.4, closeButton: ".close-modal" });;

     $(function() {
        $('#tags').autocomplete({
            source: [
            "Family",
	        "Criminal Defense",
	        "Business",
	        "Personal Injury",
	        "Bankrupcy & Finances",
	        "Products & Services",
	        "Employment",
  	        "Real Estate",
	        "Immigration",
	        "Wills, Trusts & Estates",
	        "Government"
                    ],
            minLength: 0,
            open:function(){
            	console.log('test');
            	var widgetTop = parseInt($('.ui-autocomplete').css('top'));
            	console.log(widgetTop);
            	$('.ui-autocomplete').css('top', widgetTop + 10);
            	// $('.ui-autocomplete').css(["top" = widgetTop + 200 + "px"]);
            }
        }).focus(function(){            
            // The following works only once.
            // $(this).trigger('keydown.autocomplete');
            // As suggested by digitalPBK, works multiple times
            $(this).data("autocomplete").search($(this).val());
        });
    });
