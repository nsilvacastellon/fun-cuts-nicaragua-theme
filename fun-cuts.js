let menu = document.querySelector(".fas");
let nav = document.querySelector(".nav-bar");
let avatar = document.querySelector(".single-author-avatar");

// Event listener for mobile menu
menu.addEventListener("click", () => {

switchMenuIcon(menu);
mobileMenuToggle(nav);

})

function switchMenuIcon(icon) {
    icon.classList.toggle("fa-times");
}

function mobileMenuToggle(nav) {
    nav.classList.toggle("toggle-nav");
}

// Get random wordpress avatar (random kitten picture)
function getRandomAvatar (avatarClass) {
    
for (const child of avatarClass.children) {
    child.src = "http://placekitten.com/80/80";
    
  }
  return avatarClass;
  
}
getRandomAvatar(avatar);