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

                if (item.name === "login") {
                    const icon = document.createElement("i");
                    icon.className = "material-icons"; // Cambia esto por la clase del ícono que desees
                    icon.textContent = "login"; // Cambia esto por el nombre del ícono
                    a.appendChild(icon);
                } else {
                    a.textContent = item.name || item.icon || "Unnamed"; // Usa icon si no hay name
                }

                a.href = item.url;
                li.appendChild(a);
                if (item.url === currentPage) {
                    li.classList.add("active");
                }
                menuElement.appendChild(li);
                menuElementMobile.appendChild(li.cloneNode(true));
                a.classList.add("grey-text", "text-lighten-3");
                menuElementFooter.appendChild(li.cloneNode(true));

                // Add submenu if it exists
                if (item.submenu && item.submenu.length > 0) {
                    const ulSubmenu = document.createElement("ul");
                    ulSubmenu.classList.add("submenu");

                    item.submenu.forEach(subItem => {
                        const subLi = document.createElement("li");
                        const subA = document.createElement("a");
                        if (subItem.icono) {
                            const icon = document.createElement("i");
                            icon.className = subItem.icono;
                            subA.appendChild(icon);
                        }
                        subA.appendChild(document.createTextNode(subItem.name || "Unnamed"));
                        subA.href = subItem.url;
                        subLi.appendChild(subA);
                        ulSubmenu.appendChild(subLi);
                    });
                    li.appendChild(ulSubmenu);

                    // Show submenu on hover
                    li.addEventListener("mouseover", () => {
                        ulSubmenu.style.display = "block";
                    });

                    // Hide submenu when mouse leaves
                    li.addEventListener("mouseout", () => {
                        ulSubmenu.style.display = "none";
                    });
                }
            });
        })
        .catch(error => console.error("Error al cargar el menú:", error));
}
cargarMenu();
