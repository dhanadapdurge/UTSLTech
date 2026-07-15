document.addEventListener('DOMContentLoaded', () => {
  // Mobile Menu Toggle
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenuDrawer = document.getElementById('mobile-menu-drawer');
  const closeMenuBtn = document.getElementById('close-menu-btn');

  if (mobileMenuBtn && mobileMenuDrawer) {
    mobileMenuBtn.addEventListener('click', () => {
      mobileMenuDrawer.classList.remove('translate-x-full');
    });
  }

  if (closeMenuBtn && mobileMenuDrawer) {
    closeMenuBtn.addEventListener('click', () => {
      mobileMenuDrawer.classList.add('translate-x-full');
    });
  }

  // Accordion Logic
  const accordionButtons = document.querySelectorAll('.accordion-btn');
  
  accordionButtons.forEach(button => {
    button.addEventListener('click', () => {
      const content = button.nextElementSibling;
      const icon = button.querySelector('.accordion-icon');
      
      const isExpanded = content.classList.contains('expanded');
      
      // Close all other accordions (optional, but good for UX)
      /*
      document.querySelectorAll('.accordion-content').forEach(el => el.classList.remove('expanded'));
      document.querySelectorAll('.accordion-icon').forEach(el => el.style.transform = 'rotate(0deg)');
      */

      if (isExpanded) {
        content.classList.remove('expanded');
        if (icon) icon.style.transform = 'rotate(0deg)';
      } else {
        content.classList.add('expanded');
        if (icon) icon.style.transform = 'rotate(180deg)';
      }
    });
  });
});
