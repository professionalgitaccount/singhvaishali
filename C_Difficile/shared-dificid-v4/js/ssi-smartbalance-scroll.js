// remote

function SmartBalance() {}
// var num = 0;
// var num1 = 0;
/*
options
  [balanceMessageIdPrefix:string]
  [multiProduct:bool]
*/
SmartBalance.prototype.load = function(options) {
  options = options || {}

  options.balanceMessageIdPrefix = options.balanceMessageIdPrefix || 'bal';
  // console.log('balanceMessageIdPrefix', options.balanceMessageIdPrefix);

  options.multiProduct = options.multiProduct || false;
  // console.log('multiProduct: '+ options.multiProduct);

  options.multiReference = options.multiReference || false;
  // console.log('multiReference: '+ options.multiReference);

  $.getScript('../shared/' + sharedPath + '/js/async.min.js', function() {

    var preventOverscroll = function(el) {
      el.addEventListener('touchstart', function() {
        var top = el.scrollTop,
          totalScroll = el.scrollHeight,
          currentScroll = top + el.offsetHeight

        //If we're at the top or the bottom of the containers
        //scroll, push up or down one pixel.
        //
        //this prevents the scroll from "passing through" to
        //the body.
        if (top === 0) {
          el.scrollTop = 1
        } else if (currentScroll === totalScroll) {
          el.scrollTop = top - 1
        }
      })

      el.addEventListener('touchmove', function(evt) {
        //if the content is actually scrollable, i.e. the content is long enough
        //that scrolling can occur
        if (el.offsetHeight < el.scrollHeight)
          evt._isScroller = true
      })

      document.body.addEventListener('touchmove', function(evt) {
        //In this case, the default behavior is scrolling the body, which
        //would result in an overflow.  Since we don't want that, we preventDefault.
        if (!evt._isScroller) {
          evt.preventDefault()
        }
      })
    }

    function showBalance(balanceMessageIdPrefix, balanceMessageIndex) {
      var elementId = balanceMessageIdPrefix + balanceMessageIndex;
      // console.log(balanceMessageIdPrefix, balanceMessageIndex)
      var e = document.getElementById(elementId);
      // e.scrollIntoView(true);
      e.parentNode.scrollTop = e.offsetTop;
      // $('hi').scrollIntoView(true);
    }

    function findMaxBalanceMessageIndex(balanceMessageIdPrefix) {
      var index = 0;
      while ($('#' + balanceMessageIdPrefix + (index++)).length > 0) {}
      return index - 2;
    }

    
    // perform async operations
    async.waterfall([

      // fetch Presentation.Id
      function(next) {
        // console.log(iOS);
        if (iOS) {
          com.veeva.clm.getDataForCurrentObject('Presentation', 'Id', function(res) {
            // console.log('presentationId', res.Presentation.Id);
            options.presentationId = res.Presentation.Id;
            
          });
        }
        next();
      },

      // fetch KeyMessage.Name
      function(next) {
        // console.log('async');
        options.keyMessageName = $('body').attr('data-productAbbreviation');
        next();
        
      },

      // fetch Account.Id
      function(next) {
        if (iOS) {
          com.veeva.clm.getDataForCurrentObject('Account', 'Id', function(res) {
            if (!res.Account) { // preview mode, no account
              options.accountId = null;
            } else {
              options.accountId = res.Account.Id;
            }
            console.log('accountId', options.accountId);
           
          });
        }
         next();
      },

      // load balance HTML from shared resource
      function(next) {

        // parse product identifier out of key message name
        options.product = options.multiProduct ? (options.keyMessageName.toLowerCase()) : '';
        // console.log('product: '+ options.product);

        options.referenceProduct = options.multiReference ? ($('body').attr('data-productName')) : '';
        // console.log(options.referenceProduct);
        
        //get landscape smartblance data
        options.balanceURL = options.multiProduct ? '../shared/' + sharedPath + '/balance-' + options.product + '.html' : '../shared/' + sharedPath + '/balance.html';
        // console.log('balanceURL '+ options.balanceURL);

        // Balance landscape
        $.get(options.balanceURL, function(data) {
          options.balanceHTML = data;
          // populate balance HTML into DOM
          $('#smartBalance').html(data);
          next();
        });

        //get portrait smartbalance data
        options.balancePortraitURL = options.multiProduct ? '../shared/' + sharedPath + '/portraitBalance-' + options.product + '.html' : '../shared/' + sharedPath + '/portraitBalance.html';
        // console.log('balancePortraitURL', options.balancePortraitURL);

        // Balance portrait
        $.get(options.balancePortraitURL, function(data) {
          options.balancePortraitURL = data;
            $('#portraitSmartBalance').html(data);
          next();
        });

        //get reference data
        options.referenceURL = options.multiReference ?'../shared/' + sharedPath + '/reference.html ' + '#refLandscape_' + options.referenceProduct : '../shared/' + sharedPath + '/reference.html';
        // console.log('referenceURL', options.referenceURL);

        //Reference landscape content
        $.get(options.referenceURL, function(data) {
          options.referenceHTML = data;
          // $('#referenceContent').html(data);
          $('#globalComponent').append(data);
           next();
        });

        //get Landscape abbreviation data
        options.abbreviationURL = '../shared/' + sharedPath + '/abbreviation.html';
        // console.log('abbreviationURL', options.abbreviationURL);

        //abbreviation landscape Content
        $.get(options.abbreviationURL, function(data) {
          options.abbreviationHTML = data;
          // $('#abbreviationsContent').html(data);
          $('#globalComponent').append(data);
           next();
        });

        //get Portrait reference data
        options.referencePortraitURL = '../shared/' + sharedPath + '/referencePortrait.html';
        // console.log('referencePortraitURL', options.referencePortraitURL);

        //Reference Portrait content
        $.get(options.referencePortraitURL, function(data) {
          options.referencePortraitHTML = data;
          // $('#referenceContentPortrait').html(data);
          $('#globalComponent').append(data);
           next();
        });

         //get Landscape abbreviation data
        options.abbreviationURL = '../shared/' + sharedPath + '/abbreviationPortrait.html';
        // console.log('abbreviationURL', options.abbreviationURL);

        //abbreviation landscape Content
        $.get(options.abbreviationURL, function(data) {
          options.abbreviationHTML = data;
          // $('#abbreviationsContentPortrait').html(data);
          $('#globalComponent').append(data);
           next();
        });

        //get summary portrait data
        options.summaryPortraitURL = '../shared/' + sharedPath + '/portrait.html';
        // console.log('summaryPortraitURL', options.summaryPortraitURL);

        //summary portrait content
        $.get(options.summaryPortraitURL, function(data) {
          options.summaryPortraitHTML = data;
          $('#portraitSummary').html(data);
          next();
        });

        //get portrait ssi data
        options.ssiPortraitURL = '../shared/' + sharedPath + '/ssiPortrait.html';
        // console.log('portrait2URL', options.portrait2URL);

        //portrait ssi content
           $.get(options.ssiPortraitURL, function(data) {
            options.ssiPortraitURL = data;
            $('#portraitSSI').html(data);
            next();
          });

      },

      // dynamically find the max balance message index
      function(next) {
        options.maxBalanceMessageIndex = findMaxBalanceMessageIndex(options.balanceMessageIdPrefix);
        // console.log('maxBalanceMessageIndex', options.maxBalanceMessageIndex);
        next();
      }

    ], function(err, res) {

      var htmlElement = document.querySelector('html'),
      bodyElement = document.querySelector('body');

      htmlElement.style.height = '100%';
      htmlElement.style.overflow = 'hidden';
      bodyElement.style.height = '100%';
      bodyElement.style.overflow = 'auto';

      // localStorage if on account; otherwise sessionStorage
      var store = options.accountId ? localStorage : sessionStorage;
      sessionStorage.setItem('isLocalStorage', options.accountId ? true : false);

      // key to fetch balance message index from [local | session]Storage
      options.lastBalanceMessageIndexKey = iOS ? 'lastBalanceMessageIndex(presentationId=' + options.presentationId + ', product=' + options.product + ',accountId=' + options.accountId + ')' : 'lastBalanceMessageIndex(product=' + options.product + ')';
      // options.lastBalanceMessageIndexKey = 'lastBalanceMessageIndex(presentationId=' + options.presentationId + ', product=' + options.product + ')';
      // console.log('lastBalanceMessageIndexKey', options.lastBalanceMessageIndexKey);

      // store the session name in a hidden HTML element 
      if (document.getElementById('hiddenSessionContainer')) {
        // console.log('exists');
      } else {
        var a = $('<div/>').attr('id', 'hiddenSessionContainer');
      a.appendTo('body').hide().text(options.lastBalanceMessageIndexKey);
      }

      // fetch last balance message index or -1 if doesn't exist
      options.lastBalanceMessageIndex = parseInt(store.getItem(options.lastBalanceMessageIndexKey) || -1);
      // console.log('lastBalanceMessageIndex', options.lastBalanceMessageIndex);

      // incremenet the balance message index
      if (document.getElementById('smartBalance')) {
        options.balanceMessageIndex = $('#smartBalance').is(":visible") ? options.lastBalanceMessageIndex + 1 : options.lastBalanceMessageIndex;
      }else{
        options.balanceMessageIndex = options.lastBalanceMessageIndex;
      }

      // reset to 0 if past max balance message index
      if (document.getElementById('smartBalance')){
        options.balanceMessageIndex = (options.balanceMessageIndex > options.maxBalanceMessageIndex) ? 0 : options.balanceMessageIndex;
      }

      // scroll balance message into view
      if (document.getElementById('smartBalance')) {
        showBalance(options.balanceMessageIdPrefix, options.balanceMessageIndex);

      }

      //get the last paragraph id visible on the SSI scrollable area
      // var numberInc = messageIndexNum();
      options.lastBalanceMessageIndex = options.balanceMessageIndex;
      // options.lastBalanceMessageIndex = numberInc;

      // save balance message index
      store.setItem(options.lastBalanceMessageIndexKey, options.lastBalanceMessageIndex);
      // console.log(options.lastBalanceMessageIndexKey, options.lastBalanceMessageIndex);
      // alert('store set value swipe : SessionName: - '+options.lastBalanceMessageIndexKey+ ':: Session Value: - ' +options.lastBalanceMessageIndex);

      // ***************Uncomment if portrait slide with SSI Smartbalance ***************
      // var portraitSessionVal = sessionStorage.getItem('portraitSession');
      // if (portraitSessionVal == null) {
      //   sessionStorage.setItem('portraitSession', 0);
      // }
      // ***************Uncomment if portrait slide with SSI Smartbalance ***************

    })

  });

}

var smartBalance = new SmartBalance();
//smartBalance.load();
smartBalance.load({
  multiProduct: false,
  multiReference: false
});
