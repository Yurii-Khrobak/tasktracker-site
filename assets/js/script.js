const navBtn = document.querySelector('.nav-button')
const mobileNav = document.querySelector('.mobile-nav')
const body = document.body

// Click on button
navBtn.addEventListener('click', (event) => {
	event.stopPropagation()
	toggleMobileNav()
})

// Click on window from navigation place 
window.addEventListener('click', () => {
	if (body.classList.contains('no-scroll')) {
		toggleMobileNav()
	}
})

// Stoping click in open mobile navigation
mobileNav.addEventListener('click', (event) => {
	event.stopPropagation()
})

function toggleMobileNav() {
	body.classList.toggle('no-scroll')
	navBtn.classList.toggle('nav-button-close')
	mobileNav.classList.toggle('mobile-nav-active')
}