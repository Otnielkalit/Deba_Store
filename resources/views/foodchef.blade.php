<!-- ***** Chefs Area Starts ***** -->
<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Agen & Pelayan DebaStore</h6>
                    <h2>Ayooo join sekarang</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($data2 as $data2)
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="{{ $data2->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $data2->instaram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ $data2->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                        <img height="300px"  src="agenimage/{{ $data2->image }}" alt="Chef #1">
                    </div>
                    <div class="down-content">
                        <h4>{{ $data2->name }}</h4>
                        <span>{{ $data2->speciality }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ***** Chefs Area Ends ***** -->
