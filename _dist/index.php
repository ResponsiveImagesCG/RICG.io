<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Responsive Issues Community Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="fonts" content="/_css/fonts.css">
    <meta name="fullcss" content="/_css/all.css">

    <?php
    if( is_null( $_GET[ "nocrit" ] ) ) {
      echo "<style>";
      include( "_css/critical.css" );
      echo "</style>";
    } else {
      echo '<link rel="stylesheet" href="/_css/all.css">';
    } ?> 

    <noscript>
      <link rel="stylesheet" href="/_css/all.css">
    </noscript>

    <script src="/_js/initial.js" data-fulljs="/_js/main.js" id="initialjs"></script>

    <meta name="description" content="The ongoing efforts of the Responsive Issue Community Group.">
    <link href="favicon.ico" rel="icon">
  </head>

  <body>
    <header class="sitehead">
      <h1 class="logo"><img src="_img/ricg-logo.png" alt="Responsive Issues Community Group"></h1>
    </header>

      <div class="intro">
    <p>The <a href="http://www.w3.org/community/respimg/" title="Responsive Issues Community Group">RICG</a> is a group of independent designers and developers working toward new web standards that will build fast, accessible, responsive websites.</p>
  </div>

    <div class="issues">
      <h2 class="a11y-hide">Current Efforts</h2>

<div class="feat">
  <div class="head">
    <span>
      <h3 class="feat-hed">Element Queries</h3>
      <p class="status">Initial Planning</p>
    </span>
  </div>
  <div class="body">
    
    <div class="col-b">
      <h4 class="impl-hed">Impl<span class="abbr">ementation</span> Status</h3>
      <div class="support">
        
          <img src="_img/icon-chrome.png" alt="chrome" >
        
          <img src="_img/icon-firefox.png" alt="firefox" >
        
          <img src="_img/icon-opera.png" alt="opera" >
        
          <img src="_img/icon-safari.png" alt="safari" >
        
          <img src="_img/icon-ie.png" alt="ie" >
        
      </div>
    </div>
    <div class="col-a">
      <p><p>Media queries allow authors to vary the layout of their page based on the dimensions of the viewport. <em>Element</em> queries will allow developers to vary the layout within specific elements on a page (and their children) based on the dimensions of the parent elements themselves, allowing for much more modular approaches to layout.</p><p>Work on element queries has just begun; we are still collecting use cases and working to understand technical constraints. Please contribute!</p></p>

      

      <h4 class="subhed">Documentation</h3>
      <dl class="docs">
        
        <dt >Repo</dt>
        <dd ><a href="https://github.com/ResponsiveImagesCG/eq-usecases">https://github.com/ResponsiveImagesCG/eq-usecases</a></dd>
        
        <dt >Use Cases</dt>
        <dd ><a href="https://responsiveimagescg.github.io/eq-usecases/">https://responsiveimagescg.github.io/eq-usecases/</a></dd>
        
      </dl>

    </div>
  </div>
</div>

<div class="feat">
  <div class="head">
    <span>
      <h3 class="feat-hed"><code>picture</code> Element</h3>
      <p class="status">Active Development</p>
    </span>
  </div>
  <div class="body">
    
    <div class="col-b">
      <h4 class="impl-hed">Impl<span class="abbr">ementation</span> Status</h3>
      <div class="support">
        
          <img src="_img/icon-chrome.png" alt="chrome" class="full-support">
        
          <img src="_img/icon-firefox.png" alt="firefox" >
        
          <img src="_img/icon-opera.png" alt="opera" class="full-support">
        
          <img src="_img/icon-safari.png" alt="safari" >
        
          <img src="_img/icon-ie.png" alt="ie" >
        
      </div>
    </div>
    <div class="col-a">
      <p><p>The <code>picture</code> element contains any number of child <code>source</code> elements and one <code>img</code>.</p><p>When this pattern is used with the <code>media</code> attribute on <code>source</code> elements, it allows developers to mandate that user agents must load specific  sources when certain media conditions are met. This allows developers to specify alternate aspect ratios to align with layoutchanges, or alternate framing of image content for optimally highlighting the subject of the image at different sizes.</p><p>When <code>picture</code> and <code>source</code> are used with the <code>type</code> attribute, authors may supply the same image in alternate formats to be requested only by browsers that support said format.</p></p>

      
      <h4 class="subhed">Usage</h3>
      <div class="usage">
        <code><pre>&lt;picture&gt;
  &lt;source srcset=&quot;large.jpg&quot; media=&quot;(min-width: 800px)&quot;&gt;
  &lt;img src=&quot;small.jpg&quot; alt=&quot;…&quot;&gt;
&lt;picture&gt;</pre></code>
      </div>
      

      <h4 class="subhed">Documentation</h3>
      <dl class="docs">
        
        <dt >Repo</dt>
        <dd ><a href="https://github.com/ResponsiveImagesCG/picture-element">https://github.com/ResponsiveImagesCG/picture-element</a></dd>
        
        <dt >Use Cases</dt>
        <dd ><a href="http://usecases.responsiveimages.org/">http://usecases.responsiveimages.org/</a></dd>
        
        <dt class="published">Specification</dt>
        <dd class="published"><a href="https://html.spec.whatwg.org/multipage/embedded-content.html#introduction-3:art-direction-3">https://html.spec.whatwg.org/multipage/embedded-content.html#introduction-3:art-direction-3</a></dd>
        
      </dl>

    </div>
  </div>
</div>

<div class="feat">
  <div class="head">
    <span>
      <h3 class="feat-hed">Advanced <code>srcset</code> and <code>sizes</code> Attributes</h3>
      <p class="status">Active Development</p>
    </span>
  </div>
  <div class="body">
    
    <div class="col-b">
      <h4 class="impl-hed">Impl<span class="abbr">ementation</span> Status</h3>
      <div class="support">
        
          <img src="_img/icon-chrome.png" alt="chrome" class="full-support">
        
          <img src="_img/icon-firefox.png" alt="firefox" >
        
          <img src="_img/icon-opera.png" alt="opera" class="full-support">
        
          <img src="_img/icon-safari.png" alt="safari" >
        
          <img src="_img/icon-ie.png" alt="ie" >
        
      </div>
    </div>
    <div class="col-a">
      <p><p><code>srcset</code>’s <code>w</code> descriptor and the <code>sizes</code> attribute allow developers to supply a range of alternate sources for images whose sizes vary within a responsive layout. Optionally working in conjunction with server-side resizing, these syntaxes allow for a fully automated “responsive images” solution.</p></p>

      
      <h4 class="subhed">Usage</h3>
      <div class="usage">
        <code><pre>&lt;img src=&quot;small.jpg&quot; sizes=&quot;100vw&quot; srcset=&quot;med.jpg 800w, large.jpg 1400w&quot; alt=&quot;…&quot;&gt;</pre></code>
      </div>
      

      <h4 class="subhed">Documentation</h3>
      <dl class="docs">
        
        <dt >Use Cases</dt>
        <dd ><a href="http://usecases.responsiveimages.org/">http://usecases.responsiveimages.org/</a></dd>
        
        <dt class="published">Specification</dt>
        <dd class="published"><a href="https://html.spec.whatwg.org/multipage/embedded-content.html#introduction-3:viewport-based-selection-2">https://html.spec.whatwg.org/multipage/embedded-content.html#introduction-3:viewport-based-selection-2</a></dd>
        
      </dl>

    </div>
  </div>
</div>

<div class="feat">
  <div class="head">
    <span>
      <h3 class="feat-hed">Basic <code>srcset</code> Attribute</h3>
      <p class="status">Active Development</p>
    </span>
  </div>
  <div class="body">
    
    <div class="col-b">
      <h4 class="impl-hed">Impl<span class="abbr">ementation</span> Status</h3>
      <div class="support">
        
          <img src="_img/icon-chrome.png" alt="chrome" class="full-support">
        
          <img src="_img/icon-firefox.png" alt="firefox" >
        
          <img src="_img/icon-opera.png" alt="opera" class="full-support">
        
          <img src="_img/icon-safari.png" alt="safari" class="full-support">
        
          <img src="_img/icon-ie.png" alt="ie" >
        
      </div>
    </div>
    <div class="col-a">
      <p><p>The <code>srcset</code> attribute allows developers to supply user agents with alternate versions of an image, intended for display at different pixel densities.</p><p>In its most basic and well-supported form, srcset lets developers use <code>x</code> descriptors to specify the intended pixel-density of each source.</p></p>

      
      <h4 class="subhed">Usage</h3>
      <div class="usage">
        <code><pre>&lt;img src=&quot;standard-definition.jpg&quot; srcset=&quot;high-definition.jpg 2x&quot;&gt;</pre></code>
      </div>
      

      <h4 class="subhed">Documentation</h3>
      <dl class="docs">
        
        <dt >Use Cases</dt>
        <dd ><a href="http://usecases.responsiveimages.org/">http://usecases.responsiveimages.org/</a></dd>
        
        <dt class="published">Specification</dt>
        <dd class="published"><a href="https://html.spec.whatwg.org/multipage/embedded-content.html#introduction-3:device-pixel-ratio-2">https://html.spec.whatwg.org/multipage/embedded-content.html#introduction-3:device-pixel-ratio-2</a></dd>
        
      </dl>

    </div>
  </div>
</div>

    </div>


    <div class="foot">

      <div class="newsletter" id="newsletter">
        <h2 class="news-hed"><a href="http://responsiveimages.org/demos/">Subscribe to our newsletter!</a></h2>
        <p class="news-subhed">Get news, announcements, and implementation updates every other Friday.</p>

        <div id="mc_embed_signup">
          <form action="http://responsiveimages.us8.list-manage1.com/subscribe/post?u=c988d9ca55d5d09e73a7dc993&amp;id=1593118b9a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
            <label for="mce-EMAIL" class="a11y-hide">Email Address</label>
            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required="">
            <div style="position: absolute; left: -5000px;"><input type="text" name="b_c988d9ca55d5d09e73a7dc993_1593118b9a" value=""></div>
            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
          </form>
        </div>

      </div>

      <nav class="social">
        <a class="no-txt twitter" href="https://twitter.com/respimg">The RICG on Twitter</a>
      </nav>
    </div>

  </body>
</html>