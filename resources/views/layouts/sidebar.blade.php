 <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Student's</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="{{URL::to('/info/create')}}">Add student</a>
            </li>
            <li>
              <a href="{{URL::to('/info')}}">View student</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Subject</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents2">
            <li>
              <a href="{{URL::to('/subject/create')}}">Add subject</a>
            </li>
            <li>
              <a href="{{URL::to('/subject')}}">View subject</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents3" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Attendenc</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents3">
            <li>
              <a href="{{URL::to('/attendenc/create')}}">Add attendenc</a>
            </li>
            <li>
              <a href="{{URL::to('/attendenc')}}">View attendenc</a>
            </li>
          </ul>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents4" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Exam</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents4">
            <li>
              <a href="{{URL::to('/exam/create')}}">Add exam</a>
            </li>
            <li>
              <a href="{{URL::to('/exam')}}">View exam</a>
            </li>
          </ul>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents5" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Teacher</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents5">
            <li>
              <a href="{{URL::to('/teacher/create')}}">Add teacher</a>
            </li>
            <li>
              <a href="{{URL::to('/teacher')}}">View teacher</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents6" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Admission</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents6">
            <li>
              <a href="{{URL::to('/admission')}}">Register list</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-cogs"></i>
            <span class="nav-link-text">Developer</span>
          </a>
        </li>
      </ul>