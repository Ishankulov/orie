
<aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{asset('css/admin/dist/img/user2-160x160.jpg')}}" 
              class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Администратор</p>
            <a href="#"><i class="fa fa-circle text-success"></i> В сети</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" 
              placeholder="Поиск...">
            <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" 
                    class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">НАВИГАЦИЯ</li>  

          <li class="{{ (request()->is('admin/base_site_information')) ? 'active' : '' }}" style="height: auto;">
                <a href="{{url('admin')}}">
                  <i class="fa fa-book"></i>
                  <span>Контактная информация</span>
                </a>
              </li>
          <li class="{{ (request()->is('admin/banner')) ? 'active' : '' }}">
            <a href="{{url('admin/banner')}}">
              <i class="fa fa-book"></i> 
              <span>Баннеры</span>
            </a>
          </li>
          <li class="{{ (request()->is('admin/feedback')) ? 'active' : '' }}">
            <a href="{{url('admin/feedback')}}">
              <i class="fa fa-book"></i> 
              <span>Отзывы</span>
            </a>
          </li>
          <li class="{{ (request()->is('admin/news')) ? 'active' : '' }}">
            <a href="{{url('admin/news')}}">
              <i class="fa fa-book"></i> 
              <span>Новости</span>
            </a>
          </li>
        </ul>

      </section>
      <!-- /.sidebar -->
    </aside>