<!-- resources/views/forum.blade.php -->
@extends('layouts.app')

@section('title', 'Forum Diskusi')

@section('content')
<aside class="sidebar">
    <div class="sidebar-wrapper">
        <div class="sidebar-background"></div>
        <img src="{{ asset('images/profil0.png') }}" alt="Profile Image" class="profile-image">
        <div class="username">akustudy123</div>
        <div class="status">aktif 2 menit yang lalu</div>
        <div class="post-info">
            <div class="info-item">
                <p class="post-count">Post</p>
                <p class="post-label">0</p>
            </div>
            <div class="info-item">
                <p class="discussion-count">Diskusi</p>
                <p class="discussion-label">0</p>
            </div>
        </div>
        <div class="separator"></div>
        <a href="#">
            <div class="start-discussion-btn">Mulai Diskusi</div>
        </a>
        <div class="nav-menu">
            <div class="nav-item">
                <a href="#">
                    <div class="home-count">
                        <i class="fa fa-home"></i> Beranda
                    </div>
                </a>
            </div>
            <div class="nav-item">
                <a href="#">
                    <div class="kategory-count">
                        <i class="fa fa-list"></i> Semua Kategori
                    </div>
                </a>
            </div>
        </div>                                
    </div>
</aside>

<div class="content">
    <h1>Forum Diskusi</h1>

    <div class="input-container">
        <div class="title-input-container">
            <div class="title-options">
                <label>
                    <input type="radio" name="title-option" value="work-life"> Kewirausahaan
                </label>
                <label>
                    <input type="radio" name="title-option" value="keterampilan"> Keterampilan Kerja
                </label>
            </div>
        </div>
        
        <textarea class="input-content" placeholder="Isi Postingan"></textarea>
        <div class="tags-container">
            <div class="tag">
                <i class="fa fa-tag"></i>
            </div>
            <span class="input-tags">#Bisnis</span>
            <span class="input-tags">#Pengalaman-Kerja</span>
            <span class="input-tags">#Pengembangan-Karir</span>
            <span class="input-tags">#Kewirausahaan</span>
            <div>
                <button class="post-button" onclick="location.href='#popup1';">Post</button>
            </div>
        </div>
    </div>
    
    <!-- Pop-up for success message -->
    <div id="popup1" class="overlay">
        <div class="popup">
            <h2>Success</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
                Postingan Anda telah berhasil diposting!
            </div>
        </div>
    </div>

    <div class="terkini-section">
        <div class="terkini-left">
            <div class="terkini-title">Terkini</div>
            <i class="fa fa-caret-down terkini-icon"></i>
            <div class="dropdown-content">
                <p>Top</p>
                <p>Terbaru </p>
                <p>Terlama </p>
            </div>
        </div>
        
        <div class="terkini-right">
            <a href="#" class="icon-refresh-link">
                <i class="fa fa-refresh icon-refresh"></i>
            </a>
        </div>
        
    </div>

    <div class="post-list">
        <div class="post">
            <div class="post-header">
                <img src="{{ asset('images/profil0.png') }}" alt="Profile Image" class="post-profile-img">
                <h3 class="post-title">Joseph</h3>
            </div>
            
            <div class="post-options">
                <input type="checkbox" id="toggle-menu" class="toggle-menu-checkbox">
                <label for="toggle-menu" class="menu-icon">
                    <i class="fa fa-ellipsis-v"></i>
                </label>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-exclamation-triangle"></i> Laporkan
                    </a>
                </div>                        
            </div>
            
            <h4 class="post-content-title">Keterampilan Kerja</h4>
            <p class="post-content">Ada tips untuk menambah produktivitas di kantor?</p>
            <p class="post-time">Posted 1 jam yang lalu</p>
            
            <div class="tags-container">
                <span class="tag">#seputar-kerjaan</span>
            </div>
            
            <label for="toggle-replies-1" class="reply">
                <i class="fa fa-reply"></i> 3 balasan
            </label>
            
            <div class="replies" style="display: none;">
                <div class="reply-item">
                    <p><strong>User1:</strong> Coba gunakan teknik Pomodoro.</p>
                </div>
                <div class="reply-item">
                    <p><strong>User2:</strong> Buat to-do list harian.</p>
                </div>
                <div class="reply-item">
                    <p><strong>User3:</strong> Jangan lupa istirahat sejenak.</p>
                </div>
            </div>
        
            <div class="post-footer">
                <label for="toggle-comment-form-1" class="comment-link">
                    <div class="comment-count">
                        <i class="fa fa-comment"></i> 10 
                    </div>
                </label>
                <div class="view-count">
                    <i class="fa fa-eye"></i> <span class="view-number">100</span> 
                </div>
                <div class="like-count">
                    <input type="checkbox" id="like-toggle-1" class="like-toggle">
                    <label for="like-toggle-1" class="like-label">
                        <i class="fa fa-heart"></i> <span class="like-number">50</span> 
                    </label>
                </div>
            </div>
            
            <input type="checkbox" id="toggle-comment-form-1" style="display: none;">
            <div class="comment-form">
                <textarea placeholder="Ketikkan sesuatu..."></textarea>
                <button type="submit">Post Comment</button>
            </div>

            <script src="{{ asset('js/forum.js') }}"></script>
        </div>
    </div>
</div>
@endsection
