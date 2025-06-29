# 📦 Inventory Management System (Full-Stack Demo)

A minimal working demo of an Inventory Management System with authentication and role-based access control.

## 🔧 Tech Stack
- **Frontend**: HTML, CSS, Bootstrap
- **Backend**: PHP (Core PHP)
- **Database**: MySQL

## 🔐 Features
- User Login with Roles (Admin/User)
- Role-Based Dashboard:
  - Admin: Add/Delete inventory items
  - User: View-only access
- Session Management & Logout
- Simple and responsive UI

## 📁 Folder Structure
/project-root
├── login.php
├── dashboard.php
├── logout.php
├── db.php
├── add_item.php
├── delete_item.php
├── style.css
└── inventory_db.sql


## 🧠 How It Works
1. Login using sample credentials.
2. PHP checks credentials and sets session.
3. Dashboard displays based on user role.
4. Admin can modify inventory, user can view only.

## 🧪 Sample Credentials
- **Admin**:  
  - Username: `admin`  
  - Password: `admin123`
- **User**:  
  - Username: `user`  
  - Password: `user123`

---

✅ Designed for quick testing and concept demonstration.
