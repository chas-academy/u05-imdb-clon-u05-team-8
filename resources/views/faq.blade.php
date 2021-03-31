<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/faq.css">
    <title>u05.test/FAQ</title>
</head>
<body>
  <!-- @include('menu'); -->
  <main>
    <section class="Accordion">
      <ul class="Accordion tabs">
        <!-- Question 1 -->
        <li class="Accordion tab" onclick="toggleAccordion(this)">
          <div class="Accordion tab headline">
            <h4>What is a watchlist?</h4><span class="icon"></span>
          </div>
          <div class="Accordion tab content">
            <div class="wrapper">
              <p>A watchlist is where you save potential movies or tv shows you wish to watch at a more convinient time. 
              </p>
            </div>
          </div>
        </li>
        <!-- Question 2 -->
        <li class="Accordion tab" onclick="toggleAccordion(this)">
          <div class="Accordion tab headline">
            <h4>Why do I need to register?</h4><span class="icon"></span>
          </div>
          <div class="Accordion tab content">
            <div class="wrapper">
              <p>You'll need to register inorder to leave reviews.
                </p>
                <p>And hey! Why not register what do you have to loose?
                  </p>
                </div>
              </div>
            </li>
            <!-- Question 3 -->
            <li class="Accordion tab" onclick="toggleAccordion(this)">
              <div class="Accordion tab headline">
                <h4>Who are in TEAM 8</h4><span class="icon"></span>
              </div>
              <div class="Accordion tab content">
                <div class="wrapper">
                  <p>Team 8 is a group of students working together to make a website?
                    </p>
                  </div>
                </div>
              </li>
              <!-- Question 4 -->
              <li class="Accordion tab" onclick="toggleAccordion(this)">
                <div class="Accordion tab headline">
                  <h4>Do you have every movie and tvshow?</h4><span class="icon"></span>
                </div>
                <div class="Accordion tab content">
                  <div class="wrapper">
                    <p>No, we have made a small website just to show off our skills.
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </section>
            <script src="/js/faq.js"></script>
      </main>
    @include('footer');
  </body>
</html>