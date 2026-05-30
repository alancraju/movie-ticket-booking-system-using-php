# 🎬 Online Movie Ticket Booking System

A fully functional web application for browsing movies, booking tickets, and processing payments built with **PHP** and **MySQL**.

![PHP Version](https://img.shields.io/badge/PHP-88.8%25-purple)
![MySQL](https://img.shields.io/badge/Database-MySQL-blue)
![License](https://img.shields.io/badge/License-MIT-green)

---

## ✨ Features

- 🎥 **Browse Movies & Events** - View available movies with detailed information
- 🎫 **Seamless Ticket Booking** - Select seats, dates, and showtimes
- 💳 **Multiple Payment Methods** - Credit/Debit card and Bank transfer support
- 👤 **User Authentication** - Secure login and registration system
- 📋 **Booking History** - View previous and current bookings
- 🔍 **Advanced Search** - Filter movies by genre, date, and ratings
- 📞 **Contact Support** - Built-in contact form for customer support
- 📱 **Responsive Design** - Works seamlessly on desktop and mobile

---

## 🚀 Tech Stack

| Technology | Purpose |
|------------|---------|
| **PHP** | Backend Logic & Server-side Processing |
| **MySQL** | Database Management |
| **HTML5/CSS** | Frontend Structure & Styling |
| **JavaScript** | Client-side Interactivity |
| **XAMPP** | Local Development Environment |

---

## 📋 Prerequisites

Before running this project, ensure you have the following installed:

- **XAMPP** (Apache + MySQL + PHP)
  - Download from: https://www.apachefriends.org/download.html
- **PHP 7.4+**
- **MySQL 5.7+**
- **Git** (optional, for cloning)

---

## 🛠️ Installation & Setup

### Step 1: Install XAMPP
1. Download XAMPP from [Apache Friends](https://www.apachefriends.org/download.html)
2. Install it on your system
3. Launch XAMPP Control Panel

### Step 2: Start Services
1. Open **XAMPP Control Panel**
2. Click **Start** for **Apache** and **MySQL** services
   ```
   ✓ Apache - Running on Port 80
   ✓ MySQL - Running on Port 3306
   ```

### Step 3: Clone or Download the Project
```bash
# Using Git
git clone https://github.com/alancraju/movie-ticket-booking-system-using-php.git

# Navigate to XAMPP htdocs folder
cd C:\xampp\htdocs  # Windows
cd /Applications/XAMPP/htdocs  # Mac
cd /opt/lampp/htdocs  # Linux

# Move project folder
mv movie-ticket-booking-system-using-php .
```

### Step 4: Import Database

1. Open **phpMyAdmin** in your browser:
   ```
   http://localhost/phpmyadmin
   ```

2. Create a new database:
   - Click **Databases** → Enter name: `movietheatredb`
   - Click **Create**

3. Import SQL file:
   - Select `movietheatredb` database
   - Click **Import**
   - Choose `movietheatredb.sql` file from project folder
   - Click **Go**

### Step 5: Configure Database Connection

1. Open `config.php` in the project folder
2. Verify/Update database credentials:
   ```php
   $db_host = "localhost";
   $db_user = "root";
   $db_password = "";  // Default is empty for XAMPP
   $db_name = "movietheatredb";
   ```

### Step 6: Access the Application

1. Open your browser and navigate to:
   ```
   http://localhost/movie-ticket-booking-system-using-php
   ```

2. You should see the **Home Page** with available movies

---

## 📊 Workflow & User Journey

### 👥 User Registration & Login Flow

```
┌─────────────────────────────────────────┐
│  User Visit Application                  │
└────────────────┬────────────────────────┘
                 │
        ┌────────▼────────┐
        │  Existing User? │
        └────┬───────┬────┘
            YES     NO
             │       │
             │    ┌──▼──────────────┐
             │    │  Registration   │
             │    │  (registration  │
             │    │   .php)         │
             │    └──┬──────────────┘
             │       │
        ┌────┴───────▼─────┐
        │  User Login Page  │
        │  (login.php)      │
        └────┬──────────────┘
             │
        ┌────▼────────────────┐
        │ Validate Credentials│
        │(process_login.php)  │
        └────┬─────────────┬──┘
        SUCCESS      FAILURE
             │           │
        ┌────▼──┐   ┌─────▼──────┐
        │Dashboard  │  Login Error│
        └─────────┘  └────────────┘
```

### 🎫 Ticket Booking Flow

```
┌──────────────────────────┐
│  Browse Movies           │
│  (index.php /            │
│   movies_events.php)     │
└────────┬─────────────────┘
         │
    ┌────▼──────────────┐
    │  View Movie       │
    │  Details          │
    └────┬──────────────┘
         │
    ┌────▼──────────────┐
    │  Select Movie &   │
    │  Showtime         │
    │  (booking.php)    │
    └────┬──────────────┘
         │
    ┌────▼──────────────┐
    │  Choose Seats     │
    │  & Quantity       │
    │  (form.php)       │
    └────┬──────────────┘
         │
    ┌────▼──────────────────┐
    │  Review Booking       │
    │  (process_booking.php)│
    └────┬──────────────────┘
         │
    ┌────▼──────────────┐
    │  Select Payment   │
    │  Method           │
    │  (bank.php)       │
    └────┬──────────────┘
         │
    ┌────▼──────────────────────┐
    │  Process Payment          │
    │  (complete_payment.php)   │
    └────┬─────────────────────┬┘
    SUCCESS             FAILURE
         │                 │
    ┌────▼────────────┐  ┌─▼──────────┐
    │  Booking        │  │  Payment   │
    │  Confirmed      │  │  Error     │
    │  Ticket Sent    │  └────────────┘
    └─────────────────┘
```

### 💳 Payment Methods

| Method | File | Description |
|--------|------|-------------|
| **Credit/Debit Card** | `bank.php` | Secure card processing |
| **Bank Transfer** | `bank.php` | Direct bank payment |
| **Payment Gateway** | `complete_payment.php` | Transaction completion |

---

## 📁 Project Structure

```
movie-ticket-booking-system-using-php/
├── index.php                    # Home page - Movie listing
├── login.php                    # User login form
├── registration.php             # New user registration form
├── booking.php                  # Movie booking interface
├── form.php                     # Booking details form
├── bank.php                     # Payment gateway selection
├── complete_payment.php         # Payment processing
├── profile.php                  # User profile & booking history
├── about.php                    # About the platform
├── contact.php                  # Contact form
├── header.php                   # Common header component
├── footer.php                   # Common footer component
├── config.php                   # Database configuration
│
├── Process Files/
├── process_login.php            # Handle login validation
├── process_registration.php     # Handle user registration
├── process_booking.php          # Handle booking submission
├── process_payment.php          # Handle payment processing
├── process_search.php           # Handle movie search
├── process_contact.php          # Handle contact form
├── check_login.php              # Session verification
├── logout.php                   # User logout
│
├── Helper Files/
├── movie_sidebar.php            # Movie category sidebar
├── movies_events.php            # Movie listing helper
├── msgbox.php                   # Message display
├── searchbar.php                # Search functionality
│
├── Database/
├── movietheatredb.sql           # Database dump file
│
└── Documentation/
    └── Online Movie Ticket Booking System in php.docx  # Full documentation

```

---

## 💻 Key Files & Functions

### `config.php` - Database Connection
```php
Establishes connection to MySQL database
Sets error handling and character set
```

### `index.php` - Home Page
```php
Displays all available movies
Shows upcoming events
Handles search functionality
```

### `booking.php` - Booking Interface
```php
Movie selection and showtime picker
Seat selection with availability check
Booking details capture
```

### `form.php` - Booking Form
```php
Comprehensive booking form
Passenger details collection
Special requests handling
```

### `bank.php` - Payment Gateway
```php
Multiple payment method options
Card verification
Bank transfer details
```

### `process_booking.php` - Booking Logic
```php
Validates booking details
Calculates total fare
Generates booking reference
Stores in database
```

---

## 🔐 Security Features

- ✅ **SQL Injection Prevention** - Prepared statements & parameterized queries
- ✅ **Session Management** - Secure user session handling
- ✅ **Password Hashing** - Encrypted password storage
- ✅ **Input Validation** - Form validation on client & server side
- ✅ **CSRF Protection** - Token verification for forms

---

## 📱 User Roles

| Role | Permissions | Key Features |
|------|-------------|--------------|
| **Guest** | Browse movies | View movie listings, details |
| **Registered User** | Book tickets | Full booking, payment, history |
| **Admin** | Manage system | (Extendable for future) |

---

## 🧪 Testing Credentials

For testing purposes, you can use:

| Field | Value |
|-------|-------|
| **Email** | test@example.com |
| **Password** | test123 |

*Note: Create these credentials through the registration page first*

---

## 📝 Sample Workflows

### Workflow 1: First-Time User
1. Visit `http://localhost/movie-ticket-booking-system-using-php`
2. Click "Register" → Fill registration form
3. Login with new credentials
4. Browse movies on home page
5. Click on a movie to book
6. Select showtime and seats
7. Enter passenger details
8. Choose payment method
9. Complete payment
10. View confirmation email

### Workflow 2: Existing User
1. Login directly
2. Browse movies
3. Click "Book Now" on preferred movie
4. Complete booking process
5. View booking in profile → booking history

### Workflow 3: Search & Filter
1. Use search bar on home page
2. Filter by movie name, genre, or date
3. View filtered results
4. Click on movie to proceed with booking

---

## 🐛 Troubleshooting

| Issue | Solution |
|-------|----------|
| **Apache/MySQL won't start** | Check if ports 80 & 3306 are available |
| **Database connection error** | Verify credentials in `config.php` |
| **Blank white page** | Check PHP error logs, enable error reporting |
| **Can't access localhost** | Ensure Apache is running in XAMPP |
| **Payment gateway issues** | Verify payment method selection |
| **Session not working** | Ensure cookies are enabled in browser |

---

## 📦 Database Schema

### Main Tables:
- **users** - User accounts and authentication
- **movies** - Movie information and details
- **showtimes** - Movie showtimes and schedules
- **bookings** - User ticket bookings
- **payments** - Payment transaction records
- **seats** - Seat availability and status
- **contact_messages** - Contact form submissions

---

## 🎨 Frontend Features

- Clean and intuitive user interface
- Responsive design for all devices
- Real-time seat availability
- Dynamic booking form
- Confirmation notifications
- Error message handling

---

## ⚙️ Browser Compatibility

| Browser | Support |
|---------|---------|
| Chrome | ✅ Fully Supported |
| Firefox | ✅ Fully Supported |
| Safari | ✅ Fully Supported |
| Edge | ✅ Fully Supported |
| IE 11 | ⚠️ Partial Support |

---

## 📚 API Endpoints Reference

| Endpoint | Method | Purpose |
|----------|--------|---------|
| `/index.php` | GET | Home & movie listing |
| `/login.php` | GET/POST | User login |
| `/registration.php` | GET/POST | User registration |
| `/booking.php` | POST | Movie booking |
| `/bank.php` | POST | Payment selection |
| `/process_booking.php` | POST | Booking processing |
| `/complete_payment.php` | POST | Payment completion |
| `/profile.php` | GET | User profile & history |

---

## 🚀 Performance Optimization Tips

1. **Database Indexing** - Add indexes on frequently queried fields
2. **Caching** - Implement Redis for session caching
3. **Query Optimization** - Use proper joins and limit results
4. **Image Optimization** - Compress movie poster images
5. **Lazy Loading** - Load movie details on demand

---

## 📞 Support & Contact

For issues or suggestions:
- 📧 Email: contact@movietickets.local
- 📋 Use the Contact Form in the application
- 🐛 Report bugs via the contact page

---

## 📄 License

This project is provided as-is for educational purposes.

---

## 👨‍💻 Author

**Alan Craju**
- GitHub: [@alancraju](https://github.com/alancraju)
- Repository: [movie-ticket-booking-system-using-php](https://github.com/alancraju/movie-ticket-booking-system-using-php)

---

## 🔄 Future Enhancements

- [ ] Email notifications for bookings
- [ ] SMS alerts for ticket confirmations
- [ ] Admin dashboard for theater management
- [ ] Real-time chat support
- [ ] Mobile app development
- [ ] Integration with payment gateways (Stripe, PayPal)
- [ ] Refund management system
- [ ] Advanced analytics & reporting

---

## 📊 Project Statistics

- **Total Files**: 30+
- **Main Components**: 12 PHP pages
- **Database Tables**: 7+
- **Languages**: PHP (88.8%), HTML, CSS, JavaScript
- **Lines of Code**: 2000+

---

**Last Updated**: May 2025  
**Version**: 1.0.0

---

*Made with ❤️ for movie lovers*
