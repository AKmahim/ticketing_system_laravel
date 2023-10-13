var countdownText = document.getElementById('resend-countdown-text');
var resend_btn = document.getElementById('resend-otp');
function countdown(totalSeconds) {
    var countdownElement = document.getElementById('resend-countdown');
    var minutes, seconds;

    var intervalId = setInterval(function() {
        minutes = Math.floor(totalSeconds / 60);
        seconds = totalSeconds % 60;

        countdownElement.innerHTML = getBanglaNumber(minutes) + ":" + getBanglaNumber(seconds);

        if (totalSeconds <= 0) {
            clearInterval(intervalId);
            countdownText.style.display = "none";
            resend_btn.style.display = "block";
        }

        totalSeconds--;
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

      // Usage: Set the desired number of seconds for the countdown (150 seconds = 2 minutes and 30 seconds)
    countdown(150); // Countdown for 2 minutes and 30 seconds