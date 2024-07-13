// ------------------ SHOW SIDEBAR ------------------
const navMenu = document.getElementById('sidebar');
const navToggle = document.getElementById('nav_toggle');
const navClose = document.getElementById('nav_close');

// open
if(navToggle){
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-sidebar');
    });
}
//close
if(navClose){
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-sidebar');
    });
}


// ------------------ Skills Tabs ------------------
    // to display skills
const tabs = document.querySelectorAll('[data-target]');
tabContent = document.querySelectorAll('[data-content]');

    tabs.forEach(tab => {
        tab.addEventListener("click", () => {
            const target = document.querySelector(tab.dataset.target);

            tabContent.forEach(tabContent => {
                tabContent.classList.remove('skills_active');
            });
            target.classList.add('skills_active');

            tab.forEach(tab => {
                tab.classList.remove('skills_active');
            });
            tab.classList.add('skills_active');
        })
    })

    // to rotate skills_arrow
    const skillsHeaders = document.querySelectorAll('.skills_header');

    skillsHeaders.forEach((header) => {
      header.addEventListener('click', () => {
        // Remove .skills_active class from all headers
        skillsHeaders.forEach((h) => h.classList.remove('skills_active'));
        // Reset arrow rotation for all headers
        skillsHeaders.forEach((h) => {
          const arrow = h.querySelector('.skills_arrow');
          arrow.style.transform = 'rotate(0deg)';
        });
    
        // Add .skills_active class to the current header
        header.classList.add('skills_active');
        // Rotate the arrow for the current header
        const arrow = header.querySelector('.skills_arrow');
        arrow.style.transform = 'rotate(-90deg)';

      });
    });


// ------------------ Mixitup Filter Portfolio ------------------
let mixer = mixitup('.work_container', {
    selectors: {
        target: '.work_card'
    },
    animation: {
        duration: 400
    }
});

// ------------------ Link Active Work ------------------
const linkWork = document.querySelectorAll('.work_item');

function activeWork(){
  linkWork.forEach(l => l.classList.remove('active-work'))
  this.classList.add('active-work');
}
linkWork.forEach(l => l.addEventListener("click", activeWork));

// ------------------ Work Popup ------------------
document.addEventListener("click", (e) => {
  if(e.target.classList.contains("work_button")){
    togglePortfolioPopup();
    portfolioItemDetails(e.target.parentElement);
  }
})

function togglePortfolioPopup(){
  document.querySelector(".portfolio_popup").classList.toggle("open");
}

document.querySelector(".portfolio_popup-close").addEventListener("click", togglePortfolioPopup)

function portfolioItemDetails(portfolioItem){
  document.querySelector(".pp_thumbnail img").src = portfolioItem.querySelector(".work_img").src;
  document.querySelector(".portfolio_popup-subtitle span").innerHTML = portfolioItem.querySelector(".work_title").innerHTML;
  document.querySelector(".portfolio_popup-body").innerHTML = portfolioItem.querySelector(".portfolio_item-details").innerHTML;
}

// ------------------ Services Modal ------------------
const modalViews = document.querySelectorAll('.services_modal');
const modalBtns = document.querySelectorAll('.services_button');
const modalCloses = document.querySelectorAll('.services_modal-close');

let modal = function(modalClick){
  modalViews[modalClick].classList.add('active-modal');
}
modalBtns.forEach((modalBtn, i) => {
  modalBtn.addEventListener('click', () => {
    modal(i);
  });
})

modalCloses.forEach((modalClose) => {
  modalClose.addEventListener('click', () => {
    modalViews.forEach((modalView) => {
      modalView.classList.remove('active-modal');
    });
  });
})


// ------------------ SWIPER TESTIMONIAL ------------------
let swiper = new Swiper(".testimonial_container", {
  loop: true,
  spaceBetween: 24,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    576: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 48,
    }
  }
});

// ------------------ INPUT ANIMATION ------------------
const inputs = document.querySelectorAll(".input");

function focusFunc(){
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc(){
  let parent = this.parentNode;
  if(this.value == ""){
    parent.classList.remove("focus");
  }
}

inputs.forEach(input => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});


// ------------------ SCROLL SECTIONS ACTIVE LINK ------------------
// get all sections that have an id defined
const sections = document.querySelectorAll("section[id]");

// add an event listener listening for scroll
window.addEventListener("scroll", scrollActive);

function scrollActive() {
  // get current scroll position
  let scrollY = window.pageYOffset;
  // now we loop through sections to get height, top and id values for each
  sections.forEach(current => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 50;
    sectionId = current.getAttribute("id");

    if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
      document.querySelector(".nav_menu a[href*=" + sectionId + "]").classList.add("active-link");
    } else {
      document.querySelector(".nav_menu a[href*=" + sectionId + "]").classList.remove("active-link");
    }
  });
}



// ---------------------------------- LinkedIn Badge Theme Changer ---------------------------------- 

    const checkbox = document.getElementById('checkbox');
    const body = document.body;
    const darkTheme = document.querySelector('.dark-theme');
    const lightTheme = document.querySelector('.light-theme');
    const blackLogo =document.querySelector(".black-logo");
    const whiteLogo =document.querySelector(".white-logo");
    
    // Add transition effect to the divs
    darkTheme.style.transition = 'opacity 1s, max-height 1s cubic-bezier(0.4, 0, 0.2, 1)';
    lightTheme.style.transition = 'opacity 1s, max-height 1s cubic-bezier(0.4, 0, 0.2, 1)';
    
    // Retrieve the checkbox state from localStorage
    const checkboxState = localStorage.getItem('checkboxState');
    if (checkboxState === 'true') {
      checkbox.checked = true;
      body.classList.add('light-mode-enabled');
      lightTheme.style.opacity = '0';
      lightTheme.style.maxHeight = '0';
      darkTheme.style.opacity = '1';
      darkTheme.style.maxHeight = '100vh'; // or any other height value
    } else {
      checkbox.checked = false;
      body.classList.remove('light-mode-enabled');
      darkTheme.style.opacity = '0';
      darkTheme.style.maxHeight = '0';
      lightTheme.style.opacity = '1';
      lightTheme.style.maxHeight = '100vh'; // or any other height value
    }
    
    checkbox.addEventListener('change', () => {
      if (checkbox.checked) {
        body.classList.add('light-mode-enabled');
        lightTheme.style.opacity = '0';
        lightTheme.style.maxHeight = '0';
        darkTheme.style.opacity = '1';
        darkTheme.style.maxHeight = '100vh'; // or any other height value
        localStorage.setItem('checkboxState', 'true');
      } else {
        body.classList.remove('light-mode-enabled');
        darkTheme.style.opacity = '0';
        darkTheme.style.maxHeight = '0';
        lightTheme.style.opacity = '1';
        lightTheme.style.maxHeight = '100vh'; // or any other height value
        localStorage.setItem('checkboxState', 'false');
      }
    });

// ---------------------------------- Logo Theme Changer ---------------------------------- 

// Get the logo elements
const logoContainer = document.querySelector(".nav_logo");
const logoImg = document.querySelector(".nav_logo img");

// Get the checkbox element
const checkBox = document.getElementById('checkbox');

// Add event listener to the checkbox
checkBox.addEventListener('change', () => {
  if (checkBox.checked) {
    // Show white logo with black background
    logoImg.src = 'assets/images/output-onlinepngtools.png'; // replace with the actual file name
    logoContainer.style.backgroundColor = 'black';
  } else {
    // Show black logo with white background
    logoImg.src = 'assets/images/title-logo-removebg-preview.png'; // replace with the actual file name
    logoContainer.style.backgroundColor = 'white';
  }
});



// preloader 
document.addEventListener("DOMContentLoaded", function() {
  document.querySelector(".loader").style.display = "none";
});