// app.js
document.addEventListener('alpine:init', () => {
    Alpine.data('menuToggle', () => ({
        open: false,
        toggle() {
            this.open = !this.open;
        }
    }));
});
