<!-- Dark Mode Toggle -->
<button
    class="toggle-simple"
    x-data="{ darkMode: $wire.darkMode }"
    x-init="
        if (darkMode) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    "
    @click="darkMode = !darkMode; $wire.toggleDarkMode(darkMode)"
>
    <i class="mdi mdi-theme-light-dark"></i>
    <span x-text="darkMode ? 'Light mode' : 'Dark mode'"></span>
</button>
