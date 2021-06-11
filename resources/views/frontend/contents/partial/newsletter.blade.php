<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form action="{{route('newsletter.store')}}" method="POST" class="nl-form">
                    @csrf
                    <input type="hidden" name="newsletterForStore" id="newsletterForStore">
                    <input type="email" id="mail" name="mail" placeholder="Your e-mail here">
                    @error('mail')
                    <span class="text-red-400">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror        
                    <button type="submit" class="site-btn btn-2">Newsletter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->