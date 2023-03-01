// Define an object to store the link elements and their corresponding section ids
const sectionIds = {
    'skills-link': 'skills-section',
    'projects-link': 'projects-section',
    'callback-link': 'callback-section'
};

// Add click event listeners to each link element
Object.keys(sectionIds).forEach(linkId => {
    const link = document.getElementById(linkId);
    const sectionId = sectionIds[linkId];
    link.addEventListener('click', event => {
        event.preventDefault(); // Prevent the default link behavior
        const section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' }); // Scroll to the corresponding section
        }
    });
});
