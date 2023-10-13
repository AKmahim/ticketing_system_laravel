function countdown(targetDate) {
  var d = document.getElementById('clock1');
  var h = document.getElementById('clock2');
  var m = document.getElementById('clock3');
  var s = document.getElementById('clock4');

  var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = targetDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    d.innerHTML = getBanglaNumber(days);
    h.innerHTML = getBanglaNumber(hours);
    m.innerHTML = getBanglaNumber(minutes);
    s.innerHTML = getBanglaNumber(seconds);

    if (distance < 0) {
      clearInterval(x);
      
      d.innerHTML = "০০";
      h.innerHTML = "০০";
      m.innerHTML = "০০";
      s.innerHTML = "০০";

    }
  }, 1000);
}

function getBanglaNumber(number) {
  var banglaNumbers = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
  var strNumber = number.toString();
  var banglaNumber = '';

  for (var i = 0; i < strNumber.length; i++) {
    var digit = parseInt(strNumber[i]);
    banglaNumber += banglaNumbers[digit];
  }

  return banglaNumber;
}

var targetDate = new Date("October 20, 2023 17:00:00").getTime();
countdown(targetDate);