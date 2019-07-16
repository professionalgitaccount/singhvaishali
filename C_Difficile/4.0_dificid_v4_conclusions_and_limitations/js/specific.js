//uncomment the line below for iSales's presentations (for iRep leave it commented)
// MainModule.setPlatform('ORACLE');

// For scrolling SSI on clicking of button use
//MainModule.changeSSIScrollBalance(["smartBalance"]);

//disable text/elements selection and touch events
MainModule.disableSelection().useTouchEvents(false).setSSIScrollableElements(["#smartBalance"]).setSSIScrollableElements(["#portraitSmartBalance"]).setHeadHeight(true);

// True - to enable swipe on desktop; 
//swipeRightOff - to disable right swipe; 
//swipeLeftOff - to disable Left swipe
MainModule.touchSwiper('true'); 

// Use "clickEvent" variable for instead of click function and replace your classname accordingly.
$(document).on(clickEvent,"className" ,function(){
	// your code goes here...
});


$('.content').enscroll({
	       horizontalScrolling: false,
	       verticalTrackClass: 'vertical-track3',
	       verticalHandleClass: 'vertical-handle3',
	       cornerClass: 'corner3'
	    });