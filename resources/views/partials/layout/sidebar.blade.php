<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                {!! Html::image('assets/img/avatar04.png', 'User Image', array('class' => 'img-circle')) !!}
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bus"></i>
                    <span>Submenu</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Item 1</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Item 2</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-user"></i><span>Link 1</span></a></li>
            <li><a href="#"><i class="fa fa-group"></i><span>Link 2</span></a></li>
            <li><a href="#"><i class="fa fa-clipboard"></i><span>Link 3</span></a></li>
        </ul>
    </section>
</aside>