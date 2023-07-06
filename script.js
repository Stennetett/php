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
  svg.style.transform = 'rotate(45deg)';
  svg.style.fill = 'red';
});
In the above example, when the "Transform" button is clicked, the SVG is rotated by 45 degrees and the fill color is changed to red. You can modify the transformation or styles based on your specific requirements.

Note: Make sure to place the JavaScript code either before the closing </body> tag or inside an event listener for the DOMContentLoaded event to ensure that the elements are available when the code is executed.

Remember to link the JavaScript file to your HTML file using a <script> tag or include it directly within a <script> tag if you prefer.






