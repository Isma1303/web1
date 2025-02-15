function cargarMenu() {
    fetch("js/menu.json")
        .then(response => response.json())
        .then(data => {
            const menuElement = document.getElementById("menu");
            const menuElementMobile = document.getElementById("mobile-menu");
            const menuElementFooter = document.getElementById("footer-menu");
            const currentPage = window.location.pathname.split("/").pop();
            data.menu.forEach(item => {
                const li = document.createElement("li"); 
                const a = document.createElement("a");
                a.textContent = item.name; 
                a.href = item.url;
                li.appendChild(a);
                if (item.url === currentPage) {
                    li.classList.add("active");
                }
                menuElement.appendChild(li);
                menuElementMobile.appendChild(li.cloneNode(true));
                a.classList.add("grey-text", "text-lighten-3");
                menuElementFooter.appendChild(li.cloneNode(true));
            });
        })
        .catch(error => console.error("Error al cargar el menú:", error)); 
}
cargarMenu();