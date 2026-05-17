# CSRF and XSS Protection using CodeIgniter 4

## Overview
This project is a Security Lab activity developed using the CodeIgniter 4 MVC framework. The main objective of the project is to demonstrate how web applications can be protected against common web vulnerabilities such as Cross-Site Request Forgery (CSRF) and Cross-Site Scripting (XSS).

The system contains a simple form where users can securely submit input data. CSRF protection is enabled using CodeIgniter 4 security filters, while XSS protection is implemented by escaping user input before displaying it on the page.

---

# Features

- CSRF Protection Enabled
- CSRF Token Validation
- XSS Prevention using `esc()`
- Secure Form Submission

---

# Technologies Used

- PHP
- CodeIgniter 4
- HTML/CSS
- XAMPP
- Composer

---

# Project Structure

```txt
app/
public/
writable/
vendor/
.env
spark
composer.json
composer.lock
README.md
```

---

# Security Features Implemented

## Task 1. Enable CSRF Protection

CSRF protection was enabled inside:

```php
app/Config/Filters.php
```

```php
'csrf',
```

This ensures that every POST request contains a valid CSRF token before processing the request.

---

## Task 2. Add CSRF Token to Form

A CSRF token was added inside the HTML form using:

```php
<?= csrf_field() ?>
```

This automatically generates a hidden security token field that is validated during form submission.

---

## Task 3. XSS Protection

User input was escaped using:

```php
<?= esc($name) ?>
```

This prevents malicious JavaScript or HTML code from executing in the browser.

---

# Testing Performed

## CSRF Testing

The CSRF token was temporarily removed from the form to test the security feature. Upon submitting the form without the token, the application blocked the request and returned an error, confirming that CSRF protection was functioning properly.

## XSS Testing

The following malicious script was tested:

```html
<script>alert('Hacked')</script>
```

The script was displayed as plain text instead of executing in the browser, proving that the XSS protection using `esc()` was successfully implemented.

---

# How to Run the Project

1. Install XAMPP
2. Install Composer
3. Download or clone the repository
4. Place the project folder inside:

```txt
C:\xampp\htdocs
```

5. Open terminal and run:

```bash
php spark serve
```

6. Open browser and visit:

```txt
http://localhost/securitylab/public/
```

---

# Student Information

**Name:** April Nicole Custorio  
**Course & Section:** BSIT 3.2  

---

# Instructor

**Prof. Edward James V. Grageda**
