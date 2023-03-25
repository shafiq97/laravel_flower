const sidebarToggle = document.getElementById('sidebar-toggle');
const sidebarContent = document.getElementById('sidebar-content');

sidebarToggle.addEventListener('click', () => {
    sidebarContent.classList.toggle('hidden');
});
