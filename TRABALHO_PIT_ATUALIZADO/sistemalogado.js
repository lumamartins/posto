document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.item');

    menuItems.forEach(item => {
      item.addEventListener('mouseenter', function() {
        const submenu = this.querySelector('.submenu');
        if (submenu) {
          submenu.style.display = 'block';
        }
      });

      item.addEventListener('mouseleave', function() {
        const submenu = this.querySelector('.submenu');
        if (submenu) {
          submenu.style.display = 'none';
        }
      });
    });
  });