
  document.addEventListener("DOMContentLoaded", function() {
    var linkElements = document.querySelectorAll('a');
    linkElements.forEach(function(linkElement) {
        if (linkElement.textContent.trim() === 'اختر تخصصك' ||linkElement.textContent.trim() ==='Get Started') {
            linkElement.addEventListener("click", function(event) {
              event.preventDefault();
              var targetUrl = "/pages/semester/semester.html";
              window.location.href = targetUrl;

            });
          }
    });
  });