
function search() {
    var searchTerm = document.getElementById("disease").value.toLowerCase();
    var diseasePages = {
      "flu": "flu.html",
      "rabbies": "rabbies.html",
      "flease": "flease.html",
      "fever": "fever.html",
      "retrovirus": "retrovirus.html",
      // Add more disease pages as needed
    };
  
    if (diseasePages.hasOwnProperty(searchTerm)) {
      window.location.href = diseasePages[searchTerm];
    } else {
      alert("No information found for '" + searchTerm + "'.");
    }
    function generateBackButton() {
            var backButton = document.createElement("button");
            backButton.textContent = "Back";
            backButton.onclick = function() {
                window.history.back();
            };
            document.body.appendChild(backButton);
        }

        // Call generateBackButton function when the page loads
        window.onload = function() {
            generateBackButton();
        };
  }