var sidebarLinks = document.querySelectorAll('.sidebar-link');

sidebarLinks.forEach(function(link) {
  link.addEventListener('click', function(e) {
    e.preventDefault();
    var targetId = this.getAttribute('href');
    var targetContent = document.querySelector(targetId);
    var allContent = document.querySelectorAll('.content > div');

    allContent.forEach(function(content) {
      content.style.display = 'none';
    });

    targetContent.style.display = 'block';
  });
});