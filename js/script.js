document.addEventListener('DOMContentLoaded', function() {
    const toggleMenu = document.getElementById('mobile-menu');
    const navItems = document.querySelector('.nav-items');
    const bars = document.querySelectorAll('.bar');

    toggleMenu.addEventListener('click', () => {
        toggleMenu.classList.toggle('active');
        navItems.classList.toggle('active');

        // Transform bars into 'X' when active
        if (navItems.classList.contains('active')) {
            bars[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
            bars[1].style.opacity = '0';
            bars[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
        } else {
            bars[0].style.transform = '';
            bars[1].style.opacity = '1';
            bars[2].style.transform = '';
        }
    });
});

// // // Reservation / booking (Form validations)
// // document.addEventListener('DOMContentLoaded', function() {
// //     const form = document.getElementById('signup-form');
// //     const inputFirstName = document.getElementById('first_name');
// //     const inputLastName = document.getElementById('last_name');
// //     const inputEmail = document.getElementById('user_email');
// //     const inputTelephone = document.getElementById('user_tell');
// //     const inputDate = document.getElementById('dates');
// //     const inputTime = document.getElementById('timing');
// //     const inputNumberOfGuests = document.getElementById('number_of_guests');
// //     const inputSpecialRequest = document.getElementById('special_request');
// //     const firstNameError = document.getElementById('first-name-error');
// //     const lastNameError = document.getElementById('last-name-error');
// //     const telephoneError = document.getElementById('telephone-error');
// //     const specialRequestError = document.getElementById('special-request-error');

// //     function validateName(nameInput, errorElement) {
// //         const namePattern = /^[A-Za-z]+$/;
// //         if (!namePattern.test(nameInput.value)) {
// //             errorElement.textContent = 'Name should contain only letters';
// //             return false;
// //         } else {
// //             errorElement.textContent = '';
// //             return true;
// //         }
// //     }

// //     function validateTelephone() {
// //         const value = inputTelephone.value.trim();

// //         const numericPattern = /^\d+$/;
// //         if (!numericPattern.test(value)) {
// //             telephoneError.textContent = 'Only digits are allowed in the telephone field';
// //             return false;
// //         } else {
// //             telephoneError.textContent = '';
// //             return true;
// //         }
// //     }

// //     function validateSpecialRequest() {
// //         const value = inputSpecialRequest.value.trim();

// //         const specialRequestPattern = /.*\D.*/;
// //         if (!specialRequestPattern.test(value)) {
// //             specialRequestError.textContent = 'This must contain at least one non-digit character';
// //             return false;
// //         } else {
// //             specialRequestError.textContent = '';
// //             return true;
// //         }
// //     }

// //     function validateForm(event) {
// //         const isFirstNameValid = validateName(inputFirstName, firstNameError);
// //         const isLastNameValid = validateName(inputLastName, lastNameError);
// //         const isTelephoneValid = validateTelephone();
// //         const isSpecialRequestValid = validateSpecialRequest();

// //         if (!isFirstNameValid || !isLastNameValid || !isTelephoneValid || !isSpecialRequestValid) {
// //             event.preventDefault();
// //         }
// //     }

// //     inputFirstName.addEventListener('input', () => validateName(inputFirstName, firstNameError));
// //     inputLastName.addEventListener('input', () => validateName(inputLastName, lastNameError));
// //     inputTelephone.addEventListener('input', validateTelephone);
// //     inputSpecialRequest.addEventListener('input', validateSpecialRequest);

// //     form.addEventListener('submit', validateForm);
// // });

// // // display real time in the time field input 
// // document.addEventListener('DOMContentLoaded', function() {
// //     const timingInput = document.getElementById('timing');
    
// //     // Get current time in HH:mm format
// //     const now = new Date();
// //     const hours = now.getHours().toString().padStart(2, '0');
// //     const minutes = now.getMinutes().toString().padStart(2, '0');
// //     const currentTime = `${hours}:${minutes}`;
    
// //     // Set input value to current time
// //     timingInput.value = currentTime;
// // });


// // document.addEventListener("DOMContentLoaded", function() {
// //     const searchButton = document.querySelector(".headerSearchBox button");
// //     const searchInput = document.querySelector(".headerSearchBox input");
  
// //     if (searchButton && searchInput) {
// //       // Add click event listener to search button
// //       searchButton.addEventListener("click", function() {
// //         // Toggle the 'active' class on the search input
// //         searchInput.classList.toggle("active");
  
// //         // Set focus on the input when it becomes visible
// //         if (searchInput.classList.contains("active")) {
// //           searchInput.focus();
// //         }
// //       });
// //     }
// //   });


// // //   search box 
// // let searchBtn = document.querySelector('.searchBtn');
// // let closeBtn = document.querySelector('.closeBtn')
// // let searchBox = document.querySelector('.search-box');

// // searchBtn.onclick = function() {
// //     searchBox.classList.add('active')
// //     closeBtn.classList.add('active')
// //     searchBtn.classList.add('active')

// // }

// // closeBtn.onclick = function() {
// //     searchBox.classList.remove('active')
// //     closeBtn.classList.remove('active')
// //     searchBtn.classList.remove('active')
// // }
  
// // // scrypt for hadling the p even and odd 

// // document.addEventListener("DOMContentLoaded", function() {
// //   const paragraphs = document.querySelectorAll('.task-paragraph');
// //   paragraphs.forEach((p, index) => {
// //     if (index % 2 === 0) {
// //       p.classList.add('even');
// //     } else {
// //       p.classList.add('odd');
// //     }
// //   });
// // });

// // // Get modal and button elements
// // const modal = document.getElementById("task1Modal");
// // const btn = document.getElementById("task1Btn");
// // const span = document.getElementsByClassName("close")[0];

// // // When the user clicks the button, open the modal 
// // btn.onclick = () => {
// //   modal.style.display = "block";
// // }

// // // When the user clicks on <span> (x), close the modal
// // span.onclick = () => {
// //   modal.style.display = "none";
// // }

// // // When the user clicks anywhere outside of the modal, close it
// // window.onclick = (event) => {
// //   if (event.target === modal) {
// //     modal.style.display = "none";
// //   }
// // }

// // JavaScript to handle modal open/close
// document.addEventListener('DOMContentLoaded', function() {
//     // Get the modals
//     var modals = document.querySelectorAll('.modal');
//     // Get the buttons that open the modals
//     var btns = document.querySelectorAll('.question-btn');
//     // Get the <span> elements that close the modals
//     var spans = document.querySelectorAll('.close');
  
//     // Function to open modal
//     function openModal(modalId) {
//       document.getElementById(modalId).style.display = 'block';
//     }
  
//     // Function to close modal
//     function closeModal(modalId) {
//       document.getElementById(modalId).style.display = 'none';
//     }
  
//     // Attach click event to each button
//     btns.forEach(function(btn) {
//       btn.addEventListener('click', function() {
//         var modalId = this.id.replace('Btn', 'Modal');
//         openModal(modalId);
//       });
//     });
  
//     // Attach click event to each <span> (close button)
//     spans.forEach(function(span) {
//       span.addEventListener('click', function() {
//         var modalId = this.parentElement.parentElement.id;
//         closeModal(modalId);
//       });
//     });
  
//     // Click outside modal to close
//     window.addEventListener('click', function(event) {
//       if (event.target.classList.contains('modal')) {
//         closeModal(event.target.id);
//       }
//     });
//   });
  

//   // script for slide bar 
//   const sections = document.getElementById('sections');
// const totalSections = 42; // Total number of tasks
// const tasksPerPage = 10; // Number of tasks per row
// let currentPage = 1;

// function renderSections() {
//   sections.innerHTML = '';
//   const start = (currentPage - 1) * tasksPerPage + 1;
//   const end = Math.min(start + tasksPerPage - 1, totalSections);
//   for (let i = start; i <= end; i++) {
//     const link = document.createElement('a');
//     link.href = `#task${i}`;
//     link.textContent = `Task ${i}`;
//     link.addEventListener('click', (event) => {
//       event.preventDefault();
//       document.getElementById(`task${i}`).scrollIntoView({ behavior: 'smooth', block: 'center' });
//     });
//     sections.appendChild(link);
//   }
//   document.getElementById('prev').disabled = currentPage === 1;
//   document.getElementById('next').disabled = end === totalSections;
// }

// function nextPage() {
//   currentPage++;
//   renderSections();
// }

// function prevPage() {
//   currentPage--;
//   renderSections();
// }

// renderSections();

// document.addEventListener('DOMContentLoaded', function() {
//   const toggleMenu = document.getElementById('mobile-menu');
//   const navItems = document.querySelector('.nav-items');
//   const bars = document.querySelectorAll('.bar');

//   toggleMenu.addEventListener('click', () => {
//       toggleMenu.classList.toggle('active');
//       navItems.classList.toggle('active');

//       // Transform bars into 'X' when active
//       if (navItems.classList.contains('active')) {
//           bars[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
//           bars[1].style.opacity = '0';
//           bars[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
//       } else {
//           bars[0].style.transform = '';
//           bars[1].style.opacity = '1';
//           bars[2].style.transform = '';
//       }
//   });

//   // JavaScript to handle modal open/close
//   var modals = document.querySelectorAll('.modal');
//   var btns = document.querySelectorAll('.question-btn');
//   var spans = document.querySelectorAll('.close');

//   function openModal(modalId) {
//       document.getElementById(modalId).style.display = 'block';
//   }

//   function closeModal(modalId) {
//       document.getElementById(modalId).style.display = 'none';
//   }

//   btns.forEach(function(btn) {
//       btn.addEventListener('click', function() {
//           var modalId = this.id.replace('Btn', 'Modal');
//           openModal(modalId);
//       });
//   });

//   spans.forEach(function(span) {
//       span.addEventListener('click', function() {
//           var modalId = this.parentElement.parentElement.id;
//           closeModal(modalId);
//       });
//   });

//   window.addEventListener('click', function(event) {
//       if (event.target.classList.contains('modal')) {
//           closeModal(event.target.id);
//       }
//   });

//   // Script for handling sections 1 to 12 with smooth scrolling
//   const sections = document.getElementById('sections');
//   const totalSections = 12; // Total number of tasks
//   const tasksPerPage = 10; // Number of tasks per row
//   let currentPage = 1;

//   function renderSections() {
//       sections.innerHTML = '';
//       const start = (currentPage - 1) * tasksPerPage + 1;
//       const end = Math.min(start + tasksPerPage - 1, totalSections);
//       for (let i = start; i <= end; i++) {
//           const link = document.createElement('a');
//           link.href = `#task${i}`;
//           link.textContent = `Task ${i}`;
//           link.addEventListener('click', (event) => {
//               event.preventDefault();
//               document.getElementById(`task${i}`).scrollIntoView({ behavior: 'smooth', block: 'center' });
//           });
//           sections.appendChild(link);
//       }
//       document.getElementById('prev').disabled = currentPage === 1;
//       document.getElementById('next').disabled = end === totalSections;
//   }

//   function nextPage() {
//       currentPage++;
//       renderSections();
//   }

//   function prevPage() {
//       currentPage--;
//       renderSections();
//   }

//   // Initialize sections display
//   renderSections();

//   // Attach event listeners to navigation buttons
//   document.getElementById('prev').addEventListener('click', prevPage);
//   document.getElementById('next').addEventListener('click', nextPage);
// });


// function prevPage() {
//     const container = document.querySelector('.scroll-nav');
//     container.scrollBy({
//       left: -container.clientWidth, 
//       behavior: 'smooth' 
//     });
//   }
  
//   function nextPage() {
//     const container = document.querySelector('.scroll-nav');
//     container.scrollBy({
//       left: container.clientWidth, 
//       behavior: 'smooth'
//     });
//   }
  // Modal open/close logic
document.addEventListener('DOMContentLoaded', function () {
    // Get all modals and buttons
    const modals = document.querySelectorAll('.modal');
    const btns = document.querySelectorAll('.question-btn');
    const spans = document.querySelectorAll('.close');

    // Function to open modal
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'block';
    }

    // Function to close modal
    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }

    // Attach click event to each button to open the modal
    btns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const modalId = this.id.replace('Btn', 'Modal');
            openModal(modalId);
        });
    });

    // Attach click event to each <span> to close the modal
    spans.forEach(function (span) {
        span.addEventListener('click', function () {
            const modalId = this.parentElement.parentElement.id;
            closeModal(modalId);
        });
    });

    // Close modal when clicking outside the modal content
    window.addEventListener('click', function (event) {
        if (event.target.classList.contains('modal')) {
            closeModal(event.target.id);
        }
    });
});

// Slide bar script for navigation
const sections = document.getElementById('sections');
const totalSections = 42; // Total number of tasks
const tasksPerPage = 10; // Number of tasks per row
let currentPage = 1;

// Function to render the task links in the slide bar
function renderSections() {
    sections.innerHTML = ''; // Clear previous task links
    const start = (currentPage - 1) * tasksPerPage + 1;
    const end = Math.min(start + tasksPerPage - 1, totalSections);

    // Generate task links for the current page
    for (let i = start; i <= end; i++) {
        const link = document.createElement('a');
        link.href = `#task${i}`;
        link.textContent = `Task ${i}`;
        link.addEventListener('click', (event) => {
            event.preventDefault();
            document.getElementById(`task${i}`).scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
        sections.appendChild(link);
    }

    // Disable/enable navigation buttons based on the page number
    document.querySelector('.scroll-nav-prev').disabled = currentPage === 1;
    document.querySelector('.scroll-nav-next').disabled = end === totalSections;
}

// Function to go to the previous page of tasks
function prevPage() {
    if (currentPage > 1) {
        currentPage--;
        renderSections();
    }
}

// Function to go to the next page of tasks
function nextPage() {
    if (currentPage * tasksPerPage < totalSections) {
        currentPage++;
        renderSections();
    }
}

// Initial render of the slide bar
renderSections();

// **********************************************************************************************
// // here goes js code for go up button
// **********************************************************************************************
// Get the button
const mybutton = document.getElementById("myBtn");

// Show the button when the user scrolls down 20px from the top of the document
window.onscroll = () => {
  document.body.scrollTop > 20 || document.documentElement.scrollTop > 20
    ? mybutton.style.display = "block"
    : mybutton.style.display = "none";
};

// Scroll to the top of the document when the button is clicked
const topFunction = () => {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
};



// // js code for mini page ul li generating 
// document.addEventListener("DOMContentLoaded", function() {
//     // Get the element where dynamic content will be displayed
//     const dynamicContent = document.getElementById("dynamicContent");

//     // Add click event listeners to each menu item
//     document.getElementById("task1-6").addEventListener("click", function(event) {
//         event.preventDefault();
//         displayTasks(1, 6);
//     });

//     document.getElementById("task7-12").addEventListener("click", function(event) {
//         event.preventDefault();
//         displayTasks(7, 12);
//     });

//     document.getElementById("task13-18").addEventListener("click", function(event) {
//         event.preventDefault();
//         displayTasks(13, 18);
//     });

//     document.getElementById("task19-24").addEventListener("click", function(event) {
//         event.preventDefault();
//         displayTasks(19, 24);
//     });

//     document.getElementById("task25-30").addEventListener("click", function(event) {
//         event.preventDefault();
//         displayTasks(25, 30);
//     });

//     document.getElementById("task31-36").addEventListener("click", function(event) {
//         event.preventDefault();
//         displayTasks(31, 36);
//     });

//     document.getElementById("task37-42").addEventListener("click", function(event) {
//         event.preventDefault();
//         displayTasks(37, 42);
//     });

//     // Function to display task buttons for a given range
//     function displayTasks(start, end) {
//         let tasksHTML = "<h3>Tehtävät " + start + " - " + end + "</h3><p>Click the tasks below:</p><div>";
//         for (let i = start; i <= end; i++) {
//             tasksHTML += `<a href="#task${i}" class="question-btn">Task ${i}</a> `;
//         }
//         tasksHTML += "</div>";
//         dynamicContent.innerHTML = tasksHTML;
//     }
// });


document.addEventListener("DOMContentLoaded", function() {
    // Get the element where dynamic content will be displayed
    const dynamicContent = document.getElementById("dynamicContent");

    // Add click event listeners to each menu item
    document.getElementById("task1-6").addEventListener("click", function(event) {
        event.preventDefault();
        displayTasks(1, 6);
    });

    document.getElementById("task7-12").addEventListener("click", function(event) {
        event.preventDefault();
        displayTasks(7, 12);
    });

    document.getElementById("task13-18").addEventListener("click", function(event) {
        event.preventDefault();
        displayTasks(13, 18);
    });

    document.getElementById("task19-24").addEventListener("click", function(event) {
        event.preventDefault();
        displayTasks(19, 24);
    });

    document.getElementById("task25-30").addEventListener("click", function(event) {
        event.preventDefault();
        displayTasks(25, 30);
    });

    document.getElementById("task31-36").addEventListener("click", function(event) {
        event.preventDefault();
        displayTasks(31, 36);
    });

    document.getElementById("task37-42").addEventListener("click", function(event) {
        event.preventDefault();
        displayTasks(37, 42);
    });

    // Function to display task buttons for a given range
    function displayTasks(start, end) {
        let tasksHTML = "<h3>Tehtävät " + start + " - " + end + "</h3><p>Click the tasks below:</p><div>";
        for (let i = start; i <= end; i++) {
            tasksHTML += `<a href="#task${i}" class="question-btn">Task ${i}</a> `;
        }
        tasksHTML += "</div>";
        dynamicContent.innerHTML = tasksHTML;
    }
});


// task 41 and 42
document.addEventListener("DOMContentLoaded", function() {
    // Task 41 show/hide content logic
    const task41Btn = document.getElementById("task41Btn");
    const task41Content = document.getElementById("task41Content");

    task41Btn.addEventListener("click", function() {
        if (task41Content.style.display === "none" || task41Content.style.display === "") {
            task41Content.style.display = "block";
        } else {
            task41Content.style.display = "none";
        }
    });

    // Task 42 show/hide content logic
    const task42Btn = document.getElementById("task42Btn");
    const task42Content = document.getElementById("task42Content");

    task42Btn.addEventListener("click", function() {
        if (task42Content.style.display === "none" || task42Content.style.display === "") {
            task42Content.style.display = "block";
        } else {
            task42Content.style.display = "none";
        }
    });
});