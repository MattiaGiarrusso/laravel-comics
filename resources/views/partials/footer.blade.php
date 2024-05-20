<footer>
    <section id="footer-link" class="container">

       

        <nav class="nav-links">
            <div class="nav-item">

                {{-- @foreach ($footers as $footer)
                @dump($footer); --}}
                {{-- <h4 class="uppercase">{{ $footer[array ($title)] }}</h4>
                <ul class="ms-pdg-bottom-16">
                    @foreach ($footers['nav'] as $link)
                    <li>
                        <a href="#" alt="">{{ $footer[array ($links)] }}</a>
                    </li>
                    @endforeach
                </ul> --}}
                {{-- @endforeach --}}
        
            </div>
            
        </nav>
    
    
        <div class="img-container">
        </div>
        
    </section>
    
      <section id="footer-bottom" class="container">
    
        <div class="footer-left">
            <button>SIGN-UP NOW!</button>
        </div>
    
        <div class="footer-right">
            <span>FOLLOW US</span>
    
            <div class="social-icon">
                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">                
            </div>
            <div class="social-icon">
                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">                
            </div>
            <div class="social-icon">
                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">                
            </div>
            <div class="social-icon">
                <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="">                
            </div>
            <div class="social-icon">
                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">                
            </div>
    
        </div>  
        
      </section>



</footer>