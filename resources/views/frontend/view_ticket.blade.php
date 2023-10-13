<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cholo Bangladesh</title>
    <link rel="stylesheet" href="{{ asset("frontend/styles/ticket.css") }}" />
  </head>
  <body>
    <!-- Free Ticket is header start here  -->
    <header>
      <h1>Free Ticket</h1>
      <p>
        Please bring COLOR LASER PRINT <br />and mentioned PHOTO ID with you
      </p>
    </header>
    <!-- Free Ticket is header end here  -->

    <!-- Banner with gp logo, user and qrcode start here  -->
    <section class="banner">
      <div class="top-banner">
        <div class="gp">
          <img src="{{ asset("frontend/images/gpbanner.png") }}" alt="" />
        </div>
        <div class="user">
          <img src="{{ asset("frontend/images/images.jpg") }}" alt="" />
          <div>
            <h2 class="user_name">MD. Fardin Ahmed</h2>
            <p>Student</p>
          </div>
        </div>

        <div class="ticket_info">
          <div class="qrcode">
            <h1>QR Code</h1>
            <img src="{{ asset("frontend/images/QRCode.jpg") }}" alt="" />
            <p style="align-self: flex-start; padding: 5px 10px">Reg ID:</p>
          </div>
          <div class="gate_number">
            <h1>Gate</h1>
          </div>

          <div class="nid_number">
            <h1>NID</h1>
          </div>
        </div>
      </div>
      <div class="bottom-banner">
        <p class="venue">Venue: Bangladesh Army Stadium, Dhaka</p>
        <strong>;</strong>
        <p class="venue">Date: 20 october 2023</p>
        <strong>;</strong>
        <p class="open_time">Gates open at 12:00 PM</p>
      </div>
    </section>
    <!-- Banner with gp logo, user and qrcode end here  -->

    <!-- note means (*** There will be no parking facilities at the venue.) -->
    <div class="note">
      <h3 class="no_parking">
        *** There will be no parking facilities at the venue.
      </h3>
    </div>
    <!-- note means (*** There will be no parking facilities at the venue.) -->

    <!-- Terms and condition start here  -->
    <section class="terms">
      <h1 class="title">TERMS & CONDITIONS</h1>
      <div class="condition">
        <div class="left_cond">
          <p>
            1. There will be an initial screening of the ticket at the main
            gate, followed by scanning of the ticket at the numbered gates of
            the stadium
          </p>
          <p>
            2. The barcode must be readable by the scanner. Without a readable
            barcode, entry into the venue will not be allowed.
          </p>
          <p>
            3. Gates will open at 12:00 p.m. once entered into the venue, no
            re-entry will be allowed.
          </p>
          <p>
            4. Children below the age of 12 (twelve) will not be allowed entry
            at the event.
          </p>
          <p>
            5. No outside food or drinks will be allowed. Food will be available
            at the venue at reasonable prices. Water will also be available.
          </p>
          <p>
            6. Any kinds of tobacco or tobacco products will not be allowed
            inside the venue.
          </p>
          <p>
            7. The organizers reserve the right to close entry at any moment if
            the capacity is full.
          </p>
          <p>
            8. The organizers reserve the right to conduct security searches
            from time to time and also reserve the right to conﬁscate any time
            which may cause danger or disturbance to the other members of the
            audience and if deemed as a security threat.
          </p>
        </div>
        <div class="right_cond">
          <p>
            9. The organizers reserve the right to refuse entry or to remove
            from the premises, people, or persons deemed as a security threat or
            an element of disturbance.
          </p>
          <p>
            10. CCTV and cameras will be operational at the venue. Attending the
            event signiﬁes that the ticket holders agree to the ﬁlming and sound
            recording of themselves as members of the audience with no
            obligations of any kind on the organizer’s part
          </p>
          <p>
            11. Cameras of any kind whatsoever (other than those on mobile
            phones) are strictly prohibited inside the venue. The orga nizers
            reserve the right to conﬁscate such items
          </p>
          <p>
            12. Mobile phones must be kept in silent mode during all
            performances
          </p>
          <p>
            13. Any kind of electrical devices such as mobile phone chargers,
            headphones, bluetooth speakers, power banks, electronic cigarettes,
            and such will not be allowed inside the venue for security purposes
            and measures.
          </p>
          <p>
            14. Any kind of bags will not be allowed inside the venue, people
            carrying bags/bags will be asked to leave the premises immediately.
            (there will be no facilities for keeping bags at the venue.)
          </p>
          <p>
            15. Women are speciﬁcally requested to not bring purses larger than
            10 inches by 6 inches, where they can bring their phones, keys, and
            money. Any bags larger than this will not be allowed inside.
          </p>
        </div>
      </div>
    </section>
    <!-- Terms and condition end here  -->

    <!-- Organizer logo start here  -->
    <section class="organizer">
      <h1>Organizer:</h1>
      <img src="{{ asset("frontend/images/cholobd.png") }}" alt="" />
    </section>
    <!-- Organizer logo end here  -->

    <hr class="line" />

    <!-- Ticket Recipt start here  -->
    <section class="ticket_recipt">
      <div class="user">
        <img src="{{ asset("frontend/images/images.jpg") }}" alt="" />
      </div>

      <div class="recipt_info">
        <div class="gate">
          <h3>Gate:</h3>
        </div>
        <div class="name">
          <h3>Name:</h3>
        </div>
        <div class="mobile">
          <h3>Mobile:</h3>
        </div>
        <div class="place">
          <h3>Venue: Bangladesh Army Stadium, Dhaka.</h3>
          <h3>Date: 20 october 2023,</h3>
          <h3>Gates open at 12:00 PM</h3>
        </div>
      </div>

      <div class="qrcode">
        <h1>QR Code</h1>
        <img src="{{ asset("frontend/images/QRCode.jpg") }}" alt="" />
        <p style="align-self: flex-start; padding: 5px 10px">Reg ID:</p>
      </div>
    </section>
    <!-- Ticket Recipt end here  -->

    <!-- Organizer logo start here  -->
    <section class="bottom_organizer organizer">
      <h1>Organizer:</h1>
      <img src="{{ asset("frontend/images/cholobd.png") }}" alt="" />
    </section>
    <!-- Organizer logo end here  -->
  </body>
</html>
