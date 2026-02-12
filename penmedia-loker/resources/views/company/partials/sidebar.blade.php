<style>
    .sidebar {
        width: 280px;
        background: linear-gradient(180deg, #1e3a8a 0%, #1e40af 100%);
        height: 100vh;
        position: fixed;
        left: 0;
        top: 0;
        padding: 32px 24px;
        box-shadow: 4px 0 24px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        display: flex;
        flex-direction: column;
    }
    
    .main-content {
        margin-left: 280px;
        flex: 1;
        min-height: 100vh;
    }
    
    @media (max-width: 768px) {
        .sidebar {
            width: 80px;
            padding: 24px 12px;
        }
        .main-content {
            margin-left: 80px;
        }
    }
</style>

<!-- Desktop Sidebar -->
<aside class="sidebar lg:block hidden">
    <div style="margin-bottom: 48px; padding-bottom: 24px; border-bottom: 2px solid rgba(255, 255, 255, 0.2);">
        <h1 style="font-size: 24px; font-weight: 900; color: white; letter-spacing: -0.5px;">PenMedia</h1>
        <p style="color: #60a5fa; font-size: 14px; margin-top: 4px;">Company Portal</p>
    </div>
    
    <nav style="display: flex; flex-direction: column; gap: 8px; flex: 1;">
        <a href="{{ route('company.dashboard') }}" style="text-decoration: none; color: {{ request()->routeIs('company.dashboard') ? 'white' : 'rgba(255, 255, 255, 0.8)' }}; font-weight: 600; font-size: 15px; padding: 14px 20px; border-radius: 12px; display: flex; align-items: center; gap: 12px; background: {{ request()->routeIs('company.dashboard') ? 'rgba(255, 255, 255, 0.15)' : 'transparent' }}; transition: all 0.3s;" onmouseover="if(!this.href.includes('{{ request()->route()->getName() }}')) this.style.background='rgba(255, 255, 255, 0.1)'" onmouseout="if(!this.href.includes('{{ request()->route()->getName() }}')) this.style.background='transparent'">
            <svg style="width: 20px; height: 20px; min-width: 24px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
            <span style="font-weight: 600;">Dashboard</span>
        </a>
        <a href="{{ route('company.kandidat') }}" style="text-decoration: none; color: {{ request()->routeIs('company.kandidat') ? 'white' : 'rgba(255, 255, 255, 0.8)' }}; font-weight: 600; font-size: 15px; padding: 14px 20px; border-radius: 12px; display: flex; align-items: center; gap: 12px; background: {{ request()->routeIs('company.kandidat') ? 'rgba(255, 255, 255, 0.15)' : 'transparent' }}; transition: all 0.3s;" onmouseover="if(!this.href.includes('{{ request()->route()->getName() }}')) this.style.background='rgba(255, 255, 255, 0.1)'" onmouseout="if(!this.href.includes('{{ request()->route()->getName() }}')) this.style.background='transparent'">
            <svg style="width: 20px; height: 20px; min-width: 24px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
            <span style="font-weight: 600;">Kandidat</span>
        </a>
        <a href="{{ route('company.lowongan') }}" style="text-decoration: none; color: {{ request()->routeIs('company.lowongan') ? 'white' : 'rgba(255, 255, 255, 0.8)' }}; font-weight: 600; font-size: 15px; padding: 14px 20px; border-radius: 12px; display: flex; align-items: center; gap: 12px; background: {{ request()->routeIs('company.lowongan') ? 'rgba(255, 255, 255, 0.15)' : 'transparent' }}; transition: all 0.3s;" onmouseover="if(!this.href.includes('{{ request()->route()->getName() }}')) this.style.background='rgba(255, 255, 255, 0.1)'" onmouseout="if(!this.href.includes('{{ request()->route()->getName() }}')) this.style.background='transparent'">
            <svg style="width: 20px; height: 20px; min-width: 24px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            <span style="font-weight: 600;">Lowongan</span>
        </a>
        <a href="{{ route('company.laporan') }}" style="text-decoration: none; color: {{ request()->routeIs('company.laporan') ? 'white' : 'rgba(255, 255, 255, 0.8)' }}; font-weight: 600; font-size: 15px; padding: 14px 20px; border-radius: 12px; display: flex; align-items: center; gap: 12px; background: {{ request()->routeIs('company.laporan') ? 'rgba(255, 255, 255, 0.15)' : 'transparent' }}; transition: all 0.3s;" onmouseover="if(!this.href.includes('{{ request()->route()->getName() }}')) this.style.background='rgba(255, 255, 255, 0.1)'" onmouseout="if(!this.href.includes('{{ request()->route()->getName() }}')) this.style.background='transparent'">
            <svg style="width: 20px; height: 20px; min-width: 24px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            <span style="font-weight: 600;">Laporan</span>
        </a>
        <a href="{{ route('company.profile.edit') }}" style="text-decoration: none; color: {{ request()->routeIs('company.profile.edit') ? 'white' : 'rgba(255, 255, 255, 0.8)' }}; font-weight: 600; font-size: 15px; padding: 14px 20px; border-radius: 12px; display: flex; align-items: center; gap: 12px; background: {{ request()->routeIs('company.profile.edit') ? 'rgba(255, 255, 255, 0.15)' : 'transparent' }}; transition: all 0.3s;" onmouseover="if(!this.href.includes('{{ request()->route()->getName() }}')) this.style.background='rgba(255, 255, 255, 0.1)'" onmouseout="if(!this.href.includes('{{ request()->route()->getName() }}')) this.style.background='transparent'">
            <svg style="width: 20px; height: 20px; min-width: 24px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
            <span style="font-weight: 600;">Profil Perusahaan</span>
        </a>
    </nav>

    <div style="margin-top: auto; padding-top: 24px; border-top: 2px solid rgba(255, 255, 255, 0.2);">
        <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 16px;">
            <div style="width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, #60a5fa, #2563eb); display: flex; align-items: center; justify-content: center; color: white; font-weight: 800; font-size: 18px;">
                {{ substr(Auth::user()->name, 0, 1) }}
            </div>
            <div style="flex: 1;">
                <p style="font-weight: 600; font-size: 14px; color: white; margin: 0;">{{ Auth::user()->name }}</p>
                <p style="color: rgba(255, 255, 255, 0.7); font-size: 12px; margin: 0;">{{ Auth::user()->email }}</p>
            </div>
        </div>
        <a href="{{ route('logout.get') }}" style="display: block; width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.1); border: none; border-radius: 12px; color: white; font-weight: 600; font-size: 14px; cursor: pointer; transition: all 0.3s; text-align: center; text-decoration: none;" onmouseover="this.style.background='rgba(255, 255, 255, 0.2)'" onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'">
            Logout
        </a>
    </div>
</aside>


