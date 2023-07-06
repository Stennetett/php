document.addEventListener('DOMContentLoaded', function () {
    // Function to set the text content of the h1 element
    function setTextContent(text) {
        var outputElement = document.getElementById('output');
        outputElement.textContent = text;
    }

    // Call the function with the desired text
    setTextContent('Hello, this text is inserted dynamically!');
});

// Get references to the SVG and button elements
const svg = document.getElementById('visual');
const transformBtn = document.getElementById('transform-btn');

// Add click event listener to the button
transformBtn.addEventListener('click', function() {
  // Modify the SVG properties or apply CSS styles
  svg.style.transform = 'scale(1.2)';
  svg.translateZ(0px);
});







