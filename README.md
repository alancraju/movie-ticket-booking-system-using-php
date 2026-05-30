# 🎬 Movie Ticket Booking System

A professional PHP web application for booking movie tickets online with secure authentication, payment processing, and booking management.

## ⚡ Quick Start

### 1. Setup XAMPP
- Download & install XAMPP from [Apache Friends](https://www.apachefriends.org/)
- Start **Apache** and **MySQL** services

### 2. Clone Project
```bash
cd C:\xampp\htdocs  # Windows
git clone https://github.com/alancraju/movie-ticket-booking-system-using-php.git
cd movie-ticket-booking-system-using-php
```

### 3. Create Database
1. Open: `http://localhost/phpmyadmin`
2. Create database: `ticketbooking`
3. Import: `database/movietheatredb.sql`

### 4. Configure Database
Edit `config/config.php`:
```php
$host = "localhost:3308";
$user = "root";
$pass = "";
$db = "ticketbooking";
```

### 5. Run Application
```
http://localhost/movie-ticket-booking-system-using-php/public/
```

## 📁 Folder Structure

```
├── public/              # Frontend pages
│   ├── index.php       # Home page
│   ├── login.php       # Login form
│   ├── registration.php # Register form
│   ├── booking.php     # Book tickets
│   └── profile.php     # Booking history
│
├── config/             # Configuration
│   └── config.php      # DB connection
│
├── includes/           # Shared components
│   ├── header.php
│   ├── footer.php
│   ├── movie_sidebar.php
│   └── msgbox.php
│
├── process/            # Backend logic
│   ├── process_login.php
│   ├── process_booking.php
│   ├── process_payment.php
│   └── cancel.php
│
└── database/           # Database files
    └── movietheatredb.sql
```

## 🎯 How It Works

**User Flow:**
1. Register/Login → Browse Movies → Select Movie → Choose Seats → Make Payment → View Booking

**File Flow:**
- `public/*.php` → Include `config/config.php` → Connect to Database → Include `process/*.php` → Return Result

## ✨ Features

- ✅ User Registration & Authentication
- ✅ Movie Browsing & Search
- ✅ Secure Ticket Booking
- ✅ Multiple Payment Methods
- ✅ Booking History
- ✅ Booking Cancellation

## 🧪 Test Credentials

- **Email:** test@example.com
- **Password:** test123

## 🔧 Configuration

### Update Database Connection
File: `config/config.php`

Check your MySQL port in XAMPP (usually 3306 or 3308)

### Enable Error Reporting
Add to `config/config.php`:
```php
error_reporting(E_ALL);
ini_set('display_errors', 1);
```

## 📝 Database Tables

- **tbl_user** - User accounts
- **tbl_movie** - Movie information
- **tbl_theatre** - Theatre details
- **tbl_screens** - Screen information
- **tbl_shows** - Movie shows
- **tbl_bookings** - User bookings
- **tbl_payments** - Payment records

## 🐛 Troubleshooting

| Problem | Solution |
|---------|----------|
| Blank page | Check `config/config.php` settings |
| Database error | Verify database name is `ticketbooking` |
| 404 error | Use correct URL: `/public/` |
| Login fails | Import database SQL file |
| Can't start Apache | Check if port 80 is in use |

## 📞 Support

For issues, check the [Full README](https://github.com/alancraju/movie-ticket-booking-system-using-php/blob/main/README.md)

---

**Version:** 2.0 | **Status:** ✅ Ready to Use | **License:** MIT
