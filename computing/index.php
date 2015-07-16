<?php include_once("../header.php"); ?>

      <div id="contentArea">
        <div class="container" id="contentContainer">
          <div class="row">

            <div class="col s12 m8 l9">
              <h1 class="light grey-text text-darken-4 header">Computing</h1>
              <h3 class="light grey-text text-darken-4 header">FreeBSD</h2>
              <p class="light grey-text text-darken-4">    
                What is FreeBSD? To quote the official <a href="http://www.freebsd.org/">site</a>, "<i>FreeBSD is an advanced computer operating system used to power modern servers, desktops and embedded platforms.</i>"
              </p>
                
              <p class="light grey-text text-darken-4">
                I first came in to contact with FreeBSD in 2012, as a volunteer for <a href="http://jupiterbroadcasting.com/">Jupiter Broadcasting</a>.
                Since then, I have developed a detailed understanding of the operating system, and contribute
                back to the project where I can.
              </p>

              <p class="light grey-text text-darken-4">
                One way in which I contribute is with the ports tree, which is the system
                used by FreeBSD to obtain 3rd party software (roughly analogous to the package repos of various
                Linux distros). If I have any issues with any software I use, I will either submit an issue, or
                if I have the skills to resolve it, a patch. Two ports that I have contributed to are <a href="http://svnweb.freebsd.org/ports/head/www/owncloud/">www/owncloud</a>
                and <a href="http://svnweb.freebsd.org/ports/head/net/openldap24-server">net/openldap24-server</a>.
                In addition to this, I am the maintainer for the following ports:
                <ul class="light grey-text text-darken-4">
                  <li><i class="mdi-navigation-chevron-right"></i><a href="http://svnweb.freebsd.org/ports/head/security/d0_blind_id/">security/do_blind_id</a></li>
                  <li><i class="mdi-navigation-chevron-right"></i><a href="http://svnweb.freebsd.org/ports/head/games/minecraft-server/">games/minecraft-server</a></li>
                </ul>
              </p>

              <p class="light grey-text text-darken-4">
                This website is actually powered by FreeBSD, running a combination of nginx and php-fpm. I try
                to self-host where I can (in an administration sense, not a geographical one), for both
                educational and privacy reasons. This means that I have configured a variety of services, including:
                <ul class="light grey-text text-darken-4">
                  <li><i class="mdi-navigation-chevron-right"></i>Web server (nginx and php-fpm)</li>
                  <li><i class="mdi-navigation-chevron-right"></i>Mail server (postfix, dovecot, spamassassin, opendkim)</li>
                  <li><i class="mdi-navigation-chevron-right"></i>Monitoring software (nagios)</li>
                  <li><i class="mdi-navigation-chevron-right"></i>File storage (OwnCloud)</li>
                  <li><i class="mdi-navigation-chevron-right"></i>Issue tracker (BugZilla)</li>
                  <li><i class="mdi-navigation-chevron-right"></i>Central LDAP authentication (OpenLDAP, used for <a href="https://jonathanprice.org">JonathanPrice.org</a>, including OwnCloud, nginx, BugZilla, etc.)</li>
                </ul>
              </p>

              <h3 class="light grey-text text-darken-4 header">Networking</h2>

              <p class="light grey-text text-darken-4">
                Networking is my primary area of expertise within the field of computing. I am currently working towards
                earning a CCNA in July, and intend to begin work on a CCNP soon after. In university I intend to base my
                final year project in networking.
              </p>

              <p class="light grey-text text-darken-4">
                In my time at UIA Insurance I have implemented several network improvements,
                including better performance monitoring and alerting, improved configuration backup and change detection and
                layer 2 loop protection.
              </p>

              <h3 class="light grey-text text-darken-4 header">Programming</h2>

              <p class="light grey-text text-darken-4">
                Whilst I would not consider myself a software developer, I make effective use of my programming ability in my
                role as a systems and network administrator.
              </p>

              <p class="light grey-text text-darken-4">
                In particular, I consider myself rather adept at shell scripting. For portability reasons I try to keep conformant
                with the bourne shell, although in certain cases I will instead develop for bash. One particular project I felt
                would be useful for other administrators, so have published it under an open source license on GitHub:
                <ul class="light grey-text text-darken-4">
                  <li><i class="mdi-navigation-chevron-right"></i><a href="https://github.com/pricetx/backup">Backup | Simple backup script utilising
                    OpenSSL, tar and rsync, written in bash</a></li>
                </ul>
              </p>

              <p class="light grey-text text-darken-4">
                I also have some basic web development experience. For instance, this website has been built by me using the
                <a href="http://materializecss.com/">Materialize</a> CSS framework. This site looks modern and clean, and is
                able to dynamically resize to fit a variety of devices, including mobile platforms. I also utilise a templating
                system I have developed in PHP so that I write the header and footer once, and have it replicated across all of my pages.
                You can view the source code for this website on my GitHub profile <a href="https://github.com/pricetx/jonathanprice.uk">here</a>.
              </p>
            </div>

          </div>
        </div>
    </div>

<?php include_once("../footer.php"); ?>
