function pad(num, size) {
  return "0".repeat(size - num.toString().length) + num.toString();
}

function updateTimer(time) {
  var future = Date.parse(time) + (24*60*60*1000);
  console.log(time);
  console.log(firsttime);
  var test = Date.parse(time);
  var now = new Date().toLocaleString('en-US', {timeZone: 'Europe/Moscow', year: 'numeric', month: 'short', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric'});
  var now1 =  Date.parse(now);
  var diff = future - now1;
// console.log(now1,future,diff,test);
  if(diff > 0) {
    var hours = Math.floor(diff / (1000 * 60 * 60));
    var mins = Math.floor(diff / (1000 * 60));
    var secs = Math.floor(diff / 1000);

    var discount = 5;
    var h = hours;
    var m = mins - hours * 60;
    var s = secs - mins * 60;
    console.log(h,m,s);
if (h === 0 && m === 0 && s === 0){
  discount =0;
}
    document.getElementById("timer").innerHTML =
       pad(h,2) + ':' +  pad(m,2) + ':' + pad(s,2);
  }
}

var strTimeVal = new Date().toLocaleString('en-US', {timeZone: 'Europe/Moscow', year: 'numeric', month: 'short', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric'});
var firsttime = localStorage.getItem('logontime');
console.log(firsttime);

// var currentDate = new Date();
// var day = currentDate.getDate().toString().padStart(2, '0');
// var month = (currentDate.getMonth() + 1).toString().padStart(2, '0');
// var year = currentDate.getFullYear().toString();
// var hours = currentDate.getHours().toString().padStart(2, '0');
// var minutes = currentDate.getMinutes().toString().padStart(2, '0');
// var seconds = currentDate.getSeconds().toString().padStart(2, '0');
// var formattedDate = day + '.' + month + '.' + year + ' ' + hours + ':' + minutes + ':' + seconds;


if(firsttime === null){
  localStorage.setItem('logontime', strTimeVal);
  setInterval(function() {
    updateTimer(localStorage.getItem('logontime'));
  }, 1000);
} else {
  updateTimer(firsttime);
  setInterval(function() {
    updateTimer(localStorage.getItem('logontime'));
  }, 1000);
}
updateTimer(localStorage.getItem('logontime'));

