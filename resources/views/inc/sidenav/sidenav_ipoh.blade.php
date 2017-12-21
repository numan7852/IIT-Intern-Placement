<div class="col-md-3">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"><h4>Sidenav</h4></div>

        <div class="panel-body">
            <!-- List group -->
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ route('student') }}">Student</a>
                </li>
                <li role="presentation">
                    <a href="{{ route('company') }}">Company</a>
                </li>
                <li role="presentation" class="dropdown">
                  <a href="" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Choice Form
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="{{route('choice_form_enable')}}">Enable</a></li>
                    <li><a href="{{route('choice_form_disable')}}">Disable</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Rating Form
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="{{route('rating_form_enable')}}">Enable</a></li>
                    <li><a href="{{route('rating_form_disable')}}">Disable</a></li>
                  </ul>
                </li>
                <li role="presentation">
                    <a href="{{ route('company_allocate') }}">Allocate Company</a>
                </li>
                <li role="presentation">
                    <a href="{{ route('companyAllocation') }}">Company Allocation List</a>
                </li>
                <li role="presentation">
                    <a href="{{ route('companyRating') }}">Company Rating</a>
                </li>
            </ul>
        </div>
    </div>
</div>