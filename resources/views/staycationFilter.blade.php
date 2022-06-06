<div class="hotelWrapper">
                @foreach ($staycations as $staycation)
                <a href="{{ route('staycations.display',$staycation->id) }}" target="_blank">
                <div class="carousel-info-box">

                <div class="carouselBox">
                    <div id="{{'myCarousel' . $num = ++$i}}" class="carousel slide itemBox">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="{{'#myCarousel' . $num}}" data-slide-to="0" class="active"></li>
                        <li data-target="{{'#myCarousel' . $num}}" data-slide-to="1"></li>
                        <li data-target="#{{'#myCarousel' . $num}}" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="images/{{$staycation->mainImg}}" style="height: 200px;" alt="Image1">
                        </div>

                        <div class="item">
                          <img src="images/{{$staycation->subImg1}}" style="height: 200px;" alt="Image2">
                        </div>

                        <div class="item">
                          <img src="images/{{$staycation->subImg2}}" style="height: 200px;" alt="Image3">
                        </div>
                      </div>


                      <!-- Left and right controls -->
                      <a class="left carousel-control controlVisibility" href="{{'#myCarousel' . $num}}" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control controlVisibility" href="{{'#myCarousel' . $num}}" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                    <div class="info">
                        <p>Rental Unit</p>
                        <p><b>{{$staycation->name}}</b></p>
                        <p><b>{{$staycation->typeofPlace}}</b></p>
                        <p><b>{{$staycation->privacyType}}</b></p>
                        <p>Guest | Studio | Bath</p>
                        <p>Wifi | Air Conditioning | Free Parking</p>
                        <p>Price: </p>
                        <span class="glyphicon">&#xe007; Review</span>
                    </div>
                  </div>
                  </a>


                  @endforeach
