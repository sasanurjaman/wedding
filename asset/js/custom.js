const weddingDate = new Date('October 19, 2025 00:00:00').getTime()

// Update countdown every second
const countdown = setInterval(function () {
  const now = new Date().getTime()
  const distance = weddingDate - now

  // Calculate days, hours, minutes, seconds
  const days = Math.floor(distance / (1000 * 60 * 60 * 24))
  const hours = Math.floor(
    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60),
  )
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))
  const seconds = Math.floor((distance % (1000 * 60)) / 1000)

  // Display results
  document.getElementById('days').innerHTML = days.toString().padStart(2, '0')
  document.getElementById('hours').innerHTML = Math.floor(hours)
    .toString()
    .padStart(2, '0')
  document.getElementById('minutes').innerHTML = minutes
    .toString()
    .padStart(2, '0')
  document.getElementById('seconds').innerHTML = seconds
    .toString()
    .padStart(2, '0')

  // If countdown is finished
  if (distance < 0) {
    clearInterval(countdown)
    document.getElementById('wedding-countdown').innerHTML =
      '<h3>The Wedding Has Started!</h3>'
  }
}, 1000)
/** end Countdown function */
