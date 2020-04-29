//smoothscrolling

 $('.smoothscroll').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 800, 'swing', function () {
	        window.location.hash = target;
	    });
	});

 //mobile navigation list

 document.getElementById('mobNav').addEventListener('click', navFoo);
var liList = document.querySelectorAll("#showNav li");
for (let i = 0; i < liList.length; i++) {
  liList[i].addEventListener("click", navFoo);
}
 function navFoo(){
     var mNav = document.getElementById('showNav');
     mNav.classList.toggle('show');
 };

// set current date to input type date

document.getElementById('datepicker').valueAsDate = new Date();
    // $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' })
    // $('#datepicker').datepicker('setDate', new Date());

// set current time to input type time

let date = new Date();
let strHours = date.getHours().toString();
let strMinutes = date.getMinutes().toString();
if (strHours.length < 2) {
  strHours = "0" + strHours;
}
let currentTime = strHours + ":" + strMinutes;
document.getElementById('time').value = currentTime;

// bx-slider lazania if screen smaller then 870px
            
$('.bxslider').bxSlider({
        auto: true,
        pause: 2000,
        controls: false
        //adaptiveHeight: true
    });
	