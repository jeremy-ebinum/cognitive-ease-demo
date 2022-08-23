<span id="timer" class="timer navbar-brand mb-0">00:20</span>

{{-- Adapted from: https://stackoverflow.com/questions/20618355/how-to-write-a-countdown-timer-in-javascript --}}
<script>
    let duration = 20, // seconds
        timeLeft = duration,
        minutes, seconds;
    let timerElem = document.querySelector('#timer');

    let intervalId = setInterval(() => {
        minutes = parseInt(timeLeft / 60, 10);
        seconds = parseInt(timeLeft % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        timerElem.textContent = minutes + ":" + seconds;

        if (--timeLeft < 0) {
            timerElem.style.opacity = '0';
            clearInterval(intervalId);
        }

    }, 1000);
</script>
