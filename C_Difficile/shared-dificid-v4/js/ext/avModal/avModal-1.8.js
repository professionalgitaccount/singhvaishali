/*
 * avModal jQuery Plugin v1.8
 * Displays inline content in dynamic popups
 * 
 * Author: Juan Carlos Rojas
 * Email: juan.c.rojas.vargas@accenture.com
 * Creation date: March, 2013
 * Copyright (c) 2013 Accenture
 * 
 * Contributors:
 *		Sajid Mullah		<sajid.mullah@accenture.com>
 *		Gautam Bellare		<gautam.bellare@accenture.com>
 *		<new contributor>	<email address>
 * 
 * Last update: December 19, 2017 <gautam.bellare>
 * 
 	avmodal data-headSwap functionality
 	data-orientation functionality for enabling popup to be visible on screen rotation
	data-onhistoryPop functionality for enabling remembering of earlier opened popups on the new popup being opened
 * Last update: October 10, 2018 <gautam.bellare>
 * 
 	avmodal tracking functionality
 */


(function($){
	$.fn.avModal = function(objCustomSettings){
		var avModalUniqueID = 0, modalName = 'avModal', temporaryAvPop = [], historyAvPop = [], landHistoryPop = [], portHistoryPop = [], flag = false, objGlobalSettings = $.extend({
			zIndex: 				90000,
			animationSpeed: 		0,
			overlayOpacity: 		1,
			appendTo: 				'body',
			preventDefault: 		true,
			defaultWidth: 			700,
			defaultHeight: 			500,
			debug: 					false,
			theme: 					'avModal',
			swap: 					'false',
			switch: 				true,
			headSwap: 				'false',
			onhistoryPop: 			'true',
			onTracking:             'false',
			defaultHeadHeight:      40,
			onShowNav: 				false,
			onOrientation:          false,
			marginRight: 			0,
			marginBottom: 			0,
			marginLeft: 			0,
			marginTop: 				0,
			useTouchEvents: 		true
		}, objCustomSettings);
				
		var methods = {
			consoleLog: function(message){
				if(objGlobalSettings.debug === true) console.log(message);
			},
			getMaxIndex: function(){
				var maxIndex = 1;

				$("body *").each(function(){
					var elementIndex = parseInt($(this).css('z-index'));
					if (elementIndex > maxIndex) maxIndex = elementIndex;
				});

				return (maxIndex + 1);
			},
			//set flag for setting Height for headers. This flag is passed to avModal
			setHeadHeight: function(elemValid) {
			    heightValidity = elemValid;
			},
		};
		
		this.each(function(){
			var bindedEvents = 'click' + (objGlobalSettings.useTouchEvents === true ? ' touchend' : '');
			$(this).bind(bindedEvents, function(e){				
				if(objGlobalSettings.preventDefault === true) e.preventDefault();											
				avModalUniqueID = methods.getMaxIndex() + 1;
																
				var $this = $(this), objCallbacks = $.Callbacks(),
				
				objElementSettings={
					height: 				$this.attr('data-height') || objGlobalSettings.defaultHeight,
					width: 					$this.attr('data-width') || objGlobalSettings.defaultWidth,
					href: 					$this.attr('href') || $this.attr('data-href'),
					overlay: 				$this.attr('data-overlay'),
					overlayOpacity: 		$this.attr('data-overlayOpacity'),
					overlayBackground: 		$this.attr('data-overlayBg'),
					appendTo: 				$this.attr('data-appendTo') || objGlobalSettings.appendTo,
					id: 					avModalUniqueID,
					zIndex:					$this.attr('data-zIndex') || objGlobalSettings.zIndex,
					theme: 					$this.attr('data-theme') || objGlobalSettings.theme,
					onDestroyEvent: 		$this.attr('data-onDestroy') || null,
					onCloseEvent: 			$this.attr('data-onClose') || null,
					onShowEvent: 			$this.attr('data-onShow') || null,
					onLaunchEvent: 			$this.attr('data-onLaunch') || null,
					onReadyEvent: 			$this.attr('data-onReady') || null,
					onSwap:					$this.attr('data-onSwap') || null,
					left: 					$this.attr('data-left') || null,
					top: 					$this.attr('data-top') || null,
					swap: 					$this.attr('data-swap') || objGlobalSettings.swap.toString(),
					switch: 				$this.attr('data-switch') || null,
					onShowNav: 				$this.attr('data-onShowNav') || objGlobalSettings.onShowNav,
					onOrientation: 			$this.attr('data-onOrientation') || null,
					onhistoryPop: 			$this.attr('data-onhistoryPop') || null,
					onTrackingEvent: 		$this.attr('data-onTracking') || null,
					headSwap: 				$this.attr('data-headSwap') || objGlobalSettings.headSwap.toString(), 
					headHeight: 			$this.attr('data-headHeight') || objGlobalSettings.defaultHeadHeight,
					title: 					$this.attr('data-title') || null,
					events:					$this.attr('data-eventsObject') ? eval($this.attr('data-eventsObject')) : null,
					marginRight:			$this.attr('data-marginRight') || objGlobalSettings.marginRight,
					marginBottom:			$this.attr('data-marginBottom') || objGlobalSettings.marginBottom,
					marginTop:				$this.attr('data-marginTop') || objGlobalSettings.marginTop,
					marginLeft:				$this.attr('data-marginLeft') || objGlobalSettings.marginLeft,
					tagDescription:         $this.attr('data-tagDescription') || null,
					surveyQuestion:         $this.attr('data-surveyQuestion') || null,
				};

				var $contentProperties = $('<div>', {
					class: objElementSettings.theme + 'Content',
					css: {
						display:		'none',
						opacity:		0,
						height: 		0,
						width: 			0,
						overflow: 		'hidden',
						position: 		'absolute',
						marginBottom: 	parseInt(objElementSettings.marginBottom),
						marginRight: 	parseInt(objElementSettings.marginRight)
					}
				}).prependTo('body');
				
				if($('#' + modalName + '_' + (objElementSettings.href.replace('#', ''))).length > 0){
					methods.consoleLog('Modal ' + objElementSettings.href + ' already exists');																							
					if (objElementSettings.swap === 'true'){

						methods.consoleLog('Swapping pop-up');
						$('#' + modalName + '_' + (objElementSettings.href.replace('#', '')) + 'Overlay').css('z-index', methods.getMaxIndex());
						$('#' + modalName + '_' + (objElementSettings.href.replace('#', ''))).css('z-index', methods.getMaxIndex());
						
						if(objElementSettings.onSwap){
							methods.consoleLog('Triggering onSwap event (defined in tag)');
							objCallbacks.fire(eval(objElementSettings.onSwap));
						}else if(objElementSettings.events && objElementSettings.events.onSwap){
							methods.consoleLog('Triggering onSwap event (defined in object)');
							objCallbacks.fire(objElementSettings.events.onSwap());
						}
					}
				}else{
					//To remove previous avModal popup on opening new avModal popup //

					if (objElementSettings.switch === 'true') {
						$('.'+objElementSettings.theme + 'Wrapper').remove();
						$('.'+objElementSettings.theme+'Overlay').remove();
						console.log('switching active');
					}
					
					//---To remove previous avModal popup on opening new avModal popup //

					//To trigger tracking on opening avModal popup //

					if (objElementSettings.onTrackingEvent === 'true') {
						var keyMessageName = '';
						// alert('onTracking is ON');
						var isMobile = function(){
						    return (/webOS|iPhone|iPad|iPod|Android|BlackBerry/i.test(navigator.userAgent));
						};
						var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
						if(iOS){
						    com.veeva.clm.getDataForCurrentObject('KeyMessage', 'Name', function(res) {
						      // alert('keyMessageName', res.KeyMessage.Name);
						      keyMessageName = res.KeyMessage.Name;
						    });
						}
						// alert(keyMessageName);
						var tagDescription = objElementSettings.tagDescription,
						surveyQuestion = objElementSettings.surveyQuestion || tagDescription,
						clmCallback = '';
						// trackingData = {
						//     Answer_vod__c       : keyMessageName,
						//     Survey_Type_vod__c  : tagDescription,
						//     Question_vod__c     : surveyQuestion,
						//     Text_Entered_vod__c : tagDescription
						// };
						var trackingData = {};
						trackingData.Answer_vod__c = keyMessageName;
						trackingData.Survey_Type_vod__c = tagDescription;
						trackingData.Question_vod__c = surveyQuestion;
						trackingData.Text_Entered_vod__c = tagDescription;
						// alert(trackingData.Survey_Type_vod__c);
						// alert('Tracking: [' + ($this.attr('data-surveyQuestion') || 'UNDEFINED SURVEY QUESTION') + '] ' + tagDescription);
						if(iOS && tagDescription != ''){
						    // document.location = 'veeva:saveObject(Call_Clickstream_vod__c), value(' +
						    // JSON.stringify(trackingData).toString() + '), callback(' + String(callBack) + ')';
						    document.location = 'veeva:saveObject(Call_Clickstream_vod__c), value(' + JSON.stringify(trackingData).toString() + '), callback(' + String(clmCallback) + ')';
                            // alert(JSON.stringify(trackingData).toString());
						    // alert(trackingData);
						    // com.veeva.clm.createRecord( Call_Clickstream_vod__c, trackingData, clmCallback );
						}
					}
					
					//---To trigger tracking on opening avModal popup //

					if(objElementSettings.onLaunchEvent){
						methods.consoleLog('Triggering onLaunch event (defined in tag)');
						objCallbacks.fire(eval(objElementSettings.onLaunchEvent));
					}else if(objElementSettings.events && objElementSettings.events.onLaunch){
						methods.consoleLog('Triggering onLaunch event (defined in object)');
						objCallbacks.fire(objElementSettings.events.onLaunch());
					}
					if(objElementSettings.overlay != 'false'){
						$('<div>', {
							class:  objElementSettings.theme+'Overlay',
							id: 	modalName + '_' + objElementSettings.href.replace('#', '') + 'Overlay',
							css:{
								opacity: 		0,
								'z-index': 		methods.getMaxIndex(),
								'background': 	objElementSettings.overlayBackground || ''
							}
						}).appendTo(objElementSettings.appendTo).stop(true, true).animate({
							opacity: objElementSettings.overlayOpacity || objGlobalSettings.overlayOpacity
						}, objGlobalSettings.animationSpeed);
					}
					
					var $objAvModal = $('<div>', {					
						class:              objElementSettings.theme + 'Wrapper',
						id: 				modalName + '_' + objElementSettings.href.replace('#', ''),
						css:{
							opacity: 		0,
							display: 		'block',
							left: 			objElementSettings.left?objElementSettings.left+'px':'50%',
							top: 			objElementSettings.top?objElementSettings.top+'px':'50%',
							'z-index': 		methods.getMaxIndex(),
							marginLeft: 	!objElementSettings.left ? - (objElementSettings.width / 2) + 'px' : 0,
							marginTop: 		!objElementSettings.top ? - (objElementSettings.height / 2) + 'px' : 0,
							height: 		objElementSettings.height + 'px',
							width: 			objElementSettings.width + 'px'
						}
					}).append(
						$('<div>',{
							class: 	objElementSettings.theme + 'CloseButton',
							id: 	modalName + '_' + objElementSettings.href.replace('#', '') + 'Close',
							css: {
								'z-index': avModalUniqueID + 1
							}
						}).bind(bindedEvents, function(e){							
							e.preventDefault();
							if(objElementSettings.onCloseEvent){
								methods.consoleLog('Triggering onClose event (defined in tag)');
								objCallbacks.fire(eval(objElementSettings.onCloseEvent));
							}else if(objElementSettings.events && objElementSettings.events.onClose){
								methods.consoleLog('Triggering onClose event (defined in object)');
								objCallbacks.fire(objElementSettings.events.onClose());
							}
							
							$('#' + modalName + '_' + objElementSettings.href.replace('#', '') +
							'Overlay').stop(true, true).animate({
								opacity: 0
							},objGlobalSettings.animationSpeed, function(){
								$(this).remove();
								console.log($(this).nextSibling);
								//remove the closed avModal popup
								landHistoryPop.splice($.inArray($(this), landHistoryPop), 1);
								//remove the current closed avModal popup //
								var closedLink = '#'+($(this)[0].id.split("_")[1].slice(0,-7));
								historyAvPop.splice($.inArray($(this), historyAvPop), 1);
								temporaryAvPop.splice($.inArray(closedLink, temporaryAvPop), 1);
								// open the earlier opened popups on triggering the close button //
								// if (historyAvPop != '' || historyAvPop != undefined) {
								// 	for (var i = 0; i < historyAvPop.length; i++) {
								// 		historyAvPop[i].click();
								// 	}
								// }
								if (temporaryAvPop != '' || temporaryAvPop != undefined) {
									for (var i = 0; i < temporaryAvPop.length; i++) {
										// $('#'+temporaryAvPop[i]).click();
										$("[data-href='"+temporaryAvPop[i]+"'").click();
									}
								}
								if ($(".avModalWrapper").length >1) {}
								else{
									$("body header").css({
										'background' : '',
										'background-size' : '',
										'height' : ''
									});
								}
							});
							$('#' + modalName + '_' + objElementSettings.href.replace('#', '')).stop(true, true).animate({
								opacity: 0
							}, objGlobalSettings.animationSpeed, function(){
								$(this).remove();
								if(objElementSettings.onDestroyEvent){
									methods.consoleLog('Triggering onDestroy event (defined in tag)');
									objCallbacks.fire(eval(objElementSettings.onDestroyEvent));
								}else if(objElementSettings.events && objElementSettings.events.onDestroy){
									methods.consoleLog('Triggering onDestroy event (defined in object)');
									objCallbacks.fire(objElementSettings.events.onDestroy());
								}
							});
						})
					).append(
						$('<div>', {
							class: 	objElementSettings.theme + 'Content',
							css:{
								height: 	objElementSettings.height - (
												parseInt($contentProperties.css('margin-top')) +
												parseInt($contentProperties.css('margin-bottom')) +
												parseInt($contentProperties.css('padding-bottom')) +
												parseInt($contentProperties.css('padding-top'))
											) +'px',
	                			width: 		objElementSettings.width - (
			                					parseInt($contentProperties.css('margin-left')) +
												parseInt($contentProperties.css('margin-right')) +
												parseInt($contentProperties.css('padding-right')) +
												parseInt($contentProperties.css('padding-left'))
											) + 'px',
								border: 	'none',
								marginTop: 	parseInt(objElementSettings.marginTop),
								marginLeft: parseInt(objElementSettings.marginLeft)
							}
						}
					).append(
						$('<div>', {						
								class: 	objElementSettings.theme + 'Title',
								id: 	modalName + '_' + objElementSettings.href.replace('#', '') + 'Title',
								html: 	objElementSettings.title
							}
						)
					).append(
						$(objElementSettings.href).children().clone(true, true)
					)).stop(true,true).animate({
						opacity: 1
					}, objGlobalSettings.animationSpeed, function(){
						if(objElementSettings.onShowEvent){
							methods.consoleLog('Triggering onShow event (defined in tag)');
							objCallbacks.fire(eval(objElementSettings.onShowEvent));
						}else if(objElementSettings.events && objElementSettings.events.onShow){
							methods.consoleLog('Triggering onShow event (defined in object)');
							objCallbacks.fire(objElementSettings.events.onShow());
						}
					}).appendTo(objElementSettings.appendTo || objGlobalSettings.appendTo);
					
					if(objElementSettings.title === null){
						$('#' + modalName + '_' + objElementSettings.href.replace('#', '') + 'Title').remove();
					}
					
					if(objElementSettings.onReadyEvent){
						methods.consoleLog('Triggering onReady event (defined in tag)');
						objCallbacks.fire(eval(objElementSettings.onReadyEvent));
					}else if(objElementSettings.events && objElementSettings.events.onReady){
						methods.consoleLog('Triggering onReady event (defined in object)');
						objCallbacks.fire(objElementSettings.events.onReady());
					}
					//To remove Navigation bar without linking on opening new avModal popup //
					if (objElementSettings.onShowNav === 'true') {
						var idSel = ($('#' + modalName + '_' + objElementSettings.href.replace('#', '')));
						idSel = idSel.selector+'Overlay';
						$('#content nav').clone().appendTo(idSel);
						$(idSel+' nav ul li').removeAttr('data-slide');
					}

					if (objElementSettings.headSwap != 'false' && heightValidity != false) {
						var headName = objElementSettings.headSwap;
						var headHeight = objElementSettings.headHeight;

						console.log(headName, headHeight);
						$("body header").css({
							'background' : 'url(../shared/'+sharedPath+'/img/'+headName+') repeat-x',
							'background-size' : '100% 100%',
							'height' : headHeight
						});
					}
					else if (objElementSettings.headSwap === 'false') {
						
							$("body header").css({
								'background' : '',
								'background-size' : '',
								'height' : ''
							});
						
					}

					// On orientation - close AvModal popup open previously opened popup
					window.addEventListener("orientationchange", function(event) {
					    $('.'+objElementSettings.theme + 'Wrapper').remove();
						$('.'+objElementSettings.theme+'Overlay').remove();
					    if (window.matchMedia("(orientation: landscape)").matches) {
					    	if (landHistoryPop != '' || landHistoryPop != undefined) {
					    		for (var i = 0; i < landHistoryPop.length; i++) {
					    			flag = true;
					    			landHistoryPop[i].click();
					    		}
					    		flag = false;
					    	}
					    }else{
					    	if (portHistoryPop != '' || portHistoryPop != undefined) {
					    		for (var i = 0; i < portHistoryPop.length; i++) {
					    			flag = true;
					    			portHistoryPop[i].click();
					    		}
					    		flag = false;
					    	}
					    }
					});

					//check on Orientation if true or false. Push the opened avModal content in an array
					if (objElementSettings.onOrientation === 'true') {
						if ((window.matchMedia("(orientation: landscape)").matches) && flag == false) {
						   landHistoryPop.push($(this));
						}else if ((window.matchMedia("(orientation: portrait)").matches) && flag == false) {
							portHistoryPop.push($(this));
						}
						
					}
					var historyFlagging = false;
					//check on opening new popup if true or false. Push the earlier avModal content in an array
					if (objElementSettings.onhistoryPop === 'true') {
						// for (var i = 0; i <= historyAvPop.length; i++) {
						// 	if (historyAvPop[i] != undefined) {
						// 		if ((historyAvPop[i][0].id) != $(this).attr('id')) {
						// 			historyAvPop.push($(this));
						// 			// historyFlagging = true;
						// 			break;
						// 		}
						// 		break;
						// 	}else{
						// 		historyAvPop.push($(this));
						// 		break;
						// 	}
						// }
						// if (historyFlagging == true){
						// 	historyAvPop.push($(this));
						// 	historyFlagging = false;
						// }
						var clickedAvLink = $(this).attr('data-href');
						if($.inArray(clickedAvLink, temporaryAvPop) == -1){
							temporaryAvPop.push(clickedAvLink);
					   		historyAvPop.push($(this));
			            }
					}

					
					var modalClass = '.' + objElementSettings.theme + 'Content';
					
					$('body').on({
						touchstart: function(e){
							var $this = $(this), scrollHeight = $this.get(0).scrollHeight -
								(
									parseInt($this.css('margin-top')) +
									parseInt($this.css('margin-bottom')) +
									parseInt($this.css('padding-bottom')) +
									parseInt($this.css('padding-top'))
								);						
							if(!(scrollHeight > $this.height())){
								e.stopPropagation(); e.preventDefault();
							}else{
								if(e.currentTarget.scrollTop === 0){
									e.currentTarget.scrollTop = 1;
								}else if(e.currentTarget.scrollHeight === e.currentTarget.scrollTop +
								e.currentTarget.offsetHeight){
									e.currentTarget.scrollTop-=1;
								}
							}

						},
						touchmove: function(e){
							e.stopPropagation();
						},
						touchend: function(e){
							e.stopPropagation();
						}
					}, modalClass);
				}
			});
		});
	};
})(jQuery);

var avModalSettings = function(){
        if($.fn.avModal){
            $('.avModal').avModal({
                appendTo: '#contentWrapper',
                defaultWidth: '924',
                preventDefault: true,
                defaultHeight: '601',
                overlayOpacity: 1,
                theme: 'avModal'
            });
        }
    };

avModalSettings();
