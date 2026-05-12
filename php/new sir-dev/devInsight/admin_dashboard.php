<?php
session_start();
if (isset($_SESSION["user_found"])) {
  $msg = $_SESSION["user_found"];
  unset($_SESSION["user_found"]);
} else {
  $msg = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | DevSphere Admin</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="./style.css">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            dark: '#0B0F19',
            card: '#111827',
          }
        }
      }
    }
  </script>
</head>

<body class="bg-[#0B0F19] text-white antialiased">

  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-brand">
      <a href="#" class="brand-logo">
        <div class="brand-icon">
          <i class="fas fa-code"></i>
        </div>
        <span class="brand-text">DevSphere</span>
      </a>
    </div>

    <nav class="sidebar-nav">
      <div class="nav-section">
        <div class="nav-label">Main Menu</div>
        <a href="admin_dashboard.php" class="nav-item active">
          <i class="fas fa-chart-pie"></i>
          <span>Dashboard</span>
        </a>
        <a href="blog_all.php" class="nav-item">
          <i class="fas fa-blog"></i>
          <span>Manage Blogs</span>
          <span class="nav-badge">142</span>
        </a>
        <a href="add-blog.php" class="nav-item">
          <i class="fas fa-plus-circle"></i>
          <span>Add Blog</span>
        </a>
      </div>

      <div class="nav-section">
        <div class="nav-label">Content</div>
        <a href="#" class="nav-item">
          <i class="fas fa-folder"></i>
          <span>Categories</span>
        </a>
        <a href="#" class="nav-item">
          <i class="fas fa-tags"></i>
          <span>Tags</span>
        </a>
        <a href="#" class="nav-item">
          <i class="fas fa-images"></i>
          <span>Media Library</span>
        </a>
      </div>

      <div class="nav-section">
        <div class="nav-label">System</div>
        <a href="#" class="nav-item">
          <i class="fas fa-users"></i>
          <span>Users</span>
        </a>
        <a href="#" class="nav-item">
          <i class="fas fa-cog"></i>
          <span>Settings</span>
        </a>
      </div>
    </nav>

    <div class="sidebar-footer">
      <div class="user-profile">
        <div class="user-avatar">A</div>
        <div class="user-info">
          <div class="user-name">Admin User</div>
          <div class="user-role">Super Admin</div>
        </div>
        <a href="#" class="text-gray-400 hover:text-white transition-colors">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </div>
    </div>
  </aside>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Top Header -->
    <header class="top-header">

      <div class="header-search">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Search blogs, categories...">
      </div>
      <?php if ($msg) {
        echo "<span class='text-green-500'>$msg</span><br>";
      } ?>


      <div class="header-actions">
        <button class="header-btn">
          <i class="fas fa-bell"></i>
          <span class="notification-dot"></span>
        </button>
        <button class="header-btn">
          <i class="fas fa-envelope"></i>
        </button>
        <button class="header-btn">
          <i class="fas fa-moon"></i>
        </button>
      </div>
    </header>

    <!-- Content -->
    <div class="content-wrapper">
      <div class="page-header animate-fade-in">
        <h1 class="page-title">Dashboard Overview</h1>



        <p class="page-subtitle">Welcome back! Here's what's happening with your blog.</p>
      </div>

      <!-- Stats Grid -->
      <div class="stats-grid">
        <div class="stat-card animate-fade-in stagger-1">
          <div class="stat-icon purple">
            <i class="fas fa-newspaper"></i>
          </div>
          <div class="stat-label">Total Blogs</div>
          <div class="stat-value">142</div>
          <div class="stat-change positive">
            <i class="fas fa-arrow-up"></i>
            <span>+12 this month</span>
          </div>
        </div>

        <div class="stat-card animate-fade-in stagger-2">
          <div class="stat-icon blue">
            <i class="fas fa-eye"></i>
          </div>
          <div class="stat-label">Total Views</div>
          <div class="stat-value">248K</div>
          <div class="stat-change positive">
            <i class="fas fa-arrow-up"></i>
            <span>+18.5% vs last month</span>
          </div>
        </div>

        <div class="stat-card animate-fade-in stagger-3">
          <div class="stat-icon green">
            <i class="fas fa-users"></i>
          </div>
          <div class="stat-label">Total Readers</div>
          <div class="stat-value">10.2K</div>
          <div class="stat-change positive">
            <i class="fas fa-arrow-up"></i>
            <span>+256 new this week</span>
          </div>
        </div>

        <div class="stat-card animate-fade-in stagger-4">
          <div class="stat-icon orange">
            <i class="fas fa-comments"></i>
          </div>
          <div class="stat-label">Comments</div>
          <div class="stat-value">1,892</div>
          <div class="stat-change positive">
            <i class="fas fa-arrow-up"></i>
            <span>+89 pending approval</span>
          </div>
        </div>
      </div>

      <!-- Recent Blogs Table -->
      <div class="table-container animate-fade-in">
        <div class="table-header">
          <h3 class="table-title">Recent Blogs</h3>
          <a href="all_blog.php" class="btn btn-secondary">
            View All <i class="fas fa-arrow-right"></i>
          </a>
        </div>

        <table class="data-table">
          <thead>
            <tr>
              <th>Blog</th>
              <th>Category</th>
              <th>Status</th>
              <th>Date</th>
              <th>Views</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="blog-title-cell">
                  <div class="blog-thumb">
                    <i class="fab fa-css3-alt"></i>
                  </div>
                  <div class="blog-info">
                    <span class="blog-name">CSS 2026 Features You Need to Know</span>
                    <span class="blog-excerpt">Modern CSS capabilities and new properties...</span>
                  </div>
                </div>
              </td>
              <td><span class="category-badge css">CSS</span></td>
              <td>
                <span class="status-badge published">
                  <span class="status-dot published"></span>
                  Published
                </span>
              </td>
              <td>May 5, 2026</td>
              <td>12.4K</td>
              <td>
                <div class="action-btns">
                  <button class="btn-icon view" title="View">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn-icon edit" title="Edit">
                    <i class="fas fa-pen"></i>
                  </button>
                  <button class="btn-icon delete" title="Delete">
                    <i class="fas fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="blog-title-cell">
                  <div class="blog-thumb">
                    <i class="fab fa-laravel"></i>
                  </div>
                  <div class="blog-info">
                    <span class="blog-name">Laravel 12 New Features</span>
                    <span class="blog-excerpt">Exploring the latest Laravel updates...</span>
                  </div>
                </div>
              </td>
              <td><span class="category-badge laravel">Laravel</span></td>
              <td>
                <span class="status-badge published">
                  <span class="status-dot published"></span>
                  Published
                </span>
              </td>
              <td>May 3, 2026</td>
              <td>8.7K</td>
              <td>
                <div class="action-btns">
                  <button class="btn-icon view" title="View">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn-icon edit" title="Edit">
                    <i class="fas fa-pen"></i>
                  </button>
                  <button class="btn-icon delete" title="Delete">
                    <i class="fas fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="blog-title-cell">
                  <div class="blog-thumb">
                    <i class="fab fa-js"></i>
                  </div>
                  <div class="blog-info">
                    <span class="blog-name">Advanced JavaScript Patterns</span>
                    <span class="blog-excerpt">Design patterns for modern JS apps...</span>
                  </div>
                </div>
              </td>
              <td><span class="category-badge javascript">JavaScript</span></td>
              <td>
                <span class="status-badge draft">
                  <span class="status-dot draft"></span>
                  Draft
                </span>
              </td>
              <td>Apr 28, 2026</td>
              <td>-</td>
              <td>
                <div class="action-btns">
                  <button class="btn-icon view" title="View">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn-icon edit" title="Edit">
                    <i class="fas fa-pen"></i>
                  </button>
                  <button class="btn-icon delete" title="Delete">
                    <i class="fas fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>

</html>