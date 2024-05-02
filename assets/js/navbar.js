const navbarLoad = () => {
    var arr = document.getElementsByClassName("blog item");
    Array.from(arr).forEach(element => {
        element.className="blog item d-none"
    });
    Array.from(document.getElementsByClassName("active-nav")).forEach((element) => {
        var openId = element.firstElementChild.getAttribute("onmouseover").replace("hover('", "").replace("')", "");
        document.getElementById(openId).className = "blog item"
    })
}
window.onload = () => {
    navbarLoad()
}
const hover = (blogid) => {
    var arr = document.getElementsByClassName("blog item");
    Array.from(arr).forEach(element => {
        element.className="blog item d-none"
    });
    document.getElementById(blogid).className = "blog item"
}
const resetNavbar = () => {
    navbarLoad()
}

const menu = document.querySelector(".menu");
const menuMain = menu.querySelector(".menu-main");
const goBack = menu.querySelector(".go-back");
const menuTrigger = document.querySelector(".mobile-menu-trigger");
const closeMenu = menu.querySelector(".mobile-menu-close");
const body = document.querySelector("body");
let subMenus = [];
let currentSubMenu;

menuMain.addEventListener("click", (e) => {
    if (!menu.classList.contains("active")) {
        return;
    }
    if (e.target.closest(".menu-item-has-children")) {
        const hasChildren = e.target.closest(".menu-item-has-children");
        showSubMenu(hasChildren);
    }
});

goBack.addEventListener("click", () => {
    hideSubMenu();
});

menuTrigger.addEventListener("click", () => {
    toggleMenu();
});

closeMenu.addEventListener("click", () => {
    toggleMenu();
});

document.querySelector(".menu-overlay").addEventListener("click", () => {
    toggleMenu();
});

function toggleMenu() {
    menu.classList.toggle("active");
    document.querySelector(".menu-overlay").classList.toggle("active");
    body.classList.toggle("overflow-hidden")
}

function showSubMenu(hasChildren) {
    const newSubMenu = hasChildren.querySelector(".sub-menu");
    if (currentSubMenu) {
        subMenus.push(currentSubMenu);
    }
    currentSubMenu = newSubMenu;
    currentSubMenu.classList.add("active");
    currentSubMenu.style.animation = "slideLeft 0.5s ease forwards";
    const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
    menu.querySelector(".current-menu-title").innerHTML = menuTitle;
    menu.querySelector(".mobile-menu-head").classList.add("active");
}

function hideSubMenu() {
    if (subMenus.length > 0) {
        const prevSubMenu = subMenus.pop();
        currentSubMenu.style.animation = "slideRight 0.5s ease forwards";
        setTimeout(() => {
            currentSubMenu.classList.remove("active");
            currentSubMenu = prevSubMenu;
            const menuTitle = prevSubMenu.parentNode.parentNode.querySelector("i").parentNode.childNodes[0].textContent;
            menu.querySelector(".current-menu-title").innerHTML = menuTitle;
        }, 300);
    } else {
        currentSubMenu.style.animation = "slideRight 0.5s ease forwards";
        setTimeout(() => {
            currentSubMenu.classList.remove("active");
            menu.querySelector(".current-menu-title").innerHTML = "<img src='https://chanakanalytics.com/wp-content/themes/Chanakanalytics/assets/images/logo/chanak-logo-new.png'/>";
            menu.querySelector(".mobile-menu-head").classList.remove("active");
            currentSubMenu = null; // Reset currentSubMenu when reaching the root level
        }, 300);
    }
}

window.onresize = function () {
    if (this.innerWidth > 991) {
        if (menu.classList.contains("active")) {
            toggleMenu();
        }
    }
};
