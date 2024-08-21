document.addEventListener('DOMContentLoaded', function() {
    // Toggle visibility of replies
    const replyToggles = document.querySelectorAll('.reply');
    replyToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function() {
            const replies = this.parentElement.querySelector('.replies');
            if (replies.style.display === 'none' || !replies.style.display) {
                replies.style.display = 'block';
            } else {
                replies.style.display = 'none';
            }
        });
    });

    // Toggle dropdown menu for post options
    const menuIcons = document.querySelectorAll('.menu-icon');
    menuIcons.forEach(function(icon) {
        icon.addEventListener('click', function() {
            const dropdown = this.parentElement.querySelector('.dropdown-menu');
            dropdown.classList.toggle('show');
        });
    });

    // Toggle like button
    const likeToggles = document.querySelectorAll('.like-toggle');
    likeToggles.forEach(function(toggle) {
        toggle.addEventListener('change', function() {
            const likeNumber = this.parentElement.querySelector('.like-number');
            let count = parseInt(likeNumber.textContent);
            if (this.checked) {
                count++;
            } else {
                count--;
            }
            likeNumber.textContent = count;
        });
    });

    // Close popup
    const closePopup = document.querySelector('.close');
    closePopup.addEventListener('click', function() {
        const popup = this.closest('.overlay');
        popup.style.display = 'none';
    });

    // reply
    const replyDivs = document.querySelectorAll('.reply');
    replyDivs.forEach(div => {
        div.addEventListener('click', () => {
            const repliesSection = div.nextElementSibling;
            if (repliesSection.style.display === 'none' || repliesSection.style.display === '') {
                repliesSection.style.display = 'block';
            } else {
                repliesSection.style.display = 'none';
            }
        });
    });

    //navbar
    document.addEventListener('DOMContentLoaded', () => {
        const navLinks = document.querySelectorAll('.nav-links li a');
        
        // Function to remove 'active' class from all links
        function removeActiveClass() {
            navLinks.forEach(link => link.classList.remove('active'));
        }
        
        // Add click event listener to each link
        navLinks.forEach(link => {
            link.addEventListener('click', (event) => {
                // Prevent default link behavior
                event.preventDefault();
                
                // Remove 'active' class from all links
                removeActiveClass();
                
                // Add 'active' class to the clicked link
                link.classList.add('active');
                
                // Optionally, navigate to the link's href
                // Uncomment the following line if you want to follow the link after clicking
                // window.location.href = link.href;
            });
        });
    });
});
