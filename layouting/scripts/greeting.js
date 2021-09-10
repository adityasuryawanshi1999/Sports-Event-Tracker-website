var date=new Date();
var currentHour=date.getHours();
var target=document.getElementById('here-js');
if (0<=currentHour && currentHour<=12) {
  target.textContent="Good Morning";
} else if (12<=currentHour && currentHour<18) {
  target.textContent="Good Afternoon";
} else {
  target.textContent="Good Evening";
}
