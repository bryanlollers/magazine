@extends('layout.app')
@section('title') Artist Profile: Intel Japitana @endsection
@section('description') Intel Japitana is a multidisciplinary artist and curator. In this interview with New Reader Magazine, she talks about what, who, and where inspires her art @endsection

@section('content') 
<div class="full-container">
        <div class="row">
                <div id="left-section-about" class="col-md-7">
                    <hr class="divider-post">
                    <img src="/images/intel-japitana.jpg" style="width:100%;"><br><br>
                    <h4  class="active">Artist Profile: Intel Japitana </h4>
                    <p class="active"> Artist Profiles | December 2017 | by M. Dominique Dela Paz </p><br>
                    <p>
                            When I met Intel Japitana, it was at a birthday party on a boat in the middle of summer 2016. A mutual friend introduced us. We were both in Cebu at the time—which, for those of you who don’t know,
                             is both a major city and an island in the Philippines. In Cebu you can rent a bangka (a type of boat) for relatively cheap and spend whole days swimming and boozing,
                              which is a whole different kind of affair from very civilized, very posh yachting. I didn’t have much of an impression of Intel then, mostly because there were rum and Cokes, it was a hot day, and 
                              the combination of that and saltwater meant dehydration and drunkenness.
                    </p>
                    <p>
                            The next time we spoke, a little more sober this time, it was a few days later at Qube on the opening night of “Better Yet, Don’t,” an exhibit featuring eleven artists, including Intel. 
                            She was sleek and cool in all black—black bob, red wine, talking to people with the ease and confidence of someone who is totally in their element. And it’s unsurprising that Intel would be 
                            at ease in this setting; she’s been doing this for a while. Barely out of college, Intel started out as a conceptual photographer and not long after was snapped up by an art agency in Bahrain,
                             where she was a studio supervisor and press photographer until she realized that her work was calling her back to the Philippines.
                    </p>
                    <p>
                            Born and raised in Victorias City, Intel Japitana has made a name for herself as both an independent art curator, an art director, and an artist of many mediums. She says, 
                            “I believe that there are too many forms of art to just stick to one form. I started exploring experimental media in 2012, but my first medium is photography.”
                    </p>
                    <p>
                            Intel, who started taking pictures at 10 years old, says that she uses photography to “freeze moments” and “keep them for a lifetime. I love exploring and assimilating with various cultures, 
                            so during my travels, I always take photographs and keep [them] as my personal ephemera. Mostly my photographs are inspired from people and the culture around me.”
                    </p>
                    <p> 
                            Intel’s desire to freeze moments becomes apparent in her photography, as in the photo series, “Fishers of Men.” The subjects, fishermen, rise out of the sea like statues. Like monoliths.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/images/fishers-of-men-1.jpg" width="100%">
                        </div>
                        <div class="col-md-6">
                            <img src="/images/fishers-of-men-2.jpg" width="100%">
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                    <br>
                    <p>
                            Bodies and skin feature heavily in her earlier photographs—a naked-but-not-nude and not-quite-feminine fierceness. (Compare her nudes with her photo series “Meat” and older pieces on her 
                            <a href="https://cargocollective.com/Meather" target="_blank">page.</a>)
                     </p>
                    <img src="{{asset('images/nude.jpg')}}" width="100%" class="filter">
                    <i>Image is NSFW. Click <b data-toggle="modal" data-target="#myModal" style="cursor:pointer;">here</b> to view original image.</i>
                    <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-md">
                              <div class="modal-content">
                                
                                <div class="modal-body">
                                  <img src="{{asset('images/nude.jpg')}}" width="100%">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal" style="background:#000; color:#ffffff;">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br><br>
                    <p>
                            Her installation at Qube featured a lone female figure who, trapped in a net held up by disembodied hands, looks defiantly over her shoulder at the viewer—or away, depending on where 
                            you’re standing. At her feet are skulls, and it’s not clear whether these are her victims or if, like her, they are trapped in the net too.
                    </p>     
                    <br>
                   
                <img src="{{asset('images/installation.jpg')}}" width="100%"><br><br>
                <div style="text-align:center;">
                    <p> Intel Japitana, “Dream Blocker” </p>
                    <p>“When a dream blocker comes my way, I feel frozen and trapped inside a net. Yet my inner glow keeps my psyche going. I 
                            realized a long time ago that by not listening to them (dream blockers) and just believing in my own capacities, I can  
                            overcome anything and be in a better place that I chose for myself.” </p>
                    
                </div>
                <p>
                        Several of her installations feature skulls and disembodied parts—a kind of memento mori. “My works are all about the sensation of life, like the banality of our own existence,” 
                        she said, when asked about her favorite themes to explore.
                </p>
                <p>
                        These days Intel lives in Texas, USA, where she’s “focusing more on the issue of how immigration and borders affect the culture of an individual, as I am currently an immigrant myself.”
                </p>
                <p>
                        People can (and do) expect great things from the artist, whose style is constantly evolving. “I still . . . explore and try out different identities for myself. 
                        My style is so contrasting, especially as I’m working with diverse media. I still want to learn multiple visual languages and be versatile and to have an overall understanding of everything that
                         is out there.”
                </p>
                <div id="demo" class="carousel slide" data-ride="carousel">

               
                       
                      
              
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                                <img src="{{asset('images/img1.jpg')}}"  style="width:100%">
                          </div>
                          <div class="carousel-item">
                                <img src="{{asset('images/img2.jpg')}}"  style="width:100%">
                          </div>
                          <div class="carousel-item">
                                <img src="{{asset('images/img3.jpg')}}"  style="width:100%">
                          </div>
                          <div class="carousel-item">
                                <img src="{{asset('images/img4.jpg')}}"  style="width:100%">
                          </div>
                          <div class="carousel-item">
                                <img src="{{asset('images/img5.jpg')}}"  style="width:100%">
                          </div>
                          <div class="carousel-item">
                                <img src="{{asset('images/img6.jpg')}}"  style="width:100%">
                          </div>
                          <div class="carousel-item">
                                <img src="{{asset('images/img7.jpg')}}"  style="width:100%">
                          </div>
                          <div class="carousel-item">
                                <img src="{{asset('images/img8.jpg')}}"  style="width:100%">
                          </div>
                          <div class="carousel-item">
                                <img src="{{asset('images/img9.jpg')}}"  style="width:100%">
                          </div>
                          <div class="carousel-item">
                                <img src="{{asset('images/img10.jpg')}}"  style="width:100%">
                          </div>
                          <div class="carousel-item">
                                <img src="{{asset('images/img11.jpg')}}"  style="width:100%">
                          </div>
                          <div class="carousel-item">
                                <img src="{{asset('images/img12.jpg')}}"  style="width:100%">
                          </div>
                          <div class="carousel-item">
                                <img src="{{asset('images/img13.jpg')}}"  style="width:100%">
                          </div>
                        </div>
                      
                    
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            
                                <span style="font-size:80px; color:#b42828;" class="hover-this">	&#8249;</span>
                                
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next" >
                            
                        
                          <span style="font-size:80px; color:#b42828;" class="hover-this">&#8250;</span>
                        </a>
                      
                      </div>
                      <br>
                      <video width="100%" controls>
                        <source src="{{asset('videos/fishers-of-men.mp4')}}" type="video/mp4">
                            
                        </video>
                
                </div>
                
                <div id="right-section-terms" class="col-md-5">
                        <hr class="divider-post">
                        <h2  class="active"> FICTION/POETRY </h2>
                        <p>
                            Cacia Zoo: Final Boss <br> <span>Artist Profiles | August 2018 </span>
                        </p>
                         <p>
                            Workshop of a Rape Story  <br> <span>Fiction | Lucy Marcus </span>
                        </p>
                         <p >
                            Poems by Jan Dalisay  <br> <span>Poetry | Jan Dalisay (Philippines)</span>
                         </p>
                         <p>
                            Artist Profile : Jan Sunday <br> <span>Artist Profiles | February 2018 </span>
                        </p>
                    
                         <p>
                                Artist Profile : Don Mancha's Purgatory   <br> <span>Artist Profiles | December 2017 </span>
                        </p>
                        <p class="active">
                                Artist Profile : Intel Japitana  <br> <span>Artist Profiles | December 2017 </span>
                         </p>

                        <p>
                                Right Words <br> <span>Poetry | Tiny Diapana (Philippines)</span>
                        </p>
             
                </div>
        </div>
</div>
@endsection