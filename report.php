<!DOCTYPE html>
<html lang="en-gb">

<?php include 'form/db.php';
  if(isset($_GET['date'])){
    $date = explode(" - ",$_GET['date']);
  }

  $sql = "SELECT name, email, phone, description, date FROM contact_form WHERE website='americansbusinessloan.com'" . (isset($_GET['date']) ? ' AND date >= "'.  $date[0].' 00:00:00" AND date <= "'.  $date[1].' 23:59:59"' : '');
  $result = $conn->query($sql);
?>

<head>
  <title>Reporting | Americans Business Loan</title>
  <meta charset="utf-8">
  <meta content="content-type">
  <link rel="alternate" hreflang="en-US" href="index.html">
  <meta
    content="When Americans Business Loan was founded, businesses weren't given access to finance and investors were making poor returns. Read more about our story here."
    name="description">
  <meta
    content="Americans Business Loan, business loans, peer to peer lending, crowdfunding, social lending, peer to business lending, p2p lending"
    name="keywords">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1.0, user-scalable=no">
  <link rel="preconnect" href="https://dgnvhpcjbd3ba.cloudfront.net/" crossorigin>
  <script src="v0-5/honeybadger.min.js" type="text/javascript" data-apikey="6ce6763c"></script>
  <link rel="stylesheet" href="css/m2dm/uk/static_subdomain/radius-43146fa1.css">
  <link rel="apple-touch-icon" sizes="180x180"
    href="img/global/favicons/static_subdomain/apple-touch-icon-cd69dd32.png">
  <link rel="icon" type="image/png" sizes="32x32"
    href="img/global/favicons/static_subdomain/favicon-32x32-17680008.png">
  <link rel="icon" type="image/png" sizes="16x16"
    href="img/global/favicons/static_subdomain/favicon-16x16-c238e528.png">
  <link rel="manifest" href="https://static.fundingcircle.com/img/global/favicons/manifest-ced87905.json">
  <link rel="mask-icon" href="img/global/favicons/static_subdomain/safari-pinned-tab-a0b6cc8a.png" color="#75227d">
  <link rel="shortcut icon" href="/img/global/favicons/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="Americans Business Loan">
  <meta name="application-name" content="Americans Business Loan">
  <meta name="msapplication-TileColor" content="#75227d">
  <meta name="msapplication-TileImage"
    content="https://static.fundingcircle.com/img/global/favicons/mstile-144x144-855f5df4.png">
  <meta name="msapplication-config"
    content="https://static.fundingcircle.com/img/global/favicons/browserconfig-fe5ef98f.xml">
  <meta name="theme-color" content="#75227d">
  <link rel="canonical" href="https://www.fundingcircle.com/uk/about-us/">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- Start of LiveChat (www.livechatinc.com) code -->
  <script>
    window.__lc = window.__lc || {};
    window.__lc.license = 12727887;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
  </script>
  <noscript><a href="https://www.livechatinc.com/chat-with/12727887/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
  <!-- End of LiveChat code -->
</head>

<body class="pg-about-us">
     <a data-toggle="modal" data-target="#contactModal" class="apply-now-float">Apply Now</a>
  <!-- Modal -->
  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center">
            <small class="text-center">For Immediate Assistance Please Call Now</small>
            <br>
            <h5 class="text-center"><b>3463269984</b></h5>
          </div>
          <br>
          <form id="contact-us" action="form/contact-us.php" method="POST">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Enter Full Name" required>
            </div>
            <div class="form-group">
              <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" minlength="10" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="description"rows="5" placeholder="Your message here"></textarea>
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <header class="header" data-js-header role="banner">
    <div class="header__upper">
      <div class="header__inner">
        <div class="header__navbar">
          <ul class="header__nav header__nav--controls">
            <li class="header__nav-item header__nav-item--comfortable">
              <a href="tel:3463269984">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
                3463269984
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="header__primary">
      <div class="header__inner">
        <div class="header__navbar"><a href="index.html" class="header__logo header__logo--comfortable"><img src="radius/11-9-1/logos/logo.png" alt="Americans Business Loan home page"></a>
          <div class="header__nav">
            <nav class="header__nav--scrollable u-valign-center" role="navigation">
              <a class="header__nav-link" href="index.html">Home</a> 
              <a class="header__nav-link" href="about-us.html">About us</a>
              <a class="header__nav-link" href="get-business-loan.html">Business Loan</a>
              <a class="header__nav-link" href="credit-line.html">Credit Line</a> 
              <a class="header__nav-link" href="loan-calculator.html">Loan Calculator</a> 
            </nav>
            <div class="header__menu-icon"><button type="button" class="header__nav-link" data-js-overlay-open>
                <div class="u-valign-center"><svg class="icon" width="16" height="16" viewbox="0 0 16 16"
                    xmlns="http://www.w3.org/2000/svg">
                    <title>menu icon</title>
                    <g fill-rule="nonzero">
                      <path d="M13 3H3v2h10"></path>
                      <path d="M13 7H3v2h10"></path>
                      <path d="M13 11H3v2h10"></path>
                    </g>
                  </svg><span>More</span></div>
              </button></div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-overlay" data-js-header-overlay aria-hidden="true">
      <div class="header-overlay__window">
        <div class="u-page-grid">
          <div class="header-overlay__top-row">
            <div class="header-overlay__top-row-item header-overlay__top-row-item--logo">
              <a href="index.html" class="header__logo">
                <img src="radius/11-9-1/logos/logo.png" alt="Americans Business Loan home page">
              </a>
            </div>
            <div class="header-overlay__top-row-item u-text-right">
              <button class="header__close-btn" type="button" data-js-overlay-close aria-label="Close this window">Less</button>
            </div>
          </div>
          <div class="header-overlay__row">
            <nav class="header-overlay__lists header-overlay__lists--main" role="navigation">
              <div>
                <a class="cta-link header-overlay__context-link" href="get-business-loan.html">Business Loan</a>
                <p class="header-overlay__context-details">Take your next step with fast, affordable business finance.</p>
                <ul class="header-overlay__list">
                  <li><a class="cta-link" href="get-business-loan.html#cbils">Coronavirus business interruption loan scheme</a></li>
                  <li><a class="cta-link" href="get-business-loan.html#bb">Bounce back loan scheme</a></li>
                  <li><a class="cta-link" href="get-business-loan.html#sbl">Small business loans</a></li>
                </ul>
              </div>
              <div><a class="cta-link header-overlay__context-link" href="about-us.html">About us</a>
                <p class="header-overlay__context-details">Find out how we&rsquo;re building a better financial world.
                </p>
              </div>
            </nav>
          </div>
          <div class="header-overlay__row">
            <nav class="header-overlay__lists header-overlay__footer-lists" role="navigation">
              <div>
                <div class="u-mb-small"><strong>Support</strong></div>
                <ul class="header-overlay__list">
                  <li><a class="header-overlay__list-link" data-toggle="modal" data-target="#contactModal">Contact us</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main data-role="wrap">
     <!-- ======= Hero Section ======= -->
  <section style="padding-top: 200px; background-color:#59c8d0; min-height: 90vh;">
    <div class="d-flex justify-content-center m-auto w-50">
      <input class="date form-control mt-2 mb-2" id="date" placeholder="<?php echo (isset($_GET["date"]) ? $_GET['date'] : "Search by Date"); ?>" type="text" style="width: 300px">
      <?php
        if(isset($_GET['date'])){ ?>
        <img cwidth=25 height=25 onclick="window.location.replace('report.php')" style="cursor:pointer; margin-left: 15px; margin-top: 15px;" src="assets/img/x.png" alt="">
      <?php } ?>
      <button class="btn btn-primary search">Search</button>
    </div>
    <div class="d-flex justify-content-center">
      <?php echo $result->num_rows ?> results found
    </div>
    <div class="table-container table-responsive m-auto w-75">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php
            
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<tr>";
                  echo "<td>".$row['name']."</td>";
                  echo "<td>".$row['email']."</td>";
                  echo "<td>".$row['phone']."</td>";
                  echo "<td>".$row['date']."</td>";
                echo "</tr>";
              }
            } else {
              echo "<td colspan=5>0 results</td>";
            }
          ?>
        </tbody>
      </table>
    </div>
  </section><!-- End Hero -->
  </main>
  <footer class="footer">
    <section class="footer__inner">
      <div class="footer__row-1">
        <nav class="footer__nav-lists footer__links">
          <div>
            <h3 class="footer__list-heading">Americans Business Loan</h3>
            <ul class="footer__list">
              <li><a href="about-us.html">About us</a></li>
              <li><a data-toggle="modal" data-target="#contactModal">Contact us</a></li>
            </ul>
          </div>
          <div>
            <h3 class="footer__list-heading">Get A Business Loan</h3>
            <ul class="footer__list">
              <li><a href="get-business-loan.html#cbils">CBILS</a></li>
              <li><a href="get-business-loan.html#bb">Bounce back loan scheme</a></li>
              <li><a href="get-business-loan.html#sbl">Small business loans</a></li>
            </ul>
          </div>
        </nav>
        <div class="footer__copy-legal">
          <p>"AmericansBusinessLoan" is a life saving opportunity for businesses affected by coronavirus to overcome their struggles and break the chain of debts.</p>
          <p>We have been helping small businesses to grow and large enterprises to manage their financial needs since 2012. We have had the privilege of working with revolutionary start-ups in which are now, leading the world in technology, hospitality, food, and clothing sectors.</p>
        </div>
      </div>
    </section>
  </footer>
  <script src="v2/polyfill.min.js"></script>
  <script src="js/static_subdomain/scripts-aa8d12a3.js" defer></script>
  <script src="js/static_subdomain/dynamic-values-145aa2e6.js" defer></script>
  <script src="iframe_api.js"></script>
  <script src="js/static_subdomain/radius-m2dm-fe52cc1b.js" defer></script>
  <script async type="text/javascript"
    src="_incapsula_resource_swjiylwa_719d34d31c8e3a6e6fffd425f7e032f3_ns_1_cb_2118249498.js"></script>

  
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  
</body>
</html>

<script>
  $("#contact-us").submit(function(e) {
    return;
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
      type: "POST",
      url: url,
      data: form.serialize(),
      success: function(response)
      {
          alert('Thank you, we will contact you as soon as possible');
      }
    });
  });

  $(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 100) {
      $('.apply-now-float').css('opacity',100);
    } else {
      $('.apply-now-float').css('opacity',0);
    }
  });

  $(document).ready(function() {
    var options = {
      singleDatePicker: false,
      showDropdowns: true,
      showWeekNumbers: true,
      showISOWeekNumbers: true,
      timePicker24Hour: true,
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      locale: {
        format: 'YYYY-MM-DD'
      }
    };
    $('.date').daterangepicker(options);
  });

  $('.search').on('click', function(){
    window.location.replace('report.php?date='+$('#date').val());
  });
</script>