<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="<?= base_url('assets/backend/dl') ?>/images/favicon.png">
    <!-- Page Title  -->
    <title>Admin Home</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/dl') ?>/assets/css/dashlite.css?ver=3.0.2">
    <link id="skin-default" rel="stylesheet" href="<?= base_url('assets/backend/dl') ?>/assets/css/theme.css?ver=3.0.2">
</head>

<body class="nk-body npc-default has-apps-sidebar has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-apps-sidebar is-dark">
            <div class="nk-apps-brand">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img" src="<?= base_url('assets/backend/dl') ?>/images/logo-small.png" srcset="<?= base_url('assets/backend/dl') ?>/images/logo-small2x.png 2x" alt="logo">
                    <img class="logo-dark logo-img" src="<?= base_url('assets/backend/dl') ?>/images/logo-dark-small.png" srcset="<?= base_url('assets/backend/dl') ?>/images/logo-dark-small2x.png 2x" alt="logo-dark">
                </a>
            </div>
            <div class="nk-sidebar-element">
                <div class="nk-sidebar-body">
                    <div class="nk-sidebar-content" data-simplebar>
                        <div class="nk-sidebar-menu">
                            <!-- Menu -->
                            <ul class="nk-menu apps-menu">
                                <li class="nk-menu-item">
                                    <a href="html/cms/index.html" class="nk-menu-link" title="CMS Panel">
                                        <span class="nk-menu-icon"><em class="icon ni ni-template"></em></span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-hr"></li>
                                <li class="nk-menu-item">
                                    <a href="html/index.html" class="nk-menu-link" title="Analytics Dashboard">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="html/index-sales.html" class="nk-menu-link" title="Sales Dashboard">
                                        <span class="nk-menu-icon"><em class="icon ni ni-speed"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="html/index-crypto.html" class="nk-menu-link" title="Crypto Dashboard">
                                        <span class="nk-menu-icon"><em class="icon ni ni-bitcoin-cash"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="html/index-invest.html" class="nk-menu-link" title="Invest Dashboard">
                                        <span class="nk-menu-icon"><em class="icon ni ni-invest"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-hr"></li>
                                <li class="nk-menu-item">
                                    <a href="html/apps/mailbox.html" class="nk-menu-link" title="Mailbox">
                                        <span class="nk-menu-icon"><em class="icon ni ni-inbox"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="html/apps/messages.html" class="nk-menu-link" title="Messages">
                                        <span class="nk-menu-icon"><em class="icon ni ni-chat"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="html/apps/file-manager.html" class="nk-menu-link" title="File Manager">
                                        <span class="nk-menu-icon"><em class="icon ni ni-folder"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="html/apps/chats.html" class="nk-menu-link" title="Chats">
                                        <span class="nk-menu-icon"><em class="icon ni ni-chat-circle"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="html/apps/calendar.html" class="nk-menu-link" title="Calendar">
                                        <span class="nk-menu-icon"><em class="icon ni ni-calendar"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="html/apps/kanban.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-template"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-hr"></li>
                                <li class="nk-menu-item">
                                    <a href="html/components.html" class="nk-menu-link" title="Go to Components">
                                        <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-sidebar-footer">
                            <ul class="nk-menu nk-menu-md">
                                <li class="nk-menu-item">
                                    <a href="#" class="nk-menu-link" title="Settings">
                                        <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nk-sidebar-profile nk-sidebar-profile-fixed dropdown">
                        <a href="#" class="toggle" data-target="profileDD">
                            <div class="user-avatar">
                                <span>AB</span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md m-1 nk-sidebar-profile-dropdown" data-content="profileDD">
                            <div class="dropdown-inner user-card-wrap d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                        <span class="sub-text text-soft">info@softnio.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                    <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-app-name">
                                <div class="nk-header-app-logo">
                                    <em class="icon ni ni-dashlite bg-purple-dim"></em>
                                </div>
                                <div class="nk-header-app-info">
                                    <span class="sub-text">DashLite</span>
                                    <span class="lead-text">Dashboard</span>
                                </div>
                            </div>
                            <div class="nk-header-menu is-light">
                                <div class="nk-header-menu-inner">
                                    <!-- Menu -->
                                    <ul class="nk-menu nk-menu-main">
                                        <li class="nk-menu-item">
                                            <a href="html/index.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Overview</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/components.html" class="nk-menu-link">
                                                <span class="nk-menu-text">Components</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Use-Case Panel</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="/demo2/ecommerce/index.html" class="nk-menu-link"><span class="nk-menu-text">eCommerce Panel</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="/demo3/apps/file-manager.html" class="nk-menu-link"><span class="nk-menu-text">File Manangement Panel</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="/demo4/subscription/index.html" class="nk-menu-link"><span class="nk-menu-text">Subscription Panel</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="/demo5/crypto/index.html" class="nk-menu-link"><span class="nk-menu-text">Crypto Buy Sell Panel</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="/demo6/invest/index.html" class="nk-menu-link"><span class="nk-menu-text">HYIP Investment Panel</span></a>
                                                </li>
                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->
                                    </ul>
                                    <!-- Menu -->
                                </div>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown hide-mb-sm">
                                        <a data-bs-toggle="modal" href="#region" class="nk-quick-nav-icon"><em class="icon ni ni-globe"></em></a>
                                    </li>
                                    <li class="dropdown chats-dropdown hide-mb-sm">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-na"><em class="icon ni ni-comments"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Recent Chats</span>
                                                <a href="#">Setting</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <ul class="chat-list">
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps/chats.html">
                                                            <div class="chat-media user-avatar">
                                                                <span>IH</span>
                                                                <span class="status dot dot-lg dot-gray"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Iliash Hossain</div>
                                                                    <span class="time">Now</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: Please confrim if you got my last messages.</div>
                                                                    <div class="status delivered">
                                                                        <em class="icon ni ni-check-circle-fill"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item is-unread">
                                                        <a class="chat-link" href="html/apps/chats.html">
                                                            <div class="chat-media user-avatar bg-pink">
                                                                <span>AB</span>
                                                                <span class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Abu Bin Ishtiyak</div>
                                                                    <span class="time">4:49 AM</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi, I am Ishtiyak, can you help me with this problem ?</div>
                                                                    <div class="status unread">
                                                                        <em class="icon ni ni-bullet-fill"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps/chats.html">
                                                            <div class="chat-media user-avatar">
                                                                <img src="<?= base_url('assets/backend/dl') ?> /images/avatar/b-sm.jpg" alt="">
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">George Philips</div>
                                                                    <span class="time">6 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Have you seens the claim from Rose?</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps/chats.html">
                                                            <div class="chat-media user-avatar user-avatar-multiple">
                                                                <div class="user-avatar">
                                                                    <img src="<?= base_url('assets/backend/dl') ?> /images/avatar/c-sm.jpg" alt="">
                                                                </div>
                                                                <div class="user-avatar">
                                                                    <span>AB</span>
                                                                </div>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Softnio Group</div>
                                                                    <span class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                                    <div class="status sent">
                                                                        <em class="icon ni ni-check-circle"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps/chats.html">
                                                            <div class="chat-media user-avatar">
                                                                <img src="<?= base_url('assets/backend/dl') ?> /images/avatar/a-sm.jpg" alt="">
                                                                <span class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Larry Hughes</div>
                                                                    <span class="time">3 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi Frank! How is you doing?</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps/chats.html">
                                                            <div class="chat-media user-avatar bg-purple">
                                                                <span>TW</span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Tammy Wilson</div>
                                                                    <span class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                                    <div class="status sent">
                                                                        <em class="icon ni ni-check-circle"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                </ul><!-- .chat-list -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="html/chats.html">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown notification-dropdown">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-primary-dim ni ni-share"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Iliash shared <span>Dashlite-v2</span> with you.</div>
                                                            <div class="nk-notification-time">Just now</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-info-dim ni ni-edit"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Iliash <span>invited</span> you to edit <span>DashLite</span> folder</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-primary-dim ni ni-share"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have shared <span>project v2</span> with Parvez.</div>
                                                            <div class="nk-notification-time">7 days ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-spark"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Subscription</span> renew successfully.</div>
                                                            <div class="nk-notification-time">2 month ago</div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-notification -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown list-apps-dropdown d-lg-none">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-na"><em class="icon ni ni-menu-circled"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                            <div class="dropdown-body">
                                                <ul class="list-apps">
                                                    <li>
                                                        <a href="html/index.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-dashlite bg-primary text-white"></em></span>
                                                            <span class="list-apps-title">Dashboard</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/apps/chats.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-chat-circle bg-info-dim"></em></span>
                                                            <span class="list-apps-title">Chats</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/apps/mailbox.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-inbox bg-purple-dim"></em></span>
                                                            <span class="list-apps-title">Mailbox</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/apps/messages.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-chat bg-success-dim"></em></span>
                                                            <span class="list-apps-title">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/apps/file-manager.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-folder bg-purple-dim"></em></span>
                                                            <span class="list-apps-title">File Manager</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/components.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-layers bg-secondary-dim"></em></span>
                                                            <span class="list-apps-title">Components</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="list-apps">
                                                    <li>
                                                        <a href="/demo2/ecommerce/index.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-cart bg-danger-dim"></em></span>
                                                            <span class="list-apps-title">Ecommerce Panel</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/demo4/subscription/index.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-calendar-booking bg-primary-dim"></em></span>
                                                            <span class="list-apps-title">Subscription Panel</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/demo5/crypto/index.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-bitcoin-cash bg-warning-dim"></em></span>
                                                            <span class="list-apps-title">Crypto Wallet Panel</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/demo6/invest/index.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-invest bg-blue-dim"></em></span>
                                                            <span class="list-apps-title">HYIP Invest Panel</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- .nk-dropdown-body -->
                                        </div>
                                    </li>
                                    <li class="dropdown language-dropdown d-none d-sm-block me-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="quick-icon border border-light">
                                                <img class="icon" src="<?= base_url('assets/backend/dl') ?> /images/flags/english-sq.png" alt="">
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="<?= base_url('assets/backend/dl') ?> /images/flags/english.png" alt="" class="language-flag">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="<?= base_url('assets/backend/dl') ?> /images/flags/spanish.png" alt="" class="language-flag">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="<?= base_url('assets/backend/dl') ?> /images/flags/french.png" alt="" class="language-flag">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="<?= base_url('assets/backend/dl') ?> /images/flags/turkey.png" alt="" class="language-flag">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main header @e -->
                <div class="nk-sidebar" data-content="sidebarMenu">
                    <div class="nk-sidebar-inner" data-simplebar>
                        <ul class="nk-menu nk-menu-md">
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Dashboards</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item">
                                <a href="html/index.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    <span class="nk-menu-text">Default Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/index-sales.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-speed"></em></span>
                                    <span class="nk-menu-text">Sales Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/index-crypto.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-bitcoin-cash"></em></span>
                                    <span class="nk-menu-text">Crypto Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/index-invest.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                    <span class="nk-menu-text">Invest Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Pre-Built Pages</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                                    <span class="nk-menu-text">Projects</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/project-card.html" class="nk-menu-link"><span class="nk-menu-text">Project Cards</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/project-list.html" class="nk-menu-link"><span class="nk-menu-text">Project List</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                    <span class="nk-menu-text">User Manage</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/user-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">User List - Regular</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/user-list-compact.html" class="nk-menu-link"><span class="nk-menu-text">User List - Compact</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/user-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Details - Regular</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/user-profile-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Profile - Regular</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/user-card.html" class="nk-menu-link"><span class="nk-menu-text">User Contact - Card</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                                    <span class="nk-menu-text">AML / KYCs</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/kyc-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">KYC List - Regular</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/kyc-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">KYC Details - Regular</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                                    <span class="nk-menu-text">Transactions</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/transaction-basic.html" class="nk-menu-link"><span class="nk-menu-text">Tranx List - Basic</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/transaction-crypto.html" class="nk-menu-link"><span class="nk-menu-text">Tranx List - Crypto</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                                    <span class="nk-menu-text">Invoice</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/invoice-list.html" class="nk-menu-link"><span class="nk-menu-text">Invoice List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/invoice-details.html" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span>
                                    <span class="nk-menu-text">Products</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/product-list.html" class="nk-menu-link"><span class="nk-menu-text">Product List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/product-card.html" class="nk-menu-link"><span class="nk-menu-text">Product Card</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/product-details.html" class="nk-menu-link"><span class="nk-menu-text">Product Details</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/pricing-table.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-view-col"></em></span>
                                    <span class="nk-menu-text">Pricing Table</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/gallery.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-img"></em></span>
                                    <span class="nk-menu-text">Image Gallery</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Misc Pages</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-signin"></em></span>
                                    <span class="nk-menu-text">Auth Pages</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-login.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-register.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-reset.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-success.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Classic Version - v2</span></a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-login-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-register-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-reset-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-success-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">No Slider Version - v3</span></a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-login-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-register-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-reset-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-success-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                    <span class="nk-menu-text">Error Pages</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/pages/errors/404-classic.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Classic</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/errors/504-classic.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Classic</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/errors/404-s1.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Modern</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/errors/504-s1.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Modern</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                    <span class="nk-menu-text">Other Pages</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/_blank.html" class="nk-menu-link"><span class="nk-menu-text">Blank / Startup</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/faqs.html" class="nk-menu-link"><span class="nk-menu-text">Faqs / Help</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/terms-policy.html" class="nk-menu-link"><span class="nk-menu-text">Terms / Policy</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/regular-v1.html" class="nk-menu-link"><span class="nk-menu-text">Regular Page - v1</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/regular-v2.html" class="nk-menu-link"><span class="nk-menu-text">Regular Page - v2</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Components</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                                    <span class="nk-menu-text">Ui Elements</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/alerts.html" class="nk-menu-link"><span class="nk-menu-text">Alerts</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/accordions.html" class="nk-menu-link"><span class="nk-menu-text">Accordions</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/avatar.html" class="nk-menu-link"><span class="nk-menu-text">Avatar</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/badges.html" class="nk-menu-link"><span class="nk-menu-text">Badges</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/buttons.html" class="nk-menu-link"><span class="nk-menu-text">Buttons</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/buttons-group.html" class="nk-menu-link"><span class="nk-menu-text">Button Group</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/breadcrumb.html" class="nk-menu-link"><span class="nk-menu-text">Breadcrumb</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/cards.html" class="nk-menu-link"><span class="nk-menu-text">Cards</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/carousel.html" class="nk-menu-link"><span class="nk-menu-text">Carousel</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/list-dropdown.html" class="nk-menu-link"><span class="nk-menu-text">List Dropdown</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/modals.html" class="nk-menu-link"><span class="nk-menu-text">Modals</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/pagination.html" class="nk-menu-link"><span class="nk-menu-text">Pagination</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/popover.html" class="nk-menu-link"><span class="nk-menu-text">Popovers</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/progress.html" class="nk-menu-link"><span class="nk-menu-text">Progress</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/spinner.html" class="nk-menu-link"><span class="nk-menu-text">Spinner</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/tabs.html" class="nk-menu-link"><span class="nk-menu-text">Tabs</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/toast.html" class="nk-menu-link"><span class="nk-menu-text">Toasts</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/tooltip.html" class="nk-menu-link"><span class="nk-menu-text">Tooltip</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/typography.html" class="nk-menu-link"><span class="nk-menu-text">Typography</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Utilities</span></a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item"><a href="html/components/elements/util-border.html" class="nk-menu-link"><span class="nk-menu-text">Border</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-colors.html" class="nk-menu-link"><span class="nk-menu-text">Colors</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-display.html" class="nk-menu-link"><span class="nk-menu-text">Display</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-embeded.html" class="nk-menu-link"><span class="nk-menu-text">Embeded</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-flex.html" class="nk-menu-link"><span class="nk-menu-text">Flex</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-text.html" class="nk-menu-link"><span class="nk-menu-text">Text</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-sizing.html" class="nk-menu-link"><span class="nk-menu-text">Sizing</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-spacing.html" class="nk-menu-link"><span class="nk-menu-text">Spacing</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-others.html" class="nk-menu-link"><span class="nk-menu-text">Others</span></a></li>
                                        </ul><!-- .nk-menu-sub -->
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dot-box"></em></span>
                                    <span class="nk-menu-text">Crafted Icons</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/components/misc/svg-icons.html" class="nk-menu-link">
                                            <span class="nk-menu-text">SVG Icon - Exclusive</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/misc/nioicon.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Nioicon - HandCrafted</span>
                                        </a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/components/misc/icons.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span>
                                    <span class="nk-menu-text">Icon Libraries</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-table-view"></em></span>
                                    <span class="nk-menu-text">Tables</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/components/tables/table-basic.html" class="nk-menu-link"><span class="nk-menu-text">Basic Tables</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/tables/table-special.html" class="nk-menu-link"><span class="nk-menu-text">Special Tables</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/tables/table-datatable.html" class="nk-menu-link"><span class="nk-menu-text">DataTables</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span>
                                    <span class="nk-menu-text">Forms</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/form-elements.html" class="nk-menu-link"><span class="nk-menu-text">Form Elements</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/checkbox-radio.html" class="nk-menu-link"><span class="nk-menu-text">Checkbox Radio</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/advanced-controls.html" class="nk-menu-link"><span class="nk-menu-text">Advanced Controls</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/input-group.html" class="nk-menu-link"><span class="nk-menu-text">Input Group</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/form-upload.html" class="nk-menu-link"><span class="nk-menu-text">Form Upload</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/datetime-picker.html" class="nk-menu-link"><span class="nk-menu-text">Date &amp; Time Picker</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/number-spinner.html" class="nk-menu-link"><span class="nk-menu-text">Number Spinner</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/nouislider.html" class="nk-menu-link"><span class="nk-menu-text">noUiSlider</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/form-layouts.html" class="nk-menu-link"><span class="nk-menu-text">Form Layouts</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/form-validation.html" class="nk-menu-link"><span class="nk-menu-text">Form Validation</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/form-wizard.html" class="nk-menu-link"><span class="nk-menu-text">Wizard Basic</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Rich Editor</span></a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item"><a href="html/components/forms/form-summernote.html" class="nk-menu-link"><span class="nk-menu-text">Summernote</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/forms/form-quill.html" class="nk-menu-link"><span class="nk-menu-text">Quill</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/forms/form-tinymce.html" class="nk-menu-link"><span class="nk-menu-text">Tinymce</span></a></li>
                                        </ul><!-- .nk-menu-sub -->
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-pie"></em></span>
                                    <span class="nk-menu-text">Charts</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/components/charts/chartjs.html" class="nk-menu-link"><span class="nk-menu-text">Chart JS</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/charts/knob.html" class="nk-menu-link"><span class="nk-menu-text">Knob JS</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-puzzle"></em></span>
                                    <span class="nk-menu-text">Widgets</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/components/widgets/cards.html" class="nk-menu-link"><span class="nk-menu-text">Card Widgets</span></a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/components/widgets/charts.html" class="nk-menu-link"><span class="nk-menu-text">Chart Widgets</span></a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/components/widgets/ratings.html" class="nk-menu-link"><span class="nk-menu-text">Ratings Widget</span><span class="nk-menu-badge">New</span></a>
                                    </li><!-- .nk-menu-item -->
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-block-over"></em></span>
                                    <span class="nk-menu-text">Miscellaneous</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/components/misc/slick-sliders.html" class="nk-menu-link"><span class="nk-menu-text">Slick Slider</span></a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/components/misc/toastr.html" class="nk-menu-link"><span class="nk-menu-text">Toastr</span></a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/components/misc/sweet-alert.html" class="nk-menu-link"><span class="nk-menu-text">Sweet Alert</span></a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/components/misc/js-tree.html" class="nk-menu-link"><span class="nk-menu-text">jsTree</span></a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/components/misc/dual-listbox.html" class="nk-menu-link"><span class="nk-menu-text">Dual Listbox</span></a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/components/misc/dragula.html" class="nk-menu-link"><span class="nk-menu-text">Dragula</span><span class="nk-menu-badge">New</span></a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/components/misc/map.html" class="nk-menu-link"><span class="nk-menu-text">Google Map</span><span class="nk-menu-badge">New</span></a>
                                    </li><!-- .nk-menu-item -->
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/email-templates.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span>
                                    <span class="nk-menu-text">Email Template</span>
                                </a>
                            </li>
                        </ul><!-- .nk-menu -->
                    </div>
                </div>
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Website Analytics</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Welcome to Analytics Dashboard.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Last 30 Days</span></a></li>
                                                                        <li><a href="#"><span>Last 6 Months</span></a></li>
                                                                        <li><a href="#"><span>Last 1 Years</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-lg-7 col-xxl-6">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group pb-3 g-2">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Audience Overview</h6>
                                                            <p>How have your users, sessions, bounce rate metrics trended.</p>
                                                        </div>
                                                        <div class="card-tools shrink-0 d-none d-sm-block">
                                                            <ul class="nav nav-switch-s2 nav-tabs bg-white">
                                                                <li class="nav-item"><a href="#" class="nav-link">7 D</a></li>
                                                                <li class="nav-item"><a href="#" class="nav-link active">1 M</a></li>
                                                                <li class="nav-item"><a href="#" class="nav-link">3 M</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="analytic-ov">
                                                        <div class="analytic-data-group analytic-ov-group g-3">
                                                            <div class="analytic-data analytic-ov-data">
                                                                <div class="title">Users</div>
                                                                <div class="amount">2.57K</div>
                                                                <div class="change up"><em class="icon ni ni-arrow-long-up"></em>12.37%</div>
                                                            </div>
                                                            <div class="analytic-data analytic-ov-data">
                                                                <div class="title">Sessions</div>
                                                                <div class="amount">3.98K</div>
                                                                <div class="change up"><em class="icon ni ni-arrow-long-up"></em>47.74%</div>
                                                            </div>
                                                            <div class="analytic-data analytic-ov-data">
                                                                <div class="title">Users</div>
                                                                <div class="amount">28.49%</div>
                                                                <div class="change down"><em class="icon ni ni-arrow-long-down"></em>12.37%</div>
                                                            </div>
                                                            <div class="analytic-data analytic-ov-data">
                                                                <div class="title">Users</div>
                                                                <div class="amount">7m 28s</div>
                                                                <div class="change down"><em class="icon ni ni-arrow-long-down"></em>0.35%</div>
                                                            </div>
                                                        </div>
                                                        <div class="analytic-ov-ck">
                                                            <canvas class="analytics-line-large" id="analyticOvData"></canvas>
                                                        </div>
                                                        <div class="chart-label-group ms-5">
                                                            <div class="chart-label">01 Jan, 2020</div>
                                                            <div class="chart-label d-none d-sm-block">15 Jan, 2020</div>
                                                            <div class="chart-label">30 Jan, 2020</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-lg-5 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start pb-3 g-2">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Active Users</h6>
                                                            <p>How do your users visited in the time.</p>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help" data-bs-toggle="tooltip" data-bs-placement="left" title="Users of this month"></em>
                                                        </div>
                                                    </div>
                                                    <div class="analytic-au">
                                                        <div class="analytic-data-group analytic-au-group g-3">
                                                            <div class="analytic-data analytic-au-data">
                                                                <div class="title">Monthly</div>
                                                                <div class="amount">9.28K</div>
                                                                <div class="change up"><em class="icon ni ni-arrow-long-up"></em>4.63%</div>
                                                            </div>
                                                            <div class="analytic-data analytic-au-data">
                                                                <div class="title">Weekly</div>
                                                                <div class="amount">2.69K</div>
                                                                <div class="change down"><em class="icon ni ni-arrow-long-down"></em>1.92%</div>
                                                            </div>
                                                            <div class="analytic-data analytic-au-data">
                                                                <div class="title">Daily (Avg)</div>
                                                                <div class="amount">0.94K</div>
                                                                <div class="change up"><em class="icon ni ni-arrow-long-up"></em>3.45%</div>
                                                            </div>
                                                        </div>
                                                        <div class="analytic-au-ck">
                                                            <canvas class="analytics-au-chart" id="analyticAuData"></canvas>
                                                        </div>
                                                        <div class="chart-label-group">
                                                            <div class="chart-label">01 Jan, 2020</div>
                                                            <div class="chart-label">30 Jan, 2020</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-lg-5 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start pb-3 g-2">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Website Performance</h6>
                                                            <p>How has performend this month.</p>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help" data-bs-toggle="tooltip" data-bs-placement="left" title="Performance of this month"></em>
                                                        </div>
                                                    </div>
                                                    <div class="analytic-wp">
                                                        <div class="analytic-wp-group g-3">
                                                            <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">Bounce Rate <span>(avg)</span></div>
                                                                    <div class="analytic-wp-ck">
                                                                        <canvas class="analytics-line-small" id="BounceRateData"></canvas>
                                                                    </div>
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm">23.59%</div>
                                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>4.5%</div>
                                                                    <div class="subtitle">vs. last month</div>
                                                                </div>
                                                            </div>
                                                            <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">Pageviews <span>(avg)</span></div>
                                                                    <div class="analytic-wp-ck">
                                                                        <canvas class="analytics-line-small" id="PageviewsData"></canvas>
                                                                    </div>
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm">5.48</div>
                                                                    <div class="change down"><em class="icon ni ni-arrow-long-down"></em>-1.48%</div>
                                                                    <div class="subtitle">vs. last month</div>
                                                                </div>
                                                            </div>
                                                            <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">New Users <span>(avg)</span></div>
                                                                    <div class="analytic-wp-ck">
                                                                        <canvas class="analytics-line-small" id="NewUsersData"></canvas>
                                                                    </div>
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm">549</div>
                                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>6.8%</div>
                                                                    <div class="subtitle">vs. last month</div>
                                                                </div>
                                                            </div>
                                                            <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">Time on Site <span>(avg)</span></div>
                                                                    <div class="analytic-wp-ck">
                                                                        <canvas class="analytics-line-small" id="TimeOnSiteData"></canvas>
                                                                    </div>
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm">3m 35s</div>
                                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>1.4%</div>
                                                                    <div class="subtitle">vs. last month</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-lg-7 col-xxl-6">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner mb-n2">
                                                    <div class="card-title-group">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Traffic Channel</h6>
                                                            <p>Top traffic channels metrics.</p>
                                                        </div>
                                                        <div class="card-tools">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>7 Days</span></a></li>
                                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-list is-loose traffic-channel-table">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col nk-tb-channel"><span>Channel</span></div>
                                                        <div class="nk-tb-col nk-tb-sessions"><span>Sessions</span></div>
                                                        <div class="nk-tb-col nk-tb-prev-sessions"><span>Prev Sessions</span></div>
                                                        <div class="nk-tb-col nk-tb-change"><span>Change</span></div>
                                                        <div class="nk-tb-col nk-tb-trend tb-col-sm text-end"><span>Trend</span></div>
                                                    </div><!-- .nk-tb-head -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-channel">
                                                            <span class="tb-lead">Organic Search</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-sessions">
                                                            <span class="tb-sub tb-amount"><span>4,305</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-prev-sessions">
                                                            <span class="tb-sub tb-amount"><span>4,129</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-change">
                                                            <span class="tb-sub"><span>4.29%</span> <span class="change up"><em class="icon ni ni-arrow-long-up"></em></span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-trend text-end">
                                                            <div class="traffic-channel-ck ms-auto">
                                                                <canvas class="analytics-line-small" id="OrganicSearchData"></canvas>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-channel">
                                                            <span class="tb-lead">Social Media</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-sessions">
                                                            <span class="tb-sub tb-amount"><span>859</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-prev-sessions">
                                                            <span class="tb-sub tb-amount"><span>936</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-change">
                                                            <span class="tb-sub"><span>15.8%</span> <span class="change down"><em class="icon ni ni-arrow-long-down"></em></span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-trend text-end">
                                                            <div class="traffic-channel-ck ms-auto">
                                                                <canvas class="analytics-line-small" id="SocialMediaData"></canvas>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-channel">
                                                            <span class="tb-lead">Referrals</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-sessions">
                                                            <span class="tb-sub tb-amount"><span>482</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-prev-sessions">
                                                            <span class="tb-sub tb-amount"><span>793</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-change">
                                                            <span class="tb-sub"><span>41.3%</span> <span class="change down"><em class="icon ni ni-arrow-long-down"></em></span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-trend text-end">
                                                            <div class="traffic-channel-ck ms-auto">
                                                                <canvas class="analytics-line-small" id="ReferralsData"></canvas>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-channel">
                                                            <span class="tb-lead">Others</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-sessions">
                                                            <span class="tb-sub tb-amount"><span>138</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-prev-sessions">
                                                            <span class="tb-sub tb-amount"><span>97</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-change">
                                                            <span class="tb-sub"><span>12.6%</span> <span class="change up"><em class="icon ni ni-arrow-long-up"></em></span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-trend text-end">
                                                            <div class="traffic-channel-ck ms-auto">
                                                                <canvas class="analytics-line-small" id="OthersData"></canvas>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Traffic Channel</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>7 Days</span></a></li>
                                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="traffic-channel">
                                                        <div class="traffic-channel-doughnut-ck">
                                                            <canvas class="analytics-doughnut" id="TrafficChannelDoughnutData"></canvas>
                                                        </div>
                                                        <div class="traffic-channel-group g-2">
                                                            <div class="traffic-channel-data">
                                                                <div class="title"><span class="dot dot-lg sq" data-bg="#9cabff"></span><span>Organic Search</span></div>
                                                                <div class="amount">4,305 <small>58.63%</small></div>
                                                            </div>
                                                            <div class="traffic-channel-data">
                                                                <div class="title"><span class="dot dot-lg sq" data-bg="#b8acff"></span><span>Social Media</span></div>
                                                                <div class="amount">859 <small>23.94%</small></div>
                                                            </div>
                                                            <div class="traffic-channel-data">
                                                                <div class="title"><span class="dot dot-lg sq" data-bg="#ffa9ce"></span><span>Referrals</span></div>
                                                                <div class="amount">482 <small>12.94%</small></div>
                                                            </div>
                                                            <div class="traffic-channel-data">
                                                                <div class="title"><span class="dot dot-lg sq" data-bg="#f9db7b"></span><span>Others</span></div>
                                                                <div class="amount">138 <small>4.49%</small></div>
                                                            </div>
                                                        </div><!-- .traffic-channel-group -->
                                                    </div><!-- .traffic-channel -->
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Users by Country</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>7 Days</span></a></li>
                                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="analytics-map">
                                                        <div class="vector-map" id="worldMap"></div>
                                                        <table class="analytics-map-data-list">
                                                            <tr class="analytics-map-data">
                                                                <td class="country">United States</td>
                                                                <td class="amount">12,094</td>
                                                                <td class="percent">23.54%</td>
                                                            </tr>
                                                            <tr class="analytics-map-data">
                                                                <td class="country">India</td>
                                                                <td class="amount">7,984</td>
                                                                <td class="percent">7.16%</td>
                                                            </tr>
                                                            <tr class="analytics-map-data">
                                                                <td class="country">Turkey</td>
                                                                <td class="amount">6,338</td>
                                                                <td class="percent">6.54%</td>
                                                            </tr>
                                                            <tr class="analytics-map-data">
                                                                <td class="country">Bangladesh</td>
                                                                <td class="amount">4,749</td>
                                                                <td class="percent">5.29%</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-6">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner mb-n2">
                                                    <div class="card-title-group">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Browser Used</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>7 Days</span></a></li>
                                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-list is-loose">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col"><span>Browser</span></div>
                                                        <div class="nk-tb-col text-end"><span>Users</span></div>
                                                        <div class="nk-tb-col"><span>% Users</span></div>
                                                        <div class="nk-tb-col tb-col-sm text-end"><span>Bounce Rate</span></div>
                                                    </div><!-- .nk-tb-head -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="icon-text">
                                                                <em class="text-primary icon ni ni-globe"></em>
                                                                <span class="tb-lead">Google Chrome</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-sub tb-amount"><span>1,641</span></span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="progress progress-md progress-alt bg-transparent">
                                                                <div class="progress-bar" data-progress="72.84"></div>
                                                                <div class="progress-amount">72.84%</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm text-end">
                                                            <span class="tb-sub">22.62%</span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="icon-text">
                                                                <em class="text-danger icon ni ni-globe"></em>
                                                                <span class="tb-lead">Mozilla Firefox</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-sub tb-amount"><span>497</span></span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="progress progress-md progress-alt bg-transparent">
                                                                <div class="progress-bar" data-progress="7.93"></div>
                                                                <div class="progress-amount">7.93%</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm text-end">
                                                            <span class="tb-sub">20.49%</span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="icon-text">
                                                                <em class="text-info icon ni ni-globe"></em>
                                                                <span class="tb-lead">Safari Browser</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-sub tb-amount"><span>187</span></span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="progress progress-md progress-alt bg-transparent">
                                                                <div class="progress-bar" data-progress="4.87"></div>
                                                                <div class="progress-amount">4.87%</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm text-end">
                                                            <span class="tb-sub">21.34%</span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="icon-text">
                                                                <em class="text-orange icon ni ni-globe"></em>
                                                                <span class="tb-lead">UC Browser</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-sub tb-amount"><span>96</span></span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="progress progress-md progress-alt bg-transparent">
                                                                <div class="progress-bar" data-progress="2.46"></div>
                                                                <div class="progress-amount">2.46%</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm text-end">
                                                            <span class="tb-sub">20.33%</span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="icon-text">
                                                                <em class="text-blue icon ni ni-globe"></em>
                                                                <span class="tb-lead">Edge / IE</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-sub tb-amount"><span>28</span></span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="progress progress-md progress-alt bg-transparent">
                                                                <div class="progress-bar" data-progress="1.14"></div>
                                                                <div class="progress-amount">1.14%</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm text-end">
                                                            <span class="tb-sub">21.34%</span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="icon-text">
                                                                <em class="text-purple icon ni ni-globe"></em>
                                                                <span class="tb-lead">Other Browser</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-sub tb-amount"><span>683</span></span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="progress progress-md progress-alt bg-transparent">
                                                                <div class="progress-bar" data-progress="10.76"></div>
                                                                <div class="progress-amount">10.76%</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm text-end">
                                                            <span class="tb-sub">20.49%</span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner mb-n2">
                                                    <div class="card-title-group">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Pages View by Users</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>7 Days</span></a></li>
                                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-list is-compact">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col"><span>Page</span></div>
                                                        <div class="nk-tb-col text-end"><span>Page Views</span></div>
                                                    </div><!-- .nk-tb-head -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-sub tb-amount"><span>2,879</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/subscription/index.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-sub tb-amount"><span>2,094</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/general/index.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-sub tb-amount"><span>1,634</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/crypto/index.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-sub tb-amount"><span>1,497</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/invest/index.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-sub tb-amount"><span>1,349</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/subscription/profile.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-sub tb-amount"><span>984</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/general/index-crypto.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-sub tb-amount"><span>879</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/apps/messages/index.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-sub tb-amount"><span>598</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub"><span>/general/index-crypto.html</span></span>
                                                        </div>
                                                        <div class="nk-tb-col text-end">
                                                            <span class="tb-sub tb-amount"><span>436</span></span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner h-100 stretch flex-column">
                                                    <div class="card-title-group">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Sessions by Device</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>7 Days</span></a></li>
                                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="device-status my-auto">
                                                        <div class="device-status-ck">
                                                            <canvas class="analytics-doughnut" id="deviceStatusData"></canvas>
                                                        </div>
                                                        <div class="device-status-group">
                                                            <div class="device-status-data">
                                                                <em data-color="#798bff" class="icon ni ni-monitor"></em>
                                                                <div class="title">Desktop</div>
                                                                <div class="amount">84.5%</div>
                                                                <div class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.5%</div>
                                                            </div>
                                                            <div class="device-status-data">
                                                                <em data-color="#baaeff" class="icon ni ni-mobile"></em>
                                                                <div class="title">Mobile</div>
                                                                <div class="amount">14.2%</div>
                                                                <div class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>133.2%</div>
                                                            </div>
                                                            <div class="device-status-data">
                                                                <em data-color="#7de1f8" class="icon ni ni-tablet"></em>
                                                                <div class="title">Tablet</div>
                                                                <div class="amount">1.3%</div>
                                                                <div class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>25.3%</div>
                                                            </div>
                                                        </div><!-- .device-status-group -->
                                                    </div><!-- .device-status -->
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?> /images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?= base_url('assets/backend/dl') ?>/images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    <script src="<?= base_url('assets/backend/dl') ?> /assets/js/bundle.js?ver=3.0.2"></script>
    <script src="<?= base_url('assets/backend/dl') ?> /assets/js/scripts.js?ver=3.0.2"></script>
    <script src="<?= base_url('assets/backend/dl') ?> /assets/js/charts/gd-analytics.js?ver=3.0.2"></script>
    <script src="<?= base_url('assets/backend/dl') ?> /assets/js/libs/jqvmap.js?ver=3.0.2"></script>
</body>

</html>