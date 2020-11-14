@extends ('layouts.master')

@section ('content')
    <div class="about" id="aboutLink">
        <div class="container-fluid aboutMe pt-4 pb-4">
            <p class="subHeader">About Me</p>
            <div class="row aboutRow">
                <div class="aboutCols col-lg-6">
                    <h1>Bio</h1>
                    <img class="profileImage float-left pr-3" src="images/2020Profilesm.jpg" alt="Profile">
                    <p> Hi, I'm Joshua Duncan! <br><br>
                        I'm currently working my way through a full stack development bootcamp through the University of
                        Utah.
                        I've always had a strong passion for tech and the amazing things that can be done through full
                        stack
                        development.
                        <br><br>
                        My work for the last 20 years has been in the art publishing business with graphic design and
                        overall business
                        management being my main focus.
                        I've worked with large publishers and distributors around the country and spent time in Hong
                        Kong on
                        printing
                        projects. During that work though
                        I've built websites and dealt with business online through self taught practices. I am focusing
                        now
                        on
                        learning the full suite of resources to take my online development to the next level. While I
                        love
                        the art
                        business, I would welcome a new challenge in the
                        developement world.
                        <br><br>
                        I am becoming fluent in HTML, CSS, JavaScript, Node.js, MongDB and many more languages and
                        programs
                        throughout
                        my bootcamp experience.
                        <br><br>
                        When not coding I love to spend time otdoors with my family. Fishing, hiking and enjoying
                        wildlife
                        are some of
                        my hobbies.
                        I'm an avid gamer and enjoy movies and entertainment media in general.
                    </p>
                </div>
                <div class=" aboutCols col-lg-6 border-left border-white">
                    <h1>Skills</h1>
                    <ul>
                        <li><i class="fas fa-file-code"></i> HTML</li>
                        <li><i class="fab fa-css3-alt"></i> CSS</li>
                        <li><i class="fab fa-js-square"></i> JavaScript</li>
                        <li><i class="fab fa-bootstrap"></i> Bootstrap, Flexbox, Grids</li>
                        <li><i class="fas fa-database"></i> Mongo, MySQL</li>
                        <li><i class="fas fa-server"></i> Express</li>
                        <li><i class="fab fa-node-js"></i> Node.js</li>
                        <li><i class="fab fa-react"></i> React.js</li>
                        <li><i class="fab fa-adobe"></i> Adobe Photoshop</li>
                        <li><i class="fab fa-adobe"></i> Adobe Indesign</li>
                        <li><i class="fab fa-adobe"></i> Adobe Illustrator</li>
                        <li><i class="fab fa-microsoft"></i> Microsoft Office</li>
                    </ul>

                </div>

            </div>
            <div class="resumeDown">
                <button type="button" class="btn btn-outline-light btn-lg btn-block">
                    <a href="downloads/joshduncanresume.pdf" download="joshduncanresume.pdf">Download My Resume</a>
                </button>
            </div>
        </div>

    </div>
@endsection
