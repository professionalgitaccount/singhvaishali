//uncomment the line below for iSales's presentations (for iRep leave it commented)
//MainModule.setPlatform('ORACLE');

//disable text/elements selection and touch events
MainModule.disableSelection().useTouchEvents(false).setSSIScrollableElements(["#scrollableContent"]); 
// True - to enable swipe on desktop; 
//swipeRightOff - to disable right swipe; 
//swipeLeftOff - to disable Left swipe
MainModule.touchSwiper('true'); 


