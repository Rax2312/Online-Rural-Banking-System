# Loan Management System

A comprehensive loan management system for handling loan applications, payments, and collections.

## Features

- User Management (Admin, Collector, Customer roles)
- Loan Application and Approval
- Payment Collection and Tracking
- Collector Assignment
- Comprehensive Reporting
- Data Export to Excel

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server
- mod_rewrite enabled (for Apache)

## Installation

1. Clone the repository to your web server directory:
   ```bash
   git clone [repository-url]
   cd loan-management-system
   ```

2. Create a MySQL database named 'bank':
   ```sql
   CREATE DATABASE bank;
   ```

3. Import the database schema:
   ```bash
   mysql -u root -p bank < transactions.sql
   ```

4. Configure database connection:
   - Open any PHP file
   - Update database credentials:
     ```php
     $servername = "localhost";
     $username = "your_username";
     $password = "your_password";
     $dbname = "bank";
     ```

5. Run the deployment script:
   ```bash
   sudo php deploy.php
   ```

6. Test the installation:
   ```bash
   php test_connection.php
   ```

## Directory Structure

```
├── admin_dashboard.php
├── assign_collector.php
├── collect_payments.php
├── customer_dashboard.php
├── edit_user.php
├── export_report.php
├── manage_users.php
├── payment_history.php
├── reports.php
├── view_loan.php
├── css/
│   └── style.css
├── logs/
├── uploads/
├── backups/
└── temp/
```

## Security Features

- Role-based access control
- Password hashing
- SQL injection prevention
- XSS protection
- CSRF protection
- Secure file permissions
- HTTPS support

## Usage

1. Access the system through your web browser
2. Log in with appropriate credentials:
   - Admin: Full system access
   - Collector: Payment collection and loan management
   - Customer: Loan details and payment history

## Maintenance

- Regular database backups are stored in the `backups/` directory
- System health can be checked via `health.php`
- Logs are stored in the `logs/` directory

## Support

For any issues or questions, please contact the system administrator.

## License

This project is licensed under the MIT License - see the LICENSE file for details.
