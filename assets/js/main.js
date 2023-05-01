@charset "UTF-8";
.swiper {
  position: relative;
}
.swiper > .swiper-container {
  position: static;
}
.swiper > .swiper-container > .swiper-pagination {
  bottom: -4.5rem;
}
.swiper-pagination {
  position: static;
  margin-top: 1.5rem;
}
.swiper-pagination .swiper-pagination-bullet {
  background-color: transparent;
  border: 1px solid #d7d7d7;
  opacity: 1;
}
.swiper-pagination .swiper-pagination-bullet:hover {
  background-color: #ccc;
  border-color: #ccc;
}
.swiper-pagination .swiper-pagination-bullet-active {
  background-color: #ab8e66;
  border-color: #ab8e66;
}
.swiper-container-rtl .swiper-button-next:after,
.swiper-container-rtl .swiper-button-prev:after {
  content: "";
}
.swiper-container-rtl .swiper-button-next:before {
  content: "";
}
.swiper-container-rtl .swiper-button-prev:before {
  content: "";
}
.swiper-button-next,
.swiper-button-prev {
  padding: 0;
  z-index: 99;
  border: none;
  background-color: transparent;
  transition: all 0.3s;
}
.swiper-button-next:after,
.swiper-button-prev:after {
  content: "";
}
.swiper-button-next:before,
.swiper-button-prev:before {
  font-family: "Wolmart";
}
.swiper-button-next.swiper-button-disabled,
.swiper-button-prev.swiper-button-disabled {
  cursor: default;
  color: #ccc;
}
.swiper-button-next:before {
  content: "";
}
.swiper-button-prev:before {
  content: "";
}
.swiper-wrapper {
  box-sizing: border-box;
}
.swiper-container:not(.swiper-container-initialized) .swiper-wrapper {
  flex-wrap: nowrap;
  overflow: hidden;
  width: auto;
}
.swiper-container:not(.swiper-container-initialized) .swiper-slide {
  box-sizing: 200px;
}
.swiper-slide img {
  display: block;
  width: 100%;
}
.swiper-container:not(.swiper-container-initialized) .swiper-wrapper.row {
  width: calc(100% + 2rem);
}
.swiper-container:not(.swiper-container-initialized) .swiper-wrapper.gutter-no {
  width: 100%;
}
.swiper-container:not(.swiper-container-initialized) .swiper-wrapper.gutter-xs {
  width: calc(100% + 2 * false);
}
.swiper-container:not(.swiper-container-initialized) .swiper-wrapper.gutter-sm {
  width: calc(100% + 2 * false);
}
.swiper-container:not(.swiper-container-initialized) .swiper-wrapper.gutter-md {
  width: calc(100% + 2 * false);
}
.swiper-container:not(.swiper-container-initialized) .swiper-wrapper.gutter-lg {
  width: calc(100% + 2 * false);
}
.swiper-theme .swiper-button-next,
.swiper-theme .swiper-button-prev {
  margin: 0;
  transform: translateY(-50%);
  transition: all 0.3s ease;
  width: 30px;
  height: 30px;
  border-radius: 50px;
  font-size: 20px;
  font-weight: 400;
  color: #ab8e66;
}
.swiper-theme .swiper-button-next:not(.swiper-button-disabled):active,
.swiper-theme .swiper-button-next:not(.swiper-button-disabled):focus,
.swiper-theme .swiper-button-next:not(.swiper-button-disabled):hover,
.swiper-theme .swiper-button-prev:not(.swiper-button-disabled):active,
.swiper-theme .swiper-button-prev:not(.swiper-button-disabled):focus,
.swiper-theme .swiper-button-prev:not(.swiper-button-disabled):hover {
  color: #fff;
  background-color: #ab8e66;
  border-color: #ab8e66;
}
.swiper-theme .swiper-button-next.swiper-button-disabled,
.swiper-theme .swiper-button-prev.swiper-button-disabled {
  color: #ccc;
  opacity: 0.6;
}
.swiper-theme .swiper-button-prev {
  left: -40px;
}
.swiper-theme .swiper-button-next {
  right: -40px;
}
.swiper-theme .swiper-pagination .swiper-pagination-bullet {
  margin: 5px;
}
.swiper-theme .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #ab8e66;
  border-color: #ab8e66;
  width: 8px;
}
@media (max-width: 1300px) {
  .swiper-theme .swiper-button-prev {
    left: 20px;
  }
  .swiper-theme .swiper-button-next {
    right: 20px;
  }
}
.nav-inner > .swiper-button-next,
.nav-inner > .swiper-button-prev {
  opacity: 0;
  visibility: hidden;
}
.nav-inner > .swiper-button-prev {
  left: 0;
}
.nav-inner > .swiper-button-next {
  right: 0;
}
.nav-inner:hover > .swiper-button-next,
.nav-inner:hover > .swiper-button-prev {
  opacity: 1;
  visibility: visible;
}
.nav-inner:hover > .swiper-button-prev {
  left: 2rem;
}
.nav-inner:hover > .swiper-button-next {
  right: 2rem;
}
.nav-top > .swiper-button-next,
.nav-top > .swiper-button-prev {
  position: absolute;
  width: 15px;
  top: -5.3rem;
  left: auto;
  color: #777;
  font-size: 1.4rem;
  font-weight: 400;
}
.nav-top > .swiper-button-next:not(.swiper-button-disabled):active,
.nav-top > .swiper-button-next:not(.swiper-button-disabled):focus,
.nav-top > .swiper-button-next:not(.swiper-button-disabled):hover,
.nav-top > .swiper-button-prev:not(.swiper-button-disabled):active,
.nav-top > .swiper-button-prev:not(.swiper-button-disabled):focus,
.nav-top > .swiper-button-prev:not(.swiper-button-disabled):hover {
  background-color: transparent;
  border-color: transparent;
  color: #ab8e66;
}
.nav-top > .swiper-button-next.swiper-button-disabled,
.nav-top > .swiper-button-prev.swiper-button-disabled {
  color: #666;
}
.nav-top > .swiper-button-next {
  transform: translateX(50%);
  right: 3.7rem;
}
.nav-top > .swiper-button-prev {
  transform: translateX(-50%);
  right: 3.5rem;
}
.nav-right .swiper-button-next,
.nav-right .swiper-button-prev {
  position: absolute;
  right: 3rem;
  top: auto;
  bottom: 2.8rem;
  left: auto;
}
.nav-right .swiper-button-prev {
  right: 5.5rem;
}
.pg-white > .swiper-pagination .swiper-pagination-bullet {
  background-color: #fff;
  border-color: #fff;
  opacity: 0.8;
}
.pg-white > .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #ab8e66;
  border-color: #ab8e66;
  opacity: 1;
}
.pg-grey > .swiper-pagination .swiper-pagination-bullet {
  background-color: #eee;
  border-color: #eee;
}
.pg-grey > .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #ab8e66;
  border-color: #ab8e66;
}
.swiper-theme > .swiper-pagination .swiper-pagination-bullet {
  transition: all 0.3s;
}
.swiper-theme > .swiper-pagination .swiper-pagination-bullet-active {
  width: 18px;
  border-radius: 9rem;
}
.pg-inner .swiper-pagination {
  position: absolute;
  bottom: 4.5rem;
  left: 50%;
  transform: translateX(-50%);
}
.pg-right .swiper-pagination {
  position: absolute;
  bottom: 4.2rem;
  right: 3rem;
  left: auto;
  width: unset;
}
.swiper-img-dots {
  z-index: 1000;
}
.swiper-img-dots a {
  display: inline-flex;
  position: relative;
  margin: 0 1.5rem 1rem;
  border-radius: 50%;
  border: 3px solid transparent;
  box-shadow: 0 0 0 2px #ccc;
  overflow: hidden;
  transition: padding 0.4s, box-shadow 0.4s;
}
.swiper-img-dots a.active,
.swiper-img-dots a:hover {
  box-shadow: 0 0 0 2px #ab8e66;
}
.swiper-img-dots a img {
  border-radius: 50%;
}
.brands-swiper .swiper-slide {
  display: flex;
  justify-content: center;
}
.swiper-container .slide-animate {
  transform: translate3d(0, 0, 0) scale(1);
  will-change: filter, transform, opacity;
  opacity: 0;
}
.swiper-container .slide-animate.show-content {
  opacity: 1;
}
.shadow-swiper {
  margin: -20px;
  padding: 20px;
}
@media (max-width: 575px) {
  .shadow-swiper {
    margin: -15px;
    padding: 15px;
  }
}
.swiper-nav-lg > .swiper-button-next,
.swiper-nav-lg > .swiper-button-prev,
.swiper-nav-md > .swiper-button-next,
.swiper-nav-md > .swiper-button-prev {
  background-color: transparent;
  border: none;
}
.swiper-nav-lg > .swiper-button-next:not(.swiper-button-disabled):active,
.swiper-nav-lg > .swiper-button-next:not(.swiper-button-disabled):focus,
.swiper-nav-lg > .swiper-button-next:not(.swiper-button-disabled):hover,
.swiper-nav-lg > .swiper-button-prev:not(.swiper-button-disabled):active,
.swiper-nav-lg > .swiper-button-prev:not(.swiper-button-disabled):focus,
.swiper-nav-lg > .swiper-button-prev:not(.swiper-button-disabled):hover,
.swiper-nav-md > .swiper-button-next:not(.swiper-button-disabled):active,
.swiper-nav-md > .swiper-button-next:not(.swiper-button-disabled):focus,
.swiper-nav-md > .swiper-button-next:not(.swiper-button-disabled):hover,
.swiper-nav-md > .swiper-button-prev:not(.swiper-button-disabled):active,
.swiper-nav-md > .swiper-button-prev:not(.swiper-button-disabled):focus,
.swiper-nav-md > .swiper-button-prev:not(.swiper-button-disabled):hover {
  background-color: transparent;
  border: none;
}
.swiper-nav-lg > .swiper-button-next,
.swiper-nav-lg > .swiper-button-prev {
  font-size: 4.8rem;
}
.swiper-nav-md > .swiper-button-next,
.swiper-nav-md > .swiper-button-prev {
  font-size: 3.3rem;
}
@media (max-width: 575px) {
  .swiper-img-dots a {
    margin-left: 1rem;
    margin-right: 1rem;
  }
}
.pg-show > .swiper-pagination {
  display: block;
}
@media (min-width: 1200px) {
  .pg-xl-hide > .swiper-pagination {
    display: none;
  }
}
@media (min-width: 1600px) {
  .pg-xxl-hide > .swiper-pagination {
    display: none;
  }
}
.nav-hide > .swiper-button-next,
.nav-hide > .swiper-button-prev {
  display: none;
}
@media (min-width: 1200px) {
  .nav-xl-show > .swiper-button-next,
  .nav-xl-show > .swiper-button-prev {
    display: block;
  }
}
@media (min-width: 1600px) {
  .nav-xxl-show > .swiper-button-next,
  .nav-xxl-show > .swiper-button-prev {
    display: block;
  }
}
*,
:after,
:before {
  box-sizing: inherit;
}
html {
  font-size: 62.5%;
  font-size-adjust: 100%;
  font-weight: 400;
  box-sizing: border-box;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  margin: 0;
  overflow-x: hidden;
  font-family: Poppins, sans-serif;
  font-size: 1.4rem;
  line-height: 1.6;
  color: #666;
  background: #fff;
}
main {
  display: block;
  position: relative;
}
body:not(.loaded) * {
  transition: all 0s !important;
}
.page-wrapper {
  position: relative;
  transition: margin 0.4s, opacity 0.5s;
}
.loaded > .page-wrapper {
  opacity: 1;
}
ul {
  padding-left: 1.5em;
}

.logo1
{
  margin-bottom: 10px;
}

.top-bar {
  background: #555;
  color: #fff;
  font-size: 0.9rem;
  padding: 10px 0;
}

.top-bar .contact-info {
  margin-right: 20px;
}

.top-bar ul {
  margin-bottom: 0;
}

.top-bar .contact-info a {
  font-size: 0.8rem;
}

.top-bar ul.social-custom {
  margin-left: 20px;
}
.top-bar ul {
  margin-bottom: 0;
}

.top-bar a.login-btn i, .top-bar a.signup-btn i {
  margin-right: 10px;
}

.top-bar ul.social-custom a:hover {
  background: #4fbfa8;
  color: #fff;
}
.top-bar ul.social-custom a {
  text-decoration: none !important;
  font-size: 0.7rem;
  width: 26px;
  height: 26px;
  line-height: 26px;
  color: #999;
  text-align: center;
  border-radius: 50%;
  margin: 0;
}
a:focus, a:hover {
  color: #348e7b;
  text-decoration: underline;
}
.top-bar a.login-btn, .top-bar a.signup-btn {
  color: #eee;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  text-decoration: none !important;
  font-size: 0.75rem;
  font-weight: 700;
  margin-right: 10px;}

.breadcrumb,
.category-list,
.dropdown-box,
.fee-description,
.filter-items,
.menu,
.menu ul,
.mobile-menu,
.mobile-menu ul,
.nav,
.nav-filters,
.nav ul,
.pagination,
.product-details ul,
.product-tabs > div ul,
.shipping-methods,
.shipping-methods ul,
.widget-body,
.widget-body ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}
.btn,
input {
  margin: 0;

}
#wishlist{
color:#333;

}
/* 11. Instagram */
.instagram-btn {
	position: absolute;
	left: 0;
	right: 0;
	text-align: center;
	top: 50%;
	transform: translateY(-50%);
	z-index: 99999;
}
.instagram-btn a i{
	color: #ab8e66;
	transition: .3s;
}
.instagram-btn a:hover i{
	color: #fff;
}



a {
  text-decoration: none;
  color: #ab8e66;
  transition: color 0.3s;
}
a:hover {
  color: #1914fe;
}
:focus {
  outline: 0;
}
figure {
  margin: 0;
}
hr {
  margin: 0.5rem 0 1.5rem;
  border: 0;
  border-top: 1px solid #eee;
}
img {
  max-width: 100%;
  height: auto;
  object-fit: cover;
  vertical-align: middle;
  justify:middle;
}
table {
  width: 100%;
  border-collapse: collapse;
}
.scrollable {
  -webkit-overflow-scrolling: touch;
}
.scrollable::-webkit-scrollbar {
  height: 7px;
  width: 4px;
}
.scrollable::-webkit-scrollbar-thumb {
  margin-right: 2px;
  background: rgba(0, 0, 0, 0.25);
  border-radius: 5px;
  cursor: pointer;
}
.scrollable-light::-webkit-scrollbar-thumb {
  background: rgba(255, 255, 255, 0.2);
}
.scrollable:hover::-webkit-scrollbar-thumb {
  background: rgba(0, 0, 0, 0.25);
}
.sticky-content.fix-top {
  top: 0;
}
.sticky-content.fix-bottom {
  bottom: 0;
}
.sticky-content.fixed {
  position: fixed;
  left: 0;
  right: 0;
  opacity: 1;
  transform: translateY(0);
  z-index: 1051;
  box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.1);
}
.sticky-content.fixed.fix-top {
  animation: fixedTopContent 0.4s;
}
.sticky-content.fixed.fix-bottom {
  animation: fixedBottomContent 0.0s;
}
#scroll-top {
  position: fixed;
  display: flex;
  align-items: center;
  justify-content: center;
  bottom: -4rem;
  right: 1.5rem;
  z-index: 9999;
  width: 4.6rem;
  height: 4.6rem;
  font-size: 1.4rem;
  font-weight: 700;
  color: #222;
  opacity: 0;
  transition: bottom 0.3s, opacity 0.3s;
}
#scroll-top.show {
  opacity: 1;
  bottom: 98px;
}
#scroll-top:focus,
#scroll-top:hover {
  text-decoration: none;
}
#scroll-top:hover {
  opacity: 0.8;
}
#scroll-top i {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 3.6rem;
  height: 3.6rem;
  color: #fff;
  background-color: #333;
  border: 2px solid #333;
  border-radius: 50%;
  z-index: 1;
}
#scroll-top svg {
  position: absolute;
  width: 44px;
  height: 44px;
  border-radius: 50%;
  top: 1px;
  left: 1px;
  z-index: -1;
}
#scroll-top svg circle {
  stroke: #2c67e7;
  stroke-width: 4px;
  stroke-linecap: round;
  stroke-dasharray: 1, 400;
}
@media (max-width: 768px) {
  #scroll-top {
    display: none;
  }
}
.load-more-overlay.loading:after,
.loading:not(.load-more-overlay) {
  animation: spin 650ms infinite linear;
  border: 2px solid transparent;
  border-radius: 32px;
  border-top: 2px solid #ab8e66 !important;
  border-right: 2px solid rgba(66, 164, 232, 0.4) !important;
  border-bottom: 2px solid #ab8e66 !important;
  border-left: 2px solid rgba(66, 164, 232, 0.4) !important;
  content: "";
  display: block;
  height: 20px;
  top: 50%;
  margin-top: -10px;
  left: 50%;
  margin-left: -10px;
  right: auto;
  position: absolute;
  width: 20px;
}
.load-more-overlay {
  position: relative;
}
.load-more-overlay.loading:after {
  content: "";
}
.load-more-overlay:before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: #fff;
  opacity: 0.8;
}
@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}
@media (min-width: 768px) {
  .scroll-top.show {
    visibility: visible;
    opacity: 0.7;
    transform: translateY(0);
  }
}
.text-uppercase {
  text-transform: uppercase !important;
}
.text-capitalize {
  text-transform: capitalize !important;
}
.text-normal {
  text-transform: none !important;
}
.d-none {
  display: none !important;
}
.d-block {
  display: block !important;
}
.d-inline-block {
  display: inline-block !important;
}
.d-flex {
  display: flex !important;
}
.d-inline-flex {
  display: inline-flex !important;
}
.justify-content-center {
  justify-content: center !important;
}
.justify-content-start {
  justify-content: flex-start !important;
}
.justify-content-end {
  justify-content: flex-end !important;
}
.justify-content-between {
  justify-content: space-between !important;
}
.align-items-start {
  align-items: flex-start !important;
}
.align-items-end {
  align-items: flex-end !important;
}
.align-items-center {
  align-items: center !important;
}
.flex-column {
  flex-direction: column !important;
}
.flex-wrap {
  flex-wrap: wrap !important;
}
.flex-1 {
  flex: 1 !important;
}
.w-100 {
  width: 100% !important;
}
.h-100 {
  height: 100% !important;
}
.p-sticky {
  position: sticky !important;
}
.p-relative {
  position: relative !important;
}
.x-50 {
  left: 50% !important;
  transform: translateX(-50%) !important;
}
.x-50.y-50 {
  transform: translate(-50%, -50%) !important;
}
.y-50 {
  top: 50% !important;
  transform: translateY(-50%) !important;
}
@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-flex {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
}
@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-flex {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
}
@media (max-width: 1199px) {
  .d-xl-show {
    display: none !important;
  }
}



@media (max-width: 991px) {
  .d-lg-show {
    display: none !important;
  }
}
@media (max-width: 767px) {
  .d-md-show {
    display: none !important;
  }
}
@media (max-width: 575px) {
  .d-sm-show {
    display: none !important;
  }
}
@media (max-width: 479px) {
  .d-xs-none {
    display: block !important;
  }
  .d-xs-show {
    display: none !important;
  }
  .d-xs-block {
    display: block !important;
  }
  .d-xs-inline-block {
    display: inline-block !important;
  }
}
.font-weight-bold {
  font-weight: 600 !important;
}
.font-weight-bolder {
  font-weight: 700 !important;
}
.font-weight-normal {
  font-weight: 400 !important;
}
.font-size-md {
  font-size: 1.3rem !important;
}
.font-size-sm {
  font-size: 1.2rem !important;
}
.font-size-normal {
  font-size: 1.4rem !important;
}
.font-size-lg {
  font-size: 2.2rem !important;
}
.font-size-xl {
  font-size: 2.4rem !important;
}
.font-primary {
  font-family: Poppins, sans-serif !important;
}
.font-secondary {
  font-family: "Poetsen One", sans-serif !important;
}
.text-left {
  text-align: left !important;
}
.text-center {
  text-align: center !important;
}
.text-right {
  text-align: right !important;
}
.text-white {
  color: #333 !important;
}
.text-white1 {
  color: #fff !important;
}
.text-light {
  color: #999 !important;
}
.text-lighter {
  color: #ccc !important;
}
.text-primary {
  color: #ab8e66 !important;
}
.text-secondary {
  color: #ffb639 !important;
}
.text-dark {
  color: #333 !important;
}
.text-default {
  color: #666 !important;
}
.text-hover-underline:after {
  display: block;
  margin-top: 1px;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
  height: 1px;
  border-bottom: 1px solid;
  transform: scaleX(0);
  transition: transform 0.3s;
  content: "";
}
.text-hover-underline:hover:after {
  transform: scaleX(1);
}
.ls-25 {
  letter-spacing: -0.025em !important;
}
.ls-15 {
  letter-spacing: -0.015em !important;
}
.ls-10 {
  letter-spacing: -0.01em !important;
}
.ls-50 {
  letter-spacing: -0.05em !important;
}
.ls-normal {
  letter-spacing: 0 !important;
}
.bg-white {
  background-color: #fff !important;
}
.bg-dark {
  background-color: #333 !important;
}
.bg-primary {
  background-color: #ab8e66 !important;
}
.bg-secondary {
  background-color: #ffb639 !important;
}
.bg-grey {
  background-color: #f5f5f5 !important;
}
.bg-image {
  background-position: center !important;
  background-repeat: no-repeat !important;
  background-size: cover !important;
}
.br-lg {
  border-radius: 1.3rem !important;
  overflow: hidden !important;
}
.br-sm {
  border-radius: 0.5rem !important;
  overflow: hidden !important;
}
.br-xs {
  border-radius: 0.3rem !important;
  overflow: hidden !important;
}
.br-50 {
  border-radius: 50% !important;
  overflow: hidden !important;
}
.border-no {
  border: none !important;
}
.bb-no {
  border-bottom: none !important;
}
.bt-no {
  border-top: none !important;
}
.lh-1 {
  line-height: 1 !important;
}
.lh-2 {
  line-height: 2 !important;
}
.order-reverse {
  order: -1 !important;
}
.overflow-hidden {
  overflow: hidden !important;
}
.after-none:after {
  display: none !important;
}
.before-none:before {
  display: none !important;
}
h1,
h2,
h3,
h4,
h5,
h6,
p {
  font-weight: 400;
  margin: 0 0 2rem;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: Poppins, sans-serif;
  font-weight: 700;
  line-height: 1.2;
  color: #333;
  letter-spacing: 0;
}
h1 {
  font-size: 4rem;
}
h2 {
  font-size: 3rem;
}
h3 {
  font-size: 2.4rem;
}
h4 {
  font-size: 1.8rem;
}
h5 {
  font-size: 1.5rem;
}
h6 {
  font-size: 1.3rem;
}
p {
  font-size: 1.4rem;
  line-height: 1.86;
}
.typo-grid {
  margin-bottom: 4.7rem;
}
blockquote {
  margin: 0;
}
.list-style-none {
  list-style: none;
}
.list-type-check li {
  position: relative;
  padding-left: 2rem;
  line-height: 2;
}
.list-type-check li:before {
  position: absolute;
  display: block;
  left: 0;
  top: 1px;
  content: "";
  font-family: "wolmart";
  font-weight: 600;
  font-size: 1.3rem;
}
.list-circle li {
  padding-left: 1rem;
  margin-bottom: 1rem;
}
.list-circle i {
  margin-right: 1.2rem;
  width: 4rem;
  height: 4rem;
  border: 1px solid #e1e1e1;
  border-radius: 50%;
  text-align: center;
  line-height: 3.8rem;
  font-size: 1.1rem;
}
.centraliza {
  width: 555px;
  margin: auto;
  height: 375px; 
}

.container
.container-fluid {
  width: 100%;
  padding-left: 20px;
  padding-right: 20px;
  margin-left: auto;
  margin-right: auto;
}
@media (max-width: 479px) {
  .container,
  .container-fluid {
    padding-left: 15px;
    padding-right: 15px;
  }
}
.container-fluid {
  max-width: 1820px;
}
.container {
  max-width: 1280px;
}
.row {
  display: flex;
  flex-wrap: wrap;
  margin-left: -10px;
  margin-right: -10px;
}
.row > * {
  position: relative;
  width: 100%;
  padding-right: 10px;
  padding-left: 10px;
}
.gutter-lg {
  margin-left: -15px;
  margin-right: -15px;
}
.gutter-lg > * {
  padding-left: 15px;
  padding-right: 15px;
}
.gutter-sm {
  margin-left: -5px;
  margin-right: -5px;
}
.gutter-sm > * {
  padding-left: 5px;
  padding-right: 5px;
}
.gutter-xs {
  margin-left: -1px;
  margin-right: -1px;
}
.gutter-xs > * {
  padding-left: 1px;
  padding-right: 1px;
}
.gutter-no {
  margin-left: 0;
  margin-right: 0;
}
.gutter-no > * {
  padding-left: 0;
  padding-right: 0;
}
.cols-1 > * {
  max-width: 100%;
  flex: 0 0 100%;
}
.cols-2 > * {
  max-width: 50%;
  flex: 0 0 50%;
}
.cols-3 > * {
  max-width: 33.3333%;
  flex: 0 0 33.3333%;
}
.cols-4 > * {
  max-width: 25%;
  flex: 0 0 25%;
}
.cols-5 > * {
  max-width: 20%;
  flex: 0 0 20%;
}
.cols-6 > * {
  max-width: 16.6667%;
  flex: 0 0 16.6667%;
}
.cols-7 > * {
  max-width: 14.2857%;
  flex: 0 0 14.2857%;
}
.cols-8 > * {
  max-width: 12.5%;
  flex: 0 0 12.5%;
}
@media (min-width: 480px) {
  .cols-xs-1 > * {
    max-width: 100%;
    flex: 0 0 100%;
  }
  .cols-xs-2 > * {
    max-width: 50%;
    flex: 0 0 50%;
  }
  .cols-xs-3 > * {
    max-width: 33.3333%;
    flex: 0 0 33.3333%;
  }
  .cols-xs-4 > * {
    max-width: 25%;
    flex: 0 0 25%;
  }
  .cols-xs-5 > * {
    max-width: 20%;
    flex: 0 0 20%;
  }
  .cols-xs-6 > * {
    max-width: 16.6667%;
    flex: 0 0 16.6667%;
  }
  .cols-xs-7 > * {
    max-width: 14.2857%;
    flex: 0 0 14.2857%;
  }
  .cols-xs-8 > * {
    max-width: 12.5%;
    flex: 0 0 12.5%;
  }
}
@media (min-width: 576px) {
  .cols-sm-1 > * {
    max-width: 100%;
    flex: 0 0 100%;
  }
  .cols-sm-2 > * {
    max-width: 50%;
    flex: 0 0 50%;
  }
  .cols-sm-3 > * {
    max-width: 33.3333%;
    flex: 0 0 33.3333%;
  }
  .cols-sm-4 > * {
    max-width: 25%;
    flex: 0 0 25%;
  }
  .cols-sm-5 > * {
    max-width: 20%;
    flex: 0 0 20%;
  }
  .cols-sm-6 > * {
    max-width: 16.6667%;
    flex: 0 0 16.6667%;
  }
  .cols-sm-7 > * {
    max-width: 14.2857%;
    flex: 0 0 14.2857%;
  }
  .cols-sm-8 > * {
    max-width: 12.5%;
    flex: 0 0 12.5%;
  }
}
@media (min-width: 768px) {
  .cols-md-1 > * {
    max-width: 100%;
    flex: 0 0 100%;
  }
  .cols-md-2 > * {
    max-width: 50%;
    flex: 0 0 50%;
  }
  .cols-md-3 > * {
    max-width: 33.3333%;
    flex: 0 0 33.3333%;
  }
  .cols-md-4 > * {
    max-width: 25%;
    flex: 0 0 25%;
  }
  .cols-md-5 > * {
    max-width: 20%;
    flex: 0 0 20%;
  }
  .cols-md-6 > * {
    max-width: 16.6667%;
    flex: 0 0 16.6667%;
  }
  .cols-md-7 > * {
    max-width: 14.2857%;
    flex: 0 0 14.2857%;
  }
  .cols-md-8 > * {
    max-width: 12.5%;
    flex: 0 0 12.5%;
  }
}
@media (min-width: 992px) {
  .cols-lg-1 > * {
    max-width: 100%;
    flex: 0 0 100%;
  }
  .cols-lg-2 > * {
    max-width: 50%;
    flex: 0 0 50%;
  }
  .cols-lg-3 > * {
    max-width: 33.3333%;
    flex: 0 0 33.3333%;
  }
  .cols-lg-4 > * {
    max-width: 25%;
    flex: 0 0 25%;
  }
  .cols-lg-5 > * {
    max-width: 20%;
    flex: 0 0 20%;
  }
  .cols-lg-6 > * {
    max-width: 16.6667%;
    flex: 0 0 16.6667%;
  }
  .cols-lg-7 > * {
    max-width: 14.2857%;
    flex: 0 0 14.2857%;
  }
  .cols-lg-8 > * {
    max-width: 12.5%;
    flex: 0 0 12.5%;
  }
}
@media (min-width: 1200px) {
  .cols-xl-1 > * {
    max-width: 100%;
    flex: 0 0 100%;
  }
  .cols-xl-2 > * {
    max-width: 50%;
    flex: 0 0 50%;
  }
  .cols-xl-3 > * {
    max-width: 33.3333%;
    flex: 0 0 33.3333%;
  }
  .cols-xl-4 > * {
    max-width: 25%;
    flex: 0 0 25%;
  }
  .cols-xl-5 > * {
    max-width: 20%;
    flex: 0 0 20%;
  }
  .cols-xl-6 > * {
    max-width: 16.6667%;
    flex: 0 0 16.6667%;
  }
  .cols-xl-7 > * {
    max-width: 14.2857%;
    flex: 0 0 14.2857%;
  }
  .cols-xl-8 > * {
    max-width: 12.5%;
    flex: 0 0 12.5%;
  }
  .cols-xl-9 > * {
    max-width: 11.1111%;
    flex: 0 0 11.1111%;
  }
  .cols-xl-10 > * {
    max-width: 10%;
    flex: 0 0 10%;
  }
  .cols-xl-11 > * {
    max-width: 9.0909%;
    flex: 0 0 9.0909%;
  }
  .cols-xl-12 > * {
    max-width: 8.3333%;
    flex: 0 0 8.3333%;
  }
}
.col-1 {
  max-width: 8.3333%;
  flex: 0 0 8.3333%;
}
.col-2 {
  max-width: 16.6667%;
  flex: 0 0 16.6667%;
}
.col-3 {
  max-width: 25%;
  flex: 0 0 25%;
}
.col-4 {
  max-width: 33.3333%;
  flex: 0 0 33.3333%;
}
.col-5 {
  max-width: 41.6667%;
  flex: 0 0 41.6667%;
}
.col-6 {
  max-width: 50%;
  flex: 0 0 50%;
}
.col-7 {
  max-width: 58.3333%;
  flex: 0 0 58.3333%;
}
.col-8 {
  max-width: 66.6667%;
  flex: 0 0 66.6667%;
}
.col-9 {
  max-width: 75%;
  flex: 0 0 75%;
}
.col-10 {
  max-width: 83.3333%;
  flex: 0 0 83.3333%;
}
.col-11 {
  max-width: 91.6667%;
  flex: 0 0 91.6667%;
}
.col-12 {
  max-width: 100%;
  flex: 0 0 100%;
}
@media (min-width: 480px) {
  .col-xs-1 {
    max-width: 8.3333%;
    flex: 0 0 8.3333%;
  }
  .col-xs-2 {
    max-width: 16.6667%;
    flex: 0 0 16.6667%;
  }
  .col-xs-3 {
    max-width: 25%;
    flex: 0 0 25%;
  }
  .col-xs-4 {
    max-width: 33.3333%;
    flex: 0 0 33.3333%;
  }
  .col-xs-5 {
    max-width: 41.6667%;
    flex: 0 0 41.6667%;
  }
  .col-xs-6 {
    max-width: 50%;
    flex: 0 0 50%;
  }
  .col-xs-7 {
    max-width: 58.3333%;
    flex: 0 0 58.3333%;
  }
  .col-xs-8 {
    max-width: 66.6667%;
    flex: 0 0 66.6667%;
  }
  .col-xs-9 {
    max-width: 75%;
    flex: 0 0 75%;
  }
  .col-xs-10 {
    max-width: 83.3333%;
    flex: 0 0 83.3333%;
  }
  .col-xs-11 {
    max-width: 91.6667%;
    flex: 0 0 91.6667%;
  }
  .col-xs-12 {
    max-width: 100%;
    flex: 0 0 100%;
  }
}
@media (min-width: 576px) {
  .col-sm-1 {
    max-width: 8.3333%;
    flex: 0 0 8.3333%;
  }
  .col-sm-2 {
    max-width: 16.6667%;
    flex: 0 0 16.6667%;
  }
  .col-sm-3 {
    max-width: 25%;
    flex: 0 0 25%;
  }
  .col-sm-4 {
    max-width: 33.3333%;
    flex: 0 0 33.3333%;
  }
  .col-sm-5 {
    max-width: 41.6667%;
    flex: 0 0 41.6667%;
  }
  .col-sm-6 {
    max-width: 50%;
    flex: 0 0 50%;
  }
  .col-sm-7 {
    max-width: 58.3333%;
    flex: 0 0 58.3333%;
  }
  .col-sm-8 {
    max-width: 66.6667%;
    flex: 0 0 66.6667%;
  }
  .col-sm-9 {
    max-width: 75%;
    flex: 0 0 75%;
  }
  .col-sm-10 {
    max-width: 83.3333%;
    flex: 0 0 83.3333%;
  }
  .col-sm-11 {
    max-width: 91.6667%;
    flex: 0 0 91.6667%;
  }
  .col-sm-12 {
    max-width: 100%;
    flex: 0 0 100%;
  }
}
@media (min-width: 768px) {
  .col-md-1 {
    max-width: 8.3333%;
    flex: 0 0 8.3333%;
  }
  .col-md-2 {
    max-width: 16.6667%;
    flex: 0 0 16.6667%;
  }
  .col-md-3 {
    max-width: 25%;
    flex: 0 0 25%;
  }
  .col-md-4 {
    max-width: 33.3333%;
    flex: 0 0 33.3333%;
  }
  .col-md-5 {
    max-width: 41.6667%;
    flex: 0 0 41.6667%;
  }
  .col-md-6 {
    max-width: 50%;
    flex: 0 0 50%;
  }
  .col-md-7 {
    max-width: 58.3333%;
    flex: 0 0 58.3333%;
  }
  .col-md-8 {
    max-width: 66.6667%;
    flex: 0 0 66.6667%;
  }
  .col-md-9 {
    max-width: 75%;
    flex: 0 0 75%;
  }
  .col-md-10 {
    max-width: 83.3333%;
    flex: 0 0 83.3333%;
  }
  .col-md-11 {
    max-width: 91.6667%;
    flex: 0 0 91.6667%;
  }
  .col-md-12 {
    max-width: 100%;
    flex: 0 0 100%;
  }
}
@media (min-width: 992px) {
  .col-lg-1 {
    max-width: 8.3333%;
    flex: 0 0 8.3333%;
  }
  .col-lg-2 {
    max-width: 16.6667%;
    flex: 0 0 16.6667%;
  }
  .col-lg-3 {
    max-width: 25%;
    flex: 0 0 25%;
  }
  .col-lg-4 {
    max-width: 33.3333%;
    flex: 0 0 33.3333%;
  }
  .col-lg-5 {
    max-width: 41.6667%;
    flex: 0 0 41.6667%;
  }
  .col-lg-6 {
    max-width: 50%;
    flex: 0 0 50%;
  }
  .col-lg-7 {
    max-width: 58.3333%;
    flex: 0 0 58.3333%;
  }
  .col-lg-8 {
    max-width: 66.6667%;
    flex: 0 0 66.6667%;
  }
  .col-lg-9 {
    max-width: 75%;
    flex: 0 0 75%;
  }
  .col-lg-10 {
    max-width: 83.3333%;
    flex: 0 0 83.3333%;
  }
  .col-lg-11 {
    max-width: 91.6667%;
    flex: 0 0 91.6667%;
  }
  .col-lg-12 {
    max-width: 100%;
    flex: 0 0 100%;
  }
}
@media (min-width: 1200px) {
  .col-xl-1 {
    max-width: 8.3333%;
    flex: 0 0 8.3333%;
  }
  .col-xl-2 {
    max-width: 16.6667%;
    flex: 0 0 16.6667%;
  }
  .col-xl-3 {
    max-width: 25%;
    flex: 0 0 25%;
  }
  .col-xl-4 {
    max-width: 33.3333%;
    flex: 0 0 33.3333%;
  }
  .col-xl-5 {
    max-width: 41.6667%;
    flex: 0 0 41.6667%;
  }
  .col-xl-6 {
    max-width: 50%;
    flex: 0 0 50%;
  }
  .col-xl-7 {
    max-width: 58.3333%;
    flex: 0 0 58.3333%;
  }
  .col-xl-8 {
    max-width: 66.6667%;
    flex: 0 0 66.6667%;
  }
  .col-xl-9 {
    max-width: 75%;
    flex: 0 0 75%;
  }
  .col-xl-10 {
    max-width: 83.3333%;
    flex: 0 0 83.3333%;
  }
  .col-xl-11 {
    max-width: 91.6667%;
    flex: 0 0 91.6667%;
  }
  .col-xl-12 {
    max-width: 100%;
    flex: 0 0 100%;
  }
}
@media (min-width: 1200px) {
  .col-xl-5col {
    position: relative;
    flex: 0 0 20%;
    max-width: 20%;
    padding-right: 10px;
    padding-left: 10px;
  }
  .col-xl-5col2 {
    position: relative;
    flex: 0 0 40%;
    max-width: 40%;
    padding-right: 10px;
    padding-left: 10px;
  }
  .col-xl-5col3 {
    position: relative;
    flex: 0 0 60%;
    max-width: 60%;
    padding-right: 10px;
    padding-left: 10px;
  }
  .col-xl-5col4 {
    position: relative;
    flex: 0 0 80%;
    max-width: 80%;
    padding-right: 10px;
    padding-left: 10px;
  }
}
@media (min-width: 1600px) {
  .col-xxl-10 {
    flex: 0 0 83.3333%;
    max-width: 83.3333%;
  }
  .col-xxl-2 {
    flex: 0 0 16.6666%;
    max-width: 16.6666%;
  }
}
.order-first {
  order: -1;
}
.order-last {
  order: 9;
}
@media (min-width: 576px) {
  .order-sm-auto {
    order: 0;
  }
  .order-sm-first {
    order: -1;
  }
  .order-sm-last {
    order: 9;
  }
}
@media (min-width: 768px) {
  .order-md-auto {
    order: 0;
  }
  .order-md-first {
    order: -1;
  }
  .order-md-last {
    order: 9;
  }
}
@media (min-width: 992px) {
  .order-lg-auto {
    order: 0;
  }
  .order-lg-first {
    order: -1;
  }
  .order-lg-last {
    order: 9;
  }
}
.grid {
  margin: -1rem;
}
.grid .banner,
.grid .banner img,
.grid .category,
.grid .category > a,
.grid .category img,
.grid figure {
  height: 100%;
}
.grid img {
  object-fit: cover;
}
.grid .grid-item {
  padding: 1rem;
  transform: translate3d(0, 0, 0);
}
.grid.gutter-sm {
  margin: -0.5rem;
}
.grid.gutter-sm .grid-item {
  padding: 0.5rem;
}
.grid.gutter-no {
  margin: 0;
}
.grid.gutter-no .grid-item {
  padding: 0;
}
.grid:after {
  content: "";
  display: block;
  clear: both;
}
.grid.grid-float {
  display: block !important;
}
.grid.grid-float .grid-item {
  float: left;
}
.mt-0 {
  margin-top: 0rem !important;
}
.mb-0 {
  margin-bottom: 0rem !important;
}
.pt-0 {
  padding-top: 0rem !important;
}
.pb-0 {
  padding-bottom: 0rem !important;
}
.mt-1 {
  margin-top: 0.5rem !important;
}
.mb-1 {
  margin-bottom: 0.5rem !important;
}
.pt-1 {
  padding-top: 0.5rem !important;
}
.pb-1 {
  padding-bottom: 0.5rem !important;
}
.mt-2 {
  margin-top: 1rem !important;
}
.mb-2 {
  margin-bottom: 1rem !important;
}
.pt-2 {
  padding-top: 1rem !important;
}
.pb-2 {
  padding-bottom: 1rem !important;
}
.mt-3 {
  margin-top: 1.5rem !important;
}
.mb-3 {
  margin-bottom: 1.5rem !important;
}
.pt-3 {
  padding-top: 1.5rem !important;
}
.pb-3 {
  padding-bottom: 1.5rem !important;
}
.mt-4 {
  margin-top: 2rem !important;
}
.mb-4 {
  margin-bottom: 2rem !important;
}
.pt-4 {
  padding-top: 2rem !important;
}
.pb-4 {
  padding-bottom: 2rem !important;
}
.mt-5 {
  margin-top: 2.5rem !important;
}
.mb-5 {
  margin-bottom: 2.5rem !important;
}
.pt-5 {
  padding-top: 2.5rem !important;
}
.pb-5 {
  padding-bottom: 2.5rem !important;
}
.mt-6 {
  margin-top: 3rem !important;
}
.mb-6 {
  margin-bottom: 3rem !important;
}
.pt-6 {
  padding-top: 3rem !important;
}
.pb-6 {
  padding-bottom: 3rem !important;
}
.mt-7 {
  margin-top: 3.5rem !important;
}
.mb-7 {
  margin-bottom: 3.5rem !important;
}
.pt-7 {
  padding-top: 3.5rem !important;
}
.pb-7 {
  padding-bottom: 3.5rem !important;
}
.mt-8 {
  margin-top: 4rem !important;
}
.mb-8 {
  margin-bottom: 4rem !important;
}
.pt-8 {
  padding-top: 4rem !important;
}
.pb-8 {
  padding-bottom: 4rem !important;
}
.mt-9 {
  margin-top: 4.5rem !important;
}
.mb-9 {
  margin-bottom: 4.5rem !important;
}
.pt-9 {
  padding-top: 4.5rem !important;
}
.pb-9 {
  padding-bottom: 4.5rem !important;
}
.mt-10 {
  margin-top: 5rem !important;
}
.mb-10 {
  margin-bottom: 5rem !important;
}
.pt-10 {
  padding-top: 5rem !important;
}
.pb-10 {
  padding-bottom: 5rem !important;
}
.ml-0 {
  margin-left: 0rem !important;
}
.mr-0 {
  margin-right: 0rem !important;
}
.pl-0 {
  padding-left: 0rem !important;
}
.pr-0 {
  padding-right: 0rem !important;
}
.ml-1 {
  margin-left: 0.5rem !important;
}
.mr-1 {
  margin-right: 0.5rem !important;
}
.pl-1 {
  padding-left: 0.5rem !important;
}
.pr-1 {
  padding-right: 0.5rem !important;
}
.ml-2 {
  margin-left: 1rem !important;
}
.mr-2 {
  margin-right: 1rem !important;
}
.pl-2 {
  padding-left: 1rem !important;
}
.pr-2 {
  padding-right: 1rem !important;
}
.ml-3 {
  margin-left: 1.5rem !important;
}
.mr-3 {
  margin-right: 1.5rem !important;
}
.pl-3 {
  padding-left: 1.5rem !important;
}
.pr-3 {
  padding-right: 1.5rem !important;
}
.ml-4 {
  margin-left: 2rem !important;
}
.mr-4 {
  margin-right: 2rem !important;
}
.pl-4 {
  padding-left: 2rem !important;
}
.pr-4 {
  padding-right: 2rem !important;
}
.ml-5 {
  margin-left: 2.5rem !important;
}
.mr-5 {
  margin-right: 2.5rem !important;
}
.pl-5 {
  padding-left: 2.5rem !important;
}
.pr-5 {
  padding-right: 2.5rem !important;
}
.ml-6 {
  margin-left: 3rem !important;
}
.mr-6 {
  margin-right: 3rem !important;
}
.pl-6 {
  padding-left: 3rem !important;
}
.pr-6 {
  padding-right: 3rem !important;
}
.ml-7 {
  margin-left: 3.5rem !important;
}
.mr-7 {
  margin-right: 3.5rem !important;
}
.pl-7 {
  padding-left: 3.5rem !important;
}
.pr-7 {
  padding-right: 3.5rem !important;
}
.ml-8 {
  margin-left: 4rem !important;
}
.mr-8 {
  margin-right: 4rem !important;
}
.pl-8 {
  padding-left: 4rem !important;
}
.pr-8 {
  padding-right: 4rem !important;
}
.ml-9 {
  margin-left: 4.5rem !important;
}
.mr-9 {
  margin-right: 4.5rem !important;
}
.pl-9 {
  padding-left: 4.5rem !important;
}
.pr-9 {
  padding-right: 4.5rem !important;
}
.ml-10 {
  margin-left: 5rem !important;
}
.mr-10 {
  margin-right: 5rem !important;
}
.pl-10 {
  padding-left: 5rem !important;
}
.pr-10 {
  padding-right: 5rem !important;
}
.ml-auto {
  margin-left: auto !important;
}
.mr-auto {
  margin-right: auto !important;
}
.mx-auto {
  margin-left: auto !important;
  margin-right: auto !important;
}
@media (min-width: 576px) {
  .mt-sm-0 {
    margin-top: 0rem !important;
  }
  .mt-sm-1 {
    margin-top: 0.5rem !important;
  }
  .mt-sm-2 {
    margin-top: 1rem !important;
  }
  .mt-sm-3 {
    margin-top: 1.5rem !important;
  }
  .mt-sm-4 {
    margin-top: 2rem !important;
  }
  .mt-sm-5 {
    margin-top: 2.5rem !important;
  }
  .mt-sm-6 {
    margin-top: 3rem !important;
  }
  .mt-sm-7 {
    margin-top: 3.5rem !important;
  }
  .mt-sm-8 {
    margin-top: 4rem !important;
  }
  .mt-sm-9 {
    margin-top: 4.5rem !important;
  }
  .mt-sm-10 {
    margin-top: 5rem !important;
  }
  .mb-sm-0 {
    margin-bottom: 0rem !important;
  }
  .mb-sm-1 {
    margin-bottom: 0.5rem !important;
  }
  .mb-sm-2 {
    margin-bottom: 1rem !important;
  }
  .mb-sm-3 {
    margin-bottom: 1.5rem !important;
  }
  .mb-sm-4 {
    margin-bottom: 2rem !important;
  }
  .mb-sm-5 {
    margin-bottom: 2.5rem !important;
  }
  .mb-sm-6 {
    margin-bottom: 3rem !important;
  }
  .mb-sm-7 {
    margin-bottom: 3.5rem !important;
  }
  .mb-sm-8 {
    margin-bottom: 4rem !important;
  }
  .mb-sm-9 {
    margin-bottom: 4.5rem !important;
  }
  .mb-sm-10 {
    margin-bottom: 5rem !important;
  }
  .pt-sm-0 {
    padding-top: 0rem !important;
  }
  .pt-sm-1 {
    padding-top: 0.5rem !important;
  }
  .pt-sm-2 {
    padding-top: 1rem !important;
  }
  .pt-sm-3 {
    padding-top: 1.5rem !important;
  }
  .pt-sm-4 {
    padding-top: 2rem !important;
  }
  .pt-sm-5 {
    padding-top: 2.5rem !important;
  }
  .pt-sm-6 {
    padding-top: 3rem !important;
  }
  .pt-sm-7 {
    padding-top: 3.5rem !important;
  }
  .pt-sm-8 {
    padding-top: 4rem !important;
  }
  .pt-sm-9 {
    padding-top: 4.5rem !important;
  }
  .pt-sm-10 {
    padding-top: 5rem !important;
  }
  .pb-sm-0 {
    padding-bottom: 0rem !important;
  }
  .pb-sm-1 {
    padding-bottom: 0.5rem !important;
  }
  .pb-sm-2 {
    padding-bottom: 1rem !important;
  }
  .pb-sm-3 {
    padding-bottom: 1.5rem !important;
  }
  .pb-sm-4 {
    padding-bottom: 2rem !important;
  }
  .pb-sm-5 {
    padding-bottom: 2.5rem !important;
  }
  .pb-sm-6 {
    padding-bottom: 3rem !important;
  }
  .pb-sm-7 {
    padding-bottom: 3.5rem !important;
  }
  .pb-sm-8 {
    padding-bottom: 4rem !important;
  }
  .pb-sm-9 {
    padding-bottom: 4.5rem !important;
  }
  .pb-sm-10 {
    padding-bottom: 5rem !important;
  }
}
@media (min-width: 768px) {
  .mt-md-0 {
    margin-top: 0rem !important;
  }
  .mt-md-1 {
    margin-top: 0.5rem !important;
  }
  .mt-md-2 {
    margin-top: 1rem !important;
  }
  .mt-md-3 {
    margin-top: 1.5rem !important;
  }
  .mt-md-4 {
    margin-top: 2rem !important;
  }
  .mt-md-5 {
    margin-top: 2.5rem !important;
  }
  .mt-md-6 {
    margin-top: 3rem !important;
  }
  .mt-md-7 {
    margin-top: 3.5rem !important;
  }
  .mt-md-8 {
    margin-top: 4rem !important;
  }
  .mt-md-9 {
    margin-top: 4.5rem !important;
  }
  .mt-md-10 {
    margin-top: 5rem !important;
  }
  .mb-md-0 {
    margin-bottom: 0rem !important;
  }
  .mb-md-1 {
    margin-bottom: 0.5rem !important;
  }
  .mb-md-2 {
    margin-bottom: 1rem !important;
  }
  .mb-md-3 {
    margin-bottom: 1.5rem !important;
  }
  .mb-md-4 {
    margin-bottom: 2rem !important;
  }
  .mb-md-5 {
    margin-bottom: 2.5rem !important;
  }
  .mb-md-6 {
    margin-bottom: 3rem !important;
  }
  .mb-md-7 {
    margin-bottom: 3.5rem !important;
  }
  .mb-md-8 {
    margin-bottom: 4rem !important;
  }
  .mb-md-9 {
    margin-bottom: 4.5rem !important;
  }
  .mb-md-10 {
    margin-bottom: 5rem !important;
  }
  .pt-md-0 {
    padding-top: 0rem !important;
  }
  .pt-md-1 {
    padding-top: 0.5rem !important;
  }
  .pt-md-2 {
    padding-top: 1rem !important;
  }
  .pt-md-3 {
    padding-top: 1.5rem !important;
  }
  .pt-md-4 {
    padding-top: 2rem !important;
  }
  .pt-md-5 {
    padding-top: 2.5rem !important;
  }
  .pt-md-6 {
    padding-top: 3rem !important;
  }
  .pt-md-7 {
    padding-top: 3.5rem !important;
  }
  .pt-md-8 {
    padding-top: 4rem !important;
  }
  .pt-md-9 {
    padding-top: 4.5rem !important;
  }
  .pt-md-10 {
    padding-top: 5rem !important;
  }
  .pb-md-0 {
    padding-bottom: 0rem !important;
  }
  .pb-md-1 {
    padding-bottom: 0.5rem !important;
  }
  .pb-md-2 {
    padding-bottom: 1rem !important;
  }
  .pb-md-3 {
    padding-bottom: 1.5rem !important;
  }
  .pb-md-4 {
    padding-bottom: 2rem !important;
  }
  .pb-md-5 {
    padding-bottom: 2.5rem !important;
  }
  .pb-md-6 {
    padding-bottom: 0rem !important;
  }
  .pb-md-7 {
    padding-bottom: 3.5rem !important;
  }
  .pb-md-8 {
    padding-bottom: 4rem !important;
  }
  .pb-md-9 {
    padding-bottom: 4.5rem !important;
  }
  .pb-md-10 {
    padding-bottom: 5rem !important;
  }
}
@media (min-width: 992px) {
  .mt-lg-0 {
    margin-top: 0rem !important;
  }
  .mt-lg-1 {
    margin-top: 0.5rem !important;
  }
  .mt-lg-2 {
    margin-top: 1rem !important;
  }
  .mt-lg-3 {
    margin-top: 1.5rem !important;
  }
  .mt-lg-4 {
    margin-top: 2rem !important;
  }
  .mt-lg-5 {
    margin-top: 2.5rem !important;
  }
  .mt-lg-6 {
    margin-top: 3rem !important;
  }
  .mt-lg-7 {
    margin-top: 3.5rem !important;
  }
  .mt-lg-8 {
    margin-top: 4rem !important;
  }
  .mt-lg-9 {
    margin-top: 4.5rem !important;
  }
  .mt-lg-10 {
    margin-top: 5rem !important;
  }
  .mb-lg-0 {
    margin-bottom: 0rem !important;
  }
  .mb-lg-1 {
    margin-bottom: 0.5rem !important;
  }
  .mb-lg-2 {
    margin-bottom: 1rem !important;
  }
  .mb-lg-3 {
    margin-bottom: 1.5rem !important;
  }
  .mb-lg-4 {
    margin-bottom: 2rem !important;
  }
  .mb-lg-5 {
    margin-bottom: 2.5rem !important;
  }
  .mb-lg-6 {
    margin-bottom: 3rem !important;
  }
  .mb-lg-7 {
    margin-bottom: 3.5rem !important;
  }
  .mb-lg-8 {
    margin-bottom: 4rem !important;
  }
  .mb-lg-9 {
    margin-bottom: 4.5rem !important;
  }
  .mb-lg-10 {
    margin-bottom: 5rem !important;
  }
  .pt-lg-0 {
    padding-top: 0rem !important;
  }
  .pt-lg-1 {
    padding-top: 0.5rem !important;
  }
  .pt-lg-2 {
    padding-top: 1rem !important;
  }
  .pt-lg-3 {
    padding-top: 1.5rem !important;
  }
  .pt-lg-4 {
    padding-top: 2rem !important;
  }
  .pt-lg-5 {
    padding-top: 2.5rem !important;
  }
  .pt-lg-6 {
    padding-top: 3rem !important;
  }
  .pt-lg-7 {
    padding-top: 3.5rem !important;
  }
  .pt-lg-8 {
    padding-top: 4rem !important;
  }
  .pt-lg-9 {
    padding-top: 4.5rem !important;
  }
  .pt-lg-10 {
    padding-top: 5rem !important;
  }
  .pb-lg-0 {
    padding-bottom: 0rem !important;
  }
  .pb-lg-1 {
    padding-bottom: 0.5rem !important;
  }
  .pb-lg-2 {
    padding-bottom: 1rem !important;
  }
  .pb-lg-3 {
    padding-bottom: 1.5rem !important;
  }
  .pb-lg-4 {
    padding-bottom: 2rem !important;
  }
  .pb-lg-5 {
    padding-bottom: 2.5rem !important;
  }
  .pb-lg-6 {
    padding-bottom: 3rem !important;
  }
  .pb-lg-7 {
    padding-bottom: 3.5rem !important;
  }
  .pb-lg-8 {
    padding-bottom: 4rem !important;
  }
  .pb-lg-9 {
    padding-bottom: 4.5rem !important;
  }
  .pb-lg-10 {
    padding-bottom: 5rem !important;
  }
  .ml-lg-0 {
    margin-left: 0rem !important;
  }
  .mr-lg-0 {
    margin-right: 0rem !important;
  }
  .pl-lg-0 {
    padding-left: 0rem !important;
  }
  .pr-lg-0 {
    padding-right: 0rem !important;
  }
  .ml-lg-1 {
    margin-left: 0.5rem !important;
  }
  .mr-lg-1 {
    margin-right: 0.5rem !important;
  }
  .pl-lg-1 {
    padding-left: 0.5rem !important;
  }
  .pr-lg-1 {
    padding-right: 0.5rem !important;
  }
  .ml-lg-2 {
    margin-left: 1rem !important;
  }
  .mr-lg-2 {
    margin-right: 1rem !important;
  }
  .pl-lg-2 {
    padding-left: 1rem !important;
  }
  .pr-lg-2 {
    padding-right: 1rem !important;
  }
  .ml-lg-3 {
    margin-left: 1.5rem !important;
  }
  .mr-lg-3 {
    margin-right: 1.5rem !important;
  }
  .pl-lg-3 {
    padding-left: 1.5rem !important;
  }
  .pr-lg-3 {
    padding-right: 1.5rem !important;
  }
  .ml-lg-4 {
    margin-left: 2rem !important;
  }
  .mr-lg-4 {
    margin-right: 2rem !important;
  }
  .pl-lg-4 {
    padding-left: 2rem !important;
  }
  .pr-lg-4 {
    padding-right: 2rem !important;
  }
  .ml-lg-5 {
    margin-left: 2.5rem !important;
  }
  .mr-lg-5 {
    margin-right: 2.5rem !important;
  }
  .pl-lg-5 {
    padding-left: 2.5rem !important;
  }
  .pr-lg-5 {
    padding-right: 2.5rem !important;
  }
  .ml-lg-6 {
    margin-left: 3rem !important;
  }
  .mr-lg-6 {
    margin-right: 3rem !important;
  }
  .pl-lg-6 {
    padding-left: 3rem !important;
  }
  .pr-lg-6 {
    padding-right: 3rem !important;
  }
  .ml-lg-7 {
    margin-left: 3.5rem !important;
  }
  .mr-lg-7 {
    margin-right: 3.5rem !important;
  }
  .pl-lg-7 {
    padding-left: 3.5rem !important;
  }
  .pr-lg-7 {
    padding-right: 3.5rem !important;
  }
  .ml-lg-8 {
    margin-left: 4rem !important;
  }
  .mr-lg-8 {
    margin-right: 4rem !important;
  }
  .pl-lg-8 {
    padding-left: 4rem !important;
  }
  .pr-lg-8 {
    padding-right: 4rem !important;
  }
  .ml-lg-9 {
    margin-left: 4.5rem !important;
  }
  .mr-lg-9 {
    margin-right: 4.5rem !important;
  }
  .pl-lg-9 {
    padding-left: 4.5rem !important;
  }
  .pr-lg-9 {
    padding-right: 4.5rem !important;
  }
  .ml-lg-10 {
    margin-left: 5rem !important;
  }
  .mr-lg-10 {
    margin-right: 5rem !important;
  }
  .pl-lg-10 {
    padding-left: 5rem !important;
  }
  .pr-lg-10 {
    padding-right: 5rem !important;
  }
}
@media (min-width: 1200px) {
  .mt-xl-0 {
    margin-top: 0rem !important;
  }
  .mt-xl-1 {
    margin-top: 0.5rem !important;
  }
  .mt-xl-2 {
    margin-top: 1rem !important;
  }
  .mt-xl-3 {
    margin-top: 1.5rem !important;
  }
  .mt-xl-4 {
    margin-top: 2rem !important;
  }
  .mt-xl-5 {
    margin-top: 2.5rem !important;
  }
  .mt-xl-6 {
    margin-top: 3rem !important;
  }
  .mt-xl-7 {
    margin-top: 3.5rem !important;
  }
  .mt-xl-8 {
    margin-top: 4rem !important;
  }
  .mt-xl-9 {
    margin-top: 4.5rem !important;
  }
  .mt-xl-10 {
    margin-top: 5rem !important;
  }
  .mb-xl-0 {
    margin-bottom: 0rem !important;
  }
  .mb-xl-1 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xl-2 {
    margin-bottom: 1rem !important;
  }
  .mb-xl-3 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xl-4 {
    margin-bottom: 2rem !important;
  }
  .mb-xl-5 {
    margin-bottom: 2.5rem !important;
  }
  .mb-xl-6 {
    margin-bottom: 3rem !important;
  }
  .mb-xl-7 {
    margin-bottom: 3.5rem !important;
  }
  .mb-xl-8 {
    margin-bottom: 4rem !important;
  }
  .mb-xl-9 {
    margin-bottom: 4.5rem !important;
  }
  .mb-xl-10 {
    margin-bottom: 5rem !important;
  }
}
@media (min-width: 992px) {
  .ml-lg-auto {
    margin-left: auto !important;
  }
  .mr-lg-auto {
    margin-right: auto !important;
  }
  .mx-lg-auto {
    margin-left: auto !important;
    margin-right: auto !important;
  }
}
@media (min-width: 768px) {
  .ml-md-auto {
    margin-left: auto !important;
  }
  .mr-md-auto {
    margin-right: auto !important;
  }
  .mx-md-auto {
    margin-left: auto !important;
    margin-right: auto !important;
  }
}
.appear-animate {
  visibility: hidden;
  opacity: 0;
}
.appear-animation-visible {
  visibility: visible;
  opacity: 1;
}
@keyframes fixedTopContent {
  0% {
    transform: translateY(-100%);
    transform-origin: center top 0px;
  }
  to {
    transform: translateY(0);
  }
}
@keyframes fixedBottomContent {
  0% {
    transform: translateY(100%);
    transform-origin: center top 0px;
  }
  to {
    transform: translateY(0);
  }
}
@keyframes showMsgFirst {
  0% {
    transform: translateX(0%);
  }
  to {
    transform: translateX(-100%);
  }
}
@keyframes showMsg {
  0% {
    transform: translateX(100%);
  }
  to {
    transform: translateX(-100%);
  }
}
@keyframes navItemArrow {
  0% {
    position: relative;
    left: -3px;
  }
  50% {
    position: relative;
    left: 2px;
  }
  to {
    position: relative;
    left: -3px;
  }
}
@keyframes fadeInLeftShorter {
  0% {
    opacity: 0;
    transform: translate(50px, 0);
    transform-origin: 0, 0;
  }
  to {
    opacity: 1;
    transform: none;
  }
}
.fadeInLeftShorter {
  animation-name: fadeInLeftShorter;
}
@keyframes fadeInRightShorter {
  0% {
    opacity: 0;
    transform: translate(-50px, 0);
    transform-origin: 0, 0;
  }
  to {
    opacity: 1;
    transform: none;
  }
}
.fadeInRightShorter {
  animation-name: fadeInRightShorter;
}
@keyframes fadeInUpShorter {
  0% {
    opacity: 0;
    transform: translate(0, 50px);
    transform-origin: 0 0;
  }
  to {
    opacity: 1;
    transform: none;
  }
}
.fadeInUpShorter {
  animation-name: fadeInUpShorter;
}
@keyframes fadeInDownShorter {
  0% {
    opacity: 0;
    transform: translate(0, -50px);
    transform-origin: 0 0;
  }
  to {
    opacity: 1;
    transform: none;
  }
}
.fadeInDownShorter {
  animation-name: fadeInDownShorter;
}
@keyframes flipInY {
  0% {
    animation-timing-function: ease-in;
    opacity: 0;
    transform: perspective(400px) rotateY(90deg);
  }
  to {
    transform: perspective(400px);
  }
}
.flipInY {
  animation-name: flipInY;
}
@keyframes flipOutY {
  0% {
    animation-timing-function: ease-out;
    transform: perspective(400px);
  }
  to {
    opacity: 0;
    transform: perspective(400px) rotateY(90deg);
  }
}
@keyframes blurIn {
  0% {
    opacity: 0;
    filter: blur(20px);
    transform: scale(1.2);
  }
  to {
    opacity: 1;
    filter: blur(0);
    transform: none;
  }
}
.blurIn {
  animation-name: blurIn;
}
@keyframes grayOut {
  0% {
    opacity: 1;
    filter: grayscale(0);
  }
  15% {
    filter: grayscale(100%);
  }
  to {
    opacity: 0;
    filter: grayscale(100%);
  }
}
.grayOut {
  animation-name: grayOut;
}
@keyframes brightIn {
  0% {
    animation-timing-function: ease-in;
    filter: brightness(0%);
  }
  to {
    filter: brightness(100%);
  }
}
.brightIn {
  animation-name: brightIn;
}
@keyframes zoomIn {
  0% {
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    opacity: 0;
    transform: scale3d(0.3, 0.3, 0.3);
  }
  50% {
    opacity: 1;
  }
}
@keyframes slideX {
  0% {
    transform: none;
    left: 100%;
  }
  to {
    transform: translateX(-100%);
    left: 0;
  }
}
.banner {
  position: relative;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  font-size: 1rem;
  overflow: hidden;
}
.banner figure img {
  display: block;
  width: 100%;
}
.banner .banner-content {
  position: relative;
  z-index: 1;
}
.banner .banner-content a:not(.btn) {
  color: inherit;
}
.banner .banner-content a:not(.btn).active,
.banner .banner-content a:not(.btn):hover {
  color: #ab8e66;
}
.banner .banner-info {
  line-height: 1.45;
  margin-bottom: 1rem;
}
.banner-fixed > .banner-content,
.banner-fixed > .container,
.banner-fixed > .container-fluid {
  position: absolute;
  z-index: 1;
}
.banner-fixed > .container,
.banner-fixed > .container-fluid {
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
}
.banner-fixed.content-middle .banner-content {
  transform: translate(-50%, -50%);
}
.banner-fixed.content-center .banner-text {
  text-align: center;
  left: 50%;
  transform: translateX(-50%);
}
.banner-fixed.content-center.content-middle .banner-content {
  transform: translate(-50%, -50%);
}
.banner-background {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.banner-newsletter-2 .banner-content {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.banner-newsletter-2 {
  font-size: 1rem;
}
.banner-newsletter-2 .banner-content {
  padding: 0 1.5rem;
  max-width: 49.8rem;
  min-width: 30rem;
}
.banner-newsletter-2 .banner-title {
  font-size: 3em;
  margin-bottom: 0.5rem;
}
.banner-newsletter-2 p {
  font-size: 1.3em;
  margin-bottom: 3.5rem;
}
.banner-newsletter-2 .form-control {
  font-size: 1.4em;
  border: 0;
  border-bottom: 2px solid #88817b;
  max-width: 37.7rem;
  margin: 0 auto 2rem auto;
  text-align: center;
}
.banner-newsletter-2 img {
  min-height: 33rem;
}
.banner-newsletter-2 .btn {
  height: 4.8rem;
}
.banner-newsletter-2 .input-wrapper {
  max-width: 38rem;
  width: 100%;
}
.banner-newsletter-4 {
  background-color: #eeeeee;
}
.banner-newsletter-4 .banner-content {
  margin: 1rem;
  padding: 3.5rem 2rem 1rem;
}
.banner-newsletter-4 input {
  border: 2px solid #cccccc;
}
.banner-newsletter-5 {
  background-color: #cccccc;
  padding: 4rem;
}
.banner-newsletter-5 .banner-content {
  max-width: 56rem;
  padding: 1.5rem 1.5rem 2rem;
  margin-left: auto;
  margin-right: auto;
}
.banner-newsletter-5 .banner-title {
  margin-bottom: 0.5rem;
}
.banner-newsletter-5 p {
  font-size: 1.3rem;
  text-align: center;
  line-height: 1.8;
  max-width: 49rem;
  margin-bottom: 2.5rem;
}
.banner-newsletter-5 input.form-control {
  background-color: rgba(255, 255, 255, 0.3);
  border-color: transparent;
}
.banner-border-gradient:before {
  content: "";
  display: block;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 69%;
  padding-top: 30%;
  background: linear-gradient(
    30deg,
    #999999 0%,
    #999999 50%,
    transparent 50.1%
  );
}

#countdown
{
border:2px solid;
font-size:40px;
border-color:#ab8e66;
text-align:center;
font-family:sans-serif;
color:#ab8e66;
border-radius:3px;
letter-spacing: 5px;
background-size:cover;
margin-left: 600px;
font-weight:bold;




}

#how-it-works{
text-align:center;
margin-bottom:50px;
margin-top:30px;
color:#333;
font-family: sans-serif;







}

#countdown-title{

color: #000000;
font-family:poppins;
font-weight:normal;
padding-left:600px;
}

#countdown-subtitle{

  color: #333;
  font-family:sans-serif;
 

 
  padding-left:600px;
  
  }

.banner-divider {
  width: 4rem;
  height: 0.4rem;
  border: 0;
  margin-left: 0;
  margin-bottom: 1.2rem;
}
.banner-video .btn-play-video {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 6rem;
  height: 6rem;
  background-color: #fff;
  border-radius: 50%;
  z-index: 1000;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  transition: background-color 0.3s;
}
.banner-video .btn-play-video:hover {
  background-color: #333;
}
.banner-video .btn-play-video:hover:before {
  color: #fff;
}
.banner-video .btn-play-video:before {
  content: "";
  position: absolute;
  margin-left: 0.2rem;
  font-family: "Font Awesome 5 Free";
  font-size: 2.8rem;
  font-weight: 600;
  color: #333;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  transition: color 0.3s;
  z-index: 1;
}
.banner-video video {
  display: none;
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.banner-video.paused .btn-play-video,
.banner-video.playing .btn-play-video {
  visibility: hidden;
  opacity: 0;
  transition: visibility 0.4s, opacity 0.4s;
}
.banner-video.paused:hover .btn-play-video,
.banner-video.playing:hover .btn-play-video {
  visibility: visible;
  opacity: 1;
}
.banner-video.paused video,
.banner-video.playing video {
  display: block;
}
.banner-video.playing .btn-play-video:before {
  content: "";
}
@media (max-width: 1199px) {
  .widget-banner .banner-title {
    margin-bottom: 4rem;
  }
}
@media (max-width: 767px) {
  .banner-newsletter-2 {
    font-size: 0.8rem;
  }
}
@media (max-width: 479px) {
  .banner-newsletter-4 .input-wrapper,
  .banner-newsletter-5 .input-wrapper {
    display: block;
    text-align: center;
    height: auto;
  }
  .banner-newsletter-4 .input-wrapper .btn,
  .banner-newsletter-5 .input-wrapper .btn {
    margin: 2rem;
  }
  .banner-newsletter-4 .input-wrapper-round .btn,
  .banner-newsletter-4 .input-wrapper-round .form-control {
    border-radius: 3rem;
  }
}



/* 4. Banner */
.banner{overflow: hidden;}
.banner:hover img{transform: scale(1.05)}
.banner-trend {
	position: absolute;
	bottom: 45px;
	left: 70px;
	right: 10px;
	background: #fff;
	padding: 45px;
   
}
.banner-trend span {
	font-size: 14px;
	letter-spacing: 2px;
	text-transform: uppercase;
	font-weight: 500;
	color: #fff;
	display: block;
	margin-bottom: 10px;
}
.banner-trend h2 {
	font-size: 30px;
}
.banner-trend h2 a:hover {
	color:#A9A9A9;
}
.discover-link a {
	color: #ab8e66;
	text-transform: uppercase;
	font-weight: 500;
	letter-spacing: 2px;
}
.discover-link a:hover {
	color: #A9A9A9;
}
.discover-link {
	position: absolute;
	right: 45px;
	top: 50%;
	transform: translateY(-50%);
}
.banner-look {
	position: absolute;
	top: 40px;
	right: 40px;
	background: #fff;
	padding: 40px;
	border-top: 3px solid #fff;
	width: 410px;
}
.banner-look span {
	font-size: 14px;
	letter-spacing: 2px;
	text-transform: uppercase;
	font-weight: 500;
	color: #ab8e66;
	display: block;
	margin-bottom: 10px;
}
.banner-look h2 {
	font-size: 30px;
	margin-bottom: 15px;
}
.banner-look img {
	display: block;
	margin-bottom: 15px;
}
.banner-look p {
	margin-bottom: 20px;
}

.btn {
  display: inline-block;
  border: 2px solid #ccc;
  background-color: #fff;
  color: #666;
  outline: 0;
  border-radius: 0;
  font-family: inherit;
  font-weight: 600;
  font-size: 1.4rem;
  padding: 0.93em 1.98em;
  line-height: 1;
  text-transform: uppercase;
  text-align: center;
  transition: color 0.3s, border-color 0.3s, background-color 0.3s,
    box-shadow 0.3s;
  white-space: nowrap;
  cursor: pointer;
}
.btn:active,
.btn:focus,
.btn:hover {
  color: #666;
  border-color: gainsboro;
  background-color: gainsboro;
}
.btn i {
  display: inline-block;
  vertical-align: middle;
  font-size: 1.6rem;
  line-height: 0;
  margin-bottom: 0.2rem;
}
.btn i:before {
  margin: 0;
}
.btn.btn-icon-right i {
  margin-right: 0;
  margin-left: 0.6rem;
}
.btn.btn-icon-left i {
  margin-right: 0.6rem;
  margin-left: 0;
}
.btn svg {
  margin-right: 0.5rem;
  stroke: #fff;
  stroke-width: 3px;
  fill: #fff;
  transition: stroke 0.4s, fill 0.4s;
}
.btn-outline {
  background-color: transparent;
  border: 2px solid;
}
.btn-outline.light {
  padding: 0.996em 2em;
  border: 1px solid;
}
.btn-reveal-left i {
  opacity: 0;
  margin-left: -1em;
  transform: translate(0.5em);
  margin-right: 0;
  transition: transform 0.3s, opacity 0.3s, margin 0.3s;
}
.btn-reveal-left:active i,
.btn-reveal-left:focus i,
.btn-reveal-left:hover i {
  opacity: 1;
  margin-left: 0;
  transform: translateX(0);
  margin-right: 0.7rem;
}
.btn-reveal-right i {
  opacity: 0;
  margin-right: -1em;
  transform: translateX(-0.5em);
  margin-left: 0;
  transition: transform 0.3s, opacity 0.3s, margin 0.3s;
}
.btn-reveal-right:active i,
.btn-reveal-right:focus i,
.btn-reveal-right:hover i {
  opacity: 1;
  margin-right: 0;
  transform: translateX(0);
  margin-right: 0.7rem;
}
.btn-simple:after {
  display: block;
  margin-top: 3px;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
  border-top: 3px solid;
  transition: transform 0.3s;
  content: "";
}
.btn-link {
  padding: 0;
  border: 0;
  background: transparent;
}
@media (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .btn-link {
    overflow: visible;
  }
}
.btn-link:not(.btn-underline) {
  padding-bottom: 3px;
}
.btn-link.active,
.btn-link:focus,
.btn-link:hover {
  background: transparent;
}
.btn-shadow {
  box-shadow: 0 5px 15px 0px rgba(0, 0, 0, 0.1);
}
.btn-shadow:active,
.btn-shadow:focus,
.btn-shadow:hover {
  box-shadow: 0 17px 20px -7px rgba(0, 0, 0, 0.2);
}
.btn-underline:active:after,
.btn-underline:focus:after,
.btn-underline:hover:after {
  transform: scaleX(1);
}
.btn-underline:after {
  display: block;
  margin-top: 3px;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
  border-top: 3px solid;
  transform: scaleX(0);
  transition: transform 0.3s;
  content: "";
}
.btn-underline.sm:after {
  width: 46%;
}
.btn-underline.lg:after {
  margin-left: -16.5%;
  margin-right: -16.5%;
  width: 133%;
}
.btn-like {
  font-size: 1.4rem;
  font-weight: 400;
  padding: 0.429em 0.874em;
  border-radius: 3px;
}
.btn-primary {
  color: #fff;
  border-color: #ab8e66;
  background-color: #ab8e66;
}
.btn-primary:active,
.btn-primary:focus,
.btn-primary:hover {
  color: #fff;
  border-color: #62b3ec;
  background-color: #62b3ec;
}
.btn-primary.btn-solid {
  color: #ab8e66;
  border-color: #fff;
  background-color: #fff;
}
.btn-primary.btn-solid:active,
.btn-primary.btn-solid:focus,
.btn-primary.btn-solid:hover {
  border-color: #ab8e66;
  background-color: #ab8e66;
  color: #fff;
}
.btn-primary.btn-outline {
  color: #ab8e66;
  border-color: #ab8e66;
  background-color: transparent;
}
.btn-primary.btn-outline:active,
.btn-primary.btn-outline:focus,
.btn-primary.btn-outline:hover {
  background-color: #ab8e66;
  color: #fff;
}
.btn-primary.btn-link {
  background-color: transparent;
  color: #ab8e66;
  border-color: #ab8e66;
}
.btn-primary.btn-link:active,
.btn-primary.btn-link:focus,
.btn-primary.btn-link:hover {
  color: #ab8e66;
  background-color: transparent;
}
.btn-primary.btn-underline:active,
.btn-primary.btn-underline:focus,
.btn-primary.btn-underline:hover {
  color: #ab8e66;
}
.btn-dark {
  color: #fff;
  border-color: #333;
  background-color: #333;
}
.btn-dark:active,
.btn-dark:focus,
.btn-dark:hover {
  color: #fff;
  border-color: #454545;
  background-color: #454545;
}
.btn-dark.btn-solid {
  color: #333;
  border-color: #fff;
  background-color: #fff;
}
.btn-dark.btn-solid:active,
.btn-dark.btn-solid:focus,
.btn-dark.btn-solid:hover {
  border-color: #333;
  background-color: #333;
  color: #fff;
}
.btn-dark.btn-outline {
  color: #333;
  border-color: #333;
  background-color: transparent;
}
.btn-dark.btn-outline:active,
.btn-dark.btn-outline:focus,
.btn-dark.btn-outline:hover {
  background-color: #333;
  color: #fff;
}
.btn-dark.btn-link {
  background-color: transparent;
  color: #333;
  border-color: #333;
}
.btn-dark.btn-link:active,
.btn-dark.btn-link:focus,
.btn-dark.btn-link:hover {
  color: #333;
  background-color: transparent;
}
.btn-dark.btn-underline:active,
.btn-dark.btn-underline:focus,
.btn-dark.btn-underline:hover {
  color: #333;
}
.btn-dark-light {
  color: #fff;
  border-color: #666;
  background-color: #666;
}
.btn-dark-light:active,
.btn-dark-light:focus,
.btn-dark-light:hover {
  color: #fff;
  border-color: #787878;
  background-color: #787878;
}
.btn-dark-light.btn-solid {
  color: #666;
  border-color: #fff;
  background-color: #fff;
}
.btn-dark-light.btn-solid:active,
.btn-dark-light.btn-solid:focus,
.btn-dark-light.btn-solid:hover {
  border-color: #666;
  background-color: #666;
  color: #fff;
}
.btn-dark-light.btn-outline {
  color: #666;
  border-color: #666;
  background-color: transparent;
}
.btn-dark-light.btn-outline:active,
.btn-dark-light.btn-outline:focus,
.btn-dark-light.btn-outline:hover {
  background-color: #666;
  color: #fff;
}
.btn-dark-light.btn-link {
  background-color: transparent;
  color: #666;
  border-color: #666;
}
.btn-dark-light.btn-link:active,
.btn-dark-light.btn-link:focus,
.btn-dark-light.btn-link:hover {
  color: #666;
  background-color: transparent;
}
.btn-dark-light.btn-underline:active,
.btn-dark-light.btn-underline:focus,
.btn-dark-light.btn-underline:hover {
  color: #666;
}
.btn-white {
  color: #fff;
  border-color: #fff;
  background-color: #fff;
  color: #333;
}
.btn-white:active,
.btn-white:focus,
.btn-white:hover {
  color: #fff;
  border-color: white;
  background-color: white;
}
.btn-white.btn-solid {
  color: #fff;
  border-color: #fff;
  background-color: #fff;
}
.btn-white.btn-solid:active,
.btn-white.btn-solid:focus,
.btn-white.btn-solid:hover {
  border-color: #fff;
  background-color: #fff;
  color: #fff;
}
.btn-white.btn-outline {
  color: #fff;
  border-color: #fff;
  background-color: transparent;
}
.btn-white.btn-outline:active,
.btn-white.btn-outline:focus,
.btn-white.btn-outline:hover {
  background-color: #fff;
  color: #fff;
}
.btn-white.btn-link {
  background-color: transparent;
  color: #333;
  border-color: #fff;
}
.btn-white.btn-link:active,
.btn-white.btn-link:focus,
.btn-white.btn-link:hover {
  color: #fff;
  background-color: transparent;
}
.btn-white.btn-underline:active,
.btn-white.btn-underline:focus,
.btn-white.btn-underline:hover {
  color: #333;
}
.btn-white.btn-outline:active,
.btn-white.btn-outline:focus,
.btn-white.btn-outline:hover {
  color: #ab8e66;
  border-color: #fff;
}
.btn-white:active,
.btn-white:focus,
.btn-white:hover {
  color: #fff;
  background-color: #333;
  border-color: #333;
}
.btn-success {
  color: #fff;
  border-color: #799b5a;
  background-color: #799b5a;
}
.btn-success:active,
.btn-success:focus,
.btn-success:hover {
  color: #fff;
  border-color: #8bab6e;
  background-color: #8bab6e;
}
.btn-success.btn-solid {
  color: #799b5a;
  border-color: #fff;
  background-color: #fff;
}
.btn-success.btn-solid:active,
.btn-success.btn-solid:focus,
.btn-success.btn-solid:hover {
  border-color: #799b5a;
  background-color: #799b5a;
  color: #fff;
}
.btn-success.btn-outline {
  color: #799b5a;
  border-color: #799b5a;
  background-color: transparent;
}
.btn-success.btn-outline:active,
.btn-success.btn-outline:focus,
.btn-success.btn-outline:hover {
  background-color: #799b5a;
  color: #fff;
}
.btn-success.btn-link {
  background-color: transparent;
  color: #799b5a;
  border-color: #799b5a;
}
.btn-success.btn-link:active,
.btn-success.btn-link:focus,
.btn-success.btn-link:hover {
  color: #799b5a;
  background-color: transparent;
}
.btn-success.btn-underline:active,
.btn-success.btn-underline:focus,
.btn-success.btn-underline:hover {
  color: #799b5a;
}
.btn-warning {
  color: #fff;
  border-color: #ffa800;
  background-color: #ffa800;
}
.btn-warning:active,
.btn-warning:focus,
.btn-warning:hover {
  color: #fff;
  border-color: #ffb424;
  background-color: #ffb424;
}
.btn-warning.btn-solid {
  color: #ffa800;
  border-color: #fff;
  background-color: #fff;
}
.btn-warning.btn-solid:active,
.btn-warning.btn-solid:focus,
.btn-warning.btn-solid:hover {
  border-color: #ffa800;
  background-color: #ffa800;
  color: #fff;
}
.btn-warning.btn-outline {
  color: #ffa800;
  border-color: #ffa800;
  background-color: transparent;
}
.btn-warning.btn-outline:active,
.btn-warning.btn-outline:focus,
.btn-warning.btn-outline:hover {
  background-color: #ffa800;
  color: #fff;
}
.btn-warning.btn-link {
  background-color: transparent;
  color: #ffa800;
  border-color: #ffa800;
}
.btn-warning.btn-link:active,
.btn-warning.btn-link:focus,
.btn-warning.btn-link:hover {
  color: #ffa800;
  background-color: transparent;
}
.btn-warning.btn-underline:active,
.btn-warning.btn-underline:focus,
.btn-warning.btn-underline:hover {
  color: #ffa800;
}
.btn-secondary {
  color: #fff;
  border-color: #ffb639;
  background-color: #ffb639;
}
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:hover {
  color: #fff;
  border-color: #ffc35d;
  background-color: #ffc35d;
}
.btn-secondary.btn-solid {
  color: #ffb639;
  border-color: #fff;
  background-color: #fff;
}
.btn-secondary.btn-solid:active,
.btn-secondary.btn-solid:focus,
.btn-secondary.btn-solid:hover {
  border-color: #ffb639;
  background-color: #ffb639;
  color: #fff;
}
.btn-secondary.btn-outline {
  color: #ffb639;
  border-color: #ffb639;
  background-color: transparent;
}
.btn-secondary.btn-outline:active,
.btn-secondary.btn-outline:focus,
.btn-secondary.btn-outline:hover {
  background-color: #ffb639;
  color: #fff;
}
.btn-secondary.btn-link {
  background-color: transparent;
  color: #ffb639;
  border-color: #ffb639;
}
.btn-secondary.btn-link:active,
.btn-secondary.btn-link:focus,
.btn-secondary.btn-link:hover {
  color: #ffb639;
  background-color: transparent;
}
.btn-secondary.btn-underline:active,
.btn-secondary.btn-underline:focus,
.btn-secondary.btn-underline:hover {
  color: #ffb639;
}
.btn-error {
  color: #fff;
  border-color: #6d1a17;
  background-color: #6d1a17;
}
.btn-error:active,
.btn-error:focus,
.btn-error:hover {
  color: #fff;
  border-color: #8a211d;
  background-color: #8a211d;
}
.btn-error.btn-solid {
  color: #6d1a17;
  border-color: #fff;
  background-color: #fff;
}
.btn-error.btn-solid:active,
.btn-error.btn-solid:focus,
.btn-error.btn-solid:hover {
  border-color: #6d1a17;
  background-color: #6d1a17;
  color: #fff;
}
.btn-error.btn-outline {
  color: #6d1a17;
  border-color: #6d1a17;
  background-color: transparent;
}
.btn-error.btn-outline:active,
.btn-error.btn-outline:focus,
.btn-error.btn-outline:hover {
  background-color: #6d1a17;
  color: #fff;
}
.btn-error.btn-link {
  background-color: transparent;
  color: #6d1a17;
  border-color: #6d1a17;
}
.btn-error.btn-link:active,
.btn-error.btn-link:focus,
.btn-error.btn-link:hover {
  color: #6d1a17;
  background-color: transparent;
}
.btn-error.btn-underline:active,
.btn-error.btn-underline:focus,
.btn-error.btn-underline:hover {
  color: #6d1a17;
}
.btn-grey {
  color: #fff;
  border-color: #00baa3;
  background-color: #00baa3;
}
.btn-grey:active,
.btn-grey:focus,
.btn-grey:hover {
  color: #fff;
  border-color: #00dec2;
  background-color: #00dec2;
}
.btn-grey.btn-solid {
  color: #00baa3;
  border-color: #fff;
  background-color: #fff;
}
.btn-grey.btn-solid:active,
.btn-grey.btn-solid:focus,
.btn-grey.btn-solid:hover {
  border-color: #00baa3;
  background-color: #00baa3;
  color: #fff;
}
.btn-grey.btn-outline {
  color: #00baa3;
  border-color: #00baa3;
  background-color: transparent;
}
.btn-grey.btn-outline:active,
.btn-grey.btn-outline:focus,
.btn-grey.btn-outline:hover {
  background-color: #00baa3;
  color: #fff;
}
.btn-grey.btn-link {
  background-color: transparent;
  color: #00baa3;
  border-color: #00baa3;
}
.btn-grey.btn-link:active,
.btn-grey.btn-link:focus,
.btn-grey.btn-link:hover {
  color: #00baa3;
  background-color: transparent;
}
.btn-grey.btn-underline:active,
.btn-grey.btn-underline:focus,
.btn-grey.btn-underline:hover {
  color: #00baa3;
}
.btn.btn-rounded {
  border-radius: 3px;
}
.btn.btn-ellipse {
  border-radius: 30px;
}
.btn.btn-block {
  display: block;
  padding-left: 0;
  padding-right: 0;
  width: 100%;
}
.btn.btn-block svg {
  display: inline-block;
  vertical-align: middle;
  margin-top: -4px;
}
.btn.btn-sm {
  font-size: 1.3rem;
  padding: 0.77em 1.4em;
}
.btn.btn-lg {
  font-size: 1.8rem;
  padding: 0.95em 1.835em;
}
.btn.btn-xl {
  font-size: 2.4rem;
  padding: 0.84em 1.8em;
}
.btn svg {
  width: 16px;
  height: 16px;
}
.btn-slide-left:active i,
.btn-slide-left:focus i,
.btn-slide-left:hover i {
  animation: 0.5s ease slideLeft;
}
.btn-slide-right:active i,
.btn-slide-right:focus i,
.btn-slide-right:hover i {
  animation: 0.5s ease slideRight;
}
.btn-slide-up:active i,
.btn-slide-up:focus i,
.btn-slide-up:hover i {
  animation: 0.5s ease slideUp;
}
.btn-slide-down:active i,
.btn-slide-down:focus i,
.btn-slide-down:hover i {
  animation: 0.5s ease slideDown;
}
.btn-infinite:hover i {
  animation-iteration-count: infinite;
}
@keyframes slideLeft {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translateX(-0.5em);
  }
  to {
    transform: translateX(0);
  }
}
@keyframes slideRight {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translateX(0.5em);
  }
  to {
    transform: translateX(0);
  }
}
@keyframes slideUp {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-0.5em);
  }
  to {
    transform: translateY(0);
  }
}
@keyframes slideDown {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(0.5em);
  }
  to {
    transform: translateY(0);
  }
}
.post {
  font-size: 1rem;
}
.post .btn {
  font-weight: 700;
  text-transform: capitalize;
}
.post .btn i {
  font-size: 1.8rem;
  margin-left: 8px;
}
.post .btn i:before {
  margin: 0;
}
.post .post-details > :last-child {
  margin-bottom: 0;
}
.post-calendar {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  width: 4.1rem;
  height: 4.2rem;
  background: #fff;
  color: #333;
  font-weight: 600;
  line-height: 1;
  z-index: 3;
  border-radius: 0.3rem;
}
.post-calendar .post-day {
  display: block;
  margin-bottom: 0.1rem;
  font-size: 1.4rem;
}
.post-calendar .post-month {
  display: block;
  font-size: 1rem;
  text-transform: uppercase;
}
.post-media {
  position: relative;
  width: 100%;
  margin-bottom: 0;
  overflow: hidden;
}
.post-media img {
  display: block;
  width: 100%;
  transition: transform 0.3s;
}
.post-media .post-calendar {
  position: absolute;
  top: 1.5rem;
  left: 1.5rem;
}
.post-details {
  padding: 1.5rem 0 2.5rem;
}
.post-title {
  font-weight: 600;
  font-size: 1.5rem;
  line-height: 1.2;
  margin-bottom: 1.4rem;
}
.post-title:hover {
  color: #ab8e66;
}
.post-title a {
  color: inherit;
}
.post-content p {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  font-size: 1.3rem;
  line-height: 1.9;
  letter-spacing: -0.025em;
  margin-bottom: 1.8rem;
}
.post-meta {
  display: inline-flex;
  flex-wrap: wrap;
  align-items: center;
  color: #999999;
  font-size: 1.3rem;
  font-weight: 600;
  font-family: Poppins, sans-serif;
  line-height: 1.7;
  margin-bottom: 0.1rem;
}
.post-meta a {
  font-weight: 600;
  font-size: 1.4rem;
  color: #333;
  white-space: nowrap;
}
.post-meta a:hover {
  color: #ab8e66;
}
.post-meta a:hover span {
  color: inherit;
}
.post-meta .post-author {
  margin: 0 0.4rem;
}
.post-meta .post-date {
  margin: 0 2rem 0 0.4rem;
  font-weight: 400;
}
.post-meta .post-comment {
  display: flex;
  align-items: center;
  color: inherit;
  font-weight: 400;
}
.post-meta .post-comment i {
  font-size: 1.8rem;
}
.post-meta .post-comment span {
  margin: 0 0.4rem 0 0.8rem;
  font-weight: 600;
  color: #333;
  transition: inherit;
}
.post-cats {
  margin-bottom: 0.6rem;
  color: #fff;
}
.post-cats a {
  color: inherit;
  font-size: 1.4rem;
}
.post-cats a:not(:first-child) {
  margin-left: 0.3rem;
}
.post-date {
  font-weight: 400;
}
.post-list {
  display: flex;
  align-items: center;
}
.post-list .post-media {
  max-width: 43.1%;
  flex: 0 0 43.1%;
  margin-right: 2rem;
  align-self: stretch;
}
.post-list img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.post-list .post-details {
  padding: 2.3rem 0 2.4rem;
}
@media (min-width: 768px) {
  .post-list .post-title {
    white-space: normal;
  }
}
.post-grid .post-details {
  padding-top: 1.6rem;
}
.post-mask {
  position: relative;
}
.post-mask:before {
  content: "";
  display: block;
  height: 50%;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0.75;
  background: linear-gradient(to bottom, rgba(125, 185, 232, 0) 0%, #000 100%);
  transition: all 0.3s;
  pointer-events: none;
  z-index: 1;
}
.post-mask .post-details {
  position: absolute;
  bottom: 2.5rem;
  left: 0;
  right: 0;
  transform: translateY(100%);
  padding: 0 3rem;
  z-index: 2;
  transition: transform 0.3s;
}
.post-mask .post-details-visible {
  position: absolute;
  bottom: 100%;
  left: 3rem;
  right: 3rem;
}
.post-mask .post-title {
  letter-spacing: 0;
}
.post-mask .post-meta {
  color: #fff;
  opacity: 0;
  transition: opacity 0.3s;
}
.post-mask .post-meta i {
  margin-right: 0.8rem;
}
.post-mask a {
  position: relative;
  color: inherit;
}
.post-mask a:hover {
  color: #fff;
  text-decoration: underline;
}
.post-mask .post-comment {
  padding-left: 2.8rem;
}
.post-mask .post-comment:before {
  content: "";
  font-family: "wolmart";
  position: absolute;
  font-size: 1.8rem;
  left: 0;
}
.post-mask:hover .post-details {
  transform: translateY(0);
}
.post-mask:hover .post-meta {
  opacity: 1;
}
.post-widget {
  display: flex;
  align-items: center;
}
.post-widget .post-media {
  flex: 0 0 28.6%;
  max-width: 28.6%;
}
.post-widget .post-details {
  margin-left: 1.6rem;
  padding: 0;
}
.post-widget .post-meta {
  margin-bottom: 0.5rem;
}
.post-widget .post-date {
  margin: 0;
  font-size: 1.3rem;
  color: #666;
}
.post-widget .post-title {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  margin-bottom: 0.1rem;
  font-size: 1.3rem;
  font-weight: 500;
  line-height: 1.45;
  white-space: normal;
}
.post-md .post-details {
  padding-top: 1.8rem;
}
.post-md .post-content p {
  -webkit-line-clamp: 3;
}
@media (min-width: 576px) {
  .post-list .post-details {
    flex: 1;
  }
}
@media (max-width: 991px) {
  .post-lg.text-center .post-details,
  .post-md.text-center .post-details {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }
  .post-details {
    padding-bottom: 0;
  }
}
@media (max-width: 767px) {
  .post-list {
    display: block;
  }
  .post-list .post-media {
    margin-right: 0;
    max-width: none;
  }
}
.category {
  position: relative;
  font-size: 1rem;
  color: #666;
}
.category a {
  color: inherit;
}
.category a:hover {
  color: #ab8e66;
}
.category img {
  display: block;
  width: 100%;
  height: auto;
  margin-left: auto;
  margin-right: auto;
}
.category .category-name {
  margin-bottom: 0;
  text-align: center;
  font-size: 1.6rem;
  font-weight: 600;
  line-height: 1.2;
  text-transform: uppercase;
  letter-spacing: -0.025em;
  transition: transform 0.3s;
}
.category .category-count {
  font-size: 1.4rem;
}
.category p {
  text-align: start;
  font-size: 1.4rem;
  line-height: 1.25;
  letter-spacing: 0;
  color: #666;
}
.category-content .category-list {
  color: #666666;
  text-align: start;
  font-size: 1.3em;
}
.category-content .category-list li {
  display: flex;
  position: relative;
  line-height: 1.9;
}
.category-content .category-list li:before {
  content: "";
  color: inherit;
  font-family: "wolmart";
  font-size: 1.3rem;
  margin-right: 0.3rem;
  margin-left: -0.3rem;
  transition: color 0.4s;
}
.category-content .category-list li:hover:before {
  color: #ab8e66;
  animation: navItemArrow 0.6s linear infinite;
}
.category-absolute .category-content {
  position: absolute;
  cursor: pointer;
}
.category-default .category-content {
  padding-bottom: 0.2rem;
  transition: padding-bottom 0.3s;
}
.category-default .btn {
  position: absolute;
  margin-top: -2rem;
  opacity: 0;
  visibility: hidden;
  transition: margin-top 0.3s, opacity 0.3s, visibility 0.3s;
}
.category-default:hover .category-content {
  padding-bottom: 3.2rem;
}
.category-default:hover .btn {
  margin-top: 1rem;
  opacity: 1;
  visibility: visible;
}
.category-default1 .category-content {
  left: 0;
  right: 0;
  bottom: 0;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: rgba(38, 38, 38, 0.8);
  height: 20%;
  justify-content: center;
  color: #fff;
}
.category-default1 .category-content .category-name {
  padding-bottom: 0;
  color: #fff;
  font-size: 1.4rem;
  letter-spacing: 0.035em;
  transition: padding-bottom 0.3s;
}
.category-default1 .category-content .category-count {
  position: absolute;
  font-size: 1.2rem;
  line-height: 1.3;
  opacity: 0;
  transition: transform 0.3s, opacity 0.3s;
}
.category-default1:hover .category-name {
  padding-bottom: 1.7rem;
}
.category-default1:hover .category-count {
  transform: translateY(50%);
  opacity: 1;
  visibility: visible;
}
.category-group-icon,
.category-group-image {
  display: flex;
  align-items: center;
  border: 1px solid #eee;
}
.category-group-icon > *,
.category-group-image > * {
  flex: 1;
}
.category-group-icon .category-content ul,
.category-group-image .category-content ul {
  padding-left: 0;
}
.category-group-image {
  padding: 1rem;
  font-size: 1rem;
  height: 100%;
}
.category-group-image .category-content {
  align-items: flex-start;
  text-align: start;
  padding: 1.1rem 0 0.8rem 3rem;
}
.category-group-image .category-content ul {
  margin: 0;
}
.category-group-image .category-name {
  font-size: 1.6em;
  font-weight: 400;
  text-transform: none;
  margin-bottom: 1.1rem;
  line-height: 1.4;
  text-align: start;
  letter-spacing: 0;
}
.category-group-image a {
  white-space: nowrap;
}
.category-ellipse .category-media {
  border-radius: 50%;
  overflow: hidden;
  border: 0px solid #fff;
  transition: box-shadow 0.1s, border-width 0.1s;
}
.category-ellipse .category-content {
  margin-top: 1.7rem;
}
.category-ellipse .category-name:hover {
  color: #ab8e66;
}
.category-ellipse:hover .category-media {
  border-width: 8px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
}
.category-classic {
  transition: box-shadow 0.3s;
}
.category-classic .category-content {
  left: 0;
  right: 0;
  bottom: 1.5rem;
  overflow: hidden;
  text-align: center;
}
.category-classic .category-name {
  font-size: 1.4rem;
  line-height: 1.45;
  text-transform: capitalize;
  transform: translateY(0);
  transition: transform 0.3s;
}
.category-classic .btn {
  position: absolute;
  transform: translate(-50%, 0);
  top: 100%;
  transition: top 0.3s, transform 0.3s;
}
.category-classic:hover {
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
}
.category-classic:hover .category-name {
  transform: translateY(-100%);
}
.category-classic:hover .btn {
  top: 50%;
  transform: translate(-50%, -50%);
}
.category-icon .category-media {
  padding: 2.4rem 0.5rem;
  border: 1px solid #eee;
  width: 130px;
  height: 130px;
  max-width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 5rem;
  border-radius: 50%;
  margin: 0 auto 2rem auto;
  transition: box-shadow 0.3s, border-color 0.3s;
}
.category-icon .category-name {
  font-size: 1.4rem;
  text-transform: capitalize;
  letter-spacing: 0;
}
.category-icon:hover .category-media {
  border-color: #fff;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}
.category-icon:hover .category-name {
  color: #ab8e66;
}
.category-banner .category-content {
  left: 0;
  bottom: 2rem;
  background-color: rgba(38, 38, 38, 0.8);
  border-radius: 0 5rem 5rem 0;
  padding: 1.3rem 3rem;
  transition: background-color 0.3s;
}
.category-banner .category-name {
  font-size: 1.4rem;
  color: #fff;
  letter-spacing: 0.035em;
}
.category-banner:hover .category-content {
  background-color: rgba(66, 164, 232, 0.8);
}
.category-center .category-content {
  position: absolute;
  cursor: pointer;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.category-center .btn {
  visibility: hidden;
  opacity: 0;
  line-height: 0;
  transition: visibility 0.3s, opacity 0.3s, line-height 0.3s;
}
.category-center:hover .btn {
  visibility: visible;
  opacity: 1;
  line-height: 1;
}
.category-lg .category-name {
  font-size: 2.8rem;
  font-weight: 700;
  letter-spacing: -0.015em;
  line-height: 1.3;
  white-space: nowrap;
}
.category-lg .category-count {
  font-size: 1.8rem;
  letter-spacing: 0;
  margin-bottom: 1rem;
}
.category-image {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.category-image a {
  display: block;
  width: 100%;
  transition: color 0.3s;
}
.category-image .category-media {
  overflow: hidden;
  margin-left: auto;
  margin-right: auto;
}
.category-image .category-media img {
  display: block;
}
.category-image p {
  font-size: 1.3rem;
  line-height: 1;
  color: inherit;
  transition: color 0.3s;
}
.category-image.media-circle .category-media {
  width: 10rem;
  height: 10rem;
  border-radius: 50%;
}
.category-image.text-center p {
  text-align: center;
}
.category-image:hover {
  cursor: pointer;
}
.category-image:hover a {
  color: #ab8e66;
}
@media (max-width: 767px) {
  .category-group-image .category-content {
    padding-left: 1.5rem;
  }
}
@font-face {
  font-family: "wolmart";
  src: url("../fonts/wolmart.eot?png09e");
  src: url("../fonts/wolmart.woff?png09e") format("woff"),
    url("../fonts/wolmart.eot?png09e#iefix") format("embedded-opentype"),
    url("../fonts/wolmart.ttf?png09e") format("truetype"),
    url("../fonts/wolmart.svg?png09e#wolmart") format("svg");
  font-weight: normal;
  font-style: normal;
  font-display: swap;
}
[class*=" w-icon-"],
[class^="w-icon-"] {
  font-family: "wolmart" !important;
  speak: never;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.w-icon-shipping:before {
  content: "";
}
.w-icon-truck2:before {
  content: "";
}
.w-icon-comments-solid:before {
  content: "";
}
.w-icon-heart-full:before {
  content: "";
}
.w-icon-instagram:before {
  content: "";
}
.w-icon-youtube:before {
  content: "";
}
.w-icon-pinterest:before {
  content: "";
}
.w-icon-pinterest-p:before {
  content: "";
}
.w-icon-google:before {
  content: "";
}
.w-icon-twitter:before {
  content: "";
}
.w-icon-facebook:before {
  content: "";
}
.w-icon-minus:before {
  content: "";
}
.w-icon-plus:before {
  content: "";
}
.w-icon-angle-down:before {
  content: "";
}
.w-icon-angle-up:before {
  content: "";
}
.w-icon-angle-left:before {
  content: "";
}
.w-icon-angle-right:before {
  content: "";
}
.w-icon-hamburger:before {
  content: "";
}
.w-icon-star-square-full:before {
  content: "";
}
.w-icon-exclamation-triangle:before {
  content: "";
}
.w-icon-times-circle:before {
  content: "";
}
.w-icon-cog:before {
  content: "";
}
.w-icon-star-square:before {
  content: "";
}
.w-icon-exclamation-circle:before {
  content: "";
}
.w-icon-check-solid:before {
  content: "";
}
.w-icon-check:before {
  content: "";
}
.w-icon-comments:before {
  content: "";
}
.w-icon-envelop:before {
  content: "";
}
.w-icon-envelop2:before {
  content: "";
}
.w-icon-youtube-solid:before {
  content: "";
}
.w-icon-times-solid:before {
  content: "";
}
.w-icon-call:before {
  content: "";
}
.w-icon-call2:before {
  content: "";
}
.w-icon-cart:before {
  content: "";
}
.w-icon-category:before {
  content: "";
}
.w-icon-bars:before {
  content: "";
}
.w-icon-compare:before {
  content: "";
}
.w-icon-computer:before {
  content: "";
}
.w-icon-electronics:before {
  content: "";
}
.w-icon-tshirt:before {
  content: "";
}
.w-icon-account:before {
  content: "";
}
.w-icon-search2:before {
  content: "";
}
.w-icon-android:before {
  content: "";
}
.w-icon-ios:before {
  content: "";
}
.w-icon-art-class:before {
  content: "";
}
.w-icon-bag:before {
  content: "";
}
.w-icon-basketball:before {
  content: "";
}
.w-icon-bathtub:before {
  content: "";
}
.w-icon-bed:before {
  content: "";
}
.w-icon-birthday-cake:before {
  content: "";
}
.w-icon-bow:before {
  content: "";
}
.w-icon-bridge-lamp:before {
  content: "";
}
.w-icon-calendar:before {
  content: "";
}
.w-icon-camera:before {
  content: "";
}
.w-icon-cart2:before {
  content: "";
}
.w-icon-dots-circle:before {
  content: "";
}
.w-icon-chat:before {
  content: "";
}
.w-icon-desktop:before {
  content: "";
}
.w-icon-dish:before {
  content: "";
}
.w-icon-display:before {
  content: "";
}
.w-icon-download:before {
  content: "";
}
.w-icon-envelop-closed:before {
  content: "";
}
.w-icon-fax:before {
  content: "";
}
.w-icon-furniture:before {
  content: "";
}
.w-icon-gamepad:before {
  content: "";
}
.w-icon-gift:before {
  content: "";
}
.w-icon-grid:before {
  content: "";
}
.w-icon-headphone:before {
  content: "";
}
.w-icon-heartbeat:before {
  content: "";
}
.w-icon-home:before {
  content: "";
}
.w-icon-honour:before {
  content: "";
}
.w-icon-hotline:before {
  content: "";
}
.w-icon-ice-cream:before {
  content: "";
}
.w-icon-list:before {
  content: "";
}
.w-icon-mobile:before {
  content: "";
}
.w-icon-money:before {
  content: "";
}
.w-icon-motocycle:before {
  content: "";
}
.w-icon-net-world:before {
  content: "";
}
.w-icon-orders:before {
  content: "";
}
.w-icon-phone:before {
  content: "";
}
.w-icon-return:before {
  content: "";
}
.w-icon-rice-cooker:before {
  content: "";
}
.w-icon-ruby:before {
  content: "";
}
.w-icon-search:before {
  content: "";
}
.w-icon-search-minus:before {
  content: "";
}
.w-icon-search-plus:before {
  content: "";
}
.w-icon-service:before {
  content: "";
}
.w-icon-shopify:before {
  content: "";
}
.w-icon-sofa:before {
  content: "";
}
.w-icon-sport:before {
  content: "";
}
.w-icon-star:before {
  content: "";
}
.w-icon-star-full:before {
  content: "";
}
.w-icon-table:before {
  content: "";
}
.w-icon-table2:before {
  content: "";
}
.w-icon-truck:before {
  content: "";
}
.w-icon-tshirt2:before {
  content: "";
}
.w-icon-user:before {
  content: "";
}
.w-icon-wallet:before {
  content: "";
}
.w-icon-heart:before {
  content: "";
}
.w-icon-gift2:before {
  content: "";
}
.w-icon-dashboard:before {
  content: "";
}
.w-icon-power-off:before {
  content: "";
}
.w-icon-wallet2:before {
  content: "";
}
.w-icon-products:before {
  content: "";
}
.w-icon-reports:before {
  content: "";
}
.w-icon-return2:before {
  content: "";
}
.w-icon-reviews:before {
  content: "";
}
.w-icon-return3:before {
  content: "";
}
.w-icon-cog2:before {
  content: "";
}
.w-icon-ship-station:before {
  content: "";
}
.w-icon-social:before {
  content: "";
}
.w-icon-store-seo:before {
  content: "";
}
.w-icon-store:before {
  content: "";
}
.w-icon-support:before {
  content: "";
}
.w-icon-tools:before {
  content: "";
}
.w-icon-vendor-store:before {
  content: "";
}
.w-icon-verification:before {
  content: "";
}
.w-icon-visit:before {
  content: "";
}
.w-icon-withdraw:before {
  content: "";
}
.w-icon-rotate-3d:before {
  content: "";
}
.w-icon-movie:before {
  content: "";
}
.w-icon-prev:before {
  content: "";
}
.w-icon-play:before {
  content: "";
}
.w-icon-next:before {
  content: "";
}
.w-icon-map-marker:before {
  content: "";
}
.w-icon-long-arrow-down:before {
  content: "";
}
.w-icon-long-arrow-left:before {
  content: "";
}
.w-icon-long-arrow-right:before {
  content: "";
}
.w-icon-long-arrow-up:before {
  content: "";
}
.w-icon-comment:before {
  content: "";
}
.w-icon-envelop3:before {
  content: "";
}
.w-icon-logout:before {
  content: "";
}
.w-icon-envelop4:before {
  content: "";
}
.w-icon-orders2:before {
  content: "";
}
.w-icon-quote:before {
  content: "";
}
.w-icon-sale:before {
  content: "";
}
.w-icon-heart2:before {
  content: "";
}
.w-icon-zoom:before {
  content: "";
}
.form .form-control {
  margin-bottom: 2rem;
}
input:-internal-autofill-selected {
  background-color: #fff !important;
  background-image: none !important;
  color: black !important;
}
.form-control {
  display: block;
  width: 100%;
  min-height: 4.7rem;
  padding: 0.85rem 2rem;
  border: 1px solid #eee;
  font-size: 1.4rem;
  font-family: Poppins, sans-serif;
  line-height: 1.5;
  font-weight: 400;
  color: #999;
  background-color: transparent;
  border-radius: 0;
  box-shadow: none;
  outline: 0;
}
.form-control::placeholder {
  color: inherit;
  font-family: inherit;
}
.form-control::-webkit-input-placeholder {
  color: inherit;
}
.form-control::-moz-placeholder {
  color: inherit;
}
.form-control.form-solid {
  background-color: #fff;
  border: 0;
  color: #8d8d8d;
}
.form-control.form-control-md {
  font-size: 1.3rem;
  min-height: 4.4rem;
}
.form-control.form-control-sm {
  font-size: 1.2rem;
  min-height: 4rem;
}
textarea {
  font-family: inherit;
  min-width: 100%;
  max-width: 100%;
}
.select-box,
.select-menu {
  position: relative;
}
.select-box select,
.select-menu select {
  position: relative;
  max-width: 14.6rem;
  min-height: auto;
  width: 100%;
  height: 100%;
  padding-left: 9px;
  padding-right: 27px;
  border: 1px solid #e3e3e3;
  color: inherit;
  background-color: transparent;
  font-size: 1.2rem;
  font-family: inherit;
  letter-spacing: inherit;
  z-index: 1;
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
}
.select-box select:focus,
.select-menu select:focus {
  outline: none;
}
.select-box:before,
.select-menu:before {
  content: "";
  font-family: "Wolmart";
  font-size: 9px;
  font-weight: 600;
  line-height: 1;
  position: absolute;
  right: 2rem;
  top: 50%;
  transform: translateY(-50%);
}
.select-box option {
  font-size: 1.2rem;
}
@media (-ms-high-contrast: active), (-ms-high-contrast: none) {
  select::-ms-expand {
    display: none;
  }
  select:focus::-ms-value {
    background: transparent;
    color: currentColor;
  }
}
.input-wrapper input {
  flex: 1;
  min-width: 40px;
  font-size: 1.4rem;
  font-family: Poppins, sans-serif;
  border-width: 1px 0 1px 1px;
}
.input-wrapper-inline {
  display: flex;
  position: relative;
  max-width: 67.5rem;
  width: 100%;
}
.input-wrapper-inline .btn {
  line-height: 1;
}
.input-wrapper-rounded .form-control {
  border-radius: 0.4rem;
}
.input-wrapper-round .form-control {
  position: relative;
  border-radius: 3rem;
}
.input-wrapper-round .btn {
  border-radius: 3rem;
  line-height: 1;
}
.input-wrapper-round .form-control {
  border-radius: 3rem 0 0 3rem;
}
.input-wrapper-round .btn {
  border-radius: 0 3rem 3rem 0;
}
.input-group {
  display: inline-flex;
  height: 4.4rem;
  position: relative;
  width: 100%;
}
.input-group .form-control {
  flex: 1;
  font-size: 1.3rem;
  padding: 0 1.4rem 0 1.8rem;
  height: inherit;
  min-height: auto;
  max-width: 100%;
  -webkit-appearance: textfield;
  border: solid #ccc;
  border-width: 1px;
  color: #666;
}
.input-group .form-control:focus::-webkit-inner-spin-button,
.input-group .form-control:focus::-webkit-outer-spin-button,
.input-group .form-control:hover::-webkit-inner-spin-button,
.input-group .form-control:hover::-webkit-outer-spin-button {
  -webkit-appearance: none;
}
.input-group button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 1.5rem;
  padding: 0;
  width: 2.4rem;
  height: 2.4rem;
  border-radius: 50%;
  background-color: #eee;
  color: #666;
  font-size: 1.4rem;
  border: none;
}
.input-group button + button {
  margin-right: 3.3rem;
}
.input-group button:hover {
  cursor: pointer;
}
.custom-radio {
  position: relative;
}
.custom-radio .custom-control-input {
  position: absolute;
  opacity: 0;
  z-index: -1;
}
.custom-radio .custom-control-label {
  padding-left: 3rem;
}
.custom-radio .custom-control-label:after {
  content: "";
  position: absolute;
  display: inline-flex;
  align-items: center;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  border: 1px solid;
  border-radius: 2px;
  color: #999;
  font-family: "Font Awesome 5 Free";
  font-size: 1rem;
  font-weight: 900;
  width: 1.8rem;
  height: 1.8rem;
  cursor: pointer;
  transition: color 0.3s, background-color 0.3s, content 0.3s, border 0.3s;
}
.custom-radio .custom-control-label.round:after {
  border-radius: 50%;
}
.custom-radio .custom-control-input:checked ~ .custom-control-label:after {
  content: "";
  background-color: #ab8e66;
  color: #fff;
  border: 2px solid #ab8e66;
  padding-left: 2px;
}
.custom-radio
  .custom-control-input:checked
  ~ .custom-control-label.color-dark:after {
  background-color: #333;
  border-color: #333;
}
.custom-checkbox {
  position: absolute;
  opacity: 0;
  z-index: 1;
  width: 1.8rem;
  height: 1.8rem;
  cursor: pointer;
}
.custom-checkbox + label {
  display: inline-block;
  position: relative;
  padding-left: 2.5rem;
  cursor: pointer;
}
.custom-checkbox + label:before {
  content: "";
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
  width: 18px;
  height: 18px;
  line-height: 15px;
  border: 1px solid #ccc;
  border-radius: 2px;
}
@media (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .custom-checkbox + label:before {
    line-height: 14px;
  }
}
.custom-checkbox.checked + label:before,
.custom-checkbox:checked + label:before {
  content: "";
  border-color: #222;
  background: #222;
  color: #fff;
  font-size: 9px;
  font-weight: 600;
  font-family: "Font Awesome 5 Free";
  text-align: center;
}
.btn-absolute input.form-control {
  width: 100%;
  padding-left: 2rem;
  color: #999;
  font-size: 1.4rem;
}
.btn-absolute .btn {
  position: absolute;
  width: auto;
  height: 100%;
  min-width: 4.4rem;
  right: 0;
  font-size: 1.3rem;
}
.btn-absolute .btn:hover {
  color: #ab8e66;
}
.user-icon {
  display: block;
  padding-bottom: 2px;
}
.user-icon:after,
.user-icon:before {
  content: "";
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.user-icon:before {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  margin-bottom: 1px;
  border: 1px solid #333;
  box-shadow: 0px 0px 1px #333, 0px 0px 1px #333, 0px 0px 2px #333,
    0px 0px 1px #333, 0px 0px 2px #333;
}
.user-icon:after {
  width: 22px;
  height: 12px;
  border-radius: 7px 7px 0 0;
  border: 1px solid #333;
  box-shadow: 0px 0px 2px #333, 0px 0px 1px #333, 0px 0px 1px #333,
    0px 0px 1px #333, 0px 0px 1px #333;
}
.minicart-icon {
  position: relative;
  height: 2.167em;
  text-align: center;
}
.minicart-icon:after,
.minicart-icon:before {
  border: solid 2px;
  border-color: #333333;
}
.minicart-icon:before {
  content: "";
  display: block;
  position: absolute;
  top: -0.3em;
  left: 50%;
  transform: translateX(-50%) scale(0.7);
  width: 1.32em;
  height: 1.2em;
  border-radius: 10px 10px 0 0;
  border-bottom: none;
}
.minicart-icon:after {
  content: "";
  display: inline-block;
  width: 29px;
  height: 24px;
  background-color: transparent;
  border-radius: 0 0 5px 5px;
  transform: scale(0.8);
  margin-top: 1px;
}
.menu-icon {
  display: inline-block;
  color: #fff;
  width: 1.7rem;
}
.menu-icon:after,
.menu-icon:before {
  display: block;
  content: "";
  width: 100%;
}
.menu-icon:before {
  height: 6px;
  border-top: 2px solid;
  border-bottom: 2px solid;
}
.menu-icon:after {
  height: 4px;
  border-bottom: 2px solid;
}
.icon-angle-left:before {
  content: "";
}
.icon-angle-right:before {
  content: "";
}
.icon-angle-left,
.icon-angle-right {
  font-family: "wolmart";
  font-style: normal;
}
.close-icon {
  display: block;
  position: relative;
  width: 30px;
  height: 30px;
  transform: rotateZ(45deg);
}
.close-icon:after,
.close-icon:before {
  display: block;
  position: absolute;
  background-color: #ccc;
  content: "";
}
.close-icon:before {
  height: 2px;
  width: 100%;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
}
.close-icon:after {
  height: 100%;
  width: 2px;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
}
.icon-box .icon-box-title {
  font-size: 1.4rem;
  text-transform: capitalize;
  letter-spacing: -0.025em;
  margin-bottom: 0.4rem;
}
.icon-box p {
  font-size: 1.3rem;
  word-break: break-word;
  margin: 0;
  line-height: 1.2;
  color: #666;
}
.icon-box .icon-box-content {
  text-align: center;
}
.icon-box.text-center .icon-box-icon {
  margin-bottom: 1.6rem;
}
.icon-box.text-center .icon-box-icon.icon-bag {
  margin-bottom: 1.8rem;
}
.icon-box.text-center .icon-box-icon.icon-money {
  margin: 0.1rem 0 2.2rem;
}
.icon-box.text-center .icon-box-icon.icon-chat {
  margin-bottom: 1.2rem;
}
.icon-box.icon-box-lg .icon-box-title {
  font-size: 1.8rem;
}
.icon-box.icon-colored-circle .icon-box-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding-top: 0;
  width: 8rem;
  height: 8rem;
  border-radius: 50%;
  background-color: #ab8e66;
  color: #fff;
  margin-bottom: 2rem;
}
.icon-box-icon {
  display: inline-block;
  margin-bottom: 1.4rem;
}
.icon-box-primary .icon-box-icon i {
  color: #ab8e66;
}
.icon-box-secondary .icon-box-icon i {
  color: #ffb639;
}
.icon-box-white .icon-box-icon svg {
  fill: #fff;
}
.icon-box-white .icon-box-icon i {
  color: #fff;
}
.icon-box-light .icon-box-icon svg {
  fill: #999;
}
.icon-box-icon i {
  font-size: 2.9rem;
  font-weight: 400;
  line-height: 1;
}
.icon-box-icon i.w-icon-truck {
  font-size: 3.9rem;
}
.icon-box-icon i.w-icon-bag {
  font-size: 3.7rem;
}
.icon-box-icon i.w-icon-money {
  font-size: 3.2rem;
}
.icon-box-icon i.w-icon-chat {
  font-size: 4.4rem;
}
.icon-box-lg .icon-box-icon i {
  font-size: 6rem;
}
.icon-box.icon-box-secondary .icon-box-icon i {
  font-size: 3rem;
}
.icon-box-side {
  display: flex;
  align-items: center;
  justify-content: center;
}
.icon-box-side .icon-box-content {
  text-align: start;
}
.icon-box-side .icon-box-content p {
  line-height: 1;
}
.icon-box-side .icon-box-icon {
  margin-right: 1.5rem;
  margin-bottom: 0;
}
.icon-box-side i {
  display: inline-block;
  vertical-align: middle;
}
.icon-border-circle .icon-box-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 8rem;
  height: 8rem;
  border-radius: 50%;
  border: 1px solid #ccc;
}
.circle-icon-section {
  margin: 0.7rem 0 5.7rem;
  padding: 5.7rem 0 3.2rem;
  background-color: #f8f8f8;
}
.circle-icon-section .iconbox-wrap {
  margin-bottom: 4.9rem;
}
.icon-box.icon-border-box {
  border: 1px solid #eeeeee;
  padding: 4rem 1rem 3.4rem;
  transition: box-shadow 0.4s;
  border-radius: 0.5rem;
}
.icon-box.icon-border-box .icon-box-icon {
  margin-bottom: 2.5rem;
}
.icon-box.icon-border-box .icon-box-title {
  margin-bottom: 0.7rem;
}
.icon-box.icon-border-box p {
  margin-bottom: 1.6rem;
  line-height: 1.9;
}
.icon-box.icon-border-box a {
  color: #ab8e66;
  font-weight: 600;
  font-size: 1.4rem;
}
.icon-box.icon-border-box a i {
  font-size: 1.6rem;
  vertical-align: middle;
  line-height: 0;
}
.icon-box.icon-border-box:hover {
  box-shadow: 0 2px 35px rgba(0, 0, 0, 0.1);
}
.iconbox-boxed-section .row {
  margin: 0 -3rem;
}
.iconbox-boxed-section .row > * {
  padding: 0 3rem;
}
.iconbox-boxed-section .shadow-swiper {
  overflow-y: auto;
  padding: 4rem;
  margin: -4rem;
}
@media (max-width: 1320px) {
  .iconbox-boxed-section .shadow-swiper {
    padding: 4rem 2rem;
    margin: -4rem -2rem;
  }
}
@media (min-width: 768px) {
  .icon-box-side.icon-box-money {
    margin-top: 0.2rem;
  }
  .icon-box-side.icon-box-chat {
    margin-top: -0.3rem;
  }
}
@media (max-width: 767px) {
  .icon-box-side {
    flex-direction: column;
  }
  .icon-box-side .icon-box-icon {
    margin-right: 0;
    margin-bottom: 1rem;
  }
  .icon-box-side .icon-box-content {
    text-align: center;
  }
  .icon-box-side.icon-box-money {
    margin-top: 0.6rem;
  }
  .icon-box-side.icon-box-chat .icon-box-icon {
    margin-bottom: 0.4rem;
  }
}
.minipopup-area {
  position: fixed;
  left: 30px;
  bottom: 30px;
  z-index: 3000;
}
.minipopup-box {
  position: absolute;
  left: -8rem;
  width: 300px;
  padding: 2rem;
  background-color: #fff;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  transform: translateY(-100%);
  opacity: 0;
  transition: opacity 0.3s, left 0.3s ease-out, transform 0.3s;
  z-index: 3000;
}
.minipopup-box.show {
  opacity: 1;
  left: 0;
}
.minipopup-box.focus {
  transform: scale(0.98) translateY(-100%);
}
.minipopup-box .product.product-cart {
  padding-top: 0;
  margin-bottom: 1.5rem;
}
.minipopup-box .product.product-cart .product-name {
  margin-bottom: 0.9rem;
  font-weight: 400;
}
.minipopup-box .product-details {
  padding: 0 0 0 1.2rem;
}
.minipopup-box p {
  margin-bottom: 0;
  font-size: 1.3rem;
  color: #666;
  line-height: 1.4;
}
.minipopup-box .product-action {
  position: relative;
  opacity: 1;
  visibility: visible;
  justify-content: space-between;
}
.minipopup-box .product-action a:first-child {
  background-color: #eee;
  border-color: #eee;
  color: #333;
}
.minipopup-box .product-action a:first-child:active,
.minipopup-box .product-action a:first-child:focus,
.minipopup-box .product-action a:first-child:hover {
  background-color: #dcdcdc;
  border-color: #dcdcdc;
}
.minipopup-box .product-action .btn {
  padding-left: 1.9em;
  padding-right: 1.9em;
}
@media (max-width: 479px) {
  .minipopup-area {
    left: 10px;
  }
}
.overlay-dark .banner,
.overlay-dark figure,
.overlay-light .banner,
.overlay-light figure {
  position: relative;
}
.overlay-dark.banner:after,
.overlay-dark figure:after,
.overlay-dark figure > a:after,
.overlay-light.banner:after,
.overlay-light figure:after,
.overlay-light figure > a:after {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: #333;
  opacity: 0;
  transition: opacity 0.3s, background 0.3s, transform 0.3s;
}
.overlay-dark.banner:hover:after,
.overlay-dark:hover figure:after,
.overlay-dark:hover figure > a:after,
.overlay-light.banner:hover:after,
.overlay-light:hover figure:after,
.overlay-light:hover figure > a:after {
  opacity: 0.1;
}
.overlay-dark.banner-fixed:after,
.overlay-dark.post > figure:after,
.overlay-light.banner-fixed:after,
.overlay-light.post > figure:after {
  content: none;
}
.overlay-dark.post > figure > a:after,
.overlay-light.post > figure > a:after {
  z-index: 1;
}
.banner.overlay-light:after,
.overlay-light figure:after {
  background: #ccc;
}
.overlay-zoom {
  overflow: hidden;
}
.overlay-zoom img {
  transition: transform 0.35s;
}
.overlay-zoom:hover img {
  transform: scale(1.08);
}
.overlay-rotate {
  overflow: hidden;
}
.overlay-rotate img {
  transition: transform 0.35s;
}
.overlay-rotate:hover {
  transform: rotateZ(3deg) scale(1.08);
}
.mfp-wrap {
  z-index: 2500;
}
.mfp-bg {
  z-index: 2500;
  background: #000;
  opacity: 0.4;
  transition: opactiy 0.3s ease-out;
}
.mfp-bg.mfp-ready.mfp-fade {
  opacity: 0.4;
}
.mfp-bg.mfp-remove {
  opacity: 0;
}
.mfp-container {
  padding: 4rem 2rem;
}
.mfp-content > * {
  position: relative;
  margin: auto;
  background: #fff;
  opacity: 0;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.1);
  transition: all 0.3s;
}
.mfp-ready .mfp-content > * {
  opacity: 1;
}
.mfp-remove .mfp-content > * {
  opacity: 0;
}
.pswp__button--arrow--left,
.pswp__button--arrow--right {
  color: #fff;
  font-size: 1.6rem;
  font-weight: 500;
  font-family: "wolmart";
  border: 0;
  opacity: 0.5;
  right: 10%;
  left: auto;
  transition: opacity 0.3s;
}
.pswp__ui > button:before {
  background: transparent;
  position: static;
}
.pswp__ui > button:hover {
  opacity: 1;
}
.pswp__button--arrow--right:before {
  content: "";
}
.pswp__button--arrow--left {
  left: 10%;
  right: auto;
}
.pswp__button--arrow--left:before {
  content: "";
}
.pswp {
  z-index: 3010;
}
.pswp .pswp__bg {
  background-color: rgba(0, 0, 0, 0.7);
}
.pswp__scroll-wrap {
  transform: scale(0.5);
  opacity: 0;
  transition: opacity 0.5s, transform 0.5s;
}
.pswp__caption,
.pswp__top-bar {
  transition: opacity 333ms cubic-bezier(0.4, 0, 0.22, 1),
    background-color 0.3s 0.5s;
}
.pswp:not(.pswp--animated-in) .pswp__caption,
.pswp:not(.pswp--animated-in) .pswp__top-bar {
  background-color: transparent;
}
.pswp--visible .pswp__scroll-wrap {
  transform: none;
  opacity: 1;
}
.pswp__img {
  border-radius: 3px;
}
.pswp__img--placeholder--blank {
  background-color: #f2f3f5;
}
.pswp__caption {
  min-height: auto;
}
.pswp__caption__center {
  text-align: center;
}
.pswp__counter {
  left: 0;
}
.pswp__button {
  float: right;
}
.pswp__button--arrow--left,
.pswp__button--arrow--right {
  width: 4.8rem;
  height: 4.8rem;
  margin-top: -2.4rem;
  color: #fff;
  border-radius: 50%;
  font-size: 1.6rem;
  font-weight: 900;
  font-family: "Font Awesome 5 Free";
  text-align: center;
  opacity: 0.5;
  right: 10%;
  left: auto;
  transition: opacity 0.3s;
  border: 2px solid;
}
.pswp__ui > button:before {
  background: transparent;
  position: static;
}
.pswp__ui > button:hover {
  opacity: 1;
}
.pswp__button--arrow--right:before {
  content: "";
}
.pswp__button--arrow--left {
  left: 10%;
  right: auto;
}
.pswp__button--arrow--left:before {
  content: "";
}
.newsletter-popup {
  display: flex;
  max-width: 78rem;
  padding: 8.1rem 4.8rem;
  margin: auto;
  background-position: center;
  background-size: cover;
  border-radius: 1rem;
  background-image: url(../../assets/images/newsletter-1.jpg);
}
.newsletter-popup .popup-media {
  margin-bottom: 1.7rem;
}
.newsletter-popup h4 {
  margin-bottom: 0.4rem;
  font-size: 2rem;
}
.newsletter-popup h4 span {
  display: inline-block;
  margin-left: 0.4rem;
  font-weight: 800;
}
.newsletter-popup h2 {
  margin-bottom: 1.1rem;
  font-weight: 800;
  font-size: 2.8rem;
  line-height: 1.2;
}
.newsletter-popup p {
  margin-bottom: 2.3rem;
  line-height: 1.75;
}
.newsletter-popup .input-wrapper-inline {
  max-width: 34rem;
  margin-bottom: 3rem;
}
.newsletter-popup .input-wrapper-inline .form-control {
  min-height: 4.4rem;
  border-color: #ccc;
  color: #666;
}
.newsletter-popup .input-wrapper-inline .btn {
  padding-top: 0.9em;
  padding-bottom: 0.9em;
}
.newsletter-popup label {
  padding-left: 2.7rem;
}
.newsletter-popup label:before {
  border-color: #999;
}
.newsletter-content {
  max-width: 36rem;
}
.mfp-product .mfp-container {
  padding: 4rem 3rem 2rem;
}
.mfp-product .mfp-content {
  max-width: 88rem;
  margin: auto;
}
.mfp-product .product-popup {
  display: block;
  margin-bottom: 3rem;
  padding: 2rem;
}
.mfp-product .product-details {
  overflow-x: hidden;
  overflow-y: auto;
}
body .product-popup {
  display: none;
}
.login-popup {
  max-width: 50rem;
  padding: 3.3rem 5rem 2.6rem;
}
.login-popup .nav.nav-tabs .nav-item {
  width: calc(50% - 0.5rem);
  margin: 0;
}
.login-popup .nav.nav-tabs .nav-item:first-child {
  margin-right: 1rem;
}
.login-popup .nav-item .nav-link {
  padding: 1.3rem 0;
  font-size: 1.6rem;
  font-weight: 700;
}
.login-popup .nav-item .nav-link:after {
  border-top-width: 2px;
  transform: none;
}
.login-popup .tab-pane {
  padding-top: 3.3rem;
  padding-bottom: 2.6rem;
}
.login-popup .tab-pane a:not(.btn):hover {
  text-decoration: underline;
}
.login-popup #sign-in {
  font-size: 1.4rem;
}
.login-popup .form-group {
  margin-bottom: 2.6rem;
}
.login-popup .form-group label {
  display: block;
  margin-bottom: 0.5rem;
}
.login-popup .form-control {
  min-height: 4.4rem;
}
.login-popup .form-checkbox {
  margin-top: 2.2rem;
  margin-bottom: 2.3rem;
}
.login-popup .form-checkbox a {
  font-size: 1.2rem;
  color: #a94442;
}
.login-popup .btn {
  display: block;
  padding-top: 0.79em;
  padding-bottom: 0.79em;
}
.login-popup p {
  margin-bottom: 1.9rem;
}
.login-popup #sign-up p {
  margin-bottom: 2.1rem;
  line-height: 1.84;
}
.login-popup .social-icon {
  margin-right: 0.8rem;
}
@media (min-width: 768px) {
  .product-popup .product-details {
    position: absolute;
    overflow-y: auto;
    top: 0;
    left: 2rem;
    width: calc(100% - 3rem);
    height: 100%;
  }
}
.mfp-close {
  width: 18px;
  height: 18px;
  transform: rotateZ(45deg) scale(1);
  top: -2.7rem;
  right: 0;
  left: auto;
  opacity: 1;
  transition: transform 0.3s;
}
.mfp-close span {
  display: none;
}
.mfp-close:active {
  top: -2.7rem;
}
.mfp-close:after,
.mfp-close:before {
  content: "";
  display: block;
  position: absolute;
  width: 2px;
  height: 100%;
  top: 0;
  left: calc(50% - 1px);
  background-color: #fff;
}
.mfp-close:after {
  width: 100%;
  height: 2px;
  top: calc(50% - 1px);
  left: 0;
}
.mfp-close:hover {
  transform: rotateZ(135deg) scale(1.5);
}
.mfp-ready.mfp-zoom-popup .mfp-content {
  transform: scale(1);
}
.mfp-removing.mfp-zoom-popup .mfp-content,
.mfp-zoom-popup .mfp-content {
  transition: 0.4s ease-in-out;
  transform: scale(0.8);
}
.mfp-ready.mfp-fadein-popup .mfp-content {
  animation-duration: 0.4s;
  animation-name: fadeIn;
}
.mfp-fadein-popup .mfp-content,
.mfp-removing.mfp-fadein-popup .mfp-content {
  animation-duration: 0.4s;
  animation-name: fadeOut;
}
.mfp-video-popup .mfp-content {
  max-width: 100rem;
}
.mfp-video-popup video {
  width: 100%;
}
.mfp-video-popup .mfp-close {
  top: 2rem;
  right: 2rem;
}
@media (min-width: 768px) {
  .mfp-product .product-popup {
    padding: 3rem;
  }
  .mfp-product .product-popup .product-form-group {
    display: block;
  }
  .mfp-product .product-popup .action-group {
    margin-left: 0;
  }
}
@media (max-width: 767px) {
  .newsletter-popup {
    max-width: 40rem;
    min-height: 40rem;
    padding: 0rem 2rem;
    background-image: url(../../assets/images/newsletter-2.jpg);
    text-align: center;
    align-items: center;
  }
  .newsletter-popup .form-checkbox {
    justify-content: center;
  }
  .newsletter-popup .input-wrapper-inline {
    display: block;
    margin-left: auto;
    margin-right: auto;
    max-width: 24rem;
  }
  .newsletter-popup .input-wrapper-inline .form-control {
    margin-bottom: 1rem;
    border-radius: 3rem;
    border-width: 1px;
  }
  .newsletter-popup .input-wrapper-inline .btn {
    border-radius: 3rem;
    width: 100%;
  }
}
@media (max-width: 479px) {
  .mfp-product .mfp-container {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }
  .login-popup {
    padding-left: 2rem;
    padding-right: 2rem;
  }
}
.product-nav {
  margin: 0 0 0 auto;
  padding: 0;
  display: flex;
  align-items: center;
}
.product-nav .product-nav-next,
.product-nav .product-nav-prev {
  position: relative;
}
.product-nav .product-nav-next a,
.product-nav .product-nav-prev a {
  display: inline-block;
  padding: 1.1rem 0.4rem 1.3rem;
}
.product-nav .product-nav-next i,
.product-nav .product-nav-prev i {
  display: inline-block;
  border-radius: 50%;
  width: 2em;
  color: var(--wolmart-body-color, #666);
  border: 1px solid #eee;
  line-height: calc(2em - 2px);
  text-align: center;
  font-size: 1.3rem;
  transition: color 0.3s, background-color 0.3s, border-color 0.3s;
}
.product-nav .product-nav-next:hover i,
.product-nav .product-nav-prev:hover i {
  border-color: #ab8e66;
  background-color: #ab8e66;
  color: #fff;
}
.product-nav .product-nav-next:hover .product-nav-popup,
.product-nav .product-nav-prev:hover .product-nav-popup {
  opacity: 1;
  visibility: visible;
  transform: none;
}
.product-nav .product-nav-popup {
  position: absolute;
  top: 100%;
  right: 0;
  z-index: 30;
  width: 120px;
  padding: 0 5px 9px;
  line-height: 1.5;
  text-align: center;
  background-color: #fff;
  box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.1);
  visibility: hidden;
  opacity: 0;
  transform: scale(0.9);
  transform-origin: top;
  transition: opacity 0.3s, transform 0.3s;
}
.product-nav .product-nav-popup img {
  position: relative;
  width: 100%;
  padding-top: 5px;
  background-color: #fff;
}
.product-nav .product-nav-popup:before {
  content: "";
  position: absolute;
  top: -0.8rem;
  right: 1rem;
  width: 1.6rem;
  height: 1.6rem;
  transform: rotate(45deg);
  background-color: #fff;
  box-shadow: inherit;
}
.product-nav .product-nav-prev .product-nav-popup {
  right: -3.4rem;
}
.product-nav .product-nav-prev .product-nav-popup:before {
  right: 4.2rem;
}
.product-nav .product-nav-next .product-nav-popup {
  right: 0;
}
.product-nav .product-name {
  position: relative;
  color: #666;
  font-size: 1.2rem;
  font-weight: 400;
  line-height: 1.2;
  padding: 1.1rem 0 0;
  margin: 0;
  background: inherit;
  z-index: 1;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  white-space: normal;
}
.product-single-swiper,
.product-thumbs-wrap {
  flex-basis: 100%;
  max-width: 100%;
}
.product-single-swiper img {
  display: block;
}
.product-single-swiper .swiper-button-next,
.product-single-swiper .swiper-button-prev {
  background-color: transparent;
  border: 0;
  font-size: 2rem;
}
.product-image {
  position: relative;
  overflow: hidden;
}
.product-thumbs-wrap {
  position: relative;
  margin-top: 1rem;
  overflow: hidden;
}
.product-thumbs-wrap img {
  display: block;
  width: 100%;
}
.product-thumbs-wrap .swiper-button-next,
.product-thumbs-wrap .swiper-button-prev,
.product-thumbs-wrap button {
  bottom: 0;
  top: unset;
  width: 2rem;
  height: 100%;
  background-color: #fff;
  border: none;
  color: #999;
  font-size: 1.8rem;
  font-weight: 600;
  opacity: 0;
  transition: opacity 0.3s, transform 0.3s;
}
.swiper-button-next:hover,
.swiper-button-prev:hover {
  opacity: 1;
}
.product-thumbs-wrap .swiper-button-prev {
  left: 0;
  transform: translateX(-100%);
}
.product-thumbs-wrap .swiper-button-next {
  left: auto;
  right: 0;
  transform: translateX(100%);
}
.product-thumbs-wrap .swiper-button-disabled {
  opacity: 0;
}
.product-thumbs-wrap:hover .swiper-button-next:not(.swiper-button-disabled),
.product-thumbs-wrap:hover .swiper-button-prev:not(.swiper-button-disabled) {
  opacity: 0.9;
  transform: none;
}
.product-thumb:before,
.product-thumbs-wrap button {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
}
.product-thumbs {
  display: flex;
}
.product-gallery:not(.product-gallery-vertical) .swiper-slide img {
  width: 100%;
}
.product-gallery:not(.product-gallery-vertical)
  .product-thumbs:not(.swiper-wrapper) {
  flex-wrap: nowrap;
}
.product-gallery:not(.product-gallery-vertical)
  .product-thumbs:not(.swiper-wrapper)
  .product-thumb {
  margin: 0;
}
.product-gallery:not(.product-gallery-vertical)
  .product-thumbs:not(.swiper-wrapper)
  .product-thumb:before {
  content: none;
}
.product-thumb {
  position: relative;
  cursor: pointer;
}
.product-thumb:before {
  content: "";
  transition: border-color 0.3s;
  border: 1px solid transparent;
}
.product-thumb.active:before {
  border-color: #ab8e66;
}
.swiper-slide-thumb-active:before {
  border-color: #ab8e66;
}
.rating-form {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  margin-bottom: 2.4rem;
}
.rating-form label {
  font-size: 1.4rem;
}
.rating-stars {
  display: flex;
  position: relative;
  height: 14px;
  font-size: 1.2rem;
  margin-left: 1rem;
}
.rating-stars a {
  color: #333;
  text-indent: -9999px;
  letter-spacing: 1px;
  width: 1.4rem;
}
.rating-stars a:before {
  content: "";
  position: absolute;
  left: 0;
  height: 14px;
  line-height: 1;
  font-family: "wolmart";
  text-indent: 0;
  overflow: hidden;
  white-space: nowrap;
  letter-spacing: 0.2em;
}
.rating-stars a.active:before,
.rating-stars a:hover:before {
  content: "";
  color: #ffb639;
}
.rating-stars .star-1 {
  z-index: 10;
}
.rating-stars .star-2 {
  z-index: 9;
}
.rating-stars .star-3 {
  z-index: 8;
}
.rating-stars .star-4 {
  z-index: 7;
}
.rating-stars .star-5 {
  z-index: 6;
}
.rating-stars .star-1:before {
  width: 20%;
}
.rating-stars .star-2:before {
  width: 40%;
}
.rating-stars .star-3:before {
  width: 60%;
}
.rating-stars .star-4:before {
  width: 80%;
}
.rating-stars .star-5:before {
  content: "";
}
.stock {
  margin-bottom: 3rem;
  font-size: 1.3rem;
  line-height: 1;
}
.product-single {
  color: inherit;
}
.product-single .product-categories {
  margin-bottom: 1.1rem;
}
.product-single .product-details {
  padding: 0;
}
.product-single .product-title {
  margin-bottom: 0.9rem;
  font-size: 2.4rem;
  font-weight: 600;
  letter-spacing: -0.025em;
  line-height: 1.6;
}
.product-single .product-title a {
  color: inherit;
}
.product-single .product-bm-wrapper {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
}
.product-single .brand {
  margin: 0 2rem 1rem 0;
  border: 1px solid #eee;
  border-radius: 0.5rem;
}
.product-single .product-meta {
  margin-bottom: 1rem;
}
.product-single .product-divider {
  margin: 1.4rem 0 2rem;
}
.product-single .social-icon {
  margin-right: 0.8rem;
}
.product-single .product-categories,
.product-single .product-sku {
  color: #666;
  font-size: 1.3rem;
  font-weight: normal;
  line-height: 1;
  letter-spacing: 0;
}
.product-single .product-categories span,
.product-single .product-sku span {
  color: #999;
}
.product-single .product-categories span:not(:last-child):after,
.product-single .product-sku span:not(:last-child):after {
  content: ",";
  display: inline-block;
  vertical-align: middle;
}
.product-single .product-categories a,
.product-single .product-sku a {
  color: inherit;
}
.product-single .product-categories a:hover,
.product-single .product-sku a:hover {
  color: #ab8e66;
}
.product-single .product-price {
  margin-bottom: 1.1rem;
  font-size: 3rem;
  color: #333;
  font-weight: 700;
  line-height: 1.2;
}
.product-single .old-price {
  font-size: 2.4rem;
}
.product-single .ratings-container {
  margin-bottom: 1.6rem;
  font-size: 1.4rem;
}
.product-single .ratings-full {
  font-weight: 600;
}
.product-single .ratings-full:before {
  color: rgba(0, 0, 0, 0.2);
}
.product-single .ratings:before {
  color: #ffb639;
}
.product-single .ratings,
.product-single .ratings-full {
  letter-spacing: 0.18em;
}
.product-single .rating-reviews {
  color: #999;
}
.product-single .product-short-desc {
  margin-bottom: 1.6rem;
  font-size: 1.3rem;
}
.product-single .product-form {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  position: relative;
}
.product-single .product-form .product-size {
  flex: 0 0 18rem;
  max-width: 18rem;
}
.product-single .product-form select {
  border: 1px solid #ccc;
  color: #999;
  font-size: 1.3rem;
  max-width: none;
  width: 100%;
  padding: 0.88em 2rem;
}
.product-single .product-form label {
  display: block;
  max-width: 7.5rem;
  flex: 0 0 7.5rem;
  padding: 0.6rem 0;
  font-size: 1.4rem;
  color: #333;
  line-height: 1;
}
.product-single .product-variations {
  justify-content: flex-start;
}
.product-single .product-variation-price {
  display: none;
  font-size: 2.4rem;
  font-weight: 600;
  color: #333;
  line-height: 1;
  margin-bottom: 1.2rem;
  padding-top: 2.8rem;
}
.product-single .product-color-swatch {
  margin-right: 4rem;
  margin-bottom: 2rem;
}
.product-single .product-color-swatch .color {
  display: block;
  text-align: center;
  width: 2.6rem;
  height: 2.6rem;
  border-radius: 50%;
  border: none;
  margin-right: 0;
}
.product-single .product-color-swatch .color + .color {
  margin-left: 0.8rem;
}
.product-single .product-color-swatch .color:before {
  content: "";
  display: inline-block;
  font-family: "Font Awesome 5 Free";
  font-size: 1.2rem;
  font-weight: 600;
  letter-spacing: -0.025em;
  color: #fff;
  line-height: 2.2;
}
.product-single .product-color-swatch .color.active:before {
  content: "";
}
.product-single .product-size-swatch {
  margin-bottom: 2rem;
}
.product-single .product-size-swatch .size {
  display: block;
  text-align: center;
  margin-bottom: 0.5rem;
  padding: 0.6rem 0.8rem;
  width: auto;
  height: auto;
  line-height: 1;
  font-size: 1.2rem;
  border: 1px solid #ccc;
  border-radius: 2px;
  color: #666;
  transition: border-color 0.35s, color 0.35s;
}
.product-single .product-size-swatch .size.active,
.product-single .product-size-swatch .size:hover {
  border-color: #ab8e66;
  color: #ab8e66;
}
.product-single .product-image-swatch {
  margin-bottom: 2rem;
}
.product-single .product-image-swatch .image {
  margin-right: 0.8rem;
  border: 1px solid #ccc;
  border-radius: 0.2rem;
  overflow: hidden;
  transition: border-color 0.3s;
}
.product-single .product-image-swatch .image img {
  width: 2.6rem;
  height: 2.6rem;
}
.product-single .product-image-swatch .image.active {
  border-color: #ab8e66;
}
.product-single .btn-cart,
.product-single .btn-product-icon,
.product-single .quantity {
  border-radius: 3px;
}
.product-single .btn-cart {
  flex: 1;
  margin-bottom: 1rem;
  padding-left: 0;
  padding-right: 0;
  min-width: 14rem;
}
.product-single .btn-cart i {
  margin: 0 0.4rem 0.2rem 0;
  font-size: 1.7rem;
}
.product-single .btn-cart.disabled {
  background-color: #eee;
  border-color: #eee;
  color: #666;
  cursor: not-allowed;
}
.product-single .product-qty-form {
  display: flex;
  align-items: center;
  flex: 0 0 14rem;
  max-width: 14rem;
  margin-bottom: 1rem;
  margin-right: 2rem;
}
.product-single .social-links-wrapper {
  display: flex;
  flex-wrap: wrap;
  margin-top: 1.3rem;
}
.product-single .social-links-wrapper > * {
  margin-right: 2rem;
  margin-bottom: 1rem;
}
.product-single .social-links-wrapper .btn-product-icon {
  width: 1.8rem;
  height: auto;
  margin-right: 1.6rem;
  margin-bottom: 0;
  font-size: 1.8rem;
  border: none;
  color: #333;
  overflow: initial;
  background-color: transparent;
}
.product-single .social-links-wrapper .btn-product-icon.btn-compare {
  font-size: 2rem;
}
.product-single .social-links-wrapper .btn-product-icon:hover {
  background-color: transparent;
  color: #ab8e66;
}
.product-single .social-links-wrapper .divider {
  width: 1px;
  height: 1.8rem;
  background: #e1e1e1;
  margin-top: 1rem;
}
.product-single .social-icons {
  flex-wrap: nowrap;
}
.product-single.product-grid .product-image-full {
  right: 2.5rem;
}
.product-single .product-variation-clean {
  display: none;
  font-size: 1.2rem;
  background: #f4f4f4;
  padding: 0.3em 1em;
  color: #333;
  position: absolute;
  top: 100%;
  margin-top: 1rem;
  z-index: 1;
}
.product-thumbs-sticky .product-image-wrapper {
  flex: 0 0 calc(100% - 10rem);
  max-width: calc(100% - 10rem);
}
.product-thumbs-sticky .product-thumbs-wrap {
  flex: 0 0 9rem;
  max-width: 9rem;
  margin-right: 1rem;
  margin-top: 0;
}
.product-thumbs-sticky .product-thumbs {
  transition: none;
}
.product-thumbs-sticky .product-image {
  margin-bottom: 2rem;
}
.product-gallery-vertical.product-thumbs-sticky .product-thumbs-wrap {
  order: -1;
}
.product-gallery-vertical.product-thumbs-sticky .product-thumbs {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  margin: -1rem 0;
  max-width: 100%;
  bottom: auto;
}
.product-gallery-vertical.product-thumbs-sticky .product-thumb {
  margin: 1rem 0;
}
.single-product .nav-top > .swiper-button-prev {
  right: 0.5rem;
}
.single-product .nav-top > .swiper-button-next {
  right: 0.2rem;
}
.single-product .nav-top > .swiper-button-next,
.single-product .nav-top > .swiper-button-prev {
  width: 15px;
  top: -6.2rem;
  color: #666;
  font-size: 1.3rem;
  font-weight: 600;
}
.single-product
  .nav-top
  > .swiper-button-next:not(.swiper-button-disabled):hover,
.single-product
  .nav-top
  > .swiper-button-prev:not(.swiper-button-disabled):hover {
  color: #ab8e66;
}
@media (min-width: 992px) {
  .product-gallery-vertical
    .product-thumbs-wrap:not(.swiper-container-initialized)
    .product-thumb {
    margin-bottom: 1rem;
  }
  .product-gallery-vertical .product-thumbs-wrap {
    order: -1;
    max-width: 9rem;
    margin: 0 1rem 0 0;
  }
  .product-gallery-vertical
    .product-thumbs-wrap:hover
    .swiper-button-next:not(.swiper-button-disabled),
  .product-gallery-vertical
    .product-thumbs-wrap:hover
    .swiper-button-prev:not(.swiper-button-disabled) {
    opacity: 0.9;
    transform: none;
  }
  .product-gallery-vertical .product-thumbs-wrap .swiper-button-next,
  .product-gallery-vertical .product-thumbs-wrap .swiper-button-prev {
    display: flex;
    margin-top: 0;
    width: 100%;
    height: 2.5rem;
  }
  .product-gallery-vertical .product-thumbs-wrap .swiper-button-prev {
    top: 0;
    transform: translateY(-100%);
  }
  .product-gallery-vertical .product-thumbs-wrap .swiper-button-prev:before {
    content: "";
  }
  .product-gallery-vertical .product-thumbs-wrap .swiper-button-next {
    bottom: 0;
    transform: translateY(100%);
  }
  .product-gallery-vertical .product-thumbs-wrap .swiper-button-next:before {
    content: "";
  }
  .product-gallery-vertical .product-single-swiper {
    max-width: calc(100% - 10rem);
  }
  .product-gallery-vertical .product-thumbs {
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: 0;
    max-width: 100%;
  }
  .product-gallery-vertical .product-thumb {
    padding: 0;
    height: auto;
  }
}
@media (max-width: 991px) {
  .product-single .product-form .product-size {
    flex: 0 0 14rem;
    max-width: 14rem;
  }
}
@media (min-width: 768px) {
  .product-single .product-details {
    padding: 0.2rem 0 0 1rem;
  }
}
@media (max-width: 479px) {
  .product-single:not(.product-popup) .product-qty-form {
    margin-right: 1rem;
  }
}
.product {
  position: relative;
  font-family: Poppins, sans-serif;
  font-size: 1rem;
  color: #020101;
  transition: box-shadow 0.3s, opacity 0.3s;
}
.product:hover .product-action,
.product:hover .product-action-horizontal,
.product:hover .product-action-vertical {
  visibility: visible;
  opacity: 1;
}
.product:hover .product-action-horizontal {
  bottom: 1.5rem;
}
.product .product-price {
  display: block;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
}
.product-media {
  position: relative;
  margin-bottom: 0;
  transition: box-shadow 0.35s;
}
.product-media img {
  display: block;
  width: 100%;
  height: auto;
  transition: opacity 0.4s;
}
.product-media img:last-child {
  position: absolute;
  opacity: 0;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  object-fit: cover;
}
.product-media img:first-child {
  position: relative;
  opacity: 1;
}
.product-media:hover img:last-child {
  opacity: 1;
}
.product-label-group {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  position: absolute;
  left: 2rem;
  top: 2rem;
  max-width: 11rem;
  z-index: 1;
}
.product-label {
  display: inline-block;
  text-align: center;
  margin-bottom: 0.5rem;
  font-size: 1.2em;
  letter-spacing: -0.005em;
  color: #fff;
  line-height: 1;
  padding: 0.6rem 1rem;
  border-radius: 0.3rem;
  text-transform: uppercase;
}
.product-label.label-new {
  background: #ab8e66;
  padding: 0.6rem 1rem;
}
.product-label.label-discount {
  background: #ffb639;
}
.product-label.label-hot {
  background: #799b5a;
}
.product-sales-wrapper {
  position: relative;
  margin-bottom: 1.4rem;
}
.product-sales-wrapper .progress-bar {
  height: 1rem;
  background: #eee;
  margin-bottom: 0.7rem;
}
.product-sales-wrapper .product-sales-count {
  color: #666;
  font-size: 1.3rem;
}
.product-sales-wrapper .product-sales-count mark {
  background-color: transparent;
  color: inherit;
}
.btn-product {
  display: flex;
  align-items: center;
  justify-content: center;
  flex: 1;
  padding: 1.14em 0;
  line-height: 1.2;
  background-color: #ab8e66;
  color: #fff;
  font-size: 1.4em;
  font-weight: 600;
  letter-spacing: -0.025em;
  text-transform: uppercase;
  transition: opacity 0.3s;
}
.btn-product:active,
.btn-product:hover {
  color: #fff;
}
.btn-product.btn-link {
  display: inline-block;
  font-weight: 600;
  font-size: 1.3rem;
  line-height: 1.6;
  flex: none;
  background-color: transparent;
  padding: 0;
}
.btn-product.btn-link:after {
  margin-top: 0;
}
.btn-product.btn-sm {
  padding: 0.693em 0;
}
.btn-wishlist {
  line-height: 1;
}
.btn-wishlist i:before {
  margin: 0;
}
.btn-cart {
  font-weight: 600;
}
.btn-cart.btn-link {
  color: #ab8e66;
}
.btn-cart.btn-link:active,
.btn-cart.btn-link:hover {
  color: #ab8e66;
}
.btn-cart:not(.btn-product-icon) i.w-icon-cart {
  font-size: 1.8rem;
  margin-bottom: 0.4rem;
}
.btn-product-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 3.6rem;
  height: 3.6rem;
  margin-bottom: 0.5rem;
  background-color: #fff;
  border: 1px solid #eee;
  color: #999;
  font-size: 1.8em;
  font-weight: 400;
  line-height: 3.5rem;
  overflow: hidden;
  transition: background-color 0.3s, border-color 0.3s, color 0.3s,
    visibility 0.3s, opacity 0.3s, transform 0.3s;
}
.btn-product-icon:active,
.btn-product-icon:hover {
  border-color: #ab8e66;
  color: #fff;
  background-color: #ab8e66;
}
.btn-product-icon.btn-cart,
.btn-product-icon.btn-quickview {
  font-size: 1.6em;
}
.btn-product-icon.btn-compare {
  font-size: 2em;
}
.product-action-vertical .btn-product-icon {
  border-radius: 50%;
}
.btn-product-icon.btn-cart {
  margin-bottom: 0.2rem;
}
.btn-product-icon.loading {
  background-color: rgba(255, 255, 255, 0.2);
}
.btn-product-icon.loading:before {
  opacity: 0.4;
}
.product-action {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  background-color: transparent;
  z-index: 10;
  transition: opacity 0.3s, visibility 0.3s, bottom 0.3s;
  opacity: 0;
  visibility: hidden;
}
.product-action-vertical {
  position: absolute;
  top: 1.5rem;
  right: 1.5rem;
  transition: opacity 0.3s, visibility 0.3s;
  opacity: 0;
  visibility: hidden;
}
.product-action-horizontal {
  display: flex;
  align-items: center;
  position: absolute;
  justify-content: center;
  background-color: #fff;
  box-shadow: 5px 5px 8px rgba(0, 0, 0, 0.08);
  left: 50%;
  transform: translateX(-50%);
  bottom: 0;
  width: 166px;
  max-width: 80%;
  border-radius: 3px;
  padding: 5px;
  opacity: 0;
  visibility: visible;
  transition: opacity 0.3s, visibility 0.3s, bottom 0.3s;
}
.product-action-horizontal .btn-product-icon {
  margin-bottom: 0;
  border: none;
  color: #333;
}
.product-action-horizontal .btn-product-icon.btn-wishlist {
  font-size: 1.7em;
}
.product-action-horizontal .btn-product-icon.btn-compare {
  font-size: 1.9em;
}
.product-action-horizontal .btn-product-icon:active,
.product-action-horizontal .btn-product-icon:focus,
.product-action-horizontal .btn-product-icon:hover,
.product-hidden-details .btn-product-icon:active,
.product-hidden-details .btn-product-icon:focus,
.product-hidden-details .btn-product-icon:hover,
.product-list .product-details .btn-product-icon:active,
.product-list .product-details .btn-product-icon:focus,
.product-list .product-details .btn-product-icon:hover {
  background-color: transparent;
  color: #ab8e66;
}
.product-details {
  position: relative;
  padding-top: 1.7rem;
  background-color: #fff;
  transition: box-shadow 0.3s;
}
.product-details > .btn-wishlist {
  position: absolute;
  top: 1.7rem;
  right: 0;
  color: #999999;
  font-size: 1.8em;
  z-index: 1;
}
.product-details > .btn-wishlist.loading {
  right: 1.8rem;
}
.product-details > .btn-wishlist.loading:after {
  left: 0.9rem;
  top: 0.9rem;
}
.product-details > .btn-wishlist:hover {
  color: #ab8e66;
}
.product-details > .btn-wishlist:hover i {
  transform: rotateY(180deg);
}
.product-hidden-details .product-action {
  position: relative;
  visibility: hidden;
  opacity: 0;
}
.product-hidden-details .product-action .btn-wishlist {
  position: static;
}
.product-hidden-details .btn-cart {
  flex: 1;
  min-width: 9.5rem;
  max-width: 12.3rem;
  height: 3.5rem;
  padding: 0.92em 0;
  font-size: 1.3rem;
  font-weight: 600;
  transition: color 0.3s, background-color 0.3s, border-color 0.3s;
  z-index: 1;
  background-color: #454545;
  border-radius: 0.3rem;
}
.product-hidden-details .btn-cart:hover {
  background-color: #ab8e66;
  border-color: #ab8e66;
}
.product-hidden-details .btn-cart i {
  margin: 0;
  display: none;
}
.product-hidden-details .btn-product-icon {
  visibility: hidden;
  opacity: 0;
}
.product-hidden-details .btn-product-icon,
.product-list .product-details .btn-product-icon {
  width: 3rem;
  height: 3.5rem;
  margin: 0 0 0 1rem;
  border: none;
  color: #333;
  text-align: center;
}
.product-hidden-details .btn-product-icon.btn-compare,
.product-list .product-details .btn-product-icon.btn-compare {
  margin-left: 0.8rem;
}
.product-hidden-details .btn-wishlist,
.product-list .btn-wishlist {
  font-size: 1.8rem;
}
.product-hidden-details .btn-compare,
.product-list .btn-compare {
  font-size: 2rem;
}
.product-name {
  margin-bottom: 0.7rem;
  font-size: 1.3rem;
  font-weight: 500;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.product-name a {
  color: inherit;
}
.product-name a:hover {
  color: #ab8e66;
}
.product-cat {
  margin-bottom: 0.5rem;
  font-size: 1.1rem;
  color: #999;
  line-height: 1;
  text-transform: uppercase;
}
.product-cat a {
  display: inline-block;
  color: inherit;
}
.product-cat a:hover {
  color: #ab8e66;
}
.product-variations {
  display: flex;
  justify-content: center;
}
.product-variations > a {
  border: 1px solid #ccc;
  background-position: center;
  background-repeat: no-repeat;
  background-color: #fff;
  width: 2.6rem;
  height: 2.6rem;
  border-radius: 0.3rem;
  transition: border-color 0.3s;
}
.product-variations > a:not(:last-child) {
  margin-right: 0.8rem;
}
.product-variations > a:not(.color).active,
.product-variations > a:not(.color):hover {
  border: 1px solid #ab8e66;
}
.ratings-container {
  display: flex;
  align-items: center;
  line-height: 1;
  margin-bottom: 0.6rem;
  font-size: 1.2rem;
}
.ratings,
.ratings-full {
  position: relative;
  font-family: "wolmart";
  letter-spacing: 0.2em;
}
.ratings-full {
  cursor: pointer;
  margin-right: 0.5rem;
}
.ratings-full:before {
  content: "" "" "" "" "";
  color: rgba(0, 0, 0, 0.16);
  white-space: nowrap;
}
.ratings-full:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
.ratings {
  position: absolute;
  top: 0;
  left: 0;
  white-space: nowrap;
  overflow: hidden;
}
.ratings:before {
  content: "" "" "" "" "";
  color: #ffb639;
}
.rating-reviews {
  margin: 2px 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  text-transform: capitalize;
  font-size: 1.2rem;
  color: #aaa;
}
.rating-reviews:hover {
  color: #ab8e66;
}
.product-price {
  align-items: baseline;
  font-size: 1.6rem;
  font-weight: 600;
  letter-spacing: -0.05em;
  line-height: 1.6;
  transition: visibility 0.4s, opacity 0.4s;
}
.product-price .old-price {
  font-weight: 400;
  color: #aaa;
}
.product-price .new-price {
  color: #333;
  text-decoration: none;
}
.product-price .new-price:not(:last-child) {
  margin-right: 1rem;
}
.product-price:not(:last-child) {
  margin-bottom: 0.9rem;
}
.sold-by {
  margin-bottom: 0.5rem;
  font-size: 1.2rem;
  color: #666;
}
.sold-by a {
  color: #ab8e66;
}
.product-wrap {
  margin-bottom: 2rem;
}
.product-simple:hover .product-price {
  visibility: hidden;
  opacity: 0;
}
.product-slideup-content {
  overflow: hidden;
}
.product-slideup-content .product-hidden-details {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  padding-top: 1.5rem;
  transform: translateY(0);
  transition: transform 0.3s;
  background-color: #fff;
}
.product-slideup-content .product-details {
  background-color: #fff;
  transition: transform 0.3s;
}
.product-slideup-content .btn-wishlist {
  transform: translateX(-150%);
}
.product-slideup-content .btn-compare {
  transform: translateX(-300%);
}
.product-slideup-content:hover .product-details,
.product-slideup-content:hover .product-hidden-details {
  transform: translateY(-50px);
}
.product-slideup-content:hover .btn-product-icon {
  transform: translateX(0);
  visibility: visible;
  opacity: 1;
}
.product-image-gap {
  padding: 0.9rem;
  border: 1px solid #eee;
  background-color: #fff;
}
.product-image-gap .product-details {
  padding: 1.8rem 1rem 1rem;
}
.product-image-gap.product-classic .product-action {
  left: 0;
  bottom: 0;
}
.product-image-gap:hover {
  box-shadow: 0 5px 30px rgba(0, 0, 0, 0.05);
}
.product-widget {
  display: flex;
  align-items: center;
}
.product-widget .product-name {
  font-size: 1.3rem;
  white-space: normal;
  line-height: 1.45;
  margin-bottom: 0.6rem;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
.product-widget {
  padding: 1rem 0;
}
.product-widget .product-media {
  flex: 0 0 11rem;
  margin: 0 1rem 0 0;
  max-width: 11rem;
  padding: 0 1rem 0 0;
}
.product-widget .product-details {
  padding: 0 1rem 0 0;
}
.product-widget .product-name {
  margin-bottom: 0.7rem;
  color: #666;
}
.product-widget .product-price {
  font-size: 1.5rem;
}
.sidebar .product-widget {
  padding: 1rem 0;
}
.sidebar .product-widget .product-media {
  flex: 0 0 35.73%;
  max-width: 35.73%;
  min-width: 33.33%;
  margin-right: 1rem;
  padding: 0;
}
.sidebar .product-widget .product-name {
  margin-bottom: 0.6rem;
  color: #333;
}
.sidebar .product-widget .ratings-container {
  margin-bottom: 0.5rem;
}
.product.text-center .ratings-container {
  text-align: start;
}
.product.text-center .product-action,
.product.text-center .ratings-container {
  justify-content: center;
}
.product .product-pa-wrapper {
  position: relative;
  display: inline-flex;
}
.product .product-pa-wrapper .product-price {
  margin-bottom: 0;
}
.product .product-pa-wrapper .product-action {
  bottom: -1rem;
}
.product .product-pa-wrapper .load-more-overlay.loading:after {
  top: 0;
}
.product:hover .product-pa-wrapper .product-action {
  bottom: 0;
}
.product-list {
  display: flex;
  align-items: center;
  padding-bottom: 2rem;
}
.product-list .product-media {
  flex: 0 0 26rem;
  max-width: 26rem;
  margin-right: 2rem;
}
.product-list .product-details {
  padding: 0;
}
.product-list .product-name {
  font-size: 1.8rem;
  font-weight: 600;
  margin-bottom: 0.5rem;
}
.product-list .ratings-container {
  margin-bottom: 0.9rem;
}
.product-list .product-price {
  margin-bottom: 0.6rem;
  font-size: 1.8rem;
}
.product-list .product-action {
  position: relative;
  visibility: visible;
  opacity: 1;
}
.product-list .product-desc {
  margin-bottom: 3.9rem;
  font-size: 1.3rem;
  color: #666;
  line-height: 1.9;
}
.product-list .product-desc li {
  position: relative;
  padding-left: 2rem;
  line-height: 1.86;
}
.product-list .product-desc li:before {
  position: absolute;
  display: block;
  left: 0;
  top: 1px;
  content: "";
  font-family: "wolmart";
  font-weight: 700;
}
.product-list .btn-product {
  display: inline-block;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  text-align: center;
  padding: 0.86em 0.5em;
  max-width: 17.6rem;
  background-color: transparent;
  border: 2px solid #ccc;
  color: #333;
  font-size: 1.4rem;
  border-radius: 0.3rem;
  transition: background-color 0.3s, border-color 0.3s, color 0.3s;
}
.product-list .btn-product:hover {
  background-color: #ab8e66;
  border-color: #ab8e66;
  color: #fff;
}
.product-list .btn-product i.w-icon-cart {
  margin: 0 0.8rem 0 0;
  font-size: 1.7rem;
}
.product-absolute:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(34, 34, 34, 0.6);
  opacity: 0;
  z-index: 1;
  transition: opacity 0.3s;
}
.product-absolute .product-name {
  position: absolute;
  left: 0;
  right: 0;
  padding: 0 1rem;
  white-space: normal;
  margin-bottom: 0;
  top: 50%;
  transform: translateY(-50%);
  color: #fff;
  margin-top: 1rem;
  transition: margin-top 0.3s, opacity 0.3s;
  opacity: 0;
  z-index: 1;
}
.product-absolute .product-name:hover a {
  text-decoration: underline;
}
.product-absolute:hover {
  box-shadow: 0 2rem 1.6rem -1.6rem rgba(0, 0, 0, 0.5);
}
.product-absolute:hover:before {
  opacity: 1;
}
.product-absolute:hover .product-name {
  margin-top: 0;
  opacity: 1;
}
.product-absolute:hover .product-name a {
  color: #fff;
}
@media (max-width: 575px) {
  .product-list {
    display: block;
    margin-bottom: 2rem;
  }
  .product-list .product-media {
    max-width: 100%;
    flex: 0 0 100%;
    margin: 0 0 2rem 0;
  }
}
@media (max-width: 479px) {
  .product:not(.product-list) {
    font-size: 0.8rem;
  }
  .product:not(.product-list) .btn-product-icon {
    width: 3rem;
    height: 3rem;
  }
  .product:not(.product-list) .product-label-group {
    top: 1rem;
    left: 1rem;
  }
  .product:not(.product-list) .product-action-vertical {
    top: 1rem;
    right: 1rem;
  }
  .product-hidden-details .btn-cart {
    max-width: 3.5rem;
    min-width: auto;
  }
  .product-hidden-details .btn-cart i {
    display: block;
  }
  .product-hidden-details .btn-cart span {
    display: none;
  }
}
.right-sidebar-active .right-sidebar .sidebar-overlay,
.sidebar-active .sidebar .sidebar-overlay {
  visibility: visible;
  opacity: 0.5;
}
.right-sidebar-active .right-sidebar .sidebar-close,
.sidebar-active .sidebar .sidebar-close {
  opacity: 1;
  visibility: visible;
}
.right-sidebar-active .right-sidebar .sidebar-content,
.sidebar-active .sidebar .sidebar-content {
  transform: translateX(0);
  opacity: 1;
}
.sidebar-close,
.sidebar-content,
.sidebar-overlay,
.sidebar-toggle {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 2200;
}
.sidebar-overlay {
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.8);
  opacity: 0;
  visibility: hidden;
  transition: visibility 0.4s, opacity 0.4s;
}
.sidebar-toggle {
  display: flex;
  align-items: center;
  justify-content: center;
  top: 206px;
  width: 40px;
  height: 40px;
  font-size: 1.4rem;
  color: #fff;
  background-color: #222;
  opacity: 0.6;
  transition: opacity 0.4s;
}
.sidebar-toggle:hover {
  opacity: 0.8;
  color: #fff;
}
.right-sidebar .sidebar-toggle {
  border-radius: 0.3rem 0 0 0.3rem;
}
.left-sidebar .sidebar-toggle {
  border-radius: 0 0.3rem 0.3rem 0;
}
.sidebar-close {
  opacity: 0;
  visibility: hidden;
  margin: 0;
  left: calc(100vw - 50px);
  top: 25px;
  z-index: 2201;
  transition: opacity 0.4s, visibility 0.4s;
}
.sidebar-content {
  bottom: 0;
  width: 31rem;
  padding: 2rem;
  transform: translateX(-100%);
  overflow: auto;
  background-color: #fff;
  opacity: 0;
  line-height: 1.3;
  transition: transform 0.4s, opacity 0.4s;
}
.widget:not(.widget-collapsible) .widget-title {
  border: none;
}
.sidebar .widget:last-child .widget-body {
  padding-bottom: 0;
}
.right-sidebar {
  order: 2;
}
.right-sidebar .sidebar-toggle {
  left: auto;
  right: 0;
}
.right-sidebar .sidebar-close {
  left: 10px;
  padding: 10px;
}
.right-sidebar .sidebar-content {
  transform: translateX(100%);
  left: auto;
  right: 0;
}
.right-sidebar .sidebar-content::-webkit-scrollbar {
  width: 0;
}
.filter-actions {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0.8rem 0 1.7rem;
}
.filter-actions label {
  font-size: 1.6rem;
  font-weight: 600;
  letter-spacing: -0.025em;
  color: #333;
}
.filter-actions .filter-clean {
  padding-bottom: 0;
  text-transform: capitalize;
  font-weight: 400;
}
.price-range {
  display: flex;
  margin: 1.3rem 0 1rem;
}
.price-range input {
  padding: 0.5rem;
  font-family: Poppins, sans-serif;
  color: #999;
  border: 1px solid #ccc;
  border-radius: 3px;
  width: 62px;
  height: 37px;
  line-height: 37px;
  vertical-align: middle;
  -webkit-appearance: textfield;
}
.price-range input::-webkit-inner-spin-button,
.price-range input::-webkit-outer-spin-button {
  -webkit-appearance: none;
}
.price-range input::-moz-placeholder,
.price-range input::-webkit-input-placeholder,
.price-range input::placeholder {
  color: inherit;
}
.price-range .delimiter {
  display: flex;
  position: relative;
  justify-content: center;
  align-items: center;
  margin: 0 0.65rem;
  font-size: 1.9rem;
  font-weight: 600;
  color: #999;
}
.price-range .btn {
  padding: 0;
  font-size: 1.3rem;
  font-weight: 400;
  width: 4.8rem;
  height: 3.7rem;
  vertical-align: middle;
  line-height: 2.6;
  margin-left: 1rem;
  text-transform: none;
}
.filter-items {
  font-size: 1.4rem;
}
.filter-items a {
  position: relative;
  display: block;
  color: inherit;
  padding: 1rem 0 1rem 0.2rem;
}
.filter-items a:hover {
  color: #ab8e66;
}
.filter-items.item-check a {
  padding-left: 2.8rem !important;
}
.filter-items.item-check a:before {
  content: "";
  position: absolute;
  border: 1px solid;
  border-radius: 2px;
  width: 18px;
  height: 18px;
  top: 50%;
  transform: translateY(-50%);
  left: 2px;
  color: #999;
  font-size: 1rem;
  font-weight: 900;
  font-family: "Font Awesome 5 Free";
  text-align: center;
  text-indent: 1px;
  line-height: 1.3em;
}
@media (-webkit-min-device-pixel-ratio: 1.5),
  (min--moz-device-pixel-ratio: 1.5),
  (min-device-pixel-ratio: 1.5) {
  .filter-items.item-check a:before {
    text-indent: 0;
  }
}
.filter-items.item-check .active > a:before {
  content: "";
  background-color: #ab8e66;
  width: 20px;
  height: 20px;
  color: #fff;
  border-radius: 3px;
  left: 1px;
  padding-top: 3px;
  font-weight: 600;
}
.filter-items.search-ul a:before {
  content: none;
}
.filter-items .show > a {
  color: #ab8e66;
}
.filter-items .show > a i {
  transform: rotate(-180deg);
}
.filter-items li span {
  position: absolute;
  right: 0;
  color: #ccc;
}
.filter-items .with-ul > a > i {
  position: absolute;
  right: 0;
  line-height: 0;
  font-size: 1.2rem;
  font-weight: 600;
  transition: transform 0.4s;
  top: 50%;
}
.filter-items ul {
  display: none;
  position: relative;
  padding-left: 1.2rem;
  margin: 0.2rem 0;
}
.filter-items ul:before {
  content: "";
  position: absolute;
  left: 0px;
  top: 7px;
  bottom: 7px;
  border-left: 1px solid #eee;
}
.filter-items ul a {
  font-size: 1.3rem;
  color: #999;
  padding: 0.45rem 0;
}
.toolbox-horizontal .sidebar-fixed {
  max-width: none;
  flex: none;
}
.toolbox-horizontal.toolbox .left-sidebar-toggle {
  padding: 0.65em;
  margin-bottom: 0;
}
.toolbox-horizontal .select-menu select,
.toolbox-horizontal .toolbox-show select {
  padding-top: 0.65em;
  padding-bottom: 0.65em;
}
.toolbox-horizontal .toolbox-show select {
  padding-left: 1.4rem;
  padding-right: 3.1rem;
}
.toolbox-horizontal .select-box:before {
  right: 0.9rem;
}
.toolbox-horizontal .toolbox-layout {
  margin-left: 2rem;
}
.toolbox-horizontal .select-menu:not(.toolbox-sort) {
  display: block;
}
.toolbox-horizontal .select-menu:not(.toolbox-sort):before {
  content: none;
}
.toolbox-horizontal .select-menu-toggle {
  font-size: 1.6rem;
  font-weight: 600;
  color: #333;
  padding: 1.3rem 0;
  display: flex;
  border-bottom: 1px solid #eee;
}
.toolbox-horizontal .filter-items {
  padding: 0.7rem 0 1rem;
}
.toolbox-horizontal .filter-items a:not(.btn) {
  padding: 1rem 0;
  color: #333;
}
.toolbox-horizontal .filter-items .btn {
  color: #fff;
}
@media (min-width: 992px) {
  .toolbox-horizontal {
    padding: 2rem;
    margin: -2rem;
  }
  .toolbox-horizontal .sidebar-fixed .sidebar-content.toolbox-left {
    padding-bottom: 0;
  }
  .toolbox-horizontal .toolbox-left .toolbox-item {
    margin-right: 1rem;
    margin-bottom: 1rem;
  }
  .toolbox-horizontal .toolbox-left .toolbox-item.opened .filter-items {
    opacity: 1;
    visibility: visible;
  }
  .toolbox-horizontal .filter-items {
    position: absolute;
    top: 100%;
    margin-top: 0.5rem;
    min-width: 23rem;
    padding: 1rem 2rem 2rem;
    font-size: 1.2rem;
    color: #333;
    visibility: hidden;
    opacity: 0;
    z-index: 100;
    box-shadow: 0 5px 16px rgba(0, 0, 0, 0.12);
    background-color: #fff;
  }
  .toolbox-horizontal .filter-items li {
    display: inline-flex;
    margin: 1rem 0.5rem 0 0;
  }
  .toolbox-horizontal .filter-items a:not(.btn) {
    background: #f5f5f5;
    padding: 0.5em 1em;
    border-radius: 0.3rem;
  }
  .toolbox-horizontal .filter-items .active > a {
    background-color: #ab8e66;
    color: #fff;
  }
  .toolbox-horizontal .select-menu:before {
    font-size: 1.1rem;
    right: 1rem;
    color: #333;
  }
  .toolbox-horizontal .select-menu-toggle {
    position: relative;
    border: 1px solid #ccc;
    font-weight: 400;
    font-size: 1.2rem;
    color: #222;
    line-height: 1.5;
    padding: 0.65em 4.3em 0.65em 1.2em;
    text-transform: none;
    border-radius: 0.3rem;
    transition: border-color 0.4s, color 0.4s;
  }
  .toolbox-horizontal .select-menu-toggle:after {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 0.9rem;
    font-family: "wolmart";
    content: "";
    font-size: 1.1rem;
    font-weight: 600;
    line-height: 1;
  }
  .toolbox-horizontal .filter-items.item-check a {
    padding-left: 1em !important;
  }
  .toolbox-horizontal .filter-items.item-check a:before {
    content: none;
  }
  .toolbox-horizontal .price-range {
    margin: 0;
  }
}
.shop-sidebar {
  position: relative;
}
.shop-sidebar .widget-body {
  margin-bottom: 1rem;
}
.shop-sidebar .filter-price-text {
  font-size: 1.3rem;
  letter-spacing: -0.025em;
}
.widget-icon-box {
  padding: 0 2rem;
  border-radius: 0.5rem;
  border: 1px solid #eee;
}
.widget-icon-box .icon-box-side {
  justify-content: left;
  padding: 2rem 0;
}
.widget-icon-box .icon-box-side:not(:last-child) {
  border-bottom: 1px solid #eee;
}
.widget-icon-box i.w-icon-truck {
  font-size: 3.4rem;
}
.widget-icon-box i.w-icon-bag,
.widget-icon-box i.w-icon-money {
  font-size: 3rem;
}
.widget-icon-box .icon-box-title {
  font-weight: 600;
}
.widget-icon-box p {
  color: #999;
}
.widget-banner .banner-content {
  left: 10.7%;
  bottom: 12.5%;
}
.widget-banner .banner-price-info {
  margin-left: -2px;
  margin-bottom: 0.2rem;
  font-size: 4.6em;
}
.widget-banner sup {
  margin-left: 1px;
  vertical-align: 12px;
  font-size: 0.652em;
}
.widget-banner sub {
  margin-left: -1.7em;
  vertical-align: 0;
  font-size: 0.26em;
}
.widget-banner .banner-subtitle {
  font-size: 1.6rem;
}
.widget.widget-products .title {
  margin-bottom: 0.7rem;
  font-size: 1.6rem;
}
.widget.widget-products .title.title-link:before {
  height: 2px;
  background-color: #666;
  bottom: -0.7rem;
}
.widget.widget-products .swiper-button-next,
.widget.widget-products .swiper-button-prev {
  top: -4.5rem;
  right: -0.5rem;
  font-size: 1.6rem;
  font-weight: 600;
}
.widget.widget-products .swiper-button-prev {
  right: 0.3rem;
}
.widget.widget-products .swiper-button-next {
  right: 0.2rem;
}
.blog-sidebar .widget .widget-title {
  cursor: default;
}
.blog-sidebar .widget .widget-body {
  padding: 0;
}
.blog-sidebar .widget:not(:last-child) .widget-body {
  margin-bottom: 2.5rem;
}
.blog-sidebar .widget:last-child .widget-body {
  margin-bottom: 1rem;
}
.blog-sidebar .widget .widget-title {
  margin-bottom: 1rem;
}
.widget-search-form .form-control {
  border-radius: 0.3rem 0 0 0.3rem;
  font-size: 1.2rem;
  color: #777;
}
.widget-search-form .btn-search {
  padding: 0.9em 1.07em 1em;
  border-width: 1px 1px 1px 0;
  border-color: #eee;
  border-radius: 0 0.3rem 0.3rem 0;
}
.widget-search-form .btn-search i {
  font-size: 1.8rem;
}
.widget-search-form .btn-search:active,
.widget-search-form .btn-search:focus,
.widget-search-form .btn-search:hover {
  background-color: #fff;
  color: #ab8e66;
}
.widget-posts .swiper-button-next,
.widget-posts .swiper-button-prev {
  top: -4.2rem;
  border: none;
  width: auto;
  height: auto;
  font-size: 1.5rem;
  font-weight: 600;
}
.widget-posts .swiper-button-next:not(.swiper-button-disabled):hover,
.widget-posts .swiper-button-prev:not(.swiper-button-disabled):hover {
  background-color: #fff;
  color: #ab8e66;
}
.widget-posts .swiper-button-prev {
  right: 0.4rem;
}
.widget-posts .swiper-button-next {
  right: 0.3rem;
}
.widget-custom-block p {
  line-height: 1.6;
}
.tags .tag {
  display: inline-block;
  margin: 0.5rem 1rem 0.5rem 0;
  padding: 0.5rem 0.9rem;
  font-size: 1.3rem;
  border: 1px solid #ccc;
  line-height: 1.35;
  text-transform: capitalize;
  color: #333;
  border-radius: 0.3rem;
  transition: color 0.3s, border-color 0.3s;
}
.tags .tag:hover {
  border-color: #ab8e66;
  color: #ab8e66;
}
.vendor-sidebar .widget-collapsible .widget-body {
  padding-top: 2rem;
  padding-bottom: 3rem;
}
.vendor-sidebar .widget-categories .widget-body {
  padding: 0.7rem 0 2rem;
}
.vendor-sidebar .widget-time .widget-body {
  padding: 0.3rem 0 2rem;
}
.vendor-sidebar .widget.widget-products .widget-body {
  padding: 1rem 0 2rem;
}
.vendor-sidebar .product-widget .product-media {
  padding-left: 0.2rem;
}
.vendor-sidebar .product-widget .product-details {
  padding-bottom: 0.8rem;
}
.vendor-sidebar .product-widget .product-name {
  margin-bottom: 0.6rem;
}
.vendor-sidebar .product-widget .ratings-container {
  margin-bottom: 0.4rem;
}
.vendor-sidebar .product-widget .product-price {
  font-size: 1.6rem;
}
.widget-contact .form-control {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  font-size: 1.3rem;
  border-color: #e1e1e1;
  border-radius: 0.3rem;
}
.widget-contact input {
  min-height: 4.4rem;
  padding-top: 0.9rem;
  padding-bottom: 1rem;
  margin-bottom: 1rem;
}
.widget-contact textarea {
  min-height: 17.4rem;
  padding-top: 1.1rem;
  padding-bottom: 1.1rem;
  margin-bottom: 2rem;
}
.widget-time li {
  padding: 1rem 0;
}
.widget-time label:after {
  content: "-";
  display: inline-block;
  margin-left: 0.4rem;
}
.widget-time .widget-body span {
  display: inline-block;
  width: 11rem;
  font-weight: 600;
  color: #333;
}
.widget-wcmp-contact .form-control {
  margin-bottom: 2rem;
  border-radius: 0.3rem;
  color: #666;
}
.widget-wcmp-contact input {
  min-height: 4rem;
}
.widget-wcmp-contact textarea {
  max-height: 12.4rem;
}
.widget-search-products input {
  min-height: 4rem;
  margin-right: 0.5rem;
  color: #666;
  border-radius: 0.3rem;
}
.widget-search-products .btn {
  padding: 0.86em 1em;
  background-color: #eee;
  border-color: #eee;
  color: #333;
}
.widget-search-products .btn:active,
.widget-search-products .btn:focus,
.widget-search-products .btn:hover {
  background-color: #333;
  border-color: #333;
  color: #fff;
}
@media (min-width: 992px) {
  .sidebar {
    flex: 0 0 31rem;
    max-width: 31rem;
  }
  .main-content {
    flex: 1;
  }
  .row .main-content {
    max-width: calc(100% - 31rem);
  }
  .shop-sidebar.sidebar-fixed .sidebar-content {
    padding: 0 0 2rem;
  }
  .sidebar-fixed .sidebar-overlay,
  .sidebar-fixed .sidebar-toggle {
    display: none;
  }
  .sidebar-fixed .sidebar-content {
    position: relative;
    overflow: visible;
    padding: 0;
    opacity: 1;
    z-index: 2;
    width: auto;
    transform: none;
  }
  .shop-content {
    overflow: hidden;
  }
}
@media (max-width: 991px) {
  .sidebar-active .page-wrapper {
    margin-left: 310px;
    margin-right: -310px;
  }
  .right-sidebar-active .page-wrapper {
    margin-left: -310px;
    margin-right: 310px;
  }
}
@media (max-width: 479px) {
  .sidebar-content {
    width: 27rem;
  }
  .sidebar-active .page-wrapper {
    margin-left: 27rem;
    margin-right: -27rem;
  }
  .right-sidebar-active .page-wrapper {
    margin-left: -27rem;
    margin-right: 27rem;
  }
  .widget-icon-box .icon-box-side {
    flex-direction: column;
  }
  .widget-icon-box .icon-box-icon {
    margin: 0 0 0.5rem;
  }
  .widget-icon-box .icon-box-content {
    text-align: center;
  }
}
.social-icons {
  display: inline-flex;
  flex-wrap: wrap;
  align-items: center;
}
.social-icon {
  font-size: 1.4rem;
  width: 32px;
  height: 32px;
  margin: 2px 10px 2px 0;
  line-height: 28px;
  border: 2px solid #ccc;
  border-radius: 50%;
  color: inherit;
  transition: color 0.4s, border 0.4s, background-color 0.4s;
  text-align: center;
}
.border-thin .social-icon {
  border-width: 1px;
  line-height: 3rem;
}
.social-icon:last-child {
  margin-right: 0;
}
.social-icon.social-facebook {
  color: #1b4f9b;
}
.social-icon.social-twitter {
  color: #00adef;
}
.social-icon.social-instagram {
  color: #cc0001;
}
.social-icon.social-youtube {
  color: #2c567e;
}
.social-icon.social-pinterest {
  color: #f96a02;
}
.social-icon.social-google {
  color: #dd4b39;
}
.social-icon.social-linkedin {
  color: #0073b2;
}
.social-icon.social-email {
  color: #dd4b39;
}
.social-icon.social-whatsapp {
  color: #3c8a38;
}
.social-icons-colored .social-icon {
  color: #fff;
}
.social-icons-colored .social-icon.social-facebook {
  border-color: #1b4f9b;
  background-color: #1b4f9b;
}
.social-icons-colored .social-icon.social-twitter {
  border-color: #00adef;
  background-color: #00adef;
}
.social-icons-colored .social-icon.social-instagram {
  border-color: #cc0001;
  background-color: #cc0001;
}
.social-icons-colored .social-icon.social-youtube {
  border-color: #2c567e;
  background-color: #2c567e;
}
.social-icons-colored .social-icon.social-pinterest {
  border-color: #f96a02;
  background-color: #f96a02;
}
.social-icons-colored .social-icon.social-google {
  border-color: #dd4b39;
  background-color: #dd4b39;
}
.social-icons-colored .social-icon.social-linkedin {
  border-color: #0073b2;
  background-color: #0073b2;
}
.social-icons-colored .social-icon.social-email {
  border-color: #dd4b39;
  background-color: #dd4b39;
}
.social-icons-colored .social-icon.social-whatsapp {
  border-color: #3c8a38;
  background-color: #3c8a38;
}
.social-no-color .social-icon {
  border-color: #cdcdcd;
  color: #666;
}
.social-no-color .social-icon:focus,
.social-no-color .social-icon:hover {
  color: #fff;
}
.social-no-color .social-icon:focus.social-facebook,
.social-no-color .social-icon:hover.social-facebook {
  background-color: #1b4f9b;
  border-color: #1b4f9b;
}
.social-no-color .social-icon:focus.social-twitter,
.social-no-color .social-icon:hover.social-twitter {
  background-color: #00adef;
  border-color: #00adef;
}
.social-no-color .social-icon:focus.social-instagram,
.social-no-color .social-icon:hover.social-instagram {
  background-color: #cc0001;
  border-color: #cc0001;
}
.social-no-color .social-icon:focus.social-youtube,
.social-no-color .social-icon:hover.social-youtube {
  background-color: #2c567e;
  border-color: #2c567e;
}
.social-no-color .social-icon:focus.social-pinterest,
.social-no-color .social-icon:hover.social-pinterest {
  background-color: #f96a02;
  border-color: #f96a02;
}
.social-no-color .social-icon:focus.social-google,
.social-no-color .social-icon:hover.social-google {
  border-color: #dd4b39;
  background-color: #dd4b39;
}
.social-no-color .social-icon:focus.social-linkedin,
.social-no-color .social-icon:hover.social-linkedin {
  border-color: #0073b2;
  background-color: #0073b2;
}
.social-no-color .social-icon:focus.social-email,
.social-no-color .social-icon:hover.social-email {
  border-color: #dd4b39;
  background-color: #dd4b39;
}
.social-no-color .social-icon:focus.social-whatsapp,
.social-no-color .social-icon:hover.social-whatsapp {
  border-color: #3c8a38;
  background-color: #3c8a38;
}
.social-icon-border-color .social-icon {
  background-color: #fff;
  border-width: 1px;
}
.social-icon-border-color .social-icon.social-facebook {
  color: #1b4f9b;
  border-color: #1b4f9b;
}
.social-icon-border-color .social-icon.social-twitter {
  color: #00adef;
  border-color: #00adef;
}
.social-icon-border-color .social-icon.social-instagram {
  color: #cc0001;
  border-color: #cc0001;
}
.social-icon-border-color .social-icon.social-youtube {
  color: #2c567e;
  border-color: #2c567e;
}
.social-icon-border-color .social-icon.social-pinterest {
  color: #f96a02;
  border-color: #f96a02;
}
.social-icon-border-color .social-icon.social-google {
  border-color: #dd4b39;
  color: #dd4b39;
}
.social-icon-border-color .social-icon.social-linkedin {
  border-color: #0073b2;
  color: #0073b2;
}
.social-icon-border-color .social-icon.social-email {
  border-color: #dd4b39;
  color: #dd4b39;
}
.social-icon-border-color .social-icon.social-whatsapp {
  border-color: #3c8a38;
  color: #3c8a38;
}
.social-icon-border-color .social-icon:hover {
  color: #fff;
}
.social-icon-border-color .social-icon:hover.social-facebook {
  background-color: #1b4f9b;
}
.social-icon-border-color .social-icon:hover.social-twitter {
  background-color: #00adef;
}
.social-icon-border-color .social-icon:hover.social-instagram {
  background-color: #cc0001;
}
.social-icon-border-color .social-icon:hover.social-youtube {
  background-color: #2c567e;
}
.social-icon-border-color .social-icon:hover.social-pinterest {
  background-color: #f96a02;
}
.social-icon-border-color .social-icon:hover.social-google {
  background-color: #dd4b39;
}
.social-icon-border-color .social-icon:hover.social-linkedin {
  background-color: #0073b2;
}
.social-icon-border-color .social-icon:hover.social-email {
  background-color: #dd4b39;
}
.social-icon-border-color .social-icon:hover.social-whatsapp {
  background-color: #3c8a38;
}
.tab-content {
  background-color: #fff;
}
.nav-tabs {
  display: flex;
  flex-wrap: wrap;
  border-bottom: 1px solid #eee;
  color: #333;
}
.nav-tabs .nav-item .nav-link.active,
.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-item:hover .nav-link {
  color: #ab8e66;
}
.nav-link {
  display: block;
  position: relative;
  font-size: 1.4rem;
  font-weight: 600;
  color: inherit;
  line-height: 1;
  letter-spacing: 0;
  text-align: center;
  text-transform: uppercase;
  border-radius: 0;
  border: 0;
  padding: 1.5rem 2.85rem;
  transition: border 0.3s, color 0.3s, background-color 0.3s;
}
.nav-item:not(:last-child) {
  margin-right: 3rem;
}
.nav-fill .nav-item {
  flex: 1;
}
.tab-content {
  position: relative;
}
.tab-content > .tab-pane {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  height: 0;
  opacity: 0;
  z-index: -1;
  transition: visibility 0.3s, opacity 0.3s;
  overflow: hidden;
  visibility: hidden;
}
.tab-content > .active {
  visibility: visible;
  opacity: 1;
  height: auto;
  position: relative;
  z-index: auto;
}
.tab-pane {
  font-size: 1.3rem;
  line-height: 1.7;
  padding: 1.3rem 0;
  color: #666;
}
.tab-pane p {
  margin-bottom: 0;
  font-size: inherit;
  letter-spacing: 0;
  line-height: 2;
}
.tab-nav-boxed .nav-item:not(:last-child) {
  margin-right: 0.5rem;
}
.tab-nav-solid .nav-tabs {
  border-bottom: 0;
}
.tab-nav-solid .nav-item .nav-link.active,
.tab-nav-solid .nav-item.show .nav-link,
.tab-nav-solid .nav-item:hover .nav-link {
  color: #fff;
  background-color: #ab8e66;
  border-color: #ab8e66;
}
.tab-nav-solid .nav-link {
  background-color: #f5f5f5;
  border-color: #f5f5f5;
  margin-bottom: 0.5rem;
}
.tab-nav-solid .tab-pane {
  padding: 0.8rem 0 1.4rem;
}
.tab-nav-solid2 .nav-item .nav-link.active,
.tab-nav-solid2 .nav-item.show .nav-link,
.tab-nav-solid2 .nav-item:hover .nav-link {
  color: #ab8e66;
  background-color: #f5f5f5;
  border-color: #f5f5f5;
}
.tab-nav-solid2 .nav-item:not(:last-child) {
  margin-right: 2rem;
}
.tab-nav-solid2 .nav-link {
  color: #333;
}
.tab-nav-solid2 .tab-content {
  border: 1px solid #eee;
}
.tab-boxed .nav-tabs {
  border-bottom: 0;
}
.tab-boxed .nav-link {
  padding: 1.45rem 2.95rem 1.55rem;
  margin-bottom: -0.1rem;
  z-index: 1;
}
.tab-boxed .tab-pane {
  padding: 1.3rem 2rem 0;
}
.tab-boxed .tab-pane.active p {
  margin-bottom: 1.3rem;
}
.tab-nav-outline .nav-tabs {
  border-bottom: 0;
}
.tab-nav-outline .nav-item .nav-link.active,
.tab-nav-outline .nav-item.show .nav-link,
.tab-nav-outline .nav-item:hover .nav-link {
  border: 2px solid #ab8e66;
  border-radius: 0.3rem;
}
.tab-nav-outline .nav-link {
  color: #333;
  border: 2px solid transparent;
  padding: 1.3rem 2.85rem;
}
.tab-nav-outline2 .nav {
  position: relative;
  z-index: 1;
}
.tab-nav-outline2 .nav-item .nav-link.active,
.tab-nav-outline2 .nav-item.show .nav-link,
.tab-nav-outline2 .nav-item:hover .nav-link {
  border: 1px solid #eee;
  border-bottom-color: #fff;
}
.tab-nav-outline2 .tab-content {
  border: 1px solid #eee;
}
.tab-nav-outline2 .nav-item:not(:last-child) {
  margin-right: 0.7rem;
}
.tab-nav-outline2 .nav-link {
  border: 1px solid transparent;
  padding: 1.4rem 2.85rem;
  margin-bottom: -1px;
}
.tab-nav-outline3 .nav-tabs {
  border-bottom: 0;
}
.tab-nav-outline3 .nav-item .nav-link:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  width: 3px;
  height: 100%;
  top: 50%;
  transform: translateY(-50%) scale(0);
  background-color: transparent;
  transition: transform 0.3s;
  z-index: 1;
}
.tab-nav-outline3 .nav-item .nav-link.active:before,
.tab-nav-outline3 .nav-item.show .nav-link:before,
.tab-nav-outline3 .nav-item:hover .nav-link:before {
  background-color: #ab8e66;
  transform: translateY(-50%) scale(1);
}
.tab-nav-outline3 .nav-link {
  color: #333;
  border: 1px solid #eee;
  padding: 1.4rem 0 1.4rem 2rem;
}
.tab-nav-underline .nav-item:not(:last-child) {
  margin-right: 3rem;
}
.tab-nav-underline .nav-link {
  padding: 1.4rem 0;
}
.tab-nav-underline .nav-link:after {
  content: "";
  display: block;
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  border-top: 3px solid transparent;
  transform: scaleX(0);
  transition: transform 0.3s, border-color 0.3s;
}
.tab-nav-underline .nav-item .nav-link.active:after,
.tab-nav-underline .nav-item.show .nav-link:after,
.tab-nav-underline .nav-item:hover .nav-link:after {
  border-color: #ab8e66;
  transform: scaleX(1);
}
.tab-nav-underline.type2 .nav-item {
  margin-right: 0;
}
.tab-nav-underline.type2 .nav-link {
  padding: 1.4rem 1.5rem;
}
.tab-nav-center .nav {
  justify-content: center;
}
.tab-nav-center .nav .nav-item {
  margin: 0 1.5rem;
}
.tab-nav-center.tab-nav-outline2 .nav-item {
  margin: 0 0.5rem;
}
.tab-vertical {
  display: flex;
}
.tab-vertical .nav {
  flex-direction: column;
  flex-wrap: nowrap;
  width: 26.3%;
}
.tab-vertical .nav-item {
  margin-right: 0;
}
.tab-vertical .nav-link {
  position: relative;
  padding-left: 2.2rem;
  padding-right: 2rem;
  text-align: left;
  width: 100%;
  margin-bottom: 0.5rem;
}
.tab-vertical .tab-content {
  width: 73.7%;
  border-top: 1px solid #eee;
  padding-left: 2rem;
}
.tab-vertical .tab-pane {
  padding-top: 1.3rem;
}
.tab-vertical.tab-nav-outline3 .nav {
  width: 27%;
}
.tab-vertical.tab-nav-outline3 .nav-link {
  padding-left: 2.1rem;
}
.tab-vertical.tab-nav-outline3 .tab-content {
  padding-left: 1.7rem;
}
.tab-line-grow .tab-pane {
  padding: 1.7rem 0;
}
.nav-filters {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  margin-bottom: 0.5rem;
  font-size: 1.4rem;
  color: #666;
  line-height: 1;
}
.nav-filters li:not(:last-child) {
  margin-right: 1rem;
}
.nav-filter {
  display: inline-block;
  position: relative;
  padding: 0.6rem 0 0.7rem;
  color: inherit;
  transition: color 0.4s;
}
.nav-filter.active,
.nav-filter:hover {
  color: #ab8e66;
}
.nav-filter span {
  color: #aaa;
  margin-left: 0.6rem;
}
.filter-underline .nav-filter:after {
  content: "";
  display: block;
  height: 2px;
  border: 1px solid;
  transform: scale(0);
  transition: transform 0.4s;
}
.filter-underline .nav-filter.active:after,
.filter-underline .nav-filter:hover:after {
  transform: scale(1);
}
.filter-boxed li {
  margin-bottom: 0.5rem;
}
.filter-boxed .nav-filter {
  padding: 1.1rem 1.9rem;
  border: 1px solid #ccc;
  border-radius: 0.3rem;
  text-transform: uppercase;
  font-size: 1.3rem;
  font-weight: 600;
  color: #333;
  transition: color 0.3s, border-color 0.3s;
}
.filter-boxed .nav-filter.active,
.filter-boxed .nav-filter:hover {
  color: #ab8e66;
  border-color: #ab8e66;
}
@media (max-width: 991px) {
  .filter-boxed {
    justify-content: center;
  }
  .filter-boxed li {
    margin: 0 0.5rem 0.5rem !important;
  }
}
@media (max-width: 767px) {
  .tab-vertical {
    flex-flow: column nowrap;
  }
  .tab-vertical .nav-tabs,
  .tab-vertical .tab-content,
  .tab-vertical.tab-nav-outline3 .nav {
    width: 100%;
  }
  .tab-line-grow .tab-content {
    padding-right: 1rem;
    padding-left: 1rem;
  }
}
@media (max-width: 575px) {
  .tab-nav-outline2 .nav-link {
    padding-left: 1rem;
    padding-right: 1rem;
  }
}
.link-section {
  margin-bottom: 2.8rem;
}
.link-section .title {
  margin-bottom: 0.9rem;
}
.side-tab-section {
  margin-bottom: 1.1rem;
}
.title {
  display: flex;
  flex-wrap: wrap;
  position: relative;
  align-items: center;
  text-align: center;
  margin-bottom: 1.7rem;
  font-size: 3rem;
  font-weight: 700;
  line-height: 1.2;
}
.title.title-link:before {
  position: absolute;
  content: "";
  width: 100%;
  height: 3px;
  left: 0;
  bottom: -0.8rem;
  background-color: #ab8e66;
  z-index: 1;
}
.title.title-sm {
  font-size: 1.6rem;
}
.title.title-md {
  font-size: 2rem;
}
.title.title-lg {
  font-size: 3rem;
}
.title-underline {
  position: relative;
  padding-bottom: 1.6rem;
}
.title-underline:before {
  content: none;
}
.title-underline:after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  margin-left: 0;
  width: 100%;
  height: 1px;
  background-color: #eee;
}
.title-cross:after,
.title-cross:before {
  flex: 1;
  content: "";
  height: 2px;
  background-color: #eeeeee;
}
.title-cross:before {
  margin-right: 3rem;
}
.title-cross:after {
  margin-left: 3rem;
}
@media (max-width: 479px) {
  .title-cross:before {
    margin-right: 1.5rem;
  }
  .title-cross:after {
    margin-left: 1.5rem;
  }
}
.title-link-wrapper {
  display: flex;
  position: relative;
  align-items: center;
  margin-bottom: 1.3rem;
}
.title-link-wrapper .title {
  position: relative;
  margin-bottom: 0.7rem;
  padding: 0.8rem 0;
}
.title-link-wrapper a {
  margin-bottom: 0.5rem;
  margin-left: auto;
  text-transform: capitalize;
}
.title-link-wrapper a:hover {
  color: #ab8e66;
}
.title-link-wrapper a i {
  vertical-align: middle;
  margin-left: 0.5rem;
  font-size: 1.35rem;
}
.title-link-wrapper:after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  border-bottom: 1px solid #eee;
}
.title-link-wrapper.no-link .title-link {
  margin-bottom: 0.8rem;
}
.tab-with-title {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  justify-content: space-between;
}
.tab-with-title .nav-tabs {
  border-bottom: 0;
}
.tab-with-title .nav-item:not(:last-child) {
  margin-right: 2rem;
}
.tab-with-title .nav-link {
  font-size: 1.3rem;
  font-weight: 400;
  letter-spacing: 0;
  color: #333;
  text-transform: capitalize;
  padding: 0;
}
.tab-with-title.tab-nav-boxed {
  padding: 0.3rem 0;
}
.tab-with-title.tab-nav-boxed .title {
  margin-bottom: 0;
  margin-right: 2rem;
}
.tab-with-title.tab-nav-boxed .nav-item:not(:last-child) {
  margin-right: 1rem;
}
.tab-with-title.tab-nav-boxed .nav-item:last-child {
  margin: 0;
}
.tab-with-title.tab-nav-boxed .nav-link {
  border: 1px solid #ccc;
  border-radius: 0.3rem;
  padding: 0.85em 1.42em;
  font-weight: 600;
  text-transform: uppercase;
}
.tab-with-title.tab-nav-boxed .nav-link.active,
.tab-with-title.tab-nav-boxed .nav-link:hover {
  border-color: #ab8e66;
}
.tab-with-title.tab-nav-link {
  padding: 1.6rem 2rem 0.6rem;
  background: #f5f5f5;
}
.tab-with-title.tab-nav-link .nav-link,
.tab-with-title.tab-nav-link .title {
  margin-bottom: 1rem;
}
.tab-with-title.tab-nav-link .title {
  margin-right: 2rem;
}
.tab-with-title.tab-nav-underline .nav-link:after {
  bottom: -1px;
}
.tab-with-title .nav-item .nav-link.active,
.tab-with-title .nav-item.show .nav-link,
.tab-with-title .nav-item:hover .nav-link {
  color: #ab8e66;
}
.title-separator {
  margin: 0 0.5rem;
}
.title-center {
  justify-content: center;
}
.tab-with-title.tab-nav-center {
  flex-direction: column;
  margin-bottom: 1.2rem;
}
.tab-with-title.tab-nav-center .nav-tabs {
  margin: 0;
}
.tab-with-title.tab-nav-center .nav-item {
  margin: 0 1rem;
}
.tab-with-title.tab-nav-center .nav-link {
  padding: 0.8rem 0;
}
.tab-with-title.tab-nav-center .nav-link:after {
  bottom: 0;
  height: 0.3rem;
  border: none;
  background-color: #ab8e66;
}
.filter-with-title {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 1rem;
}
.filter-with-title .title {
  margin-bottom: 0.5rem;
}
.title-section p {
  font-size: 1.3rem;
  color: #666;
  line-height: 2;
  letter-spacing: 0;
}
@media (max-width: 991px) {
  .tab-with-title {
    flex-direction: column;
  }
  .tab-with-title .nav-tabs {
    justify-content: center;
  }
  .tab-with-title.tab-nav-boxed .title {
    margin-bottom: 1rem;
    margin-right: 0;
  }
  .tab-with-title.tab-nav-boxed .nav-item {
    margin-left: 0.5rem !important;
    margin-right: 0.5rem !important;
  }
  .tab-with-title.tab-nav-boxed .nav-link {
    margin-bottom: 0.5rem;
  }
  .tab-with-title.tab-nav-link .nav-item {
    margin: 0 1rem !important;
  }
  .tab-with-title.tab-nav-link .title {
    margin-right: 0;
  }
  .filter-with-title {
    flex-direction: column;
  }
  .filter-with-title .title {
    margin-bottom: 1rem;
  }
  .filter-with-title .nav-filters {
    justify-content: center;
  }
  .filter-with-title .nav-filters li {
    margin: 0 1.5rem;
  }
}
@media (max-width: 575px) {
  .title-link-wrapper {
    flex-direction: column;
    align-items: flex-start;
  }
  .title-link-wrapper .title-link {
    margin-bottom: 2rem;
  }
  .title-link-wrapper a {
    margin-left: 0;
  }
}
.tooltiptext {
  position: absolute;
  padding: 1rem 0.7rem;
  bottom: 125%;
  left: 50%;
  background-color: #333;
  color: #fff;
  font: 400 1.3rem Poppins, sans-serif;
  letter-spacing: 0.01em;
  text-align: center;
  visibility: hidden;
  opacity: 0;
  transform: translateX(-50%);
  z-index: 1;
  transition: opacity 0.3s;
}
.tooltip-top:after {
  content: "";
  position: absolute;
  top: 96%;
  left: 50%;
  margin-left: -6px;
  border-width: 6px;
  border-style: solid;
  border-color: #333 transparent transparent transparent;
}
.vendor-widget {
  margin-bottom: 2rem;
}
.vendor-widget .vendor-name {
  vertical-align: middle;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  display: inline-block;
  max-width: 100%;
  margin-bottom: 0.5rem;
  font-weight: 600;
  font-size: 1.5rem;
  text-transform: capitalize;
  letter-spacing: -0.025em;
  line-height: 1.4;
}
.vendor-widget .vendor-name a {
  color: inherit;
}
.vendor-widget .vendor-name:hover {
  color: #ab8e66;
}
.vendor-products.grid-type {
  display: grid;
  grid-template-columns: repeat(auto-fill, calc(100% / 3));
  margin: -2.5px;
  width: calc(100% + 5px);
  grid-auto-rows: 1fr;
}
.vendor-products.grid-type > * {
  padding: 2.5px;
}
.vendor-products .lg-item {
  grid-column-end: span 2;
  grid-row-end: span 2;
}
.vendor-products .sm-item {
  grid-column-end: span 1;
  grid-row-end: span 1;
}
.vendor-products .product-media {
  height: 100%;
  border-radius: 0.5rem;
  border: 1px solid transparent;
  overflow: hidden;
  transition: border-color 0.3s;
}
.vendor-products .product-media img {
  height: 100%;
}
.vendor-logo {
  max-width: 7rem;
  flex: 0 0 7rem;
  margin-right: 1rem;
}
.vendor-details {
  display: flex;
  align-items: center;
  padding: 1.8rem 0;
}
.vendor-product-count {
  font-size: 1.2rem;
  display: inline-block;
  vertical-align: middle;
  margin-bottom: 0.5rem;
}
.vendor-banner {
  min-height: 18rem;
}
.vendor-banner a,
.vendor-banner img {
  min-height: inherit;
}
.vendor-banner a {
  display: block;
}
.visit-vendor-btn {
  display: block;
  margin-bottom: 2rem;
  font-size: 1.2rem;
  font-weight: 600;
  text-transform: uppercase;
  color: #ff9933;
}
.visit-vendor-btn:hover {
  color: #ab8e66;
}
.vendor-widget-1 .product-media:hover {
  border-color: #ab8e66;
}
.vendor-widget-1 .vendor-personal {
  margin-top: 0.2rem;
}
.vendor-widget-1 .ratings-container {
  margin-bottom: 0;
}
.vendor-widget-2 {
  padding: 2rem;
  border: 1px solid #eee;
  border-radius: 0.5rem;
  overflow: hidden;
  transition: border-color 0.3s;
}
.vendor-widget-2:hover {
  border-color: #ab8e66;
}
.vendor-widget-2 .vendor-details {
  padding-top: 0;
  padding-bottom: 2rem;
}
.vendor-widget-2 .product-media {
  border: none;
}
.vendor-widget-2 .ratings-container {
  margin-bottom: 0;
}
.vendor-widget-3 .vendor-logo {
  border-radius: 0.5rem;
  overflow: hidden;
}
.vendor-widget-3 .vendor-details {
  padding: 2rem 0;
}
.vendor-widget-3 .vendor-personal {
  padding-top: 0.3rem;
}
.vendor-widget-3 .ratings-container {
  margin-bottom: 0;
}
.vendor-widget-3 .ratings-container:not(:last-child) {
  margin-bottom: 0.5rem;
}
.vendor-widget-banner {
  border: 1px solid #eee;
  border-radius: 0.5rem;
  overflow: hidden;
  transition: border-color 0.3s, box-shadow 0.3s;
}
.vendor-widget-banner .product-media {
  border: none;
}
.vendor-widget-banner .vendor-details {
  display: block;
  text-align: center;
  padding-top: 0;
  margin-top: -4.5rem;
  padding-bottom: 2rem;
  padding-right: 2rem;
  padding-left: 2rem;
}
.vendor-widget-banner .vendor-logo {
  position: relative;
  flex: none;
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1);
  max-width: 9rem;
  margin: 0 auto 1.3rem auto;
  border-radius: 50%;
  background-color: #ab8e66;
}
.vendor-widget-banner .vendor-logo img {
  transition: transform 0.3s;
  border-radius: 50%;
}
.vendor-widget-banner .vendor-name {
  margin-bottom: 1.5rem;
  font-size: 1.8rem;
  text-transform: uppercase;
  letter-spacing: 0;
}
.vendor-widget-banner .ratings-container {
  justify-content: center;
  margin-bottom: 1rem;
}
.vendor-widget-banner .ratings-container .ratings-full {
  margin-right: 0;
}
.vendor-widget-banner .vendor-product-count {
  display: block;
  margin-bottom: 0.6rem;
  font-size: 1.4rem;
}
.vendor-widget-banner:hover {
  box-shadow: 5px 0 20px rgba(0, 0, 0, 0.08);
  border-color: transparent;
}
.vendor-widget-banner:hover .vendor-logo img {
  transform: translateY(-1rem);
}
.store {
  position: relative;
  border-radius: 0.5rem;
  overflow: hidden;
}
.store .ratings-container {
  font-size: 1.3rem;
  margin-bottom: 0.5rem;
}
.store .store-banner img {
  height: 100%;
  width: 100%;
}
.store-content {
  position: absolute;
}
.store-title {
  display: flex;
  align-items: center;
  margin-bottom: 1.9rem;
  color: #fff;
}
.store-title a {
  display: inline-block;
  text-transform: capitalize;
  font-size: 2rem;
  line-height: 1;
  color: inherit;
  text-shadow: rgba(0, 0, 0, 0.8) 0 1px 0;
  font-weight: 600;
  letter-spacing: -0.025em;
}
.featured-label {
  background: #2d54a3;
  color: #fff;
  text-transform: uppercase;
  font-size: 1rem;
  font-weight: 600;
  padding: 0.2rem 1rem;
  box-shadow: 0px 0px 25px -5px #afafaf;
  border-radius: 0.3rem;
  margin-left: 1.4rem;
  display: inline-block;
}
.seller-info-list {
  margin: 0;
  padding-left: 1.6em;
}
.seller-info-list .store-address,
.seller-info-list .store-phone {
  font-size: 1.4rem;
}
.seller-info-list > * {
  line-height: 1.6;
  letter-spacing: -0.025em;
  margin-bottom: 0.8rem;
  color: #fff;
  opacity: 0.8;
}
.seller-info-list > * a {
  color: inherit;
}
.seller-info-list > * i {
  margin-left: -2.2rem;
  margin-right: 0.3rem;
  vertical-align: middle;
  font-size: 1.5rem;
  line-height: 0;
}
.seller-info-list .store-email:hover,
.seller-info-list .store-phone:hover {
  color: #ffb639;
}
.store-address {
  font-size: 1.3rem;
  color: #fff;
  opacity: 0.8;
  line-height: 1.8;
}
.store-open,
.store-rating {
  color: #fff;
  opacity: 0.8;
}
.store-footer {
  position: relative;
  padding: 2.3rem 2rem;
}
.btn.btn-icon-right.btn-visit i {
  font-size: 2rem;
  margin-left: 0.4rem;
  margin-bottom: 0.4rem;
}
.seller-brand {
  border-radius: 50%;
  background-color: #ff9742;
  width: 8rem;
  height: 8rem;
}
.seller-brand img {
  border-radius: 50%;
  transition: transform 0.3s;
}
.vendor-brand {
  max-width: 15rem;
  margin: 0 auto;
  text-align: center;
}
.vendor-brand .brand {
  border: 1px solid #eee;
  border-radius: 50%;
  overflow: hidden;
  margin-bottom: 2.2rem;
  transition: box-shadow 0.3s;
}
.vendor-brand .vendor-name {
  font-size: 1.4rem;
  font-weight: 600;
  text-transform: uppercase;
  margin-bottom: 0;
  transition: color 0.3s;
}
.vendor-brand .vendor-name:hover {
  color: #ab8e66;
}
.vendor-brand:hover .brand {
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
}
.store-grid {
  box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.08);
}
.store-grid .store-banner img {
  min-height: 19.4rem;
}
.store-grid .store-content {
  top: 2.5rem;
  left: 3rem;
  max-width: 19.2rem;
}
.store-grid .seller-brand {
  right: 1.9rem;
  top: -58%;
}
.store-grid:hover .seller-brand img {
  transform: translateY(-1rem);
}
.store-grid .store-title:hover {
  color: #ab8e66;
}
.store-list {
  display: flex;
  border: 1px solid #eee;
}
.store-list .store-header {
  flex: 0 0 40rem;
  max-width: 40rem;
}
.store-list .store-header a {
  display: block;
  height: 100%;
}
.store-list .store-banner {
  height: 100%;
}
.store-list .store-content {
  position: relative;
}
.store-list .featured-label {
  position: absolute;
  top: 1.5rem;
  left: 1.5rem;
  margin-left: 0;
}
.store-list .store-content {
  display: flex;
  align-items: center;
  padding: 2rem 2rem 2rem 6rem;
}
.store-list .store-title {
  color: #333;
}
.store-list .store-title a {
  text-shadow: none;
}
.store-list .ratings-container {
  margin-bottom: 0.3rem;
}
.store-list .store-address {
  color: #666;
  opacity: 1;
  margin-bottom: 0.9rem;
}
.store-list .seller-brand {
  top: 50%;
  left: 0;
  transform: translate(-50%, -50%);
}
.store-list:hover .seller-brand img {
  transform: translateX(-1rem);
}
.store-grid .seller-brand,
.store-list .seller-brand {
  position: absolute;
}
.store-grid .seller-brand img,
.store-list .seller-brand img {
  width: calc(100% + 2px);
  height: calc(100% + 2px);
  max-width: calc(100% + 2px);
  margin: -1px;
  box-shadow: 0px 0px 0px 1px #eee;
}
.store.store-banner .store-media img {
  min-height: 44rem;
  width: 100%;
}
.store.store-banner .store-content {
  top: 0;
  left: 0;
  max-width: 34.5rem;
  padding: 5rem 4rem 5rem 5rem;
  background-color: rgba(37, 38, 42, 0.9);
  height: 100%;
}
.store.store-banner .seller-brand {
  margin-bottom: 2.3rem;
}
.store.store-banner .store-title {
  margin-bottom: 1.6rem;
  font-size: 2rem;
  letter-spacing: -0.025em;
}
.store.store-banner .social-icon {
  margin-right: 0.5rem;
  color: #fff;
  border-color: #ccc;
  opacity: 0.8;
}
.store-wcmp .store-content {
  left: 0;
  right: 0;
  bottom: 0;
  height: 50%;
  background-color: rgba(34, 34, 40, 0.85);
  display: flex;
  padding: 2rem;
}
.store-wcmp .seller-brand {
  flex: 0 0 8rem;
  max-width: 8rem;
  margin-right: 2.2rem;
}
.store-wcmp .seller-date {
  flex: 0 0 calc(100% - 10rem);
  max-width: calc(100% - 10rem);
}
.store-wcmp .store-title {
  margin: 0.4rem 0 1.1rem;
}
.store-wcmp .store-title a {
  font-size: 1.8rem;
}
.store-wcmp .store-title a:hover {
  text-decoration: underline;
}
.store-wcmp .seller-info-list {
  margin: 0;
}
.store-wcmp .seller-info-list li {
  display: flex;
  margin-bottom: 0;
  letter-spacing: 0;
  opacity: 0.7;
}
.store-wcmp .seller-info-list li p {
  margin-bottom: 0;
  line-height: 2;
}
.store-wcmp .seller-info-list .store-address p {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
.store-wcmp .seller-info-list .store-rating p {
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
}
.store-wcmp .seller-info-list i {
  margin-top: 1.3rem;
  margin-right: 0.8rem;
  font-size: 1.4rem;
}
.store-wcmp .ratings-container {
  margin-top: 0.5rem;
  margin-bottom: 0;
}
.store-wcmp-banner .store-media img {
  width: 100%;
}
.store-wcmp-banner .store-content {
  left: 0;
  right: 0;
  bottom: 0;
  min-height: 40%;
  padding: 2rem;
  background: rgba(0, 0, 0, 0.6);
}
.store-wcmp-banner .seller-brand {
  margin: -7rem auto 2rem auto;
}
.store-wcmp-banner .social-icons {
  position: absolute;
  right: 2rem;
  top: -5rem;
}
.store-wcmp-banner .store-title {
  margin-bottom: 1rem;
  font-size: 2rem;
  justify-content: center;
}
.store-wcmp-banner .seller-info-list {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  padding-left: 0;
}
.store-wcmp-banner .seller-info-list > * {
  margin: 0 0.6rem;
  opacity: 0.6;
  text-align: center;
}
.store-wcmp-banner .seller-info-list > * i {
  margin-right: 0.4rem;
  margin-left: 0;
}
.store-wcfm-banner .seller-brand,
.store-wcmp-banner .seller-brand {
  width: 10rem;
  height: 10rem;
}
.store-wcfm-banner .seller-brand img,
.store-wcmp-banner .seller-brand img {
  width: calc(100% + 2px);
  height: calc(100% + 2px);
  max-width: calc(100% + 2px);
  margin: -1px;
}
.store-wcfm-banner .social-icon:not(:last-child),
.store-wcmp-banner .social-icon:not(:last-child) {
  margin-right: 0.5rem;
}
.store-wcfm-banner .social-icon,
.store-wcmp-banner .social-icon {
  border-radius: 0.3rem;
}
.store-wcfm-banner .store-content {
  left: 0;
  bottom: 0;
  width: 100%;
  background: rgba(34, 34, 34, 0.8);
  display: flex;
  align-items: center;
  min-height: 16rem;
  padding: 2.3rem 3rem 2.6rem;
}
.store-wcfm-banner .store-content-left {
  display: flex;
}
.store-wcfm-banner .personal-info {
  margin-right: 4rem;
}
.store-wcfm-banner .seller-brand {
  margin: -7.2rem 0 2rem;
}
.store-wcfm-banner .ratings-container {
  justify-content: center;
  font-size: 1.2rem;
}
.store-wcfm-banner .ratings-full {
  margin: 0;
}
.store-wcfm-banner .store-title {
  margin-bottom: 0.9rem;
  font-size: 2rem;
  font-weight: 600;
}
.store-wcfm-banner .seller-info-list {
  padding-left: 2.4rem;
}
.store-wcfm-banner .seller-info-list li {
  margin-bottom: 0.4rem;
  letter-spacing: 0;
}
.store-wcfm-banner .seller-info-list li i {
  margin: 0 0.4rem 0 -2.4rem;
  font-size: 1.4rem;
}
.store-wcfm-banner .store-content-right {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}
.store-wcfm-banner .btn-inquiry {
  margin-bottom: 3rem;
}
.btn-inquiry,
.btn-visit:not(.btn-link) {
  padding: 0.8em 1.6em;
  font-size: 1.3rem;
  background-color: #eee;
  border-color: #eee;
  color: #333;
  margin-right: 0.6rem;
}
.btn-inquiry:active,
.btn-inquiry:focus,
.btn-inquiry:hover,
.btn-visit:not(.btn-link):active,
.btn-visit:not(.btn-link):focus,
.btn-visit:not(.btn-link):hover {
  background-color: #333;
  border-color: #333;
  color: #fff;
}
.vendor-toolbox .vendor-search-toggle {
  margin-right: 1.5rem;
  padding: 0.73em 0.9em 0.86em;
  font-weight: 700;
}
.vendor-toolbox .vendor-search-toggle i {
  margin: 0 0.8rem 0 0;
  font-size: 1.5rem;
  font-weight: 600;
}
.vendor-toolbox .toolbox-left label {
  font-weight: 400;
  color: #333;
}
.vendor-toolbox .toolbox-layout {
  margin-left: 1.5rem;
}
.vendor-toolbox .btn-layout {
  color: #ccc;
}
.vendor-toolbox .btn-layout.icon-mode-list i {
  font-size: 2rem;
}
.vendor-search-wrapper {
  display: none;
  padding: 2rem;
  border-radius: 5px;
  box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.08);
  margin-top: 3.2rem;
}
.vendor-search-wrapper .vendor-search-form {
  display: flex;
}
.vendor-search-wrapper input {
  min-height: 3.8rem;
  height: 3.8rem;
  color: #777;
  border-radius: 0.3rem;
}
.vendor-search-wrapper input:focus {
  border-color: #8080809e;
}
.vendor-search-wrapper .btn {
  padding: 0.7em 1.65em;
}
.vendor-product-title {
  font-size: 1.4rem;
  font-weight: 600;
  padding: 1.9rem 1.5rem;
  border: 1px solid #eee;
  border-radius: 0.3rem;
}
.vendor-product-title a {
  color: #333;
}
.vendor-product-title a:hover {
  color: #ab8e66;
}
.vendor-map {
  border: 1px solid #eee;
}
.google-map {
  height: 35rem;
  background-color: #98c3e5;
}
@media (max-width: 991px) {
  .store-wcmp {
    height: 100%;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
  }
  .store-wcmp .store-content {
    display: block;
    position: relative;
    background: #fff;
  }
  .store-wcmp .seller-brand {
    margin-bottom: 2rem;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
  }
  .store-wcmp .seller-brand img {
    width: calc(100% + 2px);
    height: calc(100% + 2px);
    max-width: calc(100% + 2px);
    margin: -1px;
    border: 1px solid #eee;
  }
  .store-wcmp .seller-date {
    flex: auto;
    max-width: 100%;
  }
  .store-wcmp .store-title a {
    color: #ab8e66;
    text-shadow: none;
  }
  .store-wcmp .store-address,
  .store-wcmp .store-rating {
    color: #333;
  }
  .store-wcfm-banner .store-content {
    display: block;
  }
  .store-wcfm-banner .store-content-right {
    align-items: flex-start;
    margin: 1rem 0 0 14rem;
  }
  .store-wcfm-banner .store-content-right .btn {
    margin-bottom: 1.5rem;
  }
}
@media (max-width: 767px) {
  .toolbox.vendor-toolbox {
    display: block;
  }
  .store-list .store-header {
    flex: 0 0 30rem;
    max-width: 30rem;
  }
  .store.store-banner .store-content {
    background: none;
    padding-left: 2rem;
    padding-right: 2rem;
    max-width: 27rem;
  }
  .store-wcmp-banner .social-icons {
    display: flex;
    justify-content: center;
    position: relative;
    top: auto;
    right: auto;
    margin-top: 1rem;
  }
}
@media (max-width: 575px) {
  .store-list {
    display: block;
  }
  .store-list .store-header {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .store-list .store-content {
    padding-left: 2rem;
  }
  .store-list .seller-brand {
    left: auto;
    transform: none;
    right: 2rem;
    top: -27%;
  }
  .store-wcfm-banner .store-content-left {
    display: block;
    text-align: center;
  }
  .store-wcfm-banner .personal-info {
    margin-right: 0;
  }
  .store-wcfm-banner .seller-brand {
    margin-right: auto;
    margin-left: auto;
  }
  .store-wcfm-banner .store-title {
    justify-content: center;
  }
  .store-wcfm-banner .store-content-right {
    align-items: center;
    margin-left: 0;
  }
}
@media (max-width: 479px) {
  .store-list .seller-brand {
    top: -22%;
    width: 7rem;
    height: 7rem;
  }
}
.widget-title {
  margin-bottom: 2rem;
  padding: 1.1rem 0;
  font-size: 1.5rem;
  font-weight: 700;
  text-transform: uppercase;
  line-height: 1.2;
  letter-spacing: -0.025em;
}
.widget-products .widget-title {
  font-size: 1.4rem;
  font-weight: 600;
  letter-spacing: -0.025em;
  padding-bottom: 0.8rem;
}
.widget-products .widget-body {
  padding: 0 2rem;
}
.widget-products.widget-products-bordered .widget-body {
  border: 1px solid #eee;
}
.widget-products.widget-products-bordered .product-widget:not(:last-child) {
  border-bottom: 1px solid #eee;
}
.widget-products .swiper-button-next,
.widget-products .swiper-button-prev {
  top: -1.7rem;
  right: -1rem;
  border: 0;
  color: #747474;
  font-weight: normal;
  width: 15px;
  height: 15px;
}
.widget-products .swiper-button-next:not(.swiper-button-disabled):active,
.widget-products .swiper-button-next:not(.swiper-button-disabled):focus,
.widget-products .swiper-button-next:not(.swiper-button-disabled):hover,
.widget-products .swiper-button-prev:not(.swiper-button-disabled):active,
.widget-products .swiper-button-prev:not(.swiper-button-disabled):focus,
.widget-products .swiper-button-prev:not(.swiper-button-disabled):hover {
  background: transparent;
  border: 0;
  color: #ab8e66;
}
.widget-products .swiper-button-prev {
  transform: translateX(-50%);
}
.widget-products .swiper-button-next {
  transform: translateX(50%);
}
.sidebar .widget-products .widget-body {
  border: 0;
  padding: 0;
}
.widget .widget-title {
  position: relative;
  margin: -0.1rem 0;
  padding: 1.4rem 2.5rem 1.4rem 0;
  font-weight: 600;
  font-size: 1.6rem;
  color: #333;
  letter-spacing: 0;
  border-bottom: 1px solid #eee;
  text-transform: capitalize;
  cursor: pointer;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.widget .widget-body {
  padding: 0.7rem 0 1rem;
  opacity: 1;
  transition: opacity 0.3s;
  color: #333;
}
.widget-collapsible .widget-title label {
  position: relative;
  padding: 0 0.2rem;
}
.widget-collapsible .widget-title label:after {
  position: absolute;
  content: "";
  left: 0;
  bottom: -1.2rem;
  width: 100%;
  height: 2px;
  background-color: #666;
}
.widget-collapsible .toggle-btn {
  right: 0.4rem;
  margin-top: -0.1rem;
  width: 10px;
  padding: 0;
  opacity: 1;
}
.widget-collapsible .toggle-btn:after,
.widget-collapsible .toggle-btn:before {
  content: "";
  position: absolute;
  border-top: 2px solid #666;
  width: 12px;
  transition: transform 0.3s;
}
.widget-collapsible > .collapsed .toggle-btn:before {
  transform: rotate(90deg);
}
.widget-collapsible > .collapsed .toggle-btn:after {
  transform: rotate(180deg);
}
.widget-collapsible .collapsed + .widget-body {
  display: none;
}
.widget-collapsible .collapsed ~ .widget-body {
  opacity: 0.1;
}
.category-default img {
  min-height: 20rem;
}
.category-default .category-content {
  left: 3rem;
}
.category-default .category-title {
  margin-bottom: 0;
  font-size: 2.2em;
}
.category-default .category-count {
  opacity: 0.6;
  line-height: 1.2;
}
.category-ellipse-section {
  margin-bottom: 5.2rem;
}
.category-classic-section {
  background-color: #f8f8f8;
}
.category-masonry-section {
  padding-bottom: 3.7rem;
}
.category-masonry-section .category-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, calc(100% / 4));
  margin: -1rem;
}
.category-masonry-section .category-grid > * {
  padding: 1rem;
}
.category-masonry-section .grid-item1 {
  grid-column-end: span 2;
  grid-row-end: span 2;
}
.category-masonry-section .grid-item2 {
  grid-column-end: span 1;
  grid-row-end: span 1;
}
.category-masonry-section .grid-item3 {
  grid-column-end: span 1;
  grid-row-end: span 2;
}
.category-masonry-section .grid-item3 .category-banner,
.category-masonry-section .grid-item3 figure,
.category-masonry-section .grid-item3 img {
  height: 100%;
}
@media (max-width: 991px) and (min-width: 768px) {
  .category-masonry-section .category-grid {
    grid-template-columns: repeat(auto-fill, calc(100% / 3));
  }
  .category-masonry-section .grid-item3 {
    grid-row-start: 1;
    grid-column-start: 3;
    grid-row-end: span 3;
  }
}
@media (max-width: 767px) {
  .category-masonry-section .category-grid {
    grid-template-columns: repeat(auto-fill, calc(100% / 2));
  }
}
@media (max-width: 575px) {
  .page-title {
    font-size: 3rem;
  }
  .page-subtitle {
    font-size: 1.2rem;
  }
}
@media (max-width: 479px) {
  .category-masonry-section .grid-item2,
  .category-masonry-section .grid-item3 {
    grid-row-end: span 1;
    grid-column-end: span 2;
  }
}
.compare-popup {
  position: fixed;
  top: 100%;
  left: 0;
  right: 0;
  padding: 2rem 0;
  background: #fff;
  transition: transform 0.3s;
  z-index: 2400;
}
.compare-popup .container {
  display: flex;
  align-items: center;
  padding-top: 2.1rem;
  padding-bottom: 3.1rem;
}
.compare-popup .btn-clean {
  margin-right: 1.8rem;
  padding: 0;
  border: none;
  text-transform: capitalize;
  font-weight: 400;
}
.compare-popup .btn-clean:active,
.compare-popup .btn-clean:focus,
.compare-popup .btn-clean:hover {
  color: #ab8e66;
  background-color: #fff;
}
.compare-popup.show {
  transform: translateY(-99%);
}
.compare-popup.show + .compare-popup-overlay {
  opacity: 0.7;
  visibility: visible;
  transition: opacity 0.3s;
}
.compare-title {
  margin-top: 0.8rem;
}
.compare-title .title {
  margin-bottom: 0.3rem;
  font-size: 2.4rem;
  font-weight: 700;
  white-space: nowrap;
}
.compare-product-list {
  display: flex;
  flex: 1;
  justify-content: center;
  margin: 0.9rem 2rem 0;
  padding: 0;
}
.compare-product-list li {
  position: relative;
  width: 8vw;
  max-width: 138px;
  min-height: 8vw;
}
.compare-product-list li:not(:first-child) {
  margin-left: 3rem;
}
.compare-product-list li:empty:before {
  content: "+";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  line-height: 5rem;
  font-size: 3rem;
  color: #eee;
  width: 5rem;
  height: 5rem;
  border-radius: 50%;
  box-shadow: 2px 4px 15px rgba(0, 0, 0, 0.12);
}
.compare-product-list li:after {
  content: "";
  position: absolute;
  border: 1px solid #eee;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}
.compare-product-list .btn-remove {
  position: absolute;
  padding: 0;
  right: -1rem;
  top: -1rem;
  line-height: 1.2;
  width: 20px;
  height: 20px;
  font-size: 1.5rem;
  border-radius: 50%;
  border: none;
  box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.4);
  overflow: hidden;
}
.compare-product-list .btn-remove i {
  font-size: 1.2rem;
  font-weight: 600;
  margin-bottom: 0;
}
.compare-product-list .btn-remove:active,
.compare-product-list .btn-remove:focus,
.compare-product-list .btn-remove:hover {
  background-color: #fff;
}
.compare-popup-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #000;
  visibility: hidden;
  opacity: 0;
  transition: opacity 0.3s, visibility 0.3s;
  z-index: 2399;
}
.compare-table {
  overflow-x: auto;
}
.compare-table > div:nth-child(2n) .compare-col {
  background-color: #fbfbfb;
}
.compare-table .compare-row {
  display: flex;
  flex-wrap: nowrap;
}
.compare-product .product-media {
  border: 1px solid #f5f5f5;
}
.compare-col {
  padding: 2.5rem 0 2.5rem 2rem;
}
.compare-col.compare-product {
  text-align: center;
}
.compare-col.compare-field {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  text-align: end;
  padding-right: 5rem;
  font-weight: 400;
  color: #999;
}
.compare-col.compare-value {
  padding-right: 1rem;
}
.compare-col .remove-product {
  margin-bottom: 2.4rem;
  padding: 0;
  border: none;
  color: #333;
}
.compare-col .remove-product i {
  font-size: 2.2rem;
}
.compare-col .remove-product:active,
.compare-col .remove-product:focus,
.compare-col .remove-product:hover {
  background-color: transparent;
  color: #ab8e66;
}
.compare-col .product-details {
  padding: 1.6rem 0 0.7rem;
}
.compare-col .product-price {
  font-size: 1.4rem;
  font-weight: 400;
  letter-spacing: 0;
}
.compare-col .new-price {
  margin-right: 0;
  color: #ab8e66;
}
.compare-col .old-price {
  color: #999;
}
.compare-availability .compare-value {
  color: #ffa800;
}
.compare-description ul {
  margin: 0;
  padding: 0;
}
.compare-description li {
  color: #333;
  line-height: 1.6;
}
.compare-description li:before {
  font-size: 1.4rem;
}
.compare-rating {
  display: flex;
}
.compare-rating .ratings-container {
  width: 100%;
  margin-bottom: 0;
  font-size: 1.4rem;
}
.compare-brand .compare-value,
.compare-category .compare-value,
.compare-meta .compare-value,
.compare-size .compare-value {
  color: #333;
}
.compare-color .swatch {
  vertical-align: middle;
  margin-right: 0.4rem;
  width: 1.5rem;
  height: 1.5rem;
  display: inline-block;
  border-radius: 50%;
}
@media (min-width: 1921px) {
  .compare-product-list li {
    max-height: 15.5rem;
    max-width: none;
  }
  .compare-product-list li figure,
  .compare-product-list li img {
    height: 100%;
    width: 100%;
  }
}
@media (max-width: 991px) {
  .compare-popup .container {
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 0;
    padding-bottom: 0;
  }
  .compare-product-list {
    flex: 0 0 100%;
    justify-content: center;
    margin: 2rem 0;
  }
  .compare-product-list li {
    width: 18vw;
    min-height: 11rem;
  }
}
@media (max-width: 991) and (min-width: 480px) {
  .compare-title {
    display: flex;
  }
}
@media (max-width: 767px) {
  .compare-col.compare-field {
    max-width: 15rem;
    padding-right: 1rem;
    padding-left: 1rem;
  }
}
@media (max-width: 575px) {
  .compare-product-list li {
    min-height: 6rem;
  }
  .compare-product-list li:not(:first-child) {
    margin-left: 1.5rem;
  }
}
@media (max-width: 479px) {
  .compare-product-list li:empty:before {
    width: 3.5rem;
    height: 3.5rem;
    line-height: 3.5rem;
    font-size: 2rem;
  }
}
.product-gallery {
  display: flex;
  flex-wrap: wrap;
  position: sticky;
}
.product-gallery.row > * {
  display: flex;
  align-items: center;
}
.product-gallery.product-gallery-sticky {
  top: 2rem;
}
.product-gallery-btn {
  position: absolute;
  padding: 1rem;
  width: 4rem;
  height: 4rem;
  right: 1.5rem;
  bottom: 1.5rem;
  box-sizing: border-box;
  border: 0;
  border-radius: 50%;
  color: #999;
  background: #fff;
  font-size: 2rem;
  line-height: 1;
  opacity: 0.7;
  transition: opacity 0.3s, color 0.3s;
  z-index: 1;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
  cursor: pointer;
}
.product-gallery-btn.product-degree-viewer {
  bottom: 6.5rem;
}
.product-gallery-btn.product-video-viewer {
  bottom: 11.5rem;
}
.product-gallery-btn:hover {
  opacity: 1;
  color: #333;
}
.product-sticky-content.fixed {
  background-color: #fff;
}
.bought-together-products > * {
  width: auto;
}
.bought-together-products .product-wrap {
  position: relative;
  flex: 0 0 15.8rem;
  max-width: 15.8rem;
}
.bought-together-products .product-wrap:not(:first-child) {
  margin-left: 3rem;
}
.bought-together-products .product-wrap:not(:first-child) .product-media:after,
.bought-together-products
  .product-wrap:not(:first-child)
  .product-media:before {
  content: "";
  position: absolute;
  left: -2.5rem;
  top: 50%;
  background-color: #999;
}
.bought-together-products
  .product-wrap:not(:first-child)
  .product-media:before {
  width: 17px;
  height: 1px;
  transform: translateX(-8px);
}
.bought-together-products .product-wrap:not(:first-child) .product-media:after {
  width: 1px;
  height: 17px;
  transform: translateY(-8px);
}
.bought-together-products .product-details {
  padding: 1.5rem 0.2rem 0;
}
.bought-together-products .product-button {
  position: relative;
  margin: 1.3rem 0 2.5rem 10rem;
}
.bought-together-products .product-button:after,
.bought-together-products .product-button:before {
  content: "";
  position: absolute;
  left: -5rem;
  top: 70px;
  width: 17px;
  height: 1px;
  transform: translateX(-8px);
  background-color: #999;
}
.bought-together-products .product-button:before {
  margin-top: -12px;
}
.bought-together-products .bought-price {
  font-size: 2.4rem;
}
.bought-together-products .bought-count {
  margin-bottom: 2.7rem;
  line-height: 1.3;
}
.bought-together-products .product-media:hover img {
  opacity: 1;
}
.bought-together-products .product-checkbox {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.bought-together-products .product-checkbox label {
  position: static;
  padding-left: 0;
}
.bought-together-products .custom-checkbox {
  cursor: pointer;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
}
.bought-together-products .custom-checkbox + label:before {
  top: 1.5rem;
  left: 1.5rem;
  transform: none;
}
.product-tabs .nav-item:not(:last-child) {
  margin-right: 4rem;
}
.product-tabs .nav-link {
  padding: 1.5rem 0 1.3rem;
  font-size: 2rem;
  font-weight: 700;
  color: #999;
  text-transform: capitalize;
}
.product-tabs .nav-link:after {
  border-top: 2px solid transparent;
}
.product-tabs .nav-tabs .nav-link.active,
.product-tabs .nav-tabs .nav-link:hover {
  color: #333;
}
.product-tabs .tab-pane {
  padding: 3.5rem 0 2.7rem;
}
.product-tabs ul {
  font-size: 1.4rem;
  color: #666;
}
.product-tabs .product-video img {
  min-height: 20rem;
}
#product-tab-description .sub-title {
  margin: 0.4rem 0 0.4rem;
  font-size: 1.4rem;
}
#product-tab-description .sub-title span {
  margin-right: 1.2rem;
}
#product-tab-description .detail {
  line-height: 1.6;
}
#product-tab-description ul {
  font-size: 1.3rem;
}
#product-tab-description.card-body .col-md-6 {
  margin-bottom: 1.7rem;
}
#product-tab-specification ul li {
  display: flex;
  align-items: center;
  position: relative;
  padding: 0rem 0 1rem;
}
#product-tab-specification ul label {
  flex: 0 0 20rem;
  max-width: 20rem;
  align-self: center;
  z-index: 1;
  color: #333;
}
#product-tab-specification ul p {
  flex: 1;
  margin-bottom: 0;
}
#product-tab-vendor .vendor-banner img {
  min-height: 29.5rem;
  width: 100%;
}
#product-tab-vendor .vendor-user {
  display: flex;
  align-items: center;
  margin-bottom: 1.7rem;
}
#product-tab-vendor .vendor-logo img {
  border: 1px solid #eee;
  border-radius: 5px;
}
#product-tab-vendor .vendor-name {
  margin: 0.3rem 0;
  font-size: 1.8rem;
  font-weight: 600;
  color: #333;
}
#product-tab-vendor .vendor-name a {
  color: inherit;
}
#product-tab-vendor .ratings-full {
  margin-right: 0.8rem;
}
#product-tab-vendor .rating-reviews {
  font-size: 1.4rem;
  color: #666;
}
#product-tab-vendor .vendor-info {
  margin-bottom: 3.1rem;
  font-size: 1.4rem;
}
#product-tab-vendor .vendor-info li {
  display: flex;
  padding: 0.75rem 0;
}
#product-tab-vendor .vendor-info label {
  display: inline-block;
  flex: 0 0 12rem;
  max-width: 12rem;
  padding-right: 1rem;
  color: #333;
}
#product-tab-vendor .store-address {
  font-size: 1.4rem;
  color: #666;
  opacity: 1;
}
#product-tab-vendor .store-phone a {
  color: #333;
}
#product-tab-vendor .store-phone a:hover {
  color: #ab8e66;
}
#product-tab-vendor p {
  font-size: 1.4rem;
  line-height: 1.75;
}
#product-tab-description.card-body,
#product-tab-reviews.card-body,
#product-tab-specification.card-body,
#product-tab-vendor.card-body {
  padding-top: 2.2rem;
  padding-bottom: 2rem;
}
.accordion-simple:not(.accordion-icon) .card-header a:after {
  font-size: 1.6rem;
}
@media (min-width: 768px) {
  #product-tab-vendor .pl-md-6 {
    padding-left: 3rem !important;
  }
}
#product-tab-reviews {
  border-bottom-width: 0;
}
#product-tab-reviews p {
  font-size: 1.4rem;
}
#product-tab-reviews .avg-rating-container {
  display: flex;
  align-items: center;
  font-size: 1rem;
  margin-bottom: 0.2rem;
}
#product-tab-reviews .avg-mark {
  font-size: 6em;
  font-weight: 600;
  color: #ab8e66;
  letter-spacing: -0.025em;
  line-height: 1;
  margin-bottom: 0;
}
#product-tab-reviews .avg-rating {
  margin-left: 1.8rem;
}
#product-tab-reviews .avg-rating p {
  font-size: 1.4rem;
  line-height: 1.4;
}
#product-tab-reviews .avg-rating .ratings-container {
  margin-bottom: 0.3rem;
}
#product-tab-reviews .avg-rating .ratings-full {
  margin-right: 0.8rem;
}
#product-tab-reviews .ratings-value {
  margin-bottom: 1.6rem;
  font-size: 1.4rem;
}
#product-tab-reviews .ratings-value span:first-child {
  margin-right: 2.1rem;
  font-size: 2.5rem;
}
#product-tab-reviews .ratings-value .count {
  margin-left: 0.6rem;
  font-size: 1.2rem;
  color: #aaa;
}
#product-tab-reviews .ratings-list .ratings-container {
  margin-bottom: 1.5rem;
}
#product-tab-reviews .ratings-list .progress-bar {
  max-width: 20rem;
  margin-left: 1.3rem;
  margin-bottom: 0;
  border-radius: 0.4rem;
}
#product-tab-reviews .ratings-list .progress-bar span {
  border-radius: 0.4rem;
}
#product-tab-reviews .ratings-list .progress-value {
  margin-left: 2rem;
  min-width: 4rem;
}
#product-tab-reviews .ratings-list .progress-value mark {
  font-size: 1.2rem;
  color: #666;
}
#product-tab-reviews .title-link {
  font-size: 1.4rem;
}
#product-tab-reviews .review-form {
  padding-top: 0.3rem;
}
#product-tab-reviews .review-form .form-control {
  min-height: 4rem;
  margin-bottom: 2rem;
  font-family: Poppins, sans-serif;
  font-size: 1.3rem;
  border-color: #eee;
  color: #777;
}
#product-tab-reviews .review-form .form-control::placeholder {
  color: inherit;
}
#product-tab-reviews .review-form textarea {
  height: 13.3rem;
}
#product-tab-reviews .review-form .btn {
  background-color: #454545;
  border-color: #454545;
}
#product-tab-reviews .form-group {
  margin: 0.4rem 0 4.1rem;
  font-size: 1.4rem;
}
#product-tab-reviews .form-group label {
  padding-left: 2.7rem;
}
#product-tab-reviews .form-group .custom-checkbox + label:before {
  top: 0;
  transform: none;
  margin-top: 0.2rem;
}
#product-tab-reviews .tab-nav-boxed .nav-item {
  margin: 0 1rem 0.5rem 1rem;
}
#product-tab-reviews .tab-nav-boxed .nav-link {
  font-size: 1.3rem;
  font-weight: 600;
  color: #333;
  border-width: 1px;
  padding: 0.9em 1.5em;
  border-radius: 2rem;
}
#product-tab-reviews .tab-nav-boxed .nav-link:after {
  content: none;
}
#product-tab-reviews .tab-nav-boxed .nav-link.active,
#product-tab-reviews .tab-nav-boxed .nav-link:hover {
  color: #ab8e66;
}
#product-tab-reviews .tab-nav-boxed .tab-pane {
  padding: 1.5rem 0 0;
}
.vendor-product-section {
  margin-bottom: 4.2rem;
}
.related-product-section .ratings-container,
.vendor-product-section .ratings-container {
  margin-bottom: 0.3rem;
}
.product-single .product-countdown-container {
  display: flex;
  margin: -0.7rem 0 1.3rem;
  font-size: 1.5rem;
}
.product-single .product-countdown-container .countdown-amount {
  font-weight: 700;
  color: #ab8e66;
}
.description-section .title.title-link:before,
.review-section .title.title-link:before {
  height: 0.2rem;
}
aside .service-list {
  padding: 0 2rem;
  border: 1px solid #eee;
}
aside .service-list > * {
  padding: 1.6rem 0;
}
aside .service-list > :not(:last-child) {
  border-bottom: 1px solid #eee;
}
aside .service-list .icon-box svg {
  width: 3rem;
  height: 3rem;
}
aside .service-list .icon-box-title {
  font-size: 1.3rem;
  line-height: 1.3;
  letter-spacing: 0;
}
aside .service-list p {
  font-size: 1.2rem;
  line-height: 1.2;
}
aside .sp-sidebar-banner .banner-content {
  top: 9%;
  left: 6.5%;
}
aside .sp-sidebar-banner .banner-subtitle,
aside .sp-sidebar-banner .banner-title {
  font-size: 1.8rem;
  font-weight: 700;
  letter-spacing: -0.01em;
  margin-bottom: 0.5rem;
}
aside .sp-sidebar-banner span {
  font-size: 2.4rem;
  margin-right: 0.5rem;
}
@media (min-width: 992px) {
  .sticky-both-content .product-details-1 {
    order: -1;
  }
}
.hotspot-banner {
  overflow: visible;
}
.hotspot-product {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  width: 3em;
  height: 3em;
  border-radius: 50%;
  background-color: #fff;
  transition: background-color 0.3s;
}
.hotspot-product .product {
  position: absolute;
  opacity: 0;
  width: 20em;
  padding: 1rem;
  visibility: hidden;
  background: #fff;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.06);
  border-radius: 0.5rem;
  overflow: hidden;
  transition: opacity 0.3s, visibility 0.3s, transform 0.3s, z-index 0.3s;
  z-index: -1;
}
.hotspot-product .product .product-action-vertical {
  opacity: 1;
  visibility: visible;
}
.hotspot-product:hover {
  background-color: #333;
}
.hotspot-product:hover .btn-hotspot {
  color: #fff;
}
.hotspot-product:hover .product {
  opacity: 1;
  visibility: visible;
  z-index: 1;
}
.hotspot-product.hotspot-product-1 {
  left: 22.6%;
  top: 10.9%;
}
.hotspot-product.hotspot-product-2 {
  left: 23.8%;
  top: 82%;
}
.hotspot-product.hotspot-product-3 {
  left: 71.1%;
  top: 36.1%;
}
.hotspot-right .product {
  left: 100%;
  top: -6rem;
}
.hotspot-right:hover .product {
  transform: translateX(1rem);
}
.hotspot-top .product {
  bottom: 100%;
  left: -40px;
}
.hotspot-top:hover .product {
  transform: translateY(-1rem);
}
.hotspot-left .product {
  right: 100%;
  top: -60px;
}
.hotspot-left:hover .product {
  transform: translateX(-1rem);
}
.btn-hotspot {
  font-size: 1.2em;
  line-height: 1;
  color: #333;
  transition: color 0.3s;
}
.pswp img {
  border-radius: 0.3rem;
}
@media (min-width: 768px) {
  body.addtocart-fixed .footer {
    padding-bottom: 12.5rem;
  }
}
@media (max-width: 767px) {
  .hotspot-banner {
    font-size: 0.8rem;
  }
}
@media (max-width: 575px) {
  .bought-together-products .product-wrap {
    flex: 0 0 12rem;
    max-width: 12rem;
  }
  .bought-together-products .product-button {
    margin: -1rem 0 3rem 3rem;
  }
  .bought-together-products .product-button:after,
  .bought-together-products .product-button:before {
    left: -1.5rem;
  }
}
@media (max-width: 479px) {
  .hotspot-banner {
    font-size: 0.6rem;
  }
}
@media (max-width: 375px) {
  #product-tab-specification ul li:before {
    width: calc(44% - 1rem);
  }
  #product-tab-specification ul label {
    flex: 0 0 44%;
    max-width: 44%;
  }
}
.header {
  font-family: Poppins, sans-serif;
  background: #fff;
  color: #fff;
}
.header .container,
.header .container-fluid,
.header .inner-wrap {
  display: flex;
  align-items: center;
}
.header .inner-wrap {
  width: 100%;
}
.header a:not(.btn) {
  color: inherit;
}
.header a:not(.btn):hover {
  color: #ab8e66;
}
.header-bottom,
.header-middle,
.header-top {
  display: flex;
}
.header-center,
.header-left,
.header-right {
  display: flex;
  align-items: center;
}
.header-right {
  margin-left: auto;
}
.has-center .header-right {
  flex: 1;
}
.has-center .header-right {
  justify-content: flex-end;
}
.has-center .header-center {
  margin-left: 2rem;
  margin-right: 2rem;
}
.header-top {
  background: #f5f6f8;
  font-size: 1.1rem;
  letter-spacing: -0.027em;
  text-transform: capitalize;
}
.header-top .header-right {
  padding-right: 0.2rem;
}
.header-top .header-right > .dropdown:first-child {
  margin-left: 0;
}
.header-top .header-right > .dropdown:hover .dropdown-box:before {
  visibility: visible;
  opacity: 1;
  top: auto;
  bottom: 100%;
}
.header-top .header-right .dropdown-box:before {
  content: "";
  position: absolute;
  z-index: 1002;
  left: 50%;
  top: -9999px;
  transform: translateX(-50%);
  border: 11px solid transparent;
  border-bottom: 11px solid #fff;
  transition: opacity 0.2s ease-out, transform 0.2s ease-out;
  visibility: hidden;
  opacity: 0;
  cursor: pointer;
  pointer-events: none;
}
.header-top .header-right a {
  display: flex;
  align-items: center;
}
.header-top .header-right i {
  margin-right: 0.6rem;
  font-size: 1.5rem;
}
.header-top .header-right > * {
  margin-left: 2rem;
}
.header-top .header-right .delimiter {
  margin: 0 0.3rem;
  color: #aaa;
}
.header-top .header-right .divider {
  width: 1px;
  height: 1.5rem;
  background-color: #ccc;
}
.logo {
  min-width: 14.4rem;
  margin-bottom: 20px;
  margin-left: 55px !important;
}
.logo img {
  display: block;
}
.header h1 {
  line-height: 0;
  margin-bottom: 0;
}
.header-bottom {
  color: #fff;
  background: #141414;
  font-size: 1.4rem;
  font-weight: 600;
  letter-spacing: -0.025em;
}
.header-bottom .main-nav {
  margin-left: 2.1rem;
}
.header-bottom .header-right {
  padding-right: 0.2rem;
}
.header-bottom .header-right > a {
  display: flex;
  align-items: center;
  padding: 1.4rem 0 1.3rem;
}
.header-bottom .header-right > a i {
  vertical-align: middle;
}
.header-bottom .header-right > a i.w-icon-map-marker {
  font-size: 2.2rem;
  margin-top: -0.5rem;
}
.header-bottom .header-right > a i.w-icon-sale {
  font-size: 2.4rem;
  margin-right: 0.8rem;
}
.header-bottom .header-right > a:first-child {
  margin-right: 3.2rem;
}
.header-bottom:not(.fixed) .show-dropdown .dropdown-box {
  opacity: 1;
  visibility: visible;
  transform: none;
  box-shadow: none !important;
  margin-top: 2rem;
}
.welcome-msg {
  margin: 0;
  font-size: inherit;
  font-weight: inherit;
  letter-spacing: -0.022em;
  line-height: 1.5;
  white-space: nowrap;
  padding: 14px 0;
  text-transform: uppercase;
}
.header-middle {
  padding-top: 3.2rem;
  padding-bottom: 3.2rem;
  color: #333;
  background: #fff;
  font-size: 1.2rem;
  border-bottom: none;
}
.header-middle .header-left {
  flex: 1;
}
.account {
  display: flex;
  margin-right: 2rem;
}
.account .login {
  font-size: 1.3rem;
  line-height: 1.5em;
  color: #999;
  transition: color 0.3s;
}
.account .w-icon-account {
  color: white;
  width: 5.3rem;
  height: 5.3rem;
  border: 1px solid rgba(238, 238, 238, 0.5);
  font-size: 2.6rem;
  transition: border-color 0.3s, color 0.3s;
}
.account span {
  color: #ccc;
  transition: color 0.3s;
}
.account b {
  color: white;
  font-size: 1.5rem;
  transition: color 0.3s;
}
.account:hover .login,
.account:hover b,
.account:hover span {
  color: #ab8e66;
}
.account:hover .w-icon-account {
  color: #ab8e66;
  border-color: #ab8e66;
}
.header-search {
  position: relative;
  width: 100%;
  max-width: 38rem;
}
.header-search input.form-control {
  flex: 1;
  min-width: 40px;
  padding: 0.9rem;
  border: 2px solid #e5e5e5;
  border-right: 0;
  font-size: 1.2rem;
  letter-spacing: 0;
  font-family: Poppins, sans-serif;
}
.header-search input.form-control::placeholder {
  color: inherit;
}
.header-search .btn-search {
  margin: 0;
  padding: 0;
  min-width: 5.1rem;
  color: #333;
  border-left: 0;
  border-color: #e5e5e5;
  font-size: 1.5rem;
  font-weight: normal;
  letter-spacing: -0.025em;
  text-transform: none;
}
.header-search .btn-search i {
  font-size: 1.7rem;
  line-height: 1;
  letter-spacing: -0.01em;
  font-weight: 500;
}
.header-search .btn-search:active,
.header-search .btn-search:focus,
.header-search .btn-search:hover {
  color: #ab8e66;
  background-color: transparent;
}
.header-search .select-box:before {
  right: 1.2rem;
  margin-top: -0.1rem;
  font-weight: 400;
}
.header-search .select-box select {
  position: relative;
  padding: 0 2rem 0 1.5rem;
  border: 0;
  font-weight: 400;
  z-index: 1;
}
.header-search.hs-toggle .input-wrapper {
  position: absolute;
  display: flex;
  right: -2.5rem;
  top: 100%;
  min-width: 30rem;
  padding: 1.5rem;
  height: auto;
  background-color: #fff;
  box-shadow: 0 2px 35px rgba(0, 0, 0, 0.1);
  visibility: hidden;
  opacity: 0;
  transform: translate3d(0, 20px, 0);
  z-index: 100;
  transition: transform 0.3s, visibility 0.3s, opacity 0.3s;
}
.header-search.hs-toggle:hover {
  color: #ab8e66;
}
.header-search.hs-toggle .form-control {
  padding: 1.4rem 2rem;
  font-size: 1.3rem;
  color: #777;
  background-color: #f4f4f4;
  border: none;
  height: 5rem;
}
.header-search.hs-toggle .btn-search {
  background-color: #f4f4f4;
  min-width: 5rem;
  font-size: 1.8rem;
  color: #222;
  border: none;
}
.header-search.hs-toggle .btn-search i {
  margin-bottom: 0.3rem;
  font-size: inherit;
}
.header-search.hs-toggle.show .input-wrapper {
  opacity: 1;
  visibility: visible;
  transform: translate3d(0, 0, 0);
}
.header-search.hs-toggle.show .search-toggle:after {
  opacity: 1;
  visibility: visible;
  transform: translate(50%, 0);
}
.header-search.hs-expanded {
  flex: 1;
  margin: 0 auto;
  min-width: auto;
  max-width: 55.6rem;
}
.header-search.hs-expanded .select-box {
  width: 14.6rem;
  border: 2px solid #e5e5e5;
  border-right: none;
  color: #666666;
}
.header-search.hs-expanded .select-box:after {
  content: "";
  height: 35px;
  width: 1px;
  background: #e5e5e5;
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
}
.header-search.hs-expanded input.form-control {
  color: #666;
  border-right: none;
  border-left: none;
}
.header-search.hs-expanded .btn-search {
  display: flex;
  align-items: center;
  justify-content: center;
  transition: opacity 0.4s, color 0.4s;
}
.header-search.hs-expanded .btn-search i {
  margin: 0;
}
.header-search.hs-expanded .btn-search span {
  margin-right: 0.5rem;
  letter-spacing: -0.03em;
}
.header-search.hs-simple {
  min-width: 35rem;
}
.header-search.hs-simple input.form-control {
  border: none;
  background-color: #f5f5f5;
}
.header-search.hs-simple .btn-search {
  position: absolute;
  right: 0;
  height: 100%;
  min-width: 4.5rem;
  background: transparent;
  color: #666;
}
.header-search.hs-rounded .form-control,
.header-search.hs-rounded .select-box {
  border-radius: 0.5rem 0 0 0.5rem;
}
.header-search.hs-rounded .btn-search {
  border-radius: 0 0.5rem 0.5rem 0;
}
.header-search.hs-rounded.hs-simple input.form-control {
  border-radius: 5rem;
}
.header-search.hs-rounded.hs-expanded .form-control {
  border-radius: 0;
}
.header-search.hs-round .form-control,
.header-search.hs-round .select-box {
  border-radius: 0.3rem 0 0 0.3rem;
}
.header-search.hs-round .btn-search {
  border-radius: 0 0.3rem 0.3rem 0;
}
.header-search.hs-round.hs-simple input.form-control {
  border-radius: 3rem;
}
.header-search.hs-round.hs-expanded .form-control {
  border-radius: 0;
}
.dir-up.hs-toggle .input-wrapper {
  top: auto;
  bottom: 100%;
  margin-bottom: 2rem;
}
.main-nav .menu > .has-submenu {
  padding-right: 1.5rem;
}
.mobile-menu-toggle {
  display: none;
  font-size: 2.4rem;
  line-height: 1;
}
.compare {
  display: flex;
  align-items: center;
  margin: -0.4rem 3rem 0 0;
  color: #333;
}
.compare span.compare-label {
  cursor: pointer;
  margin-top: 0.1rem;
  font-weight: inherit;
  color: inherit;
}
.compare i {
  font-size: 3.3rem;
  color: inherit;
}
.compare:hover {
  color: #ab8e66;
}
.wishlist {
  display: inline-flex;
  align-items: center;
  transition: color 0.3s;
  margin-right: 2.3rem;
  color: #333;
}
.wishlist span {
  margin-top: 0.3rem;
  font-weight: inherit;
  color: inherit;
  cursor: pointer;
}
.wishlist i {
  font-size: 2.7rem;
  color: inherit;
}
.wishlist:hover {
  color: #ab8e66;
}
.header-call {
  position: relative;
  margin-right: 4.8rem;
}
.header-call .w-icon-call {
  margin: 0 0.6rem 0.2rem 0;
  font-size: 3rem;
}
.header-call .call-info {
  margin-top: 0.4rem;
}
.header-call .phone-number {
  font-size: 1.6rem;
  line-height: 1.7;
}
.header-call .chat a {
  color: #333;
}
.header-call .chat a:hover {
  color: #ab8e66;
}
.header-call:hover .phone-number,
.header-call:hover .w-icon-call {
  color: #ab8e66;
}
.header-call:after {
  position: absolute;
  content: "";
  top: 50%;
  transform: translateY(-50%);
  right: -2.5rem;
  width: 1px;
  height: 4.1rem;
  background-color: #e5e5e5;
}
.cart-dropdown {
  color: #333;
}
.cart-dropdown > a i {
  font-size: 2.6rem;
  color: inherit;
}
.label-down {
  display: flex;
  align-items: center;
  flex-direction: column;
}
.label-down i {
  display: inline-block;
}
.label-down span {
  display: block;
}
.label-down i + span {
  margin-top: 0.3rem;
  letter-spacing: -0.03em;
  line-height: 1;
}
.header-border .header-bottom {
  border-bottom: 1px solid #eee;
}
@media (max-width: 991px) {
  .header .main-nav {
    display: none;
  }
  .header .sticky-content-wrapper {
    display: none;
  }
  .header-top .header-left {
    margin-right: 2rem;
  }
  .header-middle .header-right > :not(:last-child) {
    margin-right: 2rem;
  }
  .header-bottom {
    display: none;
  }
  .mobile-menu-toggle {
    display: block;
  }
  .header-call {
    margin-right: 1rem !important;
  }
  .header-call:after {
    content: none;
  }
}
@media (max-width: 991px) and (min-width: 480px) {
  .header-middle .logo {
    margin-left: 2rem;
  }
}
@media (max-width: 479px) {
  .header-top .header-left {
    position: relative;
    overflow: hidden;
  }
  .welcome-msg {
    transform: translateX(0);
    animation: 6s linear 2s 1 showMsgFirst, 12s linear 8s infinite showMsg;
  }
  .header-middle .logo {
    margin: 0 auto;
  }
  .header-middle .header-right {
    margin-left: 0 !important;
  }
}
.dropdown {
  position: relative;
}
.dropdown.show .dropdown-box,
.dropdown:hover .dropdown-box {
  visibility: visible;
  opacity: 1;
  top: 100%;
}
.dropdown.show:after,
.dropdown:hover:after {
  visibility: visible;
  opacity: 1;
  top: calc(100% - 20px);
  transform: translate3d(50%, 0, 0);
}
.dropdown.show .dropdown-box,
.dropdown:hover .dropdown-box {
  transform: translate3d(0, 0, 0);
}
.dropdown.show > a,
.dropdown:hover > a {
  color: #ab8e66;
}
.dropdown a {
  display: flex;
  align-items: center;
}
.dropdown a .dropdown-image {
  max-width: 1.4rem;
  margin-right: 0.6rem;
  margin-top: -1px;
  height: auto;
}
.dropdown > a {
  line-height: 1.1;
  padding: 11px 0;
}
.dropdown > a:after {
  display: inline-block;
  margin-left: 6px;
  content: "";
  font-family: "Font Awesome 5 Free";
  font-size: 8px;
  font-weight: 900;
}
.dropdown li.active > a,
.dropdown li:hover > a {
  color: #ab8e66;
}
.dropdown-box {
  position: absolute;
  right: 0;
  top: -9999px;
  padding: 0.5rem 0;
  color: #666;
  background-color: #fff;
  box-shadow: 0 4px 20px -8px rgba(0, 0, 0, 0.3);
  z-index: 1000;
  visibility: hidden;
  opacity: 0;
  transition: transform 0.2s ease-out;
  transform: translate3d(0, -10px, 0);
}
.dropdown-box a {
  padding: 0.6rem 1rem;
  font-size: inherit;
  line-height: 1.1;
}
.cart-dropdown .cart-toggle {
  padding: 0;
}
.cart-dropdown .cart-toggle:after {
  content: none;
}
.cart-dropdown .cart-label {
  display: block;
  margin: 0.5rem 0 0;
  font-weight: inherit;
  letter-spacing: -0.025em;
}
.cart-dropdown .cart-count {
  position: absolute;
  width: 1.9rem;
  height: 1.9rem;
  border-radius: 50%;
  font-style: normal;
  z-index: 1;
  right: -8px;
  top: -5px;
  font-family: Poppins, sans-serif;
  font-size: 1.1rem;
  font-weight: 400;
  line-height: 1.8rem;
  background: #ab8e66;
  color: #fff;
  text-align: center;
}
.cart-dropdown .cart-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  text-transform: uppercase;
  margin-bottom: 1.4rem;
}
.cart-dropdown .cart-header span {
  font-size: 1.6rem;
  font-weight: bold;
  line-height: 1;
  color: #333;
}
.cart-dropdown .cart-header a {
  padding: 0;
  font-size: 1.4rem;
  font-weight: 400;
  color: #666;
  text-transform: capitalize;
}
.cart-dropdown .cart-header i {
  margin-left: 0.6rem;
  font-size: 1.8rem;
}
.cart-dropdown .cart-action {
  display: flex;
}
.cart-dropdown .cart-action .btn {
  width: 50%;
  justify-content: center;
  font-size: 1.3rem;
  line-height: 1;
  padding: 1rem;
}
.cart-dropdown .cart-action .btn:last-child {
  margin-left: 1rem;
}
.cart-dropdown .cart-action .btn-dark:active,
.cart-dropdown .cart-action .btn-dark:focus,
.cart-dropdown .cart-action .btn-dark:hover {
  border-color: #ab8e66;
  background-color: #ab8e66;
  color: #fff;
}
.cart-dropdown .cart-total {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 1rem;
  padding: 1.8rem 0;
  font-size: 1.4rem;
  font-weight: 600;
  color: #333333;
  line-height: 1;
  text-transform: capitalize;
  letter-spacing: -0.025em;
}
.cart-dropdown .cart-total .price {
  font-size: 1.6rem;
}
.cart-dropdown .dropdown-box {
  padding: 1rem 3rem 3rem;
  min-width: 30rem;
  margin-top: 0.5rem;
}
.cart-dropdown .product-price {
  color: #ab8e66;
  overflow: visible;
}
.cart-dropdown .products {
  max-height: 28rem;
  border-bottom: 1px solid #eee;
  padding-bottom: 2.1rem;
}
.cart-dropdown.cart-offcanvas .dropdown-box {
  position: fixed;
  top: 0;
  right: -34rem;
  max-width: 34rem;
  margin-top: 0;
  padding: 2.4rem 2rem 2rem;
  width: 100%;
  height: 110vh;
  min-width: auto;
  padding: 2.9rem 3rem;
  opacity: 1;
  visibility: visible;
  transition: right 0.3s;
  transform: none;
  z-index: 2499;
  box-shadow: none;
}
.cart-dropdown.cart-offcanvas .products {
  border-top: 1px solid #eee;
}
.cart-dropdown.cart-offcanvas.opened .dropdown-box {
  right: 0;
}
.cart-dropdown.cart-offcanvas.opened .cart-overlay {
  opacity: 1;
  visibility: visible;
}
.cart-dropdown .cart-overlay {
  position: fixed;
  left: 0;
  width: 100vw;
  top: -10vh;
  height: 120vh;
  background: rgba(0, 0, 0, 0.3);
  z-index: 2498;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s;
}
.product.product-cart {
  display: flex;
  align-items: center;
  position: relative;
  padding: 2rem 0 0;
}
.product.product-cart .product-media {
  max-width: 8rem;
  flex: 0 0 8rem;
}
.product.product-cart .product-media a {
  display: block;
  padding: 0;
}
.product.product-cart .product-detail {
  flex: 1;
}
.product.product-cart .product-name {
  white-space: normal;
  padding: 0;
  font-size: 1.4rem;
  line-height: 1.4;
  margin-bottom: 1rem;
}
.product.product-cart .price-box {
  display: flex;
  align-items: center;
}
.product.product-cart .product-quantity {
  margin-right: 0.7rem;
  font-size: 1.6rem;
  font-weight: 400;
  color: #999;
}
.product.product-cart .product-quantity:after {
  content: "x";
  font-size: 1.8rem;
  font-weight: 400;
  margin-left: 0.7rem;
  text-transform: none;
  line-height: 0;
}
.product.product-cart .btn-close {
  position: absolute;
  top: 0.9rem;
  right: -1rem;
  width: 2rem;
  height: 2rem;
  border-radius: 50%;
  box-shadow: 0px 3px 5px 2px rgba(0, 0, 0, 0.2);
  color: #333;
  background-color: #fff;
  padding-bottom: 0;
}
.product.product-cart .btn-close:hover {
  color: #ab8e66;
}
.product.product-cart .btn-close i {
  font-size: 1.2rem;
  font-weight: 600;
  margin: 0;
  line-height: 1.7rem;
}
.category-dropdown > a {
  background: #ab8e66;
  min-width: 28rem;
  padding: 1.9rem 2rem 1.8rem 2.2rem;
  letter-spacing: -0.015em;
  transition: all 0.3s;
  text-transform: capitalize;
}
.category-dropdown > a i {
  margin-bottom: 0.1rem;
  font-size: 1.7rem;
  line-height: 0;
}
.category-dropdown > a span {
  flex: 1;
  margin-left: 0.7rem;
}
.category-dropdown > a:after {
  font-family: "wolmart";
  content: "";
  font-weight: 600;
  font-size: 0.9rem;
}
.category-dropdown > a:not(.btn):hover {
  color: #fff;
}
.category-dropdown.show > a,
.category-dropdown:hover > a {
  color: #fff;
  background-color: #ab8e66;
}
.category-dropdown .dropdown-box {
  padding: 0;
  left: 0;
  min-width: 24rem;
  color: #333;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  transition: z-index 0.3s, transform 0.3s;
  visibility: hidden;
  opacity: 0;
  transform: translate3d(0, -1rem, 0);
  top: 100%;
}
.category-dropdown:after,
.category-dropdown:before {
  left: 25px;
  transform: translate3d(50%, 0, 0);
}
.category-dropdown:after {
  border-bottom-color: #f4f4f4;
  visibility: hidden;
  opacity: 0;
  top: calc(100% - 20px);
}
.category-dropdown.menu-fixed .dropdown-box,
.category-dropdown.menu-fixed:after {
  visibility: hidden;
  opacity: 0;
}
.category-dropdown.dropdown.show .dropdown-box {
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.category-dropdown.dropdown.show .dropdown-box,
.category-dropdown.dropdown.show:after {
  visibility: visible;
  opacity: 1;
}
.category-dropdown.has-border .category-toggle {
  border-left: 1px solid #eee;
  border-right: 1px solid #eee;
}
.category-dropdown.show-dropdown .dropdown-box {
  border-radius: 0.5rem;
}
.category-dropdown.show-dropdown .dropdown-box:before {
  content: "";
  position: absolute;
  bottom: 100%;
  left: 1.7rem;
  border: 10px solid transparent;
  border-bottom: 10px solid #f5f5f5;
}
.category-dropdown.show-dropdown .dropdown-box .category-menu {
  background-color: #f5f5f5;
  border-radius: 0.5rem;
}
@media (max-width: 1199px) {
  .category-dropdown > a {
    min-width: 24rem;
  }
}
@media (max-width: 991px) {
  .cart-dropdown .cart-label {
    display: none;
  }
}
@media (max-width: 479px) {
  .cart-dropdown.cart-offcanvas .dropdown-box {
    max-width: 28rem;
  }
}
.menu {
  display: flex;
  align-items: center;
}
.menu a {
  display: inline-block;
  color: inherit;
}
.menu a:hover {
  color: #ab8e66;
}
.menu .menu-title {
  margin-bottom: 2rem;
  font-size: 1.4rem;
  font-weight: 600;
  line-height: 1;
  letter-spacing: -0.025em;
  text-transform: uppercase;
}
.menu .submenu {
  padding: 2rem 0;
  background: #fff;
  font-family: Poppins, sans-serif;
  font-size: 1.4rem;
  font-weight: 400;
  line-height: 1;
  letter-spacing: 0;
  color: #666666;
}
.menu .submenu .has-submenu > a:after {
  content: "";
  font-weight: 600;
  font-size: 0.9rem;
  transform: translateY(-50%);
}
.menu li {
  position: relative;
  line-height: 1;
}
.menu li a {
  padding: 0.7rem 0 0.8rem 0;
}
.menu li .megamenu,
.menu li ul {
  position: absolute;
  top: -9999px;
  left: 100%;
  margin: 0;
  box-shadow: 0 2px 35px rgba(0, 0, 0, 0.1);
  z-index: 1001;
  visibility: hidden;
  opacity: 1;
  transition: transform 0.3s ease-out;
  transform: translate3d(0, -10px, 0);
}
.menu li .megamenu {
  padding: 0 1rem;
}
.menu li > .submenu {
  min-width: 21.5rem;
}
.menu li > .submenu li {
  padding: 0 1.9rem;
}
.menu .show .megamenu,
.menu .show > .submenu,
.menu li:hover .megamenu,
.menu li:hover > .submenu {
  visibility: visible;
  top: -2rem;
  transform: translate3d(0, 0, 0);
}
.menu > li {
  margin-right: 3rem;
}
.menu > li:last-child {
  margin-right: 0;
}
.menu > li > a {
  position: relative;
  padding: 1.8rem 0 1.7rem 0;
  font-weight: 600;
  font-size: 1.4rem;
  letter-spacing: -0.009em;
  line-height: 1.1;
  text-transform: capitalize;
}
.menu > li > a:after {
  margin-left: 0.6rem;
}
.menu > li .megamenu,
.menu > li > .submenu {
  left: -1.5rem;
}
.menu > li.active > a:not(.menu-title),
.menu > li:hover > a:not(.menu-title) {
  color: #fff;
}
.menu > li.show .megamenu,
.menu > li.show > .submenu,
.menu > li:hover .megamenu,
.menu > li:hover > .submenu {
  top: 100%;
}
.menu .has-submenu > a {
  display: block;
  position: relative;
}
.menu > .has-submenu > a:after {
  margin-top: 1px;
  right: -16px;
}
.menu.no-arrow > li > a:after {
  content: none;
}
.menu .megamenu ul {
  position: static;
  box-shadow: none;
  visibility: visible;
  opacity: 1;
}
.active-underline > li > a:before {
  content: "";
  position: absolute;
  left: 0;
  margin-top: 17px;
  width: 100%;
  border-top: 3px solid;
  border-color: inherit;
  transform-origin: right center;
  transform: scale(0, 1);
  transition: transform 0.3s ease;
}
.active-underline > li.active > a:before,
.active-underline > li:hover > a:before {
  transform-origin: left center;
  transform: scale(1, 1);
}
.has-submenu > a:after {
  display: inline-block;
  position: absolute;
  right: 0;
  top: 50%;
  line-height: 0;
  vertical-align: middle;
  font-family: "Font Awesome 5 Free";
  font-size: 1rem;
  color: inherit;
  content: "";
}
.megamenu {
  display: flex;
  min-width: 80rem;
  background: #fff;
}
.megamenu > li {
  flex: 1;
  padding: 2.7rem 1rem 0;
}
.megamenu > li.row:last-child {
  padding: 0 2rem 2rem 0;
}
.megamenu ul {
  font-size: 1.4rem;
  font-weight: 400;
  color: #666;
  padding: 0;
  letter-spacing: 0;
}
.megamenu ul:last-child {
  margin-bottom: 1rem;
}
.megamenu-sm {
  min-width: 40rem;
}
.megamenu .menu-banner {
  height: calc(100% + 2.7rem);
  margin: -2.7rem -1rem 0;
  overflow: hidden;
}
.megamenu .menu-banner figure {
  height: 100%;
}
.megamenu .menu-banner img {
  height: 100%;
  object-fit: cover;
}
.megamenu .menu-banner .btn:not(.btn-outline) {
  padding: 0;
  letter-spacing: 0.005em;
}
.menu-banner1 .banner-content {
  left: 10%;
  bottom: 5%;
}
.menu-banner1 .banner-subtitle {
  font-size: 7.187rem;
  letter-spacing: -0.05em;
  transform: rotateZ(-90deg) translate(2%, -50%);
  margin-bottom: 35px;
}
.menu-banner1 .banner-title {
  position: relative;
  margin-bottom: 1.1rem;
  font-size: 2.4rem;
  letter-spacing: -0.05em;
  line-height: 1.3;
}
.menu-banner1 .banner-title span {
  display: block;
  font-size: 2.6rem;
  color: #547ca5;
}
.menu-banner2 .banner-content {
  top: 8%;
  left: 12.7%;
}
.menu-banner2 .banner-price-info {
  font-weight: 500;
}
.menu-banner2 .banner-title {
  font-size: 2.5rem;
  line-height: 1.2;
  margin-bottom: 1.4rem;
}
.menu-banner3 .banner-content {
  bottom: 2.8rem;
  left: 12.8%;
}
.menu-banner3 .banner-subtitle {
  font-size: 1.6rem;
}
.menu-banner3 .banner-title {
  margin-bottom: 0.1rem;
  font-size: 2.4rem;
  line-height: 1.25;
}
.menu-banner3 .banner-price-info {
  margin-bottom: 2.3rem;
  font-size: 2rem;
}
.menu-banner4 .banner-content {
  top: 6.9%;
  left: 12.7%;
}
.menu-banner4 .banner-subtitle {
  margin-bottom: 1.1rem;
  font-size: 1.4rem;
  color: #ccc;
}
.menu-banner4 .banner-title {
  margin-bottom: 0.3rem;
  font-size: 2.2rem;
  line-height: 1.1;
}
.menu-banner4 .banner-price-info {
  margin-bottom: 1.6rem;
  font-size: 2.2rem;
}
.menu-banner4 .btn-outline {
  padding: 0.75em 1.45em;
  letter-spacing: 0;
}
.menu-banner4 .btn-outline:active,
.menu-banner4 .btn-outline:focus,
.menu-banner4 .btn-outline:hover {
  color: #ab8e66;
  background-color: #fff;
  border-color: #fff;
}
.menu-banner5 .banner-content {
  margin-top: -0.2rem;
  left: 2rem;
}
.menu-banner5 .banner-content.text-right {
  right: 2rem;
}
.menu-banner5 .banner-subtitle {
  font-size: 1.3rem;
  margin-bottom: 0.4rem;
}
.menu-banner5 .banner-title {
  margin-bottom: 1.4rem;
  font-size: 2rem;
}
.menu-banner5 .banner-price-info {
  font-size: 1.3rem;
}
.tip {
  display: inline-block;
  position: relative;
  top: -1px;
  left: 7px;
  padding: 0.3rem 0.5rem 0.2rem;
  border-radius: 0.2rem;
  font-size: 1rem;
  font-weight: 600;
  line-height: 1;
  color: #fff;
  text-transform: uppercase;
}
.tip.tip-new {
  background-color: #ab8e66;
}
.tip.tip-hot {
  background-color: #ff9742;
}
.mobile-menu-wrapper {
  visibility: hidden;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 2400;
  font-family: Poppins, sans-serif;
  transition: visibility 0.4s;
}
.mobile-menu-container {
  max-width: 296px;
  padding: 2rem 1.5rem;
  width: 100%;
  height: 100%;
  overflow-y: auto;
  background: #222;
  box-shadow: 1px 0 5px rgba(0, 0, 0, 0.5);
  transform: translateX(-296px);
  transition: transform 0.4s;
}
.mobile-menu-container .input-wrapper {
  display: flex;
  margin-bottom: 3rem;
  align-items: center;
}
.mobile-menu-container .input-wrapper .form-control {
  min-height: 4rem;
  padding-top: 0.9rem;
  padding-bottom: 0.8rem;
  color: #777;
  border: 1px solid;
  border-color: #333;
  border-right: 0;
  background-color: transparent;
  font-size: 1.2rem;
  border-radius: 0.3rem 0 0 0.3rem;
}
.mobile-menu-container .input-wrapper .btn-search {
  padding: 0;
  min-width: 4.8rem;
  background-color: transparent;
  color: #fff;
  font-size: 2rem;
  align-self: stretch;
  border: 1px solid #333;
  border-left: 0;
  border-radius: 0 0.3rem 0.3rem 0;
}
.mobile-menu-container .input-wrapper .btn-search i {
  margin: 0 0 0.4rem 0;
}
.mobile-menu-container .mobile-menu {
  margin-top: 0.4rem;
  margin-bottom: 0.5rem;
  background: #222;
}
.mobile-menu-container .tab-content {
  background-color: transparent;
}
.mobile-menu-container .nav {
  border: none;
  flex-wrap: nowrap;
}
.mobile-menu-container .nav .nav-item {
  margin: 0;
  width: 50%;
}
.mobile-menu-container .nav-link {
  margin-bottom: -2px;
  padding: 1rem;
  font-size: 1.3rem;
  color: #fff;
  border-bottom: 2px solid;
}
.mobile-menu-container .nav-item .nav-link.active,
.mobile-menu-container .nav-item.show .nav-link {
  color: #ab8e66;
  border-color: #ab8e66;
}
.mobile-menu-container.scrollable::-webkit-scrollbar-thumb,
.mobile-menu-container .sidebar-content::-webkit-scrollbar-thumb {
  margin-right: 2px;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 7px;
  cursor: pointer;
}
.mobile-menu-container .tab-pane {
  font-size: 1.2rem;
  font-weight: 400;
  color: #fff;
}
.mobile-menu {
  line-height: 1.5;
  color: #eeeeee;
  text-transform: capitalize;
  font-size: 1.2rem;
  font-weight: 400;
  line-height: 1.5;
}
.mobile-menu ul {
  display: none;
  width: 100%;
}
.mobile-menu > li a {
  display: flex;
  align-items: center;
}
.mobile-menu > li a svg {
  width: 15px;
  height: 15px;
  margin-right: 10px;
  stroke: #fff;
  fill: #fff;
  vertical-align: middle;
  transition: color 0.3s;
}
.mobile-menu > li.active svg,
.mobile-menu > li:hover svg {
  stroke: #ffb639;
  fill: #ffb639;
}
.mobile-menu > li:last-child {
  padding-bottom: 0.5rem;
}
.mobile-menu > li:not(:last-child) {
  border-bottom: 1px solid #2e3237;
}
.mobile-menu li a {
  display: block;
  position: relative;
  padding: 1.3rem 0.6rem 1.3rem 1rem;
  color: inherit;
  transition: color 0.3s;
}
.mobile-menu li i {
  display: inline-block;
  margin-top: -0.3rem;
  margin-right: 1rem;
  font-size: 1.8rem;
  line-height: 0;
  vertical-align: middle;
}
.mobile-menu li li a {
  padding-left: 2.4rem;
}
.mobile-menu li li li a {
  padding-left: 3.6rem;
}
.mobile-menu li.expanded > a,
.mobile-menu li.show > a,
.mobile-menu li:hover > a {
  color: #ab8e66;
}
.mobile-menu-title {
  margin-bottom: 0.5rem;
  text-transform: uppercase;
  font-size: 1.4rem;
  font-weight: 600;
  color: #fff;
}
.mobile-menu-overlay {
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  background: #000;
  opacity: 0;
  transition: opacity 0.4s;
}
.mobile-menu-close {
  position: fixed;
  left: calc(100vw - 35px);
  top: 25px;
  transition: opacity 0.3s;
  opacity: 0;
  z-index: 1;
}
.mobile-menu-close i {
  font-size: 2.8rem;
  color: #e1e1e1;
}
.mmenu-active {
  overflow: hidden;
}
.mmenu-active .mmenu-anim,
.mmenu-active .mmenu-anim > li {
  opacity: 1;
  transform: translateY(0);
}
.mmenu-active .page-wrapper {
  margin-left: 296px;
  margin-right: -296px;
}
.mmenu-active .mobile-menu-wrapper {
  visibility: visible;
}
.mmenu-active .mobile-menu-container {
  transform: translateX(0);
}
.mmenu-active .mobile-menu-overlay {
  opacity: 0.5;
}
.mmenu-active .mobile-menu-close {
  opacity: 1;
}
.toggle-btn {
  display: block;
  position: absolute;
  padding: 6px;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  opacity: 0.6;
}
.toggle-btn:before {
  content: "";
  display: block;
  font-size: 0.8rem;
  font-weight: 600;
  font-family: "wolmart";
  line-height: 1;
  transition: transform 0.5s;
}
.show > a .toggle-btn:before {
  transform: rotate(630deg);
}
.category-menu {
  padding: 1rem 0;
  background: #fff;
}
.category-menu i {
  display: inline-block;
  vertical-align: middle;
  line-height: 0;
  margin-right: 0.7rem;
  font-size: 1.6rem;
  width: 1.7rem;
  margin-top: -0.2rem;
}
.category-menu > li > a {
  display: block;
  padding: 1.3rem 1rem 1.3rem 1.1rem;
  text-transform: capitalize;
  font-size: 1.3rem;
  font-weight: 400;
  line-height: 1.1;
  letter-spacing: -0.007em;
  color: #666666;
}
.category-menu > li > a:before {
  content: none;
}
.category-menu > li:not(:last-child) > a {
  border-bottom: 1px solid #eeeeee;
}
.category-menu > li:last-child > a i {
  margin: 0 0 0 0.4rem;
  font-size: 1.2rem;
  font-weight: 600;
}
.category-menu li .megamenu {
  padding: 0 0 0 2rem;
}
.category-menu li:last-child {
  flex: none;
}
.category-menu li:hover > a:not(.menu-title) {
  color: #ab8e66;
}
.category-menu li:hover > a:not(.menu-title) i {
  color: inherit;
}
.category-menu > .has-submenu:hover > a:after {
  right: 0.5rem;
}
.category-menu .megamenu {
  min-width: 68.5rem;
}
.category-menu .megamenu > li:not(:last-child) {
  padding: 2.8rem 2rem 0 0rem;
}
.category-menu .megamenu .menu-title {
  font-size: 1.4rem;
  margin-bottom: 1.3rem;
}
.category-menu .megamenu .divider {
  border: 1px solid #eeeeee;
  border-bottom: 0px;
  margin: 0.5rem 0 2rem;
}
.category-menu .megamenu li a:not(.btn) {
  padding-top: 0.8rem;
}
.category-menu .megamenu.type2 {
  display: block;
}
.category-menu .megamenu.type2 figure {
  text-align: center;
}
.vertical-menu {
  display: block;
  min-width: 24rem;
}
.vertical-menu i.w-icon-electronics,
.vertical-menu i.w-icon-furniture {
  font-size: 1.5rem;
  text-align: center;
}
.vertical-menu > li {
  margin-right: 0;
  padding: 0 1rem;
}
.vertical-menu > li .megamenu,
.vertical-menu > li > ul {
  transform: translate3d(-15px, 0, 0);
}
.vertical-menu > li > a {
  display: block;
}
.vertical-menu > li > a:after {
  content: none;
}
.vertical-menu > li.active .megamenu,
.vertical-menu > li.active > ul,
.vertical-menu > li:hover .megamenu,
.vertical-menu > li:hover > ul {
  left: 100%;
  top: 0rem;
}
.vertical-menu > li:first-child.active .megamenu,
.vertical-menu > li:first-child.active > ul,
.vertical-menu > li:first-child:hover .megamenu,
.vertical-menu > li:first-child:hover > ul {
  top: -1rem;
}
.vertical-menu > .has-submenu > a:after {
  content: "";
  position: absolute;
  right: 1rem;
  line-height: 0;
  font-weight: 600;
  font-size: 1.2rem;
  transition: right 0.3s;
}
.horizontal-menu {
  width: 100%;
  padding: 1rem 3.2rem;
  background-color: #333;
  border-radius: 0.5rem;
  color: #fff;
  overflow-x: auto;
}
.horizontal-menu > li {
  flex: 1;
  margin-right: 3.05rem;
  text-align: center;
}
.horizontal-menu > li:not(:last-child) > a {
  border-bottom: none;
}
.horizontal-menu > li > a {
  padding: 0.8rem 1rem;
  font-size: 1.2rem;
  font-weight: 400;
  letter-spacing: 0;
}
.horizontal-menu > li:hover i {
  transform: translateY(-0.5rem);
}
.horizontal-menu > li:last-child > a i {
  margin: 0 0 0.9rem;
  font-size: 3rem;
  font-weight: 400;
}
.horizontal-menu i {
  display: block;
  width: auto;
  height: 3rem;
  margin: 0 0 0.9rem;
  font-size: 3rem;
  line-height: inherit;
  transition: transform 0.3s;
}
.horizontal-menu::-webkit-scrollbar {
  width: 7px;
  height: 7px;
}
.horizontal-menu::-webkit-scrollbar-thumb {
  background: rgba(255, 255, 255, 0.2);
  border-radius: 10px;
}
@media (min-width: 1200px) {
  .category-menu .megamenu.type2 {
    min-width: 88rem;
  }
}
@media (max-width: 1199px) {
  .main-nav .menu .megamenu {
    left: -18rem;
  }
  .category-menu .megamenu.type2 {
    min-width: 70rem;
  }
}
.footer {
  font-family: Poppins, sans-serif;
  font-size: 1.3rem;
  background: #333;
}
.footer a {
  color: #fff;
}
.footer a.active,
.footer a:active,
.footer a:hover {
  color: #ab8e66;
}
.footer.footer-dark a.active,
.footer.footer-dark a:active,
.footer.footer-dark a:hover {
  color: #fff;
}
.footer p {
  font-size: inherit;
}
.footer .category-name {
  font-weight: 600;
  font-size: 1.4rem;
  color: #666;
  line-height: 1;
  letter-spacing: 0;
  padding-right: 2rem;
  margin-bottom: 1rem;
  flex-shrink: 0;
}
.footer .category-box {
  flex-wrap: wrap;
  display: inline-flex;
  align-items: center;
}
.footer .category-box:not(:last-child) {
  margin-bottom: 1.4rem;
}
.footer .category-box a {
  font-weight: normal;
  font-size: 1.3rem;
  letter-spacing: 0;
  color: #666;
  line-height: 1;
  margin-bottom: 1rem;
  position: relative;
}
.footer .category-box a:active,
.footer .category-box a:focus,
.footer .category-box a:hover {
  color: #ab8e66;
}
.footer .category-box a:last-child:before {
  width: 100%;
}
.footer .category-box a:after {
  content: "";
  display: inline-block;
  width: 1px;
  height: 13px;
  border-left: 1px solid #ccc;
  margin: 0px 0.9rem 0 1rem;
  vertical-align: bottom;
}
.footer .category-box a:last-child:after {
  content: none;
}
.footer .social-icons-colored .social-icon {
  color: #fff;
}
.logo-footer,
.logo-footer img {
  display: block;
}
.footer-newsletter {
  padding: 2.8rem 0;
}
.footer-newsletter .icon-box-side {
  justify-content: left;
}
.footer-newsletter .icon-box-title {
  margin-bottom: 0.2rem;
  font-size: 1.6rem;
}
.footer-newsletter .icon-box-icon {
  margin-right: 2rem;
  margin-bottom: 0.4rem;
}
.footer-newsletter .icon-box-icon i {
  font-size: 4.7rem;
}
.footer-newsletter .icon-box-content p {
  line-height: 1.6;
}
.footer-newsletter .input-wrapper-inline {
  max-width: 100%;
}
.footer-newsletter .btn {
  padding: 0.93em 1.85em;
}
.footer-newsletter .btn i {
  margin: -0.2rem 0 0 0.9rem;
  font-size: 1.6rem;
}
.footer-top {
  padding: 6.8rem 0 0.8rem;
  border-bottom: 1px solid #eee;
}
.footer-top .widget {
  margin-bottom: 4rem;
}
.footer-top .widget-title {
  padding: 0 0 0.6rem 0;
  margin-bottom: 2rem;
  font-family: inherit;
  font-size: 1.4rem;
  font-weight: 600;
  letter-spacing: 0;
  line-height: 1;
  text-transform: uppercase;
  color: #fff;
  border: none;
  cursor: text;
}
.footer-top .widget-body {
  padding: 0;
  color: #666;
}
.footer-top .widget-body li {
  line-height: 1.2;
  margin-bottom: 1.5rem;
}
.footer-middle {
  padding: 4.5rem 0 3.8rem;
  border-bottom: 1px solid #eee;
}
.footer-bottom {
  padding: 3rem 0;
  color: #666;
}
.footer-bottom,
.footer-bottom .container,
.footer-bottom .container-fluid {
  display: flex;
  align-items: center;
}
.footer-bottom .footer-left,
.footer-bottom .footer-right {
  display: flex;
  align-items: center;
}
.footer-bottom .footer-right {
  justify-content: flex-end;
  flex: 1;
}
.footer .widget-about {
  margin-top: 0.2rem;
}
.footer .widget-about .logo-footer {
  margin-bottom: 1rem;
}
.footer .widget-about .widget-about-title {
  line-height: 2.1;
  margin-bottom: 1rem;
  color: #333;
  font-weight: 500;
}
.footer .widget-about .widget-about-call {
  display: block;
  color: #333;
  font-size: 1.8rem;
  font-weight: 600;
  line-height: 1;
  margin-bottom: 0.9rem;
}
.footer .widget-about .widget-about-call:hover {
  color: #ab8e66;
}
.footer .widget-about .widget-about-desc {
  line-height: 2.15;
  margin-bottom: 2.1rem;
  max-width: 28rem;
}
.footer .copyright {
  font-size: 1.3rem;
  line-height: 1.92;
  margin-bottom: 0;
  text-align: center;
}
.payment img {
  display: block;
}
.payment-label {
  margin-right: 2rem;
}
.sticky-footer {
  display: flex;
  align-items: center;
  padding: 0 4rem;
  background: #fff;
}
.sticky-footer > * {
  flex: 1;
}
.sticky-footer .cart-dropdown {
  position: relative;
}
.sticky-footer .cart-dropdown .dropdown-box {
  top: auto;
  bottom: 100%;
  right: 0;
  min-width: 34rem;
  padding: 2rem 3rem 3rem;
  margin-bottom: 2.1rem;
  transform: translateY(20px);
  transition: transform 0.3s, opacity 0.3s, visibility 0.3s;
}
.sticky-footer .cart-dropdown:hover .dropdown-box {
  transform: translateY(0);
  opacity: 1;
  visibility: visible;
}
.sticky-footer .products {
  border: none;
}
.sticky-footer .product-name a {
  padding: 0;
}
.sticky-footer .cart-total {
  padding-top: 1rem;
}
.sticky-link {
  display: flex;
  flex-direction: column;
  align-items: center;
  color: #666;
  margin: 1.4rem 0 1.3rem;
}
.cart-dropdown .sticky-link i,
.sticky-link i {
  font-size: 2.3rem;
  color: #666;
}
.sticky-link p {
  margin-top: 0.9rem;
  margin-bottom: 0;
  font-size: 1rem;
  line-height: 1;
  letter-spacing: 0.025em;
  text-transform: uppercase;
}
.sticky-link.search-toggle p {
  margin-top: 1rem;
}
.sticky-link:hover {
  color: #ab8e66;
}
.sticky-link:hover i {
  color: inherit;
}
.footer-dark {
  background-color: #222;
}
.footer-dark .category-box a:after,
.footer-dark .footer-middle,
.footer-dark .footer-top {
  border-color: #454545;
}
.footer-dark .category-name,
.footer-dark .widget-about .widget-about-title,
.footer-dark a {
  color: #999;
}
.footer-dark .widget-about .widget-about-call,
.footer-dark .widget-title {
  color: #fff;
}
@media (min-width: 992px) {
  .footer-top .col-lg-3 {
    flex: 0 0 22.22%;
    max-width: 22.22%;
  }
}
@media (min-width: 768px) {
  .sticky-footer {
    display: none;
  }
}
@media (max-width: 991px) {
  .footer-top {
    padding-bottom: 2.7rem;
  }
  .footer-middle .category-box a:first-child {
    margin-left: 0;
  }
  .footer-newsletter .icon-box-side {
    justify-content: center;
  }
}
@media (max-width: 767px) {
  .footer-newsletter .icon-box-icon {
    margin-right: 0;
  }
  .footer-bottom,
  .footer-bottom > .container {
    display: block;
  }
  .footer-bottom .footer-left,
  .footer-bottom .footer-right {
    justify-content: center;
  }
  .footer-bottom .footer-left {
    margin-bottom: 0.2rem;
  }
  .footer-bottom .footer-right {
    flex-direction: column;
  }
  .footer-bottom .payment-label {
    margin: 0 0 1rem 0;
  }
}
@media (max-width: 479px) {
  .sticky-footer {
    padding: 0;
  }
  .sticky-footer .hs-toggle .input-wrapper {
    right: 1rem;
  }
  .sticky-footer .cart-dropdown .dropdown-box {
    min-width: 30rem;
    right: -5.4rem;
  }
  .footer-newsletter .icon-box-side {
    flex-direction: column;
  }
  .footer-newsletter .icon-box-icon {
    margin: 0 0 2rem;
  }
  .footer-newsletter .icon-box-content {
    text-align: center;
  }
  .footer-newsletter .form-control {
    text-align: center;
  }
  .footer-newsletter .input-wrapper-inline {
    display: block;
    text-align: center;
  }
  .footer-newsletter .btn {
    margin-top: 2rem;
  }
}
.header-search input.form-control {
  padding-left: 2rem;
  padding-right: 2rem;
}
.header-bottom .header-right > a {
  padding-bottom: 1.4rem;
}
.category-dropdown .dropdown-box:before {
  content: "";
  position: absolute;
  bottom: 100%;
  left: 1.6rem;
  border: 9px solid transparent;
  border-bottom: 9px solid #fff;
}
.intro-wrapper .swiper-button-next,
.intro-wrapper .swiper-button-prev,
.intro-wrapper:hover .swiper-button-next,
.intro-wrapper:hover .swiper-button-prev {
  margin-top: -2.5rem;
  color: #000 !important;
  opacity: 0.3;
  transition: opacity 0.3s;
}
.intro-wrapper .swiper-button-next:not(.swiper-button-disabled):hover,
.intro-wrapper .swiper-button-prev:not(.swiper-button-disabled):hover,
.intro-wrapper:hover .swiper-button-next:not(.swiper-button-disabled):hover,
.intro-wrapper:hover .swiper-button-prev:not(.swiper-button-disabled):hover {
  opacity: 1;
}
.intro-wrapper .swiper-button-next,
.intro-wrapper:hover .swiper-button-next {
  right: 9.8%;
}
.intro-wrapper .swiper-button-prev,
.intro-wrapper:hover .swiper-button-prev {
  left: 9.8%;
}
.intro-slide {
  min-height: 60rem;
}
.intro-slide .btn {
  padding-left: 1.9em;
  padding-right: 1.9em;
}
.intro-slide1 .banner-content {
  left: 4.9%;
  margin-top: -0.1rem;
}
.intro-slide1 .banner-subtitle {
  font-size: 1.8em;
}
.intro-slide1 .banner-title {
  margin: 0 0 1.6rem -0.2rem;
  font-size: 6em;
  line-height: 0.93;
}
.intro-slide1 strong {
  font-weight: 800;
}
.intro-slide1 p {
  margin-bottom: 3.2rem;
  font-size: 1.6em;
}
.intro-slide2 .container {
  text-align: end;
}
.intro-slide2 .banner-content {
  padding-right: 14.5%;
  margin-top: -0.1rem;
}
.intro-slide2 .banner-subtitle {
  margin-bottom: 1.2rem;
  font-size: 2.8em;
  letter-spacing: -0.02em;
}
.intro-slide2 .banner-title {
  margin-left: -0.2rem;
  font-size: 4em;
  font-weight: 800;
  line-height: 0.98;
}
.intro-slide2 .banner-price-info {
  margin-bottom: 3.6rem;
  font-size: 3em;
}
.floating-item {
  position: absolute !important;
  right: 56%;
  top: 13.9%;
  width: 46rem;
}


.cdown {
	display: inline-block;
	height: 110px;
	width: 110px;
	border-radius: 50%;
	line-height: 110px;
	text-align: center;
	font-weight: 500;
	padding: 28px 0;
	background: #fff;
	margin-right: 15px;
	box-shadow: 0px 16px 32px 0px rgba(224, 226, 255, 0.3);
}
@media (max-width: 767px) {
.cdown {
	margin-right: 10px;
	margin-bottom: 10px; } }
@media only screen and (min-width: 992px) and (max-width: 1200px) {
.cdown {
	height: 90px;
	width: 90px;
	padding: 18px 0; } }

.cdown span {
	font-size: 30px;
	color: #10111e;
	line-height: 1;
	display: block;
	margin-bottom: 10px;
}

.cdown p {
	font-size: 12px;
	color: #747691;
	line-height: 1;
	margin: 0;
	text-transform: uppercase;
	font-weight: 500;
	letter-spacing: 1px;
}

.bakix-map {
  position: relative; }

.bakix-marker {
  position: absolute; }

.map-c1 {
	top: 40%;
	left: 7%;
}
.map-c2 {
	bottom: 26%;
	left: 34%;
}
.map-c3 {
	top: 32%;
	left: 25%;
}
.intro-slide3 .banner-content {
  max-width: 35.7rem;
  right: 8.5%;
  margin-top: -0.2rem;
}
.intro-slide3 .banner-subtitle {
  margin-bottom: 0.7rem;
  font-size: 1.8em;
  font-weight: 500;
}
.intro-slide3 .banner-title {
  margin-bottom: 2.9rem;
  font-size: 5em;
  line-height: 1.1;
}
.icon-box-wrapper {
  border: 1px solid #e1e1e1;
  padding: 2.5rem 0 2.4rem;
}
.category-banner-3cols img {
  min-height: 20rem;
}
.category-banner-3cols .banner-content {
  top: 12%;
  left: 7.1%;
}
.category-banner-3cols .banner-title {
  margin-bottom: 1.1rem;
  font-size: 2.2em;
  line-height: 1.4;
}
.category-banner-3cols span {
  font-weight: 300;
}
.deals-wrapper .title-underline {
  padding: 0 3rem 1.7rem 0;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.deals-wrapper .widget-body .product-widget {
  height: 33.333%;
}
.banner-product-wrapper .widget-body .product-widget-wrap,
.deals-wrapper .widget-body .product-widget-wrap {
  height: 100%;
}
@media (min-width: 992px) {
  .product-gallery-vertical .product-thumbs-wrap {
    max-width: 6rem;
    flex: 0 0 6rem;
  }
  .product-gallery-vertical .product-single-swiper {
    max-width: calc(100% - 7rem);
  }
}
.single-product {
  padding: 2.6rem 1.9rem 2rem 1.8rem;
  border: 1px solid #eee;
  transition: border-color 0.3s;
}
.single-product .product-title {
  font-size: 2rem;
}
.single-product .new-price {
  font-size: 2.4rem;
  line-height: 1.1;
}
.single-product .product-details {
  padding-left: 0;
  padding-top: 0.4rem;
  overflow-y: auto;
}
.single-product .product-divider {
  margin: 0.6rem 0 1rem;
}
.single-product .product-price {
  margin-bottom: 1.3rem;
}
.single-product .product-countdown-container {
  margin-bottom: 1.2rem;
}
.single-product .ratings-container {
  margin-bottom: 2.2rem;
  font-size: 1.3rem;
}
.single-product .ratings,
.single-product .ratings-full {
  letter-spacing: 0.3em;
}
.single-product .product-form label {
  max-width: 3.7rem;
  flex: 0 0 3.7rem;
  font-size: 1.3rem;
}
.single-product .product-size-swatch .size {
  padding-left: 0.85rem;
  padding-right: 0.85rem;
  color: #999;
}
.single-product .product-qty-form {
  flex: 0 0 15.2rem;
  max-width: 15.2rem;
}
.single-product .input-group .form-control {
  padding: 0 1.3rem 0 2rem;
}
.single-product .input-group button {
  right: 1.4rem;
}
.single-product .input-group button + button {
  margin-right: 3.1rem;
}
.single-product .product-form:not(.product-variation-form) {
  border-top: 1px solid #eee;
}
.single-product .social-links-wrapper {
  margin-top: 0.3rem;
}
.single-product .social-links-wrapper .btn-product-icon {
  margin-right: 1.9rem;
  font-size: 1.9rem;
}
.single-product .social-links-wrapper .btn-product-icon.btn-compare {
  font-size: 2.1rem;
}
.ratings-full:before {
  color: #ccc;
}
.rating-reviews {
  color: #999;
}
.product-widget {
  padding: 1rem 0;
}
.product-widget .product-media {
  flex: 0 0 45.5%;
  max-width: 45.5%;
}
.product-widget .product-details {
  flex: 0 0 55.5%;
  max-width: 55.5%;
}
.product-widget .product-name {
  margin-bottom: 0.6rem;
  color: #333;
  font-weight: 500;
}
.product-widget .ratings-container {
  margin-bottom: 0.7rem;
}
.product-widget .product-price {
  font-size: 1.6rem;
}
.widget-products .widget-body {
  padding: 2.6rem 2rem 2.3rem;
  transition: border-color 0.3s;
}
.single-product:hover,
.widget-products.widget-products-bordered .widget-body:hover {
  border-color: #ab8e66;
}
@media (min-width: 1200px) {
  .deals-wrapper .product-details {
    max-height: 40.8rem;
  }
}
@media (min-width: 992px) {
  .deals-wrapper .single-product .product-gallery,
  .deals-wrapper .single-product .product-single-swiper,
  .deals-wrapper .single-product .product-single-swiper .product-image,
  .deals-wrapper .single-product .product-single-swiper img {
    min-height: 34rem;
  }
  .deals-wrapper .single-product .product-details {
    max-height: 34.5rem;
  }
}
.product-countdown-container .product-countdown,
.product-countdown-container label {
  white-space: nowrap;
}
.category-wrapper {
  margin-bottom: 5.2rem;
}
.gutter-sm {
  margin: 0 -2.5px;
}
.gutter-sm > * {
  padding: 0 2.5px;
}
.vendor-widget-2 {
  border-color: #e5e5e5;
}
.category-banner-2cols {
  margin-bottom: 3.9rem;
}
.category-banner-2cols img {
  min-height: 15rem;
}
.category-banner-2cols .banner-content:not(.text-center) {
  left: 6.5%;
}
.category-banner-2cols .banner-content:not(.text-center) .banner-subtitle {
  margin-bottom: 0.2rem;
  font-size: 1.4em;
}
.category-banner-2cols .banner-content:not(.text-center) .banner-title {
  margin-bottom: 0.6rem;
  font-size: 2.6em;
}
.category-banner-2cols .banner-content:not(.text-center) .banner-price-info {
  font-weight: 500;
}
.category-banner-2cols .text-center .banner-subtitle {
  margin-bottom: 0.4rem;
  font-size: 2em;
}
.category-banner-2cols .text-center .banner-title {
  margin-bottom: 0.6rem;
  font-size: 3em;
}
.category-banner-2cols .banner-price-info {
  font-size: 1.6em;
}
.category-banner-2cols .banner-title {
  font-weight: 800;
}
.filter-with-title {
  margin-bottom: 1.1rem;
}
.filter-with-title .title {
  margin-bottom: 0.9rem;
}
#products-1,
#products-2 {
  margin-bottom: 4.1rem;
}
#products-3 {
  margin-bottom: 3.7rem;
}
.banner-lg .banner-content {
  left: 6.6%;
  margin-top: -0.1rem;
}
.banner-lg .banner-subtitle {
  margin-bottom: 0.4rem;
  font-size: 1.6em;
  font-weight: 300;
}
.banner-lg .banner-title {
  margin: 0 0 2.9;
  margin-bottom: 2.9rem;
  font-size: 3em;
  font-weight: 800;
}
.banner-md .banner-content {
  left: 6.5%;
  padding-top: 0.3rem;
}
.banner-md .banner-subtitle {
  margin-bottom: 0.3rem;
  font-size: 1.6em;
}
.banner-md .banner-title {
  font-size: 2.6em;
  font-weight: 800;
  margin-bottom: 1.4rem;
}
.height-x1 {
  height: 22rem;
}
.height-x2 {
  height: 44rem;
}
.grey-section {
  background-color: #f7f7f7;
}
.brand-wrapper {
  border: 1px solid #eee;
}
.brand-wrapper:last-child {
  margin-top: -1px;
}
.brand-col .brand-wrapper {
  border-top: none;
}
.brand-col .brand-wrapper:last-child {
  border-bottom: none;
}
.brand-col:last-child .brand-wrapper {
  margin-right: 1px;
  border-right: none;
}
.brand-col .brand-wrapper {
  border-left: none;
}
.title-link-wrapper a {
  color: #333;
}
.title-link-wrapper a:hover {
  color: #ab8e66;
}
.title-link-wrapper:after {
  content: none;
}
.post-meta a {
  font-size: 1.3rem;
}
@media (max-width: 1199px) {
  .intro-slide2 .banner-content {
    padding-right: 2.5%;
  }
}
@media (max-width: 991px) {
  .intro-slide2 {
    font-size: 0.9rem;
  }
}
@media (max-width: 767px) {
  .floating-item {
    right: auto;
    left: 50%;
  }
  .intro-slide2 .container {
    text-align: start;
  }
  .intro-slide2 .banner-title {
    font-size: 8em;
  }
  .intro-slide3 .banner-content {
    right: 4%;
  }
}
@media (max-width: 575px) {
  .banner {
    font-size: 0.8rem;
  }
  .intro-slide1 .banner-content {
    left: 2%;
  }
}
@media (max-width: 479px) {
  .intro-slide3 .banner-content {
    right: 0;
  }
}
body{margin-top:0px;}
.footer_area {
    position: relative;
    z-index: 1;
    overflow: hidden;
webkit-box-shadow: 0 8px 48px 8px rgba(47, 91, 234, 0.175);
    box-shadow: 0 8px 48px 8px rgba(47, 91, 234, 0.175);
    padding:60px;
}
.footer_area .row {
    margin-left: -25px;
    margin-right: -25px;
}
.footer_area .row .col,
.footer_area .row .col-1,
.footer_area .row .col-10,
.footer_area .row .col-11,
.footer_area .row .col-12,
.footer_area .row .col-2,
.footer_area .row .col-3,
.footer_area .row .col-4,
.footer_area .row .col-5,
.footer_area .row .col-6,
.footer_area .row .col-7,
.footer_area .row .col-8,
.footer_area .row .col-9,
.footer_area .row .col-auto,
.footer_area .row .col-lg,
.footer_area .row .col-lg-1,
.footer_area .row .col-lg-10,
.footer_area .row .col-lg-11,
.footer_area .row .col-lg-12,
.footer_area .row .col-lg-2,
.footer_area .row .col-lg-3,
.footer_area .row .col-lg-4,
.footer_area .row .col-lg-5,
.footer_area .row .col-lg-6,
.footer_area .row .col-lg-7,
.footer_area .row .col-lg-8,
.footer_area .row .col-lg-9,
.footer_area .row .col-lg-auto,
.footer_area .row .col-md,
.footer_area .row .col-md-1,
.footer_area .row .col-md-10,
.footer_area .row .col-md-11,
.footer_area .row .col-md-12,
.footer_area .row .col-md-2,
.footer_area .row .col-md-3,
.footer_area .row .col-md-4,
.footer_area .row .col-md-5,
.footer_area .row .col-md-6,
.footer_area .row .col-md-7,
.footer_area .row .col-md-8,
.footer_area .row .col-md-9,
.footer_area .row .col-md-auto,
.footer_area .row .col-sm,
.footer_area .row .col-sm-1,
.footer_area .row .col-sm-10,
.footer_area .row .col-sm-11,
.footer_area .row .col-sm-12,
.footer_area .row .col-sm-2,
.footer_area .row .col-sm-3,
.footer_area .row .col-sm-4,
.footer_area .row .col-sm-5,
.footer_area .row .col-sm-6,
.footer_area .row .col-sm-7,
.footer_area .row .col-sm-8,
.footer_area .row .col-sm-9,
.footer_area .row .col-sm-auto,
.footer_area .row .col-xl,
.footer_area .row .col-xl-1,
.footer_area .row .col-xl-10,
.footer_area .row .col-xl-11,
.footer_area .row .col-xl-12,
.footer_area .row .col-xl-2,
.footer_area .row .col-xl-3,
.footer_area .row .col-xl-4,
.footer_area .row .col-xl-5,
.footer_area .row .col-xl-6,
.footer_area .row .col-xl-7,
.footer_area .row .col-xl-8,
.footer_area .row .col-xl-9,
.footer_area .row .col-xl-auto {
    padding-right: 25px;
    padding-left: 25px;
}

.single-footer-widget {
    position: relative;
    z-index: 1;
}
.single-footer-widget .copywrite-text a {
    color: #747794;
    font-size: 1rem;
}
.single-footer-widget .copywrite-text a:hover,
.single-footer-widget .copywrite-text a:focus {
    color: #3f43fd;
}
.single-footer-widget .widget-title {
    margin-bottom: 1.5rem;
}
.single-footer-widget .footer_menu li a {
    color: #747794;
    margin-bottom: 1rem;
    display: block;
    font-size: 1rem;
}
.single-footer-widget .footer_menu li a:hover,
.single-footer-widget .footer_menu li a:focus {
    color: #3f43fd;
}
.single-footer-widget .footer_menu li:last-child a {
    margin-bottom: 0;
}

.footer_social_area {
    position: relative;
    z-index: 1;
}
.footer_social_area a {
    border-radius: 50%;
    height: 40px;
    text-align: center;
    width: 40px;
    display: inline-block;
    background-color: #f5f5ff;
    line-height: 40px;
    -webkit-box-shadow: none;
    box-shadow: none;
    margin-right: 10px;
}
.footer_social_area a i {
    line-height: 36px;
}
.footer_social_area a:hover,
.footer_social_area a:focus {
    color: #ffffff;
}

@-webkit-keyframes bi-cycle {
    0% {
        left: 0;
    }
    100% {
        left: 100%;
    }
}

@keyframes bi-cycle {
    0% {
        left: 0;
    }
    100% {
        left: 100%;
    }
}
ol li, ul li {
    list-style: none;
}

ol, ul {
    margin: 0;
    padding: 0;
}