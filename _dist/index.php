<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Responsive Issues Community Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="grunticon" content="/_css/_grunticon/">
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

    <meta name="description" content="">
    <link rel="shortcut icon" href="/images/favicon.gif" type="image/x-icon">
  </head>

  <body>
    <header class="sitehead">
      <h1 class="logo"><img src="_img/ricg-logo.png" alt="Responsive Issues Community Group"></h1>
    </header>

	<div class="intro">
	    <p>The <abbr title="Responsive Issues Community Group">RICG</abbr> is a group of independent designers and developers working toward standards that will help build fast, accessible, responsive websites.</p>
	</div>

    <div class="issues">
      
<div class="feat">
  <div class="head">
    <span>
      <h2 class="feat-hed">Basic <code>srcset</code> attribute</h2>
      <p class="status">Active Development</p>
    </span>
  </div>
  <div class="body">
    
    <div class="col-b">
      <h3 class="impl-hed">Impl<b class="abbr">ementation</b> Status</h3>
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

      <h3 class="subhed">Usage</h3>
      <div class="usage">
        <code><pre>&lt;img src=&quot;standard-definition.jpg&quot; srcset=&quot;high-definition.jpg 2x&quot;&gt;</pre></code>
      </div>

      <h3 class="subhed">Documentation</h3>

      <dl class="docs">
        <dt>Use Cases</dt>
        <dd><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>

        <dt class="published">Specification</dt>
        <dd class="published"><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>
      </dl>

      <h3 class="subhed">Resources</h3>
      <dl class="docs">
        <dt class="draft">Draft</dt>
        <dd class="draft"><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>

        <dt class="published">Published</dt>
        <dd class="published"><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>

        <dt>Specification</dt>
        <dd><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>
      </dl>
    </div>
  </div>
</div>

<div class="feat">
  <div class="head">
    <span>
      <h2 class="feat-hed">Advanced <code>srcset</code> and <code>sizes</code> attributes</h2>
      <p class="status">Active Development</p>
    </span>
  </div>
  <div class="body">
    
    <div class="col-b">
      <h3 class="impl-hed">Impl<b class="abbr">ementation</b> Status</h3>
      <div class="support">
        
          <img src="_img/icon-chrome.png" alt="chrome" class="full-support">
        
          <img src="_img/icon-firefox.png" alt="firefox" >
        
          <img src="_img/icon-opera.png" alt="opera" class="full-support">
        
          <img src="_img/icon-safari.png" alt="safari" class="full-support">
        
          <img src="_img/icon-ie.png" alt="ie" >
        
      </div>
    </div>
    <div class="col-a">
      <p><p><code>srcset</code>’s <code>w</code> descriptor and the <code>sizes</code> attribute allow developers to supply a range of alternate sources for images whose sizes vary within a responsive layout. Optionally working in conjunction with server-side resizing, these syntaxes allow for a fully automated “responsive images” solution.</p></p>

      <h3 class="subhed">Usage</h3>
      <div class="usage">
        <code><pre></pre></code>
      </div>

      <h3 class="subhed">Documentation</h3>

      <dl class="docs">
        <dt>Use Cases</dt>
        <dd><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>

        <dt class="published">Specification</dt>
        <dd class="published"><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>
      </dl>

      <h3 class="subhed">Resources</h3>
      <dl class="docs">
        <dt class="draft">Draft</dt>
        <dd class="draft"><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>

        <dt class="published">Published</dt>
        <dd class="published"><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>

        <dt>Specification</dt>
        <dd><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>
      </dl>
    </div>
  </div>
</div>

<div class="feat">
  <div class="head">
    <span>
      <h2 class="feat-hed"><code>picture</code> element</h2>
      <p class="status">Active Development</p>
    </span>
  </div>
  <div class="body">
    
    <div class="col-b">
      <h3 class="impl-hed">Impl<b class="abbr">ementation</b> Status</h3>
      <div class="support">
        
          <img src="_img/icon-chrome.png" alt="chrome" class="full-support">
        
          <img src="_img/icon-firefox.png" alt="firefox" >
        
          <img src="_img/icon-opera.png" alt="opera" class="full-support">
        
          <img src="_img/icon-safari.png" alt="safari" class="full-support">
        
          <img src="_img/icon-ie.png" alt="ie" >
        
      </div>
    </div>
    <div class="col-a">
      <p><p>The <code>picture</code> element contains any number of child <code>source</code> elements and one <code>img</code>.</p><p>When this pattern is used with the <code>media</code> attribute on <code>source</code> elements, it allows developers to mandate that user agents must load specific  sources when certain media conditions are met. This allows developers to specify alternate aspect ratios to align with layoutchanges, or alternate framing of image content for optimally highlighting the subject of the image at different sizes.</p><p>When <code>picture</code> and <code>source</code> are used with the <code>type</code> attribute, authors may supply the same image in alternate formats to be requested only by browsers that support said format.</p></p>

      <h3 class="subhed">Usage</h3>
      <div class="usage">
        <code><pre></pre></code>
      </div>

      <h3 class="subhed">Documentation</h3>

      <dl class="docs">
        <dt>Use Cases</dt>
        <dd><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>

        <dt class="published">Specification</dt>
        <dd class="published"><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>
      </dl>

      <h3 class="subhed">Resources</h3>
      <dl class="docs">
        <dt class="draft">Draft</dt>
        <dd class="draft"><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>

        <dt class="published">Published</dt>
        <dd class="published"><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>

        <dt>Specification</dt>
        <dd><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>
      </dl>
    </div>
  </div>
</div>

<div class="feat">
  <div class="head">
    <span>
      <h2 class="feat-hed">Element Queries</h2>
      <p class="status">Initial Planning</p>
    </span>
  </div>
  <div class="body">
    
    <div class="col-b">
      <h3 class="impl-hed">Impl<b class="abbr">ementation</b> Status</h3>
      <div class="support">
        
      </div>
    </div>
    <div class="col-a">
      <p><p>Media queries allow authors to vary the layout of their page based on the dimensions of the viewport. <strong>Element</strong> queries will allow developers to vary the layout within specific elements on a page (and their children) based on the dimensions of the parent elements themselves, allowing for much more modular approaches to layout.</p><p>Work on element queries has just begun; we are still collecting use cases and working to understand technical constraints. Please contribute!</p></p>

      <h3 class="subhed">Usage</h3>
      <div class="usage">
        <code><pre></pre></code>
      </div>

      <h3 class="subhed">Documentation</h3>

      <dl class="docs">
        <dt>Use Cases</dt>
        <dd><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>

        <dt class="published">Specification</dt>
        <dd class="published"><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>
      </dl>

      <h3 class="subhed">Resources</h3>
      <dl class="docs">
        <dt class="draft">Draft</dt>
        <dd class="draft"><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>

        <dt class="published">Published</dt>
        <dd class="published"><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>

        <dt>Specification</dt>
        <dd><a href="http://responsiveimagescg.github.io/eq-usecases/">http://responsiveimagescg.github.io/eq-usecases/</a></dd>
      </dl>
    </div>
  </div>
</div>

    </div>
  </body>
</html>