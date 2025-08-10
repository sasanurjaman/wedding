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

// Swiper untuk bride (normal - slide ke kiri)
new Swiper('.bride-swiper', {
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  direction: 'horizontal',
  speed: 1000,
})

// Swiper untuk groom (reverse - slide ke kanan)
new Swiper('.groom-swiper', {
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
    reverseDirection: true, // Ini yang membuat slide ke kanan
  },
  direction: 'horizontal',
  speed: 1000,
})
// end couple swiper

document.addEventListener('DOMContentLoaded', function () {
  lightGallery(document.getElementById('lightgallery'), {
    plugins: [lgZoom, lgThumbnail],
    speed: 500,
    download: false,
  })
})
// end lightgallery

const eventSwiper = new Swiper('.event-swiper', {
  direction: 'vertical',
  loop: true,
  effect: 'creative',
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  creativeEffect: {
    prev: {
      translate: [0, '-100%', 0],
    },
    next: {
      translate: [0, '100%', 0],
    },
  },
  speed: 1000,
})

function copyText(text) {
  // Fallback copy method
  const tempInput = document.createElement('input')
  tempInput.value = text
  document.body.appendChild(tempInput)
  tempInput.select()
  document.execCommand('copy')
  document.body.removeChild(tempInput)

  // Show toast
  const toast = document.getElementById('copy-toast')
  toast.classList.add('show')
  setTimeout(() => {
    toast.classList.remove('show')
  }, 2000)
}

// Initialize AOS (Animate On Scroll)
AOS.init()
