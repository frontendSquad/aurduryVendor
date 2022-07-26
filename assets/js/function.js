/**
    * @description      : 
    * @author           : Saif
    * @group            : 
    * @created          : 25/07/2022 - 16:09:43
    * 
    * MODIFICATION LOG
    * - Version         : 1.0.0
    * - Date            : 25/07/2022
    * - Author          : Saif
    * - Modification    : 
**/
$(document).ready(function () {
$('.product-slider').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	arrows: false,
	asNavFor: '.product-thumbnail'
});
$('.product-thumbnail').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	asNavFor: '.product-slider',
	dots: false,
	centerMode: false,
	focusOnSelect: true,
	vertical: true,
	arrows: false,
	verticalSwiping: true,
	responsive: [{
			breakpoint: 992,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				vertical: false,
				arrows: false
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				vertical: false,
				arrows: false
			}
		}
	]
});

$('.owl-carousel').owlCarousel({
	loop:true,
    nav:true,
	navText : ["<i class='fas fa-arrow-left'></i>","<i class='fas fa-arrow-right'></i>"],
	dots:false,
    responsive:{
        0:{
			items:1
        },
        1000:{
			items:2
        },
        1400:{
			items:3
        }
    }
})

$('.sel-order-status').change(function () {
    var opval = $(this).val();
    if (opval == "Pending") {
      $('.order-updated').modal("show");
    }
    if (opval == "Active") {
      $('.order-updated').modal("show");
    }
});


$('.sel-payment-status').change(function () {
    var opval = $(this).val();
    if (opval == "Paid") {
      $('.payment-updated').modal("show");
    }
    if (opval == "Not Paid") {
      $('.payment-updated').modal("show");
    }
});

$(".enter-icon").click(function () {

	$(this).toggleClass("fa-eye fa-eye-slash");

	var input = $(".enter-input");
	if (input.attr("type") === "password") {
		input.attr("type", "text");
	} else {
		input.attr("type", "password");
	}
});
});

/*** Pasword Vissible Buttons***/
$(".show-pass-btn").click(function () {
	$(this).find('.fa').toggleClass("fa-eye fa-eye-slash");
	var input = $(".pass-input");
	if (input.attr("type") === "password") {
	  input.attr("type", "text");
	} else {
	  input.attr("type", "password");
	}
  });
  
  $(".show-cur-pass-btn").click(function () {
	$(this).find('.fa').toggleClass("fa-eye fa-eye-slash");
	var input = $(".cur-pass-input");
	if (input.attr("type") === "password") {
	  input.attr("type", "text");
	} else {
	  input.attr("type", "password");
	}
  });
  
  $(".show-new-pass-btn").click(function () {
	$(this).find('.fa').toggleClass("fa-eye fa-eye-slash");
	var input = $(".new-pass-input");
	if (input.attr("type") === "password") {
	  input.attr("type", "text");
	} else {
	  input.attr("type", "password");
	}
  });
  
  $(".show-cnfrm-pass-btn").click(function () {
	$(this).find('.fa').toggleClass("fa-eye fa-eye-slash");
	var input = $(".cnfrm-pass-input");
	if (input.attr("type") === "password") {
	  input.attr("type", "text");
	} else {
	  input.attr("type", "password");
	}
  });
  
  /***** */


/*editor start here*/
 /*

 try{
     
     CKEDITOR.replace( 'editorr', {
         customConfig: '/ckeditor_settings/config.js',
     });
 	CKEDITOR.editorConfig = function( config )
     {
 		extraPlugins: 'placeholder',
         config.height = '150px';
 		
     };
 	
     
 }
 catch(e){
     console.log(e);
 }
 */
 /*editor end here*/

 /*
 $('#main-menu-navigation > li').map(function (index, item) {
 	let current_text = $(item).find('a').attr('href').trim();
 	if ($(item).hasClass('has-sub')) {
 		$(item).find('ul > li').map(function (inner_index, inner_item) {
 			let current_text_inner = $(inner_item).find('a').attr('href').trim();
 			if (window.location.href.indexOf(current_text_inner) > -1) {
 				$(inner_item).toggleClass('active');
 				$(item).toggleClass('active');
 			}
 		});

 	} else {
 		if (window.location.href.indexOf(current_text) > -1)
 			$(item).toggleClass('active');
 	}

 });
 */


 $(document).ready(function () {



 	$("input:radio").click(function () {
 		//alert("clicked");
 		if ($(this).val() == "other") {
 			$("#textarea").removeClass('d-none');
 		} else {
 			$("#textarea").addClass('d-none');
 		}
 	});

 	$(".modal").on('shown.bs.modal', function () {
 		$("body").addClass("modal-open");
 	});


 	$('.modal').on('hidden.bs.modal', function (event) {
 		$("body").removeClass("modal-open");
 	})




 	/*
	$(".q-option input:radio").click(function(event){
	   event.preventDefault();
	   $('.inputDisabled').prop("disabled", false); // Element(s) are now enabled.
	});
*/

 	let dis_radios = document.querySelectorAll(".radio-ss");


 	for (let i = 0; i < dis_radios.length; i++) {
 		let radio_here = dis_radios[i];

 		radio_here.addEventListener('click', function () {
 			for (let j = 0; j < dis_radios.length; j++) {
 				dis_radios[j].parentElement.nextElementSibling.children[0].disabled = true
 			}
 			this.parentElement.nextElementSibling.children[0].disabled = false
 		});

 	}

 	/*$(".q-option input:radio").click(function() {
		
      $(this).parent().next().find('select').removeAttr('disabled');

    });
*/

 	//var elem = document.querySelector('.switchery');
 	//var init = new Switchery(elem);


 	//var switchery = new Switchery(elem, { color: '#faab43', secondaryColor: '#fC73d0', jackColor: '#fcf45e', jackSecondaryColor: '#c8ff77' });


 	//var switchery = new Switchery(elem, {  color: '#7c8bc7', jackColor: '#9decff' });
 	//$('#checkboxSwitch').checkboxpicker();
 	$(".dataTables_filter input").attr("placeholder", "Search");

 });



 /*custom accordian show hide start here*/
 /*
 const handleIcon = (icon, classToRemove, classToAdd) => {
 			icon.classList.remove(classToRemove);
 			icon.classList.add(classToAdd);								
 }

 const handleHint = (hint, classToRemove, classToAdd) => {
 			classToRemove.length ? hint.classList.remove(classToRemove) : null;
 			classToAdd.length ? hint.classList.add(classToAdd) : null;								
 }

 const registerDivClick = (divId, iconId, hintId) => {
 	let div = document.getElementById(divId);
 	div.onclick= function () {
 		let icon = document.getElementById(iconId);
 		let hint = document.getElementById(hintId);
 		setTimeout(() => {
 			if(div.classList.value.includes("collapsed"))
 			{
 			handleIcon(icon, 'fa-angle-down', 'fa-angle-right');
 			handleHint(hint, '', 'd-none');
 		}
 			else
 		{
 			handleIcon(icon, 'fa-angle-right','fa-angle-down')		
 			handleHint(hint, 'd-none', '')			
 		}
 	}, 100)	
 }
 }

 try {
 	registerDivClick("friendly-bet-accordian-div", "icon-friendly-bet", "hint-friendly-bet");
 	registerDivClick("pool-bet-accordian-div", "icon-pool-bet", "hint-pool-bet");
 	registerDivClick("third-accordian-div", "icon-third", "hint-pool-bet");
 }
 catch(e) {
 	console.log(e)
 }
 */


 /*custom accordian end hide start here*/


 /*modal click change start here*/

 $(function () {
 	/**** Pasword Visible***/


 	$(".show-btn-1").click(function () {
 		$(this).find('.fa').toggleClass("fa-eye fa-eye-slash");
 		var input = $(".show-input-1");
 		if (input.attr("type") === "password") {
 			input.attr("type", "text");
 		} else {
 			input.attr("type", "password");
 		}
 	});

 	$(".show-btn-2").click(function () {
 		$(this).find('.fa').toggleClass("fa-eye fa-eye-slash");
 		var input = $(".show-input-2");
 		if (input.attr("type") === "password") {
 			input.attr("type", "text");
 		} else {
 			input.attr("type", "password");
 		}
 	});

	 $(".show-btn-3").click(function () {
		$(this).find('.fa').toggleClass("fa-eye fa-eye-slash");
		var input = $(".show-input-3");
		if (input.attr("type") === "password") {
			input.attr("type", "text");
		} else {
			input.attr("type", "password");
		}
	});




 	/*
 	 	$(".enter-icon-1").click(function () {
 	 		$(this).find('.fa').toggleClass("fa-eye fa-eye-slash");
 	 		var input = $(".enter-input-1");
 	 		if (input.attr("type") === "password") {
 	 			input.attr("type", "text");
 	 		} else {
 	 			input.attr("type", "password");
 	 		}

 	 	});

 	 	$(".enter-icon2").click(function () {
 	 		$(this).find('.fa').toggleClass("fa-eye fa-eye-slash");

 	 		var input = $(".enter-input2");
 	 		if (input.attr("type") === "password") {
 	 			input.attr("type", "text");
 	 		} else {
 	 			input.attr("type", "password");
 	 		}
 	 	});

 	 	$(".enter-icon3").click(function () {
 	 		$(this).toggleClass("fa-eye fa-eye-slash");

 	 		var input = $(".enter-input3");
 	 		if (input.attr("type") === "password") {
 	 			input.attr("type", "text");
 	 		} else {
 	 			input.attr("type", "password");
 	 		}
 	 	});


 	 	$(".show-new-pass").click(function () {
 	 		//console.log("ds");
 	 		//alert ("ds");

 	 		$(this).find('.fa').toggleClass("fa-eye fa-eye-slash");

 	 		var input = $(".new-pass-input");
 	 		if (input.attr("type") === "password") {
 	 			input.attr("type", "text");
 	 		} else {
 	 			input.attr("type", "password");
 	 		}

 	 	});

 	 	$(".show-confirm-pass").click(function () {
 	 		//console.log("ds");
 	 		//alert ("ds");

 	 		$(this).find('fa').toggleClass("fa-eye fa-eye-slash");

 	 		var input = $(".confirm-pass-input");
 	 		if (input.attr("type") === "password") {
 	 			input.attr("type", "text");
 	 		} else {
 	 			input.attr("type", "password");
 	 		}

 	 	});
 	*/

 	//  $(".toggle-password").click(function() {

 	// 	$(this).toggleClass("fa-eye fa-eye-slash");
 	// 	var input = $($(this).attr("toggle"));
 	// 	if (input.attr("type") == "password") {
 	// 	  input.attr("type", "text");
 	// 	} else {
 	// 	  input.attr("type", "password");
 	// 	}
 	//   });

 	/**** Pasword Visible***/


 });





 /*modal click change end here*/



 /*date picker start here*/


	


 var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

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
    document.getElementById("nextBtn").innerHTML = "Regiter";
  } else {
    document.getElementById("nextBtn").innerHTML = "Continue";
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