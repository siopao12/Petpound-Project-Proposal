<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paw's Doctor Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid px-3">
        <!-- Hamburger Icon -->
        <button class="navbar-toggler" type="button" id="toggleSidebar" aria-label="Toggle Sidebar">
            <i class="bi bi-list"></i>
        </button>
        <!-- Logo and Brand -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="image/logo.png" alt="Logo" class="me-2" width="30" height="30">
            <span class="d-none d-sm-inline">PAW'S DOCTOR</span>
        </a>
        <!-- Right Section -->
        <div class="d-flex align-items-center ms-auto">
            <!-- Notification Icon -->
            <div class="dropdown me-2">
                <a href="#" class="text-decoration-none position-relative" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-bell notification-icon"></i>
                    <span class="notification-badge">3</span> <!-- Badge for unread notifications -->
                </a>
                <div class="dropdown-menu dropdown-menu-end notification-menu" aria-labelledby="notificationDropdown">
                    <h6 class="dropdown-header">Notifications</h6>
                    <div class="notification-item">
                        <p><strong>Fluffy</strong> has an upcoming vaccination on Dec 25, 2024.</p>
                        <small>10 minutes ago</small>
                    </div>
                    <div class="notification-item">
                        <p><strong>Snowball</strong> has an appointment for a check-up on Dec 10, 2024.</p>
                        <small>30 minutes ago</small>
                    </div>
                    <div class="notification-item">
                        <p>New clinic updates are available. Check them out!</p>
                        <small>1 hour ago</small>
                    </div>
                    <div class="text-center mt-2">
                        <a href="#" class="btn btn-sm btn-link">See all notifications</a>
                    </div>
                </div>
            </div>
            <!-- User Dropdown -->
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="image/profile.jpg" alt="Profile Picture" class="profile-image me-2" width="30" height="30">
                    <span class="fw-bold text-dark d-none d-md-inline">Gerald Seprado</span>
                    <i class="bi bi-chevron-down ms-1"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end profile-dropdown" aria-labelledby="profileDropdown">
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-person-circle me-2"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-gear me-2"></i> Settings
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


    <!-- Sidebar -->
    <div id="sidebar" class="sidebar collapsed p-0">
    <ul>
        <li><a href="#"><i class="fas fa-house text-success"></i><span>Dashboard</span></a></li>
        <li><a href="#"><i class="fas fa-paw text-success"></i><span>My Pets</span></a></li>
        <li><a href="#"><i class="fas fa-calendar-alt text-success"></i><span>Appointments</span></a></li>
        <li><a href="#"><i class="fas fa-heart text-success"></i><span>Services</span></a></li>
        <li><a href="#"><i class="fas fa-cog text-success"></i><span>Settings</span></a></li>
    </ul>
</div>


   <!-- Main Content -->
<div id="mainContent" class="main-content container-fluid g-0">
    <div class="container-fluid">
        <h1 class="text-center text-md-start mt-5 mt-md-3">Welcome to Paw's Doctor Dashboard</h1>
        <p class="text-center text-md-start">Manage your appointments, services, and more from here.</p>

        <!-- My Pets Section -->
        <div class="row my-4">
            <div class="col-12">
                <div class="my-pets-section">
                    <h4 class="section-title text-center text-md-start">MY PETS</h4>
                    <div class="pet-carousel-container d-flex flex-column align-items-center">
                        <!-- Carousel Controls -->
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <button class="carousel-control-prev btn btn-outline-secondary" id="prevPet">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <div class="pet-carousel overflow-hidden flex-grow-1">
                                <div class="pet-carousel-items d-flex justify-content-start" id="petsContainer">
                                    <!-- Individual Pet Cards -->
                                    <div class="pet-card">
                                        <img src="image/pet.jpg" alt="Blacky">
                                        <p>Blacky</p>
                                        <button class="btn btn-success btn-sm mt-2">View Details</button>
                                    </div>
                                    <div class="pet-card">
                                        <img src="image/pet.jpg" alt="Blacky">
                                        <p>Blacky</p>
                                        <button class="btn btn-success btn-sm mt-2">View Details</button>
                                    </div>
                                    <div class="pet-card">
                                        <img src="image/pet.jpg" alt="Blacky">
                                        <p>Blacky</p>
                                        <button class="btn btn-success btn-sm mt-2">View Details</button>
                                    </div>
                                    <div class="pet-card">
                                        <img src="image/pet.jpg" alt="Blacky">
                                        <p>Blacky</p>
                                        <button class="btn btn-success btn-sm mt-2">View Details</button>
                                    </div>
                                    <div class="pet-card">
                                        <img src="image/pet.jpg" alt="Blacky">
                                        <p>Blacky</p>
                                        <button class="btn btn-success btn-sm mt-2">View Details</button>
                                    </div>
                                    <div class="pet-card">
                                        <img src="image/pet.jpg" alt="Blacky">
                                        <p>Blacky</p>
                                        <button class="btn btn-success btn-sm mt-2">View Details</button>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-next btn btn-outline-secondary" id="nextPet">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Calendar Section -->
        <div class="row">
            <!-- Upcoming Appointments -->
            <div class="col-lg-8 col-12 mb-4">
                <h4 class="section-title">Upcoming Appointments</h4>
                <div id="calendar"></div>
            </div>

            <!-- Quick Actions and Side Widgets -->
            <div class="col-lg-4 col-12">
                <!-- Quick Actions -->
                <div class="quick-actions mb-4">
                    <h4 class="section-title">Quick Actions</h4>
                    <button class="btn btn-success w-100 mb-2">+ Add Pets</button>
                    <button class="btn btn-primary w-100 mb-2">Appointment</button>
                    <button class="btn btn-info w-100 mb-2">Find Clinic</button>
                    <button class="btn btn-warning w-100">Inquiries</button>
                </div>

                <!-- Recent Invoices -->
                <div class="recent-invoices mb-4">
                    <h4 class="section-title">Recent Invoices</h4>
                    <ul class="list-unstyled">
                        <li>Invoice: #00125 - Paid</li>
                        <li>Invoice: #00241 - Paid</li>
                        <li>Invoice: #00242 - Paid</li>
                    </ul>
                </div>

                <!-- Pet Health Overview -->
                <div class="pet-health-overview">
                    <h4 class="section-title">Pet Health Overview</h4>
                    <ul class="list-unstyled">
                        <li>Fluffy: Vaccination due on Dec 25, 2024</li>
                        <li>Snowball: Vaccination due on Dec 25, 2024</li>
                        <li>Snowie: Vaccination due on Dec 25, 2024</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Bootstrap and FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script>

// Sidebar Toggle
const sidebar = document.getElementById('sidebar');
const toggleSidebarButton = document.getElementById('toggleSidebar');

toggleSidebarButton.addEventListener('click', () => {
    if (window.innerWidth < 768) {
        // Mobile: Toggle 'show' class for sliding in/out
        sidebar.classList.toggle('show');
        // Update aria-expanded for accessibility
        toggleSidebarButton.setAttribute(
            'aria-expanded',
            sidebar.classList.contains('show')
        );
    } else {
        // Desktop: Toggle 'collapsed' class for collapsing/expanding
        sidebar.classList.toggle('collapsed');
        // Ensure 'show' class is removed to prevent conflict
        sidebar.classList.remove('show');
    }
});

// Handle viewport resizing
window.addEventListener('resize', () => {
    if (window.innerWidth >= 768 && sidebar.classList.contains('show')) {
        // Remove 'show' class for mobile when switching to desktop
        sidebar.classList.remove('show');
    } else if (window.innerWidth < 768 && sidebar.classList.contains('collapsed')) {
        // Remove 'collapsed' class for desktop when switching to mobile
        sidebar.classList.remove('collapsed');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,today' // Default for large screens
        },
        buttonText: {
            dayGridMonth: 'Month',
            timeGridWeek: 'Week',
            timeGridDay: 'Day',
        },
        themeSystem: 'bootstrap',
        events: [
            { title: 'Vaccination - Fluffy', start: '2024-12-25T10:00:00' }, // 10 AM
            { title: 'Check-up - Snowball', start: '2024-12-10T15:00:00' }  // 3 PM
        ],
        eventTimeFormat: { // Customize the time display
            hour: '2-digit',
            minute: '2-digit',
            meridiem: true
        }
    });

    // Adjust buttons for smaller screens
    if (window.innerWidth <= 768) { // Bootstrap's md breakpoint
        calendar.setOption('headerToolbar', {
            left: 'prev,next',
            center: 'title',
            right: '' // Hide buttons on mobile
        });
    }

    calendar.render();
});



        document.addEventListener('DOMContentLoaded', function () {
    const petsContainer = document.getElementById('petsContainer');
    const prevBtn = document.getElementById('prevPet');
    const nextBtn = document.getElementById('nextPet');

    // Track the scroll position
    let scrollAmount = 0;

    // Width of one card including margin
    const cardWidth = petsContainer.querySelector('.pet-card').offsetWidth + 20; // Adjust for card margin

    // Previous Button Event
    prevBtn.addEventListener('click', () => {
        scrollAmount -= cardWidth;
        if (scrollAmount < 0) scrollAmount = 0; // Prevent scrolling beyond the start
        petsContainer.style.transform = `translateX(-${scrollAmount}px)`;
    });

    // Next Button Event
    nextBtn.addEventListener('click', () => {
        const maxScroll = petsContainer.scrollWidth - petsContainer.offsetWidth; // Max scroll limit
        scrollAmount += cardWidth;
        if (scrollAmount > maxScroll) scrollAmount = maxScroll; // Prevent scrolling beyond the end
        petsContainer.style.transform = `translateX(-${scrollAmount}px)`;
    });
});

    </script>
</body>
</html>
