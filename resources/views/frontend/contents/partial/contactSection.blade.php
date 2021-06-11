<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>Contact us</h2>
                </div>
                <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
                <h3 class="mt60">Main Office</h3>
                <p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
                <p class="con-item">0034 37483 2445 322</p>
                <p class="con-item">hello@company.com</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                {{-- <form action="{{route('contact.store')}}" method="POST" class="form-class">
                    @csrf
                    <input type="hidden" name="contactForStore" id="contactForStore">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" id="name" name="name" placeholder="Your name">
                            @error('name')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                        </div>
                        <div class="col-sm-6">
                            <input type="email" id="mail" name="mail" placeholder="Your email">
                            @error('mail')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                        </div>
                        <div class="col-sm-12">
                            <label class="hidden" for="subject"></label>
                            <input type="text" id="subject" name="subject" placeholder="Subject">
                            @error('subject')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                            <textarea id="message" name="message" placeholder="Message"></textarea>
                            @error('message')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                            <button type="submit" class="site-btn">send</button>
                        </div>
                    </div>
                </form> --}}
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->