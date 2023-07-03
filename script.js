document.addEventListener('DOMContentLoaded', function () {
    // Function to set the text content of the h1 element
    function setTextContent(text) {
        var outputElement = document.getElementById('output');
        outputElement.textContent = text;
    }

    // Call the function with the desired text
    setTextContent('Hello, this text is inserted dynamically!');
});
