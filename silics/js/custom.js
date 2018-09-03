$(document).ready(function(){

 new WOW().init();

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });
   

	$('.product-img').owlCarousel({
		items:1,
		loop:true,
		nav:true,
		navText: ["<img src='images/button-previous.png'>","<img src='images/button-next.png'>"],
		autoplay:false,
		dots:false,		
	})
   
});

$(() => {
	var $sendBtn = $('.send-button'),
			$iWrapper = $('.icon-wrapper'),
			$i1 = $('.icon-1'),
			$i2 = $('.icon-2');
	
	function animationEvent() {
		var t,
				el = document.createElement('fakeelement');

		var animations = {
			animation: 'animationend',
			OAnimation: 'oAnimationEnd',
			MozAnimation: 'animationend',
			WebkitAnimation: 'webkitAnimationEnd'
		};

		for (t in animations) {
			if (el.style[t] !== undefined) {
				return animations[t];
			}
		}
	}

	$sendBtn.on('click', e => {
		$iWrapper.css('color', '#66bb6a');
		$iWrapper.addClass('icon-wrapper-animation');
		$sendBtn.addClass('clicked');
		$i1.delay(900);
		$i1.fadeTo(300, 0);
		$i2.delay(900);
		$i2.fadeTo(300, 1);		
	});

	$sendBtn.on(animationEvent(), e => {
		if (e.originalEvent.animationName == 'input-shadow') {
			$sendBtn.removeClass('clicked');
		}
	});

	$iWrapper.on(animationEvent(), e => {
		if (e.originalEvent.animationName == 'icon-animation') {
			$iWrapper.removeClass('icon-wrapper-animation');
			setTimeout(reset, 1200);
		}
	});

	function reset() {
		$i1.fadeTo(250, 1);
		$i2.fadeTo(250, 0);
		$iWrapper.css('color', '#f8bbd0');
	}
}); // end of document ready






var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

