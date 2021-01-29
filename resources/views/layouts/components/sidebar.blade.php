<div class="sidebar">
   <div class="sidebar-background"></div>
      <div class="sidebar-wrapper scrollbar-inner">
         <div class="sidebar-content">
            <div class="user">
               <div class="avatar-sm float-left mr-2">
                  <img src="{{ asset('assets/img/icon.png') }}" alt="..." class="avatar-img rounded-circle">
               </div>
               <div class="info">
                  <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                     <span>
                        {{ Auth::user()->name }}
                        <span class="user-level">Developer</span>
                        <span class="caret"></span>
                     </span>
                  </a>
                  <div class="clearfix"></div>

                  <div class="collapse in" id="collapseExample">
                     <ul class="nav">
                        <li>
                           <a href="#profile">
                              <span class="link-collapse">My Profile</span>
                           </a>
                        </li>
                        <li>
                           <a href="#edit">
                              <span class="link-collapse">Edit Profile</span>
                           </a>
                        </li>
                        <li>
                           <a href="#settings">
                              <span class="link-collapse">Settings</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <ul class="nav">
               <li class="nav-item">
                  <a href="#">
                     <i class="fas fa-home"></i>
                     <p>Dashboard</p>
                  </a>
               </li>
               <li class="nav-section">
                  <span class="sidebar-mini-icon">
                     <i class="fa fa-ellipsis-h"></i>
                  </span>
                  <h4 class="text-section">Components</h4>
               </li>
               <li class="nav-item">
                  <a data-toggle="collapse" href="#provinsi">
                     <i class="fas fa-globe-asia"></i>
                     <p>Lokal</p>
                     <span class="caret"></span>
                  </a>
                  <div class="collapse" id="provinsi">
                     <ul class="nav nav-collapse">
                        <li>
                           <a href="{{ route('provinsi.index') }}">
                              <span class="sub-item">Provinsi</span>
                           </a>
                        </li>
                        <li>
                           <a href="{{ route('kota.index') }}">
                              <span class="sub-item">Kota</span>
                           </a>
                        </li>
                        <li>
                           <a href="{{ route('kecamatan.index') }}">
                              <span class="sub-item">Kecamatan</span>
                           </a>
                        </li>
                        <li>
                           <a href="{{ route('kelurahan.index') }}">
                              <span class="sub-item">Kelurahan</span>
                           </a>
                        </li>
                        <li>
                           <a href="{{ route('rw.index') }}">
                              <span class="sub-item">RW</span>
                           </a>
                        </li>
                        <li>
                           <a href="{{ route('kasus.index') }}">
                              <span class="sub-item">Kasus</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>