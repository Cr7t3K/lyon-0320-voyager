document.addEventListener('DOMContentLoaded', function() {
    const cardHeaders = document.querySelectorAll('.box-header'); // querySelector takes a CSS selector in parameter
    cardHeaders.forEach(function(cardHeader) {
      cardHeader.addEventListener('click', function (event) {
        // retrieving the DOM elements that we are going to play with...
        const titleElement = event.target.closest('.box-header').firstChild;
        const chevronElement = event.target.closest('.box-header').lastElementChild.firstElementChild;
        const boxBodyElement = titleElement.parentNode.nextElementSibling; // we can also "navigate" in the DOM to get elements
        const boxBodyClassAttribute = boxBodyElement.className;
        const boxBodyClassesArray = boxBodyClassAttribute.split(' '); 
        // this gives either ['box-body', 'collapsed'] 
        // or just ['box-body'] if the box is not in a collapsed state
        const boxBodyIsCollapsed = boxBodyClassesArray.indexOf('collapsed') !== -1; 
        // The indexOf method returns the index of the element matching its parameter
        // or -1 if the array does not contain the latter

        if (boxBodyIsCollapsed) {
            // switch to uncollapsed state
            titleElement.innerHTML = 'Hide Content';
            boxBodyElement.className = 'box-body';
            chevronElement.className = 'fas fa-chevron-down';
        } else { // it's not collapsed
            // switch to collapsed state 
            titleElement.innerHTML = 'Show Content';
            boxBodyElement.className = 'box-body collapsed';
            chevronElement.className = 'fas fa-chevron-right'
        }
        
      });
    });
})