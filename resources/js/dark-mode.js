document.addEventListener('livewire:initialized', () => {
  // Set initial state based on cookie
  const darkMode = document.cookie.includes('dark_mode=true');
  if (darkMode) {
    document.documentElement.classList.add('dark');
  }

  // Listen for dark mode toggle events from Livewire
  Livewire.on('darkModeToggled', (params) => {
    if (params.darkMode) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark');
    }
  });
}); 