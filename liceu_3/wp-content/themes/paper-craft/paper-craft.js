var margin=0,sbpadding=0;
jQuery(document).ready(
function(){
	jQuery(window).resize();
	jQuery(".sb2_btm").each(function(){
		if(jQuery(this).height()<95){
			sbpadding=95-jQuery(this).height();
			jQuery(this).css("padding-bottom",sbpadding+"px");
		}
	});
	if(jQuery.browser.msie) jQuery(".bypostauthor>div>div>.fn,.bypostauthor>div>div>.fn a").css({"text-decoration":"underline"});
});	
jQuery(window).resize(
function(){
	if(jQuery.browser.opera || jQuery.browser.safari) margin=1; //opera, safari and chrome
	if(jQuery.browser.mozilla)	margin=-1;
	if(jQuery("body").width()%2 ==1){
		jQuery("body").css("margin-left",margin+"px");
	}else{
		jQuery("body").css("margin-left","0px");
	};
	//jQuery("#container").append("<br/>" + jQuery("body").width());
})