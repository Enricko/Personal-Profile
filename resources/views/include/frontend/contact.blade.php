<section class="w3l-news-sec" id="contact">
    <div class="footer17-sub pt-5">
        <div class="container py-md-5 py-4">
            <div class="text-center mb-5">
                <h3 class="title-style" style="font-size:50px;">Contact</h3>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-12 mt-5">
                    <h2 class="title mb-3">Address</h2>
                    @foreach($personal_info as $row)
                    <div class="row">
                        <div class="col-1 pr-0">
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-11">
                        <p>{{ $row->alamat }}</p>
                        </div>
                        <div class="col-1 pr-0 mt-2">
                            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-11 mt-2">
                            <p>+62 {{ $row->phone }}</p>
                        </div>
                        <div class="col-1 pr-0 mt-2">
                            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-11 mt-2 mb-3">
                            <p>{{ $row->email }}</p>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.01060792428243!2d110.36219710078032!3d-7.877302932523416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x50e9c0b88a9733d9!2zN8KwNTInMzguNCJTIDExMMKwMjEnNDQuNiJF!5e0!3m2!1sid!2sid!4v1656774481782!5m2!1sid!2sid" 
                        width="600" height="450" style="border:0;" allowfullscreen="" 
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-7 col-sm-12 mt-lg-0 mt-5">
                    <h4 class="mb-4 mt-5">Tinggalkan Pesan</h4>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p>{{ $message }}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="/contact/insert" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="info">
                            <label><span class="fa mr-2 fa-user info-title" aria-hidden="true" > Nama</span></label>
                            <input class="contact-input" type="text" name="nama" placeholder="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="" >
                            <div class="clearfix"></div>
                        </div>
                        <div class="info" id="contact-us">
                            <label><span class="fa mr-2 fa-envelope-open info-title" aria-hidden="true"> Email</span></label>
                            <input class="contact-input" type="email" name="email" placeholder="mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="" >
                            <div class="clearfix"></div>
                        </div>
                        <div class="info">
                            <label><span class="fa mr-2 fa-phone info-title" aria-hidden="true"> Phone</span></label>
                            <input class="contact-input" type="number" name="phone" placeholder="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="" >
                            <div class="clearfix"></div>
                        </div>
                        <div class="info">
                            <label><span class="fa mr-2 fa-edit info-title" aria-hidden="true"> Pesan</span></label>
                            <textarea class="contact-input" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="" placeholder="Pesan..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-secondary float-right">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>