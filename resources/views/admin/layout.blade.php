<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Dashboard' }} - Your CPA Expert</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <style>
        :root {
            --primary-color: {{ $siteSettings['primary_color'] ?? '#1a237e' }};
            --secondary-color: {{ $siteSettings['secondary_color'] ?? '#303f9f' }};
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @stack('styles')
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Admin Portal</h2>
            </div>
            <nav class="nav-menu">
                <div class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                </div>
                <div class="nav-item">
                    <a href="{{ route('admin.pages.index') }}" class="nav-link {{ request()->routeIs('admin.pages.*') ? 'active' : '' }}">
                        <i class="fas fa-file-alt"></i> Pages
                    </a>
                </div>
                <div class="nav-item">
                    <a href="{{ route('admin.cases.index') }}" class="nav-link {{ request()->routeIs('admin.cases.*') ? 'active' : '' }}">
                        <i class="fas fa-briefcase"></i> Legal/Tax Cases
                    </a>
                </div>
                <div class="nav-item">
                    <a href="{{ route('admin.team.index') }}" class="nav-link {{ request()->routeIs('admin.team.*') ? 'active' : '' }}">
                        <i class="fas fa-users"></i> Our Team
                    </a>
                </div>
                <div class="nav-item">
                    <a href="{{ route('admin.payments.index') }}" class="nav-link {{ request()->routeIs('admin.payments.*') ? 'active' : '' }}">
                        <i class="fas fa-credit-card"></i> Payment Methods
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-envelope"></i> Leads
                    </a>
                </div>
                <div class="nav-item">
                    <a href="{{ route('admin.settings.index') }}" class="nav-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="header-bar">
                <h1>{{ $title ?? 'Dashboard' }}</h1>
                <div class="user-info">
                    <span>Admin</span>
                    <a href="#" class="btn btn-secondary">Logout</a>
                </div>
            </header>

            @yield('content')
        </main>
    </div>
    @stack('scripts')
</body>
</html>
