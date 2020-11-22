
              <div id="left-menu"><br>
                  <div class="sub-left-menu scroll">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                    <a href="#" class="d-block">
                      @if(Auth::check())
                        <strong>{{request()->user()->nama}}</strong>
                      @else
                        Silahkan login
                      @endif
                    </a>
                    </div>
                  </div>
                <ul class="nav nav-list">
                    <li class="active ripple">
                      <a href="{{url('beranda')}}" class="nav-link"><span class="fa-home fa"></span> Beranda 
                      </a>
                    </li>
                    <li class="active ripple">
                      <a href="{{url('admin/produk')}}" class="nav-link"><span class="fa-home fa"></span> Produk 
                      </a>
                    </li>
                    <li class="active ripple">
                      <a href="{{url('admin/kategori')}}" class="nav-link"><span class="fa-home fa"></span> Kategori 
                      </a>
                    </li>
                    <li class="active ripple">
                      <a href="{{url('admin/promo')}}" class="nav-link"><span class="fa-home fa"></span> Promo 
                      </a>
                    </li>
                    <li class="active ripple">
                      <a href="{{url('admin/user')}}" class="nav-link"><span class="fa-home fa"></span> User 
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span> Master Data
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="{{url('admin/pelanggan')}}">Pelanggan</a></li>
                        <li><a href="{{url('admin/pemasok')}}">Pemasok</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </div>