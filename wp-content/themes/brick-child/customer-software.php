<?php 
/*
 * Template Name: Customer Software Template
 */

get_header(); ?>
<head>
 
    <noscript
      ><style>
        .js-only {
          display: none;
        }
        .browser-link {
          display: inline-block;
          margin-right: 35px;
          margin-top: 30px;
          text-align: center;
        }
        .browser-icon {
          display: block;
          height: 40px;
          width: 40px;
        }
     
      </style></noscript
    >
    <script>
      window.dataLayer = window.dataLayer || [];
    </script>
    
    <style>
      body {
    font-family: 'Radley', sans-serif!important;
      }

     p, h1, h2, h3, h4, h5,h6,a  {
    font-family: 'Montserrat', sans-serif !important;
      }
      .description {
    font-family: 'Montserrat', sans-serif !important;
    }

      .hover-block{
        font-family: 'Montserrat', sans-serif !important;
      }

         .title_outer.title_without_animation.with_image {
        display: none!important;
        }
        ul.section-list.section-list-8-colors.section-list-image.data-list-quantity-8 {
          max-width: 100%;
          padding: 3rem;
        }
        .wrapper.swiper-reviews-google-container.js-lazy-images-slider {
          background: transparent;
        }
        .wrapper.newWrap{
          background: transparent;
        }

        span.benefitIt{
          color: #fff;
        }

        .bg-transparent{
          background: transparent;
        }

        .section-title.container.wow.animated {
          background: transparent!important;
        }
        .title.setIt,.title.setIt > p{
          background: transparent;
          font-size: 1.8rem;
          color: #fff;
          font-weight: bold;
        }
         h1.title.heroIt {
        background: transparent;
        max-width: 900px;
        height: auto;
        text-transform: capitalize;
      }
      h3.faq-title {
       text-transform: capitalize;
      }
      h3.faq-item-title {
        text-transform: capitalize;
      }

      .wrapper.faq-markup-wrapper {
      max-width: 67%!important;
      -webkit-box-align: center;
    }

    .faq-markup-wrapper .faq-item .faq-item-title {
      margin: 1rem;
    }

    .nda-tooltip>a{
      font-weight: bold;
    }
    h3.faq-item-title {
    text-transform: capitalize;
    margin: 1rem;
    }


    p.topic {
    color: #393939;
    font-size: 30px;
    line-height: 41px;
    font-weight: bold;
    }

.intro.inner-intro, .intro.inner-intro .intro-wrapper {
    margin-top: 0px;
}

    h3.topic.attention-section-topic {
    font-size: 28px!important;
    font-weight: bold;
    color: #393939;
    line-height: 40px;
}
        @media screen and (min-width:1000px)  {
          .reviews-google-wrap .title {
          margin-bottom: -100px;
          }
          .sticker-title .title {
            max-height: 50px;
          }
          p.title.bg-transparent {
            max-height: 6rem;
          }
          .section-info-list{
            padding-top: 2rem;
          }
        }

        .project-description p{
          color: #fff;
        }

        .projects-section .project-column-full .project-name {
          font-weight: bold;
        }

        h3.title.bg-transparent,.section-list .name,.project-header {
        text-transform: inherit;
        font-weight: bold;
      }

        h3.attention-section-topic {
        text-transform: inherit;
         font-weight: bold;
        }

        .wrapper{
          max-width: initial!important;
          padding-left: 0px!important;
          padding-right: 0px!important;
        }
        .paspartu_outer, .paspartu_outer .content_wrapper {
          padding: 0;
        }
        .paspartu_left, .paspartu_right {
          display: none;
        }
      @font-face {
        font-family: sf_ui_displayblack;
        src: url(fonts/sf-ui-display-black_0-webfont.woff) format("woff2"),
          url(fonts/sf-ui-display-black_0-webfont.woff) format("woff");
        font-weight: 400;
        font-style: normal;
        font-display: fallback;
      }
      @font-face {
        font-family: sf_ui_displayheavy;
        src: url(fonts/sf-ui-display-heavy_0-webfont.woff) format("woff2"),
          url(fonts/sf-ui-display-heavy_0-webfont.woff) format("woff");
        font-weight: 400;
        font-style: normal;
        font-display: fallback;
      }
      @font-face {
        font-family: sf_ui_textbold;
        src: url(fonts/sf-ui-text-bold_0-webfont.woff) format("woff2"),
          url(fonts/sf-ui-text-bold_0-webfont.woff) format("woff");
        font-weight: 700;
        font-style: normal;
        font-display: fallback;
      }
      @font-face {
        font-family: sf_ui_textmedium;
        src: url(fonts/sf-ui-text-medium_0-webfont.woff) format("woff2"),
          url(fonts/sf-ui-text-medium_0-webfont.woff) format("woff");
        font-weight: 400;
        font-style: normal;
        font-display: fallback;
      }
      @font-face {
        font-family: sf_ui_textregular;
        src: url(fonts/sf-ui-text-regular-webfont.woff) format("woff2"),
          url(fonts/sf-ui-text-regular-webfont.woff) format("woff");
        font-weight: 400;
        font-style: normal;
        font-display: fallback;
      }
      body,
      html {
        background-color: #fafafa;
        color: #474747;
        font-family: sf_ui_textregular, Helvetica, Arial, sans-serif;
        font-size: 17px;
        letter-spacing: -0.35px;
        line-height: 24px;
        overflow: hidden;
        position: relative;
      }
  
      html.loaded.dom-loaded {
        overflow-y: visible;
      }
      html:not(.dom-loaded) .main-content {
        display: none;
      }
      a {
        color: inherit;
      }
      .wrapper {
        margin: 0 auto;
        max-width: 1440px;
        padding-left: 30px;
        padding-right: 30px;
      }
      @media (max-width: 767px) {
        .wrapper {
          padding-left: 19px;
          padding-right: 19px;
        }
      }
      .page-wrapper {
        background: #fafafa 0 -222px repeat;
        position: relative;
        z-index: 2;
      }
      .page-container {
        -webkit-font-smoothing: antialiased;
        height: 100%;
        overflow: hidden;
        position: relative;
        width: 100%;
      }
      .title {
        font-family: sf_ui_displayheavy, Helvetica, Arial, sans-serif;
        font-size: 36px;
        letter-spacing: -0.4px;
        line-height: 59px;
      }
      @media (min-width: 1024px) and (max-width: 1439px) {
        .title {
          font-size: 46px;
          line-height: 10px;
        }
      }
      @media (min-width: 768px) and (max-width: 1023px) {
        .title {
          font-size: 52px;
          line-height: 56px;
        }
      }
      @media (max-width: 767px) {
        .title {
          font-size: 36px;
          line-height: 38px;
        }
      }
      .subtitle {
        animation-duration: 0.5s;
        font-family: sf_ui_displayblack, Helvetica, Arial, sans-serif;
        font-size: 24px;
        line-height: 40px;
      }
      @media (max-width: 767px) {
        .subtitle {
          font-size: 24px;
          line-height: 38px;
        }
      }
      .animated,
      .wow {
        animation-fill-mode: both;
        animation-timing-function: ease-in-out;
        visibility: hidden;
      }
      .detect-ipad-canvas {
        display: none;
      }
      .popup-container {
        opacity: 0;
      }
      .icon-svg {
        display: inline-block;
        fill-rule: evenodd;
        height: 20px;
        width: 20px;
      }
      .icon-light {
        fill: #fff;
      }
      @media (min-width: 1440px) {
        .awards-slider .swiper-awards-container,
        .clients-slider .slider-bg,
        .clients-slider .swiper-container {
          margin-left: -128px;
          margin-right: -128px;
        }
      }
      @media (min-width: 768px) and (max-width: 1439px) {
        .awards-slider .swiper-awards-container {
          margin-left: -64px;
          margin-right: -64px;
        }
      }

      @media screen and (max-width:576px)  {
        p.topic {
      color: #393939;
      font-size: 20px;
      line-height: 41px;
      font-weight: bold;
      }
    }

    @media screen and (max-width:1200px)  {
      .row-flex-container.home-visual {
    min-height: 45vh;
    }
  }
    @media screen and (min-width:1200px)  {
    .row-flex-container.home-visual {
    min-height: 65vh;
}
}

.row-flex-container {
  display: flex;
  flex-direction: row;
}

.col-flex-item-left {
  flex: 50%;
  padding: 2rem 0rem 0rem 2rem;
}

.col-flex-item-right {
  flex: 10%;
  margin-top: 2rem;
  margin-bottom: 2rem;
}

/* Responsive layout - makes a one column-layout instead of two-column layout */
@media (max-width: 800px) {
  .row-flex-container {
    flex-direction: column;
  }
  .subtitle {
    display: block;
}

.getinTouch{
  text-align: center;
}

.col-flex-item-left {
  padding: 0;
}

h2.subtitle.wide-subtitle {
    max-width: 500px;
    text-align: center;
    margin: auto;
}

h1.title.heroIt {
    background: transparent;
    max-width: 900px;
    margin-top: 5rem;
    height: auto;
    text-align: center;
    text-transform: capitalize;
}
.form-wrapper {
    width: 100%;
    text-align: center;
}
.form-field>div:last-child, .form-field>div:nth-last-child(2){
  width: 100%;
}
}


.form-field.home-form {
    height: auto;
}


textarea#add-info.home-info {
    width: auto;
    height: auto;
}

input#company-name.home-company {
  width: auto;
    height: auto;
}

input#first-name.f-name {
    width: auto;
}

input#email.f-email{
    width: auto;
}

.text-white{
  color:#fff;
}

h2.subtitle.wide-subtitle {
    max-width: 500px;
    /* margin-top: 3rem; */
}

.button.hero-button {
    background: transparent;
    border-radius: 25px;
    color: #fff;
    border: 1px solid #fff;
    margin-top: 1rem;
}

.projects-section{
  display: none!important;
}
/* div#priceSolution{
  display: none!important;
} */

.acquaintance-sect-wrapper {
    padding-top: 0px!important;
}

.attention-section.attention-section-with-border {
    border-top: none!important;
}

.top-four{
  padding-top: 4rem;
}

@media screen and (max-width:1022.9px)  {
.attention-section .subtitle-topic {
    margin-top: 40px!important;
}
.attention-section.attention-section-title .description {
    margin-top: 5px!important;
}

}
    </style>
    <script type="text/javascript">
      const link = document.createElement("link"),
        htmlElement = document.getElementsByTagName("html")[0];
      link.href = "<?php echo get_stylesheet_directory_uri(); ?>/css/services/custom-software-development.css";
      link.type = "text/css";
      link.rel = "stylesheet";
      link.onload = function () {
        setTimeout(function () {
          htmlElement.className += " loaded";
        }, 0);
      };
      document.addEventListener("DOMContentLoaded", function () {
        htmlElement.className += " dom-loaded";
      });
      document.getElementsByTagName("head")[0].appendChild(link);
    </script>
    <script>
      if (
        !Array.prototype.find ||
        !Array.prototype.forEach ||
        !Promise ||
        !CustomEvent ||
        !fetch
      ) {
        const polyfills = document.createElement("script");
        polyfills.src = "js/polyfills.js";
        document.head.appendChild(polyfills);
      }
    </script>
  </head>
  <body>

    <div class="main-content js-only">
      <div class="page-main-wrapper inner-page">
     
        <div id="panel" class="panel">
          <main>
            <div class="page-container">
            <div class="intro-content wow">
                    <div class="row-flex-container home-visual"  style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/i/intro/comp-two.jpg') center center no-repeat; background-size: cover;">                      
                    <div class="col-flex-item-left">

                    <h1 class="title heroIt">Custom Software Development</h1>
                    <h2 class="subtitle wide-subtitle">
                      We've helped dozens of businesses all over the globe develop custom software solutions befitting their business needs
                    </h2>
                    <div class="getinTouch">
                    <a
                        class="button hero-button button-hovered button-scroll-link paoc-popup popupaoc-link-image" href="javascript:void(0);" data-target="popuppaoc-modal-51440" data-conf="{&quot;content&quot;:{ &quot;target&quot; : &quot;#paoc-modal-1&quot;, &quot;effect&quot;: &quot;fadein&quot;, &quot;positionX&quot;: &quot;center&quot;, &quot;positionY&quot;: &quot;center&quot;, &quot;fullscreen&quot;: false, &quot;speedIn&quot;: 300, &quot;speedOut&quot;: 300, &quot;delay&quot;: 150, &quot;width&quot;: &quot;60%&quot; },&quot;loader&quot;:{&quot;active&quot;: true},&quot;overlay&quot;:{&quot;active&quot;: true}}"
                        tabindex="-1"
                      >
                        <span class="button-overlay">
                          <span class="button-hover-effect"></span>
                        </span>
                        <span class="button-text">
                          Get in Touch
                        </span>
                      </a>

                      </div>
                    </div>
                    <div class="col-flex-item-right">
      

                    <?php // echo do_shortcode('[popup_anything id="51440"]'); ?>


                      </div>
                    </div>
       
                <div
                class="page-wrapper js-lazy-image"
                data-src="i/pattern-bg.jpg"
                >
                <div class="page-percentage hidden" id="page-percentage">
                  <button class="up-arrow" aria-label="Scroll to top"></button>
                  <span
                    class="percentage-value"
                    aria-label="Scroll progress indicator"
                  ></span>
                  <button
                    class="down-arrow"
                    aria-label="Scroll to bottom"
                  ></button>
                </div>
                <div
                  class="
                    sections
                    attention-section
                    wrapper
                    clearfix
                    container-row
                    topic-with-buttons
                    attention-section-articles
                  "
                  id="page-content-top"
                >
                  <div class="container-column container-column-topic">
                    <div class="subtitle subtitle-topic">
                      <div class="text">
                        <h3 class="attention-section-topic">
                        Building better businesses  <br />
                        with custom software
                        </h3>
                      </div>
                      <a
                        class="button button-hovered button-scroll-link"
                        href="#priceSolution"
                        tabindex="-1"
                      >
                        <span class="button-overlay">
                          <span class="button-hover-effect"></span>
                        </span>
                        <span class="button-text">
                          Our solutions
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="9.938"
                            height="17.438"
                            viewBox="0 0 9.938 17.438"
                            focusable="false"
                            class="inline-svg icon-svg icon-light icon-arrow"
                          >
                            <path
                              d="M505.691,1292.03l3.406,3.53V1285h0.819v10.53l3.389-3.52a0.409,0.409,0,0,1,.579,0,0.435,0.435,0,0,1,0,.6l-4.052,4.21a0.415,0.415,0,0,1-.326.18h-0.017a0.4,0.4,0,0,1-.289-0.13l-4.088-4.24a0.435,0.435,0,0,1,0-.6A0.392,0.392,0,0,1,505.691,1292.03Z"
                              transform="translate(-504.531 -1284.56)"
                            />
                          </svg>
                        </span>
                      </a>
                      <a
                        class="button button-hovered"
                        href="https://uvact.com/about-us-regular-2/"
                        tabindex="-1"
                      >
                        <span class="button-overlay">
                          <span class="button-hover-effect"></span>
                        </span>
                        <span class="button-text">
                          About Uvact
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="9.938"
                            height="17.438"
                            viewBox="0 0 9.938 17.438"
                            focusable="false"
                            class="
                              inline-svg
                              icon-svg icon-light icon-arrow icon-arrow-right
                            "
                          >
                            <path
                              d="M505.691,1292.03l3.406,3.53V1285h0.819v10.53l3.389-3.52a0.409,0.409,0,0,1,.579,0,0.435,0.435,0,0,1,0,.6l-4.052,4.21a0.415,0.415,0,0,1-.326.18h-0.017a0.4,0.4,0,0,1-.289-0.13l-4.088-4.24a0.435,0.435,0,0,1,0-.6A0.392,0.392,0,0,1,505.691,1292.03Z"
                              transform="translate(-504.531 -1284.56)"
                            />
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="container-column container-column-text">
                    <div class="description">
                      <p>
                      At Uvact, we have many years of experience helping businesses achieve their goals through custom software solutions based on a deep understanding of their unique processes, challenges, and needs. Chances are your business needs custom software to solve unique problems and we are here to help with that.
                      </p>
                    </div>
                  </div>
                </div>

                <div
                  class="
                    sections
                    attention-section
                    section-light
                    attention-section
                    attention-section-title
                    attention-section-with-border
                  "
                  >
                  <div class="wrapper clearfix">
              
                    <div class="container-column container-column-text">
                      <div class="description">
                      Uvact presents unique service packages to suit your needs! Browse through to see what we can do for you.
                      </div>
                    </div>

                    <div class="container-column container-column-topic">
                      <div class="subtitle subtitle-topic">
                        <div class="text text-only">
                          <div class="topic-name">
                            <h3 class="topic attention-section-topic">
                              Custom <br />
                              Software Services
                            </h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="section-info-list section-light" id="priceSolution">
                  <div class="wrapper section-info-image">
                    <ul
                      class="
                        section-list section-list-8-colors section-list-image
                        data-list-quantity-8
                      "
                    >
                      <li>
                        <div class="hover-block hover-amp-link">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="44px"
                            height="44px"
                            viewBox="0 0 44 44"
                            focusable="false"
                            class="inline-svg icon-svg icon-enterprise-app"
                          >
                            <g>
                              <path
                                d="M 42.3 43C 42.3 43 31.1 43 31.1 43 30.71 43 30.4 42.69 30.4 42.3 30.4 41.91 30.71 41.6 31.1 41.6 31.1 41.6 42.3 41.6 42.3 41.6 42.69 41.6 43 41.91 43 42.3 43 42.69 42.69 43 42.3 43ZM 36.7 12.2C 36.31 12.2 36 11.89 36 11.5 36 11.11 36.31 10.8 36.7 10.8 37.86 10.8 38.8 9.86 38.8 8.7 38.8 7.54 37.86 6.6 36.7 6.6 36.33 6.6 35.97 6.7 35.64 6.9 35.41 7.03 35.13 7.03 34.91 6.89 34.68 6.75 34.56 6.5 34.58 6.23 34.59 6.12 34.6 6.01 34.6 5.9 34.6 3.97 33.03 2.4 31.1 2.4 29.75 2.4 28.5 3.19 27.93 4.42 27.82 4.66 27.59 4.81 27.33 4.83 27.07 4.83 26.83 4.71 26.7 4.49 26.44 4.06 25.99 3.8 25.5 3.8 24.73 3.8 24.1 4.43 24.1 5.2 24.1 5.36 24.13 5.53 24.2 5.7 24.27 5.9 24.26 6.11 24.16 6.29 24.06 6.47 23.89 6.6 23.68 6.64 22.71 6.84 22 7.7 22 8.7 22 9.86 22.94 10.8 24.1 10.8 25.26 10.8 26.2 9.86 26.2 8.7 26.2 8.31 26.51 8 26.9 8 27.29 8 27.6 8.31 27.6 8.7 27.6 10.63 26.03 12.2 24.1 12.2 22.17 12.2 20.6 10.63 20.6 8.7 20.6 7.28 21.46 6.03 22.72 5.49 22.7 5.39 22.7 5.29 22.7 5.2 22.7 3.66 23.96 2.4 25.5 2.4 26.12 2.4 26.71 2.6 27.18 2.96 28.1 1.75 29.55 1 31.1 1 33.59 1 35.66 2.87 35.96 5.28 36.21 5.23 36.45 5.2 36.7 5.2 38.63 5.2 40.2 6.77 40.2 8.7 40.2 10.63 38.63 12.2 36.7 12.2ZM 38.12 2.4C 37.73 2.4 37.42 2.09 37.42 1.7 37.42 1.31 37.73 1 38.11 1 38.11 1 38.12 1 38.12 1 38.51 1 38.82 1.31 38.82 1.7 38.82 2.09 38.51 2.4 38.12 2.4ZM 19.2 4.5C 18.81 4.5 18.5 4.19 18.5 3.8 18.5 3.03 17.87 2.4 17.1 2.4 16.37 2.4 15.76 2.98 15.71 3.71 15.7 3.96 15.56 4.18 15.34 4.29 15.13 4.41 14.87 4.4 14.66 4.28 14.12 3.96 13.51 3.8 12.9 3.8 10.97 3.8 9.4 5.37 9.4 7.3 9.4 7.7 9.47 8.1 9.61 8.49 9.69 8.71 9.65 8.96 9.51 9.15 9.36 9.34 9.13 9.44 8.89 9.42 8.89 9.42 8.77 9.41 8.77 9.41 8.75 9.4 8.72 9.4 8.7 9.4 7.54 9.4 6.6 10.34 6.6 11.5 6.6 12.66 7.54 13.6 8.7 13.6 9.09 13.6 9.4 13.91 9.4 14.3 9.4 14.69 9.09 15 8.7 15 6.77 15 5.2 13.43 5.2 11.5 5.2 9.79 6.43 8.36 8.06 8.06 8.02 7.81 8 7.55 8 7.3 8 4.6 10.2 2.4 12.9 2.4 13.46 2.4 14.01 2.5 14.54 2.68 14.97 1.69 15.96 1 17.1 1 18.64 1 19.9 2.25 19.9 3.8 19.9 4.19 19.59 4.5 19.2 4.5ZM 5.92 6.6C 5.53 6.6 5.22 6.29 5.22 5.9 5.22 5.51 5.53 5.2 5.91 5.2 5.91 5.2 5.92 5.2 5.92 5.2 6.31 5.2 6.62 5.51 6.62 5.9 6.62 6.29 6.31 6.6 5.92 6.6ZM 8.7 23.4C 9.09 23.4 9.4 23.71 9.4 24.1 9.4 32.63 5.97 39.53 5.83 39.81 5.7 40.06 5.46 40.2 5.2 40.2 5.09 40.2 4.99 40.18 4.88 40.12 4.54 39.95 4.4 39.53 4.57 39.18 4.61 39.12 8 32.28 8 24.1 8 23.71 8.31 23.4 8.7 23.4ZM 12.2 42.3C 12.2 42.69 11.89 43 11.5 43 11.5 43 1.7 43 1.7 43 1.31 43 1 42.69 1 42.3 1 41.91 1.31 41.6 1.7 41.6 1.7 41.6 11.5 41.6 11.5 41.6 11.89 41.6 12.2 41.91 12.2 42.3ZM 14.3 41.6C 14.3 41.6 24.1 41.6 24.1 41.6 24.49 41.6 24.8 41.91 24.8 42.3 24.8 42.69 24.49 43 24.1 43 24.1 43 14.3 43 14.3 43 13.91 43 13.6 42.69 13.6 42.3 13.6 41.91 13.91 41.6 14.3 41.6ZM 21.3 20.6C 21.69 20.6 22 20.91 22 21.3 22 32.47 19.96 39.41 19.87 39.7 19.78 40 19.5 40.2 19.2 40.2 19.13 40.2 19.07 40.19 19 40.17 18.63 40.06 18.42 39.67 18.53 39.3 18.55 39.23 20.51 32.55 20.6 22 20.6 22 8.7 22 8.7 22 8.31 22 8 21.69 8 21.3 8 21.3 8 17.1 8 17.1 8 16.71 8.31 16.4 8.7 16.4 8.7 16.4 18.5 16.4 18.5 16.4 18.89 16.4 19.2 16.71 19.2 17.1 19.2 17.49 18.89 17.8 18.5 17.8 18.5 17.8 9.4 17.8 9.4 17.8 9.4 17.8 9.4 20.6 9.4 20.6 9.4 20.6 21.3 20.6 21.3 20.6ZM 18.51 6.6C 18.51 6.6 18.52 6.6 18.52 6.6 18.91 6.6 19.22 6.91 19.22 7.3 19.22 7.69 18.91 8 18.52 8 18.13 8 17.82 7.69 17.82 7.3 17.82 6.91 18.13 6.6 18.51 6.6ZM 16.4 10.8C 16.01 10.8 15.7 10.49 15.7 10.1 15.7 9.71 16.01 9.4 16.4 9.4 17.94 9.4 19.2 10.65 19.2 12.2 19.2 13.74 17.94 15 16.4 15 16.01 15 15.7 14.68 15.7 14.3 15.7 13.91 16.01 13.6 16.4 13.6 17.17 13.6 17.8 12.97 17.8 12.2 17.8 11.43 17.17 10.8 16.4 10.8ZM 30.4 10.1C 30.4 9.71 30.71 9.4 31.1 9.4 31.98 9.4 32.82 9.07 33.46 8.48 33.75 8.22 34.19 8.24 34.45 8.52 34.71 8.81 34.69 9.25 34.41 9.51 33.5 10.34 32.33 10.8 31.1 10.8 30.71 10.8 30.4 10.49 30.4 10.1ZM 33.9 17.8C 34.29 17.8 34.6 18.11 34.6 18.5 34.6 18.89 34.29 19.2 33.9 19.2 33.9 19.2 21.3 19.2 21.3 19.2 20.91 19.2 20.6 18.89 20.6 18.5 20.6 18.5 20.6 14.3 20.6 14.3 20.6 13.91 20.91 13.6 21.3 13.6 21.3 13.6 36.7 13.6 36.7 13.6 37.09 13.6 37.4 13.91 37.4 14.3 37.4 14.3 37.4 21.3 37.4 21.3 37.4 32.25 39.45 39.23 39.47 39.3 39.58 39.67 39.37 40.06 39 40.17 38.93 40.19 38.87 40.2 38.8 40.2 38.5 40.2 38.22 40 38.13 39.7 38.04 39.41 36 32.47 36 21.3 36 21.3 36 15 36 15 36 15 22 15 22 15 22 15 22 17.8 22 17.8 22 17.8 33.9 17.8 33.9 17.8ZM 26.9 41.6C 26.9 41.6 28.3 41.6 28.3 41.6 28.69 41.6 29 41.91 29 42.3 29 42.69 28.69 43 28.3 43 28.3 43 26.9 43 26.9 43 26.51 43 26.2 42.69 26.2 42.3 26.2 41.91 26.51 41.6 26.9 41.6Z"
                              />
                              <path
                                d="M 31.1 43C 31.1 43 31.1 42.6 31.1 42.6 30.93 42.6 30.8 42.46 30.8 42.3 30.8 42.13 30.94 42 31.1 42 31.1 42 42.3 42 42.3 42 42.46 42 42.6 42.13 42.6 42.3 42.6 42.46 42.47 42.6 42.3 42.6 42.3 42.6 31.1 42.6 31.1 42.6 31.1 42.6 31.1 43 31.1 43 31.1 43 31.1 43.4 31.1 43.4 31.1 43.4 42.3 43.4 42.3 43.4 42.91 43.4 43.4 42.91 43.4 42.3 43.4 41.69 42.91 41.2 42.3 41.2 42.3 41.2 31.1 41.2 31.1 41.2 30.49 41.2 30 41.69 30 42.3 30 42.91 30.49 43.4 31.1 43.4 31.1 43.4 31.1 43 31.1 43 31.1 43 31.1 43 31.1 43ZM 26.9 43C 26.9 43 26.9 42.6 26.9 42.6 26.73 42.6 26.6 42.46 26.6 42.3 26.6 42.13 26.74 42 26.9 42 26.9 42 28.3 42 28.3 42 28.46 42 28.6 42.13 28.6 42.3 28.6 42.46 28.47 42.6 28.3 42.6 28.3 42.6 26.9 42.6 26.9 42.6 26.9 42.6 26.9 43 26.9 43 26.9 43 26.9 43.4 26.9 43.4 26.9 43.4 28.3 43.4 28.3 43.4 28.91 43.4 29.4 42.91 29.4 42.3 29.4 41.69 28.91 41.2 28.3 41.2 28.3 41.2 26.9 41.2 26.9 41.2 26.29 41.2 25.8 41.69 25.8 42.3 25.8 42.91 26.29 43.4 26.9 43.4 26.9 43.4 26.9 43 26.9 43 26.9 43 26.9 43 26.9 43ZM 14.3 43C 14.3 43 14.3 42.6 14.3 42.6 14.13 42.6 14 42.46 14 42.3 14 42.13 14.13 42 14.3 42 14.3 42 24.1 42 24.1 42 24.27 42 24.4 42.13 24.4 42.3 24.4 42.46 24.27 42.6 24.1 42.6 24.1 42.6 14.3 42.6 14.3 42.6 14.3 42.6 14.3 43 14.3 43 14.3 43 14.3 43.4 14.3 43.4 14.3 43.4 24.1 43.4 24.1 43.4 24.71 43.4 25.2 42.91 25.2 42.3 25.2 41.69 24.71 41.2 24.1 41.2 24.1 41.2 14.3 41.2 14.3 41.2 13.69 41.2 13.2 41.69 13.2 42.3 13.2 42.91 13.69 43.4 14.3 43.4 14.3 43.4 14.3 43 14.3 43 14.3 43 14.3 43 14.3 43ZM 1.7 43C 1.7 43 1.7 42.6 1.7 42.6 1.53 42.6 1.4 42.46 1.4 42.3 1.4 42.13 1.54 42 1.7 42 1.7 42 11.5 42 11.5 42 11.67 42 11.8 42.13 11.8 42.3 11.8 42.46 11.67 42.6 11.5 42.6 11.5 42.6 1.7 42.6 1.7 42.6 1.7 42.6 1.7 43 1.7 43 1.7 43 1.7 43.4 1.7 43.4 1.7 43.4 11.5 43.4 11.5 43.4 12.11 43.4 12.6 42.91 12.6 42.3 12.6 41.69 12.11 41.2 11.5 41.2 11.5 41.2 1.7 41.2 1.7 41.2 1.09 41.2 0.6 41.69 0.6 42.3 0.6 42.91 1.09 43.4 1.7 43.4 1.7 43.4 1.7 43 1.7 43 1.7 43 1.7 43 1.7 43ZM 38.13 39.7C 38.13 39.7 38.51 39.58 38.51 39.58 38.43 39.32 36.4 32.42 36.4 21.3 36.4 21.3 36.4 14.6 36.4 14.6 36.4 14.6 21.6 14.6 21.6 14.6 21.6 14.6 21.6 18.2 21.6 18.2 21.6 18.2 33.9 18.2 33.9 18.2 34.07 18.2 34.2 18.33 34.2 18.5 34.2 18.66 34.06 18.8 33.9 18.8 33.9 18.8 21.3 18.8 21.3 18.8 21.14 18.8 21 18.66 21 18.5 21 18.5 21 14.3 21 14.3 21 14.13 21.14 14 21.3 14 21.3 14 36.7 14 36.7 14 36.86 14 37 14.13 37 14.3 37 14.3 37 21.3 37 21.3 37 32.3 39.06 39.31 39.09 39.41 39.09 39.41 39.1 39.5 39.1 39.5 39.1 39.63 39.02 39.75 38.88 39.79 38.88 39.79 39 40.17 39 40.17 39 40.17 38.89 39.79 38.89 39.79 38.89 39.79 38.8 39.8 38.8 39.8 38.67 39.8 38.55 39.72 38.51 39.58 38.51 39.58 38.13 39.7 38.13 39.7 38.13 39.7 37.75 39.81 37.75 39.81 37.89 40.29 38.33 40.6 38.8 40.6 38.91 40.6 39.01 40.58 39.11 40.55 39.11 40.55 39.11 40.55 39.11 40.55 39.11 40.55 39.12 40.55 39.12 40.55 39.59 40.41 39.9 39.97 39.9 39.5 39.9 39.39 39.89 39.29 39.85 39.18 39.84 39.14 37.8 32.2 37.8 21.3 37.8 21.3 37.8 14.3 37.8 14.3 37.8 13.69 37.31 13.2 36.7 13.2 36.7 13.2 21.3 13.2 21.3 13.2 20.69 13.2 20.2 13.69 20.2 14.3 20.2 14.3 20.2 18.5 20.2 18.5 20.2 19.11 20.69 19.6 21.3 19.6 21.3 19.6 33.9 19.6 33.9 19.6 34.51 19.6 35 19.11 35 18.5 35 17.89 34.51 17.4 33.9 17.4 33.9 17.4 22.4 17.4 22.4 17.4 22.4 17.4 22.4 15.4 22.4 15.4 22.4 15.4 35.6 15.4 35.6 15.4 35.6 15.4 35.6 21.3 35.6 21.3 35.6 32.52 37.65 39.5 37.75 39.82 37.75 39.82 38.13 39.7 38.13 39.7 38.13 39.7 38.13 39.7 38.13 39.7ZM 19 40.17C 19 40.17 19.11 39.79 19.11 39.79 18.98 39.75 18.9 39.63 18.9 39.5 18.9 39.5 18.91 39.41 18.91 39.41 18.91 39.41 18.91 39.41 18.91 39.41 18.91 39.41 18.91 39.41 18.91 39.41 18.94 39.32 20.91 32.6 21 22 21 22 21 21.6 21 21.6 21 21.6 8.7 21.6 8.7 21.6 8.54 21.6 8.4 21.47 8.4 21.3 8.4 21.3 8.4 17.1 8.4 17.1 8.4 16.93 8.54 16.8 8.7 16.8 8.7 16.8 18.5 16.8 18.5 16.8 18.66 16.8 18.8 16.93 18.8 17.1 18.8 17.26 18.66 17.4 18.5 17.4 18.5 17.4 9 17.4 9 17.4 9 17.4 9 21 9 21 9 21 21.3 21 21.3 21 21.47 21 21.6 21.13 21.6 21.3 21.6 32.42 19.57 39.32 19.49 39.59 19.45 39.72 19.33 39.8 19.2 39.8 19.2 39.8 19.11 39.79 19.11 39.79 19.11 39.79 19.11 39.79 19.11 39.79 19.11 39.79 19.11 39.79 19.11 39.79 19.11 39.79 19 40.17 19 40.17 19 40.17 18.89 40.55 18.89 40.55 18.99 40.58 19.09 40.6 19.2 40.6 19.67 40.6 20.11 40.29 20.25 39.81 20.35 39.5 22.4 32.52 22.4 21.3 22.4 20.69 21.91 20.2 21.3 20.2 21.3 20.2 9.8 20.2 9.8 20.2 9.8 20.2 9.8 18.2 9.8 18.2 9.8 18.2 18.5 18.2 18.5 18.2 19.11 18.2 19.6 17.71 19.6 17.1 19.6 16.49 19.11 16 18.5 16 18.5 16 8.7 16 8.7 16 8.09 16 7.6 16.49 7.6 17.1 7.6 17.1 7.6 21.3 7.6 21.3 7.6 21.91 8.09 22.4 8.7 22.4 8.7 22.4 20.6 22.4 20.6 22.4 20.6 22.4 20.6 22 20.6 22 20.6 22 20.2 22 20.2 22 20.11 32.5 18.16 39.14 18.15 39.19 18.15 39.19 18.15 39.19 18.15 39.19 18.15 39.19 18.15 39.18 18.15 39.18 18.11 39.29 18.1 39.39 18.1 39.5 18.1 39.97 18.41 40.41 18.88 40.55 18.88 40.55 18.93 40.57 18.93 40.57 18.93 40.57 18.89 40.55 18.89 40.55 18.89 40.55 19 40.17 19 40.17 19 40.17 19 40.17 19 40.17ZM 4.88 40.12C 4.88 40.12 5.06 39.77 5.06 39.77 4.96 39.71 4.9 39.61 4.9 39.5 4.9 39.5 4.93 39.36 4.93 39.36 4.93 39.36 4.93 39.36 4.93 39.36 4.93 39.36 4.93 39.36 4.93 39.36 4.98 39.26 8.4 32.39 8.4 24.1 8.4 23.93 8.54 23.8 8.7 23.8 8.87 23.8 9 23.93 9 24.1 9 32.52 5.6 39.38 5.47 39.63 5.41 39.74 5.31 39.8 5.2 39.8 5.2 39.8 5.06 39.77 5.06 39.77 5.06 39.77 4.88 40.12 4.88 40.12 4.88 40.12 4.7 40.48 4.7 40.48 4.86 40.56 5.03 40.6 5.2 40.6 5.6 40.6 5.99 40.38 6.18 39.99 6.34 39.67 9.8 32.73 9.8 24.1 9.8 23.49 9.31 23 8.7 23 8.09 23 7.6 23.49 7.6 24.1 7.6 32.17 4.24 38.97 4.22 39.01 4.22 39.01 4.22 39 4.22 39 4.14 39.16 4.1 39.33 4.1 39.5 4.1 39.9 4.32 40.29 4.7 40.48 4.7 40.48 4.88 40.12 4.88 40.12 4.88 40.12 4.88 40.12 4.88 40.12ZM 15.7 14.3C 15.7 14.3 16.1 14.3 16.1 14.3 16.1 14.13 16.24 14 16.4 14 17.39 14 18.2 13.19 18.2 12.2 18.2 11.2 17.39 10.4 16.4 10.4 16.24 10.4 16.1 10.26 16.1 10.1 16.1 9.93 16.23 9.8 16.4 9.8 17.72 9.8 18.8 10.88 18.8 12.2 18.8 13.52 17.72 14.6 16.4 14.6 16.24 14.6 16.1 14.46 16.1 14.3 16.1 14.3 15.7 14.3 15.7 14.3 15.7 14.3 15.3 14.3 15.3 14.3 15.3 14.91 15.79 15.4 16.4 15.4 18.17 15.4 19.6 13.96 19.6 12.2 19.6 10.43 18.17 9 16.4 9 15.79 9 15.3 9.49 15.3 10.1 15.3 10.71 15.79 11.2 16.4 11.2 16.95 11.2 17.4 11.65 17.4 12.2 17.4 12.75 16.95 13.2 16.4 13.2 15.79 13.2 15.3 13.69 15.3 14.3 15.3 14.3 15.7 14.3 15.7 14.3 15.7 14.3 15.7 14.3 15.7 14.3ZM 5.2 11.5C 5.2 11.5 5.6 11.5 5.6 11.5 5.6 9.98 6.69 8.72 8.13 8.45 8.13 8.45 8.52 8.38 8.52 8.38 8.52 8.38 8.45 8 8.45 8 8.42 7.76 8.4 7.53 8.4 7.3 8.4 4.82 10.42 2.8 12.9 2.8 13.41 2.8 13.92 2.89 14.41 3.06 14.41 3.06 14.76 3.19 14.76 3.19 14.76 3.19 14.91 2.84 14.91 2.84 15.28 1.99 16.13 1.4 17.1 1.4 18.42 1.4 19.5 2.48 19.5 3.8 19.5 3.96 19.36 4.1 19.2 4.1 19.04 4.1 18.9 3.96 18.9 3.8 18.9 2.81 18.09 2 17.1 2 16.15 2 15.37 2.74 15.31 3.69 15.31 3.79 15.24 3.89 15.15 3.94 15.15 3.94 15.01 3.97 15.01 3.97 15.01 3.97 14.86 3.93 14.86 3.93 14.86 3.93 14.84 3.92 14.84 3.92 14.84 3.92 14.86 3.93 14.86 3.93 14.26 3.58 13.59 3.4 12.9 3.4 10.75 3.4 9 5.15 9 7.3 9 7.75 9.08 8.19 9.24 8.62 9.24 8.62 9.25 8.72 9.25 8.72 9.25 8.72 9.19 8.91 9.19 8.91 9.13 8.98 9.05 9.02 8.96 9.02 8.96 9.02 8.92 9.02 8.92 9.02 8.92 9.02 8.89 9.42 8.89 9.42 8.89 9.42 8.94 9.02 8.94 9.02 8.94 9.02 8.82 9.01 8.82 9.01 8.82 9.01 8.79 9.01 8.79 9.01 8.79 9.01 8.81 9.01 8.81 9.01 8.81 9.01 8.71 9 8.71 9 8.71 9 8.71 9 8.71 9 8.71 9 8.7 9 8.7 9 7.32 9 6.2 10.12 6.2 11.5 6.2 12.88 7.32 14 8.7 14 8.87 14 9 14.13 9 14.3 9 14.46 8.87 14.6 8.7 14.6 6.99 14.6 5.6 13.21 5.6 11.5 5.6 11.5 5.2 11.5 5.2 11.5 5.2 11.5 4.8 11.5 4.8 11.5 4.8 13.65 6.55 15.4 8.7 15.4 9.31 15.4 9.8 14.91 9.8 14.3 9.8 13.69 9.31 13.2 8.7 13.2 7.76 13.2 7 12.43 7 11.5 7 10.56 7.76 9.8 8.7 9.8 8.7 9.8 8.7 9.4 8.7 9.4 8.7 9.4 8.68 9.8 8.68 9.8 8.68 9.8 8.72 9.8 8.72 9.8 8.72 9.8 8.72 9.8 8.72 9.8 8.72 9.8 8.84 9.82 8.84 9.82 8.84 9.82 8.85 9.82 8.85 9.82 8.85 9.82 8.86 9.82 8.86 9.82 8.86 9.82 8.96 9.82 8.96 9.82 9.3 9.82 9.62 9.67 9.82 9.4 9.97 9.2 10.05 8.96 10.05 8.72 10.05 8.6 10.03 8.47 9.99 8.35 9.86 8 9.8 7.65 9.8 7.3 9.8 5.59 11.19 4.2 12.9 4.2 13.44 4.2 13.98 4.35 14.46 4.62 14.46 4.62 14.46 4.62 14.46 4.62 14.63 4.72 14.82 4.77 15.01 4.77 15.19 4.77 15.37 4.73 15.53 4.64 15.87 4.46 16.09 4.12 16.11 3.74 16.14 3.21 16.58 2.8 17.1 2.8 17.65 2.8 18.1 3.25 18.1 3.8 18.1 4.41 18.59 4.9 19.2 4.9 19.81 4.9 20.3 4.41 20.3 3.8 20.3 2.03 18.87 0.6 17.1 0.6 15.8 0.6 14.67 1.39 14.17 2.52 14.17 2.52 14.54 2.68 14.54 2.68 14.54 2.68 14.67 2.31 14.67 2.31 14.11 2.1 13.51 2 12.9 2 9.98 2 7.6 4.38 7.6 7.3 7.6 7.57 7.62 7.85 7.66 8.12 7.66 8.12 8.06 8.06 8.06 8.06 8.06 8.06 7.99 7.66 7.99 7.66 6.17 8 4.8 9.59 4.8 11.5 4.8 11.5 5.2 11.5 5.2 11.5 5.2 11.5 5.2 11.5 5.2 11.5ZM 36 11.5C 36 11.5 36.4 11.5 36.4 11.5 36.4 11.33 36.53 11.2 36.7 11.2 38.08 11.2 39.2 10.08 39.2 8.7 39.2 7.32 38.08 6.2 36.7 6.2 36.26 6.2 35.82 6.32 35.43 6.56 35.43 6.56 35.39 6.58 35.39 6.58 35.39 6.58 35.43 6.56 35.43 6.56 35.43 6.56 35.28 6.6 35.28 6.6 35.28 6.6 35.12 6.55 35.12 6.55 35.12 6.55 35.08 6.53 35.08 6.53 35.08 6.53 35.12 6.55 35.12 6.55 35.03 6.5 34.98 6.4 34.98 6.3 34.98 6.3 34.98 6.27 34.98 6.27 34.99 6.15 35 6.03 35 5.9 35 3.75 33.25 2 31.1 2 29.59 2 28.21 2.88 27.57 4.25 27.52 4.35 27.42 4.42 27.31 4.43 27.31 4.43 27.33 4.83 27.33 4.83 27.33 4.83 27.33 4.43 27.33 4.43 27.33 4.43 27.31 4.43 27.31 4.43 27.19 4.43 27.09 4.37 27.04 4.28 26.71 3.73 26.13 3.4 25.5 3.4 24.51 3.4 23.7 4.2 23.7 5.2 23.7 5.42 23.74 5.64 23.83 5.85 23.83 5.85 23.85 5.96 23.85 5.96 23.85 5.96 23.81 6.1 23.81 6.1 23.77 6.18 23.69 6.23 23.6 6.25 23.6 6.25 23.6 6.25 23.6 6.25 23.6 6.25 23.61 6.25 23.61 6.25 22.44 6.48 21.6 7.51 21.6 8.7 21.6 10.08 22.72 11.2 24.1 11.2 25.48 11.2 26.6 10.08 26.6 8.7 26.6 8.53 26.73 8.4 26.9 8.4 27.06 8.4 27.2 8.53 27.2 8.7 27.2 10.41 25.81 11.8 24.1 11.8 22.39 11.8 21 10.41 21 8.7 21 7.45 21.76 6.33 22.87 5.85 22.87 5.85 23.15 5.73 23.15 5.73 23.15 5.73 23.11 5.44 23.11 5.44 23.1 5.36 23.1 5.28 23.1 5.2 23.1 3.88 24.18 2.8 25.5 2.8 26.04 2.8 26.53 2.97 26.94 3.28 26.94 3.28 27.26 3.53 27.26 3.53 27.26 3.53 27.5 3.2 27.5 3.2 28.34 2.09 29.68 1.4 31.1 1.4 33.39 1.4 35.29 3.12 35.56 5.33 35.56 5.33 35.62 5.77 35.62 5.77 35.62 5.77 36.05 5.67 36.05 5.67 36.27 5.62 36.48 5.6 36.7 5.6 38.41 5.6 39.8 6.99 39.8 8.7 39.8 10.41 38.41 11.8 36.7 11.8 36.53 11.8 36.4 11.66 36.4 11.5 36.4 11.5 36 11.5 36 11.5 36 11.5 35.6 11.5 35.6 11.5 35.6 12.11 36.09 12.6 36.7 12.6 38.85 12.6 40.6 10.85 40.6 8.7 40.6 6.55 38.85 4.8 36.7 4.8 36.42 4.8 36.15 4.83 35.87 4.89 35.87 4.89 35.96 5.28 35.96 5.28 35.96 5.28 36.36 5.23 36.36 5.23 36.03 2.62 33.8 0.6 31.1 0.6 29.42 0.6 27.85 1.41 26.86 2.72 26.86 2.72 27.18 2.96 27.18 2.96 27.18 2.96 27.42 2.65 27.42 2.65 26.88 2.23 26.21 2 25.5 2 23.73 2 22.3 3.43 22.3 5.2 22.3 5.31 22.31 5.42 22.32 5.53 22.32 5.53 22.72 5.49 22.72 5.49 22.72 5.49 22.56 5.12 22.56 5.12 21.15 5.72 20.2 7.12 20.2 8.7 20.2 10.85 21.95 12.6 24.1 12.6 26.25 12.6 28 10.85 28 8.7 28 8.09 27.51 7.6 26.9 7.6 26.29 7.6 25.8 8.09 25.8 8.7 25.8 9.63 25.04 10.4 24.1 10.4 23.16 10.4 22.4 9.63 22.4 8.7 22.4 7.89 22.98 7.19 23.76 7.03 23.76 7.03 23.76 7.03 23.76 7.03 23.76 7.03 23.76 7.03 23.76 7.03 24.08 6.97 24.35 6.77 24.51 6.48 24.6 6.32 24.65 6.14 24.65 5.96 24.65 5.82 24.62 5.69 24.57 5.56 24.52 5.43 24.5 5.31 24.5 5.2 24.5 4.65 24.95 4.2 25.5 4.2 25.85 4.2 26.16 4.38 26.35 4.69 26.56 5.03 26.93 5.23 27.31 5.23 27.31 5.23 27.33 5.23 27.33 5.23 27.33 5.23 27.34 5.23 27.34 5.23 27.34 5.23 27.35 5.23 27.35 5.23 27.76 5.2 28.12 4.96 28.29 4.59 28.8 3.5 29.91 2.8 31.1 2.8 32.81 2.8 34.2 4.19 34.2 5.9 34.2 6 34.19 6.1 34.19 6.2 34.19 6.19 34.18 6.3 34.18 6.3 34.18 6.67 34.37 7.02 34.69 7.23 34.69 7.23 34.69 7.23 34.69 7.23 34.87 7.34 35.08 7.4 35.28 7.4 35.47 7.4 35.67 7.35 35.84 7.25 35.84 7.25 35.84 7.24 35.84 7.24 36.12 7.08 36.41 7 36.7 7 37.64 7 38.4 7.76 38.4 8.7 38.4 9.63 37.64 10.4 36.7 10.4 36.09 10.4 35.6 10.89 35.6 11.5 35.6 11.5 36 11.5 36 11.5 36 11.5 36 11.5 36 11.5ZM 30.4 10.1C 30.4 10.1 30.8 10.1 30.8 10.1 30.8 9.93 30.93 9.8 31.1 9.8 32.08 9.8 33.01 9.44 33.73 8.77 33.79 8.72 33.86 8.7 33.94 8.7 34.02 8.7 34.1 8.73 34.16 8.79 34.21 8.85 34.24 8.92 34.24 9 34.24 9.08 34.2 9.16 34.14 9.22 34.14 9.22 34.14 9.22 34.14 9.22 33.31 9.98 32.23 10.4 31.1 10.4 30.94 10.4 30.8 10.26 30.8 10.1 30.8 10.1 30.4 10.1 30.4 10.1 30.4 10.1 30 10.1 30 10.1 30 10.71 30.49 11.2 31.1 11.2 32.43 11.2 33.7 10.7 34.68 9.81 34.68 9.81 34.68 9.81 34.68 9.81 34.68 9.81 34.68 9.81 34.68 9.81 34.92 9.59 35.04 9.29 35.04 9 35.04 8.73 34.94 8.46 34.75 8.25 34.53 8.02 34.23 7.9 33.94 7.9 33.67 7.9 33.4 7.99 33.19 8.18 32.62 8.71 31.88 9 31.1 9 30.49 9 30 9.49 30 10.1 30 10.1 30.4 10.1 30.4 10.1 30.4 10.1 30.4 10.1 30.4 10.1ZM 17.82 7.3C 17.82 7.3 18.22 7.3 18.22 7.3 18.22 7.13 18.35 7 18.51 7 18.51 7 18.52 7 18.52 7 18.69 7 18.82 7.13 18.82 7.3 18.82 7.47 18.69 7.6 18.52 7.6 18.35 7.6 18.22 7.46 18.22 7.3 18.22 7.3 17.82 7.3 17.82 7.3 17.82 7.3 17.42 7.3 17.42 7.3 17.42 7.91 17.92 8.4 18.52 8.4 19.13 8.4 19.62 7.91 19.62 7.3 19.62 6.69 19.13 6.2 18.52 6.2 18.52 6.2 18.51 6.2 18.51 6.2 17.91 6.2 17.42 6.69 17.42 7.3 17.42 7.3 17.82 7.3 17.82 7.3 17.82 7.3 17.82 7.3 17.82 7.3ZM 5.22 5.9C 5.22 5.9 5.62 5.9 5.62 5.9 5.62 5.73 5.75 5.6 5.91 5.6 5.91 5.6 5.92 5.6 5.92 5.6 6.09 5.6 6.22 5.73 6.22 5.9 6.22 6.06 6.09 6.2 5.92 6.2 5.75 6.2 5.62 6.06 5.62 5.9 5.62 5.9 5.22 5.9 5.22 5.9 5.22 5.9 4.82 5.9 4.82 5.9 4.82 6.51 5.31 7 5.92 7 6.53 7 7.02 6.51 7.02 5.9 7.02 5.29 6.53 4.8 5.92 4.8 5.92 4.8 5.91 4.8 5.91 4.8 5.31 4.8 4.82 5.29 4.82 5.9 4.82 5.9 5.22 5.9 5.22 5.9 5.22 5.9 5.22 5.9 5.22 5.9ZM 37.42 1.7C 37.42 1.7 37.82 1.7 37.82 1.7 37.82 1.53 37.95 1.4 38.11 1.4 38.11 1.4 38.12 1.4 38.12 1.4 38.29 1.4 38.42 1.53 38.42 1.7 38.42 1.86 38.29 2 38.12 2 37.96 2 37.82 1.86 37.82 1.7 37.82 1.7 37.42 1.7 37.42 1.7 37.42 1.7 37.02 1.7 37.02 1.7 37.02 2.31 37.51 2.8 38.12 2.8 38.73 2.8 39.22 2.31 39.22 1.7 39.22 1.09 38.73 0.6 38.12 0.6 38.12 0.6 38.11 0.6 38.11 0.6 37.5 0.6 37.02 1.09 37.02 1.7 37.02 1.7 37.42 1.7 37.42 1.7 37.42 1.7 37.42 1.7 37.42 1.7Z"
                              />
                            </g>
                          </svg>
                          <div class="name">
                            Enterprise <br />
                            Applications
                          </div>
                          <div class="description">
                            Our elite team of software engineers creates
                            dynamic, innovative ERP applications. We build
                            solutions that optimize critical business processes
                            and functions including inventory and construction
                            management, accounting, HR, and more.
                          </div>
                    </div>
                      </li>
                      <li>
                        <div class="hover-block hover-amp-link">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="44px"
                            height="44px"
                            viewBox="0 0 44 44"
                            focusable="false"
                            class="inline-svg icon-svg icon-saas-app"
                          >
                            <path
                              d="M 35.77 27.2C 35.77 27.2 35.4 27.2 35.4 27.2 35.03 27.2 34.73 26.9 34.73 26.53 34.73 26.16 35.03 25.86 35.4 25.86 35.4 25.86 35.77 25.86 35.77 25.86 39.02 25.86 41.66 23.22 41.66 19.97 41.66 17.21 39.79 14.85 37.1 14.23 36.8 14.16 36.59 13.89 36.58 13.58 36.53 7.38 31.44 2.34 25.24 2.34 21.11 2.34 17.3 4.59 15.3 8.21 15.13 8.51 14.76 8.63 14.45 8.5 13.89 8.25 13.29 8.13 12.68 8.13 10.46 8.13 8.56 9.79 8.27 12 8.23 12.28 8.02 12.51 7.74 12.57 4.61 13.19 2.34 15.96 2.34 19.15 2.34 22.85 5.35 25.86 9.05 25.86 9.05 25.86 11.28 25.86 11.28 25.86 11.65 25.86 11.95 26.16 11.95 26.53 11.95 26.53 11.95 35.63 11.95 35.63 11.95 36 11.65 36.3 11.28 36.3 11.28 36.3 9.19 36.3 9.19 36.3 8.88 37.58 7.73 38.53 6.36 38.53 4.76 38.53 3.46 37.23 3.46 35.63 3.46 34.03 4.76 32.72 6.36 32.72 7.73 32.72 8.88 33.68 9.19 34.96 9.19 34.96 10.61 34.96 10.61 34.96 10.61 34.96 10.61 27.2 10.61 27.2 10.61 27.2 9.05 27.2 9.05 27.2 4.61 27.2 1 23.59 1 19.15 1 15.47 3.51 12.27 7.02 11.36 7.59 8.72 9.94 6.79 12.68 6.79 13.28 6.79 13.86 6.88 14.42 7.06 16.72 3.31 20.81 1 25.24 1 28.61 1 31.78 2.31 34.17 4.68 36.44 6.93 37.76 9.89 37.91 13.06 39.27 13.48 40.5 14.31 41.4 15.44 42.43 16.71 43 18.32 43 19.97 43 23.95 39.76 27.2 35.77 27.2ZM 6.36 34.06C 5.5 34.06 4.8 34.76 4.8 35.63 4.8 36.49 5.5 37.19 6.36 37.19 7.22 37.19 7.93 36.49 7.93 35.63 7.93 34.76 7.22 34.06 6.36 34.06ZM 13.96 25.86C 13.96 25.86 18.43 25.86 18.43 25.86 18.8 25.86 19.1 26.16 19.1 26.53 19.1 26.53 19.1 37.27 19.1 37.27 20.37 37.57 21.33 38.72 21.33 40.1 21.33 41.7 20.03 43 18.43 43 16.82 43 15.52 41.7 15.52 40.1 15.52 38.72 16.48 37.57 17.76 37.27 17.76 37.27 17.76 27.2 17.76 27.2 17.76 27.2 13.96 27.2 13.96 27.2 13.59 27.2 13.29 26.9 13.29 26.53 13.29 26.16 13.59 25.86 13.96 25.86ZM 16.86 40.1C 16.86 40.96 17.56 41.66 18.43 41.66 19.29 41.66 19.99 40.96 19.99 40.1 19.99 39.23 19.29 38.53 18.43 38.53 17.56 38.53 16.86 39.23 16.86 40.1ZM 24.9 37.27C 24.9 37.27 24.9 27.2 24.9 27.2 24.9 27.2 21.11 27.2 21.11 27.2 20.74 27.2 20.44 26.9 20.44 26.53 20.44 26.16 20.74 25.86 21.11 25.86 21.11 25.86 25.57 25.86 25.57 25.86 25.94 25.86 26.24 26.16 26.24 26.53 26.24 26.53 26.24 37.27 26.24 37.27 27.52 37.57 28.48 38.72 28.48 40.1 28.48 41.7 27.18 43 25.57 43 23.97 43 22.67 41.7 22.67 40.1 22.67 38.72 23.62 37.57 24.9 37.27ZM 25.57 41.66C 26.44 41.66 27.14 40.96 27.14 40.1 27.14 39.23 26.44 38.53 25.57 38.53 24.71 38.53 24.01 39.23 24.01 40.1 24.01 40.96 24.71 41.66 25.57 41.66ZM 31.23 8.75C 29.74 6.95 27.56 5.91 25.24 5.91 24.87 5.91 24.57 5.61 24.57 5.24 24.57 4.87 24.87 4.57 25.24 4.57 27.96 4.57 30.52 5.79 32.26 7.9 32.5 8.18 32.46 8.61 32.17 8.84 32.05 8.94 31.9 9 31.75 9 31.55 9 31.36 8.91 31.23 8.75ZM 33.68 14.28C 33.31 14.28 33.01 13.98 33.01 13.61 33 12.67 32.82 11.75 32.48 10.88 32.35 10.53 32.52 10.15 32.86 10.01 33.21 9.88 33.59 10.05 33.73 10.39 34.13 11.42 34.34 12.5 34.35 13.6 34.35 13.97 34.06 14.28 33.69 14.28 33.69 14.28 33.68 14.28 33.68 14.28ZM 27.59 26.53C 27.59 26.16 27.89 25.86 28.26 25.86 28.26 25.86 32.72 25.86 32.72 25.86 33.09 25.86 33.39 26.16 33.39 26.53 33.39 26.53 33.39 34.96 33.39 34.96 33.39 34.96 34.81 34.96 34.81 34.96 35.12 33.68 36.27 32.72 37.64 32.72 39.24 32.72 40.54 34.03 40.54 35.63 40.54 37.23 39.24 38.53 37.64 38.53 36.27 38.53 35.12 37.58 34.81 36.3 34.81 36.3 32.72 36.3 32.72 36.3 32.35 36.3 32.05 36 32.05 35.63 32.05 35.63 32.05 27.2 32.05 27.2 32.05 27.2 28.26 27.2 28.26 27.2 27.89 27.2 27.59 26.9 27.59 26.53ZM 37.64 37.19C 38.5 37.19 39.2 36.49 39.2 35.63 39.2 34.76 38.5 34.06 37.64 34.06 36.78 34.06 36.07 34.76 36.07 35.63 36.07 36.49 36.78 37.19 37.64 37.19Z"
                            />
                            <path
                              d="M 22.67 40.09C 22.67 40.09 23.07 40.09 23.07 40.09 23.07 38.91 23.89 37.92 25 37.66 25 37.66 25.3 37.59 25.3 37.59 25.3 37.59 25.3 26.8 25.3 26.8 25.3 26.8 21.11 26.8 21.11 26.8 20.96 26.8 20.84 26.68 20.84 26.53 20.84 26.38 20.96 26.26 21.11 26.26 21.11 26.26 25.57 26.26 25.57 26.26 25.72 26.26 25.84 26.38 25.84 26.53 25.84 26.53 25.84 37.59 25.84 37.59 25.84 37.59 26.15 37.66 26.15 37.66 27.25 37.92 28.08 38.91 28.08 40.09 28.08 41.47 26.95 42.6 25.57 42.6 24.19 42.6 23.07 41.47 23.07 40.09 23.07 40.09 22.67 40.09 22.67 40.09 22.67 40.09 22.27 40.09 22.27 40.09 22.27 41.92 23.75 43.4 25.57 43.4 27.4 43.4 28.88 41.92 28.88 40.09 28.88 38.53 27.79 37.23 26.34 36.88 26.34 36.88 26.24 37.27 26.24 37.27 26.24 37.27 26.64 37.27 26.64 37.27 26.64 37.27 26.64 26.53 26.64 26.53 26.64 25.94 26.17 25.46 25.57 25.46 25.57 25.46 21.11 25.46 21.11 25.46 20.51 25.46 20.04 25.94 20.04 26.53 20.04 27.12 20.52 27.6 21.11 27.6 21.11 27.6 24.5 27.6 24.5 27.6 24.5 27.6 24.5 37.27 24.5 37.27 24.5 37.27 24.9 37.27 24.9 37.27 24.9 37.27 24.81 36.88 24.81 36.88 23.36 37.23 22.27 38.53 22.27 40.09 22.27 40.09 22.67 40.09 22.67 40.09 22.67 40.09 22.67 40.09 22.67 40.09ZM 24.01 40.09C 24.01 40.09 23.61 40.09 23.61 40.09 23.61 41.18 24.49 42.06 25.57 42.06 26.66 42.06 27.54 41.18 27.54 40.09 27.54 39.01 26.66 38.13 25.57 38.13 24.49 38.13 23.61 39.01 23.61 40.09 23.61 40.09 24.01 40.09 24.01 40.09 24.01 40.09 24.41 40.09 24.41 40.09 24.41 39.45 24.93 38.93 25.57 38.93 26.21 38.93 26.74 39.45 26.74 40.09 26.74 40.74 26.22 41.26 25.57 41.26 24.93 41.26 24.41 40.73 24.41 40.09 24.41 40.09 24.01 40.09 24.01 40.09 24.01 40.09 24.01 40.09 24.01 40.09ZM 15.52 40.09C 15.52 40.09 15.92 40.09 15.92 40.09 15.92 38.91 16.75 37.92 17.85 37.66 17.85 37.66 18.16 37.59 18.16 37.59 18.16 37.59 18.16 26.8 18.16 26.8 18.16 26.8 13.96 26.8 13.96 26.8 13.81 26.8 13.69 26.68 13.69 26.53 13.69 26.38 13.81 26.26 13.96 26.26 13.96 26.26 18.43 26.26 18.43 26.26 18.57 26.26 18.7 26.38 18.7 26.53 18.7 26.53 18.7 37.59 18.7 37.59 18.7 37.59 19 37.66 19 37.66 20.11 37.92 20.93 38.91 20.93 40.09 20.93 41.47 19.81 42.6 18.43 42.6 17.05 42.6 15.92 41.47 15.92 40.09 15.92 40.09 15.52 40.09 15.52 40.09 15.52 40.09 15.12 40.09 15.12 40.09 15.12 41.92 16.6 43.4 18.43 43.4 20.25 43.4 21.73 41.92 21.73 40.09 21.73 38.53 20.65 37.23 19.19 36.88 19.19 36.88 19.1 37.27 19.1 37.27 19.1 37.27 19.5 37.27 19.5 37.27 19.5 37.27 19.5 26.53 19.5 26.53 19.5 25.94 19.02 25.46 18.43 25.46 18.43 25.46 13.96 25.46 13.96 25.46 13.37 25.46 12.89 25.94 12.89 26.53 12.89 27.12 13.37 27.6 13.96 27.6 13.96 27.6 17.36 27.6 17.36 27.6 17.36 27.6 17.36 37.27 17.36 37.27 17.36 37.27 17.76 37.27 17.76 37.27 17.76 37.27 17.66 36.88 17.66 36.88 16.21 37.23 15.12 38.53 15.12 40.09 15.12 40.09 15.52 40.09 15.52 40.09 15.52 40.09 15.52 40.09 15.52 40.09ZM 16.86 40.09C 16.86 40.09 16.46 40.09 16.46 40.09 16.46 41.18 17.34 42.06 18.43 42.06 19.51 42.06 20.39 41.18 20.39 40.09 20.39 39.01 19.51 38.13 18.43 38.13 17.34 38.13 16.46 39.01 16.46 40.09 16.46 40.09 16.86 40.09 16.86 40.09 16.86 40.09 17.26 40.09 17.26 40.09 17.26 39.45 17.78 38.93 18.43 38.93 19.07 38.93 19.59 39.45 19.59 40.09 19.59 40.74 19.07 41.26 18.43 41.26 17.78 41.26 17.26 40.74 17.26 40.09 17.26 40.09 16.86 40.09 16.86 40.09 16.86 40.09 16.86 40.09 16.86 40.09ZM 34.81 36.3C 34.81 36.3 34.81 35.9 34.81 35.9 34.81 35.9 32.72 35.9 32.72 35.9 32.57 35.9 32.45 35.78 32.45 35.63 32.45 35.63 32.45 26.8 32.45 26.8 32.45 26.8 28.25 26.8 28.25 26.8 28.11 26.8 27.99 26.68 27.99 26.53 27.99 26.38 28.11 26.26 28.25 26.26 28.25 26.26 32.72 26.26 32.72 26.26 32.87 26.26 32.99 26.38 32.99 26.53 32.99 26.53 32.99 35.36 32.99 35.36 32.99 35.36 35.13 35.36 35.13 35.36 35.13 35.36 35.2 35.05 35.2 35.05 35.46 33.95 36.46 33.12 37.64 33.12 39.02 33.13 40.14 34.25 40.14 35.63 40.14 37.01 39.02 38.13 37.64 38.13 36.46 38.13 35.46 37.31 35.2 36.2 35.2 36.2 35.13 35.9 35.13 35.9 35.13 35.9 34.81 35.9 34.81 35.9 34.81 35.9 34.81 36.3 34.81 36.3 34.81 36.3 34.42 36.39 34.42 36.39 34.77 37.85 36.08 38.93 37.64 38.93 39.46 38.93 40.94 37.45 40.94 35.63 40.94 33.8 39.46 32.32 37.64 32.32 36.08 32.32 34.77 33.41 34.42 34.86 34.42 34.86 34.81 34.96 34.81 34.96 34.81 34.96 34.81 34.56 34.81 34.56 34.81 34.56 33.79 34.56 33.79 34.56 33.79 34.56 33.79 26.53 33.79 26.53 33.79 25.94 33.31 25.46 32.72 25.46 32.72 25.46 28.25 25.46 28.25 25.46 27.66 25.46 27.19 25.94 27.19 26.53 27.19 27.12 27.66 27.6 28.25 27.6 28.25 27.6 31.65 27.6 31.65 27.6 31.65 27.6 31.65 35.63 31.65 35.63 31.65 36.22 32.13 36.7 32.72 36.7 32.72 36.7 34.81 36.7 34.81 36.7 34.81 36.7 34.81 36.3 34.81 36.3 34.81 36.3 34.42 36.39 34.42 36.39 34.42 36.39 34.81 36.3 34.81 36.3 34.81 36.3 34.81 36.3 34.81 36.3ZM 36.07 35.63C 36.07 35.63 35.67 35.63 35.67 35.63 35.67 36.71 36.55 37.59 37.64 37.59 38.72 37.59 39.6 36.71 39.6 35.63 39.6 34.54 38.72 33.66 37.64 33.66 36.55 33.66 35.67 34.54 35.67 35.63 35.67 35.63 36.07 35.63 36.07 35.63 36.07 35.63 36.47 35.63 36.47 35.63 36.48 34.99 37 34.46 37.64 34.46 38.28 34.46 38.8 34.99 38.8 35.63 38.8 36.27 38.28 36.79 37.64 36.79 37 36.79 36.48 36.27 36.47 35.63 36.47 35.63 36.07 35.63 36.07 35.63 36.07 35.63 36.07 35.63 36.07 35.63ZM 3.46 35.63C 3.46 35.63 3.86 35.63 3.86 35.63 3.86 34.25 4.98 33.13 6.36 33.12 7.54 33.12 8.54 33.95 8.8 35.05 8.8 35.05 8.87 35.36 8.87 35.36 8.87 35.36 11.01 35.36 11.01 35.36 11.01 35.36 11.01 26.8 11.01 26.8 11.01 26.8 9.05 26.8 9.05 26.8 4.83 26.79 1.41 23.37 1.4 19.15 1.4 15.66 3.78 12.61 7.12 11.74 7.12 11.74 7.36 11.68 7.36 11.68 7.36 11.68 7.41 11.44 7.41 11.44 7.94 8.99 10.14 7.19 12.68 7.19 13.24 7.19 13.78 7.27 14.3 7.44 14.3 7.44 14.6 7.53 14.6 7.53 14.6 7.53 14.76 7.27 14.76 7.27 16.99 3.63 20.95 1.4 25.24 1.4 28.5 1.4 31.57 2.66 33.89 4.96 36.09 7.14 37.36 10.01 37.51 13.08 37.51 13.08 37.52 13.36 37.52 13.36 37.52 13.36 37.79 13.44 37.79 13.44 39.08 13.84 40.24 14.63 41.09 15.69 42.06 16.89 42.6 18.41 42.6 19.97 42.59 23.73 39.53 26.79 35.77 26.8 35.77 26.8 35.4 26.8 35.4 26.8 35.25 26.8 35.13 26.68 35.13 26.53 35.13 26.38 35.25 26.26 35.4 26.26 35.4 26.26 35.77 26.26 35.77 26.26 39.24 26.26 42.06 23.44 42.06 19.97 42.06 17.03 40.06 14.5 37.19 13.84 37.07 13.81 36.98 13.7 36.98 13.58 36.92 7.16 31.66 1.94 25.24 1.94 20.96 1.94 17.02 4.27 14.95 8.01 14.9 8.1 14.81 8.15 14.71 8.15 14.71 8.15 14.6 8.13 14.6 8.13 14.6 8.13 14.6 8.13 14.6 8.13 14.6 8.13 14.61 8.13 14.61 8.13 14 7.86 13.35 7.73 12.68 7.73 10.25 7.73 8.19 9.54 7.87 11.95 7.86 12.06 7.77 12.15 7.66 12.18 4.34 12.84 1.94 15.76 1.94 19.15 1.94 23.07 5.13 26.26 9.05 26.26 9.05 26.26 11.28 26.26 11.28 26.26 11.43 26.26 11.55 26.38 11.55 26.53 11.55 26.53 11.55 35.63 11.55 35.63 11.55 35.78 11.43 35.9 11.28 35.9 11.28 35.9 8.87 35.9 8.87 35.9 8.87 35.9 8.8 36.2 8.8 36.2 8.54 37.31 7.54 38.13 6.36 38.13 4.98 38.13 3.86 37.01 3.86 35.63 3.86 35.63 3.46 35.63 3.46 35.63 3.46 35.63 3.06 35.63 3.06 35.63 3.06 37.45 4.54 38.93 6.36 38.93 7.92 38.93 9.23 37.85 9.58 36.39 9.58 36.39 9.19 36.3 9.19 36.3 9.19 36.3 9.19 36.7 9.19 36.7 9.19 36.7 11.28 36.7 11.28 36.7 11.87 36.7 12.35 36.22 12.35 35.63 12.35 35.63 12.35 26.53 12.35 26.53 12.35 25.94 11.87 25.46 11.28 25.46 11.28 25.46 9.05 25.46 9.05 25.46 5.57 25.45 2.75 22.63 2.74 19.15 2.74 16.15 4.88 13.54 7.81 12.96 8.26 12.87 8.61 12.51 8.67 12.05 8.93 10.05 10.66 8.53 12.68 8.53 13.24 8.53 13.78 8.64 14.29 8.86 14.29 8.86 14.29 8.86 14.29 8.86 14.29 8.86 14.29 8.86 14.29 8.86 14.43 8.92 14.57 8.95 14.71 8.95 15.09 8.95 15.46 8.75 15.65 8.4 17.58 4.91 21.25 2.74 25.24 2.74 31.22 2.74 36.13 7.61 36.18 13.59 36.19 14.08 36.53 14.51 37.01 14.62 39.52 15.2 41.26 17.39 41.26 19.97 41.25 22.99 38.8 25.45 35.77 25.46 35.77 25.46 35.4 25.46 35.4 25.46 34.81 25.46 34.33 25.94 34.33 26.53 34.33 27.12 34.81 27.6 35.4 27.6 35.4 27.6 35.77 27.6 35.77 27.6 39.98 27.6 43.4 24.17 43.4 19.97 43.4 18.23 42.8 16.53 41.72 15.18 40.76 14 39.47 13.13 38.03 12.68 38.03 12.68 37.91 13.06 37.91 13.06 37.91 13.06 38.31 13.04 38.31 13.04 38.15 9.77 36.79 6.71 34.45 4.39 31.99 1.95 28.71 0.6 25.24 0.6 20.67 0.6 16.45 2.98 14.08 6.85 14.08 6.85 14.42 7.06 14.42 7.06 14.42 7.06 14.54 6.68 14.54 6.68 13.94 6.49 13.32 6.39 12.68 6.39 9.75 6.39 7.24 8.45 6.63 11.27 6.63 11.27 7.02 11.36 7.02 11.36 7.02 11.36 6.92 10.97 6.92 10.97 3.23 11.93 0.6 15.29 0.6 19.15 0.6 23.81 4.39 27.6 9.05 27.6 9.05 27.6 10.21 27.6 10.21 27.6 10.21 27.6 10.21 34.56 10.21 34.56 10.21 34.56 9.19 34.56 9.19 34.56 9.19 34.56 9.19 34.96 9.19 34.96 9.19 34.96 9.58 34.86 9.58 34.86 9.23 33.41 7.92 32.32 6.36 32.32 4.54 32.32 3.06 33.8 3.06 35.63 3.06 35.63 3.46 35.63 3.46 35.63 3.46 35.63 3.46 35.63 3.46 35.63ZM 4.8 35.63C 4.8 35.63 4.4 35.63 4.4 35.63 4.4 36.71 5.28 37.59 6.36 37.59 7.45 37.59 8.32 36.71 8.33 35.63 8.32 34.54 7.44 33.66 6.36 33.66 5.28 33.66 4.4 34.54 4.4 35.63 4.4 35.63 4.8 35.63 4.8 35.63 4.8 35.63 5.2 35.63 5.2 35.63 5.2 34.99 5.72 34.46 6.36 34.46 7 34.46 7.52 34.99 7.53 35.63 7.52 36.27 7 36.79 6.36 36.79 5.72 36.79 5.2 36.27 5.2 35.63 5.2 35.63 4.8 35.63 4.8 35.63 4.8 35.63 4.8 35.63 4.8 35.63ZM 33.68 14.28C 33.68 14.28 33.68 13.88 33.68 13.88 33.53 13.88 33.41 13.76 33.41 13.61 33.4 12.62 33.21 11.65 32.85 10.73 32.85 10.73 32.83 10.64 32.83 10.64 32.84 10.53 32.9 10.42 33.01 10.38 33.01 10.38 33.11 10.36 33.11 10.36 33.21 10.37 33.32 10.43 33.36 10.54 33.74 11.52 33.94 12.55 33.95 13.61 33.95 13.76 33.83 13.88 33.68 13.88 33.68 13.88 33.69 14.28 33.69 14.28 33.69 14.28 33.69 13.88 33.69 13.88 33.69 13.88 33.68 13.88 33.68 13.88 33.68 13.88 33.68 14.28 33.68 14.28 33.68 14.28 33.68 14.68 33.68 14.68 33.68 14.68 33.69 14.68 33.69 14.68 33.69 14.68 33.69 14.68 33.69 14.68 33.69 14.68 33.69 14.68 33.69 14.68 34.28 14.67 34.75 14.19 34.75 13.6 34.74 12.45 34.52 11.32 34.1 10.25 33.94 9.82 33.53 9.56 33.11 9.56 32.97 9.56 32.84 9.59 32.72 9.64 32.29 9.8 32.03 10.21 32.03 10.64 32.03 10.77 32.06 10.9 32.11 11.02 32.43 11.85 32.6 12.73 32.61 13.62 32.61 14.21 33.09 14.68 33.68 14.68 33.68 14.68 33.68 14.28 33.68 14.28 33.68 14.28 33.68 14.28 33.68 14.28ZM 31.23 8.75C 31.23 8.75 31.54 8.5 31.54 8.5 29.97 6.6 27.67 5.51 25.24 5.51 25.09 5.51 24.97 5.39 24.97 5.24 24.97 5.1 25.09 4.97 25.24 4.97 27.84 4.97 30.28 6.13 31.95 8.15 31.95 8.15 32.02 8.32 32.02 8.32 32.02 8.4 31.98 8.48 31.92 8.53 31.92 8.53 31.75 8.6 31.75 8.6 31.67 8.59 31.59 8.56 31.54 8.5 31.54 8.5 31.23 8.75 31.23 8.75 31.23 8.75 30.92 9.01 30.92 9.01 31.13 9.26 31.44 9.4 31.75 9.4 31.98 9.4 32.23 9.31 32.43 9.15 32.68 8.94 32.82 8.63 32.82 8.32 32.82 8.09 32.73 7.84 32.57 7.64 30.75 5.44 28.08 4.17 25.24 4.17 24.65 4.17 24.17 4.65 24.17 5.24 24.17 5.84 24.65 6.31 25.24 6.31 27.44 6.31 29.5 7.29 30.92 9.01 30.92 9.01 31.23 8.75 31.23 8.75 31.23 8.75 31.23 8.75 31.23 8.75Z"
                            />
                          </svg>
                          <div class="name">
                            SaaS <br />
                            Applications
                          </div>
                          <div class="description">
                            Uvact has extensive experience building a wide
                            scope of commercial SaaS-based applications. We
                            understand the specific challenges and opportunities
                            of this process, and will leverage our knowledge to
                            build your SaaS solution on-time and on-budget.
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="hover-block hover-amp-link">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="47px"
                            height="44px"
                            viewBox="0 0 47 44"
                            focusable="false"
                            class="inline-svg icon-svg icon-advanced-app"
                          >
                            <path
                              d="M 43.75 43C 43.75 43 35.5 43 35.5 43 34.26 43 33.25 41.99 33.25 40.75 33.25 40.75 33.25 32.5 33.25 32.5 33.25 32.5 28.98 32.5 28.98 32.5 28.98 32.5 30.46 37.91 30.46 37.91 30.64 38.59 30.5 39.3 30.07 39.86 29.64 40.43 28.99 40.75 28.29 40.75 28.29 40.75 22 40.75 22 40.75 22 41.99 20.99 43 19.75 43 19.75 43 3.25 43 3.25 43 2.01 43 1 41.99 1 40.75 1 40.75 1 18.25 1 18.25 1 17.01 2.01 16 3.25 16 3.25 16 3.25 4.75 3.25 4.75 3.25 2.68 4.93 1 7 1 7 1 40 1 40 1 42.07 1 43.75 2.68 43.75 4.75 43.75 4.75 43.75 21.25 43.75 21.25 44.99 21.25 46 22.26 46 23.5 46 23.5 46 40.75 46 40.75 46 41.99 44.99 43 43.75 43ZM 22 39.25C 22 39.25 28.29 39.25 28.29 39.25 28.52 39.25 28.74 39.14 28.88 38.95 29.03 38.77 29.07 38.53 29.01 38.3 29.01 38.3 28.86 37.75 28.86 37.75 28.86 37.75 22 37.75 22 37.75 22 37.75 22 39.25 22 39.25ZM 22 36.25C 22 36.25 28.45 36.25 28.45 36.25 28.45 36.25 27.43 32.5 27.43 32.5 27.43 32.5 22 32.5 22 32.5 22 32.5 22 36.25 22 36.25ZM 22 31C 22 31 33.25 31 33.25 31 33.25 31 33.25 26.5 33.25 26.5 33.25 26.5 22 26.5 22 26.5 22 26.5 22 31 22 31ZM 2.5 40.75C 2.5 41.16 2.84 41.5 3.25 41.5 3.25 41.5 19.75 41.5 19.75 41.5 20.16 41.5 20.5 41.16 20.5 40.75 20.5 40.75 20.5 39.25 20.5 39.25 20.5 39.25 2.5 39.25 2.5 39.25 2.5 39.25 2.5 40.75 2.5 40.75ZM 2.5 37.75C 2.5 37.75 20.5 37.75 20.5 37.75 20.5 37.75 20.5 21.25 20.5 21.25 20.5 21.25 2.5 21.25 2.5 21.25 2.5 21.25 2.5 37.75 2.5 37.75ZM 3.25 17.5C 2.84 17.5 2.5 17.84 2.5 18.25 2.5 18.25 2.5 19.75 2.5 19.75 2.5 19.75 20.5 19.75 20.5 19.75 20.5 19.75 20.5 18.25 20.5 18.25 20.5 17.84 20.16 17.5 19.75 17.5 19.75 17.5 3.25 17.5 3.25 17.5ZM 42.25 4.75C 42.25 3.51 41.24 2.5 40 2.5 40 2.5 7 2.5 7 2.5 5.76 2.5 4.75 3.51 4.75 4.75 4.75 4.75 4.75 16 4.75 16 4.75 16 19.75 16 19.75 16 20.99 16 22 17.01 22 18.25 22 18.25 22 25 22 25 22 25 33.25 25 33.25 25 33.25 25 33.25 23.5 33.25 23.5 33.25 22.26 34.26 21.25 35.5 21.25 35.5 21.25 42.25 21.25 42.25 21.25 42.25 21.25 42.25 4.75 42.25 4.75ZM 44.5 23.5C 44.5 23.09 44.16 22.75 43.75 22.75 43.75 22.75 35.5 22.75 35.5 22.75 35.09 22.75 34.75 23.09 34.75 23.5 34.75 23.5 34.75 25 34.75 25 34.75 25 44.5 25 44.5 25 44.5 25 44.5 23.5 44.5 23.5ZM 44.5 26.5C 44.5 26.5 34.75 26.5 34.75 26.5 34.75 26.5 34.75 37.75 34.75 37.75 34.75 37.75 44.5 37.75 44.5 37.75 44.5 37.75 44.5 26.5 44.5 26.5ZM 44.5 39.25C 44.5 39.25 34.75 39.25 34.75 39.25 34.75 39.25 34.75 40.75 34.75 40.75 34.75 41.16 35.09 41.5 35.5 41.5 35.5 41.5 43.75 41.5 43.75 41.5 44.16 41.5 44.5 41.16 44.5 40.75 44.5 40.75 44.5 39.25 44.5 39.25ZM 41.28 29.28C 41.28 29.28 37.53 33.03 37.53 33.03 37.53 33.03 36.47 31.97 36.47 31.97 36.47 31.97 40.22 28.22 40.22 28.22 40.22 28.22 41.28 29.28 41.28 29.28ZM 42.78 32.28C 42.78 32.28 39.03 36.03 39.03 36.03 39.03 36.03 37.97 34.97 37.97 34.97 37.97 34.97 41.72 31.22 41.72 31.22 41.72 31.22 42.78 32.28 42.78 32.28ZM 27.47 12.47C 27.47 12.47 31.97 7.97 31.97 7.97 31.97 7.97 33.03 9.03 33.03 9.03 33.03 9.03 28.53 13.53 28.53 13.53 28.53 13.53 27.47 12.47 27.47 12.47ZM 26.71 7.98C 26.71 7.98 29.72 4.97 29.72 4.97 29.72 4.97 30.78 6.03 30.78 6.03 30.78 6.03 27.78 9.04 27.78 9.04 27.78 9.04 26.71 7.98 26.71 7.98ZM 20.72 13.97C 20.72 13.97 25.22 9.47 25.22 9.47 25.22 9.47 26.28 10.53 26.28 10.53 26.28 10.53 21.78 15.03 21.78 15.03 21.78 15.03 20.72 13.97 20.72 13.97ZM 27.03 15.03C 27.03 15.03 24.03 18.03 24.03 18.03 24.03 18.03 22.97 16.97 22.97 16.97 22.97 16.97 25.97 13.97 25.97 13.97 25.97 13.97 27.03 15.03 27.03 15.03ZM 12.25 4C 12.25 4 13.75 4 13.75 4 13.75 4 13.75 5.5 13.75 5.5 13.75 5.5 12.25 5.5 12.25 5.5 12.25 5.5 12.25 4 12.25 4ZM 9.25 4C 9.25 4 10.75 4 10.75 4 10.75 4 10.75 5.5 10.75 5.5 10.75 5.5 9.25 5.5 9.25 5.5 9.25 5.5 9.25 4 9.25 4ZM 6.25 4C 6.25 4 7.75 4 7.75 4 7.75 4 7.75 5.5 7.75 5.5 7.75 5.5 6.25 5.5 6.25 5.5 6.25 5.5 6.25 4 6.25 4ZM 7.97 34.22C 7.97 34.22 16.97 25.22 16.97 25.22 16.97 25.22 18.03 26.28 18.03 26.28 18.03 26.28 9.03 35.28 9.03 35.28 9.03 35.28 7.97 34.22 7.97 34.22ZM 9.47 27.47C 9.47 27.47 13.97 22.97 13.97 22.97 13.97 22.97 15.03 24.03 15.03 24.03 15.03 24.03 10.53 28.53 10.53 28.53 10.53 28.53 9.47 27.47 9.47 27.47ZM 4.97 31.97C 4.97 31.97 7.97 28.97 7.97 28.97 7.97 28.97 9.03 30.03 9.03 30.03 9.03 30.03 6.03 33.03 6.03 33.03 6.03 33.03 4.97 31.97 4.97 31.97Z"
                            />
                            <path
                              d="M 35.5 43C 35.5 43 35.5 42.7 35.5 42.7 34.43 42.7 33.55 41.82 33.55 40.75 33.55 40.75 33.55 32.2 33.55 32.2 33.55 32.2 28.59 32.2 28.59 32.2 28.59 32.2 30.17 37.99 30.17 37.99 30.21 38.16 30.24 38.33 30.24 38.5 30.24 38.92 30.1 39.33 29.84 39.68 29.46 40.17 28.9 40.45 28.29 40.45 28.29 40.45 21.7 40.45 21.7 40.45 21.7 40.45 21.7 40.75 21.7 40.75 21.7 41.82 20.82 42.7 19.75 42.7 19.75 42.7 3.25 42.7 3.25 42.7 2.18 42.7 1.3 41.82 1.3 40.75 1.3 40.75 1.3 18.25 1.3 18.25 1.3 17.17 2.18 16.3 3.25 16.3 3.25 16.3 3.55 16.3 3.55 16.3 3.55 16.3 3.55 4.75 3.55 4.75 3.55 2.85 5.1 1.3 7 1.3 7 1.3 40 1.3 40 1.3 41.9 1.3 43.45 2.85 43.45 4.75 43.45 4.75 43.45 21.55 43.45 21.55 43.45 21.55 43.75 21.55 43.75 21.55 44.82 21.55 45.7 22.42 45.7 23.5 45.7 23.5 45.7 40.75 45.7 40.75 45.7 41.82 44.82 42.7 43.75 42.7 43.75 42.7 35.5 42.7 35.5 42.7 35.5 42.7 35.5 43 35.5 43 35.5 43 35.5 43.3 35.5 43.3 35.5 43.3 43.75 43.3 43.75 43.3 45.16 43.3 46.3 42.16 46.3 40.75 46.3 40.75 46.3 23.5 46.3 23.5 46.3 22.09 45.16 20.95 43.75 20.95 43.75 20.95 43.75 21.25 43.75 21.25 43.75 21.25 44.05 21.25 44.05 21.25 44.05 21.25 44.05 4.75 44.05 4.75 44.05 2.51 42.23 0.7 40 0.7 40 0.7 7 0.7 7 0.7 4.77 0.7 2.95 2.51 2.95 4.75 2.95 4.75 2.95 16 2.95 16 2.95 16 3.25 16 3.25 16 3.25 16 3.25 15.7 3.25 15.7 1.84 15.7 0.7 16.84 0.7 18.25 0.7 18.25 0.7 40.75 0.7 40.75 0.7 42.16 1.84 43.3 3.25 43.3 3.25 43.3 19.75 43.3 19.75 43.3 21.16 43.3 22.3 42.16 22.3 40.75 22.3 40.75 22 40.75 22 40.75 22 40.75 22 41.05 22 41.05 22 41.05 28.29 41.05 28.29 41.05 29.08 41.05 29.83 40.68 30.31 40.05 30.66 39.6 30.84 39.05 30.84 38.5 30.84 38.28 30.81 38.05 30.75 37.83 30.75 37.83 29.37 32.8 29.37 32.8 29.37 32.8 32.95 32.8 32.95 32.8 32.95 32.8 32.95 40.75 32.95 40.75 32.95 42.16 34.09 43.3 35.5 43.3 35.5 43.3 35.5 43 35.5 43 35.5 43 35.5 43 35.5 43ZM 34.75 40.75C 34.75 40.75 34.45 40.75 34.45 40.75 34.45 41.33 34.92 41.8 35.5 41.8 35.5 41.8 43.75 41.8 43.75 41.8 44.33 41.8 44.8 41.33 44.8 40.75 44.8 40.75 44.8 38.95 44.8 38.95 44.8 38.95 34.45 38.95 34.45 38.95 34.45 38.95 34.45 40.75 34.45 40.75 34.45 40.75 34.75 40.75 34.75 40.75 34.75 40.75 35.05 40.75 35.05 40.75 35.05 40.75 35.05 39.55 35.05 39.55 35.05 39.55 44.2 39.55 44.2 39.55 44.2 39.55 44.2 40.75 44.2 40.75 44.2 41 44 41.2 43.75 41.2 43.75 41.2 35.5 41.2 35.5 41.2 35.25 41.2 35.05 41 35.05 40.75 35.05 40.75 34.75 40.75 34.75 40.75 34.75 40.75 34.75 40.75 34.75 40.75ZM 2.5 40.75C 2.5 40.75 2.2 40.75 2.2 40.75 2.2 41.33 2.67 41.8 3.25 41.8 3.25 41.8 19.75 41.8 19.75 41.8 20.33 41.8 20.8 41.33 20.8 40.75 20.8 40.75 20.8 38.95 20.8 38.95 20.8 38.95 2.2 38.95 2.2 38.95 2.2 38.95 2.2 40.75 2.2 40.75 2.2 40.75 2.5 40.75 2.5 40.75 2.5 40.75 2.8 40.75 2.8 40.75 2.8 40.75 2.8 39.55 2.8 39.55 2.8 39.55 20.2 39.55 20.2 39.55 20.2 39.55 20.2 40.75 20.2 40.75 20.2 41 20 41.2 19.75 41.2 19.75 41.2 3.25 41.2 3.25 41.2 3 41.2 2.8 41 2.8 40.75 2.8 40.75 2.5 40.75 2.5 40.75 2.5 40.75 2.5 40.75 2.5 40.75ZM 22 39.25C 22 39.25 22 39.55 22 39.55 22 39.55 28.29 39.55 28.29 39.55 28.61 39.55 28.92 39.4 29.12 39.14 29.26 38.95 29.34 38.73 29.34 38.5 29.34 38.41 29.32 38.31 29.3 38.22 29.3 38.22 29.15 37.67 29.15 37.67 29.15 37.67 29.09 37.45 29.09 37.45 29.09 37.45 21.7 37.45 21.7 37.45 21.7 37.45 21.7 39.55 21.7 39.55 21.7 39.55 22 39.55 22 39.55 22 39.55 22 39.25 22 39.25 22 39.25 22.3 39.25 22.3 39.25 22.3 39.25 22.3 38.05 22.3 38.05 22.3 38.05 28.63 38.05 28.63 38.05 28.63 38.05 28.72 38.38 28.72 38.38 28.72 38.38 28.74 38.5 28.74 38.5 28.74 38.6 28.71 38.69 28.64 38.77 28.55 38.89 28.43 38.95 28.29 38.95 28.29 38.95 22 38.95 22 38.95 22 38.95 22 39.25 22 39.25 22 39.25 22.3 39.25 22.3 39.25 22.3 39.25 22 39.25 22 39.25 22 39.25 22 39.25 22 39.25ZM 34.75 37.75C 34.75 37.75 34.75 38.05 34.75 38.05 34.75 38.05 44.8 38.05 44.8 38.05 44.8 38.05 44.8 26.2 44.8 26.2 44.8 26.2 34.45 26.2 34.45 26.2 34.45 26.2 34.45 38.05 34.45 38.05 34.45 38.05 34.75 38.05 34.75 38.05 34.75 38.05 34.75 37.75 34.75 37.75 34.75 37.75 35.05 37.75 35.05 37.75 35.05 37.75 35.05 26.8 35.05 26.8 35.05 26.8 44.2 26.8 44.2 26.8 44.2 26.8 44.2 37.45 44.2 37.45 44.2 37.45 34.75 37.45 34.75 37.45 34.75 37.45 34.75 37.75 34.75 37.75 34.75 37.75 35.05 37.75 35.05 37.75 35.05 37.75 34.75 37.75 34.75 37.75 34.75 37.75 34.75 37.75 34.75 37.75ZM 2.5 37.75C 2.5 37.75 2.5 38.05 2.5 38.05 2.5 38.05 20.8 38.05 20.8 38.05 20.8 38.05 20.8 20.95 20.8 20.95 20.8 20.95 2.2 20.95 2.2 20.95 2.2 20.95 2.2 38.05 2.2 38.05 2.2 38.05 2.5 38.05 2.5 38.05 2.5 38.05 2.5 37.75 2.5 37.75 2.5 37.75 2.8 37.75 2.8 37.75 2.8 37.75 2.8 21.55 2.8 21.55 2.8 21.55 20.2 21.55 20.2 21.55 20.2 21.55 20.2 37.45 20.2 37.45 20.2 37.45 2.5 37.45 2.5 37.45 2.5 37.45 2.5 37.75 2.5 37.75 2.5 37.75 2.8 37.75 2.8 37.75 2.8 37.75 2.5 37.75 2.5 37.75 2.5 37.75 2.5 37.75 2.5 37.75ZM 22 36.25C 22 36.25 22 36.55 22 36.55 22 36.55 28.84 36.55 28.84 36.55 28.84 36.55 27.66 32.2 27.66 32.2 27.66 32.2 21.7 32.2 21.7 32.2 21.7 32.2 21.7 36.55 21.7 36.55 21.7 36.55 22 36.55 22 36.55 22 36.55 22 36.25 22 36.25 22 36.25 22.3 36.25 22.3 36.25 22.3 36.25 22.3 32.8 22.3 32.8 22.3 32.8 27.2 32.8 27.2 32.8 27.2 32.8 28.06 35.95 28.06 35.95 28.06 35.95 22 35.95 22 35.95 22 35.95 22 36.25 22 36.25 22 36.25 22.3 36.25 22.3 36.25 22.3 36.25 22 36.25 22 36.25 22 36.25 22 36.25 22 36.25ZM 22 31C 22 31 22 31.3 22 31.3 22 31.3 33.55 31.3 33.55 31.3 33.55 31.3 33.55 26.2 33.55 26.2 33.55 26.2 21.7 26.2 21.7 26.2 21.7 26.2 21.7 31.3 21.7 31.3 21.7 31.3 22 31.3 22 31.3 22 31.3 22 31 22 31 22 31 22.3 31 22.3 31 22.3 31 22.3 26.8 22.3 26.8 22.3 26.8 32.95 26.8 32.95 26.8 32.95 26.8 32.95 30.7 32.95 30.7 32.95 30.7 22 30.7 22 30.7 22 30.7 22 31 22 31 22 31 22.3 31 22.3 31 22.3 31 22 31 22 31 22 31 22 31 22 31ZM 34.75 23.5C 34.75 23.5 34.45 23.5 34.45 23.5 34.45 23.5 34.45 25.3 34.45 25.3 34.45 25.3 44.8 25.3 44.8 25.3 44.8 25.3 44.8 23.5 44.8 23.5 44.8 22.92 44.33 22.45 43.75 22.45 43.75 22.45 35.5 22.45 35.5 22.45 34.92 22.45 34.45 22.92 34.45 23.5 34.45 23.5 34.75 23.5 34.75 23.5 34.75 23.5 35.05 23.5 35.05 23.5 35.05 23.25 35.25 23.05 35.5 23.05 35.5 23.05 43.75 23.05 43.75 23.05 44 23.05 44.2 23.25 44.2 23.5 44.2 23.5 44.2 24.7 44.2 24.7 44.2 24.7 35.05 24.7 35.05 24.7 35.05 24.7 35.05 23.5 35.05 23.5 35.05 23.5 34.75 23.5 34.75 23.5 34.75 23.5 34.75 23.5 34.75 23.5ZM 4.75 4.75C 4.75 4.75 4.45 4.75 4.45 4.75 4.45 4.75 4.45 16.3 4.45 16.3 4.45 16.3 19.75 16.3 19.75 16.3 20.82 16.3 21.7 17.17 21.7 18.25 21.7 18.25 21.7 25.3 21.7 25.3 21.7 25.3 33.55 25.3 33.55 25.3 33.55 25.3 33.55 23.5 33.55 23.5 33.55 22.42 34.43 21.55 35.5 21.55 35.5 21.55 42.55 21.55 42.55 21.55 42.55 21.55 42.55 4.75 42.55 4.75 42.55 3.34 41.41 2.2 40 2.2 40 2.2 7 2.2 7 2.2 5.59 2.2 4.45 3.34 4.45 4.75 4.45 4.75 4.75 4.75 4.75 4.75 4.75 4.75 5.05 4.75 5.05 4.75 5.05 3.67 5.93 2.8 7 2.8 7 2.8 40 2.8 40 2.8 41.07 2.8 41.95 3.67 41.95 4.75 41.95 4.75 41.95 20.95 41.95 20.95 41.95 20.95 35.5 20.95 35.5 20.95 34.09 20.95 32.95 22.09 32.95 23.5 32.95 23.5 32.95 24.7 32.95 24.7 32.95 24.7 22.3 24.7 22.3 24.7 22.3 24.7 22.3 18.25 22.3 18.25 22.3 16.84 21.16 15.7 19.75 15.7 19.75 15.7 5.05 15.7 5.05 15.7 5.05 15.7 5.05 4.75 5.05 4.75 5.05 4.75 4.75 4.75 4.75 4.75 4.75 4.75 4.75 4.75 4.75 4.75ZM 2.5 18.25C 2.5 18.25 2.2 18.25 2.2 18.25 2.2 18.25 2.2 20.05 2.2 20.05 2.2 20.05 20.8 20.05 20.8 20.05 20.8 20.05 20.8 18.25 20.8 18.25 20.8 17.67 20.33 17.2 19.75 17.2 19.75 17.2 3.25 17.2 3.25 17.2 2.67 17.2 2.2 17.67 2.2 18.25 2.2 18.25 2.5 18.25 2.5 18.25 2.5 18.25 2.8 18.25 2.8 18.25 2.8 18 3 17.8 3.25 17.8 3.25 17.8 19.75 17.8 19.75 17.8 20 17.8 20.2 18 20.2 18.25 20.2 18.25 20.2 19.45 20.2 19.45 20.2 19.45 2.8 19.45 2.8 19.45 2.8 19.45 2.8 18.25 2.8 18.25 2.8 18.25 2.5 18.25 2.5 18.25 2.5 18.25 2.5 18.25 2.5 18.25ZM 37.97 34.97C 37.97 34.97 38.18 35.18 38.18 35.18 38.18 35.18 41.72 31.65 41.72 31.65 41.72 31.65 42.35 32.28 42.35 32.28 42.35 32.28 39.03 35.61 39.03 35.61 39.03 35.61 38.18 34.76 38.18 34.76 38.18 34.76 37.97 34.97 37.97 34.97 37.97 34.97 38.18 35.18 38.18 35.18 38.18 35.18 37.97 34.97 37.97 34.97 37.97 34.97 37.76 35.18 37.76 35.18 37.76 35.18 39.03 36.46 39.03 36.46 39.03 36.46 43.2 32.28 43.2 32.28 43.2 32.28 41.72 30.8 41.72 30.8 41.72 30.8 37.54 34.97 37.54 34.97 37.54 34.97 37.76 35.18 37.76 35.18 37.76 35.18 37.97 34.97 37.97 34.97 37.97 34.97 37.97 34.97 37.97 34.97ZM 7.97 34.22C 7.97 34.22 8.18 34.43 8.18 34.43 8.18 34.43 16.97 25.64 16.97 25.64 16.97 25.64 17.61 26.28 17.61 26.28 17.61 26.28 9.03 34.85 9.03 34.85 9.03 34.85 8.18 34.01 8.18 34.01 8.18 34.01 7.97 34.22 7.97 34.22 7.97 34.22 8.18 34.43 8.18 34.43 8.18 34.43 7.97 34.22 7.97 34.22 7.97 34.22 7.76 34.43 7.76 34.43 7.76 34.43 9.03 35.7 9.03 35.7 9.03 35.7 18.45 26.28 18.45 26.28 18.45 26.28 16.97 24.79 16.97 24.79 16.97 24.79 7.55 34.22 7.55 34.22 7.55 34.22 7.76 34.43 7.76 34.43 7.76 34.43 7.97 34.22 7.97 34.22 7.97 34.22 7.97 34.22 7.97 34.22ZM 36.47 31.97C 36.47 31.97 36.68 32.18 36.68 32.18 36.68 32.18 40.22 28.64 40.22 28.64 40.22 28.64 40.85 29.28 40.85 29.28 40.85 29.28 37.53 32.61 37.53 32.61 37.53 32.61 36.68 31.76 36.68 31.76 36.68 31.76 36.47 31.97 36.47 31.97 36.47 31.97 36.68 32.18 36.68 32.18 36.68 32.18 36.47 31.97 36.47 31.97 36.47 31.97 36.26 32.18 36.26 32.18 36.26 32.18 37.53 33.45 37.53 33.45 37.53 33.45 41.7 29.28 41.7 29.28 41.7 29.28 40.22 27.8 40.22 27.8 40.22 27.8 36.04 31.97 36.04 31.97 36.04 31.97 36.26 32.18 36.26 32.18 36.26 32.18 36.47 31.97 36.47 31.97 36.47 31.97 36.47 31.97 36.47 31.97ZM 4.97 31.97C 4.97 31.97 5.18 32.18 5.18 32.18 5.18 32.18 7.97 29.39 7.97 29.39 7.97 29.39 8.61 30.03 8.61 30.03 8.61 30.03 6.03 32.6 6.03 32.6 6.03 32.6 5.18 31.76 5.18 31.76 5.18 31.76 4.97 31.97 4.97 31.97 4.97 31.97 5.18 32.18 5.18 32.18 5.18 32.18 4.97 31.97 4.97 31.97 4.97 31.97 4.76 32.18 4.76 32.18 4.76 32.18 6.03 33.45 6.03 33.45 6.03 33.45 9.45 30.03 9.45 30.03 9.45 30.03 7.97 28.54 7.97 28.54 7.97 28.54 4.55 31.97 4.55 31.97 4.55 31.97 4.76 32.18 4.76 32.18 4.76 32.18 4.97 31.97 4.97 31.97 4.97 31.97 4.97 31.97 4.97 31.97ZM 9.47 27.47C 9.47 27.47 9.68 27.68 9.68 27.68 9.68 27.68 13.97 23.39 13.97 23.39 13.97 23.39 14.61 24.03 14.61 24.03 14.61 24.03 10.53 28.11 10.53 28.11 10.53 28.11 9.68 27.26 9.68 27.26 9.68 27.26 9.47 27.47 9.47 27.47 9.47 27.47 9.68 27.68 9.68 27.68 9.68 27.68 9.47 27.47 9.47 27.47 9.47 27.47 9.26 27.68 9.26 27.68 9.26 27.68 10.53 28.95 10.53 28.95 10.53 28.95 15.45 24.03 15.45 24.03 15.45 24.03 13.97 22.54 13.97 22.54 13.97 22.54 9.04 27.47 9.04 27.47 9.04 27.47 9.26 27.68 9.26 27.68 9.26 27.68 9.47 27.47 9.47 27.47 9.47 27.47 9.47 27.47 9.47 27.47ZM 22.97 16.97C 22.97 16.97 23.18 17.18 23.18 17.18 23.18 17.18 25.97 14.39 25.97 14.39 25.97 14.39 26.61 15.03 26.61 15.03 26.61 15.03 24.03 17.61 24.03 17.61 24.03 17.61 23.18 16.76 23.18 16.76 23.18 16.76 22.97 16.97 22.97 16.97 22.97 16.97 23.18 17.18 23.18 17.18 23.18 17.18 22.97 16.97 22.97 16.97 22.97 16.97 22.76 17.18 22.76 17.18 22.76 17.18 24.03 18.45 24.03 18.45 24.03 18.45 27.45 15.03 27.45 15.03 27.45 15.03 25.97 13.55 25.97 13.55 25.97 13.55 22.54 16.97 22.54 16.97 22.54 16.97 22.76 17.18 22.76 17.18 22.76 17.18 22.97 16.97 22.97 16.97 22.97 16.97 22.97 16.97 22.97 16.97ZM 20.72 13.97C 20.72 13.97 20.93 14.18 20.93 14.18 20.93 14.18 25.22 9.89 25.22 9.89 25.22 9.89 25.86 10.53 25.86 10.53 25.86 10.53 21.78 14.61 21.78 14.61 21.78 14.61 20.93 13.76 20.93 13.76 20.93 13.76 20.72 13.97 20.72 13.97 20.72 13.97 20.93 14.18 20.93 14.18 20.93 14.18 20.72 13.97 20.72 13.97 20.72 13.97 20.51 14.18 20.51 14.18 20.51 14.18 21.78 15.45 21.78 15.45 21.78 15.45 26.7 10.53 26.7 10.53 26.7 10.53 25.22 9.05 25.22 9.05 25.22 9.05 20.29 13.97 20.29 13.97 20.29 13.97 20.51 14.18 20.51 14.18 20.51 14.18 20.72 13.97 20.72 13.97 20.72 13.97 20.72 13.97 20.72 13.97ZM 27.47 12.47C 27.47 12.47 27.68 12.68 27.68 12.68 27.68 12.68 31.97 8.39 31.97 8.39 31.97 8.39 32.61 9.03 32.61 9.03 32.61 9.03 28.53 13.1 28.53 13.1 28.53 13.1 27.68 12.26 27.68 12.26 27.68 12.26 27.47 12.47 27.47 12.47 27.47 12.47 27.68 12.68 27.68 12.68 27.68 12.68 27.47 12.47 27.47 12.47 27.47 12.47 27.26 12.68 27.26 12.68 27.26 12.68 28.53 13.95 28.53 13.95 28.53 13.95 33.45 9.03 33.45 9.03 33.45 9.03 31.97 7.54 31.97 7.54 31.97 7.54 27.05 12.47 27.05 12.47 27.05 12.47 27.26 12.68 27.26 12.68 27.26 12.68 27.47 12.47 27.47 12.47 27.47 12.47 27.47 12.47 27.47 12.47ZM 26.71 7.98C 26.71 7.98 26.93 8.19 26.93 8.19 26.93 8.19 29.72 5.39 29.72 5.39 29.72 5.39 30.36 6.03 30.36 6.03 30.36 6.03 27.78 8.61 27.78 8.61 27.78 8.61 26.93 7.77 26.93 7.77 26.93 7.77 26.71 7.98 26.71 7.98 26.71 7.98 26.93 8.19 26.93 8.19 26.93 8.19 26.71 7.98 26.71 7.98 26.71 7.98 26.5 8.19 26.5 8.19 26.5 8.19 27.78 9.46 27.78 9.46 27.78 9.46 31.21 6.03 31.21 6.03 31.21 6.03 29.72 4.55 29.72 4.55 29.72 4.55 26.29 7.98 26.29 7.98 26.29 7.98 26.5 8.19 26.5 8.19 26.5 8.19 26.71 7.98 26.71 7.98 26.71 7.98 26.71 7.98 26.71 7.98ZM 12.25 5.5C 12.25 5.5 12.55 5.5 12.55 5.5 12.55 5.5 12.55 4.3 12.55 4.3 12.55 4.3 13.45 4.3 13.45 4.3 13.45 4.3 13.45 5.2 13.45 5.2 13.45 5.2 12.25 5.2 12.25 5.2 12.25 5.2 12.25 5.5 12.25 5.5 12.25 5.5 12.55 5.5 12.55 5.5 12.55 5.5 12.25 5.5 12.25 5.5 12.25 5.5 12.25 5.8 12.25 5.8 12.25 5.8 14.05 5.8 14.05 5.8 14.05 5.8 14.05 3.7 14.05 3.7 14.05 3.7 11.95 3.7 11.95 3.7 11.95 3.7 11.95 5.8 11.95 5.8 11.95 5.8 12.25 5.8 12.25 5.8 12.25 5.8 12.25 5.5 12.25 5.5 12.25 5.5 12.25 5.5 12.25 5.5ZM 9.25 5.5C 9.25 5.5 9.55 5.5 9.55 5.5 9.55 5.5 9.55 4.3 9.55 4.3 9.55 4.3 10.45 4.3 10.45 4.3 10.45 4.3 10.45 5.2 10.45 5.2 10.45 5.2 9.25 5.2 9.25 5.2 9.25 5.2 9.25 5.5 9.25 5.5 9.25 5.5 9.55 5.5 9.55 5.5 9.55 5.5 9.25 5.5 9.25 5.5 9.25 5.5 9.25 5.8 9.25 5.8 9.25 5.8 11.05 5.8 11.05 5.8 11.05 5.8 11.05 3.7 11.05 3.7 11.05 3.7 8.95 3.7 8.95 3.7 8.95 3.7 8.95 5.8 8.95 5.8 8.95 5.8 9.25 5.8 9.25 5.8 9.25 5.8 9.25 5.5 9.25 5.5 9.25 5.5 9.25 5.5 9.25 5.5ZM 6.25 5.5C 6.25 5.5 6.55 5.5 6.55 5.5 6.55 5.5 6.55 4.3 6.55 4.3 6.55 4.3 7.45 4.3 7.45 4.3 7.45 4.3 7.45 5.2 7.45 5.2 7.45 5.2 6.25 5.2 6.25 5.2 6.25 5.2 6.25 5.5 6.25 5.5 6.25 5.5 6.55 5.5 6.55 5.5 6.55 5.5 6.25 5.5 6.25 5.5 6.25 5.5 6.25 5.8 6.25 5.8 6.25 5.8 8.05 5.8 8.05 5.8 8.05 5.8 8.05 3.7 8.05 3.7 8.05 3.7 5.95 3.7 5.95 3.7 5.95 3.7 5.95 5.8 5.95 5.8 5.95 5.8 6.25 5.8 6.25 5.8 6.25 5.8 6.25 5.5 6.25 5.5 6.25 5.5 6.25 5.5 6.25 5.5Z"
                            />
                          </svg>
                          <div class="name">HIPAA compliant applications</div>
                          <div class="description">
                            Uvact specializes in creating advanced
                            HIPAA-compliant applications with the most
                            innovative and secure technologies. Our experts
                            handle the software application from the
                            architecture to delivery, ensuring it meets the
                            strict government guidelines to protect personal
                            data.
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="hover-block hover-amp-link">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="52px"
                            height="44px"
                            viewBox="0 0 52 44"
                            focusable="false"
                            class="inline-svg icon-svg icon-e-commerce"
                          >
                            <g>
                              <path
                                d="M 10.73 7.72C 10.73 7.72 10.04 3.52 10.04 3.52 10.04 3.52 7.55 3.52 7.55 3.52 7.18 2.07 5.88 1 4.33 1 2.49 1 1 2.51 1 4.36 1 6.21 2.49 7.72 4.33 7.72 5.88 7.72 7.18 6.64 7.55 5.2 7.55 5.2 8.63 5.2 8.63 5.2 8.63 5.2 9.04 7.72 9.04 7.72 9.04 7.72 9.01 7.72 9.01 7.72 9.01 7.72 13.32 29.57 13.32 29.57 11.27 29.73 9.56 31.32 9.35 33.33 9.24 34.51 9.62 35.69 10.41 36.57 11.2 37.45 12.33 37.96 13.5 37.96 13.5 37.96 15.17 37.96 15.17 37.96 15.17 40.74 17.41 43 20.17 43 22.92 43 25.17 40.74 25.17 37.96 25.17 37.96 34.33 37.96 34.33 37.96 34.33 40.74 36.58 43 39.33 43 42.09 43 44.33 40.74 44.33 37.96 44.33 37.96 47.67 37.96 47.67 37.96 48.13 37.96 48.5 37.58 48.5 37.12 48.5 36.65 48.13 36.28 47.67 36.28 47.67 36.28 44.04 36.28 44.04 36.28 43.35 34.32 41.51 32.92 39.33 32.92 37.16 32.92 35.31 34.32 34.62 36.28 34.62 36.28 24.87 36.28 24.87 36.28 24.19 34.32 22.34 32.92 20.17 32.92 17.99 32.92 16.15 34.32 15.46 36.28 15.46 36.28 13.5 36.28 13.5 36.28 12.8 36.28 12.12 35.98 11.65 35.44 11.17 34.91 10.94 34.22 11.01 33.5 11.14 32.23 12.3 31.24 13.66 31.24 13.66 31.24 14.32 31.24 14.32 31.24 14.33 31.24 14.34 31.24 14.35 31.24 14.35 31.24 46.84 31.24 46.84 31.24 49.14 31.24 51 29.36 51 27.05 51 27.05 51 7.72 51 7.72 51 7.72 10.73 7.72 10.73 7.72ZM 4.33 6.04C 3.41 6.04 2.67 5.29 2.67 4.36 2.67 3.43 3.41 2.68 4.33 2.68 5.25 2.68 6 3.43 6 4.36 6 5.29 5.25 6.04 4.33 6.04ZM 39.33 34.6C 41.17 34.6 42.67 36.11 42.67 37.96 42.67 39.81 41.17 41.32 39.33 41.32 37.49 41.32 36 39.81 36 37.96 36 36.11 37.49 34.6 39.33 34.6ZM 20.17 34.6C 22 34.6 23.5 36.11 23.5 37.96 23.5 39.81 22 41.32 20.17 41.32 18.33 41.32 16.83 39.81 16.83 37.96 16.83 36.11 18.33 34.6 20.17 34.6ZM 49.33 27.05C 49.33 28.43 48.22 29.56 46.84 29.56 46.84 29.56 15.02 29.56 15.02 29.56 15.02 29.56 11.04 9.4 11.04 9.4 11.04 9.4 49.33 9.4 49.33 9.4 49.33 9.4 49.33 27.05 49.33 27.05Z"
                              />
                              <path
                                d="M 10.73 7.72C 10.73 7.72 10.98 7.68 10.98 7.68 10.98 7.68 10.25 3.27 10.25 3.27 10.25 3.27 7.55 3.27 7.55 3.27 7.55 3.27 7.55 3.52 7.55 3.52 7.55 3.52 7.79 3.46 7.79 3.46 7.39 1.91 6 0.75 4.33 0.75 2.35 0.75 0.75 2.37 0.75 4.36 0.75 6.35 2.35 7.97 4.33 7.97 6 7.97 7.39 6.81 7.79 5.26 7.79 5.26 7.55 5.2 7.55 5.2 7.55 5.2 7.55 5.45 7.55 5.45 7.55 5.45 8.41 5.45 8.41 5.45 8.41 5.45 8.8 7.76 8.8 7.76 8.8 7.76 9.04 7.72 9.04 7.72 9.04 7.72 9.04 7.47 9.04 7.47 9.04 7.47 9.01 7.47 9.01 7.47 9.01 7.47 8.71 7.47 8.71 7.47 8.71 7.47 13.08 29.62 13.08 29.62 13.08 29.62 13.32 29.57 13.32 29.57 13.32 29.57 13.3 29.32 13.3 29.32 11.13 29.49 9.32 31.17 9.11 33.3 9.09 33.45 9.08 33.6 9.08 33.75 9.08 34.85 9.49 35.92 10.22 36.74 11.06 37.67 12.26 38.21 13.5 38.21 13.5 38.21 15.17 38.21 15.17 38.21 15.17 38.21 15.17 37.96 15.17 37.96 15.17 37.96 14.92 37.96 14.92 37.96 14.92 40.88 17.27 43.25 20.17 43.25 23.06 43.25 25.42 40.88 25.42 37.96 25.42 37.96 25.17 37.96 25.17 37.96 25.17 37.96 25.17 38.21 25.17 38.21 25.17 38.21 34.33 38.21 34.33 38.21 34.33 38.21 34.33 37.96 34.33 37.96 34.33 37.96 34.08 37.96 34.08 37.96 34.08 40.88 36.44 43.25 39.33 43.25 42.23 43.25 44.58 40.88 44.58 37.96 44.58 37.96 44.33 37.96 44.33 37.96 44.33 37.96 44.33 38.21 44.33 38.21 44.33 38.21 47.67 38.21 47.67 38.21 48.27 38.21 48.75 37.72 48.75 37.12 48.75 36.52 48.27 36.03 47.67 36.03 47.67 36.03 44.04 36.03 44.04 36.03 44.04 36.03 44.04 36.28 44.04 36.28 44.04 36.28 44.28 36.2 44.28 36.2 43.56 34.15 41.62 32.67 39.33 32.67 37.05 32.67 35.11 34.15 34.39 36.2 34.39 36.2 34.62 36.28 34.62 36.28 34.62 36.28 34.62 36.03 34.62 36.03 34.62 36.03 24.87 36.03 24.87 36.03 24.87 36.03 24.87 36.28 24.87 36.28 24.87 36.28 25.11 36.2 25.11 36.2 24.39 34.15 22.45 32.67 20.17 32.67 17.88 32.67 15.94 34.15 15.22 36.2 15.22 36.2 15.46 36.28 15.46 36.28 15.46 36.28 15.46 36.03 15.46 36.03 15.46 36.03 13.5 36.03 13.5 36.03 12.87 36.03 12.26 35.76 11.83 35.28 11.45 34.85 11.25 34.32 11.25 33.76 11.25 33.76 11.26 33.52 11.26 33.52 11.37 32.4 12.42 31.49 13.66 31.49 13.66 31.49 14.32 31.49 14.32 31.49 14.32 31.49 14.35 31.49 14.35 31.49 14.35 31.49 46.84 31.49 46.84 31.49 49.28 31.49 51.25 29.5 51.25 27.05 51.25 27.05 51.25 7.47 51.25 7.47 51.25 7.47 10.73 7.47 10.73 7.47 10.73 7.47 10.73 7.72 10.73 7.72 10.73 7.72 10.98 7.68 10.98 7.68 10.98 7.68 10.73 7.72 10.73 7.72 10.73 7.72 10.73 7.97 10.73 7.97 10.73 7.97 50.75 7.97 50.75 7.97 50.75 7.97 50.75 27.05 50.75 27.05 50.75 29.22 49 30.99 46.84 30.99 46.84 30.99 14.35 30.99 14.35 30.99 14.35 30.99 14.32 30.99 14.32 30.99 14.32 30.99 13.66 30.99 13.66 30.99 12.18 30.99 10.91 32.07 10.76 33.47 10.75 33.57 10.75 33.67 10.75 33.76 10.75 34.45 11 35.1 11.46 35.61 11.98 36.19 12.73 36.53 13.5 36.53 13.5 36.53 15.64 36.53 15.64 36.53 15.64 36.53 15.69 36.36 15.69 36.36 16.35 34.5 18.1 33.17 20.17 33.17 22.23 33.17 23.98 34.5 24.64 36.36 24.64 36.36 24.7 36.53 24.7 36.53 24.7 36.53 34.8 36.53 34.8 36.53 34.8 36.53 34.86 36.36 34.86 36.36 35.52 34.5 37.27 33.17 39.33 33.17 41.4 33.17 43.15 34.5 43.81 36.36 43.81 36.36 43.86 36.53 43.86 36.53 43.86 36.53 47.67 36.53 47.67 36.53 47.99 36.53 48.25 36.79 48.25 37.12 48.25 37.45 47.99 37.71 47.67 37.71 47.67 37.71 44.08 37.71 44.08 37.71 44.08 37.71 44.08 37.96 44.08 37.96 44.08 40.6 41.95 42.74 39.33 42.75 36.72 42.74 34.59 40.6 34.58 37.96 34.58 37.96 34.58 37.71 34.58 37.71 34.58 37.71 24.92 37.71 24.92 37.71 24.92 37.71 24.92 37.96 24.92 37.96 24.91 40.6 22.78 42.74 20.17 42.75 17.55 42.74 15.42 40.6 15.42 37.96 15.42 37.96 15.42 37.71 15.42 37.71 15.42 37.71 13.5 37.71 13.5 37.71 12.4 37.71 11.34 37.23 10.6 36.4 9.94 35.68 9.58 34.73 9.58 33.75 9.58 33.62 9.59 33.49 9.6 33.35 9.79 31.48 11.4 29.97 13.34 29.82 13.34 29.82 13.62 29.8 13.62 29.8 13.62 29.8 9.26 7.67 9.26 7.67 9.26 7.67 9.01 7.72 9.01 7.72 9.01 7.72 9.01 7.97 9.01 7.97 9.01 7.97 9.04 7.97 9.04 7.97 9.04 7.97 9.34 7.97 9.34 7.97 9.34 7.97 8.84 4.95 8.84 4.95 8.84 4.95 7.55 4.95 7.55 4.95 7.55 4.95 7.35 4.95 7.35 4.95 7.35 4.95 7.31 5.14 7.31 5.14 6.96 6.48 5.76 7.47 4.33 7.47 2.63 7.47 1.25 6.07 1.25 4.36 1.25 2.64 2.63 1.25 4.33 1.25 5.76 1.25 6.96 2.24 7.31 3.58 7.31 3.58 7.35 3.77 7.35 3.77 7.35 3.77 9.83 3.77 9.83 3.77 9.83 3.77 10.52 7.97 10.52 7.97 10.52 7.97 10.73 7.97 10.73 7.97 10.73 7.97 10.73 7.72 10.73 7.72 10.73 7.72 10.73 7.72 10.73 7.72ZM 4.33 6.04C 4.33 6.04 4.33 5.79 4.33 5.79 3.55 5.79 2.92 5.15 2.92 4.36 2.92 3.57 3.55 2.93 4.33 2.93 5.11 2.93 5.75 3.57 5.75 4.36 5.75 5.15 5.11 5.79 4.33 5.79 4.33 5.79 4.33 6.04 4.33 6.04 4.33 6.04 4.33 6.29 4.33 6.29 5.39 6.29 6.25 5.42 6.25 4.36 6.25 3.3 5.39 2.43 4.33 2.43 3.27 2.43 2.42 3.3 2.42 4.36 2.42 5.42 3.27 6.29 4.33 6.29 4.33 6.29 4.33 6.04 4.33 6.04 4.33 6.04 4.33 6.04 4.33 6.04ZM 39.33 34.6C 39.33 34.6 39.33 34.85 39.33 34.85 41.03 34.85 42.41 36.24 42.42 37.96 42.41 39.67 41.03 41.07 39.33 41.07 37.64 41.07 36.25 39.67 36.25 37.96 36.25 36.24 37.63 34.85 39.33 34.85 39.33 34.85 39.33 34.6 39.33 34.6 39.33 34.6 39.33 34.35 39.33 34.35 37.35 34.35 35.75 35.97 35.75 37.96 35.75 39.95 37.35 41.57 39.33 41.57 41.31 41.57 42.92 39.95 42.92 37.96 42.92 35.97 41.31 34.35 39.33 34.35 39.33 34.35 39.33 34.6 39.33 34.6 39.33 34.6 39.33 34.6 39.33 34.6ZM 20.17 34.6C 20.17 34.6 20.17 34.85 20.17 34.85 21.86 34.85 23.25 36.24 23.25 37.96 23.25 39.67 21.86 41.07 20.17 41.07 18.47 41.07 17.09 39.67 17.08 37.96 17.09 36.24 18.47 34.85 20.17 34.85 20.17 34.85 20.17 34.6 20.17 34.6 20.17 34.6 20.17 34.35 20.17 34.35 18.19 34.35 16.58 35.97 16.58 37.96 16.58 39.95 18.19 41.57 20.17 41.57 22.15 41.57 23.75 39.95 23.75 37.96 23.75 35.97 22.14 34.35 20.17 34.35 20.17 34.35 20.17 34.6 20.17 34.6 20.17 34.6 20.17 34.6 20.17 34.6ZM 49.33 27.05C 49.33 27.05 49.08 27.05 49.08 27.05 49.08 28.3 48.08 29.31 46.84 29.31 46.84 29.31 15.22 29.31 15.22 29.31 15.22 29.31 11.35 9.65 11.35 9.65 11.35 9.65 49.08 9.65 49.08 9.65 49.08 9.65 49.08 27.05 49.08 27.05 49.08 27.05 49.33 27.05 49.33 27.05 49.33 27.05 49.58 27.05 49.58 27.05 49.58 27.05 49.58 9.15 49.58 9.15 49.58 9.15 10.74 9.15 10.74 9.15 10.74 9.15 14.81 29.81 14.81 29.81 14.81 29.81 46.84 29.81 46.84 29.81 48.36 29.81 49.58 28.57 49.58 27.05 49.58 27.05 49.33 27.05 49.33 27.05 49.33 27.05 49.33 27.05 49.33 27.05Z"
                              />
                            </g>
                          </svg>
                          <div class="name">
                            Ecommerce <br />
                            Applications
                          </div>
                          <div class="description">
                            If your business sells products or services online,
                            a custom ecommerce application is an essential
                            competitive advantage. Uvact builds applications
                            that streamline payment, inventory, reporting, and
                            security to keep your business thriving.
                          </div>
                        </div>
                      </li>
                      <li>
                        <div
                          class="hover-block hover-amp-link"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="25px"
                            height="46px"
                            viewBox="0 0 25 46"
                            focusable="false"
                            class="inline-svg icon-svg icon-mobile-app"
                          >
                            <g>
                              <path
                                d="M 11.06 40.6C 11.06 39.79 11.71 39.13 12.5 39.13 13.29 39.13 13.94 39.79 13.94 40.6 13.94 41.41 13.29 42.07 12.5 42.07 11.71 42.07 11.06 41.41 11.06 40.6ZM 19.48 13.98C 19.34 14.13 19.15 14.2 18.97 14.2 18.78 14.2 18.6 14.13 18.46 13.98 18.46 13.98 17.02 12.52 17.02 12.52 16.74 12.23 16.74 11.77 17.02 11.48 17.3 11.19 17.76 11.19 18.04 11.48 18.04 11.48 19.48 12.95 19.48 12.95 19.76 13.23 19.76 13.7 19.48 13.98ZM 19.48 18.38C 19.34 18.53 19.15 18.6 18.97 18.6 18.78 18.6 18.6 18.53 18.46 18.38 18.46 18.38 12.71 12.52 12.71 12.52 12.43 12.23 12.43 11.77 12.71 11.48 12.99 11.19 13.45 11.19 13.73 11.48 13.73 11.48 19.48 17.35 19.48 17.35 19.76 17.63 19.76 18.1 19.48 18.38ZM 20.41 45C 20.41 45 4.59 45 4.59 45 2.75 45 1 43.22 1 41.33 1 41.33 1 36.93 1 36.93 1 36.53 1.32 36.2 1.72 36.2 1.72 36.2 20.41 36.2 20.41 36.2 20.8 36.2 21.12 36.53 21.12 36.93 21.12 37.34 20.8 37.67 20.41 37.67 20.41 37.67 2.44 37.67 2.44 37.67 2.44 37.67 2.44 41.33 2.44 41.33 2.44 42.4 3.55 43.53 4.59 43.53 4.59 43.53 20.41 43.53 20.41 43.53 21.45 43.53 22.56 42.4 22.56 41.33 22.56 41.33 22.56 8.33 22.56 8.33 22.56 8.33 4.59 8.33 4.59 8.33 4.2 8.33 3.87 8 3.87 7.6 3.87 7.19 4.2 6.87 4.59 6.87 4.59 6.87 23.28 6.87 23.28 6.87 23.68 6.87 24 7.19 24 7.6 24 7.6 24 41.33 24 41.33 24 43.22 22.25 45 20.41 45ZM 16.09 3.93C 16.49 3.93 16.81 4.26 16.81 4.67 16.81 5.07 16.49 5.4 16.09 5.4 16.09 5.4 13.22 5.4 13.22 5.4 12.82 5.4 12.5 5.07 12.5 4.67 12.5 4.26 12.82 3.93 13.22 3.93 13.22 3.93 16.09 3.93 16.09 3.93ZM 10.37 3.93C 10.76 3.93 11.08 4.26 11.08 4.67 11.08 5.07 10.76 5.4 10.37 5.4 9.97 5.4 9.64 5.07 9.64 4.67 9.64 4.26 9.96 3.93 10.36 3.93 10.36 3.93 10.37 3.93 10.37 3.93ZM 23.28 5.4C 22.88 5.4 22.56 5.07 22.56 4.67 22.56 3.6 21.45 2.47 20.41 2.47 20.41 2.47 4.59 2.47 4.59 2.47 3.55 2.47 2.44 3.6 2.44 4.67 2.44 4.67 2.44 34 2.44 34 2.44 34.4 2.12 34.73 1.72 34.73 1.32 34.73 1 34.4 1 34 1 34 1 4.67 1 4.67 1 2.78 2.75 1 4.59 1 4.59 1 20.41 1 20.41 1 22.25 1 24 2.78 24 4.67 24 5.07 23.68 5.4 23.28 5.4Z"
                              />
                              <path
                                d="M 4.59 45C 4.59 45 4.59 44.75 4.59 44.75 2.91 44.75 1.25 43.07 1.25 41.33 1.25 41.33 1.25 36.93 1.25 36.93 1.25 36.66 1.46 36.45 1.72 36.45 1.72 36.45 20.41 36.45 20.41 36.45 20.66 36.45 20.87 36.66 20.88 36.93 20.87 37.2 20.66 37.42 20.41 37.42 20.41 37.42 2.19 37.42 2.19 37.42 2.19 37.42 2.19 41.33 2.19 41.33 2.21 42.57 3.37 43.76 4.59 43.78 4.59 43.78 20.41 43.78 20.41 43.78 21.63 43.76 22.79 42.57 22.81 41.33 22.81 41.33 22.81 8.08 22.81 8.08 22.81 8.08 4.59 8.08 4.59 8.08 4.34 8.08 4.13 7.87 4.12 7.6 4.12 7.33 4.34 7.12 4.59 7.11 4.59 7.11 23.28 7.11 23.28 7.11 23.53 7.12 23.75 7.33 23.75 7.6 23.75 7.6 23.75 41.33 23.75 41.33 23.75 43.07 22.09 44.75 20.41 44.75 20.41 44.75 4.59 44.75 4.59 44.75 4.59 44.75 4.59 45 4.59 45 4.59 45 4.59 45.25 4.59 45.25 4.59 45.25 20.41 45.25 20.41 45.25 22.41 45.23 24.24 43.37 24.25 41.33 24.25 41.33 24.25 7.6 24.25 7.6 24.25 7.06 23.82 6.62 23.28 6.61 23.28 6.61 4.59 6.61 4.59 6.61 4.05 6.62 3.63 7.06 3.62 7.6 3.63 8.14 4.06 8.58 4.59 8.58 4.59 8.58 22.31 8.58 22.31 8.58 22.31 8.58 22.31 41.33 22.31 41.33 22.31 42.24 21.28 43.28 20.41 43.28 20.41 43.28 4.59 43.28 4.59 43.28 3.72 43.28 2.69 42.24 2.69 41.33 2.69 41.33 2.69 37.92 2.69 37.92 2.69 37.92 20.41 37.92 20.41 37.92 20.95 37.91 21.37 37.47 21.38 36.93 21.37 36.39 20.95 35.95 20.41 35.95 20.41 35.95 1.72 35.95 1.72 35.95 1.18 35.95 0.75 36.39 0.75 36.93 0.75 36.93 0.75 41.33 0.75 41.33 0.76 43.37 2.59 45.23 4.59 45.25 4.59 45.25 4.59 45 4.59 45 4.59 45 4.59 45 4.59 45ZM 11.06 40.6C 11.06 40.6 11.31 40.6 11.31 40.6 11.31 39.92 11.85 39.38 12.5 39.38 13.15 39.38 13.69 39.92 13.69 40.6 13.69 41.27 13.15 41.81 12.5 41.82 11.85 41.81 11.31 41.27 11.31 40.6 11.31 40.6 11.06 40.6 11.06 40.6 11.06 40.6 10.81 40.6 10.81 40.6 10.81 41.54 11.56 42.31 12.5 42.32 13.43 42.31 14.19 41.54 14.19 40.6 14.19 39.65 13.43 38.88 12.5 38.88 11.57 38.88 10.81 39.65 10.81 40.6 10.81 40.6 11.06 40.6 11.06 40.6 11.06 40.6 11.06 40.6 11.06 40.6ZM 1 34C 1 34 1.25 34 1.25 34 1.25 34 1.25 4.67 1.25 4.67 1.25 2.93 2.91 1.25 4.59 1.25 4.59 1.25 20.41 1.25 20.41 1.25 22.09 1.25 23.75 2.93 23.75 4.67 23.75 4.94 23.54 5.15 23.28 5.15 23.03 5.15 22.81 4.94 22.81 4.67 22.79 3.43 21.63 2.24 20.41 2.22 20.41 2.22 4.59 2.22 4.59 2.22 3.37 2.24 2.21 3.43 2.19 4.67 2.19 4.67 2.19 34 2.19 34 2.19 34.27 1.97 34.48 1.72 34.48 1.46 34.48 1.25 34.27 1.25 34 1.25 34 1 34 1 34 1 34 0.75 34 0.75 34 0.75 34.54 1.18 34.98 1.72 34.98 2.26 34.98 2.69 34.54 2.69 34 2.69 34 2.69 4.67 2.69 4.67 2.69 3.76 3.72 2.72 4.59 2.72 4.59 2.72 20.41 2.72 20.41 2.72 21.28 2.72 22.31 3.76 22.31 4.67 22.31 5.2 22.74 5.65 23.28 5.65 23.82 5.65 24.25 5.2 24.25 4.67 24.24 2.63 22.41 0.76 20.41 0.75 20.41 0.75 4.59 0.75 4.59 0.75 2.59 0.76 0.76 2.63 0.75 4.67 0.75 4.67 0.75 34 0.75 34 0.75 34 1 34 1 34 1 34 1 34 1 34ZM 18.46 18.38C 18.46 18.38 18.64 18.21 18.64 18.21 18.64 18.21 12.89 12.34 12.89 12.34 12.8 12.25 12.75 12.12 12.75 12 12.75 11.87 12.8 11.75 12.89 11.66 12.98 11.56 13.1 11.52 13.22 11.51 13.34 11.52 13.46 11.56 13.55 11.66 13.55 11.66 19.3 17.52 19.3 17.52 19.39 17.62 19.44 17.74 19.44 17.87 19.44 17.99 19.39 18.11 19.3 18.21 19.21 18.3 19.09 18.35 18.97 18.35 18.85 18.35 18.73 18.3 18.64 18.21 18.64 18.21 18.46 18.38 18.46 18.38 18.46 18.38 18.28 18.56 18.28 18.56 18.47 18.75 18.72 18.85 18.97 18.85 19.22 18.85 19.47 18.75 19.65 18.56 19.84 18.37 19.94 18.11 19.94 17.87 19.94 17.62 19.84 17.36 19.65 17.17 19.65 17.17 13.91 11.31 13.91 11.31 13.72 11.11 13.47 11.01 13.22 11.01 12.97 11.01 12.72 11.11 12.53 11.31 12.34 11.5 12.25 11.75 12.25 12 12.25 12.25 12.34 12.5 12.53 12.69 12.53 12.69 18.28 18.56 18.28 18.56 18.28 18.56 18.46 18.38 18.46 18.38 18.46 18.38 18.46 18.38 18.46 18.38ZM 18.46 13.98C 18.46 13.98 18.64 13.81 18.64 13.81 18.64 13.81 17.2 12.34 17.2 12.34 17.11 12.25 17.06 12.12 17.06 12 17.06 11.87 17.11 11.75 17.2 11.66 17.29 11.56 17.41 11.52 17.53 11.51 17.65 11.52 17.77 11.56 17.86 11.66 17.86 11.66 19.3 13.12 19.3 13.12 19.39 13.22 19.44 13.34 19.44 13.47 19.44 13.59 19.39 13.71 19.3 13.81 19.21 13.9 19.09 13.95 18.97 13.95 18.85 13.95 18.73 13.9 18.64 13.81 18.64 13.81 18.46 13.98 18.46 13.98 18.46 13.98 18.28 14.16 18.28 14.16 18.47 14.35 18.72 14.45 18.97 14.45 19.22 14.45 19.47 14.35 19.66 14.16 19.84 13.97 19.94 13.72 19.94 13.47 19.94 13.22 19.84 12.96 19.65 12.77 19.65 12.77 18.22 11.31 18.22 11.31 18.03 11.11 17.78 11.01 17.53 11.01 17.28 11.01 17.03 11.11 16.84 11.31 16.66 11.5 16.56 11.75 16.56 12 16.56 12.25 16.66 12.5 16.84 12.69 16.84 12.69 18.28 14.16 18.28 14.16 18.28 14.16 18.46 13.98 18.46 13.98 18.46 13.98 18.46 13.98 18.46 13.98ZM 13.22 5.4C 13.22 5.4 13.22 5.15 13.22 5.15 12.96 5.15 12.75 4.94 12.75 4.67 12.75 4.39 12.96 4.18 13.22 4.18 13.22 4.18 16.09 4.18 16.09 4.18 16.35 4.18 16.56 4.39 16.56 4.67 16.56 4.94 16.35 5.15 16.09 5.15 16.09 5.15 13.22 5.15 13.22 5.15 13.22 5.15 13.22 5.4 13.22 5.4 13.22 5.4 13.22 5.65 13.22 5.65 13.22 5.65 16.09 5.65 16.09 5.65 16.63 5.65 17.06 5.2 17.06 4.67 17.06 4.13 16.63 3.68 16.09 3.68 16.09 3.68 13.22 3.68 13.22 3.68 12.68 3.68 12.25 4.13 12.25 4.67 12.25 5.2 12.68 5.65 13.22 5.65 13.22 5.65 13.22 5.4 13.22 5.4 13.22 5.4 13.22 5.4 13.22 5.4ZM 9.64 4.67C 9.64 4.67 9.89 4.67 9.89 4.67 9.89 4.39 10.1 4.18 10.36 4.18 10.36 4.18 10.37 4.18 10.37 4.18 10.62 4.18 10.83 4.39 10.83 4.67 10.83 4.94 10.62 5.15 10.37 5.15 10.11 5.15 9.89 4.93 9.89 4.67 9.89 4.67 9.64 4.67 9.64 4.67 9.64 4.67 9.39 4.67 9.39 4.67 9.39 5.21 9.83 5.65 10.37 5.65 10.9 5.65 11.33 5.2 11.33 4.67 11.33 4.13 10.9 3.68 10.37 3.68 10.37 3.68 10.36 3.68 10.36 3.68 9.82 3.68 9.39 4.13 9.39 4.67 9.39 4.67 9.64 4.67 9.64 4.67 9.64 4.67 9.64 4.67 9.64 4.67Z"
                              />
                            </g>
                          </svg>
                          <div class="name">
                            Mobile <br />
                            Applications
                          </div>
                          <div class="description">
                            Uvact's expert engineers build iOS, Android, and
                            Hybrid mobile applications that can stand alone or
                            be integrated with web applications. We ensure your
                            application passes rigorous acceptance standards
                            with flying colors and gets published quickly.
                          </div>
                        </div>
                      </li>
                      <li>
                        <div
                          class="hover-block hover-amp-link"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="42px"
                            height="42px"
                            viewBox="0 0 42 42"
                            focusable="false"
                            class="inline-svg icon-svg icon-legacy-systems"
                          >
                            <g>
                              <path
                                d="M 37.8 42C 37.8 42 4.2 42 4.2 42 1.88 42-0 40.12-0 37.8-0 37.8-0 14-0 14-0 11.68 1.88 9.8 4.2 9.8 4.2 9.8 37.8 9.8 37.8 9.8 40.12 9.8 42 11.68 42 14 42 14 42 37.8 42 37.8 42 40.12 40.12 42 37.8 42ZM 40.6 14C 40.6 12.45 39.34 11.2 37.8 11.2 37.8 11.2 4.2 11.2 4.2 11.2 2.66 11.2 1.4 12.45 1.4 14 1.4 14 1.4 37.8 1.4 37.8 1.4 39.34 2.66 40.6 4.2 40.6 4.2 40.6 37.8 40.6 37.8 40.6 39.34 40.6 40.6 39.34 40.6 37.8 40.6 37.8 40.6 14 40.6 14ZM 38.52 37.8C 38.13 37.8 37.82 37.49 37.82 37.1 37.82 36.71 38.13 36.4 38.51 36.4 38.51 36.4 38.52 36.4 38.52 36.4 38.91 36.4 39.22 36.71 39.22 37.1 39.22 37.49 38.91 37.8 38.52 37.8ZM 38.52 35C 38.13 35 37.82 34.69 37.82 34.3 37.82 33.91 38.13 33.6 38.51 33.6 38.51 33.6 38.52 33.6 38.52 33.6 38.91 33.6 39.22 33.91 39.22 34.3 39.22 34.69 38.91 35 38.52 35ZM 38.52 32.2C 38.13 32.2 37.82 31.89 37.82 31.5 37.82 31.11 38.13 30.8 38.51 30.8 38.51 30.8 38.52 30.8 38.52 30.8 38.91 30.8 39.22 31.11 39.22 31.5 39.22 31.89 38.91 32.2 38.52 32.2ZM 38.52 29.4C 38.13 29.4 37.82 29.09 37.82 28.7 37.82 28.31 38.13 28 38.51 28 38.51 28 38.52 28 38.52 28 38.91 28 39.22 28.31 39.22 28.7 39.22 29.09 38.91 29.4 38.52 29.4ZM 37.1 23.8C 35.94 23.8 35 22.86 35 21.7 35 20.54 35.94 19.6 37.1 19.6 38.26 19.6 39.2 20.54 39.2 21.7 39.2 22.86 38.26 23.8 37.1 23.8ZM 37.1 21C 36.71 21 36.4 21.31 36.4 21.7 36.4 22.08 36.71 22.4 37.1 22.4 37.49 22.4 37.8 22.08 37.8 21.7 37.8 21.31 37.49 21 37.1 21ZM 37.1 18.2C 35.94 18.2 35 17.26 35 16.1 35 14.94 35.94 14 37.1 14 38.26 14 39.2 14.94 39.2 16.1 39.2 17.26 38.26 18.2 37.1 18.2ZM 37.1 15.4C 36.71 15.4 36.4 15.71 36.4 16.1 36.4 16.48 36.71 16.8 37.1 16.8 37.49 16.8 37.8 16.48 37.8 16.1 37.8 15.71 37.49 15.4 37.1 15.4ZM 28.84 38.48C 28.75 38.51 25.9 39.2 18.2 39.2 10.5 39.2 7.65 38.51 7.53 38.48 5.42 37.92 4.11 36.62 3.53 34.48 3.49 34.35 2.8 31.52 2.8 25.9 2.8 20.28 3.49 17.45 3.52 17.33 4.07 15.16 5.46 13.78 7.55 13.32 7.65 13.29 10.5 12.6 18.2 12.6 25.9 12.6 28.75 13.29 28.87 13.32 31.05 13.87 32.44 15.27 32.88 17.35 32.91 17.45 33.6 20.28 33.6 25.9 33.6 31.52 32.91 34.35 32.88 34.47 32.22 36.7 30.83 38.08 28.84 38.48ZM 31.52 17.67C 31.18 16.07 30.2 15.1 28.53 14.68 28.5 14.67 25.68 14 18.2 14 10.72 14 7.9 14.67 7.87 14.68 6.27 15.03 5.3 16.01 4.88 17.67 4.87 17.7 4.2 20.47 4.2 25.9 4.2 31.32 4.87 34.1 4.88 34.13 5.33 35.77 6.25 36.69 7.88 37.12 7.9 37.13 10.72 37.8 18.2 37.8 25.68 37.8 28.5 37.13 28.53 37.12 30.05 36.81 31.02 35.82 31.53 34.1 31.53 34.1 32.2 31.32 32.2 25.9 32.2 20.47 31.53 17.7 31.52 17.67ZM 28.7 25.2C 28.31 25.2 28 24.89 28 24.5 28 24.5 28 23.8 28 23.8 28 23.41 28.31 23.1 28.7 23.1 29.09 23.1 29.4 23.41 29.4 23.8 29.4 23.8 29.4 24.5 29.4 24.5 29.4 24.89 29.09 25.2 28.7 25.2ZM 28.7 21.7C 28.31 21.7 28 21.39 28 21 28 20.24 27.83 19.01 27.51 18.69 27.18 18.37 25.96 18.2 25.2 18.2 24.81 18.2 24.5 17.88 24.5 17.5 24.5 17.11 24.81 16.8 25.2 16.8 25.6 16.8 27.63 16.84 28.49 17.7 29.36 18.57 29.4 20.6 29.4 21 29.4 21.39 29.09 21.7 28.7 21.7ZM 35.71 28C 35.71 28 35.72 28 35.72 28 36.11 28 36.42 28.31 36.42 28.7 36.42 29.09 36.11 29.4 35.72 29.4 35.33 29.4 35.02 29.09 35.02 28.7 35.02 28.31 35.33 28 35.71 28ZM 35.71 30.8C 35.71 30.8 35.72 30.8 35.72 30.8 36.11 30.8 36.42 31.11 36.42 31.5 36.42 31.89 36.11 32.2 35.72 32.2 35.33 32.2 35.02 31.89 35.02 31.5 35.02 31.11 35.33 30.8 35.71 30.8ZM 35.71 33.6C 35.71 33.6 35.72 33.6 35.72 33.6 36.11 33.6 36.42 33.91 36.42 34.3 36.42 34.69 36.11 35 35.72 35 35.33 35 35.02 34.69 35.02 34.3 35.02 33.91 35.33 33.6 35.71 33.6ZM 35.71 36.4C 35.71 36.4 35.72 36.4 35.72 36.4 36.11 36.4 36.42 36.71 36.42 37.1 36.42 37.49 36.11 37.8 35.72 37.8 35.33 37.8 35.02 37.49 35.02 37.1 35.02 36.71 35.33 36.4 35.71 36.4ZM 25.59 6.2C 25.91 6.55 26.21 6.93 26.45 7.35 26.64 7.68 26.53 8.11 26.2 8.3 26.08 8.37 25.96 8.4 25.85 8.4 25.6 8.4 25.37 8.27 25.24 8.05 24.36 6.54 22.74 5.6 21 5.6 19.26 5.6 17.64 6.54 16.76 8.05 16.57 8.38 16.14 8.5 15.8 8.3 15.47 8.11 15.36 7.68 15.55 7.35 15.79 6.93 16.09 6.55 16.41 6.2 16.41 6.2 11.41 1.19 11.41 1.19 11.13 0.92 11.13 0.48 11.41 0.2 11.68-0.07 12.12-0.07 12.39 0.2 12.39 0.2 17.49 5.29 17.49 5.29 18.51 4.6 19.73 4.2 21 4.2 22.27 4.2 23.49 4.6 24.51 5.29 24.51 5.29 29.61 0.2 29.61 0.2 29.88-0.07 30.32-0.07 30.59 0.2 30.87 0.48 30.87 0.92 30.59 1.19 30.59 1.19 25.59 6.2 25.59 6.2Z"
                                fill="rgb(17,149,147)"
                              />
                              <path d="" />
                            </g>
                          </svg>
                          <div class="name">
                            Legacy <br />
                            Systems
                          </div>
                          <div class="description">
                            Businesses must innovate to stay relevant, and
                            Uvact can help take your older software to the
                            next level. We rebuild legacy systems to be more
                            dynamic, user-friendly, and efficient, based on
                            cutting-edge technologies.
                          </div>
                        </div>
                      </li>
                      <li>
                      <div
                          class="hover-block hover-amp-link"
                        >                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="42px"
                            height="42px"
                            viewBox="0 0 42 42"
                            focusable="false"
                            class="inline-svg icon-svg icon-social-apps"
                          >
                            <path
                              d="M 35.85 35.85C 31.8 39.89 26.42 42 20.98 42 17.6 42 14.19 41.18 11.07 39.5 8.27 41.52 5.54 41.95 3.68 41.95 2.99 41.95 2.42 41.89 2.02 41.83 1.17 41.7 0.51 41.03 0.38 40.18 0.25 39.33 0.68 38.5 1.45 38.12 3.06 37.33 4.14 35.75 4.82 34.39-2.06 26.11-1.53 13.82 6.14 6.15 10.11 2.18 15.38-0 20.99-0 26.6-0 31.87 2.18 35.84 6.15 39.81 10.12 42 15.39 42 21 42 26.61 39.82 31.88 35.85 35.85ZM 34.13 7.85C 26.89 0.59 15.08 0.59 7.83 7.85 0.89 14.79 0.55 25.98 7.05 33.32 7.22 33.52 7.31 33.76 7.34 34 7.4 34.25 7.39 34.51 7.28 34.77 6.61 36.29 5.48 38.24 3.67 39.56 3.67 39.56 3.68 39.56 3.68 39.56 5.25 39.56 7.61 39.17 10.01 37.3 10.04 37.27 10.08 37.25 10.11 37.23 10.49 36.85 11.09 36.76 11.57 37.04 18.87 41.33 28.15 40.14 34.14 34.15 41.4 26.89 41.4 15.1 34.13 7.85ZM 28.59 22.47C 27.78 22.47 27.12 21.81 27.12 21 27.12 20.18 27.78 19.53 28.59 19.53 29.41 19.53 30.07 20.18 30.07 21 30.07 21.81 29.41 22.47 28.59 22.47ZM 20.99 22.47C 20.18 22.47 19.52 21.81 19.52 21 19.52 20.18 20.18 19.53 20.99 19.53 21.8 19.53 22.46 20.18 22.46 21 22.46 21.81 21.8 22.47 20.99 22.47ZM 13.39 22.47C 12.57 22.47 11.91 21.81 11.91 21 11.91 20.18 12.57 19.53 13.39 19.53 14.2 19.53 14.86 20.18 14.86 21 14.86 21.81 14.2 22.47 13.39 22.47Z"
                            />
                          </svg>
                          <div class="name">
                            Third-Party <br />
                            Applications
                          </div>
                          <div class="description">
                            In addition to building software from scratch,
                            Uvact can support or take over solutions from
                            third-party vendors. We start by benchmarking the
                            application's quality so you have a clear picture of
                            what it needs and how to get there.
                          </div>
                        </div>
                      </li>
                      <li>
                        <div
                          class="hover-block hover-amp-link"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="52px"
                            height="45px"
                            viewBox="0 0 52 45"
                            focusable="false"
                            class="inline-svg icon-svg icon-product-dev"
                          >
                            <g>
                              <path
                                d="M 50.44 18.14C 50.44 18.14 43.53 14.43 43.53 14.43 43.53 14.43 49.05 10.72 49.05 10.72 49.36 10.51 49.54 10.15 49.51 9.77 49.49 9.39 49.27 9.06 48.93 8.89 48.93 8.89 33.36 1.11 33.36 1.11 33.04 0.95 32.64 0.97 32.33 1.16 32.33 1.16 26 5.08 26 5.08 26 5.08 19.67 1.16 19.67 1.16 19.36 0.97 18.97 0.95 18.64 1.11 18.64 1.11 3.07 8.89 3.07 8.89 2.73 9.06 2.51 9.39 2.49 9.77 2.46 10.15 2.64 10.51 2.95 10.72 2.95 10.72 8.47 14.43 8.47 14.43 8.47 14.43 1.56 18.14 1.56 18.14 1.22 18.32 1.01 18.66 1 19.05 0.99 19.43 1.19 19.79 1.52 19.98 1.52 19.98 16.94 29.11 16.94 29.11 17.1 29.21 17.29 29.26 17.48 29.26 17.65 29.26 17.82 29.22 17.98 29.13 17.98 29.13 24.94 25.41 24.94 25.41 24.94 25.41 24.94 41.22 24.94 41.22 24.94 41.22 11.53 34.51 11.53 34.51 11.53 34.51 11.53 28.39 11.53 28.39 11.53 27.81 11.06 27.33 10.47 27.33 9.89 27.33 9.41 27.81 9.41 28.39 9.41 28.39 9.41 35.17 9.41 35.17 9.41 35.57 9.64 35.93 10 36.11 10 36.11 25.52 43.89 25.52 43.89 25.53 43.89 25.54 43.9 25.56 43.9 25.57 43.91 25.59 43.92 25.6 43.92 25.63 43.93 25.66 43.94 25.68 43.95 25.7 43.96 25.72 43.96 25.73 43.96 25.76 43.97 25.79 43.98 25.82 43.98 25.84 43.99 25.85 43.99 25.87 43.99 25.91 44 25.95 44 25.99 44 25.99 44 26 44 26 44 26.05 44 26.09 44 26.14 43.99 26.15 43.99 26.16 43.99 26.17 43.98 26.2 43.98 26.24 43.97 26.27 43.96 26.28 43.96 26.3 43.96 26.31 43.95 26.34 43.94 26.37 43.93 26.4 43.92 26.41 43.91 26.43 43.91 26.45 43.9 26.46 43.89 26.47 43.89 26.48 43.89 26.48 43.89 42 36.11 42 36.11 42.36 35.93 42.59 35.57 42.59 35.17 42.59 35.17 42.59 28.39 42.59 28.39 42.59 27.81 42.11 27.33 41.53 27.33 40.94 27.33 40.47 27.81 40.47 28.39 40.47 28.39 40.47 34.51 40.47 34.51 40.47 34.51 27.06 41.22 27.06 41.22 27.06 41.22 27.06 25.4 27.06 25.4 27.06 25.4 34.02 29.13 34.02 29.13 34.18 29.22 34.35 29.26 34.52 29.26 34.71 29.26 34.9 29.21 35.06 29.11 35.06 29.11 50.48 19.98 50.48 19.98 50.81 19.79 51.01 19.43 51 19.05 50.99 18.66 50.78 18.32 50.44 18.14ZM 26 22.4C 26 22.4 12.7 14.53 12.7 14.53 12.7 14.53 26 7.52 26 7.52 26 7.52 39.3 14.53 39.3 14.53 39.3 14.53 26 22.4 26 22.4ZM 32.94 3.27C 32.94 3.27 46.36 9.98 46.36 9.98 46.36 9.98 41.46 13.27 41.46 13.27 41.46 13.27 28.13 6.25 28.13 6.25 28.13 6.25 32.94 3.27 32.94 3.27ZM 19.06 3.27C 19.06 3.27 23.86 6.25 23.86 6.25 23.86 6.25 10.54 13.27 10.54 13.27 10.54 13.27 5.64 9.98 5.64 9.98 5.64 9.98 19.06 3.27 19.06 3.27ZM 17.5 26.98C 17.5 26.98 4.22 19.12 4.22 19.12 4.22 19.12 10.56 15.72 10.56 15.72 10.56 15.72 23.84 23.59 23.84 23.59 23.84 23.59 17.5 26.98 17.5 26.98ZM 34.5 26.98C 34.5 26.98 28.16 23.59 28.16 23.59 28.16 23.59 41.44 15.72 41.44 15.72 41.44 15.72 47.78 19.12 47.78 19.12 47.78 19.12 34.5 26.98 34.5 26.98Z"
                              />
                              <path
                                d="M 50.44 18.14C 50.44 18.14 50.49 18.05 50.49 18.05 50.49 18.05 43.72 14.42 43.72 14.42 43.72 14.42 49.1 10.8 49.1 10.8 49.43 10.58 49.62 10.22 49.62 9.84 49.62 9.84 49.61 9.76 49.61 9.76 49.59 9.35 49.34 8.99 48.98 8.8 48.98 8.8 33.41 1.02 33.41 1.02 33.25 0.94 33.07 0.9 32.89 0.9 32.68 0.9 32.46 0.96 32.28 1.08 32.28 1.08 26 4.96 26 4.96 26 4.96 19.72 1.08 19.72 1.08 19.54 0.96 19.32 0.9 19.11 0.9 18.93 0.9 18.75 0.94 18.59 1.02 18.59 1.02 3.02 8.8 3.02 8.8 2.66 8.99 2.41 9.35 2.39 9.76 2.39 9.76 2.38 9.84 2.38 9.84 2.38 10.22 2.57 10.58 2.9 10.8 2.9 10.8 8.28 14.42 8.28 14.42 8.28 14.42 1.51 18.05 1.51 18.05 1.14 18.25 0.91 18.63 0.9 19.04 0.9 19.04 0.9 19.07 0.9 19.07 0.9 19.48 1.12 19.86 1.47 20.07 1.47 20.07 16.89 29.2 16.89 29.2 17.07 29.3 17.27 29.36 17.48 29.36 17.67 29.36 17.86 29.31 18.03 29.22 18.03 29.22 24.84 25.57 24.84 25.57 24.84 25.57 24.84 41.06 24.84 41.06 24.84 41.06 11.63 34.45 11.63 34.45 11.63 34.45 11.63 28.39 11.63 28.39 11.63 27.75 11.11 27.23 10.47 27.23 9.83 27.23 9.31 27.75 9.31 28.39 9.31 28.39 9.31 35.17 9.31 35.17 9.31 35.6 9.56 36.01 9.95 36.2 9.95 36.2 25.48 43.98 25.48 43.98 25.48 43.98 25.51 43.99 25.51 43.99 25.51 43.99 25.57 44.01 25.57 44.01 25.57 44.01 25.65 44.05 25.65 44.05 25.66 44.05 25.71 44.06 25.71 44.06 25.71 44.06 25.81 44.08 25.81 44.08 25.81 44.08 25.85 44.09 25.85 44.09 25.85 44.09 25.99 44.1 25.99 44.1 25.99 44.1 26 44.1 26 44.1 26 44.1 26.15 44.09 26.15 44.09 26.15 44.09 26.18 44.08 26.18 44.08 26.18 44.08 26.3 44.06 26.3 44.06 26.3 44.06 26.27 43.96 26.27 43.96 26.27 43.96 26.29 44.06 26.29 44.06 26.29 44.06 26.34 44.05 26.34 44.05 26.34 44.05 26.43 44.01 26.43 44.01 26.43 44.01 26.49 43.99 26.49 43.99 26.49 43.99 26.52 43.98 26.52 43.98 26.52 43.98 42.05 36.2 42.05 36.2 42.44 36 42.69 35.6 42.69 35.17 42.69 35.17 42.69 28.39 42.69 28.39 42.69 27.75 42.17 27.23 41.53 27.23 40.89 27.23 40.37 27.75 40.37 28.39 40.37 28.39 40.37 34.45 40.37 34.45 40.37 34.45 27.16 41.06 27.16 41.06 27.16 41.06 27.16 25.57 27.16 25.57 27.16 25.57 33.97 29.22 33.97 29.22 34.14 29.31 34.33 29.36 34.52 29.36 34.73 29.36 34.93 29.3 35.11 29.2 35.11 29.2 50.53 20.07 50.53 20.07 50.88 19.86 51.1 19.48 51.1 19.07 51.1 19.07 51.1 19.05 51.1 19.05 51.09 18.63 50.86 18.25 50.49 18.05 50.49 18.05 50.44 18.14 50.44 18.14 50.44 18.14 50.39 18.22 50.39 18.22 50.7 18.39 50.89 18.7 50.9 19.05 50.9 19.05 50.9 19.07 50.9 19.07 50.9 19.41 50.72 19.72 50.43 19.9 50.43 19.9 35.01 29.02 35.01 29.02 34.86 29.11 34.69 29.16 34.52 29.16 34.36 29.16 34.21 29.12 34.07 29.04 34.07 29.04 26.96 25.24 26.96 25.24 26.96 25.24 26.96 41.38 26.96 41.38 26.96 41.38 40.57 34.57 40.57 34.57 40.57 34.57 40.57 28.39 40.57 28.39 40.57 27.86 41 27.43 41.53 27.43 42.06 27.43 42.49 27.86 42.49 28.39 42.49 28.39 42.49 35.17 42.49 35.17 42.49 35.53 42.28 35.86 41.96 36.02 41.96 36.02 26.43 43.8 26.43 43.8 26.43 43.8 26.41 43.81 26.41 43.81 26.4 43.81 26.36 43.83 26.36 43.83 26.36 43.83 26.28 43.85 26.28 43.85 26.28 43.85 26.25 43.87 26.25 43.87 26.25 43.87 26.24 43.87 26.24 43.87 26.24 43.87 26.24 43.87 26.24 43.87 26.24 43.87 26.16 43.89 26.16 43.89 26.15 43.89 26.12 43.89 26.12 43.89 26.12 43.89 26 43.9 26 43.9 26 43.9 25.99 43.9 25.99 43.9 25.99 43.9 25.88 43.89 25.88 43.89 25.88 43.89 25.84 43.88 25.84 43.88 25.84 43.88 25.76 43.87 25.76 43.87 25.76 43.87 25.71 43.85 25.71 43.85 25.71 43.85 25.64 43.83 25.64 43.83 25.64 43.83 25.6 43.81 25.6 43.81 25.6 43.81 25.57 43.8 25.57 43.8 25.57 43.8 10.04 36.02 10.04 36.02 9.72 35.86 9.51 35.53 9.51 35.17 9.51 35.17 9.51 28.39 9.51 28.39 9.51 27.86 9.94 27.43 10.47 27.43 11 27.43 11.43 27.86 11.43 28.39 11.43 28.39 11.43 34.57 11.43 34.57 11.43 34.57 25.04 41.38 25.04 41.38 25.04 41.38 25.04 25.24 25.04 25.24 25.04 25.24 17.93 29.04 17.93 29.04 17.79 29.12 17.63 29.16 17.48 29.16 17.31 29.16 17.14 29.11 16.99 29.02 16.99 29.02 1.57 19.9 1.57 19.9 1.28 19.72 1.1 19.41 1.1 19.07 1.1 19.07 1.1 19.05 1.1 19.05 1.11 18.7 1.3 18.39 1.61 18.22 1.61 18.22 8.66 14.44 8.66 14.44 8.66 14.44 3.01 10.64 3.01 10.64 2.74 10.46 2.58 10.16 2.58 9.84 2.58 9.84 2.58 9.78 2.58 9.78 2.61 9.44 2.81 9.13 3.11 8.98 3.11 8.98 18.68 1.2 18.68 1.2 18.82 1.13 18.96 1.1 19.11 1.1 19.29 1.1 19.46 1.15 19.62 1.25 19.62 1.25 26 5.2 26 5.2 26 5.2 32.38 1.25 32.38 1.25 32.54 1.15 32.71 1.1 32.89 1.1 33.04 1.1 33.18 1.13 33.32 1.2 33.32 1.2 48.89 8.98 48.89 8.98 49.19 9.13 49.39 9.44 49.41 9.78 49.41 9.78 49.42 9.84 49.42 9.84 49.42 10.16 49.26 10.46 48.99 10.64 48.99 10.64 43.34 14.44 43.34 14.44 43.34 14.44 50.39 18.22 50.39 18.22 50.39 18.22 50.44 18.14 50.44 18.14 50.44 18.14 50.44 18.14 50.44 18.14ZM 26 22.4C 26 22.4 26.05 22.31 26.05 22.31 26.05 22.31 12.91 14.53 12.91 14.53 12.91 14.53 26 7.64 26 7.64 26 7.64 39.09 14.53 39.09 14.53 39.09 14.53 25.95 22.31 25.95 22.31 25.95 22.31 26 22.4 26 22.4 26 22.4 26.05 22.31 26.05 22.31 26.05 22.31 26 22.4 26 22.4 26 22.4 26.05 22.49 26.05 22.49 26.05 22.49 39.5 14.52 39.5 14.52 39.5 14.52 26 7.41 26 7.41 26 7.41 12.5 14.52 12.5 14.52 12.5 14.52 26 22.52 26 22.52 26 22.52 26.05 22.49 26.05 22.49 26.05 22.49 26 22.4 26 22.4 26 22.4 26 22.4 26 22.4ZM 32.94 3.27C 32.94 3.27 32.9 3.36 32.9 3.36 32.9 3.36 46.16 9.99 46.16 9.99 46.16 9.99 41.46 13.15 41.46 13.15 41.46 13.15 28.34 6.24 28.34 6.24 28.34 6.24 33 3.36 33 3.36 33 3.36 32.94 3.27 32.94 3.27 32.94 3.27 32.9 3.36 32.9 3.36 32.9 3.36 32.94 3.27 32.94 3.27 32.94 3.27 32.89 3.19 32.89 3.19 32.89 3.19 27.93 6.26 27.93 6.26 27.93 6.26 41.47 13.39 41.47 13.39 41.47 13.39 46.55 9.96 46.55 9.96 46.55 9.96 32.94 3.16 32.94 3.16 32.94 3.16 32.89 3.19 32.89 3.19 32.89 3.19 32.94 3.27 32.94 3.27 32.94 3.27 32.94 3.27 32.94 3.27ZM 19.06 3.27C 19.06 3.27 19 3.36 19 3.36 19 3.36 23.66 6.24 23.66 6.24 23.66 6.24 10.54 13.15 10.54 13.15 10.54 13.15 5.84 9.99 5.84 9.99 5.84 9.99 19.1 3.36 19.1 3.36 19.1 3.36 19.06 3.27 19.06 3.27 19.06 3.27 19 3.36 19 3.36 19 3.36 19.06 3.27 19.06 3.27 19.06 3.27 19.01 3.18 19.01 3.18 19.01 3.18 5.45 9.96 5.45 9.96 5.45 9.96 10.53 13.39 10.53 13.39 10.53 13.39 24.07 6.26 24.07 6.26 24.07 6.26 19.06 3.16 19.06 3.16 19.06 3.16 19.01 3.18 19.01 3.18 19.01 3.18 19.06 3.27 19.06 3.27 19.06 3.27 19.06 3.27 19.06 3.27ZM 17.5 26.98C 17.5 26.98 17.56 26.89 17.56 26.89 17.56 26.89 4.43 19.12 4.43 19.12 4.43 19.12 10.55 15.84 10.55 15.84 10.55 15.84 23.64 23.58 23.64 23.58 23.64 23.58 17.46 26.89 17.46 26.89 17.46 26.89 17.5 26.98 17.5 26.98 17.5 26.98 17.56 26.89 17.56 26.89 17.56 26.89 17.5 26.98 17.5 26.98 17.5 26.98 17.55 27.07 17.55 27.07 17.55 27.07 24.04 23.59 24.04 23.59 24.04 23.59 10.56 15.61 10.56 15.61 10.56 15.61 4.02 19.11 4.02 19.11 4.02 19.11 17.5 27.09 17.5 27.09 17.5 27.09 17.55 27.07 17.55 27.07 17.55 27.07 17.5 26.98 17.5 26.98 17.5 26.98 17.5 26.98 17.5 26.98ZM 34.5 26.98C 34.5 26.98 34.54 26.89 34.54 26.89 34.54 26.89 28.36 23.58 28.36 23.58 28.36 23.58 41.45 15.84 41.45 15.84 41.45 15.84 47.58 19.12 47.58 19.12 47.58 19.12 34.44 26.89 34.44 26.89 34.44 26.89 34.5 26.98 34.5 26.98 34.5 26.98 34.54 26.89 34.54 26.89 34.54 26.89 34.5 26.98 34.5 26.98 34.5 26.98 34.55 27.07 34.55 27.07 34.55 27.07 47.98 19.11 47.98 19.11 47.98 19.11 41.44 15.61 41.44 15.61 41.44 15.61 27.96 23.59 27.96 23.59 27.96 23.59 34.5 27.09 34.5 27.09 34.5 27.09 34.55 27.07 34.55 27.07 34.55 27.07 34.5 26.98 34.5 26.98 34.5 26.98 34.5 26.98 34.5 26.98Z"
                              />
                            </g>
                          </svg>
                          <div class="name">
                            Product <br />
                            Development
                          </div>
                          <div class="description">
                            From idea to prototype to release, Uvact can help
                            your company through the entire life cycle of new
                            product development. We've built hundreds of
                            products at unbeatable values, and our expertise for
                            building innovative solutions is unparalleled.
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class="image-wrapper">
                      <div
                        class="container container-bg wow"
                        data-wow-offset="100"
                      ></div>
                      <div
                        class="container container-image wow"
                        data-wow-offset="100"
                      >
                        <img
                          data-src="<?php echo get_stylesheet_directory_uri(); ?>/i/numbers.jpg"
                          src="<?php echo get_stylesheet_directory_uri(); ?>/i/fake-image.png"
                          class="js-lazy-image"
                          alt="Custom service"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="
                    sections
                    attention-section
                    attention-section
                    attention-section-title
                    attention-section-with-border
                    top-four
                  "
                 >
                 <div class="wrapper clearfix">
                    <div class="container-column container-column-topic">
                      <div class="subtitle subtitle-topic">
                        <div class="text text-only">
                          <div class="topic-name">
                            <h3 class="topic attention-section-topic">
                              Uvact Development <br />
                              Process
                            </h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="container-column container-column-text">
                      <div class="description">
                        Software development, like any other manufacturing
                        process stands on logic, clear structure, and
                        accountability of each component. This is the only way
                        to create quality software. We have all of those at
                        Uvact, we know what we do on each stage of creating a
                        successful application.
                      </div>
                    </div>
                  </div> 
                </div>

                <div class="development-process" id="scroll-it"> <div class="infographic visible"> <div class="graphic-wrapper"> <img class="horizontal js-lazy-image js-lazy-image--handled" src="<?php echo get_stylesheet_directory_uri(); ?>/i/dev-process-csd-horizontal.svg?v=760720feb4970313df303f362f2577db" alt=" Development Process" data-src="<?php echo get_stylesheet_directory_uri(); ?>/i/dev-process-csd-horizontal.svg?v=760720feb4970313df303f362f2577db"> <img class="vertical js-lazy-image js-lazy-image--handled" src="<?php echo get_stylesheet_directory_uri(); ?>/i/dev-process-csd-vertical.svg?v=760720feb4970313df303f362f2577db" alt="Development Process" data-src="<?php echo get_stylesheet_directory_uri(); ?>/i/dev-process-csd-vertical.svg?v=760720feb4970313df303f362f2577db"> <div class="processes-wrapper"> <div class="processes"> <div class="process"> <h4 class="process-title"> <span class="name">Idea</span> </h4> <p class="process-description"> <span class="name">You tell us which business goals your new software should enable.</span> </p> </div> <div class="process"> <h4 class="process-title"> <span class="name">Business <br> analysis</span> </h4> <p class="process-description"> <span class="name">Together, we determine how it should relate to current processes.</span> </p> </div> <div class="process"> <h4 class="process-title"> <span class="name">UI design/ <br> prototyping</span> </h4> <p class="process-description"> <span class="name">Our team ideates how the software will look and function.</span> </p> </div> <div class="process"> <h4 class="process-title"> <span class="name">Development</span> </h4> <p class="process-description"> <span class="name">We build the solution step by step, with ongoing quality assurance.</span> </p> </div> <div class="process"> <h4 class="process-title"> <span class="name">Testing</span> </h4> <p class="process-description"> <span class="name">We determine together that the software works as it should.</span> </p> </div> <div class="process"> <h4 class="process-title"> <span class="name">Deployment</span> </h4> <p class="process-description"> <span class="name">We work with your team to launch the system for your organization.</span> </p> </div> <div class="process"> <h4 class="process-title"> <span class="name">Maintenance <br>and&nbsp;support</span> </h4> <p class="process-description"> <span class="name">Our team continues to monitor the solution in an ongoing capacity.</span> </p> </div> </div> </div> </div> </div> </div>

               <div class="projects-section">
                  <div class="wrapper-project-header">
                    <div class="project-header">Customer Success Stories</div>
                  </div>
                  <div
                    class="project project-column project-column-full"
                  >
                    <div
                      class="js-lazy-image image project-control-platform"
                      style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/i/projects/meeting-one.jpg') center center no-repeat; background-size: cover; min-height: 100%;">                     
                    </div>
                    <div class="content bg-transparent">
                      <div class="project-name">Learning Management System</div>
                      <div class="project-description">
                        <p>
                          The core purpose of the system is to organize the
                          learning process for the customer’s nursing personnel.
                        </p>
                        <p>
                          The custom LMS solution by Uvact effectively
                          replaced the legacy system, created a simple way for
                          accessing media-content, and for designing and
                          publishing new courses in SCORM and HTML5 formats.
                        </p>
                        <p>
                          The new software application augmented the customer’s
                          internal business processes, reduced costs and
                          established a new learning standard in the company.
                        </p>
                      </div>
                      <div class="project-technologies">
                        <span>Technologies: </span> Elastic, Debian, Redis,
                        MySQL, PHP
                      </div>
                    </div>
                    </div>
                   <div
                    class="
                      project project-narrow project-column project-column-left
                    "
                    >
                    <div
                      class="js-lazy-image image"
                      style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/i/projects/office.jpg'); background-repeat: no-repeat;"
                      data-src="<?php echo get_stylesheet_directory_uri(); ?>/i/projects/office.jpg"
                      data-reserve-format
                    ></div>
                    <div class="content  bg-transparent">
                      <div class="project-name">
                        Automated Inventory
                        <br class="mlg-hide lg-hide" />Management
                        <br class="mlg-hide lg-hide" />System
                      </div>
                      <div class="project-technologies">
                        <span>Technologies: </span> HTML, MySQL, jQuery,
                        <br class="xs-hide sm-hide mlg-hide" />
                        Symfony, Sass
                      </div>
                    </div>
                  </div> 
                  <div
                    class="
                      project project-narrow project-column project-column-right
                    "
                  >
                    <div
                      class="js-lazy-image image project-media-manager"
                      style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/i/projects/startup.jpg'); background-repeat: no-repeat;"
                      data-src="<?php echo get_stylesheet_directory_uri(); ?>/i/projects/startup.jpg"
                      data-reserve-format
                    ></div>
                    <div class="content bg-transparent">
                      <div class="project-name">
                        Ultimate Social Media Manager For
                        <br class="mlg-hide lg-hide" />Photographers
                      </div>
                      <div class="project-technologies">
                        <span>Technologies: </span> WordPress, Symfony, Angular,
                        MySQL, MongoDB, RabbitMQ
                      </div>
                    </div>
                  </div> 
                </div>

                <div class="acquaintance-sect-wrapper">
                    <div class="contact-form-section">
                      <div class="wrapper">
                        <div
                          class="contact-form-wrapper"
                          id="contact-form-wrapper"
                          >
                          <div
                            class="motivation"
                            id="contact-form-smart-scroll"
                          >
                            <div class="motivation-text topic-name">
                              <p class="topic">
                                On the fence? Contact us today for a free
                                consultation and take the first step towards
                                improving your business!
                              </p>
                            </div>
                          </div>

                          <div class="form-wrapper">
                          <div class="desktop-form">
                             <?php echo do_shortcode('[wpforms id="51993"]'); ?>
                          </div>
                          <div class="mobile-form">
                             <?php echo do_shortcode('[wpforms id="52014"]'); ?>
                            </div>

                           <!--  <form
                              class="contact-form"
                              id="contact-form"
                              action=""
                              data-attachment-url=""
                            >
                              <input
                                type="hidden"
                                name="leadSource"
                                value="Organic Search"
                              />
                              <input
                                type="hidden"
                                name="leadCampaign"
                                value="Form: Uvact.com"
                              />
                              <input
                                type="hidden"
                                name="analytics_client_id"
                                value
                              />
                              <div class="form-field">
                              <div
                                  class="form-field-col form-user-info-wrapper"
                                  >
                                  <div class="form-group form-group-required">
                                    <label
                                      class="form-control-label firstName"
                                      for="first-name"
                                    >
                                      <span class="form-label-name"
                                        >Name</span
                                      >
                                      <span
                                        class="form-validation-warning"
                                      ></span>
                                    </label>
                                    <input
                                      type="text"
                                      class="form-control form-control-input"
                                      id="first-name"
                                      name="firstName"
                                      required
                                      autocomplete="off"
                                    />
                                  </div>
                                   <div class="form-group form-group-required">
                                   <label
                                      class="form-control-label email"
                                      for="email"
                                    >
                                      <span class="form-label-name"
                                        >Email</span
                                      >
                                      <span
                                        class="form-validation-warning"
                                      ></span>
                                    </label>
                                    <input
                                      type="email"
                                      class="form-control form-control-input"
                                      id="email"
                                      name="email"
                                      required
                                      autocomplete="off"
                                    />
                                  </div>
                                  <div class="form-group form-group-required">
                                    <label
                                      class="form-control-label phone"
                                      for="phone"
                                    >
                                      <span class="form-label-name"
                                        >Phone #</span
                                      >
                                      <span
                                        class="form-validation-warning"
                                      ></span>
                                    </label>
                                    <input
                                      type="tel"
                                      class="form-control form-control-input"
                                      id="phone"
                                      name="phone"
                                      required
                                      maxlength="25"
                                      autocomplete="tel"
                                    />
                                  </div> -->
                                  <!-- <div class="form-group form-group-required">
                                    <label
                                      class="form-control-label email"
                                      for="email"
                                    >
                                      <span class="form-label-name"
                                        >Email</span
                                      >
                                      <span
                                        class="form-validation-warning"
                                      ></span>
                                    </label>
                                    <input
                                      type="email"
                                      class="form-control form-control-input"
                                      id="email"
                                      name="email"
                                      required
                                      autocomplete="off"
                                    />
                                  </div> -->
                            
                                 <!-- <div class="form-group form-group-required">
                                  <label
                                    class="form-control-label companyName"
                                    for="company-name"
                                  >
                                    <span class="form-label-name"
                                      >Company Name</span
                                    >
                                    <span
                                      class="form-validation-warning"
                                    ></span>
                                  </label>
                                  <input
                                    type="text"
                                    class="form-control form-control-input"
                                    id="company-name"
                                    name="companyName"
                                    autocomplete="off"
                                  />
                                </div>
                              </div>
                                <div
                                  class="
                                    form-group
                                    form-group-required
                                    form-group-textarea
                                  "
                                >
                                  <label
                                    class="form-control-label additionalInfo"
                                    for="add-info"
                                  >
                                    <span class="form-label-name"
                                      >What can we help you with?</span
                                    >
                                    <span
                                      class="form-validation-warning"
                                    ></span>
                                  </label>
                                  <textarea
                                    class="form-control form-control-textarea"
                                    id="add-info"
                                    name="additionalInfo"
                                    required
                                  ></textarea>
                                </div>
                              </div> -->
                              <!-- <div class="form-group form-group-checkbox">
                                <input
                                  type="checkbox"
                                  id="contact-form-isNDA"
                                  name="isNDA"
                                />
                                <label
                                  class="form-control-label nda-checkbox"
                                  for="contact-form-isNDA"
                                  aria-label="Sign a mutual NDA before a conversation"
                                ></label>
                                <span class="checkbox-label-text">
                                  Sign a mutual
                                  <span
                                    class="
                                      tooltip
                                      nda-tooltip
                                      tooltip-with-link
                                    "
                                  >
                                    <a href="index.html">NDA</a>
                                    <span class="tooltip-content">
                                      <a href="index.html">
                                        <img
                                          class="js-lazy-image"
                                          data-src="<?php //echo get_stylesheet_directory_uri(); ?>/i/nda-preview.webp"
                                          src="<?php //echo get_stylesheet_directory_uri(); ?>/i/fake-image.png"
                                          data-reserve-format="jpg"
                                          alt="NDA preview"
                                          width="180"
                                          height="130"
                                        />
                                      </a>
                                    </span>
                                  </span>
                                  before a conversation.
                                </span>
                                <div
                                  class="
                                    js-lazy-image
                                    tooltip tooltip-with-icon
                                    form-tooltip
                                  "
                                  data-src="i/form-tooltip-icon.svg"
                                >
                                  <div
                                    class="tooltip-content"
                                    data-side-order="right top bottom left"
                                  >
                                    <h3 class="tooltip-title">
                                      When to sign an NDA?
                                    </h3>
                                    <span class="tooltip-description"
                                      >A non-disclosure agreement (NDA) is a
                                      legal contract between parties, such as
                                      the software developer (or a software
                                      development firm) and yourself, outlining
                                      information to be shared and requiring
                                      that information be kept
                                      confidential.</span
                                    >
                                  </div>
                                </div>
                              </div> -->
                              <!-- <div
                                class="
                                  form-group
                                  form-group-btn
                                  form-group-btn-submit
                                "
                              >
                                <a
                                  href="#"
                                  class="
                                    button button-hovered button-submit-form
                                  "
                                  id="button-submit"
                                >
                                  <span class="button-overlay">
                                    <span class="button-hover-effect"></span>
                                  </span>
                                  <span class="button-text"> Send </span>
                                </a> -->
                                <!-- <div class="upload-files-wrapper">
                                  <input
                                    id="contact-form-file-upload-button"
                                    class="file-upload-button"
                                    type="file"
                                    name="attachments[]"
                                  />
                                  <label
                                    for="contact-form-file-upload-button"
                                    class="file-upload-label"
                                  >
                                    <svg
                                      width="19"
                                      height="19"
                                      fill="none"
                                      xmlns="http://www.w3.org/2000/svg"
                                      focusable="false"
                                      class="
                                        inline-svg
                                        icon-svg
                                        attachment-icon
                                      "
                                    >
                                      <path
                                        d="M17.2209 2.28474c-2.368-2.3680973-6.2212-2.3680973-8.58962 0L1.26849 9.6475c-1.691412 1.6916-1.6913 4.444.00022 6.1354.84583.8459 1.95652 1.2688 3.06765 1.2687 1.11083-.0002 2.22211-.4229 3.06779-1.2687l6.74905-6.74915c.4917-.49163.7625-1.14531.7626-1.84059 0-.69532-.2708-1.34896-.7625-1.84074-1.015-1.0149-2.6666-1.01486-3.6814.00019L6.05834 9.7661c-.33884.3388-.33884.8882-.00007 1.2271.33881.3389.88821.3388 1.22709 0L11.699 6.57967c.3383-.33833.8887-.3384 1.2271-.00008.1639.16388.2542.38178.2542.61353s-.0903.44958-.2542.61353L6.17705 14.5558c-1.01497 1.0149-2.66634 1.015-3.68125.0001-1.0149-1.015-1.01497-2.6664-.00018-3.6814l7.36276-7.36266c1.69162-1.6916 4.44402-1.6916 6.13542 0 .8195.81937 1.2708 1.90886 1.2708 3.06768 0 1.15881-.4513 2.24831-1.2708 3.06776L8.63117 17.0101c-.33881.3389-.33881.8883.00008 1.2271.16944.1695.3915.2542.61353.2542.22206 0 .44412-.0848.61356-.2542l7.36256-7.3628C18.3682 9.72725 18.9999 8.20198 19 6.57956c0-1.62239-.6318-3.14766-1.7791-4.29482z"
                                      />
                                    </svg>
                                    <span class="file-upload-label-text"
                                      >Attach file</span
                                    >
                                  </label>
                                  <div id="error_output"></div>
                                </div> -->
                               
                              <!-- </div>
                              <div class="form-submit-warning"></div>
                              <div class="form-attachment-warning"></div>
                            </form>
                          </div> -->
                        </div>
                        <!-- <form
                          id="review-form"
                          class="rating-form"
                          action="https://cecty2ml0k.execute-api.us-east-1.amazonaws.com/prod/review-form"
                          >
                          <div class="rating-feedback-form">
                            <p class="rating-feedback-title">
                              Was this page helpful?
                            </p>
                            <div class="rating-feedback-stars">
                              <input
                                type="radio"
                                name="needs"
                                id="star1"
                                value="1"
                              />
                              <label for="star1"></label>
                              <input
                                type="radio"
                                name="needs"
                                id="star2"
                                value="2"
                              />
                              <label for="star2"></label>
                              <input
                                type="radio"
                                name="needs"
                                id="star3"
                                value="3"
                              />
                              <label for="star3"></label>
                              <input
                                type="radio"
                                name="needs"
                                id="star4"
                                value="4"
                              />
                              <label for="star4"></label>
                              <input
                                type="radio"
                                name="needs"
                                id="star5"
                                value="5"
                              />
                              <label for="star5"></label>
                            </div>
                            <button
                              type="submit"
                              disabled
                              class="
                                button button-hovered
                                rating-feedback-submit
                              "
                              id="submit-feedback"
                            >
                              <span class="button-overlay"
                                ><span class="button-hover-effect"></span
                              ></span>
                              <span class="button-text">Send Feedback</span>
                            </button>
                           
                          </div>
                        </form> -->
                      
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </main>
         
        </div>
      </div>

    </div>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/synccommon.js"></script>
    <script async src="<?php echo get_stylesheet_directory_uri(); ?>/js/projects.js"></script>
    <script async src="<?php echo get_stylesheet_directory_uri(); ?>/js/common.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/livechat.js"></script>
    <script async src="<?php echo get_stylesheet_directory_uri(); ?>/js/review-stats.js"></script>
    <script async src="<?php echo get_stylesheet_directory_uri(); ?>/js/faq-markup.js"></script>
    <script async src="<?php echo get_stylesheet_directory_uri(); ?>/js/infographic.js"></script>
    <script async src="<?php echo get_stylesheet_directory_uri(); ?>/t.js"></script>
    
  </body>
</html>

<?php get_footer() ?>