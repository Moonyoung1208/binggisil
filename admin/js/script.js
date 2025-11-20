// 모바일 사이드바 토글
const mobileToggle = document.getElementById('mobileToggle');
const sidebar = document.getElementById('sidebar');
const sidebarOverlay = document.getElementById('sidebarOverlay');
const menuOpen = document.getElementById('menuOpen');
const menuClose = document.getElementById('menuClose');

function toggleSidebar() {
    sidebar.classList.toggle('active');
    sidebarOverlay.classList.toggle('active');

    // 아이콘 토글
    if (sidebar.classList.contains('active')) {
        menuOpen.style.display = 'none';
        menuClose.style.display = 'block';
    } else {
        menuOpen.style.display = 'block';
        menuClose.style.display = 'none';
    }
}

mobileToggle.addEventListener('click', toggleSidebar);
sidebarOverlay.addEventListener('click', toggleSidebar);

// 사이드바 메뉴 클릭 시 모바일에서 닫기
if (window.innerWidth <= 768) {
    const sidebarLinks = document.querySelectorAll('.sidebar-menu a');
    sidebarLinks.forEach(link => {
        link.addEventListener('click', () => {
            sidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
        });
    });
}
