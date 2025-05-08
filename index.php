<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Redirect based on role
switch($_SESSION['role']) {
    case 'admin':
        header("Location: admin_dashboard.php");
        exit();
    case 'collector':
        header("Location: collector_dashboard.php");
        exit();
    // For customer, show main site below
}

include 'includes/header.php';

$user_display = $_SESSION['name'] ?? $_SESSION['username'] ?? 'User';
?>
<link rel="stylesheet" href="css/style.css">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="welcome-card card shadow-lg" style="margin-top: 120px; background-color: #1a1a2e; color: #fff; border: none;">
                <div class="card-body text-center">
                    <h1 class="display-4 mb-3" style="color: #ffff80;">Welcome, <?php echo htmlspecialchars($_SESSION['name'] ?? 'User'); ?>!</h1>
                    <p class="lead">This is your customer dashboard. Here you can view your loans, payments, and more.</p>
                    <a href="search.php" class="btn btn-primary mt-3">Search</a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.welcome-card {
    margin-top: 120px !important;
    background: linear-gradient(135deg, #1a1a2e 80%, #e94560 100%);
    color: #fff;
    border-radius: 20px;
    border: none;
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
}
.welcome-card .btn-primary {
    background: linear-gradient(45deg, #e94560, #ff6b6b);
    border: none;
    color: #fff;
    font-weight: 600;
    border-radius: 30px;
    padding: 0.75rem 2.5rem;
    font-size: 1.2rem;
    transition: all 0.3s ease;
}
.welcome-card .btn-primary:hover {
    background: #d13a52;
    color: #fff;
    transform: translateY(-2px) scale(1.04);
}
</style>
<?php include 'includes/footer.php'; ?>

<?php if(isset($_SESSION['user_id']) && $_SESSION['role'] === 'admin'): ?>
<div class="admin-buttons">
    <a href="manage_users.php" class="admin-button">
        <i class="fas fa-users"></i>
        <span>Manage<br>Users</span>
    </a>
    <a href="loan_approvals.php" class="admin-button">
        <i class="fas fa-file-signature"></i>
        <span>Loan<br>Approvals</span>
    </a>
    <a href="assign_collectors.php" class="admin-button">
        <i class="fas fa-user-tie"></i>
        <span>Assign<br>Collectors</span>
    </a>
    <a href="reports.php" class="admin-button">
        <i class="fas fa-chart-bar"></i>
        <span>View<br>Reports</span>
    </a>
</div>
<?php endif; ?> 