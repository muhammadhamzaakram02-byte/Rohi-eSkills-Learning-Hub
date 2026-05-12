<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog | DevSphere Admin</title>

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
                <a href="blog_all.php" class="nav-item">
                    <i class="fas fa-blog"></i>
                    <span>Manage Blogs</span>
                    <span class="nav-badge">142</span>
                </a>
                <a href="add-blog.php" class="nav-item active">
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
                        <h1 class="page-title">Add New Blog</h1>
                        <p class="page-subtitle">Create and publish a new blog post</p>
                    </div>
                    <div class="flex gap-3">
                        <a href="all_blog.php" class="btn btn-secondary">
                            <i class="fas fa-times"></i>
                            Cancel
                        </a>
                        <button type="submit" form="blogForm" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i>
                            Publish Blog
                        </button>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="form-container animate-fade-in stagger-1">
                <form id="blogForm" class="form-card" method="POST" action="blog_action.php" enctype="multipart/form-data">

                    <!-- Featured Image Upload -->
                    <div class="form-group">
                        <label class="form-label">Featured Image</label>
                        <div class="image-upload">
                            <input type="file" id="featuredImage" name="image" accept="image/*">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <div class="image-upload-text">Click to upload featured image</div>
                            <div class="image-upload-hint">PNG, JPG, WEBP up to 5MB</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Blog Title <span>*</span></label>
                            <input type="text" name="title" class="form-input" placeholder="Enter blog title..." required>
                            <div class="form-hint">Keep it under 60 characters for SEO</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Category <span>*</span></label>
                            <select name="category" class="form-select" required>
                                <option value="">Select Category</option>
                                <option value="laravel">Laravel</option>
                                <option value="php">PHP</option>
                                <option value="javascript">JavaScript</option>
                                <option value="css">CSS</option>
                                <option value="vue">Vue.js</option>
                                <option value="react">React</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Short Description <span>*</span></label>
                        <textarea name="excerpt" class="form-textarea" rows="3" placeholder="Write a brief summary..." required></textarea>
                        <div class="form-hint">This appears in blog listings and SEO meta description</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Content <span>*</span></label>
                        <textarea name="content" class="form-textarea" rows="12" placeholder="Write your blog content here... Use markdown for formatting." required></textarea>
                    </div>

                    <div class="divider"></div>

                    <div class="flex justify-end gap-3 mt-8">
                        <a href="blog_all.php" class="btn btn-secondary">Cancel</a>
                        <button type="submit" name="save_draft" class="btn btn-secondary">
                            <i class="fas fa-save"></i>
                            Save Draft
                        </button>
                        <button type="submit" name="publish" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i>
                            Publish Blog
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>