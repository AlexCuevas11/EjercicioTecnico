document.addEventListener("DOMContentLoaded", function() {
    const tooltipElements = document.querySelectorAll(".tooltip");
  
    tooltipElements.forEach(function(element) {
      const description = element.getAttribute("data-description");
      const tooltip = document.createElement("div");
      tooltip.className = "tooltiptext";
      tooltip.textContent = description;
      element.appendChild(tooltip);
    });
  });
  