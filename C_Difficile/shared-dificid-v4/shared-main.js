// local

var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform),
    sharedPath = 'shared-dificid-v4', //provide shared component folder name
    mopix = false, //False when mopix is to be removed
    heightValidity = false,
    debugAlert = false, //True when you need to see console error alerts on iPad for debugging on iPad
    tracking = false, //True when you need to implement tracking and tagging on iPad.
   	clickEvent = (iOS) ? 'touchend' : 'click';    
    epublish = false, // True when using the url of epublish
    swipeOff = false, //True when you need to enable custom swiping feature on iPad
    //use slide package names from keymessage sheet
    slideNames = [
        "base template",
        "SSI_base_template"
    ];
    // getting the product and slide name and used for the url
    productName = sharedPath.split('-')[1];
    epubSlideName = $('body').attr('data-SlideName');

loadScripter(iOS);
function loadScript(url, fileType, callback) {
    if (fileType ==='js') {
        var script = document.createElement("script")
        script.type = "text/javascript";

        if (script.readyState) { //IE
            script.onreadystatechange = function() {
                if (script.readyState == "loaded" ||
                    script.readyState == "complete") {
                    script.onreadystatechange = null;
                    callback();
                }
            };
        } else { //Others
            script.onload = function() {
                callback();
            };
        }

        script.src = url;
        document.getElementsByTagName("body")[0].appendChild(script);
    }
    else{
        var fileref=document.createElement("link")
        fileref.setAttribute("rel", "stylesheet")
        fileref.setAttribute("type", "text/css")
        fileref.setAttribute("href", url)
        document.getElementsByTagName("head")[0].appendChild(fileref);
        callback();
    }
}
// for epublish urls
if(epublish)
    {        
        var relativeurl = location.href.substring(0, location.href.lastIndexOf("/"));
        
        $('link[href="css/specific.css"]').prop('disabled', true);
        $('head').append('<link href="http://india_team7.epublishmerck.com/static/css/'+productName+'_'+epubSlideName+'.css" rel="stylesheet" id="newcss" />');
        
        setTimeout(function(){
            $('div').each(function(index, el) {
                // Cache the object
                var self = $(this);                
                // Get the background-image
                var idName = self.attr('class');
                var background = self.css('background-image');
                // If the background image is anything other than "none"
                if(background != 'none') {
                    // Find and replace "url()" to get the pure image URL
                    if(iOS){
                        background = background.split('/').pop().slice(0,-1);
                    }else{
                        background = background.split('/').pop().slice(0,-2);
                    }
                    // get the final image url with your local path
                    var finalImage =  relativeurl+'/img/specific/'+background;
                   
                    $(this).css({
                        'background-image':'url("'+finalImage+'")',
                        'background-size':'100% 100%'
                    });
                   
                }

            }); 
        },1500);          
    }


function loadScripter(iOSCheck){
    //load scrollTo JS file
    loadScript('../shared/' + sharedPath + '/js/jquery.scrollTo.min.js?' + (new Date()).getTime(), 'js', function() {
        // load veeva library js file
        $.getScript('../shared/' + sharedPath + '/js/veeva-library-4.1.js?' + (new Date()).getTime(), function() {
            //load avModal JS file 
            setTimeout(function(){ loadScript('../shared/' + sharedPath + '/js/ext/avModal/avModal-1.8.js', 'js', function() {}); }, 1000);
            //only load mopix if mopix variable is true
            if(mopix){ 
                loadScript('../shared/' + sharedPath + '/mopix/interact.min.js?' + (new Date()).getTime(), 'js', function() {
                    loadScript('../shared/' + sharedPath + '/mopix/posFix-1.4.js?' + (new Date()).getTime(), 'js', function() {
                        loadScript('../shared/' + sharedPath + '/mopix/specific.js?' + (new Date()).getTime(), 'js', function() {});
                    });
                });
            }
            if (!iOS || swipeOff) {
                loadScript('../shared/' + sharedPath + '/js/ext/touchSwipe.js', 'js', function() {});
            }
            //load main JS file
            loadScript('../shared/' + sharedPath + '/js/enscroll-0.6.1.min.js', 'js', function() {});
            loadScript('../shared/' + sharedPath + '/js/main-1.9.0.js', 'js', function() {
                //check if loading on iOS or desktop
                loadScript('../shared/' + sharedPath + '/js/ssi-smartbalance-scroll.js?' + (new Date()).getTime(), 'js', function() {});
                var specificLoad = $('body').attr('data-pix');//check if slide is DMCM or not
                if(specificLoad){
                    loadScript('js/specific.js?' + (new Date()).getTime(), 'js', function() { 
                    });
                    loadScript('../shared/' + sharedPath + '/js/global.js?' + (new Date()).getTime(), 'js', function() {});
                         
                }else{
                    loadScript('../shared/' + sharedPath + '/css/' + sharedPath +'.css', 'css', function() {});
                    loadScript('../shared/' + sharedPath + '/js/ext/avModal/themes/default.css', 'css', function() {});

                    // add js and css too if created globally.
                }
                if(tracking){ 
                    loadScript('../shared/' + sharedPath + '/js/tracking.js?' + (new Date()).getTime(), 'js', function() {});
                }
            });
        });
    });
}



