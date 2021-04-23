<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-api-token" content="{{ $currentUser->getFirstApiKey() }}">
    <meta name="current-locale" content="{{ locale() }}">
    <meta name="baseurl" content="{{url('/')}}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/themes/adminpress/images/favicon.png')}}">
    <title> 
      @section('title')
        @setting('core::site-name') | Admin
      @show
    </title>
    <style>
      
    </style>
    @foreach($cssFiles as $css)
      <link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset($css) }}">
    @endforeach
    @routes
</head>
<style type="text/css">
      .treeview-menu .hide-menu {
        display: inline-block !important;
      }
      .treeview-menu .item {
        display: inline-block !important;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -5px;
        margin-left: -5px;
      }
      .map-wrapper{
        position: absolute;
        height: calc( 100% - 120px);
        width: calc( 100% - 240px);
      }
      @media (max-width: 768px){
        .map-wrapper{
          width: calc( 100% - 60px)!important;
        } 
      }
       @media (max-width: 767px){
        .map-wrapper{
          width: 100%!important;
        } 
      }
    .loading-overlay {
        z-index: 999!important;
    }
    .message-notification .slimScrollDiv{
        height: 290px!important;
    }
    .message-notification .message-center{
        height: 290px!important;
    }
    .notifApp{
        display: none;
    }
    .bootstrap-tagsinput {
        width: 100% !important;
   }
   .bootstrap-tagsinput .label{
        display: inline-block!important;
   }
   .pac-container {
      z-index: 99999;
    }
    .form-control {
      padding: 0.16rem 0.5rem;
    }
    .el-loading-mask{
      z-index: 9 !important;
    }

    .form-control-sm {
      padding: 0.08rem 0.5rem;
    }
    .el-select { 
      display: block !important;
    }
    .el-tabs--top .el-form-item__label {
      line-height: 10px !important;
    }
    .el-form--label-top .el-form-item__label {
      line-height: 0px !important;
      padding: 0px !important;
    }
    .el-calendar-day {
      padding: 0px !important;
    }
    .el-date-editor.el-range-editor {
      width: 100%;
    }
    .el-date-editor .el-range-separator {
      width: 10%;
    }
</style>
<body class="fix-header fix-sidebar card-no-border" >
  
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
          <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="app">
      <div id="main-wrapper">
          <!-- ============================================================== -->
          <!-- Topbar header - style you can find in pages.scss -->
          <!-- ============================================================== -->
          <header class="topbar">
              <nav class="navbar top-navbar navbar-expand-md navbar-light">
                  <!-- ============================================================== -->
                  <!-- Logo -->
                  <!-- ============================================================== -->
                  <div class="navbar-header text-left" style="padding: 0 15px;">
                      <a class="navbar-brand" href="#!">
                          <!-- Logo icon --><b>
                              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                              <!-- Dark Logo icon -->
                              <img src="{{asset('/themes/adminpress/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                              <!-- Light Logo icon -->
                              <img src="{{asset('/themes/adminpress/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                          </b>
                          <!--End Logo icon -->
                          <!-- Logo text --><span>
                            <h4 alt="homepage" class="text-white mb-0 pl-2" style="display: inline-block">Jinomdev</h4>
                        </a>
                  </div>
                  <!-- ============================================================== -->
                  <!-- End Logo -->
                  <!-- ============================================================== -->
                  <div class="navbar-collapse">
                      <!-- ============================================================== -->
                      <!-- toggle and nav items -->
                      <!-- ============================================================== -->
                      <ul class="navbar-nav mr-auto mt-md-0">
                          <!-- This is  -->
                          <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                          <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                          <!-- ============================================================== -->
                          <!-- Comment -->
                          <!-- ============================================================== -->
                          
                      </ul>
                      <!-- ============================================================== -->
                      <!-- User profile and search -->
                      <!-- ============================================================== -->
                      <ul class="navbar-nav my-lg-0">
                          <!-- ============================================================== -->
                          <!-- Search -->
                          <!-- ============================================================== -->
                          {{-- <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                              <form class="app-search">
                                  <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                          </li> --}}
                          <!-- ============================================================== -->
                          <!-- Profile -->
                          <!-- ============================================================== -->
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark photo-profile-background" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="    border-radius: 50%;background-repeat: no-repeat;background-size: cover;background-position: center;
                                background-image: url('{{url('uploadgambar/'.(Auth::User()->photo_profile == null?'nologo.png':Auth::User()->photo_profile))}}');width: 50px;height: 50px;">
                              </a>
                              <div class="dropdown-menu dropdown-menu-right scale-up">
                                  <ul class="dropdown-user">
                                      <li>
                                          <div class="dw-user-box">
                                            <table>
                                              <tr>
                                                <td class="photo-profile-background" style="width: 70px;
                                                          background-size: cover;
                                                          background-repeat: no-repeat;
                                                          background-position: center;
                                                          background-image: url('{{url('uploadgambar/'.(Auth::User()->photo_profile == null?'nologo.png':Auth::User()->photo_profile))}}')">
                                                  <div class="u-img">
                                                      
                                                  </div>                                                
                                                </td>
                                                <td>
                                                  <div class="u-text">
                                                    <h4 class="mail-desc">{{Auth::User()->full_name}}</h4>
                                                    <p class="text-muted">{{Auth::User()->email}}</p>
                                                    <a href="{{ route('admin.account.profile.edit') }}" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                                  </div>                                                
                                                </td>
                                              </tr>
                                            </table>
                                          </div>
                                      </li>
                                      <li role="separator" class="divider"></li>
                                      <li>
                                          <a href="{{ route('logout') }}">
                                          <i class="fa fa-power-off"></i> 
                                            {{ trans('core::core.general.sign out') }}
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
          </header>
          <!-- ============================================================== -->
          <!-- End Topbar header -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Left Sidebar - style you can find in sidebar.scss  -->
          <!-- ============================================================== -->
          <aside class="left-sidebar">
              <!-- Sidebar scroll-->
              <div class="scroll-sidebar">
                  <!-- User profile -->
                  
                  <!-- End User profile text-->
                  <!-- Sidebar navigation-->
                  @include('partials.sidebar-nav')
                  <!-- End Sidebar navigation -->
              </div>
              <!-- End Sidebar scroll-->
          </aside>
          <!-- ============================================================== -->
          <!-- End Left Sidebar - style you can find in sidebar.scss  -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Page wrapper  -->
          <!-- ============================================================== -->
          <div class="page-wrapper" >
             @yield("content-header")
             @yield('content')
             <router-view></router-view>
              <!-- ============================================================== -->
              <!-- End Container fluid  -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- footer -->
              <!-- ============================================================== -->
              <footer class="footer"> © 2020 copyright by jinomdev </footer>
              <!-- ============================================================== -->
              <!-- End footer -->
              <!-- ============================================================== -->
          </div>
          <!-- ============================================================== -->
          <!-- End Page wrapper  -->
          <!-- ============================================================== -->
      </div>
    </div>
    

  <!--Google Maps -->
  {{-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&key={{config('services.key_map')}}&signed_in=true&sensor=false&libraries=places"></script> --}}
  @foreach($jsFiles as $js)
    <script src="{{ URL::asset($js) }}" type="text/javascript"></script>
  @endforeach
  <script src="{{url('themes/adminpress/normal-mode/js/custom.js')}}"></script>
  <script>
    window.AsgardCMS = {
        translations: {!! $staticTranslations !!},
        locales: {!! json_encode(LaravelLocalization::getSupportedLocales()) !!},
        currentLocale: '{{ locale() }}',
        editor: '{{ $activeEditor }}',
        adminPrefix: '{{ config('asgard.core.core.admin-prefix') }}',
        hideDefaultLocaleInURL: '{{ config('laravellocalization.hideDefaultLocaleInURL') }}',
        filesystem: '{{ config('asgard.media.config.filesystem') }}',
    };
</script>
<script src="{{ mix('js/app.js') }}"></script>

<?php if (is_module_enabled('Notification')): ?>
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script src="{{ Module::asset('notification:js/pusherNotifications.js') }}"></script>
    <script>
        $('.notifications-list').pusherNotifications({
            pusherKey: '{{ config('broadcasting.connections.pusher.key') }}',
            pusherCluster: '{{ config('broadcasting.connections.pusher.options.cluster') }}',
            pusherEncrypted: {{ config('broadcasting.connections.pusher.options.encrypted') }},
            loggedInUserId: {{ $currentUser->id }},
        });
    </script>
<?php endif; ?>
<script type="text/javascript">
  var link = "{{url('/')}}";
  $.Loading.setDefaults({ theme: 'light'});
  $(document).ready(function(){
    $('.fancybox').fancybox();
    $('.select2').select2();
  });

  function showGambarFancyBox(gambar) {
    $.fancybox([
      gambar,
    ],{
     'type': 'image'
   });
  }
    
</script>
@stack('js-stack')
</body>
</html>