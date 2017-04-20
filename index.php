<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LegalMatch Front-end Test by Marion Serenio - www.marionserenio.com - marion.serenio@gmail.com</title>
    <link rel="stylesheet" href="semantic.min.css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
    <link rel="stylesheet/less" type="text/css" href="style.less" />
    <script src="js/less-1.6.2.min.js" type="text/javascript"></script>
  <body>
  
  <header>
    <div class="ui container">
      <div class="ui grid stackable">
        <div class="eight wide column">
          <a href="/" id="logo"><img src="img/legalmatch_logo.png" alt=""></a>
        </div>
        <div class="eight wide column">
          <div class="benefits-list">
            <ul>
              <li>No fee to present your case</li>
              <li>Choose from lawyers in your area</li>
              <li>a 100% confidential service</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="hero">
    <div class="ui container">
      <div class="ui grid stackable">
        <div class="ten wide column">
          <h1>Find a Lawyer for your Legal Issue</h1>
          <h2>Fast, Free and Confidential</h2>

          <div class="search-form">
            <div class="zip">
              <label for="">Enter Zip Code or City:</label>
              <input type="text" class="zip-input" placeholder="Does not have to be where you live">
            </div>

            <div class="category">
              <label for="">Choose a category: </label>
              <input type="text" id="tags" class="category-input" placeholder="Click to choose a legal category">
            </div>            
            
            <p>
              <a href="#category-search" class="cant-find-category" rel="leanModal">Can't find your category? <span>Click here</span></a>
            </p>
          </div>
        </div>

        <div class="six wide column reviews">
          <h3>Clients review LegalMatch lawyers</h3>

            <ul class="reviews-list">
              <li>
                <div class="img-container">
                  <img src="img/review_img_1.png" alt="">
                  <p><span class="name">Mitchell M.</span>
                  <span class="location">Cherry Hill, NJ</span></p>
                </div>
                <div class="meta-container">
                  <div class="top">
                      <span class="practice">Family Law </span>
                      <div class="stars-container">
                        <i class="icon star"></i>
                        <i class="icon star"></i>
                        <i class="icon star"></i>
                        <i class="icon star"></i>
                      </div>
                    </div>
                    <div class="bottom">
                      <p class="review">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et ... </p>
                      <a href="#review-modal-1" class="read-more" rel="leanModal">Read Review </a>
                    </div>
                </div>
              </li>
              <li>
                <div class="img-container">
                  <img src="img/review_img_2.png" alt="">
                  <p><span class="name">Joel C.</span>
                  <span class="location">Little Rock, AK</span></p>
                </div>
                <div class="meta-container">
                  <div class="top">
                      <span class="practice">Job & Employment Law</span>
                      <div class="stars-container">
                        <i class="icon star"></i>
                        <i class="icon star"></i>
                        <i class="icon star"></i>
                        <i class="icon star"></i>
                      </div>
                    </div>
                    <div class="bottom">
                      <p class="review">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et ... </p>
                      <a href="#review-modal-1" class="read-more" rel="leanModal">Read Review </a>
                    </div>
                </div>
              </li>              
              <li>
                <div class="img-container">
                  <img src="img/review_img_3.png" alt="">
                  <p><span class="name">Brigida R.</span>
                  <span class="location">Dallas, TX</span></p>
                </div>
                <div class="meta-container">
                  <div class="top">
                      <span class="practice">Family Law </span>
                      <div class="stars-container">
                        <i class="icon star"></i>
                        <i class="icon star"></i>
                        <i class="icon star"></i>
                        <i class="icon star"></i>
                      </div>
                    </div>
                    <div class="bottom">
                      <p class="review">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et ... </p>
                      <a href="#review-modal-1" class="read-more" rel="leanModal">Read Review </a>
                    </div>
                </div>
              </li>              
            </ul>
        </div>
      </div>
    </div>
  </div>


<div id="category-search" class="category-search modal">
  <a href="#" class="close-modal"><i class="icon close"></i></a>
  <div class="ui container">
    <div class="ui grid">
      <div class="sixteen wide column">
        <h5><span class="number">3</span>Which Family law issue(s) apply to your case</h5>
      </div>
      <div class="eight wide column">
        <div class="ui checkbox">
          <input type="checkbox" name="example">
          <label>Adoptions</label>
        </div>
        <div class="ui checkbox">
          <input type="checkbox" name="example">
          <label>Guardianship</label>
        </div>        
        <div class="ui checkbox">
          <input type="checkbox" name="example">
          <label>Child Custody and Visitation</label>
        </div>        
        <div class="ui checkbox">
          <input type="checkbox" name="example">
          <label>Paternity</label>
        </div>        
      </div>
      <div class="eight wide column">
        <div class="ui checkbox">
          <input type="checkbox" name="example">
          <label>Child Support</label>
        </div>
        <div class="ui checkbox">
          <input type="checkbox" name="example">
          <label>Separations</label>
        </div>        
        <div class="ui checkbox">
          <input type="checkbox" name="example">
          <label>Divorce</label>
        </div>        
        <div class="ui checkbox">
          <input type="checkbox" name="example">
          <label>Spousal Support or Alimony</label>
        </div>        
      </div>      

      <div class="sixteen wide column cta-container">
        <a href="#" class="ui button mediu circular cta">FIND A LAWYER NOW</a>
      </div>
    </div>
  </div>
</div>

<div id="review-modal-1" class="review-modal modal">
  <a href="#" class="close-modal"><i class="icon close"></i></a>
  <div class="ui container">
    <div class="ui grid">
      <div class="sixteen wide column">
        <h6>CLIENT REVIEWS</h6>
        <div class="attorney-meta">
          <div class="img-container">
            <img src="img/review_big_1.png" alt="">
          </div>
          <div class="meta">
            <span class="name">Brigida R.</span>
            <span class="location">Dallas, TX</span>
            <span class="practice">Family Law</span>
          </div>
        </div>
      </div>
      
      <div class="sixteen wide column">
        <div class="overall-ratings">
          <h5>Rating <span>(29 users)</span> <i class="icon star"></i><i class="icon star"></i><i class="icon star"></i><i class="icon star"></i><i class="icon star grey"></i></h5>

          <h4>Overall</h4>
          <ul>
            <li>
              <p>Responded in a timely ;manner</p> 
              <div class="stars">
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star grey"></i>
              </div>
            </li>
            <li>
              <p>Answered questions clearly</p> 
              <div class="stars">
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star grey"></i>
              </div>
            </li>            
            <li>
              <p>Understood needs</p> 
              <div class="stars">
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star grey"></i>
              </div>
            </li>            
            <li>
              <p>Gave complete and clear information</p> 
              <div class="stars">
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star grey"></i>
              </div>
            </li>            
            <li>
              <p>Good value for money</p> 
              <div class="stars">
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star grey"></i>
              </div>
            </li>    
            <li>
              <p>Would hire again</p> 
              <div class="stars">
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star grey"></i>
              </div>
            </li>                     
            <li>
              <p>Would recommend to friend</p> 
              <div class="stars">
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star"></i>
                <i class="icon star grey"></i>
              </div>
            </li>             
          </ul>
        </div>
      </div>

      <div class="sixteen wide column one-review">
        <div class="stars">
          <i class="icon star"></i>
          <i class="icon star"></i>
          <i class="icon star"></i>
          <i class="icon star"></i>
          <i class="icon star grey"></i>
        </div>        
        <h4>by Dexter Marchal, 06/10/2016</h4>
        <p>Deb did a great job. Got my bench warrant set aside ... was sure I was
        going to jail ... phew. Judge seemed to respect her and I got what I </p>
        <a href="#" class="close-modal">Close</a>
      </div>

    </div>
  </div>
</div>


  <footer>
    <div class="ui container">
      <div class="ui grid stackable">
        <div class="three wide column">
          <a href="" id=""><img src="img/footer_img.jpg" alt=""></a>
        </div>
        <div class="ten wide column links">
          <nav>
            <ul>
              <li><a href="#">User Agreement</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Site Map</a></li>
            </ul>
          </nav>
          <p>Copyright 199-2016 LegalMatch. All rights reserved. LegalMatch <br>
            The LegalMatch logo, and the tradress are trademarks of LegalMatch. Patents Pending.</p>
        </div>
        <div class="three wide column">
          <img src="img/ratings.jpg" alt="" class="ratings">
        </div>         
      </div>
    </div>   
  </footer>
  

    <script src="js/vendor/jquery.min.js"></script>
    <!-- <script src="js/jquery-ui.min.js"></script> -->
    <script src="js/jquery-ui-1.9.2.custom.min2.js"></script>
    <script src="semantic.min.js"></script>
    <script src="js/jquery.leanModal.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
