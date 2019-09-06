<footer class="footer d-md-block d-xs-none" id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h5>Get started</h5>
                <ul>
                    <li>
                        <a  class="nav-link" href="{{ route('register',[]) }}">Create an Account </a>

                    </li>

                </ul>
            </div>
            <div class="col-md-6 col-sm-12">
                <h5>About Us</h5>
                <ul>
                    <li>

                        <a  class="nav-link" href="{{ route('about.index',[]) }}">About TechEvents </a>

                    </li>
                    <li>

                        <a  class="nav-link" href="{{ route('contact.create', []) }}">Contact Us</a>

                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 social-networks">
                <a href="http://twitter.com/techevents" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="http://facebook.com/techevents" class="facebook"><i class="fa fa-facebook-official"></i></a>
                <a href="http://github.com/VanArmenia/techevents" class="github"><i class="fa fa-github"></i></a>
            </div>
        </div>
        <div class="footer-copyright">
            <p>&copy; 2019 X-Tech | All Rights Reserved.</p>
        </div>
    </div>

</footer>
