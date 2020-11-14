@extends ('layouts.master')

@section ('content')
    <div class="contact" id="contactLink">
        <div class="container-fluid contactMe pt-4 pb-4">
            <p class="subHeader">Contact Me</p>
            <div class="container contactDiv">
                <div class="row contactRow">
                    <div class="col-lg-6 contactForm">
                        <form class="contactForm" action="mailto:joshuaduncandev@gmail.com"
                              enctype="text/plain" method="POST">
                            <label class="cLabel" for="nameBox">Name:</label><br>
                            <input type="text" class="contactBox" id="nameBox" placeholder="John Doe"><br>
                            <label class="cLabel" for="emailBox">Email:</label><br>
                            <input type="email" class="contactBox" id="emailBox" placeholder="name@something.com"><br>
                            <label class="cLabel" for="commentBox">Message:</label><br>
                            <textarea type="textarea" class="contactBox" id="commentBox" placeholder="Message..." rows="5"></textarea><br>
                            <button type="submit" value="submit" class="btn-white" id="submitBtn">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-6 contactLinks">
                        <ul>
                            <li class="phone textContact"><i class="fa fa-phone"></i><span> Phone</span><a href="tel:435-657-0500">
                                    (435)
                                    503-1978</a></li>
                            <li class="email textContact"><i class="fa fa-envelope"></i><span> Email</span><a
                                    href="mailto:jduncan97@gmail.com">
                                    jduncan97@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
