@extends('glob.global')

@section('content')
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-md-3">
              <!-- MENUS AND FILTERS-->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Categories</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                    <li class="nav-item"><a href="/" class="nav-link d-flex align-items-center justify-content-between"><span>Banyak Dibeli </span><span class="badge badge-secondary">42</span></a>
                    </li>
                    <li class="nav-item"><a href="/" class="nav-link d-flex align-items-center justify-content-between"><span>Sembako </span><span class="badge badge-secondary">7</span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="beras" class="nav-link">Beras</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Gula</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Minyak Goreng</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Telur</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Susu</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Daging</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Garam</a></li>
                      </ul>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>


            <!-- main -->
            @yield('content-menu');
            
          </div>
        </div>
      </div>
@endsection