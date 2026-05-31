# Blood Bank Management System

## Project Overview

The Blood Bank Management System is a web-based application developed to efficiently manage blood donation, blood inventory, patient requests, and staff operations. The system provides a centralized platform for maintaining donor records, tracking blood availability, processing blood requests, and managing blood bank activities.

This project was developed as part of the Database Management Systems (EGB1221) course at M. Kumarasamy College of Engineering.

---

## Features

### Donor Management
- Register new blood donors
- Maintain donor information
- Track donor blood groups
- View donor records

### Patient Management
- Register patient details
- Manage blood requirements
- Search for compatible blood groups

### Blood Inventory Management
- Monitor available blood units
- Track blood group availability
- Manage blood expiry dates
- Reduce blood wastage

### Request Management
- Submit blood requests
- Approve or reject requests
- Track request status

### Staff Management
- Store staff information
- Manage staff responsibilities
- Maintain staff records

---

## Technology Stack

| Technology | Purpose |
|------------|----------|
| PHP | Backend Development |
| MySQL | Database Management |
| HTML | Web Page Structure |
| CSS | User Interface Design |
| XAMPP | Local Server Environment |

---

## System Modules

1. Donor Management Module
2. Patient Management Module
3. Blood Inventory Module
4. Request Access Module
5. Staff Management Module

---

## Project Architecture

User Registration/Login
↓
Donor & Patient Registration
↓
Blood Inventory Management
↓
Request Processing
↓
Staff Management
↓
Admin Dashboard

---

## Database Tables

- Donor
- Patient
- Blood Inventory
- Staff
- Request Access

---

## Installation Guide

### Step 1: Clone Repository

```bash
git clone https://github.com/your-username/Blood-Bank-Management-System.git
```

### Step 2: Move Project

Copy the project folder into:

```text
xampp/htdocs/
```

### Step 3: Create Database

Open phpMyAdmin and create:

```sql
CREATE DATABASE blood_bank;
```

### Step 4: Import Database

Import the SQL file:

```text
sql/blood_bank.sql
```

### Step 5: Start Server

Start:

- Apache
- MySQL

using XAMPP Control Panel.

### Step 6: Run Application

Open:

```text
http://localhost/Blood-Bank-Management-System
```

---

## Advantages

- Easy blood donor management
- Quick blood availability search
- Reduced manual errors
- Efficient inventory tracking
- Improved data accuracy
- Better administrative control

---

## Future Enhancements

- SMS Notifications
- Email Alerts
- Blood Donation History Tracking
- Role-Based Access Control
- Mobile Application Integration
- Emergency Blood Request Alerts

---

## Screenshots

- Login Page
- Registration Page
- Donor List Page
- Admin Dashboard
- Home Page

---

## Academic Information

**Course:** EGB1221 – Database Management Systems

**Institution:** M. Kumarasamy College of Engineering

**Department:** Electronics and Communication Engineering

**Academic Year:** 2024–2025

---

## Authors

- Logith Kishore G
- Jeeva B

---

## License

This project is developed for educational and academic purposes only.

---

## Conclusion

The Blood Bank Management System provides an effective solution for managing blood donation and distribution activities. By automating donor registration, inventory management, patient requests, and staff operations, the system improves efficiency, accuracy, and accessibility while ensuring timely blood availability during emergencies.
