document.addEventListener('DOMContentLoaded', () => {
    // JavaScript code for toggling replies
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

    // JavaScript code for managing active state of navbar links
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
