


 function showCategory(categoryId) {
            // Hide all category sections
            const allSections = document.querySelectorAll('.category-section');
            allSections.forEach(section => {
                section.classList.remove('active');
            });

            // Show selected category
            document.getElementById(categoryId).classList.add('active');

            // Update active button
            const allButtons = document.querySelectorAll('.brand-btn');
            allButtons.forEach(btn => {
                btn.classList.remove('active');
            });
            event.target.classList.add('active');

            // Animate cards
            setTimeout(() => {
                const cards = document.querySelectorAll('.category-section.active .product-card');
                cards.forEach((card, index) => {
                    setTimeout(() => {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            card.style.transition = 'all 0.5s ease';
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, 50);
                    }, index * 100);
                });
            }, 100);
        }

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            // Set initial animation for Fanta products
            setTimeout(() => {
                const cards = document.querySelectorAll('.category-section.active .product-card');
                cards.forEach((card, index) => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.transition = 'all 0.5s ease';
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, index * 100);
                });
            }, 500);
        });

        // Add click animation to buy buttons
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('buy-btn')) {
                e.target.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    e.target.style.transform = 'scale(1.05)';
                    setTimeout(() => {
                        e.target.style.transform = '';
                    }, 150);
                }, 150);
            }
        });


  const sidebar = document.getElementById("mySidebar");
  const menuBtn = document.getElementById("menuBtn");
  let sidebarOpen = false;

  menuBtn.onclick = function() {
    if (!sidebarOpen) {
      sidebar.style.width = "250px";
      menuBtn.classList.remove("ri-menu-4-fill");
      menuBtn.classList.add("ri-close-fill");
      sidebarOpen = true;
    } else {
      sidebar.style.width = "0";
      menuBtn.classList.remove("ri-close-fill");
      menuBtn.classList.add("ri-menu-4-fill");
      sidebarOpen = false;
    }
  }

  // Reset sidebar when resize to large screen
  window.addEventListener('resize', function() {
    if (window.innerWidth > 768) {
      sidebar.style.width = "250px";
      menuBtn.classList.remove("ri-close-fill");
      menuBtn.classList.add("ri-menu-4-fill");
      sidebarOpen = false;
    } else {
      sidebar.style.width = "0";
    }
  });
