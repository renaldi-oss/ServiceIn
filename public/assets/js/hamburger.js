document.addEventListener('alpine:init', () => {
    Alpine.data('hamburger', () => ({
        hamburger: false,
        toggle() {
            this.hamburger = ! this.hamburger,
            Alpine.store('hide', this.hamburger)
        },
    }))
})