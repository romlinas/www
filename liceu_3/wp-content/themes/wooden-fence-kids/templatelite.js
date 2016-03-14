var t_height=0,t_gap=0,content_height=0,container_height=0,total_space, margin, padding;

jQuery(document).ready(
function(){
	jQuery(window).resize();
	checkheight();
	if(jQuery.browser.msie) jQuery(".bypostauthor>div>div>.fn,.bypostauthor>div>div>.fn a").css({"text-decoration":"underline"});
	setInterval("checkheight()",2000);
});

jQuery(window).resize(
function(){
	if(jQuery.browser.opera){
		if(jQuery("body").width()%2 ==1){
			jQuery("body").css("margin-left","1px");
		}else{
			jQuery("body").css("margin-left","0px");
		};
	}
});	

function checkheight(){
	if(container_height!=jQuery("#container").height()){
		jQuery("#content").css({"padding-bottom":"0px","margin-bottom":"0px"});
		t_height=jQuery("#container").height() + jQuery("#header").height();
		t_gap=Math.ceil(t_height/339)*339-t_height;
	
		padding=jQuery("#container").height()-jQuery("#content").height()+t_gap; //content padding
		jQuery("#content").css({"padding-bottom":padding+"px"});
		container_height=jQuery("#container").height();
	}
}
