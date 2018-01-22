<body class="body-bgcolor">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container">		
        <a class="navbar-brand" href="#"><img src="/images/prof_logo.png" style="width:20%"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-nav flex-row ml-md-auto d-none d-md-flex" style="font-size:14px">
                <li class="nav-item active">
                    <a class="nav-link" href="/app/profile" style="padding-right:1rem;padding-left:1rem;"><i class="fa fa-home fa-fw"></i>&nbsp;Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/app/findjobs" style="padding-right:1rem;padding-left:1rem;"><i class="fa fa-binoculars fa-fw"></i>&nbsp;Jobs</a>
                </li>
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#" style="padding-right:1rem;padding-left:1rem;"><i class="fa fa-clock-o fa-fw"></i>History</a>
                </li> -->
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="/profile/<?php echo $userInfo[0]['USER_FNAME']."-".$userInfo[0]['USER_LNAME']."-".substr($userInfo[0]['USER_ID'], strpos($userInfo[0]['USER_ID'], "_") + 1);?>" style="padding-right:1rem;padding-left:1rem;"><i class="fa fa-globe fa-fw"></i>&nbsp;Public Profile</a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="navbar-brand" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-top:0rem">
                        <img src="<?php echo base_url("images/avataaar_male.png");?>" width="30"/>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><i class="fa fa-share-alt fa-fw"></i>Refer a friend</a>
                    <!-- <a class="dropdown-item" href="#">Another action</a> -->
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/app/signout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>