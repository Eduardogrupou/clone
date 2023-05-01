<?php
session_start();
require_once("admin/database.php");

$_SESSION['email']
?>


<style>
    .header {
        font-family: Poppins, sans-serif;
        background: #fff;
        color: #333;

    }

    .header .container,
    .header .container-fluid,
    .header .inner-wrap {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    @media (max-width: 575px) {
        .d-sm-show {
            display: none !important;
        }
    }

    .header .inner-wrap {
        width: 100%;
    }

    .header a:not(.btn) {
        color: inherit;
    }

    .header a:not(.btn) {
        color: #fff;
    }

    .header a:not(.btn):hover {
        color: #ab8e66;
    }

    .header-top,
    .header-middle,
    .header-bottom {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .header-left,
    .header-center,
    .header-right {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .baixar {
        padding-top: 10px;

    }

    .header-right {
        margin-left: auto;
    }

    .has-center .header-right {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
    }

    .has-center .header-right {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
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

    .header-top .header-right>.dropdown:first-child {
        margin-left: 0;
    }

    .header-top .header-right>.dropdown:hover .dropdown-box::before {
        visibility: visible;
        opacity: 1;
        top: auto;
        bottom: 100%;
    }

    .header-top .header-right .dropdown-box::before {
        content: "";
        position: absolute;
        z-index: 1002;
        left: 50%;
        top: -9999px;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        border: 11px solid transparent;
        border-bottom: 11px solid #fff;
        -webkit-transition: opacity 0.2s ease-out, -webkit-transform 0.2s ease-out;
        transition: opacity 0.2s ease-out, -webkit-transform 0.2s ease-out;
        transition: opacity 0.2s ease-out, transform 0.2s ease-out;
        transition: opacity 0.2s ease-out, transform 0.2s ease-out, -webkit-transform 0.2s ease-out;
        visibility: hidden;
        opacity: 0;
        cursor: pointer;
        pointer-events: none;
    }

    .header-top .header-right a {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .header-top .header-right i {
        margin-right: 0.6rem;
        font-size: 1.5rem;
    }

    .header-top .header-right>* {
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

    ul {
        list-style-type: none;
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

    .mb-sm-2 {
        margin-bottom: 1rem !important;
    }

    .header-bottom .header-right>a {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 1.4rem 0 1.3rem;
    }

    .header-bottom .header-right>a i {
        vertical-align: middle;
    }

    .header-bottom .header-right>a i.w-icon-map-marker {
        font-size: 2.2rem;
        margin-top: -0.5rem;
    }

    .header-bottom .header-right>a i.w-icon-sale {
        font-size: 2.4rem;
        margin-right: 0.8rem;
    }

    .header-bottom .header-right>a:first-child {
        margin-right: 3.2rem;
    }

    .header-bottom:not(.fixed) .show-dropdown .dropdown-box {
        opacity: 1;
        visibility: visible;
        -webkit-transform: none;
        transform: none;
        -webkit-box-shadow: none !important;
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
        border-bottom: 1px solid #eee;
    }

    .header-middle .header-left {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
    }

    .account {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-right: 2rem;
    }

    .account .login {
        font-size: 1.3rem;
        line-height: 1.5em;
        color: #999;
        -webkit-transition: color 0.3s;
        transition: color 0.3s;
    }

    .account .w-icon-account {
        color: white;
        width: 5.3rem;
        height: 5.3rem;
        border: 1px solid rgba(238, 238, 238, 0.5);
        font-size: 2.6rem;
        -webkit-transition: border-color 0.3s, color 0.3s;
        transition: border-color 0.3s, color 0.3s;
    }

    .account span {
        color: #ccc;
        -webkit-transition: color 0.3s;
        transition: color 0.3s;
    }

    .account b {
        color: white;
        font-size: 1.5rem;
        -webkit-transition: color 0.3s;
        transition: color 0.3s;
    }

    .account:hover .login,
    .account:hover span,
    .account:hover b {
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
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        min-width: 40px;
        padding: 0.9rem;
        border: 2px solid #ab8e66;
        border-right: 0;
        font-size: 1.2rem;
        letter-spacing: 0;
        font-family: Poppins, sans-serif;
    }

    .header-search input.form-control::-webkit-input-placeholder {
        color: inherit;
    }

    .header-search input.form-control::-moz-placeholder {
        color: inherit;
    }

    .header-search input.form-control:-ms-input-placeholder {
        color: inherit;
    }

    .header-search input.form-control::-ms-input-placeholder {
        color: inherit;
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
        border-color: #ab8e66;
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

    .header-search .btn-search:hover,
    .header-search .btn-search:active,
    .header-search .btn-search:focus {
        color: #ab8e66;
        background-color: transparent;
    }

    .header-search .select-box::before {
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
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        right: -2.5rem;
        top: 100%;
        min-width: 30rem;
        padding: 1.5rem;
        height: auto;
        background-color: #fff;
        -webkit-box-shadow: 0 2px 35px rgba(0, 0, 0, 0.1);
        box-shadow: 0 2px 35px rgba(0, 0, 0, 0.1);
        visibility: hidden;
        opacity: 0;
        -webkit-transform: translate3d(0, 20px, 0);
        transform: translate3d(0, 20px, 0);
        z-index: 100;
        -webkit-transition: visibility 0.3s, opacity 0.3s, -webkit-transform 0.3s;
        transition: visibility 0.3s, opacity 0.3s, -webkit-transform 0.3s;
        transition: transform 0.3s, visibility 0.3s, opacity 0.3s;
        transition: transform 0.3s, visibility 0.3s, opacity 0.3s, -webkit-transform 0.3s;
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
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .header-search.hs-toggle.show .search-toggle::after {
        opacity: 1;
        visibility: visible;
        -webkit-transform: translate(50%, 0);
        transform: translate(50%, 0);
    }

    .header-search.hs-expanded {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        margin: 0 auto;
        min-width: auto;
        max-width: 55.6rem;
    }

    .header-search.hs-expanded .select-box {
        width: 14.6rem;
        border: 2px solid #ab8e66;
        border-right: none;
        color: #666666;
    }

    .header-search.hs-expanded .select-box::after {
        content: "";
        height: 35px;
        width: 1px;
        background: #e5e5e5;
        position: absolute;
        right: 0;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .header-search.hs-expanded input.form-control {
        color: #666;
        border-right: none;
        border-left: none;
    }

    .header-search.hs-expanded .btn-search {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-transition: opacity 0.4s, color 0.4s;
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

    .header-search.hs-rounded .select-box,
    .header-search.hs-rounded .form-control {
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

    .header-search.hs-round .select-box,
    .header-search.hs-round .form-control {
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

    .footer {
        font-family: Poppins, sans-serif;
        font-size: 1.3rem;
        background: #f8f8f8;
    }

    .footer a {
        color: #666;
    }

    .footer a:hover,
    .footer a:active,
    .footer a.active {
        color: #ab8e66;
    }

    .footer.footer-dark a:hover,
    .footer.footer-dark a:active,
    .footer.footer-dark a.active {
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
        -ms-flex-negative: 0;
        flex-shrink: 0;
    }

    .footer .category-box {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
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

    .footer .category-box a:hover,
    .footer .category-box a:active,
    .footer .category-box a:focus {
        color: #ab8e66;
    }

    .footer .category-box a:last-child::before {
        width: 100%;
    }

    .footer .category-box a::after {
        content: "";
        display: inline-block;
        width: 1px;
        height: 13px;
        border-left: 1px solid #ccc;
        margin: 0px 0.9rem 0 1rem;
        vertical-align: bottom;
    }

    .footer .category-box a:last-child::after {
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
        -webkit-box-pack: left;
        -ms-flex-pack: left;
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
        font-size: 0.6rem;
        font-weight: bold;
        letter-spacing: 0;
        line-height: 0.6rem;
        text-transform: uppercase;
        color: #333;
        border: none;
        cursor: text;
    }

    .footer-top .widget-body {
        padding: 0;
        color: #666;
        font-size: 0.4rem;
    }

    .footer-top .widget-body li {
        line-height: 0.6rem;
        margin-bottom: 1.5rem;
    }

    .footer-middle {
        padding: 1.5rem 0 3.8rem;
        border-bottom: 1px solid #eee;
    }

    .footer-bottom {
        padding: 3rem 0;
        color: #666;
    }

    .footer-bottom,
    .footer-bottom .container,
    .footer-bottom .container-fluid {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .footer-bottom .footer-left,
    .footer-bottom .footer-right {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .footer-bottom .footer-right {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-box-flex: 1;
        -ms-flex: 1;
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
        font-size: 0.8rem;
    }

    .footer .copyright {
        font-size: 14px;
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
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 0 4rem;
        background: #fff;
    }

    .sticky-footer>* {
        -webkit-box-flex: 1;
        -ms-flex: 1;
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
        -webkit-transform: translateY(20px);
        transform: translateY(20px);
        -webkit-transition: opacity 0.3s, visibility 0.3s, -webkit-transform 0.3s;
        transition: opacity 0.3s, visibility 0.3s, -webkit-transform 0.3s;
        transition: transform 0.3s, opacity 0.3s, visibility 0.3s;
        transition: transform 0.3s, opacity 0.3s, visibility 0.3s, -webkit-transform 0.3s;
    }

    .sticky-footer .cart-dropdown:hover .dropdown-box {
        -webkit-transform: translateY(0);
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
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        color: #666;
        margin: 1.4rem 0 1.3rem;
    }

    .sticky-link i,
    .cart-dropdown .sticky-link i {
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

    .footer-dark .footer-top,
    .footer-dark .footer-middle,
    .footer-dark .category-box a::after {
        border-color: #454545;
    }

    .footer-dark a,
    .footer-dark .widget-about .widget-about-title,
    .footer-dark .category-name {
        color: #999;
    }

    .footer-dark .widget-about .widget-about-call,
    .footer-dark .widget-title {
        color: #fff;
    }

    @media (min-width: 992px) {
        .footer-top .col-lg-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 22.22%;
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
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }
    }

    @media (max-width: 767px) {
        .footer-newsletter .icon-box-icon {
            margin-right: 0;
        }

        .footer-bottom,
        .footer-bottom>.container {
            display: block;
        }

        .footer-bottom .footer-left,
        .footer-bottom .footer-right {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .footer-bottom .footer-left {
            margin-bottom: 0.2rem;
        }

        .footer-bottom .footer-right {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
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
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
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
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets2/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">
    <title>
        Nossos Planos
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="assets2/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets2/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/steps.planos.css" rel="stylesheet" />
</head>

<body>



<header class="header " >
    <div class="row"  style="background-color: #333; height:60px !important; ">


        <div class="col-lg-5 col-md-3 col-sm-12 mb-md-3 mt-4">
            <a href="index.php" class="logo" style="width: fit-content;">

                <img src="assets/images/logo.png" class="d-lg-none d-md-none d-flex justify-content-center" style="width: 150px; height: 35px; margin-left:auto; margin-right:auto; margin-top:-10px !important">

                <img src="assets/images/logo.png" class="d-sm-show d-xs-show   " style="width: 163px; height: 35px; margin-top:-10px; padding-left:20px">
            </a>
        </div>

        <!-- End of Change Log -->

        <!-- End Of Header Left -->
        <div class=" col-lg-7 col-md-9 d-flex justify-content-end ">

            <nav class="header-right" style="color: #fff; margin-bottom: 2% ">
                <ul class="menu d-none d-lg-flex d-md-flex">
                    <li class="baixar"><a href="index.php">Home</a></li>
                    <li class="baixar"><a href="perfumes.php">Catálogo
                            de perfumes</a></li>
                    <li class="baixar"><a href="contact-us.php">Fale
                            conosco</a></li>

                    <li class="baixar"><a href="planos.php">Planos</a></li>

                    <?php
                    if (isset($_SESSION['email'])) {
                    ?>


                        <li class="baixar"><a href="dashboard.php">
                                Minha Conta</a></li>

                    <?php
                    } else {
                    ?>


                    <?php
                    }
                    ?>



                    <?php
                    if (isset($_SESSION['email'])) {
                    ?>
                        <li style="margin-right: 20px;" class="menu-item ">
                            <a href="action.php?logout=1" class="stelina-menu-item-title" title="Blogs">Sair</a>
                            <span class="toggle-submenu"></span>
                        </li>

                    <?php
                    } else {
                    ?>

                        <li class="baixar"><a href="login.php"> <i class="w-icon-account"></i>
                                Entrar</a></li>
                        <li style="margin-right: 25px;" class="baixar"><a href="login.php"> <i class="w-icon-account"></i>
                                Cadastre-se</a></li>

                    <?php } ?>

                </ul>
                <!-- End of Menu -->

            </nav>
        </div>
        <!-- End of Header Right -->
    </div>
    </div>

</header>











    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->


    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->

    <!--   Core JS Files   -->
    <script src="assets2/js/core/popper.min.js"></script>
    <script src="assets2/js/core/bootstrap.min.js"></script>
    <script src="assets2/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets2/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="assets2/js/plugins/parallax.min.js"></script>
    <script>
        if (document.getElementsByClassName('page-header')) {
            window.onscroll = debounce(function() {
                var scrollPosition = window.pageYOffset;
                var bgParallax = document.querySelector('.page-header');
                var oVal = (window.scrollY / 3);
                bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
            }, 6);
        }
    </script>
    <!-- Kanban scripts -->
    <script src="assets2/js/plugins/dragula/dragula.min.js"></script>
    <script src="assets2/js/plugins/jkanban/jkanban.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets2/js/material-dashboard.min.js?v=3.0.5"></script>
</body>

</html>