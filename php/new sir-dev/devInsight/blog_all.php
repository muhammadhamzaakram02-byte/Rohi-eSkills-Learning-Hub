<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Blogs | DevSphere Admin</title>

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
        <a href="admin_dashboard.php" class="nav-item">
          <i class="fas fa-chart-pie"></i>
          <span>Dashboard</span>
        </a>
        <a href="blog_all.php" class="nav-item active">
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
        <div class="flex items-center justify-between">
          <div>
            <h1 class="page-title">All Blogs</h1>
            <p class="page-subtitle">Manage and organize your blog posts</p>
          </div>
          <a href="add-blog.php" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Add New Blog
          </a>
        </div>
      </div>

      <!-- Filter Bar -->
      <div class="filter-bar animate-fade-in stagger-1">
        <div class="search-box">
          <i class="fas fa-search"></i>
          <input type="text" placeholder="Search blogs...">
        </div>
        <select class="filter-select">
          <option>All Categories</option>
          <option>Laravel</option>
          <option>PHP</option>
          <option>JavaScript</option>
          <option>CSS</option>
        </select>
        <select class="filter-select">
          <option>All Status</option>
          <option>Published</option>
          <option>Draft</option>
        </select>
        <select class="filter-select">
          <option>Sort by: Newest</option>
          <option>Sort by: Oldest</option>
          <option>Sort by: Popular</option>
        </select>
      </div>

      <!-- Table -->
      <div class="table-container animate-fade-in stagger-2">
        <table class="data-table">
          <thead>
            <tr>
              <th width="50">ID</th>
              <th>Blog</th>
              <th>Category</th>
              <th>Author</th>
              <th>Status</th>
              <th>Date</th>
              <th>Views</th>
              <th width="120" class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Your PHP code to fetch blog data from the database
            $database = mysqli_connect("localhost", "root", "", "database1");
            $data = mysqli_query($database, "SELECT * FROM blog order by id desc");
            while ($row = mysqli_fetch_array($data)) {
              ?>
              <tr>
                <td class="font-mono text-gray-500"><?php echo $row['id']; ?></td>
                <td>
                  <div class="blog-title-cell">
                    <div class="blog-thumb">
                      <i class="fab fa-css3-alt"></i>
                    </div>
                    <div class="blog-info">
                      <span class="blog-name"><?php echo $row['title']; ?></span>
                      <span class="blog-excerpt"><?php echo $row['short_description']; ?></span>
                    </div>
                  </div>
                </td>
                <td><span class="category-badge css"><?php echo $row['category']; ?></span></td>
                <td>
                  <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded-full bg-indigo-500 flex items-center justify-center text-xs font-bold">J
                    </div>
                    <span class="text-sm">John Doe</span>
                  </div>
                </td>
                <td>
                  <span class="status-badge published">
                    <span class="status-dot published"></span>
                    Published
                  </span>
                </td>
                <td><?php echo $row['time']; ?></td>
                <td class="font-semibold">12.4K</td> 
                <td>
                  <div class="action-btns justify-center">
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
            <?php } ?>
            <!-- kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk row haaaaaaaaaaaaa -->
          </tbody>
        </table>

        <!-- Pagination -->
        <div class="pagination">
          <button class="page-btn" disabled>
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="page-btn active">1</button>
          <button class="page-btn">2</button>
          <button class="page-btn">3</button>
          <span class="text-gray-500 px-2">...</span>
          <button class="page-btn">14</button>
          <button class="page-btn">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

</body>

</html>