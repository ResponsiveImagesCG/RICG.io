<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Responsive Issues Community Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="grunticon" content="/_css/_grunticon/">
    <meta name="fonts" content="/_css/fonts.css">

    <link rel="stylesheet" href="/_css/all.css">

    <style>
      <?php include( "_css/critical.css" ); ?> 
    </style>

    <script src="/_js/initial.js" data-fulljs="/_js/main.js" id="initialjs"></script>

    <meta name="description" content="">
    <link rel="shortcut icon" href="/images/favicon.gif" type="image/x-icon">
  </head>

  <body>
    <header class="sitehead">
      <h1 class="logo"><img src="_img/ricg-logo.png" alt="Responsive Issues Community Group"></h1>
    </header>

    <div class="issues">

      <div class="feat">
        <div class="head">
          <span>
            <h2 class="feat-hed">The <code>picture</code> Element</h2>
            <p class="status">Active Development</p>
          </span>
        </div>
        <div class="body">
          <div class="col-b">
            <h3 class="impl-hed">Impl<b class="abbr">ementation</b> Status</h3>
            <div class="support">
              <img src="_img/icon-chrome.png" title="No support" alt="Chrome">
              <img src="_img/icon-firefox.png" title="No support" alt="Firefox">
              <img src="_img/icon-opera.png" title="Full support" class="full-support" alt="Opera">
              <img src="_img/icon-ie.png" title="No support" alt="Internet Explorer">
              <img src="_img/icon-safari.png" title="Partial support" class="partial-support" alt="Safari">
            </div>
          </div>
          <div class="col-a">

            <p>The picture element is a markup pattern that allows developers to declare multiple sources for an image. By using media 
              queries, it gives developers control as to when and if those images are presented to the user.</p>
            <p>The picture element is one part of the HTML specification.</p>

            <h3 class="subhed">Usage</h3>
            <div class="usage">
              <code><pre>&lt;picture&gt;
    &lt;source srcset="thing.png" media="(min-width: 600px)"&gt;
    &lt;img src="smallthing.png"&gt;
  &lt;/picture&gt;</pre></code>
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


      <div class="feat open">
        <div class="head">
          <span>
            <h2 class="feat-hed">The <code>srcset</code> and <code>sizes</code> Attributes</h2>
            <p class="status">Active Development</p>
          </span>
        </div>
        <div class="body">
          <div class="col-b">
            <h3 class="impl-hed">Impl<b class="abbr">ementation</b> Status</h3>
            <div class="support">
              <img src="_img/icon-chrome.png" title="No support" alt="Chrome">
              <img src="_img/icon-firefox.png" title="No support" alt="Firefox">
              <img src="_img/icon-opera.png" title="Full support" class="full-support" alt="Opera">
              <img src="_img/icon-ie.png" title="No support" alt="Internet Explorer">
              <img src="_img/icon-safari.png" title="Partial support" class="partial-support" alt="Safari">
            </div>
          </div>
          <div class="col-a">

            <p>The picture element is a markup pattern that allows developers to declare multiple sources for an image. By using media 
              queries, it gives developers control as to when and if those images are presented to the user.</p>
            <p>The picture element is one part of the HTML specification.</p>

            <h3 class="subhed">Usage</h3>

            <div class="usage">
              <code><pre>&lt;picture&gt;
    &lt;source srcset="thing.png" media="(min-width: 600px)"&gt;
    &lt;img src="smallthing.png"&gt;
  &lt;/picture&gt;</pre></code>
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
            <p class="status">Proposed</p>
          </span>
        </div>
        <div class="body">
          <div class="col-b">
            <h3 class="impl-hed">Impl<b class="abbr">ementation</b> Status</h3>
            <div class="support">
              <img src="_img/icon-chrome.png" title="No support" alt="Chrome">
              <img src="_img/icon-firefox.png" title="No support" alt="Firefox">
              <img src="_img/icon-opera.png" title="Full support" class="full-support" alt="Opera">
              <img src="_img/icon-ie.png" title="No support" alt="Internet Explorer">
              <img src="_img/icon-safari.png" title="Partial support" class="partial-support" alt="Safari">
            </div>
          </div>
          <div class="col-a">

          <p>The picture element is a markup pattern that allows developers to declare multiple sources for an image. By using media 
            queries, it gives developers control as to when and if those images are presented to the user.</p>
          <p>The picture element is one part of the HTML specification.</p>

          <h3 class="subhed">Usage</h3>
          <div class="usage">
            <code><pre>&lt;picture&gt;
  &lt;source srcset="thing.png" media="(min-width: 600px)"&gt;
  &lt;img src="smallthing.png"&gt;
&lt;/picture&gt;</pre></code>
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
  </body>
</html>